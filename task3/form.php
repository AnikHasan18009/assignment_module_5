<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <Style>
    table{
      border: 1px solid darkblue;
      color: darkblue;
      font-weight: bolder;
      position:relative;
      margin:auto;
      top:200px;
      width: 250px;
      height: 200px;
    }
    td{text-align: center;}
    .box{
      width:200px;
    }
    div{
      position: relative;
      margin:auto;
      width:50%;
      top:200px;
    }
    h3{
      text-align: center;
    }
  </Style>
  <title>Form</title>
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
  exit();
}
?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <table>
      <tr>
        <td><label for="name">Name</label></td>
      </tr>
      <tr>
        <td><input class="box" type="text" name="name" id="name"></td>
      </tr>
      <tr>
        <td><label for="email">Email</label></td>
      </tr>
      <tr>
        <td><input class="box" type="email" name="email" id="email"></td>
      </tr>
      <tr>
        <td>
        <input type="reset" value="Reset">
         <input type="submit" value="Submit">
        </td>
        
      </tr>
    </table>
  </form>
</body>
</html>