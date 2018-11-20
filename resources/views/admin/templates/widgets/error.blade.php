@if ($errors->any())    
<section id="round-alerts">
    <!-- <div class="row">
    <div class="col-md-12"> -->
        <div class="alert round bg-warning alert-dismissible mb-2" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    <strong>
                        {{ $error }}
                    </strong>
                </li>
                @endforeach
            </ul>
        </div>
      <!--   </div>
  </div> -->
</section>
@endif