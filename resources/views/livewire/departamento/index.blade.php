<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Departamentos') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="w-full">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Departamentos') }}</h1>
                        <p class="mt-2 text-sm text-gray-700">Lista de los {{ __('Departamentos') }}.</p>
                    </div>
                    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                        <a type="button" wire:navigate href="{{ route('departamentos.create') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Crear nuevo</a>
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
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Descripcion</th>

                                    <th scope="col" class="py-3 pl-4  text-left text-s font-semibold uppercase tracking-wide text-gray-500">Acciones</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach ($departamentos as $departamento)
                                    <tr class="even:bg-gray-50" wire:key="{{ $departamento->id }}">
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900">{{ ++$i }}</td>

										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $departamento->nombre }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $departamento->descripcion }}</td>

                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                            <a wire:navigate href="{{ route('departamentos.show', $departamento->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Ver') }}</a>
                                            <a wire:navigate href="{{ route('departamentos.edit', $departamento->id) }}" class="rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm
                                                hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ __('Editar') }}</a>
                                            <button
                                                class="hover:text-red-900 inline-flex justify-center rounded-md bg-red-600 px-3 py-2 text-sm
                                                font-semibold text-white shadow-lg hover:bg-red-500 sm:ml-3 sm:w-auto"
                                                type="button"
                                                wire:click="delete({{ $departamento->id }})"
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
                                {!! $departamentos->withQueryString()->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
