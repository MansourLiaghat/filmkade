<?php

namespace App\Models;

use App\Models\Traits\likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\Storage;

class video extends Model
{
    use HasFactory , likeable;

    protected $fillable = [
        'name' , 'thumbnail' , 'length' , 'path' , 'slug' , 'description' , 'category_id'
        ];

    public function getlengthInHiumanAttribute()
    {
        return gmdate("i:s", $this->length);
    }

    public function getCreatedAtAttribute($value)
    {
        return (new Verta($value))->formatDifference(\verta());
    }

    public function relatedVideos($count)
    {
        return $this->category->getRandomVideos($count);
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
    
    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function getownerNameAttribute()
    {
        return $this->user?->name;
    }

    public function getOwnerAvatarAttribute()
    {
        return $this->user?->gravatar;
    }

    public function comments()
    {
        return $this->hasmany(comment::class)->orderBy('created_at' , 'Desc');
    }

    public function getvideoUrlAttribute(){
        return '/Storage/' .$this->path;
    }
}
