<?php
require_once('config/database.php');

$records = $sql_conn->table('CHECKINOUT')->findAll();

foreach ($records as $record) {
    $mysql_conn->table('checkinout')->save([
        'USERID' => $record['USERID'],
        'CHECKTIME' => $record['CHECKTIME'],
        'CHECKTYPE' => $record['CHECKTYPE']
    ]);
}
$count = $mysql_conn->table('checkinout')->count();

session_start();
$_SESSION['message'] = 'รายการทั้งหมด '.$count.' แถว';

header("location:javascript://history.go(-1)");
exit;