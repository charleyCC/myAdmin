<?php
/* Smarty version 3.1.32, created on 2018-05-20 23:08:41
  from 'F:\mywamp\apache24\htdocs\C_travel\app\admin\view\adminMag\breadcrumb.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b018f7983f048_63115471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bed39170747a48d23559c851320c184954b7bfa' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\C_travel\\app\\admin\\view\\adminMag\\breadcrumb.html',
      1 => 1526825584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b018f7983f048_63115471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20791410905b018f79837338_30383483', 'bread-2-title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21374477715b018f7983b1b2_23036059', 'bread-3-title');
}
/* {block 'bread-2-title'} */
class Block_20791410905b018f79837338_30383483 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-2-title' => 
  array (
    0 => 'Block_20791410905b018f79837338_30383483',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
管理员管理<?php
}
}
/* {/block 'bread-2-title'} */
/* {block 'bread-3-title'} */
class Block_21374477715b018f7983b1b2_23036059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-3-title' => 
  array (
    0 => 'Block_21374477715b018f7983b1b2_23036059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
管理员列表<?php
}
}
/* {/block 'bread-3-title'} */
}
