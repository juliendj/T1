@extends('layout.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div
                    class="d-flex flex-wrap justify-content-between align-items-center gap-2"
                >
                    <div>
                        <form
                            class="d-flex flex-wrap align-items-center gap-2"
                            action="{{ route(  'search_index',['equip'=>$equip]) }}" method="POST"
                        >
                        @csrf
                            <label
                                for="inputPassword2"
                                class="visually-hidden"
                                >Search</label
                            >
                            <div class="search-bar me-3">
                                <span
                                    ><i
                                        class="bx bx-search-alt"
                                    ></i
                                ></span>
                                <input
                                    type="search"
                                    class="form-control"
                                    id="search"
                                    placeholder="Search ..."
                                />
                            </div>

                            <button type="submit" class="btn btn-secondary btn-sm align-content-end">
                                filtrer par equipe
                            </button>
                            <div class="me-sm-3">
                                <select
                                    class="form-select my-1 my-md-0"
                                    id="status-select" name="equipe"
                                >
                                    @foreach ( $equip as $equip )
                                    @if ($test==$equip->id)
                                    <option value="{{ $equip->id  }}" selected >
                                        {{ $equip->name }}
                                    </option>
                                    @else
                                    <option value="{{ $equip->id  }}" >
                                        {{ $equip->name }}
                                    </option>
                                    @endif


                                    
                                    
                                    @endforeach
                                   
                                </select>
                            </div>
                        </form>
                    </div>
                    <div>
                        <div
                            class="d-flex flex-wrap gap-2 justify-content-md-end align-items-center"
                        >
                            <ul
                                class="nav nav-pills bg-transparent gap-1 p-0"
                            >
                                <li class="nav-item">
                                    <a
                                        href="#team-grid"
                                        class="nav-link"
                                        data-bs-toggle="tab"
                                        aria-expanded="false"
                                        data-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        title="Grid"
                                    >
                                        <i
                                            class="bx bx-grid-alt"
                                        ></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a
                                        href="#team-list"
                                        class="nav-link active"
                                        data-bs-toggle="tab"
                                        aria-expanded="false"
                                        data-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        title="List"
                                    >
                                        <i
                                            class="bx bx-list-ul"
                                        ></i>
                                    </a>
                                </li>
                            </ul>

                            <div class="dropdown">
                                <a
                                    href="javascript:void(0);"
                                    class="dropdown-toggle btn btn-soft-success arrow-none"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    <i
                                        class="bx bx-sort me-1"
                                    ></i
                                    >Filter
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-end"
                                >
                                    <a
                                        href="javascript:void(0);"
                                        class="dropdown-item"
                                        >By Date</a
                                    >
                                    <a
                                        href="javascript:void(0);"
                                        class="dropdown-item"
                                        >By Order ID</a
                                    >
                                    <a
                                        href="javascript:void(0);"
                                        class="dropdown-item"
                                        >By City</a
                                    >
                                </div>
                            </div>

                            <a
                                href="#!"
                                class="btn btn-danger"
                            >
                                <i
                                    class="bi bi-plus-circle me-1"
                                ></i
                                >Add Customer
                            </a>
                        </div>
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->
</div>

<div class="row">
@foreach ($departement as $departements )

    <div class="col col-3">
        <div class="card" style="height: 15rem;">
            <div class="card-body">
                <div
                    class=" align-items-center justify-content-between"
                >
                    <div>
                        <h3 class="mb-0 fw-bold mb-2">
                            {{ $departements->libeler }}
                        </h3>
                        <span
                        class="badge fs-12 badge-soft-success"
                        ><i
                            class="ti ti-arrow-badge-up"
                        ></i>
                       {{ $departements->nombre }} persones</span
                    >
                        @foreach ( $departements->personels as $personels )
                       <h5 class="text-muted" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        {{ $personels->nom}} {{ $personels->prenom}} 
                    </h5>
                    @endforeach 
                   {{--  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Information {{ $departements->libeler }}</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-centered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Info</th>
                                                
                                                <th scope="col">active</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $departements->infoprods as $infoprods )
                        
                                           <tr>
                                            <td>{{ $infoprods->lib }}</td>
                                           
                                            <td>{{ $infoprods->active==0? 'Fermer':'En fonction' }} </td>
                         
                        
                        
                                            
                                        </tr> 
                        
                        
                            
                        @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div> 
                        
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                             
                            </div>
                          </div>
                        </div>
                      </div> --}}
                          
                      
                       
                    </div>
                    <div>
                       {{--  <div
                            class="avatar-lg d-inline-block me-1"
                        >
                            <span
                                class="avatar-title bg-info-subtle text-info rounded-circle"
                            >
                                <iconify-icon
                                    icon="iconamoon:credit-card-duotone"
                                    class="fs-32"
                                ></iconify-icon>
                            </span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>


    
@endforeach
</div>
<!-- Button trigger modal -->

  
  <!-- Modal -->
  
@endsection