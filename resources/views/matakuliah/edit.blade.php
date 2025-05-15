@extends('layouts.app')
@section('content')
<h2>Edit Data Mata Kuliah</h2>

<form action="{{ route('matakuliah.update', $item->id) }}" method="POST">
    @csrf
    @method('PUT')
    @include('matakuliah._form', ['button' => 'Update'])
</form>
@endsection