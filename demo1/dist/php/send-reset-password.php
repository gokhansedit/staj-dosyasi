<?php
include("settings.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';


$address 	= $_POST['email'];

$stmt = $con->prepare('SELECT * FROM user where mail = ?');
$stmt->bind_param('s', $address);
if ($stmt->execute()) {
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_object();
    }
    else 
    {
        
        echo json_encode(['status' => 0, 'message' => 'Geçersiz mail adresi']);
        exit;
    }
}  
else {
    echo json_encode(['status' => 0, 'message' => 'Geçersiz mail adresi']);
}  

$mail = new PHPMailer(true);
				
				try {
					
					// Sunucu ayarları
					$mail->isSMTP();
					$mail->Host       = 'smtp-mail.outlook.com';                 
					$mail->SMTPAuth   = true;                                  
					$mail->Username   = 'gokhansoftware@hotmail.com';                     
					$mail->Password   = 'truolaimpaotmmjw';   
					$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
					$mail->Port = 587;
			
					$mail->setFrom('gokhansoftware@hotmail.com','Gokhan Software');
					$mail->isHTML(true);
					$mail->Subject = 'Şifre Yenileme İsteği';
					$mail->AddEmbeddedImage('../assets/mail/images/logo.png', 'logo', '../assets/mail/images/logo.png');
					$mail->AddEmbeddedImage('../assets/mail/images/mail.png', 'img', '../assets/mail/images/mail.png');
					$mail->Body    = '<!DOCTYPE html>

<html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<title></title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/><!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]--><!--[if !mso]><!--><!--<![endif]-->
<style>
	* {
		box-sizing: border-box;
	}

	body {
		margin: 0;
		padding: 0;
	}

	a[x-apple-data-detectors] {
		color: inherit !important;
		text-decoration: inherit !important;
	}

	#MessageViewBody a {
		color: inherit;
		text-decoration: none;
	}

	p {
		line-height: inherit
	}

	.desktop_hide,
	.desktop_hide table {
		mso-hide: all;
		display: none;
		max-height: 0px;
		overflow: hidden;
	}

	.image_block img+div {
		display: none;
	}

	@media (max-width:700px) {
		.desktop_hide table.icons-inner {
			display: inline-block !important;
		}

		.icons-inner {
			text-align: center;
		}

		.icons-inner td {
			margin: 0 auto;
		}

		.image_block div.fullWidth {
			max-width: 100% !important;
		}

		.mobile_hide {
			display: none;
		}

		.row-content {
			width: 100% !important;
		}

		.stack .column {
			width: 100%;
			display: block;
		}

		.mobile_hide {
			min-height: 0;
			max-height: 0;
			max-width: 0;
			overflow: hidden;
			font-size: 0px;
		}

		.desktop_hide,
		.desktop_hide table {
			display: table !important;
			max-height: none !important;
		}
	}
</style>
</head>
<body class="body" style="background-color: #28285c; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
<table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #28285c;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 680px; margin: 0 auto;" width="680">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<div class="spacer_block block-1" style="height:30px;line-height:30px;font-size:1px;"> </div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 680px; margin: 0 auto;" width="680">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="33.333333333333336%">
<div class="spacer_block block-1" style="height:0px;line-height:0px;font-size:1px;"> </div>
</td>
<td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="33.333333333333336%">
<table border="0" cellpadding="0" cellspacing="0" class="image_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="width:100%;">
<div align="center" class="alignment" style="line-height:10px">
<div style="max-width: 226.667px;"><img alt="Company Logo" height="auto" src="cid:logo" style="display: block; height: auto; border: 0; width: 100%;" title="Company Logo" width="226.667"/></div>
</div>
</td>
</tr>
</table>
</td>
<td class="column column-3" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="33.333333333333336%">
<div class="spacer_block block-1" style="height:0px;line-height:0px;font-size:1px;"> </div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 680px; margin: 0 auto;" width="680">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<div class="spacer_block block-1" style="height:10px;line-height:10px;font-size:1px;"> </div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; border-radius: 25px 25px 0 0; color: #000000; width: 680px; margin: 0 auto;" width="680">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<table border="0" cellpadding="15" cellspacing="0" class="image_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad">
<div align="center" class="alignment" style="line-height:10px">
<div class="fullWidth" style="max-width: 374px;"><img alt="Resetting Password" height="auto" src="cid:img" style="display: block; height: auto; border: 0; width: 100%; border-radius: 18px 0px 0px 0px;" title="Resetting Password" width="374"/></div>
</div>
</td>
</tr>
</table>
<div class="spacer_block block-2" style="height:21px;line-height:21px;font-size:1px;"> </div>
<table border="0" cellpadding="0" cellspacing="0" class="heading_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="text-align:center;width:100%;">
<h1 style="margin: 0; color: #28285c; direction: ltr; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 39px; font-weight: 700; letter-spacing: normal; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0; mso-line-height-alt: 46.8px;"><span class="tinyMce-placeholder" style="word-break: break-word;">Şifreni Değiştir</span></h1>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; background-color: #ffffff; border-radius: 0 0 25px 25px; width: 680px; margin: 0 auto;" width="680">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="16.666666666666668%">
<div class="spacer_block block-1" style="height:0px;line-height:0px;font-size:1px;"> </div>
</td>
<td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="66.66666666666667%">
<table border="0" cellpadding="0" cellspacing="0" class="paragraph_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td class="pad" style="padding-bottom:10px;padding-left:20px;padding-right:10px;padding-top:10px;">
<div style="color:#403f3f;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;font-size:17px;font-weight:700;line-height:180%;text-align:center;mso-line-height-alt:30.6px;">
<p style="margin: 0; word-break: break-word;"><span style="word-break: break-word;">Şifrenizi değiştirmek için butona tıklayın.</span></p>

