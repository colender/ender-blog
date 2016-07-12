<?php
namespace App\Ender\SlugMaker;

class SlugMaker implments SlugInterface{
  const SPACE_PATTERN = '/\s+/';
  const DEFAULT_SEPERATOR = '-';
  protected $options = array(
    'pattern' => self::SPACE_PATTERN,
    'seperator' => self::DEFAULT_DEPERATOR,
    'lowercase' => true,

  );

  public __construct($options = []){
    $this->options = array_merge($this->options,$options);
  }

/**
 * Generates a Slug to use for titles or unique texts.
 * @param  string $string    [description]
 * @param  [type] $seperator [description]
 * @return [type]            [description]
 */
  public function slug($string = "",$seperator = null){


    if($seperator === null)
      $seperator = $this->options['seperator'];

    if($this->options['lowercase'] === true)
      $string = mb_strtolower($string);

    $slug = preg_replace($this->options['pattern'],$seperator,$string);
  }




}
