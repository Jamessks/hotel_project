<?php include_once '../app/views/common/header.php'; ?>
<?php use App\api\DB; ?>
<?php
$dbconn = new DB;
$dbconn->query('SELECT * FROM user');
$results = $dbconn->resultSet();
dd($results);
 ?>
<?php include_once '../app/views/common/footer.php'; ?>
