<?php

namespace App\Models;

use App\Models\Role;
use App\Models\MyModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * 
 */
class RolePermission extends MyModel
{
    use HasFactory;
    protected $table = 'role_permissions';
    protected $fillable = [
        'id',
        'role_id',
        'object',
        'operation'
    ];
    /**
     * 
     */
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
    /**
     * 
     */
}
