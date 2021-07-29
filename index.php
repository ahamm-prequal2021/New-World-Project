<?php // EN TETE DE FICHIER

	  // http://mon_site.com/index.php?lang=fr

 	 if ($_GET['lang']=='fr') {           // si la langue est 'fr' (français) on inclut le fichier fr-lang.php
  	 include('french.php');
  	 } 
   	 
   	 else if ($_GET['lang']=='en') {      // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
   	 include('english.php');
   	 }
   	 
  	 else {                       // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut
  	 include('french.php');
   	 }
   	 
	 // Dans le HTML 
	 /*EX : 
	 
	 <?php echo VARIABLE; ?> 
	 
	 */
	 
   	 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Company site for War Dogs on Amazon's game 'New World'">
    <title>Project K. N. New World</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <img src="./src/svg/logotest.svg" alt="" class="logo">
                <span class="logotxt">war dogs</span>
            </li>
            <li class="nav-item">
                <button class="dropbtn" label="Home" onclick='home()'>
                    <img src="./src/svg/home.svg" alt="" class="mobile">
                    <div class=''>
                        <span class="en">Home</span>
                        <span class="desktop"><?php echo home; ?></span>
                    </div>
                </button>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button class="dropbtn" label="Guides">
                        <img src="./src/svg/guides.svg" alt="" class="mobile">
                        <span class="desktop">Guides</span>
                    </button>
                    <div class="dropdown-content guide">
                        <div class="xp en">
                            <h1>Progressing</h1>
                            <a href="#">Character EXP</a>
                            <a href="#">Weapons EXP</a>
                            <a href="#">Invasions</a>
                        </div>
                        <div class="xp fr">
                            <h1>Progression</h1>
                            <a href="#">Exp du Personnage</a>
                            <a href="#">Exp des armes</a>
                            <a href="#">Invasions</a>
                        </div>
                        <div class="gathering en">
                            <h1>Gathering</h1>
                            <a href="#">Skinning</a>
                            <a href="#">Mining</a>
                            <a href="#">Logging</a>
                            <a href="#">Harvesting</a>
                            <a href="#">Fishing</a>
                        </div>
                        <div class="gathering fr">
                            <h1>Exploitation</h1>
                            <a href="#">Dépeçage</a>
                            <a href="#">Mineur</a>
                            <a href="#">Bûcheron</a>
                            <a href="#">Récolte</a>
                            <a href="#">Pêcheur</a>
                        </div>
                        <div class="pvp en">
                            <h1>PvP</h1>
                            <a href="#">Wars</a>
                            <a href="#">Fortresses</a>
                            <a href="#">Cities</a>
                        </div>
                        <div class="pvp fr">
                            <h1>PvP</h1>
                            <a href="#">Guerres</a>
                            <a href="#">Forteresses</a>
                            <a href="#">Contrôle de villes</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button class="dropbtn" label="Builds">
                        <img src="./src/svg/builds.svg" alt="" class="mobile">
                        <span class="desktop">Builds</span>
                    </button>
                    <div class="dropdown-content">
                        <div class="en">
                            <a href="#">Sword & Shield</a>
                            <a href="#">Hatchet</a>
                            <a href="#">Rapier</a>
                            <a href="#">Lance</a>
                            <a href="#">Hammer</a>
                            <a href="#">Greataxe</a>
                            <a href="#">Bow</a>
                            <a href="#">Musket</a>
                            <a href="#">Fire Staff</a>
                            <a href="#">Ice Gauntlet</a>
                            <a href="#">Life Staff</a>
                        </div>
                        <div class="fr">
                            <a href="#">Epée et bouclier</a>
                            <a href="#">Hachette</a>
                            <a href="#">Rapière</a>
                            <a href="#">Lance</a>
                            <a href="#">Marteau</a>
                            <a href="#">Hache 2 mains</a>
                            <a href="#">Arc</a>
                            <a href="#">Fusil</a>
                            <a href="#">Bâton de feu</a>
                            <a href="#">Gantelet de froid</a>
                            <a href="#">Bâton de vie</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <button class="dropbtn" label="Contact" onclick="contact()">
                    <img src="./src/svg/contact.svg" alt="" class="mobile">
                    <span class="desktop">Contact</span>
                </button>
            </li>
            <li class="flags">
                <button class="flag frLang"><img src="./src/svg/english.svg" alt="Changer la langue du site vers le français" onclick="en()"></button>
                <button class="flag enLang"><img src="./src/svg/french.svg" alt="Change website language to english" onclick="fr()"></button>
            </li>
        </ul>
    </nav>
    <main class="container">
        <div class="background">
            <img src="./src/img/header.png" alt="" class="backgroundIMG">
        </div>
        <h2>News</h2>
        <section class="test1">
            <div class="whiteboard"></div>
            <div class="whiteboard"></div>
        </section>
        <section class="test2">
            <div class="whiteboard"></div>
            <div class="whiteboard"></div>
        </section>
        <section class="test2">
            <div class="whiteboard"></div>
            <div class="whiteboard"></div>
        </section>
        <section class="test2">
            <div class="whiteboard"></div>
            <div class="whiteboard"></div>
        </section>
        <section class="test2">
            <div class="whiteboard"></div>
            <div class="whiteboard"></div>
        </section>

        <section class="formulaire">
            <form class="formcontent">
                <input type="text" name="a" id="a" placeholder="Nom du personnage" class='info'><br>
                <input type="text" maxlength="2" pattern="^([1-9]|[1-5][0-9]|60|all)$" name="b" id="b" placeholder="Niveau du personnage" class='info'><br>
                <textarea type="text" name="c" id="c" placeholder="Pour quelle raison nous contactez-vous ?" class='info'></textarea><br>
                <button class="formBtn" type="button" >Send</button>
            </form>
            <div class="confirmation en">
                Informations have been sent <br>
                successfully. <br>
                Officers will contact you <br>
                as soon as possible.
            </div>
            <div class="confirmation fr">
                Informations envoyées avec <br>
                succès. <br>
                Nos officiers vous contacterons <br>
                dans les plus brefs délais.
            </div>
        </section>
    </main>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
    <script src="./app.js"></script>
    <script src="./webhook_discord.js"></script>
</body>
</html>
