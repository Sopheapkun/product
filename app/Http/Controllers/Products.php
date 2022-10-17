<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class Products extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::get();
        // DB::('products')->join('id') // query builder
        $products = Product::with('getCategory', 'getCreator')->get();
        // dd($products);
       // dd($products);
       // $categories = Category::with('getProducts')->get();
        //dd($categories);
        return view('products/index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::get();
        return view('products/create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
       $data = [
        'product_name' => $request->input('pro_name'),
        'category_id' => $request->cat_id
       ];
       //dd($data);
       Product::create($data);
       return redirect(url('product/'));
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
        $data = Product::where('id', $id)->first();
       // dd($data);
        return view('products/edit',compact('data'));

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
        $data = [
            'product_name' => $request->input('pro_name'),
            'category_id' => $request->input('cat_id')
           ];
           //dd($data);
           Product::where('id', $id)->update($data);
           return redirect(url('product/'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Product::where('id',$id)->delete($id);
        return redirect(url('/'));
    }
}
