<?php
// Get all image files from the directory
$images = glob('images/faces-of-vaat/*.jpg');

// Shuffle the array of image files
shuffle($images);

// Select the first X images
$selectedImages = array_slice($images, 0, 5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Vaat Brewery">
    <meta name="author" content="Vaat OÜ">
    <link rel="icon" href="favicon.ico">
    <meta property="og:title" content="Vaat - Do Your Own Thing.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://vaat.ee/">
    <meta property="og:image" content="https://vaat.ee/images/opengraph-header.png">
    <title>Vaat</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" type="text/css" href="css/styles.min.css" />
</head>

<body>
<div id="top"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-sm-12">
            <div class="row top-row">
                <div class="col-lg-8 col-md-9 col-sm-11 col-xs-10">
                    <img src="images/logo.svg" alt="VAAT" width="80"/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10">
                    <h1>
                        Do. Your.<br/>Own. Thing.
                    </h1>
                </div>
            </div>
            <div class="row background-pirange d-none">
                <div class="col-md-8">
                    <h2>Building the future</h2>
                    <p>
                        We followed our own advice and are <strong>Doing. Our. Own. Thing.</strong> Vaat is currently
                        building a brewery and a bar in the center of Tallinn.
                    </p>
                    <p>
                        Our <strong>VISION</strong> is a place of great fresh beers, low-alcohol alternatives and other
                        interesting beverages where beer lovers from around the world meet to witness the
                        latest innovation in ecologically sustainable, high-quality micro brewing.
                    </p>
                    <p>
                        In 2019 and 2020 we were able to secure the financial means to realise our dream.
                    </p>
                    <p>
                        We are very grateful to our amazing community, our many helpers, our 188 investors, the
                        state of Estonia, and the EU for their support. This is a truly ambitious project on
                        a rather tight budget. Our excessively hard work is currently being rewarded with the luck of the brave.
                        There is struggle, there is progress, there are setbacks, there's success.
                    </p>
                    <p>
                        While the bar has already celebrated its first anniversary, the brewery is still to be completed.
                        In the meantime we're also working on a new website. Stay tuned!
                    </p>
                    <br/>
                    <h2>Teeme oma asja ja ehitame tulevikku</h2>
                    <p>
                        Vaat pruulikoja eesmärk on toota head õlut, vastutustundlikult. Selleks oleme Tallinna kesklinna
                        ehitamas innovatiivset, väikseima jalajäljega pruulikoda Eestis (et mitte öelda maailmas).
                    </p>
                    <p>
                        Pruulikoja ehitamiseks saime toetust kokku 188 erainvestorilt, Eesti riigilt ja Euroopa Liidult.
                        Oleme teile lõputult tänulikud!
                    </p>
                    <p>
                        Lisaks pruulikojale on valmimas ka uus veebileht, kus saab olema rohkem ja oluliselt detailsemat
                        infot nii pruulikoja kui meie toodete kohta. Seni palume lisainfo saamiseks pöörduda meie poole
                        läbi meie sotsiaalmeediakanalite või meiliaadressil info@vaat.ee.
                    </p>
                    <p>
                        Terviseks!
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="images/pria-eu.png" alt="PRIA Logo and EAFRD Emblem">
                    <p class="pria">
                        The investments of our 188 shareholders have been supported by ARIB (PRIA) within the framework
                        of the European Agricultural Fund for Rural Development (EAFRD). In 2019, we were awarded a grant
                        of 175'000€ to aid the purchase of production equipment for the new brewery.
                    </p>
                    <br/>
                    <p class="pria">
                        Meie 188 osaniku investeeringuid toetab Euroopa Maaelu Arengu Põllumajandusfond (EAFRD) raames PRIA.
                        2019. aastal saime uue pruulikoja tootmisseadmete soetamiseks toetust summas 175 000 eurot.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>Our Taproom & Community</h2>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <p>
                        <a href="https://taproom.vaat.ee" target="_blank">The Vaat Taproom</a> is located in the heart of Tallinn, in Telliskivi TLN.
                        We are open from Wednesday to Saturday. Come and enjoy our beers and meads in a cozy atmosphere, take a
                        tour of our brewery, participate in a guided tasting, play a board game with friends, or just hang out.
                    </p>
                    <p>For all information regarding our taproom visit <a href="https://taproom.vaat.ee" target="_blank">taproom.vaat.ee</a></p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <a href="https://taproom.vaat.ee" target="_blank"><img src="images/header-taproom.jpg" width="100%" alt="Vaat Taproom" /></a>
                </div>
            </div>
            <div class="row faces-section">
                <div class="col-lg-4 col-md-12 faces-text">
                    <h3>Faces of Vaat</h3>
                    <p>
                        <strong>Our community</strong> is the most important part of our adventure.
                        It's what makes it all worth it.
                    </p>
                    <p>
                        Check out the growing number of beautiful Faces of Vaat,
                        a photography project by <a href="https://annameurer.com/" target="_blank">Anna Meurer</a>.
                    </p>
                </div>
                <div class="col-lg-8 faces-images">
                    <div class="row">
                        <div class="col-12">
                            <?php foreach ($selectedImages as $image): ?>
                            <img src="<?= $image ?>" alt="faces of our community" class="img-fluid face-img">
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <br/>
                            <a href="faces-of-vaat">See more faces</a>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>Our beers & meads</h2>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 beer-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-3 col-xs-3">
                            <img class="can" src="images/supernova-can-render.webp" alt="Supernova" />
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-9 col-xs-9">
                            <h3>Supernova</h3>
                            <h4>Modern Lager<br/>alc 4.8% vol</h4>
                            <p class="beer-description">
                                Supernova is a crisp and crushable modern lager! It combines high drinkability with a
                                gentle sweetness and a moderate floral bitterness. As our first ever pale lager beer it
                                started as an experiment and became a keeper.
                            </p>
                            <p>
                                Supernova won the <a href="https://awards.untappd.com/assets/awards/5562282.png" target="_blank">Untappd community award</a> for the best pale lager in Estonia in 2023!
                            </p>
                            <p class="availability">
                                Available.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 beer-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-3 col-xs-3">
                            <img class="can" src="images/people-pleasner-can-render.webp" alt="People Pleasner" />
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-9 col-xs-9">
                            <h3>People Pleasner</h3>
                            <h4>Hoppy Pilsner<br/>alc 4.8% vol</h4>
                            <p class="beer-description">
                                This dry hopped single hop Pilsner has one purpose - to let Enigma shine! Enigma is an
                                exciting hop variety from Australia which lends the beer the aromas and flavours
                                of tart berries, tropical fruits, and white grapes.
                            </p>
                            <p>
                                People Pleasner hasn't won any awards yet, but it sure has won many hearts and palates
                                already with its unique hoppy freshness!
                            </p>
                            <p class="availability">
                                Available.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 beer-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-3 col-xs-3">
                            <img class="can" src="images/finally-can-render.webp" alt="Finally!" />
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-9 col-xs-9">
                            <h3>Finally!</h3>
                            <h4>Micro IPA<br/>alc 2.9% vol</h4>
                            <p class="beer-description">
                                We love small beers, and we think there’s not enough of them. Incredibly easy drinking
                                with a body that belies the low ABV, this pale malt and Mosaic SMaSH brew is the perfect
                                lunch beer. This is the first recipe we developed at our new brewery in
                                Telliskivi, Tallinn. Finally!
                            </p>
                            <p class="availability">
                                Available.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 beer-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-3 col-xs-3">
                            <img class="can" src="images/kveikly-now-can-render.webp" alt="Kveikly Now" />
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-9 col-xs-9">
                            <h3>Kveikly Now</h3>
                            <h4>Farmhouse IPA<br/>alc 5.3% vol</h4>
                            <p class="beer-description">
                                Kveik is a Norwegian farmhouse yeast, which gives this beer a farmhouse IPA quality.
                                It's a balanced, crisp, and flavorful brew with a hazy appearance.
                                It has a warm fruitiness, hints of citrus, and herbal notes,
                                with just the right amount of funk.
                            </p>
                            <p class="availability">
                                Available.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 beer-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-3 col-xs-3">
                            <img class="can" src="images/happy-endeavours-can-render.webp" alt="Happy Endeavours" />
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-9 col-xs-9">
                            <h3>Happy Endeavours</h3>
                            <h4>White Session IPA<br/>alc 4.5% vol</h4>
                            <p class="beer-description">
                                Brewing is ultimately a happy endeavour! With this hoppy wheat beer, we want to celebrate
                                that fact. This flavourful Session IPA is brewed with El Dorado and dry hopped with Centennial.
                            </p>
                            <p class="availability">
                                Available.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 beer-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-3 col-xs-3">
                            <img class="can" src="images/the-coast-is-clear-can-render.webp" alt="The Coast is Clear" />
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-9 col-xs-9">
                            <h3>The Coast is Clear</h3>
                            <h4>West Coast IPA<br/>alc 5.8% vol</h4>
                            <p class="beer-description">
                                Simcoe, Columbus, Centennial and a bitter finish. This is a throwback to the good old days.
                                Weʼve been going on about how there are not enough West Coast IPAs, well, here's one!
                            </p>
                            <p class="availability">
                                Available soon.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 beer-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-3 col-xs-3">
                            <img class="can" src="images/tallinner-weizen-can-render.webp" alt="Tallinner Weizen" />
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-9 col-xs-9">
                            <h3>Tallinner Weizen</h3>
                            <h4>German Hefeweizen<br/>alc 4.4% vol</h4>
                            <p class="beer-description">
                                Tallinn has given us a lot. Here's where we grew up in terms of beer.
                                Before the arrival of the IPA we had the Belgians and the German wheat beers.
                                It's time to give something back. This is for Tallinn, a city where German beer culture
                                and wheat have always been first class citizens.
                            </p>
                            <p class="availability">
                                Available soon.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 beer-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-3 col-xs-3">
                            <img class="can" src="images/fizzy-bee-can-render.webp" alt="Fizzy Bee" />
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-9 col-xs-9">
                            <h3>Fizzy Bee</h3>
                            <h4>Dry sparkling mead<br/>alc 4.8% vol</h4>
                            <p class="beer-description">
                                This light and refreshing Melomel is brewed with organic Estonian honey and a little mango.
                                It is fermented with white wine yeast from the Vinho Verde region of Portugal.
                            </p>
                            <p class="availability">
                                Back in stock soon.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>Our Brewery</h2>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-8">
                            <p>
                                It is our mission to lower the ecological footprint of artisanal beer production in every way we can.
                                Thanks to our amazing community, we were able to build a highly innovative brewing system on
                                which we’re brewing the beers we love to drink.
                            </p>
                            <p>
                                We make balanced, drinkable and clean beers that can withstand the test of time.
                            </p>
                        </div>
                        <div class="col-lg-12 col-md-4">
                            <img src="images/vaat-lfpb.png" class="tlpfb" alt="Lowest Possible Footprint Brewery" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="breweryCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#breweryCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#breweryCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#breweryCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#breweryCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/vaat-brewery-1.jpg" class="d-block w-100" alt="Vaat Brewery">
                            </div>
                            <div class="carousel-item">
                                <img src="images/vaat-brewery-2.jpg" class="d-block w-100" alt="Vaat Brewery">
                            </div>
                            <div class="carousel-item">
                                <img src="images/vaat-brewery-3.jpg" class="d-block w-100" alt="Vaat Brewery">
                            </div>
                            <div class="carousel-item">
                                <img src="images/vaat-brewery-4.jpg" class="d-block w-100" alt="Vaat Brewery">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#breweryCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#breweryCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>Our legacy beers</h2>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 beer-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-3 col-xs-3">
                            <img class="bottle" src="images/jb.png" alt="Jailhouse Brew" />
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-9 col-xs-9">
                            <h3>Jailhouse Brew</h3>
                            <h4>Russian Imperial Oatmeal Stout<br/>ABV 9.1%</h4>
                            <div class="beer-icon-wrapper">
                                <img class="beer-icon" src="images/jb-ico.svg" alt="Jailhouse Brew icon" height="64px"/>
                            </div>
                            <p class="beer-description">
                                “If thrown in the old jailhouse, this is the beer we cook. Jailhouse Brew is complex and opaque
                                like the story that got us locked up. It’s coffee, smoke and body salts behind iron bars, and
                                it’s strong enough to get us out again.”
                            </p>
                            <p class="availability">
                                Out-of-stock. We miss you, JB. You'll be back some day.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 beer-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-3 col-xs-3">
                            <img class="bottle" src="images/wn.png" alt="Witty Nelson" />
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-9 col-xs-9">
                            <h3>Witty Nelson</h3>
                            <h4>Wit inspired ale<br/>ABV 5.5%</h4>
                            <div class="beer-icon-wrapper">
                                <img class="beer-icon" src="images/wn-ico.svg" alt="Witty Nelson icon" height="64px"/>
                            </div>
                            <p class="beer-description">
                                Summer in a bottle. Dry hopped with Nelson Sauvin, Witty Nelson starts off as the perfectly refreshing
                                summer beer. As it ages, the tropical notes make way for a growing complexity of wit spiciness, saison
                                characteristics, and the elegant aromas of white wine.
                            </p>
                            <p class="availability">
                                Partially available. Our good old superstar. It's time for you to be in a can.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 beer-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-3 col-xs-3">
                            <img class="bottle" src="images/ltl.png" alt="Lager than Life" />
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-9 col-xs-9">
                            <h3>Lager than Life</h3>
                            <h4>Hoppy Vienna Red<br/>ABV 4.7%</h4>
                            <div class="beer-icon-wrapper">
                                <img class="beer-icon" src="images/ltl-ico.svg" alt="Lager than Life icon" height="64px"/>
                            </div>
                            <p class="beer-description">
                                Some beer archeology, quite a bit of Vienna malt, Tettnanger and Citra dry hops. This Vienna Red, an almost
                                extinct style, is our contribution to the world of Lager. This is not a generic loveless brew, this is Lager
                                than Life.
                            </p>
                            <p class="availability">
                                Out of stock. Not in production anymore. Maybe a comeback in a can someday?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 beer-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-3 col-xs-3">
                            <img class="bottle" src="images/be.png" alt="Blimey!" />
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-9 col-xs-9">
                            <h3>Blimey!</h3>
                            <h4>New England Double IPA<br/>ABV 8.0%</h4>
                            <div class="beer-icon-wrapper">
                                <img class="beer-icon" src="images/be-ico.svg" alt="Blimey! icon" height="64px"/>
                            </div>
                            <p class="beer-description">
                                Baconian, Balanced, Beauteous, Beautiful, Becoming, Bedazzling, Befriended, Believable,
                                Belonging, Beloved, Beneficial, Benignant, Better, Better-than-before, Best, Bewitching,
                                Beyond dreams, Big.
                            </p>
                            <p class="availability">
                                Out of stock. Not in production anymore.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 beer-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-3 col-xs-3">
                            <img class="bottle" src="images/ipk.png" alt="India Pale Kölsch" />
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-9 col-xs-9">
                            <h3>IPK</h3>
                            <h4>Session IPA<br/>ABV 4.6%</h4>
                            <div class="beer-icon-wrapper">
                                <img class="beer-icon" src="images/ipk-ico.svg" alt="IPK icon" height="64px"/>
                            </div>
                            <p class="beer-description">
                                Pilsner malt and Kölsch yeast. Amarillo and Jarrylo. Crisp, aromatic, highly drinkable.
                                Our take on the session IPA – the IPK.
                            </p>
                            <p class="availability">
                                Out of stock. Not in production anymore.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 beer-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-3 col-xs-3">
                            <img class="bottle" src="images/fd.png" alt="Forest Dubbel" />
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-9 col-xs-9">
                            <h3>Forest Dubbel</h3>
                            <h4>Belgian Ale with Estonian Cowberries<br/>ABV 7.5%</h4>
                            <div class="beer-icon-wrapper">
                                <img class="beer-icon" src="images/fd-ico.svg" alt="Forest Dubbel icon" height="64px"/>
                            </div>
                            <p class="beer-description">
                                A salute to the Estonian autumn. This beer blends the malt and yeast forward qualities of
                                Belgian ales with the sour, fruity and refreshing notes of hand-picked Estonian cowberries.
                            </p>
                            <p class="availability">
                                Seasonal, currently not available but will be back in a can for sure.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 beer-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-3 col-xs-3">
                            <img class="bottle large-bottle" src="images/sob.png" alt="San of a Birch" />
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-9 col-xs-9">
                            <h3>San of a Birch</h3>
                            <h4>Nordic Sake Beer<br/>ABV 7.0%</h4>
                            <div class="beer-icon-wrapper">
                                <img class="beer-icon" src="images/sob-ico.svg" alt="San of a Birch icon" height="64px"/>
                            </div>
                            <p class="beer-description">
                                A prototype we can't wait to produce.
                            </p>
                            <p class="availability">
                                Not released yet. It's about time, right?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 beer-wrapper">

                </div>
                <div class="col-lg-4 beer-wrapper">

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>
                        The Vaat manifesto
                    </h2>
                    <hr/>

                    <p>
                        Don’t run after the market. Follow your drive and curiosity. Create the market.<br/>
                        Beer styles are like crutches. Learn to walk without them, they’re limiting your movement.<br/>
                        Be anti-mainstream even in an anti-mainstream environment. Spend your “fucks given” wisely.<br/>
                        Don’t be afraid of taking the hard way. Doing things right creates true satisfaction. Quality is not negotiable.<br/>
                        Never stop improving. Your process, your beers, yourself. Innovation is the only way to win.<br/>
                        Don’t compare to others. Ignore the haters, love those who appreciate what you do. Include them in your dream.<br/>
                        Do your own thing.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>Where we grew up</h2>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        In our nomadic period we developed all our recipes at our lab brewery in Tallinn, Estonia.
                        With great care for quality and detail we brewed and improved each recipe until we were happy with the result.
                        Most of the beers we created in that way were then produced in Belgium, at the renowned De Proefbrouwerij.
                        We also brewed at a couple of Estonian breweries.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="lightgallery">
                        <?php
                        $images = glob('gallery/thumbnails/*.jpg');
                        foreach ($images as $filename) :
                        ?>
                        <a href="<?= str_replace(array("_tn", "thumbnails/"), array("", "full/"), $filename) ?>">
                            <img src="<?= $filename ?>" width="120px" height="120px" alt="picture of Vaat image gallery" />
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>Contact us</h2>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h3>Vaat OÜ</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-6">
                    <p>
                        Telliskivi 60/1 (postbox & official address)<br/>
                        Telliskivi 60M (location)<br/>
                        10412 Tallinn<br/>
                        Estonia<br/>
                        <a href="mailto:vaat@vaat.ee">vaat@vaat</a>
                    </p>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <a href="https://untappd.com/VaatBrewery">Untappd</a><br/>
                    <a href="https://facebook.com/vaatbrewery">Facebook</a><br/>
                    <a href="https://instagram.com/vaatbrewery">Instagram</a><br/>
                </div>
                <div class="col-sm-offset-4 col-xs-offset-0"></div>
            </div>
            <div class="row faces">
                <div class="col-lg-12">
                    <img src="images/faces.png" alt="faces" />
                </div>
            </div>
        </div>
        <div class="col-md-1 offset-md-1 d-none d-md-block">
            <div class="right-hand-wrapper">
                <a href="#top"><img class="right-hand" src="images/hand.svg" width="40px" alt="V sign"/></a>
            </div>
        </div>
    </div>
</div>
<script src="js/scripts.js"></script>
<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery'), {
        plugins: [],
        speed: 500,
    });
</script>
<script>
    let currentImages = [];

    function getRandomImage() {
        return fetch('php/randomFace.php')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.error) {
                    throw new Error(data.error);
                }
                return data.image;
            })
            .catch(error => console.error('Error fetching random image:', error));
    }

    function changeRandomImage() {
        const faceImages = document.querySelectorAll('.face-img');
        const randomIndex = Math.floor(Math.random() * faceImages.length);
        const selectedImage = faceImages[randomIndex];

        getRandomImage().then(randomImage => {
            if (randomImage && !currentImages.includes(randomImage)) {
                selectedImage.classList.add('fade-out');
                setTimeout(() => {
                    selectedImage.src = randomImage;
                    selectedImage.classList.remove('fade-out');
                    currentImages[randomIndex] = randomImage;
                }, 1200); // Match the duration of the CSS transition
            }
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        const faceImages = document.querySelectorAll('.face-img');
        faceImages.forEach((img, index) => {
            currentImages[index] = img.src;
        });
    });

    setInterval(changeRandomImage, 10000); // Change one image every 5 seconds
</script>
</body>
</html>