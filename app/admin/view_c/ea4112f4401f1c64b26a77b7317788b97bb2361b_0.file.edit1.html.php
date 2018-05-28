<?php
/* Smarty version 3.1.32, created on 2018-05-23 08:27:59
  from 'F:\mywamp\apache24\htdocs\C_travel\app\admin\view\question\edit1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b04b58f0891f9_15335648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea4112f4401f1c64b26a77b7317788b97bb2361b' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\C_travel\\app\\admin\\view\\question\\edit1.html',
      1 => 1526889997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b04b58f0891f9_15335648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20199782615b04b58f0814f0_28663531', 'iframe');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'common.html');
}
/* {block 'iframe'} */
class Block_20199782615b04b58f0814f0_28663531 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iframe' => 
  array (
    0 => 'Block_20199782615b04b58f0814f0_28663531',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="margin clearfix">
 <div class="article_style">
    <div class="add_content" id="form-article-add">
      <form action="<?php echo C('url.main');?>
?m=admin&c=Question&a=editHandler1" method="post">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
        <ul id="form">
       <ul id="form">
    
    
      
          <li class="clearfix Mandatory">
      <label class="label_name"><i>*</i>问题</label><span ><input name="question"  type="text" class="col-xs-10 col-sm-5 " value="<?php echo $_smarty_tpl->tpl_vars['data']->value['question'];?>
"></span>
      </li>
      <li class="clearfix Mandatory">
      <label class="label_name"><i>*</i>问题解答</label><span ><input name="answer"  type="text" class="col-xs-10 col-sm-5 " value="<?php echo $_smarty_tpl->tpl_vars['data']->value['answer'];?>
"></span>
      </li>
      <li class="clearfix Mandatory">
      <label class="label_name"><i>*</i>所属分类ID</label><span ><input name="cat_id"  type="text" class="col-xs-10 col-sm-5 " value="<?php echo $_smarty_tpl->tpl_vars['data']->value['cat_id'];?>
"></span>
      </li>
     </ul>

 
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
