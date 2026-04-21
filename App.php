#!/usr/bin/env -S php -dxdebug.mode=debug -dxdebug.start_with_request=yes
<?php

require __DIR__ . '/3/3.php';
require __DIR__ . '/3/Samples.php';

(new Problem3())->run();
