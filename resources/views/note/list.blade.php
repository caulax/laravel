@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>note list</h3>
            @foreach($notes as $note)
            	
	            	 <div class="card-block">
                        <a href="/note/{{$note->id}}" class="link-card">
	   					   <p class="card-text">{!! $note->content !!}</p>
                        </a>
	    				<p class="card-text"><small class="text-muted">{{ $note->updated_at }}</small></p>
                        <a href="">delete</a>
	  				</div>
	  			
            @endforeach
        </div>
    </div>
</div>
@endsection
