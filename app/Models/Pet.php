<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    use HasFactory;
    use softDeletes;
    // public $table = "pet";
    protected $guarded = ['id'];
    public static $rules = [  
    'pet_name'=>'required',
    'age'=>'required',
    'customer_id' => 'required',
    ];

    public function customer() {
        return $this->belongsTo('App\Models\Customer');
    }
}
