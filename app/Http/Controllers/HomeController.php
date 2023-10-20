<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $getData = DB::table('product as pro')
				->select(
                'pro.id',
                'pro.name_pro',
                'pro.price_pro',
                'pro.decription_pro',
                'pro.company',
                'pro.type_pro',
                'pro.year_created',
                'pro.traveled',
                'pro.fuel',
                'pro.image',
                'pro.created_at',
                'pro.updated_at')->get();
        return view("home")->with('product',$getData);
    }
}
