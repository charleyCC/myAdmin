<?php
/* Smarty version 3.1.32, created on 2018-05-20 22:13:08
  from 'F:\mywamp\apache24\htdocs\C_travel\app\admin\view\Banner\breadcrumb.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b01827485b9c9_95379422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e2fed6b4ed2acf5fef2e0e806d6d96be6cdb05d' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\C_travel\\app\\admin\\view\\Banner\\breadcrumb.html',
      1 => 1526825582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b01827485b9c9_95379422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_820119675b018274853cc7_96873562', 'bread-2-title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14965580275b018274857b42_07137906', 'bread-3-title');
}
/* {block 'bread-2-title'} */
class Block_820119675b018274853cc7_96873562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-2-title' => 
  array (
    0 => 'Block_820119675b018274853cc7_96873562',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
图片管理<?php
}
}
/* {/block 'bread-2-title'} */
/* {block 'bread-3-title'} */
class Block_14965580275b018274857b42_07137906 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-3-title' => 
  array (
    0 => 'Block_14965580275b018274857b42_07137906',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
图片列表<?php
}
}
/* {/block 'bread-3-title'} */
}
