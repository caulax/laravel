@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if(!$notes->isEmpty())
                <h3>note list</h3>
                @foreach( $notes as $note )
	            	<div class="card-block">
                        <a href="/note/{{$note->id}}" class="link-card">
	   					   <p class="card-text">{!! $note->content !!}</p>
                        </a>
	    				<p class="card-text"><small class="text-muted">{{ $note->updated_at }}</small></p>
                        <a href="{{ route('note.delete', $note->id) }}">delete</a>
                        <a href="{{ route('note.edit', $note->id) }}">edit</a>
	  				</div>
                @endforeach
            @else
                <p>No notes yet</p>
            @endif
        </div>
    </div>
</div>

@endsection
