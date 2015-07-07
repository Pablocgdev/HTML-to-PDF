<?php
/**
 * Created by PhpStorm.
 * User: CGDev
 * Date: 07/07/2015
 * Time: 3:33
 */

require 'C:\wamp\www\HTML_PDFGenerator\vendor\autoload.php';
define('DOMPDF_ENABLE_AUTOLOAD', false);
require_once 'C:\wamp/www/HTML_PDFGenerator/vendor/dompdf/dompdf/dompdf_config.inc.php';

$html =
    '<html><body>'.
    '<p>Build your pdf from html. <b>This</b> <i>is</i> <u>an</u> example. '.
    '</p>'.
    '</body></html>';

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("sample.pdf");

?>