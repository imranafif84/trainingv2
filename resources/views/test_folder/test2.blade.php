@php
    $i = null;
@endphp

{{ $id }}

<br /><br />

@if($id == 1)
    Id adalah 1
@elseif($id == 2)
    Id adalah 2
@else
    Id adalah {{ $id }}
@endif

<br /><br />

@switch($id)
    @case(1)
        Id untuk switch adalah 1
        @break
    @default
        Id untuk switch bukan 1
@endswitch

<br /><br />

@unless ($id == 1)
    Your id is not 1
@endunless

<br /><br />

@isset($id)
    Your ID exist
@endisset

<br /><br />

@empty($i)
    Your value does not exist
@endempty
