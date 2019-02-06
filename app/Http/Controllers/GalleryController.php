<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Gallery;

class GalleryController extends Controller
{

    private $destination_path = 'img/'; 


    public function index(){
        $images = Gallery::get();
        return view('admin.gallery.index', compact('images'));
    }
    public function create(){
        return view('admin.gallery.create');
    }
    public function store(Request $request){
        $request->validate([
            'price' => 'required|max:255',
            'img' => 'image|mimes:jpg,png,jpeg,svg|required',
        ]);

        $image = new Gallery;
        $image->price = request('price');
        $image->oldprice = request('oldprice');
        $image->img = $this->file_upload(request('img'));
        $image->save();
        return redirect('/home/gallery');


    }

    public function edit(Gallery $image)
    {
        return view('admin.gallery.edit', compact('image'));
    }
    
    public function change(Gallery $image, Request $request)
    {
        $id = $image->id;
        $file = $image->img;
        $image = Gallery::find($id);
        $image->price = request('price');
        $image->oldprice = request('oldprice');
        if ($request->hasFile('img')) {
            $image->img = $this->file_upload(request('img'));
            $image->img = $this->file_upload(request('img'));

            $this->file_delete($file);
        }
        else{
            $image->$file;
        }
        $image->save();
        return redirect('/home/gallery');
    }
    public function delete(Gallery $image)
    {
        $id = $image->id;
        $file = $image->img;
        $this->file_delete($file);
        $image = Gallery::destroy($id);
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
