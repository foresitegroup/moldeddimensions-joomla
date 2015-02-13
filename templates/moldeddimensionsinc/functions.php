<?php defined( '_JEXEC' ) or die( 'Restricted access' );

class Joomla_Template {
	var $template = '';
	var $config = '';
	var $menuitem = '';

	function Joomla_Template ($template) {
		$this->template = $template->template;
		$this->config = new JConfig();
		$this->menuitem = &JSite::getMenu();
	}

	function sitename() {
		return $this->config->sitename;
	}

	function base_url() {
		return JURI::base();
	}

	function template_url() {
		return JURI::base()."templates/".$this->template;
	}

	function is_home() {
		if ($this->menuitem->getActive() == $this->menuitem->getDefault()) return true;
		return false;
	}

	function is_front_page() {
		return (JRequest::getCmd( 'view' ) == 'featured') ;
	}
	function countModules($position) {
  $document = JFactory::getDocument();
  $renderer = $document->loadRenderer('module');
  $modules = JModuleHelper::getModules($position);
  
  return is_array($modules) ? count($modules) : 0;
 }
 
 function loadPosition($position, $style = 'none') {
  $document = JFactory::getDocument();
  $renderer = $document->loadRenderer('module');
  $modules = JModuleHelper::getModules($position);
  $params  = array('style' => $style);
  
  foreach ($modules as $module) {
   echo $renderer->render($module, $params);
  }
 }

}


?>