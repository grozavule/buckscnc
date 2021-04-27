<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    public $fillable = ['quote_id', 'file_uri'];
    public $timestamps = false;

    public function quote()
    {
        return $this->belongsTo(Quote::class);
    }
}
