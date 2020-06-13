@extends('layouts.app')

@section('content')

<div class="container">
    <form method="GET" action="{{ url('/Empleados') }}" accept-charset="UTF-8"
        class="form-inline my-2 my-lg-0 float-right" role="search">
        <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Search..."
                value="{{ request('search') }}">
            <span class="input-group-append">
                <button class="btn btn-secondary" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>


    @if(Session::has('Mensaje'))
    <div class="alert alert-success" role="alert">

        {{Session::get('Mensaje')}}
    </div>
    @endif


    <a href="{{url('Empleados/create')}}" class="btn btn-success">Agregar Empleado</a>
    <br />
    <br>
    <table class="table table-light table-hover">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Area</th>
                <th>Coreo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            @foreach($empleados as $empleado)


            <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                    <img src="{{asset('storage').'/'.$empleado->Foto}}" class="img-thumbnail img-fluid" alt=""
                        width="100">
                </td>
                <td>{{$empleado->Nombre}} {{$empleado->ApellidoPaterno}} {{$empleado->ApellidoMaterno}} </td>
                <td> {{$empleado->Area}}</td>
                <td>{{$empleado->Correo}}</td>
                <td>
                    <a class="btn btn-warning" href="{{url ('/Empleados/'.$empleado->id.'/edit')}}">
                        Editar
                    </a>
                    <form method="post" action="{{reoute('empleados.destroy',$empleado)}}" style="display:inline">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit"
                            onclick="return confirm('Desea borrar?');">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$empleados->links()}}
</div>
@endsection
