@extends('layout.base')

@section('content')
<div class="card">
    <a href="{{route('personel.personel.create')}}" class="btn btn-primary">Ajouter un personel</a>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-centered">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Poste</th>
                        <th scope="col">Code</th>
                        <th scope="col">Remarque</th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($personel as $personels )

                   <tr>
                    <td>{{ $personels->nom }}</td>
                    <td>{{ $personels->prenom }}</td>
                    <td>{{ $personels->poste }}</td>
                    <td>{{ $personels->code }}</td>
                    <td>{{ $personels->lib }}</td>


                    <td>
                        <a href="{{route('personel.personel.edit',$personels)}}" class="btn btn-primary">Editer</a>




                    </td>
                </tr>


                   @endforeach
                </tbody>
            </table>
        </div>


    </div>

</div>
@endsection
