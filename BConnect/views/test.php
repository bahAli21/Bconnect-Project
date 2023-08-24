<?php

require_once('Feed.php');

$full_names = array(
    'leo messi',
    'BAH',
    'Ali',
    'Ibrahima Sow',
    'BAH Leo',
    'GoldeN',
    'M. Fora',
    'Ahmad Bah',
    'Mamoudou Diallo',
    'Eagle Bah',
    'Abdoulaye Bah'
);

$titleLegends = array(
    "Exploration urbaine 🏙️",
    "Aventure en plein air 🌳",
    "Moments de détente 😌",
    "Découverte de la nature sauvage 🌿",
    "Les couleurs de l'automne 🍂",
    "L'art de la photographie 📷",
    "Dans les rues de la ville 🏙️",
    "Capturé en plein vol 🦅",
    "Le calme de la mer 🌊",
    "Évasion tropicale 🏝️",
    "À la recherche de l'inspiration 💡",
    "Rencontre avec la faune 🐾",
    "Voyage dans le temps ⏳",
    "Le ciel nocturne étoilé ✨",
    "Au sommet de la montagne ⛰️",
    "À la lisière de la forêt 🌲",
    "Le monde à travers mon objectif 🌎",
    "Les rues animées de la ville 🚶‍♀️🌆",
    "La beauté des contrastes ⚫⚪",
    "L'horizon sans fin 🌅",
    "Exploration de nouveaux horizons 🌌",
    "Rêve éveillé 🌠",
    "Au cœur de la métropole 🌃",
    "L'art de la simplicité 🍃",
    "Rappels de voyages passés ✈️"
);

$durations = array(
    "Il y a 1 heure",
    "Il y a 1 jour",
    "Il y a 2 jours",
    "Il y a 1 semaine",
    "Il y a 1 mois",
    "Il y a 2 mois",
    "Il y a 3 mois",
    "Il y a 4 mois",
    "Il y a 5 mois",
    "Il y a 6 mois",
    "Il y a 7 mois",
    "Il y a 8 mois",
    "Il y a 9 mois",
    "Il y a 10 mois",
    "Il y a 11 mois",
    "Il y'a 1 an",
    "Il y a 2 ans",
    "Il y a 3 ans",
);

$locations = array(
    'Conakry',
    'Mamou',
    'Lyon',
    'Paris',
    'New York',
    'Los Angeles',
    'Tokyo',
    'Londres',
    'Sydney',
    'Rio de Janeiro',
    'Dubai',
    'Moscou',
    'Berlin',
    'Rome',
    'Toronto',
    'Pékin',
    'Caire',
    'Mumbai',
    'Nairobi',
    'Séoul',
    'Mexico',
    'Copenhague',
    'Johannesburg',
    'Amsterdam',
    'Singapour'
);

$profilePictures = array(
    '../../assets/images/img/1.jpg',
    '../../assets/images/img/2.jpg',
    '../../assets/images/img/3.jpg',
    '../../assets/images/img/4.jpg',
    '../../assets/images/img/5.jpg',
    '../../assets/images/img/6.jpg',
    '../../assets/images/img/7.jpg',
    '../../assets/images/img/8.jpg',
    '../../assets/images/img/9.jpg',
    '../../assets/images/img/10.jpg',
    '../../assets/images/img/11.jpg',
    '../../assets/images/img/12.jpg',
    '../../assets/images/img/13.jpg'
);

$pictures = array(
    '../../assets/images/img/1.jpg',
    '../../assets/images/img/2.jpg',
    '../../assets/images/img/3.jpg',
    '../../assets/images/img/4.jpg',
    '../../assets/images/img/5.jpg',
    '../../assets/images/img/6.jpg',
    '../../assets/images/img/7.jpg',
    '../../assets/images/img/8.jpg',
    '../../assets/images/img/9.jpg',
    '../../assets/images/img/10.jpg',
    '../../assets/images/img/11.jpg',
    '../../assets/images/img/12.jpg',
    '../../assets/images/img/13.jpg'
);

