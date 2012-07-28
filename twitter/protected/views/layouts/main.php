<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Le styles -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/style.css" rel="stylesheet">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		
		
    </head>

    <body>

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="/">Twitter Parser</a>
                    <!--
                    <div class="btn-group pull-right">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user"></i> Username
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Sign Out</a></li>
                        </ul>
                    </div>
                    -->
                    <div class="nav-collapse">
                        <?php
                        $this->widget('zii.widgets.CMenu', array(
                            'htmlOptions' => array('class' => 'nav'),
                            'items' => array(
                                array('label' => 'Home', 'url' => array('/site/index')),
                                array('label' => 'Поисковые запросы', 'url' => array('/GoogleSearchTerms/index')),
                                array('label' => 'Найденные ссылки', 'url' => array('/GoogleLinks/index')),
                                array('label' => 'Найденные пользователи', 'url' => array('/Users/index')),
                                array('label' => 'Скаченные записи', 'url' => array('/Tweets/index')),
                                array('label' => 'Авторизация', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                                array('label' => 'Выход (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                            ),
                        ));
                        ?>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3">
                    <div class="well sidebar-nav">
                        <!--
                        <ul class="nav nav-list">
                            <li class="nav-header">Sidebar</li>
                            <li class="active"><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                        </ul>
                        -->
                        <?php
                        //$this->widget('SidebarPortlet');

                        $this->beginWidget('SidebarPortlet', array(
                            'title' => null
                        ));
                        $this->widget('zii.widgets.CMenu', array(
                            'items' => $this->menu,
                            'htmlOptions' => array('class' => 'nav nav-list'),
                        ));
                        $this->endWidget();
                        ?>
                    </div><!--/.well -->
                </div><!--/span-->
                <div class="span9">
                    <?php if (isset($this->breadcrumbs)): ?>
                        <?php
                        $this->widget('TwitterBreadcrumbs', array(
                            'links' => $this->breadcrumbs,
                        ));
                        ?><!-- breadcrumbs -->
                    <?php endif ?>	
                    <div class="hero-unit">
                        <?php echo $content; ?>
                        <div class="clear"></div>
                    </div>
                </div><!--/span-->
            </div><!--/row-->

            <hr>

            <footer>
                <p>&copy; Company 2012</p>
            </footer>

        </div><!--/.fluid-container-->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!--<script src="./assets/js/jquery.js"></script>-->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap-transition.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap-alert.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap-modal.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap-dropdown.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap-scrollspy.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap-tab.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap-tooltip.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap-popover.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap-button.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap-collapse.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap-carousel.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap-typeahead.js"></script>

    </body>
</html>


