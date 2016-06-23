<?php namespace App;

use Zizaco\Entrust\EntrustPermission;
use Dsadmin\CRUD\CrudTrait;

class Permission extends EntrustPermission
{
    use CrudTrait;

    public function roles()
    {
        return $this->belongsToMany(\Config::get('entrust.role'), 'permission_role');
    }
}