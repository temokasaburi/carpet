@extends('admin.home')
@section('content')

    <form action="/home/gallery/store" method="POST" enctype="multipart/form-data" style="margin-top:50px;">
        @csrf
        <div class="col-12 col-md-12"><input type="file" id="file-input" name="img" class="form-control-file"  style="margin-bottom:50px;"></div>
        <div class="form-group col-sm-6">
            <label for="price" class=" form-control-label">Price</label>
            <input type="text" id="price" name="price" placeholder="Price" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label for="oldprice" class=" form-control-label">Old Price</label>
            <input type="text" id="oldprice" name="oldprice" placeholder="Old Price" class="form-control">
        </div>
        
        <input class="btn btn-success" type="submit" value="Submit" style="margin:15px">

    </form>



@endsection