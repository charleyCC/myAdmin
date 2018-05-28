<?php
/* Smarty version 3.1.32, created on 2018-05-23 22:59:12
  from 'F:\mywamp\apache24\htdocs\Admin\app\admin\view\adminMag\breadcrumb.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0581c00965a8_12063119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c3cc08d26d35d533b78397541c2a2f3cf010b1c' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\Admin\\app\\admin\\view\\adminMag\\breadcrumb.html',
      1 => 1526825584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0581c00965a8_12063119 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12585066215b0581c008e8a5_83082248', 'bread-2-title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18395182625b0581c0092729_37631555', 'bread-3-title');
}
/* {block 'bread-2-title'} */
class Block_12585066215b0581c008e8a5_83082248 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-2-title' => 
  array (
    0 => 'Block_12585066215b0581c008e8a5_83082248',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
管理员管理<?php
}
}
/* {/block 'bread-2-title'} */
/* {block 'bread-3-title'} */
class Block_18395182625b0581c0092729_37631555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-3-title' => 
  array (
    0 => 'Block_18395182625b0581c0092729_37631555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
管理员列表<?php
}
}
/* {/block 'bread-3-title'} */
}
