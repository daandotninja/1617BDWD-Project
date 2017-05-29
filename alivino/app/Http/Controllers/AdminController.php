<?php

namespace App\Http\Controllers;
use App\User;
use App\Product;
use App\Order;
use App\Orders_has_product;
use App\Shoppingcar;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function overview()
    {
	    $orders=Order::all();
		return view('admin.overview', [
			'orders' => $orders,   
		]);
	}
    public function order($id)
    {
        
        

	     $order= Order::findOrFail($id);

	    return view('admin.order', [
	    	'order' => $order,            
	    ]);
    }
    public function products(Request $request)
    {
        $products= Product::where('year', 'like', '%'.$request->search.'%')
        ->orWhere('title', 'like', '%'.$request->search.'%')
        ->get();
        

      	

        return view('admin.products', [
            'products' => $products     
        ]);
    }
     public function addproductview()
    {

	    return view('admin.addproductoverview', [
	       
	    ]);
    }
     public function updatestatus(Request $request)
    {
        $this->validate($request, [
            'order_id' => 'required'
        ]);
        
        $update = Order::find($request->order_id)->update(array('status'=>'geleverd'));

       	return redirect('/admin/order/'.$request->order_id);

    }
    public function saveproduct(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'year' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'required',
            'images'=> 'required|images',
        ]);
        $filename = $request->file('images')->getClientOriginalName();
    	$newfilename= md5($filename. time()).'.'.$request->images->extension();
		$request->file('images')->move( base_path() . '/public/images/alivino/wine/',$newfilename);
		$request['img']=$newfilename;
        $save = Product::create($request->except('_token'));

        return redirect('/admin/products');

    }
    public function productdelete($id)
    {

       $delete = Product::destroy($id);

        return redirect('/admin/products');

    }
}

