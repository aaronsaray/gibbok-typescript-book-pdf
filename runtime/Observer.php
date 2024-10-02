<?php

class Observer extends Typesetterio\Typesetter\Observers\Observer
{
    public function initializedPdf(\Mpdf\Mpdf $mpdf): void
    {
        $html = <<<HTML
<footer>
    <table>
        <tr>
            <td>
                The Concise Typescript Book
            </td>
            <td>
                Page {PAGENO}
            </td>
        </tr>
    </table>
</footer>
HTML;

        $mpdf->DefHTMLFooterByName('Standard', $html);
        $mpdf->SetHTMLFooterByName('Standard');
        $mpdf->setAutoBottomMargin = 'pad';
    }

    public function parsed(Typesetterio\Typesetter\Contracts\Chapter $chapter): void
    {
        $html = $chapter->getHtml();

        $html = substr($html, stripos($html, '<h2>Introduction</h2>'));

        $chapter->setHtml($html);
    }
}