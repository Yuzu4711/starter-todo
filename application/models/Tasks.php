<?php

/**
 *
 * @author Daniel Tian
 */

class Tasks extends MY_Model {

        public function __construct()
        {
                parent::__construct('tasks', 'id');
        }

}