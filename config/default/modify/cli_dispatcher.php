<?php
/**
 * 
 * This file is part of Aura for PHP.
 * 
 * @package Aura.Framework_Project
 * 
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * 
 * @var Aura\Di\Container $di The DI container.
 * 
 */

// get the dispatcher service
$dispatcher = $di->get('cli_dispatcher');

// example command for 'hello world' using context and stdio services
$context = $di->get('cli_context');
$stdio   = $di->get('cli_stdio');
$dispatcher->setObject('hello', function ($name = 'World') use ($context, $stdio) {
    $stdio->outln("Hello {$name}!");
});

// add command objects below
