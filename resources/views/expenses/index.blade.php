<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Gastos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">Gestión de Gastos</h1>
        <div class="mb-3 text-end">
            <a href="{{ route('expenses.create') }}" class="btn btn-primary">Agregar Gasto</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                @if($expenses->isEmpty())
                    <p class="text-center text-muted">No hay gastos registrados.</p>
                @else
                    <table class="table table-bordered table-striped">
                        <thead class="table-primary">
                            <tr>
                                <th>Título</th>
                                <th>Descripción</th>
                                <th>Monto</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($expenses as $expense)
                                <tr>
                                    <td>{{ $expense->title }}</td>
                                    <td>{{ $expense->description }}</td>
                                    <td>${{ $expense->amount }}</td>
                                    <td>{{ $expense->date }}</td>
                                    <td>
                                        <a href="{{ route('expenses.edit', $expense) }}" class="btn btn-warning btn-sm">Editar</a>
                                        <form action="{{ route('expenses.destroy', $expense) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
