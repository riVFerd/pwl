@extends('layouts.template')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Hobby</th>
                <th scope="col">Alasan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hobbies as $i => $hobby)
                <tr>
                    <th scope="row">{{ $i+1 }}</th>
                    <td>{{ $hobby->name }}</td>
                    <td>{{ $hobby->alasan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
