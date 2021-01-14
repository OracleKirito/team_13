<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'a_name',
        'birth',
        'account',
        'password',
        'balance',
        'create_at'
    ];
    protected $table = 'member';

    public function purchaserecords(){
        return $this->hasMany('App\Models\PurchaseRecordModel','a_id');
    }

    public function delete()
    {
        $this->purchaserecords()->delete();
        return parent::delete();
    }


}
