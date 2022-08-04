<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Notifications\OrderStatus;
use App\Notifications\OrderNotificatinToDeliveryGuys;
use Illuminate\Notifications\Notifiable;
use App\Mail\UserConfirmationMail;
use Session;
use Alert;
use Notification;
use App\Admin;
use App\Coupon;
use App\Order;
use App\DeliveryGuys;
use Auth;
use Redirect;
use Mail;
use App\Mail\OrderPlaced;
 

class ADashboardController extends Controller
{
    public function __construct(){
       
       $this->middleware('auth:admin');
    }


    public function index(){  
       $data['page_title']='Admin Dashboard';
       return view ('admin_dashboard.index',$data);
       
    }

  
        public function couponList(){

        $data['page_title'] = "Coupon List";
        $data['coupons'] = Coupon::all();
        return view ('admin.coupon.coupon_list',$data);

        }


       public function createCoupon(){

        $data['page_title']='Add Coupon';
       
       return view ('admin.coupon.create_coupon',$data);
       
      }


      public function storeCoupon(Request $request)
      { 

 
     $validator = Validator::make($request->all(), [
    'amount' => 'required|',
    'coupon_code' => 'required|unique:coupons|max:255'
  
    

    ]);

    if ($validator->fails()) {
    return redirect()->back()
                ->withErrors($validator)
                ->withInput();
    }
       

      
      $coupons=new Coupon;
      $coupons->coupon_code=$request->coupon_code;
      $coupons->amount=$request->amount;
      $coupons->expire_date=$request->expire_date;
      $coupons->status=$request->status;
      $coupons->amount_type=$request->amount_type;
      $coupons->save();
      return redirect ('admin/coupons')->with('message','Coupon Successfully Added');

     }


    public function editCoupon(Request $request,$id){

    $data['page_title'] = "Edit Coupon";   
    $data['coupon']=Coupon::findOrFail($id);


  return view ('admin.coupon.edit_coupon',$data);
  
    }


   public function updateCoupon(Request $request, $id)
  {

    
       Coupon::where('id',$id)
       ->update([
        'coupon_code'=> $request->coupon_code,
        'amount'=> $request->amount,
        'expire_date'=> $request->expire_date,
        'status'=> $request->status,
        'amount_type'=> $request->amount_type
         
        
      ]);
    

        return redirect('admin/coupons')->with('message','successfully updated');
    
  }




      public function deliverygysList() {
      
      $data['page_title']='DeliveryGuys List';
      $data['deliveryguys'] = DeliveryGuys::all();
      return view('admin.deliveryguys-list',$data);

  
}


    public function getAdminOrderNotification(Request $request) {

        $data['page_title']='Notification Details';
        $uid = Auth::guard('admin')->user()->id;
        $data['admin'] = Admin::find($uid);
        return view('admin.order-notification',$data);


      }

  public function assignOrder($orderId) {
      
      $data['order']= Order::find($orderId);

      $data['deliveryguys'] =DeliveryGuys::where('status','available')->get();
      $data['page_title']='Assign Order';

      return view('admin.assign-order',$data);

      }

  public function orderAssignToGuy(Request $request) {


      DeliveryGuys::where('id',$request->delivery_guy_Id)

       ->update([

                    'status'=> Busy,
                ]);

      Order::where('id',$request->order_id)

           ->update([

                       'order_status'=> assign,
                       'assign_to'=> $request->delivery_guy_Id,
              
                    ]);

                    $order= Order::find($request->order_id);
                    $deliveryguys = DeliveryGuys::find($request->delivery_guy_Id);
                    Notification::send($deliveryguys, new OrderNotificatinToDeliveryGuys($order));
                    Mail::send(new OrderPlaced($order));


    return redirect('admin/order-notification');

  }

 

    
     
}       
            
        

        