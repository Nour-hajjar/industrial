<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Support\Facades\Route;
use App\Exception;
class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
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
            //dd($type = get_class($exception));
            // $message = $exception->getMessage();
            // $routeName = Route::currentRouteName();
            // $file = $exception->getFile();
            // $line = $exception->getLine();
        // if (session()->has('locale')) {
        //     App::setlocale(session()->get('locale'));
        // }

        // dd(session()->has('locale'), $request);

  $Exception = Exception::create(['type' => get_class($exception),
            'message'=> $exception->getMessage(),
           'route' =>$request->fullUrl(),
            'file' => $exception->getFile(),
            'line' => $exception->getLine()
           ]);

          //  $status_code = $exception->getStatusCode();

    if ($this->isHttpException($exception)) {
        if ($exception->getStatusCode() == 404 ||401 ||403||419||500|| 503) {

          
       return response(redirect(url('/error')));
     }

    }
        if ($exception instanceof \Spatie\Permission\Exceptions\UnauthorizedException) {
     return response()->view('website.error');
    }
        return parent::render($request, $exception);
    }
}
