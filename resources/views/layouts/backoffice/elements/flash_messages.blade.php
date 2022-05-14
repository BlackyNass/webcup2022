@if($message = Session::get('message_error'))
    <div class="alert alert-danger class-flash-message">
        <i class="fe fe-alert-triangle"></i> {{ $message }}
    </div>
@endif

@if($message = Session::get('message_success'))
    <div class="alert alert-success class-flash-message">
        <i class="fe fe-check"></i> {{ $message }}
    </div>
@endif

@if($message = Session::get('message_warning'))
    <div class="alert alert-warning class-flash-message">
        <i class="fe fe-check"></i> {{ $message }}
    </div>
@endif