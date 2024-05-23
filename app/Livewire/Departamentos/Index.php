<?php

namespace App\Livewire\Departamentos;

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
        $departamentos = Departamento::paginate();

        return view('livewire.departamento.index', compact('departamentos'))
            ->with('i', $this->getPage() * $departamentos->perPage());
    }

    public function delete(Departamento $departamento)
    {
        $departamento->delete();

        return $this->redirectRoute('departamentos.index', navigate: true);
    }
}
