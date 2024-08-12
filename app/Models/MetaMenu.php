<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MetaMenu extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $tabel = 'meta_menus';

    public function menu(){
        return $this->hasOne(Menu::class, 'id', 'menu_id');
    }
}
