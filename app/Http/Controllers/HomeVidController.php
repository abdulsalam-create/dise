<?php

namespace App\Http\Controllers;

use App\Models\HomeVid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class HomeVidController extends Controller
{

    public function AllVid() {
        $allvid = HomeVid::latest()->get();
        return view('admin.all_vid', compact('allvid'));
    }
     public function EditVid($id) {
       
        $editvid= HomeVid::findOrFail($id);
        $allvid = HomeVid::where('id', $id)->get();


        return view('admin.homevid_edit', compact('editvid', 'allvid'));
    }

    public function HomevidUpdate(Request $request, $id) {

        $data = HomeVid::find($id);
        $data->over_desc = $request->desc;

        
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
  
        return redirect()->route('all.vid')->with($notification);
    }

}
