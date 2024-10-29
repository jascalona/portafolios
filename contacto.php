<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./CSS/style.css">

    <title>Contacto</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
        <!--START NAV-->
        <nav id="scrollspy" class="navbar page-navbar navbar-light navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
            <div class="container">
                <a class="navbar-brand" href="/dashboard.html"><strong style="color: #082ca2;">J</strong> <span class="text-dark">Escalona</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/index.html">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/block.html">Block</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/certificados.html">Certificados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contacto.php">Contacto</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!--END NAV-->   

        <!-- Page Header -->
        <header id="home" class="header">
            <div class="overlay"></div>
            <div class="header-content">
                <h6>Jose Escalona Dev®</h6> 
                <p style="font-size: 20px; margin-top: -18px; margin-bottom: 15px;">• HTML • CSS • PHP • Python • Postgresql • SQL-Server </p>
                    <small>Analista de Datos</small>
                    <br>
                    <br>
                <a href="/contacto.html"><button class="btn btn-outline-light">Contactanos</button></a>
            </div>      
        </header><!-- End of Page Header --> 

        <!--START CONTACTO-->
        <div class="container-fluid pt-5">
            <div class="container">
                <div class="section-title">
                </div>
                <div class="row px-3 pb-2">
                    <div class="col-sm-4 text-center mb-3">
                        <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                        <h4 class="font-weight-bold">Localidad</h4>
                        <p>Avenida Ávila, Av. Ávila, Caracas 1060, Miranda, Venezuela</p>
                    </div>
                    <div class="col-sm-4 text-center mb-3">
                        <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                        <h4 class="font-weight-bold">Telefono</h4>
                        <p>+58 412-985-4529</p>
                    </div>
                    <div class="col-sm-4 text-center mb-3">
                        <i class="far fa-2x fa-envelope mb-3 text-primary"></i>
                        <h4 class="font-weight-bold">Email</h4>
                        <p>abrahamjose.1587@gmail.com</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 pb-5">
                        <iframe style="width: 100%; height: 443px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d351.1574294685787!2d-66.85000489398739!3d10.490331767854265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a585481e1d44d%3A0xa8bd64e39f3a5b6d!2s208-206%20Av.%20Libertador%2C%20Caracas%201060%2C%20Distrito%20Capital%2C%20Venezuela!5e1!3m2!1sen!2sbd!4v1696862259664!5m2!1sen!2sbd" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
                    <div class="col-md-6 pb-5">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form method="POST" >

                                <div class="control-group">
                                    <input type="text" class="form-control bg-transparent p-4" id="name" name="name" placeholder="Ingrese su Nombre"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="control-group">
                                    <input type="text" class="form-control bg-transparent p-4" id="asunto" name="asunto" placeholder="Asunto"
                                        required="required" 
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="control-group">
                                    <input type="email" class="form-control bg-transparent p-4" id="email" name="email" placeholder="Email"
                                        required="required" data-validation-required-message="Email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                
                                <div class="control-group">
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control bg-transparent py-3 px-4" rows="5" id="message" name="message" placeholder="Comentanos tu Requerimiento..."
                                        required="required"
                                        data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit" id="btn_submit" name="btn_submit">Enviar</button>
                                </div>
                            </form>

                            <?php
                            include "./controllers/email.php";
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END CONTACTO-->



       <!--START FOOTER-->
    <div class="container-fluid" style="display: flex; justify-content: center; margin-top: 50px;">
        <div class="row">
            <div class="">
                <p style="color: black;" class="m-0">Jose Escalona Dev
                    &copy;  Todos los derechos reservados. José Escalona® | Designed by <a href="https://portafoliosjesclona.000webhostapp.com/" style="color: blue;">JEscalona</a>
                </p>
                <div class="linear"></div>
                <div class="icons">
                    <a href="https://www.linkedin.com/public-profile/settings"><img src="/IMG/linkdin.svg" alt=""></a>
                    <a href="https://github.com/jascalona"><img src="/IMG/github.svg" alt=""></a>
                    <a href="https://wa.me/4129854529?text=Hola,%20Me%20Intersa!"><img src="/img/whatsapp.svg" alt=""></a>
                    <a href="https://www.instagram.com/abrahamescalona.84?igsh=MTg2YWQ1ODh6bWt6NA=="><img src="/IMG/intagram.svg" alt=""></a>
                </div>

            </div>
        </div>
    </div>
    <!--START FOOTER-->






        <script src="/JS/vendors/jquery/jquery-3.4.1.js"></script>
        <script src="/JS/vendors/bootstrap/bootstrap.bundle.js"></script>
        <script src="/JS/vendors/bootstrap/bootstrap.affix.js"></script>
        <script src="/JS/main.js"></script>
   
</body>
</html>