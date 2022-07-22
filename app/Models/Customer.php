<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use softDeletes;

    // public $table = "customer";

    protected $guarded = ['id'];
    public static $rules = [  'title' =>'required|alpha|max:3',
    'customer_name'=>'required',
    'addressline'=>'required',
    'phone'=>'digits_between:3,8',
    'town'=>'required',
    'zipcode'=>'required'];

    public function pets() {
        return $this->hasMany('App\Models\Pet');
    }

    public function user() {
        return $this->hasOne('App\Models\User');
    }
    
}
