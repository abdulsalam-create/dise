<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;

class CollectionController extends Controller
{
    public function AllCollection() {
        $allcollection = Collection::latest()->get();
        return view('admin.all_collection', compact('allcollection'));
    }

    public function AddCollection() {
        $id = Auth::user()->id;
        $addcollection = Collection::find($id);
        return view('admin.add_collection', compact('addcollection'));
    }

    public function StoreCollection(Request $request)
    {
           $image = $request->file('collection');

           # code...

              $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 343434.png
              Image::make($image)->sharpen(3)->save('upload/collection-img/' . $name_gen);
              $save_url = 'upload/collection-img/' . $name_gen;
              Collection::insert([
                 'over_text' => $request->title,
                  'over_desc' => $request->desc,
                  'collection_img' => $save_url,
                  'created_at' => Carbon::now(),

              ]);
              $notification = array(
                'message' => 'Collection Item Added Successfully',
                'alert-type' => 'success'
            );
             
              return redirect()->route('all.collection')->with($notification);

    } // End Method

    public function EditCollection($id) {
       
        $editcollection= Collection::findOrFail($id);
        $allcollection = Collection::where('id', $id)->get();


        return view('admin.edit_collection', compact('editcollection', 'allcollection'));
    }

    public function UpdateCollection(Request $request, $id) {

        $data = Collection::find($id);


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
            'message' => 'Monetise Image Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.collection')->with($notification);
    }
}
