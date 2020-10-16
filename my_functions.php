<?php
function saveDataToXML($data, $file_name) {
    $author = $data['author'];
    $xml = simplexml_load_file('Galleria.xml');

    $new_pic = $xml->addChild('picture');
    $new_pic->addAttribute('visible', 'false');
    $new_pic->addChild('author', $author);
    $new_pic->addChild('file', $file_name);
    $new_pic->addChild('date', date("d-m-Y"));

    $dom = new DOMDocument("1.0");
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xml->asXML());
    $dom->save('Galleria.xml');
}

function hidePost($id){
    $xml = simplexml_load_file('Galleria.xml');

    if ($xml->picture[$id]->attributes()['visible'] = 'true') {
        $xml->picture[$id]->attributes()['visible'] = 'false';
    }

    else if ($xml->picture[$id]->attributes()['visible'] = 'false') {
        $xml->picture[$id]->attributes()['visible'] = 'true';
    }

    $dom = new DOMDocument("1.0");
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xml->asXML());
    $dom->save('Galleria.xml');
}

function deletePost($id){
    $xml = simplexml_load_file('Galleria.xml');
    
    unset($xml->picture[$id]);

    $dom = new DOMDocument("1.0");
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xml->asXML());
    $dom->save('Galleria.xml');
}