<table class="table table-light">
    <thead class="thead-light">
    <tr>
        <th>Id</th>
        <th>Familia profesional</th>
        <th>Nombre del curso</th>
        <th>Tipo de grado</th>
        <th>Descripción</th>
    </tr>
    </thead>

    <tbody>
    @foreach($cursos as $curso)
        <tr>
            <td>{{$curso->id}}</td>
            <td>{{$curso->familia_profesional}}</td>
            <td>{{$curso->nombre_curso}}</td>
            <td>{{$curso->tipo_grado}}</td>
            <td>{{$curso->descripcion}}</td>
        </tr>
    @endforeach
    </tbody>

</table>


