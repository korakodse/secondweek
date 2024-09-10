<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $json = Teacher::query()
        -> whereBetween('id',[1,50])
        -> get();
        return response()->json([
            'status code' => 200,
            'data' => $json]);
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
        $teacher = Teacher::create([
            'id' => $request->id,
            'pre' => $request->pre,
            'name'=> $request->name,
            'lastname' => $request->lastname,
            'email'=> $request->email,
            'province_id' => $request->province_id,
        ]);

        return response()->json([
           'data' => $teacher,
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $json = Teacher::find($id);

        return response()->json([
            'data' => $json,
        ]);
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
        $teacher = Teacher::find($id)
        ->update([
            'name'=> $request->name,
            'lastname' => $request->lastname,
            ]);

        return response()->json([
            'data'=> $teacher,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::find($id)
        ->delete();

        return response()->json([
            'data'=> $teacher,
        ]);
    }
}
