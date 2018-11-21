
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-1">
        <h3 class="content-header-title"><?php echo ucfirst(explode(".",Request::route()->getName())[0]); ?></h3>
    </div>
    <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <?php echo ucfirst(explode(".",Request::route()->getName())[0]); ?>
                </li>
            </ol>
        </div>
    </div>
</div>