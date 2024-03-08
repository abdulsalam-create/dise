<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class ResourceController extends Controller
{
    public function download(Resource $resource)
    {
        // Increment download count or perform any other actions if needed

        $filePath = storage_path('app/' . $resource->file);

        return response()->download($filePath, $resource->name);
    }

    public function all()
    {
        $allResource = Resource::latest()->get();
        return view('admin.resource.all_resource', compact('allResource'));
    }

    public function add()
    {
        $id = Auth::user()->id;


        return view('admin.resource.add_resource');
    }

    public function store(Request $request)
    {
        $b_img = $request->file('img');


        $path = '';

        # code...

        $name_gen1 = hexdec(uniqid()) . '.' . $b_img->getClientOriginalExtension(); // 343434.png


        Image::make($b_img)->sharpen(3)->save('upload/resource/' . $name_gen1);

        $save_url_b = 'upload/resource/' . $name_gen1;



        $filePath = $request->file('file')->store('uploads');

        // Persist resource details in the database
        $resource = new Resource();
        $resource->name = $request->name;
        $resource->img = $save_url_b;
        $resource->file = $filePath;
        $resource->save();

        return redirect()->route('all.resource');

    }

    public function edit(Resource $resource)
    {
        $resource = Resource::where('id', $resource->id)->get();

        return view('admin.resource.edit_resource', compact('resource'));
    }

    public function update(Request $request, Resource $resource)
    {

        $resource = Resource::find($resource->id);
        $resource->name = $request->name;


        if ($request->hasFile('file')) {
            // Delete the old file
            Storage::delete($resource->file);

            // Store the new file
            $filePath = $request->file('file')->store('uploads');
            $resource->file = $filePath;
        }

        if ($request->file('img')) {
            $file = $request->file('img');

            @unlink(public_path('upload/resource/' . $resource->img));

            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension(); // 343434.png
            Image::make($file)->sharpen(3)->save('upload/resource/' . $name_gen);
            $save_url_b = 'upload/resource/' . $name_gen;
            $resource['img'] = $save_url_b;
        }





        $resource->save();
        return redirect()->route('all.resource');

    }


    public function destroy(Resource $resource)
    {
        // Delete the resource file from storage
        Storage::delete($resource->file);

        // Delete the resource from the database
        $resource->delete();
        session()->flash('success', 'Resource deleted successfully.');
        return redirect()->route('all.resource');
    }
}
