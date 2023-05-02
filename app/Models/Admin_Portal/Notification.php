<?php

namespace App\Models\Admin_Portal;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notification';
    protected $fillable = ['notification_status', 'subscriber_status', 'created_at', 'updated_at'];
}
