<?php
/* Smarty version 3.1.32, created on 2018-05-22 21:31:21
  from 'F:\mywamp\apache24\htdocs\C_travel\app\admin\view\Content\add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b041ba949dd08_83737531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3623b5aabc6844b952e70179d88882c3a6ced47f' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\C_travel\\app\\admin\\view\\Content\\add.html',
      1 => 1526977332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./breadcrumb.html' => 1,
  ),
),false)) {
function content_5b041ba949dd08_83737531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_subTemplateRender('file:./breadcrumb.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6911928985b041ba9496004_41559533', 'javascript');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6606323715b041ba9499e80_04094640', 'iframe');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'common.html');
}
/* {block 'javascript'} */
class Block_6911928985b041ba9496004_41559533 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_6911928985b041ba9496004_41559533',
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
class Block_6606323715b041ba9499e80_04094640 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iframe' => 
  array (
    0 => 'Block_6606323715b041ba9499e80_04094640',
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
?m=admin&c=content&a=addAction" method="post" id="form-admin-add" enctype="multipart/form-data">
    

    <div class="form-group">
      <label class="form-label">分类：</label>
      <div class="formControls" style="margin-left:20px;">
      
        <?php echo generateSelect($_smarty_tpl->tpl_vars['tree']->value,0,'cat_id');?>

     
      </div>
    </div>    

    <div class="form-group">
      <label class="form-label">标题：</label>
      <div class="formControls">
        <input type="text" class="input-text"  name="title">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label">状态：</label>
      <div class="formControls" style="margin-left: 20px;">
      <select name="status">
        <option value="1">上线</option>
        <option value="0">下线</option>
      </select>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label">排序：</label>
      <div class="formControls">
        <input type="number" class="input-text"  name="sort">
      </div>
    </div>

    
    <div class="form-group">
      <label class="form-label ">星级|座位：</label>
      <div class="formControls ">
      <input type="number" class="input-text" name='grade'>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label">预定优惠价：</label>
      <div class="formControls">
        <input type="text" class="input-text"  name="price">
      </div>
    </div>    

    <div class="form-group">
      <label class="form-label ">几日游|几星级：</label>
      <div class="formControls ">
      <input type="number" class="input-text" name='tab_cat'>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label ">浏览人数：</label>
      <div class="formControls ">
      <input type="number" class="input-text" name='visit_num'>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label ">预定人数：</label>
      <div class="formControls ">
      <input type="number" class="input-text" name='booking_num'>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label">满意度：</label>
      <div class="formControls">
        <input type="text" class="input-text"  name="score">
      </div>
    </div> 



    <div class="form-group">
      <label class="form-label">封面：</label>
      <div class="formControls" style="margin-left: 20px">
        <input type="file" class="input-text"  name="cover">
      </div>
    </div>

    <div class="">
      <label class="">简介：</label>
      <div class="" style="width: 95%;">
        <textarea name="intro">
          
        </textarea>

        <?php echo '<script'; ?>
>CKEDITOR.replace('intro');<?php echo '</script'; ?>
>
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
