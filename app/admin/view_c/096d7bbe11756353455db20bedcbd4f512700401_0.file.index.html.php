<?php
/* Smarty version 3.1.32, created on 2018-05-21 01:04:44
  from 'F:\mywamp\apache24\htdocs\C_travel\app\admin\view\adminMag\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b01aaac22b6f0_33748562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '096d7bbe11756353455db20bedcbd4f512700401' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\C_travel\\app\\admin\\view\\adminMag\\index.html',
      1 => 1526835866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./breadcrumb.html' => 1,
  ),
),false)) {
function content_5b01aaac22b6f0_33748562 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12793361375b01aaac200769_86299338', 'meta');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21208375055b01aaac2045e9_36036498', 'css');
?>
       
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18325862055b01aaac208466_65881774', 'javascript');
?>


<?php $_smarty_tpl->_subTemplateRender('file:./breadcrumb.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15589685675b01aaac210163_46094029', 'iframe');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'common.html');
}
/* {block 'meta'} */
class Block_12793361375b01aaac200769_86299338 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_12793361375b01aaac200769_86299338',
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
class Block_21208375055b01aaac2045e9_36036498 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_21208375055b01aaac2045e9_36036498',
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
class Block_18325862055b01aaac208466_65881774 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_18325862055b01aaac208466_65881774',
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
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo C('url.main');?>
/public/admin/Widget/Validform/5.3.2/Validform.min.js"><?php echo '</script'; ?>
>	
<?php
}
}
/* {/block 'javascript'} */
/* {block 'iframe'} */
class Block_15589685675b01aaac210163_46094029 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iframe' => 
  array (
    0 => 'Block_15589685675b01aaac210163_46094029',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\mywamp\\apache24\\htdocs\\C_travel\\plugins\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div class="margin clearfix">
 <div class="cover_style" id="cover_style">

    <div class="border clearfix">
       <span class="l_f">
        <a href="javascript:ovid()" id="administrator_add" class="btn btn-warning">添加管理员</a>
        
       </span>
       <span class="r_f">共：<b><?php echo count($_smarty_tpl->tpl_vars['datas']->value);?>
</b>人</span>
     </div>
     <!--账户管理-->
      <div class="">
       <table class="table table-striped table-bordered table-hover" id="sample-table">
      <thead>
		 <tr>
          <th width="">ID</th>
          <th width="">账号</th>
          <th width="">昵称</th>
          <th width="">注册时间</th>
          <th width="">头像</th>             
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
          
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['acc'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['nickname'];?>
</td>          
          <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['regtime'],'%Y-%m-%d %H:%M');?>
</td>
          <td><img src="<?php echo C('url.main');?>
/public/admin/upload/<?php echo $_smarty_tpl->tpl_vars['data']->value['img'];?>
" width="45px"></td>
          <td class="td-manage">
           <a href="<?php echo C('url.main');?>
?m=admin&c=adminMag&a=editAction&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
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
<!-- 管理员form -->
<div id="add_administrator_style" class="add_menber" style="display:none">
    <form action="<?php echo C('url.main');?>
?m=admin&c=adminMag&a=addAction" method="post" id="form-admin-add" enctype="multipart/form-data">
    <div class="form-group">
      <label class="form-label"><span class="c-red">*</span>账号：</label>
      <div class="formControls">
        <input type="text" class="input-text" value="" placeholder="" id="acc" name="acc" datatype="*2-16" nullmsg="账号不能为空">
      </div>
      <div class="col-4"> <span class="Validform_checktip"></span></div>
    </div>

    <div class="form-group">
      <label class="form-label"><span class="c-red">*</span>密码：</label>
      <div class="formControls">
      <input type="password"  name="pwd" autocomplete="off" value="" class="input-text" datatype="*6-20" nullmsg="密码不能为空">
      </div>
      <div class="col-4"> <span class="Validform_checktip"></span></div>
    </div>
    <div class="form-group">
      <label class="form-label "><span class="c-red">*</span>确认密码：</label>
      <div class="formControls ">
    <input type="password"  autocomplete="off" class="input-text Validform_error" errormsg="您两次输入的新密码不一致！" datatype="*" nullmsg="请再输入一次新密码！" recheck="pwd" id="newpassword2" name="newpassword2">
      </div>
      <div class="col-4"> <span class="Validform_checktip"></span></div>
    </div>

  <div class="form-group">
      <label class="form-label">昵称：</label>
      <div class="formControls">
        <input type="text" class="input-text" value="" name="nickname">
      </div>
  </div>

  
    <div class="form-group">
      <label class="form-label"><span class="c-red">*</span>头像：</label>
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
?m=admin&c=adminMag&a=delAction&id="+id;
        
    });
  }
  /*添加管理员*/
$('#administrator_add').on('click', function(){
  layer.open({
    type: 1,
  title:'添加管理员',
  area: ['700px','420px'],
  shadeClose: false,
  content: $('#add_administrator_style'),
  
  });
});
  

//表单验证提交
$("#form-admin-add").Validform({
    
     tiptype:2,
  
    callback:function(data){
    //form[0].submit();
    if(data.status==1){ 
        layer.msg(data.info, {icon: data.status,time: 1000}, function(){ 
            location.reload();//刷新页面 
        });   
    } 
    else{ 
        layer.msg(data.info, {icon: data.status,time: 3000}); 
    }       
    var index =parent.$("#iframe").attr("src");
    parent.layer.close(index);
      
    }
    
    
  }); 

<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'iframe'} */
}
