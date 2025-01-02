<?php

namespace App\Exceptions;

use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends \Illuminate\Foundation\Exceptions\Handler
{
    /**
     * Render the exception as an HTTP response.
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            return response()->view('errors.404', [], 404);
        }

        return parent::render($request, $exception);
    }
}
