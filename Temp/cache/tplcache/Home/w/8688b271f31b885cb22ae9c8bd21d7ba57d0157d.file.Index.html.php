<?php /* Smarty version Smarty-3.1.13, created on 2015-10-13 00:59:45
         compiled from "/home/ftp/w/wsunxa/wwwroot/template/w/Index.html" */ ?>
<?php /*%%SmartyHeaderCode:334047541561be70187c361-63563247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8688b271f31b885cb22ae9c8bd21d7ba57d0157d' => 
    array (
      0 => '/home/ftp/w/wsunxa/wwwroot/template/w/Index.html',
      1 => 1444509162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '334047541561be70187c361-63563247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_name' => 0,
    'web_seo_name' => 0,
    'web_keywords' => 0,
    'web_description' => 0,
    'theme_path' => 0,
    'vo' => 0,
    'flag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_561be701b08212_57222094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561be701b08212_57222094')) {function content_561be701b08212_57222094($_smarty_tpl) {?><?php if (!is_callable('smarty_block_loop')) include '/home/ftp/w/wsunxa/wwwroot/core/txtcms/libs/template/plugins/block.loop.php';
if (!is_callable('smarty_modifier_date')) include '/home/ftp/w/wsunxa/wwwroot/core/txtcms/libs/template/plugins/modifier.date.php';
if (!is_callable('smarty_block_channel')) include '/home/ftp/w/wsunxa/wwwroot/core/txtcms/libs/template/plugins/block.channel.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php echo $_smarty_tpl->tpl_vars['web_name']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['web_seo_name']->value;?>
</title>
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['web_keywords']->value;?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['web_description']->value;?>
" />
	<link rel="stylesheet" rev="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/style/style.css" type="text/css" media="all"/>
</head>

<body>
<div id="w980">
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="lieb">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('table'=>"article",'row'=>'20','orderby'=>"order desc,id desc")); $_block_repeat=true; echo smarty_block_loop(array('table'=>"article",'row'=>'20','orderby'=>"order desc,id desc"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<dl>
		<dt><?php if (!empty($_smarty_tpl->tpl_vars['vo']->value['flag'])){?>
			<?php  $_smarty_tpl->tpl_vars['flag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vo']->value['flag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->key => $_smarty_tpl->tpl_vars['flag']->value){
$_smarty_tpl->tpl_vars['flag']->_loop = true;
?>
				<i class="icon flag_<?php echo $_smarty_tpl->tpl_vars['flag']->value['en'];?>
"><?php echo $_smarty_tpl->tpl_vars['flag']->value['cn'];?>
</i>
			<?php } ?>
		<?php }?><h2><a href="<?php echo $_smarty_tpl->tpl_vars['vo']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
</a></h2></dt>
		<dd><p><?php echo $_smarty_tpl->tpl_vars['vo']->value['description'];?>
</p>
		<p class="tags"> 栏目：<a href="<?php echo $_smarty_tpl->tpl_vars['vo']->value['curl'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['cname'];?>
</a>&nbsp;&nbsp;&nbsp;发布时间：<?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['vo']->value['addtime'],'Y-m-d H:i');?>
</p>
		</dd>
		<div class="clear"></div>
	</dl>              
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('table'=>"article",'row'=>'20','orderby'=>"order desc,id desc"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

  <dl class="pagebar"></dl>
</div></div>

<div id="rigth"><dl id="ss"><form name="search" method="post" action="<?php echo url('Home/Article/search');?>
"><input type="text" name="q" size="11" id="search-keyword" /> <input type="submit" value="搜索"  class="search-submit"/></form><div class="clear"></div></dl>
 
<dl class="function" id="divCalendar">
<dt style="display:none;"></dt><dd class="function_c">

<div></div>


</dd>
</dl> 
<dl class="function" id="divCatalog">
<dt class="function_t">网站分类</dt>
	<dd class="function_c">
		<ul>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('channel', array('row'=>"20")); $_block_repeat=true; echo smarty_block_channel(array('row'=>"20"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li><a href="<?php echo $_smarty_tpl->tpl_vars['vo']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['cname'];?>
</a></li>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_channel(array('row'=>"20"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</ul>
	</dd>
</dl> 
<dl class="function" id="divArchives">
<dt class="function_t">最新文章</dt><dd class="function_c">
	<ul>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('table'=>"article",'row'=>'5','orderby'=>"id desc")); $_block_repeat=true; echo smarty_block_loop(array('table'=>"article",'row'=>'5','orderby'=>"id desc"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li><a title="<?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['vo']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['vo']->value['style']){?> style="<?php echo $_smarty_tpl->tpl_vars['vo']->value['style'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
</a></li>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('table'=>"article",'row'=>'5','orderby'=>"id desc"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</ul>
</dd>
</dl> 

<dl class="function" id="divArchives">
<dt class="function_t">随机文章</dt><dd class="function_c">
	<ul>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('table'=>"article",'row'=>'5','orderby'=>"rand")); $_block_repeat=true; echo smarty_block_loop(array('table'=>"article",'row'=>'5','orderby'=>"rand"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li><a title="<?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['vo']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['vo']->value['style']){?> style="<?php echo $_smarty_tpl->tpl_vars['vo']->value['style'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
</a></li>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('table'=>"article",'row'=>'5','orderby'=>"rand"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</ul>
</dd>
</dl>
</div>

<div class="clear"></div>
<div id="links"><ul><li><strong>友情链接</strong>：</li>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('table'=>"flink",'row'=>'20')); $_block_repeat=true; echo smarty_block_loop(array('table'=>"flink",'row'=>'20'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<li><a title="<?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['vo']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['vo']->value['style']){?> style="<?php echo $_smarty_tpl->tpl_vars['vo']->value['style'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
</a></li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('table'=>"flink",'row'=>'20'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="clear"></div></ul></div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>