</div>
</td>
</tr>
</table>
<div class="spacer_block block-2" style="height:10px;line-height:10px;font-size:1px;"> </div>
<table border="0" cellpadding="10" cellspacing="0" class="button_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody><tr>
<td class="pad">
<div align="center" class="alignment"><!--[if mso]>
<v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="www.example.com" style="height:42px;width:157px;v-text-anchor:middle;" arcsize="10%" stroke="false" fillcolor="#8bbf45">
<w:anchorlock/>
<v:textbox inset="0px,0px,0px,0px">
<center dir="false" style="color:#ffffff;font-family:Arial, sans-serif;font-size:16px">
<![endif]--><a href="http://staj.gokhansedit.com.tr/demo1/dist/change-password.php?id='.urlencode(kodla($row->id)).'" style="background-color:#8bbf45;border-bottom:0px solid #101;border-left:0px solid #101;border-radius:4px;border-right:0px solid #101;border-top:0px solid #101;color:#ffffff;display:inline-block;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;font-size:16px;font-weight:700;mso-border-alt:none;padding-bottom:5px;padding-top:5px;text-align:center;text-decoration:none;width:auto;word-break:keep-all;" target="_blank"><span style="word-break: break-word; padding-left: 20px; padding-right: 20px; font-size: 16px; display: inline-block; letter-spacing: normal;"><span style="word-break: break-word; line-height: 32px;">Şifreni Değiştir</span></span></a><!--[if mso]></center></v:textbox></v:roundrect><![endif]--></div>
</td>
</tr>
</tbody></table>
<div class="spacer_block block-4" style="height:20px;line-height:20px;font-size:1px;"> </div>
</td>
<td class="column column-3" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="16.666666666666668%">
<div class="spacer_block block-1" style="height:0px;line-height:0px;font-size:1px;"> </div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-6" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 680px; margin: 0 auto;" width="680">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<div class="spacer_block block-1" style="height:20px;line-height:20px;font-size:1px;"> </div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-7" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 680px; margin: 0 auto;" width="680">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="16.666666666666668%">
<div class="spacer_block block-1" style="height:0px;line-height:0px;font-size:1px;"> </div>
</td>
<td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="66.66666666666667%">
<div class="spacer_block block-1" style="height:35px;line-height:35px;font-size:1px;"> </div>
</td>
<td class="column column-3" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="16.666666666666668%">
<div class="spacer_block block-1" style="height:0px;line-height:0px;font-size:1px;"> </div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-8" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;" width="100%">
<tbody>
<tr>
<td>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table><!-- End -->
</body>
</html>';
					$mail->CharSet = 'utf-8';
					// Alıcıları ekle
				
						$mail->addAddress($address);
				
			
					// E-postayı gönder
					$mail->send();
                    echo json_encode(['status' => 1, 'message' => 'Şifre yenileme isteği gönderildi.']);
				} catch (Exception $e) {
					echo "E-posta gönderiminde bir hata oluştu: ";
                    echo json_encode(['status' => 0, 'message' => "Mesaj gönderiminde hata oluştu. Lütfen daha sonra tekrar deneyin. Hata: {$mail->ErrorInfo}"]);
				}


?>