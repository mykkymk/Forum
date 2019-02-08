<?php
/**
 * Template Class
 * Creates a template view object
 */
class Template{
    //path to template
    protected $template;
    //variable passed in
    protected $vars = array();

    /**
     * Clas constructor
     */
    public function __construct($template){
        $this->template = $template;
    }

    /**
     * Get template variables
     */
    public function __get($key){
        return $this->vars[$key];
    }

    /**
     * Set template variables
     */
    public function __set($key, $value){
        $this->vars[$key] = $value;
    }

    /**
     * Convert object to string
     */
    public function __toString(){
        extract($this->vars);
        chdir(dirname($this->template));
        ob_start();

        include basename($this->template);

        return ob_get_clean();
    }
}