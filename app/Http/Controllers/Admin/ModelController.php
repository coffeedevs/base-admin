<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ModelController extends Controller
{
    public function index()
    {
        $models = new Collection();
        return view('admin.modelo.index', compact('models'));
    }

    public function create()
    {
        return view('admin.modelo.create');
    }

    public function edit($id)
    {
        return view('admin.modelo.edit');
    }
}
