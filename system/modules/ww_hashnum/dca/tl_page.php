<?php

/**	
 * Erweiterung: hashnum;
 * 
 * Copyright (C) 2013 Thomas Belkowski / WESTWERK GMBH
 * 
 * @package hashnum
 * @author  Thomas Belkowski / WESTWERK GMBH
 * @license LGPL
 */
 
// Add to regular sites
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace('description','description,hashnum',  $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']);

// Add to forward sites
$GLOBALS['TL_DCA']['tl_page']['palettes']['forward'] = str_replace('pageTitle','pageTitle,hashnum',  $GLOBALS['TL_DCA']['tl_page']['palettes']['forward']);
 
$GLOBALS['TL_DCA']['tl_page']['fields']['hashnum'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_page']['hashnum'],
    'exclude'           => true,
    'search'            => true,
    'inputType'         => 'text',
    'eval'              => array('maxlength'=>64, 'tl_class'=>'w50'),
    'sql'               => "varchar(64) NOT NULL default ''"
);