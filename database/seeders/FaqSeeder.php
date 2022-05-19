<?php

namespace Database\Seeders;

use App\Models\faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        faq::insert([
            'question' => "Hoe kan je printen vanaf je laptop op HZ?",
            'answer' => "Je kan op meerdere plekken in het gebouw printen, deze zijn in bezit van Oce Repro. Je kan er gebruik van maken met je HZ pas. Elke verdieping heeft in de pantry ook een print/kopieervoorziening. Er staat een plotter in de Repro ruimte op de begane grond. Grote printopdrachten of inbinden van verslagen kun je terecht bij de Canon Reproshop te Edisonweg, je mailt je opdracht en kunt deze (tijdens werkdagen) binnen 24 uur ophalen bij de receptie.",
        ]);
        faq::insert([
            'question' => "Hoe scan je document en stuur je het naar je laptop op HZ?",
            'answer' => "Je gaat naar een van de printer/kopieervoorzieningen met je werkende HZ-pas, dan kan je een document scannen en daarna kan je ervoor kiezen om deze te laten sturen met e-mail."
        ]);
        faq::insert([
            'question' => "Wat moet je doen als je ziek bent / symptomen hebt van het coronavirus?",
            'answer' => "Als je je verkouden voelt of niet lekker, blijf thuis, maar geef dit wel telefonisch door aan het HZ. wanneer u ergere klachten heeft, raadpleeg dan uw huisarts.",
            'link' => "https://hz.nl/uploads/documents/20201001-Schema-Wel-of-niet-naar-de-HZ-bij-gezondheidsklachten.pdf?utm_medium=email&_hsmi=2&_hsenc=p2ANqtz-9RjSft-NQ6ivBqc_5DmVD-ywzhpfipLEfGQnfvqR16RWknzMUFjIryJfyzvf_3DAJzv8AjlBmkovRqy24LLKKcfVULgg&utm_content=2&utm_source=hs_email#asset:25736"
        ]);
        faq::insert([
            'question' => "Hoe kan je een kamertje huren in een van de 'wings'?",
            'answer' => "U kunt via de HZ site naar het 'SelfService Portal', daar kunt u klikken op 'Nieuwe reservering'. Dan klikt u op 'Reserveer projectgroep ruimten', daarna kunt u de datum/tijd/lokaal kiezen om de reservering te voltooien. Als u na 15 min van uw tijdstip er nog niet bent, vervalt de reservering.",
            'link' => "https://topdesk.hz.nl/tas/public/ssp/content/page/locationreservationplanner?from=bbe9a4bc-42b9-4e92-9e56-da44fdcde8d2"
        ]);
        faq::insert([
            'question' => "Wat zijn de instructies om te kunnen parkeren op de HZ parkeerplaats?",
            'answer' => "Aan de Poelendaelesingel 10 (het PZEM gebouw) is er plek voor ongeveer 10 auto's en kan gratis worden geparkeerd met een geldige HZ-pas. Werkt je pas niet, maar ben je wel een student. Bel dan even naar de receptie, dan doen zij de poort voor je open. Voor medewerkers of HZ-auto's kun je parkeren bij het HZ gebouw zelf."
        ]);
    }
}
