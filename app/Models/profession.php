<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\assignment_person;
class profession extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'profession';

    public function assignment_person()
    {
        return $this->belongsTo(assignment_person::class , 'assignment_person_id');
    }
}
