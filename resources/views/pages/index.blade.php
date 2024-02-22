@extends('layouts.main-layout')
@section('head')
    <title>Projects Laravel One-to-Many</title>
@endsection
@section('content')
    <h1 class="my-3">Projects Types found: {{ count($types) }}</h1>
    <div>
        @foreach ($types as $type)

            <h2 class="border-top"><strong>[Projects type: {{ $type->name_type }}]</strong></h2>
            <p><strong>Description: </strong>{{ $type->description }}</p>
            <span class="d-block my-2"><strong>Projects complexity: </strong>{{ $type->complexity }}</span>
            <ul>
                @foreach ($type->projects as $project)
                <li>
                    <h4 class="my-3"><strong>* Project name: </strong>{{ $project->name }}</h4>
                    <span class="d-block"><strong>Starting date: </strong>{{ $project->start_date }}</span>
                    <span class="d-block"><strong>End date: </strong>{{ $project->end_date }}</span>
                    <span class="d-block"><strong>Project status: </strong>{{ $project->status }}</span> 
                </li>
                @endforeach
            </ul>
        @endforeach
    </div>
@endsection
