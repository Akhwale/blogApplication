<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        if(Auth::check())

        {
            $validator = Validator::make($request->all(),[
                'issue'=> 'required|string'
            ]);

            if($validator->fails())
            {
                return redirect->back()->with('message','Contact text area is mondatory!');
            }
            
            
                Contact::create([
                    'user_id' => Auth::user()-> id,
                    'issue' => $request->issue
                ]);
                return redirect()->back()->with('message','Message sent successfully!');
            
            
        }
        else
        {
            return redirect('login')->with('message','Login first to contact us!');
        }

    }
}
