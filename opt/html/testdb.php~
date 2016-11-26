<?php
try {
    $dbh = new PDO('mysql:host=mysql', 'root', 123456);

    foreach($dbh->query('SHOW DATABASES') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
