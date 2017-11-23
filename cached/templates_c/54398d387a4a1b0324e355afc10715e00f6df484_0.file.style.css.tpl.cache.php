<?php
/* Smarty version 3.1.29, created on 2017-11-23 09:15:25
  from "/var/www/cms/scenes/styles/mode/style.css.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a16677d921934_56375825',
  'file_dependency' => 
  array (
    '54398d387a4a1b0324e355afc10715e00f6df484' => 
    array (
      0 => '/var/www/cms/scenes/styles/mode/style.css.tpl',
      1 => 1511417673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a16677d921934_56375825 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10627591375a16677d8afc78_06024398';
?>
/* MODE */
.type_mode {
        margin-right: -2px;
        margin-bottom: 1px;
        color:black;
        border:1px solid rgba(255,255,255,0.5);
        text-align: center;
        background-color:rgba(255,255,255,0.7);
        padding:2px;
        width:67px;
        height:67px;
}
.type_mode span {
 font-size:12px;
 display: inline-block;
 height:34px;
 vertical-align: middle;
 padding-top:35px;

}

/* MODE ON */
.type_mode.state_on {
 background-color:rgba(249,229,91,0.9);
 border:1px solid rgba(255,255,0,0.5);
}
.type_mode.state_sleep
{
 background-color:rgba(249,229,91,0.5);
 border:1px solid rgba(255,255,0,0.5);;
}

.type_mode.state_active
{
 color:white;
 border:1px solid rgba(0,0,0,0.2);
 background-color:rgba(0,0,0,0.5);
}

.type_mode.state_mid
{
 color:white;
 border:1px solid rgba(0,0,0,0.2);
 background-color:rgba(0,0,0,0.5);
}

.type_mode.state_na
{
 color:white;
 border:1px solid rgba(0,0,0,0.2);
 background-color:rgba(0,0,0,0.5);
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
.type_mode.style_<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['TITLE'];?>
 {
  background-image: url(<?php echo @constant('ROOTHTML');?>
cms/scenes/styles/mode/<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['HAS_DEFAULT'];?>
);
  background-repeat: no-repeat;
  background-position: center 4px;
}
<?php }
if ($_smarty_tpl->tpl_vars['STYLE']->value['HAS_ON'] != '') {?>
.type_mode.state_on.style_<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['TITLE'];?>
 {
  background-image: url(<?php echo @constant('ROOTHTML');?>
cms/scenes/styles/mode/<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['HAS_ON'];?>
);
  background-repeat: no-repeat;
  background-position: center 4px;
}
<?php }
if ($_smarty_tpl->tpl_vars['STYLE']->value['HAS_OFF'] != '') {?>
.type_mode.state_off.style_<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['TITLE'];?>
 {
  background-image: url(<?php echo @constant('ROOTHTML');?>
cms/scenes/styles/mode/<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['HAS_OFF'];?>
);
  background-repeat: no-repeat;
  background-position: center 4px;
}
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['STYLE']->value['HAS_MID'] != '') {?>
.type_mode.state_mid.style_<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['TITLE'];?>
 {
  background-image: url(<?php echo @constant('ROOTHTML');?>
cms/scenes/styles/mode/<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['HAS_MID'];?>
);
  background-repeat: no-repeat;
  background-position: center 4px;
}
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['STYLE']->value['HAS_NA'] != '') {?>
.type_mode.state_na.style_<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['TITLE'];?>
 {
  background-image: url(<?php echo @constant('ROOTHTML');?>
cms/scenes/styles/mode/<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['HAS_NA'];?>
);
  background-repeat: no-repeat;
  background-position: center 4px;
}
<?php }?>

/*<?php if ($_smarty_tpl->tpl_vars['STYLE']->value['HAS_SLEEP'] != '') {?>
.type_mode.state_sleep.style_<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['TITLE'];?>
 {
  background-image: url(<?php echo @constant('ROOTHTML');?>
cms/scenes/styles/mode/<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['HAS_SLEEP'];?>
);
  background-repeat: no-repeat;
  background-position: center 4px;
}
<?php }
if ($_smarty_tpl->tpl_vars['STYLE']->value['HAS_ACTIVE'] != '') {?>
.type_mode.state_active.style_<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['TITLE'];?>
 {
  background-image: url(<?php echo @constant('ROOTHTML');?>
cms/scenes/styles/mode/<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['HAS_ACTIVE'];?>
);
  background-repeat: no-repeat;
  background-position: center 4px;
}
<?php }?>*/
<?php
$_smarty_tpl->tpl_vars['STYLE'] = $__foreach_STYLE_0_saved_local_item;
}
if ($__foreach_STYLE_0_saved_item) {
$_smarty_tpl->tpl_vars['STYLE'] = $__foreach_STYLE_0_saved_item;
}
}
}
