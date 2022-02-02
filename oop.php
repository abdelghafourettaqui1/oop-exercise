<?php
class Employer {
  private $id;
  public $firstname;
  public $lastname;
  public $gender;
  public $age;
  function __construct($id,$firstname,$lastname,$gender,$age)
  {
    $this->id=$id;
    $this->firstname=$firstname;
    $this->lastname=$lastname;
    $this->gender=$gender;
    $this->age=$age;
  }
  function set_id($id){
    $this->id=$id;
  }
  function get_id()
  {
    return $this->id;
    
  }
  function get_firstname()
  {
    return $this->firstname;
    
  }
  function get_lastname()
  {
    return $this->lastname;
    
  }
  function get_gender()
  {
    return $this->gender;
    
  }
  function get_age()
  {
    return $this->age;
    
  }
}

class Trainer extends Employer{
  public $laptopID;
  private $password;
  public function calc_absent_days(){}
  public function testing(){}
  public function teach(){}


}
class  Security_guard extends Employer {
  public function close(){}
  public function open(){}

} 
class Student extends Employer{
  public function solving(){}
  public function study(){}
  public function developing(){}
}
$trainer1 = new Trainer(1834,"Hamza","Gassai","male",22);
$trainer2 = new Trainer(1084,"Reda","Reda","male",20);
printf("|");
echo "trainer number 1 ";
printf("|");
echo $trainer1->get_id();
printf("|");
echo $trainer1->set_id(28050);
printf("|");
echo $trainer1->get_id();
printf("|");
echo $trainer1->firstname;
printf("|");
echo $trainer1->get_lastname();
printf("|");
echo $trainer1->get_gender();
printf("|");
echo $trainer1->get_age();
printf("|");
printf("\n");
printf("|");
echo "trainer number 2 ";
printf("|");
echo $trainer2->get_id();
printf("|");
echo $trainer2->get_firstname();
printf("|");
echo $trainer2->get_lastname();
printf("|");
echo $trainer2->get_gender();
printf("|");
echo $trainer2->get_age();
printf("|");
printf("\n");
$student1 = new Student(1634,"abdelghafour","ETTAQUI","male",21);
printf("|");
echo"student number 1 ";
printf("|");
echo $student1->get_id();
printf("|");
echo $student1->get_firstname();
printf("|");
echo $student1->get_lastname();
printf("|");
echo $student1->get_gender();
printf("|");
echo $student1->get_age();
printf("|");
printf("\n");



?>