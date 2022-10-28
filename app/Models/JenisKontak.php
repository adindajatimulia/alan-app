<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kontak;
class JenisKontak extends Model
{
    use HasFactory;
    protected $fillable =[
        'jenis_kontak'
    ];
    
    protected $table ='jenis_kontak';

    public function kontak(){
        return$this->hasmany(Kontak::class,'jenis_id','id');
    }
    
}    
   
