<?php

namespace Modules\Admin\Models;

use Modules\Entity\Models\Entity;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\Operator\Models\Operator;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Modules\CustomAttributes\Models\CustomAttributes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable implements JWTSubject
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password'
    ];  

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    
    public function operators()
    {
        return $this->hasMany(Operator::class, 'admin_id');
    }
    public function entities()
    {
        return $this->hasMany(Entity::class, 'created_by');
    }

    public function customAttributes()
    {
        return $this->hasMany(CustomAttributes::class, 'created_by');
    }
}
