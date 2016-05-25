<?php

/*class BankAccount{
public $balance = 10.5;

	public function DisplayBalance(){
		return 'Balance: '. $this->balance;

	}
	public function Withdraw($amount){
				if($this->balance < $amount){
					echo ' Not enough money!';
				}else{
				$this->balance = $this->balance-$amount;
				}
			}

}

$alex = new BankAccount;

 $alex ->Withdraw(15);

echo $alex ->DisplayBalance();

*/


/*class BankAccount{


	//protected $balance = 3500;
	protected $_balance = 3500;
	public $balance = 2500;
		public function DisplayBalance(){
			return $this->_balance;
		}



}



$cindy = new BankAccount;

echo $cindy->DisplayBalance();

echo $cindy->balance;*/



/*class Circle {
	const pi = 3.141;
	public function Area($radius){
		//return self::pi * ($radius * $radius);
		return $this::pi * ($radius * $radius);
	}

}

$cindy = new Circle;
echo $cindy->Area(5);

echo $cindy::pi;
*/



/*class Test{

	public function __construct($something){
	$this->SaySomething($something);
	}

	public function SaySomething($something){
		echo $something;
	}
}

$test= new Test('Some text here');
//$test->SaySomething();*/


/*

class BankAccount{
		public $balance = 0;
		public $type = '';

		public function DisplayBalance(){
			return 'Balance: '. $this->balance;

		}

		public function SetType($input){
			$this->type = $input;


		}
		public function Withdraw($amount){
					if($this->balance < $amount){
						echo ' Not enough money!<br>';
					}else{
					$this->balance = $this->balance-$amount;
					}
				}
		public function Deposit($amount){
			$this->balance = $this->balance + $amount;
		}		

}

class SavingAccount extends BankAccount{
public $type = '18-25';

}

$billy = new BankAccount;
$billy->SetType('18-25');
echo $billy->type;

*/
/*$ben = new SavingAccount;
$ben->Deposit(3000);

echo $ben->type.'<br>';
echo $ben->DisplayBalance();

$cindy = new BankAccount;
$cindy->Deposit(1000);
$cindy->Withdraw(240);
$cindy->Withdraw(140);


$billy = new BankAccount;

$billy->Deposit(2000);
$billy->Withdraw(240);
$billy->Withdraw(140);

$cindy->Withdraw(140);

$billy->Deposit(4000);
$billy_saving = new SavingAccount;
$billy->Withdraw(14000);
echo $billy_saving->type;
echo 'Cindy '.$cindy->DisplayBalance().'<br>';
echo 'Billy '.$billy->DisplayBalance();*/



/*class DatabaseConnect {
	public function __construct($db_host,$db_username,$db_password){

		echo 'Attemting connection<br>';
			//echo $db_host.'<br>'.$db_username.'<br>'.$db_password;
		if(!@$this->Connect($db_host,$db_username,$db_password)){
				echo 'Connection failed';

		}else if($this->Connect($db_host,$db_username,$db_password)){
			echo 'Connected to '. $db_host;

		}
	}

	public function Connect($db_host,$db_username,$db_password){
		if (!mysqli_connect($db_host,$db_username,$db_password)){
			return false;
		}else{
			return true;
		}
	}
}


$connection = new DatabaseConnect('localhost','root','');*/




//require_once('myclass.php');
//require_once('math.php');
//$cindy = new Myclass('Cindy','Park');
//$John = new Myclass('John','Lock');
//var_dump($cindy);
//var_dump($John);
//$John->dosomething();
//$ben = new Math;
//echo $ben->add(5,10,12,13);
//
//echo Math::add(2,3)


include('myclass.php');
//$class1 = new Myclass;


//print_r(MyClass::checkImage('envato.jpg'));
//MyClass::checkImage('envato.jpg');
//MyClass::checkImage('envato.jpg');
//MyClass::checkImage('envato.jpg');
//print_r(MyClass::checkImage('envato.jpg'));
//echo Myclass::getNumUploaded()."<br>";
//
//$instance = new Myclass();
//echo Myclass::getNumUploaded();
//
//echo Myclass::getNumUploaded();






?>