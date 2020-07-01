
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID </th>
            <th scope="col">Ci </th>
            <th scope="col">Nombre </th>
            <th scope="col">Apellido </th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono </th>
            <th scope="col">Correo </th>
            <th scope="col">Genero </th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($duenios as $duenio)
        <tr>
            <td>{{ $duenio->id }}</td>
            <td>{{ $duenio->ci }}</td>
            <td>{{ $duenio->name }}</td>
            <td>{{ $duenio->lastname }}</td>
            <td>{{ $duenio->address }}</td>
            <td>{{ $duenio->phone }}</td>
            <td>{{ $duenio->email }}</td>
            <td>{{ $duenio->genero }}</td>
            <td>
                <a href="#" class="btn btn-primary btn-sm editbtn"> <i class="fa fa-edit"></i> Edit</a>
                <a href="#" class="btn btn-danger btn-sm deletebtn"> <i class="fa fa-trash"></i> Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
