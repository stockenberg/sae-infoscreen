<?php

use Illuminate\Database\Seeder;

class AudioEquipmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $audiobooking_equipment = array(
            array('equipment_id' => '1','equipment_name' => 'SE 2200 A','equipment_count' => '2','equipment_cat_id' => '24'),
            array('equipment_id' => '2','equipment_name' => 'SE 1A','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '3','equipment_name' => 'SE 3','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '4','equipment_name' => 'MD 421','equipment_count' => '4','equipment_cat_id' => '24'),
            array('equipment_id' => '5','equipment_name' => 'SM 57','equipment_count' => '3','equipment_cat_id' => '24'),
            array('equipment_id' => '6','equipment_name' => 'Beta 52A','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '7','equipment_name' => 'KSM 141','equipment_count' => '2','equipment_cat_id' => '24'),
            array('equipment_id' => '8','equipment_name' => 'KSM 137','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '9','equipment_name' => 'KSM 32','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '10','equipment_name' => 'C 414','equipment_count' => '2','equipment_cat_id' => '24'),
            array('equipment_id' => '11','equipment_name' => 'D 112','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '12','equipment_name' => 'C 451','equipment_count' => '2','equipment_cat_id' => '24'),
            array('equipment_id' => '13','equipment_name' => 'C 542 BL','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '14','equipment_name' => 'NT-2A mit Spinne','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '15','equipment_name' => 'E 865','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '16','equipment_name' => 'E 935','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '17','equipment_name' => 'E 945','equipment_count' => '2','equipment_cat_id' => '24'),
            array('equipment_id' => '18','equipment_name' => 'E 901','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '19','equipment_name' => 'E 902','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '20','equipment_name' => 'E 904','equipment_count' => '3','equipment_cat_id' => '24'),
            array('equipment_id' => '21','equipment_name' => 'E 905','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '22','equipment_name' => 'E 906','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '23','equipment_name' => 'E 914','equipment_count' => '3','equipment_cat_id' => '24'),
            array('equipment_id' => '24','equipment_name' => 'MK 4','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '25','equipment_name' => 'MKS 4 Spinne','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '26','equipment_name' => 'MD 100','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '27','equipment_name' => 'MD 110','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '28','equipment_name' => 'M 930','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '29','equipment_name' => 'M 930 Klemme-normal','equipment_count' => '2','equipment_cat_id' => '24'),
            array('equipment_id' => '30','equipment_name' => 'M 930 Klemme-ORTF','equipment_count' => '2','equipment_cat_id' => '24'),
            array('equipment_id' => '31','equipment_name' => 'C5 mit 2 Kapseln in Box
','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '32','equipment_name' => 'C7e','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '33','equipment_name' => 'C7e - Spinne','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '34','equipment_name' => 'KMS 104 D','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '35','equipment_name' => 'KMD','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '36','equipment_name' => 'KK 120','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '37','equipment_name' => 'KK 184','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '38','equipment_name' => 'KMR 81','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '39','equipment_name' => 'Drum-Koffer','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '50','equipment_name' => 'Gaffa','equipment_count' => '5','equipment_cat_id' => '25'),
            array('equipment_id' => '49','equipment_name' => 'Molton-Box','equipment_count' => '1','equipment_cat_id' => '25'),
            array('equipment_id' => '48','equipment_name' => 'Midi-Koffer','equipment_count' => '1','equipment_cat_id' => '25'),
            array('equipment_id' => '43','equipment_name' => 'Universalspinne','equipment_count' => '3','equipment_cat_id' => '24'),
            array('equipment_id' => '44','equipment_name' => 'Stereoschiene','equipment_count' => '3','equipment_cat_id' => '24'),
            array('equipment_id' => '45','equipment_name' => 'Ploppschutz','equipment_count' => '3','equipment_cat_id' => '24'),
            array('equipment_id' => '46','equipment_name' => 'Klemme-ersatz','equipment_count' => '11','equipment_cat_id' => '24'),
            array('equipment_id' => '47','equipment_name' => 'Klemme-Clip-Ersatz','equipment_count' => '3','equipment_cat_id' => '24'),
            array('equipment_id' => '51','equipment_name' => 'Kreppband','equipment_count' => '5','equipment_cat_id' => '25'),
            array('equipment_id' => '52','equipment_name' => 'Netzverteiler','equipment_count' => '1','equipment_cat_id' => '25'),
            array('equipment_id' => '53','equipment_name' => 'Netzverlängerung','equipment_count' => '1','equipment_cat_id' => '25'),
            array('equipment_id' => '54','equipment_name' => 'Kaltgeräte-Stecker','equipment_count' => '7','equipment_cat_id' => '25'),
            array('equipment_id' => '55','equipment_name' => 'XLR female-male','equipment_count' => '1','equipment_cat_id' => '25'),
            array('equipment_id' => '56','equipment_name' => 'XLR male-female','equipment_count' => '3','equipment_cat_id' => '25'),
            array('equipment_id' => '57','equipment_name' => 'Verkabelungs-Set','equipment_count' => '1','equipment_cat_id' => '25'),
            array('equipment_id' => '58','equipment_name' => 'KH Drummer','equipment_count' => '4','equipment_cat_id' => '25'),
            array('equipment_id' => '59','equipment_name' => 'KH Custom Studio','equipment_count' => '2','equipment_cat_id' => '25'),
            array('equipment_id' => '60','equipment_name' => 'KH HD 660','equipment_count' => '2','equipment_cat_id' => '25'),
            array('equipment_id' => '61','equipment_name' => 'Re-Amper X-Amp','equipment_count' => '2','equipment_cat_id' => '25'),
            array('equipment_id' => '62','equipment_name' => 'DI-Box-Line','equipment_count' => '1','equipment_cat_id' => '25'),
            array('equipment_id' => '63','equipment_name' => 'DI-Box-Instrument','equipment_count' => '1','equipment_cat_id' => '25'),
            array('equipment_id' => '64','equipment_name' => 'Gear-Box Line-6','equipment_count' => '2','equipment_cat_id' => '25'),
            array('equipment_id' => '65','equipment_name' => 'Insert-Kabel 6,3->3,5','equipment_count' => '4','equipment_cat_id' => '25'),
            array('equipment_id' => '66','equipment_name' => 'Insertkabel ','equipment_count' => '4','equipment_cat_id' => '25'),
            array('equipment_id' => '67','equipment_name' => 'HP-Verlängerung','equipment_count' => '6','equipment_cat_id' => '25'),
            array('equipment_id' => '68','equipment_name' => 'Instrumentenkabel','equipment_count' => '2','equipment_cat_id' => '25'),
            array('equipment_id' => '69','equipment_name' => 'Klinkenkabel symm.','equipment_count' => '3','equipment_cat_id' => '25'),
            array('equipment_id' => '70','equipment_name' => 'Klinke-XLR-male','equipment_count' => '9','equipment_cat_id' => '25'),
            array('equipment_id' => '71','equipment_name' => 'Klinke-XLR-female','equipment_count' => '11','equipment_cat_id' => '25'),
            array('equipment_id' => '72','equipment_name' => 'XLR','equipment_count' => '26','equipment_cat_id' => '25'),
            array('equipment_id' => '73','equipment_name' => 'Patchcords S','equipment_count' => '29','equipment_cat_id' => '25'),
            array('equipment_id' => '74','equipment_name' => 'Patchcords XL','equipment_count' => '19','equipment_cat_id' => '25'),
            array('equipment_id' => '75','equipment_name' => 'TT-S','equipment_count' => '27','equipment_cat_id' => '25'),
            array('equipment_id' => '76','equipment_name' => 'TT-XL','equipment_count' => '14','equipment_cat_id' => '25'),
            array('equipment_id' => '77','equipment_name' => 'TT-Klinke female','equipment_count' => '8','equipment_cat_id' => '25'),
            array('equipment_id' => '78','equipment_name' => 'TT-Klinke male','equipment_count' => '1','equipment_cat_id' => '25'),
            array('equipment_id' => '79','equipment_name' => 'TT-XLR female','equipment_count' => '4','equipment_cat_id' => '25'),
            array('equipment_id' => '80','equipment_name' => 'TT-Instrument','equipment_count' => '1','equipment_cat_id' => '25'),
            array('equipment_id' => '81','equipment_name' => 'CD-Player','equipment_count' => '1','equipment_cat_id' => '25'),
            array('equipment_id' => '82','equipment_name' => 'Foley-Kiste','equipment_count' => '1','equipment_cat_id' => '25'),
            array('equipment_id' => '83','equipment_name' => 'Cubase-Dongle','equipment_count' => '1','equipment_cat_id' => '25'),
            array('equipment_id' => '84','equipment_name' => 'ProTools - Dongle','equipment_count' => '1','equipment_cat_id' => '25'),
            array('equipment_id' => '85','equipment_name' => 'Mic.-Ständer normal','equipment_count' => '12','equipment_cat_id' => '28'),
            array('equipment_id' => '86','equipment_name' => 'Mic.-Ständer groß','equipment_count' => '2','equipment_cat_id' => '28'),
            array('equipment_id' => '87','equipment_name' => 'Mic.-Ständer klein','equipment_count' => '4','equipment_cat_id' => '28'),
            array('equipment_id' => '88','equipment_name' => 'Drum-Hocker','equipment_count' => '1','equipment_cat_id' => '28'),
            array('equipment_id' => '89','equipment_name' => 'Gitarren-Ständer','equipment_count' => '1','equipment_cat_id' => '28'),
            array('equipment_id' => '90','equipment_name' => 'Notenständer','equipment_count' => '1','equipment_cat_id' => '28'),
            array('equipment_id' => '91','equipment_name' => 'Mic.-Ständer normal (Studio 1)','equipment_count' => '1','equipment_cat_id' => '29'),
            array('equipment_id' => '92','equipment_name' => 'Mic.-Screen','equipment_count' => '1','equipment_cat_id' => '29'),
            array('equipment_id' => '93','equipment_name' => 'Foley-Kiste (Studio 1)','equipment_count' => '3','equipment_cat_id' => '29'),
            array('equipment_id' => '94','equipment_name' => 'A&H GLD 80','equipment_count' => '1','equipment_cat_id' => '30'),
            array('equipment_id' => '95','equipment_name' => 'Verkablungs-Rack','equipment_count' => '1','equipment_cat_id' => '30'),
            array('equipment_id' => '96','equipment_name' => 'A&H StageBox','equipment_count' => '1','equipment_cat_id' => '30'),
            array('equipment_id' => '97','equipment_name' => 'Sounddevices 664','equipment_count' => '1','equipment_cat_id' => '30'),
            array('equipment_id' => '98','equipment_name' => 'Zoom H4N','equipment_count' => '1','equipment_cat_id' => '30'),
            array('equipment_id' => '99','equipment_name' => 'Tascam DR-07','equipment_count' => '1','equipment_cat_id' => '30'),
            array('equipment_id' => '100','equipment_name' => 'PT-Dongle','equipment_count' => '1','equipment_cat_id' => '30'),
            array('equipment_id' => '101','equipment_name' => 'SM7','equipment_count' => '1','equipment_cat_id' => '24'),
            array('equipment_id' => '102','equipment_name' => 'RCF-Bass','equipment_count' => '2','equipment_cat_id' => '30'),
            array('equipment_id' => '103','equipment_name' => 'RCF-Topteil','equipment_count' => '2','equipment_cat_id' => '30'),
            array('equipment_id' => '104','equipment_name' => 'd&b Monitor','equipment_count' => '2','equipment_cat_id' => '30'),
            array('equipment_id' => '105','equipment_name' => 'd&b Monitor klein','equipment_count' => '1','equipment_cat_id' => '30')
        );
        //
        foreach ($audiobooking_equipment as $equipment) {

            \Illuminate\Support\Facades\DB::table('audio_equipments')->insert([
                'name' => $equipment['equipment_name'],
                'count' => $equipment['equipment_count'],
                'created_at' => \Carbon\Carbon::now(),
            ]);

        }

    }
}
