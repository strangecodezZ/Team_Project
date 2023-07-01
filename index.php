<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
  <form action = "index.php" method = "post">
   First num :<br> <input type = "text" name = "num1"><br>
   Operator : <br> <input type = "text" name = "op"><br>
   Second : <br> <input type = "text" name = "num2"><br>
   <input type = "submit">

   
  </form>
    <?php
      $num1 = $_POST["num1"];
      $op = $_POST ["op"];
      $num2 = $_POST ["num2"];

      if ($op == "+"){
       echo $num1 + $num2;
      }
      elseif ($op == "-") {
        echo $num1 - $num2;

      }elseif ($op == "*"){
        echo $num1 * $num2;

      } elseif ($op == "/"){
        echo $num1 / $num2;

      } elseif ($op == "%"){
        echo $num1 % $num2;

      } else{
       echo "invalid";
      }
    ?>
</body>
</html>