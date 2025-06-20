@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header bg-warning">
        <h4 class="mb-0">Edit Data Mata Kuliah</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('matakuliah.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('matakuliah._form', ['button' => 'Update'])
        </form>
    </div>
</div>
@endsection
