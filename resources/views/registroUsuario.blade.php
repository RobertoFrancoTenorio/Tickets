<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="background: linear-gradient(0deg, rgba(39,34,195,1) 0%, rgba(45,227,253,1) 100%);">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="#" style="color:white; margin-left:2%">Sistema de Tickets</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left:55%;">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color:white;">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:white;">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:white;">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
                        Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-----------------------------------------------------------FORMULARIO------------------------------------------------------------>
    <div class="container" style="border:solid 1px black;  margin-top:2%; border-radius:20px; background-color:white; -webkit-box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.75);">
        <h1 style="text-align:center; margin-top:3%;">Registro de Usuario</h1>
        <form action="/guarda" method="POST">
            @csrf
            <div class="container" style="margin-top:3%;">
                <div class="row">
                    <div class="col-6">
                        <label for="">Nombre*</label>
                        <input type="text" name="Nombre" id="" style="width: 100%; ">
                    </div>
                    <div class="col-3">
                        <label for="">Apellido Paterno</label>
                        <input type="text" name="ApellidoPaterno" id="" style="width: 100%;">
                    </div>
                    <div class="col-3">
                        <label for="">Apellido Materno</label>
                        <input type="text" name="ApellidoMaterno" id="" style="width: 100%;">
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label for="">Correo Electrónico*</label>
                        <input type="email" name="correoElectronico" id="" style="width:100%;">
                    </div>
                    <div class="col-6">
                        <label for="">Nombre de Usuario*</label>
                        <input type="text" name="nombreUsuario" id="" style="width:100%;">
                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="col-12">
                        <label for="">Contraseña*</label>
                        <input type="password" name="contraseña" id="" style="width:100%;" placeholder=" **********">
                    </div>
                </div>

                <div class="alert alert-primary" role="alert" style="margin-top:2%;">
                    Los campos con * son obligatorios
                </div>

                <button type="submit" class="btn btn-success" style="margin-bottom:2%; width:100%; ">Crear
                    Perfil</button>

            </div>


        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>