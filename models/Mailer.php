<?php
require_once('../phpMailer/PHPMailerAutoload.php');

class Mailer{

	// конфигурация
	private $_config;

	/**
	 * @param string $from
	 */
	public function __construct($from){
		$this->_config['smtp_port']     = '465'; 
		$this->_config['smtp_from']     = SITE_EMAILS[$from]['email'];
		$this->_config['smtp_password'] = SITE_EMAILS[$from]['password'];
		$this->_config['smtp_host']     = SITE_EMAILS[$from]['host'];
		$this->_config['smtp_charset']  = 'Windows-1251';   //кодировка сообщений. (или UTF-8, итд)
	}

	/**
	 * mail Отправить
	 * @param string $to
	 * @param string $subject 
	 * @param string $body
	 * @return boolean 
	 */
	public function send($to, $subject, $body){
		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->SMTPDebug  = 0; // set is 3 to debug
		$mail->Host       = $this->_config['smtp_host']; 
		$mail->SMTPAuth   = true; 
		$mail->CharSet = 'UTF-8'; 
		$mail->Username   = $this->_config['smtp_from']; 
		$mail->Password   = $this->_config['smtp_password'];
		$mail->SMTPSecure = 'ssl';
		$mail->Port       = $this->_config['smtp_port'];
		$mail->setFrom($this->_config['smtp_from'], 'From Dosan\'s landing');
		$mail->addAddress($to);
		$mail->isHTML(true);
		$mail->Subject    = $subject;
		$mail->Body       = $body;
		//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		if(!$mail->send()) {
			if (APP_ENVIRONMENT === DEV_ENV) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
				die();
			}
			return false;
		} else {
			return true;
		}
	}
}
