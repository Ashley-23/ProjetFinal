@extends('Superadmin.default')

@section('content')
<div class="ui-modal-box">
    <div class="modal-box">
        <!-- Button trigger modal -->
            <button type="button"  data-toggle="modal"
            data-target="#standard-modal">
            Supprimer {{ $eleve->nomEleve }} {{ $eleve->prenomEleve }}
            </button>
        <div class="modal fade" id="standard-modal" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    {{-- <div class="modal-header">
                        <h5 class="modal-title"> Supprimer un utilisateur </h5>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> --}}
                    <div class="modal-body">
                        Voulez vous supprimer ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="footer-btn bg-dark-low"
                            ><a class="dropdown-item" href="{{route('vue_superadmin_supprimerEleve',$eleve->idEleve)}}"></i> Supprimer </a> </button>
                        <button type="button" class="footer-btn bg-linkedin"  data-dismiss="modal">
                            Annuler</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection