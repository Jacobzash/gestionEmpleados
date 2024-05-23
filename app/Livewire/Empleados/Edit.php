<?php

namespace App\Livewire\Empleados;

use App\Livewire\Forms\EmpleadoForm;
use App\Models\Empleado;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public EmpleadoForm $form;

    public function mount(Empleado $empleado)
    {
        $this->form->setEmpleadoModel($empleado);
    }

    public function save(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'nullable|email',
            'direccion' => 'required',
        ]);

        $person = new Empleado;
        $person->nombre = $request->input('nombre');
        $person->apellido = $request->input('apellido');
        $person->email = $request->input('email');
        $person->telefono = $request->input('telefono');
        $person->direccion = $request->input('direccion');
        $person->department_id = $request->input('department_id');
        $person->save();



        return $this->redirectRoute('empleados.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.empleado.edit');
    }
}
