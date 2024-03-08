<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{


    public function UpdateTestimonial(Request $request)
    {



        $existingTestimonial = Testimonial::where('email', $request->mail)
            ->first();

        if ($existingTestimonial) {
            // Testimonial already exists, redirect back with an error message
            $notification = array(
                'message' => 'You have already submitted this testimonial.',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        Testimonial::insert([
            'comments' => $request->comment,
            'name' => $request->name,
            'email' => $request->mail,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Testimonial Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('home')->with($notification);
    }

}
