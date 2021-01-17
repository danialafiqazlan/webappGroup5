<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['storage_name', 'storage_brand', 'storage_inv_level', 'storage_remarks', 'storage_price', 'staff_id'];

    public function Staff()
    {
        return $this->belongsTo('staff');
    }
}
