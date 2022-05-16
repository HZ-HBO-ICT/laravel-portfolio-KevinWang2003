<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'title' => 'Studiekeuze',
                'excerpt' => 'Mijn reden voor deze Studiekeuze',
                'body' =>
                    'Voordat ik deze opleiding had gekozen had ik twee open dagen online bezocht
                    (Informatica en Technische Informatica bij het Avans in Breda, HBO-ICT bij het HZ)
                    en een studiekeuze test gedaan.
                    De reden waarvoor ik deze studie heb gekozen is dat je met HBO-ICT meer kans hebt op een baan.
                    Bij de studie krijg je ook meer kennis over het programmeren
                     en de verschillende programmeertalen die je kunt gebruiken.
                    Na de opleiding wil ik misschien Software Engineer worden,
                    omdat ik zelf software wil schrijven en een app of game wil programmeren.
                    Ik hoop dat ik na 4 jaar verschillende code talen beheerst.',
            ],
            [
                'title' => 'SWOT',
                'excerpt' => 'Mijn Sterktepunten, Weaknesses, Opportunities en Risicos',
                'body' =>
                    'Mijn sterke punten zijn: Samenwerken en individueel werken.
                     Ik kan goed omgaan met teamgenoten en ik kan ook goed alleen werken.
                     Mijn Weakness is:
                     Plannen, soms kom ik in tijdnoot en krijg ik stres.
                     Mijn opportunities zijn:
                     Portfolio en CV bijvullen,
                     Als ik een baan ga zoeken kunnen ze zien waar ik dan goed in ben en wat voor ervaring ik heb.
                     Mijn Risico is:
                     Werkverdeling binnen een groep. Het kan zo zijn dat niet iedereen evenveel doet.',
            ],
            [
                'title' => 'Programmeerervaring',
                'excerpt' => 'Mijn programmeerervaring voordat ik op het HZ Studeer',
                'body' =>
                    'Voordat ik naar deze school kwam,
                     had ik al wat programmeer ervaring gekregen van mijn middelbare school.
                     Voor Informatica moest ik een Website programmeren via HTML, CSS en Javascript.
                     Ik moest ook nog een app programmeren voor Onderzoek en Ontwerp.
                     Dit deed ik eerst met Swift op xCode,
                     maar dit was wat ingewikkeld dus deed ik het via Node.js.',
            ],
            [
                'title' => 'Feedback',
                'excerpt' => 'De feedback die ik van Daphne terug kreeg',
                'body' =>
                    'De feedback die ik gekregen heb van Daphne is:
                    "Leuk dat je bij ons ingeschreven staat. Veel van onze studenten hebben een voorkeur voor Gamen
                    en je krijgt ook zeker te maken met het ontwikkelen van een game.
                    Goed te lezen dat je zowel samen kunt werken als zelfstandig,
                    dat ga je zekere veel moeten doen op de opleiding.
                    Ik ben wel benieuwd wat de afweging is geweest tussen Avans
                    en de HZ en uiteindelijk voor ons gekozen hebt?
                    Op basis van je ingevulde profiel zie ik geen
                    bijzonderheden voor een persoonlijk gesprek maar zie je graag
                    terug bij de groepsbijeenkomst waar je nog informatie over zult krijgen."
                    De feedback was niet echt denderend. Ik heb er niet echt veel aan.',
            ],
            [
                'title' => 'ICT',
                'excerpt' => 'Wat ICT nou in houd',
                'body' =>
                    'De informatie- en communicatietechnologie (ICT),
                    is een vakgebied dat zich bezighoudt met informatiesystemen, telecommunicatie en computers.
                    Hieronder valt het ontwikkelen en beheren van systemen, netwerken, databases, games en websites.
                    Ook het onderhouden van computers en programmatuur en het schrijven van software valt hieronder.
                    Vaak gebeurt dit in een bedrijfskundige context.
                    Onder communicatietechnologie worden communicatieapparatuur- en diensten gerekend.
                    <a href="https://www.talentenbranche.com/ICTBranche-betekenis.html">Lees meer...</a>',
            ],
            [
                'title' => 'Beroepsbeeld',
                'excerpt' => 'Beroepsbeeld tijdens de bedrijfsmarkt',
                'body' =>
                    'HackerOne
                Dit bedrijf zoekt voor beveiligingsproblemen die weinig of veel impact hebben voor bedrijven
                zoals: Nintendo, Paypal, Starbucks and etc.
                Die beschreven bedrijven huren hackers van HackerOne in om beveiligingsproblemen te zoeken
                en geven hun geld voor elk probleem die ze vinden.
                Ze kunnen wel 15k verdienen.
                HackerOne werkt in verschilllende squads.
                Een squad bestaat uit:
                Engineering Manager
                Product Manager, zorgt ervoor dat de projectleider samenvalt met de bedrijfsaanwijzingen
                en heeft de informatie dat ze nodig hebben.
                Product Designer, werkt samen met de product manager en projectleider om UI en UX designs te maken.
                Project Lead, helpt het uitvogelen van het projectomgang
                en zorgt ervoor dat de andere engineers aansluiten op het project.
                4 tot 8 Engineers (Dit kan verschillen)
                Ze gebruiken scrum om hun voortgang vast te zetten.
                Concept ⮞ Project ⮞ Tasks ⮞ Code
                Eerst plannen ze, dan coderen ze heel veel, dan reflecteren ze op wat ze gedaan hebben
                en zorgen ze ervoor dat ze aansluiten op de opdrachten die ze daarna doen.
                Dat je geld kunt verdienen als je een klein probleempje hebt opgelost is best wel geweldig.
                Mening
                Het lijkt me wel moeilijk om samen te werken,
                want straks gaan er misschien wel 2 engineers werken aan 1 opdracht dat bedoeld is voor een persoon.
                Guerrilla
                Dit bedrijf is een AAA-studio die games ontwikkelt.
                De bekendste game die het bedrijf heeft ontwikkelt, is "Horizon Zero Dawn".
                Er werken 270 mensen bij Guerrilla.
                De programmeertalen die ze hiervoor gebruiken is Python scripting,
                Maya MotionBuilder, key-framed animation,
                C++, 3D and graphics-related algorithms, Maya API, 3D packages, node-based shader building tools
                (Unreal Engine, Maya hypershade, etc.), Houdini, Popcorn FX simulation software,
                (Houdini, Embergen, FumeFX, Realflow, etc.
                Cascase, Java server development experience, web-related technologie (e.g. HTTP, REST, Message Queuing)
                , Git, Perforce, Zbrush, Photoshop, Substance en industry standard game editors.
                De vaardigheden
                Bij Guerrilla heb je 4 soorten banen:
                Programmeurs, auteurs, animatoren en producenten.
                Voor programmeur heb je 4 jaar ervaring nodig in de game-industrie, en moet je goed C++ kunnen.
                Om auteur te worden moet je veel weten over open wereld RPG-games,
                en moet je 3 voorbeelden geven van drama conflicten.
                Als animator moet je Maya en Motionbuilder kennen en animaties kunnen maken.
                En een producent moet 4 jaar ervaring hebben en weten hoe je moderne management tools gebruikt.
                Stageprogramma:
                20 weken
                Minimaal 18 jaar oud
                In het 3e of 4e jaar van de studie
                Mening
                Ik vind dat het wel cool is dat ze kennis hebben over heel veel programmeertalen beschikken.
                Het nadeel wel is dat je veel programmeertalen moet leren.',
            ],

        ]);
    }
}
