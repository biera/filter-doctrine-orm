<?php declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use Biera\Filter\Binding\Doctrine\ORM\Test\Entity\Genre;
use Biera\Filter\Binding\Doctrine\ORM\Test\Entity\Movie;
use Biera\Filter\Binding\Doctrine\ORM\Test\Entity\Person;
use Biera\Filter\Binding\Doctrine\ORM\Test\Entity\Role;

$entityManager = require_once __DIR__ . '/config/entity-manager.php';

// genres
$entityManager->persist($action = new Genre('8949b4c3-e29c-4715-93d7-f8981d347241', Genre::ACTION));
$entityManager->persist($thriller = new Genre('3f098c6b-dc56-473a-99c4-9a83a6764f06', Genre::THRILLER));
$entityManager->persist($drama = new Genre('aaacc9b0-8562-4f35-989e-8988927d2c35', Genre::DRAMA));
$entityManager->persist($crime = new Genre('1cad194c-a384-4029-8685-5c57311a8291', Genre::CRIME));
$entityManager->persist($comedy = new Genre('4f22acae-fed2-4bab-9941-920e77ceb547', Genre::COMEDY));
$entityManager->persist($adventure = new Genre('9750f36a-3483-4e0b-b5aa-7aa1a8372aad', Genre::ADVENTURE));
$entityManager->persist($musical = new Genre('c1293697-0aa9-45ff-a406-5a021cc6a17f', Genre::MUSICAL));
$entityManager->persist($biography = new Genre('b244b557-b090-41b8-af8f-8831f8057eeb', Genre::BIOGRAPHY));
$entityManager->persist($horror = new Genre('6d4e8ed9-e0d0-4383-a88d-b7be7a0ee0b0', Genre::HORROR));
$entityManager->persist($romance = new Genre('a2f0eedf-8b81-4fae-9b1a-7037a7555001', Genre::ROMANCE));
$entityManager->persist($fantasy = new Genre('abf33bcf-92c8-4b00-8475-471c1c66b506', Genre::FANTASY));

// roles
$entityManager->persist($actor = new Role('11095249-dce1-45b6-8863-c3361511d7a0', Role::ACTOR));
$entityManager->persist($director = new Role('04214834-a628-49a8-944d-9a100dff571d', Role::DIRECTOR));
$entityManager->persist($screenwriter = new Role('6aca2948-e559-405e-92c3-aeec6ada3759', Role::SCREENWRITER));

// persons
$entityManager->persist(
    $ciroGuerra = new Person(
        '8fa31305-a820-4c55-a284-5d9eb8324575',
        'Ciro Guerra',
        new \DateTimeImmutable('1981-02-06'),
        [$director, $screenwriter]
    )
);

$entityManager->persist(
    $nilbioTorres = new Person(
        'a8e0717e-b11e-4b81-930a-d1126bb7630f',
        'Nilbio Torres',
        null,
        [$actor]
    )
);

$entityManager->persist(
    $janBijvoet = new Person(
        'c9dd274e-d76b-42f2-9043-2489d302beca',
        'Jan Bijvoet',
        new \DateTimeImmutable('1966-12-28'),
        [$actor]
    )
);

$entityManager->persist(
    $antonioBolivar = new Person(
        ' 78f9f6fb-0951-42c0-bf25-b62b185f6f1a',
        'Antonio Bolívar',
        null,
        [$actor]
    )
);

$entityManager->persist(
    $johnLendis = new Person(
        '42630d63-feaf-4e17-9521-a3cf9240fcdf',
        'John Lendis',
        new \DateTimeImmutable('1950-08-03'),
        [$director]
    )
);

$entityManager->persist(
    $danAykroyd = new Person(
        '1613252a-bfd8-484d-b12f-497703f5047d',
        'Dan Aykroyd',
        new \DateTime('1951-07-01'),
        [$actor, $screenwriter]
    )
);

$entityManager->persist(
    $johnBelushi = new Person(
        '7026ffff-d44d-441a-9d61-fa4dc16e3cbc',
        'John Belushi',
        new \DateTimeImmutable('1949-01-24'),
        [$actor]
    )
);

