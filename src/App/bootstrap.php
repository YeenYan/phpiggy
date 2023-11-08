<?php

declare(strict_types=1);

/**
 * This is responsible for loading other files
 * and configuring the project
 */

require __DIR__ . "/../../vendor/autoload.php";

use Framework\{App};

$app = new App();

return $app;
