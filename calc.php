<?php

 class calc{

    public $num1;
    public $num2;
    public $op;
    

    final function calcluate(){

        $this->num1=$_GET['num1'];
        $this->num2=$_GET['num2'];
        $this->op=$_GET['op'];

        if($this->op=="+"){
          echo  $this->num1+$this->num2;}
        else if($this->op=="-"){
            echo  $this->num1-$this->num2;}
          else if($this->op=="*"){
            echo  $this->num1*$this->num2;}
          else if($this->op=="/"){
            echo  $this->num1/$this->num2;
          }

    }
}
$newcalc= new calc();
$newcalc->calcluate();
echo "<button href='<?php clac.php ?>' >back</button>";