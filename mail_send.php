<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "vendor/autoload.php";

function sendMessage($name, $tel, $description) {
  // u7YQ5@7L
  // SWTJRv4qq4UZGuaxqMjj
  // real-okna-site@mail.ru

  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->SMTPKeepAlive=true;
  $mail->Host = "smtp.mail.ru";
  $mail->SMTPAuth = true;
  $mail->Username = "real-okna-site@mail.ru";
  $mail->Password = "SWTJRv4qq4UZGuaxqMjj";
  $mail->SMTPSecure = "tls";
  $mail->Port = 587;

  $mail->From = "real-okna-site@mail.ru";
  $mail->FromName = "oknaborisoglebsk.ru";

  $mail->addAddress("interoknavrn@bk.ru", "Recepient Name");

  $mail->isHTML(true);

  $mail->Subject = "Subject Text";
  $mail->Body = getHtmlTemplate($name, $tel, $description);

  try {
    $mail->send();
    return  $name;
  } catch (Exception $e) {
    return "Mailer Error: " . $mail->ErrorInfo;
  }
}


function getHtmlTemplate($name, $tel, $description) {
  
  return <<<BODY
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
      <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="format-detection" content="date=no" />
      <meta name="format-detection" content="address=no" />
      <meta name="format-detection" content="telephone=no" />
      <meta name="x-apple-disable-message-reformatting" />
      <link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700,700i" rel="stylesheet" />
      <title>Email Template</title>
      

      <style type="text/css" media="screen">
        /* Linked Styles */
        body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#001f51; -webkit-text-size-adjust:none }
        a { color:#000001; text-decoration:none }
        p { padding:0 !important; margin:0 !important } 
        img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
        .mcnPreviewText { display: none !important; }

            
        /* Mobile styles */
        @media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
          .mobile-shell { width: 100% !important; min-width: 100% !important; }
          .bg { background-size: 100% auto !important; -webkit-background-size: 100% auto !important; }
          
          .text-header,
          .m-center { text-align: center !important; }
          
          .center { margin: 0 auto !important; }
          .container { padding: 20px 10px !important }
          
          .td { width: 100% !important; min-width: 100% !important; }

          .m-br-15 { height: 15px !important; }
          .p30-15 { padding: 30px 15px !important; }
          .p0-15-30 { padding: 0px 15px 30px 15px !important; }
          .mpb30 { padding-bottom: 30px !important; }

          .m-td,
          .m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

          .m-block { display: block !important; }

          .fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

          .column,
          .column-dir,
          .column-top,
          .column-empty,
          .column-empty2,
          .column-dir-top { float: left !important; width: 100% !important; display: block !important; }

          .column-empty { padding-bottom: 30px !important; }
          .column-empty2 { padding-bottom: 10px !important; }

          .content-spacing { width: 15px !important; }
        }
      </style>
    </head>
    <body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#001f51; -webkit-text-size-adjust:none;">
      <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#001f51">
        <tr>
          <td align="center" valign="top">
            <table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
              <tr>
                <td class="td container" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; margin:0; font-weight:normal; padding:55px 0px;">
                  <repeater>
                    <!-- Intro -->
                    <layout label='Intro'>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                        <tr>
                          <td style="padding-bottom: 10px;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td class="p30-15" style="padding: 60px 30px;">
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td class="h1 pb25" style="color:#444444; font-family:'Merriweather', Georgia,serif; font-size:35px; line-height:42px; text-align:center; padding-bottom:25px;"><multiline>Новый отклик с сайта</multiline></td>
                                    </tr>
                                    <tr>
                                      <td class="text-center pb25" style="color:#666666; font-family:Arial,sans-serif; font-size:16px; line-height:30px; text-align:center; padding-bottom:25px;">
                                        <multiline>Имя:  <b> $name </b><span class="m-hide"><br /></span>
                                          Сообщение: <b> $description </b><span class="m-hide"><br /></span>
                                        </multiline>
                                      </td>
                                    </tr>
                                    <!-- Button -->
                                    <tr>
                                      <td align="center">
                                        <table class="center" border="0" cellspacing="0" cellpadding="0" style="text-align:center;">
                                          <tr>
                                            <td class="text-button" style="background:#ffda5c; color:#444444; font-family:'Merriweather', Georgia,serif; font-size:14px; line-height:18px; padding:12px 15px; text-align:center; border-radius:10px; text-transform:uppercase;"><multiline><span class="link" style="color:#000001; text-decoration:none;">
                                              Указанный номер: <b> $tel </b></span></multiline></td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                    <!-- END Button -->
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </layout>
                    <!-- END Intro -->
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </body>
    </html>
  BODY;
}
