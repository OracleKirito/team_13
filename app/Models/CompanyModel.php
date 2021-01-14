<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyModel extends Model
{

    use HasFactory;
    protected $fillable = [
        'id',
        'c_name',
        'c_manager',
        'c_phone',
        'c_address',
        'create_at'
    ];


    protected $table = 'company';

    public function products(){
        return $this->hasMany('App\Models\ProductNameModel','company');
    }

    public function delete()
    {
        $this->products()->delete();
        return parent::delete();
    }
}
