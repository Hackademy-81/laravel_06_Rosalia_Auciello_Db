<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=['author', 'title','img' ,'description']; 
    use HasFactory;

    public function getdescriptionSubstring(){
        if(strlen($this->description)>20){
            return substr($this->description, 0, 20) . '...';
        }else {
            return $this->description; 
        }
    }

    public function getFormatDate(){
       return $this->created_at->format('d/m/y -h:m'); 
    }
}
