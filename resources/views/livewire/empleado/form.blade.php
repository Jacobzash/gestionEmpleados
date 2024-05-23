<div class="space-y-6">

    <div>
        <x-input-label for="nombre" :value="__('Nombre')"/>
        <x-text-input wire:model="form.nombre" id="nombre" name="nombre" type="text" class="mt-1 block w-full" autocomplete="nombre" placeholder="Nombre"/>
        @error('form.nombre')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="apellido" :value="__('Apellido')"/>
        <x-text-input wire:model="form.apellido" id="apellido" name="apellido" type="text" class="mt-1 block w-full" autocomplete="apellido" placeholder="Apellido"/>
        @error('form.apellido')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input wire:model="form.email" id="email" name="email" type="text" class="mt-1 block w-full" autocomplete="email" placeholder="Email"/>
        @error('form.email')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="telefono" :value="__('Telefono')"/>
        <x-text-input wire:model="form.telefono" id="telefono" name="telefono" type="text" class="mt-1 block w-full" autocomplete="telefono" placeholder="Telefono"/>
        @error('form.telefono')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="direccion" :value="__('Direccion')"/>
        <x-text-input wire:model="form.direccion" id="direccion" name="direccion" type="text" class="mt-1 block w-full" autocomplete="direccion" placeholder="Direccion"/>
        @error('form.direccion')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="department_id" :value="__('Departamento')"/>
        <x-select wire:model="form.department_id" id="department_id" name="department_id" class="mt-1 block w-full">
            <option value="" selected>Seleccione un departamento</option>
            @foreach ($departments as $department)
            <option value="{{ $department->id }}"@selected($department->id == old('department_id'))>
                {{ $department->nombre }}</option>
            @endforeach
        </x-select>

        @error('form.department_id')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>



    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
