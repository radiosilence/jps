<?php

/**
 * JPS Site main controller
 */

namespace Controllers;
import('core.controller');
import('core.template');
import('core.exceptions');
class JPS extends \Core\Controller {
    private $template;
    private $pages = array(
        'home' => 'Home',
        'quotes' => 'Quotes',
        'contact' => 'Contact'
    );
    private function init() {
        $t = new \Core\Template();
        $t->date = new \DateTime();
        $t->title = $this->pages[$this->args['page']];
        $t->page = $this->args['page'];
        $t->menu_items = $this->pages;
        $t->menu = $t->render('menu.php');
        $t->footer = $t->render('footer.php');

        $this->template = $t;
    }
    public function index() {
        $this->init();
        echo $this->template->render('home.php');
    }

    public function page() {
        $page = $this->args['page'];
        if(isset($this->pages[$page])) {
            $this->init();
            $this->template->content = $this->get_page($page);
            echo $this->template->render('standard_page.php');
        } else {
            throw new \Core\HTTPError(404, $page);
        }
    }
    
    private function get_page($filename) {
        $filename = SITE_PATH . '/pages/' . $filename . '.html';
        if (is_file($filename)) {
            ob_start();
            include $filename;
            $contents = ob_get_contents();
            ob_end_clean();
            return $contents;
        }
        throw new \Core\FileNotFoundError($filename);
    }
}