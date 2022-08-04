<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Contact;
use Redirect;

class FrondEndController extends Controller
{



    public function index(){
    return view('home-page');
    }

    public function storeContact(Request $request){
    		$user=new Contact;
            $user->name=$request->name;
            $user->email=$request->email;
            $user->message=$request->message;
            $user->save();
            return redirect::back()->with('message','Thanks For Contact Us!!!!');
		}



   
}
