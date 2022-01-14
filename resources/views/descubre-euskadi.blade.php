<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Descubre Euskadi</title>

        <link rel="stylesheet" href="{{ asset('css/descubre_euskadi.css') }}">

    </head>
    
    <body>
  
        <div id="app">
            <cabecera descubre-euskadi="{{ url('descubre-euskadi')}}"  sobre-nosotros="{{ url('')}}"></cabecera>
        
        <div class="container">
            <h1 class="text-center text-white mt-3">Euskadi: un pequeño pais con una gran identidad</h1>      
            <div class="card flex-column mt-5">
                <div class="card-header w-100 text-white fs-3">
                    Álava
                </div>
                <div class="card flex-row ">
                    <div class="card-image border-0 img-fluid">
                        <img src="/images/Imagenes/alavaDescubre.jpg" alt="Descubre Àlava" class="descubre-img">
                    </div>
                    
                    <div class="card-body-right ms-3">
                        <p class="card-text text-white">            
                            Álava  es el territorio vasco que mayores rasgos diferenciales presenta respecto a los otros dos.  Es conocida por la excelente calidad de sus vinos procedentes de Rioja Alavesa.Su capital, Vitoria-Gasteiz, es  sede del Gobierno Vasco, y por tanto capital administrativa de Euskadi.Álava cuenta con importantes espacios naturales, que por la escasa industrialización, se encuentran en buen estado de conservación, como por ejemplo, Gorbeia, Urkiola y Aizkorri.</p>
                        <a href="#" class="card-link float-end me-5">Ver más</a>
                    </div>
                </div>
                <div class="w-100"></div>
                
            </div>
            
            <div class="card flex-column mt-5">
                <div class="card-header w-100 text-white fs-3">
                    Gipuzcoa
                </div>
                <div class="card flex-row">
                    <div class="card-image border-0 img-fluid">
                        <img src="/images/Imagenes/gipuzcoaDescubre.jpg" alt="Descubre Gipuzcoa" class="descubre-img">
                    </div>
                    
                    <div class="card-body-right ms-3">
                        <p class="card-text text-white">            
                            Gipuzkoa es un territorio plural en el que cada comarca goza de personalidad propia. Desde el azul del Cantábrico hasta los espacios naturales del interior, pasando por ciudades industriales situadas a escasos kilómetros de comarcas rurales.
                            Es el territorio menos extenso en comparación con Araba y Bizkaia, una tierra de contrastes que ha sabido conjugar el arraigo de sus tradiciones, sin dejar de estar en primera línea de la vanguardia tecnológica, empresarial y artística.
                             La costa de Gipuzkoa, a lo largo de 86 km, cuenta con innumerables atractivos. En el litoral occidental, las hermosas villas costeras de Zarautz, Getaria y Mutriku constituyen deseados destinos vacacionales para muchos turistas.</p>
                        <a href="#" class="card-link float-end me-5">Ver más</a>
                    </div>
                </div>
                <div class="w-100"></div>
                
            </div> 

            <div class="card flex-column mt-5 mb-5">
                <div class="card-header w-100 text-white fs-3">
                    
                    Vizcaya
                </div>
                <div class="card flex-row">
                    <div class="card-image border-0 img-fluid">
                        <img src="/images/Imagenes/vizcayaDescubre.jpg" alt="Descubre Vizcaya" class="descubre-img">
                    </div>
                    
                    <div class="card-body-right ms-3">
                        <p class="card-text text-white">            
                            Bizkaia se distingue principalmente por su avanzada modernidad y por ser una tierra de contrastes 
                            que guarda con mimo sus tradiciones.
                            Es el territorio más poblado de Euskadi y esa aglomeración demográfica se sitúa en torno a Bilbao.
                            El litoral vizcaíno está constituido por veintinueve playas de arena dorada, abruptos acantilados y espacios naturales.
                                        El Duranguesado, el valle de Arratia y Encartaciones conservan la esencia de la Bizkaia rural, además de un importante 
                            patrimonio histórico-cultural. </p>
                        <a href="#" class="card-link float-end me-5">Ver más </a>
                    </div>
                </div>
                <div class="w-100"></div>
                
            </div>   
          </div>
          <piepagina></piepagina>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

