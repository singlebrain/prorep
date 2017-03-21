<?php
defined('BASEPATH') OR exit('No direct script access allowed');
        $ebe=0;
        $eee=0;
        $cse=0;
        $ece=0;
        $f5=0;
        $f4=0;
        $f3=0;
        $f2=0;
        $f1=0;
        $y2016=0;
        $y2015=0;
        $y2014=0;
        $y2013=0;
        $y2012=0; 
        $qury="SELECT * FROM project WHERE ";
        $flag=0;
        $keyword=$_GET['keyword'];
    foreach ($_GET['depart'] as $i)
    {
        if($i=="ebe")
        {
            $flag=1;
            $ebe=1;
            $qury=$qury."department='ebe'";
        }
        if($i=="eee")
        {
            $eee=1;
            if($flag==1){
                $qury=$qury." AND department='eee'";
            }
            else{
                $qury=$qury."department='eee'";
                $flag=1;
            }
        }
        if($i=="cse")
        {
            $cse=1;
            if($flag==1){
                $qury=$qury." AND department='cse'";
            }
            else{
                $qury=$qury."department='cse'";
                $flag=1;
            }
        }
        if($i=="ece")
        {
            $ece=1;
            if($flag==1){
                $qury=$qury." AND department='ece'";
            }
            else{
                $qury=$qury."department='ece'";
                $flag=1;
            }
        }
    }
        foreach ($_GET['rating'] as $i)
    {

        if($i=="f5")
        {
           
            if($flag==1){
                $qury=$qury." AND rating=5";
            }
            else{
                $qury=$qury."rating=5";
                $flag=1;
            }
        }

        if($i=="f4")
        {
            
            if($flag==1){
                $qury=$qury." AND rating=4";
            }
            else{
                $qury=$qury."rating=4";
                $flag=1;
            }
        }
        if($i=="f3")
        {
             if($flag==1){
                $qury=$qury." AND rating=3";
            }
            else{
                $qury=$qury."rating=3";
                $flag=1;
            }
        }
        if($i=="f2")
        {
            if($flag==1){
                $qury=$qury." AND rating=2";
            }
            else{
                $qury=$qury."rating=2";
                $flag=1;
            }
        }
        if($i=="f1")
        {
            
            if($flag==1){
                $qury=$qury." AND rating=1";
            }
            else{
                $qury=$qury."rating=1";
                $flag=1;
            }
        }
    }
        foreach ($_GET['year'] as $i)
    {
        if($i=="y2016"
        {
            
            if($flag==1)
            {

                $qury=$qury." AND (datepart(yyyy,com_date))=2016 ";
            }
            else{
                $qury=$qury."(datepart(yyyy,com_date))=2016 ";
                $flag=1;
            }
        }
        if($i=="y2015")
        {
            
            if($flag==1)
            {

                $qury=$qury." AND (datepart(yyyy,com_date))=2015";

            }
            else{
                $qury=$qury."(datepart(yyyy,com_date))=2015";
                $flag=1;
            }
        }
        if($i=="y2014")
        {
            
            if($flag==1)
            {

                $qury=$qury." AND (datepart(yyyy,com_date))=2014";
            }
            else{
                $qury=$qury."(datepart(yyyy,com_date))=2014";
                $flag=1;
            }
        }
        if($i=="y2013")
        {
            
            if($flag==1)
            {

                $qury=$qury." AND (datepart(yyyy,com_date))=2013";
            }
            else{
                $qury=$qury."(datepart(yyyy,com_date))=2013";
                $flag=1;
            }
        }

        if($i=="y2012")
        {
            
            if($flag==1)
            {

                $qury=$qury." AND (datepart(yyyy,com_date))=2012";
            }
            else{
                $qury=$qury."(datepart(yyyy,com_date))=2012";
                $flag=1;
            }
        }

    }    
    if($flag==0)
       $qury="SELECT * FROM project";
    $link=mysql_connect(localhost,'root','');
    if(!$link){
        echo "Unable to connect";
    }
    if (!mysql_select_db('prorep')) {
    die('Could not select database: ' . mysql_error());
}
if($flag==0)
{
    $qury=$qury."metatags LIKE '%{$keyword}%'"
}
else
{
    $qury=$qury." AND metatags LIKE '%{$keyword}%'"
}
$result = mysql_query($qury);
if (!$result) {
    die('Could not query:' . mysql_error());
}
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    printf("ID: %s  Name: %s", $row["id"], $row["name"]);
}
?>