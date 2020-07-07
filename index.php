<?php
// class student
// {
//     public $name;
//     public $id;
//     public $level;

//     // method
//     public function registerOnCourse($courseName)
//     {
//         echo "Welcome to " . $courseName . "<br>";
//     }
//     public function leaveCourse($courseName)
//     {
//         echo "by Form " . $courseName . "<br>";
//     }
// }

// $newStudent = new student();


// $newStudent->name="ali";
// $newStudent->id='22';
// $newStudent->level="3333";
// $newStudent->registerOnCourse("JavaScript");

// echo "Name :" . $newStudent->name . "<br>";
// echo "ID   :" . $newStudent->id   . "<br>";
// echo "Level:" . $newStudent->level. "<br>";

// $newStudent->leaveCourse("JavaScript");
// super calss
// class AppleDevice
// {
//     public $ram ="1 GB";
//     public $inch = "4.2 inch";
//     public $space = "32 GB";
//     public $color = "Silver";
//     public $name ;
    // public $OwnerName;

    // Constants
    // const OWNERNAME = 5;

    // Methods
//     final public function ChangeSpec($r, $inc, $Spe, $col)
//     {
//         $this->ram      =$r;
//         $this->inch     =$inc;
//         $this->space    =$Spe;
//         $this->color    =$col;
//     }
//    final public function sayHello($n){
//         $this->name=$n;
//         echo 'Welcome To ' . $n;
//     }
// }

// class sony inheritance of appledevice
// class Sony extends AppleDevice
// {
//     public $camera="25mb";

//     public function ChangeSpec($r, $inc, $Spe, $col)
//     {
//         $this->ram      =$r;
//         $this->inch     =$inc;
//         $this->space    =$Spe;
//         $this->color    =$col;
//         // $this->camera   =$cam;
//         // $this->model    =$mod;
        
//     }

//     public function sayHello($n){
//         $this->name=$n;
//         echo 'Welcome To ' . $n . " Model : EX";
//     }
// }

// run super calss
// $iphone11 = new AppleDevice();
// $iphone11->ChangeSpec(
//     "45 GB Method Function",
//     "4.5 Inch Method Function",
//     "512 GB Method Fuction",
//     "Black Method Function",
//     "Iphone11"
// );
// echo $iphone11->sayHello('Iphone');

// // $iphone11->OwnerName="AD";

// echo '<pre>';  print_r($iphone11); echo '</pre>';


// Class Sony inheritance AppelDevice
// $sony = new Sony();
// uesed method inheritance

// $sony->ChangeSpec(
//     "45 GB Method Function",
//     "4.5 Inch Method Function",
//     "512 GB Method Fuction",
//     "Black Method Function",
//     // "66MB Method function",
//     // "Sony EXpria"
// );
// $sony->sayHello("SonyEX");
// $sony->price="1000EGP";
                
        //   echo '<pre>';  print_r($sony); echo '</pre>';


// abstract class apple {
//     public $ram='5gb';
//     abstract public function ios();
//     abstract public function ios2();
//     abstract public function ios3($n);
// }
// class iphone extends apple{
//      public function ios(){
//         echo "ahmed". "<br>";
//      }
//      public function ios2(){
//          echo "weclome Ahmed Hesham". "<br>";
//      }
//      public function ios3($s){
//          $this= $n;
//          echo "welcome " . $n . "<br>";
//      }

// }
// $iphone7 = new iphone();
// echo '<pre>';print_r($iphone7); echo'</pre>';
// $iphone7->ios();
// $iphone7->ios2();
// $iphone7->ios3('ALI');


interface Mobile {

    public function pressHome();
}

class iphone implements Mobile {
    public $name; 
    public function pressHome(){
        echo 'ahmed';
    }
}

$iphonex = new iphone();
echo $iphonex->name='ahmed <br>';
$iphonex->pressHome();
echo "<br>";

echo '<per>';print_r($iphonex);'</per>';
