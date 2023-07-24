<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormSubmission extends Model
{

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
        protected $fillable = ['name', 'email', 'phone', 'dob'];

}

