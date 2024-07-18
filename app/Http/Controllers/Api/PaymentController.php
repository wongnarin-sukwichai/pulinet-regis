<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function storePayment(Request $request)
    {
        $data = new Payment();

        $data->ref_id = $request['ref_id'];
        $data->title = $request['title'];
        $data->dep = $request['dep'];
        $data->vat = $request['vat'];
        $data->address = $request['address'];
        $data->slip = $request['slip'];
        $data->bank = $request['bank'];
        $data->date = $request['date'];
        $data->time = $request['time'];
        $data->price = $request['price'];
        $data->comment = $request['comment'];

        $data->save();

        $data = Member::find($request['ref_id']);
        $data->step_2 = 1;

        $data->update();

        return response()->json([
            'message' => 'บันทึกข้อมูลเรียบร้อย'
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
