<?php
/* Smarty version 3.1.32, created on 2018-05-20 10:51:36
  from 'F:\mywamp\apache24\htdocs\C_travel\app\admin\view\adminMag\editform.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b00e2b8317698_42297027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '959ed786493b5fc0b9a898751eb0870e729c779a' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\C_travel\\app\\admin\\view\\adminMag\\editform.html',
      1 => 1526784390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b00e2b8317698_42297027 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="edit_administrator_style" class="add_menber" style="display:none">
    <form action="<?php echo C('url.main');?>
?m=admin&c=adminMag&a=editAction" method="post" id="form-admin-add">
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
      <input type="password" placeholder="密码" name="pwd" autocomplete="off" value="" class="input-text" datatype="*6-20" nullmsg="密码不能为空">
      </div>
      <div class="col-4"> <span class="Validform_checktip"></span></div>
    </div>
    <div class="form-group">
      <label class="form-label "><span class="c-red">*</span>确认密码：</label>
      <div class="formControls ">
    <input type="password" placeholder="确认新密码" autocomplete="off" class="input-text Validform_error" errormsg="您两次输入的新密码不一致！" datatype="*" nullmsg="请再输入一次新密码！" recheck="pwd" id="newpassword2" name="newpassword2">
      </div>
      <div class="col-4"> <span class="Validform_checktip"></span></div>
    </div>

  <div class="form-group">
      <label class="form-label">昵称：</label>
      <div class="formControls">
        <input type="text" class="input-text" value="" name="nickname" datatype="*2-16" nullmsg="昵称不能为空">
      </div>
    </div>

    <!-- 头像 -->


    <div> 
        <input class="btn btn-primary radius" type="submit" id="Add_Administrator" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
    </div>
  </form>
</div><?php }
}
