<?php

namespace App\Http\Controllers\Helper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParseSigmet extends Controller
{
    /**
     * Strukture Sigmet
     *
     * FIR - Message Id - Sequence Number - Validity - Originating Office - FIR - Meteorological Information - Remark
     *  
     */
  
    public static function parsedata($rawstring){

        // Preporcessing remove special character
        // stopword
        $rawstring = str_replace('***** ','',$rawstring); 
        $rawstring = str_replace('*****','',$rawstring);
        $rawstring = str_replace(',','',$rawstring);
        $rawstring = str_replace('- ','-',$rawstring);
        $rawstring = str_replace(' -','-',$rawstring);
        $rawstring = str_replace('=--------------------------------------------------------------------','',$rawstring);
        $rawstring = str_replace(' =','',$rawstring);
        $rawstring = str_replace('=','',$rawstring);
        
        //tokenizing 
        $piece[] = $rawstring;
        
        return $piece;
    }

    public static function ReceivedAt($string){
        if($string == "Received"){
            return "Pada";
        }
        elseif($string == "at"){
            return "pukul";
        }else{
            return null;
        }
    }

    public static function date($string){
        $pattern_time = preg_match("/^(?:2[0-3]|[01][0-9]):[0-5][0-9]$/", $string);
        $pattern_date = preg_match("/^([0-9]{1,2})\\/([0-9]{1,2})\\/([0-9]{2})$/", $string);
        if($pattern_time == true){
            return $string;
        }elseif($pattern_date == true){
            return $string;
        }else{
            return null;
        }
    }

    public static function sequence_number($string){
        $pattern_sequence_1 = preg_match("/^[A-Z]$/", $string);
        $pattern_sequence_2 = preg_match("/^[A-Z][0-9]$/", $string);
        $pattern_sequence_3 = preg_match("/^[A-Z][0-9][0-9]$/", $string);
        $pattern_sequence_4 = preg_match("/^[0-9][0-9]$/", $string);
        $pattern_sequence_5 = preg_match("/^[0-9]$/", $string);

        if($string == "SIGMET"){
            return $string;
        }
        elseif( $pattern_sequence_1 || $pattern_sequence_2 || $pattern_sequence_3 || $pattern_sequence_4 || $pattern_sequence_5 ){
            return $string;
        }
    }

    public static function validitas($string){
        $pattern_valid = preg_match("/^[0-9]{6}\\/([0-9]{6})$/", $string);
        if($string == "VALID"){
            return $string;
        }
        elseif($pattern_valid == true){
            return $string;
        }
        else{
            return null;
        }
    }

    public static function koordinat($string){
        $pattern_valid_1 = preg_match("/^[A-Z]([0-9]{5})-[A-Z]([0-9]{5})$/", $string);
        $pattern_valid_2 = preg_match("/^[A-Z]([0-9]{4})-[A-Z]([0-9]{5})$/", $string);
        $pattern_valid_3 = preg_match("/^[A-Z]([0-9]{5})-[A-Z]([0-9]{4})$/", $string);
        $pattern_valid_4 = preg_match("/^[A-Z]([0-9]{4})-[A-Z]([0-9]{4})$/", $string);
        $pattern_valid_5 = preg_match("/^[A-Z]([0-9]{5})$/", $string);
        $pattern_valid_6 = preg_match("/^[A-Z]([0-9]{4})$/", $string);
        $pattern_valid_7 = preg_match("/^[0-9]{4}([A-Z])$/", $string);
        $pattern_valid_8 = preg_match("/^[0-9]{5}([A-Z])$/", $string);

        if($pattern_valid_1 == true || $pattern_valid_2 == true || $pattern_valid_3 == true || $pattern_valid_4 == true || $pattern_valid_7 == true || $pattern_valid_8 == true ){
            return $string;
        }elseif($pattern_valid_5 == true || $pattern_valid_6 == true ){
            return $string;
        }else{
            return null;
        }
    }

    public static function fl($string){
        $pattern_valid_1 = preg_match("/FL([0-9]{3})/", $string);
        $pattern_valid_2 = preg_match("/FL([0-9]{4})/", $string);
        if($pattern_valid_1 == true || $pattern_valid_2 == true){
            return $string;
        }else{
            return null;
        }
    }

