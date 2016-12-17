@extends('welcome')
 
@section('content')
    <h2>companies</h2>
    @if ( !$companies->count() )
        You have no companies
    @else
        <ul>
            @foreach( $companies as $company )
                <li><a>{{ $company->name }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection