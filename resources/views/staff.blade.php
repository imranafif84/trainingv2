@foreach ($staffs as $staff)
    {{ $staff->tag }} &nbsp;&nbsp; {{ $staff->user->name }}
@endforeach
