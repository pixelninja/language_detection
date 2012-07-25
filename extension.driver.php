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
			
			//code list http://www.metamodpro.com/browser-language-codes
			
			session_start();
			
			if (!isset($_SESSION['language'])) {
				$_SESSION['language'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
			}
			
			if ($_GET['set_language_code']) $_SESSION['language'] = $_GET['set_language_code'];
			if ($_GET['clear_language_code']) {
				unset($_SESSION['language']);
				$_SESSION['language'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
			}
			
			
        	$context['params']['language'] = $_SESSION['language'];
        }

	}
?>