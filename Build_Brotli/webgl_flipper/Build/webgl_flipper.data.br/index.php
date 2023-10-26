<?php
header('Content-Encoding: br');
header('Content-Type: application/octet-stream');

echo(file_get_contents('webgl_flipper.data.br'));