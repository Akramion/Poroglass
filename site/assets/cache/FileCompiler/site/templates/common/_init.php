<?php

/**
 * _init.php - Initialize site variables and includes.
 *
 * This file is called before any template files are rendered
 * This behavior was defined in /site/config.php - $config->prependTemplateFile
 *
 */

/*
 * Make a pre-fetched copy of the homepage available to all our templates
 * this is worthwhile since we use it so often, helps readability, etc.
 *
 */
$site = $pages->get('/');

//assign the rendered view to content variable to show up on _done.php

/*
 * Include any other shared functions we want to utilize in all our templates
 *
 */

 require_once(\ProcessWire\wire('files')->compile($config->paths->templates . 'common/_functions.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
 require_once(\ProcessWire\wire('files')->compile($config->paths->templates . 'common/_forms.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));

$notify = array();

if($input->get->form) {
  $form = $sanitizer->text($input->get->form);
  $result = $sanitizer->text($input->get->result);
  if ($form == "callback") {
    if ($result == "success") {
      $notify["callback"]["text"] = "Ваш запрос отправлен";
      $notify["callback"]["status"] = "success";
    }
    if ($result == "danger") {
      $notify["callback"]["text"] = "Ваш запрос не отправлен";
      $notify["callback"]["status"] = "danger";
    }
  }
}
