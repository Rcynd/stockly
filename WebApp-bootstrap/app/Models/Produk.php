<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->whereHas('jenis', function($query) use ($search){
                $query->where('name_jenis','like','%' . $search . '%')
                ->orWhere('bruto','like','%' . $search . '%')
                ;
            })->orWhere('name_produk','like','%' . $search . '%')
            ->orWhere('status','like','%' . $search . '%')
            ->orWhere('stock','like', $search )
            ->orWhere('harga','like','%' . $search . '%')
            ;
        });
    }
}
