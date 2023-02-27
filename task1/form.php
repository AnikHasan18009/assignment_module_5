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
  </Style>
  <title>Form</title>
</head>
<body>
  <form action="" method="post">
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