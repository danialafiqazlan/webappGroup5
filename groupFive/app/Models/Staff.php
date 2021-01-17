<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['staff_name'];

    public function cpu()
    {
        return $this->hasMany('cpu');
    }

    public function gpu()
    {
        return $this->hasMany('gpu');
    }

    public function ram()
    {
        return $this->hasMany('ram');
    }

    public function storage()
    {
        return $this->hasMany('storage');
    }

    public function peripheral()
    {
        return $this->hasMany('peripheral');
    }
}
