<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Admin;

class AdminController extends Controller
{
 
	public function __construct(){
       
       $this->middleware('auth:admin');
    }

   public function index(){
   
 	$data['page_title'] = 'Admin Dashboard';
   	return view('admin.index',$data);

    }
}
