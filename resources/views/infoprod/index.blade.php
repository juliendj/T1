@extends('layout.base')

@section('content')
<div class="card">
    <a href="{{route('infoprod.infoprod.create')}}" class="btn btn-primary">Ajouter un infoprod</a>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-centered">
                <thead>
                    <tr>
                        <th scope="col">Info</th>
                        
                        <th scope="col">Statut</th>


                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($infoprod as $infoprods )

                   <tr>
                    <td>{{ $infoprods->lib }}</td>
                   
                    <td>{{ $infoprods->active==0? 'Fermer':'En fonction' }} </td>



                    <td>
                        <a href="{{route('infoprod.infoprod.edit',$infoprods)}}" class="btn btn-primary">Editer</a>




                    </td>
                </tr>


                   @endforeach
                </tbody>
            </table>
        </div>

       
    </div>

  
</div>

@endsection
