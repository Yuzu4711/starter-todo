<?php

/**
 *
 * @author Daniel Tian
 */

class Groups extends MY_Model {

        public function __construct()
        {
                parent::__construct('groups', 'id');
        }
}