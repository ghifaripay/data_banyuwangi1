<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

// require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';
// require_once APPPATH.'third_party/tcpdf/tcpdf.php '; 
require_once APPPATH.'third_party/vendor/tecnickcom/tcpdf/tcpdf.php';
require_once APPPATH.'third_party/vendor/setasign/fpdi/src/autoload.php';

use setasign\Fpdi;

class Pdf extends Fpdi\TcpdfFpdi 
{ 
    function __construct() 
    { 
        parent ::__construct(); 
        
    } 
} 

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */