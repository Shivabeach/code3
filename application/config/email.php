<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['protocol'] = 'sendmail';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['smtp_host'] = 'mail.van-horn.us';
$config['smtp_user'] = 'brad@van-horn.us';
$config['smtp_pass'] = '..Kwangye33';
$config['smtp_port'] = '993';
$config['wordwrap'] = TRUE;
$config['validate'] = TRUE;
$config['newline'] = '\r\n';
$config['wrapchars'] = '76';
$config['mailtype'] = 'html';
$config['charset'] = 'iso-8859-1';