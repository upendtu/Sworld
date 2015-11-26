<?php
set_time_limit(0);
require_once 'Xpath.php';
$startUrl = "http://www.learn4good.com/jobs/language/english/list/country/japan";

/*$con=mysql_connect('localhost','root','');
 mysql_select_db('smallworld');
 if(!$con)
 
 {
 die(mysql_error($con));
 }
 else
 {
*/
// url   ("//td[@class='job_cell']/a/@href")

// title  ("//td[@class='job_cell']/a/span/text()")

// location ("//span[@class='loc_title']/text()")

// keyskill  ("//span[@class='section_name']/text()")

// job desc  ("//div[@class='list_job_desc']/text()")

//nextpage link ( "(//div[@class='pagination']/a/@href)[1]")


function scrapindia($url){


$array = array();
$xpath = new XPATH($url);


$titlequery= $xpath->query("//td[@class='job_cell']/a/span/text()");
$urlquery= $xpath->query( "//td[@class='job_cell']/a/@href");
$locationquery= $xpath->query("//span[@class='loc_title']/text()");
$infoquery= $xpath->query("//div[@class='list_job_desc']/text()");
$skillquery= $xpath->query("//span[@class='section_name']/text()");



for($x=0;$x<$titlequery->length;$x++)
{
$title=$array[$x]['title']=$titlequery->item($x)->nodeValue;
$url=$array[$x]['url']=$urlquery->item($x)->nodeValue;
$location=$array[$x]['location']=$locationquery->item($x)->nodeValue;
$info=$array[$x]['info']=$infoquery->item($x)->nodeValue ;
$skill=$array[$x]['skill']=$skillquery->item($x)->nodeValue ;

}

//check for nextpage link






//$debugquery = mysql_query("INSERT INTO companyinfo (title,url,location,info,country,language,work) VALUES ('$title','$url','$location','$info','India','English','$skill') ");
 
 // }  
$i=1;
 while ($i<11){
 $nextpagelink = $xpath->query( "(//div[@class='pagination']/a/@href)[$i]");


	$nextUrl =$nextpagelink ->item(0)->nodeValue;

	$array = array_merge($array,scrapindia($nextUrl));



 /* if (!$debugquery)
   {
   die(mysql_error());
 }

*/
 }
 
 
 return $array ;
 }
 
$data=scrapindia("http://www.learn4good.com/jobs/language/english/list/country/japan/");
echo "<pre>";
print_r($data);


?>