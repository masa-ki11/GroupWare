<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChatUserRequest;
use App\Http\Requests\UpdateChatUserRequest;
use App\Models\ChatUser;

class ChatUserController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChatUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChatUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChatUser  $chatUser
     * @return \Illuminate\Http\Response
     */
    public function show(ChatUser $chatUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChatUser  $chatUser
     * @return \Illuminate\Http\Response
     */
    public function edit(ChatUser $chatUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChatUserRequest  $request
     * @param  \App\Models\ChatUser  $chatUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChatUserRequest $request, ChatUser $chatUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChatUser  $chatUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChatUser $chatUser)
    {
        //
    }
}
