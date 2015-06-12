<?php
$hook['post_controller_constructor'][] = array(
                                'class'    => 'ProfilerEnabler',
                                'function' => 'EnableProfiler',
                                'filename' => 'hooks.classes.php',
                                'filepath' => 'hooks',
                                'params'   => array()
                                );