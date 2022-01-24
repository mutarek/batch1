<?php
class Students{
	public $name;
	public $depertment;
	public $id;
	public $gender;
	public $roll;

	public function __construct($myid,$mydepert,$myname,$mygender,$myroll)
	{
		$this->id = $myid;
		$this->name = $myname;
		$this->depertment = $mydepert;
		$this->gender = $mygender;
		$this->roll = $myroll;
	}

	public function ShowStd()
	{
		echo "ID Is :{$this->id} <br>";
		echo "Name Is :{$this->name} <br>";
		echo "Depertment Is :{$this->depertment} <br>";
		echo "Gender Is :{$this->gender} <br>";
		echo "Roll Is :{$this->roll} <br>";
	}

}

$stdOne = new Students(1,"EEE","Karim","Male",120021);
$stdOne->ShowStd();

$stdTwo = new Students(2,"EEE","Ria","Female",120022);
$stdTwo->ShowStd();

?>