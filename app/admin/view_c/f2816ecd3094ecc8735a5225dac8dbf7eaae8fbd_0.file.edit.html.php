<?php
/* Smarty version 3.1.32, created on 2018-05-23 23:56:23
  from 'F:\mywamp\apache24\htdocs\Admin\app\admin\view\Banner\edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b058f279e2691_22063301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2816ecd3094ecc8735a5225dac8dbf7eaae8fbd' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\Admin\\app\\admin\\view\\Banner\\edit.html',
      1 => 1526833422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b058f279e2691_22063301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20563117685b058f279bb598_64745523', 'iframe');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'common.html');
}
/* {block 'iframe'} */
class Block_20563117685b058f279bb598_64745523 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iframe' => 
  array (
    0 => 'Block_20563117685b058f279bb598_64745523',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
  .form-group{
    height: 32px;
  }
  #add_administrator_style{
        margin: 35px 0 0 35px;
  }
</style>
<div id="add_administrator_style" class="add_menber">
    <form action="<?php echo C('url.main');?>
?m=admin&c=banner&a=editAction" method="post" id="form-admin-add" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
    <div class="form-group">
      <label class="form-label"><span class="c-red">*</span>排序：</label>
      <div class="formControls">
        <input type="text" class="input-text"  name="sort" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sort'];?>
">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label"><span class="c-red">*</span>状态：</label>
      <div class="formControls">
      <select name="status">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array(1=>'上线',0=>'下线'), 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['status'] == $_smarty_tpl->tpl_vars['k']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
      </select>
      </div>
    </div>
    <div class="form-group">
      <label class="form-label "><span class="c-red">*</span>标题：</label>
      <div class="formControls ">
    <input type="text" class="input-text" name='title' value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label">图片：</label>
      <div class="formControls">
        <input type="file" class="input-text"  name="img">
        <br>
        <img style="width: 80%" src="<?php echo C('url.main');?>
/public/admin/upload/<?php echo $_smarty_tpl->tpl_vars['data']->value['img'];?>
">
      </div>
    </div>
    <br><br><br><br>
    <div> 
        <input class="btn btn-primary radius" type="submit" id="Add_Administrator" value="提交">
        <input type="button" onclick="back()" class="btn btn-default radius" value="返回">
    </div>
  </form>
</div>


<style type="text/css">
  #form .clearfix{
    height: 50px;
  }
</style>
<?php echo '<script'; ?>
 type="text/javascript">

/**返回操作**/
function back(){
  history.go(-1);
}  
/**提交操作**/
function article_save_submit(){
       var num=0;
     var str="";
     $(".Mandatory input[type$='text']").each(function(n){
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
          return true;
      }                       
  }

<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'iframe'} */
}
