<?php
if (isset($_POST['submit'])) {
    $to  = 'salim.ouari@laplateforme.io'; // notez la virgule

    // Sujet
    $subject = 'test mail';

    // message
    $message = '
        <html>
        <head>
          <title>Calendrier des anniversaires pour Août</title>
        </head>
        <body>
          ' . $_POST['message'] . '
        </body>
        </html>
        ';

    // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=utf-8';

    // En-têtes additionnels
    $headers[] = 'To: salim.ouari@laplateforme.io';
    //$headers[] = 'From: Anniversaire <anniversaire@example.com>';

    $headers[] = 'From: ' . $_POST['nom'] . '<' . $_POST['email'] . '>';

    // Envoi
    mail($to, $subject, $message, implode("\r\n", $headers));




    var_dump($headers);
    var_dump($_POST);
}
?>

<!-- ===== Contact Section Start ===== -->
<section class="contact section" id="contact">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>Contact</h2>
            </div>
        </div>
        <h3 class="contact-title padd-15">Pour plus d'infos</h3>
        <h4 class="contact-sub-title padd-15">N'hésitez pas à me contacter</h4>
        <div class="row">
            <!-- ===== Contact info item start ====== -->
            <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-phone"></i></div>
                <h4>Phone</h4>
                <p>06.22.61.25.51</p>
            </div>
            <!-- ===== Contact info item end ====== -->
            <!-- ===== Contact info item start ====== -->
            <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
                <h4>Ville</h4>
                <p>Marseille</p>
            </div>
            <!-- ===== Contact info item end ====== -->
            <!-- ===== Contact info item start ====== -->
            <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-envelope"></i></div>
                <h4>Email</h4>
                <p>salim.ouari@laplateforme.io</p>
            </div>
            <!-- ===== Contact info item end ====== -->
            <!-- ===== Contact info item start ====== -->
            <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-globe-europe"></i></div>
                <h4>Github</h4>
                <p>https://github.com/salim-ouari</p>
            </div>
            <!-- ===== Contact info item end ====== -->
        </div>
        <h3 class="contact-title padd-15">Envoyer moi un email</h3>
        <h4 class="contact-sub-title padd-15">Remplissez le formulaire</h4>


        <!-- ======__________________________________________ Contact Form_______________________________ ====== -->
        <form action="" method="post">
            <div class="row">
                <div class="contact-form padd-15">
                    <div class="row">
                        <div class="form-item col-6 padd-15">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nom" required>
                            </div>
                        </div>
                        <div class="form-item col-6 padd-15">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-item col-12 padd-15">
                            <div class="form-group">
                                <input type="text" name="sujet" class="form-control" placeholder="Sujet">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-item col-12 padd-15">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="" placeholder="Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-item col-12 padd-15">
                            <button type="submit" class="btn">Envoyer Message</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>



    </div>

</section>
<!-- ===== Contact Section End ===== -->