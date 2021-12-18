@extends('adminlte::page')

@section('title', 'dashboard')

@section('content_header')
    <h1>Demo Julian Nuñez</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">Hola mundo</div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ex commodi, labore iusto delectus sint
                fugiat pariatur, natus nam nemo temporibus quos voluptatum enim consequuntur consectetur earum doloribus.
                Molestiae eveniet ipsum, quae quasi cum porro similique odit dolorum sequi quis voluptas obcaecati illo eius
                esse dignissimos iste doloribus temporibus nam.</p>
        </div>
    </div>
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
