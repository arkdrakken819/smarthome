<?php
/* Smarty version 3.1.29, created on 2017-11-23 09:15:25
  from "/var/www/cms/scenes/styles/informer/style.css.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a16677d82d144_22384342',
  'file_dependency' => 
  array (
    '9e51fcefb5f021fc5859bc8018185fd7fe5dc2ef' => 
    array (
      0 => '/var/www/cms/scenes/styles/informer/style.css.tpl',
      1 => 1511417673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a16677d82d144_22384342 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16660682155a16677d7f21a7_68783337';
?>

/* INFORMER */
.type_informer {
 margin-right: -2px;
 margin-bottom: 1px;
 padding:0px;
 color:white;
 border:1px solid rgba(0,0,0,0.2);
 font-size:14px;
 background-color:rgba(0,0,0,0.5);
 align:left;
 width:71px;
 height:34px;
 background-image: url(<?php echo @constant('ROOTHTML');?>
img/elements/i_temp.png);
 background-repeat: no-repeat;
 background-position: -6;
}

.type_informer span {
 display:inline-block;
 width:40px;
 height:28px;
 
 position:relative;
 padding-left:21px;
 padding-top:9px;
}




.type_informer.state_low span {
color:#92e7ff; 
}
.type_informer.state_high span {
color:#f1b001; 
}
.type_informer.state_high.style_humidity span {
color:#92e7ff; 
}
.type_informer.state_low.style_humidity span {
color:#f1b001; 
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
 .type_informer.style_<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['TITLE'];?>
 {
  background-image: url(<?php echo @constant('ROOTHTML');?>
cms/scenes/styles/informer/<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['HAS_DEFAULT'];?>
);
  background-repeat: no-repeat;
  background-position: -6;
 }
<?php }
if ($_smarty_tpl->tpl_vars['STYLE']->value['HAS_HIGH'] != '') {?>
 .type_informer.state_high.style_<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['TITLE'];?>
 {
  background-image: url(<?php echo @constant('ROOTHTML');?>
cms/scenes/styles/informer/<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['HAS_HIGH'];?>
);
  background-repeat: no-repeat;
  background-position: -6;
 }
<?php }
if ($_smarty_tpl->tpl_vars['STYLE']->value['HAS_LOW'] != '') {?>
 .type_informer.state_low.style_<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['TITLE'];?>
 {
  background-image: url(<?php echo @constant('ROOTHTML');?>
cms/scenes/styles/informer/<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['HAS_LOW'];?>
);
  background-repeat: no-repeat;
  background-position: -6;
 }
<?php }
$_smarty_tpl->tpl_vars['STYLE'] = $__foreach_STYLE_0_saved_local_item;
}
if ($__foreach_STYLE_0_saved_item) {
$_smarty_tpl->tpl_vars['STYLE'] = $__foreach_STYLE_0_saved_item;
}
}
}
