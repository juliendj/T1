@extends('layout.base')

@section('content')
<div class="card">
    <a href="{{route('departement.departement.create')}}" class="btn btn-primary">Ajouter un departement</a>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-centered">
                <thead>
                    <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Description</th>
                        <th scope="col">Nbre requis</th>
                        <th scope="col">Statut</th>


                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($departement as $departements )

                   <tr>
                    <td>{{ $departements->libeler }}</td>
                    <td>{{ $departements->description }}</td>
                    <td>{{ $departements->nombre }}</td>
                    <td>{{ $departements->active==0? 'Fermer':'En fonction' }} </td>



                    <td>
                        <a href="{{route('departement.departement.edit',$departements)}}" class="btn btn-primary">Editer</a>




                    </td>
                </tr>


                   @endforeach
                </tbody>
            </table>
        </div>


    </div>

</div>
@endsection
