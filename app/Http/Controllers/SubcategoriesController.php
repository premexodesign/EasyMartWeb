<?php

namespace App\Http\Controllers;

use App\subcategories;
use App\category;
use Illuminate\Http\Request;

class SubcategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $subcategories= subcategories::with('category')->get()->all();
        $subcategories= subcategories::orderBy('subcategoryname')->paginate(5);
        return view('/viewsubcategory', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category= category::all();
        return view('/addsubcategory', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->subcategoryname,$request->category_id);
        subcategories::create([
            'category_id' => $request->category_id,
            'subcategoryname' => $request->subcategoryname,
        ]);
        return redirect('/subcategories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subcategories  $subcategories
     * @return \Illuminate\Http\Response
     */
    public function show(subcategories $subcategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subcategories  $subcategories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = subcategories::find($id);
        return view('/updatesubcategory', compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subcategories  $subcategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->id);
        $subcategory = subcategories::find($request->id);
        //dd($category);
        $subcategory->subcategoryname = $request->subcategoryname;
        
        $subcategory->save();
        return redirect('/subcategories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subcategories  $subcategories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = subcategories::find($id);
        $subcategory->delete();
        return back(); 
    }
}
