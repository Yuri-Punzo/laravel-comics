@extends("layouts.app")

@section("content")
<div>
    <section class="banner_blue">
    </section>
    <section class="info">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="my_card p-5 fs-5">
                        <h3 class="fw-bold">{{$comics[0]['title']}}</h3>
                        <p>{{$comics[0]['description']}}</p>
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center">
                    <img style="width: 400px;" src="{{Vite::asset('resources/img/info.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
</div>
@endsection