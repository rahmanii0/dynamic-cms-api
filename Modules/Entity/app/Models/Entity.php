<?php

namespace Modules\Entity\Models;

use Modules\Admin\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use Modules\CustomAttributes\Models\CustomAttributes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\EntityRecords\Models\EntityRecord;

// use Modules\Entity\Database\Factories\EnityFactory;

class Entity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'admin_id',
        'description',
        
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
    
    public function customAttributes()
    {
        return $this->hasMany(CustomAttributes::class);
    }
   

    public function records()
    {
        return $this->hasMany(EntityRecord::class);
    }
}


