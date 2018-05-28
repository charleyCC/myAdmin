<?php
/* Smarty version 3.1.32, created on 2018-05-21 14:57:44
  from 'F:\mywamp\apache24\htdocs\C_travel\app\admin\view\adminMag\edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b026de85d0bc0_25629348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ee0b86c3b4ba6a66b859a4abf47f1c2e40cbe2d' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\C_travel\\app\\admin\\view\\adminMag\\edit.html',
      1 => 1526865692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./breadcrumb.html' => 1,
  ),
),false)) {
function content_5b026de85d0bc0_25629348 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_subTemplateRender('file:./breadcrumb.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6960585765b026de85c11c6_31697539', 'iframe');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'common.html');
}
/* {block 'iframe'} */
class Block_6960585765b026de85c11c6_31697539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iframe' => 
  array (
    0 => 'Block_6960585765b026de85c11c6_31697539',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style type="text/css">
  .c-red{
    color: red;
  }
  .form-group{
    height: 28px;
  }
  .article_style{
    margin: 20px 0 0 20px;
  }
</style>
<div class="margin clearfix">
 <div class="article_style">
    <div>
    <form action="<?php echo C('url.main');?>
?m=admin&c=adminMag&a=editAction" method="post" id="form-admin-add" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
    <div class="form-group">
      <label class="form-label">昵称：</label>
      <div class="formControls">
        <input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nickname'];?>
" name="nickname">
      </div>
   </div>

    <div class="form-group">
      <label class="form-label"><span class="c-red">*</span>密码：</label>
      <div class="formControls">
      <input type="password" name="pwd" class="input-text">
      </div>
    </div> 
    
    <div class="form-group">
      <label class="form-label">头像：</label>
      <div class="formControls">
        <input style="margin-left: 10px;" type="file" class="input-text"  name="img">
        <br>
        <img style="border-radius: 50%" src="<?php echo C('url.main');?>
/public/admin/upload/<?php echo $_smarty_tpl->tpl_vars['data']->value['img'];?>
">
      </div>
    </div>
    <br><br><br>
    <div class="form-group"> 
        <input class="btn btn-primary radius" type="submit" value="提交">
        <input type="button" onclick="back()" class="btn btn-default radius" value="返回">
    </div>
  </form>
</div
 </div>
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
