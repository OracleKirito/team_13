<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ProductNameModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'platform',
        'p_name',
        'price',
        'company',
        'inventory',
        'create_at',
    ];
    protected $table = 'product_name';

    public function companys(){
        return $this->belongsTo('App\Models\CompanyModel','company','id');
    }
    public function purchaserecords(){
        return $this->hasMany('App\Models\PurchaseRecordModel','p_id');
    }
    public function delete()
    {
        $this->purchaserecords()->delete();
        return parent::delete();
    }
    public function scopeProducts($query,$company)
    {
        $query->where('company', '=', $company)
            ->orderBy('price');
    }
    public function scopearc($query)
    {
        $query ->orderBy('price');
    }



}
