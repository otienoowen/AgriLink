<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Auth;
use App\Models\User;


class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //FARMER DASHBOARD
    public function index()
    {
        $product= User::orderBy('id', 'asc')->paginate(3);
        return view('farmer.farmer_profile', compact('product'));
    }

    //MARKET DASHBOARD
    public function index2()
    {
        $product= User::orderBy('id', 'asc')->paginate(3);
        return view('market.market-profile', compact('product'));
    }

        
    //FARMER EDIT PROFILE
    public function edit($id){
        $product = User::find($id);
        return view('farmer.profile-edit', compact('product'));
    }

    //FARMER EDIT PROFILE
    public function edit2($id){
        $product = User::find($id);
        return view('market.profile-edit', compact('product'));
    }

    public function update(Request $request, $id){
        $product= User::find($id);
        $product->name= $request->input('name');
        $product->email= $request->input('email');
        $product->role= $request->input('role');

        if($request->hasfile('profile_image')){
            $destination= 'uploads/product'.$product->profile_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file= $request->file('profile_image');
            $extension= $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('uploads/product/', $filename);
            $product->profile_image = $filename;
       }
        
        $product->update();
        return redirect()->back()->with('status', 'User Updated Succesfully');
    }

    //DELETE FUNCTION
    public function destroy($id){
        $product= User::find($id);
        $destination= 'uploads/product'.$product->profile_image;
        if(File::exists($destination)){
            File::delete($destination);
        }

        $product->delete();
        return redirect()->back()->with('status', 'User Deleted Succesfully');
    }


    //PRODUCTS CRUD
    //FARMER DIDPLAY OF PRODUCT

    //DISPLAY MARKET
    public function market_index()
    {
        $product=Product::all();
        return view('market.market-product', compact('product'));
    }
    public function products_index()
    {
        $product=Product::all();
        return view('farmer.farmer-product', compact('product'));
    }

    public function products_create()
    {
        $product=Product::all();
        return view('farmer.add', compact('product'));
    }

    public function products_store(Request $request){

        

        // $validated = $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255',],
    
        
        // ]);
        $product= new Product;
        $product->name= $request->input('name');
        $product->price= $request->input('price');

        if($request->hasfile('image')){
            $file= $request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('uploads/products/', $filename);
            $product->image = $filename;
       }
        
        $product->save();
        return redirect()->back()->with('status', 'Product Added succesfully');
    
    }

    public function products_edit($id){
        $product = Product::find($id);
        return view('farmer.farmer-edit', compact('product'));
    }

    public function products_update(Request $request, $id){
        $product= Product::find($id);
        $product->name= $request->input('name');
        $product->price= $request->input('price');

        if($request->hasfile('image')){
            $destination= 'uploads/products/'.$product->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file= $request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('uploads/products/', $filename);
            $product->image = $filename;
       }
        
        $product->update();
        return redirect()->back()->with('status', 'Product Updated Succesfully');
    }

    public function products_destroy($id){
        $product= Product::find($id);
        $destination= 'uploads/products'.$product->profile_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }

        $product->delete();
        return redirect()->back()->with('status', 'User image deleted succesfully');
    }

}
