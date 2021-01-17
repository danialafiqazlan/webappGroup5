<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gpu extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['gpu_name', 'gpu_brand', 'gpu_inv_level', 'gpu_remarks', 'gpu_price', 'staff_id'];

    public function Staff()
    {
        return $this->belongsTo('staff');
    }
}
