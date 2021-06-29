<form action="{{ route('add-item') }}" method="POST" id="form-add-item">
    @csrf
    <input  class="add-new" type="text" name="item" id="item" placeholder="Create a new todo..." value="{{ old('new_item') }}">
    <button type="submit" class="button is-info" id="add-new">Add new</button>
</form>
