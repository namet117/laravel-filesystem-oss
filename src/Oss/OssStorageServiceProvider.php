<?php

namespace Namet\FileSystem\Oss;

use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use Namet\Oss\OssManager;

class OssStorageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        app('filesystem')->extend('alioss', function ($app, $config) {
            $instance = new OssManager('oss', $config);
            $filesystem = new FileSystem($instance);
            return $filesystem;
        });
    }

    public function register()
    {
    }
}
