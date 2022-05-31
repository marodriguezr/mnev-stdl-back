<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    use HasFactory;

    public function notificationLevels()
    {
        return $this->belongsTo(NotificationLevels::class);
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function notificationUsers()
    {
        return $this->hasOne(NotificationUsers::class);
    }
}
