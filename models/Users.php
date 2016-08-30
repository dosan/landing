<?php

require('Model.php');

class Users extends Model{

	/**
	 * Изобрел велосипед привычка
	 */
	public function rules(){
		return [
			'email'=>['required', 'email'],
			'name'=>['required', 'stringOnly', 'length:35']
		];
	}

	/**
	 * Переопределяем функцию table()
	 * @return string имя таблицы
	 */
	public function table(){
		return $this->_table;
	}

	/**
	 * Сохроняем в базу подписчика
	 * @return array result
	 */
	public function insert($name, $email){
		$validate = $this->validate(['name'=>$name, 'email'=>$email]);
		if($validate['isValid']){
			$stmt = $this->db()->prepare(
				' INSERT INTO '.$this->table().'
					(name, email, subscribe_date)
				VALUES
					(:name, :email, NOW())');
			$stmt->bindParam(':name', $name);
			$stmt->bindParam(':email', $email);
			$result = $stmt->execute();
			
			// отправляем на почту
			if($result)
				$this->sendMail($email, $name);
			else
				return ['success'=>0, 'message'=>'Error in save'];
		}
		return $validate;
	}
	/**
	 * отправка письма на почту пользователя
	 */
	public function sendMail($email, $name){
		$mailer = new Mailer('admin');
		return $mailer->send($email, 'Спасибо что подписались!', 'Спасибо что подписались на нашу рассылку!!!');
	}
}
