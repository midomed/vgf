<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress_billing extends Model
{
    use HasFactory;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'adress_billing';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'name',
        'adress',
        'postcode',
        'city',
        'phone',
    ];
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = ['id'];
}

