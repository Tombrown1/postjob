<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
   
    use HasFactory;
    
    // protected $fillable = [
    //     'company', 'title', 'email', 'location', 'website', 'tag', 'description'
    // ];
    public function scopeFilter($query, array $filters){
        if($filters['tags'] ?? false){
            $query->where('tags', 'like', '%' . request('tags') . '%');
        }

        if($filters['search'] ?? false){
            $query->where('title', 'like', '%' . request('search') . '%')
                  ->orWhere('description', 'like', '%' . request('search') . '%')
                  ->orWhere('tags', 'like', '%' . request('search') . '%');
        };

    }

    // Relationship to User
    public function user(){

        return $this->belongsTo(User::class, 'user_id');
    }
}
 