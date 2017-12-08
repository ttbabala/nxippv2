<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<body> 
  <div id="container" class="main-expanding" style="width: 1440px; height: 711px;"> 
   <div id="nav"> 
    <ul> 
     <li> <a href="http://localhost/nxipp/zysx/" target="_blank" id="link-about"> <span class="link-text-wrapper"> <span class="link-text"> <em class="link-icon"></em>专业实训 </span> </span> </a> </li> 
     <li> <a href="http://localhost/nxipp/yxzy/" target="_blank" id="link-log"> <span class="link-text-wrapper"> <span class="link-text"> <em class="link-icon"></em>优秀作业 </span> </span> </a> </li> 
     <li> <a href="http://localhost/nxipp/cxcy/" target="_blank" id="link-guide"> <span class="link-text-wrapper"> <span class="link-text"> <em class="link-icon"></em>创新创业 </span> </span> </a> </li> 
     <li> <a href="http://localhost/nxipp/yczp/" id="link-app" target="_blank"> <span class="link-text-wrapper"> <span class="link-text"> <em class="link-icon"></em>学科竞赛 </span> </span> </a> </li> 
     <li> <a href="http://localhost/nxipp/gygg/" id="link-comment" target="_blank"> <span class="link-text-wrapper"> <span class="link-text"> <em class="link-icon"></em>公益广告 </span> </span> </a> </li> 
    </ul> 
    <div id="nav-overlay"></div> 
   </div> 

   <span id="logo" class="logo original-logo" style="margin-left: -70.1125px; top: 16.574%;"><img alt="" src="<?php echo get_stylesheet_directory_uri() ?>/img/balloon_fdb9722.png" /></span> 
   <span id="logo-text" style="width: 395px; height: 54.641666666666666px; margin-left: -197.5px; top: 43.24%;"><img alt="website-title" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-text_0f1b4c4.png" /></span> 
   <div id="button-download" style="top: 63.88%;">
    <a href="javascript:;" target="_blank" class="i-bbt" id="pop-layer">关于我们</a> 
    <a href="javascript:;" target="_blank" class="i-bbt" id="pop-contact">联系我们</a> 
   </div> 
   <div id="main" style="margin-top: 0px;font-size:12px;">
              <div id="callboard" style="width: 395px; margin-top:475px; font-size: 12px;"> 
                     <ul> 
                            <li> 
                                <span style="color: moccasin"><img alt="" src="<?php echo get_stylesheet_directory_uri() ?>/img/notice-icon.png" width="15px" height="15px" style="vertical-align: middle"/>：前端组上线一个月零八天，PR升为3，BD权重1</span> 
                            </li> 
                            <li> 
                                <span style="color: moccasin"><img alt="" src="<?php echo get_stylesheet_directory_uri() ?>/img/notice-icon.png" width="15px" height="15px"/>：撤下了BloggerAds，原因为收入太少，打开速度慢！</span> 
                            </li> 
                            <li style="margin-top: 0px;"> 
                                <a href="http://www.jb51.net"><img alt="" src="<?php echo get_stylesheet_directory_uri() ?>/img/notice-icon.png" width="15px" height="15px"/>：前端组主题正在整理中..有需要用的朋友请留个言，以方便及时通知！</a> 
                            </li> 
                      </ul> 
              </div> 
   </div>
   <div class="side-bar"> 
	<a href="#" class="icon-chat">学院公众号<div class="chat-tips"><i></i><img style="width:138px;height:138px;" src="<?php echo get_stylesheet_directory_uri() ?>/img/code.jpg" alt="微信订阅号"></div></a> 
        <a href="http://xwcbxy.nxu.edu.cn/" class="icon-qq">返回学院网</a>
	<a href="http://www.nxipp.com" class="icon-mail">工作室</a> 
        <a target="_blank" href="#" class="icon-blog">友情链接</a> 
    </div>
  </div>

<?php get_footer();
