<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Caritey-Developpement</title>

    <?php require 'include/links.php'; ?>
    <?php require 'function/icons.php'; ?>
    
</head>
<body>
    
    <header id="header" class="navbar fixed-top">
        <nav class="container">
            <div id="header_nav_left">
                <h1><a href=""><span>Stiwy</span> CARITEY</a></h1>
                <p><strong>Développeur Web</strong></p>
            </div>
            <div id="header_nav_right">
                <ul id="header_nav">
                    <li><a href="#about"><img class="d-lg-none" src="public/image/nav-icons/about.svg" alt=""> A Propos</a></li>
                    <li><a href="#skills"><img class="d-lg-none" src="public/image/nav-icons/skills.svg" alt=""> Compétences</a></li>
                    <li><a href="#training"><img class="d-lg-none" src="public/image/nav-icons/trainig.svg" alt=""> Formation</a></li>
                    <li><a href="#achievements"><img class="d-lg-none" src="public/image/nav-icons/achievements.svg" alt=""> Réalisations</a></li>
                    <li><a href="#contact"><img class="d-lg-none" src="public/image/nav-icons/contact.svg" alt=""> Contact</a></li>
                </ul>
            </div>
            <button id="hamburger-button">&#9776</button>
            <div id="hamburger-sidebar">
                <div id="hamburger-sidebar-header"></div>
                <div id="hamburger-sidebar-body"></div>
            </div>
            <div id="hamburger-overlay"></div>
        </nav>   
    </header>

    <section id="hero">
        <div id="carouselHero" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselHero" data-slide-to="0" class="active"></li>
                <li data-target="#carouselHero" data-slide-to="1"></li>
                <li data-target="#carouselHero" data-slide-to="2"></li>
                <li data-target="#carouselHero" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="hero-1 carousel-item active">
                    <h1 class="hero-h1">Je suis <span>Passionné</span></h1>
                </div>
                <div class="hero-2 carousel-item">
                    <h1 class="hero-h1">Je cherche un <span>Maître d'apprentissage</span></h1>
                </div>
                <div class="hero-3 carousel-item">
                    <h1 class="hero-h1">J'ai une appétence pour le <span>Back-end</span></h1>
                </div>
                <div class="hero-4 carousel-item">
                    <h1 class="hero-h1">Je pratique <span>Tous les jours</span></h1>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselHero" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselHero" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>         
    </section>

    <section id="about">
        <div class="container">
            <h2 class="primary-h2"><span>A propos</span></h2>

            <div class="row align-items-center">
                <div class="about-content-1 col-md-8">

                    <h3><strong>Stiwy Caritey</strong>, Développeur Web</h3>
                       
                    <P>En formation avec OpenClassrooms, depuis le début de l'année, mon objectif est d'obtenir mon diplôme de <strong>développeur PHP/Symfony ainsi qu'un poste de développeur Back-end ou Fullstack</strong>, dans l'entreprise qui me permettra de mener ce projet à son terme.</P>
                    
                    <p>Ayant développé une forte appétence pour le côté Back-end, je souhaite spécialiser me spécialiser dans le PHP/Symphony. De mon côté, je continu à me former toujours plus sur  <strong>PHP ainsi que Symfony</strong> je trouve ce Framework pleins de possibilités intéressantes également sur des langages Front-end!</p>

                    <p><strong>Je recherche actuellement, dans les Vosges(88), une alternance</strong>, une alternance, au sein d'une entreprise pour début Avril 2020.​</p> 
                </div>
                <div class="about-content-2 col-md-4">
                    <img src="public/image/pdp.png" alt="Photo de progil">

                    <div>
                        <a class="mx-3" href="https://www.linkedin.com/in/stiwy-caritey-6150ba19a/"><img src="public/image/logo/linkedin.png" alt=""></a>
                        <a class="mx-3" href="https://github.com/Stiwy"><img src="public/image/logo/github.png" alt=""></a>
                    </div>
                </div>
            </div>

            <div class="about-information">
                <ul>
                    <li>
                        <svg class="bi bi-person" width="1.5em" height="1.5em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M15 16s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002zM5.022 15h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C13.516 12.68 12.289 12 10 12c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002zM10 9a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0z" clip-rule="evenodd"></path>
                        </svg> Stiwy CARITEY
                    </li>
                    <li>
                        <svg class="bi bi-at" width="1.5em" height="1.5em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M15.106 9.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V7.206h-1.032v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907s-.601 1.914-1.538 1.914c-.895 0-1.442-.725-1.442-1.914z" clip-rule="evenodd"></path>
                        </svg> stiwy@caritey-developpement.fr
                    </li>
                    <li>
                        <svg class="bi bi-phone" width="1.5em" height="1.5em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M13 3H7a1 1 0 00-1 1v11a1 1 0 001 1h6a1 1 0 001-1V4a1 1 0 00-1-1zM7 2a2 2 0 00-2 2v11a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7z" clip-rule="evenodd"></path>
                            <path fill-rule="evenodd" d="M10 15a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                        </svg> 07 68 64 42 85
                    </li>
                    <li>
                        <svg class="bi bi-geo" width="1.5em" height="1.5em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path d="M9.5 6h1v9a.5.5 0 01-1 0V6z"></path>
                            <path fill-rule="evenodd" d="M8.489 14.095a.5.5 0 01-.383.594c-.565.123-1.003.292-1.286.472-.302.192-.32.321-.32.339 0 .013.005.085.146.21.14.124.372.26.701.383.655.245 1.593.407 2.653.407s1.998-.162 2.653-.407c.329-.124.56-.259.701-.383.14-.125.146-.197.146-.21 0-.018-.018-.147-.32-.339-.283-.18-.721-.35-1.286-.472a.5.5 0 11.212-.977c.63.137 1.193.34 1.61.606.4.253.784.645.784 1.182 0 .402-.219.724-.483.958-.264.235-.618.423-1.013.57-.793.298-1.855.472-3.004.472s-2.21-.174-3.004-.471c-.395-.148-.749-.337-1.013-.571-.264-.234-.483-.556-.483-.958 0-.537.384-.929.783-1.182.418-.266.98-.47 1.611-.606a.5.5 0 01.595.383z" clip-rule="evenodd"></path>
                        </svg> Vosges(88)
                    </li>
                    <li>
                        <svg class="bi bi-document-text" width="1.5em" height="1.5em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6 3h8a2 2 0 012 2v10a2 2 0 01-2 2H6a2 2 0 01-2-2V5a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V5a1 1 0 00-1-1H6z" clip-rule="evenodd"></path>
                            <path fill-rule="evenodd" d="M6.5 14a.5.5 0 01.5-.5h3a.5.5 0 010 1H7a.5.5 0 01-.5-.5zm0-2a.5.5 0 01.5-.5h6a.5.5 0 010 1H7a.5.5 0 01-.5-.5zm0-2a.5.5 0 01.5-.5h6a.5.5 0 010 1H7a.5.5 0 01-.5-.5zm0-2a.5.5 0 01.5-.5h6a.5.5 0 010 1H7a.5.5 0 01-.5-.5zm0-2a.5.5 0 01.5-.5h6a.5.5 0 010 1H7a.5.5 0 01-.5-.5z" clip-rule="evenodd"></path>
                        </svg> <a href="public/file/cv.pdf">Mon curriculum vitae</a>
                    </li>
                </ul>
            </div>  
        </div>
    </section>

    <section id="skills_training">
        <div class="container">
            <div id="skills">
                <h2 class="primary-h2"><span>Compétences</span></h2>

                <p class="primary-p">Vous pouvez trouver ici un extrait des compétences que j'ai acquises depuis mes débuts en développement Web. Mais ce n'est pas fini, c'est même, je dirais, un début. Je  suis enthousiaste à l'idée de découvrir encore pleins de choses!</p>

                <div class="skillsLine row">
                    <div class="col-md-4">
                        <p><img src="public/image/logo/css-html.png" alt=""><span> HTML / CSS</span></p>
                    </div>
                    <div class="col-md-4">
                        <p><img src="public/image/logo/php.png" alt=""><span>  PHP</span></p>
                    </div>
                    <div class="col-md-4">
                        <p><img id="bootstrap" src="public/image/logo/bootstrap.png" alt=""><span> Bootstrap</span></p>
                    </div>
                </div>
                <div class="skills-name-group row">
                    <div class="skills-name col-md-4 d-none d-md-inline">
                        <p>HTML / CSS</p>   
                    </div>
                    <div class="skills-name col-md-4 d-none d-md-inline">
                        <p>PHP</p>   
                    </div>
                    <div class="skills-name col-md-4 d-none d-md-inline">
                        <p>Bootstrap</p>   
                    </div>
                </div>

                <div class="skillsLine row">
                    <div class="col-md-4">
                        <p><img id="wordpress" src="public/image/logo/wordpress.png" alt=""><span> WordPress</span></p>
                        
                    </div>
                    <div class="col-md-4">
                        <p><img id="mysql"  src="public/image/logo/mysql.png" alt=""><span> MySQL</span></p>
                        
                    </div>
                    <div class="col-md-4">
                        <p><img id="bootstrap" src="public/image/logo/sass.png" alt=""><span> Sass</span></p>
                    </div>
                </div>
                <div class="skills-name-group row">
                    <div class="skills-name col-md-4 d-none d-md-inline">
                        <p>WordPress</p>   
                    </div>
                    <div class="skills-name col-md-4 d-none d-md-inline">
                        <p>MySQL</p>   
                    </div>
                    <div class="skills-name col-md-4 d-none d-md-inline">
                        <p>Sass</p>   
                    </div>
                </div>

                <div class="skillsLine row">
                    <div class="offset-md-4 col-md-4">
                        <p><img src="public/image/logo/git.png" alt=""><span> Git</span></p>
                    </div>
                </div>
                <div class="skills-name-group row justify-content-center">
                <div class="skills-name col-md-4 d-none d-md-inline">
                        <p>Git</p>   
                    </div>
                </div>
            </div>

            <div id="training">

                <h2 class="primary-h2"><span>Mes formations</span></h2>
                <p class="primary-p">J'effectue ces formations, par le billet d'OpenClassrooms, afin de poursuivre mon cursus et de continuer à me former en PHP je cherche un lieux d'apprentisage dans les Vosges(88) dans le but d'éffectuer cette formation.</p>

                <div class="row align-items-center">
                    <div class="col-md-10 training-col-left">
                        <ul>
                            <li>
                                <?php if (isset($_GET['more']) && $_GET['more'] == '1') :?>
                                    <a class="a_training" href="index.php?#training">
                                        <h3><?php training_list_drop_down() ?>Développeur d'application - PHP / Symfony <span>[A venir]</span></h3>
                                    </a>
                                
                                    <ul class="training-sub-list">
                                        <li><?php training_subList_notValidate() ?> Analyser un cahier des charges et choisir une solution technique adaptée parmi les solutions existantes.</li>
                                        <li><?php training_subList_notValidate() ?> Concevoir l’architecture technique d’une application à l’aide de diagrammes UML.</li>
                                        <li><?php training_subList_notValidate() ?> Créer des projets web dynamiques grâce PHP.</li>
                                        <li><?php training_subList_notValidate() ?> Communiquer avec une base de données pour stocker et requêter des informations.</li>
                                        <li><?php training_subList_notValidate() ?> Développer de manière professionnelle grâce au framework Symfony.</li>
                                        <li><?php training_subList_notValidate() ?> Mettre en oeuvre des tests unitaires et fonctionnels ainsi qu’utiliser les outils les plus connus d’intégration continue.</li>
                                        <li><?php training_subList_notValidate() ?> Produire une documentation technique et fonctionnelle de l’application.</li>
                                        <li><?php training_subList_notValidate() ?> Prendre en compte les problématiques de performance d’une application PHP.</li>
                                    </ul>
                                <?php else : ?>
                                    <a class="a_training" href="index.php?more=1&amp;#training">
                                        <h3><?php training_list_unrolled() ?>Développeur d'application - PHP / Symfony <span>[A venir]</span></h3>
                                    </a>
                                <?php endif ; ?>
                            </li>
                            <li>
                                <?php if (isset($_GET['more']) && $_GET['more'] == '2') :?>
                                    <a class="a_training" href="index.php?#training">
                                        <h3><?php training_list_drop_down() ?>Prép'fullstack <span>[En cour]</span></h3>
                                    </a>
                                    <ul class="training-sub-list">
                                        <li><?php training_subList_validate() ?> Adapter un thème Wordpress.</li>
                                        <li><?php training_subList_validate() ?> Coder la structure d’une page en HTML5.</li>
                                        <li><?php training_subList_validate() ?> Modéliser une base de données.</li>
                                        <li><?php training_subList_validate() ?> Recueillir la saisie d’un formulaire utilisateur en langage PHP.</li>
                                    </ul>
                                <?php else : ?> 
                                    <a class="a_training" href="index.php?more=2&amp;#training">
                                        <h3><?php training_list_unrolled() ?>Prép'fullstack <span>[En cours]</span></h3>
                                    </a>
                                <?php endif ; ?>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2  training-col-rigth">
                        <svg class="bi bi-award" width="8em" height="8em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 2l1.669.864 1.858.282.842 1.68 1.337 1.32L15.4 8l.306 1.854-1.337 1.32-.842 1.68-1.858.282L10 14l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L4.6 8l-.306-1.854 1.337-1.32.842-1.68 1.858-.282L10 2z"></path>
                            <path d="M6 13.794V18l4-1 4 1v-4.206l-2.018.306L10 15.126 8.018 14.1 6 13.794z"></path>
                        </svg> 
                    </div>
                </div>

                <div class="row justify-content-around align-items-center">
                    <a href="https://openclassrooms.com/fr/"><img class="training-logo-1" src="public/image/logo/oc.png" alt="Logo OpenClassrooms"></a>
                    <a href="https://www.grandeecolenumerique.fr/"><img class="training-logo-2" src="public/image/logo/logo_gen.png" alt="Logo de la grande école du numérique"></a>        
                </div>
            </div>
        </div>   
    </section>

    <section id="achievements">
        <div class="container">
            <h2 class="primary-h2 text-white"><span>Mes Réalisations</span></h2>

            <p class="primary-p text-white">Ces sites on était réaliser par mes soins, pour répondre au mises en situations et au soutenances réalisé lors des formations chez OpenClassrooms.</p>
        </div>
        
        <div class="container-fluid pt-4">
            <div class="row justify-content-around">
                <div class="achievements col-lg-3 col-8">
                    <a data-toggle="modal" data-target=".modal-gbaf">
                        <div id="achievements-img">
                            <img src="public/image/achivements/gbaf.png" alt="">
                        </div>
                        <div class="achievements-text">
                            <h3>GBAF</h3>
                            <p>développement web</p>
                        </div>
                    </a>
                </div>
                <div class="achievements col-lg-3 col-8">
                    <a data-toggle="modal" data-target=".modal-chaletscaviar">
                        <div id="achievements-img">
                            <img src="public/image/achivements/chaletscaviar.png" alt="">
                        </div>
                        <div class="achievements-text">
                            <h3>Chalets&Caviar</h3>
                            <p>développement web</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Modal for gbaf -->

        <div class="modal fade modal-gbaf" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Réalisation - GBAF</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-row">
                            <div class="modal-1">

                                <p class="modal-p">Création d’un extranet mettant à disposition des ressources pour les salariés des différentes banques françaises.</p>

                                <ul class="achievments-modal-list">
                                    <li>
                                        <h4><span>Réalisation :</span></h4> 
                                        <ul>
                                            <li><?php chevron_right()?>Développement du produit ;</li>
                                            <li><?php chevron_right()?>Présentation de la liste des différents acteurs du système bancaire français.</li>
                                            <li><?php chevron_right()?>Espace membre connexion/déconnexion</li>
                                            <li><?php chevron_right()?>possibilité de Like/Dislike</li>
                                            <li><?php chevron_right()?>Ajout de commentaire</li>
                                            <li><?php chevron_right()?>HTML5 / CSS3 / Bootstrap / PHP / SQL</li>
                                        </ul>
                                    </li>

                                    <li>
                                        <h4><span>Charte graphique :</span></h4> 
                                        <ul>
                                            <li><?php chevron_right()?>Wireframe et zoning : fournis a respecter</li>
                                            <li><?php chevron_right()?>Colorimétrie : choix libre s’accordant avec notre logo.</li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <h4><span>Particularité du site :</span></h4>
                                        <ul>
                                            <li><?php chevron_right()?>Site responsive : possibilité de consulter le site au bureau ou enitinérance à partir de différentes supports (tablettes et smartphones)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="modal-2">
                                <div>
                                    <a href="http://caritey-developpement.fr/GBAF/" target="_blank">
                                        <img class="modal-image" src="public/image/achivements/gbaf.png" alt="">
                                    </a>
                                </div>
                                <p>Réalisé pour : <span>OpenClassrooms</span></p>
                            </div>
                        </div>
                    </div>
                        <div class="modal-footer">
                        <p><a class="btn btn-success" href="http://caritey-developpement.fr/GBAF/" target="_blank">Visiter le site</a></p>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for chalets & caviar -->

        <div class="modal fade modal-chaletscaviar" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Réalisation - Chalets & Caviar</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-row">
                            <div class="modal-1">

                                <p class="modal-p">Intégrez un thème Wordpress pour une agence immobilière de location et de vente de chalets de luxe.</p>

                                <ul class="achievments-modal-list">
                                    <li>
                                        <h4><span>Réalisation :</span></h4> 
                                        <ul>
                                            <li><?php chevron_right()?>Développement du produit ;</li>
                                            <li><?php chevron_right()?>Présentation de la liste des différents bien sur 2 pages distinct Vente/Location.</li>
                                            <li><?php chevron_right()?>Administrable par l'équipe de l'agence</li>
                                            <li><?php chevron_right()?>Une page de contact avec formulaire fonctionnel</li>
                                            <li><?php chevron_right()?>HTML5 / CSS3 / PHP / SQL / WordPress</li>
                                        </ul>
                                    </li>

                                    <li>
                                        <h4><span>Charte graphique :</span></h4> 
                                        <ul>
                                            <li><?php chevron_right()?>Un design professionnel, épuré et luxieux.</li>
                                            <li><?php chevron_right()?>Colorimétrie : choix libre.</li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <h4><span>Particularité du site :</span></h4>
                                        <ul>
                                            <li><?php chevron_right()?>Site responsive.</li>
                                            <li><?php chevron_right()?>Site développer avec WordPress.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="modal-2">
                                <div>
                                    <a href="http://caritey-developpement.fr/Chalets&Caviar/" target="_blank">
                                        <img class="modal-image" src="public/image/achivements/chaletscaviar.png" alt="" width="550">
                                    </a>
                                </div>
                                <p>Réalisé pour : <span>OpenClassrooms</span></p>
                            </div>
                        </div>
                    </div>
                        <div class="modal-footer">
                        <p><a class="btn btn-success" href="http://caritey-developpement.fr/Chalets&Caviar/" target="_blank">Visiter le site</a></p>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <section id="contact">
        <div class="container">

            <h2 class="primary-h2"><span>Me contacter</span></h2>

            <p class="primary-p">Si vous souhaitez me contacter par email, je vous invite à passer par le formulaire ci-dessous.</p>

            <?php if(array_key_exists('errors', $_SESSION)): ?>
                <div class="alert alert-danger">
                    <?= implode('<br>', $_SESSION['errors']) ?>
                </div>
            <?php elseif (array_key_exists('success', $_SESSION)): ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success'] ?>
                </div>
            <?php endif;?>

            <form action="function/contact.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <label for="name">Votre nom *</label>
                        <input class="contact" id="name" type="text" name="name" required minlength="3" maxlength="25" <?php if (isset($_SESSION['inputs']['name'])) { echo 'value="' .$_SESSION['inputs']['name']. '"';}?>>
                    </div>
                    <div class="col-md-6">
                        <label for="mail">Votre email *</label>
                        <input class="contact" id="mail" type="email" name="mail" required <?php if (isset($_SESSION['inputs']['mail'])) { echo 'value="' .$_SESSION['inputs']['mail']. '"';}?>>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="subject">Objet *</label>
                        <input class="contact" id="subject" type="text" name="subject" minlength="5" maxlength="100" required <?php if (isset($_SESSION['inputs']['subject'])) { echo 'value="' .$_SESSION['inputs']['subject']. '"';}?>>
                    </div>
                    <div class="col-md-5 d-none">
                        <label for="file">Pièce jointe</label>
                        <input id="file" type="file" name="file">
                    </div>
                </div>
                <label for="message"></label>
                <textarea class="contact" name="message" id="message" cols="30" rows="10" minlength="10" placeholder="Votre message..." required><?php if (isset($_SESSION['inputs']['message'])) { echo $_SESSION['inputs']['message'];}?></textarea>

                <p>Les champs comportant (*) sont obligatoire.</p>

                <button type="submit" class="btn_contact mt-2 btn btn-primary">Envoyer</button>
            </form>   
        </div>
        <?php unset($_SESSION['errors']); unset($_SESSION['success']); unset($_SESSION['inputs']) ?>                          
    </section>

    <footer>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-4 contact_information">
                    <h4><span>Mes coordonnés</span></h4>
                    <ul>
                        <li>
                            <svg class="bi bi-person" width="1.5em" height="1.5em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M15 16s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002zM5.022 15h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C13.516 12.68 12.289 12 10 12c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002zM10 9a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0z" clip-rule="evenodd"></path>
                            </svg> Stiwy CARITEY
                        </li>
                        <li>
                            <svg class="bi bi-at" width="1.5em" height="1.5em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M15.106 9.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V7.206h-1.032v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907s-.601 1.914-1.538 1.914c-.895 0-1.442-.725-1.442-1.914z" clip-rule="evenodd"></path>
                            </svg> stiwy@caritey-developpement.fr
                        </li>
                        <li>
                            <svg class="bi bi-phone" width="1.5em" height="1.5em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M13 3H7a1 1 0 00-1 1v11a1 1 0 001 1h6a1 1 0 001-1V4a1 1 0 00-1-1zM7 2a2 2 0 00-2 2v11a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7z" clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M10 15a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg> 07 68 64 42 85
                        </li>
                        <li>
                            <svg class="bi bi-geo" width="1.5em" height="1.5em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path d="M9.5 6h1v9a.5.5 0 01-1 0V6z"></path>
                                <path fill-rule="evenodd" d="M8.489 14.095a.5.5 0 01-.383.594c-.565.123-1.003.292-1.286.472-.302.192-.32.321-.32.339 0 .013.005.085.146.21.14.124.372.26.701.383.655.245 1.593.407 2.653.407s1.998-.162 2.653-.407c.329-.124.56-.259.701-.383.14-.125.146-.197.146-.21 0-.018-.018-.147-.32-.339-.283-.18-.721-.35-1.286-.472a.5.5 0 11.212-.977c.63.137 1.193.34 1.61.606.4.253.784.645.784 1.182 0 .402-.219.724-.483.958-.264.235-.618.423-1.013.57-.793.298-1.855.472-3.004.472s-2.21-.174-3.004-.471c-.395-.148-.749-.337-1.013-.571-.264-.234-.483-.556-.483-.958 0-.537.384-.929.783-1.182.418-.266.98-.47 1.611-.606a.5.5 0 01.595.383z" clip-rule="evenodd"></path>
                            </svg> Vosges(88)
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 contact_icons">
                    <h4><span>Me retrouver</span></h4>
                    <a class="mx-3" href="https://www.linkedin.com/in/stiwy-caritey-6150ba19a/"><img src="public/image/logo/linkedin.png" alt=""></a>
                    <a class="mx-3" href="https://github.com/Stiwy"><img src="public/image/logo/github.png" alt=""></a>
                    <a class="mx-3" href="public/file/cv.pdf"><img src="public/image/logo/cv.png" alt=""></a>                        
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright &copy; 2020 by Caritey-developpement.fr</p>
        </div>
    </footer>

<?php require 'include/script.php'; ?>

</body>
</html>