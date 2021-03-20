<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Factory;

class EwwFileSystemMiddleware
{

    protected $filesystem;

    public function __construct(Factory $filesystem)
    {
        $this->filesystem = $filesystem;
    }



    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check()) {
            return $next($request);
        }



        $this->filesystem->set('s3_customers', $this->createDriver($this->getFileSystemConfig()));

        return $next($request);
    }

    protected function getFileSystemConfig()
    {
        $config = config('filesystems.disks.'. config('filesystems.default'));

        //dd($config); this will return us our s3 configuration details

        $config['root'] = auth()->user()->name;

        return $config;

    }

    protected function createDriver($config)
    {
        $method = $this->getCreationMethod();

        return $this->filesystem->{$method}($config);


    }

    protected function getCreationMethod()
    {
        return "create" . ucfirst(config('filesystems.default')) . "Driver";
    }
}
