<?php include 'snippets/header.php' ?>

    <h1>Date and Time</h1>
    <?php
        $date= getdate();
        //$time = gettime();
        echo "Today's Date is = ";
        echo $date['mday'].'-';
        echo $date['mon'].'-';
        echo $date['year'].'</br>';
        echo time().'<br/>';

        print date("m/d/y G.i:s<br>",time()).'<br/>';
        print "Today is   ";
        print date("j of F Y, \a\\t g.i a",time());
    ?>
    <ul>
        <li><a href="index.php">GO TO HOME PAGE</a></li>
    </ul>


    <!-- 
        mday - day
        mon - month
        year - year


      -->
      <?php include 'snippets/footer.php' ?>

</body>
</html>