$entityManager->persist(
    $cabCalloway = new Person(
        'd6a7f3e0-d3b5-4a83-b294-ac99032dec3c',
        'Cab Calloway',
        new \DateTimeImmutable('1907-12-25'),
        [$actor]
    )
);

$entityManager->persist(
    $rayCharles = new Person(
        '9079cf34-211e-439e-97d1-09a0e3e67723',
        'Ray Charles',
        new \DateTimeImmutable('1930-09-23'),
        [$actor]
    )
);

$entityManager->persist(
    $jimSherdian = new Person(
        '4ffdc40a-4a1f-4192-8d21-bdbe4c4f358a',
        'Jim Sheridan',
        new \DateTimeImmutable('1949-02-06'),
        [$director]
    )
);

$entityManager->persist(
    $davidBenioff = new Person(
        '776dc006-7364-4508-ab55-992436e80421',
        'David Benioff',
        null,
        [$screenwriter]
    )
);

$entityManager->persist(
    $jakeGyllenhaal = new Person(
        '193fffa8-7c77-4300-8f72-6dc4b696c7ee',
        'Jake Gyllenhaal',
        new \DateTimeImmutable('1980-12-19'),
        [$actor]
    )
);

$entityManager->persist(
    $nataliePortman = new Person(
        '1836ea48-4a5c-42a0-83cb-c29d42fe2457',
        'Natalie Portman',
        new \DateTimeImmutable('1981-06-09'),
        [$actor]
    )
);

$entityManager->persist(
    $tobeyMaguire = new Person(
        '95f74d27-4708-44f8-83d7-d03d27f9be34',
        'Tobey Maguire',
        new \DateTimeImmutable('1975-06-27'),
        [$actor]
    )
);

$entityManager->persist(
    $gabrieleMuccino = new Person(
        '3e75aa4a-38cf-4c3f-9ac6-d48ebcaa83d0',
        'Gabriele Muccino',
        new \DateTimeImmutable('1967-05-20'),
        [$director]
    )
);

$entityManager->persist(
    $steveConrad = new Person(
        'd17c24bf-9c0f-481f-9255-28ffc260e633',
        'Steve Conrad',
        null,
        [$screenwriter]
    )
);

$entityManager->persist(
    $willSmith = new Person(
        '98bb1a1d-201a-40be-9dde-f4d7e26028cf',
        'Will Smith',
        new \DateTimeImmutable('1968-08-25'),
        [$actor]
    )
);

$entityManager->persist(
    $jadenSmith = new Person(
        '74ad7a36-2bed-4888-8102-399abf0f897f',
        'Jaden Smith',
        new \DateTimeImmutable('1998-07-08'),
        [$actor]
    )
);

$entityManager->persist(
    $thandiweNewton = new Person(
        '6aacc4d2-956a-44e0-879f-a5dd53ff8d6b',
        'Thandiwe Newton',
        new \DateTimeImmutable(''),
        [$actor]
    )
);

$entityManager->persist(
    $quentinTarantino = new Person(
        'fd2b03ef-7799-4d78-8207-b174e0b64107',
        'Quentin Tarantino',
        new \DateTimeImmutable('1963-03-27'),
        [$director, $screenwriter, $actor]
    )
);

$entityManager->persist(
    $pamGrier = new Person(
        'cf0b9d48-357c-4b5c-b8af-dbdbfa1485ce',
        'Pam Grier',
        new \DateTimeImmutable('1949-05-26'),
        [$actor]
    )
);

$entityManager->persist(
    $samuelLJackson = new Person(
        '726aa317-d408-410f-8fc8-02239ce7a31b',
        'Samuel L Jackson',
        new \DateTimeImmutable('1948-12-21'),
        [$actor]
    )
);

$entityManager->persist(
    $robertForster = new Person(
        '269b6105-67f9-458e-bb4f-137aa46d1323',
        'Robert Forster',
        new \DateTimeImmutable('1941-07-13'),
        [$actor]
    )
);

