<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmissionApply extends Model
{
    protected $table = 'admission_apply';
    protected $fillable = ['username', 'email', 'mobile_number', 'state', 'city', 'discipline', 'schedule_call', 'consent'];

}
