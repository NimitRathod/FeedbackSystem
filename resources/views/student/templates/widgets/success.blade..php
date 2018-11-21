@if ($message = Session::get('success'))    
<section id="round-alerts">
    <div class="alert round bg-success alert-dismissible mb-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <i class="fa fa-check mx-2"></i>
        {{ $message }}
    </div>
</section>
@endif