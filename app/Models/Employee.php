<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use HasFactory;
    // use softDeletes;
    
    // public $table = "employee";

    use HasFactory;
    public $remember_token = false;
    protected $fillable = [
        'employee_name', 
        'phone',
        'email', 
        'password'
    ];

    // protected $guarded = ['id'];
    // public static $rules = [ 
    //     'customer_name'=>'required',
    //     'phone'=>'digits_between:3,8',

    // ];


}