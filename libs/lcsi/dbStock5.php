<?php

session_start();   

$url='http://finance.yahoo.com/d/quotes.csv?s=ACO&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data01 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 


    } 


    $url='http://finance.yahoo.com/d/quotes.csv?s=AERG&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data02 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 

    $url='http://finance.yahoo.com/d/quotes.csv?s=ALG&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data03 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 

    $url='http://finance.yahoo.com/d/quotes.csv?s=AMN&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data04 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 

    $url='http://finance.yahoo.com/d/quotes.csv?s=ARTW&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data05 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 

    $url='http://finance.yahoo.com/d/quotes.csv?s=BDK&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data06 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 

    $url='http://finance.yahoo.com/d/quotes.csv?s=BGG&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data07 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 

    $url='http://finance.yahoo.com/d/quotes.csv?s=BLT&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data08 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 

    $url='http://finance.yahoo.com/d/quotes.csv?s=BZH&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data09 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 
	

    $url='http://finance.yahoo.com/d/quotes.csv?s=CALC&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data10 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
	
	
    $url='http://finance.yahoo.com/d/quotes.csv?s=CAT&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data11 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
	
		
    $url='http://finance.yahoo.com/d/quotes.csv?s=CENT&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data12 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
	
			
    $url='http://finance.yahoo.com/d/quotes.csv?s=CNH&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data13 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
	
				
    $url='http://finance.yahoo.com/d/quotes.csv?s=CTX&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data14 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
	
					
    $url='http://finance.yahoo.com/d/quotes.csv?s=CVCO&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data15 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
	
	
					
    $url='http://finance.yahoo.com/d/quotes.csv?s=CX&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data16 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
		
						
    $url='http://finance.yahoo.com/d/quotes.csv?s=DE&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data17 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
		
							
    $url='http://finance.yahoo.com/d/quotes.csv?s=DEVC.PK&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data18 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
		
							
    $url='http://finance.yahoo.com/d/quotes.csv?s=DOW&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data19 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
		
							
    $url='http://finance.yahoo.com/d/quotes.csv?s=EFOI&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data20 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
		
							
    $url='http://finance.yahoo.com/d/quotes.csv?s=F&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data21 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
		
							
    $url='http://finance.yahoo.com/d/quotes.csv?s=FNM&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data22 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
		
							
    $url='http://finance.yahoo.com/d/quotes.csv?s=FSHOX&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data23 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
		
							
    $url='http://finance.yahoo.com/d/quotes.csv?s=GM&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data24 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
		
							
    $url='http://finance.yahoo.com/d/quotes.csv?s=GVA&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data25 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
		

    $url='http://finance.yahoo.com/d/quotes.csv?s=HBPI.PK&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data26 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
		

    $url='http://finance.yahoo.com/d/quotes.csv?s=HD&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data27 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
		

    $url='http://finance.yahoo.com/d/quotes.csv?s=IR&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data28 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
		

    $url='http://finance.yahoo.com/d/quotes.csv?s=JCTCF&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data29 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
		

    $url='http://finance.yahoo.com/d/quotes.csv?s=JOE&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data30 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
		

    $url='http://finance.yahoo.com/d/quotes.csv?s=KBH&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data31 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
		

    $url='http://finance.yahoo.com/d/quotes.csv?s=LFRGY.PK&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data32 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
		

    $url='http://finance.yahoo.com/d/quotes.csv?s=LMT&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data33 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	
		
    $url='http://finance.yahoo.com/d/quotes.csv?s=LOW&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data34 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	


    $url='http://finance.yahoo.com/d/quotes.csv?s=MHP&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data35 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	


    $url='http://finance.yahoo.com/d/quotes.csv?s=MKTAY&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data36 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	


    $url='http://finance.yahoo.com/d/quotes.csv?s=MLM&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data37 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	

    $url='http://finance.yahoo.com/d/quotes.csv?s=MVCO&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data38 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	

    $url='http://finance.yahoo.com/d/quotes.csv?s=NWL&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data39 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	

    $url='http://finance.yahoo.com/d/quotes.csv?s=PHHM&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data40 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	


    $url='http://finance.yahoo.com/d/quotes.csv?s=PHM&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data41 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	

    $url='http://finance.yahoo.com/d/quotes.csv?s=POOL&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data42 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	

    $url='http://finance.yahoo.com/d/quotes.csv?s=RMIX&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data43 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	

    $url='http://finance.yahoo.com/d/quotes.csv?s=RMX&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data44 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	

    $url='http://finance.yahoo.com/d/quotes.csv?s=SMG&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data45 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	

    $url='http://finance.yahoo.com/d/quotes.csv?s=SNA&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data46 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	

    $url='http://finance.yahoo.com/d/quotes.csv?s=SWK&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data47 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	

    $url='http://finance.yahoo.com/d/quotes.csv?s=SYT&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data48 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	

    $url='http://finance.yahoo.com/d/quotes.csv?s=TECUA&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data49 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	

    $url='http://finance.yahoo.com/d/quotes.csv?s=TEX&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data50 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	

    $url='http://finance.yahoo.com/d/quotes.csv?s=TSCO&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data51 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	

    $url='http://finance.yahoo.com/d/quotes.csv?s=TTC&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data52 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	

    $url='http://finance.yahoo.com/d/quotes.csv?s=URI&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data53 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	

    $url='http://finance.yahoo.com/d/quotes.csv?s=VMC&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data54 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 

    } 	

    $url='http://finance.yahoo.com/d/quotes.csv?s=VOLVY.PK&f=sl1d1t1c1ohgv&e=.csv';
        
//open it for reading
$fp = fopen($url , "r");

//if no connection exists display error message
if (!fp) {
    echo "could not connect to the site";
}else {
    //store the csv file info in the array $data
    $data55 = fgetcsv($fp,1000,",");
    //close the file
    fclose($fp); 
    $addition=$data01[1]+$data02[1]+$data03[1]+$data04[1]+$data05[1]+$data06[1]+$data07[1]+$data08[1]+$data09[1]+$data10[1]+$data11[1]+$data12[1]+$data13[1]+$data14[1]+$data15[1]+$data16[1]+$data17[1]+$data18[1]+$data19[1]+$data20[1]+$data21[1]+$data22[1]+$data23[1]+$data24[1]+$data25[1]+$data26[1]+$data27[1]+$data28[1]+$data29[1]+$data30[1]+$data31[1]+$data32[1]+$data33[1]+$data34[1]+$data35[1]+$data36[1]+$data37[1]+$data38[1]+$data39[1]+$data40[1]+$data41[1]+$data42[1]+$data43[1]+$data44[1]+$data45[1]+$data47[1]+$data48[1]+$data49[1]+$data50[1]+$data51[1]+$data52[1]+$data53[1]+$data54[1]+$data55[1];
$rounded_number = round($addition,2);
?>



<?php 
}

$_SESSION['var'] = $addition;

?>
