@if (session()->has('message'))
    <div class="alert alert-info fade in">
        <button type="button" class="close fa fa-times" data-dismiss="alert"></button>
        {{ session()->get('message') }}
    </div>
@endif