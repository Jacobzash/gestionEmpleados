<?php

namespace App\Livewire\Empleados;

use App\Livewire\Forms\EmpleadoForm;
use App\Models\Empleado;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public EmpleadoForm $form;

    public function mount(Empleado $empleado)
    {
        $this->form->setEmpleadoModel($empleado);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.empleado.show', ['empleado' => $this->form->empleadoModel]);
    }
}
