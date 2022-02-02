@extends('layouts.user')

@section('content')
<main class="col ps-md-2 pt-2">
    <div class="page-header mt-5 ms-5 ps-4 pt-1" id="titApartado">
        <h2>Nombre del plan</h2>
    </div>
                    
    <div class="row" id="planFavUser">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($favoritos as $favorito)
            <div class="col">
                <div class="card text-white">
                    <img src="/images/Imagenes/alavaDescubre.jpg" class="card-img" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-title float-end">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                            </svg>
                        </h5>
                        <p class="card-text position-absolute start-0 bottom-0 end-0 h-25 text-center fs-6">{{$favorito->DocumentName}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>       
    </div>
</main>
@endsection