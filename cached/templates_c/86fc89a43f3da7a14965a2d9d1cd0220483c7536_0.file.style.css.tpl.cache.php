<?php
/* Smarty version 3.1.29, created on 2017-11-23 09:15:25
  from "/var/www/cms/scenes/styles/warning/style.css.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a16677d7ec4f3_13598471',
  'file_dependency' => 
  array (
    '86fc89a43f3da7a14965a2d9d1cd0220483c7536' => 
    array (
      0 => '/var/www/cms/scenes/styles/warning/style.css.tpl',
      1 => 1511417673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a16677d7ec4f3_13598471 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20197232735a16677d7d10d6_88749015';
?>
/* MOTION */
.type_warning {
 margin-right: -2px;
 margin-bottom: 1px;
 color:black;
 border:none;
 /*border-radius:3px;  */
 text-align: center;
 background-image:url(<?php echo @constant('ROOTHTML');?>
img/elements/circle_red.png);
 padding:4px;
 width:68px;
 height:68px;
}
.type_warning span {
 display: block;
 width:68px;
 height:68px;
 vertical-align: middle;
}

<?php
$_from = $_smarty_tpl->tpl_vars['TYPE']->value['STYLES'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_STYLE_0_saved_item = isset($_smarty_tpl->tpl_vars['STYLE']) ? $_smarty_tpl->tpl_vars['STYLE'] : false;
$_smarty_tpl->tpl_vars['STYLE'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['STYLE']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['STYLE']->value) {
$_smarty_tpl->tpl_vars['STYLE']->_loop = true;
$__foreach_STYLE_0_saved_local_item = $_smarty_tpl->tpl_vars['STYLE'];
if ($_smarty_tpl->tpl_vars['STYLE']->value['HAS_DEFAULT'] != '') {?>
    .type_warning.style_<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['TITLE'];?>
:before {
     content: url(<?php echo @constant('ROOTHTML');?>
cms/scenes/styles/warning/<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['HAS_DEFAULT'];?>
);
    }
<?php }
$_smarty_tpl->tpl_vars['STYLE'] = $__foreach_STYLE_0_saved_local_item;
}
if ($__foreach_STYLE_0_saved_item) {
$_smarty_tpl->tpl_vars['STYLE'] = $__foreach_STYLE_0_saved_item;
}
}
}
