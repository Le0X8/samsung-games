<?php
header('Content-Encoding: br');
header('Content-Type: application/wasm');

echo(file_get_contents('webgl_flipper.wasm.br'));