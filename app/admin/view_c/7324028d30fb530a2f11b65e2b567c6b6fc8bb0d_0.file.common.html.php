<?php
/* Smarty version 3.1.32, created on 2018-05-23 08:33:44
  from 'F:\mywamp\apache24\htdocs\C_travel\app\admin\view\common.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b04b6e84926a9_61488156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7324028d30fb530a2f11b65e2b567c6b6fc8bb0d' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\C_travel\\app\\admin\\view\\common.html',
      1 => 1527035527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b04b6e84926a9_61488156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>畅全程后台管理系统</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18243267855b04b6e845fa14_66300478', 'meta');
?>

        <link href="<?php echo C('url.main');?>
/public/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo C('url.main');?>
/public/admin/assets/css/font-awesome.min.css" />
        
        <link rel="stylesheet" href="<?php echo C('url.main');?>
/public/admin/assets/css/ace.min.css" />
        <link rel="stylesheet" href="<?php echo C('url.main');?>
/public/admin/assets/css/ace-rtl.min.css" />
        <link rel="stylesheet" href="<?php echo C('url.main');?>
/public/admin/assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?php echo C('url.main');?>
/public/admin/css/style.css"/>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17604689145b04b6e846b590_08940428', 'css');
?>

        <?php echo '<script'; ?>
 src="<?php echo C('url.main');?>
/public/admin/assets/js/ace-extra.min.js"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 src="<?php echo C('url.main');?>
/public/admin/js/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>        
        
        <?php echo '<script'; ?>
 type="text/javascript">
            if("ontouchend" in document) document.write("<?php echo '<script'; ?>
 src='<?php echo C('url.main');?>
/public/admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo C('url.main');?>
/public/admin/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo C('url.main');?>
/public/admin/assets/js/typeahead-bs2.min.js"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 src="<?php echo C('url.main');?>
/public/admin/assets/js/ace-elements.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo C('url.main');?>
/public/admin/assets/js/ace.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo C('url.main');?>
/public/admin/assets/layer/layer.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo C('url.main');?>
/public/admin/assets/laydate/laydate.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo C('url.main');?>
/public/admin/js/jquery.nicescroll.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_633205425b04b6e84732a4_35921422', 'javascript');
?>


       
<?php echo '<script'; ?>
 type="text/javascript"> 

/*********************点击事件*********************/
$( document).ready(function(){
    menuActive();
    function menuActive(){
        var navs = $('#nav_list').find('li.home a');
        var len = navs.length;
        
        var search = location.search.split('&');
        if (search.length>=3) {
           for (var i = 0; i < len; i++) {
            var ca = navs[i].href.split('&');
            if (ca.length>=3 && search[1]==ca[1] && (search[2]==ca[2] || search[2] == 'a=editAction' || search[2] == 'a=addAction') ) {
                
                $(navs[i]).parents(".home").addClass('active');
                $(navs[i]).parents(".first").addClass('open');
                $(navs[i]).parents(".submenu").css('display','block');
            }
        } 
        }
        
    }

                                             
//时间设置
  function currentTime(){ 
    var d=new Date(),str=''; 
    str+=d.getFullYear()+'年'; 
    str+=d.getMonth() + 1+'月'; 
    str+=d.getDate()+'日'; 
    str+=d.getHours()+'时'; 
    str+=d.getMinutes()+'分'; 
    str+= d.getSeconds()+'秒'; 
    return str; 
} 

setInterval(function(){$('#time').html(currentTime)},1000); 

// 退出系统
$('#Exit_system').on('click', function(){
      layer.confirm('是否确定退出系统？', {
     btn: ['是','否'] ,//按钮
     icon:2,
    }, 
    function(){
      location.href="http://www.travel.com/?m=admin&c=admin&a=logoutHandler";
        
    });
});
});
function link_operating(name,title){
                var cid = $(this).name;
                var cname = $(this).title;
                $("#iframe").attr("src",cid).ready();
                $("#Bcrumbs").attr("href",cid).ready();
                $(".Current_page a").attr('href',cid).ready();  
                $(".Current_page").attr('name',cid);
                $(".Current_page").html(cname).css({"color":"#333333","cursor":"default"}).ready(); 
                $("#parentIframe").html('<span class="parentIframe iframeurl"> </span>').css("display","none").ready(); 
                $("#parentIfour").html(''). css("display","none").ready();      
      
    
}
<?php echo '</script'; ?>
>   

