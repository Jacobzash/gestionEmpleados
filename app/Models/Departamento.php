<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Departamento
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Departamento extends Model
{

    protected $perPage = 10;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'descripcion'];

    public function people()
    {
        return $this->hasMany(Empleado::class);
    }

}
