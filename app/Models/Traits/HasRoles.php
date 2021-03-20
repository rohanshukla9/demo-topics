<?php

namespace App\Models\Traits;

use Illuminate\Support\Arr;
use App\Models\Permission;
use App\Models\Role;

trait HasRoles
{

  public function giveRoleTo(...$roles)
  {
    $roles = $this->getAllRoles(Arr::flatten($roles));

    if ($roles === null) {
      return $this;
    }

    $this->roles()->saveMany($roles);
  }

  public function hasRole(...$roles)
  {
    foreach ($roles as $role) {
      if ($this->roles->contains('name', $role)) {
        return true;
      }
      return false;
    }
  }


  protected function getAllRoles(array $roles)
  {
    return Role::whereIn('name', $roles)->get();
  }

  public function roles()
  {
    # code...
    return $this->belongsToMany(Role::class); //role_user table
  }
}
