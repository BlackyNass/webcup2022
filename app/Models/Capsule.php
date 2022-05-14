<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $libelle
 * @property int    $max_utilisateur
 * @property int    $created_at
 * @property int    $updated_at
 */
class Capsule extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'capsule';

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
        'libelle', 'duree_id', 'emplacement_id', 'type_capsule_id', 'max_utilisateur', 'created_at', 'updated_at'
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
        'libelle' => 'string', 'max_utilisateur' => 'int', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    public function scoperetrieveByUtilisateurId($query, $utilisateur_id) {
        return $query->join('capsule_data', 'capsule_data.capsule_id', 'capsule.id')
        ->join('detail_facture', 'detail_facture.id', 'capsule_data.detail_facture_id')
        ->join('facture', 'facture.id', 'detail_facture.facture_id')
        ->join('users', 'users.id', 'facture.utilisateur_id')
        ->join('duree', 'capsule.duree_id', 'duree.id')
        ->where('users.id', '=', $utilisateur_id); 
    }

    // Functions ...

    // Relations ...
}
