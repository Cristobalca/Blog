    @extends('layouts.app')

    @section('content')
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <header class="masthead  text-black text-center shadow-lg p-3 mb-5 bg-white rounded">
                <div class="container d-flex align-items-center flex-column">
                    <!-- Masthead Heading-->
                    <h4 class="masthead-heading text-uppercase mb-3 card-header">Datos Personales</h4>

                    <!-- Masthead Avatar Image-->
                    <img class="masthead-avatar mb-2 rounded-circle" src="https://images.megapixl.com/4684/46846330.jpg" alt="" width="300px" height="300px"  />

                    <!-- Icon Divider-->
                    {{-- <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div> --}}
                    <!-- Masthead Subheading-->
                    {{-- <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Illustrator</p> --}}

                    <ul class="card-body">
                       <b>Nombre:</b> Cristobal<br>
                        <b>Apellidos:</b> Cordero Acosta<br>
                        <b>Matricula:</b> 2017-5453 <br>
                        <b>Correo Electronico:</b> cristian000033@gmail.com <br>
                    </ul>
                    <ul>

                        <li><a href="https://www.youtube.com/?hl=es" target="_blanck">Youtube</a></li>
                            <li><a href="https://www.google.com/" target="_blanck">Google</a></li>
                            <li><a href="https://platzi.com/">Platzi</a></li>
                            <li><a href="https://es.stackoverflow.com/">stackoverflow</a></li>
                            <li><a href="https://www.udemy.com/">udemy</a></li>
                    </ul>

                </div>
            </header>
        </div>
    </div>
    </div>
    </div>
    @endsection
