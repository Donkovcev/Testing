<?php

class TestCommand extends CConsoleCommand {

    public function run($args) {
        //if(!isset($args[0]) || !isset($args[1])) new Exception ("Wrong params");
        /*
          require_once Yii::app()->basePath . '/../protected/vendors/Faker/autoload.php';
          // 'ru_RU'
          $faker = Faker\Factory::create();

          echo $faker->name . "<br>";

          for ($i = 0; $i < $args[1]; $i++) {
          $searchTerm = new GoogleSearchTerms();

          $searchTerm->term = $faker->text($args[0]);

          $searchTerm->save();
          }
         */


        // 'Lucy Cechtelar';
        /*
          echo $faker->address . "<br>";
          // "426 Jordy Lodge
          // Cartwrightshire, SC 88120-6700"
          echo $faker->city . "<br>";

          echo $faker->company . "<br>";

          echo $faker->text(400) . "<br>";
         */


    }

}

?>
