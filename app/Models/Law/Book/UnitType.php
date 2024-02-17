<?php

namespace App\Models\Law\Book;

use Illuminate\Database\Eloquent\Model;

class UnitType extends Model
{
    protected $guarded = ['id'];
    protected $casts = [
        'id' => 'int' ,
        'name' => 'string' ,
        'order' => 'int',
        'active' => 'int'
    ];

    public function unit(){
        return $this->hasMany('\App\Unit','unit_id','id');
    }
    public function setActiveAttribute($val){
        $this->attributes['active'] = (int) $val ;
    }
    public function getActiveAttribute(){
        return (int) $this->attributes['active'] ;
    }
}
