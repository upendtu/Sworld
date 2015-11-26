
<?php
include('simple_html_dom.php');
$html=file_get_html("http://www.michaelpage.co.jp/en/browse/jobs/accounting/all/all?languages[0]=en");
$baseurl='http://www.michaelpage.co.jp';
foreach($html->find('div.brand-MP a') as $link)
{
echo $baseurl.$link->href . '<br>';
}

?>

----------------------------------------------------------------
<?php
include('simple_html_dom.php');

$url = "http://www.michaelpage.co.jp/en/browse/jobs/accounting/all/all?languages[0]=en";

// Start from the main page
$nextLink = $url;

// Loop on each next Link as long as it exsists
while ($nextLink) {
    echo "<hr>nextLink: $nextLink<br>";
    //Create a DOM object
    $html = new simple_html_dom();
    // Load HTML from a url
    $html->load_file($nextLink);

    $posts = $html->find('h2[class=avoidsplit]');

    foreach($posts as $post) {
        // Get the link
        $articles = $post->children(0)->href;        
        echo $articles.'</br>';
    }

    // Extract the next link, if not found return NULL
    $nextLink = ( ($temp = $html->find('div[class=pagination browsejobs]', 0)->last_child()) ? $temp->href : NULL );

    // Clear DOM object
    $html->clear();
    unset($html);
}

?>
-----------------------------------------------------------------------------------------------------

<?php
$ch=curl_init("http://www.michaelpage.co.jp/en/browse/jobs/accounting/all/all?languages[0]=en");
$cl=curl_exec($ch);
$dom= new DOMDocument();
@$dom->loadHTML($cl);

// title "//h2[@class='avoidsplit']/text()"  "//h2[@class='avoidsplit']/a/text()"
//url   "//h2[@class='avoidsplit']/a"
// location "//p[@class='info']/text()"
// info "//div[@class='item-list']/ul/li/text()"
$titlequery= $xpath-->query("//h2[@class='avoidsplit']/a/text()");
print_r($titlequery);
?>



------------------------------------------------------------------------------------------------------
<?php
$ch=curl_init("http://www.michaelpage.co.jp/en/browse/jobs/accounting/all/all?languages[0]=en");
$baseurl="http://www.michaelpage.co.jp";
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$cl=curl_exec($ch);

$dom= new DOMDocument();
@$dom->loadHTML($cl);
$xpath=new DOMXpath($dom);


// title "//h2[@class='avoidsplit']/text()"  "//h2[@class='avoidsplit']/a/text()"
//url   "//h2[@class='avoidsplit']/a/@href"
// location "//p[@class='info']/text()"
// info "//div[@class='item-list']/ul/li/text()"

//nextpage link  "(//a[@class='pagination-right active']/@href)[1]"



$titlequery= $xpath->query("//h2[@class='avoidsplit']/a/text()");
$urlquery= $xpath->query( "//h2[@class='avoidsplit']/a/@href");
$locationquery= $xpath->query("//p[@class='info']/text()");
$infoquery= $xpath->query("//div[@class='item-list']/ul/li/text()");

$data=array();
for($x=0;$x<$titlequery->length;$x++)
{
$data[$x]['title']=$titlequery->item($x)->nodeValue;
$data[$x]['url']=$baseurl . $urlquery->item($x)->nodeValue;
$data[$x]['location']=$locationquery->item($x)->nodeValue;
$data[$x]['infooo']=$infoquery->item($x)->nodeValue;
$data[$x++]['info']=$infoquery->item($x)->nodeValue;



}
echo "<pre>";
print_r($data);
?>