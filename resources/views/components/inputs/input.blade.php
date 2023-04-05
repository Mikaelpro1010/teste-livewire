@props([
    'nomecampo', 'valorCampo', 'classe'
])

<div @class([$classe])>
    <label class="fw-bold" for="">{{ $nomeCampo }}</label>
    <p class="border-bottom border-4 border-warning px-1 ">{{ $valorCampo }}</p>
</div>