<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $email
 * @property $telefono
 * @property $direccion
 * @property $department_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{

    protected $perPage = 10;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'apellido', 'email', 'telefono', 'direccion', 'department_id'];

    public function department()
    {
        return $this->belongsTo(Departamento::class);
    }

}
