<?php
/**
 * Created by PhpStorm.
 * User: qtvha
 * Date: 5/29/2017
 * Time: 9:48 PM
 */

namespace Ezpage\Ezpage;


use Ezpage\Dom\Document;
use Ezpage\Dom\Element\Root;

class Builder
{
    public function renderExample()
    {
        $document = new Document();
        $document->setRoot(new Root());
        return $document->toHtml();
    }
}
