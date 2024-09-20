<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Member::orderBy('step_3', 'DESC')->paginate(10);

        return response()->json($data);
    }

    public function memlist()
    {
        $data = Member::orderBy('id', 'DESC')->paginate(10);

        return response()->json($data);
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

    public function regis(Request $request)
    {
        $data = new Member();

        $data->reg = $request['reg'];
        $data->intro = $request['intro'];
        $data->name = $request['name'];
        $data->surname = $request['surname'];
        $data->pos = $request['pos'];
        $data->email = $request['email'];
        $data->tel = $request['tel'];
        $data->member = $request['member'];
        $data->uni = $request['uni'];
        $data->dep = $request['dep'];
        $data->branch = $request['branch'];
        $data->dinner = $request['dinner'];
        $data->trip = $request['trip'];
        $data->food = $request['food'];
        $data->comment = $request['comment'];
        $data->tour = $request['tour'];
        $data->size = $request['size'];
        $data->step_1 = 1;
        $data->step_2 = 0;

        $data->save();

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

    public function getMember(string $id)
    {
        $data = Member::where('id', $id)->select('intro', 'name', 'surname', 'member', 'uni', 'tour')->get();

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
