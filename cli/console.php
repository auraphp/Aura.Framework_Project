<?php
/**
 * 
 * This file is part of Aura for PHP.
 * 
 * @package Aura.Framework_Project
 * 
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * 
 */

// hand off to the cli kernel script and get back the exit status
$status = require dirname(__DIR__) . '/vendor/aura/cli-kernel/scripts/kernel.php';
exit($status);
