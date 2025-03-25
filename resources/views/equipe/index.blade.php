@extends('layout.base')

@section('content')
<div class="card">
    <a href="{{route('equipe.equipe.create')}}" class="btn btn-primary">Ajouter un equipe</a>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-centered">
                <thead>
                    <tr>
                        <th scope="col">Equipe</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($equipe as $equipes )

                   <tr>
                    <td>{{ $equipes->name }}</td>
                    <td>{{ $equipes->nombre }}</td>
                    <td>{{ $equipes->description }}</td>
                    <td>
                        <a href="{{route('equipe.equipe.edit',$equipes)}}" class="btn btn-primary">Editer</a>




                    </td>
                </tr>


                   @endforeach
                </tbody>
            </table>
        </div>


    </div>

</div>
@endsection
