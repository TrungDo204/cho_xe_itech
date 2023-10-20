<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('contact');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('contact');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $this -> validate($request,[
            'name_con' => 'required',
            'tele_con' => 'required',
            'address_con' => 'required',
            'car_con' => 'required',
            'date_con' => 'required',
            'decription_con' => 'required',
        ]);
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $allRequest  = $request->all();
        $name = $allRequest['name_con'];
        $tele = $allRequest['tele_con'];
        $address = $allRequest['address_con'];
        $car = $allRequest['car_con'];
        $date = $allRequest['date_con'];
        $decription = $allRequest['decription_con'];
        $dataInsertToDatabase = array(
            'name_con'  => $name,
            'tele_con' => $tele,
            'address_con' => $address,
            'car_con' => $car,
            'date_con' => $date,
            'decription_con' => $decription,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        );
        DB::table('contact')->insert($dataInsertToDatabase);
        return redirect('/contact');
    }

    public function show(){
        $getData = DB::table('contact as con')
				->select('con.id','con.name_con','con.tele_con','con.address_con','con.car_con','con.date_con','con.decription_con')->get();
        return view("admin.admin_contact")->with('contact',$getData);
    }

    public function destroy($id){
        DB::table('contact')->where('id', '=', $id)->delete();
        return redirect('/admin/admin_contact');
    }
}
