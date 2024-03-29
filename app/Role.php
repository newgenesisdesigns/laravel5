<?php namespace Scholrs;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

	public function permissions()
	{
		return $this->belongsToMany(Permission::class);
	}

	public function givePermissionTo(Permission $permission)
	{
		return $this->permissions()->sync($permission);
	}
}
