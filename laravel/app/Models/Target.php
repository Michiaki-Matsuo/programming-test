<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mediator;

class Target extends Model
{
    use HasFactory;

    public function mediator()
    {
        return $this->hasOne(Mediator::class,'id','mediator_id');
    }

}
