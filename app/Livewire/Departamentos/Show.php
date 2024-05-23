<?php

namespace App\Livewire\Departamentos;

use App\Livewire\Forms\DepartamentoForm;
use App\Models\Departamento;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public DepartamentoForm $form;

    public function mount(Departamento $departamento)
    {
        $this->form->setDepartamentoModel($departamento);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.departamento.show', ['departamento' => $this->form->departamentoModel]);
    }
}
