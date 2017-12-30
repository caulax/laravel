@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>edit note</h3>
            <form action="{{ route('note.update', $note->id) }}" method="POST">
                {{csrf_field()}}
                <textarea rows="10" id="data-note" name="content">{{ $note->content }}</textarea>
                <button class="btn btn-default" type="submit">save</button>
            </form>
        </div>
    </div>
</div>

@endsection
