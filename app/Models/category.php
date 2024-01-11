<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable  =['name' ,'parent_id','quantityCateChild','cate_url'];
    public function posts(){
        return $this->hasMany(post::class,'category_id');
    }
}
