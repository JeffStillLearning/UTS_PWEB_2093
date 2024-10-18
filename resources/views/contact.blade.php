@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<h1>Contact</h1>

@if (session('message'))
    <div class="alert-success">
        {{ session('message') }}
    </div>
@endif

<table class="data-table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Company</th>
            <th>Phone number</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contact as $contacts)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $contacts["name"] }}</td>
                <td>{{ $contacts["email"] }}</td>
                <td>{{ $contacts["company"] }}</td>
                <td>{{ $contacts["phone"] }}</td>
            </tr>
        @endforeach
        <!-- @php
            $people = [
                ['name' => 'Alice', 'position' => 'Mahasiswa'],
                ['name' => 'Bob', 'position' => 'Karyawan'],
                ['name' => 'Charlie', 'position' => 'Mahasiswa'],
                ['name' => 'Dave', 'position' => 'Karyawan']
            ];
        @endphp
        @foreach ($people as $index => $person)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $person['name'] }}</td>
                <td>{{ $person['position'] }}</td>
            </tr>
        @endforeach -->
    </tbody>
</table>
@endsection
