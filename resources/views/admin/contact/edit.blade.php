@extends('admin.home')
@section('content')
    <form action="/home/contact/change"  method="post" style="margin-top:70px;">
        @csrf
        <div class="row form-group">
            <div class="col col-md-1"><label for="text-input" class=" form-control-label" style="padding-left:5px;">Email</label></div>
            <div class="col-12 col-md-11"><input type="text" id="text-input" name="email" value="{{$contact->email}}" placeholder="Email" class="form-control"></div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-1"><label for="text-input" class=" form-control-label" style="padding-left:5px;">Number</label></div>
            <div class="col-12 col-md-11"><input type="text" id="text-input" name="number" value="{{$contact->number}}" placeholder="Number" class="form-control"></div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-1"><label for="text-input" class=" form-control-label" style="padding-left:5px;">Address</label></div>
            <div class="col-12 col-md-11"><input type="text" id="text-input" name="address" value="{{$contact->address}}" placeholder="Address" class="form-control"></div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-1"><label for="text-input" class=" form-control-label" style="padding-left:5px;">FaceBook</label></div>
            <div class="col-12 col-md-11"><input type="text" id="text-input" name="facebook" value="{{$contact->facebook}}" placeholder="FaceBook" class="form-control"></div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-1"><label for="text-input" class=" form-control-label" style="padding-left:5px;">Instagram</label></div>
            <div class="col-12 col-md-11"><input type="text" id="text-input" name="instagram" value="{{$contact->instagram}}" placeholder="Instagram" class="form-control"></div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-1"><label for="text-input" class=" form-control-label" style="padding-left:5px;">Twetter</label></div>
            <div class="col-12 col-md-11"><input type="text" id="text-input" name="twetter" value="{{$contact->twetter}}" placeholder="Twetter" class="form-control"></div>
        </div>
        
        
        
        <div class="row form-group">
            <div class="col col-md-1"><label for="text-input" class=" form-control-label" style="padding-left:5px;">Google Map Src</label></div>
            <div class="col-12 col-md-11"><input type="text" id="text-input" name="google_map_frame" value="{{$contact->google_map_frame}}" placeholder="Google Map Lag" class="form-control"></div>
        </div>
        

        
        <input class="btn btn-success" type="submit" value="Save">
    </form>
@endsection