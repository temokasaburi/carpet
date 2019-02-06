@extends('admin.home')
@section('content')




<div class="card-body">
    <table class="table table-dark">
        <tbody>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Old Price</th>
                <th scope="col">Control</th>
            </tr>
            @foreach ($images as $image)
                <tr>
                    <td style=" padding: 1px;"><img style="height: 46px;" src="/{{$image->img}}" alt="{{$image->img}}"></td>
                    <td>{{$image->price}}</td>
                    <td>{{$image->oldprice}}</td>
                    <td><a href="/home/gallery/{{$image->id}}/edit" style="margin-right:20px; "><i class="fa fa-pencil" style="color:white"></i></a> <a href="/home/gallery/{{$image->id}}/delete"><i style="color:white" class="fa fa-times"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/home/gallery/create"><button type="button" class="btn btn-success">Add Slide</button></a>
</div>









@endsection