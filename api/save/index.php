<?php
header('Content-Type: application/json');
echo('{"status":true,"text":"Saved battery","count":' . $_REQUEST['count'] . ',"timetaken":"0.001"}');