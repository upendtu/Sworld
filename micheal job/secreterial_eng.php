<?php
set_time_limit(0);


$ch=curl_init("http://www.michaelpage.co.jp/en/browse/jobs/secretarial/all/all?languages[0]=en&item_per_pages=100");
$con=mysql_connect('localhost','root','');
 mysql_select_db('smallworld');
 if(!$con)
 
 {
 die(mysql_error($con));
 }
 else
 {

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$cl=curl_exec($ch);

$dom= new DOMDocument();
@$dom->loadHTML($cl);
//$xpath=new DOMXpath($dom);


// title "//h2[@class='avoidsplit']/text()"  "//h2[@class='avoidsplit']/a/text()"
//url   "//h2[@class='avoidsplit']/a/@href"
// location "//p[@class='info']/text()"
// info "//div[@class='item-list']/ul/li/text()"

//nextpage link  "(//a[@class='pagination-right active']/@href)[1]"

$baseurl="http://www.michaelpage.co.jp";
$array=array();
$xpath=new DOMXpath($dom);
$titlequery= $xpath->query("//h2[@class='avoidsplit']/a/text()");
$urlquery= $xpath->query( "//h2[@class='avoidsplit']/a/@href");
$locationquery= $xpath->query("//p[@class='info']/text()");
$infoquery= $xpath->query("//div[@class='item-list']/ul/li/text()");
$nextpagelink= $xpath->query( "(//a[@class='pagination-right active']/@href)[1]");



for($x=0;$x<$titlequery->length;$x++)
{
$title=$array[$x]['title']=$titlequery->item($x)->nodeValue;
$url=$array[$x]['url']=$baseurl . $urlquery->item($x)->nodeValue;
$location=$array[$x]['location']=$locationquery->item($x)->nodeValue;
$info=$array[$x]['info']=$infoquery->item($x)->nodeValue;
//$array[$x++]['info']=$infoquery->item($x)->nodeValue;



 // $title = mysql_real_escape_string( $array[$x]['title'] );

/*$cname = mysql_real_escape_string($name->plaintext);
  $clink = mysql_real_escape_string($companyurl);
  $info = mysql_real_escape_string($imageurl);
  $industry = mysql_real_escape_string($industry->plaintext);*/
 
 
 $debugquery = mysql_query("INSERT INTO companyinfo (title,url,location,info,country,language,work) VALUES ('$title','$url','$location','$info','Japan','English','Secretarial') ");
 
  }  if (!$debugquery)
   {
   die(mysql_error());
 }
 
 
 }
 
 mysql_close($con);
//$nextpagelink= $xpath->query( "(//a[@class='pagination-right active']/@href)[1]");

//echo $nextpagelink->length;
//if($nextpagelink->length){
//$nexturl=$baseurl . $nextpagelink->item(0)->nodevalue;
//$array=array_merge($array, scrapjob($nexturl));


//return $array;



//$data=scrapjob("http://www.michaelpage.co.jp/en/browse/jobs/accounting/all/all?languages[0]=en");
echo "<pre>";
print_r($array);


?>
