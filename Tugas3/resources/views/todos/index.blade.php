<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Todo List</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 flex flex-col items-center min-h-screen p-10">
    <div class="w-full p-4 flex items-center justify-center">
        <div class="w-full max-w-xl bg-white rounded-lg shadow-md p-6">
            <h1 class="text-2xl font-bold mb-4 text-center">List Tugas</h1>
            <form action="{{ route('todos.store') }}" method="POST" class="flex gap-2 mb-4">
                @csrf
                <input type="text" name="title" placeholder="Tambah tugas.."
                    class="flex-1 border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                <button type="submit" class="cursor-pointer bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Tambah
                </button>
            </form>
        </div>
    </div>
    
    <div class="w-full p-4 flex items-center justify-center">
        @forelse($todos as $todo)
            <div class="w-full flex items-center gap-4">
                <x-todo-card :todo="$todo" />
            </div>
            @empty
                <div class="w-full flex items-center justify-center">
                    <p class="text-center text-gray-400">Belum ada tugas</p>
                </div>
            @endforelse
    </div>
</body>

</html>
