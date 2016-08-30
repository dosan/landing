<?php

require('Model.php');

class Services extends Model{

	private $_db;
	protected $_sql;

	public function table(){
		return 'services';
	}

	// Найти всех услуг в базе
	public function findAll() {
		$this->_sql = 'SELECT * FROM '.$this->table();
		$query = $this->db()->query($this->_sql, PDO::FETCH_ASSOC);
		return $query->fetchAll();
	}

}
