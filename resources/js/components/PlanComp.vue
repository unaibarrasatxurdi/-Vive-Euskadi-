<template>
    <section class="container" id="contenedorPlan">
        <div class="row">
            <div class="col-12" id="infoPlan">
                <div class="card" id="headerPlan">
                    <img src="images/temporales/plan1.jpg" class="img-overlay">
                    <div class="row m-1" id="tituloPlan">
                        <h3 class="col">Tres días en la Rioja Alavesa</h3>
                        <div class="col justify-content-end">
                            <i class="fa fa-heart col" aria-hidden="true" id="iconoFavPlan"></i>
                            <i class="fa fa-bookmark col" aria-hidden="true" id="iconoGuardarPlan"></i>
                        </div>
                    </div>      
                </div>
                <div class="mt-3 m-1" id="textoPlan">
                    <p>
                        Entre los viñedos que caracterizan a Rioja Alavesa, podemos encontrar uno de los grandes desconocidos de la comarca: el 
                        olivo y el aceite.<br><br>

                        Éste es un plan perfecto de dos días para descubrir dos de los tesoros de Rioja Alavesa: el aceite y el vino.<br><br>

                        DÍA 1<br><br>

                        Dedicaremos la jornada de hoy a conocer al hermano mayor de la vid en Rioja Alavesa: el olivo. Durante siglos, más o 
                        menos enraizado, el olivo nos ofrece su hermoso fruto y su rico zumo, conocido como el oro líquido.<br><br>

                        Nos adentraremos en Lanciego, una villa de algo más de 660 habitantes, donde contrastaremos modernidad y tradición en 
                        uno de sus trujales y nos sumergiremos en la historia del olivo en Rioja Alavesa. Conoce la evolución del olivo y de 
                        las diversas formas de transformación en aceite y disfruta del vivo sabor del aceite de variedad Arróniz. También 
                        existen trujales que pueden visitarse en las localidades de Barriobusto, Moreda y Oyón.<br><br>

                        Te recomendamos que dediques parte de la jornada a visitar también las calles de Moreda de Álava, ya que seguro que 
                        te sorprende esta villa repleta de casas blasonadas y los restos de su antigua muralla. No dejes de visitar la Iglesia 
                        Parroquial de Santa María, con su destacado retablo Mayor de estilo barroco y sus pinturas. Muy cerca de Moreda, puedes 
                        encontrar Labraza, una villa medieval espectacular que conserva intacta su muralla y su encantador trazado de la Edad 
                        Media.<br><br>

                        DÍA 2<br><br>

                        El plan de hoy estará enfocado a descubrir el vino y la gastronomía de esta comarca. Hoy no puedes dejar de visitar 
                        alguna de las muchas bodegas de Rioja Alavesa. Hay una infinidad de opciones para elegir. Te recomendamos que visites 
                        dos bodegas contrastadas.<br><br>

                        Una más antigua o familiar, y otra más moderna e innovadora. Si te pierdes con tanta oferta, te recomendamos que 
                        contactes con alguna de las agencias y empresas especializadas de Rioja Alavesa que estarán encantadas de diseñar 
                        tu ruta y asesorarte. Y nada como maridar el vino con la deliciosa gastronomía de la comarca. Puedes comer en una 
                        de las bodegas que ofrecen comidas o decantarte por alguno de los numerosos restaurantes que hay en la zona.<br><br>

                        En Rioja Alavesa encontrarás desde la cocina más tradicional hasta las propuestas culinarias más innovadoras. No 
                        dejes de probar las patatas a la riojana, las pochas y las famosas chuletillas al sarmiento<br><br>
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div id="datosPlan">
                        <h3>DATOS DE INTERÉS</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                    </div>
                </div>
                <div class="row">
                    
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    mounted() {
        console.log("This is about component");
    },
};
</script>

<style scoped>
    #contenedorPlan {
        padding-left: 10%;
        padding-right: 10%;
    }

    #infoPlan {
        width: 50%;
        background-color: whitesmoke;
    }

    #headerPlan {
        border: 0;
    }

    #tituloPlan {
        position: absolute;
        top: 0;
    }

    #iconoFavPlan {
        color: red;
    }

    #iconoGuardarPlan {
        color: white;
    }

    #textoPlan {
        color: black;
    }

    #datosPlan {
        width: 50%;
        color: white;
        background-color: rgb(61, 61, 61);
    }
</style>