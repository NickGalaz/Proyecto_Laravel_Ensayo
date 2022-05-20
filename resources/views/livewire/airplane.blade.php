<x-app-layout>
    <div class="flex flex-col max-w-7xl mx-auto sm:px-3 lg:px-3">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
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
                            </tr>
                        </thead class="border-b">
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
                            </tr class="bg-white border-b">
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>