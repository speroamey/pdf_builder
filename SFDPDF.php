<?php
require_once './TCPDF/tcpdf.php';

class SFDPDF extends TCPDF {
    public function __construct() {
        parent::__construct();
    }
    
    public function Header() {
        $imageFile = K_PATH_IMAGES.'/header.png';
        $this->Image($imageFile);
    }
    
    public function Footer() {
        $this->SetXY(10, -15);
        $imageFile = K_PATH_IMAGES.'/footer.png';
        $this->Image($imageFile);
    }
}
