<?php

namespace app\models;

class Database
{

    private static $data = array(
        array("id" => 1, "name" => "Phillip", "email" => "Phasellus@arcu.co.uk"),
        array("id" => 2, "name" => "Mari", "email" => "Pellentesque.habitant@habitant.com"),
        array("id" => 3, "name" => "Rana", "email" => "neque.Nullam@vehicula.ca"),
        array("id" => 4, "name" => "Jamalia", "email" => "magna.Ut@convallisconvallis.net"),
        array("id" => 5, "name" => "Plato", "email" => "id.ante@semNullainterdum.co.uk"),
        array("id" => 6, "name" => "Ingrid", "email" => "risus.Nunc@liberodui.net"),
        array("id" => 7, "name" => "Deacon", "email" => "Suspendisse.commodo.tincidunt@nonsapienmolestie.ca"),
        array("id" => 8, "name" => "Evan", "email" => "augue.eu.tellus@Integer.co.uk"),
        array("id" => 9, "name" => "Whitney", "email" => "ut.nisi.a@acipsumPhasellus.com"),
        array("id" => 10, "name" => "Lucian", "email" => "sed.dolor@ipsumCurabiturconsequat.net"),
        array("id" => 11, "name" => "Oprah", "email" => "tristique.pellentesque@Phasellusvitaemauris.org"),
        array("id" => 12, "name" => "Tanner", "email" => "ultricies.adipiscing.enim@Etiamligulatortor.com"),
        array("id" => 13, "name" => "Bryar", "email" => "Quisque@sagittis.com"),
        array("id" => 14, "name" => "Beatrice", "email" => "massa@sociisnatoquepenatibus.ca"),
        array("id" => 15, "name" => "Camden", "email" => "dignissim.Maecenas@sociis.org"),
        array("id" => 16, "name" => "Nehru", "email" => "Quisque@senectuset.net"),
        array("id" => 17, "name" => "Calvin", "email" => "neque.tellus@fermentumarcuVestibulum.ca"),
        array("id" => 18, "name" => "Merritt", "email" => "aliquam.arcu.Aliquam@lorem.org"),
        array("id" => 19, "name" => "Virginia", "email" => "mi@Etiamvestibulummassa.net"),
        array("id" => 20, "name" => "Odessa", "email" => "est.tempor.bibendum@vellectus.org"),
        array("id" => 21, "name" => "Silas", "email" => "erat.vel@Vivamuseuismod.net"),
        array("id" => 22, "name" => "Mannix", "email" => "elit.erat@lorem.co.uk"),
        array("id" => 23, "name" => "Jamal", "email" => "Curabitur.massa.Vestibulum@maurisIntegersem.co.uk"),
        array("id" => 24, "name" => "Robert", "email" => "fermentum.vel@fringilla.com"),
        array("id" => 25, "name" => "Ferris", "email" => "arcu@nequepellentesque.com"),
        array("id" => 26, "name" => "James", "email" => "at.libero.Morbi@convallis.org"),
        array("id" => 27, "name" => "Arden", "email" => "tristique@InloremDonec.org"),
        array("id" => 28, "name" => "Jennifer", "email" => "mattis@maurissapiencursus.edu"),
        array("id" => 29, "name" => "Maisie", "email" => "egestas.nunc.sed@acmi.net"),
        array("id" => 30, "name" => "Blaze", "email" => "non@nec.edu"),
        array("id" => 31, "name" => "Lareina", "email" => "auctor@convallisdolorQuisque.edu"),
        array("id" => 32, "name" => "Quinn", "email" => "diam.Proin.dolor@id.edu"),
        array("id" => 33, "name" => "India", "email" => "vitae.erat@facilisismagnatellus.co.uk"),
        array("id" => 34, "name" => "Alika", "email" => "id.ante@turpisvitae.com"),
        array("id" => 35, "name" => "Madeson", "email" => "Phasellus.dolor@etnunc.ca"),
        array("id" => 36, "name" => "Libby", "email" => "odio@malesuadafringillaest.net"),
        array("id" => 37, "name" => "Sean", "email" => "cursus.Integer@nequevenenatislacus.edu"),
        array("id" => 38, "name" => "Willa", "email" => "Nunc.ut@velitQuisquevarius.edu"),
        array("id" => 39, "name" => "Wilma", "email" => "et.libero@convallis.com"),
        array("id" => 40, "name" => "Tatiana", "email" => "sit@odio.org"),
        array("id" => 41, "name" => "Hiram", "email" => "mollis.Phasellus.libero@felisadipiscingfringilla.edu"),
        array("id" => 42, "name" => "Simon", "email" => "ligula.Aenean@inhendreritconsectetuer.net"),
        array("id" => 43, "name" => "Candace", "email" => "sit.amet.lorem@arcuVestibulum.org"),
        array("id" => 44, "name" => "Hilary", "email" => "parturient@risusNunc.com"),
        array("id" => 45, "name" => "Jonah", "email" => "et.netus.et@nuncQuisqueornare.org"),
        array("id" => 46, "name" => "Thor", "email" => "Donec.egestas@interdumNuncsollicitudin.org"),
        array("id" => 47, "name" => "Mohammad", "email" => "Etiam.laoreet.libero@Aliquam.org"),
        array("id" => 48, "name" => "Hadassah", "email" => "lectus.pede.ultrices@nonummy.ca"),
        array("id" => 49, "name" => "Kylee", "email" => "malesuada@adipiscing.ca"),
        array("id" => 50, "name" => "Alvin", "email" => "arcu@Proinvelarcu.net"),
        array("id" => 51, "name" => "Fritz", "email" => "tristique@Curabiturconsequatlectus.ca"),
        array("id" => 52, "name" => "Fitzgerald", "email" => "malesuada.fames.ac@pedenonummy.ca"),
        array("id" => 53, "name" => "Phillip", "email" => "dui@Vivamusnonlorem.com"),
        array("id" => 54, "name" => "Jasper", "email" => "malesuada.vel.venenatis@ad.ca"),
        array("id" => 55, "name" => "Carson", "email" => "Mauris.ut.quam@risus.net"),
        array("id" => 56, "name" => "Regina", "email" => "egestas@loremsitamet.net"),
        array("id" => 57, "name" => "Noah", "email" => "mattis@erat.ca"),
        array("id" => 58, "name" => "Germane", "email" => "vulputate.velit@ullamcorper.ca"),
        array("id" => 59, "name" => "Aaron", "email" => "in.hendrerit.consectetuer@mauriserat.edu"),
        array("id" => 60, "name" => "Griffith", "email" => "ultrices.mauris@lectusrutrum.org"),
        array("id" => 61, "name" => "Emmanuel", "email" => "Aenean.gravida.nunc@placerat.org"),
        array("id" => 62, "name" => "Gemma", "email" => "urna@lobortis.com"),
        array("id" => 63, "name" => "Hope", "email" => "luctus.ipsum@arcuNunc.org"),
        array("id" => 64, "name" => "Drake", "email" => "eu@sitamet.co.uk"),
        array("id" => 65, "name" => "Giacomo", "email" => "Vivamus.euismod.urna@liberolacusvarius.edu"),
        array("id" => 66, "name" => "Medge", "email" => "ac.mattis@Quisque.com"),
        array("id" => 67, "name" => "Simon", "email" => "massa.Quisque@facilisi.co.uk"),
        array("id" => 68, "name" => "Kalia", "email" => "Praesent.luctus.Curabitur@dolornonummyac.edu"),
        array("id" => 69, "name" => "Blake", "email" => "Cum.sociis.natoque@tincidunt.net"),
        array("id" => 70, "name" => "Wyoming", "email" => "in@diamDuis.com"),
        array("id" => 71, "name" => "Neve", "email" => "arcu.et.pede@Nullamfeugiatplacerat.co.uk"),
        array("id" => 72, "name" => "Jacob", "email" => "fringilla.cursus@commodo.com"),
        array("id" => 73, "name" => "Laith", "email" => "id.mollis@sagittisNullam.co.uk"),
        array("id" => 74, "name" => "Teagan", "email" => "egestas.a.dui@nonleo.edu"),
        array("id" => 75, "name" => "Wynter", "email" => "lorem.Donec@elit.org"),
        array("id" => 76, "name" => "Quinn", "email" => "auctor.Mauris.vel@dictum.net"),
        array("id" => 77, "name" => "Lane", "email" => "Nunc@pretiumetrutrum.ca"),
        array("id" => 78, "name" => "Graiden", "email" => "libero@ante.net"),
        array("id" => 79, "name" => "Jennifer", "email" => "mauris@amalesuada.ca"),
        array("id" => 80, "name" => "Jarrod", "email" => "iaculis@nequetellusimperdiet.org"),
        array("id" => 81, "name" => "Dale", "email" => "risus.Donec.nibh@adipiscingelit.ca"),
        array("id" => 82, "name" => "Rae", "email" => "Curabitur@rhoncus.org"),
        array("id" => 83, "name" => "Vera", "email" => "fringilla.Donec@Nuncmauris.co.uk"),
        array("id" => 84, "name" => "Thane", "email" => "parturient@mitemporlorem.com"),
        array("id" => 85, "name" => "Kenneth", "email" => "neque.Sed.eget@porttitorinterdum.org"),
        array("id" => 86, "name" => "Wing", "email" => "cursus.a@aliquet.edu"),
        array("id" => 87, "name" => "Martin", "email" => "Ut.nec@auguemalesuadamalesuada.edu"),
        array("id" => 88, "name" => "Beck", "email" => "sagittis.placerat.Cras@tempordiam.com"),
        array("id" => 89, "name" => "Shaeleigh", "email" => "Pellentesque.habitant.morbi@dictum.co.uk"),
        array("id" => 90, "name" => "Regina", "email" => "dolor.sit.amet@Nunc.com"),
        array("id" => 91, "name" => "Zachery", "email" => "risus.Quisque@dictummagna.co.uk"),
        array("id" => 92, "name" => "Shad", "email" => "sed@risusDonecnibh.edu"),
        array("id" => 93, "name" => "Alvin", "email" => "in.lobortis@laciniaSed.org"),
        array("id" => 94, "name" => "Penelope", "email" => "ac@mi.co.uk"),
        array("id" => 95, "name" => "Eaton", "email" => "arcu@pharetraQuisque.org"),
        array("id" => 96, "name" => "Zane", "email" => "nunc.interdum.feugiat@Nullam.ca"),
        array("id" => 97, "name" => "Faith", "email" => "est@Duisrisus.ca"),
        array("id" => 98, "name" => "Kyla", "email" => "aptent.taciti.sociosqu@magnis.co.uk"),
        array("id" => 99, "name" => "Flynn", "email" => "nec.quam@sagittis.edu"),
        array("id" => 100, "name" => "Nigel", "email" => "fermentum.metus.Aenean@Integer.edu"),
    );

    public static function getAllData()
    {
        return $data;
    }

    public static function findRecord($field, $value) {
        
        $rows_found = array();
        
        // verifico se o campo existe
        if (array_key_exists($field, self::$data[0])) {
            foreach (self::$data as $k => $v) {
                if (strtolower(self::$data[$k][$field] === $value)) {
                    array_push($rows_found, self::$data[$k]);
                }
            }
        }

        return $rows_found;		
        
    }
}
