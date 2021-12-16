<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    public $timestamps = false; // không tạo col created_at && updated_at
    protected $fillable = [
        'truyen_id','tomtat','kichhoat','tieude','noidung','slug_chapter','tacgia'
    ];
    protected $primaryKey = 'id';
    protected $table = 'chapter';


    public function truyen() {
        return $this->belongsTo('App\Models\Truyen');
    }
}
