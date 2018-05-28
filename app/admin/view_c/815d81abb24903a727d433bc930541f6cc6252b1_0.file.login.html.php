<?php
/* Smarty version 3.1.32, created on 2018-05-19 17:29:18
  from 'F:\mywamp\apache24\htdocs\C_travel\app\admin\view\Privilege\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5affee6eefdef1_21878205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '815d81abb24903a727d433bc930541f6cc6252b1' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\C_travel\\app\\admin\\view\\Privilege\\login.html',
      1 => 1526722120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5affee6eefdef1_21878205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\mywamp\\apache24\\htdocs\\C_travel\\plugins\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?><!DOCTYPE html>
<html>
<head>
<meta charset=utf-8" />
		<link href="<?php echo C('url.main');?>
/public/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo C('url.main');?>
/public/admin/assets/css/font-awesome.min.css" />
		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo C('url.main');?>
/public/admin/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo C('url.main');?>
/public/admin/assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo C('url.main');?>
/public/admin/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="<?php echo C('url.main');?>
/public/admin/assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?php echo C('url.main');?>
/public/admin/css/style.css"/>
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo C('url.main');?>
/public/admin/assets/css/ace-ie.min.css" />
		<![endif]-->
		<?php echo '<script'; ?>
 src="<?php echo C('url.main');?>
/public/admin/assets/js/ace-extra.min.js"><?php echo '</script'; ?>
>
		<!--[if lt IE 9]>
		<?php echo '<script'; ?>
 src="<?php echo C('url.main');?>
/public/admin/assets/js/html5shiv.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo C('url.main');?>
/public/admin/assets/js/respond.min.js"><?php echo '</script'; ?>
>
		<![endif]-->
		<?php echo '<script'; ?>
 src="<?php echo C('url.main');?>
/public/admin/js/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>        
        <?php echo '<script'; ?>
 src="<?php echo C('url.main');?>
/public/admin/assets/layer/layer.js" type="text/javascript"><?php echo '</script'; ?>
>
<title>畅全程后台管理系统</title>
</head>

<body class="login-layout Reg_log_style">
<div class="logintop">    
    <span>畅全程后台管理系统</span>    
    <ul>
    <li><a href="<?php echo C('url.main');?>
">返回首页</a></li>
    </ul>    
    </div>
    <div class="loginbody">
<div class="login-container">
	<div class="center">
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box widget-box no-border visible">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="icon-coffee green"></i>
												管理员登陆
											</h4>

											<div class="login_icon"><img src="<?php echo C('url.main');?>
/public/admin/images/login.png" /></div>

											<form method="post" action="<?php echo C('url.main');?>
?m=admin&c=admin&a=loginHandler" class="">
												<fieldset>
										<ul>
   <li class="frame_style form_error"><label class="user_icon"></label><input name="acc" type="text"  id="username" nickname="帐号"/><i>帐号</i></li>
   <li class="frame_style form_error"><label class="password_icon"></label><input name="pwd" type="password"   id="userpwd" nickname="密码"/><i>密码</i></li>
   <li class="frame_style form_error"><label class="Codes_icon"></label><input name="checkcode" type="text"   id="Codes_text"/ nickname="验证码"><i>验证码</i><div class="Codes_region" style="line-height: 34px;
"><img src="<?php echo C('url.main');?>
?m=admin&c=admin&a=checkCodeAction" width="80" height="38" id="checkcode"></div></li>
   
  </ul>
													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace"  name="rememberMe" value="yes">
															<span class="lbl"> 7天内自动登录</span>
														</label>

														<input type="submit" class="width-35 pull-right btn btn-sm btn-primary" id="login_btn" value="登录">
															
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

										</div><!-- /widget-main -->

										<div class="toolbar clearfix">
											
											
										</div>
									</div><!-- /widget-body -->
								</div><!-- /login-box -->
							</div><!-- /position-relative -->
						</div>
                        </div>
                        <div class="loginbm">版权所有 <?php echo smarty_modifier_date_format(time(),'%Y');?>
  <a href="">PHP30 OKAMOTO</a> </div><strong></strong>
</body>
</html>
<?php echo '<script'; ?>
 type="text/javascript">
      window.onload = function(){
        var oCheckcode = document.querySelector("#checkcode");
        oCheckcode.onclick = function(){
          var domain = "<?php echo C('url.main');?>
";
          var src = domain+'?m=admin&c=admin&a=checkCodeAction&t='+Math.random();
          this.src=src;
        };
        
      };
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$('#login_btn').on('click', function(){
	     var num=0;
		 var str="";
     $("input[type$='text'],input[type$='password']").each(function(n){
          if($(this).val()=="")
          {
               
			   layer.alert(str+=""+$(this).attr("nickname")+"不能为空！\r\n",{
                title: '提示框',				
				icon:0,								
          }); 
		    num++;
            return false;            
          } 
		 });
		  if(num>0){  return false;}	 	
          else{
			  // layer.alert('登陆成功！',{
     //           title: '提示框',				
			  //  icon:1,		
			  // });
			  // layer.close(index);
			  return true;
	       
		  }		  		     						
		
	});
  $(document).ready(function(){
	 $("input[type='text'],input[type='password']").blur(function(){
        var $el = $(this);
        var $parent = $el.parent();
        $parent.attr('class','frame_style').removeClass(' form_error');
        if($el.val()==''){
            $parent.attr('class','frame_style').addClass(' form_error');
        }
    });
	$("input[type='text'],input[type='password']").focus(function(){		
		var $el = $(this);
        var $parent = $el.parent();
        $parent.attr('class','frame_style').removeClass(' form_errors');
        if($el.val()==''){
            $parent.attr('class','frame_style').addClass(' form_errors');
        } else{
			 $parent.attr('class','frame_style').removeClass(' form_errors');
		}
		});
	  })

<?php echo '</script'; ?>
>
<?php }
}
