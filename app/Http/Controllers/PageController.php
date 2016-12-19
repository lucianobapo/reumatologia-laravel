<?php

namespace App\Http\Controllers;

use ErpNET\Models\v1\Repositories\PageRepositoryEloquent;
use Illuminate\Http\Request;

class PageController extends Controller
{

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        if (request()->route()->getName()=='pages.membros') {
            $this->middleware('auth');
        }

    }

    public function show(Request $request)
    {
        $name = explode('.', $request->route()->getName());
//        $aux = new PageRepositoryEloquent;
//        $aux->findByField('rota', $name[1]);
        $item = app(\ErpNET\Models\v1\Repositories\PageRepositoryEloquent::class)->findByField('rota', $name[1])->first();
//        dd($item);
        return view('pages')->with(['pageData'=>$item]);
    }
}
