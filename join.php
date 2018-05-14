<?php
require_once('config/database.php');
$records = $mysql_conn->table('staffs')->left('userinfo', 'staffs', 'USERID', 'userinfo', 'USERID')->findAll();
b4
?>

<table class="table table-hover">
    <thead>
    <tr>
        <th>NAME</th>
        <th>USERID</th>
    </tr>
    </thead>
    <tbody>
    <? foreach ($records as $record) { ?>
        <tr>
            <td><?= $record['ตัวแปรชื่อพนักงาน'] ?></td>
            <td><?= $record['USERID'] ?></td>
            <td></td>
        </tr>
    <? } ?>
    </tbody>
</table>
