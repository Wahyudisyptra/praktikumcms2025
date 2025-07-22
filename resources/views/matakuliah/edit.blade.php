@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header bg-warning">
        <h4 class="mb-0">Edit Data Mata Kuliah</h4>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('matakuliah.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('matakuliah._form', ['button' => 'Update'])
        </form>
    </div>
</div>
@endsection
