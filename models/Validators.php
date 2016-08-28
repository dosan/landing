<?php
/**
 * Обычный валидатор проверки полей
 * @author Seitkanov Dosan
 * Здесь можно было прописать еще несколько валидаторов
 * такие как email_exists, username_exists, etc...
 */

class Validators{

	/**
	* Можно было прописать preg_match($pattern, $email)
	* @param string email
	* @return array [isValid=>[boolean],'message'='error message']
	*/
	public function email($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
			return ['isValid'=>1];
		return ['isValid'=>0, 'message'=>' is invalid'];
	}

	/**
	 * Проверяет не пустое ли значение
	 * @param [int, string, array]
	 * @return array ['isValid'=>int, 'message'=>'invalid message']
	 */
	public function required($d){
		if ($d != '' && $d != null)
			return ['isValid'=>1];
		return ['isValid'=>0, 'message'=>' field is required'];
	}

	/**
	 * Проверяет не пустое ли значение
	 * @param data
	 * @return array ['isValid'=>int, 'message'=>'invalid message']
	 */
	public function stringOnly($data){
		if(gettype($data) === 'string')
			return ['isValid'=>1];
		return ['isValid'=>0, 'message'=>' string expected'];
	}

	/**
	 * Ограничение для длины поля
	 * @param string data
	 * @param array $attrs [0=>int(length)]
	 * @return array['isValid'=>int, 'message'=>'invalid message']
	 */
	public function length($data, $attrs){
		if(strlen($data) <= intval($attrs[0]))
			return ['isValid'=>1];
		return ['isValid'=>0, 'message'=>' может содержать не более '.$attrs[0].' символов.'];
	}
}