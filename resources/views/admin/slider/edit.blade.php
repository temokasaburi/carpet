@extends('admin.home')
    @section('content')
        <form action="/home/slider/{{$slider->id}}/change" enctype="multipart/form-data" method="post" style="margin-top:70px;">
            @csrf
            <div class="row form-group">
                <div class="col col-md-1"><label for="text-input" class=" form-control-label" style="padding-left:5px;">Title</label></div>
                <div class="col-12 col-md-11"><input type="text" id="text-input" name="title" value="{{$slider->title}}" placeholder="Title" class="form-control"></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-1"><label for="file-input" class=" form-control-label" style="padding-left:5px;">Image</label></div>
                <div class="col-12 col-md-11"><input type="file" id="file-input" name="img" class="form-control-file"></div>
            </div>
            <input class="btn btn-success" type="submit" value="Submit">
        </form>




    @endsection