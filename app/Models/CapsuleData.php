<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $descriptif
 * @property Date   $date_data
 * @property int    $created_at
 * @property int    $updated_at
 */
class CapsuleData extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'capsule_data';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'detail_facture_id', 'capsule_id', 'descriptif', 'date_data', 'data', 'created_at', 'updated_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descriptif' => 'string', 'date_data' => 'date', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'date_data', 'created_at', 'updated_at'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
}
