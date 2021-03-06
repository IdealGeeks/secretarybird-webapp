<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\VisitaRepository;
use Illuminate\Http\Request;

class VisitasController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth:admin');
    }

    public function index(Request $request)
    {
        return view('admin.visitas.index', ['registros' => []]);
    }

    public function create(Request $request)
    {
        return view('admin.visitas.create', []);
    }

    public function edit($id, Request $request)
    {
        return view('admin.visitas.edit', ['id' => $id]);
    }

    public function trashed(Request $request)
    {
        return view('admin.visitas.lixeira', ['registros' => []]);
    }
}