</head>
    <body>
        <div class="navbar navbar-default" id="navbar">
        
        <?php echo '<script'; ?>
 type="text/javascript">
                try{ace.settings.check('navbar' , 'fixed')}catch(e){}
        <?php echo '</script'; ?>
>
        
            <div class="navbar-container" id="navbar-container">
                <div class="navbar-header pull-left">
                    <a href="<?php echo C('url.main');?>
?m=admin&c=admin&a=indexAction" class="navbar-brand" style="padding: 23px 0px;
">
                        <h2>畅全程后台管理系统</h2>
                    </a><!-- /.brand -->
                </div><!-- /.navbar-header -->
                <div class="navbar-header operating pull-left">
                
                </div>
               <div class="navbar-header pull-right" role="navigation">
               <ul class="nav ace-nav"> 
                <li class="light-blue">

                <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                    <img style="border-radius: 50%;margin-left: 10px;
" width="45" src="<?php echo C('url.main');?>
/public/admin/upload/<?php echo $_SESSION['admin']['img'];?>
">
                 <span  class="time"><em id="time"></em></span><span class="user-info"><small>超级管理员</small><?php echo $_SESSION['admin']['nickname'];?>
</span>
                 <i class="icon-caret-down"></i>
                </a>
                <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                <!--  <li><a href="javascript:void(0" name="Systems.html" title="系统设置" class="iframeurl"><i class="icon-cog"></i>网站设置</a></li> -->
                 <li><a href="<?php echo C('url.main');?>
?m=admin&c=adminMag&a=editAction&id=<?php echo $_SESSION['admin']['id'];?>
" name="admin_info.html" title="个人信息" class="iframeurl"><i class="icon-user"></i>个人资料</a></li>
                 <li class="divider"></li>
                 <li><a href="javascript:ovid(0)" id="Exit_system"><i class="icon-off"></i>退出</a></li>
                </ul>
               </li>
               <li class="purple">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-bell-alt"></i><span class="badge badge-important">8</span></a>
                            <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                            <li class="dropdown-header"><i class="icon-warning-sign"></i>8条通知</li>
                            <li>
                              <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-xs no-hover btn-pink icon-comments-alt"></i>
                                                最新消息
                                            </span>
                                            <span class="pull-right badge badge-info">+12</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="btn btn-xs btn-primary icon-user"></i>
                                        切换为编辑登录..
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
                                                新订单
                                            </span>
                                            <span class="pull-right badge badge-success">+8</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-xs no-hover btn-info icon-twitter"></i>
                                                用户消息
                                            </span>
                                            <span class="pull-right badge badge-info">+11</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        查看所有通知
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    
                    </ul>

                </div>
            </div>
        </div>
        <div class="main-container" id="main-container">
        
        <?php echo '<script'; ?>
 type="text/javascript">
                try{ace.settings.check('main-container' , 'fixed')}catch(e){}
        <?php echo '</script'; ?>
>
        
            <div class="main-container-inner">
                <a class="menu-toggler" id="menu-toggler" href="#">
                    <span class="menu-text"></span>
                </a>
                <div class="sidebar" id="sidebar">
                    
                    <?php echo '<script'; ?>
 type="text/javascript">
                        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
                    <?php echo '</script'; ?>
>
                    
                    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                            <a class="btn btn-success">
                                <i class="icon-signal"></i>
                            </a>

                            <a class="btn btn-info">
                                <i class="icon-pencil"></i>
                            </a>

                            <a class="btn btn-warning">
                                <i class="icon-group"></i>
                            </a>

                            <a class="btn btn-danger">
                                <i class="icon-cogs"></i>
                            </a>
                        </div>

                        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                            <span class="btn btn-success"></span>

                            <span class="btn btn-info"></span>

                            <span class="btn btn-warning"></span>

                            <span class="btn btn-danger"></span>
                        </div>
                    </div><!-- #sidebar-shortcuts -->
                    <div id="menu_style" class="menu_style">
                    <ul class="nav nav-list" id="nav_list">
                     <li class="home"><a href="<?php echo C('url.main');?>
