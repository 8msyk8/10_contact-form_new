<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion'
    ];

    public function scopeFullNameSearch($query, $fullname)
    {
        if (!empty($fullname)) {
            $query->where('fullname', 'like', '%' . $fullname . '%');
            ;
        }


    }

    public function scopeEmailSearch($query, $email)
    {
        if (!empty($email)) {
            $query->where('email', 'like', '%' . $email . '%');
        }


    }

    public function scopeGenderSearch($query, $gender)
    {
        if (!empty($gender)) {
            $query->where('gender', 'like', '%' . $gender . '%');
        }


    }

    public function scopeDateSearch($query, $start_date, $end_date)
    {
        if (!empty($start_date)) {
            // $query->whereBetween('created_at', [$startdate, $enddate]);
            // $query->whereBetween('created_at', [$startdate, $enddate]);
            // $query->where('created_at', '>=', $start_date)
            //     // ->where('created_at', '<=', $end_date);
            $query->where('created_at', '>=', $start_date);
        }
    }
}