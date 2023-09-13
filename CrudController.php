<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;



class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('/home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //uplaod image
        $imageName=time().'.'.$request->image->extension();
        $request->image->move(public_path('products'),$imageName);

        $crud=new crud;
        $crud->image=$imageName;
        $crud->name=$request->name;
        $crud->description=$request->description;
        $crud->save();
        return back();


      
    }

    /**
     * Display the specified resource.
     */
    public function show(crud $crud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(crud $crud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, crud $crud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(crud $crud)
    {
        //
    }
}