    public static function FIR($fir){
        if($fir == 'AGGG'){
            return "Honiara";
             
        }
        elseif($fir =='ANAU'){
            return "Nauru";
             
        }
        elseif($fir =='AYPM'){
            return "Port Moresby";
             
        }
        elseif($fir =='BGGL'){
            return "Nuuk";
             
        }
        elseif($fir =='BIRD'){
            return "Reykjavik";
             
        }
        elseif($fir =='CZEG'){
            return "Edmonton";
             
        }
        elseif($fir =='CZQM'){
            return "Moncton Southern";
             
        }
        elseif($fir =='CZQX'){
            return "Gander Domestic";
             
        }
        elseif($fir =='CZUL'){
            return "Montreal";
             
        }
        elseif($fir =='CZVR'){
            return "Vancouver";
             
        }
        elseif($fir =='CZWG'){
            return "Winnipeg";
             
        }
        elseif($fir =='CZYZ'){
            return "Toronto";
             
        }
        elseif($fir =='DAAA'){
            return "Alger";
             
        }
        elseif($fir =='DGAC'){
            return "Accra";
             
        }
        elseif($fir =='DIII'){
            return "Abidjan";
             
        }
        elseif($fir =='DNKK'){
            return "Kano";
             
        }
        elseif($fir =='DRRR'){
            return "Niamey";
             
        }
        elseif($fir =='DTTC'){
            return "Tunis";
             
        }
        elseif($fir =='EZZZ'){
            return "Eurocontrol";
             
        }
        elseif($fir =='EBBU'){
            return "Brussels";
             
        }
        elseif($fir =='EDBB'){
            return "Berlin";
             
        }
        elseif($fir =='EDGG'){
            return "Langen";
             
        }
        elseif($fir =='EDLL'){
            return "Düsseldorf";
             
        }
        elseif($fir =='EDMM'){
            return "Munich";
             
        }
        elseif($fir =='EDUU'){
            return "Rhein";
             
        }
        elseif($fir =='EDVV'){
            return "Hannover";
             
        }
        elseif($fir =='EDWW'){
            return "Bremen";
             
        }
        elseif($fir =='EDYY'){
            return "Maastricht";
             
        }
        elseif($fir =='EETT'){
            return "Tallinn";
             
        }
        elseif($fir =='EFIN'){
            return "Finland";
             
        }
        elseif($fir =='EGGX'){
            return "Shanwick Oceanic";
             
        }
        elseif($fir =='EGPX'){
            return "Scottish";
             
        }
        elseif($fir =='EGQQ'){
            return "Scottish (Mil)";
             
        }
        elseif($fir =='EGTT'){
            return "London";
             
        }
        elseif($fir =='EHAA'){
            return "Amsterdam";
             
        }
        elseif($fir =='EISN'){
            return "Shannon";
             
        }
        elseif($fir =='EKDK'){
            return "Copenhagen";
             
        }
        elseif($fir =='ENOB'){
            return "Bodo Oceanic";
             
        }
        elseif($fir =='ENOR'){
            return "Norway";
             
        }
        elseif($fir =='EPWW'){
            return "Warszawa";
             
        }
        elseif($fir =='ESAA'){
            return "Sweden";
             
        }
        elseif($fir =='ESMM'){
            return "Malmo";
             
        }
        elseif($fir =='ESOS'){
            return "Stockholm";
             
        }
        elseif($fir =='EVRR'){
            return "Riga";
             
        }
        elseif($fir =='EYVL'){
            return "Vilnius";
             
        }
        elseif($fir =='FABL'){
            return "Bloemfontein";
             
        }
        elseif($fir =='FACA'){
            return "Capetown";
             
        }
        elseif($fir =='FACT'){
            return "Capetown";
             
        }
        elseif($fir =='FADN'){
            return "Durban";
             
        }
        elseif($fir =='FAJO'){
            return "Johannesburg Oceanic";
             
        }
        elseif($fir =='FAJX'){
            return "Johannesburg";
             
        }
        elseif($fir =='FAPX'){
            return "Port Elizabeth";
             
        }
        elseif($fir =='FBGR'){
            return "Gaborone";
             
        }
        elseif($fir =='FCCC'){
            return "Brazzaville";
             
        }
        elseif($fir =='FIMM'){
            return "Mauritius";
             
        }
        elseif($fir =='FKKK'){
            return "Douala";
             
        }
        elseif($fir =='FLFI'){
            return "Lusaka";
             
        }
        elseif($fir =='FMCX'){
            return "Comoros";
             
        }
        elseif($fir =='FMMM'){
            return "Antananarivo";
             
        }
        elseif($fir =='FNAN'){
            return "Luanda";
             
        }
        elseif($fir =='FOOO'){
            return "Libreville";
             
        }
        elseif($fir =='FQBE'){
            return "Beira";
             
        }
        elseif($fir =='FSSS'){
            return "Seychelles";
             
        }
        elseif($fir =='FTTT'){
            return "N'Djamena";
             
        }
        elseif($fir =='FVHF'){
            return "Harare";
             
        }
        elseif($fir =='FWLL'){
            return "Lilongwe";
             
        }
        elseif($fir =='FYWH'){
            return "Windhoek";
             
        }
        elseif($fir =='FZZA'){
            return "Kinshasa";
             
        }
        elseif($fir =='GCCC'){
            return "Canarias";
             
        }
        elseif($fir =='GLRX'){
            return "Roberts";
             
        }
        elseif($fir =='GMMM'){
            return "Casablanca";
             
        }
        elseif($fir =='GOOO'){
            return "Dakar Oceanic";
             
        }
        elseif($fir =='GVSC'){
            return "Sal Oceanic";
             
        }
        elseif($fir =='HAAA'){
            return "Addis Ababa";
             
        }
        elseif($fir =='HBBA'){
            return "Bujumbura";
             
        }
        elseif($fir =='HCSM'){
            return "Mogadishu";
             
        }
        elseif($fir =='HECC'){
            return "Cairo";
             
        }
        elseif($fir =='HHAA'){
            return "Asmara";
             
        }
        elseif($fir =='HKNA'){
            return "Nairobi";
             
        }
        elseif($fir =='HLLL'){
            return "Tripoli";
             
        }
        elseif($fir =='HRYR'){
            return "Kigali";
             
        }
        elseif($fir =='HSSX'){
            return "Khartoum";
             
        }
        elseif($fir =='HTDC'){
            return "Dar Es Salaam";
             
        }
        elseif($fir =='HUEC'){
            return "Entebbe";
             
        }
        elseif($fir =='KZAB'){
            return "Albuquerque";
             
        }
        elseif($fir =='KZAK'){
            return "Oakland Oceanic";
             
        }
        elseif($fir =='KZAU'){
            return "Chicago";
             
        }
        elseif($fir =='KZBW'){
            return "Boston";
             
        }
        elseif($fir =='KZDC'){
            return "Washington";
             
        }
        elseif($fir =='KZDV'){
            return "Denver";
             
        }
        elseif($fir =='KZFW'){
            return "Ft Worth";
             
        }
        elseif($fir =='KZHU'){
            return "Houston";
             
        }
        elseif($fir =='KZID'){
            return "Indianapolis";
             
        }
        elseif($fir =='KZJX'){
            return "Jacksonville";
             
        }
        elseif($fir =='KZKC'){
            return "Kansas City";
             
        }
        elseif($fir =='KZLA'){
            return "Los Angeles";
             
        }
        elseif($fir =='KZLC'){
            return "Salt Lake";
             
        }
        elseif($fir =='KZMA'){
            return "Miami";
             
        }
        elseif($fir =='KZME'){
            return "Memphis";
             
        }
        elseif($fir =='KZMP'){
            return "Minneapolis";
             
        }
        elseif($fir =='KZNY'){
            return "New York";
             
        }
        elseif($fir =='KZOA'){
            return "Oakland";
             
        }
        elseif($fir =='KZOB'){
            return "Cleveland";
             
        }
        elseif($fir =='KZSE'){
            return "Seattle";
             
        }
        elseif($fir =='KZTL'){
            return "Atlanta";
             
        }
        elseif($fir =='KZWY'){
            return "New York Oceanic";
             
        }
        elseif($fir =='LAAA'){
            return "Tirana";
             
        }
        elseif($fir =='LBSR'){
            return "Sofia";
             
        }
        elseif($fir =='LBWR'){
            return "Varna";
             
        }
        elseif($fir =='LCCC'){
            return "Nicosia";
             
        }
        elseif($fir =='LDZO'){
            return "Zagreb";
             
        }
        elseif($fir =='LECB'){
            return "Barcelona";
             
        }
        elseif($fir =='LECM'){
            return "Madrid";
             
        }
        elseif($fir =='LECS'){
            return "Sevilla";
             
        }
        elseif($fir =='LFBB'){
            return "Bordeaux";
             
        }
        elseif($fir =='LFEE'){
            return "Reims";
             
        }
        elseif($fir =='LFFF'){
            return "Paris";
             
        }
        elseif($fir =='LFMM'){
            return "Marseille";
             
        }
        elseif($fir =='LFRR'){
            return "Brest";
             
        }
        elseif($fir =='LGGG'){
            return "Athens";
             
        }
        elseif($fir =='LHCC'){
            return "Budapest";
             
        }
        elseif($fir =='LIBB'){
            return "Brindisi";
             
        }
        elseif($fir =='LIMM'){
            return "Milano";
             
        }
        elseif($fir =='LIRR'){
            return "Roma";
             
        }
        elseif($fir =='LJLA'){
            return "Ljubljana";
             
        }
        elseif($fir =='LKAA'){
            return "Praha";
             
        }
        elseif($fir =='LLLL'){
            return "Tel-Aviv";
             
        }
        elseif($fir =='LMMM'){
            return "Malta";
             
        }
        elseif($fir =='LOVV'){
            return "Wien";
             
        }
        elseif($fir =='LPPC'){
            return "Lisboa";
             
        }
        elseif($fir =='LPPO'){
            return "Santa Maria Oceanic";
             
        }
        elseif($fir =='LQSB'){
            return "Sarajevo";
             
        }
        elseif($fir =='LRBB'){
            return "Bucuresti";
             
        }
        elseif($fir =='LSAG'){
            return "Geneve";
             
        }
        elseif($fir =='LSAS'){
            return "Switzerland";
             
        }
        elseif($fir =='LSAZ'){
            return "Zurich";
             
        }
        elseif($fir =='LTAA'){
            return "Ankara";
             
        }
        elseif($fir =='LTBB'){
            return "Istanbul";
             
        }
        elseif($fir =='LUUU'){
            return "Chisinau";
             
        }
        elseif($fir =='LWSS'){
            return "Skopje";
             
        }
        elseif($fir =='LYBA'){
            return "Beograd";
             
        }
        elseif($fir =='LZBB'){
            return "Bratislava";
             
        }
        elseif($fir =='MDCS'){
            return "Santo Domingo";
             
        }
        elseif($fir =='MHTG'){
            return "Central American";
             
        }
        elseif($fir =='MKJK'){
            return "Kingston";
             
        }
        elseif($fir =='MMEX'){
            return "Mexico";
             
        }
        elseif($fir =='MMFO'){
            return "Mazatlan Oceanic";
             
        }
        elseif($fir =='MMFR'){
            return "Mexico";
             
        }
        elseif($fir =='MMID'){
            return "Merida";
             
        }
        elseif($fir =='MMTY'){
            return "Monterrey";
             
        }
        elseif($fir =='MMZT'){
            return "Mazatlan";
             
        }
        elseif($fir =='MPZL'){
            return "Panama";
             
        }
        elseif($fir =='MTEG'){
            return "Port-Au-Prince";
             
        }
        elseif($fir =='MUFH'){
            return "Habana";
             
        }
        elseif($fir =='MYNA'){
            return "Nassau";
             
        }
        elseif($fir =='NFFF'){
            return "Nadi";
             
        }
        elseif($fir =='NTTT'){
            return "Tahiti";
             
        }
        elseif($fir =='NWWX'){
            return "Noumea";
             
        }
        elseif($fir =='NZZC'){
            return "New Zealand";
             
        }
        elseif($fir =='NZZO'){
            return "Auckland Oceanic";
             
        }
        elseif($fir =='OAKX'){
            return "Kabul";
             
        }
        elseif($fir =='OBBB'){
            return "Bahrain";
             
        }
        elseif($fir =='OEJD'){
            return "Jeddah";
             
        }
        elseif($fir =='OIIX'){
            return "Tehran";
             
        }
        elseif($fir =='OJAC'){
            return "Amman";
             
        }
        elseif($fir =='OKAC'){
            return "Kuwait";
             
        }
        elseif($fir =='OLBB'){
            return "Beirut";
             
        }
        elseif($fir =='OMAE'){
            return "Emirates";
             
        }
        elseif($fir =='OOMM'){
            return "Muscat";
             
        }
        elseif($fir =='OPKR'){
            return "Karachi";
             
        }
        elseif($fir =='OPLR'){
            return "Lahore";
             
        }
        elseif($fir =='ORBB'){
            return "Baghdad";
             
        }
        elseif($fir =='ORMM'){
            return "ORMM";
             
        }
        elseif($fir =='OSTT'){
            return "Damascus";
             
        }
        elseif($fir =='OYSC'){
            return "Sanaa";
             
        }
        elseif($fir =='PAZA'){
            return "Anchorage";
             
        }
        elseif($fir =='PAZN'){
            return "Anchorage Oceanic";
             
        }
        elseif($fir =='PHZH'){
            return "Honolulu";
             
        }
        elseif($fir =='RCAA'){
            return "Taipei";
             
        }
        elseif($fir =='RJJJ'){
            return "Fukuoka";
             
        }
        elseif($fir =='RKRR'){
            return "Incheon";
             
        }
        elseif($fir =='RPHI'){
            return "Manila";
             
        }
        elseif($fir =='SACF'){
            return "Cordoba";
             
        }
        elseif($fir =='SACU'){
            return "Cordoba";
             
        }
        elseif($fir =='SAEF'){
            return "Ezeiza";
             
        }
        elseif($fir =='SAEU'){
            return "Ezeiza";
             
        }
        elseif($fir =='SAMF'){
            return "Mendoza";
             
        }
        elseif($fir =='SAMV'){
            return "Mendoza";
             
        }
        elseif($fir =='SARR'){
            return "Resistencia";
             
        }
        elseif($fir =='SAVF'){
            return "Comodoro Rivadavia";
             
        }
        elseif($fir =='SAVU'){
            return "Comodoro Rivadavia";
             
        }
        elseif($fir =='SBAO'){
            return "Atlantico";
             
        }
        elseif($fir =='SBAZ'){
            return "Amazonica";
             
        }
        elseif($fir =='SBBS'){
            return "Brasilia";
             
        }
        elseif($fir =='SBCW'){
            return "Curitiba";
             
        }
        elseif($fir =='SBRE'){
            return "Recife";
             
        }
        elseif($fir =='SCCZ'){
            return "Punta Arenas";
             
        }
        elseif($fir =='SCEZ'){
            return "Santiago";
             
        }
        elseif($fir =='SCFZ'){
            return "Antofagasta";
             
        }
        elseif($fir =='SCIZ'){
            return "Easter";
             
        }
        elseif($fir =='SCTZ'){
            return "Puerto Montt";
             
        }
        elseif($fir =='SEFG'){
            return "Guayaquil";
             
        }
        elseif($fir =='SGFA'){
            return "Asuncion";
             
        }
        elseif($fir =='SKEC'){
            return "Barranquilla";
             
        }
        elseif($fir =='SKED'){
            return "Bogota";
             
        }
        elseif($fir =='SLLF'){
            return "La Paz";
             
        }
        elseif($fir =='SMPM'){
            return "Paramaribo";
             
        }
        elseif($fir =='SOOO'){
            return "Rochambeau";
             
        }
        elseif($fir =='SPIM'){
            return "Lima";
             
        }
        elseif($fir =='SUEO'){
            return "Montevideo";
             
        }
        elseif($fir =='SVZM'){
            return "Maiquetia";
             
        }
        elseif($fir =='SYGC'){
            return "Georgetown";
             
        }
        elseif($fir =='TJZS'){
            return "San Juan";
             
        }
        elseif($fir =='TNCF'){
            return "Curacao";
             
        }
        elseif($fir =='TTZP'){
            return "Piarco";
             
        }
        elseif($fir =='UAAX'){
            return "Almaty";
             
        }
        elseif($fir =='UACX'){
            return "Astana";
             
        }
        elseif($fir =='UAFX'){
            return "Bishkek";
             
        }
        elseif($fir =='UASS'){
            return "Semipalatinsk";
             
        }
        elseif($fir =='UDDD'){
            return "Yerevan";
             
        }
        elseif($fir =='UEMH'){
            return "Tyoply Klyuch";
             
        }
        elseif($fir =='UENN'){
            return "Nyurba";
             
        }
        elseif($fir =='UESS'){
            return "Chersky";
             
        }
        elseif($fir =='UESU'){
            return "Zyryanka";
             
        }
        elseif($fir =='UEVV'){
            return "Gigansk";
             
        }
        elseif($fir =='UGEE'){
            return "Yerevan/Zvartnots";
             
        }
        elseif($fir =='UGGG'){
            return "Tbilisi";
             
        }
        elseif($fir =='UHBI'){
            return "Magdagachi";
             
        }
        elseif($fir =='UHMI'){
            return "Mys Shmidta";
             
        }
        elseif($fir =='UHMP'){
            return "Pevek";
             
        }
        elseif($fir =='UHNN'){
            return "Nikolayevsk-na-Amure";
             
        }
        elseif($fir =='UHPT'){
            return "Tilichiki";
             
        }
        elseif($fir =='UHPP'){
            return "Petropavlovsk-Kamchatsky";
             
        }
        elseif($fir =='UHPU'){
            return "Ust-Khairyozovo";
             
        }
        elseif($fir =='UHSH'){
            return "Okha";
             
        }
        elseif($fir =='UIKB'){
            return "Bodaybo";
             
        }
        elseif($fir =='UIKK'){
            return "Kirensk";
             
        }
        elseif($fir =='UKBV'){
            return "Kyiv";
             
        }
        elseif($fir =='UKCV'){
            return "Donetsk";
             
        }
        elseif($fir =='UKDV'){
            return "Dnepropetrovsk";
             
        }
        elseif($fir =='UKFV'){
            return "Simferopol";
             
        }
        elseif($fir =='UKHV'){
            return "Kharkiv";
             
        }
        elseif($fir =='UKLV'){
            return "Lviv";
             
        }
        elseif($fir =='UKOV'){
            return "Odesa";
             
        }
        elseif($fir =='ULLL'){
            return "Sankt Peterburg";
             
        }
        elseif($fir =='ULOL'){
            return "Velikiye Luki";
             
        }
        elseif($fir =='UMKD'){
            return "Kazan";
             
        }
        elseif($fir =='UMMV'){
            return "Minsk";
             
        }
        elseif($fir =='UNLL'){
            return "Kolpashevo";
             
        }
        elseif($fir =='UOTT'){
            return "Turukhansk";
             
        }
        elseif($fir =='URRV'){
            return "Rostov-Na-Donu";
             
        }
        elseif($fir =='USDK'){
            return "Mys Kamenny";
             
        }
        elseif($fir =='USHB'){
            return "Beryozovo";
             
        }
        elseif($fir =='USHH'){
            return "Khanty-Mansiysk";
             
        }
        elseif($fir =='UTAK'){
            return "Turkmenbashi";
             
        }
        elseif($fir =='UTNR'){
            return "Nukus";
             
        }
        elseif($fir =='UTSD'){
            return "Samarkand";
             
        }
        elseif($fir =='UTTR'){
            return "Tashkent";
             
        }
        elseif($fir =='UUWV'){
            return "Moscow";
             
        }
        elseif($fir =='UUYW'){
            return "Vorkuta";
             
        }
        elseif($fir =='UUYY'){
            return "Syktyvkar";
             
        }
        elseif($fir =='UWOO'){
            return "Orenburg/Tsentralny";
             
        }
        elseif($fir =='VABF'){
            return "Mumbai";
             
        }
        elseif($fir =='VCCC'){
            return "Colombo";
             
        }
        elseif($fir =='VECF'){
            return "Kolkata";
             
        }
        elseif($fir =='VGFR'){
            return "Dhaka";
             
        }
        elseif($fir =='VHHK'){
            return "Hong Kong";
             
        }
        elseif($fir =='VIDF'){
            return "Delhi";
             
        }
        elseif($fir =='VLIV'){
            return "Vientiane";
             
        }
        elseif($fir =='VLVT'){
            return "Vientiane";
             
        }
        elseif($fir =='VNSM'){
            return "Kathmandu";
             
        }
        elseif($fir =='VOMF'){
            return "Chennai";
             
        }
        elseif($fir =='VRMF'){
            return "Male";
             
        }
        elseif($fir =='VTBB'){
            return "Bangkok";
             
        }
        elseif($fir =='VVTS'){
            return "Ho-Chi-Minh";
             
        }
        elseif($fir =='VVVV'){
            return "Hanoi";
             
        }
        elseif($fir =='VYMD'){
            return "";
             
        }
        elseif($fir =='VYYF'){
            return "Yangon";
             
        }
        elseif($fir =='WAAF'){
            return "Ujung Pandang";
             
        }
        elseif($fir =='WAAZ'){
            return "Ujung Pandang ACC";
             
        }
        elseif($fir =='WABZ'){
            return "Biak Sector";
             
        }
        elseif($fir =='WADZ'){
            return "Bali";
             
        }
        elseif($fir =='WAJZ'){
            return "";
             
        }
        elseif($fir =='WAKZ'){
            return "Merauke";
             
        }
        elseif($fir =='WALZ'){
            return "Balikpapan";
             
        }
        elseif($fir =='WAMZ'){
            return "Manado";
             
        }
        elseif($fir =='WAOZ'){
            return "Banjarmasin";
             
        }
        elseif($fir =='WAPZ'){
            return "Ambon";
             
        }
        elseif($fir =='WATZ'){
            return "Kupang";
             
        }
        elseif($fir =='WBFC'){
            return "Kota Kinabalu";
             
        }
        elseif($fir =='WIIF'){
            return "Jakarta";
             
        }
        elseif($fir =='WIII'){
            return "Soekarno–Hatta";
             
        }
        elseif($fir =='WIIZ'){
            return "Jakarta ACC";
             
        }
        elseif($fir =='WIMZ'){
            return "Medan";
             
        }
        elseif($fir =='WIOZ'){
            return "Pontianak";
             
        }
        elseif($fir =='WIPZ'){
            return "Palembang";
             
        }
        elseif($fir =='WMFC'){
            return "Kuala Lumpur";
             
        }
        elseif($fir =='WSJC'){
            return "Singapore";
             
        }
        elseif($fir =='YBBB'){
            return "Brisbane";
             
        }
        elseif($fir =='YMMM'){
            return "Melbourne";
             
        }
        elseif($fir =='ZBPE'){
            return "Beijing";
             
        }
        elseif($fir =='ZGJD'){
            return "Zhuhai";
             
        }
        elseif($fir =='ZGZU'){
            return "Guangzhou";
             
        }
        elseif($fir =='ZHWH'){
            return "Wuhan";
             
        }
        elseif($fir =='ZJSA'){
            return "Sanya";
             
        }
        elseif($fir =='ZKKP'){
            return "Pyongyang";
             
        }
        elseif($fir =='ZLHW'){
            return "Lanzhou";
             
        }
        elseif($fir =='ZMUB'){
            return "Ulan Bator";
             
        }
        elseif($fir =='ZPKM'){
            return "Kunming";
             
        }
        elseif($fir =='ZSHA'){
            return "Shanghai";
             
        }
        elseif($fir =='ZWUQ'){
            return "Urumqi";
             
        }
        elseif($fir =='ZYSH'){
            return "Shenyang";
             
        }
        else{
            return null;
        }

    }

