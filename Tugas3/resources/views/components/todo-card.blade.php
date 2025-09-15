<div class="bg-white rounded-lg shadow p-4 flex items-center justify-between gap-4">
    <form action="{{ route('todos.update', $todo) }}" method="POST" class="flex items-center gap-3">
        @csrf
        @method('PATCH')
        <button type="submit" class="cursor-pointer w-5 h-5 border rounded {{ $todo->is_done ? 'bg-green-500' : '' }}">
        </button>
        <span class="text-lg {{ $todo->is_done ? 'line-through text-gray-400' : 'text-gray-700' }}">
            {{ $todo->title }}
        </span>
    </form>

    <form action="{{ route('todos.delete', $todo) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="cursor-pointer text-red-500 hover:text-red-700 font-bold text-xl">
            ✕
        </button>
    </form>
</div>
