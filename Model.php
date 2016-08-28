<?php

class Model{

	private $db;
	private $_table = 'services';
	private $queryString;

	# Соединяемся с БД
	public function __construct(){
		$this->db = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST, 'root', '');
		$this->db->exec("set names UTF8");
		return $this->db;
	}

	/**
	 * вернет все записи
	 */
	public function find($cond) {
		$sql = 'SELECT * FROM '.$this->_table;
		if (gettype($cond) === 'array') {
			$where = '';
			foreach ($cond as $key => $value) {
				$where .= $where ? ' AND ' : '';
				$wheer .= $key.' = '.$value;
			}
			$sql .= ' WHERE '.$where;
		}
		$this->queryString = $this->db->query($sql, PDO::FETCH_ASSOC);
		return $this->queryString;
	}

	public function all(){
		return $this->queryString->fetchAll();
	}

}
