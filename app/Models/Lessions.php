<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessions extends Model
{
    protected $table = "Lessions"; // tuong ung vs table duoi csdl
    public $primaryKey = "lession_id"; // khoa chinh trong table
    public $timestamps = false; //  khong can theo gioi thoi gian ghi va cap nhap ( true nguoc lai
    protected $fillable = [
        'lession_name',
        'description',
        'subject_id',
        'deleted'
    ]; // lay gia tri cua cac row
    use HasFactory;
}
