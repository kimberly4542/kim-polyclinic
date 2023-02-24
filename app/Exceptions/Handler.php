<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;


class Handler extends ExceptionHandler
{

	//  A list of the exception types that are not reported.
	protected $dontReport = [
		//
	];


	//  A list of the inputs that are never flashed for validation exceptions.
	protected $dontFlash = [
		'password',
		'password_confirmation',
	];


	//  Report or log an exception.
	public function report(Exception $exception)
	{
		parent::report($exception);
	}

	//  Render an exception into an HTTP response.
	public function render($request, Exception $exception)
	{
		return parent::render($request, $exception);
	}

	protected function unauthenticated ($request, AuthenticationException $exception) 
	{
		$guard = array_keys(config('auth.guards'));
		$guardData = $guard[2];
		$uri = '';
		switch ($guardData) {
            case 'admin':
               	$uri = '/';
                break;
            case 'subscriber':
            	$uri = 'session/login';
            	break;
        }
		return redirect($uri)->with('errorMessage', 'unauthorized access, please sign first');
		// return redirect('session/login')->with('errorMessage', 'unauthorized access, please sign first');
	}
}