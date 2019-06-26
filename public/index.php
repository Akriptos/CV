<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css.css">
    <title>Arthur TERVILLE</title>
</head>
<body>
    <header class='navbar'>
        <div class='nom'><h1>Arthur TERVILLE</h1></div>
        <div class='dropdown'>
            <button onclick="myFunction()" class="dropbtn">Menu</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#info">Informations</a>
                <a href="#skills">Compétences</a>
                <a href="#portfolio">Portfolio</a>
                <a href="#loisir">Loisir</a>
                <a href="#telechargement">Telechargement</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </header>

    <div id="info" class='bloc blocInfo'>
        <div class='info'> Lyon | 20 ans | Ecole d'informatique </div>
        <div class='diplomesLigne1'>
            <div class='diplome'> 2010-2014 | Collège Jean Monnet </div>
            <div class='diplome'> 2014-2017 | Lycée Juliette Récamier </div>
        </div>
        <div class='diplomesLigne2'>
            <div class='diplome'> 2017-2018 | Université Claude Bernard Lyon </div>
            <div class='diplome'> 2018-2023 | YNOV Lyon Campus </div>
        </div>
        </div>
    </div>

    <div id="skills" class='bloc blocSkills'>
        <div class="column1">
            <div class="row">
                <div class="txt">HTML - CSS</div>
                <div class="level">
                    <div class="niveau" style="width: 60%"></div>
                </div>
            </div>
            <div class="row">
                <div class="txt">JAVASCRIPT</div>
                <div class="level">
                    <div class="niveau" style="width: 50%"></div>
                </div>
            </div>
            <div class="row">
                <div class="txt">PHP</div>
                <div class="level">
                    <div class="niveau" style="width: 70%"></div>
                </div>
            </div>
            <div class="row">
                <div class="txt">C</div>
                <div class="level">
                    <div class="niveau" style="width: 75%"></div>
                </div>
            </div>
            <div class="row">
                 <div class="txt">Python</div>
                <div class="level">
                    <div class="niveau" style="width: 65%"></div>
                </div>
            </div>
        </div>
        <div class="column2">
            <div class="row">
                <div class="txt">Autonomie</div>
                <div class="level">
                    <div class="niveau" style="width: 75%"></div>
                </div>
            </div>
            <div class="row">
                <div class="txt">Gestion du stress</div>
                <div class="level">
                    <div class="niveau" style="width: 85%"></div>
                </div>
            </div>
            <div class="row">
                <div class="txt">Adaptabilité</div>
                <div class="level">
                    <div class="niveau" style="width: 80%"></div>
                </div>
            </div>
            <div class="row">
                <div class="txt">Travail de groupe</div>
                <div class="level">
                    <div class="niveau" style="width: 70%"></div>
                </div>
                </div>
            <div class="row">
                 <div class="txt">Communication</div>
                <div class="level">
                    <div class="niveau" style="width: 80%"></div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div id="portfolio" class='bloc blocPortfolio'>
        <div class="mosaique">
            <div class="portfolio1">
                <div class="case">
                    <div class="img"><img src="/../../src/image/Projet1.jpg" height="100%" width="100%" alt="Projet 1"></div>
                    <div class="overlay">
                        <div class="description">
                            Projet1
                        </div>
                    </div>
                </div>
                <div class="case">
                    <div class="img"><img src="/../../src/image/Projet2.jpg" height="100%" width="100%" alt="Projet 2"></div>
                    <div class="overlay">
                        <div class="description">
                            Projet2
                        </div>
                    </div>
                </div>
                <div class="case">
                    <div class="img"><img src="/../../src/image/Projet3.jpg" height="100%" width="100%" alt="Projet 3"></div>
                    <div class="overlay">
                        <div class="description">
                            Projet 3
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio2">
                <div class="case">
                    <div class="img"><img src="/../../src/image/Projet4.jpg" height="100%" width="100%" alt="Projet 4"></div>
                    <div class="overlay">
                        <div class="description">
                            Projet 4
                        </div>
                    </div>
                </div>
                <div class="case">
                    <div class="img"><img src="/../../src/image/Projet5.jpg" height="100%" width="100%" alt="Projet 5"></div>
                    <div class="overlay">
                        <div class="description">
                            Projet 5
                        </div>
                    </div>
                </div>
                <div class="case">
                    <div class="img"><img src="/../../src/image/Projet6.jpg" height="100%" width="100%" alt="Projet 6"></div>
                    <div class="overlay">
                        <div class="description">
                            Projet 6
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="loisir" class='bloc blocLoisir'>
        <div class='loisir'> <img src="" alt=""> Volleyball </div>
        <div class='loisir'> <img src="" alt=""> Cinéma </div>
    </div>

    <div id="telechargement" class='bloc blocTelechargement'>
        <div class='bouton'> Télécharger le CV </div>
        <div class='bouton'> Découvrir mon blog </div>
    </div>

    <div id="contact" class='bloc blocContact'>
        <form action="">
            <input type="text" placeholder="nom"/>
            <input type="text" placeholder="email"/>
            <textarea placeholder="message"></textarea>
        </form>
    </div>

</body>
<script src="./javascript.js"></script>
</html>