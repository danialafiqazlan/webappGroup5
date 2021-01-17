<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peripheral extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['peripheral_name', 'peripheral_brand', 'peripheral_inv_level', 'peripheral_remarks', 'peripheral_price', 'staff_id'];

    public function Staff()
    {
        return $this->belongsTo('staff');
    }
}
