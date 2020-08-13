@extends('layouts.app')

@section('content')
<p>{{$title}}</p>
@if ( count ( $services ) > 0 )
<ul class="list-group">
    @foreach ( $services as $service )
        <li class="list-group-items">{{ $service }}</li>
    @endforeach
</ul>
@endif
@endsection