<?php

namespace App\Http\Controllers;

use App\Models\Subcriptions;
use Illuminate\Http\Request;

class SubcriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $subscriptions = new Subcriptions;
        // $validator = validator::make($input, [
        //     'website_id'=>'required',
        //     'post_content'=>'required'     
        // ]);
        $subscriptions->website_id = $request->website_id;
        $subscriptions->subscriber_id = $request->subscriber_id;

        $subscriptions->save();

        return response()->json([
            'message'=>'Subscription Saved.'
        ],201);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcriptions  $subcriptions
     * @return \Illuminate\Http\Response
     */
    public function show(Subcriptions $subcriptions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcriptions  $subcriptions
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcriptions $subcriptions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcriptions  $subcriptions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcriptions $subcriptions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcriptions  $subcriptions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcriptions $subcriptions)
    {
        //
    }
}
