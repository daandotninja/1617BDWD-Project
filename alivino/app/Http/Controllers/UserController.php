<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Order;
use App\Orders_has_product;
use App\Shoppingcar;
use App\Aboutshop;
use Auth;
class UserController extends Controller
{

	public function footer()
    {
        $about= Aboutshop::select('email','address','city','phone')
        ->where('name', '=', 'Alivino')
        ->first();

        return $about;
    }
    public function shoppingcar()
    {
        

    	$carts= Auth::user();     

	    return view('user.shoppingcar', [
	    	  'about'=> $this->footer(),
              'carts' => $carts  
	    ]);
    }
    public function overview()
    {
        
       

        $user=Auth::user();
        $orders=Auth::user()->orders()->orderBy('created_at','desc')->get();
         

        return view('user.overview', [
              'about'=> $this->footer() ,
              'user' => $user ,
              'orders'=>$orders
        ]);
    }
    public function shoppingcaradd(Request $request)
    {

        $this->validate($request, [
            
            'amount' => 'required',
            
      
        ]);
       

        Auth::user()
        ->shoppingcars()
        ->updateOrCreate(['product_id'=> $request->product_id,'user_id'=> Auth::id()],$request->except('_token'));

        
        

        return redirect('/user/shoppingcar');

    }
     public function addorder()
    {

        
       

        $orders=Auth::user()->shoppingcars()->get();
       
        

        if (empty($orders->toArray())) {
            return redirect('/user/shoppingcar');
        }
        $addorder = new Order;
        $addorder->status='ongeleverd';
        $addorder->user_id= Auth::id();
        $addorder->save();
  
        foreach ($orders as $order){
            
            $addohp = new Orders_has_product;
            $addohp->order_id= $addorder->id;
            $addohp->product_id = $order->product_id;
            $addohp->price = $order->product['price'];
            $addohp->amount = $order->amount;
            $addohp->save();
            shoppingcar::destroy($order->id);
            

        }
         return redirect('/user/shoppingcar');
    }
        
        
    public function order($id)
    {
        
       

        $user=Auth::user();
        $order=Auth::user()->orders()->orderBy('created_at','desc')->find($id);
         

        return view('user.detail', [
              'about'=> $this->footer() ,
              
              'order'=>$order
        ]);
    }

        

    
    public function productdelete($id)
    {

       $delete = Shoppingcar::destroy($id);

        return redirect('/user/shoppingcar');

    }


}
