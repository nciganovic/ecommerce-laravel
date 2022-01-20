<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    public $table = "social_medias";
    public $timestamps = true;

    public function get_items()
    {
        return SocialMedia::all();
    }
}