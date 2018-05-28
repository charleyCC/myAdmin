<?php
/* Smarty version 3.1.32, created on 2018-05-22 23:44:41
  from 'F:\mywamp\apache24\htdocs\C_travel\app\admin\view\question\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b043ae95b64c8_89920752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0fcaa24085667340ae9e86e2148012ba0938977' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\C_travel\\app\\admin\\view\\question\\index.html',
      1 => 1526887256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b043ae95b64c8_89920752 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17871577465b043ae959af48_45617831', 'meta');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11645119545b043ae959edc7_96591740', 'css');
?>
       
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7717014555b043ae95a2c47_42630724', 'javascript');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8151198855b043ae95a6ac2_44795522', 'iframe');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'common.html');
}
/* {block 'meta'} */
class Block_17871577465b043ae959af48_45617831 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_17871577465b043ae959af48_45617831',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<?php
}
}
/* {/block 'meta'} */
/* {block 'css'} */
class Block_11645119545b043ae959edc7_96591740 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_11645119545b043ae959edc7_96591740',
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
class Block_7717014555b043ae95a2c47_42630724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_7717014555b043ae95a2c47_42630724',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
		<?php echo '<script'; ?>
 src="<?php echo C('url.main');?>
/public/admin/assets/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo C('url.main');?>
/public/admin/assets/js/jquery.dataTables.bootstrap.js"><?php echo '</script'; ?>
> 
      <?php echo '<script'; ?>
 src="<?php echo C('url.main');?>
/public/admin/js/lrtk.js" type="text/javascript" ><?php echo '</script'; ?>
>	
<?php
}
}
/* {/block 'javascript'} */
/* {block 'iframe'} */
class Block_8151198855b043ae95a6ac2_44795522 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iframe' => 
  array (
    0 => 'Block_8151198855b043ae95a6ac2_44795522',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="margin clearfix">
 <div class="cover_style" id="cover_style">
     <div class="search_style">
     <a href="<?php echo C('url.main');?>
?m=admin&c=Question&a=addAction" class="btn btn-success">
        新增
      </a>
     <!--  <ul class="search_content clearfix">
       <li><label class="l_f">名称</label><input name="name" type="text" class="text_add" placeholder="分类名称" style=" width:250px"></li>
       <li style="width:90px;"><button type="button" class="btn_search"><i class="fa fa-search"></i>查询</button></li>
      </ul> -->
      
    </div>
    
     <!--账户管理-->
      <div class="">
       <table class="table table-striped table-bordered table-hover" id="sample-table">
      <thead>
		 <tr>
          <th width="">排序</th>  
          <th width="">ID</th>
          <th width="">问题分类</th>          
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
          
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['sort'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</td>        
          <!-- <td class="td-status"><span class="label label-success radius">启用</span></td> -->
          <td class="td-manage">
           <a href="<?php echo C('url.main');?>
?m=admin&c=Question&a=editAction&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="btn btn-xs btn-info"><i class="fa fa-check  bigger-120"></i>编辑</a>
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
            <!-- <div class="row">
        <div class="col-sm-6">
          <div class="dataTables_info" id="sample-table_info" role="status" aria-live="polite">第 1 到 10 条记录，共 11 条</div>
        </div>
        <div class="col-sm-6">
          <div class="dataTables_paginate paging_bootstrap" id="sample-table_paginate"><ul class="pagination"><li class="prev disabled"><a href="#">上一页</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li class="next"><a href="#">下一页</a></li></ul>
          </div>
        </div>
      </div><br><br><br> -->
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
?m=admin&c=Question&a=delAction&id="+id;
        
    });
  }
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'iframe'} */
}
