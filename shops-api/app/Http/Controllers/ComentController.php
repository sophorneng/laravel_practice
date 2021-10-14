<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coment;

class ComentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Coment::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cmt = new Coment();
        $cmt->user_id = $request->user_id;
        $cmt->post_id = $request->post_id;
        $cmt->coment = $request->coment;

        $cmt->save();

        return response()->json('Coment created');
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
        return Coment::findOrFail($id);
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
        //
        $cmt = Coment::findOrFail($id);
        $cmt->user_id = $request->user_id;
        $cmt->post_id = $request->post_id;
        $cmt->coment = $request->coment;

        $cmt->save();

        return response()->json('Coment update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return Coment::destroy($id);
    }
}
