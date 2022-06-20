<?php
class Productpdf extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    function fpdf()
    {
        ob_start();
        require('fpdf.php');

        $query = $this->db->get('products')->result_array();
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        //   $pdf->Cell(40,10,'wooow mireille!');
        foreach ($query as $row) {
            foreach ($row as $header => $value)
                $pdf->cell(50, 12, $header, 1);
        }

        foreach ($query as $data) {
            $pdf->Ln();
            foreach ($data as $in) {

                $pdf->cell(50, 12, $in, 1);
            }

            foreach ($data as $value) {
                $pdf->Cell(50, 12, $value);
            }
        }
        $pdf->Output();
        ob_end_flush();
    }
}
