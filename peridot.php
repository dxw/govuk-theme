<?php

WP_Mock::bootstrap();

return function (\Evenement\EventEmitterInterface $emitter) {
    $dot = new \Peridot\Reporter\Dot\DotReporterPlugin($emitter);
};
