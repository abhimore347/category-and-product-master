<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\product;
use File;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $product = product::all();
        $product =product::paginate(5);
        return view("product/viewpro")->with(['product'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::all();
        return view("product/createpro",["categories"=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product= new product;
        if($request->has('product_file')){
            $multiple_files = $request->file('product_file');
            $i = 1;
            foreach((array)$multiple_files as $multiple){
                $extns = $multiple->extension();
                $file_names = time().$i.'.'.$extns;
                $path = public_path().'/uploads/';
                $multiple->move($path, $file_names);
                $i++;
                $file_array[] = $file_names;
    
            }
            $upload_file_names = implode(', ', $file_array);
        }
        else{
            $upload_file_names = 'default_img.jpg';
        }

        $categoryid = $request->input("categoryid");
        // dd($categoryid);
        $product->product_name=$request->input('Product_name');
        $product->product_description=$request->input('Product_decsription');
        $product->file_name= $upload_file_names;
        $product->save();
        $product->category()->attach($categoryid);
        return redirect("/product/create")->with("success_msg","Product inserted successfully");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        // dd($categories);
        $product= Product::find($id);
        $product_categories =$product->category->pluck('id');

        $array=[];
        foreach($product_categories as $cat){
            $array[]=$cat;
        }
        // dd($product_categories );
        return view('product/editpro')->with(['product'=>$product,'categories'=>$categories,'product_categories'=>$array]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::find($id);
        // dd($request->file());
        if($request->has('product_file')){
            $multiple_files = $request->file('product_file');
            $path = public_path().'/uploads/';
            // dd($product);
            foreach(explode(', ',$product->file_name) as $image){
                File::delete($path.$image);
            }
            $i = 1;
            foreach($multiple_files as $multi){
                $extns = $multi->extension();
                $file_names = time().$i.'.'.$extns;
                $multi->move($path, $file_names);
                $i++;
                $file_array[] = $file_names;
            }
            $upload_file_names = implode(', ', $file_array);
        }
        else{
            $upload_file_names = $product->file_name;
        }
       $category_ids =$request->input("category_ids");
       $product =Product::find($id);
       $product->product_name =$request->input("Product_name");
       $product->file_name =$upload_file_names;
       $product->product_description =$request->input("Product_decsription");
       $product->save();
       $product->category()->sync($category_ids);
       return redirect('/product')->with('success_msg','Product updated succesfully...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product =Product::find($id);
        $categories =$product->category()->pluck('category_id');
        $array=[];
        foreach($categories as $cat){
            $array[]=$cat;
        }
        $product->category()->detach($array);
        // dd($array);
        $product->delete();
        
        return redirect('/product')->with('errormsg','Product deleted succesfully...');
    }
}
