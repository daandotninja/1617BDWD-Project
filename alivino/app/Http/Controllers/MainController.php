<?php


namespace App\Http\Controllers;
use App\User;
use App\Product;
use App\Order;
use App\Orders_has_product;
use App\Shoppingcar;
use App\Aboutshop;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function footer()
    {
        $about= Aboutshop::select('email','address','city','phone')
        ->where('name', '=', 'Alivino')
        ->first();

        return $about;
    }
    public function overview()
    {
        
        $products= Product::withCount('orders_has_product')
        ->orderBy('orders_has_product_count', 'desc')
        ->take(8)
        ->get();

      

        return view('main.overview', [
            'products' => $products,
            'about'=> $this->footer()            
        ]);
    }
    public function shops()
    {   
        $products= Product::paginate(8);
        return view('main.shops', [
            'products' => $products,
           'about'=> $this->footer()    
        ]);
    }
    public function about()
    {
        $about= Aboutshop::select('email','address','city','about')
        ->where('name', '=', 'Alivino')
        ->first();

        return view('main.about', [
            'about'=> $about      
        ]);
    }
    public function contact()
    {
       

        return view('main.contact', [
            
             'about'=> $this->footer() 
        ]);
    }
    public function sendmail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'

        ]);

        return redirect('/contact');
    }
    public function product($id)
    {
        $product= Product::findOrFail($id);
        

        return view('main.product', [
             'about'=> $this->footer(),
             'product' => $product
        ]);
    }
    public function search(Request $request)
    {
        $products= NULL;
        if ($request->search != NULL) {
           $products= Product::where('year', 'like', '%'.$request->search.'%')
        ->orWhere('title', 'like', '%'.$request->search.'%')
        ->get();
        }
        

        return view('main.search', [
             'about'=> $this->footer(),
             'products' => $products
        ]);
    }
}
