<?php

    class Get_Nominee{
       public function get_nomine($category,$sub_category){
            $this->conn = mysqli_connect('localhost','root','','jasline') or die("Connection Failed!");
            $get_nomi = $this->conn->prepare("SELECT* FROM nominees WHERE category=? and sub_category=?");
            $get_nomi->bind_param('ss',$category,$sub_category);
            $get_nomi->execute();
            $get_nomi = $get_nomi->get_result();
            return $get_nomi; 
        }


    }

    $new_nominee = new Get_Nominee();

    //ACADEMIC
    $bsa = $new_nominee->get_nomine('academics','Best Student');
    $bh = $new_nominee->get_nomine('academics','Best Honorable');

    //FRESH STUDENT
    $rotyf = $new_nominee->get_nomine('Fresh Student','Rookie Female');
    $rotym = $new_nominee->get_nomine('Fresh Student','Rookie Male');
    $bnsf = $new_nominee->get_nomine('Fresh Student','Best New Student F');
    $bnsm = $new_nominee->get_nomine('Fresh Student','Best New Student M');
    $nra = $new_nominee->get_nomine('Fresh Student','Next Rated Artist');

    //SPECIAL RECOGNITION
    $hof = $new_nominee->get_nomine('Special Recognition','Hall of Fame');
    
    //ENTREPRENEUR
    $coty = $new_nominee->get_nomine('Entreprenuer','Clothier');
    $mes = $new_nominee->get_nomine('Entreprenuer','Most Enterprising Student');
    $ceo = $new_nominee->get_nomine('Entreprenuer','CEO of the Year');
    $maoty = $new_nominee->get_nomine('Entreprenuer','Make Up Artist');
    $sboty = $new_nominee->get_nomine('Entreprenuer','Student Brand');
    $gdoty = $new_nominee->get_nomine('Entreprenuer','Graphics Designer');
    $mcs = $new_nominee->get_nomine('Entreprenuer','Most Creative Student');
    $poty = $new_nominee->get_nomine('Entreprenuer','Photographer');

    //ENTERTAINMENT
    $bna = $new_nominee->get_nomine('Entertainment','Best News Act');
    $aoty = $new_nominee->get_nomine('Entertainment','Artist of the Year');
    $doty = $new_nominee->get_nomine('Entertainment','DJ of the Year');
    $ep = $new_nominee->get_nomine('Entertainment','Entertainment Personality');
    $eb = $new_nominee->get_nomine('Entertainment','Entertainment Brand');
    $mp = $new_nominee->get_nomine('Entertainment','Music Producer');
    $bd = $new_nominee->get_nomine('Entertainment','Best Dancer');
    $nrac = $new_nominee->get_nomine('Entertainment','Next Rated Act');
    $raoty = $new_nominee->get_nomine('Entertainment','Rap Artist of the Year');
    $mpep = $new_nominee->get_nomine('Entertainment','Most Promising Entertainment Personality');
    $buosm = $new_nominee->get_nomine('Entertainment','Best Use of Social Media');
    $eooty = $new_nominee->get_nomine('Entertainment','Event Organizer of the Year');
    $ocp = $new_nominee->get_nomine('Entertainment','Online Comedy Platform');
    $cotye = $new_nominee->get_nomine('Entertainment','Comedian of the Year');
    $potye = $new_nominee->get_nomine('Entertainment','PR of the Year');
    $smioty = $new_nominee->get_nomine('Entertainment','Social Media Influencer of the Year');

    //GENERAL
    $mpma = $new_nominee->get_nomine('General','Most Popular M');
    $mpfe = $new_nominee->get_nomine('General','Most Popular F');
    $sm = $new_nominee->get_nomine('General','Sport Man');
    $mff = $new_nominee->get_nomine('General','Most Fashionable F');
    $mfm = $new_nominee->get_nomine('General','Most Fashionable M');
    $mrp = $new_nominee->get_nomine('General','Mr Personality');
    $mip = $new_nominee->get_nomine('General','Miss Personality');
    $pgm = $new_nominee->get_nomine('General','Perfect gentleman');
    $mrm = $new_nominee->get_nomine('General','Most reserved M');
    $mrf = $new_nominee->get_nomine('General','Most reserved F');
    $bdm = $new_nominee->get_nomine('General','Best dressed M');
    $bdf = $new_nominee->get_nomine('General','Best dressed F');
    $mpe = $new_nominee->get_nomine('General','Miss petit');
    $bbab = $new_nominee->get_nomine('General','Big bold and beautiful');
    $meb = $new_nominee->get_nomine('General','Miss ebony');
    $mbe = $new_nominee->get_nomine('General','Most beautiful');
    $mh = $new_nominee->get_nomine('General','Most handsome');
    $me = $new_nominee->get_nomine('General','Most expensive');
    $mba = $new_nominee->get_nomine('General','Money bag');
    $moty = $new_nominee->get_nomine('General','Man of the year');
    $uh = $new_nominee->get_nomine('General','Unsung hero');
    $bc = $new_nominee->get_nomine('General','Best clique');
    $pi = $new_nominee->get_nomine('General','Political icon');
    $bi = $new_nominee->get_nomine('General','Brand influencer');
    $mim = $new_nominee->get_nomine('General','Most influential M');
    $mif = $new_nominee->get_nomine('General','Most influential F');
    $msm = $new_nominee->get_nomine('General','Most sophisticated M');
    $msf = $new_nominee->get_nomine('General','Most sophisticated F');
    $ba = $new_nominee->get_nomine('General','Best automobile');
    $motye = $new_nominee->get_nomine('General','Model of the year');
    $mph = $new_nominee->get_nomine('General','Miss photogenic');
    $msam = $new_nominee->get_nomine('General','Most sought after M');
    $msaf = $new_nominee->get_nomine('General','Most sought after F');
    $gb = $new_nominee->get_nomine('General','Golden boy');
    $y = $new_nominee->get_nomine('General','YAGI');
    $r = $new_nominee->get_nomine('General','Revelation');
    $hg = $new_nominee->get_nomine('General','Hour Glass');


?>