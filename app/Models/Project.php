<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'thumb_preview', 'description', 'link_repo', 'languages', 'frameworks'];

    public function type()
    {
        $this->belongsTo(Type::class);
    }
}
