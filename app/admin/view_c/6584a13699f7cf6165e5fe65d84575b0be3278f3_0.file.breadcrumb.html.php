<?php
/* Smarty version 3.1.32, created on 2018-05-21 09:40:30
  from 'F:\mywamp\apache24\htdocs\C_travel\app\admin\view\Content\breadcrumb.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b02238e409d03_74321331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6584a13699f7cf6165e5fe65d84575b0be3278f3' => 
    array (
      0 => 'F:\\mywamp\\apache24\\htdocs\\C_travel\\app\\admin\\view\\Content\\breadcrumb.html',
      1 => 1526866273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b02238e409d03_74321331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12597435645b02238e402009_55703201', 'bread-2-title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20897674945b02238e405e82_61500490', 'bread-3-title');
}
/* {block 'bread-2-title'} */
class Block_12597435645b02238e402009_55703201 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-2-title' => 
  array (
    0 => 'Block_12597435645b02238e402009_55703201',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
旅游内容管理<?php
}
}
/* {/block 'bread-2-title'} */
/* {block 'bread-3-title'} */
class Block_20897674945b02238e405e82_61500490 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bread-3-title' => 
  array (
    0 => 'Block_20897674945b02238e405e82_61500490',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
旅游内容列表<?php
}
}
/* {/block 'bread-3-title'} */
}
