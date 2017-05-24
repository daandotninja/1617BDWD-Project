<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'description' => 'De Sauvignon -druiven voor deze wijn zijn onder ideale omstandigheden volgroeid en zeer voorzichtig geperst. Het resultaat is een heerlijke fris-fruitige, witte wijn met een intense geur van tropisch fruit en groene appelen met een hint van venkel. De smaak is mooi evenwichtig en geconcentreerd met een lange, elegante afdronk.',
            'price' => 9.60,
            'title' => 'Las Torres Sauvignon blanc',
            'year' => 2013,
            'img' => 'lastorres-sauvignonblanc-2011.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'description' => 'De Sauvignon -druiven voor deze wijn zijn onder ideale omstandigheden volgroeid en zeer voorzichtig geperst. Het resultaat is een heerlijke fris-fruitige, witte wijn met een intense geur van tropisch fruit en groene appelen met een hint van venkel. De smaak is mooi evenwichtig en geconcentreerd met een lange, elegante afdronk.',
            'price' => 9.60,
            'title' => 'Las Torres chardonnay',
            'year' => 2012,
            'img' => 'lastorres-chardonnay-2011.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'description' => 'De basiswijn in rood is onmiddellijk een topper op basis van 80%  Carmenère, waaraan een klein percentage Cabernet Sauvignon 20%  is toegevoegd, die laatste zorgt voor structuur en een langere houdbaarheid. De wijn heeft een prachtige kersenrode kleur en fijne aroma s (zwarte bessen, cassis) met tonen van balsamiek (eucalyptus). De smaak is elegant, met zachte en fruitige tannines die zorgen voor nuances van leer en kruiden (zoethout, zwarte peper, nootmuskaat). Door de rijping op Frans eikenhout heeft de wijn een aangename achtergrond van toast en vanille.',
            'price' => 10.55,
            'title' => 'Las Torres Carmenère',
            'year' => 2012,
            'img' => 'lastorres-carmenere-2010.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'description' => 'Torrontes Variatal: lichte, fris fruitige witte wijn,zelfs een beetje "crispy". Ideaal als aperitief, salades,schaal-en schelpdieren.',
            'price' => 6.50,
            'title' => 'Bodega Norton Torrontes La Colonia ',
            'year' => 2016,
            'img' => 'bodega-norton-la-colonia-torrontes-2012.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'description' => 'Lekkere sappige, kruidige wijn. Mooie passe partout bij bbq en charcuterie. Een rode gemaakt op zn fruit met een lichte zachte kruidigheid. ',
            'price' => 6.50,
            'title' => 'Bodega Norton Malbec La Colonia',
            'year' => 2015,
            'img' => 'bodega-norton-la-colonia-malbec-2012.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'description' => 'Bodega Norton ligt in de vallei van de Mendoza River aan de uitlopers van het Andesgebergte in Luján de Cuyo. Het moderne tijdperk van deze bodega begon in 1989 toen het bedrijf werd overgenomen door de huidige eigenaar Gernot Langes-Swarovski.  Deze vooraanstaande Oostenrijkse zakenman heeft de begrippen kwaliteit en overtuiging, inherent aan de productie van wijnen met een wereldwijde reputatie, hoog in het vaandel staan. Zijn zoon Michael is verantwoordelijk voor de dagelijkse leiding van de bodega. Met zijn team van experts is hij erin geslaagd de onderneming op ambitieuze wijze te moderniseren en geleidelijk het aantal wijngaarden uit te breiden tot meer dan 1.200 hectaren, terwijl de filosofie om wijnen van grote kwaliteit te produceren, gehandhaafd bleef. ',
            'price' => 8.50,
            'title' => 'Norton Malbec Barrel Selected',
            'year' => 2012,
            'img' => 'bodega-norton-barrelselect-malbec-2009.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'description' => 'is een van de grootste wijnmerken ter wereld en afkomstig uit Australië. Opgericht in 1844 door Dr. Christopher Rawson Penfold die geëmigreerd was van Engeland naar Zuid-Australië. Hij plantte wijnstokken afkomstig uit Frankrijk in Adelaide. Deze behoren nu tot het oudste wijnmateriaal van de wereld. De Australische wijnindustrie, en dus ook Penfolds, veranderde dramatisch in 1950 met de komst van Max Schubert die de Grange en de Bin wijnen bedacht. Vandaag de dag is wijnmaker Peter Gago de “Guardian of Grange” en bepaalt hij de norm voor alle Penfolds wijnen. De reputatie van Penfolds is gebaseerd op consitentie van stijl en kwaliteit, met minimale variatie in druivensoorten. Simpelweg de stijl is drievoudig, of zoals Jame Halliday zegt: “rijk, zoet rijp fruit met veel invloed van het eikenhout, mooi geïntegreerd in de structuur en de smaak van de wijn dat tot uiting komt in rondheid en volheid."',
            'price' => 11.95,
            'title' => 'Penfolds koonunga Hill Chardonnay',
            'year' => 2015,
            'img' => 'penfolds-koonungahill-chardonnay-2010.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'description' => 'Houtgelagerde rode wijn met de typische zoete kruidigheid van een mondvullende, fruitige Australische shiraz gecombineerd met de krachtige tannines van cabernet sauvignon.',
            'price' => 13.45,
            'title' => 'Penfolds Koonunga Hill Cabernet- Shiraz',
            'year' => 2014,
            'img' => 'Penfolds_2011_Koonunga_Hill_Shiraz_Cabernet_SC.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'description' => 'Klein wijndomein van 2 hectaren aangeplant in 2003 met een eerste oogst in 2005  Er zijn 3 verschillende wijngaarden gelegen in Lustin, tussen Namen en Dinant langs de Maas. Een vierde wijngaard van 15 ha werd aangeplant in 2011 nabij Dinant. De druivenrassen die aangeplant werden zijn aangepast aan de bodemstructuur en daarvan worden 8 mono-cépage wijnen gemaakt. De gemiddelde opbrengst per hectare is 30 hl en de wijnmaker  eigenaar Jeanette Vandersteen besteedt enorm veel werk in de wijngaard om een topkwaliteit te bekomen. De wijnbouw gebeurt zo goed als biologisch zonder gebruik van herbicide, pesticide en in de kelder geen enzymen en stabilisatoren enkel de modernste vinificatiemiddelen  De wijnen zijn nog jong en kunnen een flesrijping goed gebruiken.',
            'price' => 15.75,
            'title' => 'Bon Baron Muller Thurgau - 2015',
            'year' => 2015,
            'img' => 'bon-baron-mullerthurgau-2011.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'description' => 'Deze Belgische Pinot Blanc blinkt uit in z’n mineraliteit en exotisch fruit en is zelf een beetje bloemig. De kalkbodems aan de banken van de Maas zorgen voor de complexiteit. 
				Een wijn met evenwichtige fruitige zuren en toch een hint van rijpe tropische vruchten (passievruchten) in de mond.Perfect bij vette vis, wit vlees en gerechten met een Oosterse twist.',
            'price' => 19.25,
            'title' => 'Bon Baron Pinot Blanc',
            'year' => 2014,
            'img' => 'chateau-bon-baron-auxerrois-2011.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'description' => 'De wijnbouw gebeurt zo goed als biologisch zonder gebruik van herbicide, pesticide en in de kelder geen enzymen en stabilisatoren enkel de modernste vinificatiemiddelen  De wijnen zijn nog jong en kunnen een flesrijping goed gebruiken. Om te zien waar de wijnen internationaal staan, werden de vorige jaren de wijnen ingestuurd voor wedstrijden.',
            'price' => 19.25,
            'title' => 'Bon Baron Chardonnay ',
            'year' => 2014,
            'img' => 'bon-baron-chardonnay-2009.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'description' => 'Klein wijndomein van 2 hectaren aangeplant in 2003 met een eerste oogst in 2005  Er zijn 3 verschillende wijngaarden gelegen in Lustin, tussen Namen en Dinant langs de Maas. Een vierde wijngaard van 15 ha werd aangeplant in 2011 nabij Dinant. De druivenrassen die aangeplant werden zijn aangepast aan de bodemstructuur en daarvan worden 8 mono-cépage wijnen gemaakt. De gemiddelde opbrengst per hectare is 30 hl en de wijnmaker  eigenaar Jeanette Vandersteen besteedt enorm veel werk in de wijngaard om een topkwaliteit te bekomen. De wijnbouw gebeurt zo goed als biologisch zonder gebruik van herbicide, pesticide en in de kelder geen enzymen en stabilisatoren enkel de modernste vinificatiemiddelen  De wijnen zijn nog jong en kunnen een flesrijping goed gebruiken. Om te zien waar de wijnen internationaal staan, werden de vorige jaren wijnen ingestuurd voor  wedstrijden.',
            'price' => 19.25,
            'title' => 'Bon Baron Parfondeville',
            'year' => 2013,
            'img' => 'bon-baron-parfondeville-2011.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'description' => '1 jaar gerijpt op nieuwe Franse eiken vaten in de kelders van Château Bon Baron. Cabernet is beroemd om zijn krachtige dieprode kleur en zijn complexe en karakteristieke aroma’s van rood fruit, zoals frambozen, bessen en pruimen. Serveeradvies: 18˚C Wildgerechten, stevige kazen, gepekeld vlees en in de winter bij een open haardvuur en in de zomer, iets koeler geserveerd op een terras.',
            'price' => 19.25,
            'title' => 'Château Bon Baron Cabernet',
            'year' => 2011,
            'img' => 'bon-baron-cabernet.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'description' => 'In de wijn vinden we rood en zwart fruit; frambozen, bramen, bosbessen en pruimen. Door de rijping op hout zijn er tonen van peper, paprika en vanille herkenbaar, de afdronk met edele tannines bewijst de kwaliteit. Een oudering in de kelder maakt de wijn harmonieuzer. ',
            'price' => 19.25,
            'title' => 'Château Bon Baron Acolon',
            'year' => 2011,
            'img' => 'chateau-bon-baron-acolon-2011.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'description' => 'We nodigen u uit om deze verbazende wijn uit de Spier - Discover range te proeven en te ontdekken. Deze wijn is het resultaat van een creatieve expressie, een verlangen om een welgestructureerde, fruitige wijn te produceren, die jong kan gedronken worden en die de wijnliefhebber een constante kwaliteit bezorgt. Deze lekker frisse wijn komt uit de Westkaap op een 30 à 150 Km van de oceaan. Jaarlijkse regenval 550 mm. Temperatuurgemiddelde: winter 10°C, zomer 22°C. Deze wijn is samengesteld van 60% Chenin blanc en 40% Colombard. Aromas van tropisch fruit en Citrus. In de mond rijp tropisch fruit. Verrassend fris en speels. Om nu te drinken.',
            'price' => 6.25,
            'title' => 'Spier Estate Discover chenin blanc- Chardonnay',
            'year' => 2015,
            'img' => 'spier-discover-cheninblanc-2012.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'description' => 'Volle en krachtige geur, licht ‘rokerig’, rijp zwartfruit en zacht kruidig. In de mond subtiele tannines. en een mooie afdronk. Aangenaam en vlot te drinken huiswijn. Smakelijk bij een klassieke ‘braai’ (Zuid-Afrikaans voor BBQ), een grill met pittige worstjes, lamsvlees of een mooie entrecote.',
            'price' => 6.25,
            'title' => 'Spier Estate Discover Pinotage/ shiraz',
            'year' => 2014,
            'img' => 'spier-pinotage-discover-2012.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'description' => 'We nodigen u uit om deze verbazende wijn uit de Spier - Classic range te proeven en te ontdekken. Deze wijn is het resultaat van een creatieve expressie, een verlangen om een welgestructureerde, fruitige wijn te produceren, die jong kan gedronken worden en die de wijnliefhebber een constante kwaliteit bezorgt. De wijngaard ligt op slechts 15 km van de Oceaan en zorgt ervoor dat de twaalf jaar oude wijnstruiken de nodige verfrissing krijgen om perfect te kunnen rijpen. De druiven worden met de hand gesorteerd voor het persen. Strogeel met een groene tint, toont deze witte wijn aromas van subtropisch fruit, limoen, meloen en een toets van peer. Levendig fruit in de mond zorgt voor een mooi gebalanceerd pallet. Nu op dronk. Serveren met gerookte hesp, feta en spinazie, of met tongfilet in een beetje boter. 3 sterren van John Platter.',
            'price' => 8.45,
            'title' => 'Spier Estate Signature Chenin blanc 100%',
            'year' => 2015,
            'img' => 'spier-cheninblanc.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'description' => 'Robijnrode volle rode wijn met veel rood fruit: rode bessen, veenbessen en wat rijpe cassis. In de neus ook wat zoete rode vruchten en een geroosterede toets, hint van zoethout. Mooie zachte afdronk. ',
            'price' => 8.95,
            'title' => 'Spier Estate Signature Pinotage 100%',
            'year' => 2015,
            'img' => 'spier-pinotage.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'description' => 'Deze strogele witte wijn heeft héél wat pit. Exotische vruchten en citrustoetsen in de neus, crispy wijn in de mond, mooie zuren en een lange afdronk. Perfect als aperitief of bij Japanse gerechten als dashi. ',
            'price' => 12.50,
            'title' => 'Spier Estate Vintage Selection Sauvignon Blanc',
            'year' => 2015,
            'img' => 'spier-sauvignon-blanc-2012.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'description' => 'Manuele oogst, selectie in de wijngaard, manuele triage en zeer voorzichtig persen zorgen voor een superieure kwaliteit. Rijping in franse en amerikaanse eiken vaten. Nu op dronk of tot 7-10 jaar na de oogst. Serveren bij gegrilde vis en wit vlees. Nummer 1 bij Culinair Ambiance Vijf sterren van John Platter DOUBLE GOLD op het Concours Internationale de Bruxelles!',
            'price' => 20.95,
            'title' => 'Spier Estate Private Collection 21 Gables Chenin Blanc Barrique',
            'year' => 2014,
            'img' => 'spier-private-collection-chenin-blanc-2008.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

    }
}
