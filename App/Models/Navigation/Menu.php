<?php

namespace App\Models\Navigation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model {
    use HasFactory;

    protected $fillable = ['title'];

    public function menuItems() {
        return $this->hasMany(MenuItem::class);
    }
}
