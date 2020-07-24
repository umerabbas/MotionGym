<?php

namespace App\Models;

class Role extends \TCG\Voyager\Models\Role {

    public function scopeRoles(&$query) {
        return $query->where('name', '!=', 'dev');
    }

}