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
        foreach($rawstring as $data){

            $piece[] = explode(" ", $data->dataraw);
        }
        return $piece;
    }

    public static function fir($fir,$response){
        if($fir = 'AGGG'){
            $response .= "Honiara";
            return $response;
        }
        elseif($fir =='ANAU'){
            $response .= "Nauru";
            return $response;
        }
        elseif($fir =='AYPM'){
            $response .= "Port Moresby";
            return $response;
        }
        elseif($fir =='BGGL'){
            $response .= "Nuuk";
            return $response;
        }
        elseif($fir =='BIRD'){
            $response .= "Reykjavik";
            return $response;
        }
        elseif($fir =='CZEG'){
            $response .= "Edmonton";
            return $response;
        }
        elseif($fir =='CZQM'){
            $response .= "Moncton Southern";
            return $response;
        }
        elseif($fir =='CZQX'){
            $response .= "Gander Domestic";
            return $response;
        }
        elseif($fir =='CZUL'){
            $response .= "Montreal";
            return $response;
        }
        elseif($fir =='CZVR'){
            $response .= "Vancouver";
            return $response;
        }
        elseif($fir =='CZWG'){
            $response .= "Winnipeg";
            return $response;
        }
        elseif($fir =='CZYZ'){
            $response .= "Toronto";
            return $response;
        }
        elseif($fir =='DAAA'){
            $response .= "Alger";
            return $response;
        }
        elseif($fir =='DGAC'){
            $response .= "Accra";
            return $response;
        }
        elseif($fir =='DIII'){
            $response .= "Abidjan";
            return $response;
        }
        elseif($fir =='DNKK'){
            $response .= "Kano";
            return $response;
        }
        elseif($fir =='DRRR'){
            $response .= "Niamey";
            return $response;
        }
        elseif($fir =='DTTC'){
            $response .= "Tunis";
            return $response;
        }
        elseif($fir =='EZZZ'){
            $response .= "Eurocontrol";
            return $response;
        }
        elseif($fir =='EBBU'){
            $response .= "Brussels";
            return $response;
        }
        elseif($fir =='EDBB'){
            $response .= "Berlin";
            return $response;
        }
        elseif($fir =='EDGG'){
            $response .= "Langen";
            return $response;
        }
        elseif($fir =='EDLL'){
            $response .= "Düsseldorf";
            return $response;
        }
        elseif($fir =='EDMM'){
            $response .= "Munich";
            return $response;
        }
        elseif($fir =='EDUU'){
            $response .= "Rhein";
            return $response;
        }
        elseif($fir =='EDVV'){
            $response .= "Hannover";
            return $response;
        }
        elseif($fir =='EDWW'){
            $response .= "Bremen";
            return $response;
        }
        elseif($fir =='EDYY'){
            $response .= "Maastricht";
            return $response;
        }
        elseif($fir =='EETT'){
            $response .= "Tallinn";
            return $response;
        }
        elseif($fir =='EFIN'){
            $response .= "Finland";
            return $response;
        }
        elseif($fir =='EGGX'){
            $response .= "Shanwick Oceanic";
            return $response;
        }
        elseif($fir =='EGPX'){
            $response .= "Scottish";
            return $response;
        }
        elseif($fir =='EGQQ'){
            $response .= "Scottish (Mil)";
            return $response;
        }
        elseif($fir =='EGTT'){
            $response .= "London";
            return $response;
        }
        elseif($fir =='EHAA'){
            $response .= "Amsterdam";
            return $response;
        }
        elseif($fir =='EISN'){
            $response .= "Shannon";
            return $response;
        }
        elseif($fir =='EKDK'){
            $response .= "Copenhagen";
            return $response;
        }
        elseif($fir =='ENOB'){
            $response .= "Bodo Oceanic";
            return $response;
        }
        elseif($fir =='ENOR'){
            $response .= "Norway";
            return $response;
        }
        elseif($fir =='EPWW'){
            $response .= "Warszawa";
            return $response;
        }
        elseif($fir =='ESAA'){
            $response .= "Sweden";
            return $response;
        }
        elseif($fir =='ESMM'){
            $response .= "Malmo";
            return $response;
        }
        elseif($fir =='ESOS'){
            $response .= "Stockholm";
            return $response;
        }
        elseif($fir =='EVRR'){
            $response .= "Riga";
            return $response;
        }
        elseif($fir =='EYVL'){
            $response .= "Vilnius";
            return $response;
        }
        elseif($fir =='FABL'){
            $response .= "Bloemfontein";
            return $response;
        }
        elseif($fir =='FACA'){
            $response .= "Capetown";
            return $response;
        }
        elseif($fir =='FACT'){
            $response .= "Capetown";
            return $response;
        }
        elseif($fir =='FADN'){
            $response .= "Durban";
            return $response;
        }
        elseif($fir =='FAJO'){
            $response .= "Johannesburg Oceanic";
            return $response;
        }
        elseif($fir =='FAJX'){
            $response .= "Johannesburg";
            return $response;
        }
        elseif($fir =='FAPX'){
            $response .= "Port Elizabeth";
            return $response;
        }
        elseif($fir =='FBGR'){
            $response .= "Gaborone";
            return $response;
        }
        elseif($fir =='FCCC'){
            $response .= "Brazzaville";
            return $response;
        }
        elseif($fir =='FIMM'){
            $response .= "Mauritius";
            return $response;
        }
        elseif($fir =='FKKK'){
            $response .= "Douala";
            return $response;
        }
        elseif($fir =='FLFI'){
            $response .= "Lusaka";
            return $response;
        }
        elseif($fir =='FMCX'){
            $response .= "Comoros";
            return $response;
        }
        elseif($fir =='FMMM'){
            $response .= "Antananarivo";
            return $response;
        }
        elseif($fir =='FNAN'){
            $response .= "Luanda";
            return $response;
        }
        elseif($fir =='FOOO'){
            $response .= "Libreville";
            return $response;
        }
        elseif($fir =='FQBE'){
            $response .= "Beira";
            return $response;
        }
        elseif($fir =='FSSS'){
            $response .= "Seychelles";
            return $response;
        }
        elseif($fir =='FTTT'){
            $response .= "N'Djamena";
            return $response;
        }
        elseif($fir =='FVHF'){
            $response .= "Harare";
            return $response;
        }
        elseif($fir =='FWLL'){
            $response .= "Lilongwe";
            return $response;
        }
        elseif($fir =='FYWH'){
            $response .= "Windhoek";
            return $response;
        }
        elseif($fir =='FZZA'){
            $response .= "Kinshasa";
            return $response;
        }
        elseif($fir =='GCCC'){
            $response .= "Canarias";
            return $response;
        }
        elseif($fir =='GLRX'){
            $response .= "Roberts";
            return $response;
        }
        elseif($fir =='GMMM'){
            $response .= "Casablanca";
            return $response;
        }
        elseif($fir =='GOOO'){
            $response .= "Dakar Oceanic";
            return $response;
        }
        elseif($fir =='GVSC'){
            $response .= "Sal Oceanic";
            return $response;
        }
        elseif($fir =='HAAA'){
            $response .= "Addis Ababa";
            return $response;
        }
        elseif($fir =='HBBA'){
            $response .= "Bujumbura";
            return $response;
        }
        elseif($fir =='HCSM'){
            $response .= "Mogadishu";
            return $response;
        }
        elseif($fir =='HECC'){
            $response .= "Cairo";
            return $response;
        }
        elseif($fir =='HHAA'){
            $response .= "Asmara";
            return $response;
        }
        elseif($fir =='HKNA'){
            $response .= "Nairobi";
            return $response;
        }
        elseif($fir =='HLLL'){
            $response .= "Tripoli";
            return $response;
        }
        elseif($fir =='HRYR'){
            $response .= "Kigali";
            return $response;
        }
        elseif($fir =='HSSX'){
            $response .= "Khartoum";
            return $response;
        }
        elseif($fir =='HTDC'){
            $response .= "Dar Es Salaam";
            return $response;
        }
        elseif($fir =='HUEC'){
            $response .= "Entebbe";
            return $response;
        }
        elseif($fir =='KZAB'){
            $response .= "Albuquerque";
            return $response;
        }
        elseif($fir =='KZAK'){
            $response .= "Oakland Oceanic";
            return $response;
        }
        elseif($fir =='KZAU'){
            $response .= "Chicago";
            return $response;
        }
        elseif($fir =='KZBW'){
            $response .= "Boston";
            return $response;
        }
        elseif($fir =='KZDC'){
            $response .= "Washington";
            return $response;
        }
        elseif($fir =='KZDV'){
            $response .= "Denver";
            return $response;
        }
        elseif($fir =='KZFW'){
            $response .= "Ft Worth";
            return $response;
        }
        elseif($fir =='KZHU'){
            $response .= "Houston";
            return $response;
        }
        elseif($fir =='KZID'){
            $response .= "Indianapolis";
            return $response;
        }
        elseif($fir =='KZJX'){
            $response .= "Jacksonville";
            return $response;
        }
        elseif($fir =='KZKC'){
            $response .= "Kansas City";
            return $response;
        }
        elseif($fir =='KZLA'){
            $response .= "Los Angeles";
            return $response;
        }
        elseif($fir =='KZLC'){
            $response .= "Salt Lake";
            return $response;
        }
        elseif($fir =='KZMA'){
            $response .= "Miami";
            return $response;
        }
        elseif($fir =='KZME'){
            $response .= "Memphis";
            return $response;
        }
        elseif($fir =='KZMP'){
            $response .= "Minneapolis";
            return $response;
        }
        elseif($fir =='KZNY'){
            $response .= "New York";
            return $response;
        }
        elseif($fir =='KZOA'){
            $response .= "Oakland";
            return $response;
        }
        elseif($fir =='KZOB'){
            $response .= "Cleveland";
            return $response;
        }
        elseif($fir =='KZSE'){
            $response .= "Seattle";
            return $response;
        }
        elseif($fir =='KZTL'){
            $response .= "Atlanta";
            return $response;
        }
        elseif($fir =='KZWY'){
            $response .= "New York Oceanic";
            return $response;
        }
        elseif($fir =='LAAA'){
            $response .= "Tirana";
            return $response;
        }
        elseif($fir =='LBSR'){
            $response .= "Sofia";
            return $response;
        }
        elseif($fir =='LBWR'){
            $response .= "Varna";
            return $response;
        }
        elseif($fir =='LCCC'){
            $response .= "Nicosia";
            return $response;
        }
        elseif($fir =='LDZO'){
            $response .= "Zagreb";
            return $response;
        }
        elseif($fir =='LECB'){
            $response .= "Barcelona";
            return $response;
        }
        elseif($fir =='LECM'){
            $response .= "Madrid";
            return $response;
        }
        elseif($fir =='LECS'){
            $response .= "Sevilla";
            return $response;
        }
        elseif($fir =='LFBB'){
            $response .= "Bordeaux";
            return $response;
        }
        elseif($fir =='LFEE'){
            $response .= "Reims";
            return $response;
        }
        elseif($fir =='LFFF'){
            $response .= "Paris";
            return $response;
        }
        elseif($fir =='LFMM'){
            $response .= "Marseille";
            return $response;
        }
        elseif($fir =='LFRR'){
            $response .= "Brest";
            return $response;
        }
        elseif($fir =='LGGG'){
            $response .= "Athens";
            return $response;
        }
        elseif($fir =='LHCC'){
            $response .= "Budapest";
            return $response;
        }
        elseif($fir =='LIBB'){
            $response .= "Brindisi";
            return $response;
        }
        elseif($fir =='LIMM'){
            $response .= "Milano";
            return $response;
        }
        elseif($fir =='LIRR'){
            $response .= "Roma";
            return $response;
        }
        elseif($fir =='LJLA'){
            $response .= "Ljubljana";
            return $response;
        }
        elseif($fir =='LKAA'){
            $response .= "Praha";
            return $response;
        }
        elseif($fir =='LLLL'){
            $response .= "Tel-Aviv";
            return $response;
        }
        elseif($fir =='LMMM'){
            $response .= "Malta";
            return $response;
        }
        elseif($fir =='LOVV'){
            $response .= "Wien";
            return $response;
        }
        elseif($fir =='LPPC'){
            $response .= "Lisboa";
            return $response;
        }
        elseif($fir =='LPPO'){
            $response .= "Santa Maria Oceanic";
            return $response;
        }
        elseif($fir =='LQSB'){
            $response .= "Sarajevo";
            return $response;
        }
        elseif($fir =='LRBB'){
            $response .= "Bucuresti";
            return $response;
        }
        elseif($fir =='LSAG'){
            $response .= "Geneve";
            return $response;
        }
        elseif($fir =='LSAS'){
            $response .= "Switzerland";
            return $response;
        }
        elseif($fir =='LSAZ'){
            $response .= "Zurich";
            return $response;
        }
        elseif($fir =='LTAA'){
            $response .= "Ankara";
            return $response;
        }
        elseif($fir =='LTBB'){
            $response .= "Istanbul";
            return $response;
        }
        elseif($fir =='LUUU'){
            $response .= "Chisinau";
            return $response;
        }
        elseif($fir =='LWSS'){
            $response .= "Skopje";
            return $response;
        }
        elseif($fir =='LYBA'){
            $response .= "Beograd";
            return $response;
        }
        elseif($fir =='LZBB'){
            $response .= "Bratislava";
            return $response;
        }
        elseif($fir =='MDCS'){
            $response .= "Santo Domingo";
            return $response;
        }
        elseif($fir =='MHTG'){
            $response .= "Central American";
            return $response;
        }
        elseif($fir =='MKJK'){
            $response .= "Kingston";
            return $response;
        }
        elseif($fir =='MMEX'){
            $response .= "Mexico";
            return $response;
        }
        elseif($fir =='MMFO'){
            $response .= "Mazatlan Oceanic";
            return $response;
        }
        elseif($fir =='MMFR'){
            $response .= "Mexico";
            return $response;
        }
        elseif($fir =='MMID'){
            $response .= "Merida";
            return $response;
        }
        elseif($fir =='MMTY'){
            $response .= "Monterrey";
            return $response;
        }
        elseif($fir =='MMZT'){
            $response .= "Mazatlan";
            return $response;
        }
        elseif($fir =='MPZL'){
            $response .= "Panama";
            return $response;
        }
        elseif($fir =='MTEG'){
            $response .= "Port-Au-Prince";
            return $response;
        }
        elseif($fir =='MUFH'){
            $response .= "Habana";
            return $response;
        }
        elseif($fir =='MYNA'){
            $response .= "Nassau";
            return $response;
        }
        elseif($fir =='NFFF'){
            $response .= "Nadi";
            return $response;
        }
        elseif($fir =='NTTT'){
            $response .= "Tahiti";
            return $response;
        }
        elseif($fir =='NWWX'){
            $response .= "Noumea";
            return $response;
        }
        elseif($fir =='NZZC'){
            $response .= "New Zealand";
            return $response;
        }
        elseif($fir =='NZZO'){
            $response .= "Auckland Oceanic";
            return $response;
        }
        elseif($fir =='OAKX'){
            $response .= "Kabul";
            return $response;
        }
        elseif($fir =='OBBB'){
            $response .= "Bahrain";
            return $response;
        }
        elseif($fir =='OEJD'){
            $response .= "Jeddah";
            return $response;
        }
        elseif($fir =='OIIX'){
            $response .= "Tehran";
            return $response;
        }
        elseif($fir =='OJAC'){
            $response .= "Amman";
            return $response;
        }
        elseif($fir =='OKAC'){
            $response .= "Kuwait";
            return $response;
        }
        elseif($fir =='OLBB'){
            $response .= "Beirut";
            return $response;
        }
        elseif($fir =='OMAE'){
            $response .= "Emirates";
            return $response;
        }
        elseif($fir =='OOMM'){
            $response .= "Muscat";
            return $response;
        }
        elseif($fir =='OPKR'){
            $response .= "Karachi";
            return $response;
        }
        elseif($fir =='OPLR'){
            $response .= "Lahore";
            return $response;
        }
        elseif($fir =='ORBB'){
            $response .= "Baghdad";
            return $response;
        }
        elseif($fir =='ORMM'){
            $response .= "ORMM";
            return $response;
        }
        elseif($fir =='OSTT'){
            $response .= "Damascus";
            return $response;
        }
        elseif($fir =='OYSC'){
            $response .= "Sanaa";
            return $response;
        }
        elseif($fir =='PAZA'){
            $response .= "Anchorage";
            return $response;
        }
        elseif($fir =='PAZN'){
            $response .= "Anchorage Oceanic";
            return $response;
        }
        elseif($fir =='PHZH'){
            $response .= "Honolulu";
            return $response;
        }
        elseif($fir =='RCAA'){
            $response .= "Taipei";
            return $response;
        }
        elseif($fir =='RJJJ'){
            $response .= "Fukuoka";
            return $response;
        }
        elseif($fir =='RKRR'){
            $response .= "Incheon";
            return $response;
        }
        elseif($fir =='RPHI'){
            $response .= "Manila";
            return $response;
        }
        elseif($fir =='SACF'){
            $response .= "Cordoba";
            return $response;
        }
        elseif($fir =='SACU'){
            $response .= "Cordoba";
            return $response;
        }
        elseif($fir =='SAEF'){
            $response .= "Ezeiza";
            return $response;
        }
        elseif($fir =='SAEU'){
            $response .= "Ezeiza";
            return $response;
        }
        elseif($fir =='SAMF'){
            $response .= "Mendoza";
            return $response;
        }
        elseif($fir =='SAMV'){
            $response .= "Mendoza";
            return $response;
        }
        elseif($fir =='SARR'){
            $response .= "Resistencia";
            return $response;
        }
        elseif($fir =='SAVF'){
            $response .= "Comodoro Rivadavia";
            return $response;
        }
        elseif($fir =='SAVU'){
            $response .= "Comodoro Rivadavia";
            return $response;
        }
        elseif($fir =='SBAO'){
            $response .= "Atlantico";
            return $response;
        }
        elseif($fir =='SBAZ'){
            $response .= "Amazonica";
            return $response;
        }
        elseif($fir =='SBBS'){
            $response .= "Brasilia";
            return $response;
        }
        elseif($fir =='SBCW'){
            $response .= "Curitiba";
            return $response;
        }
        elseif($fir =='SBRE'){
            $response .= "Recife";
            return $response;
        }
        elseif($fir =='SCCZ'){
            $response .= "Punta Arenas";
            return $response;
        }
        elseif($fir =='SCEZ'){
            $response .= "Santiago";
            return $response;
        }
        elseif($fir =='SCFZ'){
            $response .= "Antofagasta";
            return $response;
        }
        elseif($fir =='SCIZ'){
            $response .= "Easter";
            return $response;
        }
        elseif($fir =='SCTZ'){
            $response .= "Puerto Montt";
            return $response;
        }
        elseif($fir =='SEFG'){
            $response .= "Guayaquil";
            return $response;
        }
        elseif($fir =='SGFA'){
            $response .= "Asuncion";
            return $response;
        }
        elseif($fir =='SKEC'){
            $response .= "Barranquilla";
            return $response;
        }
        elseif($fir =='SKED'){
            $response .= "Bogota";
            return $response;
        }
        elseif($fir =='SLLF'){
            $response .= "La Paz";
            return $response;
        }
        elseif($fir =='SMPM'){
            $response .= "Paramaribo";
            return $response;
        }
        elseif($fir =='SOOO'){
            $response .= "Rochambeau";
            return $response;
        }
        elseif($fir =='SPIM'){
            $response .= "Lima";
            return $response;
        }
        elseif($fir =='SUEO'){
            $response .= "Montevideo";
            return $response;
        }
        elseif($fir =='SVZM'){
            $response .= "Maiquetia";
            return $response;
        }
        elseif($fir =='SYGC'){
            $response .= "Georgetown";
            return $response;
        }
        elseif($fir =='TJZS'){
            $response .= "San Juan";
            return $response;
        }
        elseif($fir =='TNCF'){
            $response .= "Curacao";
            return $response;
        }
        elseif($fir =='TTZP'){
            $response .= "Piarco";
            return $response;
        }
        elseif($fir =='UAAX'){
            $response .= "Almaty";
            return $response;
        }
        elseif($fir =='UACX'){
            $response .= "Astana";
            return $response;
        }
        elseif($fir =='UAFX'){
            $response .= "Bishkek";
            return $response;
        }
        elseif($fir =='UASS'){
            $response .= "Semipalatinsk";
            return $response;
        }
        elseif($fir =='UDDD'){
            $response .= "Yerevan";
            return $response;
        }
        elseif($fir =='UEMH'){
            $response .= "Tyoply Klyuch";
            return $response;
        }
        elseif($fir =='UENN'){
            $response .= "Nyurba";
            return $response;
        }
        elseif($fir =='UESS'){
            $response .= "Chersky";
            return $response;
        }
        elseif($fir =='UESU'){
            $response .= "Zyryanka";
            return $response;
        }
        elseif($fir =='UEVV'){
            $response .= "Gigansk";
            return $response;
        }
        elseif($fir =='UGEE'){
            $response .= "Yerevan/Zvartnots";
            return $response;
        }
        elseif($fir =='UGGG'){
            $response .= "Tbilisi";
            return $response;
        }
        elseif($fir =='UHBI'){
            $response .= "Magdagachi";
            return $response;
        }
        elseif($fir =='UHMI'){
            $response .= "Mys Shmidta";
            return $response;
        }
        elseif($fir =='UHMP'){
            $response .= "Pevek";
            return $response;
        }
        elseif($fir =='UHNN'){
            $response .= "Nikolayevsk-na-Amure";
            return $response;
        }
        elseif($fir =='UHPT'){
            $response .= "Tilichiki";
            return $response;
        }
        elseif($fir =='UHPU'){
            $response .= "Ust-Khairyozovo";
            return $response;
        }
        elseif($fir =='UHSH'){
            $response .= "Okha";
            return $response;
        }
        elseif($fir =='UIKB'){
            $response .= "Bodaybo";
            return $response;
        }
        elseif($fir =='UIKK'){
            $response .= "Kirensk";
            return $response;
        }
        elseif($fir =='UKBV'){
            $response .= "Kyiv";
            return $response;
        }
        elseif($fir =='UKCV'){
            $response .= "Donetsk";
            return $response;
        }
        elseif($fir =='UKDV'){
            $response .= "Dnepropetrovsk";
            return $response;
        }
        elseif($fir =='UKFV'){
            $response .= "Simferopol";
            return $response;
        }
        elseif($fir =='UKHV'){
            $response .= "Kharkiv";
            return $response;
        }
        elseif($fir =='UKLV'){
            $response .= "Lviv";
            return $response;
        }
        elseif($fir =='UKOV'){
            $response .= "Odesa";
            return $response;
        }
        elseif($fir =='ULLL'){
            $response .= "Sankt Peterburg";
            return $response;
        }
        elseif($fir =='ULOL'){
            $response .= "Velikiye Luki";
            return $response;
        }
        elseif($fir =='UMKD'){
            $response .= "Kazan";
            return $response;
        }
        elseif($fir =='UMMV'){
            $response .= "Minsk";
            return $response;
        }
        elseif($fir =='UNLL'){
            $response .= "Kolpashevo";
            return $response;
        }
        elseif($fir =='UOTT'){
            $response .= "Turukhansk";
            return $response;
        }
        elseif($fir =='URRV'){
            $response .= "Rostov-Na-Donu";
            return $response;
        }
        elseif($fir =='USDK'){
            $response .= "Mys Kamenny";
            return $response;
        }
        elseif($fir =='USHB'){
            $response .= "Beryozovo";
            return $response;
        }
        elseif($fir =='USHH'){
            $response .= "Khanty-Mansiysk";
            return $response;
        }
        elseif($fir =='UTAK'){
            $response .= "Turkmenbashi";
            return $response;
        }
        elseif($fir =='UTNR'){
            $response .= "Nukus";
            return $response;
        }
        elseif($fir =='UTSD'){
            $response .= "Samarkand";
            return $response;
        }
        elseif($fir =='UTTR'){
            $response .= "Tashkent";
            return $response;
        }
        elseif($fir =='UUWV'){
            $response .= "Moscow";
            return $response;
        }
        elseif($fir =='UUYW'){
            $response .= "Vorkuta";
            return $response;
        }
        elseif($fir =='UUYY'){
            $response .= "Syktyvkar";
            return $response;
        }
        elseif($fir =='UWOO'){
            $response .= "Orenburg/Tsentralny";
            return $response;
        }
        elseif($fir =='VABF'){
            $response .= "Mumbai";
            return $response;
        }
        elseif($fir =='VCCC'){
            $response .= "Colombo";
            return $response;
        }
        elseif($fir =='VECF'){
            $response .= "Kolkata";
            return $response;
        }
        elseif($fir =='VGFR'){
            $response .= "Dhaka";
            return $response;
        }
        elseif($fir =='VHHK'){
            $response .= "Hong Kong";
            return $response;
        }
        elseif($fir =='VIDF'){
            $response .= "Delhi";
            return $response;
        }
        elseif($fir =='VLIV'){
            $response .= "Vientiane";
            return $response;
        }
        elseif($fir =='VLVT'){
            $response .= "Vientiane";
            return $response;
        }
        elseif($fir =='VNSM'){
            $response .= "Kathmandu";
            return $response;
        }
        elseif($fir =='VOMF'){
            $response .= "Chennai";
            return $response;
        }
        elseif($fir =='VRMF'){
            $response .= "Male";
            return $response;
        }
        elseif($fir =='VTBB'){
            $response .= "Bangkok";
            return $response;
        }
        elseif($fir =='VVTS'){
            $response .= "Ho-Chi-Minh";
            return $response;
        }
        elseif($fir =='VVVV'){
            $response .= "Hanoi";
            return $response;
        }
        elseif($fir =='VYMD'){
            $response .= "";
            return $response;
        }
        elseif($fir =='VYYF'){
            $response .= "Yangon";
            return $response;
        }
        elseif($fir =='WAAF'){
            $response .= "Ujung Pandang";
            return $response;
        }
        elseif($fir =='WAAZ'){
            $response .= "Ujung Pandang ACC";
            return $response;
        }
        elseif($fir =='WABZ'){
            $response .= "Biak Sector";
            return $response;
        }
        elseif($fir =='WADZ'){
            $response .= "Bali";
            return $response;
        }
        elseif($fir =='WAJZ'){
            $response .= "";
            return $response;
        }
        elseif($fir =='WAKZ'){
            $response .= "Merauke";
            return $response;
        }
        elseif($fir =='WALZ'){
            $response .= "Balikpapan";
            return $response;
        }
        elseif($fir =='WAMZ'){
            $response .= "Manado";
            return $response;
        }
        elseif($fir =='WAOZ'){
            $response .= "Banjarmasin";
            return $response;
        }
        elseif($fir =='WAPZ'){
            $response .= "Ambon";
            return $response;
        }
        elseif($fir =='WATZ'){
            $response .= "Kupang";
            return $response;
        }
        elseif($fir =='WBFC'){
            $response .= "Kota Kinabalu";
            return $response;
        }
        elseif($fir =='WIIF'){
            $response .= "Jakarta";
            return $response;
        }
        elseif($fir =='WIIZ'){
            $response .= "Jakarta ACC";
            return $response;
        }
        elseif($fir =='WIMZ'){
            $response .= "Medan";
            return $response;
        }
        elseif($fir =='WIOZ'){
            $response .= "Pontianak";
            return $response;
        }
        elseif($fir =='WIPZ'){
            $response .= "Palembang";
            return $response;
        }
        elseif($fir =='WMFC'){
            $response .= "Kuala Lumpur";
            return $response;
        }
        elseif($fir =='WSJC'){
            $response .= "Singapore";
            return $response;
        }
        elseif($fir =='YBBB'){
            $response .= "Brisbane";
            return $response;
        }
        elseif($fir =='YMMM'){
            $response .= "Melbourne";
            return $response;
        }
        elseif($fir =='ZBPE'){
            $response .= "Beijing";
            return $response;
        }
        elseif($fir =='ZGJD'){
            $response .= "Zhuhai";
            return $response;
        }
        elseif($fir =='ZGZU'){
            $response .= "Guangzhou";
            return $response;
        }
        elseif($fir =='ZHWH'){
            $response .= "Wuhan";
            return $response;
        }
        elseif($fir =='ZJSA'){
            $response .= "Sanya";
            return $response;
        }
        elseif($fir =='ZKKP'){
            $response .= "Pyongyang";
            return $response;
        }
        elseif($fir =='ZLHW'){
            $response .= "Lanzhou";
            return $response;
        }
        elseif($fir =='ZMUB'){
            $response .= "Ulan Bator";
            return $response;
        }
        elseif($fir =='ZPKM'){
            $response .= "Kunming";
            return $response;
        }
        elseif($fir =='ZSHA'){
            $response .= "Shanghai";
            return $response;
        }
        elseif($fir =='ZWUQ'){
            $response .= "Urumqi";
            return $response;
        }
        elseif($fir =='ZYSH'){
            $response .= "Shenyang";
            return $response;
        }
    }
}
