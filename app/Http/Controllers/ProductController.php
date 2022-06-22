<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Product::all();
        $category=Category::all();
        return view('products.index',compact('data'),compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('products.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileExt=$request->productImage->getClientOriginalExtension();
        $fileName=time().".".$fileExt;
        $path="images/Products";
        $request->productImage->move($path,$fileName);
        $request->validate(
            [
                'productName'=>'required|string|min:3|max:20',
                'productPrice'=>'required|numeric',
                'productDesc'=>'required|string|min:3|max:20',
                'categoryId'=>'required|numeric|exists:categories,id',
            ]
        );
        $product=new Product();
        $product->productName=$request->productName;
        $product->price=$request->productPrice;
        $product->description=$request->productDesc;
        $product->category_id=$request->categoryId;
        $product->Image=$fileName;
        $product->save();
        return redirect('products')->with('success','Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $category=Category::all();
        return view('products.edit',compact('category'))->with(compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $fileExt=$request->productImage->getClientOriginalExtension();
        $fileName=time().".".$fileExt;
        $path="images/Products";
        $request->productImage->move($path,$fileName);
        $request->validate(
            [
                'productName'=>'required|string|min:3|max:20',
                'productPrice'=>'required|numeric',
                'productDesc'=>'required|string|min:3|max:20',
                'categoryId'=>'required|numeric|exists:categories,id',
            ]
        );
        $product=Product::find($product->id);
        $product->productName=$request->productName;
        $product->price=$request->productPrice;
        $product->description=$request->productDesc;
        $product->category_id=$request->categoryId;
        $product->Image=$fileName;
        $product->save();
        return redirect('products')->with('success','Edit Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('products')->with('success','deleted successfully');
    }
}