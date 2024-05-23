<?php

namespace App\Livewire\Forms;

use App\Models\Departamento;
use Livewire\Form;

class DepartamentoForm extends Form
{
    public ?Departamento $departamentoModel;
    
    public $nombre = '';
    public $descripcion = '';

    public function rules(): array
    {
        return [
			'nombre' => 'required|string',
			'descripcion' => 'required|string',
        ];
    }

    public function setDepartamentoModel(Departamento $departamentoModel): void
    {
        $this->departamentoModel = $departamentoModel;
        
        $this->nombre = $this->departamentoModel->nombre;
        $this->descripcion = $this->departamentoModel->descripcion;
    }

    public function store(): void
    {
        $this->departamentoModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->departamentoModel->update($this->validate());

        $this->reset();
    }
}
