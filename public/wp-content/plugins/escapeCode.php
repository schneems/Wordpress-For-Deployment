<?
/*
Plugin Name: escapeCode
Plugin URI: http://www.codeislogic.com
Description: Escapes HTML in Code blocks
Version: 0.01
Author: Nick Ashley
Author URI: http://www.codeislogic.com
*/
add_filter('the_content', array('nsa_contentFilter', 'escapeCode'));

class nsa_contentFilter {
    function escapeCode($content) {
         $str = preg_replace('/<code>(.*?)<\/code>/es', "nsa_contentFilter::formatCodeString('\\1')", $content);
        return $str;
        
    }
    
    function formatCodeString($str)
    {
      
      
      $str = str_replace('\"','"',$str);
      $str = htmlspecialchars($str);
      $str = str_replace('&amp;','&',$str);
      $str = str_replace(array("&#8216;", "&#8217;", "&#8242;"), "&#039;", $str);
      $str = str_replace(array("&#8220;", "&#8221;", "&#8243;"), "&#034;", $str);

      return "<code>$str</code>";
    }
}
?>
