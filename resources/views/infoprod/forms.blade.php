@extends('layout.base')

@section('content')

@yield('tilte')

<div class="col-8">
    <div class="card">
        <div class="card-body">
 <form action="{{ route(  $infoprod->exists ? 'infoprod.infoprod.update' :'infoprod.infoprod.store',['infoprod'=>$infoprod]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method($infoprod->exists ? 'PUT' : 'POST')


@include('shared.input',['class'=>'col','label'=>'Information','name'=>'lib','value'=>$infoprod->lib])


<label for="type">Selectionner Departement concerner</label>
<select class="form-control"  data-choices name="departement_id" id="" >
   

@foreach ($departement as $departements)
<option value='{{ $departements->id }}'>{{ $departements->libeler }}</option>
@endforeach
    
</select>



 @include('shared.chekbox',['class'=>'col','label'=>'infoprod disponible','name'=>'active','value'=>$infoprod->active,])


<div class="row">
    <div class="col">

        <button type="submit" class="btn btn-secondary btn-sm align-content-end">

            {{ $infoprod->Exists?'Editer cette infoprod':'Ajouter une infoprods' }}
        </button>
    </div>
</div>

</form>





        </div>

    </div>
</div>




@endsection
