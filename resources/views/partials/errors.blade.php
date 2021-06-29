@if ($errors->any())
    <div class="notification is-danger is-light" id="alert">
        <button class="delete"></button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
