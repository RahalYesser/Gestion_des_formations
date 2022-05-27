<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function formations(){
        return $this->belongsToMany(Formation::class, 'formation_etudiant','etudiant_id','formation_id')
        ->withTimestamps();
        }
}
