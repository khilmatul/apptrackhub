<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angkutan extends Model
{
    use HasFactory;

    protected $table = 'angkutans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'no_polisi','nama_angkutan','sopir','trayek'
    ];

    protected $guarded = '';

    public function trayek(){
        return $this->belongsTo(Trayek::class);
    }
}
