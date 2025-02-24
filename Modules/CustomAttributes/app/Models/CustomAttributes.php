<?php

namespace Modules\CustomAttributes\Models;

use Modules\Admin\Models\Admin;
use Modules\Entity\Models\Entity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\EntityRecordValues\Models\EntityRecordValue;

class CustomAttributes extends Model
{
    use HasFactory;
    protected $fillable = ['entity_id', 'name', 'data_type', 'admin_id'];

   

    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }
    public function values()
    {
        return $this->hasMany(EntityRecordValue::class);
    }
    
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}
