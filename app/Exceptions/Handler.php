<?php

namespace App\Exceptions;

use App\Exceptions\CustomException\InCompleteProcess;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Support\Facades\Redirect;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            // You can add custom reporting logic for this exception type
        });

        // Handle the custom exception for redirection
        $this->renderable(function (InCompleteProcess $e, $request) {
            // Redirect to a specific route with an error message in session
            return back() // Change this to the route you want to redirect to
                ->with('error', 'Process incomplete: ' . $e->getMessage());
        });
    }
}

