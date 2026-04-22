#!/usr/bin/env -S php -dxdebug.mode=debug -dxdebug.start_with_request=yes
<?php

require __DIR__ . '/643/643.php';
require __DIR__ . '/643/Samples.php';

(new Problem643())->run();
