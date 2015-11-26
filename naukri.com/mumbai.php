<?php
set_time_limit(0);
require_once 'Xpath.php';
$startUrl = "http://jobsearch.naukri.com/jobs-in-mumbai-2";

/*$con=mysql_connect('localhost','root','');
 mysql_select_db('smallworld');
 if(!$con)
 
 {
 die(mysql_error($con));
 }
 else
 {
*/
// url   ("//div[@type='tuple']/a/@href")

// title  ("//span[@title]/text()")

// location ("//span[@class='loc']/span/text()")

// keyskill  ("//span[@class='skill']/text()")

// job desc  ("//span[@class='desc']/text()")
//nextpage link  "(//div[@class='pagination']/a/@href)[2]"
function scrapindia($url){


$array = array();
$xpath = new XPATH($url);


$titlequery= $xpath->query("//span[@title]/text()");
$urlquery= $xpath->query( "//div[@type='tuple']/a/@href");
$locationquery= $xpath->query("//span[@class='loc']/span/text()");
$infoquery= $xpath->query("//span[@class='desc']/text()");
$skillquery= $xpath->query("//div[@class='desc']/span/text()");



for($x=0;$x<$titlequery->length;$x++)
{
$title=$array[$x]['title']=$titlequery->item($x)->nodeValue;
$url=$array[$x]['url']=$urlquery->item($x)->nodeValue;
$location=$array[$x]['location']=$locationquery->item($x)->nodeValue;
$info=$array[$x]['info']=$infoquery->item($x)->nodeValue ;
$skill=$array[$x]['skill']=$skillquery->item($x)->nodeValue ;



//check for nextpage link






//$debugquery = mysql_query("INSERT INTO companyinfo (title,url,location,info,country,language,work) VALUES ('$title','$url','$location','$info','India','English','$skill') ");
 
  }  

  
 $nextpagelink = $xpath->query( "(//div[@class='pagination']/a/@href)[2]");
if($nextpagelink ->length)
{

	$nextUrl =$nextpagelink ->item(0)->nodeValue;

	$array = array_merge($array,scrapindia($nextUrl));

}

 // if (!$debugquery)
   {
   //die(mysql_error());
 //}


 }
 }
 
$data=scrapindia("http://jobsearch.naukri.com/jobs-in-mumbai-2");
echo "<pre>";
print_r($data);


?>