<?php
//connection class
class ConnectionForBrand
{
	private $brandserver="localhost";
	private $branduser="root";
	private $brandpass="";
	private $branddb="brand";

	function getConnection()
	{
		$conn=mysqli_connect($this->brandserver,$this->branduser,$this->brandpass,$this->branddb);
		return $conn;
	}
}

//brand persoon class
class BrandPerson
{
	 private $firstname;
	 private $lastname;
	 private $email;
	 private $gender;
	 private $phonenumber;
	 private $password;
	 private $companyname;
	 private $website;
	 private $country;


	public function __construct($phonenumber,$firstname,$lastname,$companyname,$email,$website,$country,$gender,$password)
	{
		$this->firstname=$firstname;
		$this->lastname=$lastname;
		$this->email=$email;
		$this->gender=$gender;
		$this->phonenumber=$phonenumber;
		$this->password=$password;
		$this->companyname=$companyname;
		$this->website=$website;
		$this->country=$country;
	}
		
		
//get methods for getting  the data

		public function getFirstname()
		{
			return $this->firstname;
		}
		public function getLastname()
		{
			return $this->lastname;
		}
		public function getEmail()
		{
			return $this->email;
		}
		public function getGender()
		{
			return $this->gender;
		}
		public function getPhonenumber()
		{
			return $this->phonenumber;
		}
		public function getPassword()
		{
			return $this->password;
		}
		public function getCompanyname()
		{
			return $this->companyname;
		}
		public function getWebsite()
		{
			return $this->website;
		}
		public function getCountry()
		{
			return $this->country;
		}
		
}
	

	class PasswordHash
	{
		function passwordHashing($firstname,$password)
		{
		$hash = crypt($password,$firstname);
		return $hash;
		}
		function passwordVerify()
		{
			if (password_verify('ramakrishna', $hash))
			 {
  				  return true;
			 } 
			else
			 {
    			  return false;
			 }
		}
	}
//////register the person
	class RegisterBrandPerson
	{
 
		function theRegisterBrandPerson(BrandPerson $branperson)
		{
			$connectionforbran=new ConnectionForBrand();
					$connectionstatus=$connectionforbran->getConnection();
					if (!$connectionstatus)
					{
						die('Could not connect:');
					}
					$phonenumber=$branperson->getphonenumber();
					$firstname=$branperson->getFirstname();
					$lastname=$branperson->getLastname();
					$mail=$branperson->getEmail();
					$website=$branperson->getWebsite();
					$country=$branperson->getCountry();
					$companyname=$branperson->getCompanyname();
					$password=$branperson->getPassword();
					$gender=$branperson->getGender();

			$query="INSERT INTO branduser(phonenumber,firstname,lastname,email,website,country,companyname,password,gender)VALUES('$phonenumber','$firstname','$lastname','$mail','$website','$country','$companyname','$password','$gender') ";
			$k=mysqli_query($connectionstatus,$query);
			if($k)
			{
				echo"success";
			}
			else
			{
				echo "notsuccess";
			}
		}
	}

?>

