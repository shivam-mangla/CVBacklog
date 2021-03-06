<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
   function($class) {
      static $classes = null;
      if ($classes === null) {
         $classes = array(
            'com\\github\\gooh\\cvbacklog\\backlog' => '/app/mvc/model/Backlog.php',
            'com\\github\\gooh\\cvbacklog\\backlogcontroller' => '/app/mvc/controller/BacklogController.php',
            'com\\github\\gooh\\cvbacklog\\backlogview' => '/app/mvc/view/BacklogView.php',
            'com\\github\\gooh\\cvbacklog\\blacklisted' => '/app/mvc/model/StackExchange/Blacklisted.php',
            'com\\github\\gooh\\cvbacklog\\jsonbacklogview' => '/app/mvc/view/JsonBacklogView.php',
            'com\\github\\gooh\\cvbacklog\\cached' => '/app/framework/Cached.php',
            'com\\github\\gooh\\cvbacklog\\client' => '/app/mvc/model/StackExchange/Client.php',
            'com\\github\\gooh\\cvbacklog\\crawler' => '/app/mvc/model/ChatSearch/Crawler.php',
            'com\\github\\gooh\\cvbacklog\\querystring' => '/app/framework/Url/QueryString.php',
            'com\\github\\gooh\\cvbacklog\\questions' => '/app/mvc/model/StackExchange/Questions.php',
            'com\\github\\gooh\\cvbacklog\\requesthandler' => '/app/framework/RequestHandler.php',
            'com\\github\\gooh\\cvbacklog\\sortbycloseddate' => '/app/mvc/model/SortByClosedDate.php',
            'com\\github\\gooh\\cvbacklog\\throttleviolation' => '/app/mvc/model/StackExchange/ThrottleViolation.php',
            'com\\github\\gooh\\cvbacklog\\url' => '/app/framework/Url.php',
            'com\\github\\gooh\\cvbacklog\\view' => '/app/mvc/view/View.php',
            'com\\github\\gooh\\cvbacklog\\webpage' => '/app/mvc/model/ChatSearch/Webpage.php'
          );
      }
      $cn = strtolower($class);
      if (isset($classes[$cn])) {
         require __DIR__ . $classes[$cn];
      }
   }
);
// @codeCoverageIgnoreEnd
