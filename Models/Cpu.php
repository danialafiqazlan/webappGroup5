<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cpu extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['cpu_name', 'cpu_brand', 'cpu_inv_level', 'cpu_remarks', 'cpu_price', 'staff_id'];

    public function Staff()
    {
        return $this->belongsTo('staff');
    }
}
