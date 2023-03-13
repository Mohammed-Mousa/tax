<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\profession;
class assignment_person extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'assignment_person';

    public function  professions(){
        return $this->hasMany(profession::class);

    }

}
