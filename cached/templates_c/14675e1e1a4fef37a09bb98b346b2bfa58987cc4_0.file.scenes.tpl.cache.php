<?php
/* Smarty version 3.1.29, created on 2017-11-23 10:13:27
  from "/var/www/templates/scenes/scenes.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a1675177a4559_77799114',
  'file_dependency' => 
  array (
    '14675e1e1a4fef37a09bb98b346b2bfa58987cc4' => 
    array (
      0 => '/var/www/templates/scenes/scenes.tpl',
      1 => 1511419183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../cms/scenes/styles/".((string)$_smarty_tpl->tpl_vars[\'TYPE\']->value[\'TITLE\'])."/style.css.tpl' => 1,
    'file:./slider.css' => 1,
  ),
  'tpl_function' => 
  array (
    'elements' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => '/var/www/cached/templates_c/14675e1e1a4fef37a09bb98b346b2bfa58987cc4_0.file.scenes.tpl.cache.php',
      'uid' => '14675e1e1a4fef37a09bb98b346b2bfa58987cc4',
      'call_name' => 'smarty_template_function_elements_4171211375a167516d82df6_21198267',
    ),
  ),
),false)) {
function content_5a1675177a4559_77799114 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4171211375a167516d82df6_21198267';
?>
<style>

@keyframes lefttoright  {
  0% { transform: translateX(-500px); }
  45% { transform: translateX(40px); }
  65% { transform: translateX(-10px); }
  100% { transform: translateX(0px); }
}

@keyframes righttoleft {
  0% { transform: translateX(500px); }
  45% { transform: translateX(-40px); }
  65% { transform: translateX(10px); }
  100% { transform: translateX(0px); }
}

@keyframes bottomtotop {
  0% { transform: translateY(500px); }
  45% { transform: translateY(-40px); }
  65% { transform: translateY(10px); }
 100% { transform: translateY(0px); }
}
@keyframes toptobottom {
  0% { transform: translateY(-500px); }
  45% { transform: translateY(40px); }
  65% { transform: translateY(-10px); }
 100% { transform: translateY(0px); }
}
@keyframes blink {
  0%   { opacity: 0; }
  100% { opacity: 1; }
}
@keyframes scale {
  0%   { transform: scale(0.5); }
  25%  { transform: scale(1.1); }
  45%  { transform: scale(0.9); }
  100% { transform: scale(1); }
}


<?php
$_from = $_smarty_tpl->tpl_vars['RESULT']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_SCENE_0_saved_item = isset($_smarty_tpl->tpl_vars['SCENE']) ? $_smarty_tpl->tpl_vars['SCENE'] : false;
$_smarty_tpl->tpl_vars['SCENE'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['SCENE']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['SCENE']->value) {
$_smarty_tpl->tpl_vars['SCENE']->_loop = true;
$__foreach_SCENE_0_saved_local_item = $_smarty_tpl->tpl_vars['SCENE'];
$_from = $_smarty_tpl->tpl_vars['SCENE']->value['ALL_ELEMENTS'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ELEMENT_1_saved_item = isset($_smarty_tpl->tpl_vars['ELEMENT']) ? $_smarty_tpl->tpl_vars['ELEMENT'] : false;
$_smarty_tpl->tpl_vars['ELEMENT'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['ELEMENT']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ELEMENT']->value) {
$_smarty_tpl->tpl_vars['ELEMENT']->_loop = true;
$__foreach_ELEMENT_1_saved_local_item = $_smarty_tpl->tpl_vars['ELEMENT'];
if ($_smarty_tpl->tpl_vars['ELEMENT']->value['APPEAR_ANIMATION'] == '1') {?>
.element_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['ID'];?>
 { animation: lefttoright 1s ease-out; }
<?php }
if ($_smarty_tpl->tpl_vars['ELEMENT']->value['APPEAR_ANIMATION'] == '2') {?>
.element_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['ID'];?>
 { animation: righttoleft 1s ease-out; }
<?php }
if ($_smarty_tpl->tpl_vars['ELEMENT']->value['APPEAR_ANIMATION'] == '3') {?>
.element_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['ID'];?>
 { animation: toptobottom 1s ease-out; }
<?php }
if ($_smarty_tpl->tpl_vars['ELEMENT']->value['APPEAR_ANIMATION'] == '4') {?>
.element_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['ID'];?>
 { animation: bottomtotop 1s ease-out; }
<?php }
if ($_smarty_tpl->tpl_vars['ELEMENT']->value['APPEAR_ANIMATION'] == '5') {?>
.element_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['ID'];?>
 { animation: blink 0.5s ease-out; }
<?php }
if ($_smarty_tpl->tpl_vars['ELEMENT']->value['APPEAR_ANIMATION'] == '6') {?>
.element_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['ID'];?>
 { animation: scale 0.5s ease-out; }
<?php }?>


<?php
$_smarty_tpl->tpl_vars['ELEMENT'] = $__foreach_ELEMENT_1_saved_local_item;
}
if ($__foreach_ELEMENT_1_saved_item) {
$_smarty_tpl->tpl_vars['ELEMENT'] = $__foreach_ELEMENT_1_saved_item;
}
$_smarty_tpl->tpl_vars['SCENE'] = $__foreach_SCENE_0_saved_local_item;
}
if ($__foreach_SCENE_0_saved_item) {
$_smarty_tpl->tpl_vars['SCENE'] = $__foreach_SCENE_0_saved_item;
}
?>


.container_background {
 border:1px solid rgba(0,0,0,0.2);
 background-color:rgba(0,0,0,0.5);
 padding:0px;
}

.html_background {
 border:1px solid rgba(0,0,0,0.2);
 background-color:rgba(0,0,0,0.5);
 background-size:100%;
 padding:0px;
}

<?php
$_from = $_smarty_tpl->tpl_vars['ALL_TYPES']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_TYPE_2_saved_item = isset($_smarty_tpl->tpl_vars['TYPE']) ? $_smarty_tpl->tpl_vars['TYPE'] : false;
$_smarty_tpl->tpl_vars['TYPE'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['TYPE']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['TYPE']->value) {
$_smarty_tpl->tpl_vars['TYPE']->_loop = true;
$__foreach_TYPE_2_saved_local_item = $_smarty_tpl->tpl_vars['TYPE'];
?>
 <?php if ($_smarty_tpl->tpl_vars['TYPE']->value['HAS_STYLE'] != '') {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../cms/scenes/styles/".((string)$_smarty_tpl->tpl_vars['TYPE']->value['TITLE'])."/style.css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->tpl_vars['TYPE'] = $__foreach_TYPE_2_saved_local_item;
}
if ($__foreach_TYPE_2_saved_item) {
$_smarty_tpl->tpl_vars['TYPE'] = $__foreach_TYPE_2_saved_item;
}
?>
</style>

<?php if (@constant('SETTINGS_SCENES_CLICKSOUND') != '') {?>
<div style="display:none">
<audio id="click_sound" src="<?php echo @constant('SETTINGS_SCENES_CLICKSOUND');?>
" controls preload="auto" autobuffer>
</audio>
</div>
<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['TOTAL_SCENES']->value != "1") {?>
        <style><?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./slider.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</style>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('ROOTHTML');?>
js/easySlider1.7.js"><?php echo '</script'; ?>
>
        <?php }?>

        <?php echo '<script'; ?>
 type="text/javascript" language="javascript">

$.fn.customContextMenu = function(callBack){
    $(this).each(function(){
        $(this).bind("contextmenu",function(e){
             e.preventDefault();
             callBack(e);
        });
    }); 
}



        var codeHash=new Object();
        var firstRun=1;
        var refreshRun=0;
        var checkTimer;
        var refreshTimer;
        var noUpdatesTimer;
        var usingWebsockets=0;
        var ignoreClick=0;
        var contextTimeout=0;
        var contextTop='';
        var contextLeft='';
        var subscribedWebSockets=0;
        var subscribedWebSocketsTimer;

        function EvalSound(soundobj) {
         var thissound=document.getElementById(soundobj);
         thissound.play();
        }

        function switchScene(scene_id) {
         <?php
$_from = $_smarty_tpl->tpl_vars['RESULT']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_SCENE_3_saved_item = isset($_smarty_tpl->tpl_vars['SCENE']) ? $_smarty_tpl->tpl_vars['SCENE'] : false;
$_smarty_tpl->tpl_vars['SCENE'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['SCENE']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['SCENE']->value) {
$_smarty_tpl->tpl_vars['SCENE']->_loop = true;
$__foreach_SCENE_3_saved_local_item = $_smarty_tpl->tpl_vars['SCENE'];
?>
         if (scene_id=='<?php echo $_smarty_tpl->tpl_vars['SCENE']->value['ID'];?>
') {
           <?php if (@constant('SETTINGS_SCENES_VERTICAL_NAV') == "1") {?>
            $('#controls_vertical<?php echo $_smarty_tpl->tpl_vars['SCENE']->value['NUMP'];?>
 a').click();
           <?php } else { ?>
            $('#controls<?php echo $_smarty_tpl->tpl_vars['SCENE']->value['NUMP'];?>
 a').click();
           <?php }?>
         }
         <?php
$_smarty_tpl->tpl_vars['SCENE'] = $__foreach_SCENE_3_saved_local_item;
}
if ($__foreach_SCENE_3_saved_item) {
$_smarty_tpl->tpl_vars['SCENE'] = $__foreach_SCENE_3_saved_item;
}
?>
         return false;
        }

        function controlWindowPositionChanged(id) {
         return false;
        }


        <?php
$_from = $_smarty_tpl->tpl_vars['RESULT']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_SCENE_4_saved_item = isset($_smarty_tpl->tpl_vars['SCENE']) ? $_smarty_tpl->tpl_vars['SCENE'] : false;
$_smarty_tpl->tpl_vars['SCENE'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['SCENE']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['SCENE']->value) {
$_smarty_tpl->tpl_vars['SCENE']->_loop = true;
$__foreach_SCENE_4_saved_local_item = $_smarty_tpl->tpl_vars['SCENE'];
?>
        <?php
$_from = $_smarty_tpl->tpl_vars['SCENE']->value['ALL_ELEMENTS'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ELEMENT_5_saved_item = isset($_smarty_tpl->tpl_vars['ELEMENT']) ? $_smarty_tpl->tpl_vars['ELEMENT'] : false;
$_smarty_tpl->tpl_vars['ELEMENT'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['ELEMENT']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ELEMENT']->value) {
$_smarty_tpl->tpl_vars['ELEMENT']->_loop = true;
$__foreach_ELEMENT_5_saved_local_item = $_smarty_tpl->tpl_vars['ELEMENT'];
?>
        <?php
$_from = $_smarty_tpl->tpl_vars['ELEMENT']->value['STATES'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_STATE_6_saved_item = isset($_smarty_tpl->tpl_vars['STATE']) ? $_smarty_tpl->tpl_vars['STATE'] : false;
$_smarty_tpl->tpl_vars['STATE'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['STATE']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['STATE']->value) {
$_smarty_tpl->tpl_vars['STATE']->_loop = true;
$__foreach_STATE_6_saved_local_item = $_smarty_tpl->tpl_vars['STATE'];
?>
        <?php if ($_smarty_tpl->tpl_vars['STATE']->value['MENU_ITEM_ID'] != "0" || $_smarty_tpl->tpl_vars['STATE']->value['HOMEPAGE_ID'] != "0" || $_smarty_tpl->tpl_vars['STATE']->value['OPEN_SCENE_ID'] != "0" || $_smarty_tpl->tpl_vars['STATE']->value['EXT_URL'] != '') {?>
         var window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_width=<?php echo $_smarty_tpl->tpl_vars['STATE']->value['WINDOW_WIDTH'];?>
;
         var window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_height=<?php echo $_smarty_tpl->tpl_vars['STATE']->value['WINDOW_HEIGHT'];?>
;
         var window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_posx=<?php echo $_smarty_tpl->tpl_vars['STATE']->value['WINDOW_POSX'];?>
;
         var window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_posy=<?php echo $_smarty_tpl->tpl_vars['STATE']->value['WINDOW_POSY'];?>
;
        <?php }?>
        <?php
$_smarty_tpl->tpl_vars['STATE'] = $__foreach_STATE_6_saved_local_item;
}
if ($__foreach_STATE_6_saved_item) {
$_smarty_tpl->tpl_vars['STATE'] = $__foreach_STATE_6_saved_item;
}
?>
        <?php
$_smarty_tpl->tpl_vars['ELEMENT'] = $__foreach_ELEMENT_5_saved_local_item;
}
if ($__foreach_ELEMENT_5_saved_item) {
$_smarty_tpl->tpl_vars['ELEMENT'] = $__foreach_ELEMENT_5_saved_item;
}
?>
        <?php
$_smarty_tpl->tpl_vars['SCENE'] = $__foreach_SCENE_4_saved_local_item;
}
if ($__foreach_SCENE_4_saved_item) {
$_smarty_tpl->tpl_vars['SCENE'] = $__foreach_SCENE_4_saved_item;
}
?>



        function stateClickedEdit(id) {

          var window_url=window.parent.location.href;

          var wdth=850;
          var hdth=600;

          window_url=window_url.replace('tab=preview', 'tab=elements')+'&open='+id+'&print=1';
          if (id=='new') {
           window_url=window_url+'&top='+contextTop+'&left='+contextLeft;
          }

          var jWindowObjElement = $.jWindow({ 
           id: 'windowEdit'+id, 
           title: 'Settings', 
           width: wdth, 
           height: hdth, 
           type: 'iframe', 
           marginTop:0, 
           marginBottom:0, 
           marginLeft:0, 
           marginRight:0, 
           url: window_url,
           onClose:function () {
            window.location.href=window.location.href;
           },
           modal: true });
          jWindowObjElement.show();
          jWindowObjElement.update();


         return false;
        }



        function stateClicked(id) {

         var window_url;
         
         <?php if (@constant('SETTINGS_SCENES_CLICKSOUND') != '') {?>
         EvalSound('click_sound');
         <?php }?>

        <?php
$_from = $_smarty_tpl->tpl_vars['RESULT']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_SCENE_7_saved_item = isset($_smarty_tpl->tpl_vars['SCENE']) ? $_smarty_tpl->tpl_vars['SCENE'] : false;
$_smarty_tpl->tpl_vars['SCENE'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['SCENE']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['SCENE']->value) {
$_smarty_tpl->tpl_vars['SCENE']->_loop = true;
$__foreach_SCENE_7_saved_local_item = $_smarty_tpl->tpl_vars['SCENE'];
?>
        <?php
$_from = $_smarty_tpl->tpl_vars['SCENE']->value['ALL_ELEMENTS'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ELEMENT_8_saved_item = isset($_smarty_tpl->tpl_vars['ELEMENT']) ? $_smarty_tpl->tpl_vars['ELEMENT'] : false;
$_smarty_tpl->tpl_vars['ELEMENT'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['ELEMENT']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ELEMENT']->value) {
$_smarty_tpl->tpl_vars['ELEMENT']->_loop = true;
$__foreach_ELEMENT_8_saved_local_item = $_smarty_tpl->tpl_vars['ELEMENT'];
?>
        <?php
$_from = $_smarty_tpl->tpl_vars['ELEMENT']->value['STATES'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_STATE_9_saved_item = isset($_smarty_tpl->tpl_vars['STATE']) ? $_smarty_tpl->tpl_vars['STATE'] : false;
$_smarty_tpl->tpl_vars['STATE'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['STATE']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['STATE']->value) {
$_smarty_tpl->tpl_vars['STATE']->_loop = true;
$__foreach_STATE_9_saved_local_item = $_smarty_tpl->tpl_vars['STATE'];
?>


            <?php if ($_smarty_tpl->tpl_vars['ELEMENT']->value['TYPE'] == "img") {?>
            if (id=='<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
') {
                $('#state_<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
').hide();
                setTimeout("$('#state_<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
').show();", 150);
            }
            <?php }?>

         <?php if ($_smarty_tpl->tpl_vars['ELEMENT']->value['TYPE'] == "button") {?>
         if (id=='<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
') {
          $('#state_<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
').addClass('clicked');
          setTimeout("$('#state_<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
').removeClass('clicked');", 150);
         }
         <?php }?>


         <?php if ($_smarty_tpl->tpl_vars['STATE']->value['MENU_ITEM_ID'] != "0" || $_smarty_tpl->tpl_vars['STATE']->value['HOMEPAGE_ID'] != "0" || $_smarty_tpl->tpl_vars['STATE']->value['OPEN_SCENE_ID'] != "0" || $_smarty_tpl->tpl_vars['STATE']->value['EXT_URL'] != '') {?>
          <?php if ($_smarty_tpl->tpl_vars['STATE']->value['MENU_ITEM_ID'] != "0") {?>
          window_url='/menu.html?parent=<?php echo $_smarty_tpl->tpl_vars['STATE']->value['MENU_ITEM_ID'];?>
';
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['STATE']->value['HOMEPAGE_ID'] != "0") {?>
          window_url='<?php echo @constant('ROOTHTML');?>
page/<?php echo $_smarty_tpl->tpl_vars['STATE']->value['HOMEPAGE_ID'];?>
.html';
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['STATE']->value['OPEN_SCENE_ID'] != "0") {?>
          window_url='<?php echo @constant('ROOTHTML');?>
popup/scenes/<?php echo $_smarty_tpl->tpl_vars['STATE']->value['OPEN_SCENE_ID'];?>
.html';
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['STATE']->value['EXT_URL'] != '') {?>
          window_url='<?php echo $_smarty_tpl->tpl_vars['STATE']->value['EXT_URL'];?>
';
          <?php }?>
         <?php }?>

         <?php if ($_smarty_tpl->tpl_vars['ELEMENT']->value['TYPE'] == "navgo") {?>
         if (id=='<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
') {
          window.location.href=window_url;
          return;
         }
         <?php }?>



         <?php if ($_smarty_tpl->tpl_vars['STATE']->value['MENU_ITEM_ID'] != "0" || $_smarty_tpl->tpl_vars['STATE']->value['HOMEPAGE_ID'] != "0" || $_smarty_tpl->tpl_vars['STATE']->value['OPEN_SCENE_ID'] != "0" || $_smarty_tpl->tpl_vars['STATE']->value['EXT_URL'] != '') {?>
         if (id=='<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
') {

          var top=$('#scene_background_<?php echo $_smarty_tpl->tpl_vars['SCENE']->value['ID'];?>
').offset().top;
          var left=$('#scene_background_<?php echo $_smarty_tpl->tpl_vars['SCENE']->value['ID'];?>
').offset().left;

          var wdth=window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_width;
          var hdth=window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_height;
          var x=window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_posx+left;
          var y=window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_posy+top;


          if (!wdth) wdth=500;
          if (!hdth) hdth=500;
          if (!x) x=200;
          if (!y) y=200;



          var jWindowObj<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
 = $.jWindow({ 
           id: 'state<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
', 
           title: '<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['TITLE'];?>
', 
           posx: x, 
           posy: y, 
           width: wdth, 
           height: hdth, 
           type: 'iframe', 
           marginTop:0, 
           marginBottom:0, 
           marginLeft:0, 
           marginRight:0, 
           url: window_url,
           onResizeEnd:function () {
            //Size changed
            var top=$('#scene_background_<?php echo $_smarty_tpl->tpl_vars['SCENE']->value['ID'];?>
').offset().top;
            var left=$('#scene_background_<?php echo $_smarty_tpl->tpl_vars['SCENE']->value['ID'];?>
').offset().left;
            var url1="<?php echo @constant('ROOTHTML');?>
ajax/scenes.html?op=position";
            window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_posx=(jWindowObj<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
.get('posx'))-left;
            window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_posy=(jWindowObj<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
.get('posy'))-top;
            window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_width=(jWindowObj<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
.get('width'));
            window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_height=(jWindowObj<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
.get('height'));
            url1+='&id=<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
&posx='+window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_posx+'&posy='+window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_posy+'&width='+window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_width+'&height='+window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_height;
            
            $.ajax({url: url1});
            
           }, 
           onDragEnd:function () {
            //Position changed
            ignoreClick=0;
            var url1="<?php echo @constant('ROOTHTML');?>
ajax/scenes.html?op=position";
            var top=$('#scene_background_<?php echo $_smarty_tpl->tpl_vars['SCENE']->value['ID'];?>
').offset().top;
            var left=$('#scene_background_<?php echo $_smarty_tpl->tpl_vars['SCENE']->value['ID'];?>
').offset().left;
            window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_posx=(jWindowObj<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
.get('posx'))-left;
            window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_posy=(jWindowObj<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
.get('posy'))-top;
            window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_width=(jWindowObj<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
.get('width'));
            window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_height=(jWindowObj<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
.get('height'));
            url1+='&id=<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
&posx='+window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_posx+'&posy='+window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_posy+'&width='+window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_width+'&height='+window<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
_height;
            
            $.ajax({url: url1});
            
           },
           modal: false });
          jWindowObj<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
.show();
          jWindowObj<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
.update();
          <?php if (($_smarty_tpl->tpl_vars['STATE']->value['SCRIPT_ID'] == "0") && ($_smarty_tpl->tpl_vars['STATE']->value['ACTION_METHOD'] == '') && ($_smarty_tpl->tpl_vars['STATE']->value['CODE'] == '')) {?>return;<?php }?>
         }
         <?php }?>
        <?php
$_smarty_tpl->tpl_vars['STATE'] = $__foreach_STATE_9_saved_local_item;
}
if ($__foreach_STATE_9_saved_item) {
$_smarty_tpl->tpl_vars['STATE'] = $__foreach_STATE_9_saved_item;
}
?>
        <?php
$_smarty_tpl->tpl_vars['ELEMENT'] = $__foreach_ELEMENT_8_saved_local_item;
}
if ($__foreach_ELEMENT_8_saved_item) {
$_smarty_tpl->tpl_vars['ELEMENT'] = $__foreach_ELEMENT_8_saved_item;
}
?>
        <?php
$_smarty_tpl->tpl_vars['SCENE'] = $__foreach_SCENE_7_saved_local_item;
}
if ($__foreach_SCENE_7_saved_item) {
$_smarty_tpl->tpl_vars['SCENE'] = $__foreach_SCENE_7_saved_item;
}
?>



         var url="<?php echo @constant('ROOTHTML');?>
ajax/scenes.html?op=click";
         url+='&id='+id;
         $.ajax({
          url: url,
          }).done(function(data) { 
           processCheckStates(data);
          });
         return false;
        }



        function processCheckStates(data) {

           var obj=jQuery.parseJSON(data);
           if (typeof obj !='object') return false;
           

           clearTimeout(noUpdatesTimer);
           noUpdatesTimer=setTimeout("$.publish('scenesNoUpdates');", 30*60*1000);

           var objCnt = obj.length;
           if (objCnt) {
             for(var i=0;i<objCnt;i++) {
              var elem=$('#state_'+obj[i].ID);
              if ((typeof obj[i].HTML!= 'undefined') && (!codeHash.hasOwnProperty('code'+obj[i].ID) || codeHash['code'+obj[i].ID]!=obj[i].HTML)) {
               elem.html('<span>'+obj[i].HTML+'</span>');
               codeHash['code'+obj[i].ID]=obj[i].HTML;
              }
              if (obj[i].STATE=='1' && !elem.is(':visible')) {
               if (elem.hasClass('inlineblock')) {
                elem.css('display', 'inline-block');
               } else {
                elem.show();
               }
               <?php if ($_smarty_tpl->tpl_vars['TOTAL_SCENES']->value != "1") {?>
               if (firstRun!=1 && obj[i].SWITCH_SCENE=='1') {
                switchScene(obj[i].SCENE_ID);
               }
               <?php }?>
              }
              if (obj[i].STATE!='1' && elem.is(':visible')) {
               elem.hide();
              }


              if (elem.hasClass('s3d_state')) {


               if (elem.data('s3d_object')) {
                var object3d = scene.getObjectByName( elem.data('s3d_object'), true );
                if (obj[i].STATE=='1') {
                 object3d.visible=true;
                } else {
                 object3d.visible=false;
                }
               }


               if (elem.data('s3d_camera')) {
                if (obj[i].STATE=='1') {
                  new_camera = scene.getObjectByName( elem.data('s3d_camera'), true );;
                 }else {
                  new_camera = default_camera;
                 }

                        var new_position = new_camera.position.clone();
                        var new_rotation = new_camera.rotation.clone();
                        var new_quaternion = new_camera.quaternion.clone();

                        //newlookAtVector = new THREE.Vector3(new_camera.matrix[8], new_camera.matrix[9], new_camera.matrix[10]);

                        camera.rotation.clone(new_rotation);
                        camera.quaternion.clone(new_quaternion);

                        newlookAtVector = new THREE.Vector3(0, 0, -1);
                        newlookAtVector.applyEuler(new_camera.rotation, new_camera.eulerOrder);


                        new TWEEN.Tween( camera.position ).to( {
                                x: new_position.x,
                                y: new_position.y,
                                z: new_position.z}, 600 ).onUpdate(function () {

                         camera.lookAt(newlookAtVector);

                        }).onComplete(function () {

                         camera.lookAt(newlookAtVector);
        
                        }).easing( TWEEN.Easing.Sinusoidal.Out).start();
               }
              }


             }
           }
        }


        function checkAllStates() {
         clearTimeout(checkTimer);

         if (subscribedWebSockets==1) {
          firstRun=0;
          checkTimer=setTimeout('checkAllStates();', 3000);
          if (firstRun!=1 && refreshRun!=1) {
           return;
          }
         }

         var url="<?php echo @constant('ROOTHTML');?>
ajax/scenes.html?op=checkAllStates<?php if ($_smarty_tpl->tpl_vars['SCENE_ID']->value != '') {?>&scene_id=<?php echo $_smarty_tpl->tpl_vars['SCENE_ID']->value;
}
echo $_smarty_tpl->tpl_vars['PARAMS']->value;?>
";
         $.ajax({
          url: url,
          }).done(function(data) { 
           processCheckStates(data);
           <?php if ($_smarty_tpl->tpl_vars['TOTAL_SCENES']->value != "1") {?>
           if (firstRun==1) {
                        $("#slider").easySlider({
                                auto: false, 
                                numeric: true,
                                <?php if (@constant('SETTINGS_SCENES_VERTICAL_NAV') == "1") {?>numericId: 'controls_vertical',<?php }?>
                                continuous: false
                        });
           }

           <?php }?>
           firstRun=0;
           refreshRun=0;
           //tryWebSockets();
           refreshTimer=setTimeout('refreshRun=1;', 5*60*1000);
           checkTimer=setTimeout('checkAllStates();', 3000);
          });
         return false;
        }

        $.subscribe('scenesNoUpdates', function (_) {
         window.location.reload();
        });


        function subscribeToScene() {
         console.log('Sending scene subscription request...');
         var payload;
         payload = new Object();
         payload.action = 'Subscribe';
         payload.data = new Object();
         payload.data.TYPE='scenes';
         payload.data.SCENE_ID='<?php echo $_smarty_tpl->tpl_vars['SCENE_ID']->value;?>
';
         wsSocket.send(JSON.stringify(payload));
         subscribedWebSocketsTimer=setTimeout('subscribeToScene();', 3000);
         return false;
        }


        $.subscribe('wsConnected', function (_) {
         subscribeToScene();
        });

        $.subscribe('wsData', function (_, response) {
          if (response.action=='subscribed') {
           console.log('Subscription confirmed.');
           clearTimeout(subscribedWebSocketsTimer);
           subscribedWebSockets=1;
          }
          if (response.action=='states') {
           processCheckStates(response.data);
          }
        });


                $(document).ready(function(){
                <?php if ($_smarty_tpl->tpl_vars['TOTAL_SCENES']->value == "1") {?>

                 <?php if ($_smarty_tpl->tpl_vars['DRAGGABLE']->value == "1") {?>
                    $(".draggable" ).draggable({ cursor: "move", snap: true , snapTolerance: 5, grid: [5,5],
                        stop: function(e, ui) {
                         var url="<?php echo @constant('ROOTHTML');?>
ajax/scenes.html?op=dragged&element="+$(this).attr("id")+"&details="+encodeURIComponent(JSON.stringify(ui));
                         
                         $.ajax({
                          url: url,
                          }).done(function(data) { 
                           //alert(data);
                          });
                          
                        }
                   }).resizable({grid: 5, 
                           stop: function(e, ui) {
                            var url="<?php echo @constant('ROOTHTML');?>
ajax/scenes.html?op=resized&element="+$(this).attr("id")+"&details="+encodeURIComponent(JSON.stringify(ui));
                            
                            $.ajax({
                             url: url,
                             }).done(function(data) { 
                             //alert(data);
                             });
                            
                           }}).click(function(){
            if ( $(this).is('.ui-draggable-dragging') ) {
                  return;
            }
            // click action here
            stateClickedEdit($(this).attr("id"));
      });

      <?php
$_from = $_smarty_tpl->tpl_vars['RESULT']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_SCENE_10_saved_item = isset($_smarty_tpl->tpl_vars['SCENE']) ? $_smarty_tpl->tpl_vars['SCENE'] : false;
$_smarty_tpl->tpl_vars['SCENE'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['SCENE']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['SCENE']->value) {
$_smarty_tpl->tpl_vars['SCENE']->_loop = true;
$__foreach_SCENE_10_saved_local_item = $_smarty_tpl->tpl_vars['SCENE'];
?>
      $("#scene_wallpaper_<?php echo $_smarty_tpl->tpl_vars['SCENE']->value['ID'];?>
").customContextMenu(function(e){
       contextTop=e.pageY;
       contextLeft=e.pageX;
       $("#contextMenuDiv").css({ "top": e.pageY+"px", "left": e.pageX+"px" });
       $('#contextMenuDiv').show();
       contextTimeout=setTimeout("$('#contextMenuDiv').hide();", 3*1000);
       return false;
      });
      <?php
$_smarty_tpl->tpl_vars['SCENE'] = $__foreach_SCENE_10_saved_local_item;
}
if ($__foreach_SCENE_10_saved_item) {
$_smarty_tpl->tpl_vars['SCENE'] = $__foreach_SCENE_10_saved_item;
}
?>
 
                 <?php }?>
                 <?php if ($_smarty_tpl->tpl_vars['SCENE_WALLPAPER']->value != '') {?>
                 if (inIframe) {
                  if (typeof window.parent.setBackgroundStyle!=='undefined') {
                    if ($('#scene_wallpaper_<?php echo $_smarty_tpl->tpl_vars['SCENE_ID']->value;?>
').css('background-image')!='') {
                     $('body').css('background-color', 'transparent');
                     window.parent.$('body').css('background-image', $('#scene_wallpaper_<?php echo $_smarty_tpl->tpl_vars['SCENE_ID']->value;?>
').css('background-image'));
                     window.parent.$('body').css('background-attachment', $('#scene_wallpaper_<?php echo $_smarty_tpl->tpl_vars['SCENE_ID']->value;?>
').css('background-attachment'));
                     window.parent.$('body').css('background-repeat', $('#scene_wallpaper_<?php echo $_smarty_tpl->tpl_vars['SCENE_ID']->value;?>
').css('background-repeat'));
                     $('#scene_wallpaper_<?php echo $_smarty_tpl->tpl_vars['SCENE_ID']->value;?>
').css('background-image', '');
                    }
                  }
                 }
                 <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['SCENE_AUTO_SCALE']->value == "1") {?>
                    setTimeout('sceneZoom();',2000);
                    $(window).on('resize', function(){
                        sceneZoom();
                    });
                    <?php }?>
                <?php }?>
                 
                 checkAllStates();






                });


            function sceneZoom() {
                zoom = $(window).width()/$("#slider").width()*100;
                document.body.style.zoom = zoom+"%"
            }


        <?php echo '</script'; ?>
>



<div id="scenes_body">
<table  border="0" cellpadding="0" cellspacing="0">
 <tr>
  <td valign="top">
<div style="<?php if ($_smarty_tpl->tpl_vars['TOTAL_SCENES']->value != "1") {?>width:<?php echo @constant('SETTINGS_SCENES_WIDTH');?>
px;<?php }?>;position:relative;">
<div id="slider">
<?php if ($_smarty_tpl->tpl_vars['TOTAL_SCENES']->value != "1") {?><ul><?php }
$_from = $_smarty_tpl->tpl_vars['RESULT']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_SCENE_11_saved_item = isset($_smarty_tpl->tpl_vars['SCENE']) ? $_smarty_tpl->tpl_vars['SCENE'] : false;
$_smarty_tpl->tpl_vars['SCENE'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['SCENE']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['SCENE']->value) {
$_smarty_tpl->tpl_vars['SCENE']->_loop = true;
$__foreach_SCENE_11_saved_local_item = $_smarty_tpl->tpl_vars['SCENE'];
if ($_smarty_tpl->tpl_vars['TOTAL_SCENES']->value != "1") {?><li id='scene_<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
' style="width:<?php echo @constant('SETTINGS_SCENES_WIDTH');?>
px;"><?php }?>
 <div id="scene_wallpaper_<?php echo $_smarty_tpl->tpl_vars['SCENE']->value['ID'];?>
" style="<?php if ($_smarty_tpl->tpl_vars['SCENE']->value['WALLPAPER'] != '') {?>background-image:url(<?php echo $_smarty_tpl->tpl_vars['SCENE']->value['WALLPAPER'];?>
);<?php if ($_smarty_tpl->tpl_vars['SCENE']->value['WALLPAPER_FIXED'] == "1") {?>background-attachment: fixed;<?php }
if ($_smarty_tpl->tpl_vars['SCENE']->value['WALLPAPER_NOREPEAT'] == "1") {?>background-repeat: no-repeat;<?php }
}?>;">
 <div id="scene_background_<?php echo $_smarty_tpl->tpl_vars['SCENE']->value['ID'];?>
" style="position:relative;">
 

 <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'elements', array('items'=>$_smarty_tpl->tpl_vars['SCENE']->value['ELEMENTS']), false);?>


 <?php if ($_smarty_tpl->tpl_vars['SCENE']->value['BACKGROUND'] != '') {?><div class="scene_background"><img src="<?php echo $_smarty_tpl->tpl_vars['SCENE']->value['BACKGROUND'];?>
" border="0"></div><?php }?>
 </div>
 </div>
 <?php if ($_smarty_tpl->tpl_vars['TOTAL_SCENES']->value != "1") {?></li><?php }
$_smarty_tpl->tpl_vars['SCENE'] = $__foreach_SCENE_11_saved_local_item;
}
if ($__foreach_SCENE_11_saved_item) {
$_smarty_tpl->tpl_vars['SCENE'] = $__foreach_SCENE_11_saved_item;
}
?>

<?php if ($_smarty_tpl->tpl_vars['TOTAL_SCENES']->value != "1") {?></ul><?php }?>
</div>
</div> <!-- /slider -->
</td>
 </tr>
</table>
</div>

<?php if ($_smarty_tpl->tpl_vars['DRAGGABLE']->value == "1") {?>
<div id='contextMenuDiv' style="display:none;width:100px;height:20px;background-color:white;position:absolute;border: 1px solid black;z-index:10000;top:200px;left:300px;padding:10px;text-align:center"><a href="#" onClick="stateClickedEdit('new');return false;"><?php echo @constant('LANG_ADD');?>
</a></div>
<?php }
}
/* smarty_template_function_elements_4171211375a167516d82df6_21198267 */
if (!function_exists('smarty_template_function_elements_4171211375a167516d82df6_21198267')) {
function smarty_template_function_elements_4171211375a167516d82df6_21198267($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}?>

 <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ELEMENT_12_saved_item = isset($_smarty_tpl->tpl_vars['ELEMENT']) ? $_smarty_tpl->tpl_vars['ELEMENT'] : false;
$_smarty_tpl->tpl_vars['ELEMENT'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['ELEMENT']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ELEMENT']->value) {
$_smarty_tpl->tpl_vars['ELEMENT']->_loop = true;
$__foreach_ELEMENT_12_saved_local_item = $_smarty_tpl->tpl_vars['ELEMENT'];
?>
 <!-- element <?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
 -->
 <?php if ($_smarty_tpl->tpl_vars['ELEMENT']->value['ELEMENTS']) {?>
 <div 
   class="element_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['ID'];?>
 type_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['TYPE'];
if ($_smarty_tpl->tpl_vars['ELEMENT']->value['CSS_STYLE'] != '') {?> style_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['CSS_STYLE'];
}
if ($_smarty_tpl->tpl_vars['ELEMENT']->value['BACKGROUND'] == "1") {?> container_background<?php }
if ($_smarty_tpl->tpl_vars['DRAGGABLE']->value == "1") {?> draggable<?php }?>"
   style="position:absolute;left:<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['LEFT'];?>
px;top:<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['TOP'];?>
px;
   <?php if ($_smarty_tpl->tpl_vars['ELEMENT']->value['ZINDEX'] != '') {?>z-index:<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['ZINDEX'];?>
;<?php }?>
   <?php if ($_smarty_tpl->tpl_vars['ELEMENT']->value['WIDTH'] != "0") {?>width:<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['WIDTH'];?>
px;<?php }
if ($_smarty_tpl->tpl_vars['ELEMENT']->value['HEIGHT'] != "0") {?>height:<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['HEIGHT'];?>
px;<?php }?>
   "
   id="container_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['ID'];?>
"
   >
  <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'elements', array('items'=>$_smarty_tpl->tpl_vars['ELEMENT']->value['ELEMENTS']), false);?>

 </div>
 <?php } else { ?>

 <?php if ($_smarty_tpl->tpl_vars['ELEMENT']->value['TYPE'] == "s3d") {?>
  <div 
   class="element_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['ID'];?>
 type_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['TYPE'];
if ($_smarty_tpl->tpl_vars['ELEMENT']->value['CSS_STYLE'] != '') {?> style_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['CSS_STYLE'];
}?> state_<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;
if ($_smarty_tpl->tpl_vars['ELEMENT']->value['BACKGROUND'] == "1") {?> html_background<?php }
if ($_smarty_tpl->tpl_vars['ELEMENT']->value['POSITION_TYPE'] == "1") {?> inlineblock<?php }
if ($_smarty_tpl->tpl_vars['DRAGGABLE']->value == "1" && $_smarty_tpl->tpl_vars['ELEMENT']->value['POSITION_TYPE'] == "0") {?> draggable<?php }?>" 
   id='canvas_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['ID'];?>
'
   style="
   background-color:red;
   <?php if ($_smarty_tpl->tpl_vars['ELEMENT']->value['POSITION_TYPE'] == "0") {?>position:absolute;left:<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['LEFT'];?>
px;top:<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['TOP'];?>
px;<?php }?>
   <?php if ($_smarty_tpl->tpl_vars['ELEMENT']->value['ZINDEX'] != '') {?>z-index:<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['ZINDEX'];?>
;<?php }?>
   <?php if ($_smarty_tpl->tpl_vars['ELEMENT']->value['WIDTH'] != "0") {?>width:<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['WIDTH'];?>
px;<?php }
if ($_smarty_tpl->tpl_vars['ELEMENT']->value['HEIGHT'] != "0") {?>height:<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['HEIGHT'];?>
px;<?php }?>
   display:inline-block;"></div>

<?php echo '<script'; ?>
 language="javascript" src="<?php echo @constant('ROOTHTML');?>
js/threejs/libs/tween.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="<?php echo @constant('ROOTHTML');?>
js/threejs/three.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('ROOTHTML');?>
js/threejs/loaders/SceneLoader.js" language="javascript"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 language="javascript">

                        var container;
                        var camera, scene, loaded;
                        var renderer;
                        var mixers = [];
                        var rotatingObjects = [];
                        var clock = new THREE.Clock();
                        var objects = [];

    var container = document.getElementById('canvas_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['ID'];?>
');
    var camera = new THREE.PerspectiveCamera( 75, <?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['WIDTH'];?>
/<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['HEIGHT'];?>
, 0.1, 1000 );
    var default_camera = new THREE.PerspectiveCamera( 75, <?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['WIDTH'];?>
/<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['HEIGHT'];?>
, 0.1, 1000 );

    var renderer = new THREE.WebGLRenderer();
    renderer.setSize( <?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['WIDTH'];?>
, <?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['HEIGHT'];?>
 );
    renderer.domElement.style.position = "relative";
    container.appendChild( renderer.domElement );
    renderer.gammaInput = true;
    renderer.gammaOutput = true;

    var scene = new THREE.Scene();


var loader = new THREE.SceneLoader();
var sceneURL='<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['S3D_SCENE'];?>
'; //

// load a resource
loader.load(
        sceneURL,
        function ( result ) {
           loaded = result;
           scene = loaded.scene;
           for (var obj in loaded.objects ) {
            objects.push(loaded.objects[obj]);
           }
           if (loaded.currentCamera) {

            loaded.currentCamera.aspect = <?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['WIDTH'];?>
/<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['HEIGHT'];?>
;
            loaded.currentCamera.updateProjectionMatrix();
            default_camera=loaded.currentCamera;
            camera = default_camera.clone();
            /*
            var old_position = new THREE.Vector3();
            old_position.setFromMatrixPosition( camera.matrix );
            camera.matrixAutoUpdate = true;
            camera.position.setX(old_position.x);
            camera.position.setY(old_position.y);
            camera.position.setZ(old_position.z);
            */

           }

        }
);


                        function render() {
                                requestAnimationFrame( render );
                                renderer.render( scene, camera );
                                TWEEN.update();
                        }


     render();


// projector
raycaster = new THREE.Raycaster();

// listeners
document.addEventListener( 'mousedown', onDocumentMouseDown, false)

function onDocumentMouseDown( event ) {
    event.preventDefault();
                var mouse = new THREE.Vector2();
                mouse.x = ( (event.clientX-<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['LEFT'];?>
) / renderer.domElement.width ) * 2 - 1;
                mouse.y = - ( (event.clientY-<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['TOP'];?>
) / renderer.domElement.height ) * 2 + 1;
                raycaster.setFromCamera( mouse, camera );

        var intersects = raycaster.intersectObjects( objects ); 

    if ( intersects.length > 0 ) {
     console.log('Clicked on '+intersects[0].object.name);
     <?php
$_from = $_smarty_tpl->tpl_vars['STATES']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_STATE_13_saved_item = isset($_smarty_tpl->tpl_vars['STATE']) ? $_smarty_tpl->tpl_vars['STATE'] : false;
$_smarty_tpl->tpl_vars['STATE'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['STATE']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['STATE']->value) {
$_smarty_tpl->tpl_vars['STATE']->_loop = true;
$__foreach_STATE_13_saved_local_item = $_smarty_tpl->tpl_vars['STATE'];
?>
      <?php if ($_smarty_tpl->tpl_vars['STATE']->value['S3D_OBJECT'] != '') {?>
      if (intersects[0].object.name=='<?php echo $_smarty_tpl->tpl_vars['STATE']->value['S3D_OBJECT'];?>
') {
       stateClicked('<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
');
      }<?php }?>
     <?php
$_smarty_tpl->tpl_vars['STATE'] = $__foreach_STATE_13_saved_local_item;
}
if ($__foreach_STATE_13_saved_item) {
$_smarty_tpl->tpl_vars['STATE'] = $__foreach_STATE_13_saved_item;
}
?>
    }
}
 

   <?php echo '</script'; ?>
>
   <div style="display:none">
    <?php
$_from = $_smarty_tpl->tpl_vars['ELEMENT']->value['STATES'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_STATE_14_saved_item = isset($_smarty_tpl->tpl_vars['STATE']) ? $_smarty_tpl->tpl_vars['STATE'] : false;
$_smarty_tpl->tpl_vars['STATE'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['STATE']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['STATE']->value) {
$_smarty_tpl->tpl_vars['STATE']->_loop = true;
$__foreach_STATE_14_saved_local_item = $_smarty_tpl->tpl_vars['STATE'];
?>
    <div class="element_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['ID'];?>
 type_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['TYPE'];?>
 state_<?php echo $_smarty_tpl->tpl_vars['STATE']->value['TITLE'];?>
 s3d_state" id="state_<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
"
    <?php if ($_smarty_tpl->tpl_vars['STATE']->value['S3D_OBJECT'] != '') {?> data-s3d_object='<?php echo $_smarty_tpl->tpl_vars['STATE']->value['S3D_OBJECT'];?>
'<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['STATE']->value['S3D_CAMERA'] != '') {?> data-s3d_camera='<?php echo $_smarty_tpl->tpl_vars['STATE']->value['S3D_CAMERA'];?>
'<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['DRAGGABLE']->value != "1") {?>onClick="stateClicked('<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
');"<?php }?>
    ></div><?php
$_smarty_tpl->tpl_vars['STATE'] = $__foreach_STATE_14_saved_local_item;
}
if ($__foreach_STATE_14_saved_item) {
$_smarty_tpl->tpl_vars['STATE'] = $__foreach_STATE_14_saved_item;
}
?>
   </div>

 <?php } else { ?>

 <?php
$_from = $_smarty_tpl->tpl_vars['ELEMENT']->value['STATES'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_STATE_15_saved_item = isset($_smarty_tpl->tpl_vars['STATE']) ? $_smarty_tpl->tpl_vars['STATE'] : false;
$_smarty_tpl->tpl_vars['STATE'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['STATE']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['STATE']->value) {
$_smarty_tpl->tpl_vars['STATE']->_loop = true;
$__foreach_STATE_15_saved_local_item = $_smarty_tpl->tpl_vars['STATE'];
?>
  <div 
   class="element_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['ID'];?>
 type_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['TYPE'];
if ($_smarty_tpl->tpl_vars['ELEMENT']->value['CSS_STYLE'] != '') {?> style_<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['CSS_STYLE'];
}?> state_<?php echo $_smarty_tpl->tpl_vars['STATE']->value['TITLE'];
if ($_smarty_tpl->tpl_vars['ELEMENT']->value['BACKGROUND'] == "1") {?> html_background<?php }
if ($_smarty_tpl->tpl_vars['ELEMENT']->value['POSITION_TYPE'] == "1") {?> inlineblock<?php }
if ($_smarty_tpl->tpl_vars['DRAGGABLE']->value == "1" && $_smarty_tpl->tpl_vars['ELEMENT']->value['POSITION_TYPE'] == "0") {?> draggable<?php }?>" 
   id="state_<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
"
   <?php if ($_smarty_tpl->tpl_vars['STATE']->value['SCRIPT_ID'] != "0" || $_smarty_tpl->tpl_vars['STATE']->value['HOMEPAGE_ID'] != "0" || $_smarty_tpl->tpl_vars['STATE']->value['OPEN_SCENE_ID'] != "0" || $_smarty_tpl->tpl_vars['STATE']->value['EXT_URL'] != '' || $_smarty_tpl->tpl_vars['STATE']->value['MENU_ITEM_ID'] != "0" || $_smarty_tpl->tpl_vars['STATE']->value['ACTION_METHOD'] != '' || $_smarty_tpl->tpl_vars['STATE']->value['CODE'] != '') {?> 
   <?php if ($_smarty_tpl->tpl_vars['DRAGGABLE']->value != "1") {?>
    onClick="stateClicked('<?php echo $_smarty_tpl->tpl_vars['STATE']->value['ID'];?>
');"
   <?php }?>
   <?php }?> 
   style="
   <?php if ($_smarty_tpl->tpl_vars['DRAGGABLE']->value == "1") {?>border:1px solid blue;<?php }?>
   <?php if ($_smarty_tpl->tpl_vars['ELEMENT']->value['POSITION_TYPE'] == "0") {?>position:absolute;left:<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['LEFT'];?>
px;top:<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['TOP'];?>
px;<?php }?>
   <?php if ($_smarty_tpl->tpl_vars['ELEMENT']->value['ZINDEX'] != '') {?>z-index:<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['ZINDEX'];?>
;<?php }?>
   <?php if ($_smarty_tpl->tpl_vars['ELEMENT']->value['WIDTH'] != "0") {?>width:<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['WIDTH'];?>
px;<?php }
if ($_smarty_tpl->tpl_vars['ELEMENT']->value['HEIGHT'] != "0") {?>height:<?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['HEIGHT'];?>
px;<?php }?>
   <?php if ($_smarty_tpl->tpl_vars['STATE']->value['SCRIPT_ID'] != "0" || $_smarty_tpl->tpl_vars['STATE']->value['MENU_ITEM_ID'] != "0" || $_smarty_tpl->tpl_vars['STATE']->value['ACTION_METHOD'] != '' || $_smarty_tpl->tpl_vars['STATE']->value['EXT_URL'] != '' || $_smarty_tpl->tpl_vars['STATE']->value['HOMEPAGE_ID'] != "0" || $_smarty_tpl->tpl_vars['STATE']->value['OPEN_SCENE_ID'] != "0" || $_smarty_tpl->tpl_vars['STATE']->value['CODE'] != '') {?>cursor:pointer;<?php }?>
   <?php if ($_smarty_tpl->tpl_vars['STATE']->value['STATE'] != "1") {?>display:none;<?php } else { ?>display:inline-block;<?php }?>"><?php if ($_smarty_tpl->tpl_vars['ELEMENT']->value['TYPE'] == "img") {?><img src="<?php echo $_smarty_tpl->tpl_vars['STATE']->value['IMAGE'];?>
" border="0"><?php }?><span><?php echo $_smarty_tpl->tpl_vars['STATE']->value['HTML'];?>
</span></div>
 <?php
$_smarty_tpl->tpl_vars['STATE'] = $__foreach_STATE_15_saved_local_item;
}
if ($__foreach_STATE_15_saved_item) {
$_smarty_tpl->tpl_vars['STATE'] = $__foreach_STATE_15_saved_item;
}
?>
 <?php }?>

 <?php }?>

 <?php if ($_smarty_tpl->tpl_vars['ELEMENT']->value['CSS'] != '') {?>
 <style>
  <?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['CSS'];?>

 </style>
 <?php }?>
 <?php if ($_smarty_tpl->tpl_vars['ELEMENT']->value['JAVASCRIPT'] != '') {?>
 <?php echo '<script'; ?>
 language="javascript">
  <?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['JAVASCRIPT'];?>

 <?php echo '</script'; ?>
>
 <?php }?>
 <!-- /element <?php echo $_smarty_tpl->tpl_vars['ELEMENT']->value['ID'];?>
 -->
 <?php
$_smarty_tpl->tpl_vars['ELEMENT'] = $__foreach_ELEMENT_12_saved_local_item;
}
if ($__foreach_ELEMENT_12_saved_item) {
$_smarty_tpl->tpl_vars['ELEMENT'] = $__foreach_ELEMENT_12_saved_item;
}
?>
 <?php foreach (Smarty::$global_tpl_vars as $key => $value){
if (!isset($_smarty_tpl->tpl_vars[$key]) || $_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_elements_4171211375a167516d82df6_21198267 */
}
