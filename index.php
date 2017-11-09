
<?php
function OntslagRonde(Fireable $fr){
    $fr->fire();
}

interface Fireable{
     public function fire();   // abstract function does NOT have body
}
interface Inzetbaar{
    public function inzetten();
}
class Person{
    
}
class HAVOStudent extends Person{
    
}
class Teacher  extends Person implements Fireable, Inzetbaar{
    public function inzetten(){}
    public function fire(){
        echo "Go to Schoolboard and submit reason for fire";
   //     if(reasons are good){
   //         Teacher is fired
   //     }
    }
}
class EnglishTeacher extends Teacher{
    
}


class Employee{
    
}
class Bouwvakker extends Employee implements Fireable{
    public function fire(){
        echo "Dont verleng contract next monts ZZP";
    }
}
class StratenLegger extends Bouwvakker{
    
}
class Directeur extends Employee{
    
}




















///// ARTIKEL 1 VAN DE PROGRAMMEER GRONDWET = DRY
            ///// CONSTITUTION ARTICLE 1 OF THE PROGRAMMER = DRY


class School{               // Parent SuperClass TopClass
    public $name;
    public $address;
}

class HighSchool extends School{  // ChildClass SubClass GEEN NAAM VOOR
   // public $name;           // becomes obsolete
//    public $address;     /// Becomes obsolete
    public $eindExamenCommissie;
}
class ElementarySchool extends School{
    // MISSING NAME
    // public $address;        // Becomes obsolete overbodig
    public $playground;
}
$zwolseSchoolPlek = new Schoolgebouw();
$zwolseSchoolPlek->scholen = array(new ElementarySchool, new HighSchool());

class Schoolgebouw{
    public $scholen;
}














//person firstname age birthdate  // required information
//person childsfirstname // optional information
//person wife's name
$mens1 = array("karel", 34 , "5 juni 1977", "Pietje", "Caroline");
$mens2 = array("karel", 34 , "5 juni 1977", "Nienke");

function subscribeToSubject(Student $student){
    echo "<br><br>".$student->firstname;
    
}

$a = 3;

$student1 = new Student();
$student1->firstname = "Pietje";
$student2 = new Student();
$student2->firstname = "Klaasje";

$student1->introduce();
$student2->introduce();

subscribeToSubject($student1);
//subscribeToSubject($a);             // Fails

class Student{
   public $firstname;      // field, property , attribute
   public $subject;
   public function introduce(){
       echo "Hello My name is: ".$this->firstname;
   }
   public function doingInternShip(){
       $this->introduce();
   }
}



// Procedural coding
// It goes from top to bottom


$a = "Hello";
echo $a;

// after a while they added functions to procedural coding

optellen(4,5);
optellen(8,9);
optellen(7,3);
function optellen($a, $b){
    echo "<br>If I add ".$a." with the number ".$b." then I get
        the result ".($a+$b);
}



?>