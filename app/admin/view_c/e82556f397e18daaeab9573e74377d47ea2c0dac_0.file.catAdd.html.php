<?php
/* Smarty version 3.1.32, created on 2018-05-19 23:30:56
  from 'F:\mywamp\apache24\htdocs\C_travel\app\admin\view\Category\catAdd.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0043309dfb40_47976853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e82556f397e18daaeab9573e74377d47ea2c0dac' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\C_travel\\app\\admin\\view\\Category\\catAdd.html',
      1 => 1526743831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0043309dfb40_47976853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13907480155b0043309d7e47_37350255', 'iframe');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'common.html');
}
/* {block 'iframe'} */
class Block_13907480155b0043309d7e47_37350255 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iframe' => 
  array (
    0 => 'Block_13907480155b0043309d7e47_37350255',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<div class="margin clearfix">
 <div class="article_style">
    <div class="add_content" id="form-article-add">
      <form action="<?php echo C('url.main');?>
?m=admin&c=category&a=addHanlder" method="post">
     <ul id="form">
      <li class="clearfix Mandatory">
      <label class="label_name"><i>*</i>唯一标识</label><span class="formControls col-10"><input name="slug" nickname='唯一标识' type="text" class="col-xs-10 col-sm-5 "></span>
      </li>
      <li class="clearfix Mandatory">
      <label class="label_name"><i>*</i>分类名称</label><span class="formControls col-10"><input name="name" nickname='分类名称' type="text" class="col-xs-10 col-sm-5 "></span>
      </li>
     <li class="clearfix"><label class="label_name">所属分类</label>
       <span class="formControls col-4">
        <?php echo generateSelect($_smarty_tpl->tpl_vars['datas']->value);?>

       </span>
      </li>   
      <li class="clearfix"><label class="label_name">排序</label><span class="formControls col-10"><input type="number" name='sort' class="col-xs-10 col-sm-1"></span></li>
      
     </ul>
    <div class="Button_operation">
      <input type="submit" onclick="return article_save_submit();" class="btn btn-primary radius" id="login_btn" value="提交">
        <input type="button" onclick="back()" class="btn btn-default radius" value="返回">
      </div>
      </form>
    </div>
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
