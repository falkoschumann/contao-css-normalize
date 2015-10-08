<?php

/**
 * normalize.css Extension for Contao
 *
 * Copyright (c) 2015 Falko Schumann
 *
 * @package  normalize
 * @link     https://github.com/falkoschumann/contao-normalize-css
 * @license  http://opensource.org/licenses/MIT MIT
 */

/**
 * Table tl_layout
 */
array_insert($GLOBALS['TL_DCA']['tl_layout']['fields']['framework']['options'], -1, 'normalize.css');
