<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $data->step_3 = 0;

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

        $data = DB::table('members')
        ->where('members.id', $id)
        ->join('payments', 'members.id', 'payments.ref_id')
        ->select('members.name', 'members.surname', 'members.email', 'members.tel', 'members.uni', 'members.dep', 'members.step_3', 'payments.title', 'payments.dep AS department', 'payments.address', 'payments.slip', 'payments.bank', 'payments.date', 'payments.time', 'payments.price', 'payments.comment')
        ->get();

        return response()->json($data);
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

        $data = Member::find($id);

        $data->step_3 = $request['step_3'];

        $data->update();

        $data = Payment::where('ref_id', $id)->first();

        $data->confirmed_by = Auth::user()->name . ' ' . Auth::user()->surname;

        $data->update();

        return response()->json([
            'message' => 'บันทึกข้อมูลเรียบร้อย'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
