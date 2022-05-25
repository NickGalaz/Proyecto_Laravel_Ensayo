<x-app-layout>
    <div class="flex justify-end sm:px-5 lg:px-5 py-3 mr-32">
        <button class="btn-primary bg-indigo-500 hover:bg-indigo-600 font-bold text-white rounded-lg px-7 py-2">
            CREAR</button>
    </div>

    <div class="flex flex-col max-w-7xl mx-auto sm:px-2 lg:px-2">
        <div class="overflow-x-auto sm:-mx-36 lg:-mx-48">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center table-auto">
                        <thead class="border-b bg-gray-800">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    ID
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Nombre
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Color
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Modelo
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Marca
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Patente
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Cantidad
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    País
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Fecha
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Creación
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Actualización
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Editar</th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataAirplane as $aviones)
                            <tr class="bg-white border-b">
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$aviones->id}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$aviones->name}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$aviones->color}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$aviones->model}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$aviones->brand}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$aviones->patent}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$aviones->quantity}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$aviones->country}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$aviones->date}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$aviones->created_at}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$aviones->updated_at}}
                                </td>
                                <td>
                                    <button class="text-sm bg-green-600 hover:bg-green-700 text-white font-bold px-6 py-3 rounded-lg">EDITAR</button>
                                </td>
                                <td>
                                    <button wire:click="destroy({{$aviones->id}})" class="text-sm bg-red-600 px-5 hover:bg-red-700 text-white font-bold  py-3 rounded-lg">BORRAR</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>