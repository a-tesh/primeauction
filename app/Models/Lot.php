<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;

    protected $table = "tbl_lot";


    protected $guarded = [];
    public function auction(){
        return $this->belongsTo(Auction::class,'auction_id');
    }

    public function bids(){
        return $this->hasMany(Bids::class,'lot');
    }
    public function auctionRegister(){
        return $this->belongsTo(AuctionRegister::class,'auction_id');
    }
}
