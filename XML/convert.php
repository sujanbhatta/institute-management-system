<?php 
$xml = new DOMDocument;
// Load the XML source - can be a remote file
$xml->load('event.xml');

//Similar with XSL
$xsl = new DOMDocument;
$xsl->load('test.xsl'); //also could be remote
// Create and Configure the transformer
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // attach xsl rules

//Output
echo $proc->transformToXML($xml);
?>
