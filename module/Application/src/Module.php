<?php

declare(strict_types=1);

namespace Application;

class Module
{
    const VERSION = '3.0.3-dev';
    public function getConfig(): array
    {
        /** @var array $config */
        $config = include __DIR__ . '/../config/module.config.php';
        return $config;
    }
}
