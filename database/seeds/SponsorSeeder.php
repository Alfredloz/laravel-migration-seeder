<?php

use Illuminate\Database\Seeder;
use App\Sponsor;
class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsors = [
            [
                'company' => 'Gino Paoli Srl',
                'ceo'  => 'Gino Paoli',
                'email' => 'gino@paoli.it'
            ],
            [
                'company' => 'Ciccio Pasticcio Srl',
                'ceo'  => 'Ciccio Pasticcio',
                'email' => 'pasticcio@ciccio.com'
            ],
            [
                'company' => 'Franco Frachetti Company',
                'ceo'  => 'Franco Franchetti',
                'email' => 'franc@franky.it'
            ],
            [
                'company' => 'Pinoli Express',
                'ceo'  => 'Pino Pinoli',
                'email' => 'pini@pinolini.uk'
            ]
        ];

        foreach ($sponsors as $sponsor) {
            $newSponsor = new Sponsor();
            $newSponsor->company = $sponsor['company'];
            $newSponsor->ceo = $sponsor['ceo'];
            $newSponsor->email = $sponsor['email'];
            $newSponsor->save();

        }
    }
}
