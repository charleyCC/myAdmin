<?php
/* Smarty version 3.1.32, created on 2018-05-21 00:12:40
  from 'F:\mywamp\apache24\htdocs\C_travel\app\admin\view\Category\breadcrumb.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b019e783859f6_99162960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6718ca1940414f40bb3647fe11197d2d55deace4' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\C_travel\\app\\admin\\view\\Category\\breadcrumb.html',
      1 => 1526832668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b019e783859f6_99162960 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3362424055b019e7837dce1_95827088', 'bread-2-title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2478354305b019e78381b75_94193481', 'bread-3-title');
}
/* {block 'bread-2-title'} */
class Block_3362424055b019e7837dce1_95827088 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-2-title' => 
  array (
    0 => 'Block_3362424055b019e7837dce1_95827088',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
分类管理<?php
}
}
/* {/block 'bread-2-title'} */
/* {block 'bread-3-title'} */
class Block_2478354305b019e78381b75_94193481 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-3-title' => 
  array (
    0 => 'Block_2478354305b019e78381b75_94193481',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
分类列表<?php
}
}
/* {/block 'bread-3-title'} */
}
