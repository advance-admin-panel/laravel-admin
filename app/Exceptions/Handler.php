<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use App\Http\Controllers\Api\ApiBaseController;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * @var Variable of the exception types that are come to api.
     */
    protected $applicationJson = "application/json";


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
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if($exception instanceof \Illuminate\Auth\AuthenticationException)
        {
            $get_header = $request->header('Accept');

            if ($get_header == $this->applicationJson) {
                return (new ApiBaseController())->errorResponse([], 'Unathenticated');
            }
        }

        return parent::render($request, $exception);
    }
}
