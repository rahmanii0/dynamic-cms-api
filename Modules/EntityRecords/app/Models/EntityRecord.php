<?php

namespace Modules\EntityRecords\Models;

use Modules\Entity\Models\Entity;
use Modules\Operator\Models\Operator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\EntityRecordValues\Models\EntityRecordValue;

class EntityRecord extends Model
{
    use HasFactory;
    protected $fillable = ['entity_id', 'operator_id', 'data'];

    protected $casts = [
        'data' => 'array',
    ];

    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }

    public function operator()
    {
        return $this->belongsTo(Operator::class, 'operator_id');
    }

    public function values()
    {
        return $this->hasMany(EntityRecordValue::class);
    }
}

