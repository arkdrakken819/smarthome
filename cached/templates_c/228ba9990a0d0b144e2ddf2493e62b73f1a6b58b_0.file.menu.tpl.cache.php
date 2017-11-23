<?php
/* Smarty version 3.1.29, created on 2017-11-23 10:12:59
  from "/var/www/templates/commands/menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a1674fb5df154_93004943',
  'file_dependency' => 
  array (
    '228ba9990a0d0b144e2ddf2493e62b73f1a6b58b' => 
    array (
      0 => '/var/www/templates/commands/menu.tpl',
      1 => 1511419182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
  'tpl_function' => 
  array (
    'menu' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => '/var/www/cached/templates_c/228ba9990a0d0b144e2ddf2493e62b73f1a6b58b_0.file.menu.tpl.cache.php',
      'uid' => '228ba9990a0d0b144e2ddf2493e62b73f1a6b58b',
      'call_name' => 'smarty_template_function_menu_3918010715a1674fae1f068_20915530',
    ),
  ),
),false)) {
function content_5a1674fb5df154_93004943 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3918010715a1674fae1f068_20915530';
if ($_smarty_tpl->tpl_vars['MENU_LOADED']->value != '1') {?>

<?php echo '<script'; ?>
 language="javascript">

 var valueChangedFlag = {};
 var latestRequest=0;
 var requestTimer=0;
 var requestDelay=3; // default delay for auto update
 var requestProcessing=0;
 var labelsCollected='';
 var valuesCollected='';
 var first_run=1;

 var labelsCollected_sent='';
 var valuesCollected_sent='';

 var subscribedWebSockets=0;
 var subscribedWebSocketsTimer;


 var requestSent = Math.round(+new Date()/1000);


        function subscribeToMenu() {
         console.log('Sending menu subscription request...');
         var payload;
         payload = new Object();
         payload.action = 'Subscribe';
         payload.data = new Object();
         payload.data.TYPE='commands';
         payload.data.PARENT_ID='<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
';
         wsSocket.send(JSON.stringify(payload));
         subscribedWebSocketsTimer=setTimeout('subscribeToMenu();', 3000);
         return false;
        }


        $.subscribe('wsConnected', function (_) {
         subscribeToMenu();
        });

        $.subscribe('wsData', function (_, response) {
          if (response.action=='subscribed') {
           console.log('Subscription to menu confirmed.');
           clearTimeout(subscribedWebSocketsTimer);
           subscribedWebSockets=1;
          }
          if (response.action=='commands') {
           console.log('Commands: '+response.data);
           sendRequestForUpdates_processed(0, response.data);
          }
        });


 function upateDebugField() {
  if (!$('#debugField').length) return;
  var timeUnix = Math.round(+new Date()/1000);
  var passed=timeUnix-requestSent;
  $('#debugField').html('Labels: '+labelsCollected+' (last sent: '+labelsCollected_sent+')<br/>Values: '+valuesCollected+' (last sent: '+valuesCollected_sent+')<br/>Passed: '+passed);
 }

 function sendRequestForUpdates_processed(id, data)
 {
   var obj = jQuery.parseJSON(data);
   var objLabelsCnt  = obj.LABELS.length;
   var objValuesCnt = obj.VALUES.length;


   if (objLabelsCnt > 0) {
    var labels=obj.LABELS;
    for (var i = 0; i < objLabelsCnt; i++) {
     try {
       window["updateLabel"+labels[i].ID+"_Ready"](labels[i].ID, JSON.stringify(labels[i]));
     }
     catch(err) {
        // Handle error(s) here
     }
    }
  }
   if (objValuesCnt > 0) {
    var values=obj.VALUES;
    for (var i = 0; i < objValuesCnt; i++) {
     //alert("updateValue"+values[i].ID+"_Ready ("+i+" of "+values.length+")");
     try {
       window["updateValue"+values[i].ID+"_Ready"](values[i].ID, JSON.stringify(values[i]));
     }
     catch(err) {
        // Handle error(s) here
     }
    }
  }
  requestProcessing=0;
 }

 function sendRequestForUpdates() {
  clearTimeout(requestTimer);
  if (requestProcessing==1) {
   requestTimer=setTimeout('sendRequestForUpdates()', requestDelay*1000);
  }
  requestSent = Math.round(+new Date()/1000);

  if (subscribedWebSockets==1) {
   labelsCollected='';
   valuesCollected='';
   if (first_run!=1) return;
  }

  first_run=0;
  if (labelsCollected!='' || valuesCollected!='') {
   var url="<?php echo @constant('ROOTHTML');?>
ajax/commands.html?op=get_details&labels="+encodeURIComponent(labelsCollected)+"&values="+encodeURIComponent(valuesCollected);
   AJAXRequest(url, 'sendRequestForUpdates_processed', '');
  }

  labelsCollected_sent=labelsCollected;
  labelsCollected='';
  valuesCollected_sent=valuesCollected;
  valuesCollected='';
  upateDebugField();


 }

 function collectLabel(item_id) {
  var timeUnix = Math.round(+new Date()/1000);
  labelsCollected=labelsCollected+','+item_id+',';
  labelsCollected=labelsCollected.replace(',,', ',');
  upateDebugField();
  if ((timeUnix-requestSent)>requestDelay) {
   sendRequestForUpdates();
  } else {
   clearTimeout(requestTimer);
   requestTimer=setTimeout('sendRequestForUpdates()', requestDelay*1000);
  }
 }

 function collectValue(item_id) {
  var timeUnix = Math.round(+new Date()/1000);
  valuesCollected=valuesCollected+','+item_id+',';
  valuesCollected=valuesCollected.replace(',,', ',');
  upateDebugField();
  if ((timeUnix-requestSent)>requestDelay) {
   sendRequestForUpdates();
  } else {
   clearTimeout(requestTimer);
   requestTimer=setTimeout('sendRequestForUpdates()', requestDelay*1000);
  }
 }


 function menuClicked(id, parent_id, sub_list, win, winTitle, command, url, width, height) {

  if (sub_list!=id) {
   //$('sub'+parent_id).style.display='none';
   if ($('sub'+id).style.display=='none') {
    //$('sub'+id).style.display='block';
    Effect.BlindDown('sub'+id, { duration: 0.5 });
   } else {
    //Effect.SwitchOff('sub'+id');
    Effect.BlindUp('sub'+id, { duration: 0.5 });
    //$('sub'+id).style.display='none';
   }
  } else {

  if (parent.location == window.location) {
   if (url!='') {
    window.location=url;
    //openTWindow(win, winTitle, url, width, height);
   }
  } else {
   //command


   var location_string=parent.location.href;

   if ((/popup\/scenes/.test(location_string)) || (/pages\.html/.test(location_string))) {
    window.location=url;
    return false;
   }


   if (command!='') {
    //alert(command);
    parent.eval(command);
   }
   if (url!='') {
    if (width==0 && height==0) {
     parent.openNewTab(winTitle, url);
    } else {
     parent.openTWindow(win, winTitle, url, width, height);
    }
   }

  }

  }
  return false;
 }

 function itemValueChangedProcessed(data, v) {
  //alert(data);
  if ($('#processing_'+data).length) {
   $('#processing_'+data).html('<span class="opConfirm"> - OK</span>');
   setTimeout("$('#processing_"+data+"').html('')",1500);
  }
  return false;
 }

 function itemValueChanged(id, new_value) {
  //alert(id+': '+new_value);
  valuesCollected=valuesCollected.replace(','+id+',', ',');
  var url="<?php echo @constant('ROOTHTML');?>
ajax/commands.html?op=value_changed";
  if ($('#processing_'+id).length) {
   $('#processing_'+id).html(' - ...');
  }
  AJAXRequest(url+'&item_id='+id+'&new_value='+encodeURIComponent(new_value), 'itemValueChangedProcessed', id);
  return false;
 }

<?php echo '</script'; ?>
>
<?php }?>



        <div id="home" class="current">
<?php if ($_smarty_tpl->tpl_vars['ONE_ITEM_MODE']->value != '1') {
if ($_smarty_tpl->tpl_vars['PARENT_TITLE']->value != '') {?>
            <div data-role="header"<?php if (@constant('SETTINGS_THEME') == "dark") {?> data-theme="b"<?php }?>>
<?php if ($_smarty_tpl->tpl_vars['IFRAME_MODE']->value == '') {?>
                <h1 id="label_<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['PARENT_TITLE']->value != '') {
echo $_smarty_tpl->tpl_vars['PARENT_TITLE']->value;
} else { ?>MajorDoMo<?php }?></h1>
                <?php if ($_smarty_tpl->tpl_vars['PARENT_ID']->value != '') {?>
                <a class="back" href="<?php if ($_smarty_tpl->tpl_vars['PARENT_PARENT_ID']->value != '0') {
echo @constant('ROOTHTML');?>
menu/<?php echo $_smarty_tpl->tpl_vars['PARENT_PARENT_ID']->value;
} else {
echo @constant('ROOTHTML');?>
menu<?php }?>.html"><?php echo @constant('LANG_BACK');?>
</a>
                <?php }?>
                
<?php }?>
            </div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['PARENT_ID']->value != '') {
if ($_smarty_tpl->tpl_vars['PARENT_AUTO_UPDATE']->value != '0') {
echo '<script'; ?>
 language="javascript">
 var label<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
_timer;
 function updateLabel<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
_Ready(id, data) {
  var elem=document.getElementById('label_<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
');
  var obj=jQuery.parseJSON(data);
  if (obj.DATA!='') {
   elem.innerHTML=obj.DATA;
  }
  return false;
 }
 function updateLabel<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
() {
  clearTimeout(label<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
_timer);
  var url="<?php echo @constant('ROOTHTML');?>
ajax/commands.html?op=get_label";
  AJAXRequest(url+'&item_id=<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
', 'updateLabel<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
_Ready', '');
  label<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
_timer=setTimeout('updateLabel<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
()', (<?php echo $_smarty_tpl->tpl_vars['PARENT_AUTO_UPDATE']->value;?>
*1000));
  return false;
 }
 label<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
_timer=setTimeout('updateLabel<?php echo $_smarty_tpl->tpl_vars['PARENT_ID']->value;?>
()', (<?php echo $_smarty_tpl->tpl_vars['PARENT_AUTO_UPDATE']->value;?>
*1000));
<?php echo '</script'; ?>
>
<?php }
}?>

<?php }?>

<div data-role="content"<?php if ($_smarty_tpl->tpl_vars['FROM_SCENE']->value == 1) {?> style='margin:0px;padding:0px;'<?php }?>>




<?php if ($_smarty_tpl->tpl_vars['RESULT']->value) {?>

<!-- search results (list) -->
<?php if ($_smarty_tpl->tpl_vars['ONE_ITEM_MODE']->value != '1') {?>
<ul data-role="listview" data-inset="true">
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['RESULT_HTML']->value != '') {
echo $_smarty_tpl->tpl_vars['RESULT_HTML']->value;
}?>



<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('items'=>$_smarty_tpl->tpl_vars['RESULT']->value), false);?>


<?php if ($_smarty_tpl->tpl_vars['ONE_ITEM_MODE']->value != '1') {?></ul><?php }?>

<!-- / search results (list) -->
<?php } else { ?>
<p>
<font color="red"><?php echo @constant('LANG_NO_RECORDS_FOUND');?>
</font>
</p>
<?php }?>

</div>

<?php if ($_smarty_tpl->tpl_vars['VISIBLE_DELAYS']->value) {
echo '<script'; ?>
 language="javascript">
 var vd_timer;
 var currentItem=0;
 var currentNum=0;
 function visible_delay_carusel() {
  clearTimeout(vd_timer);
  var delay=10000;
  var i=0;

  if (currentItem!=0) {
   $('#item'+currentItem).hide();
  }
  <?php
$_from = $_smarty_tpl->tpl_vars['RESULT']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_5_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_5_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
   <?php if ($_smarty_tpl->tpl_vars['i']->value['VISIBLE_DELAY'] != '0') {?>
    if (currentNum==i) {
     currentItem=<?php echo $_smarty_tpl->tpl_vars['i']->value['ID'];?>
;
     delay=<?php echo $_smarty_tpl->tpl_vars['i']->value['VISIBLE_DELAY'];?>
*1000;
    }
    i++;
   <?php }?>
  <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_5_saved_local_item;
}
if ($__foreach_i_5_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_5_saved_item;
}
?>

  currentNum++;
  if (currentNum>=<?php echo $_smarty_tpl->tpl_vars['item']->value['VISIBLE_DELAYS'];?>
) {
   currentNum=0;
  }
  if (currentItem!=0) {
   $('#item'+currentItem).show();
  }
  vd_timer=setTimeout('visible_delay_carusel();', delay)
  return false;
 }

 $( document ).bind( "pageinit", function( event, data ){
    $('.visible_delay').hide();
    visible_delay_carusel();
});
<?php echo '</script'; ?>
>
<?php }?>

<?php }
/* smarty_template_function_menu_3918010715a1674fae1f068_20915530 */
if (!function_exists('smarty_template_function_menu_3918010715a1674fae1f068_20915530')) {
function smarty_template_function_menu_3918010715a1674fae1f068_20915530($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}?>

<?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
if ($_smarty_tpl->tpl_vars['item']->value['SUB_PRELOAD'] == '1') {?>

 <div data-role="collapsible" data-iconpos="right">
  <h2><span  id="label_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"><?php if ($_smarty_tpl->tpl_vars['item']->value['ICON'] != '') {?><img src="<?php echo @constant('ROOTHTML');?>
cms/icons/<?php echo $_smarty_tpl->tpl_vars['item']->value['ICON'];?>
" alt="" style="margin-right:10px;top:0.4em;max-height:32px;max-width:32px;height:32px;width:32px;vertical-align:middle;"><?php }
echo $_smarty_tpl->tpl_vars['item']->value['TITLE'];?>
</span></h2>
  <ul data-role="listview" data-inset="true">
  <?php if ($_smarty_tpl->tpl_vars['item']->value['RESULT']) {?>
  <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('items'=>$_smarty_tpl->tpl_vars['item']->value['RESULT']), false);?>

  <?php }?>
  </ul>
 </div>
<?php } else {
if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == '' || $_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'command' || $_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'window' || $_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'url') {?>
<li<?php if ($_smarty_tpl->tpl_vars['item']->value['VISIBLE_DELAY'] != '0') {?> class='visible_delay'<?php }?> id='item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
'>
<a
 <?php if (!$_smarty_tpl->tpl_vars['item']->value['RESULT_TOTAL']) {?>
 href="#" 
 onClick="return menuClicked('<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
', '<?php echo $_smarty_tpl->tpl_vars['item']->value['PARENT_ID'];?>
', '<?php echo $_smarty_tpl->tpl_vars['item']->value['SUB_LIST'];?>
', '<?php echo $_smarty_tpl->tpl_vars['item']->value['WINDOW'];?>
', '<?php echo $_smarty_tpl->tpl_vars['item']->value['TITLE_SAFE'];?>
', '<?php echo $_smarty_tpl->tpl_vars['item']->value['COMMAND'];?>
', '<?php echo $_smarty_tpl->tpl_vars['item']->value['URL'];?>
'<?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'window') {?>, '<?php echo $_smarty_tpl->tpl_vars['item']->value['WIDTH'];?>
', '<?php echo $_smarty_tpl->tpl_vars['item']->value['HEIGHT'];?>
'<?php } else { ?>,0,0<?php }?>);"
 <?php } else { ?>
 href="<?php echo @constant('ROOTHTML');?>
menu/<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
.html"
 <?php }?>
 <?php if ($_smarty_tpl->tpl_vars['item']->value['SUB_PRELOAD'] == '1') {?> onClick="$('#sublist<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
').toggle();return false;"<?php }?>
>
<?php if ($_smarty_tpl->tpl_vars['item']->value['ICON'] != '') {?><img src="<?php echo @constant('ROOTHTML');?>
cms/icons/<?php echo $_smarty_tpl->tpl_vars['item']->value['ICON'];?>
" alt="" class="ui-li-icon" style="left:4px;top:0.4em;max-height:32px;max-width:32px;height:32px;width:32px;"><?php }?>
<span id="label_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['TITLE'];?>
</span></a>
</li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'urlblank') {?>
<li<?php if ($_smarty_tpl->tpl_vars['item']->value['VISIBLE_DELAY'] != '0') {?> class='visible_delay'<?php }?> id='item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
'>
<a
 <?php if (!$_smarty_tpl->tpl_vars['item']->value['RESULT_TOTAL']) {?>
 href="<?php echo $_smarty_tpl->tpl_vars['item']->value['URL'];?>
" target=_blank
 <?php } else { ?>
 href="<?php echo @constant('ROOTHTML');?>
menu/<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
.html"
 <?php }?>
>
<?php if ($_smarty_tpl->tpl_vars['item']->value['ICON'] != '') {?><img src="<?php echo @constant('ROOTHTML');?>
cms/icons/<?php echo $_smarty_tpl->tpl_vars['item']->value['ICON'];?>
" alt="" class="ui-li-icon" style="left:4px;top:0.4em;max-height:32px;max-width:32px;height:32px;width:32px;"><?php }?>
<span id="label_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['TITLE'];?>
</span></a>
</li>

<?php }?>

<?php }?>




<?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'switch') {?>
<li data-role="fieldcontain"<?php if ($_smarty_tpl->tpl_vars['item']->value['VISIBLE_DELAY'] != '0') {?>  class='visible_delay'<?php }?> id='item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
'>

<?php echo '<script'; ?>
 language="javascript">
 var item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer=0;
 function changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
() {
  if (valueChangedFlag['item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
']==1) {
   valueChangedFlag['item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
']=0;
   return;
  }
  var elem=document.getElementById('menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v');
  itemValueChanged("<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
", elem.value);
  return false;
 }
<?php echo '</script'; ?>
>


        <label for="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v"><span id="label_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['TITLE'];?>
</span><span id="processing_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"></span></label>
        <select name="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v" id="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v" data-role="slider"  onChange="changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
();">
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['OFF_VALUE'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['CUR_VALUE'] != $_smarty_tpl->tpl_vars['item']->value['ON_VALUE']) {?> selected<?php }?>><?php echo @constant('LANG_OFF');?>
</option>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ON_VALUE'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['CUR_VALUE'] == $_smarty_tpl->tpl_vars['item']->value['ON_VALUE']) {?> selected<?php }?>><?php echo @constant('LANG_ON');?>
</option>
        </select> 
</li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'custom') {?>
<li <?php if ($_smarty_tpl->tpl_vars['item']->value['VISIBLE_DELAY'] != '0') {?>  class='visible_delay'<?php }?> id='item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
'>
<div id="label_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
" style="white-space:normal"><?php echo $_smarty_tpl->tpl_vars['item']->value['DATA'];?>
</div>
</li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'object') {?>
 <li <?php if ($_smarty_tpl->tpl_vars['item']->value['VISIBLE_DELAY'] != '0') {?>  class='visible_delay'<?php }?> id='item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
'>
  <div id="label_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
" style="white-space:normal"><?php echo $_smarty_tpl->tpl_vars['item']->value['DATA'];?>
</div>
 </li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'selectbox') {
echo '<script'; ?>
 language="javascript">
 var item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer=0;
 function changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
() {
  if (valueChangedFlag['item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
']==1) {
   valueChangedFlag['item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
']=0;
   return;
  }
  var elem=document.getElementById('menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v');
  itemValueChanged("<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
", elem.value);
  return false;
 }
<?php echo '</script'; ?>
>
<li data-role="fieldcontain"<?php if ($_smarty_tpl->tpl_vars['item']->value['VISIBLE_DELAY'] != '0') {?>  class='visible_delay'<?php }?> id='item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
'>
<label for="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v" class="select"><span id="label_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['TITLE'];?>
</span><span id="processing_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"></span></label>

<select name="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v" id="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v" onChange="changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
();">
 <?php
$_from = $_smarty_tpl->tpl_vars['item']->value['OPTIONS'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_1_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_1_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
 <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['VALUE'];?>
"<?php if ($_smarty_tpl->tpl_vars['i']->value['SELECTED']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['TITLE'];?>

 <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_1_saved_local_item;
}
if ($__foreach_i_1_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_1_saved_item;
}
?>
</select>
</li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'radiobox') {
echo '<script'; ?>
 language="javascript">
 var item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer=0;
 function changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
(new_value) {
  if (valueChangedFlag['item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
']==1) {
   valueChangedFlag['item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
']=0;
   return;
  }
  //var elem=document.getElementById('menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v');
  itemValueChanged("<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
", new_value);
  return false;
 }
<?php echo '</script'; ?>
>
<li data-role="fieldcontain"<?php if ($_smarty_tpl->tpl_vars['item']->value['VISIBLE_DELAY'] != '0') {?>  class='visible_delay'<?php }?> id='item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
'>
<label for="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v" class="select"><span id="label_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['TITLE'];?>
</span><span id="processing_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"></span></label>


    <fieldset data-role="controlgroup" data-type="horizontal">
     <?php
$_from = $_smarty_tpl->tpl_vars['item']->value['OPTIONS'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_2_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_2_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
     <input type="radio" name="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v" class="radiobox<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
" id="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v_<?php echo $_smarty_tpl->tpl_vars['i']->value['NUM'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['VALUE'];?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value['SELECTED']) {?>checked="checked"<?php }?>  onClick="changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
('<?php echo $_smarty_tpl->tpl_vars['i']->value['VALUE'];?>
');"/>
     <label for="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v_<?php echo $_smarty_tpl->tpl_vars['i']->value['NUM'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['TITLE'];?>
</label>
      <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_2_saved_local_item;
}
if ($__foreach_i_2_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_2_saved_item;
}
?>
    </fieldset>


</li>
<?php }?>



<?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'timebox') {
echo '<script'; ?>
 language="javascript">
 var item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer=0;
 function changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
() {
  if (valueChangedFlag['item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
']==1) {
   valueChangedFlag['item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
']=0;
   return;
  }
  clearTimeout(item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer);
  var elem1=document.getElementById('menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v1');
  var elem2=document.getElementById('menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v2');
  item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer=setTimeout('itemValueChanged("<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
", "'+elem1.value+':'+elem2.value+'")', 500);
  return false;
 }
<?php echo '</script'; ?>
>
<li data-role="fieldcontain"<?php if ($_smarty_tpl->tpl_vars['item']->value['VISIBLE_DELAY'] != '0') {?>  class='visible_delay'<?php }?> id='item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
'>
<label for="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v" class="select"><span id="label_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['TITLE'];?>
</span><span id="processing_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"></span></label>
<fieldset data-role="controlgroup" data-type="horizontal"> 
<select name="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v1" id="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v1" onChange="changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
();">
 <?php
$_from = $_smarty_tpl->tpl_vars['item']->value['OPTIONS1'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_3_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_3_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
  <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['VALUE'];?>
"<?php if ($_smarty_tpl->tpl_vars['i']->value['SELECTED'] == '1') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['VALUE'];?>

 <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_3_saved_local_item;
}
if ($__foreach_i_3_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_3_saved_item;
}
?>
</select>
<select name="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v2" id="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v2" onChange="changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
();">
 <?php
$_from = $_smarty_tpl->tpl_vars['item']->value['OPTIONS2'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_4_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_4_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
 <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['VALUE'];?>
"<?php if ($_smarty_tpl->tpl_vars['i']->value['SELECTED'] == '1') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['VALUE'];?>

 <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_4_saved_local_item;
}
if ($__foreach_i_4_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_4_saved_item;
}
?>
</select>
</fieldset>
</li>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'datebox') {
echo '<script'; ?>
 language="javascript">
 var item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer=0;
 function changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_delay() {
  clearTimeout(item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer);
  var elem=document.getElementById('menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v');
  item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer=setTimeout('itemValueChanged("<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
", "'+elem.value+'")', 500);
  return false;
 }
<?php echo '</script'; ?>
>
<li data-role="fieldcontain"<?php if ($_smarty_tpl->tpl_vars['item']->value['VISIBLE_DELAY'] != '0') {?>  class='visible_delay'<?php }?> id='item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
'>
<span id="label_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['TITLE'];?>
</span><span id="processing_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"></span>

<div data-inline="true" data-role="fieldcontain">
 <input type="date" id="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v" name="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_value" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['CUR_VALUE'];?>
" data-inline="true" onChange="changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_delay()" onKeyUp="changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_delay();">
</div>
</li>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'plusminus') {
echo '<script'; ?>
 language="javascript">
 var item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer=0;
 function increaseValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
() {
  var elem=document.getElementById('menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v');
  var elem2=document.getElementById('menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_vv');
  var v=parseFloat(elem.value);
  if ((v+<?php echo $_smarty_tpl->tpl_vars['item']->value['STEP_VALUE'];?>
)<=<?php echo $_smarty_tpl->tpl_vars['item']->value['MAX_VALUE'];?>
) {
   var resultV = v+<?php echo $_smarty_tpl->tpl_vars['item']->value['STEP_VALUE'];?>
;
   elem.value = parseFloat(resultV.toFixed(4));
   elem2.innerHTML=elem.value;
   clearTimeout(item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer);
   item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer=setTimeout('itemValueChanged("<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
", "'+elem.value+'")', 500);
  }
  return false;
 }
 function decreaseValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
() {
  var elem=document.getElementById('menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v');
  var elem2=document.getElementById('menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_vv');
  var v=parseFloat(elem.value);
  if ((v-<?php echo $_smarty_tpl->tpl_vars['item']->value['STEP_VALUE'];?>
)>=<?php echo $_smarty_tpl->tpl_vars['item']->value['MIN_VALUE'];?>
) {
   var resultV = v-<?php echo $_smarty_tpl->tpl_vars['item']->value['STEP_VALUE'];?>
;
   elem.value = parseFloat(resultV.toFixed(4));
   elem2.innerHTML=elem.value;
   clearTimeout(item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer);
   item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer=setTimeout('itemValueChanged("<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
", "'+elem.value+'")', 500);
  }
  return false;
 }
<?php echo '</script'; ?>
>
<li data-role="fieldcontain"<?php if ($_smarty_tpl->tpl_vars['item']->value['VISIBLE_DELAY'] != '0') {?>  class='visible_delay'<?php }?> id='item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
'>
<span id="label_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['TITLE'];?>
</span><span id="processing_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"></span>

<div data-inline="true" data-role="fieldcontain">
 <a href="#" data-role="button" onClick="return decreaseValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
();" data-inline="true">-</a>
 <span style="margin-left:10px;margin-right:10px" id="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_vv"><?php echo $_smarty_tpl->tpl_vars['item']->value['CUR_VALUE'];?>
</span>
 <a href="#" data-role="button" onClick="return increaseValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
();" data-inline="true">+</a>
 <div style="display:none">
 <input type="text" id="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v" name="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_value" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['CUR_VALUE'];?>
" size="5">
 </div>
</div>
</li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'sliderbox') {
echo '<script'; ?>
 language="javascript">
 var item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer=0;
 function changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
() {
  if (valueChangedFlag['item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
']==1) {
   valueChangedFlag['item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
']=0;
   return;
  }
  clearTimeout(item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer);
  var elem=document.getElementById('menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v');
  item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer=setTimeout('itemValueChanged("<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
", "'+elem.value+'")', 500);
  return false;
 }
<?php echo '</script'; ?>
>
<li data-role="fieldcontain"<?php if ($_smarty_tpl->tpl_vars['item']->value['VISIBLE_DELAY'] != '0') {?>  class='visible_delay'<?php }?> id='item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
'>
<span id="label_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['TITLE'];?>
</span><span id="processing_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"></span>

<div data-inline="true" data-role="fieldcontain">
 <input type="range" id="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v" data-inline="true" name="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_value" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['CUR_VALUE'];?>
" min="<?php echo $_smarty_tpl->tpl_vars['item']->value['MIN_VALUE'];?>
" max="<?php echo $_smarty_tpl->tpl_vars['item']->value['MAX_VALUE'];?>
" step="<?php echo $_smarty_tpl->tpl_vars['item']->value['STEP_VALUE'];?>
"  onChange="changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
();"/>
</div>
</li>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'textbox') {
echo '<script'; ?>
 language="javascript">
 var item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer=0;
 function changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_delay() {
  clearTimeout(item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer);
  var elem=document.getElementById('menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v');
  item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer=setTimeout('itemValueChanged("<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
", "'+elem.value+'")', 500);
  return false;
 }
<?php echo '</script'; ?>
>
<li data-role="fieldcontain"<?php if ($_smarty_tpl->tpl_vars['item']->value['VISIBLE_DELAY'] != '0') {?>  class='visible_delay'<?php }?> id='item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
'>
<span id="label_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['TITLE'];?>
</span><span id="processing_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"></span>

<div data-inline="true" data-role="fieldcontain">
 <input type="text" id="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v" name="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_value" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['CUR_VALUE'];?>
" data-inline="true" onChange="changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_delay()" onKeyUp="changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_delay();">
</div>
</li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'color') {
echo '<script'; ?>
 src='<?php echo @constant('ROOTHTML');?>
js/spectrum/spectrum.min.js'><?php echo '</script'; ?>
>
<link rel='stylesheet' href='<?php echo @constant('ROOTHTML');?>
js/spectrum/spectrum.min.css' />
<?php echo '<script'; ?>
 language="javascript">
 var item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer=0;
 function changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_delay() {
  clearTimeout(item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer);
  var elem=document.getElementById('menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v');
  item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer=setTimeout('itemValueChanged("<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
", "'+elem.value+'")', 500);
  return false;
 }
<?php echo '</script'; ?>
>
<li data-role="fieldcontain"<?php if ($_smarty_tpl->tpl_vars['item']->value['VISIBLE_DELAY'] != '0') {?>  class='visible_delay'<?php }?> id='item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
'>
<span id="label_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['TITLE'];?>
</span><span id="processing_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"></span>

<div data-inline="true" data-role="fieldcontain">
 <input type="text" id="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v" name="menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_value" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['CUR_VALUE'];?>
" data-inline="true" onChange="changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_delay()" onKeyUp="changedValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_delay();">
</div>
</li>
<?php echo '<script'; ?>
>
 $("#menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v").spectrum({
  preferredFormat: "hex",
  showInput: true,
  chooseText: "OK",
  cancelText: "<?php echo @constant('LANG_CANCEL');?>
"
 });
<?php echo '</script'; ?>
>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'label') {?>
<li data-role="list-divider"<?php if ($_smarty_tpl->tpl_vars['item']->value['VISIBLE_DELAY'] != '0') {?>  class='visible_delay'<?php }?> id='item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
'>

<span id="label_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['TITLE'];?>
</span>
</li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'button') {?>
<a href="#" onClick="return itemValueChanged('<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
', 'clicked');" data-role="button" <?php if ($_smarty_tpl->tpl_vars['item']->value['INLINE'] == '1') {?>data-inline="true"<?php }?>><span id="label_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['TITLE'];?>
</span><span id="processing_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"></span></a>

<?php }?>


<?php echo '<script'; ?>
 language="javascript">
  valueChangedFlag['item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
']=0;
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['item']->value['AUTO_UPDATE'] != '0') {
echo '<script'; ?>
 language="javascript">
 var label<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer;
 function updateLabel<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_Ready(id, data) {
  var elem=document.getElementById('label_<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
');
  var obj=jQuery.parseJSON(data);
  if (obj.DATA!='') {
   elem.innerHTML=obj.DATA;
  }
  return false;
 }

 function updateValue<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_Ready(id, data) {

 var obj=jQuery.parseJSON(data);
 if (typeof obj.DATA != 'undefined') {
  data=obj.DATA;
  <?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'textbox') {?>
   if ($('#menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v').val()!=data) {
    $('#menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v').val(data);
   }
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'color') {?>
   if ($('#menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v').val()!=data) {
    $("#menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v").spectrum("set", data);
   }
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'selectbox') {?>
   if ($('#menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v').val()!=data) {
    $('#menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v').val(data);
    $('#menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v').selectmenu("refresh");
   }
  <?php }?>


  <?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'plusminus') {?>
  $('#menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_vv').html(data);
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'radiobox') {?>
   var $selected = $('.radiobox<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
:checked');
   if (!$selected.length || $selected.val()!=data) {
    //alert('zz');
    //$selected.attr('checked', false).checkboxradio("refresh");
    $( ".radiobox<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
" ).each(function( index ) {
     if ($( this ).val()!=data) {
      //alert('not found: '+$( this ).val()+' != '+data)
      $( this ).prop('checked', false).checkboxradio("refresh");
     } else {
      //alert('found: '+$( this ).val())
      $( this ).prop('checked', true).checkboxradio("refresh");
     }
    });
    //$(".radiobox<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
").checkboxradio("refresh");
    //$(".radiobox<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
:first").attr("checked",true).checkboxradio("refresh");
   }
   /*
   if ($('#menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v').val()!=data) {
    $('#menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v').val(data);
   }
   */
  <?php }?>


  <?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'switch') {?>
   //alert('<?php echo $_smarty_tpl->tpl_vars['item']->value['TITLE'];?>
'+"\nValue:"+$('#menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v').val()+"\nData:"+data);
   if ($('#menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v').val()!=data) {
    if (data=='<?php echo $_smarty_tpl->tpl_vars['item']->value['ON_VALUE'];?>
') {
     $('#menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v').val('<?php echo $_smarty_tpl->tpl_vars['item']->value['ON_VALUE'];?>
');
    } else {
     $('#menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v').val('<?php echo $_smarty_tpl->tpl_vars['item']->value['OFF_VALUE'];?>
');
    }
    $('#menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v').slider('refresh');
   }
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'sliderbox') {?>
   if ($('#menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v').val()!=data) {
    $('#menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v').val(data);
    valueChangedFlag['item<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
']=1;
    $('#menu<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_v').slider('refresh');
   }
  <?php }?>
  }
  return false;
 }


 function updateLabel<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
() {
  clearTimeout(label<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer);
  collectLabel('<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
');
  <?php if ($_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'switch' || $_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'textbox' || $_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'sliderbox' || $_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'selectbox' || $_smarty_tpl->tpl_vars['item']->value['TYPE'] == 'radiobox') {?>
  collectValue('<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
');
  <?php }?>
  label<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer=setTimeout('updateLabel<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
()', (<?php echo $_smarty_tpl->tpl_vars['item']->value['AUTO_UPDATE'];?>
*1000));
  return false;
 }
 label<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
_timer=setTimeout('updateLabel<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
()', (<?php echo $_smarty_tpl->tpl_vars['item']->value['AUTO_UPDATE'];?>
*1000));
<?php echo '</script'; ?>
>
<?php }?>

<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
foreach (Smarty::$global_tpl_vars as $key => $value){
if (!isset($_smarty_tpl->tpl_vars[$key]) || $_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_menu_3918010715a1674fae1f068_20915530 */
}