$likedBy = array(
    '../../assets/images/img/1.jpg',
    '../../assets/images/img/2.jpg',
    '../../assets/images/img/3.jpg',
    '../../assets/images/img/4.jpg',
    '../../assets/images/img/5.jpg',
    '../../assets/images/img/6.jpg',
    '../../assets/images/img/7.jpg',
    '../../assets/images/img/8.jpg',
    '../../assets/images/img/9.jpg',
    '../../assets/images/img/10.jpg',
    '../../assets/images/img/11.jpg',
    '../../assets/images/img/12.jpg',
    '../../assets/images/img/13.jpg'
);

$descriptions = array(
    "🌟 Cette photo est incroyable !",
    "J'adore cette vue 😍",
    "📸 Magnifique moment capturé.",
    "C'est tellement inspirant ! 💫",
    "Superbe travail 👏",
    "Une image vaut mille mots.",
    "🎉 Vraiment impressionnant !",
    "J'aimerais être là-bas en ce moment. ☀️",
    "Une expérience à ne pas manquer.",
    "Cette photo me donne des frissons. ❄️",
    "C'est tout simplement époustouflant !",
    "Un chef-d'œuvre visuel.",
    "🤩 Incroyablement captivant !",
    "💖 Un vrai régal pour les yeux.",
    "Ce paysage est à couper le souffle.",
    "🌺 Des couleurs magnifiques !",
    "Une photo qui raconte une histoire.",
    "☁️ L'endroit parfait pour se perdre.",
    "J'adore ce moment de calme. 🌄",
    "🚀 Exploration visuelle de premier plan !",
    "Un vrai bijou dans mon flux.",
    "🏞️ La nature dans toute sa splendeur.",
    "Une vision artistique extraordinaire.",
    "😮 Absolument stupéfiant !",
    "🎨 Une palette de couleurs incroyable !"
);

$hashTags = array(
    "#VoyageEnDollars 🌎💸",
    "#RêveDeRichesse 💰",
    "#InvestissementsIntelligents 💼💡",
    "#ObjectifsFinanciers 🎯",
    "#StyleDeVieEnOr 💎",
    "#AbondanceMonétaire 🏦💰",
    "#CultiverLesDollars 🌱💵",
    "#OpportunitésLucratives 🔍💼",
    "#GestionDePatrimoine 📈🏦",
    "#StratégiesFinancières 💹",
    "#EmpireMonétaire 🏰💸",
    "#VoiedelaProspérité 🛤️💰",
    "#RichesseEnDevenir 🌟💵",
    "#InvestirPourRéussir 📊💹",
    "#LibertéFinancière 🗽💰",
    "#CroissanceMonétaire 📈💸",
    "#PlanifierPourLeFutur 📅💰",
    "#PasDeLimites 💰🚀",
    "#PasDeRêveTropGrand 💎🌌",
    "#PouvoirDuDollar 💵💪",
    "#CréerDeLaRichesse 🌱💰",
    "#StratégieMonétaire 💼📈",
    "#ObjectifsDeRichesse 💰🎯",
    "#CheminVersLaProsperité 🌞💸",
    "#PossibilitésMonétaires 🌐💰"
);


$feeds = array();
for ($i = 1; $i <= 50; $i++) {
    $full_name = $full_names[array_rand($full_names)];
    $profilePicture = $profilePictures[array_rand($profilePictures)];
    $duration = $durations[array_rand($durations)];
    $location = $locations[array_rand($locations)];
    $picture = $pictures[array_rand($pictures)];
    $description = $descriptions[array_rand($descriptions)];
    $hashTag = $hashTags[array_rand($hashTags)];
    $userlikeds = [
        'name' => $full_names[array_rand($full_names)],
        'number' => rand(3, 1000),
        'description' => 'comments others'
    ];

    $likes = [
        'first' => $likedBy[array_rand($likedBy)],
        'second' => $likedBy[array_rand($likedBy)],
        'third' => $likedBy[array_rand($likedBy)]
    ];

    $titleLegend = $titleLegends[array_rand($titleLegends)];

    $feed = new Feed($i, $titleLegend, $full_name, $profilePicture, $duration, $location, $picture, $likes, $userlikeds, $description, $hashTag);
    $feeds[] = $feed;
}
