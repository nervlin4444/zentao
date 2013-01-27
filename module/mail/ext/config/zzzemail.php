<?php
$config->mail->turnon         = 1;
$config->mail->mta            = 'smtp';
$config->mail->fromAddress    = "kevin.lam@createtech.com.hk";//"kevin.lam@createtech.com.hk"; 
$config->mail->fromName       = "kevin lam Job log";
$config->mail->smtp->host     = "smtp.gmail.com";//"smtp.bbmail.com.hk";
$config->mail->smtp->port     = "465";
$config->mail->smtp->auth     = true;
$config->mail->smtp->username = "nervlin";
$config->mail->smtp->password = "nerv_lin";
$config->mail->smtp->secure   = "ssl";
$config->mail->smtp->debug    = 0;