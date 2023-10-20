<!-- views/admin/admin_insert.php -->
@extends('admin_layout')
@section('content')
    <form class="mx-auto p-3 border border-primary" method="post" enctype="multipart/form-data" action="{{ url('/admin/admin_insert') }}">
    <h1 class="text-primary p-2 h3" >Insert Product</h1>
    <div class="mb-3">
        <label>Name</label> 
        <input class="form-control" name="name_pro" type="text" required>
    </div>
    <div class="mb-3">
        <label>Price</label> 
        <input class="form-control" name="price_pro" type="text" required>
    </div>
    <div class="mb-3">
        <label>Decription</label> 
        <input class="form-control" name="decription_pro" type="text" required>
    </div>
    <div class="mb-3">
        <label>Company</label> 
        <input class="form-control" name="company" type="text" required>
    </div>
    <div class="mb-3">
        <label>Vehicles</label> 
        <input class="form-control" name="type_pro" type="text" required>
    </div>
    <div class="mb-3">
        <label>Year</label> 
        <input class="form-control" name="year_created" type="text" required>
    </div>
    <div class="mb-3">
        <label>Traveled</label> 
        <input class="form-control" name="traveled" type="text" required>
    </div>
    <div class="mb-3">
        <label>Fuel</label> 
        <input class="form-control" name="fuel" type="text" required>
    </div>
    <div class="mb-3">
        <label>Image</label> 
        <input class="form-control" name="image" type="file" accept="image/*" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-warning py-2 px-5" >Save</button>
    </div>  @csrf
    </form> 
@endsection