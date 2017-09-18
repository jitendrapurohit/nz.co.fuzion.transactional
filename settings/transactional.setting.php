<?php

/**
 * Settings used by nz.co.fuzion.transactional.
 */
return array(
  'transactional_mailings' => array(
    'group_name' => 'Transactional Bounce Handler',
    'group' => 'transactional_bounce_handler',
    'name' => 'transactional_mailings',
    'type' => 'Array',
    'default' => array(),
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Transactional mailings data.',
    'help_text' => 'Records data about pseudo-CiviMail entries created to track transactional emails.',
  ),
);
