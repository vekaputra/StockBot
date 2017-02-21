<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $stockCode
 * @property boolean $isActive
 * @property string $created_at
 * @property string $updated_at
 */
class WatchedStock extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['stockCode', 'isActive', 'created_at', 'updated_at'];

}
