<?php


function plugin_init_dashboard() {

   global $PLUGIN_HOOKS, $LANG ;
	
	$PLUGIN_HOOKS['csrf_compliant']['dashboard'] = true;
	
   Plugin::registerClass('PluginDashboardConfig', [
      'addtabon' => ['Entity']
   ]);  
          
    $PLUGIN_HOOKS["menu_toadd"]['dashboard'] = array('tools'  => 'PluginDashboardConfig');
    $PLUGIN_HOOKS['config_page']['dashboard'] = 'front/index.php';
                
}


function plugin_version_dashboard(){
	global $DB, $LANG;

	return array('name'			=> __('Dashboard','dashboard'),
					'version' 			=> '2.0b',
					'author'			   => '<a href="https://github.com/ivancrosvigo/glpi-dashboard"> Iván Romero </b> </a>. Fork from Stevenes Donato 1.0.3',
					'license'		 	=> 'GPLv2+',
					'homepage'			=> 'https://github.com/ivancrosvigo/glpi-dashboard',
					'minGlpiVersion'	=> '10.0'
					);
}


function plugin_dashboard_check_prerequisites(){
     if (GLPI_VERSION >= 10.0){
         return true;
     } else {
         echo "GLPI version NOT compatible. Requires GLPI >= 10.0.5";
     }
}


function plugin_dashboard_check_config($verbose=false){
	if ($verbose) {
		echo 'Installed / not configured';
	}
	return true;
}


?>
