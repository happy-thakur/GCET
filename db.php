<?php
class database{
  public $database='';
  public $server="";
  public $hostname="localhost";
  public $username="root";
  public $password="";
  public $database_name="hack";

 public function database_connect(){
    
         $this->database=mysqli_connect($this->hostname,$this->username,$this->password,$this->database_name);
  if(!$this->database){
         
               echo '<h3 style="font-family:LATO;font-weight:bold;">SORRY AT THIS TIME REQUEST IS NOT COMPLETE</h3>';
  }

 } 
 }
 ?>