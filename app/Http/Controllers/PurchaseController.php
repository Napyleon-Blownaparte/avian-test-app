<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Http\Requests\StorePurchaseRequest;
use App\Http\Requests\UpdatePurchaseRequest;
use App\Models\Customer;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchases = Purchase::all();
        return view('purchases.index', [
            'purchases' => $purchases,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Customer $customer)
    {
        $allCustomers = Customer::all();
        return view('purchases.create', [
            'customer' => $customer,
            'allCustomers' => $allCustomers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePurchaseRequest $request)
    {
        Purchase::create([
            'customer_id' => $request->input('customer_id'),
            'purchase_date' => $request->input('purchase_date'),
            'total_price' => $request->input('total_price'),
        ]);

        return redirect()->route('purchases.index')->with('success', 'You have successfully add purchase');
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchase $purchase)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePurchaseRequest $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
