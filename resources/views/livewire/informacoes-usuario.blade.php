<div>
    @extends('layout')

@section('content')
<div>
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <x-outputs.title title='Informações do Usuário'/>
                <div class="row p-3">
                    
                    <x-inputs.input nome_campo='ID' valor_campo='1' classe='col-4'/>

                    <x-inputs.input nome_campo='Nome' valor_campo='Mikael' classe='col-4'/>

                    <x-inputs.input nome_campo='Nome' valor_campo='Mikael' classe='col-4'/>

                    <x-inputs.input nome_campo='Nome' valor_campo='Mikael' classe='col-4'/>

                    <x-inputs.input nome_campo='Nome' valor_campo='Mikael' classe='col-4'/>
                </div>
                <x-buttons.button  url='/' />
                {{-- @component('components.button', ['url' => '/'])
                @endcomponent --}}
            </div>
        </div>
    </div>
</div>
@endsection
</div>
