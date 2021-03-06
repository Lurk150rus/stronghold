<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'category_id',
        'image',
        'description',
        'price',
        'hit',
        'new',
        'recommend'
    ];

    public function scopeHit($query){
        return $query->where('hit', 1);
    }
    public function scopeNew($query){
        return $query->where('new', 1);
    }
    public function scopeRecommend($query){
        return $query->where('recommend', 1);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getPriceForCount(){
        if (!is_null($this->pivot)){
            return $this->price * $this->pivot->count;
        }
        return $this->price;
    }

    public function setNewAttribute($value){
        $this->attributes['new'] = $value === 'on' ? 1 : 0;
    }
    public function setHitAttribute($value){
        $this->attributes['hit'] = $value === 'on' ? 1 : 0;
    }
    public function setRecommendAttribute($value){
        $this->attributes['recommend'] = $value === 'on' ? 1 : 0;
    }
    public function isHit(){
        return $this->hit === 1;
    }
    public function isNew(){
        return $this->new === 1;
    }
    public function isRecommend(){
        return $this->recommend === 1;
    }
}
