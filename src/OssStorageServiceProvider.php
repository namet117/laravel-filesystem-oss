<?php

namespace Namet\LaravelFilesystem;

// use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use Namet\Oss\Drivers\Oss;

class OssStorageServiceProvider //extends ServiceProvider
{
    public function boot()
    {
        app('filesystem')->extend('alioss', function ($app, $config) {
            $instance = new Oss($config);
            $filesystem = new FileSystem($instance);
            return $filesystem;
        });
    }

    public function register()
    {
    }
}
