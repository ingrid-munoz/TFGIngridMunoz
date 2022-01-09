@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html>
<title>Secretaria</title>

<body>
<section class="mb-4" style="background-color: #F5CBA7">

    <div class="container">
        <h5 class="h1-responsive font-weight-bold my-4">Horario de atención:</h5>
        <p>Lunes a viernes de 09:00 am a 18:00 pm</p>
        <h5 class="h1-responsive font-weight-bold my-4">Teléfono de contacto:</h5>
        <p>976-123-987</p>
    </div>

    <div class="container">
    <!--Section heading-->
    <h3 class="h1-responsive font-weight-bold my-7">Formulario de contacto</h3>
    <!--Section description-->
    <p class="text-left w-responsive mx-auto mb-3">Si tienes alguna duda o consulta puedes ponerte en contacto con nosotroas a traves del siguiente formulario:</p>

    <div class="row">
        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Nombre</label>
                            <input type="text" id="name" name="name" class="form-control">

                            <label for="name" class="">Apellidos</label>
                            <input type="text" id="name" name="apellido" class="form-control">

                            <label for="email" class="">Email</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <label for="message">Mensaje</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        </div>
                    </div>
                </div>
                <!--Grid row-->
            </form>

            <br>

            <div class="text-left text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Enviar</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->
    </div>
    </div>
<br>
    <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47699.00354623128!2d-0.9300003568796518!3d41.65168593549159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5914dd5e618e91%3A0x49df13f1158489a8!2sZaragoza!5e0!3m2!1ses!2ses!4v1639734481866!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

</section>
<!--Section: Contact v.2-->

</body>
</html>
@endsection
