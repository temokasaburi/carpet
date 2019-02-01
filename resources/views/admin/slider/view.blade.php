@extends('admin.home')
    @section('content')
            
            <div class="card-body">
                <table class="table table-dark">
                    <tbody>
                        @foreach ($sliders as $slider)
                            <tr>
                                <td>{{$slider->title}}</td>
                                <td style=" padding: 1px;"><img style="height: 46px;" src="/{{$slider->img}}" alt="{{$slider->img}}"></td>
                                <td><a href="/home/slider/{{$slider->id}}/edit" style="margin-right:20px; " ><i class="fa fa-pencil" style="color:white"></i></a> <a href="/home/slider/{{$slider->id}}/delete"><i style="color:white" class="fa fa-times"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/home/slider/create"><button type="button" class="btn btn-success">Add Slide</button></a>
            </div>
            



    @endsection
