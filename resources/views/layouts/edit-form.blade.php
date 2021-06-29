<form action="{{ route('update-item', $item->id ) }}" method="POST" id="edit-form">
    @csrf
    @method('PUT')
    <input class="add-new" type="text" name="item" id="edit-item" placeholder="Write something..." value="{{ $item->text }}">
    <button type="submit" class="button is-info" id="edit-item">Edit item</button>
</form>
