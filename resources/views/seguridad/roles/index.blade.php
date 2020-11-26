@extends ('layouts.admin')
@section ('contenido')

<a href="{{route('roles.create')}}">Registrar Rol</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($table as $row)
            <tr>
                <td>
                    <a href="{{route('roles.show', $row->id)}}">{{$row->nombre}}</a>
                </td>
                
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
