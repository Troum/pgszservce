<?php

namespace App\Http\Controllers;

use App\Codes;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DataTablesController extends Controller
{
    public function getRegistered()
    {
        return DataTables::of(User::query()->where('speciality','<>','admin')->select(['name', 'email','created_at', 'counter']))->make(true);
    }

    public function getCodes()
    {
        return DataTables::of(Codes::query()->where('status','=',0)->select(['code']))->make(true);
    }
}
