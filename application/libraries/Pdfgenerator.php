<?php
defined('BASEPATH') or exit('No direct script access allowed');
// panggil autoload dompdf nya
require_once 'dompdf-master/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

class Pdfgenerator
{
    public function generate($html, $filename = '', $paper = 'A4', $orientation = 'landscape', $stream = true,  $download = true)
    {
        $options = new Options();
        $options->set('isRemoteEnabled', TRUE);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        if ($stream) {
            $dompdf->stream($filename . ".pdf", array("Attachment" => false));
        } else {
            return $dompdf->output();
        }

        if ($download)
            $dompdf->stream($filename . '.pdf', array('Attachment' => 1));
        else
            $dompdf->stream($filename . '.pdf', array('Attachment' => 0));
    }
}


// class Pdf
// {
//     function createPDF($html, $filename = '', $download = TRUE, $paper = 'A4', $orientation = 'portrait')
//     {
//         $dompdf = new Dompdf\DOMPDF();
//         $dompdf->load_html($html);
//         $dompdf->set_paper($paper, $orientation);
//         $dompdf->render();
//         if ($download)
//             $dompdf->stream($filename . '.pdf', array('Attachment' => 1));
//         else
//             $dompdf->stream($filename . '.pdf', array('Attachment' => 0));
//     }
// }
