<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = "Subject"; // tuong ung vs table duoi csdl
    public $primaryKey = "subject_id"; // khoa chinh trong table
    public $timestamps = false; //  khong can theo gioi thoi gian ghi va cap nhap ( true nguoc lai
    protected $fillable = [
        'course_id',
        'subject_name',
        'content',
        'picture',
        'user_id',
        'hot',
        'deleted'
    ]; // lay gia tri cua cac row
    use HasFactory ;
}
