<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','is_viewed','is_public','notification_levels_id','categories_id'];

    protected $guarded = ['id'];

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
