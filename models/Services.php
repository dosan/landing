<?php

class Services{

	private $_db;
	private $_table = 'services';
	protected $_sql;

	// Соединяемся с базой данных
	public function __construct(){
		$this->_db = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST, DB_USER, DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
		$this->_db->exec("set names UTF8");
		return $this->_db;
	}

	// Найти всех услуг в базе
	public function findAll() {
		$this->_sql = 'SELECT * FROM '.$this->_table;
		$query = $this->_db->query($this->_sql, PDO::FETCH_ASSOC);
		return $query->fetchAll();
	}


}
