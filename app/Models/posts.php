<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourseCategory;

class posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'id', 'coursename', 'username', 'instruc_id', 'description', 'courseprice', 'coursehours'
        , 'Number_Chapter', 'Cac_ID', 'image'
    ];

    public function coursecategory(){
        return $this->belongsTo(CourseCategory::class);
    }
}
