<?php

Yii::import('zii.widgets.CPortlet');

class SidebarPortlet extends CWidget {

    /**
     * @var string the tag name for the portlet container tag. Defaults to 'div'.
     */
    public $tagName = 'div';

    /**
     * @var array the HTML attributes for the portlet container tag.
     */
    public $htmlOptions = array('class' => 'portlet');

    /**
     * @var string the title of the portlet. Defaults to null.
     * When this is not set, Decoration will not be displayed.
     * Note that the title will not be HTML-encoded when rendering.
     */
    public $title;

    /**
     * @var string the CSS class for the decoration container tag. Defaults to 'portlet-decoration'.
     */
    public $decorationCssClass = 'portlet-decoration';

    /**
     * @var string the CSS class for the portlet title tag. Defaults to 'portlet-title'.
     */
    public $titleCssClass = 'portlet-title';

    /**
     * @var string the CSS class for the content container tag. Defaults to 'portlet-content'.
     */
    public $contentCssClass = 'portlet-content';

    /**
     * @var boolean whether to hide the portlet when the body content is empty. Defaults to true.
     * @since 1.1.4
     */
    public $hideOnEmpty = true;
    private $_openTag;

    /**
     * Initializes the widget.
     * This renders the open tags needed by the portlet.
     * It also renders the decoration, if any.
     */
    public function init() {
        ob_start();
        ob_implicit_flush(false);

        $this->htmlOptions['id'] = $this->getId();
        echo CHtml::openTag($this->tagName, $this->htmlOptions) . "\n";
        $this->renderDecoration();
        echo "<div class=\"{$this->contentCssClass}\">\n";

        $this->_openTag = ob_get_contents();
        ob_clean();
    }

    /**
     * Renders the content of the portlet.
     */
    public function run() {
        $this->renderContent();
        $content = ob_get_clean();
        if ($this->hideOnEmpty && trim($content) === '')
            return;
        //echo $this->_openTag;
        echo $content;
        //echo "</div>\n";
       // echo CHtml::closeTag($this->tagName);
    }

    /**
     * Renders the decoration for the portlet.
     * The default implementation will render the title if it is set.
     */
    protected function renderDecoration() {
        if ($this->title !== null) {
            echo "<div class=\"{$this->decorationCssClass}\">\n";
            echo "<div class=\"{$this->titleCssClass}\">{$this->title}</div>\n";
            echo "</div>\n";
        }
    }

    /**
     * Renders the content of the portlet.
     * Child classes should override this method to render the actual content.
     */
    protected function renderContent() {
        
    }

}
?>