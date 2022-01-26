<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsubcategory extends Model
{
    use HasFactory;

    protected $fillable = [
    	'category_id',
    	'subcategory_id',
    	'subsubcategory_name',
    ];

    public function category(){
    	return $this->belongsTo(Category::class,'category_id','id');
    }

    public function subcategory(){
    	return $this->belongsTo(Subcategory::class,'subcategory_id','id');
    }
}