$entityManager->persist(
    $johnTravolta = new Person(
        'e85090de-87ca-48c3-83a3-2f61179da1ef',
        'John Travolta',
        new \DateTimeImmutable('1954-02-18'),
        [$actor]
    )
);

$entityManager->persist(
    $umaThurman = new Person(
        '31147c1b-1180-444a-a0ec-eb24813546e5',
        'Uma Thurman',
        new \DateTimeImmutable('1970-04-29'),
        [$actor]
    )
);

$entityManager->persist(
    $stanleyKubrick = new Person(
        '7a2cfa69-f9d1-4d1e-83e9-582051351ebf',
        'Stanley Kubrick',
        new \DateTimeImmutable('1928-07-26'),
        [$director, $screenwriter]
    )
);

$entityManager->persist(
    $jackNicholson = new Person(
        'fc656217-4a5f-4bd2-9b06-7e0f84712cd1',
        'Jack Nicholson',
        new \DateTimeImmutable('1937-04-22'),
        [$actor]
    )
);

$entityManager->persist(
    $shelleyDuvall = new Person(
        'b99bbb99-3388-4ac9-8ded-a754dd67b679',
        'Shelley Duvall',
        new \DateTimeImmutable('1949-07-07'),
        [$actor]
    )
);

$entityManager->persist(
    $dennisHopper = new Person(
        '82493dcc-dee1-4dab-b5ce-baa389e4e89c',
        'Dennis Hopper',
        new \DateTimeImmutable('1936-05-17'),
        [$director, $screenwriter, $actor]
    )
);

$entityManager->persist(
    $peterFonda = new Person(
        '2ddd53d7-d2e3-4952-8279-d1f556828e00',
        'Peter Fonda',
        new \DateTimeImmutable('1940-02-23'),
        [$director, $screenwriter, $actor]
    )
);

$entityManager->persist(
    $antonioBanderas = new Person(
        'cb8f3c4d-d3d5-4c2c-8df6-58c136716f13',
        'Antonio Banderas',
        new \DateTimeImmutable('1960-08-10'),
        [$actor]
    )
);

$entityManager->persist(
    $bradPitt = new Person(
        '22e8a4de-147c-4ef2-9f1a-80f92cd7ed0f',
        'Brad Pitt',
        new \DateTimeImmutable('1963-12-18'),
        [$actor]
    )
);

$entityManager->persist(
    $tomCruise = new Person(
        'df0ee835-60fa-4e9d-905d-87ae852651f1',
        'Tom Cruise',
        new \DateTimeImmutable('1962-07-03'),
        [$actor]
    )
);

$entityManager->persist(
    $kristenDunst = new Person(
        'e3627651-82c1-4932-b940-cd9b0d4bafcf',
        'Kristen Dunst',
        new \DateTimeImmutable('1982-04-30'),
        []
    )
);

$entityManager->persist(
    $neilJordan = new Person(
        '9dbae1e6-41c4-4ffb-a3c4-efc5d0e04987',
        'Neil Jordan',
        new \DateTimeImmutable('1950-02-25'),
        [$director]
    )
);

$entityManager->persist(
    $anneRice = new Person(
        '90830f28-18ef-47d3-bd16-4bfd6bb190ca',
        'Anne Rice',
        new \DateTimeImmutable('1941-10-04'),
        [$screenwriter]
    )
);

$entityManager->persist(
    $emirKusturica = new Person(
        '11f9e737-949d-4886-bce2-26e16d11eecf',
        'Emir Kusturica',
        new \DateTimeImmutable('1954-11-24'),
        [$director, $screenwriter]
    )
);

$entityManager->persist(
    $gordanMihic = new Person(
        '66ff11f6-645e-455c-9141-89e3a51a67cf',
        'Gordan Mihic',
        new \DateTimeImmutable('1983-09-19'),
        [$screenwriter]
    )
);

$entityManager->persist(
    $bajramSeverdzan = new Person(
        '94fbca76-5bf3-4a91-a3e9-51f3d87665eb',
        'Bajram Severdžan',
        null,
        [$actor]
    )
);

