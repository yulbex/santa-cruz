@extends('template.masterLayout')

@section('title', 'Reuniones')

@section('content')
<reuniones-lista :id_reunion={{$id}}></reuniones-lista>
@endsection
