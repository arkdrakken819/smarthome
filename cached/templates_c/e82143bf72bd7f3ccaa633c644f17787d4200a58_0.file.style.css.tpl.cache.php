<?php
/* Smarty version 3.1.29, created on 2017-11-23 09:15:25
  from "/var/www/cms/scenes/styles/button/style.css.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a16677d8a9f40_18136018',
  'file_dependency' => 
  array (
    'e82143bf72bd7f3ccaa633c644f17787d4200a58' => 
    array (
      0 => '/var/www/cms/scenes/styles/button/style.css.tpl',
      1 => 1511417673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a16677d8a9f40_18136018 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20597423325a16677d891e23_74846157';
?>
/* BUTTON */
.type_button {
        margin-right: -2px;
        margin-bottom: 1px;
        color:black;
        border:1px solid rgba(255,255,255,0.4);
        text-align: center;
        background-color:rgba(255,255,255,0.7);
        padding:2px;
        width:67px;
        height:67px;
}
.type_button span {
 font-size:12px;
 display: inline-block;
 width:64px;
 height:34px;
 vertical-align: middle;
 padding-top:35px;
}

.type_button.clicked {
 background-color:rgba(249,229,91,0.9);
 border:1px solid #FF0;
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
?>
   <?php if ($_smarty_tpl->tpl_vars['STYLE']->value['HAS_DEFAULT'] != '') {?>
    .type_button.style_<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['TITLE'];?>
 {
     background-image: url(<?php echo @constant('ROOTHTML');?>
cms/scenes/styles/button/<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['HAS_DEFAULT'];?>
);
     background-repeat: no-repeat;
     background-position: center 4px;
    }
   <?php }
$_smarty_tpl->tpl_vars['STYLE'] = $__foreach_STYLE_0_saved_local_item;
}
if ($__foreach_STYLE_0_saved_item) {
$_smarty_tpl->tpl_vars['STYLE'] = $__foreach_STYLE_0_saved_item;
}
}
}
