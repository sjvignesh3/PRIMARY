<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primary - Functions</title>
</head>
<body>
    <h1>Functions</h1>
    <?php
        function writeMessage(){
            echo "Vicky<br/>";
        }
        writeMessage();


        function addNUmbers($n1,$n2){
            $sum=$n1+$n2;
            echo "The sum of $n1 and $n2 is $sum<br/>";
        }
        addNUmbers(10,5);
        $var=800;
        addNUmbers($var,"88");

        function changeNUm($va){
            $va=$va+50;
            echo $va."<br/>";
        }
        $va=800;
        changeNUm();
        echo $va."<br/>";
    ?>


    <ul>
        <li><a href="index.php">GO TO HOME PAGE</a></li>
    </ul>

</body>
</html>