<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuweb extends Model
{
    use HasFactory;
    protected $table = "USUWEB";
    protected $primaryKey = "USU_CNTCUIT";
    protected $guarded = [];
    public $incrementing = false;
    public $timestamps = false;
}


   
