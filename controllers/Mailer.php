<?php

use Models\Email;

class Mailer 
{
    public static function send($data) 
    {
        Email::save($data);
        // ... Enviar correo
    }        
}