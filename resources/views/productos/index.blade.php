<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10 bg-gray-100">

    <h1 class="text-2xl font-bold mb-6">Listado de productos</h1>

    <a href="/productos/crear"
       class="mb-4 inline-block bg-green-600 text-white px-4 py-2 rounded">
        Crear producto
    </a>

    <table class="w-full bg-white rounded shadow">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-2 text-left">ID</th>
                <th class="p-2 text-left">Nombre</th>
                <th class="p-2 text-left">Precio</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($productos as $producto)
                <tr class="border-t">
                    <td class="p-2">{{ $producto['id'] }}</td>
                    <td class="p-2">{{ $producto['nombre'] }}</td>
                    <td class="p-2">${{ $producto['precio'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="p-4 text-center">
                        No hay productos
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
