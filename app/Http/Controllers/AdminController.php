<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index()
    {
        $admin= User::orderBy('id', 'asc')->paginate(3);
        return view('admin.index', compact('admin'));
    }

    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){

        

        // $validated = $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255',],
        //     //'password' => ['required', 'string', 'min:8', 'confirmed'],
        
        // ]);
        $admin= new User;
        $admin->name= $request->input('name');
        $admin->email= $request->input('email');
        $admin->password= Hash::make($request->input('password'));
        $admin->role= $request->input('role');

        if($request->hasfile('profile_image')){
            $file= $request->file('profile_image');
            $extension= $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('uploads/admin/', $filename);
            $admin->profile_image = $filename;
       }
        
        $admin->save();
        return redirect()->back()->with('status', 'User Added Succesfully');
    
    }

    public function edit($id){
        $admin = User::find($id);
        return view('admin.edit', compact('admin'));
    }

    public function update(Request $request, $id){
        $admin= User::find($id);
        $admin->name= $request->input('name');
        $admin->email= $request->input('email');
        $admin->role= $request->input('role');

        if($request->hasfile('profile_image')){
            $destination= 'uploads/admin'.$admin->profile_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file= $request->file('profile_image');
            $extension= $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('uploads/admin/', $filename);
            $admin->profile_image = $filename;
       }
        
        $admin->update();
        return redirect()->back()->with('status', 'User Updated Succesfully');
    }

    public function destroy($id){
        $admin= User::find($id);
        $destination= 'uploads/admin'.$admin->profile_image;
        if(File::exists($destination)){
            File::delete($destination);
        }

        $admin->delete();
        return redirect()->back()->with('status', 'User Deleted Succesfully');
    }


    //PRODUCTS CRUD
    public function products_index()
    {
        $admin=Product::all();
        return view('admin.products_index', compact('admin'));
    }

    public function products_create()
    {
        $admin=Product::all();
        return view('admin.products_create', compact('admin'));
    }

    public function products_store(Request $request){

        

        // $validated = $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255',],
    
        
        // ]);
        $admin= new Product;
        $admin->name= $request->input('name');
        $admin->price= $request->input('price');

        if($request->hasfile('image')){
            $file= $request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('uploads/products/', $filename);
            $admin->image = $filename;
       }
        
        $admin->save();
        return redirect()->back()->with('status', 'Product Added succesfully');
    
    }

    public function products_edit($id){
        $admin = Product::find($id);
        return view('admin.products_edit', compact('admin'));
    }

    public function products_update(Request $request, $id){
        $admin= Product::find($id);
        $admin->name= $request->input('name');
        $admin->price= $request->input('price');

        if($request->hasfile('image')){
            $destination= 'uploads/products/'.$admin->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file= $request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('uploads/products/', $filename);
            $admin->image = $filename;
       }
        
        $admin->update();
        return redirect()->back()->with('status', 'Product Updated Succesfully');
    }

    public function products_destroy($id){
        $admin= Product::find($id);
        $destination= 'uploads/products'.$admin->profile_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }

        $admin->delete();
        return redirect()->back()->with('status', 'User image deleted succesfully');
    }


}
