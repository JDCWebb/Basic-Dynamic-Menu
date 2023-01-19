<?php

namespace App\Models\Navigation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model {

    use HasFactory;

    protected $fillable = [
        'menu_id',
        'parent_id',
        'title',
        'type',
        'link',
        'class',
        'active_at',
        'deactive_at',
    ];

    public function children() {
        return $this->hasMany('App\Navigation\MenuItem', 'parent_id', 'id');
    }

}
