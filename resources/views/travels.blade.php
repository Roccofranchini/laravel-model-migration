@extends('layouts.main')

@section('title') Travels @endsection

@section('content')
    <div class="container">
        <div class="row">
            @forelse ($travels as $travel)
                <p>{{$travel->destination}}</p>
            @empty
                
            @endforelse
        </div>
    </div>
@endsection