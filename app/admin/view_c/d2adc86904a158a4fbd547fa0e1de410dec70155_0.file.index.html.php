<?php
/* Smarty version 3.1.32, created on 2018-05-23 23:55:54
  from 'F:\mywamp\apache24\htdocs\Admin\app\admin\view\Banner\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b058f0ac55169_86498908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2adc86904a158a4fbd547fa0e1de410dec70155' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\Admin\\app\\admin\\view\\Banner\\index.html',
      1 => 1526832426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./breadcrumb.html' => 1,
  ),
),false)) {
function content_5b058f0ac55169_86498908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

      
<?php $_smarty_tpl->_subTemplateRender('file:./breadcrumb.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4467426785b058f0ac26356_17891702', 'css');
?>
       
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17571596535b058f0ac2a1d5_98541528', 'javascript');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8547502085b058f0ac2e059_17651670', 'iframe');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'common.html');
}
/* {block 'css'} */
class Block_4467426785b058f0ac26356_17891702 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_4467426785b058f0ac26356_17891702',
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
class Block_17571596535b058f0ac2a1d5_98541528 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_17571596535b058f0ac2a1d5_98541528',
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
class Block_8547502085b058f0ac2e059_17651670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iframe' => 
  array (
    0 => 'Block_8547502085b058f0ac2e059_17651670',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\mywamp\\apache24\\htdocs\\Admin\\plugins\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div class="margin clearfix">
 <div class="cover_style" id="cover_style">

    <div class="border clearfix">
       <span class="l_f">
        <a href="javascript:ovid()" id="administrator_add" class="btn btn-warning">添加图片</a>
        
       </span>
       <span class="r_f">共：<b><?php echo count($_smarty_tpl->tpl_vars['datas']->value);?>
</b>条记录</span>
     </div>
     <!--账户管理-->
      <div class="">
       <table class="table table-striped table-bordered table-hover" id="sample-table">
      <thead>
     <tr>
          <th width="">ID</th>
          <th width="">排序</th>
          <th width="">标题</th>
          <th width="">图片</th>
          <th width="">添加时间</th>             
          <th width="">状态</th>             
          <th width="">操作</th>
          </tr>
      </thead>
  <tbody>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
    <tr>
          
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['sort'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</td>          
          <td>
          <a data-fancybox="gallery" href="<?php echo C('url.main');?>
/public/admin/upload/<?php echo $_smarty_tpl->tpl_vars['data']->value['img'];?>
">
            <img src="<?php echo C('url.main');?>
/public/admin/upload/<?php echo $_smarty_tpl->tpl_vars['data']->value['img'];?>
" width="45px">
          </a>
            </td>
          <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['add_time'],'%Y-%m-%d %H:%M');?>
</td>
         
          <td>
            <?php if ($_smarty_tpl->tpl_vars['data']->value['status'] == 1) {?>
            <span class="label label-success radius">上线</span>
            <?php } else { ?>
            <span class="label label-default radius">下线</span>
            <?php }?>
          </td> 
          <td class="td-manage">
            <?php if ($_smarty_tpl->tpl_vars['data']->value['status'] == 1) {?>
            <a onclick="changeStatus(<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['data']->value['status'];?>
)"  href="javascript:;" title="下线"  class="btn btn-xs btn-warning">下线</a>
            <?php } else { ?>
            <a onclick="changeStatus(<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['data']->value['status'];?>
)"  href="javascript:;" title="上线"  class="btn btn-xs btn-success">上线</a>
            <?php }?>
             
           <a href="<?php echo C('url.main');?>
?m=admin&c=banner&a=editAction&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
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
     
    </div>
    
     
</div>
<!-- form -->
<div id="add_administrator_style" class="add_menber" style="display:none">
    <form action="<?php echo C('url.main');?>
?m=admin&c=banner&a=addAction" method="post" id="form-admin-add" enctype="multipart/form-data">
    <div class="form-group">
      <label class="form-label"><span class="c-red">*</span>排序：</label>
      <div class="formControls">
        <input type="text" class="input-text"  name="sort">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label"><span class="c-red">*</span>状态：</label>
      <div class="formControls">
      <select name="status">
        <option value="1">上线</option>
        <option value="0">下线</option>
      </select>
      </div>
    </div>
    <div class="form-group">
      <label class="form-label "><span class="c-red">*</span>标题：</label>
      <div class="formControls ">
    <input type="text" class="input-text" name='title'>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label">图片：</label>
      <div class="formControls">
        <input type="file" class="input-text"  name="img">
      </div>
    </div>

    <div> 
        <input class="btn btn-primary radius" type="submit" id="Add_Administrator" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
    </div>
  </form>
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
?m=admin&c=banner&a=delAction&id="+id;      
    });
  }
  function changeStatus(id,status){
    if (status==1) {
      var str = '是否确定下线此条记录？';
      status = 0;
    }else{
      var str = '是否确定上线此条记录？';
      status = 1;
    }
    layer.confirm(str, {
     btn: ['是','否'] ,//按钮
     icon:2,
    }, 
    function(){
      location.href="<?php echo C('url.main');?>
?m=admin&c=banner&a=changeStatus&id="+id+"&status="+status;     
    });   
  }
  /*添加图片*/
$('#administrator_add').on('click', function(){
  layer.open({
    type: 1,
  title:'添加图片',
  area: ['700px','420px'],
  shadeClose: false,
  content: $('#add_administrator_style'),
  
  });
});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'iframe'} */
}
