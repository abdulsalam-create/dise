<?php

namespace App\Http\Controllers;

use App\Jobs\SendBulkEmailJob;
use App\Mail\SendBulkEmail;
use App\Models\Mailer;
use App\Models\Shop;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ShopController extends Controller
{
    public function AllShop()
    {
        $allshop = Shop::latest()->get();
        return view('admin.shop.all_shop', compact('allshop'));
    }

    public function AddShop()
    {
        $id = Auth::user()->id;
        $addShop = Shop::find($id);
        return view('admin.shop.add_shop', compact('addShop'));
    }


    public function send(Request $request)
    {
        $emails = Mailer::pluck('email')->toArray();
        $subject = $request->input('subject');
        $message = (string) $request->input('message');

        foreach ($emails as $email) {
            SendBulkEmailJob::dispatch($email, $subject, $message);        }

        return redirect()->back()->with('success', 'Emails are being sent.');
    }


    public function Updateshop(Request $request, $id)
    {

        $shop = shop::find($id);
        $shop->title = $request->title;
        $shop->title_desc = $request->title_desc;

        $notification = array(
            'message' => 'shop updated Successfully',
            'alert-type' => 'success'
        );


        if ($request->file('b_img')) {
            $file = $request->file('b_img');

            @unlink(public_path('upload/shop/' . $shop->b_img));

            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension(); // 343434.png
            Image::make($file)->sharpen(3)->save('upload/shop/' . $name_gen);
            $save_url_b = 'upload/shop/' . $name_gen;
            $shop['b_img'] = $save_url_b;

           
        }

        if ($request->file('i_sect')) {
            $file = $request->file('i_sect');

            @unlink(public_path('upload/shop/' . $shop->s_img));

            $name_gen2 = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension(); // 343434.png
            Image::make($file)->sharpen(3)->save('upload/shop/' . $name_gen2);
            $save_url_f = 'upload/shop/' . $name_gen2;
            $shop['s_img'] = $save_url_f;

           
        }

        if ($request->file('i_sect2')) {
            $file = $request->file('i_sect2');

            @unlink(public_path('upload/shop/' . $shop->s_img2));

            $name_gen3 = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension(); // 343434.png
            Image::make($file)->sharpen(3)->save('upload/shop/' . $name_gen3);
            $save_url_f2 = 'upload/shop/' . $name_gen3;
            $shop['s_img2'] = $save_url_f2;

           
        }

        if ($request->file('i_sect3')) {
            $file = $request->file('i_sect3');

            @unlink(public_path('upload/shop/' . $shop->s_img3));

            $name_gen4 = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension(); // 343434.png
            Image::make($file)->sharpen(3)->save('upload/shop/' . $name_gen4);
            $save_url_f3 = 'upload/shop/' . $name_gen4;
            $shop['s_img3'] = $save_url_f3;

           
        }

        if ($request->file('i_sect4')) {
            $file = $request->file('i_sect4');

            @unlink(public_path('upload/shop/' . $shop->s_img4));

            $name_gen5 = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension(); // 343434.png
            Image::make($file)->sharpen(3)->save('upload/shop/' . $name_gen5);
            $save_url_f4 = 'upload/shop/' . $name_gen5;
            $shop['s_img4'] = $save_url_f4;

           
        }

        $shop->save();
        return redirect()->route('all.shop')->with($notification);
        
    }
}
