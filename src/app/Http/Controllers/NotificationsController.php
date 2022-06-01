<?php

namespace App\Http\Controllers;

use App\Models\Notifications;
use App\Models\NotificationUsers;
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

        if($request['is_public'] && $request['cedula']==null){
            return response()->json([
                "data" => null,
                "message" => "Unable to create notification. Cedula is required.",
                "status" => 409
            ], 409);
        }

        $notification = Notifications::create([
            'title'=>$request['title'],
            'description'=>$request['description'],
            'is_viewed'=>$request['is_viewed'],
            'is_public'=>$request['is_public'],
            'notification_levels_id'=>$request['notification_levels_id'],
            'categories_id'=>$request['categories_id']
        ]);

        echo $notification['id'];
        $user_notification = NotificationUsers::create([
            'cedula'=>$request['cedula'],
            'notification_id'=> $notification['id']
        ]);
        return response()->json([
            "data" => $notification,
            "message" => "Notification created succesfully.",
            "status" => 200
        ], 200);
    }
}
