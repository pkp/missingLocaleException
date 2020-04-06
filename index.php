<?php

/**
 * @defgroup plugins_generic_missinglocaleexception
 */

/**
 * @file plugins/generic/missingLocaleException/index.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_missinglocaleexception
 * @brief Wrapper for the Missing Locale Exception plugin
 *
 */
require_once('MissingLocaleExceptionPlugin.inc.php');

return new MissingLocaleExceptionPlugin();

?>
