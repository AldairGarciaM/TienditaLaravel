<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="icon" href="img/logo.jpg">
    <title>Mi Tiendita</title>
</head>
<body>

    <br>
    <div class="container">
        <h1 class="text-center">Tabla de productos</h1>
    </div>

    <br>
    <div class="card">
        <div class="card-header">
            <h2 class="text-center"><a href="{{action('ProductosController@index')}}">Todos los productos</a></h2>

            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-3">
                        <h4>Categorias:</h4>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="check1" value="Videojuegos"/>
                            <a class="form-check-label badge badge-light" for="check1" href="{{action('ProductosController@videojuegos')}}">Videojuegos</a>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="check2" value="Electronica"/>
                            <a class="form-check-label badge badge-light" for="check2" href="{{action('ProductosController@electronica')}}">Electronica</a>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="check3" value="Tecnologia"/>
                            <a class="form-check-label badge badge-light" for="check3" href="{{action('ProductosController@tecnologia')}}">Tecnologia</a>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="check4" value="Hogar"/>
                            <a class="form-check-label badge badge-light" for="check4" href="{{action('ProductosController@hogar')}}">Hogar</a>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="check5" value="Mascotas"/>
                            <a class="form-check-label badge badge-light" for="check5" href="{{action('ProductosController@mascotas')}}">Mascotas</a>
                        </div>
                    </div>

    
                    <div class="col-3">
                        <h4>Subcategorias:</h4>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="check6" value="Entretenimiento"/>
                            <a class="form-check-label badge badge-light" for="check6" href="{{action('ProductosController@entretenimiento')}}">Entretenimiento</a>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="check7" value="Familiar"/>
                            <a class="form-check-label badge badge-light" for="check7" href="{{action('ProductosController@familiar')}}">Familiar</a>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="check8" value="Computacion"/>
                            <a class="form-check-label badge badge-light" for="check8" href="{{action('ProductosController@computacion')}}">Computacion</a>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="check10" value="Salud"/>
                            <a class="form-check-label badge badge-light" for="check10" href="{{action('ProductosController@salud')}}">Salud</a>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="check11" value="Telefonia"/>
                            <a class="form-check-label badge badge-light" for="check11" href="{{action('ProductosController@telefonia')}}">Telefonia</a>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="check12" value="Paseo"/>
                            <a class="form-check-label badge badge-light" for="check12" href="{{action('ProductosController@paseo')}}">Paseo</a>
                        </div>
                    </div>

                    <div class="col-3">
                        <h4>Precios</h4>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="check13" value="Precio1"/>
                            <a class="form-check-label badge badge-light" for="check13" href="{{action('ProductosController@precio1')}}">Menos de $500</a>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="check14" value="Precio2"/>
                            <a class="form-check-label badge badge-light" for="check14" href="{{action('ProductosController@precio2')}}">$500 a $2500</a>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="check15" value="Precio3"/>
                            <a class="form-check-label badge badge-light" for="check15" href="{{action('ProductosController@precio3')}}">$2500 a $7500</a>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="check16" value="Precio4"/>
                            <a class="form-check-label badge badge-light" for="check16" href="{{action('ProductosController@precio4')}}">$7500 a $12500</a>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="check17" value="Precio5"/>
                            <a class="form-check-label badge badge-light" for="check17" href="{{action('ProductosController@precio5')}}">$12500 a $22000</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <br>
        <div class="container">
            <div class="row">
                @foreach ($product as $prod)
                <div class="col-3 pb-5 ">
                    <div class="card border border-dark">
                        <hr>
                        <p><img class="rounded mx-auto d-block" width="150" height="150" src="img/{{$prod->imagen}}"></p>
                        <hr>
                        <p class="card-text font-weight-italic"> ID: {{$prod -> id}}</p>
                        <p class="card-text font-weight-italic"> Nombre: {{$prod -> Nombre}} </p>
                        <p class="card-text font-italic"> Categoria: {{$prod -> Categoria}}</p>
                        <p class="card-text font-italic"> Marca: {{$prod -> Marca}} </p>
                        <p class="card-text font-italic"> Precio: ${{$prod -> Precio}} </p>
                        <p class="card-text font-italic"> Subcategoria: {{$prod -> Subcategoria}}</p>
                    </div>
                </div>    
                @endforeach
            </div>
        </div>
</body>
</html>