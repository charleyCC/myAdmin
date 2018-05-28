<?php
/* Smarty version 3.1.32, created on 2018-05-23 23:10:26
  from 'F:\mywamp\apache24\htdocs\Admin\app\admin\view\Category\breadcrumb.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b058462582639_70209868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53db8a7d41ccb4855bde80c24bcb32157b997bf3' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\Admin\\app\\admin\\view\\Category\\breadcrumb.html',
      1 => 1526832668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b058462582639_70209868 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6355011145b05846257a939_55921060', 'bread-2-title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18968873745b05846257e7b7_06575280', 'bread-3-title');
}
/* {block 'bread-2-title'} */
class Block_6355011145b05846257a939_55921060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-2-title' => 
  array (
    0 => 'Block_6355011145b05846257a939_55921060',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
分类管理<?php
}
}
/* {/block 'bread-2-title'} */
/* {block 'bread-3-title'} */
class Block_18968873745b05846257e7b7_06575280 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-3-title' => 
  array (
    0 => 'Block_18968873745b05846257e7b7_06575280',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
分类列表<?php
}
}
/* {/block 'bread-3-title'} */
}