    public static function OriginatingOffice($kode){
        if($kode == 'YPRM'){
            return 'Adelaide';
        }
        elseif($kode == 'YPRF'){
            return 'Perth';
        }
        elseif($kode == 'YBRF'){
            return 'Brisbane';
        }
        elseif($kode == 'YSRF'){
            return 'Sydney';
        }
        elseif($kode == 'YPDM'){
            return 'Darwin';
        }
        elseif($kode == 'YMRF'){
            return 'Melbourne';
        }
        elseif($kode == 'YMHF'){
            return 'Hobart';
        }
        elseif($kode == 'YMMC'){
            return 'Aviation Weather Centre Melbourne';
        }
        else{
            return null;
        }
    }

    public static function singkatan($kode){
        if($kode =='AT'){
            return "at";
        }
        elseif($kode =='BLW'){
            return "Below";
        }
        elseif($kode == 'CLD'){
            return "Cloud";
        }
        elseif($kode == 'CLD:'){
            return "Cloud:";
        }
        elseif($kode == 'CNL'){
            return "Cancel";
        }
        elseif($kode == 'DS'){
            return "Dust storm";
        }
        elseif($kode == 'E'){
            return "East or eastern longitude";
        }
        elseif($kode == 'EMBD'){
            return "Embedded";
        }
        elseif($kode == 'ERUPTION'){
            return "ERUPTION";
        }
        elseif($kode == 'EXTD'){
            return "Extends";
        }
        elseif($kode == 'FCST'){
            return "Forecast";
        }
        elseif($kode == 'FIR'){
            return "Flight Information Region";
        }
        elseif($kode == 'FIR/UIR'){
            return "Flight Information Region/Upper Information Region";
        }
        elseif($kode == 'FL'){
            return "Flight level";
        }
        elseif($kode == 'FRQ'){
            return "Frequent";
        }
        elseif($kode == 'FT'){
            return "Feet";
        }
        elseif($kode == 'FZRA'){
            return "Freezing rain";
        }
        elseif($kode == 'GR'){
            return "Hail";
        }
        elseif($kode == 'HVY'){
            return "Heavy";
        }
        elseif($kode == 'ICE'){
            return "Icing";
        }
        elseif($kode == 'INTSF'){
            return "Intensifying";
        }
        elseif($kode == 'KT'){
            return "Knots";
        }
        elseif($kode == 'LOC'){
            return "Location";
        }
        elseif($kode == 'MOV'){
            return "Moving";
        }
        elseif($kode == 'MT'){
            return "Mount";
        }
        elseif($kode == 'MTW'){
            return "Mountain Wave";
        }
        elseif($kode == 'N'){
            return "North or northern latitude";
        }
        elseif($kode == 'NC'){
            return "No Change (in intensity)";
        }
        elseif($kode == 'NM'){
            return "Nautical Miles";
        }
        elseif($kode == 'NW'){
            return "North West";
        }
        
        elseif($kode == 'OBS'){
            return "Observed";
        }
        elseif($kode == 'OBSC'){
            return "Obscured";
        }
        elseif($kode == 'PSN'){
            return "Position";
        }
        elseif($kode == 'RDOACT CLD'){
            return "Radioactive cloud";
        }
        elseif($kode == 'S'){
            return "South or southern latitude";
        }
        elseif($kode == 'SEV'){
            return "Severe";
        }
        elseif($kode == 'SFC'){
            return "Surface";
        }
        elseif($kode == 'SQL'){
            return "Squall line";
        }
        elseif($kode == 'SS'){
            return "Sand storm";
        }
        elseif($kode == 'STNR'){
            return "Stationary";
        }
        elseif($kode == 'STS'){
            return "Status";
        }
        elseif($kode == 'TC'){
            return "Tropical cyclone";
        }
        elseif($kode == 'TOP'){
            return "Top (of cloud)";
        }
        elseif($kode == 'TS'){
            return "Thunderstorm";
        }
        elseif($kode == 'TURB'){
            return "Turbulence";
        }
        elseif($kode == 'UIR'){
            return "Upper Information Region";
        }
        elseif($kode == 'VA'){
            return "Volcanic ash";
        }
        elseif($kode == 'W'){
            return "West or western longitude";
        }
        elseif($kode == 'WI'){
            return "Within (area)";
        }
        elseif($kode == 'WKN'){
            return "Weakening (intensity)";
        }
        elseif($kode == 'Z'){
            return "Code for UTC (Universal Time Coordinated)";
        }
        else{
            return null;
        }
    }
}
