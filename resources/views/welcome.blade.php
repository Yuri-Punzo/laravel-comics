@extends("layouts.app")

@section("content")
<div id="site_main">

    <div class="container pt-5">
        <div class="position-relative">
            <span class="current_series_tag">CURRENT SERIES</span>
        </div>
        <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-6 g-2">
            <!-- cicla la colonna -->
            <div class="col">
                <div>
                    <img src="" alt="title">
                    <h5 class="py-2"> title </h5>
                </div>
            </div>
        </div>

    </div>

    <div class="text-center py-4">
        <span class="load_more_btn">LOAD MORE</span>
    </div>
</div>
@endsection