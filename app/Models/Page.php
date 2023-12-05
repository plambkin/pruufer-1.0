<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Notifications\Notifiable;


class Page extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['url', 'count']; // specify other fillable fields as needed

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
