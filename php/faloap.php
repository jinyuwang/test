<?php
/** Find all links on a page!
 * Created by PhpStorm.
 * User: hadoop
 * Date: 2015/6/15
 * Time: 10:56
 */
$html = file_get_contents('http://yunqi.qq.com/');

$dom = new DOMDocument();
@$dom->loadHTML($html);

// grab all the on the page
$xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("/html/body//a");

for ($i = 0; $i < $hrefs->length; $i++) {
    $href = $hrefs->item($i);
    $url = $href->getAttribute('href');
    echo $url.'<br />';
}
?>