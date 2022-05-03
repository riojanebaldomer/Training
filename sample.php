<?php
	$baldomer_info = array (
		array("basic_info","Rio Jane", "Tero", "Baldomer", "24", "March 20, 1998", "riojane.baldomer@gmail.com", "+639091396616"),
		array("edu_bg","University of Makati", "BSCS Major in Application Development", "2016", "2021"),
		array("work_bg","Company", "Quality Assurance", "Jan 2021", "Aprl 2021")
	);
	
	class Person{
		private $uid;
		public $firstName;
		public $middleName;
		public $lastName;
		public $age;
		public $birthDate;
		public $email;
		public $contactNumber;

		function __construct($firstName, $middleName, $lastName, $age, $birthDate, $email, $contactNumber) {
			$this->firstName = $firstName;
			$this->middleName = $middleName;
			$this->lastName = $lastName;
			$this->age = $age;
			$this->birthDate = $birthDate;
			$this->email = $email;
			$this->contactNumber = $contactNumber;
		}

		function set_firstName ($firstName ) {$this->firstName = $firstName ;}
		function set_middleName ($middleName ) {$this->middleName = $middleName ;}
		function set_lastName ($lastName ) {$this->lastName = $lastName ;}
		function set_age ($age ) {$this->age = $age ;}
		function set_birthDate ($birthDate ) {$this->birthDate = $birthDate ;}
		function set_email ($email ) {$this->email = $email ;}
		function set_contactNumber ($contactNumber ) {$this->contactNumber = $contactNumber ;}

		function get_firstName() {return $this->firstName ;}
		function get_middleName() {return $this->middleName ;}
		function get_lastName() {return $this->lastName ;}
		function get_age() {return $this->age ;}
		function get_birthDate() {return $this->birthDate ;}
		function get_email() {return $this->email ;}
		function get_contactNumber() {return $this->contactNumber ;}

		function __destruct() {
			echo "\nFullname: ".$this->get_firstName()." ".$this->get_middleName()." ".$this->get_lastName()."\n";
			echo "\nBasic Information"."\n";
			echo "Email: ".$this->get_email()."\n";
			echo "Contact Number: ".$this->get_contactNumber()."\n";
			echo "Age: ".$this->get_age()."\n";
			echo "Birthdate: ".$this->get_birthDate()."\n";
		}
	}

	class Education{
		private $uid;
		public $schoolName;
		public $yearStarted;
		public $yearEnded;
		public $course;

		function __construct($schoolName, $course, $yearStarted, $yearEnded) {
			$this->schoolName = $schoolName;
			$this->course = $course;
			$this->yearStarted = $yearStarted;
			$this->yearEnded = $yearEnded;
		}

		function set_schoolName	($schoolName) {$this->schoolName = $schoolName;}
		function set_course	($course) {$this->course = $course;}
		function set_yearStarted	($yearStarted) {$this->yearStarted = $yearStarted;}
		function set_yearEnded	($yearEnded) {$this->yearEnded = $yearEnded;}

		function get_schoolName() {return $this->schoolName;}
		function get_course() {return $this->course;}
		function get_yearStarted() {return $this->yearStarted;}
		function get_yearEnded() {return $this->yearEnded;}

		function __destruct() {
			echo "\nEducation Background"."\n";
			echo "School: ".$this->get_schoolName()."\n";
			echo "Course: ".$this->get_course()."\n";
			echo "Year Started: ".$this->get_yearStarted()."\n";
			echo "Year Ended: ".$this->get_yearEnded()."\n";
		}
	}

	class Resume{
		
	}


	$baldomer_educationBG = new Education($baldomer_info[1][1], $baldomer_info[1][2], $baldomer_info[1][3], $baldomer_info[1][4]);
	$baldomer = new Person($baldomer_info[0][1], $baldomer_info[0][2], $baldomer_info[0][3], $baldomer_info[0][4], $baldomer_info[0][5], $baldomer_info[0][6], $baldomer_info[0][7]);

	
?>