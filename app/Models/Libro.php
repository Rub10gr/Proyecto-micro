<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $id
 * @property $name
 * @property $año
 * @property $escritor
 * @property $created_at
 * @property $updated_at
 *
 * @property Editoriale[] $editoriales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'año', 'escritor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function editoriales()
    {
        return $this->hasMany(\App\Models\Editoriale::class, 'id', 'libro_id');
    }
    

}
