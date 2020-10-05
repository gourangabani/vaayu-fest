<?php

$dilipBuildconLtd = new Sponsor(
    'Dilip Buildcon Ltd',
    categories::ilu,
    'dilip-buildcon-ltd.jpg'
);
$idemitsu = new Sponsor(
    'Idemitsu',
    categories::ilu,
    'idemitsu.jpg'
);
$inditrade = new Sponsor(
    'Inditrade',
    categories::ilu,
    'inditrade.jpg'
);
$kreativeKeeda = new Sponsor(
    'Kreative Keeda',
    categories::ilu,
    'kreative-keeda.jpg'
);
$sbi = new Sponsor(
    'SBI',
    categories::ilu,
    'sbi.jpg'
);
$tribeVibe = new Sponsor(
    'Tribe Vibe',
    categories::ilu,
    'tribe-vibe.jpg'
);
$navBharat = new Sponsor(
    'Nav Bharat',
    categories::ilu,
    'nav-bharat.jpg'
);
$vijaySales = new Sponsor(
    'Vijay Sales',
    categories::ilu,
    'vijay-sales.jpg'
);
$bodyCanvas = new Sponsor(
    'Body Canvas',
    categories::general,
    'body-canvas.jpg'
);
$charaghDin = new Sponsor(
    'Charagh Din',
    categories::general,
    'charagh-din.jpg'
);
$dellTechnologies = new Sponsor(
    'Dell Technologies',
    categories::general,
    'dell-technologies.jpg'
);
$denver = new Sponsor(
    'Denver',
    categories::general,
    'denver.jpg'
);
$emeveta = new Sponsor(
    'Emeveta',
    categories::general,
    'emeveta.jpg'
);
$iCreate = new Sponsor(
    'iCreate',
    categories::general,
    'icreate.jpg'
);
$kongsNutrition = new Sponsor(
    'Kong\'s Nutrition',
    categories::general,
    'kongs-nutrition.jpg'
);
$moneyControl = new Sponsor(
    'Money Control',
    categories::general,
    'money-control.jpg'
);
$poshn = new Sponsor(
    'Poshn',
    categories::general,
    'poshn.jpg'
);
$schbang = new Sponsor(
    'Schbang',
    categories::general,
    'schbang.jpg'
);
$smaaash = new Sponsor(
    'Smaaash',
    categories::general,
    'smaaash.jpg'
);
$starbucks = new Sponsor(
    'Starbucks',
    categories::general,
    'starbucks.jpg'
);
$uniball = new Sponsor(
    'Uniball',
    categories::general,
    'uniball.jpg'
);
$zomato = new Sponsor(
    'Zomato',
    categories::general,
    'zomato.jpg'
);
$telexAdvertisment = new Sponsor(
    'Telex Advertisement',
    categories::massMedia,
    'telex-advertisement.jpg'
);
$ufo = new Sponsor(
    'UFO',
    categories::massMedia,
    'ufo.jpg'
);
$lokmat = new Sponsor(
    'Lokmat',
    categories::massMedia,
    'lokmat.jpg'
);
$fistoSports = new Sponsor(
    'Fisto Sports',
    categories::massMedia,
    'fisto-sports.jpg'
);
$youthIncorporated = new Sponsor(
    'Youth Incorporated',
    categories::massMedia,
    'youth-incorporated.jpg'
);
$theHindu = new Sponsor(
    'The Hindu',
    categories::massMedia,
    'the-hindu.jpg'
);
$navBharat = new Sponsor(
    'Nav Bharat',
    categories::massMedia,
    'nav-bharat.jpg'
);
$gobbleGrams = new Sponsor(
    'Gobble Grams',
    categories::massMedia,
    'gobble-grams.jpg'
);
$changeMatrix = new Sponsor(
    'Change Matrix',
    categories::prefests,
    'change-matrix.jpg'
);

$sponsors = [
    $dilipBuildconLtd, $idemitsu, $inditrade, $kreativeKeeda, $sbi, $tribeVibe, $navBharat, $vijaySales,
    $bodyCanvas, $charaghDin, $dellTechnologies, $denver, $emeveta, $iCreate, $kongsNutrition, $moneyControl, $poshn, $schbang, $smaaash, $starbucks, $uniball, $zomato,
    $telexAdvertisment, $ufo, $lokmat, $fistoSports, $youthIncorporated, $theHindu, $navBharat, $gobbleGrams
];

$sponsorsILU = [$dilipBuildconLtd, $idemitsu, $inditrade, $kreativeKeeda, $sbi, $tribeVibe, $navBharat, $vijaySales];
$sponsorsGeneral = [$bodyCanvas, $charaghDin, $dellTechnologies, $denver, $emeveta, $iCreate, $kongsNutrition, $moneyControl, $poshn, $schbang, $smaaash, $starbucks, $uniball, $zomato];
$sponsorsMassMedia = [$telexAdvertisment, $ufo, $lokmat, $fistoSports, $youthIncorporated, $theHindu, $navBharat, $gobbleGrams];
$sponsorsPrefest = [];
$categories = [$sponsorsILU, $sponsorsGeneral, $sponsorsMassMedia];
