<?php
defined('BASEPATH') or exit('No direct script access allowed');
// panggil autoload dompdf nya
require_once 'dompdf-master/autoload.inc.php';
use Dompdf\Dompdf;
use Dompdf\Options;

class pdfsartifikat
{
    public function generate($html, $filename, $paper, $orientation, $stream = true)
    {
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        //  $dompdf->setPaper($paper, $orientation);

        $dompdf->set_paper($paper, $orientation);

        $dompdf->render();
        if ($stream) {
            $dompdf->stream($filename . ".pdf", array("Attachment" => 0));
        } else {
            return $dompdf->output();
        }
    }
}
