<?php

use Illuminate\Database\Seeder;

class AboutshopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aboutshops')->insert([
            'name' => 'Alivino',
            'about' => 'Wijn en zo is een familiale wijnhandel uit Affligem die in 2005 werd opgericht. Daan startte met een piepkleine wijnkelder in het hartje van Affligem en maakte snel eufore met privé degustaties en gastentafels. In 2008 opende de deuren van de nieuwe wijnwinkel aan de vlot bereikbare Torhoutsesteenweg, dit op slechts 800 meter van shoppend Affligem.
                Daan stelt u hier graag een ruim aanbod van wijnen en delicatessen voor. Het werk van gedreven vakmensen, culinaire kunstenaars en wijnmakers. Een werk met respect voor de natuur, de terroir en de authenticiteit van de druiven, olijven en specerijen. Delphine gaat steeds op zoek naar betaalbare wijnen uit Frankrijk, Italië, Spanje, de ganse wereld rond en koestert de band met de wijnbouwer. Dit credo vertaalt zich naar de klanten toe in een persoonlijke service voor een eerlijke prijs-kwaliteitverhouding.',
            'email' => 'info@alivino.be',
            'address' => 'Kaistraat 10',
            'city' => '1790, Affligem',
            'phone' => '047996842',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
