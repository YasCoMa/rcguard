<?php

/*
 * rcguard configuration file
 */

// Number of failed logins before reCAPTCHA is shown
$rcmail_config['failed_attempts'] = 3;

// Release IP after how many minutes (after last failed attempt)
$rcmail_config['expire_time'] = 30;

date_default_timezone_set('America/Sao_Paulo');

// Use HTTPS for reCAPTCHA
$rcmail_config['recaptcha_https'] = false;

// Keys can be obtained from http://recaptcha.net/whyrecaptcha.html

// Public key for reCAPTCHA
$rcmail_config['recaptcha_sitekey'] = '***Key Site***';

// Private key for reCAPTCHA
$rcmail_config['recaptcha_privatekey'] = '***Private key***';

// Log events
$rcmail_config['recaptcha_log'] = false;

// Event is not logged when set to NULL
// Parameter expansion:
// %r - Remote IP
// %u - Username
$rcmail_config['recaptcha_log_success'] = 'Verificação aceita para %u. [%r]';
$rcmail_config['recaptcha_log_failure'] = 'Verificação falhou para %u. [%r]';
$rcmail_config['recaptcha_log_unknown'] = 'Tipo de log desconhecido';

// Options for persistent login plugin
// -----------------------------------

// Set to true if persistent login plugin is in use
$rcmail_config['pl_plugin'] = false;

// Name of persistent login cookie
$rcmail_config['pl_cookie_name'] = '_pt';

// XXX: Not supported yet!
// Set to true if persistent login uses tokens
$rcmail_config['pl_auth_tokens'] = false;

// Name of the database table for tokens
$rcmail_config['pl_auth_tokens_db_table'] = 'auth_tokens';

?>
