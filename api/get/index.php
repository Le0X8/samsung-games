<?php
header('Content-Type: application/json');
echo('{"status":"batteriesfound","count":' . $_REQUEST['count'] . ',"alreadyToday":false,"timetaken":"0.002"}');