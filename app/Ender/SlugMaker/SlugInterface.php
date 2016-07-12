<?php


interface SlugInterface{

  /**
   * [slug description]
   * @param  String $string    text to convert to slug.
   * @param  String $seperator char to add in between of the slug.
   * @return String            Returns the text converted as a slug.
   */
  public function slug($string,$seperator);
}
