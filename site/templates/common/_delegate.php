<?php namespace Processwire;
  $template = new TemplateFile($config->paths->templates . "layouts/{$page->template}.php");
  $template->set('site', $site);
  $templateRender = $template->render();
  return;
?>
