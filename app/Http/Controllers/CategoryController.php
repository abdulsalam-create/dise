<?php

namespace App\Http\Controllers;

use App\Models\Calendly;
use App\Models\Category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class CategoryController extends Controller
{
    public function AllCat()
    {
        $allCat = Category::latest()->get();
        return view('admin.port.all_cat', compact('allCat'));
    }

    public function AddCat(Request $request)
    {
        $id = Auth::user()->id;
        $addPort = Category::find($id);
        return view('admin.port.add_cat', compact('addPort'));
    }

    public function StoreCat(Request $request)
    {

        Category::insert([
            'title' => $request->title,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message' => 'Portfolio Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.cat')->with($notification);

    }

    public function EditCat($id)
    {

        $editCat = Category::findOrFail($id);
        $allCat = Category::where('id', $id)->get();


        return view('admin.port.edit_cat', compact('editCat', 'allCat'));
    }

    public function UpdateCat(Request $request, $id)
    {

        $data = Category::find($id);
        $data->title = $request->title;
        $data->updated_at = Carbon::now();



        

        $data->save();

        $notification = array(
            'message' => 'Portfolio Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.cat')->with($notification);
    }


    // end of category


    // start of calendly

    public function AllCal()
    {
        $allCal = Calendly::latest()->get();
        return view('admin.calendly.all_cal', compact('allCal'));
    }

    public function EditCal($id)
    {

        $editCal = Calendly::findOrFail($id);
        $allCal = Calendly::where('id', $id)->get();


        return view('admin.calendly.edit_cal', compact('editCal', 'allCal'));
    }


    public function UpdateCal(Request $request, $id)
    {

        $data = Calendly::find($id);
        $data->link = $request->link;
        $data->updated_at = Carbon::now();



        

        $data->save();

        $notification = array(
            'message' => 'Portfolio Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.cal')->with($notification);
    }

}

