<?php

namespace App\Http\Controllers;

use App\Models\Notifications;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class NotificationsController extends Controller
{
    //
    public function findAllNotifications()
    {
        $data = Notifications::all();
        return response()->json([
            "data" => $data,
            "message" => "Succesfully Retrieved All Notifications",
            "status" => 200
        ], 200);
    }

    public function createOneNotification(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'slug' => 'required|unique:categories'
        // ]);
        // dd($request['name'], $request);
        $data = Notifications::create($request->all());
        return response()->json([
            "data" => $data,
            "message" => "Notification created succesfully.",
            "status" => 200
        ], 200);
    }
}
