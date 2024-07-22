<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileType extends Model
{
    use HasFactory;

    protected $hidden = ['created_by','update_by'];

    public function files()
    {
        return $this->hasMany(File::class,'type_id', 'id');
    }
}
