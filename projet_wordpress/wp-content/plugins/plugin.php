

<?php
/*
Plugin Name: Mon premier plugin
Plugin URI: https://promo-41.codeur.online/blog/
Description: Ceci est mon premier plugin
Author: AlexaVermenot ACS Promo41
Version: 1.0
Author URI: https://promo-41.codeur.online/blog/
*/




add_action('loop_start','letter');
add_action('wp_footer','tatata');
add_filter('default_content', 'contenu_par_defaut');
add_filter('the_content', 'inserrer_apres_contenu');
add_shortcode('nouveauShortcode', 'gererShortcode');

function tatata(){

echo '<p> tatata </p>';
}

function contenu_par_defaut(){
  return ("Template_par_defaut");
  // titre1 :
  // titre2 :
  // contenu");
}


function inserrer_apres_contenu($content){
$content .='<p> tatatttttatatatatatatat </p>';
return $content;
}

function gererShortcode(){
  echo '<p>je suis un shortcode</p>';
}

function letter($content){
echo
"<script type='text/javascript'>
var link = document.getElementsByTagName('a');
link.style.animation = 'animation: blink 1s infinite steps(2)';
</script>";

echo "<style type='text/css'>

div.text-center.article p {
  color : red;
  font-size : 2rem;
}

@keyframes blink {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
}

a.blink {
animation: blink 1s infinite steps(2);
}

</style>";

// echo "<script type='text/javascript'>
// var showText = function (target, text, index, interval) {
//   if (index < text.length) {
//     $(target).append(texte[index++]);
//     setTimeout(function () { showText(target, text, index, interval); }, interval);
//   }
// }
//
// function faitletaf () {
//   showText('div.text-center.article p', 'hello', 0, 500);
// };
//
// </script>
// ";


}

// function offon2(){
//   echo"
// <script type='text/javascript'>
// function onoff2(){
//   root = document.documentElement;
//   currentvalue = document.getElementById('onoff2').value;
//   if(currentvalue == 'Off'){
//     document.getElementById('onoff2').value='On';
//       root.style.filter = 'sepia(0%)';
//   }else{
//     document.getElementById('onoff2').value='Off';
//     root.style.filter = 'sepia(100%)';
//   }
// }
// </script>";
// }
// <style type='text/css'>
// @keyframes slide-left {
//   0% {
//     -webkit-transform: translateX(0px);
//             transform: translateX(0px);
//   }
//   100% {
//     -webkit-transform: translateX(50px);
//             transform: translateX(50px);
//   }
// }
// </style>";
?>
