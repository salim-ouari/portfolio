<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <!-- ===== CSS Files ===== -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/skins/color-1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- ====== Style Switcher ====== -->
  <link rel="stylesheet" href="css/skins/color-1.css" class="alternate-style" title="color-1" disabled>
  <link rel="stylesheet" href="css/skins/color-2.css" class="alternate-style" title="color-2" disabled>
  <link rel="stylesheet" href="css/skins/color-3.css" class="alternate-style" title="color-3" disabled>
  <link rel="stylesheet" href="css/skins/color-4.css" class="alternate-style" title="color-4" disabled>
  <link rel="stylesheet" href="css/skins/color-5.css" class="alternate-style" title="color-5" disabled>
  <link rel="stylesheet" href="css/style-switcher.css">
</head>

<body>
  <!-- ===== Main Container Start ===== -->
  <div class="main-container">
    <!-- ===== Aside Start ===== -->
    <div class="aside">
      <div class="logo">
        <a href="#"><span>M</span>enu</a>
      </div>
      <div class="nav-toggler">
        <span></span>
      </div>
      <ul class="nav">
        <li><a href="#home" class="active"><i class="fa fa-home"></i>Accueil</a></li>
        <li><a href="#about"><i class="fa fa-user"></i> A propos de moi</a></li>
        <li><a href="#services"><i class="fa fa-list"></i>Mes compétences</a></li>
        <li><a href="#portfolio"><i class="fa fa-briefcase"></i>Mes projets</a></li>
        <li><a href="#contact"><i class="fa fa-comments"></i>Contact</a></li>
      </ul>
    </div>
    <!-- ===== Aside End ===== -->
    <!-- ===== Main Content Start ===== -->
    <div class="main-content">
      <!-- ===== Home Section Start ===== -->
      <section class="home active section" id="home">
        <div class="container">
          <div class="row">
            <div class="home-info padd-15">
              <h3 class="hello">Hello, je m'appelle <span class="name"> Salim Ouari</span></h3>
              <h3 class="my-profession">Je suis <span class="typing"> &nbsp Web Developpeur</span></h3>
              <p>Étudiant à La Plateforme en développement Web/mobile à la recherche d'un contrat en alternance pour
                septembre 2022. Passionné par les métiers du numérique, je prépare le titre RNCP Concepteur, développeur
                d'applications web/mobile.</p>
              <a href="images/CV_2022-02-14_Salim_Ouari.pdf" class=" btn">Download CV</a>
              <!-- <a href="lien_fichier.pdf" download="Titre à afficher du fichier">Téléchargez le fichier PDF</a>  -->
            </div>
            <div class="home-img padd-15">
              <img src="images/me.JPG" alt="">
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Home Section End ===== -->
      <!-- ===== About Section Start ===== -->
      <section class="about section" id="about">
        <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>A propos de moi</h2>
            </div>
          </div>
          <div class="row">
            <div class="about-content padd-15">
              <div class="row">
                <div class="about-text padd-15">
                  <h3>Salim Ouari<span> &nbsp Developpeur Web</span></h3>
                  <p>Actuellement en formation de Développeur Web & Mobile à La Plateforme, je suis à la recherche d’une
                    alternance pour septembre 2022.

                    Passionné par les métiers du numérique, je prépare le titre RNCP Concepteur, développeur
                    d'applications web/mobile.

                    Grande appétence pour le front et très ouvert au back aussi!
                    Mon objectif est de mettre en application mes connaissances et compétences acquises sur cette année,
                    au service d'une entreprise. Alors ma formation prendra une dimension professionnalisante, pour
                    appréhender les différentes facettes de la profession.

                  </p>
                </div>
              </div>
              <div class="row">
                <div class="personal-info padd-15">
                  <div class="row">
                    <div class="info-item padd-15">
                      <p>Date de naissance: <span>02 nov 1987</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Age : <span>34</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Github : <span>https://github.com/salim-ouari</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Email : <span>salimouari@laplateforme.io</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Ecole : <span>La Plateforme</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Phone : <span>06.22.61.25.51</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Ville : <span>Marseille</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Pays : <span>France</span></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="buttons padd-15">
                      <a href="#contact" data-section-index="1" class="btn hire-me">Contactez-moi</a>
                    </div>
                  </div>
                </div>
                <div class="skills padd-15">
                  <div class="row">
                    <div class="skill-item padd-15">
                      <h5>Dynamique</h5>
                      <div class="progress">
                        <div class="progress-in" style="width: 96%;"></div>
                        <div class="skill-percent">96%</div>
                      </div>
                    </div>
                    <div class="skill-item padd-15">
                      <h5>Curieux</h5>
                      <div class="progress">
                        <div class="progress-in" style="width: 86%;"></div>
                        <div class="skill-percent">86%</div>
                      </div>
                    </div>
                    <div class="skill-item padd-15">
                      <h5>Rigoureux</h5>
                      <div class="progress">
                        <div class="progress-in" style="width: 96%;"></div>
                        <div class="skill-percent">96%</div>
                      </div>
                    </div>
                    <div class="skill-item padd-15">
                      <h5>Capacité d'analyse</h5>
                      <div class="progress">
                        <div class="progress-in" style="width: 84%;"></div>
                        <div class="skill-percent">84%</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="education padd-15">
                  <h3 class="title">Diplômes et Formations</h3>
                  <div class="row">
                    <div class="timeline-box padd-15">
                      <div class="timeline shadow-dark">
                        <!-- ______________________________timeline item______________________________________ -->
                        <div class="timeline-item">
                          <div class="circle-dot"></div>
                          <h3 class="timeline-date">
                            <i class="fa fa-calendar"></i> 2022 - 2023
                          </h3>
                          <h4 class="timeline-title">Titre professionnel RNCP niv 6 concepteur développeur d'application
                          </h4>
                          <p class="timeline-text">La Plateforme - Marseille (à réaliser en alternance</p>
                        </div>
                        <!-- _____________________________ timeline item ________________________________________ -->
                        <div class="timeline-item">
                          <div class="circle-dot"></div>
                          <h3 class="timeline-date">
                            <i class="fa fa-calendar"></i> 2021 - 2022
                          </h3>
                          <h4 class="timeline-title">Titre professionnel RNCP niv 5 développeur web et mobile</h4>
                          <p class="timeline-text">La Plateforme - Marseille (en cours)</p>
                        </div>
                        <!-- __________________________ timeline item______________________________________________ -->
                        <div class="timeline-item">
                          <div class="circle-dot"></div>
                          <h3 class="timeline-date">
                            <i class="fa fa-calendar"></i> 2004 - 2006
                          </h3>
                          <h4 class="timeline-title">Bac professionnel de commerce </h4>
                          <p class="timeline-text"> LP L'Estaque - Marseille
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="experience padd-15">
                  <h3 class="title">Experience</h3>
                  <div class="row">
                    <div class="timeline-box padd-15">
                      <div class="timeline shadow-dark">
                        <!-- ________________________________ timeline item _____________________________ -->
                        <div class="timeline-item">
                          <div class="circle-dot"></div>
                          <h3 class="timeline-date">
                            <i class="fa fa-calendar"></i> 2019 - 2021
                          </h3>
                          <h4 class="timeline-title">Technicien multi technique</h4>
                          <p class="timeline-text">Maintenance des installations CVC et électrique -
                            Relation clients - Vinci facilities - Aix en Provence</p>
                        </div>
                        <!-- =______________________________________ timeline item________________________________ -->
                        <div class="timeline-item">
                          <div class="circle-dot"></div>
                          <h3 class="timeline-date">
                            <i class="fa fa-calendar"></i> 2019 - 2020
                          </h3>
                          <h4 class="timeline-title">Technicien CVC</h4>
                          <p class="timeline-text">Maintenance et dépannage des installations CVC - Véolia Energies -
                            Aix en Provence</p>
                        </div>
                        <!-- _________________________________________timeline item _______________________________ -->
                        <div class="timeline-item">
                          <div class="circle-dot"></div>
                          <h3 class="timeline-date">
                            <i class="fa fa-calendar"></i> 2018 - 2019
                          </h3>
                          <h4 class="timeline-title">Technicien multi technique</h4>
                          <p class="timeline-text">Maintenance des installations CVC et électrique -
                            Relation clients - Vinci facilities - Aix en Provence</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== About Section End ===== -->
      <!-- ===== Services Section Start ===== -->
      <section class="service section" id="services">
        <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>Compétences</h2>
            </div>
          </div>
          <div class="row">
            <!-- ===== Service item Start ====== -->
            <div class="service-item padd-15">
              <div class="service-item-inner">
                <div class="icon">
                  <img src="images/kisspng-web-development-html-css3-the-ohana-code-logo-2cpaper-projection-shaded_1660937-html-dropdown-js-5aebd5634bb501.0344507315254050273101.png" alt="icon">
                </div>
                <h4>HTML|CSS</h4>
                <p>Structure | Métadonnées <br>
                  Layout (Grid & flexbox)</p>
              </div>
            </div>
            <!-- ===== Service item End ====== -->
            <!-- ===== Service item Start ====== -->
            <div class="service-item padd-15">
              <div class="service-item-inner">
                <div class="icon">
                  <img src="images/kisspng-mysql-database-web-development-computer-icons-mysql-5b2cc2f3399385.0469886115296601472359.png" alt="icon">
                </div>
                <h4>My SQL</h4>
                <p>Modélisation MCD | MLD | MPD
                  Implémentation via Mysql & Phpmyadmin</p>
              </div>
            </div>
            <!-- ===== Service item End ====== -->
            <!-- ===== Service item Start ====== -->
            <div class="service-item padd-15">
              <div class="service-item-inner">
                <div class="icon">
                  <img src="images/kisspng-computer-icons-php-font-php-logo-5b12e543ebe382.4565130015279649959662.png" alt="icon">
                </div>
                <h4>PHP</h4>
                <p>Programmation Orientée Objet <br>
                  Architecture MVC & Algorithmies</p>
              </div>
            </div>
            <!-- ===== Service item End ====== -->
            <!-- ===== Service item Start ====== -->
            <div class="service-item padd-15">
              <div class="service-item-inner">
                <div class="icon">
                  <img src="images/kisspng-javascript-programmer-programming-language-compute-node-js-5b35fcbd143445.0682463015302647650828.png" alt="">
                </div>
                <h4>JavaScript</h4>
                <p>Jquery | Fetch</p>
              </div>
            </div>
            <!-- ===== Service item End ====== -->
            <!-- ===== Service item Start ====== -->
            <div class="service-item padd-15">
              <div class="service-item-inner">
                <div class="icon">
                  <img src="images/kisspng-bootstrap-logo-computer-software-web-application-p-b-5abb6c2ab15640.3860806115222323627264.png" alt="icon">
                </div>
                <h4>Bootstrap</h4>
                <p>design de sites et d'applications web</p>
              </div>
            </div>
            <!-- ===== Service item End ====== -->
            <!-- ===== Service item Start ====== -->
            <div class="service-item padd-15">
              <div class="service-item-inner">
                <div class="icon">
                  <img src="images/kisspng-slack-webhook-chatbot-trello-5aef1bfd77fb27.7938732715256197094915.png" alt="icon">
                </div>
                <h4>Outils</h4>
                <p> Github | Trello | Figma |
                  LucidChart</p>
              </div>
            </div>
            <!-- ===== Service item End ====== -->
          </div>
        </div>
      </section>
      <!-- ===== Services Section End ===== -->
      <!-- ===== Portfolio Section Start ===== -->
      <section class="portfolio section" id="portfolio">
        <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>Portfolio</h2>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-heading padd-15">
              <h2>Mes derniers Projets :</h2>
            </div>
          </div>
          <div class="row">
            <!-- ====== portfolio item start ====== -->
            <div class="portfolio-item padd-15">
              <h3>Boutique e-commerce</h3>
              <div class="portfolio-item-inner shadow-dark">
                <div class="portfolio-img">
                  <img class="hei" src="images/portfolio/Capture3.PNG" alt="e-shop">
                </div>
              </div>
            </div>
            <!-- ====== portfolio item End ====== -->
            <!-- ====== portfolio item start ====== -->
            <a href="Blog/index.php" class="portfolio-item padd-15">
              <h3>Blog</h3>
              <div class="portfolio-item-inner shadow-dark">
                <div class="portfolio-img">
                  <img class="hei" src="images/portfolio/Capture.PNG" alt="blog">
                </div>
              </div>
            </a>
            <!-- ====== portfolio item End ====== -->
            <!-- ====== portfolio item start ====== -->
            <a href="pendu/index.php" class="portfolio-item padd-15">
              <h3>Jeu du pendu</h3>
              <div class="portfolio-item-inner shadow-dark">
                <div class="portfolio-img">
                  <img class="hei" src="images/portfolio/Capture2.2.PNG" alt="pendu">
                </div>
              </div>
            </a>
            <!-- ====== portfolio item End ====== -->
            <!-- ====== portfolio item start ====== -->
            <a href="https://salim-ouari.students-laplateforme.io/wordpress/" class="portfolio-item padd-15">
              <h3> Boutique Wordpress</h3>
              <div class="portfolio-item-inner shadow-dark">
                <div class="portfolio-img">
                  <img class="hei" src="images/portfolio/Capture4.PNG" alt="">
                </div>
              </div>
            </a>
            <!-- ====== portfolio item End ====== -->
            <!-- ====== portfolio item start ====== -->
            <div class="portfolio-item padd-15">
              <h3>Projet en cours</h3>
              <div class="portfolio-item-inner shadow-dark">
                <div class="portfolio-img">
                  <img class="hei" src="images/portfolio/coming-soon-1-590x332.jpg" alt="">
                </div>
              </div>
            </div>
            <!-- ====== portfolio item End ====== -->
            <!-- ====== portfolio item start ====== -->
            <div class="portfolio-item padd-15">
              <h3>Projet en cours</h3>
              <div class="portfolio-item-inner shadow-dark">
                <div class="portfolio-img">
                  <img class="hei" src="images/portfolio/coming-soon-1-590x332.jpg" alt="">
                </div>
              </div>
            </div>
            <!-- ====== portfolio item End ====== -->
          </div>
        </div>
      </section>
      <!-- ===== Portfolio Section End ===== -->
      <?php
      include('mail.php');
      ?>
    </div>
    <!-- ===== Main Content End ===== -->
  </div>
  <!-- ===== Main Container End ===== -->
  <!-- ===== Style Switcher Start ===== -->
  <div class="style-switcher">
    <div class="style-switcher-toggler s-icon">
      <i class="fas fa-cog fa-spin"></i>
    </div>
    <div class="day-night s-icon">
      <i class="fas "></i>
    </div>
    <h4>Theme Colors</h4>
    <div class="colors">
      <span class="color-1" onclick="setActiveStyle('color-1')"></span>
      <span class="color-2" onclick="setActiveStyle('color-2')"></span>
      <span class="color-3" onclick="setActiveStyle('color-3')"></span>
      <span class="color-4" onclick="setActiveStyle('color-4')"></span>
      <span class="color-5" onclick="setActiveStyle('color-5')"></span>
    </div>
  </div>
  <!-- ===== Style Switcher End ===== -->
  <!-- ===== JS Files ===== -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>
  <script src="js/script.js"></script>
  <script src="js/style-switcher.js"></script>
</body>

</html>