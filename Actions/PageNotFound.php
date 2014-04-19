<?php
namespace Actions;

use HaploMvc\Action\HaploAction;

/**
 * Class PageNotFound
 * @package Actions
 */
class PageNotFound extends HaploAction
{
    /**
     * This method is called when all types of request are received
     **/
    protected function doAll()
    {
        $template = $this->app->template->create('PageNotFound.php');
        $template->display();
    }
}
