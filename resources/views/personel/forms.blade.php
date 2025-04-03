@php
    if ($personel->exists) {
        $po = $personel->poste->id;
        $de = $personel->departement->id;
        $eq = $personel->equipe->id;
    } else {
        $po = '';
        $de='';
        $eq='';

    }

@endphp


@extends('layout.base')


@section('content')
    @yield('tilte')

    <div class="col-8">
        <div class="card">

            <div class="card-body">
                <form
                    action="{{ route($personel->exists ? 'personel.personel.update' : 'personel.personel.store', ['personel' => $personel]) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @method($personel->exists ? 'PUT' : 'POST')


                    @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Nom',
                        'name' => 'nom',
                        'value' => $personel->nom,
                    ])
                    @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Prenom',
                        'name' => 'prenom',
                        'value' => $personel->prenom,
                    ])
                    {{-- @include('shared.input',['class'=>'col','label'=>'Poste','name'=>'poste','value'=>$personel->poste]) --}}

                    @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Code',
                        'name' => 'code',
                        'value' => $personel->code,
                    ])
                    @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Remarque',
                        'name' => 'lib',
                        'value' => $personel->lib,
                    ])
                    <div class="mb-3">
                        @include('shared.chekbox', [
                            'class' => 'col',
                            'label' => 'le Statut en conge ou non',
                            'name' => 'active',
                            'value' => $personel->active,
                        ])

                    </div>




                    <label for="poste_id">Selectionner le poste</label>
                    <select class="form-control" data-choices name="poste_id" id="">
                        @foreach ($poste as $poste)
                            @if ($po == $poste->id)
                                <option value="{{ $poste->id }}"selected>{{ $poste->nom }}</option>
                            @else
                                <option value="{{ $poste->id }}">{{ $poste->nom }} </option>
                            @endif
                        @endforeach
                    </select>
                    <label for="departement_id">Selectionner Departement</label>
                    <select class="form-control" data-choices name="departement_id" id="">
                        @foreach ($departement as $departement)
                            @if ($de == $departement->id)
                                <option value="{{ $departement->id }}"selected>{{ $departement->libeler }}</option>
                            @else
                                <option value="{{ $departement->id }}">{{ $departement->libeler }}</option>
                            @endif
                        @endforeach

                    </select>
                    <label for="equipe_id">Selectionner une equipe</label>
                    <select class="form-control" data-choices name="equipe_id" id="">
                        @foreach ($equipe as $equipe)
                            @if ($eq == $equipe->id)
                                <option value="{{ $equipe->id }}" selected>{{ $equipe->name }}
                                </option>
                            @else
                                <option value="{{ $equipe->id }}">{{ $equipe->name }}</option>
                            @endif
                        @endforeach
                    </select>

                    {{-- <div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="active" value="{{  $departement->id}}"  >
    <label class="form-check-label" for="active">Activer ou desactiver</label>
  </div>
   --}}


                    <div class="row">
                        <div class="col">

                            <button type="submit" class="btn btn-secondary btn-sm align-content-end">

                                {{ $personel->Exists ? 'Editer cette personel' : 'Ajouter une personels' }}
                            </button>
                        </div>
                    </div>

                </form>





            </div>

        </div>
    </div>
@endsection
