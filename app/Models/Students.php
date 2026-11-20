<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Students extends Model
{
    protected $fillable = [
        'Name',
        'Surname',
        'Patronymic',
        'Email',
        'Phone',
        'Birthday',
        'group_id',
    ];
    public function group(): belongsTo{
        return $this->belongsTo(Group::class);
    }
}
