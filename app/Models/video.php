<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hekmatinasser\Verta\Verta;

class video extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 'thumbnail' , 'length' , 'url' , 'slug' , 'description' , 'category_id'
        ];

    public function getlengthInHiumanAttribute()
    {
        return gmdate("i:s", $this->length);
    }

    public function getCreatedAtAttribute($value)
    {
        return (new Verta($value))->formatDifference(\verta());
    }

    public function relatedVideos(int $count = 6)
    {
       return video::all()->random($count);
    }

    public function getRouteKeyName()
    {
        return'slug';
    }

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function getCategoryNameAttribute()
    {
        return $this->category?->name;
    }

    
}