?m=admin&c=admin&a=indexAction" class="iframeurl" title=""><i class="icon-home"></i><span class="menu-text"> 系统首页 </span></a>
                     </li>
                     
                     <li class="first"><a href="#" class="dropdown-toggle"><i class="icon-list"></i><span class="menu-text"> 分类管理 </span><b class="arrow icon-angle-down"></b></a>
                       <ul class="submenu">
                         <li class="home"><a  href="<?php echo C('url.main');?>
?m=admin&c=category&a=indexAction" name="Products_List.html"  title="产品类表" class="iframeurl"><i class="icon-double-angle-right"></i>分类列表</a></li>
                        </ul>
                    </li>
 
                    <li class="first"><a href="#" class="dropdown-toggle"><i class="icon-bookmark "></i><span class="menu-text"> 旅游内容管理 </span><b class="arrow icon-angle-down"></b></a>
                        <ul class="submenu">
                            <li class="home"><a href="<?php echo C('url.main');?>
?m=admin&c=content&a=indexAction"   class="iframeurl"><i class="icon-double-angle-right"></i>旅游内容列表</a></li>
                             <li class="home"><a href="<?php echo C('url.main');?>
?m=admin&c=list&a=indexAction"   class="iframeurl"><i class="icon-double-angle-right"></i>其他内容列表</a></li>
                        </ul>
                        
                    </li>

                     <li class="first"><a href="#" class="dropdown-toggle"><i class="icon-picture "></i><span class="menu-text"> 图片管理 </span><b class="arrow icon-angle-down"></b></a>
                        <ul class="submenu">
                            <li class="home"><a href="<?php echo C('url.main');?>
?m=admin&c=banner&a=indexAction"   class="iframeurl"><i class="icon-double-angle-right"></i>图片列表</a></li>
                        </ul>
                    </li>

                    <li class="first"><a href="#" class="dropdown-toggle"><i class="icon-laptop"></i><span class="menu-text"> 常见问题管理 </span><b class="arrow icon-angle-down"></b></a>
                        <ul class="submenu">
                            <li class="home"><a href="<?php echo C('url.main');?>
?m=admin&c=question&a=indexAction"   class="iframeurl"><i class="icon-double-angle-right"></i>问题分类</a></li>
                            <li class="home"><a href="<?php echo C('url.main');?>
?m=admin&c=question&a=indexAction1"   class="iframeurl"><i class="icon-double-angle-right"></i>问题列表</a></li>
                        </ul>
                    </li>
                

                    <li class="first"><a href="#" class="dropdown-toggle"><i class="icon-group"></i><span class="menu-text"> 管理员管理 </span><b class="arrow icon-angle-down"></b></a>
                        <ul class="submenu">                       
                            <li class="home"><a href="<?php echo C('url.main');?>
?m=admin&c=adminMag&a=indexAction" name="administrator.html" title="管理员列表" class="iframeurl"><i class="icon-double-angle-right"></i>管理员列表</a></li>
                        </ul>
                    </li>                
                                      
                    </ul>
                    </div>
                    <?php echo '<script'; ?>
 type="text/javascript">
           $("#menu_style").niceScroll({  
            cursorcolor:"#888888",  
            cursoropacitymax:1,  
            touchbehavior:false,  
            cursorwidth:"5px",  
            cursorborder:"0",  
            cursorborderradius:"5px"  
            }); 
          <?php echo '</script'; ?>
>
                    <div class="sidebar-collapse" id="sidebar-collapse">
                        <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
                    </div>
                    
                    <?php echo '<script'; ?>
 type="text/javascript">
                        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
                    <?php echo '</script'; ?>
>
                    
                </div>

                <div class="main-content">
                    
                <?php echo '<script'; ?>
 type="text/javascript">
                            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                        <?php echo '</script'; ?>
>
                        
                    <div class="breadcrumbs" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="icon-home home-icon"></i>
                                <a href="<?php echo C('url.main');?>
