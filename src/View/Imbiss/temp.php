<div id="wrapper-bild">
  <picture>
  <source srcset="<?php

echo $img;
?>-300.jpg" media="(max-width: 480px)">
  <source srcset="<?php

echo $img;
?>-400.jpg" media="(min-width: 481px) and (max-width: 767px)">
  <source srcset="<?php

echo $img;
?>-300.jpg" media="(min-width: 768px) and (max-width: 1023px)">
  <source srcset="<?php

echo $img;
?>-300.jpg" media="(min-width: 768px) and (max-width: 1023px) and (orientation: landscape)">
  <source srcset="<?php

echo $img;
?>-600.jpg" media="(min-width: 1024px) and (max-width: 1280px)">
  <source srcset="<?php

echo $img;
?>-600.jpg" media="(min-width: 1281px)">
  <img src="<?php

echo $img;
?>-200.jpg" alt="Standort der Filiale" class="box-shadow"> </picture>
</div>