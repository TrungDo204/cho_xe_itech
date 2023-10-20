<?php //app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();
class ProductController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getData = DB::table('product as pro')
				->select('pro.id','pro.name_pro','pro.price_pro','pro.decription_pro','pro.company','pro.type_pro','pro.year_created','pro.traveled','pro.fuel','pro.image')->get();
        return view("admin.admin_product")->with('product',$getData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.admin_insert");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this -> validate($request,[
            'name_pro' => 'required',
            'price_pro' => 'required',
            'decription_pro' => 'required',
            'company' => 'required',
            'type_pro' => 'required',
            'year_created' => 'required',
            'traveled' => 'required',
            'fuel' => 'required',
            'image' => 'required'
        ]);
        $getimage = '';
        if($request->hasFile('image')){
            //Hàm kiểm tra dữ liệu
            $this->validate($request, 
                [
                    //Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
                    'image' => 'mimes:jpg,jpeg,png,gif|max:2048',
                ],			
                [
                    //Tùy chỉnh hiển thị thông báo không thõa điều kiện
                    'image.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
                    'image.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
                ]
            );
        }
		//Lưu hình ảnh vào thư mục public/admin_image
		$image = $request->file('image');
		$getimage = time().'_'.$image->getClientOriginalName();
		$destinationPath = public_path('admin_image');
		$image->move($destinationPath, $getimage);
        //Lấy giá trị đã nhập
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $allRequest  = $request->all();
        $name = $allRequest['name_pro'];
        $price = $allRequest['price_pro'];
        $decription = $allRequest['decription_pro'];
        $company = $allRequest['company'];
        $type = $allRequest['type_pro'];
        $year = $allRequest['year_created'];
        $traveled  = $allRequest['traveled'];
        $fuel = $allRequest['fuel'];
        //Gán giá trị vào array
        $dataInsertToDatabase = array(
            'name_pro'  => $name,
            'price_pro' => $price,
            'decription_pro' => $decription,
            'company' => $company,
            'type_pro' => $type,
            'year_created' => $year,
            'traveled' => $traveled,
            'fuel' => $fuel,
            'image' => $getimage,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        );
        //Insert vào bảng tbl_hocsinh
	    DB::table('product')->insert($dataInsertToDatabase);
        return redirect('/admin/admin_insert');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $getData = DB::table('product')->select('id','name_pro','price_pro','decription_pro','company','type_pro','year_created','traveled','fuel','image')->where('id',$id)->get();
        return view("admin.admin_edit", ['getProductById'=>$getData] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $this -> validate($request,[
            'name_pro' => 'required',
            'price_pro' => 'required',
            'decription_pro' => 'required',
            'company' => 'required',
            'type_pro' => 'required',
            'year_created' => 'required',
            'traveled' => 'required',
            'fuel' => 'required',
            'image' => 'required'   
        ]);
        if($request->hasFile('image')){
            //Hàm kiểm tra dữ liệu
            $this->validate($request, 
                [
                    //Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
                    'image' => 'mimes:jpg,jpeg,png,gif|max:2048',
                ],			
                [
                    //Tùy chỉnh hiển thị thông báo không thõa điều kiện
                    'image.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
                    'image.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
                ]
            );
            //Xóa file hình cũ
            $getImage = DB::table('product')->select('image')->where('id',$request->id)->get();
            if($getImage[0]->image != '' && file_exists(public_path('admin_image/'.$getImage[0]->image)))
            {   
                unlink(public_path('admin_image/'.$getImage[0]->image));
            }
            
            //Lưu file hình mới
            $image = $request->file('image');
            $getimage = time().'_'.$image->getClientOriginalName();
            $destinationPath = public_path('admin_image');
            $image->move($destinationPath, $getimage);
            DB::table('product')->where('id', $request->id)->update([
                'image' => $getimage
            ]);
        }
        DB::table('product')->where('id', $request->id)->update([
            'name_pro'  => $request->name_pro,
            'price_pro' => $request->price_pro,
            'decription_pro' => $request->decription_pro,
            'company' => $request->company,
            'type_pro' => $request->type_pro,
            'year_created' => $request->year_created,
            'traveled' => $request->traveled,
            'fuel' => $request->fuel,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect('admin/'.$request->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('product')->where('id', '=', $id)->delete();
        return redirect('/admin/admin_product');
    }
    //
    public function vehicle($id){
        $getData = DB::table('product as vhc')->select(
            'vhc.name_pro',
            'vhc.price_pro',
            'vhc.decription_pro',
            'vhc.company',
            'vhc.type_pro',
            'vhc.year_created',
            'vhc.traveled',
            'vhc.fuel',
            'vhc.image')->where('id',$id)->get();
        $getContact = DB::table('contact as con')->select(
            'con.id',
            'con.name_con',
            'con.tele_con',
            'con.address_con',
            'con.car_con',
            'con.date_con',
            'con.decription_con')->where('id',$id)->get();
        return view('/vehicle')->with('product',$getData)->with('contact',$getContact);
    }

}
