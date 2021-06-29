@extends('master')

@section('form')
    @include('layouts.form')
@endsection

@section('title')
    {{ $title }}
@endsection

@section('content')


    <div class="list-item">
        <ul class="list">
            @forelse ($items as $item)
                <li>{{ $item->text }}
                    <a href="{{ route('delete-item', $item->id) }}"><i class="fa fa-times" aria-hidden="true"></i></a>
                    <a href="{{ route('edit-item', $item->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                </li>
            @empty
                <li>
                    Nothing to show :/
                </li>
            @endforelse
        </ul>
        <p>{{ $items->count() }} {{ Str::plural('item', $items->count()) }} </p>
    </div>

@endsection
