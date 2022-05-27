<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Etudiant;

class Formation extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function etudiants(){
        return $this->belongsToMany(Etudiant::class);
        }

    public function admins(){
        return $this->belongsTo(Admin::class);
        }

    
        
}
