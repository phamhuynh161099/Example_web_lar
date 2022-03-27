<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\Mime\Header\get;

/**
 *use cmd to create model: php artisan make:model Student
 */

class Student extends Model
{
    protected $table ='students';
    use HasFactory;
    /**
    Thong bao cot timestamps khong hoat dong
     */
    public $timestamps=false;

    /**
        Ham dung de tao ta them Attributes (Full Name)
     */
    protected function  fullName():Attribute
    {
        return  Attribute::make(
            fn($value,$attributes)=>$attributes['first_name'] . ' ' . $attributes['last_name'],
        );
    }

    protected function age():Attribute
    {
        return  Attribute::make(
            function ($value,$attributes){
                $date=new \DateTime($attributes['birthdate']);
                $now=new \DateTime();
                return $now->diff($date)->y;
            }
        );
    }

    protected function genderName():Attribute
    {
        return  Attribute::make(
            function ($value,$attributes){
                return ($attributes['gender']==='1')?'Male':'Female';
            }
        );
    }
}
