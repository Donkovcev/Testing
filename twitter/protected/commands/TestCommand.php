<?php

class TestCommand extends CConsoleCommand {
    public function run($args) {
        $users = Users::model()->findAll();
        foreach($users as $user) {
           echo $user->link . "\r\n";            
        }
        //$user = Yii::app()->basePath;

    }
    
}

?>
