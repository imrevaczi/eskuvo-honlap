<?php
get_header();
?>
<!--[if lt IE 8]>
<p class="browserupgrade">Sajnos <strong>túl régi</strong> böngészőt használsz. Ajánlom a <a href="https://www.google.com/intl/hu_hu/chrome/">chrome bönégsző</a> letöltését</p>
<![endif]-->
<section class="hero parallax">
    <!--section class="navigation">
        <header -->
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
                <div class="container">
                    <div class="logo"><a href="#"><img src="<?= TEMPLATE_URI ?>img/logo.png" alt="Logo"></a></div>
                    <button class="navbar-toggler" type="button"  data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>                  
                    <div class="collapse navbar-collapse" id="navbarsExample03">
                        <ul class="navbar-nav navbar-nav me-auto mb-2 mb-md-0 primary-nav">
                            <li class="nav-item">
                                <a  href="#intro">Hogyan találkoztunk</a>
                            </li>
                            <li class="nav-item">
                                <a  href="#esemenyek">Események</a>
                            </li>
                            <li class="nav-item">
                                <a  href="#zene">Zene</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav member-actions">
                            <li class="nav-item"><a href="#helyszin" class="login">Helyszín</a></li>
                            <li class="nav-item"><a href="#rsvp" class="btn-white btn-small">Ott leszek!</a></li>
                        </ul>
                    </div>
                </div>
               
            </nav>
        <!--header>
    </section-->
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="hero-content text-center">
                    <h1>Gina <span class="fas fa-heart"></span> Laci</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 .d-none .d-sm-block"></div>
            <div class="col-sm-4 .d-none .d-sm-block text-center"><a href="#rsvp"
                                                           class="btn btn-accent btn-large rsvp-btn">Visszajelzek</a></div>
            <div class="col-sm-4 .d-none .d-sm-block"></div>
        </div>
    </div>
    <div class="down-arrow floating-arrow"><a href="#invitation"><i class="fa fa-angle-down"></i></a></div>
</section>

