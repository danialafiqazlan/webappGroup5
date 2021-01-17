<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['ram_name', 'ram_brand', 'ram_inv_level', 'ram_remarks', 'ram_price', 'staff_id'];

    public function Staff()
    {
        return $this->belongsTo('staff');
    }
}
