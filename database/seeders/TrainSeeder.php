<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    public function run() :void
    {
        $train= new Train();
        $train->stazione_partenza = 'Napoli';
        $train->stazione_arrivo = 'Bari vecchia';
        $train->orario_partenza = '08:00';
        $train->orario_arrivo = '14:20';
        $train->codice_treno = 'NB1234';
        $train->numero_carrozze = 5;
        $train->in_orario = true;
        $train->cancellato = false;
        $train->prezzo = '25.99';
        $train->save();
            
        

        $train= new Train();
        $train->stazione_partenza = 'Napoli2';
        $train->stazione_arrivo = 'Bari vecchia2';
        $train->orario_partenza = '08:00';
        $train->orario_arrivo = '14:20';
        $train->codice_treno = 'NB2342';
        $train->numero_carrozze = 5;
        $train->in_orario = true;
        $train->cancellato = false;
        $train->prezzo = '25.99';
        $train->save();
            
          
            
       


       
    }
}

