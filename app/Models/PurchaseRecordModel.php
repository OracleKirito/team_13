<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseRecordModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'b_number',
        'b_date',
        'serial_number',
        'a_id',
        'p_id',
        'create_at'
    ];
    protected $table = 'purchase_record';

    public function member(){
        return $this->belongsTo('App\Models\MemberModel','a_id','id');
    }
    public function product(){
        return $this->belongsTo('App\Models\ProductNameModel','p_id','id');
    }

    public function scopeRecord($query,$a_id)
    {
        $query->where('a_id', '=', $a_id)
            ->orderBy('b_date');
    }
    public function scopearc($query)
    {
        $query ->orderBy('a_id');
    }




}
