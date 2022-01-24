<?php include 'snippets/header.php' ?>

    <h1>String Manipulations</h1>
    <?php
        $str="Student Late";
        $s="Standing";
        $name = "Vicky";
        echo "uppercase first letter :".strtoupper($name);
        echo "<hr/>";
    ?>
    <ul>
        <li><a href="index.php">GO TO HOME PAGE</a></li>
    </ul>



    <!-- COMMENTS

        . -> concatenation
        ucfirst() - upper case first letter
        ucwords() - upper case the first letter of all the words in the str
        strtoupper() - upper case
        strtolower() - lower case
        str_repeat(str,num) - repeats str , num times
        substr(str,fromindex,toindex) - substring 
        strpos(str,char) - returns the position
        strchr(str,char) - returns from the char till the last of the string
        strlen(str) - len of str
        trim(str) - remove spaces in the extreme pos of the string
        ltrim(str) - rem space in the beggg of the str
        rtrim - rem space in the end of the str
        str_replace();



    -->
    <?php include 'snippets/footer.php' ?>




</body>
</html>