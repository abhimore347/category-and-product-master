<?php

namespace App\Http\Controllers;
use App\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category::all();
        // $categories =Category::paginate(2);
        return view("Categories/view")->with(['category'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Categories/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo "store";
        // dd($request);
        $category =new Category;
        $category->category_name =$request->input('Category_name');
        $category->category_description	=$request->input('Category_description');
        $category->save();

        return redirect('Category/create')->with('success_msg','Category inserted succesfully...');
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
        $category = Category::find($id);
        return view('Categories/edit')->with(['category'=>$category]);
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
       $category= Category::find($id);
       $category->category_name =$request->input('Category_name');
       $category->category_description =$request->input('Category_description');
       $category->save();
       return redirect('/Category')->with('success_msg','Category Updated succesfully...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category= Category::find($id);
        $category->delete();
       return redirect('/Category')->with('errormsg','Category Deleted succesfully...');
    }
}
