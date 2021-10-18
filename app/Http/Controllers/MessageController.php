<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddMessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $messages = Message::orderBy('name', 'ASC')->get();
            if ($messages) {
                return response()->json([
                    'data' => $messages
                ], 200);
            }
        } catch (\Exception $e) {
            return response()->json([
                'category' => 'internal error'
            ], 500);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddMessageRequest $request)
    {
        $messages = new Message();
        $messages->fill($request->all());
        if ($messages->save()) {
            return response()->json([
                'data' => $messages
            ], 200);
        } else {
            return response()->json([
                'Message' => 'Message could not be added'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $messages = Message::find($id);
        if ($messages) {
            return response()->json([

                'data' => $messages
            ], 200);
        } else {
            return response()->json([
                'message' => 'not found'
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $messages = Message::find($id);
        if ($messages->delete()) {
            return response()->json([
                'message' => 'message has been deleted'
            ], 200);
        }
        return response()->json([
            'message' => 'could not find any messages with this id '
        ], 500);
    }
}
