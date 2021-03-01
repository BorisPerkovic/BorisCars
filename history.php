<?php
session_start();
require_once("php/function.php");
require_once("php/classBase.php");
require_once("php/classLog.php");
$db=new Baza();
$db->connect();
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="icon" href="pics/logo1.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="jscript/config.js"></script>

    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/icons/all.min.css" rel="stylesheet">

    <title>ISTORIJA</title>
</head>
<body>

<?php
/*------------------------
    INCLUDING NAVBAR
-------------------------*/
    include("php/navbar.php");
?>

<!------------------------
    HISTORY PARALLAX
-------------------------->

<div id="history_parallax" class="container-fluid parallax-section">

</div>

<!------------------------
CENTRAL HEADING HISTORY
-------------------------->
<section class="container-fluid central_models2">

    <div class="row">

        <div class="col-md-12 text-center">
			<h1>ISTORIJAT LAND ROVER VOZILA</h1>
        </div>

    </div>


</section>

<!------------------------
    HISTORY MAIN
-------------------------->
<main id="history">

<section class="container">

    <div class="row">

        <article class="col-md-12">
            <p class="font-weight-bold">Od lansiranja prvog Range Rover modela davne 1970-te, ovo vozilo se kontinuirano razvija. Najluksuznijeg sportskog terenca (SUV) na svetu odlikuju izvanredni nivoi sofisticiranosti, performansi, dizajna i naravno tehnološki napretci koji čine da se ovo vozilo izdvaja od drugih. Sada ćemo se osvrnuti na istoriju serije luksuznih sportskih terenaca poznatih pod imenom "Range Rover porodica".</p>
            <h5>1969 - Prototip Range Rover Velar</h5>
            <p>Kako bi sačuvali prototip prvog Range Rover vozila kao strogo čuvanu tajnu, dizajneri i inženjeri koji su radili na ovom revolucionarnom novom vozilu dali su mu ime "Velar" - reč vodi poreklo od italijanske reči "velare" što znači veo ili prekrivka. Prvih 26 prototipa je čak imalo i ovaj bedž kako bi se zamaskirao njihov identitet.</p>
            <img src="pics/his.jpg" class="img-fluid" alt="Responsive image">
            <p class="hisstext">Rani Range Rover prototipi nosili su bedž Velar, kako bi prikrili svoj pravi identitet.</p>
        </article>

        <article class="col-md-12">
            <h5>1970 - Prva proizvodnja Range Rovera sa troje vrata</h5>
            <p>Nakon uspešnog testiranja koncept vozila Velar, na tržište je pušten i prvi model Range Rovera. Ovo vozilo dobilo je izvanredne kritike, zahvaljujući retkoj kombinaciji performansi i neobičnog dizajna. Ovo je prvo vozilo koje je imalo stalni pogon na sva 4 točka, prtljažnik na podizanje, haubu na preklop i kontinuiranu liniju karoserije.</p>
            <h5>1981 - Range Rover sa četvoro vrata</h5>
            <p>Nakon 11 godina na tržištu,Range Rover Klasik je postao dostupan kao vozilo sa četvoro vrata,dajući time veće mogućnosti već širokoj masi obožavaoca.</p>
        </article>
        <article class="col-md-6 col-sm-6 col">
            <img src="pics/his1.jpg" class="img-fluid" alt="Responsive image">
            <p class="hisstext">Počev od trenutka svog osnivanja, Range Rover je bio poznat u društvu po svom luksuznom stavu</p> 
        </article>
        <article class="col-md-6 col-sm-6 col">
             <img src="pics/his2.jpg" class="img-fluid" alt="Responsive image">
            <p class="hisstext">Ono što čini Range Rover odmah prepoznatljivim jeste njegov karakterističan dizajn</p>
        </article>

        <article class="col-md-12">
            <h5>1994 - Druga generacija Range Rover-a</h5>
            <p>Luksuznije od svog prethodnika, vozilo druge generacije stavlja akcenat na dizajn poput orginalne siluete i pravougaonih umesto okruglih farova koji su se koristili u tadašnja vremena. Ove izmene učinile su da vozilo do današnjih dana zadrži trenutnu prepoznatljivost.</p>
            <h5>2001 - Treća generacija Range Rover-a</h5>
            <p>Ovo Range Rover vozilo je prvo vozilo koje je izrađeno od mokokokne karoserije. Inspiracija za dizajn trupa preuzeta je od italijanskih Riva glisera, remenice na luksuznoj jahti zamenile su metalik završne obrade unutar vozila.</p>
        </article>
        <article class="col-md-6 col-sm-6 col">
            <img src="pics/his3.jpg" class="img-fluid" alt="Responsive image">
            <p class="hisstext">Uvedeno je još više luksuza u odnosu na drugu generaciju Range Rover-a</p> 
        </article>
        <article class="col-md-6 col-sm-6 col">
             <img src="pics/his4.jpg" class="img-fluid" alt="Responsive image">
            <p class="hisstext">Italijanski Riva gliser poslužio je kao inspiracija za dizajn vozila</p>
        </article>

        <article class="col-md-12">
            <h5>2004 - Koncept vozilo Range Stormer</h5>
            <p>Koncept vozilo Stormer ostaće zapamćeno kao vozilo koje je utrlo put budućem dizajnu Range Rover automobila kao i po smelom pristupu u uvođenju nove tehnologije u rad vozila.</p>
            <h5>2005 - Proizvodnja Range Rover sportskih vozila</h5>
            <p>Uvođenje prvog sportskog terenskog vozila u Range Rover porodicu pokazalo je posvećenost kompanije Land Rover ka razvoju performansi. Jedna od opcija za motor uključivala je i benziski supercharged motor od 4.2 litra koji je davao brze performanse. Range Rover Sport je takođe nudio i unakrsno uvezanu suspenziju vazduha, čime se vozačima omogućilo opciono podešavanje visine vožnje što je optimizolavo komfor u vozilu sa pogonom na sva 4 točka, kako pri drumskoj tako i pri terenskoj vožnji. Visina koja varira upravo je jedna od mnogih distinktivnih karakteristika koja je odražavala dinamičke performanse u izgledu ovog vozila.</p>
        </article>
        <article class="col-md-6 col-sm-6 col">
            <img src="pics/his5.jpg" class="img-fluid" alt="Responsive image">
            <p class="hisstext">Koncept vozilo Stormer utrlo je put dizajnu budućnosti Range Rover vozila</p> 
        </article>
        <article class="col-md-6 col-sm-6 col">
             <img src="pics/his6.jpg" class="img-fluid" alt="Responsive image">
            <p class="hisstext">Dolazak vozila Range Rover Sport korisnicima je ponudio naprednije performanse</p>
        </article>

        <article class="col-md-12">
            <h5>2008 - Koncept vozilo LRX</h5>
            <p>Ovo kros-kupe koncept vozilo predstavljalo je ambiciozan i napredan korak za Land Roverov dizaj tim. Target su bili vozači koji bi se retko upuštali u terensku vožnju, no, ipak, ovo koncept vozilo je zadržalo legendarne sposobnosti Land Rover vozila ali i tržištu ponudilo sasvim novi enterijer koji je javnost ocenila kao "futuristički".</p>
            <img src="pics/his7.jpg" class="img-fluid" alt="Responsive image">
            <p class="hisstext">Dizajn koncept vozila LRX u mnogome je uticao na izgled kasnijeg modela, Range Rover Evoque</p>
        </article>

        <article class="col-md-12">
            <h5>2011 - Proizvodnja modela Range Rover Evoque</h5>
            <p>Kako su ga mnogi prodajni saloni nazvali "vozilom godine", Range Rover Evoque napravio je senzaciju čim je pušten na tržište, na sajmu automobila u Parizu 2010-te godine. Mnoge karakteristike viđene na koncept vozilu LRX zadržane su i na ovom luksuznom kros-kupeu, uz inovativni Range Rover dizajn.</p>
            <img src="pics/his8.jpg" class="img-fluid" alt="Responsive image">
            <p class="hisstext">Dolazak Range Rover Evoque doneo je sa sobom novi dizajn</p>
        </article>

        <article class="col-md-12">
            <h5>2012 - Četvrta generacija Range Rover vozila</h5>
            <p>Četvrta inkarnacija Range Rover vozila bila je prva kod koje je celokupna karoserija izrađena od lakog aluminijuma, i ova vozila su odmah postala prepoznatljiva po dugačkom međuosovinskom razmaku i plutajućem krovu. U vozilima ove generacije ugrađena je i napredna verzija Land Roverovog sistema Terrain Response®. Ova tehnologija autoamtski selektuje najbolja podešavanja u vozilu kako bi se kretanje prilagodilo vrsti terena.</p>
            <h5>2013 - Range Rover Hibrid</h5>
            <p>Prvo hibridno vozilo u Range Rover porodici ne samo da je obezbeđivalo ekonomičniju potrošnju goriva već i smanjenu emisiju štetnih gasova, ali ono što je najvažnije - to nikako nije uticalo na smanjenje performansi. Kako bi se to dokazalo, ovo vozilo testirano je na 16.000km dugoj vožnji od Solihull-a do Mumbaija. Ova ruta sadržala je najzahtevnije uslove vožnje - Himalaje.</p>
        </article>
        <article class="col-md-6 col-sm-6 col">
            <img src="pics/his9.jpg" class="img-fluid" alt="Responsive image">
            <p class="hisstext">Prvi hibridni Range Rover Sport smanjuje emisiju bez uticaja na performanse</p> 
        </article>
        <article class="col-md-6 col-sm-6 col">
             <img src="pics/his10.jpg" class="img-fluid" alt="Responsive image">
            <p class="hisstext">Luksuzne karakteristike koje se očekuju od Range Rovera zadržane su na Hibridu.</p>
        </article>

        <article class="col-md-12">
            <h5>2013 - Druga generacija vozila Range Rover Sport</h5>
            <p>Ovo vozilo prvi put je provozao glumac James Bond-a, Daniel Craig, i tom prilikom su neke ulice u Njujorku privremeno zatvorene kako bi se prikazao unapredjeni Range Rover Sport,koji donosi veću efikasnost od 3.0 litarskog V6 motora.</p>
            <img src="pics/his11.jpg" class="img-fluid" alt="Responsive image">
            <p class="hisstext">Povećana snaga motora je ključna karakteristika druge generacije Range Rover Sporta</p>
        </article>

        <article class="col-md-12">
            <h5>2015 - Lansiranje modela Range Rover Sport SVR</h5>
            <p>Projektovan kako bi pružio visoke performanse sportskog terenca uz optimalnu snagu, Range Rover Sport SVR je prvo vozilo koje je konstruisao Land Roverov tim za specijalne operacije u vozilu. Kao najbrži Land Rover ikada, ovo vozilo nudi nezaboravnu vožnju. Snaga ovog vozila odražava se i u karakteristikama njegovog dizajna kao što su četvrtaste izduvne cevi i jedinstven zadnji spojler.</p>
            <h5>2015 - Range Rover SVAutobiography</h5>
            <p>Kao vrhunac prefinjenosti i luksuza, Range Rover SVAutobiography redefinisao je Range Rover iskustvo. Pažnja je posvećena detaljima kao što su završne obrade od brušenog aluminijuma i posebna sedišta u kabini. Što se tiče eksterijera, jedinstven izbor palete boja omogućio je vozačima da vrhunsko iskustvo luksuza koje je sinonim za Range Rover. Model SVAutobiography Dynamic uveden je kratko nakon modela SVAutobiography. Svojim karakteristčnim dizajnom i moćnim V8 motorom ovo vozilo odražavalo je svoju snagu i agilnost.</p>
        </article>
        <article class="col-md-6 col-sm-6 col">
            <img src="pics/his12.jpg" class="img-fluid" alt="Responsive image">
            <p class="hisstext">Range Rover SVR kombinuje snagu i performanse za uzbudljivu vožnju</p> 
        </article>
        <article class="col-md-6 col-sm-6 col">
             <img src="pics/his13.jpg" class="img-fluid" alt="Responsive image">
            <p class="hisstext">Vrhunac luksuza i performansi,Range Rover SVAutobiography</p>
        </article>

        <article class="col-md-12">
            <h5>2015 - Range Rover Evoque Kabriolet</h5>
            <p>Prvi Range Rover kabriolet, Evoque, kombinuje čuvene Land Roverove performanse sa upadljivim karakteristikama potput krova na harmonika sklapanje, pri čemu su zadržane sve jake vizuelne osobenosti koje je osmislio Land Roverov tim dizajnera. Rezultat je vrhunski sportski kabriolet sa pogonom na sva 4 točka, za sve terene.</p>
            <img src="pics/his14.jpg" class="img-fluid" alt="Responsive image">
            <p class="hisstext">Range Rover Evoque kabriolet je prvi Range Rover takve vrste.</p>
        </article>

        <article class="col-md-12">
            <p class="font-weight-bold">Od prvog koncept vozila Velar, koje je držano pod velom tajne, do prvog kabrioleta Evoque, evolucija Range Rovera je jasna. Luksuzni sportski terenci i dalje pomeraju granice u dizajnu, sposobnostima i performansama vozila, pri čemu se nikad ne čini kompromis na štetu sposobnosti i snage.</p>
        </article>

        <article class="col-md-12">
            <h5>2017 - Novi Range Rover Velar</h5>
            <p>Priča se nastavlja. Novi Range Rover Velar tržištu je predstavljen 1-og marta 2017te.</p>
            <img src="pics/his15.jpg" class="img-fluid" alt="Responsive image">
        </article>
    </div>

</section>

</main>

<?php
/*------------------------
    INCLUDING FOOTER
-------------------------*/
    include("php/footer.php");

?>


</body>
</html>