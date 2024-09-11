
<x-header>
    <x-slot:title>Greeeting</x-slot:title>
<div>
    @php
    $isActive = false;
@endphp
 
<span @style([
    'background-color: red'=> $isActive,
    'font-weight: bold' => $isActive,
    'font-size: 100px' => $isActive
])>
    Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie
</span>
@php
$isActive = false;
$hasError = true;
@endphp

<div @class([
'p-4', 'border',
'font-weight-bold' => $isActive,
'text-light' => ! $isActive,
'bg-danger' => $hasError,
])>
    Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie
</div>
<span style="">
</span>
</div>
</x-header>