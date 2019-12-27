<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $category= category::orderBy('id')->paginate(5);
        return view('/viewcategory', compact('category'));

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $category = DB::table('categories')->where('categoryname', 'like', '%'.$search.'%' );
        return view('viewcategory', compact('category'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->categoryname);
        category::create([
            'categoryname' => $request->categoryname,
        ]);
        return redirect('/item');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = category::find($id);
        return view('/updatecategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //dd($request->id);
        $category = category::find($request->id);
        //dd($category);
        $category->categoryname = $request->categoryname;
        
        $category->save();
        return redirect('/item');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = category::find($id);
        $category->delete();
        return back(); 
    }


    
}
