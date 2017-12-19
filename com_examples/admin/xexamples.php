<?php
/**
 * Copyright (c) 2017. Alexandr Kosarev, @kosarev.by
 */

namespace Joomplace\Component\Xexamples\Admin;

use Joomla\CMS\Factory;
use Joomla\CMS\Session\Session;

Factory::getDocument()->setMetaData('api-token',Session::getFormToken());

Dispatcher::migrate(__DIR__.DIRECTORY_SEPARATOR.'migrations');
Dispatcher::getInstance('Example')->execute(Factory::getApplication()->input->get('task'));