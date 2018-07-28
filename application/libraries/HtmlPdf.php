<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("./vendor/dompdf/dompdf/autoload.inc.php");
use Dompdf\Dompdf;

class HtmlPdf extends Dompdf{


  public function generate($html,$filename,$stream=TRUE, $paper = 'A4', $orientation = "portrait"){
    // exit('sdgfdg');
   
 
    // $dompdf = new \DOMPDF();
  
    // $dompdf->load_html($html);

    // $dompdf->render();
    // $dompdf->stream($filename.'.pdf',array("Attachment"=>0));
    $dompdf = new DOMPDF();
    $dompdf->loadHtml($html);
    $dompdf->setPaper($paper, $orientation);
    $dompdf->render();
    if ($stream) {
        $dompdf->stream($filename.".pdf", array("Attachment" => 0));
    } else {
        return $dompdf->output();
    }
  }
}