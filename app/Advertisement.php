<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{

protected $table = 'advertisement';
protected $fillable = ['price', 'rooms', 'city', 'county'];

public function getImageAttribute()
{
   return $this->filename;
}

}
class Form extends Model
{
    //
}
