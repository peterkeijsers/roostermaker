@if ($errors->any())
    <div class="error-messages fixed bottom-4 left-1/2 transform-gpu -translate-x-1/2 p-4 bg-red-600">
        <ul>
            @foreach ($errors->all() as $error)
            <li class="text-white">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif