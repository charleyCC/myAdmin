<?php
/* Smarty version 3.1.32, created on 2018-05-22 23:10:42
  from 'F:\mywamp\apache24\htdocs\C_travel\app\admin\view\List\add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0432f2ddf9d7_20377096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4eb6de9db595b1c58a4d0eb6b3de0839b3c59e38' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\C_travel\\app\\admin\\view\\List\\add.html',
      1 => 1527001683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./breadcrumb.html' => 1,
  ),
),false)) {
function content_5b0432f2ddf9d7_20377096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  

<?php $_smarty_tpl->_subTemplateRender('file:./breadcrumb.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8464004465b0432f2dd7cd4_18056968', 'javascript');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10183772255b0432f2ddbb57_42099536', 'iframe');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'common.html');
}
/* {block 'javascript'} */
class Block_8464004465b0432f2dd7cd4_18056968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_8464004465b0432f2dd7cd4_18056968',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo C('url.main');?>
/public/admin/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
/* {block 'iframe'} */
class Block_10183772255b0432f2ddbb57_42099536 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iframe' => 
  array (
    0 => 'Block_10183772255b0432f2ddbb57_42099536',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="margin clearfix">
  <style type="text/css">
    .form-group{
      height: 32px;
    }
  </style>
<div id="add_content_style" class="add_menber">
    <form action="<?php echo C('url.main');?>
?m=admin&c=list&a=addh" method="post" id="form-admin-add" enctype="multipart/form-data">
    
    <div class="form-group">
      <label class="form-label">标题：</label>
      <div class="formControls">
        <input type="text" class="input-text"  name="title">
      </div>
    </div>
       
    <br><br>
    <div class="">
      <label class="">内容：</label>
      <div class="" style="width: 95%;">
        <textarea name="content">
          
        </textarea>

        <?php echo '<script'; ?>
>CKEDITOR.replace('content');<?php echo '</script'; ?>
>
      </div>
    </div>

    <div> 
        <input style="margin-top: 50px" class="btn btn-primary radius" type="submit" value="提交">
        <input style="margin-top: 50px" type="button" onclick="back()" class="btn btn-default radius" value="返回">
    </div>
    <br><br>
  </form>
</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
  /**返回操作**/
function back(){
  history.go(-1);
} 
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'iframe'} */
}
