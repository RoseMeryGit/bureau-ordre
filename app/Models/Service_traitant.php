<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\CourrierEntrant;
use App\Models\CourrierSortant;

class Service_traitant extends Model
{
    use HasFactory;
    use SoftDeletes;


    public function CourrierEntrant(){
        return $this->hasMany(CourrierEntrant::class);
    }

    public function CourrierSortant(){
        return $this->hasMany(CourrierSortant::class);
    }
}
