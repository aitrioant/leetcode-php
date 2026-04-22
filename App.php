#!/usr/bin/env -S php -dxdebug.mode=debug -dxdebug.start_with_request=yes
<?php

require __DIR__ . '/594/594.php';
require __DIR__ . '/594/Samples.php';

(new Problem594())->run();
