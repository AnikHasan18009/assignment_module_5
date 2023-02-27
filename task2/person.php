<?php
class Person{
  private $name;
  private $email;
  public function getName()
  {
    return $this->name;
  }  
  public function getEmail()
  {
    return $this->email;
  }
  public function setEmail($email)
  {
     $this->email=$email;
  } 
  public function setName($name)
  {
     $this->name=$name;
  } 

}
?>
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
  <title>Person Class Demo</title>
</head>
<body>
  <?php
  $person1= new Person();
  $person1->setName("Anik Hasan");
  $person1->setEmail("anikhasan@gmail.com");
  ?>
  <div>
     <h3>Name  : <?php echo $person1->getName()?></h3>
     <h3>Email : <?php echo $person1->getEmail()?></h3>
  </div>
</body>
</html>