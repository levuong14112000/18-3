<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    protected $table = "subject"; // tuong ung vs table duoi csdl
    public $primaryKey = "subject_id"; // khoa chinh trong table
    public $timestamps = false; //  khong can theo gioi thoi gian ghi va cap nhap ( true nguoc lai
    public $incrementing = false;
    use HasFactory ;
}
