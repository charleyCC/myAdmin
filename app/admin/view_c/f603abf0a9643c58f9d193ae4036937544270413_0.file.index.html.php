<?php
/* Smarty version 3.1.32, created on 2018-05-22 23:11:17
  from 'F:\mywamp\apache24\htdocs\C_travel\app\admin\view\List\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b043315c7f296_93778443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f603abf0a9643c58f9d193ae4036937544270413' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\C_travel\\app\\admin\\view\\List\\index.html',
      1 => 1527001863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./breadcrumb.html' => 1,
  ),
),false)) {
function content_5b043315c7f296_93778443 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

      
<?php $_smarty_tpl->_subTemplateRender('file:./breadcrumb.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21093363045b043315c63d11_69497203', 'css');
?>
       
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13115843225b043315c67b96_33304210', 'javascript');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3950495445b043315c6ba19_28365510', 'iframe');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'common.html');
}
/* {block 'css'} */
class Block_21093363045b043315c63d11_69497203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_21093363045b043315c63d11_69497203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link href="<?php echo C('url.main');?>
/public/admin/fancybox/dist/jquery.fancybox.min.css" rel="stylesheet">
<?php
}
}
/* {/block 'css'} */
/* {block 'javascript'} */
class Block_13115843225b043315c67b96_33304210 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_13115843225b043315c67b96_33304210',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
    <?php echo '<script'; ?>
 src="<?php echo C('url.main');?>
/public/admin/fancybox/dist/jquery.fancybox.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
/* {block 'iframe'} */
class Block_3950495445b043315c6ba19_28365510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iframe' => 
  array (
    0 => 'Block_3950495445b043315c6ba19_28365510',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="margin clearfix">
 <div class="cover_style" id="cover_style">

    <div class="border clearfix">
       <span class="l_f">
        <a href="<?php echo C('url.main');?>
?m=admin&c=list&a=addAction" id="content_add" class="btn btn-warning">添加其他内容</a>
        
       </span>
       <span class="r_f">共：<b><?php echo count($_smarty_tpl->tpl_vars['datas']->value);?>
</b>条记录</span>
    </div>

     
    <div class="">
       <table class="table table-striped table-bordered table-hover" id="sample-table">
      <thead>
     <tr>
          <th width="">序号</th>
          <th width="">ID</th>
          <th width="">标题</th>
          <th width="">添加时间</th>             
          <th width="">操作</th>
          </tr>
      </thead>
  <tbody>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['data']->value) {
?>
    <tr>
          
          <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</td>
          <td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['data']->value['add_time']);?>
</td>        
          <td class="td-manage">        
           <a href="<?php echo C('url.main');?>
?m=admin&c=list&a=editAction&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="btn btn-xs btn-info">编辑</a>  
           <a href="javascript:;" onclick="del(<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
)"  class="btn btn-xs  btn-danger">
          删除</a>  
            
          </td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
      
<br><br><br>
<br><br><br>

    </div>
    
     
</div>

</div>
<?php echo '<script'; ?>
 type="text/javascript">
  function del(id){    
     layer.confirm('是否确定删除此条记录？', {
     btn: ['是','否'] ,//按钮
     icon:2,
    }, 
    function(){
      location.href="<?php echo C('url.main');?>
?m=admin&c=list&a=delAction&id="+id;      
    });
  }

<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'iframe'} */
}
