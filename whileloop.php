<?php include 'snippets/header.php' ?>

    <h1>While Loop</h1>
    <?php
        $i=50;
        while($i>30){
            echo "<p>Pass aee - $i</p>";
            $i-=5;
        }
    ?>

    <ul>
        <li><a href="index.php">GO TO HOME PAGE</a></li>
    </ul>
    <?php include 'snippets/footer.php' ?>

</body>
</html>