<?php

namespace Modules\EntityRecordValues\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\EntityRecords\Models\EntityRecord;
use Modules\CustomAttributes\Models\CustomAttributes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\EntityRecordValues\Database\Factories\EntityRecordValueFactory;

class EntityRecordValue extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    public function record()
    {
        return $this->belongsTo(EntityRecord::class);
    }

    public function customAttribute()
    {
        return $this->belongsTo(CustomAttributes::class);
    }
}
