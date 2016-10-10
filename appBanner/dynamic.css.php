<?php function myStyles()
{
  ?>
  <style type="text/css">
  <?php

  $bannerHeight= get_option( 'abp_android_banner_height' ) ;
  $bannerColor=get_option( 'abp_android_banner_color' ) ;
  $topbarColor=get_option( 'abp_android_banner_topbar' ) ;
  $textColor=get_option( 'abp_android_name_color' );
  $buttonColor=get_option( 'abp_android_button_bgcolor' );
  $buttonTextColor=get_option( 'abp_android_button_fontcolor' );
  $descColor=get_option( 'abp_android_desc_color' )  ;
  $buttonBorderColor = get_option('abp_android_button_border');

/* Define dynamic styles here */
//$style1="background:".get_option('abp_android_banner_color')." url('data:image/gif;base64,R0lGODlhCAAIAIABAFVVVf///yH5BAEHAAEALAAAAAAIAAgAAAINRG4XudroGJBRsYcxKAA7'); padding: 5px 10px;  width:280px; ";
//echo "hello".$style1;
?>
#smartbanner
{
position:absolute;left:0;top:-82px;border-bottom:1px solid #e8e8e8;width:100%;height:<?php echo $bannerHeight; ?>px;font-family:"Helvetica Neue",sans-serif;
box-shadow:0 1px 2px rgba(0,0,0,0.5);z-index:9998; -webkit-font-smoothing:antialiased;overflow:hidden; -webkit-text-size-adjust:none;}
#smartbanner, html.sb-animation {-webkit-transition: all .3s ease;}
#smartbanner .sb-container { margin: 0 auto; }
#smartbanner .sb-close {position:absolute; left:5px; top:3px; display:block; border:2px solid #fff; width:14px;height:14px; font-family:'ArialRoundedMTBold',Arial; font-size:15px; line-height:15px;
text-align:center; color:#fff; background:#070707; text-decoration:none; text-shadow:none;border-radius:14px;box-shadow:0 2px 3px rgba(0,0,0,0.4); -webkit-font-smoothing:subpixel-antialiased;}
#smartbanner .sb-close:active { font-size:13px; color:#aaa; }
#smartbanner .sb-icon { position:absolute;left:30px;top:13px;display:block;width:57px; height:57px;background:rgba(0,0,0,0.6);
background-size:cover;border-radius:10px;box-shadow:0 1px 3px rgba(0,0,0,0.3); }
#smartbanner.no-icon .sb-icon { display:none; }
#smartbanner .sb-info{ position:absolute;left:98px;top:15px;width:44%;font-size:12px;line-height:1.2em;font-weight:bold;color:#6a6a6a;
text-shadow:0 1px 0 rgba(255,25,255,0.8); }
#smartbanner #smartbanner.no-icon .sb-info { left:34px; }
#smartbanner .sb-info strong{ display:block; font-size:13px; color:#4d4d4d; line-height: 18px; }
#smartbanner .sb-info > span { display:block; }
#smartbanner .sb-info em { font-style:normal; text-transform:uppercase; }
#smartbanner .sb-button{ position:absolute;right:20px;top:16px;border:1pxsolid #bfbfbf; padding: 0 10px; min-width: 10%;height:50px; font-size:24px;line-height:40px;
text-align:center; font-weight:bold;color:#6a6a6a;background:-webkit-linear-gradient(top, #efefef 0%,#dcdcdc 100%);
text-transform:uppercase; text-decoration:none;text-shadow:0 1px 0 rgba(255,25,255,0.8);border-radius:3px;
box-shadow:0 1px 0 rgba(25,25,255,0.6),0 1px 0 rgba(255,255,255,0.7) inset;}
#smartbanner .sb-button:active, #smartbanner .sb-button:hover{background:-webkit-linear-gradient(top, #dcdcdc 0%,#efefef 100%);}
#smartbanner .sb-icon.gloss:after
{ content:''; position:absolute; left:0; top:-1px; border-top:1px solid rgba(255,255,255,0.8); width:100%; height:50%; background:-webkit-linear-gradient(top, rgba(255,255,255,0.7) 0%,rgba(255,255,255,0.2) 100%); border-radius:10px 10px 12px 12px; }
#smartbanner.android{ border-color: #ec1c24;
background: <?php echo $bannerColor; ?> url('data:image/gif;base64,R0lGODlhCAAIAIABAFVVVf///yH5BAEHAAEALAAAAAAIAAgAAAINRG4XudroGJBRsYcxKAA7');
border-top: 6px solid <?php echo $topbarColor; ?>; box-shadow: none;}
#smartbanner.android .sb-close { border:0; width:17px; height:17px; line-height:17px; color:#b1b1b3; background:#1c1e21; text-shadow:0 1px 1px #000; box-shadow:0 1px 2px rgba(0,0,0,0.8) inset,0 1px 1px rgba(255,255,255,0.3); }
#smartbanner.android .sb-close:active { color:#eee; }
#smartbanner.android .sb-info{color:<?php echo $descColor; ?>; text-shadow:0 1px 2px #000;}
#smartbanner.android .sb-info strong {color:<?php echo $textColor; ?>;}
#smartbanner.android .sb-button{ min-width: 12%; border:1px solid <?php echo $buttonBorderColor;?> ;
 padding:1px;color:<?php echo $buttonTextColor; ?>;background: none;border-radius: 0; box-shadow: none; min-height:28px}
#smartbanner.android .sb-button span {
text-align: center; display: block; padding: 0 10px;background-color: <?php echo $buttonColor; ?>; background-image: -webkit-gradient(linear,10 10,10 160%,from(<?php echo $buttonColor; ?>),to(#fff));
background-image: -moz-linear-gradient(top,<?php echo $buttonColor; ?>,#fff);text-transform:none; text-shadow:none; box-shadow:none;}
#smartbanner.android .sb-button:active, #smartbanner.android .sb-button:hover { background: none; }
#smartbanner.android .sb-button:active span, #smartbanner.android .sb-button:hover span { background: #ec1c24; }
#smartbanner.windows .sb-icon { border-radius: 0px; }

 </style>
<?php
}
