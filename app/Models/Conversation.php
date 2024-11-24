<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'facebook_id',    // ID from Facebook
        'snippet',        // Message preview
        'participants',   // List of participants
        'last_activity',  // Timestamp of the last message
    ];

    /**
     * Cast attributes to native types.
     *
     * @var array
     */
    protected $casts = [
        'participants' => 'array', // Ensure participants are stored as an array
        'last_activity' => 'datetime',
    ];

    /**
     * Relationships (example: if there are messages related to the conversation).
     */
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
