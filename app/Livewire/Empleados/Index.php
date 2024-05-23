<?php

namespace App\Livewire\Empleados;

use App\Models\Empleado;
use App\Models\Departamento;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.app')]
    public function render(): View
    {
        $empleados = Empleado::paginate();

        return view('livewire.empleado.index', compact('empleados'))
            ->with([ 'i', $this->getPage() * $empleados->perPage(), 'departamentos', Departamento::all()]);

    }

    public function delete(Empleado $empleado)
    {
        $empleado->delete();

        return $this->redirectRoute('empleados.index', navigate: true);
    }
}
