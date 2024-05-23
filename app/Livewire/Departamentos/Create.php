<?php

namespace App\Livewire\Departamentos;

use App\Livewire\Forms\DepartamentoForm;
use App\Models\Departamento;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public DepartamentoForm $form;

    public function mount(Departamento $departamento)
    {
        $this->form->setDepartamentoModel($departamento);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('departamentos.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.departamento.create');
    }
}
