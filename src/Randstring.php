<?php

namespace Jamosaur\Randstring;

class Randstring
{
    private $colours = [
        'Alizarin',
        'Amaranth',
        'Amber',
        'Amethyst',
        'Apricot',
        'Aqua',
        'Aquamarine',
        'Asparagus',
        'Auburn',
        'Azure',
        'Beige',
        'Bistre',
        'Black',
        'Blue',
        'BlueGreen',
        'BlueViolet',
        'BondiBlue',
        'Brass',
        'Bronze',
        'Brown',
        'Buff',
        'Burgundy',
        'BurntOrange',
        'BurntSienna',
        'BurntUmber',
        'CamouflageGreen',
        'CaputMortuum',
        'Cardinal',
        'Carmine',
        'Carrotorange',
        'Celadon',
        'Cerise',
        'Cerulean',
        'Champagne',
        'Charcoal',
        'Chartreuse',
        'CherryBlossomPink',
        'Chestnut',
        'Chocolate',
        'Cinnabar',
        'Cinnamon',
        'Cobalt',
        'Copper',
        'Coral',
        'Corn',
        'Cornflower',
        'Cream',
        'Crimson',
        'Cyan',
        'Dandelion',
        'Denim',
        'Ecru',
        'Emerald',
        'Eggplant',
        'Falured',
        'Ferngreen',
        'Firebrick',
        'Flax',
        'Forestgreen',
        'FrenchRose',
        'Fuchsia',
        'Gamboge',
        'Gold',
        'Goldenrod',
        'Green',
        'Grey',
        'HanPurple',
        'Harlequin',
        'Heliotrope',
        'HollywoodCerise',
        'Indigo',
        'Ivory',
        'Jade',
        'Kellygreen',
        'Khaki',
        'Lavender',
        'Lawngreen',
        'Lemon',
        'Lemonchiffon',
        'Lilac',
        'Lime',
        'Limegreen',
        'Linen',
        'Magenta',
        'Magnolia',
        'Malachite',
        'Maroon',
        'Mauve',
        'MidnightBlue',
        'Mintgreen',
        'Mistyrose',
        'Mossgreen',
        'Mustard',
        'Myrtle',
        'Navajowhite',
        'NavyBlue',
        'Ochre',
        'Officegreen',
        'Olive',
        'Olivine',
        'Orange',
        'Orchid',
        'Papayawhip',
        'Peach',
        'Pear',
        'Periwinkle',
        'Persimmon',
        'PineGreen',
        'Pink',
        'Platinum',
        'Plum',
        'Powderblue',
        'Puce',
        'Prussianblue',
        'Psychedelicpurple',
        'Pumpkin',
        'Purple',
        'QuartzGrey',
        'Rawumber',
        'Razzmatazz',
        'Red',
        'Robineggblue',
        'Rose',
        'Royalblue',
        'Royalpurple',
        'Ruby',
        'Russet',
        'Rust',
        'Safetyorange',
        'Saffron',
        'Salmon',
        'Sandybrown',
        'Sangria',
        'Sapphire',
        'Scarlet',
        'Schoolbusyellow',
        'SeaGreen',
        'Seashell',
        'Sepia',
        'Shamrockgreen',
        'ShockingPink',
        'Silver',
        'SkyBlue',
        'Slategrey',
        'Smalt',
        'Springbud',
        'Springgreen',
        'Steelblue',
        'Tan',
        'Tangerine',
        'Taupe',
        'Teal',
        'Tawny',
        'Terracotta',
        'Thistle',
        'TitaniumWhite',
        'Tomato',
        'Turquoise',
        'TyrianPurple',
        'Ultramarine',
        'VanDykeBrown',
        'Vermilion',
        'Violet',
        'Viridian',
        'Wheat',
        'White',
        'Wisteria',
        'Xanthic',
        'Yellow',
        'Zucchini',
    ];

