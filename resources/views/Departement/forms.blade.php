@extends('layout.base')

@section('content')

@yield('tilte')

<div class="col-8">
    <div class="card">
        <div class="card-body">
 <form action="{{ route(  $departement->exists ? 'departement.departement.update' :'departement.departement.store',['departement'=>$departement]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method($departement->exists ? 'PUT' : 'POST')


@include('shared.input',['class'=>'col','label'=>'Libeler','name'=>'libeler','value'=>$departement->libeler])
@include('shared.input',['class'=>'col','label'=>'Description','name'=>'description','value'=>$departement->description])
{{-- @include('shared.input',['class'=>'col','label'=>'Poste','name'=>'poste','value'=>$departement->poste]) --}}

@include('shared.input',['class'=>'col','label'=>'Nombre','name'=>'nombre','value'=>$departement->nombre])

<select class="form-control"  data-choices name="active" id="active" >
    <option value="{{ $departement->active }}">{{ $departement->active ==0?'Fermer' :'En fonction'}} </option>
    <option value='0'>Fermer</option>
    <option value='1'>En fonction</option>

</select>




<div class="row">
    <div class="col">

        <button type="submit" class="btn btn-secondary btn-sm align-content-end">

            {{ $departement->Exists?'Editer cette departement':'Ajouter une departements' }}
        </button>
    </div>
</div>

</form>





        </div>

    </div>
</div>




@endsection
