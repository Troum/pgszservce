<?php

namespace App\Http\Controllers;

use App\Codes;
use App\Http\Requests\CodesRequest;
use App\Http\Requests\SendRequest;
use App\Http\Requests\VideoRequest;
use App\Mail\CodeMail;
use App\Video;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{

    protected function uploadVideo(VideoRequest $request)
    {
        $filename = $this->dash($request->file('video')->getClientOriginalName());
        $speciality = $this->dash($request->videoSpeciality);
        if(Video::create([
            'filename' => $filename,
            'speciality' => $speciality,
            'video_name' => $request->videoName
        ]))
        {
            $request->file('video')->move(public_path('videos/'.$speciality), $filename);

            return $this->success('Видео успешно загружено!');
        }

        return $this->failed('Произошла ошибка: видео не загружено', Response::HTTP_CONFLICT);

    }

    protected function generateCodes(CodesRequest $request)
    {
        for ($i = 1; $i <= $request->codes; $i++)
        {
            Codes::create([
               'code' => str_random(8)
            ]);
        }

        return $this->success('Коды в количестве '.$request->codes.' штук были успешно сгенерированы!');
    }

    protected function sendCode(SendRequest $request)
    {
        $code = Codes::whereStatus(0)->inRandomOrder()->first();
        try {
            Mail::to($request->email)->send(new CodeMail($code->code));
            return response()->json(['success' => 'Письмо успешно отправлено!'], Response::HTTP_OK);
        } catch (\Exception $exception) {
            return response()->json(['error' => 'Произошла ошибка: письмо не было отправлено!'], Response::HTTP_BAD_REQUEST);
        }
    }
}
