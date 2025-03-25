@extends('layout.base')

@section('content')

@yield('tilte')

<div class="col-8">
    <div class="card">
        <div class="card-body">
 <form action="{{ route(  $information->exists ? 'information.information.update' :'information.information.store',['information'=>$information]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method($information->exists ? 'PUT' : 'POST')


@include('shared.input',['class'=>'col','label'=>'Libeler','name'=>'libeler','value'=>$information->libeler])
@include('shared.input',['class'=>'col','label'=>'Description','name'=>'description','value'=>$information->description])
{{-- @include('shared.input',['class'=>'col','label'=>'Poste','name'=>'poste','value'=>$information->poste]) --}}


<label for="type">Selectionner type</label>
<select class="form-control"  data-choices name="type" id="type" >
    @if ($information->exists){
        <option value='{{ $information->type }}'>'{{ $information->type }}'</option>

    }
@endif

<option value='production'>Production</option>
    <option value='sst'>SST</option>
    <option value='autre'>Autres</option>


</select>
<label for="type">Selectionner etat ou niveau de priorite</label>
<select class="form-control"  data-choices name="priorite" id="priorite" >
    @if ($information->exists){
        <option value='{{ $information->priorite }}'>'{{ $information->type }}'</option>

    }
@endif
<option value='aucune'>Aucune</option>
<option value='urgent'>Tres Urgent</option>
    <option value='moderer'> Priorite moderer</option>
    <option value='non'>Non prioritaire</option>



</select>

{{-- <select class="form-control"  data-choices name="active" id="active" >
    <option value="{{ $information->active }}">{{ $information->active ==0?'Fermer' :'En fonction'}} </option>
    <option value='0'>Fermer</option>
    <option value='1'>En fonction</option>

</select>
 --}}
 @include('shared.chekbox',['class'=>'col','label'=>'Information disponible','name'=>'active','value'=>$information->active,])


<div class="row">
    <div class="col">

        <button type="submit" class="btn btn-secondary btn-sm align-content-end">

            {{ $information->Exists?'Editer cette information':'Ajouter une informations' }}
        </button>
    </div>
</div>

</form>





        </div>

    </div>
</div>




@endsection
