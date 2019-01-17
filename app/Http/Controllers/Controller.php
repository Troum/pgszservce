<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use ElForastero\Transliterate\Facade;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function failed($error, $errorCode)
    {
        return response()->json(['error' => $error], $errorCode);
    }

    public function success($success)
    {
        return response()->json(['success' => $success], Response::HTTP_OK);
    }

    public function dash($string)
    {
        return Facade::slugify($string);
    }
}
