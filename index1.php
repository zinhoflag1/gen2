<?php

include 'config/Class.Dbconfig.php';


$db = new Database();

$sth = $db->connect->query("SELECT table_name FROM information_schema.tables WHERE table_schema = '{$db->dbname}'");

SELECT column_name
FROM INFORMATION_SCHEMA.COLUMNS
WHERE table_name = 'jobs';


 $rows = $sth->fetchAll();

//var_dump($rows[0]);
?>
<select>
    <?php foreach ($rows as $key => $value) {
        print "<option>".$value['table_name']."</option>";
    }

    print "</select>";

?>


