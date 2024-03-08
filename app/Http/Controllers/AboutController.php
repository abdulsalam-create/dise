<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Consult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    public function About()
    {
        $about = About::latest()->get();
        return view('admin.about.about', compact('about'));
    }

    public function Consult() {
        $consult = Consult::latest()->get();
        return view('admin.consult.consult', compact('consult'));
    }


    public function EditConsult($id)
    {

        $editconsult = Consult::findOrFail($id);
        $consult = Consult::where('id', $id)->get();


        return view('admin.consult.edit_consult', compact('editconsult', 'consult'));
    }

    public function StoreConsult(Request $request, $id)
    {

        $data = Consult::find($id);
        $data->h = $request->h;
        $data->h_0 = $request->h_0;
        $data->h_0_desc = $request->h_0_desc;
        $data->h_desc = $request->h_desc;
        $data->h_1 = $request->h_1;
        $data->h_2 = $request->h_2;
        $data->h_1_desc = $request->h_1_desc;
        $data->h_3 = $request->h_3;
        $data->h_2_desc = $request->h_2_desc;
        $data->h_3_desc = $request->h_3_desc;
        $data->h_4 = $request->h_4;
        $data->h_5 = $request->h_5;
        // $data->h_3_desc = $request->h_3_desc;
        $data->h_6 = $request->h_6;
        $data->h_7 = $request->h_7;


      
        // 'link' => $path,
        $data->updated_at = Carbon::now();



        if ($request->file('b_img')) {
            $file = $request->file('b_img');

            @unlink(public_path('upload/consult/' . $data->b_img));

            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension(); // 343434.png
            Image::make($file)->sharpen(3)->save('upload/consult/' . $name_gen);
            $save_url_b = 'upload/consult/' . $name_gen;
            $data['b_img'] = $save_url_b;
        }

        if ($request->file('f_img')) {
            $file = $request->file('f_img');

            @unlink(public_path('upload/consult/' . $data->b_img));

            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension(); // 343434.png
            Image::make($file)->sharpen(3)->save('upload/consult/' . $name_gen);
            $save_url_f = 'upload/consult/' . $name_gen;
            $data['i_img'] = $save_url_f;
        }

        if ($request->file('f_img2')) {
            $file = $request->file('f_img2');

            @unlink(public_path('upload/consult/' . $data->b_img));

            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension(); // 343434.png
            Image::make($file)->sharpen(3)->save('upload/consult/' . $name_gen);
            $save_url_f = 'upload/consult/' . $name_gen;
            $data['i_img2'] = $save_url_f;
        }


        $data->save();

        $notification = array(
            'message' => 'Image Updated Successfully',
            'alert-type' => 'success'
        );


        return redirect()->route('admin.consult')->with($notification);
    }

    public function AddAbout(Request $request)
    {
        $id = Auth::user()->id;
        $addAbout = About::find($id);
        return view('admin.about.add_about', compact('addAbout'));
    }


    public function StoreAbout(Request $request)
    {
        $b_img = $request->file('b_img');
       

        $path = '';

        # code...

        $name_gen1 = hexdec(uniqid()) . '.' . $b_img->getClientOriginalExtension(); // 343434.png
   


        Image::make($b_img)->sharpen(3)->save('upload/about/' . $name_gen1);
       

        $save_url_b = 'upload/about/' . $name_gen1;



        About::insert([
            'b_img' => $save_url_b,
            'h_1' => $request->h_1,
            'h_1_desc' => $request->h_1_desc,
            'h_2' => $request->h_2,
            'h_2_desc' => $request->h_2_desc,
            'h_3' => $request->h_3,
            'h_3_desc' => $request->h_3_desc,
         
            // 'link' => $path,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message' => 'Details Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.about')->with($notification);

    } // End Method





    public function EditAbout($id)
    {

        $editimg = About::findOrFail($id);
        $about = About::where('id', $id)->get();


        return view('admin.about.edit_about', compact('editimg', 'about'));
    }

    public function UpdateAbout(Request $request, $id)
    {

        $data = About::find($id);
        $data->h_1 = $request->h_1;
        $data->h_1_desc = $request->h_1_desc;
        $data->h_2 = $request->h_2;
        $data->h_2_desc = $request->h_2_desc;
        $data->h_3 = $request->h_3;
        $data->h_3_desc = $request->h_3_desc;
      
        // 'link' => $path,
        $data->updated_at = Carbon::now();



        if ($request->file('b_img')) {
            $file = $request->file('b_img');

            @unlink(public_path('upload/about/' . $data->b_img));

            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension(); // 343434.png
            Image::make($file)->sharpen(3)->save('upload/about/' . $name_gen);
            $save_url_b = 'upload/about/' . $name_gen;
            $data['b_img'] = $save_url_b;
        }


        $data->save();

        $notification = array(
            'message' => 'Image Updated Successfully',
            'alert-type' => 'success'
        );


        return redirect()->route('admin.about')->with($notification);
    }

    public function perform()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
}
