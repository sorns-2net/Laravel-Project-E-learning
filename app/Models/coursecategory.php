<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\posts;

class CourseCategory extends Model
{
    use HasFactory;
    protected $table = 'coursecategory';
    protected $fillable = ['id', 'course_category_name'];

    public function posts()
    {
        return $this->hasMany(Posts::class, 'Cac_ID', 'id');
    }
}
