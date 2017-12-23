@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>Add Note</h3>
            <form action="/add" method="POST">
                {{csrf_field()}}
                <textarea rows="10" id="data-note" name="content"></textarea>
                <button class="btn btn-default" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>




@endsection