$entityManager->persist(
    $brankaKatic = new Person(
        'e33ee7f7-fdd7-4a44-b0ab-fc1b9d41dd36',
        'Branka Katić',
        new \DateTimeImmutable('1970-01-20'),
        [$actor]
    )
);

$entityManager->persist(
    $johnnyDepp = new Person(
        '20b80fe0-2bc6-4d41-bee4-af3109be1a2f',
        'Johnny Depp',
        new \DateTimeImmutable('1963-06-09'),
        [$actor]
    )
);

$entityManager->persist(
    $davidAtkins = new Person(
        '321c38c0-7565-4808-b798-dc563c6521e1',
        'David Atkins',
        null,
        [$screenwriter]
    )
);

$entityManager->persist(
    $liliTaylor = new Person(
        '6e05e344-45ea-463a-97ad-c26f77acfd66',
        'Lili Taylor',
        new \DateTimeImmutable('1967-02-20'),
        [$actor]
    )
);

$entityManager->persist(
    $fayeDunaway = new Person(
        '994dc408-b65a-461f-96f7-4ea17eadf156',
        'Faye Dunaway',
        new \DateTimeImmutable('1941-01-14'),
        [$actor]
    )
);

$entityManager->persist(
    $boraTodorovic = new Person(
        'b73efe72-1e4c-40cc-a681-ef9acbc67882',
        'Bora Todorović',
        new \DateTimeImmutable('1930-11-05'),
        [$actor]
    )
);

$entityManager->persist(
    $davorDujmovic = new Person(
        '22211485-5227-47dc-ac7b-e88d85b342f2',
        'Davor Dujmović',
        new \DateTimeImmutable('1969-09-20'),
        [$actor]
    )
);

$entityManager->persist(
    $ljubicaAdzovic = new Person(
        'a6b42b55-d6f0-4505-bb40-900c02c22f29',
        'Ljubica Adžović',
        null,
        [$actor]
    )
);

$entityManager->persist(
    $luisOrtega = new Person(
        'ffab874b-1c20-4d97-a88d-9f42fd54cdd5',
        'Luis Ortega',
        new \DateTimeImmutable('1980-07-12'),
        [$director, $screenwriter]
    )
);

$entityManager->persist(
    $lorenzoFerro = new Person(
        'a21a6bf9-5f89-4e1a-8ccc-92c32f0b15e3',
        'Lorenzo Ferro',
        new \DateTimeImmutable('1998-11-09'),
        [$actor]
    )
);

$entityManager->persist(
    $chinoDarrin = new Person(
        '207dc0e4-1f67-49f6-8cf4-5ca43c7713ef',
        'Chino Darrin',
        new \DateTimeImmutable('1989-01-14'),
        [$actor]
    )
);

$entityManager->persist(
    $danielFanego = new Person(
        '21e8e28a-a3e4-4ab0-b9ef-74825eaafdbc',
        'Daniel Fanego',
        new \DateTimeImmutable('1955-03-30'),
        [$actor]
    )
);

$entityManager->persist(
    $alejandroGonzalezInarritu = new Person(
        'ba277ad9-830a-4fa2-bb63-fd3002c0aa06',
        'Alejandro González Iñárritu',
        new \DateTimeImmutable('1963-08-15'),
        [$director]
    )
);

$entityManager->persist(
    $guillermoArriaga= new Person(
        'ccb24aef-461f-4310-9f54-39bdf7bdefd3',
        'Guillermo Arriaga',
        new \DateTimeImmutable('1958-03-13'),
        [$screenwriter]
    )
);

$entityManager->persist(
    $gaelGarciaBernal = new Person(
        'e5be0c71-2b5e-4aa3-b548-12d53fff062c',
        'Gael García Bernal',
        new \DateTimeImmutable('1978-11-30'),
        [$actor]
    )
);

$entityManager->persist(
    $emilioEchevarria = new Person(
        '5e77170d-5a0d-4955-9a0d-59451c87bccc',
        'Emilio Echevarría',
        null,
        [$actor]
    )
);

