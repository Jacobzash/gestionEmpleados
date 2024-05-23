<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Empleados') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="w-full">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Empleados') }}</h1>
                        <p class="mt-2 text-sm text-gray-700">Listado de {{ __('Empleados') }}.</p>
                    </div>
                    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                        <a type="button" wire:navigate href="{{ route('empleados.create') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Crear Nuevo</a>
                    </div>
                </div>

                <div class="flow-root">
                    <div class="mt-8 overflow-x-auto">
                        <div class="inline-block min-w-full py-2 align-middle">
                            <table class="w-full divide-y divide-gray-300">
                                <thead>
                                <tr>
                                    <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">No</th>

									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Nombre</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Apellido</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Email</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Telefono</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Direccion</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Departamento</th>
                                    <th scope="col" class="py-3 pl-4  text-left text-s font-semibold uppercase tracking-wide text-gray-500">Acciones</th>

                                    <th scope="col" class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500"></th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach ($empleados as $empleado)
                                    <tr class="even:bg-gray-50" wire:key="{{ $empleado->id }}">
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900">{{ $empleado->id }}</td>

										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $empleado->nombre }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $empleado->apellido }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $empleado->email }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $empleado->telefono }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $empleado->direccion }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $empleado->department?->department_name}}</td>

                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                            <a wire:navigate href="{{ route('empleados.show', $empleado->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Ver') }}</a>
                                            <a wire:navigate href="{{ route('empleados.edit', $empleado->id) }}" class="rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm
                                                hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ __('Editar') }}</a>
                                            <button
                                                class="hover:text-red-900 inline-flex justify-center rounded-md bg-red-600 px-3 py-2 text-sm
                                                font-semibold text-white shadow-lg hover:bg-red-500 sm:ml-3 sm:w-auto"
                                                type="button"
                                                wire:click="delete({{ $empleado->id }})"
                                                wire:confirm="Are you sure you want to delete?"
                                            >
                                                {{ __('Borrar') }}
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="mt-4 px-4">
                                {!! $empleados->withQueryString()->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
