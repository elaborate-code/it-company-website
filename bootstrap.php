<?php

use ElaborateCode\JigsawLocalization\LoadLocalization;
use TightenCo\Jigsaw\Jigsaw;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

$events->beforeBuild([LoadLocalization::class]);
