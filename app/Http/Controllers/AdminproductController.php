<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagory;
use App\Models\product;
use Illuminate\Support\Str;
use App\Http\Requests\ProductSaveRequest;
use Illuminate\Support\Facades\Storage;

class AdminproductController
{
    public function list(){
        $products=product::latest()->paginate(15);
        return view('layout.products.list',compact('products'));
    }
    public function create(){
        $catagories=catagory::all();
        return view('layout.products.create',compact('catagories'));
    }
    public function save(ProductSaveRequest $request){
        $input = $request->validated();
        // $filename = null;
        if($request->hasFile('image')){
            $extension = $request->image->extension();
            $filename=Str::random(6)."_".time()."_products.".$extension;
            $request->image->storeAs('images',$filename);
            $input['image']=$filename;
        }

        product::create($input);
       return redirect()->route('admin.product.list')->with('message','Product saved successfully');

    }
    public function edit($id){
        $products=product::find(decrypt($id));
        $catagories=catagory::all();
        return view('layout.products.edit',compact('products','catagories'));

    }

    public function update(ProductSaveRequest $request){
        $input=$request->validated();
        $products=product::find(decrypt($request->product_id));
        if($request->hasFile('image')){
            Storage::delete('images/'.$products->image);
            $extension = $request->image->extension();
            $filename=Str::random(6)."_".time()."_products.".$extension;
            $request->image->storeAs('images',$filename);
            $input['image']=$filename;
    }
    $products->update($input);
    return redirect()->route('admin.product.list')->with('message','Product updated successfully');
}
    public function delete($id){
        $products= Product::find(decrypt($id));
        if(!empty($products)){
            Storage::delete('images/'.$products->image);
        }
        $products->delete();
        return redirect()->route('admin.product.list')->with('message','Product deleted successfully');
    }
   

}
