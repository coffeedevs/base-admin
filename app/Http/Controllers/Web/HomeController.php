<?php

namespace App\Http\Controllers\Web;

use App\Activity;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\ContactRequest;
use App\News;
use App\Page;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
    function index()
    {
        return view('web.index');
    }
}
