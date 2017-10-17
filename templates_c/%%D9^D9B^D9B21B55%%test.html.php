<?php /* Smarty version 2.6.25-dev, created on 2017-07-18 14:02:54
         compiled from test.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'md5', 'test.html', 11, false),)), $this); ?>
<!DOCTYPE html>   
<html>   
<head>   
<meta charset="utf-8">   
<title><?php echo $this->_tpl_vars['test']['title']; ?>
</title>  
  
<style type="text/css">   
</style>   
</head>   
<body>   
<?php echo ((is_array($_tmp=$this->_tpl_vars['test']['num'])) ? $this->_run_mod_handler('md5', true, $_tmp) : md5($_tmp)); ?>
   
<br>   
<?php echo $this->_tpl_vars['tmp']; ?>
   
</body>   
</html>  