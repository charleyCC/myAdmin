<?php
/* Smarty version 3.1.32, created on 2018-05-19 23:35:25
  from 'F:\mywamp\apache24\htdocs\C_travel\app\admin\view\Category\catIndex.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b00443d67c700_60472169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74e4842da2a66c9cc0d18fa13f66936fcce85de6' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\C_travel\\app\\admin\\view\\Category\\catIndex.html',
      1 => 1526744122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b00443d67c700_60472169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1205290055b00443d6555f0_04114314', 'meta');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13600578305b00443d659473_02449824', 'css');
?>
       
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8260288365b00443d65d2f2_80582492', 'javascript');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9357252495b00443d661183_03300998', 'iframe');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'common.html');
}
/* {block 'meta'} */
class Block_1205290055b00443d6555f0_04114314 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_1205290055b00443d6555f0_04114314',
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
class Block_13600578305b00443d659473_02449824 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_13600578305b00443d659473_02449824',
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
class Block_8260288365b00443d65d2f2_80582492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_8260288365b00443d65d2f2_80582492',
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
class Block_9357252495b00443d661183_03300998 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iframe' => 
  array (
    0 => 'Block_9357252495b00443d661183_03300998',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="margin clearfix">
 <div class="cover_style" id="cover_style">
     <div class="search_style">
     <a href="<?php echo C('url.main');?>
?m=admin&c=category&a=addAction" class="btn btn-success">
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
          <th width="">序号</th>
          <th width="">ID</th>
          <th width="">唯一标识</th>
          <th width="">名称</th>
          <th width="">排序</th>             
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
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['slug'];?>
</td>
          <td style="text-align: left;"><?php echo str_repeat('- ',$_smarty_tpl->tpl_vars['data']->value['space']);
echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</td>          
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['sort'];?>
</td>
          <!-- <td class="td-status"><span class="label label-success radius">启用</span></td> -->
          <td class="td-manage">
           <a href="<?php echo C('url.main');?>
?m=admin&c=category&a=editAction&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
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
?m=admin&c=category&a=delAction&id="+id;
        
    });
  }
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'iframe'} */
}
