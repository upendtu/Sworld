<?php
set_time_limit(0);


$ch=curl_init("http://www.learn4good.com/jobs/language/english/list/architecture/");
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
@$dom->loadHTML($cl);$
//$xpath=new DOMXpath($dom);


// url   ("//div[@type='tuple']/a/@href")

// title  ("//span[@title]/text()")

// location ("//span[@class='loc']/span/text()")

// keyskill  ("//span[@class='skill']/text()")

// job desc  ("//span[@class='desc']/text()")
//nextpage link  ("//div[@class='pagination']/a/@href")

$array=array();
$xpath=new DOMXpath($dom);
$titlequery= $xpath->query("//td[@class='job_cell']/a/span/text()");
$urlquery= $xpath->query( "//td[@class='job_cell']/a/@href");
$locationquery= $xpath->query("//span[@class='loc_title']/text()");
$infoquery= $xpath->query("//div[@class='list_job_desc']/text()");
$skillquery= $xpath->query("//span[@class='section_name']/text()");
$nextpagelink= $xpath->query( "(//a[@class='pagination-right active']/@href)[1]");



for($x=0;$x<$titlequery->length;$x++)
{
$title=$array[$x]['title']=$titlequery->item($x)->nodeValue;
$url=$array[$x]['url']=$urlquery->item($x)->nodeValue;
$location=$array[$x]['location']=$locationquery->item($x)->nodeValue;
$info=$array[$x]['info']=$infoquery->item($x)->nodeValue ;
$skill=$array[$x]['skill']=$skillquery->item($x)->nodeValue ;

//$array[$x++]['info']=$infoquery->item($x)->nodeValue;



 // $title = mysql_real_escape_string( $array[$x]['title'] );

/*$cname = mysql_real_escape_string($name->plaintext);
  $clink = mysql_real_escape_string($companyurl);
  $info = mysql_real_escape_string($imageurl);
  $industry = mysql_real_escape_string($industry->plaintext);*/
 
 
 $debugquery = mysql_query("INSERT INTO companyinfo (title,url,location,info,country,language,work) VALUES ('$title','$url','$location','$info','China','chinese ,English','$skill') ");
 
  }  if (!$debugquery)
   {
   die(mysql_error());
 }
 
 
 }
 
// mysql_close($con);
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

