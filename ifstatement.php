<?php include 'snippets/header.php' ?>

    <h3 style='color: black'> </h3>
    <?php 
        echo '<h2> If Statement</h2>';
        $grade=100;
        if ($grade>35) {
            echo "<h3 style='color: green'> You have passed - $grade </h3>";
        }
        else {
            echo "<h3 style='color: red'> You have Failed - $grade </h3>";
        }
    ?>

    <ul>
        <li><a href="index.php">GO TO HOME PAGE</a></li>
    </ul>
    <?php include 'snippets/footer.php' ?>

</body>
</html>