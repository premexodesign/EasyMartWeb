<?php

namespace App\Http\Controllers;

use App\seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seller= seller::orderBy('id')->paginate(5);
        return view('/viewseller', compact('seller'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        seller::create([
            'fname' => $request->fname,
            'mname' => $request->mname,
            'lname' => $request->lname,
            'add' => $request->add,
            'city' => $request->city,
            'state' => $request->state,
            'pincode' => $request->pincode,
            'aadharcardno' => $request->aadharcardno,
            'contactno' => $request->contactno,
            'email' => $request->email,
        ]);
        return redirect('/seller');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, seller $seller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(seller $seller)
    {
        //
    }
}
