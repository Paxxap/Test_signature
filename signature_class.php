<?php 


enum Colors { 

	case red;
	case green;

	public function getColor():string
	{
		return $this->name;
	}
}




class PhoneFormatting {

	public $phones; 

	function __construct($phones) {

		$this->phones = $phones;

	}

	function phone_validation() {
		$flag = true;
		$regexp = "/(?:\+375|80)\s?\(?\d\d\)?\s?\d\d(?:\d[\-\s]\d\d[\-\s]\d\d|[\-\s]\d\d[\-\s]\d\d\d|\d{5})/";
		foreach($this->phones as $values) {
			$values = trim($values);
			if (!preg_match($regexp, $values)) {
				$flag = false;
				break;
			}
		}
		return $flag;

	}

	function phone_formatting() {

		$pattern =  "/(\+375)-*([0-9]{2})-*([0-9]{3})-*([0-9]{2})-*([0-9]{2})/";
		$replacement = '+375 ($2) $3-$4-$5';
		foreach($this->phones as $values)
		{
			$result[] = preg_replace($pattern, $replacement, $values);
		}	
		return $result;
	}
}





class SignaGenerator extends PhoneFormatting {

	public $name, $surname, $father_name, $phones, $emails;

	function __construct() {
		if(isset($_GET))
		{
			$this->phones = array(
			'0' => $_GET['first_phone'],
			'1' => $_GET['second_phone']
			); 
			$phone_format = new PhoneFormatting($this->phones);
			if($phone_format->phone_validation())
			{
				$this->phones = $phone_format->phone_formatting();
				$this->name = mb_substr($_GET['name'], 0, 1); 
				$this->surname = $_GET['surname']; 
				$this->father_name = mb_substr($_GET['father_name'], 0, 1);
				$this->emails = array(
					'0' => $_GET['first_email'],
					'1' => $_GET['second_email']
				); 
				if(!$this->validate_email())
				{
					die("Не корректна запись почты");
				}
			}
			else
			{
				die("Не корректна запись номера");
			}
		}
		else
		{
			die("Не переданы данные из формы");
		}
	}

	function validate_email(){
		$flag = true;
		foreach($this->emails as $values)
		{ 
			if (!filter_var($values, FILTER_VALIDATE_EMAIL)) {
				$flag = false; 
			}	   
		}
		return $flag;
	}

	function include_signature(Colors $color) {
		include("signature.php");
	}
}


$signature = new SignaGenerator();
$signature->include_signature(Colors::red);
$signature->include_signature(Colors::green);
?>