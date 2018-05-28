<?php
/* Smarty version 3.1.32, created on 2018-05-22 23:11:17
  from 'F:\mywamp\apache24\htdocs\C_travel\app\admin\view\List\breadcrumb.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b043315ca2527_69755976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '195747db01caa4fc68948a1c8989146e9dd145d4' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\C_travel\\app\\admin\\view\\List\\breadcrumb.html',
      1 => 1527001864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b043315ca2527_69755976 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1294241155b043315c9a820_24619754', 'bread-2-title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15419651805b043315c9e6a5_85643172', 'bread-3-title');
}
/* {block 'bread-2-title'} */
class Block_1294241155b043315c9a820_24619754 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-2-title' => 
  array (
    0 => 'Block_1294241155b043315c9a820_24619754',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
旅游内容管理<?php
}
}
/* {/block 'bread-2-title'} */
/* {block 'bread-3-title'} */
class Block_15419651805b043315c9e6a5_85643172 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-3-title' => 
  array (
    0 => 'Block_15419651805b043315c9e6a5_85643172',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
其他内容列表<?php
}
}
/* {/block 'bread-3-title'} */
}
