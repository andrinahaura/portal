<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FileType extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $hidden = ['created_by','update_by'];

    public function files()
    {
        return $this->hasMany(File::class,'type_id', 'id');
    }
}
