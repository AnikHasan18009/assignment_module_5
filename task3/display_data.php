<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    div{
      position: relative;
      margin:auto;
      width:50%;
      top:200px;
    }
    h3{
      text-align: center;
    }
  </style>
  <title>Display Data</title>
</head>
<body>
<?php
  include_once "person.php";
  if($_SERVER['REQUEST_METHOD']=="POST"){
  if(!empty($_POST['name']) && !empty($_POST['email'])){  
  $person1= new Person();
  $person1->setName($_POST['name']);
  $person1->setEmail($_POST['email']);
  $name=$person1->getName();
  $email=$person1->getEmail();
   echo <<<EOD
   <div>
   <h3>Name  : $name</h3>
   <h3>Email : $email</h3>
   </div>
   EOD;
 
  }
  else{
    echo <<<EOD
    <div>
    <h3>Invalid name or email</h3>
    </div>
    EOD;
  }
}
?>
</body>
</html>