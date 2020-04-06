<?php
/**
 * @file plugins/generic/missingLocaleException/MissingLocaleExceptionPlugin.inc.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class MissingLocaleExceptionPlugin
 * @ingroup plugins_generic_missinglocaleexception
 *
 * @brief Clear the CSS and Template cache on every page load.
 */
class MissingLocaleExceptionPlugin extends GenericPlugin {
	/**
	 * @copydoc Plugin::register
	 */
	public function register($category, $path, $mainContextId = NULL) {
		$success = parent::register($category, $path);
		if ($success && $this->getEnabled()) {
			HookRegistry::register('PKPLocale::translate', function($hookName, $params) {
				$key = $params[0];
				$value = $params[4];
				if (!trim(strlen($value))) {
					throw new Exception(sprintf('Locale key %s was not found.', $key));
				}
			});
		}
		return $success;
	}

	/**
	 * @copydoc PKPPlugin::getDisplayName
	 */
	public function getDisplayName() {
		return __('plugins.generic.missingLocaleException.name');
	}

	/**
	 * @copydoc PKPPlugin::getDescription
	 */
	public function getDescription() {
		return __('plugins.generic.missingLocaleException.description');
	}
}
