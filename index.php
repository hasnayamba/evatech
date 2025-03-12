<?php

  include "contact.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>EVA - TECH </title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="images/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="images/logo3.jpg" alt="">
<!--         <h1 class="sitename">EVA TECH</h1>
        <span>.</span> -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#Accueil" class="active">ACCUEIL<br></a></li>
          <li><a href="#Produit&Services">PRODUITS & SERVICES</a></li>
          <li><a href="#Commander">COMMANDER</a></li>
          <li><a href="#Temoignage">TEMOIGNAGE</a></li>
          <li><a href="#Support_Clients">SUPPORT CLIENTS</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Accueil Section -->
    <section id="Accueil" class="hero section">

      <img src="images/accueil.jpg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-12">
   
            <br>
            <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
              <a href="#Commander" class="btn-get-started">En savoir plus</a>
            </div>

          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->



    <!-- Stats Section -->
    <section id="Produit&Services" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
 <section class="produits">
        <div class="row gy-4">
            <h2 data-aos="fade-up" data-aos-delay="200" style="text-align: center; font-size: 50px;font-weight: bold;" >Découvrez nos Kits EVA TECH</h2>
            <p style="font-size: 18px; font-weight: inherit; text-align: center; " >Chez EVA TECH, nous proposons des solutions adaptées à vos besoins : le Kit Starlink pour une connexion internet fiable où que vous soyez, le Caméra Kit pour une sécurité optimale grâce à une surveillance en haute définition, et le Kit Solaire pour une énergie autonome et respectueuse de l'environnement.</p>
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
            <div class="stats-item">
              <article class="produit">
                <img src="images/Starlink.jpg" alt="Starlink Standard Kit">
                <h3>Kit Starlink</h3>
                <p>
                Le kit Starlink est parfait pour un usage domestique. Il offre une connexion stable et rapide pour toute la famille.
              </p>
                <button style="background-color: #FF4500; color: white; border: none; 
                border-radius: 10px; padding: 10px 20px; font-size: 16px; cursor: pointer;
                transition: background-color 0.3 ease;" >
                <a href="" style="color: #fff" >En savoir plus</a> </button>
            </article>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
            <div class="stats-item">
              <article class="produit" >
                <img src="images/Camera.JPG" alt="Starlink Standard Kit">
                <h3>Kit Caméra </h3>
                <p>
                  Le Caméra Kit est idéal pour assurer la sécurité de votre domicile ou entreprise. Profitez d'une surveillance en haute définition, jour et nuit.
                </p>
                <button style="background-color: #FF4500; color: white; border: none; 
                border-radius: 10px; padding: 10px 20px; font-size: 16px; cursor: pointer;
                transition: background-color 0.3 ease;"  ><a href="" style="color: #fff">En savoir plus</a></button>
            </article>
            </div>
          </div><!-- End Stats Item -->

         <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
            <div class="stats-item">
              <article class="produit">
                <img src="images/Panneau.jpg" alt="Starlink Standard Kit">
                <h3>Kit Solaire</h3>
                <p>
                  Le Kit Solaire est parfait pour une énergie autonome et respectueuse de l'environnement. Il garantit une alimentation fiable, même dans les zones isolées
                </p>
                <button style="background-color: #FF4500; color: white; border: none; 
                border-radius: 10px; padding: 10px 20px; font-size: 16px; cursor: pointer;
                transition: background-color 0.3 ease;"  ><a href="" style="color: #fff">En savoir plus</a></button>
            </article>
            </div>
          </div><!-- End Stats Item -->

        </div>
 </section> 
    <!--   </div>

    </section> --><!-- /Stats Section -->

    <!-- Tabs Section -->
    <section id="tabs" class="tabs section">

      <div class="container">
         <h2 style="text-align: center; font-size: 50px;font-weight: bold;"  >Nos Services</h2>
        <p class="fst-italic" style="font-size: 18px; font-weight: inherit; text-align: center; " >
          Découvrez les services innovants que nous proposons pour répondre 
          à vos besoins technologiques et de connectivité.
          <br>
          <small style="font-size: 20px;" > Cliquez sur chacun de nos services pour en savoir plus. </small>
        </p>
        <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tabs-tab-1">
              <i class="bi bi-tools"></i>
              <h4 class="d-none d-lg-block">Installation Professionnelle</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-tab-2">
              <i class="bi bi-headset"></i>
              <h4 class="d-none d-lg-block">Support Technique</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-tab-3">
              <i class="bi bi-arrow-up-circle"></i>
              <h4 class="d-none d-lg-block">Mise à Niveau</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-tab-4">
              <i class="bi bi-lightbulb"></i>
              <h4 class="d-none d-lg-block">Conseils Personnalisés</h4>
            </a>
          </li>
        </ul><!-- End Tab Nav -->

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="tabs-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Installation Professionnelle</h3>
                <p class="fst-italic">
                  Une installation professionnelle garantit la performance, la durabilité et la securité des equipements
                  tout en maximisant leur efficacité et leur conformité aux normes en vigeur.
                </p>
                <ul class="serviceA" >
                   <p><li><i class="bi bi-check2-all"></i>
                    <spab></spab>
                   
                      <span class="heiglight" >
                        Expertise Technique :
                      </span>
                      Nos Installations sont réalisées par des techniciens qualifiés, assurant un montage precis et une configuration optimale pour chaque equipement.
                    </p>
                   <p><li><i class="bi bi-check2-all"></i>
                    <spab></spab>
                   
                      <span class="heiglight" >
                        Matériaux de Qualité :
                      </span> Nous utilisons des outils et des composants fiables, garantissant la durabilité et la 
                      securité de vos equipements.
                      Chaque installation respecte rigoureusement les normes internationales et locales pour assurer une performance optimale et une conformité réglementaire.
                    </p>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="images/aide1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="tabs-tab-2">
            <div class="row">
               <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Support Technique</h3>
                   <p class="fst-italic">
                  Un support Technique efficace est essentiel pour garantir la resolution rapide des problemes, maximiser
                  la durée de fonctionnement des systemes et offrir une assistance personnalisée aux utilisateurs .
                </p>
                <ul class="serviceA" >
                   <p><li><i class="bi bi-check2-all"></i>
                    <spab></spab>
                   
                      <span class="heiglight" >
                        Expertise Technique :
                      </span>
                      Nos Installations sont réalisées par des techniciens qualifiés, assurant un montage precis et une configuration optimale pour chque equipement.
                    </p>
                   <p><li><i class="bi bi-check2-all"></i>
                    <spab></spab>
                   
                      <span class="heiglight" >
                        Réactivité :
                      </span> 
                      Le support est assuré par des professionnels competents, capables de diagnostiquer et resoudre efficacement toute difficultté technique. 
                    </p>
                   <p><li><i class="bi bi-check2-all"></i>
                    <spab></spab>
                   
                      <span class="heiglight" >
                        Assistance Personnalisée :
                      </span>
                      Le support technique offre un accompagnement sur mesure, repondant aux besions specifiques. 
                    </p>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="images/aide2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="tabs-tab-3">
            <div class="row">
               <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Mise a Niveau</h3>
                <p class="fst-italic">
                  La mise a niveau reguliere des systemes et equipements est cruciale pour garantir leur performance, leur sécurité et leur compatibilité avec les dernieres technologies.
                </p>
                <ul class="serviceA" >
                   <p><li><i class="bi bi-check2-all"></i>
                    <spab></spab>
                   
                      <span class="heiglight" >
                        Amelioration des Performances :
                      </span>
                      Les mises a jour permettant d'optimiser les fonctionnalités des systemes, garantissant une meilleure fluidité et reactivité. 
                    </p>
                   <p><li><i class="bi bi-check2-all"></i>
                    <spab></spab>
                   
                      <span class="heiglight" >
                        Renforcement de la sécurité :
                      </span> 
                      Elles corrigent les vulnerabilités et ajoutent des protections contre les menaces emergentes.
                      Les mises a jour assurent que les systemes restent compatibles avec les nouvelles versions de logiciels et materiels. 
                    </p>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="images/aide3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="tabs-tab-4">
            <div class="row">
           <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Conseils Personnalisé </h3>
                <p class="fst-italic">
                 Les conseils personnalisé permettent d'offrir des solutions adaptées aux besions specifiques de chaque client, garantissant ainsi une efficacité maximale et une satisfaction optimale
                </p>
                <ul class="serviceA" >
                   <p><li><i class="bi bi-check2-all"></i>
                    <spab></spab>
                   
                      <span class="heiglight" >
                        Solutions sur Mesure :
                      </span>
                      Les conseils personnalisés offrent des recommandations adaptées aux besions uniques de chaque client, assurant des solutions plus efficaces et pertinantes.
                    </p>
                   <p><li><i class="bi bi-check2-all"></i>
                    <spab></spab>
                   
                      <span class="heiglight" >
                        Optimisation des Ressources:
                      </span> 
                      En prenant en compte les spcificités de chaque situation, les conseils personnalisés aident a maximiser l'utilisation des ressources disponibles pour un meilleur rendement. 

                    </p>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="images/aide4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

        </div>

      </div>

    </section><!-- /Tabs Section -->

      <section id="Commander" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Comment Commander ?</h2>
        <p style="text-align: left;" >
          Suivez les etapes suivantes pour effectuer une Commande
        </p>
        <br>
        <ul class="step-list">
          <li class="step-item" style="display: flex; align-items: center; margin-bottom: 10px;" >
            <div class="step-number">1</div>
            <div class="step-text">
              Sélectionnez le kit qui correspond à vos besoins sur la page Produits et Services
            </div>
          </li>

          <li class="step-item" >
            <div class="step-number">2</div>
            <div class="step-text">
              Remplissez le formulaire de commande ci-dessous avec vos informations.
            </div>
          </li>

            <li class="step-item" >
            <div class="step-number">3</div>
            <div class="step-text">
              Un de nos agents vous contactera pour confirmer votre commande et planifier l'installation.
            </div>
          </li>
        </ul>

      </div><!-- End Section Title -->
  <section class="formulaire">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-12">
            <h2 style="text-align: center;" >Formulaire de Commande</h2>
            <form action="pprocess_form.php" method="POST">
            <form action="https://formspree.io/f/your-form-id" method="POST">
                <label for="nom">Nom complet :</label>
                <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Entrez votre email" required>

                <label for="telephone">Téléphone :</label>
                <input type="tel" id="telephone" name="telephone" placeholder="Entrez votre numéro de téléphone" required>
                <label for="kit">Kit Starlink :</label>
                <select id="kit" name="kit" required>
                    <option value="" disabled selected>Choisissez un kit</option>
                    <option value="basique">KIT Gêne2 V2</option>
                    <option value="professionnel">KIT Gêne3 V3</option>
                    <option value="avance">KIT Gêne 3 V3 mini</option> 
                    <option value="avance">KIT Gêne 3 V4</option>
                    <option value="avance">KIT Gêne 3 V4 mini</option>
                    <option value="avance">KIT High Performance</option>   
                </select>
                <label for="message">Message (optionnel) :</label>
                <textarea id="message" name="message" rows="4" placeholder="Ajoutez des détails supplémentaires"></textarea>
                <button type="submit">Envoyer la Commande</button>
            <form action="https://formspree.io/f/mnqwyqrk" method="POST">
                <input type="hidden" name="_redirect" value="https:merci.php">
                <!-- Les champs habituels ici -->
            </form>
        </form> 
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section>
    </section><!-- /Contact Section -->
    <!-- Testimonials Section -->
    <section id="Temoignage" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Temoignages</h2>
        <p>Ce que disent nos clients</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 10
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="images/temoin.jpg" class="testimonial-img" alt="">
                <h3>- Awa Kadi.</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"EVA TECH a révolutionné ma connexion internet. L'installation a été rapide et le support client est impeccable !"</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="images/temoin2.jpg" class="testimonial-img" alt="">
                <h3>KAder Doudou.</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Je suis très satisfait du kit Starlink professionnel. La connexion est stable, même dans ma zone éloignée.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="images/temoin3.jpg" class="testimonial-img" alt="">
                <h3>- Fatou S.</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Un grand merci à toute l'équipe d'EVA TECH. Leur service est excellent et je recommande vivement.
                    Bon Courage et bonne continuation.
                  </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->
    <!-- Contact Section -->
    <section id="Support_Clients" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Suport Technique</h2>
        <p>Remplissez juste le formulaire, notre équipe est disponible pour répondre à toutes vos questions.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 ">
            <div class="row gy-4">

              <div class="col-lg-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-whatsapp"></i>
                  <h3>whatsapp</h3>
                  <p>+227 89501661</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Télephone</h3>
                  <p>+227 90173767</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>evatech.contact@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-6" style="color:#fff; background-color: #fff;" >
            <form action="contact.php" method="post"  id="emailForm">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" id="name" name="name" class="form-control" placeholder="Nom Complet" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" id="email" class="form-control" name="email" placeholder="Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" id="subject" class="form-control" name="subject" placeholder="Sujet" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message" required=""></textarea>
                </div>


                  <button type="submit" style=" color: #ffffff; background: #e03a3c; border: 0; padding: 10px 30px;transition: 0.4s; border-radius: 50px;" >Envoyer Message</button>
                   <p id="responseMessage" style="color: green; font-weight: bold;"></p>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-commander">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">EVA-TECH</span>
            <br>
          </a>
           <p>
                    EVA TECH est votre solution pour une connexion rapide et fiable. Nous fournissons les meilleurs kits d'installation pour répondre à vos besoins en Internet.
                </p>
          <div class="footer-contact pt-3">
            <p class="mt-3"><strong>Télephone :</strong> <span>+227 90173767</span></p>
            <p><strong>Email:</strong> <span>evateche@gmail.com</span></p>
          </div>
          <h3>Suivez-nous</h3>
               
          <div class="social-links d-flex mt-4">
             <a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.tiktok.com" target="_blank"><i class="bi bi-tiktok"></i></a>
                <a href="https://www.linkedin.com" target="_blank"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Navigation</h4>
          <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Produits & Services </a></li>
            <li><a href="#">Commander</a></li>
            <li><a href="#">Support Techniques</a></li>
            <li><a href="#">Temoignage</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nos Services</h4>
          <ul>
            <li><a href="#">Installation Professionnelle</a></li>
            <li><a href="#">Support Technique</a></li>
            <li><a href="#">Mise à Niveau</a></li>
            <li><a href="#">Conseils Personnalisés</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Restez en Contact</h4>
          <p>Envoyez nous votre mail pour rester en contact avec nous et ne rien rater de nos nouvelles mise a jour!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Merci beaucoup pour votre message!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy; 2025 MaelGo. Tous droits réservés.</p>
      <div class="credits">

        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>


  <script>
        $(document).ready(function() {
            $("#emailForm").submit(function(e) {
                e.preventDefault(); // Empêche le rechargement de la page

                $.ajax({
                    url: "contact.php",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(response) {
                        $("#responseMessage").html(response);
                    }
                });
            });
        });
    </script>

</body>

</html>