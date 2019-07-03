<?php

namespace RoboFinance\LaravelRedisQueueClearService;

use Illuminate\Support\ServiceProvider;
use RoboFinance\LaravelRedisQueueClearService\Console\Commands\LaravelRedisQueueClearCommand;

class LaravelRedisQueueClearServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands(LaravelRedisQueueClearCommand::class);
    }
}
