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
        
        //tokenizing 
        $piece[] = explode(" ", $rawstring);

        return $piece;
    }

    public static function FIR($kode){
        $response ='';
        if($fir = 'AGGG'){
            $response .= "Honiara";
             
        }
        elseif($fir =='ANAU'){
            $response .= "Nauru";
             
        }
        elseif($fir =='AYPM'){
            $response .= "Port Moresby";
             
        }
        elseif($fir =='BGGL'){
            $response .= "Nuuk";
             
        }
        elseif($fir =='BIRD'){
            $response .= "Reykjavik";
             
        }
        elseif($fir =='CZEG'){
            $response .= "Edmonton";
             
        }
        elseif($fir =='CZQM'){
            $response .= "Moncton Southern";
             
        }
        elseif($fir =='CZQX'){
            $response .= "Gander Domestic";
             
        }
        elseif($fir =='CZUL'){
            $response .= "Montreal";
             
        }
        elseif($fir =='CZVR'){
            $response .= "Vancouver";
             
        }
        elseif($fir =='CZWG'){
            $response .= "Winnipeg";
             
        }
        elseif($fir =='CZYZ'){
            $response .= "Toronto";
             
        }
        elseif($fir =='DAAA'){
            $response .= "Alger";
             
        }
        elseif($fir =='DGAC'){
            $response .= "Accra";
             
        }
        elseif($fir =='DIII'){
            $response .= "Abidjan";
             
        }
        elseif($fir =='DNKK'){
            $response .= "Kano";
             
        }
        elseif($fir =='DRRR'){
            $response .= "Niamey";
             
        }
        elseif($fir =='DTTC'){
            $response .= "Tunis";
             
        }
        elseif($fir =='EZZZ'){
            $response .= "Eurocontrol";
             
        }
        elseif($fir =='EBBU'){
            $response .= "Brussels";
             
        }
        elseif($fir =='EDBB'){
            $response .= "Berlin";
             
        }
        elseif($fir =='EDGG'){
            $response .= "Langen";
             
        }
        elseif($fir =='EDLL'){
            $response .= "Düsseldorf";
             
        }
        elseif($fir =='EDMM'){
            $response .= "Munich";
             
        }
        elseif($fir =='EDUU'){
            $response .= "Rhein";
             
        }
        elseif($fir =='EDVV'){
            $response .= "Hannover";
             
        }
        elseif($fir =='EDWW'){
            $response .= "Bremen";
             
        }
        elseif($fir =='EDYY'){
            $response .= "Maastricht";
             
        }
        elseif($fir =='EETT'){
            $response .= "Tallinn";
             
        }
        elseif($fir =='EFIN'){
            $response .= "Finland";
             
        }
        elseif($fir =='EGGX'){
            $response .= "Shanwick Oceanic";
             
        }
        elseif($fir =='EGPX'){
            $response .= "Scottish";
             
        }
        elseif($fir =='EGQQ'){
            $response .= "Scottish (Mil)";
             
        }
        elseif($fir =='EGTT'){
            $response .= "London";
             
        }
        elseif($fir =='EHAA'){
            $response .= "Amsterdam";
             
        }
        elseif($fir =='EISN'){
            $response .= "Shannon";
             
        }
        elseif($fir =='EKDK'){
            $response .= "Copenhagen";
             
        }
        elseif($fir =='ENOB'){
            $response .= "Bodo Oceanic";
             
        }
        elseif($fir =='ENOR'){
            $response .= "Norway";
             
        }
        elseif($fir =='EPWW'){
            $response .= "Warszawa";
             
        }
        elseif($fir =='ESAA'){
            $response .= "Sweden";
             
        }
        elseif($fir =='ESMM'){
            $response .= "Malmo";
             
        }
        elseif($fir =='ESOS'){
            $response .= "Stockholm";
             
        }
        elseif($fir =='EVRR'){
            $response .= "Riga";
             
        }
        elseif($fir =='EYVL'){
            $response .= "Vilnius";
             
        }
        elseif($fir =='FABL'){
            $response .= "Bloemfontein";
             
        }
        elseif($fir =='FACA'){
            $response .= "Capetown";
             
        }
        elseif($fir =='FACT'){
            $response .= "Capetown";
             
        }
        elseif($fir =='FADN'){
            $response .= "Durban";
             
        }
        elseif($fir =='FAJO'){
            $response .= "Johannesburg Oceanic";
             
        }
        elseif($fir =='FAJX'){
            $response .= "Johannesburg";
             
        }
        elseif($fir =='FAPX'){
            $response .= "Port Elizabeth";
             
        }
        elseif($fir =='FBGR'){
            $response .= "Gaborone";
             
        }
        elseif($fir =='FCCC'){
            $response .= "Brazzaville";
             
        }
        elseif($fir =='FIMM'){
            $response .= "Mauritius";
             
        }
        elseif($fir =='FKKK'){
            $response .= "Douala";
             
        }
        elseif($fir =='FLFI'){
            $response .= "Lusaka";
             
        }
        elseif($fir =='FMCX'){
            $response .= "Comoros";
             
        }
        elseif($fir =='FMMM'){
            $response .= "Antananarivo";
             
        }
        elseif($fir =='FNAN'){
            $response .= "Luanda";
             
        }
        elseif($fir =='FOOO'){
            $response .= "Libreville";
             
        }
        elseif($fir =='FQBE'){
            $response .= "Beira";
             
        }
        elseif($fir =='FSSS'){
            $response .= "Seychelles";
             
        }
        elseif($fir =='FTTT'){
            $response .= "N'Djamena";
             
        }
        elseif($fir =='FVHF'){
            $response .= "Harare";
             
        }
        elseif($fir =='FWLL'){
            $response .= "Lilongwe";
             
        }
        elseif($fir =='FYWH'){
            $response .= "Windhoek";
             
        }
        elseif($fir =='FZZA'){
            $response .= "Kinshasa";
             
        }
        elseif($fir =='GCCC'){
            $response .= "Canarias";
             
        }
        elseif($fir =='GLRX'){
            $response .= "Roberts";
             
        }
        elseif($fir =='GMMM'){
            $response .= "Casablanca";
             
        }
        elseif($fir =='GOOO'){
            $response .= "Dakar Oceanic";
             
        }
        elseif($fir =='GVSC'){
            $response .= "Sal Oceanic";
             
        }
        elseif($fir =='HAAA'){
            $response .= "Addis Ababa";
             
        }
        elseif($fir =='HBBA'){
            $response .= "Bujumbura";
             
        }
        elseif($fir =='HCSM'){
            $response .= "Mogadishu";
             
        }
        elseif($fir =='HECC'){
            $response .= "Cairo";
             
        }
        elseif($fir =='HHAA'){
            $response .= "Asmara";
             
        }
        elseif($fir =='HKNA'){
            $response .= "Nairobi";
             
        }
        elseif($fir =='HLLL'){
            $response .= "Tripoli";
             
        }
        elseif($fir =='HRYR'){
            $response .= "Kigali";
             
        }
        elseif($fir =='HSSX'){
            $response .= "Khartoum";
             
        }
        elseif($fir =='HTDC'){
            $response .= "Dar Es Salaam";
             
        }
        elseif($fir =='HUEC'){
            $response .= "Entebbe";
             
        }
        elseif($fir =='KZAB'){
            $response .= "Albuquerque";
             
        }
        elseif($fir =='KZAK'){
            $response .= "Oakland Oceanic";
             
        }
        elseif($fir =='KZAU'){
            $response .= "Chicago";
             
        }
        elseif($fir =='KZBW'){
            $response .= "Boston";
             
        }
        elseif($fir =='KZDC'){
            $response .= "Washington";
             
        }
        elseif($fir =='KZDV'){
            $response .= "Denver";
             
        }
        elseif($fir =='KZFW'){
            $response .= "Ft Worth";
             
        }
        elseif($fir =='KZHU'){
            $response .= "Houston";
             
        }
        elseif($fir =='KZID'){
            $response .= "Indianapolis";
             
        }
        elseif($fir =='KZJX'){
            $response .= "Jacksonville";
             
        }
        elseif($fir =='KZKC'){
            $response .= "Kansas City";
             
        }
        elseif($fir =='KZLA'){
            $response .= "Los Angeles";
             
        }
        elseif($fir =='KZLC'){
            $response .= "Salt Lake";
             
        }
        elseif($fir =='KZMA'){
            $response .= "Miami";
             
        }
        elseif($fir =='KZME'){
            $response .= "Memphis";
             
        }
        elseif($fir =='KZMP'){
            $response .= "Minneapolis";
             
        }
        elseif($fir =='KZNY'){
            $response .= "New York";
             
        }
        elseif($fir =='KZOA'){
            $response .= "Oakland";
             
        }
        elseif($fir =='KZOB'){
            $response .= "Cleveland";
             
        }
        elseif($fir =='KZSE'){
            $response .= "Seattle";
             
        }
        elseif($fir =='KZTL'){
            $response .= "Atlanta";
             
        }
        elseif($fir =='KZWY'){
            $response .= "New York Oceanic";
             
        }
        elseif($fir =='LAAA'){
            $response .= "Tirana";
             
        }
        elseif($fir =='LBSR'){
            $response .= "Sofia";
             
        }
        elseif($fir =='LBWR'){
            $response .= "Varna";
             
        }
        elseif($fir =='LCCC'){
            $response .= "Nicosia";
             
        }
        elseif($fir =='LDZO'){
            $response .= "Zagreb";
             
        }
        elseif($fir =='LECB'){
            $response .= "Barcelona";
             
        }
        elseif($fir =='LECM'){
            $response .= "Madrid";
             
        }
        elseif($fir =='LECS'){
            $response .= "Sevilla";
             
        }
        elseif($fir =='LFBB'){
            $response .= "Bordeaux";
             
        }
        elseif($fir =='LFEE'){
            $response .= "Reims";
             
        }
        elseif($fir =='LFFF'){
            $response .= "Paris";
             
        }
        elseif($fir =='LFMM'){
            $response .= "Marseille";
             
        }
        elseif($fir =='LFRR'){
            $response .= "Brest";
             
        }
        elseif($fir =='LGGG'){
            $response .= "Athens";
             
        }
        elseif($fir =='LHCC'){
            $response .= "Budapest";
             
        }
        elseif($fir =='LIBB'){
            $response .= "Brindisi";
             
        }
        elseif($fir =='LIMM'){
            $response .= "Milano";
             
        }
        elseif($fir =='LIRR'){
            $response .= "Roma";
             
        }
        elseif($fir =='LJLA'){
            $response .= "Ljubljana";
             
        }
        elseif($fir =='LKAA'){
            $response .= "Praha";
             
        }
        elseif($fir =='LLLL'){
            $response .= "Tel-Aviv";
             
        }
        elseif($fir =='LMMM'){
            $response .= "Malta";
             
        }
        elseif($fir =='LOVV'){
            $response .= "Wien";
             
        }
        elseif($fir =='LPPC'){
            $response .= "Lisboa";
             
        }
        elseif($fir =='LPPO'){
            $response .= "Santa Maria Oceanic";
             
        }
        elseif($fir =='LQSB'){
            $response .= "Sarajevo";
             
        }
        elseif($fir =='LRBB'){
            $response .= "Bucuresti";
             
        }
        elseif($fir =='LSAG'){
            $response .= "Geneve";
             
        }
        elseif($fir =='LSAS'){
            $response .= "Switzerland";
             
        }
        elseif($fir =='LSAZ'){
            $response .= "Zurich";
             
        }
        elseif($fir =='LTAA'){
            $response .= "Ankara";
             
        }
        elseif($fir =='LTBB'){
            $response .= "Istanbul";
             
        }
        elseif($fir =='LUUU'){
            $response .= "Chisinau";
             
        }
        elseif($fir =='LWSS'){
            $response .= "Skopje";
             
        }
        elseif($fir =='LYBA'){
            $response .= "Beograd";
             
        }
        elseif($fir =='LZBB'){
            $response .= "Bratislava";
             
        }
        elseif($fir =='MDCS'){
            $response .= "Santo Domingo";
             
        }
        elseif($fir =='MHTG'){
            $response .= "Central American";
             
        }
        elseif($fir =='MKJK'){
            $response .= "Kingston";
             
        }
        elseif($fir =='MMEX'){
            $response .= "Mexico";
             
        }
        elseif($fir =='MMFO'){
            $response .= "Mazatlan Oceanic";
             
        }
        elseif($fir =='MMFR'){
            $response .= "Mexico";
             
        }
        elseif($fir =='MMID'){
            $response .= "Merida";
             
        }
        elseif($fir =='MMTY'){
            $response .= "Monterrey";
             
        }
        elseif($fir =='MMZT'){
            $response .= "Mazatlan";
             
        }
        elseif($fir =='MPZL'){
            $response .= "Panama";
             
        }
        elseif($fir =='MTEG'){
            $response .= "Port-Au-Prince";
             
        }
        elseif($fir =='MUFH'){
            $response .= "Habana";
             
        }
        elseif($fir =='MYNA'){
            $response .= "Nassau";
             
        }
        elseif($fir =='NFFF'){
            $response .= "Nadi";
             
        }
        elseif($fir =='NTTT'){
            $response .= "Tahiti";
             
        }
        elseif($fir =='NWWX'){
            $response .= "Noumea";
             
        }
        elseif($fir =='NZZC'){
            $response .= "New Zealand";
             
        }
        elseif($fir =='NZZO'){
            $response .= "Auckland Oceanic";
             
        }
        elseif($fir =='OAKX'){
            $response .= "Kabul";
             
        }
        elseif($fir =='OBBB'){
            $response .= "Bahrain";
             
        }
        elseif($fir =='OEJD'){
            $response .= "Jeddah";
             
        }
        elseif($fir =='OIIX'){
            $response .= "Tehran";
             
        }
        elseif($fir =='OJAC'){
            $response .= "Amman";
             
        }
        elseif($fir =='OKAC'){
            $response .= "Kuwait";
             
        }
        elseif($fir =='OLBB'){
            $response .= "Beirut";
             
        }
        elseif($fir =='OMAE'){
            $response .= "Emirates";
             
        }
        elseif($fir =='OOMM'){
            $response .= "Muscat";
             
        }
        elseif($fir =='OPKR'){
            $response .= "Karachi";
             
        }
        elseif($fir =='OPLR'){
            $response .= "Lahore";
             
        }
        elseif($fir =='ORBB'){
            $response .= "Baghdad";
             
        }
        elseif($fir =='ORMM'){
            $response .= "ORMM";
             
        }
        elseif($fir =='OSTT'){
            $response .= "Damascus";
             
        }
        elseif($fir =='OYSC'){
            $response .= "Sanaa";
             
        }
        elseif($fir =='PAZA'){
            $response .= "Anchorage";
             
        }
        elseif($fir =='PAZN'){
            $response .= "Anchorage Oceanic";
             
        }
        elseif($fir =='PHZH'){
            $response .= "Honolulu";
             
        }
        elseif($fir =='RCAA'){
            $response .= "Taipei";
             
        }
        elseif($fir =='RJJJ'){
            $response .= "Fukuoka";
             
        }
        elseif($fir =='RKRR'){
            $response .= "Incheon";
             
        }
        elseif($fir =='RPHI'){
            $response .= "Manila";
             
        }
        elseif($fir =='SACF'){
            $response .= "Cordoba";
             
        }
        elseif($fir =='SACU'){
            $response .= "Cordoba";
             
        }
        elseif($fir =='SAEF'){
            $response .= "Ezeiza";
             
        }
        elseif($fir =='SAEU'){
            $response .= "Ezeiza";
             
        }
        elseif($fir =='SAMF'){
            $response .= "Mendoza";
             
        }
        elseif($fir =='SAMV'){
            $response .= "Mendoza";
             
        }
        elseif($fir =='SARR'){
            $response .= "Resistencia";
             
        }
        elseif($fir =='SAVF'){
            $response .= "Comodoro Rivadavia";
             
        }
        elseif($fir =='SAVU'){
            $response .= "Comodoro Rivadavia";
             
        }
        elseif($fir =='SBAO'){
            $response .= "Atlantico";
             
        }
        elseif($fir =='SBAZ'){
            $response .= "Amazonica";
             
        }
        elseif($fir =='SBBS'){
            $response .= "Brasilia";
             
        }
        elseif($fir =='SBCW'){
            $response .= "Curitiba";
             
        }
        elseif($fir =='SBRE'){
            $response .= "Recife";
             
        }
        elseif($fir =='SCCZ'){
            $response .= "Punta Arenas";
             
        }
        elseif($fir =='SCEZ'){
            $response .= "Santiago";
             
        }
        elseif($fir =='SCFZ'){
            $response .= "Antofagasta";
             
        }
        elseif($fir =='SCIZ'){
            $response .= "Easter";
             
        }
        elseif($fir =='SCTZ'){
            $response .= "Puerto Montt";
             
        }
        elseif($fir =='SEFG'){
            $response .= "Guayaquil";
             
        }
        elseif($fir =='SGFA'){
            $response .= "Asuncion";
             
        }
        elseif($fir =='SKEC'){
            $response .= "Barranquilla";
             
        }
        elseif($fir =='SKED'){
            $response .= "Bogota";
             
        }
        elseif($fir =='SLLF'){
            $response .= "La Paz";
             
        }
        elseif($fir =='SMPM'){
            $response .= "Paramaribo";
             
        }
        elseif($fir =='SOOO'){
            $response .= "Rochambeau";
             
        }
        elseif($fir =='SPIM'){
            $response .= "Lima";
             
        }
        elseif($fir =='SUEO'){
            $response .= "Montevideo";
             
        }
        elseif($fir =='SVZM'){
            $response .= "Maiquetia";
             
        }
        elseif($fir =='SYGC'){
            $response .= "Georgetown";
             
        }
        elseif($fir =='TJZS'){
            $response .= "San Juan";
             
        }
        elseif($fir =='TNCF'){
            $response .= "Curacao";
             
        }
        elseif($fir =='TTZP'){
            $response .= "Piarco";
             
        }
        elseif($fir =='UAAX'){
            $response .= "Almaty";
             
        }
        elseif($fir =='UACX'){
            $response .= "Astana";
             
        }
        elseif($fir =='UAFX'){
            $response .= "Bishkek";
             
        }
        elseif($fir =='UASS'){
            $response .= "Semipalatinsk";
             
        }
        elseif($fir =='UDDD'){
            $response .= "Yerevan";
             
        }
        elseif($fir =='UEMH'){
            $response .= "Tyoply Klyuch";
             
        }
        elseif($fir =='UENN'){
            $response .= "Nyurba";
             
        }
        elseif($fir =='UESS'){
            $response .= "Chersky";
             
        }
        elseif($fir =='UESU'){
            $response .= "Zyryanka";
             
        }
        elseif($fir =='UEVV'){
            $response .= "Gigansk";
             
        }
        elseif($fir =='UGEE'){
            $response .= "Yerevan/Zvartnots";
             
        }
        elseif($fir =='UGGG'){
            $response .= "Tbilisi";
             
        }
        elseif($fir =='UHBI'){
            $response .= "Magdagachi";
             
        }
        elseif($fir =='UHMI'){
            $response .= "Mys Shmidta";
             
        }
        elseif($fir =='UHMP'){
            $response .= "Pevek";
             
        }
        elseif($fir =='UHNN'){
            $response .= "Nikolayevsk-na-Amure";
             
        }
        elseif($fir =='UHPT'){
            $response .= "Tilichiki";
             
        }
        elseif($fir =='UHPU'){
            $response .= "Ust-Khairyozovo";
             
        }
        elseif($fir =='UHSH'){
            $response .= "Okha";
             
        }
        elseif($fir =='UIKB'){
            $response .= "Bodaybo";
             
        }
        elseif($fir =='UIKK'){
            $response .= "Kirensk";
             
        }
        elseif($fir =='UKBV'){
            $response .= "Kyiv";
             
        }
        elseif($fir =='UKCV'){
            $response .= "Donetsk";
             
        }
        elseif($fir =='UKDV'){
            $response .= "Dnepropetrovsk";
             
        }
        elseif($fir =='UKFV'){
            $response .= "Simferopol";
             
        }
        elseif($fir =='UKHV'){
            $response .= "Kharkiv";
             
        }
        elseif($fir =='UKLV'){
            $response .= "Lviv";
             
        }
        elseif($fir =='UKOV'){
            $response .= "Odesa";
             
        }
        elseif($fir =='ULLL'){
            $response .= "Sankt Peterburg";
             
        }
        elseif($fir =='ULOL'){
            $response .= "Velikiye Luki";
             
        }
        elseif($fir =='UMKD'){
            $response .= "Kazan";
             
        }
        elseif($fir =='UMMV'){
            $response .= "Minsk";
             
        }
        elseif($fir =='UNLL'){
            $response .= "Kolpashevo";
             
        }
        elseif($fir =='UOTT'){
            $response .= "Turukhansk";
             
        }
        elseif($fir =='URRV'){
            $response .= "Rostov-Na-Donu";
             
        }
        elseif($fir =='USDK'){
            $response .= "Mys Kamenny";
             
        }
        elseif($fir =='USHB'){
            $response .= "Beryozovo";
             
        }
        elseif($fir =='USHH'){
            $response .= "Khanty-Mansiysk";
             
        }
        elseif($fir =='UTAK'){
            $response .= "Turkmenbashi";
             
        }
        elseif($fir =='UTNR'){
            $response .= "Nukus";
             
        }
        elseif($fir =='UTSD'){
            $response .= "Samarkand";
             
        }
        elseif($fir =='UTTR'){
            $response .= "Tashkent";
             
        }
        elseif($fir =='UUWV'){
            $response .= "Moscow";
             
        }
        elseif($fir =='UUYW'){
            $response .= "Vorkuta";
             
        }
        elseif($fir =='UUYY'){
            $response .= "Syktyvkar";
             
        }
        elseif($fir =='UWOO'){
            $response .= "Orenburg/Tsentralny";
             
        }
        elseif($fir =='VABF'){
            $response .= "Mumbai";
             
        }
        elseif($fir =='VCCC'){
            $response .= "Colombo";
             
        }
        elseif($fir =='VECF'){
            $response .= "Kolkata";
             
        }
        elseif($fir =='VGFR'){
            $response .= "Dhaka";
             
        }
        elseif($fir =='VHHK'){
            $response .= "Hong Kong";
             
        }
        elseif($fir =='VIDF'){
            $response .= "Delhi";
             
        }
        elseif($fir =='VLIV'){
            $response .= "Vientiane";
             
        }
        elseif($fir =='VLVT'){
            $response .= "Vientiane";
             
        }
        elseif($fir =='VNSM'){
            $response .= "Kathmandu";
             
        }
        elseif($fir =='VOMF'){
            $response .= "Chennai";
             
        }
        elseif($fir =='VRMF'){
            $response .= "Male";
             
        }
        elseif($fir =='VTBB'){
            $response .= "Bangkok";
             
        }
        elseif($fir =='VVTS'){
            $response .= "Ho-Chi-Minh";
             
        }
        elseif($fir =='VVVV'){
            $response .= "Hanoi";
             
        }
        elseif($fir =='VYMD'){
            $response .= "";
             
        }
        elseif($fir =='VYYF'){
            $response .= "Yangon";
             
        }
        elseif($fir =='WAAF'){
            $response .= "Ujung Pandang";
             
        }
        elseif($fir =='WAAZ'){
            $response .= "Ujung Pandang ACC";
             
        }
        elseif($fir =='WABZ'){
            $response .= "Biak Sector";
             
        }
        elseif($fir =='WADZ'){
            $response .= "Bali";
             
        }
        elseif($fir =='WAJZ'){
            $response .= "";
             
        }
        elseif($fir =='WAKZ'){
            $response .= "Merauke";
             
        }
        elseif($fir =='WALZ'){
            $response .= "Balikpapan";
             
        }
        elseif($fir =='WAMZ'){
            $response .= "Manado";
             
        }
        elseif($fir =='WAOZ'){
            $response .= "Banjarmasin";
             
        }
        elseif($fir =='WAPZ'){
            $response .= "Ambon";
             
        }
        elseif($fir =='WATZ'){
            $response .= "Kupang";
             
        }
        elseif($fir =='WBFC'){
            $response .= "Kota Kinabalu";
             
        }
        elseif($fir =='WIIF'){
            $response .= "Jakarta";
             
        }
        elseif($fir =='WIIZ'){
            $response .= "Jakarta ACC";
             
        }
        elseif($fir =='WIMZ'){
            $response .= "Medan";
             
        }
        elseif($fir =='WIOZ'){
            $response .= "Pontianak";
             
        }
        elseif($fir =='WIPZ'){
            $response .= "Palembang";
             
        }
        elseif($fir =='WMFC'){
            $response .= "Kuala Lumpur";
             
        }
        elseif($fir =='WSJC'){
            $response .= "Singapore";
             
        }
        elseif($fir =='YBBB'){
            $response .= "Brisbane";
             
        }
        elseif($fir =='YMMM'){
            $response .= "Melbourne";
             
        }
        elseif($fir =='ZBPE'){
            $response .= "Beijing";
             
        }
        elseif($fir =='ZGJD'){
            $response .= "Zhuhai";
             
        }
        elseif($fir =='ZGZU'){
            $response .= "Guangzhou";
             
        }
        elseif($fir =='ZHWH'){
            $response .= "Wuhan";
             
        }
        elseif($fir =='ZJSA'){
            $response .= "Sanya";
             
        }
        elseif($fir =='ZKKP'){
            $response .= "Pyongyang";
             
        }
        elseif($fir =='ZLHW'){
            $response .= "Lanzhou";
             
        }
        elseif($fir =='ZMUB'){
            $response .= "Ulan Bator";
             
        }
        elseif($fir =='ZPKM'){
            $response .= "Kunming";
             
        }
        elseif($fir =='ZSHA'){
            $response .= "Shanghai";
             
        }
        elseif($fir =='ZWUQ'){
            $response .= "Urumqi";
             
        }
        elseif($fir =='ZYSH'){
            $response .= "Shenyang";
             
        }

        return $response;
    }

    public static function OriginatingOffice($kode){
        if($kode == 'YPRM'){
            $response = 'Adelaide';
        }
        elseif($kode == 'YPRF'){
            $response = 'Perth';
        }
        elseif($kode == 'YBRF'){
            $response = 'Brisbane';
        }
        elseif($kode == 'YSRF'){
            $response = 'Sydney';
        }
        elseif($kode == 'YPDM'){
            $response = 'Darwin';
        }
        elseif($kode == 'YMRF'){
            $response = 'Melbourne';
        }
        elseif($kode == 'YMHF'){
            $response = 'Hobart';
        }
        elseif($kode == 'YMMC'){
            $response = 'Aviation Weather Centre Melbourne';
        }
    }

    public static function singkatan($kode){
        if($kode =='BLW'){
            return "Below";
        }
        elseif($kode == 'CLD'){
            return "Cloud";
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
        elseif($kode == 'EXTD'){
            return "Extends";
        }
        elseif($kode == 'FCST'){
            return "Forecast";
        }
        elseif($kode == 'FIR'){
            return "Flight Information Region";
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
    }
}
