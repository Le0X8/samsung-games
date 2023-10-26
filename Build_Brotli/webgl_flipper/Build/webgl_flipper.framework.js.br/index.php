<?php
header('Content-Encoding: br');
header('Content-Type: application/javascript');

echo(file_get_contents('webgl_flipper.framework.js.br'));