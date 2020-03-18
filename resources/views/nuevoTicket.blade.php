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

    <div class="container" style="background-color:white; margin-top:4%;">
        <h1 style="text-align:center; margin-top:3%;">Crear Nuevo Ticket</h1>
        <form action="/creaTicket" method="POST">
            @csrf
            <div class="container">
                <div class="row" style="margin-top:5%;">
                    <div class="col-1">
                    </div>
                    <div class="col-3">
                        <label for="exampleTextarea" style="margin-left:30%; margin-top:4%;">Seleccione un
                            producto</label>
                    </div>

                    <div class="col-6">
                        <select class="form-control" id="exampleSelect1" name="producto">
                            <option>Laptop</option>
                            <option>Celular</option>
                            <option>Pantalla</option>
                            <option>Tablet</option>
                            <option>Otro</option>
                        </select>
                    </div>

                    <div class="col-2">
                    </div>
                </div>

                <div class="row" style="margin-top:2%">
                    <div class="col-1">
                    </div>
                    <div class="col-10">
                        <label for="exampleTextarea">Example textarea</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3" name="descripcion"></textarea>
                    </div>
                </div>

                <div class="row" style="margin-top: 3%;">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="">idCliente</label>
                    </div>
                    <div class="col-3">
                        <input type="number" name="idCliente" id="">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success" style="width:50%; margin-left:9%; margin-top:3%;">
                Enviar ticket
            </button>

        </form>
        <div class="alert alert-primary" role="alert" style="margin-top:3%; width:90%; margin-left:5%;">
            Por favor llenar todos los campos
        </div>
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