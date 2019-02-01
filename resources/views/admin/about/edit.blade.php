@extends('admin.home')
    @section('content')
        <form action="/home/about/change" enctype="multipart/form-data" method="post" style="margin-top:70px;">
            @csrf
            <div class="row form-group">
                <div class="col col-md-1"><label for="text-input" class=" form-control-label" style="padding-left:5px;">Text</label></div>
                <div class="col-12 col-md-11"><textarea name="text" id="textarea-input" rows="9" placeholder="Text..." class="form-control">{{$about->text}}</textarea></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-1"><label for="file-input" class=" form-control-label" style="padding-left:5px;">Image</label></div>
                <div class="col-12 col-md-11"><input type="file" id="file-input" name="img1" class="form-control-file"></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-1"><label for="file-input" class=" form-control-label" style="padding-left:5px;">Image</label></div>
                <div class="col-12 col-md-6"><input type="file" id="file-input" name="img2" class="form-control-file"></div> 
            </div>
            <input class="btn btn-success" type="submit" value="Submit">
        </form>




    @endsection