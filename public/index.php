<?php

/**
 * CodeIgniter front controller for Vercel.
 *
 * This boots the framework from the project root and lets CodeIgniter
 * handle the request routing.
 */

$_SERVER['CI_ENVIRONMENT'] ??= 'production';

require dirname(__DIR__) . '/vendor/codeigniter4/framework/system/bootstrap.php';
