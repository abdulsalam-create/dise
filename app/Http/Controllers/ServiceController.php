<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use App\Models\services;

class ServiceController extends Controller
{
    public function AllServices() {
        $id = Auth::user()->id;
        $allservice = Services::all();
 

        return view('admin.service', compact('allservice',));
    }
    public function EditServices($id) {
       
        $editservice= Services::findOrFail($id);
        $allservice = Services::where('id', $id)->get();


        return view('admin.service_edit', compact('editservice', 'allservice'));
    }

    public function ServiceSubmit(Request $request, $id) {


        $data = services::find($id);
        $data->service_title = $request->title;
        $data->service_desc = $request->desc;
        $data->updated_at = Carbon::now();



        if ($request->file('b_img')) {
            $file = $request->file('b_img');

            @unlink(public_path('upload/home-img/' . $data->b_img));

            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension(); // 343434.png
            Image::make($file)->sharpen(3)->save('upload/home-img/' . $name_gen);
            $save_url_b = 'upload/home-img/' . $name_gen;
            $data['img'] = $save_url_b;
        }
        $data->save();

  
        $notification = array(
            'message' => 'Section Edited Successfully',
            'alert-type' => 'success'
        );
        
        return redirect()->route('all.service')->with($notification);
    }
}
