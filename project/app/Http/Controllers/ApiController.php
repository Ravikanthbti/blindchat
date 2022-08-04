<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;
use App\User;

class ApiController extends Controller
{
    
public function register(Request $request) {

        $validator = Validator::make($request->all(), [

        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8'],
        'phone' => ['required','numeric'],
        //'profile_image.*' => ['mimes:jpeg,png,jpg|max:2048'],
                  
         ]);
        
        if ($validator->fails()) {

             return response()->json(['response' =>"error",'message'=>$validator->errors()], 200);
        }


            $user=new User;
            $user->name=$request->name;
            $user->phone=$request->phone;
            $user->email=$request->email;
            $user->password = Hash::make($request->password);
            $user->remember_token = $request->_token;

            // $image = $request->profile_image;
            // $filename = $image->getClientOriginalName();
            // $storagePath='assets/upload/user/'.$filename;
            // Image::make($image)->save($storagePath);
            // $user->profile_image= $filename;
            $user->save();
            return response()->json(['response'=>'Success','message'=> $user->name. ' '.' Registered successfully!!',$user], 200);
    }
    
    

public function login(Request $request){
   
        $credentials = [

                            'email' => $request->email,
                            'password' => $request->password
                        ];
           

        if (Auth::attempt($credentials)) {
                          
                return response()->json(['response'=>'Success','message'=>'Logged in successfully!!',"user"=>auth()->user()], 200);
            } 

        else{

                return response()->json(['response'=>'error','message'=>'Invalid email or password'], 200);
            }


        }


        public function userList() {
            
        $user= User::all();
        dd($user);
        return response()->json(['response'=>'success','message'=>'data list',$user], 200);

		}


        public function updateUser(Request $request, $id) {
    
        $validator = Validator::make($request->all(), [
            
            
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
           // 'password' => ['required', 'string', 'min:8'],
            'phone' => ['required','numeric'],
          
         ]);
        
        if ($validator->fails()) {

             return response()->json(['response' =>"error",'message'=>$validator->errors()], 200);
        }
        
        $user=User::findOrFail($id);
 
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => ' with user id ' . $id . ' not found'
            ], 400);
        }
 
      // if($request->hasFile('profile_image')){
        
      //   $image = $request->profile_image;
      //   $filename = $image->getClientOriginalName();
      //   $storagePath='assets/upload/user/'.$filename;
      //   Image::make($image)->save($storagePath);

      //   $hod=User::where('id',$id)
      //  ->update(['profile_image'=>$filename ]);
      //   }

        User::where('id',$id)

       ->update([

        'name'=> $request->name,
        'email'=> $request->email,
        'phone'=>$request->phone,
        

        ]);



        return response()->json(['response'=>'success','message'=>$user->name. ' '. 'updated successfully!!!',$user], 200);

        
    }


    public function destroyUser($id) {
    
            $user=User::find($id);

     
            if (!$user) {
                return response()->json([
                    'response' => "error",
                    'message' => 'user with id ' . $id . ' not found'
                ], 400);
            }
     
            if ($user->delete()) {
                return response()->json([
                    'response' => 'successfully deleted'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'user could not be deleted'
                ], 500);
            }
        }


        public function showUser($id) {

        $user = User::find($id);

        if (!$user) {

                return response()->json(['response' => "error", 'message' => 'user with id ' . $id . ' not found' ], 200);
            }

        else {

         return response()->json(['response'=>'success','message'=>'specific user info',$user], 200);


            }



        }





        

       
   
}          

           







