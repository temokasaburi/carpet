<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\About;

class AboutController extends Controller
{   
    private $destination_path = 'assets/img/';





    public function edit()
    {
        $about = About::find('1');
        return view('admin.about.edit', compact('about'));
    }
    
    public function change(Request $request, About $about)
    {
        
        // dd($request);
        $request->validate([
            'text' => 'required|max:2000',
            'img1' => 'image|mimes:jpg,png,jpeg,svg',
            'img2' => 'image|mimes:jpg,png,jpeg,svg',
        ]);
        
        $file1 = $about->img1;
        $file2 = $about->img2;
        $about = About::find('1');
        $about->text = request('text');
        if ($request->hasFile('img1')) {
            $about->img1 = $this->file_upload(request('img1'));

            $this->file_delete1($file1);
        }
        if ($request->hasFile('img2')) {
            $about->img2 = $this->file_upload(request('img2'));

            $this->file_delete2($file2);
        }
        $about->save();
        return back();
    }









        private function file_upload($file)
    {
        $current_file_name = $file->getClientOriginalName();
        $file_name = rand(10, 1000) * time() . str_replace_last(' ', '_', $current_file_name);
        $file->move($this->destination_path, $file_name);
        return $this->destination_path . $file_name;
    }
    private function file_delete1($file1)
    {
        if (\File::exists($file1)) {
            \File::delete($file1);
        }
    }

    private function file_delete2($file2)
    {
        if (\File::exists($file2)) {
            \File::delete($file2);
        }
    }
}
