@extends('app')

@section('content')

<h1>About</h1>



@if(count($people))

    <h3>People I like:</h3>
    <ul>
        @foreach($people as $person)
            <li>{{$person}}</li>
        @endforeach
    </ul>

@endif
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
    Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at
    nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec
    tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.
</p>

@stop
