<?php

	Class Extension_Hostname extends Extension{
		
		public function install() {
			return true;
		}

	    public function uninstall() {
			return false;
	    }

		public function getSubscribedDelegates() {
			return array(
				array(
					'page'		=> '/frontend/',
					'delegate'	=> 'FrontendParamsResolve',
					'callback'	=> 'add_hostname'
				),
			);
		}

		public function add_hostname($page) {
            $hostname = getHostByName(getHostName());
            $page['params']['hostname'] = $hostname;
		}

	}