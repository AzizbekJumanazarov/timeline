@if ($errors->count())
    <div class="alert alert-danger" role="alert">
        <ul>
            {!! implode('', $errors->all('<li>:message</li>')) !!}
        </ul>
    </div>
@endif