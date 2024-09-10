<div>
    <ul class= "mt-2 text-sm text-red-600 space-y-1">
        @foreach ((array) $messages as $message)
            <li class="bg-red-100 border-l-4 border-red-600 text-red-600 p-2">{{ $message }}</li>
        @endforeach
    </ul>
</div>
