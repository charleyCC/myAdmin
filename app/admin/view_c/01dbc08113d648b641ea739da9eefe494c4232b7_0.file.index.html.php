<?php
/* Smarty version 3.1.32, created on 2018-05-23 23:52:15
  from 'F:\mywamp\apache24\htdocs\Admin\app\admin\view\Content\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b058e2fa519d4_38337795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01dbc08113d648b641ea739da9eefe494c4232b7' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\Admin\\app\\admin\\view\\Content\\index.html',
      1 => 1527006493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./breadcrumb.html' => 1,
  ),
),false)) {
function content_5b058e2fa519d4_38337795 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

      
<?php $_smarty_tpl->_subTemplateRender('file:./breadcrumb.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11569674275b058e2fa1aec9_75341012', 'css');
?>
       
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21200786035b058e2fa22bc9_33215356', 'javascript');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13098396765b058e2fa26a52_21513462', 'iframe');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'common.html');
}
/* {block 'css'} */
class Block_11569674275b058e2fa1aec9_75341012 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_11569674275b058e2fa1aec9_75341012',
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
class Block_21200786035b058e2fa22bc9_33215356 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_21200786035b058e2fa22bc9_33215356',
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
class Block_13098396765b058e2fa26a52_21513462 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iframe' => 
  array (
    0 => 'Block_13098396765b058e2fa26a52_21513462',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\mywamp\\apache24\\htdocs\\Admin\\plugins\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div class="margin clearfix">
 <div class="cover_style" id="cover_style">

    <div class="border clearfix">
       <span class="l_f">
        <a href="<?php echo C('url.main');?>
?m=admin&c=content&a=addAction" id="content_add" class="btn btn-warning">添加旅游内容</a>
        
       </span>
       <span class="r_f">共：<b><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</b>条记录</span>
    </div>

    <form action="<?php echo C('url.main');?>
?m=admin&c=content&a=indexAction" method="post">
    <div class="border clearfix" style="height: 170px;">
       <div>
       <style type="text/css">
         #form-field-select-1{
          width: 50%;
         }
       </style>

           <label class="">标题</label>
           <input value="<?php echo $_smarty_tpl->tpl_vars['s_title']->value;?>
" name="s_title" type="text" class="text_add" style=" width:450px">
        
         <br>
           <label class="">分类</label>
          <?php echo generateSelect($_smarty_tpl->tpl_vars['tree']->value,$_smarty_tpl->tpl_vars['s_cat_id']->value,'s_cat_id');?>

         
        
         
          <input style='margin-top: 12px' class="btn btn-primary radius" type="submit" value="查询">
          <a style='margin-top: 12px' href="<?php echo C('url.main');?>
?m=admin&c=content&a=indexAction"  class="btn btn-default">重置</a>
       </div>
    </div>
    </form>

   
     
    <div class="">
       <table class="table table-striped table-bordered table-hover" id="sample-table">
      <thead>
     <tr>
          <th width="">序号</th>
          <th width="">ID</th>
          <th width="">排序</th>
          <th width="">分类名称</th>
          <th width="">标题</th>
          <th width="">封面</th>
          <th width="">星级</th>
          <th width="">预定优惠价</th>
          <th width="">添加时间</th>             
          <th width="">状态</th>             
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
          
          <td><?php echo $_smarty_tpl->tpl_vars['firstRowNum']->value+$_smarty_tpl->tpl_vars['k']->value;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['sort'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['c_name'];?>
</td>          
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</td>          
          <td>
          <a data-fancybox="gallery" href="<?php echo C('url.main');?>
/public/admin/upload/<?php echo $_smarty_tpl->tpl_vars['data']->value['cover'];?>
">
            <img src="<?php echo C('url.main');?>
/public/admin/upload/<?php echo $_smarty_tpl->tpl_vars['data']->value['cover'];?>
" width="45px">
          </a>
          </td>
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['grade'];?>
</td> 
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['price'];?>
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
?m=admin&c=content&a=editAction&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
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
      <style type="text/css">
       ul li a.current{
              color: green !important;
              font-weight: bolder;
        }
      </style>
      <div class="col-sm-6" style="    padding-left: 0;">
          <div class="dataTables_paginate paging_bootstrap" id="sample-table_paginate" style="    text-align: left;
">
            <ul class="pagination" style="margin-left: 0">
              <?php echo $_smarty_tpl->tpl_vars['pageHtml']->value;?>

            </ul>
          </div>
      </div>
      <div class="col-sm-6"></div>
      
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

      $.ajax({
        type: "POST",
        url: "<?php echo C('url.main');?>
?m=admin&c=content&a=delAction",
        data: "id="+id,
        success: function(msg){
          layer.msg(msg);
          setTimeout(function(){
            window.location = "<?php echo C('url.main');?>
?m=admin&c=content&a=indexAction";
          },1500);
          
        },
        error:function(msg){
          layer.msg(msg);
        },
      });
           
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
       $.ajax({
        type: "POST",
        url: "<?php echo C('url.main');?>
?m=admin&c=content&a=changeStatus",
        data: "id="+id+"&status="+status,
        success: function(msg){
          layer.msg(msg);
          setTimeout(function(){
            window.location = "<?php echo C('url.main');?>
?m=admin&c=content&a=indexAction";
          },1500)
          
        },
        error:function(msg){
          layer.msg(msg);
        },
      });
        
    });   
  }
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'iframe'} */
}
