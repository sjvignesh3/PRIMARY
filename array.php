<?php include 'snippets/header.php' ?>
    <h1>ARRAYS</h1>
    <?php
        //array
        $num=array(1,3,4,8,5,7,6);
        echo $num[6];
        $size = count($num);
        echo "<p>Array size of Arraynum is $size</p></br>";

        for ($i=0;$i<$size;$i++){
            echo "<p>Array index $i - $num[$i]</p>";
        }
  
    ?>
    <ul>
        <li><a href="index.php">GO TO HOME PAGE</a></li>
    </ul>

    <?php include 'snippets/footer.php' ?>
</body>
</html>