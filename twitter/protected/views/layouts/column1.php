<?php $this->beginContent('//layouts/main'); ?>
<div id="content">
    <?php echo $content; ?>

    <?php

    //var_dump($saw->get('li.g h3 a')->toArray());
    //var_dump($saw->get('ul.panel-nav-top li.current')->toArray());
    //var_dump($saw->get('#sidebar dl.air-comment a.topic')->toArray());
    //var_dump($saw->get('a[rel=bookmark]')->toArray());
    /*
      foreach ($saw->get('#sidebar a.topic') as $link) {
      var_dump($link['#text']);
      }

     */

    // https://www.google.com/search?hl=en&output=search&sclient=psy-ab&q=Yii+site:twitter.com+%E2%80%9DLocation:+Russia%E2%80%9D&btnG=&gbv=1&sei=eAQXUOSDLaig4gS5qYDwCQ
    // http://www.google.com/search?hl=en&output=search&q=Yii+site:twitter.com+%E2%80%9DLocation:+Russia%E2%80%9D


    

    
    ?>
</div><!-- content -->
<?php $this->endContent(); ?>