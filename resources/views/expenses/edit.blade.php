<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Gasto</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">Editar Gasto</h1>
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('expenses.update', $expense) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Título</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $expense->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea name="description" id="description" class="form-control" rows="3" required>{{ $expense->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Monto</label>
                        <input type="number" name="amount" id="amount" step="0.01" class="form-control" value="{{ $expense->amount }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Fecha</label>
                        <input type="date" name="date" id="date" class="form-control" value="{{ $expense->date }}" required>
                    </div>
                    <button type="submit" class="btn btn-success">Actualizar</button>
                    <a href="{{ route('expenses.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
