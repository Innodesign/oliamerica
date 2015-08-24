<?php

require 'active-record/ActiveRecord.php';

$connections = array(
  'development' => 'mysql://username:password@localhost/development',
  'production' => 'mysql://root:@localhost/oliamerica',
  'test' => 'mysql://username:password@localhost/test'
);



# must issue a "use" statement in your closure if passing variables
ActiveRecord\Config::initialize(function($cfg) use ($connections)
{
  $rutaModelos = dirname(dirname(__FILE__)) . '/models';
  $cfg->set_model_directory($rutaModelos);
  $cfg->set_connections($connections);

  # default connection is now production
  $cfg->set_default_connection('production');
});