<form action="{{ route('destroy-item', $item->id ) }}" method="POST" id="delete-form">
    @csrf
    @method('DELETE')
    <input class="add-new" type="text" name="item" id="delete-item" value="{{ $item->text }}" readonly>
    <button type="submit" class="button is-info" id="delete-item">Delete item</button>
</form>
