<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'assets';

    protected $fillable = ['name', 'type_id', 'purchase_date', 'status', 'user_id'];

    public function type()
    {
        return $this->belongsTo(AssetType::class, 'type_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
