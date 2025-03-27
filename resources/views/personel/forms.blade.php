@extends('layout.base')

@section('content')

@yield('tilte')

<div class="col-8">
    <div class="card">
        <div class="card-body">
 <form action="{{ route(  $personel->exists ? 'personel.personel.update' :'personel.personel.store',['personel'=>$personel]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method($personel->exists ? 'PUT' : 'POST')


@include('shared.input',['class'=>'col','label'=>'Nom','name'=>'nom','value'=>$personel->nom])
@include('shared.input',['class'=>'col','label'=>'Prenom','name'=>'prenom','value'=>$personel->prenom])
{{-- @include('shared.input',['class'=>'col','label'=>'Poste','name'=>'poste','value'=>$personel->poste]) --}}

@include('shared.input',['class'=>'col','label'=>'Code','name'=>'code','value'=>$personel->code])
@include('shared.input',['class'=>'col','label'=>'Remarque','name'=>'lib','value'=>$personel->lib])
<div class="mb-3">
@include('shared.chekbox',['class'=>'col','label'=>'le Statut en conge ou non','name'=>'active','value'=>$personel->active,])
</div>

<select class="form-control"  data-choices name="poste" id="poste" >
    <option value="{{ $personel->exists?$personel->poste:''  }}">{{  $personel->exists?$personel->poste:'Selectionner le poste'  }} </option>
    <option value="Manoeuvre">Manoeuvre</option>
    <option value="Operateur">Operateur</option>
    <option value="AideOp">Aide Operateur</option>
    <option value="Cariste">Cariste</option>
    <option value="ChefEq">Chef d'equipe</option>
    <option value="Manutentionaire">Mennutentionaire de ligne</option>
</select>

<select class="form-control"  data-choices name="departement_id" id="" >
  @foreach ($departement as $departements )
<option value="{{  $departements->id}}">{{ $departements->libeler }}</option>   
  @endforeach 
</select>

<select class="form-control"  data-choices name="equipe_id" id="" >
    @foreach ($equipe as $equipes )
  <option value="{{  $equipes->id}}">{{ $equipes->name }}</option>   
    @endforeach 
  </select>


<div class="row">
    <div class="col">

        <button type="submit" class="btn btn-secondary btn-sm align-content-end">

            {{ $personel->Exists?'Editer cette personel':'Ajouter une personels' }}
        </button>
    </div>
</div>

</form>





        </div>

    </div>
</div>




@endsection
