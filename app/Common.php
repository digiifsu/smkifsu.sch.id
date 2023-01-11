<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the framework's
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @see: https://codeigniter4.github.io/CodeIgniter4/
 */

 function buat_slug($string){
    return trim(str_replace(' ', '-', preg_replace("/[^a-zA-Z0-9_-]/", ' ', $string)), '-');
 }

function potongString($string,$batas){
   if(strlen($string) > $batas){
      return substr($string, 0, $batas).'...';
   }
   return $string;
}