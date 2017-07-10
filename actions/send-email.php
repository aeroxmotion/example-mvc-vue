<?php

use Controllers\Mailer;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    Mailer::send(json_decode(file_get_contents('php://input')));
}