<main data-bs-spy="scroll" data-bs-target="#primary-nav" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    <section id="invitation" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Alig várjuk</h3>
                    <p>Az időpont 2022. július 9. és nagyon Szeretnénk, hogy veletek együtt ünnepelhessünk!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="header">hogyan találkoztunk</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 d-none d-md-block"><img src="<?= TEMPLATE_URI ?>img/balos.png" class="balos"></div>
                <div class="col-md-6">
                    <p>
                       Találkozásunk több mint 10 éve történt, és mindezt egyik barátunknak köszönhetjük, aki leszervezett nekünk egy vakrandit!
                       A randi jól sikerült, a további találkozások is ígéretesek voltak, mégis úgy alakult a helyzet, hogy másfelé vitt az élet minket. Sosem felejtettük el a másikat, és mindig ha éppen alkalmunk volt, üzentünk egymásnak, megpróbáltunk leszervezni egy egy találkozót.
                       Több mint 7 év barátság után végül egymás mellett kötöttünk ki és kicsivel több mint 3 év kapcsolat után egybekelünk!
                    </p>
                </div>
                <div class="col-md-3 d-none d-md-block"><img src="<?= TEMPLATE_URI ?>img/jobbos.png" class="jobbos"></div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-push-2 col-xs-6 d-md-none"><img src="<?= TEMPLATE_URI ?>img/balos.jpg" class="balos"></div>
                <div class="col-sm-4 col-sm-push-2 col-xs-6 d-md-none"><img src="<?= TEMPLATE_URI ?>img/jobbos.jpg" class="jobbos"></div>
            </div>
        </div>
    </section>

    <section class="events section-padding" id="esemenyek">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="header">A nagy nap eseményei</h3>
                    <p class="text-">Nem szeretnénk zsábmacskát árulni, hogy mi mikor lesz. Az egész nap alig 100 lépésnyire fog lezajalni, tehát nem kell aggódni, nagy séták nem lesznek!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 leftcol">
                    <div class="wp1">
                        <h5>Vendégek Fogadása <span class="time">15:45 - 16:30</span></h5>
                        <p>Az örömszülők és a vőlegény fogadja a vendégeket</p>
                    </div>
                    <div class="wp3">
                        <h5>Kültéri ceremónia <span class="time">16:30 - 17:20</span></h5>
                        <p>A helszínen lesz tartva egy kisebb ceremónia, ahol a menyasszony és a vőlegény elmondják fogadalmaikat. Ezután a friss házaspár fogadja a gratulációkat és közös koccintásra invitálnak mindenkit</p>
                    </div>
                    <div class="wp5">
                        <h5>Fotózás a helyszínen <span class="time">17:30 - 18:30</span></h5>
                        <p>
                            A fotós levezénylésével közös képek, csoportképek fognak készülni. Természetesen bárki fotózhat eközben telefonnal 
                            vagy ha van hobbi fotós és ki szeretné élni vágyát, akkor nyugodtan megteheti. Arra kérünk mindenkit, hogy az így elkészült képeket legyetek szívesek küldjétek majd át nekünk is. Köszönjük!
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 rightcol">
                    <div class="wp2">
                        <h5>Vacsora <span class="time">18:30</span></h5>
                        <p>2 fogásos vacsorával várunk titiket, amely egy levest és sültes tálat, körettekkel foglal magába. Kérjük, ha bármilyen alergiád van, akkor azt a visszajelzésnél a megfelelő helyen jelezd</p>
                    </div>
                    <div class="wp4">
                        <h5>Nyitótánc, zene, mulatozás <span class="time">19:30</span></h5>
                        <p>A zenét DJ fogja szolgáltatni. A helyszínen lesz lehetőség számokat kérni, de akár előre is elküldhetitek nekünk kedvenceiteket</p>
                    </div>
                    <div class="wp6">
                        <h5>Torta <span class="time">21:30</span></h5>
                        <p>A zenét DJ fogja szolgáltatni. A helyszínen lesz lehetőség számokat kérni, de akár előre is elküldhetitek nekünk kedvenceiteket</p>
                    </div>
                    <div class="wp8">
                        <h5>Menyasszonytánc <span class="time">23:00</span></h5>
                        <p>Eladó a menyasszony!</p>
                    </div>
                    <div class="wp10">
                        <h5>Menyecsketánc + végtelen partizás <span class="time">01:00 - 07:00</span></h5>
                        <p>Ereszd el a hajam és világi táncolás</p>
                    </div>
                </div>
            </div>
            <div class="row section-padding">
                <div class="col-md-4 offset-md-4 text-center">
                    <button type="button" class="btn btn-accent btn-small" data-bs-toggle="modal" data-bs-target="#dresscode-modal">
                        <i class="fa fa-tshirt"></i>&nbsp;&nbsp; Ezt a gombot nyomd meg, ha pánikba vagy esve, hogy mibe gyere!
                    </button>
                </div>
            </div>
        </div>

        <div id="dresscode-modal" class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Szóval akkor mit vegyek fel?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Bezárás"></button>
                    </div>
                    <div class="modal-body">
                        <p>Bármit, amit csak szeretnél és úgy érzed, megfelelő az alkalomra! Bár az esküvő színe a <strike>bordó</strike> burgundy, de senkinek sem kötelező ebben a színben lennie! Ha szeretnél kedvenc kék koktélruhádban érkezni, gyere nyugodtan! Ha az esti lakodalmra a menő űrhajósruhádban szeretnéd megmutatni, hogy te vagy a parketta ördöge, csak bátran! De ne feledd lesz egy fotós aki mindent is meg fog örökíteni :)</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-accent btn-small" data-bs-dismiss="modal">Bezárás</button>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="zene" class="section-padding music-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Szeretnéd, hogy a kedvenc zenéd szóljon a lakodalomban?</h3>
                    <h2>Mi is!</h2>
                    <p>Fontos számunkra, hogy mindenki jól érezze magát, meg aztán ki ne szeretné, hogy kedvenceire táncolhasson?
                    <br>Ezért szeretnénk a segítségeteket kérni! Ha ismered a világ legjobb dalait, legyen az mulatós, táncos, latin, disco, pop, régi, új vagy bármi ami necces ;) Küld el nekünk!</p>
                    <div class="col-md-4 offset-md-4 text-center">
                        <button type="button" class="btn btn-accent btn-small">
                            <a href="http://google.hu" target="blank"><i class="fa fa-music"></i>&nbsp;&nbsp; Zene ajánlása </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    
        
    </section>
    <section class="location-card" id="helyszin">
        <div class="card-layout">
            <h5>Bagolyvár</h5>
            <p>Inárcs</p>
        </div>

    </section>

    <section class="section-padding">
        <div class="container text-center">
            <h3>Hogyan jutok el a helszínre?</h3>
            <p>Szerencsére több lehetőseg is van, és mindegyik rendkívül egyszerű</p>
            <div class="row justify-content-center">
                <div class="col-md-2" style="padding: 5px;">
                    <button type="button" class="btn btn-accent btn-small" id="btn-show-car"><i class="fa fa-car"></i>&nbsp;&nbsp;autóval</a>
                </div>
                <div class="col-md-2" style="padding: 5px;">
                    <button type="button" class="btn btn-accent btn-small" id="btn-show-bus"><i class="fa fa-bus"></i>&nbsp;&nbsp;Busszal</a>
                </div>
                <div class="col-md-2" style="padding: 5px;">
                    <button type="button" class="btn btn-accent btn-small" id="btn-show-helicopter"><i class="fa fa-helicopter"></i>&nbsp;&nbsp;helikopterrel</a>
                </div>
            </div>
        </div>
      
        <div id="map-canvas"></div>
        <div id="map-content-wrapper" class="container pointer-events-none">
            <div class="row">
                <div class="col-xs-offset-1 col-xs-10 offset-md-3 col-md-6">
                    <div class="text-center">
                        <div id="btn-show-content" class="toggle-map-content pointer-events-auto">
                            <i class="fa fa-info-circle"></i>&nbsp;&nbsp; Mutasd az infókat
                        </div>
                    </div>
                    <div id="map-content" class="pointer-events-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Bagolyvár étterem</h5>
                                <p>2365 Inárcs, Honvéd utca 73.</p>
                            </div>
                            <div class="col-md-6">
                                <h5>Kérdés esetén hívjatok minket</h5>
                                <p><i class="fa fa-mobile"></i> <a href="tel://+36706109785">+36 706109785</a><br>
                                    <i class="fa fa-mobile"></i> <a href="tel://+3644444444">+36 305555555</a></p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-6" style="padding: 5px;">
                                <button type="button" class="btn btn-accent btn-small" id="btn-show-map"><i class="fa fa-map"></i>&nbsp;&nbsp;Mutasd a térképet</a>
                            </div>
                            <div class="col-md-6" style="padding: 5px;">
                                <a class="btn btn-accent btn-small" href="https://g.page/Bagolyvarinarcs" target="blank"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Google Maps</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="rsvp text-center" id="rsvp">

        <div id="rsvp-modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>&times;</span>
                        </button>
                        <div class="section-padding">
                            <h3>Thank you!</h3>
                            <p>We are glad to see you join us on our big day.</p>
                            <div id="add-to-cal"></div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h3>What are you waiting for?</h3>
                    <p>We would greatly appreciate if you could RSVP before 1st of November '17</p>
                    <form id="rsvp-form" class="rsvp-form"
                        action=""
                        method="POST">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-input-group">
                                    <i class="fa fa-envelope"></i><input type="email" name="email" class=""
                                                                        placeholder="Email cím"
                                                                        >
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-input-group">
                                    <i class="fa fa-user"></i><input name="name" class=""
                                                                    placeholder="teljes név"
                                                                    required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-input-group">
                                    <i class="fa fa-users"></i><input type="number" name="extras" class="" min="0"
                                                                    max="4"
                                                                    placeholder="Husband/Wife or kids"
                                                                    required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-input-group">
                                    <i class="fa fa-key"></i><input type="number" name="invite_code" id="invite_code"
                                                                    class="" min="0"
                                                                    placeholder="Meghívó kód"
                                                                    required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" id="alert-wrapper"></div>
                        </div>
                        <button class="btn-fill rsvp-btn">
                            Yes,
                            that's me!
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>