?m=admin&c=admin&a=indexAction">首页</a>
                            </li>
                            <li class="active"><span class="Current_page iframeurl"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16670854115b04b6e8486b26_22826512', 'bread-2-title');
?>
</span></li>
                            <li class="active" id="parentIframe1"><span class="parentIframe iframeurl"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15516179955b04b6e848a9a5_37311530', 'bread-3-title');
?>
</span></li>
                            <!-- <li class="active" id="parentIfour2"><span class="parentIfour iframeurl">3</span></li> -->
                        </ul>
                    </div>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18317904565b04b6e848e823_73879734', 'iframe');
?>

                <!--  <iframe id="iframe" style="border:0; width:100%; background-color:#FFF;"name="iframe" frameborder="0" src="<?php echo C('url.main');?>
/app/admin/view/Privilege/home.html">  </iframe> -->
                 

<!-- /.page-content -->
                </div><!-- /.main-content -->   
                
                  <div style="top:0;" class="ace-settings-container" id="ace-settings-container">
                      <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                          <i class="icon-cog bigger-150"></i>
                      </div>
  
                      <div class="ace-settings-box" id="ace-settings-box">
                          <div>
                              <div class="pull-left">
                                  <select id="skin-colorpicker" class="hide">
                                      <option data-skin="default" value="#438EB9">#438EB9</option>
                                      <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                      <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                      <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                  </select>
                              </div>
                              <span>&nbsp; 选择皮肤</span>
                          </div>
  
                          <div>
                              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                              <label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
                          </div>
  
                          <div>
                              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                              <label class="lbl" for="ace-settings-rtl">切换到左边</label>
                          </div>
  
                          <div>
                              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                              <label class="lbl" for="ace-settings-add-container">
                                  切换窄屏
                                  <b></b>
                              </label>
                          </div>
                      </div>
                  </div><!-- /#ace-settings-container -->       
    </div><!-- /.main-container-inner -->
            
        </div>
         <!--底部样式-->
       
         <div class="footer_style" id="footerstyle">  
            
         <?php echo '<script'; ?>
 type="text/javascript">try{ace.settings.check('footerstyle' , 'fixed')}catch(e){}<?php echo '</script'; ?>
>
          <p class="l_f">&copy; Copyright 2018 - 保留所有权利.</p>
          <p class="r_f">广州黑马程序员 PHP30 OKAMOTO</p>
         </div>
         <!--修改密码样式-->
         <div class="change_Pass_style" id="change_Pass">
            <ul class="xg_style">
             <li><label class="label_name">原&nbsp;&nbsp;密&nbsp;码</label><input name="原密码" type="password" class="" id="password"></li>
             <li><label class="label_name">新&nbsp;&nbsp;密&nbsp;码</label><input name="新密码" type="password" class="" id="Nes_pas"></li>
             <li><label class="label_name">确认密码</label><input name="再次确认密码" type="password" class="" id="c_mew_pas"></li>              
            </ul>          
         </div>
        <!-- /.main-container -->
        <!-- basic scripts -->
        
</body>
</html>

<?php }
/* {block 'meta'} */
class Block_18243267855b04b6e845fa14_66300478 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_18243267855b04b6e845fa14_66300478',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'meta'} */
/* {block 'css'} */
class Block_17604689145b04b6e846b590_08940428 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_17604689145b04b6e846b590_08940428',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'css'} */
/* {block 'javascript'} */
class Block_633205425b04b6e84732a4_35921422 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_633205425b04b6e84732a4_35921422',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'javascript'} */
/* {block 'bread-2-title'} */
class Block_16670854115b04b6e8486b26_22826512 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-2-title' => 
  array (
    0 => 'Block_16670854115b04b6e8486b26_22826512',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'bread-2-title'} */
/* {block 'bread-3-title'} */
class Block_15516179955b04b6e848a9a5_37311530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-3-title' => 
  array (
    0 => 'Block_15516179955b04b6e848a9a5_37311530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'bread-3-title'} */
/* {block 'iframe'} */
class Block_18317904565b04b6e848e823_73879734 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iframe' => 
  array (
    0 => 'Block_18317904565b04b6e848e823_73879734',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    
                    <?php
}
}
/* {/block 'iframe'} */
}
