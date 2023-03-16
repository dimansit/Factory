<?php

$db = new MySQL(); //PostgreSQL   OracleFactory

$query = $db->DBQueryBuiler();
$query->from('tbl')
    ->select('id')
    ->where('id>100')
    ->limit(15);

$db->DBRecrord([]);