<?php

abstract class Model{

	private $_db;
	protected $_sql;
	public $attrs = [];
	public $errors = [];

	// Соединяемся с базой данных
	public function __construct(){
		$this->_db = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST, DB_USER, DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
		$this->_db->exec("set names UTF8");
		return $this->_db;
	}

	/**
	 *  Создаем абстрактный метод
	 *  Переопределить в дочерних классах
	 */
	abstract public function table();

	/**
	 * Доступ к базе данных
	 * @return PDO object;
	 */
	public function db(){
		return $this->_db;
	}

	/**
	 * Вернет данне в массиве
	 */
	public function findAll() {
		$this->_sql = 'SELECT * FROM '.$this->table();
		$query = $this->db()->query($this->_sql, PDO::FETCH_ASSOC);
		return $query->fetchAll();
	}

	/**
	 * Проверяеть правильность входных данных
	 * @param array[attr=>val, attr2=>val2]
	 * @return array[isValid, errors[attr=>error_message]]
	 */
	public function validate($attrs){
		$validator = new Validators;
		$rules = $this->rules();
		foreach ($attrs as $key => $value) {
			if (isset($rules[$key])) {
				foreach ($rules[$key] as $rule) {
					if(isset($this->errors[$key]))
						continue;
					$r = explode(':', $rule);
					$rule = $r[0];
					if(count($r)>1)
						array_shift($r);
					if (method_exists($validator, $rule)){
						$res = count($r) ? $validator->$rule($value, $r) : $validator->$rule($value);
						if(!$res['isValid'])
							$this->errors[$key] = $res['message'];
					}else
						throw new Exception('"'.$rule.'" this validator does not exists please create in Validator.php');
				}
			}
		}
		if (empty($this->errors)) {
			return ['isValid'=>1];
		}else{
			return ['isValid'=>0, 'errors'=>$this->errors];
		}
	}
}
