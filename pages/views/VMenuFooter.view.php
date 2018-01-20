<?php
class VMenuFooter {
    private $siteTitle; //Nom du site
    private $siteIcon; //Icone de la barre de navigation

    public function __construct() {
    }

    public function __destruct() {
    }

    public function showMenu($_siteTitle = null, $_siteIcon = null) {
        $this->siteTitle = $_siteTitle;
        $this->siteIcon = $_siteIcon;

        echo <<<HERE
        <header class="title-bar" data-responsive-toggle="monmenu"><!--BLOCK LEVEL 2 START-->
            <button class="menu-icon" type="button" data-toggle></button><!--INLINE BLOCK LEVEL 3 START/END-->
            <div class="title-bar-title"><a href="../../public/controllers/index.php?EX=home"> $this->siteTitle </a></div><!--BLOCK LEVEL 3 START/END-->
        </header><!--BLOCK LEVEL 2 END-->
        <nav class="top-bar" id="monmenu"><!--BLOCK LEVEL 2 START-->
            <div class="top-bar-left"><!--BLOCK LEVEL 3 START-->
                <ul class="dropdown menu vertical medium-horizontal" data-responsive-menu="drilldown medium-dropdown"><!--BLOCK LEVEL 4 START-->
                    <div class="menu-logo padding-left-logo"><img src=" $this->siteIcon " /></div><!--BLOCK LEVEL 5 START/END-->
                    <li class="menu-text show-for-medium"> $this->siteTitle </li><!--CHILD BLOCK LEVEL 5 START/END-->
                    <li><!--CHILD BLOCK LEVEL 5 START-->
                        <a href="#">Clinique</a><!--INLINE-->
                        <ul class="menu vertical"><!--BLOCK LEVEL 6 START-->
                            <li><a href="../../public/controllers/index.php?EX=home">Accueil</a></li>
                            <li><a href="../../public/controllers/index.php?EX=team">Equipe</a></li>
                            <li><a href="../../public/controllers/index.php?EX=spec">Spécialités</a></li>
                        </ul><!--BLOCK LEVEL 6 END-->
                    </li><!--CHILD BLOCK LEVEL 5 END-->
                    <li>
                        <a href="#">Conseils</a>
                        <ul class="menu vertical">
                            <li><a href="../../public/controllers/index.php?EX=advi_list">Vaccination</a></li>
                            <li><a href="../../public/controllers/index.php?EX=advi_list">A la maison</a></li>
                            <li><a href="../../public/controllers/index.php?EX=advi_list">Médicaments</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Accès</a>
                        <ul class="menu vertical">
                            <li><a href="../../public/controllers/index.php?EX=adre">Adresse</a></li>
                            <li><a href="../../public/controllers/index.php?EX=hour">Horaires</a></li>
                            <li><a href="../../public/controllers/index.php?EX=cont">Contact</a></li>
                        </ul>
                    </li>
                </ul><!--BLOCK LEVEL 4 END-->
            </div><!--BLOCK LEVEL 3 END-->
        </nav><!--BLOCK LEVEL 2 END-->
HERE;
        return;
    } //showHeader()

    public function showFooter(){
        echo <<<HERE
        <h4>Information eventuellement importantes</h4>
        <p>Le pied du site</p>
HERE;
        return;
    } //showFooter()
} // Vheader