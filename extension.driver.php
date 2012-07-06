<?php
	
	Class extension_language_detection extends Extension{

		public function getSubscribedDelegates() {
			return array(
				array(
					'page' => '/frontend/',
					'delegate' => 'FrontendParamsPostResolve',
					'callback' => 'addParameters'
				)
			);
		}
				
		public function addParameters($context) {
			
//			$session[
//			
//        	$context['params']['ua-latitude'] = $location['geoplugin_latitude'];
//        	$context['params']['ua-longitude'] = $location['geoplugin_longitude'];
//        	$context['params']['ua-country'] = $location['geoplugin_countryName'];
        }

	}
?>