<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    protected $table = "courses"; // tuong ung vs table duoi csdl
    public $primaryKey = "course_id"; // khoa chinh trong table
    public $timestamps = false; //  khong can theo gioi thoi gian ghi va cap nhap ( true nguoc lai
    public $incrementing = false;
    protected $attributes = ['description' =>'']; // gia tri mac dinh cua mo ta la rong
    protected $fillable = ['course_name','description']; // lay gia tri cua cac row
    use HasFactory ;
}
