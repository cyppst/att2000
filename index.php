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



