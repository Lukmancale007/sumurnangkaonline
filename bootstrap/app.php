<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\KepalaKamarMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'is_admin' => AdminMiddleware::class
        ]);
    })
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'role' => RoleMiddleware::class
        ]);
    })
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'kepalakamar' => KepalaKamarMiddleware::class
        ]);
    })

    // ketika di group individualnya (ada di atas) juga di cantumkan
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->appendToGroup('AdminMdlwr', [
                // class dibawah ini ada di folder middleware
            AdminMiddleware::class,
        ]);
    })
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->appendToGroup('role', [
                // class dibawah ini ada di folder middleware
            RoleMiddleware::class,
        ]);
    })

    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
