<?php
/* Smarty version 3.1.32, created on 2018-05-23 23:52:15
  from 'F:\mywamp\apache24\htdocs\Admin\app\admin\view\Content\breadcrumb.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b058e2fa74c61_96875762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dd876839978fe88b945e393c2f8062d7139858c' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\Admin\\app\\admin\\view\\Content\\breadcrumb.html',
      1 => 1526866273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b058e2fa74c61_96875762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1436999395b058e2fa6cf67_68605117', 'bread-2-title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18839494045b058e2fa70de7_48315020', 'bread-3-title');
}
/* {block 'bread-2-title'} */
class Block_1436999395b058e2fa6cf67_68605117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-2-title' => 
  array (
    0 => 'Block_1436999395b058e2fa6cf67_68605117',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
旅游内容管理<?php
}
}
/* {/block 'bread-2-title'} */
/* {block 'bread-3-title'} */
class Block_18839494045b058e2fa70de7_48315020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-3-title' => 
  array (
    0 => 'Block_18839494045b058e2fa70de7_48315020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
旅游内容列表<?php
}
}
/* {/block 'bread-3-title'} */
}
