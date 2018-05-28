<?php
/* Smarty version 3.1.32, created on 2018-05-23 22:49:54
  from 'F:\mywamp\apache24\htdocs\Admin\app\admin\view\Privilege\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b057f92bd1d83_87475037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da292cb5f57b26a8410e19a0860706690c0a60ac' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\Admin\\app\\admin\\view\\Privilege\\index.html',
      1 => 1527003692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b057f92bd1d83_87475037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9579810085b057f92ab8948_54109549', 'css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2662482215b057f92ac0649_64425377', 'javascript');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10004141945b057f92bb2970_40068151', 'iframe');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'common.html');
}
/* {block 'css'} */
class Block_9579810085b057f92ab8948_54109549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_9579810085b057f92ab8948_54109549',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link href="<?php echo C('url.main');?>
/public/admin/assets/css/codemirror.css" rel="stylesheet">
<?php
}
}
/* {/block 'css'} */
/* {block 'javascript'} */
class Block_2662482215b057f92ac0649_64425377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_2662482215b057f92ac0649_64425377',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 src="<?php echo C('url.main');?>
/public/admin/assets/dist/echarts.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
/* {block 'iframe'} */
class Block_10004141945b057f92bb2970_40068151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iframe' => 
  array (
    0 => 'Block_10004141945b057f92bb2970_40068151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\mywamp\\apache24\\htdocs\\Admin\\plugins\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div class="page-content clearfix">
 <div class="alert alert-block alert-success">
  <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
  <i class="icon-ok green"></i>欢迎使用<strong class="green">畅全程后台管理系统
  </strong>,你本次登陆时间为<?php echo smarty_modifier_date_format($_COOKIE['loginTime'],'%Y-%m-%d %H:%M');?>
，登陆IP:<?php echo $_SERVER['REMOTE_ADDR'];?>

 </div>
 <div class="state-overview clearfix" style="height: 236px">
    <div class=" col-sm-6">
        <section class="panel">
            <div class="symbol terques">
               <i class="icon-user"></i>
            </div>
            <div class="value">
                <h1><?php echo $_smarty_tpl->tpl_vars['row3']->value['num3'];?>
</h1>
                <p>管理员</p>
            </div>
        </section>
    </div>
    <div class=" col-sm-6">
        <section class="panel">
            <div class="symbol red">
                <i class="icon-tags"></i>
            </div>
            <div class="value">
                <h1><?php echo $_smarty_tpl->tpl_vars['row4']->value['num4'];?>
</h1>
                <p>图片记录</p>
            </div>
        </section>
    </div>
    <div class=" col-sm-6">
        <section class="panel">
            <div class="symbol yellow">
                <i class="icon-shopping-cart"></i>
            </div>
            <div class="value">
                <h1><?php echo $_smarty_tpl->tpl_vars['row']->value['num'];?>
</h1>
                <p>旅游内容</p>
            </div>
        </section>
    </div>
    <div class=" col-sm-6">
        <section class="panel">
            <div class="symbol blue">
                <i class="icon-bar-chart"></i>
            </div>
            <div class="value">
                <h1><?php echo $_smarty_tpl->tpl_vars['row2']->value['num2'];?>
</h1>
                <p>分类记录</p>
            </div>
        </section>
    </div>
</div>
           
 <div class="clearfix">
  <div class="home_btn">
     <div>
     <a href="<?php echo C('url.main');?>
?m=admin&c=category&a=addAction"  title="添加分类" class="btn  btn-primary btn-sm no-radius">
     <i class="bigger-200"><img src="<?php echo C('url.main');?>
/public/admin/images/icon-addp.png" /></i>
     <h5 class="margin-top">添加分类</h5>
     </a>
     <a href="<?php echo C('url.main');?>
?m=admin&c=content&a=addAction"  title="添加旅游内容" class="btn  btn-info btn-sm no-radius">
     <i class="bigger-200"><img src="<?php echo C('url.main');?>
/public/admin/images/icon-addwz.png" /></i>
     <h5 class="margin-top">添加旅游内容</h5>
     </a>
     
     <a href="<?php echo C('url.main');?>
?m=admin&c=category&a=indexAction"  title="分类列表" class="btn  btn-info btn-sm no-radius">
     <i class="bigger-200"><img src="<?php echo C('url.main');?>
/public/admin/images/icon-cpgl.png" /></i>
     <h5 class="margin-top">分类列表</h5>
     </a>
     <a href="<?php echo C('url.main');?>
?m=admin&c=adminMag&a=indexAction"  title="管理员信息" class="btn  btn-success btn-sm no-radius">
     <i class="bigger-200"><img src="<?php echo C('url.main');?>
/public/admin/images/icon-grxx.png" /></i>
     <h5 class="margin-top">管理员信息</h5>
     </a>    
     <a href="<?php echo C('url.main');?>
?m=admin&c=banner&a=indexAction"  title="图片管理" class="btn  btn-pink btn-sm no-radius">
     <i class="bigger-200"><img src="<?php echo C('url.main');?>
/public/admin/images/icon-ad.png" /></i>
     <h5 class="margin-top">图片管理</h5>
     </a>
      
     </div>
  </div>
 
 </div>
   
     </div>
<?php
}
}
/* {/block 'iframe'} */
}
