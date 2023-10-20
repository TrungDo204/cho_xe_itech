<!-- views/admin/admin_edit.php -->
@extends('admin_layout')
@section('content')
<form class="mx-auto p-3 border border-primary" method="post" enctype="multipart/form-data" action="{{ url('/admin/admin_edit') }}">
<h1 class="text-primary p-2 h3" >Update Product</h1>
    <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}" />
	<input type="hidden" id="id" name="id" value="{!! $getProductById[0]->id !!}" />
    <div class="mb-3">
        <label>Name</label> 
        <input value="{{$getProductById[0]->name_pro}}" id="name_pro" class="form-control" name="name_pro" >
    </div>
    <div class="mb-3">
        <label>Price</label> 
        <input value="{{$getProductById[0]->price_pro}}" id="price_pro" class="form-control" name="price_pro" type="text">
    </div>
    <div class="mb-3">
        <label>Decription</label> 
        <input value="{{$getProductById[0]->decription_pro}}" id="decription_pro" class="form-control" name="decription_pro" type="text">
    </div>
    <div class="mb-3">
        <label>Company</label> 
        <input value="{{$getProductById[0]->company}}" id="company" class="form-control" name="company" type="text">
    </div>
    <div class="mb-3">
        <label>Vehicles</label> 
        <input value="{{$getProductById[0]->type_pro}}" id="type_pro" class="form-control" name="type_pro" type="text">
    </div>
    <div class="mb-3">
        <label>Year</label> 
        <input value="{{$getProductById[0]->year_created}}" id="year_created" class="form-control" name="year_created" type="text">
    </div>
    <div class="mb-3">
        <label>Traveled</label> 
        <input value="{{$getProductById[0]->traveled}}" id="traveled" class="form-control" name="traveled" type="text">
    </div>
    <div class="mb-3">
        <label>Fuel</label> 
        <input value="{{$getProductById[0]->fuel}}" id="fuel" class="form-control" name="fuel" type="text">
    </div>
    <div class="mb-3">
        <label>Image</label> 
        <input class="form-control" id="image" name="image" type="file" accept="image/*" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-warning py-2 px-5" >Save</button>
    </div>
    </form> 
@endsection