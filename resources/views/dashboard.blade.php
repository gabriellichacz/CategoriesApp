@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            @foreach($nodes as $node)
                <a href="/dashboard/{{ $node->id }}">
                    <x-node-item :node="$node" />
                </a>
            @endforeach
        </div>

        <div class="col">
            <a href="/dashboard/create">
                <button class="btn btn-link text-white text-decoration-none m-3" style="background-color: blue"> Add new element </button>
            </a>
        </div>
    </div>
</div>

@endsection
