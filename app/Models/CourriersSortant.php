<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Type_courrier;
use App\Models\Service_traitant;
use App\Models\Client;
use App\Models\User;


class CourriersSortant extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function Type_courrier(){
        return $this->belongsTo(Type_courrier::class);
    }
    public function Service_traitant(){
        return $this->belongsTo(Service_traitant::class);
    }
    public function Client(){
        return $this->belongsTo(Client::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
