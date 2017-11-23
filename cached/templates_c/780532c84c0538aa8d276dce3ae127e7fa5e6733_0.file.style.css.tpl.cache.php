<?php
/* Smarty version 3.1.29, created on 2017-11-23 09:15:25
  from "/var/www/cms/scenes/styles/switch/style.css.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a16677d7c9773_83067612',
  'file_dependency' => 
  array (
    '780532c84c0538aa8d276dce3ae127e7fa5e6733' => 
    array (
      0 => '/var/www/cms/scenes/styles/switch/style.css.tpl',
      1 => 1511417673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a16677d7c9773_83067612 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '14856643905a16677d74a784_47005112';
?>
/* SWITCH */
.type_switch {
 margin-right: -2px;
 margin-bottom: 1px;
 color:black;
 border:1px solid rgba(255,255,255,0.4);
 text-align: center;
 background-color:rgba(255,255,255,0.7);
 padding:2px;
 width:67px;
 height:67px;
 background-image: url(<?php echo @constant('ROOTHTML');?>
img/elements/i_light_off.png);
 background-repeat: no-repeat;
 background-position: center 4px;
}
.type_switch span {
 font-size:12px;
 display: inline-block;
/* width:64px;*/
 height:34px;
 vertical-align: middle;
 padding-top:35px;
}

/* SWITCH ON */
.type_switch.state_on {
 background-color:rgba(249,229,91,0.9);
 border:1px solid rgba(255,255,0,0.5);
 background-image: url(<?php echo @constant('ROOTHTML');?>
img/elements/i_light_on.png);
 background-repeat: no-repeat;
 background-position: center 4px;
}

/* SWITCH MID */
.type_switch.state_mid {
 background-color:rgba(249,229,91,0.9);
 border:1px solid rgba(255,255,0,0.5);
 background-image: url(<?php echo @constant('ROOTHTML');?>
img/elements/i_light_off.png);
 background-repeat: no-repeat;
 background-position: center 4px;
}

/* SWITCH NA */
.type_switch.state_na {
 background-color:rgba(249,229,91,0.9);
 border:1px solid rgba(255,255,0,0.5);
 background-image: url(<?php echo @constant('ROOTHTML');?>
img/elements/i_light_off.png);
 background-repeat: no-repeat;
 background-position: center 4px;
}

.light_circle {
 position: relative;
 width: 10px;
 height: 10px;
 border: 1px solid rgba(0,0,0,0.2);
 border-radius: 6px;
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
.type_switch.style_<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['TITLE'];?>
 {
     background-image: url(<?php echo @constant('ROOTHTML');?>
cms/scenes/styles/switch/<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['HAS_DEFAULT'];?>
);
     background-repeat: no-repeat;
     background-position: center 4px;
}
<?php }
if ($_smarty_tpl->tpl_vars['STYLE']->value['HAS_ON'] != '') {?>
.type_switch.state_on.style_<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['TITLE'];?>
 {
     background-image: url(<?php echo @constant('ROOTHTML');?>
cms/scenes/styles/switch/<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['HAS_ON'];?>
);
     background-repeat: no-repeat;
     background-position: center 4px;
}
<?php }
if ($_smarty_tpl->tpl_vars['STYLE']->value['HAS_OFF'] != '') {?>
.type_switch.state_off.style_<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['TITLE'];?>
 {
     background-image: url(<?php echo @constant('ROOTHTML');?>
cms/scenes/styles/switch/<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['HAS_OFF'];?>
);
     background-repeat: no-repeat;
     background-position: center 4px;
}
<?php }
if ($_smarty_tpl->tpl_vars['STYLE']->value['HAS_MID'] != '') {?>
.type_switch.state_mid.style_<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['TITLE'];?>
 {
     background-image: url(<?php echo @constant('ROOTHTML');?>
cms/scenes/styles/switch/<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['HAS_MID'];?>
);
     background-repeat: no-repeat;
     background-position: center 4px;
}
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['STYLE']->value['HAS_NA'] != '') {?>
.type_switch.state_na.style_<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['TITLE'];?>
 {
     background-image: url(<?php echo @constant('ROOTHTML');?>
cms/scenes/styles/switch/<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['HAS_NA'];?>
);
     background-repeat: no-repeat;
     background-position: center 4px;
}
<?php }?>


<?php
$_smarty_tpl->tpl_vars['STYLE'] = $__foreach_STYLE_0_saved_local_item;
}
if ($__foreach_STYLE_0_saved_item) {
$_smarty_tpl->tpl_vars['STYLE'] = $__foreach_STYLE_0_saved_item;
}
}
}
