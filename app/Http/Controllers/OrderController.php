<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Employee;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Order::all();
        return view('orders.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee=Employee::all();
        $product=Product::all();
        return view('orders.create',compact('employee'),compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'date'=>'required|string|min:3|max:20',
                'productId'=>'required|numeric|exists:products,id',
                'employeeId'=>'required|numeric|exists:employees,id',
            ]
        );
        $order=new Order();
        $order->date=$request->date;
        $order->product_id=$request->productId;
        $order->employee_id=$request->employeeId;
        $order->save();
        return redirect('orders')->with('success','Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $employee=Employee::all();
        $product=Product::all();
        return view('orders.edit')->with('order', $order)->
        with('employee', $employee)->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $request->validate(
            [
                'date'=>'required|string|min:3|max:20',
                'productId'=>'required|numeric|exists:products,id',
                'employeeId'=>'required|numeric|exists:employees,id',
            ]
        );
        $order=Order::find($order->id);
        $order->date=$request->date;
        $order->product_id=$request->productId;
        $order->employee_id=$request->employeeId;
        $order->save();
        return redirect('orders')->with('success','Edit Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect('orders')->with('success','Delete Successfully');
    }
}