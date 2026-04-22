#!/usr/bin/env -S php -dxdebug.mode=debug -dxdebug.start_with_request=yes
<?php

require __DIR__ . '/219/219.php';
require __DIR__ . '/219/Samples.php';

(new Problem219())->run();
