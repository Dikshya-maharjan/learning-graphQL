<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable=[
        'phone',
        'address',
        'student_id'
    ];
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
