<head>
    <!--<link rel="stylesheet" type="text/css" href="/css/login.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Iniciar sesion</title>
</head>
@php
   $url = "https://opendata.euskadi.eus/contenidos/ds_recursos_turisticos/planes_experiencias_euskadi/opendata/planes.json";
        
        //call api
        $planes_json = file_get_contents($url);
        //this.json = this.jsonp.substring(this.jsonp.indexOf("(") + 1, this.jsonp.lastIndexOf(")"));
        $planes_json = substr($planes_json, 13, -2);
        $decoded_json = json_decode($planes_json, true);
        //$nombre = $decoded_json->results[0];
        $nombre = $decoded_json[0]['documentName'];
        //$nombre1 = $nombre['documentName'];
        //$documentName = $decoded_json['documentName'];
        /*foreach ($decoded_json as $value) {
            echo 'alert("'.$value.'")';
        }*/
        /*foreach ($decoded_json['documentName'] as $key => $value) {
            echo "$key: $value\n";
        }*/
        echo 'alert("'.$nombre.'")';
        //echo 'alert("hola")';
@endphp
<x-guest-layout>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <img src="/images/login.jpg"/>
            </div>
            
            <div class="col-sm-4">
                <x-auth-card>
                    <x-slot name="logo">
                        <a href="/">
                            <img src="/images/login1.png" width=100em height=100em/>
                            <!--<x-application-logo class="w-20 h-20 fill-current text-gray-500" />-->
                        </a>
                    </x-slot>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Contraseña')" />

                            <x-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Recordar contraseña') }}</span>
                            </label>
                        </div>

                        <div class="flex flex-col items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Ha olvidado su contraseña?') }}
                                </a>
                            @endif

                            <x-button class="ml-3 mt-3">
                                {{ __('Entrar') }}
                            </x-button>
                        </div>
                    </form>
                </x-auth-card>
            </div>
        </div>
    </div>
</x-guest-layout>
