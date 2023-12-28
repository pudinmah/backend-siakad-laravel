@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
            <button class="close" data-sismiss="alert">
                <span>X</span>
            </button>
            <P>{{ $message }} </P>
        </div>
    </div>
@endif
