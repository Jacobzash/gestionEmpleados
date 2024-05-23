<?php

namespace App\Livewire\Empleados;

use App\Livewire\Forms\EmpleadoForm;
use App\Models\Departamento;
use App\Models\Empleado;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public EmpleadoForm $form;

    public function mount(Empleado $empleado)
    {
        $this->form->setEmpleadoModel($empleado);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('empleados.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.empleado.create')->with(['departments'=>Departamento::all()]);
    }
}
