<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$hook['pre_system'] = array(
                                'class'    => 'Baiduspider',
                                'function' => 'index',
                                'filename' => 'Baiduspider.php',
                                'filepath' => 'hooks/utilities',
                                'params'   => array('beer', 'wine', 'snacks')
                                );