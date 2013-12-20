<?php
// set the mode here only if it is not already set.
// this allows for setting via web server, shell script, etc.
if (! isset($_ENV['AURA_CONFIG_MODE'])) {
    $_ENV['AURA_CONFIG_MODE'] = 'dev';
}
