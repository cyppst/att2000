<?php
require_once('config/database.php');

$records = $sql_conn->table('CHECKINOUT')->findAll();

foreach ($records as $record) {
    $mysql_conn->table('times')->save([
        'USERID' => $record['USERID'],
        'CHECKTIME' => $record['CHECKTIME'],
        'CHECKTYPE' => $record['CHECKTYPE']
    ]);
}

header("location:javascript://history.go(-1)");
exit;