    private $animals = [
        'Abyssinian',
        'AdeliePenguin',
        'Affenpinscher',
        'AfghanHound',
        'AfricanBushElephant',
        'AfricanCivet',
        'AfricanClawedFrog',
        'AfricanForestElephant',
        'AfricanPalmCivet',
        'AfricanPenguin',
        'AfricanTreeToad',
        'AfricanWildDog',
        'AinuDog',
        'AiredaleTerrier',
        'Akbash',
        'Akita',
        'AlaskanMalamute',
        'Albatross',
        'AldabraGiantTortoise',
        'Alligator',
        'AlpineDachsbracke',
        'AmericanBulldog',
        'AmericanCockerSpaniel',
        'AmericanCoonhound',
        'AmericanEskimoDog',
        'AmericanFoxhound',
        'AmericanPitBullTerrier',
        'AmericanStaffordshireTerrier',
        'AmericanWaterSpaniel',
        'AnatolianShepherdDog',
        'Angelfish',
        'Ant',
        'Anteater',
        'Antelope',
        'AppenzellerDog',
        'ArcticFox',
        'ArcticHare',
        'ArcticWolf',
        'Armadillo',
        'AsianElephant',
        'AsianGiantHornet',
        'AsianPalmCivet',
        'AsiaticBlackBear',
        'AustralianCattleDog',
        'AustralianKelpieDog',
        'AustralianMist',
        'AustralianShepherd',
        'AustralianTerrier',
        'Avocet',
        'Axolotl',
        'AyeAye',
        'Baboon',
        'BactrianCamel',
        'Badger',
        'Balinese',
        'BandedPalmCivet',
        'Bandicoot',
        'Barb',
        'BarnOwl',
        'Barnacle',
        'Barracuda',
        'BasenjiDog',
        'BaskingShark',
        'BassetHound',
        'Bat',
        'BavarianMountainHound',
        'Beagle',
        'Bear',
        'BeardedCollie',
        'BeardedDragon',
        'Beaver',
        'BedlingtonTerrier',
        'Beetle',
        'BengalTiger',
        'BerneseMountainDog',
        'BichonFrise',
        'Binturong',
        'Bird',
        'BirdsOfParadise',
        'Birman',
        'Bison',
        'BlackBear',
        'BlackRhinoceros',
        'BlackRussianTerrier',
        'BlackWidowSpider',
        'Bloodhound',
        'BlueLacyDog',
        'BlueWhale',
        'BluetickCoonhound',
        'Bobcat',
        'BologneseDog',
        'Bombay',
        'Bongo',
        'Bonobo',
        'Booby',
        'BorderCollie',
        'BorderTerrier',
        'BorneanOrang-utan',
        'BorneoElephant',
        'BostonTerrier',
        'BottleNosedDolphin',
        'BoxerDog',
        'BoykinSpaniel',
        'BrazilianTerrier',
        'BrownBear',
        'Budgerigar',
        'Buffalo',
        'BullMastiff',
        'BullShark',
        'BullTerrier',
        'Bulldog',
        'Bullfrog',
        'BumbleBee',
        'Burmese',
        'BurrowingFrog',
        'Butterfly',
        'ButterflyFish',
        'Caiman',
        'CaimanLizard',
        'CairnTerrier',
        'Camel',
        'CanaanDog',
        'Capybara',
        'Caracal',
        'CarolinaDog',
        'Cassowary',
        'Cat',
        'Caterpillar',
        'Catfish',
        'CavalierKingCharlesSpaniel',
        'Centipede',
        'CeskyFousek',
        'Chameleon',
        'Chamois',
        'Cheetah',
        'ChesapeakeBayRetriever',
        'Chicken',
        'Chihuahua',
        'Chimpanzee',
        'Chinchilla',
        'ChineseCrestedDog',
        'Chinook',
        'ChinstrapPenguin',
        'Chipmunk',
        'ChowChow',
        'Cichlid',
        'CloudedLeopard',
        'ClownFish',
        'ClumberSpaniel',
        'Coati',
        'Cockroach',
        'CollaredPeccary',
        'Collie',
        'CommonBuzzard',
        'CommonFrog',
        'CommonLoon',
        'CommonToad',
        'Coral',
        'CottontopTamarin',
        'Cougar',
        'Cow',
        'Coyote',
        'Crab',
        'Crab-EatingMacaque',
        'Crane',
        'CrestedPenguin',
        'Crocodile',
        'CrossRiverGorilla',
        'CurlyCoatedRetriever',
        'Cuscus',
        'Cuttlefish',
        'Dachshund',
        'Dalmatian',
        'DarwinsFrog',
        'Deer',
        'DesertTortoise',
        'DeutscheBracke',
        'Dhole',
        'Dingo',
        'Discus',
        'DobermanPinscher',
        'Dodo',
        'Dog',
        'DogoArgentino',
        'DogueDeBordeaux',
        'Dolphin',
        'Donkey',
        'Dormouse',
        'Dragonfly',
        'Drever',
        'Duck',
        'Dugong',
        'Dunker',
        'DuskyDolphin',
        'DwarfCrocodile',
        'Eagle',
        'Earwig',
        'EasternGorilla',
        'EasternLowlandGorilla',
        'Echidna',
        'EdibleFrog',
        'EgyptianMau',
        'ElectricEel',
        'Elephant',
        'ElephantSeal',
        'ElephantShrew',
        'EmperorPenguin',
        'EmperorTamarin',
        'Emu',
        'EnglishCockerSpaniel',
        'EnglishShepherd',
        'EnglishSpringerSpaniel',
        'EntlebucherMountainDog',
        'EpagneulPontAudemer',
        'EskimoDog',
        'EstrelaMountainDog',
        'Falcon',
        'FennecFox',
        'Ferret',
        'FieldSpaniel',
        'FinWhale',
        'FinnishSpitz',
        'Fire-BelliedToad',
        'Fish',
        'FishingCat',
        'Flamingo',
        'FlatCoatRetriever',
        'Flounder',
        'Fly',
        'FlyingSquirrel',
        'Fossa',
        'Fox',
        'FoxTerrier',
        'FrenchBulldog',
        'Frigatebird',
        'FrilledLizard',
        'Frog',
        'FurSeal',
        'GalapagosPenguin',
        'GalapagosTortoise',
        'Gar',
        'Gecko',
        'GentooPenguin',
        'GeoffroysTamarin',
        'Gerbil',
        'GermanPinscher',
        'GermanShepherd',
        'Gharial',
        'GiantAfricanLandSnail',
        'GiantClam',
        'GiantPandaBear',
        'GiantSchnauzer',
        'Gibbon',
        'GilaMonster',
        'Giraffe',
        'GlassLizard',
        'GlowWorm',
        'Goat',
        'GoldenLionTamarin',
        'GoldenOriole',
        'GoldenRetriever',
        'Goose',
        'Gopher',
        'Gorilla',
        'Grasshopper',
        'GreatDane',
        'GreatWhiteShark',
        'GreaterSwissMountainDog',
        'GreenBee-Eater',
        'GreenlandDog',
        'GreyMouseLemur',
        'GreyReefShark',
        'GreySeal',
        'Greyhound',
        'GrizzlyBear',
        'Grouse',
        'GuineaFowl',
        'GuineaPig',
        'Guppy',
        'HammerheadShark',
        'Hamster',
        'Hare',
        'Harrier',
        'Havanese',
        'Hedgehog',
        'HerculesBeetle',
        'HermitCrab',
        'Heron',
        'HighlandCattle',
        'Himalayan',
        'Hippopotamus',
        'HoneyBee',
        'HornShark',
        'HornedFrog',
        'Horse',
        'HorseshoeCrab',
        'HowlerMonkey',
        'Human',
        'HumboldtPenguin',
        'Hummingbird',
        'HumpbackWhale',
        'Hyena',
        'Ibis',
        'IbizanHound',
        'Iguana',
        'Impala',
        'IndianElephant',
        'IndianPalmSquirrel',
        'IndianRhinoceros',
        'IndianStarTortoise',
        'IndochineseTiger',
        'Indri',
        'Insect',
        'IrishSetter',
        'IrishWolfHound',
        'JackRussel',
        'Jackal',
        'Jaguar',
        'JapaneseChin',
        'JapaneseMacaque',
        'JavanRhinoceros',
        'Javanese',
        'Jellyfish',
        'Kakapo',
        'Kangaroo',
        'KeelBilledToucan',
        'KillerWhale',
        'KingCrab',
        'KingPenguin',
        'Kingfisher',
        'Kiwi',
        'Koala',
        'KomodoDragon',
        'Kudu',
        'Labradoodle',
        'LabradorRetriever',
        'Ladybird',
        'Leaf-TailedGecko',
        'Lemming',
        'Lemur',
        'Leopard',
        'LeopardCat',
        'LeopardSeal',
        'LeopardTortoise',
        'Liger',
        'Lion',
        'Lionfish',
        'LittlePenguin',
        'Lizard',
        'Llama',
        'Lobster',
        'Long-EaredOwl',
        'Lynx',
        'MacaroniPenguin',
        'Macaw',
        'MagellanicPenguin',
        'Magpie',
        'MaineCoon',
        'MalayanCivet',
        'MalayanTiger',
        'Maltese',
        'Manatee',
        'Mandrill',
        'MantaRay',
        'MarineToad',
        'Markhor',
        'MarshFrog',
        'MaskedPalmCivet',
        'Mastiff',
        'Mayfly',
        'Meerkat',
        'Millipede',
        'MinkeWhale',
        'Mole',
        'Molly',
        'Mongoose',
        'Mongrel',
        'MonitorLizard',
        'Monkey',
        'MonteIberiaEleuth',
        'Moorhen',
        'Moose',
        'MorayEel',
        'Moth',
        'MountainGorilla',
        'MountainLion',
        'Mouse',
        'Mule',
        'Neanderthal',
        'NeapolitanMastiff',
        'Newfoundland',
        'Newt',
        'Nightingale',
        'NorfolkTerrier',
        'NorwegianForest',
        'Numbat',
        'NurseShark',
        'Ocelot',
        'Octopus',
        'Okapi',
        'OldEnglishSheepdog',
        'Olm',
        'Opossum',
        'Orang-utan',
        'Ostrich',
        'Otter',
        'Oyster',
        'Pademelon',
        'Panther',
        'Parrot',
        'PatasMonkey',
        'Peacock',
        'Pekingese',
        'Pelican',
        'Penguin',
        'Persian',
        'Pheasant',
        'PiedTamarin',
        'Pig',
        'Pika',
        'Pike',
        'PinkFairyArmadillo',
        'Piranha',
        'Platypus',
        'Pointer',
        'PoisonDartFrog',
        'PolarBear',
        'PondSkater',
        'Poodle',
        'PoolFrog',
        'Porcupine',
        'Possum',
        'Prawn',
        'ProboscisMonkey',
        'PufferFish',
        'Puffin',
        'Pug',
        'Puma',
        'PurpleEmperor',
        'PussMoth',
        'PygmyHippopotamus',
        'PygmyMarmoset',
        'Quail',
        'Quetzal',
        'Quokka',
        'Quoll',
        'Rabbit',
        'Raccoon',
        'RaccoonDog',
        'RadiatedTortoise',
        'Ragdoll',
        'Rat',
        'Rattlesnake',
        'RedKneeTarantula',
        'RedPanda',
        'RedWolf',
        'Red-handedTamarin',
        'Reindeer',
        'Rhinoceros',
        'RiverDolphin',
        'RiverTurtle',
        'Robin',
        'RockHyrax',
        'RockhopperPenguin',
        'RoseateSpoonbill',
        'Rottweiler',
        'RoyalPenguin',
        'RussianBlue',
        'Sabre-ToothedTiger',
        'SaintBernard',
        'Salamander',
        'SandLizard',
        'Saola',
        'Scorpion',
        'ScorpionFish',
        'SeaDragon',
        'SeaLion',
        'SeaOtter',
        'SeaSlug',
        'SeaSquirt',
        'SeaTurtle',
        'SeaUrchin',
        'Seahorse',
        'Seal',
        'Serval',
        'Sheep',
        'ShihTzu',
        'Shrimp',
        'Siamese',
        'SiameseFightingFish',
        'Siberian',
        'SiberianHusky',
        'SiberianTiger',
        'SilverDollar',
        'Skunk',
        'Sloth',
        'SlowWorm',
        'Snail',
        'Snake',
        'SnappingTurtle',
        'Snowshoe',
        'SnowyOwl',
        'Somali',
        'SouthChinaTiger',
        'SpadefootToad',
        'Sparrow',
        'SpectacledBear',
        'SpermWhale',
        'SpiderMonkey',
        'SpinyDogfish',
        'Sponge',
        'Squid',
        'Squirrel',
        'SquirrelMonkey',
        'SriLankanElephant',
        'StaffordshireBullTerrier',
        'StagBeetle',
        'Starfish',
        'StellersSeaCow',
        'StickInsect',
        'Stingray',
        'Stoat',
        'StripedRocketFrog',
        'SumatranElephant',
        'SumatranOrang-utan',
        'SumatranRhinoceros',
        'SumatranTiger',
        'SunBear',
        'Swan',
        'Tang',
        'Tapir',
        'Tarsier',
        'TasmanianDevil',
        'TawnyOwl',
        'Termite',
        'Tetra',
        'ThornyDevil',
        'TibetanMastiff',
        'Tiffany',
        'Tiger',
        'TigerSalamander',
        'TigerShark',
        'Tortoise',
        'Toucan',
        'TreeFrog',
        'Tropicbird',
        'Tuatara',
        'Turkey',
        'TurkishAngora',
        'Uakari',
        'Uguisu',
        'Umbrellabird',
        'VampireBat',
        'VervetMonkey',
        'Vulture',
        'Wallaby',
        'Walrus',
        'Warthog',
        'Wasp',
        'WaterBuffalo',
        'WaterDragon',
        'WaterVole',
        'Weasel',
        'WelshCorgi',
        'WestHighlandTerrier',
        'WesternGorilla',
        'WesternLowlandGorilla',
        'WhaleShark',
        'Whippet',
        'WhiteFacedCapuchin',
        'WhiteRhinoceros',
        'WhiteTiger',
        'WildBoar',
        'Wildebeest',
        'Wolf',
        'Wolverine',
        'Wombat',
        'Woodlouse',
        'Woodpecker',
        'WoollyMammoth',
        'WoollyMonkey',
        'Wrasse',
        'X-RayTetra',
        'Yak',
        'Yellow-EyedPenguin',
        'YorkshireTerrier',
        'Zebra',
        'ZebraShark',
        'Zebu',
        'Zonkey',
        'Zorse',
    ];

    private $min;
    private $max;
    private $case;
    private $maxLength;

    private $string;

    /**
     * Randstring constructor.
     * @param string $case
     * @param int $min
     * @param int $max
     */
    public function __construct($case = null, $maxLength = 100, $min = 1, $max = 99)
    {
        $this->case         = $case;
        $this->maxLength    = $maxLength;
        $this->min          = $min;
        $this->max          = $max;
    }

    public function generateString()
    {
        $colour         = $this->colours[rand(0, count($this->colours)-1)];
        $animal         = $this->animals[rand(0, count($this->animals)-1)];
        $number         = rand($this->min, $this->max);

        $this->string   = $colour.$animal.$number;
    }

    public function generate()
    {
        $this->generateString();
        if (strlen($this->string) > $this->maxLength) {
            return $this->generate();
        }

        $string = $this->string;

        if ($this->case) {
            return ucfirst(strtolower($string));
        }
        return $string;
    }
}
