<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Editoriale
 *
 * @property $id
 * @property $Editorial
 * @property $libro_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro $libro
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Editoriale extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Editorial', 'libro_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function libro()
    {
        return $this->belongsTo(\App\Models\Libro::class, 'libro_id', 'id');
    }
    

}
