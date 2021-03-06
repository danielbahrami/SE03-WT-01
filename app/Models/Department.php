<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {

    public function course() {
        return $this -> hasOne(Course::class, 'department_id', 'id');
    }

    public function courses() {
        return $this -> hasMany(Course::class, 'department_id', 'id');
    }
}