$entityManager->persist(
    $vanessaBauche = new Person(
        'e2d6be24-facb-4f4c-8d7f-a46cc9807642',
        'Vanessa Bauche',
        new \DateTimeImmutable('1973-02-18'),
        [$actor]
    )
);

$entityManager->persist(
    $wesAnderson = new Person(
        '586402d0-886d-47c8-9580-a4805c0e4720',
        'Wes Anderson',
        new \DateTimeImmutable('1969-05-01'),
        [$director]
    )
);

$entityManager->persist(
    $owenWilson = new Person(
        '894eba4a-9ce4-47ca-b1da-9409b68b3344',
        'Owen Wilson',
        new \DateTimeImmutable('1968-11-18'),
        [$actor, $screenwriter]
    )
);

$entityManager->persist(
    $geneHackman = new Person(
        'e30bf766-0a39-4592-bd17-aa3fc325f0f7',
        'Gene Hackman',
        new \DateTimeImmutable('1930-01-30'),
        [$actor]
    )
);

$entityManager->persist(
    $anjelicaHuston = new Person(
        '0b5d132c-df8a-4057-9967-d5bb1b06e3e7',
        'Anjelica Huston',
        new \DateTimeImmutable('1951-07-08'),
        [$actor]
    )
);

$entityManager->persist(
    $benStiller = new Person(
        'd526d85f-cd0d-496d-82c7-6470fab602aa',
        'Ben Stiller',
        new \DateTimeImmutable('1965-11-30'),
        [$actor]
    )
);

$entityManager->persist(
    $gwynethPaltrow = new Person(
        'fba722d8-57ab-409f-9d04-69bdf5e15d9d',
        'Gwyneth Paltrow',
        new \DateTimeImmutable('1972-09-27'),
        [$actor]
    )
);

$entityManager->persist(
    $lukeWilson = new Person(
        '438a03fb-9ef4-47f4-80ba-47a9ce37b450',
        'Luke Wilson',
        new \DateTimeImmutable('1971-09-20'),
        [$actor]
    )
);

//$entityManager->persist(
//    $_ = new Person(
//        '',
//        '',
//        new \DateTimeImmutable(''),
//        []
//    )
//);

// movies
$entityManager->persist(
    new Movie(
        '718a7d10-79bf-41c9-8298-1231a46de186',
        'El abrazo de la serpiente',
        125,
        [$biography, $drama, $adventure],
        $ciroGuerra,
        $ciroGuerra,
        new \DateTimeImmutable('2015-05-25'),
        [$janBijvoet, $nilbioTorres, $antonioBolivar]
    )
);

$entityManager->persist(
    new Movie(
        '4bf163b5-f43b-4447-a1d5-a930ef2cd6b5',
        'Blues Brothers',
        133,
        [$action, $crime, $comedy, $musical],
        $johnLendis,
        $danAykroyd,
        new \DateTimeImmutable('1980-06-20'),
        [$danAykroyd, $johnBelushi, $cabCalloway, $rayCharles]
    )
);

$entityManager->persist(
    new Movie(
        'da5cac0c-8a12-4afe-b841-252be080413d',
        'Brothers',
        104,
        [$action, $drama, $thriller],
        $jimSherdian,
        $davidBenioff,
        new \DateTimeImmutable('2009-11-22'),
        [$jakeGyllenhaal, $nataliePortman, $tobeyMaguire]
    )
);

$entityManager->persist(
    new Movie(
        '34815046-287c-49c0-b1c7-23d3cb50a75a',
        'The Pursuit of Happyness',
        117,
        [$biography, $drama],
        $gabrieleMuccino,
        $steveConrad,
        new \DateTimeImmutable('2006-12-15'),
        [$willSmith, $thandiweNewton, $jadenSmith]
    )
);

$entityManager->persist(
    new Movie(
        '1347719e-0fd9-495f-8fd3-e73b41b1c423',
        'Jackie Brown',
        154,
        [$crime, $thriller],
        $quentinTarantino,
        $quentinTarantino,
        new \DateTimeImmutable('1997-12-08'),
        [$pamGrier, $samuelLJackson, $robertForster]
    )
);

