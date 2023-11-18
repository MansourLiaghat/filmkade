<?php

namespace App\Models;

use App\Models\User;
use App\Models\video;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

    protected $fillable = ['video_id' , 'user_id' , 'body' ];
    
    public function video()
    {
        return $this->belongsto(video::class);
    }

    public function user()
    {
        return $this->belongsto(user::class);
    }

    public function getCreatedAtInHiumanAttribute($value)
    {
        return (new Verta ($value))->formatdifference(\verta());
    }

  
}
