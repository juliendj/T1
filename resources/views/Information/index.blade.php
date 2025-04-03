@extends('layout.base')

@section('content')
<div class="card">
    @include('shared.flsah')
    <a href="{{route('information.information.create')}}" class="btn btn-primary">Ajouter un information</a>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-centered">
                <thead>
                    <tr>
                        <th scope="col">Info</th>
                        <th scope="col">Details</th>
                        <th scope="col">Type</th>

                        <th scope="col">Priorite</th>
                        <th scope="col">Statut</th>


                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($information as $informations )

                   <tr>
                    <td>{{ $informations->libeler }}</td>
                    <td>{{ $informations->description }}</td>
                    <td>{{ $informations->type }}</td>
                    <td>{{ $informations->priorite }}</td>
                    <td>{{ $informations->active==0? 'Fermer':'En fonction' }} </td>



                    <td>
                        <a href="{{route('information.information.edit',$informations)}}" class="btn btn-primary">Editer</a>




                    </td>
                </tr>


                   @endforeach
                </tbody>
            </table>
        </div>


    </div>

</div>
@endsection
