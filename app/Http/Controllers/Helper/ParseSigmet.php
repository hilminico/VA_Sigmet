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

    public static function fir($fir){
        $response = '';

        if($fir = 'AGGG'){
            $response .= "Honiara";
            return $response;
        }
        elseif($fir =='ANAU'){

        }
        elseif($fir =='AYPM'){

        }
        elseif($fir =='BGGL'){

        }
        elseif($fir =='BIRD'){

        }
        elseif($fir =='CZEG'){

        }
        elseif($fir =='CZQM'){

        }
        elseif($fir =='CZQX'){

        }
        elseif($fir =='CZUL'){

        }
        elseif($fir =='CZVR'){

        }
        elseif($fir =='CZWG'){

        }
        elseif($fir =='CZYZ'){

        }
        elseif($fir =='DAAA'){

        }
        elseif($fir =='DGAC'){

        }
        elseif($fir =='DIII'){

        }
        elseif($fir =='DNKK'){

        }
        elseif($fir =='DRRR'){

        }
        elseif($fir =='DTTC'){

        }
        elseif($fir =='EZZZ'){

        }
        elseif($fir =='EBBU'){

        }
        elseif($fir =='EDBB'){

        }
        elseif($fir =='EDGG'){

        }
        elseif($fir =='EDLL'){

        }
        elseif($fir =='EDMM'){

        }
        elseif($fir =='EDUU'){

        }
        elseif($fir =='EDVV'){

        }
        elseif($fir =='EDWW'){

        }
        elseif($fir =='EDYY'){

        }
        elseif($fir =='EETT'){

        }
        elseif($fir =='EFIN'){

        }
        elseif($fir =='EGGX'){

        }
        elseif($fir =='EGPX'){

        }
        elseif($fir =='EGQQ'){

        }
        elseif($fir =='EGTT'){

        }
        elseif($fir =='EHAA'){

        }
        elseif($fir =='EISN'){

        }
        elseif($fir =='EKDK'){

        }
        elseif($fir =='ENOB'){

        }
        elseif($fir =='ENOR'){

        }
        elseif($fir =='EPWW'){

        }
        elseif($fir =='ESAA'){

        }
        elseif($fir =='ESMM'){

        }
        elseif($fir =='ESOS'){

        }
        elseif($fir =='EVRR'){

        }
        elseif($fir =='EYVL'){

        }
        elseif($fir =='FABL'){

        }
        elseif($fir =='FACA'){

        }
        elseif($fir =='FACT'){

        }
        elseif($fir =='FADN'){

        }
        elseif($fir =='FAJO'){

        }
        elseif($fir =='FAJX'){

        }
        elseif($fir =='FAPX'){

        }
        elseif($fir =='FBGR'){

        }
        elseif($fir =='FCCC'){

        }
        elseif($fir =='FIMM'){

        }
        elseif($fir =='FKKK'){

        }
        elseif($fir =='FLFI'){

        }
        elseif($fir =='FMCX'){

        }
        elseif($fir =='FMMM'){

        }
        elseif($fir =='FNAN'){

        }
        elseif($fir =='FOOO'){

        }
        elseif($fir =='FQBE'){

        }
        elseif($fir =='FSSS'){

        }
        elseif($fir =='FTTT'){

        }
        elseif($fir =='FVHF'){

        }
        elseif($fir =='FWLL'){

        }
        elseif($fir =='FYWH'){

        }
        elseif($fir =='FZZA'){

        }
        elseif($fir =='GCCC'){

        }
        elseif($fir =='GLRX'){

        }
        elseif($fir =='GMMM'){

        }
        elseif($fir =='GOOO'){

        }
        elseif($fir =='GVSC'){

        }
        elseif($fir =='HAAA'){

        }
        elseif($fir =='HBBA'){

        }
        elseif($fir =='HCSM'){

        }
        elseif($fir =='HECC'){

        }
        elseif($fir =='HHAA'){

        }
        elseif($fir =='HKNA'){

        }
        elseif($fir =='HLLL'){

        }
        elseif($fir =='HRYR'){

        }
        elseif($fir =='HSSX'){

        }
        elseif($fir =='HTDC'){

        }
        elseif($fir =='HUEC'){

        }
        elseif($fir =='KZAB'){

        }
        elseif($fir =='KZAK'){

        }
        elseif($fir =='KZAU'){

        }
        elseif($fir =='KZBW'){

        }
        elseif($fir =='KZDC'){

        }
        elseif($fir =='KZDV'){

        }
        elseif($fir =='KZFW'){

        }
        elseif($fir =='KZHU'){

        }
        elseif($fir =='KZID'){

        }
        elseif($fir =='KZJX'){

        }
        elseif($fir =='KZKC'){

        }
        elseif($fir =='KZLA'){

        }
        elseif($fir =='KZLC'){

        }
        elseif($fir =='KZMA'){

        }
        elseif($fir =='KZME'){

        }
        elseif($fir =='KZMP'){

        }
        elseif($fir =='KZNY'){

        }
        elseif($fir =='KZOA'){

        }
        elseif($fir =='KZOB'){

        }
        elseif($fir =='KZSE'){

        }
        elseif($fir =='KZTL'){

        }
        elseif($fir =='KZWY'){

        }
        elseif($fir =='LAAA'){

        }
        elseif($fir =='LBSR'){

        }
        elseif($fir =='LBWR'){

        }
        elseif($fir =='LCCC'){

        }
        elseif($fir =='LDZO'){

        }
        elseif($fir =='LECB'){

        }
        elseif($fir =='LECM'){

        }
        elseif($fir =='LECS'){

        }
        elseif($fir =='LFBB'){

        }
        elseif($fir =='LFEE'){

        }
        elseif($fir =='LFFF'){

        }
        elseif($fir =='LFMM'){

        }
        elseif($fir =='LFRR'){

        }
        elseif($fir =='LGGG'){

        }
        elseif($fir =='LHCC'){

        }
        elseif($fir =='LIBB'){

        }
        elseif($fir =='LIMM'){

        }
        elseif($fir =='LIRR'){

        }
        elseif($fir =='LJLA'){

        }
        elseif($fir =='LKAA'){

        }
        elseif($fir =='LLLL'){

        }
        elseif($fir =='LMMM'){

        }
        elseif($fir =='LOVV'){

        }
        elseif($fir =='LPPC'){

        }
        elseif($fir =='LPPO'){

        }
        elseif($fir =='LQSB'){

        }
        elseif($fir =='LRBB'){

        }
        elseif($fir =='LSAG'){

        }
        elseif($fir =='LSAS'){

        }
        elseif($fir =='LSAZ'){

        }
        elseif($fir =='LTAA'){

        }
        elseif($fir =='LTBB'){

        }
        elseif($fir =='LUUU'){

        }
        elseif($fir =='LWSS'){

        }
        elseif($fir =='LYBA'){

        }
        elseif($fir =='LZBB'){

        }
        elseif($fir =='MDCS'){

        }
        elseif($fir =='MHTG'){

        }
        elseif($fir =='MKJK'){

        }
        elseif($fir =='MMEX'){

        }
        elseif($fir =='MMFO'){

        }
        elseif($fir =='MMFR'){

        }
        elseif($fir =='MMID'){

        }
        elseif($fir =='MMTY'){

        }
        elseif($fir =='MMZT'){

        }
        elseif($fir =='MPZL'){

        }
        elseif($fir =='MTEG'){

        }
        elseif($fir =='MUFH'){

        }
        elseif($fir =='MYNA'){

        }
        elseif($fir =='NFFF'){

        }
        elseif($fir =='NTTT'){

        }
        elseif($fir =='NWWX'){

        }
        elseif($fir =='NZZC'){

        }
        elseif($fir =='NZZO'){

        }
        elseif($fir =='OAKX'){

        }
        elseif($fir =='OBBB'){

        }
        elseif($fir =='OEJD'){

        }
        elseif($fir =='OIIX'){

        }
        elseif($fir =='OJAC'){

        }
        elseif($fir =='OKAC'){

        }
        elseif($fir =='OLBB'){

        }
        elseif($fir =='OMAE'){

        }
        elseif($fir =='OOMM'){

        }
        elseif($fir =='OPKR'){

        }
        elseif($fir =='OPLR'){

        }
        elseif($fir =='ORBB'){

        }
        elseif($fir =='ORMM'){

        }
        elseif($fir =='OSTT'){

        }
        elseif($fir =='OYSC'){

        }
        elseif($fir =='PAZA'){

        }
        elseif($fir =='PAZN'){

        }
        elseif($fir =='PHZH'){

        }
        elseif($fir =='RCAA'){

        }
        elseif($fir =='RJJJ'){

        }
        elseif($fir =='RKRR'){

        }
        elseif($fir =='RPHI'){

        }
        elseif($fir =='SACF'){

        }
        elseif($fir =='SACU'){

        }
        elseif($fir =='SAEF'){

        }
        elseif($fir =='SAEU'){

        }
        elseif($fir =='SAMF'){

        }
        elseif($fir =='SAMV'){

        }
        elseif($fir =='SARR'){

        }
        elseif($fir =='SAVF'){

        }
        elseif($fir =='SAVU'){

        }
        elseif($fir =='SBAO'){

        }
        elseif($fir =='SBAZ'){

        }
        elseif($fir =='SBBS'){

        }
        elseif($fir =='SBCW'){

        }
        elseif($fir =='SBRE'){

        }
        elseif($fir =='SCCZ'){

        }
        elseif($fir =='SCEZ'){

        }
        elseif($fir =='SCFZ'){

        }
        elseif($fir =='SCIZ'){

        }
        elseif($fir =='SCTZ'){

        }
        elseif($fir =='SEFG'){

        }
        elseif($fir =='SGFA'){

        }
        elseif($fir =='SKEC'){

        }
        elseif($fir =='SKED'){

        }
        elseif($fir =='SLLF'){

        }
        elseif($fir =='SMPM'){

        }
        elseif($fir =='SOOO'){

        }
        elseif($fir =='SPIM'){

        }
        elseif($fir =='SUEO'){

        }
        elseif($fir =='SVZM'){

        }
        elseif($fir =='SYGC'){

        }
        elseif($fir =='TJZS'){

        }
        elseif($fir =='TNCF'){

        }
        elseif($fir =='TTZP'){

        }
        elseif($fir =='UAAX'){

        }
        elseif($fir =='UACX'){

        }
        elseif($fir =='UAFX'){

        }
        elseif($fir =='UASS'){

        }
        elseif($fir =='UDDD'){

        }
        elseif($fir =='UEMH'){

        }
        elseif($fir =='UENN'){

        }
        elseif($fir =='UESS'){

        }
        elseif($fir =='UESU'){

        }
        elseif($fir =='UEVV'){

        }
        elseif($fir =='UGEE'){

        }
        elseif($fir =='UGGG'){

        }
        elseif($fir =='UHBI'){

        }
        elseif($fir =='UHMI'){

        }
        elseif($fir =='UHMP'){

        }
        elseif($fir =='UHNN'){

        }
        elseif($fir =='UHPT'){

        }
        elseif($fir =='UHPU'){

        }
        elseif($fir =='UHSH'){

        }
        elseif($fir =='UIKB'){

        }
        elseif($fir =='UIKK'){

        }
        elseif($fir =='UKBV'){

        }
        elseif($fir =='UKCV'){

        }
        elseif($fir =='UKDV'){

        }
        elseif($fir =='UKFV'){

        }
        elseif($fir =='UKHV'){

        }
        elseif($fir =='UKLV'){

        }
        elseif($fir =='UKOV'){

        }
        elseif($fir =='ULLL'){

        }
        elseif($fir =='ULOL'){

        }
        elseif($fir =='UMKD'){

        }
        elseif($fir =='UMMV'){

        }
        elseif($fir =='UNLL'){

        }
        elseif($fir =='UOTT'){

        }
        elseif($fir =='URRV'){

        }
        elseif($fir =='USDK'){

        }
        elseif($fir =='USHB'){

        }
        elseif($fir =='USHH'){

        }
        elseif($fir =='UTAK'){

        }
        elseif($fir =='UTNR'){

        }
        elseif($fir =='UTSD'){

        }
        elseif($fir =='UTTR'){

        }
        elseif($fir =='UUWV'){

        }
        elseif($fir =='UUYW'){

        }
        elseif($fir =='UUYY'){

        }
        elseif($fir =='UWOO'){

        }
        elseif($fir =='VABF'){

        }
        elseif($fir =='VCCC'){

        }
        elseif($fir =='VECF'){

        }
        elseif($fir =='VGFR'){

        }
        elseif($fir =='VHHK'){

        }
        elseif($fir =='VIDF'){

        }
        elseif($fir =='VLIV'){

        }
        elseif($fir =='VLVT'){

        }
        elseif($fir =='VNSM'){

        }
        elseif($fir =='VOMF'){

        }
        elseif($fir =='VRMF'){

        }
        elseif($fir =='VTBB'){

        }
        elseif($fir =='VVTS'){

        }
        elseif($fir =='VVVV'){

        }
        elseif($fir =='VYMD'){

        }
        elseif($fir =='VYYF'){

        }
        elseif($fir =='WAAF'){

        }
        elseif($fir =='WAAZ'){

        }
        elseif($fir =='WABZ'){

        }
        elseif($fir =='WADZ'){

        }
        elseif($fir =='WAJZ'){

        }
        elseif($fir =='WAKZ'){

        }
        elseif($fir =='WALZ'){

        }
        elseif($fir =='WAMZ'){

        }
        elseif($fir =='WAOZ'){

        }
        elseif($fir =='WAPZ'){

        }
        elseif($fir =='WATZ'){

        }
        elseif($fir =='WBFC'){

        }
        elseif($fir =='WIIF'){

        }
        elseif($fir =='WIIZ'){

        }
        elseif($fir =='WIMZ'){

        }
        elseif($fir =='WIOZ'){

        }
        elseif($fir =='WIPZ'){

        }
        elseif($fir =='WMFC'){

        }
        elseif($fir =='WSJC'){

        }
        elseif($fir =='YBBB'){

        }
        elseif($fir =='YMMM'){

        }
        elseif($fir =='ZBPE'){

        }
        elseif($fir =='ZGJD'){

        }
        elseif($fir =='ZGZU'){

        }
        elseif($fir =='ZHWH'){

        }
        elseif($fir =='ZJSA'){

        }
        elseif($fir =='ZKKP'){

        }
        elseif($fir =='ZLHW'){

        }
        elseif($fir =='ZMUB'){

        }
        elseif($fir =='ZPKM'){

        }
        elseif($fir =='ZSHA'){

        }
        elseif($fir =='ZWUQ'){

        }
        elseif($fir =='ZYSH'){

        }
    }
}
