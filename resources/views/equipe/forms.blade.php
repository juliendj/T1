@extends('layout.base')

@section('content')

@yield('tilte')

<div class="col-8">
    <div class="card">
        <div class="card-body">
 <form action="{{ route(  $equipe->exists ? 'equipe.equipe.update' :'equipe.equipe.store',['equipe'=>$equipe]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method($equipe->exists ? 'PUT' : 'POST')


@include('shared.input',['class'=>'col','label'=>'Nom Equipe','name'=>'name','value'=>$equipe->name])
@include('shared.input',['class'=>'col','label'=>'Description','name'=>'description','value'=>$equipe->description])
@include('shared.input',['class'=>'col','label'=>'Nombre de personnes','name'=>'nombre','value'=>$equipe->nombre])


<div class="row">
    <div class="col">

        <button type="submit" class="btn btn-secondary btn-sm align-content-end">

            {{ $equipe->Exists?'Editer cette equipe':'Ajouter une equipes' }}
        </button>
    </div>
</div>

</form>





        </div>

    </div>
</div>




@endsection
