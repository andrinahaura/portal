<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaMenu extends Model
{
    use HasFactory;
    protected $tabel = 'meta_menus';

    public function menu(){
        return $this->hasOne(Menu::class, 'id', 'menu_id');
    }
}
