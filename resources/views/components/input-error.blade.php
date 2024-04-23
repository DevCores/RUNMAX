@props(['messages'])

@if ($messages)
<div class="form-control-feedback">
    @foreach ((array) $messages as $message)
        {{ $message }}
    @endforeach
</div>
@endif
