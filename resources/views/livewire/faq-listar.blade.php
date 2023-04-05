<div>
    <div>
        @extends('layout')
    
    @section('content')
        
        <div id="motivacao-listar" class="container">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="col-lg-12 d-flex justify-content-between align-items-center">
                        <h1 class="m-0 text-primary">FAQ</h1>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#saveModal"
                            class="btn btn-primary btn-sm">Novo FAQ</button>
                        {{-- <a class="btn btn-primary" href="">
                            <i class="fa-solid fa-plus me-1"></i>
                        Nova Motivação
                    </a> --}}
                    </div>
                    <hr>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    @livewire('posts')
                </div>
            </div>
        </div>
    
        {{-- @section('scripts')
            <script>
                window.addEventListener('close-modal', event => {
                $('#updateMotivacaoModal').modal('hide');
                })
            </script>
        @endsection --}}
    @endsection
    </div>
</div>