$entityManager->persist(
    new Movie(
        '4d415e68-5a9c-4d07-911f-1bc379afd7c7',
        'Pulp Fiction',
        154,
        [$crime, $drama],
        $quentinTarantino,
        $quentinTarantino,
        new \DateTimeImmutable('1994-05-21'),
        [$johnTravolta, $umaThurman, $samuelLJackson]
    )
);

$entityManager->persist(
    new Movie(
        '6d4ea4c6-ac06-4c60-a1a0-4d3eef54103d',
        'The shining',
        146,
        [$horror],
        $stanleyKubrick,
        $stanleyKubrick,
        new \DateTimeImmutable('1980-05-23'),
        [$jackNicholson]
    )
);

$entityManager->persist(
    new Movie(
        '8bf073b2-68c4-4d7a-b3e9-d6b517e543b9',
        'Easy Rider',
        94,
        [$adventure, $drama],
        $dennisHopper,
        $peterFonda,
        new \DateTimeImmutable('1969-05-08'),
        [$dennisHopper, $peterFonda, $jackNicholson]
    )
);

$entityManager->persist(
    new Movie(
        '939b23a2-9a8d-4d0b-be62-d7940a104381',
        'Interview with the Vampire: The Vampire Chronicles',
        123,
        [$drama, $horror],
        $neilJordan,
        $anneRice,
        new \DateTimeImmutable('1994-11-09'),
        [$bradPitt, $tomCruise, $antonioBanderas, $kristenDunst]
    )
);

$entityManager->persist(
    new Movie(
        'e2ce83d6-0ea7-4aaf-90c3-35dff4974ff1',
        'Crna mačka, beli mačor',
        120,
        [$comedy, $romance, $musical],
        $emirKusturica,
        $gordanMihic,
        new \DateTimeImmutable('1998-06-01'),
        [$bajramSeverdzan, $brankaKatic]
    )
);

$entityManager->persist(
    new Movie(
        'a3ca6c4f-dbf5-4639-876d-ea63374fded9',
        'Arizona Dream',
        142,
        [$drama, $comedy, $fantasy],
        $emirKusturica,
        $davidAtkins,
        new \DateTimeImmutable('1993-01-06'),
        [$johnnyDepp, $liliTaylor, $fayeDunaway]
    )
);

$entityManager->persist(
    new Movie(
        'b5fecfaa-3353-4ecd-8ade-7c8927cdb75b',
        'Dom za vješanje',
        142,
        [$drama, $fantasy, $comedy],
        $emirKusturica,
        $gordanMihic,
        new \DateTimeImmutable('1988-12-21'),
        [$boraTodorovic, $ljubicaAdzovic, $davorDujmovic]
    )
);

$entityManager->persist(
    new Movie(
        '9da08f33-42ad-4b96-a0b9-2a7edef98b40',
        'El ángel',
        115,
        [$biography, $drama],
        $luisOrtega,
        $luisOrtega,
        new \DateTimeImmutable('2018-05-11'),
        [$lorenzoFerro, $chinoDarrin, $danielFanego]
    )
);

$entityManager->persist(
    new Movie(
        '75d35393-2b27-4cdc-b414-87e73a07c93f',
        'Amores Perros',
        153,
        [$drama, $thriller],
        $alejandroGonzalezInarritu,
        $guillermoArriaga,
        new \DateTimeImmutable('2000-05-14'),
        [$gaelGarciaBernal, $emilioEchevarria, $vanessaBauche]
    )
);

$entityManager->persist(
    new Movie(
        '57069652-b629-4184-acc6-ba6ff549185b',
        'The Royal Tenenbaums',
        109,
        [$drama, $comedy],
        $wesAnderson,
        $owenWilson,
        new \DateTimeImmutable('2001-11-05'),
        [$geneHackman, $anjelicaHuston, $benStiller, $gwynethPaltrow, $lukeWilson, $owenWilson]
    )
);

//        $entityManager->persist(
//            new Movie(
//                '',
//                '',
//                0,
//                [],
//                $_,
//                $_,
//                new \DateTimeImmutable(''),
//                []
//            )
//        );

$entityManager->flush();
