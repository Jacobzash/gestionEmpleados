<?php

namespace App\Livewire\Forms;

use App\Models\Empleado;
use Livewire\Form;

class EmpleadoForm extends Form
{
    public ?Empleado $empleadoModel;
    
    public $nombre = '';
    public $apellido = '';
    public $email = '';
    public $telefono = '';
    public $direccion = '';
    public $department_id = '';

    public function rules(): array
    {
        return [
			'nombre' => 'required|string',
			'apellido' => 'required|string',
			'email' => 'required|string',
			'telefono' => 'required',
			'direccion' => 'required|string',
			'department_id' => 'required',
        ];
    }

    public function setEmpleadoModel(Empleado $empleadoModel): void
    {
        $this->empleadoModel = $empleadoModel;
        
        $this->nombre = $this->empleadoModel->nombre;
        $this->apellido = $this->empleadoModel->apellido;
        $this->email = $this->empleadoModel->email;
        $this->telefono = $this->empleadoModel->telefono;
        $this->direccion = $this->empleadoModel->direccion;
        $this->department_id = $this->empleadoModel->department_id;
    }

    public function store(): void
    {
        $this->empleadoModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->empleadoModel->update($this->validate());

        $this->reset();
    }
}
