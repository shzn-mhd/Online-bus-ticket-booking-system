<?php
ob_start();
session_start();

$conn = mysqli_connect('localhost','root','') or die(mysqli_error());//connection to the database
$db_select=mysqli_select_db($conn,'easy_booking') or die(mysqli_error());//select database

require("tcpdf_6_2_13/tcpdf/tcpdf.php");
require "vendor/autoload.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

 $nic = $_GET['nic'];

 $sql="SELECT * FROM customer WHERE nic='$nic'";
 $sql2="SELECT * FROM ticket WHERE custid='$nic'";
 
 $res=mysqli_query($conn,$sql);
 $res2=mysqli_query($conn,$sql2);
 
 $count = mysqli_num_rows($res);  
 $count2 = mysqli_num_rows($res2);  

 


 if($count>0) 
 {
     $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
     $row2 = mysqli_fetch_array($res2, MYSQLI_ASSOC);

     $seatsDB=$row2['seats'];
    $seats=unserialize(base64_decode($seatsDB));
    $seatsT='';
        foreach($seats as $item){
           $seatsT.= $item.",";
       }


     //----- Code for generate pdf
     $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
     $pdf->SetCreator(PDF_CREATOR);  
     //$pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
     $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
     $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
     $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
     $pdf->SetDefaultMonospacedFont('helvetica');  
     $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
     $pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
     $pdf->setPrintHeader(false);  
     $pdf->setPrintFooter(false);  
     $pdf->SetAutoPageBreak(TRUE, 10);  
     $pdf->SetFont('helvetica', '', 12);  
     $pdf->AddPage(); //default A4
     //$pdf->AddPage('P','A5'); //when you require custome page size 
     
     

     $content = '
     <style type="text/css">
     body{
     font-size:12px;
     line-height:24px;
     font-family:"Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
     color:#000;
     }
     </style>    
     <table cellpadding="0" cellspacing="0" style="border:1px solid #ddc;width:100%;">
     <table style="width:100%;" >
     <tr><td colspan="2">&nbsp;</td></tr>
     <tr><td colspan="2" align="center"><h1>EASY BOOKING</h1></td></tr>
     <tr><td colspan="2" align="center"><b>CONTACT: +94 81526892</b></td></tr>
     <tr><td colspan="2" align="center"><b>WEBSITE: WWW.EAZYBOOKING.COM</b></td></tr>
     <tr><td colspan="2"><b>CUSTOMER_NAME: '.$row['full_name'].' </b></td></tr>
     <tr><td><b>NIC: '.$row['nic'].' </b></td><td align="right"><b>BILL DATE: '.date("d-m-Y").'</b> </td></tr>
     <tr><td>&nbsp;</td><td align="right"><b>TICKET NO.: '.$row2['TicketNo'].'</b></td></tr>
     <tr><td colspan="2" align="center"><h2>TICKET</h2></td></tr>	

           <tr class="itemrows">
               <td>
                   <b>ROUTE_NO</b>
                   <br>
                   
               </td>
               <td align="right"><b>
                   '.$row2['routeNo'].'
               </b></td>
           </tr>
           <tr class="itemrows">
               <td>
                   <b>ORIGIN</b>
                   <br>
                   
               </td>
               <td align="right"><b>
                   '.$row['origin'].'
               </b></td>
           </tr>
           <tr class="itemrows">
               <td>
                   <b>DESTINATION</b>
                   <br>
                   
               </td>
               <td align="right"><b>
                   '.$row['destination'].'
               </b></td>
           </tr>
           <tr class="itemrows">
               <td>
                   <b>DATE</b>
                   <br>
                   
               </td>
               <td align="right"><b>
                   '.$row['datee'].'
               </b></td>
           </tr>
           <tr class="itemrows">
               <td>
                   <b>SEATS</b>
                   <br>
                   
               </td>
               <td align="right"><b>'
               .$seatsT.'
               </b></td>
           </tr>
           <tr class="itemrows">
               <td>
                   <b>PRICE</b>
                   <br>
                   
               </td>
               <td align="right"><b>
                   '.$row2['price'].'
               </b></td>
           </tr>
         
         <tr class="total"><td colspan="2" align="right">------------------------</td></tr>
     <tr><td colspan="2" align="right"><b>PAYMENT MODE: CASH/ONLINE </b></td></tr>
     <tr><td colspan="2">&nbsp;</td></tr>
     <tr><td colspan="2" align="center"><b>THANK YOU ! VISIT AGAIN</b></td></tr>
     <tr><td colspan="2">&nbsp;</td></tr>
     </table>
 </table>'; 
 $pdf->writeHTML($content,true,false,false,false,'');
 
 $file_location = "C:/xampp/htdocs/Project/EasyBooking/tikets/"; //add your full path of your server
 
    $datetime=date('dmY_hms');
    $file_name = "TICKET_".$datetime.".pdf";
    ob_end_clean();
    $pdf->Output($file_location.$file_name, 'F'); // F means upload PDF file on some folder
    $pdf->Output($file_location.$file_name, 'I');
	$body="<html>
	<head>
	<style type='text/css'> 
	body {
	font-family: Calibri;
	font-size:16px;
	color:#000;
	}
	</style>
	</head>
	<body>
	Dear Customer,
	<br>
	Please find attached Ticket copy.
	<br>
	Thank you!
	</body>
	</html>";

	$mail = new PHPMailer(true);
	$mail->IsSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 465;
    $mail->Username = "easybooking80@gmail.com";
    $mail->Password = "Abc@1234";
	
    $name=$row['full_name'];
    $email=$row['email'];
	$mail->setFrom('easybooking80@gmail.com','Easybooking');
    $mail->AddAddress($email,$name);
	$mail->IsHTML(true);
	 
    $mail->Subject = "Bus Ticket";
    
	$mail->AddAttachment($file_location.$file_name);
	$mail->MsgHTML($body);
	$mail->send();	
	
    echo "email send";
}

else
{
	echo 'Record not found for PDF.';
}

?>