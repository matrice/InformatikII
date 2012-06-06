<?php

function printOffer() {

    require_once('lib/tcpdf/config/lang/ger.php');
    require_once('lib/tcpdf/tcpdf.php');

    // create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Axel Dürkop');
    $pdf->SetTitle('Secondhandblumen Petersen | Angebot');
    $pdf->SetSubject('Angebot');
    $pdf->SetKeywords('Angebot, Blumen');

    // set default header data
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING);

    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    //set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    //set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    //set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    //set some language-dependent strings
    $pdf->setLanguageArray($l);

    // ---------------------------------------------------------

    // set default font subsetting mode
    $pdf->setFontSubsetting(true);

    // Set font
    // dejavusans is a UTF-8 Unicode font, if you only need to
    // print standard ASCII chars, you can use core fonts like
    // helvetica or times to reduce file size.
    $pdf->SetFont('dejavusans', '', 14, '', true);

    // Add a page
    // This method has several options, check the source code documentation for more information.
    $pdf->AddPage();

    // Set some content to print
    $html = '
    <h2>Angebot</h2>
    <table id="angebot">
        <tr class="even">
            <th class="first-column">Name</th>
            <th class="second-column">Farbe</th>
            <th class="third-column">Preis</th>
        </tr>
        <tr class="odd">
            <td>Rosen</td>
            <td>rot</td>
            <td>€1,99</td>
        </tr>
        <tr class="even">
            <td>Nelken</td>
            <td>gelb</td>
            <td>€ 0,89</td>
        </tr>
        <tr class="odd">
            <td>Osterglocken</td>
            <td>braun-gelb</td>
            <td>€ 0,45</td>
        </tr>
        <tr class="even">
            <td>Tannenbäume</td>
            <td>grün-braun</td>
            <td>€ 9,99</td>
        </tr>
    </table>
    ';

    // Print text using writeHTMLCell()
    $pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);

    // ---------------------------------------------------------

    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    $pdf->Output('Angebot Secondhandblumen Petersen.pdf', 'I');

    //============================================================+
    // END OF FILE
    //============================================================+
}