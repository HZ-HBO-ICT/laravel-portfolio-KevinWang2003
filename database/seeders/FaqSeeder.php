<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            [
                'question' => '1. Hoe print je een document hier op de HZ?',
                'answer' => 'print.hz.nl',
                'link' => 'https://print.hz.nl'
            ],
            [
                'question' => '2. Hoe scan je een document en stuur je dit naar je laptop hier op de HZ?',
                'answer' => '<p>Als je verbonden bent met de printer kan je je HZ pas scannen en dan met de printer inscannen.</p>
                             <p>Het PDF bestand zou automatisch op je computer moeten komen.</p>',
                'link' => ''
            ],
            [
                'question' => '3. Wat moet je doen als je ziek bent of symptomen van het corona virus?',
                'answer' => '<p>Als je ziek bent of coronaklachten hebt moet je echt niet naar school komen</p>
                             <p>en het je docent via teams laten weten.</p>
                             <p>Volg alle lessen zodat je geen achterstand oploopt</p>',
                'link' => ''
            ],
            [
                'question' => '4. Hoe kun je een projectruimte boeken in één van de vleugels van het gebouw?',
                'answer' => '<p>Als je inlogt op MYHZ kan je via je Persoonlijk Menu naar Selfservice Portal gaan. </p>
                             <p>Vanuit hier kan je een nieuwe reservering aanvragen.</p>
                             <p>Hierna kies je een tijdspan voor wanneer je de ruimte wil huren en ben je klaar.</p>',
                'link' => ''
            ],
            [
                'question' => '5. Wat zijn de instructies om je auto te parkeren op het HZ parkeerterrein?',
                'answer' => '<p>Gratis parkeren is mogelijk op het parkeerterrein van PZEM aan de Poelendaelesingel 10 in Middelburg.</p>
                             <p>Dit is op een paar minuten lopen afstand naar de HZ.</p>
                             <p>Het is helaas niet mogelijk om direct bij het HZ-pand te parkeren.</p>
                             <p>Bij het pand zelf zijn wel twee invalideplaatsen en plekken voor HZ-auto’s.</p>
                             <p>Let op, parkeer je aan de Poelendaelesingel, dan kun je niet via het tunneltje de HZ bereiken</p>
                             <p>i.v.m. de bouwwerkzaamheden voor het Joint Research Center Zeeland.</p>
                             <p>Je kan via het kruispunt bij de stoplichten oversteken.</p>',
                'link' => ''
            ],
        ]);
    }
}
