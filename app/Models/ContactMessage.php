<?php


// app/Models/ContactMessage.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    // The table associated with the model (optional, if different from pluralized model name)
    protected $table = 'contact_messages';

    // The attributes that are mass assignable
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'message',
    ];

    // Optional: Specify if the model should have timestamps (default is true)
    public $timestamps = true;
}

