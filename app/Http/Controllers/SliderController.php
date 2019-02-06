<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Slider;

class SliderController extends Controller
{

    private $destination_path = 'img/';





    public function index()
    {
       $sliders = Slider::get();
       return view('admin.slider.view', compact('sliders'));
    }


    public function create()
    {
        return view('admin.slider.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255',
            'img' => 'image|mimes:jpg,png,jpeg,svg|required',
        ]);

        $slider = new Slider;
        $slider->title = request('title');
        $slider->img = $this->file_upload(request('img'));
        $slider->save();
        return redirect('/home/slider');
    }
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', compact('slider'));
    }
    
    public function change(Slider $slider, Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'img' => 'image|mimes:jpg,png,jpeg,svg',
        ]);
        $id = $slider->id;
        $file = $slider->img;
        $slider = Slider::find($id);
        $slider->title = request('title');
        if ($request->hasFile('img')) {
            $slider->img = $this->file_upload(request('img'));

            $this->file_delete($file);
        }
        $slider->save();
        return redirect('/home/slider');
    }
    public function delete(Slider $slider)
    {
        $id = $slider->id;
        $file = $slider->img;
        $this->file_delete($file);
        $slider = Slider::destroy($id);
        return back();
    }















    private function file_upload($file)
    {
        $current_file_name = $file->getClientOriginalName();
        $file_name = rand(10, 1000) * time() . str_replace_last(' ', '_', $current_file_name);
        $file->move($this->destination_path, $file_name);
        return $this->destination_path . $file_name;
    }
    private function file_delete($file)
    {
        if (\File::exists($file)) {
            \File::delete($file);
        }
    }
}
