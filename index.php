<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body style="background-color: lightgrey;">
<?php
 //Run this on local server  
echo "Enter NxN : <br>";
echo "<form method='POST' >
    Row:<input type='text' name='1d'/>
    Column:<input type='text'  name='2d'/>
    <input type='submit' name='submit'
            value='Check' />
</form>";
 
   //Main function
    function rotate($matrix,$row,$col){
    $c = 1;    
    for($i = 0; $i < $row ; $i++) {
        for ($j = 0; $j < $col; $j++) {
            $matrix[$i][$j]= $c++;
        }
    }
     //Print  Matrix
    for($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {

             echo "&nbsp".$matrix[$i][$j]."&nbsp";
        }
        echo "<br>";
    }
    //loop for Clock Wise Rotate  
    echo "<br>After Clock Wise Rotate<br>";
    for($i = 0; $i < $row; $i++) {
        for ($j = $row; $j >=0; $j--)
        {

            echo "&nbsp ".$matrix[$j][$i]."&nbsp";

        }
        echo "<br>";
        }
    echo "<br>After Anti Clock Wise Rotate<br>";
    //loop for Anti Clock Wise Rotate
    for($i=$row;$i>=0;$i--){
        for($j=0;$j<=$row;$j++)
        {
            echo "&nbsp".$matrix[$j][$i]."&nbsp";
        }
        echo "<br>";
         
    }
}
    // Submit user iput data for matrix array
if (isset($_POST['submit'])) {
    error_reporting(E_ALL ^ E_NOTICE);
     
    // POST submit data
    $row = $_POST["1d"];
     
    // POST submit data
    $col = $_POST["2d"];
     
    echo "Matrix<br>";
    //array
    $matrix = [];
    //function calling
    rotate($matrix,$row,$col);  

}
?>
</body>
</html>