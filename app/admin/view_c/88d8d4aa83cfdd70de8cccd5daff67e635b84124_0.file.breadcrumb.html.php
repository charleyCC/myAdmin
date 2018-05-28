<?php
/* Smarty version 3.1.32, created on 2018-05-23 23:55:54
  from 'F:\mywamp\apache24\htdocs\Admin\app\admin\view\Banner\breadcrumb.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b058f0ac783e7_73405290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88d8d4aa83cfdd70de8cccd5daff67e635b84124' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\Admin\\app\\admin\\view\\Banner\\breadcrumb.html',
      1 => 1526825582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b058f0ac783e7_73405290 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18284132975b058f0ac706e9_85224365', 'bread-2-title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4871085175b058f0ac74561_32283016', 'bread-3-title');
}
/* {block 'bread-2-title'} */
class Block_18284132975b058f0ac706e9_85224365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-2-title' => 
  array (
    0 => 'Block_18284132975b058f0ac706e9_85224365',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
图片管理<?php
}
}
/* {/block 'bread-2-title'} */
/* {block 'bread-3-title'} */
class Block_4871085175b058f0ac74561_32283016 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-3-title' => 
  array (
    0 => 'Block_4871085175b058f0ac74561_32283016',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
图片列表<?php
}
}
/* {/block 'bread-3-title'} */
}
