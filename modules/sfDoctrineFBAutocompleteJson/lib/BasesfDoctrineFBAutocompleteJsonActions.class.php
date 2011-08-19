<?php

/**
 * Base actions for the sfDoctrineFBAutocompletePlugin sfDoctrineFBAutocompleteJson module.
 * 
 * @package     sfDoctrineFBAutocompletePlugin
 * @subpackage  sfDoctrineFBAutocompleteJson
 * @author      GSschurgast
 * @version     SVN: $Id: BaseActions.class.php 12534 2008-11-01 13:38:27Z Kris.Wallsmith $
 */
abstract class BasesfDoctrineFBAutocompleteJsonActions extends sfActions
{

    public function executeList(sfWebRequest $request){
        if(!$request->hasParameter('model')){
            throw new sfException('sfDoctrineFBAutocompleteJson : Model is not defined');
        }
        $this->items = Doctrine_Core::getTable( $request->getParameter('model') )->findAll();
       
        $this->setLayout(false);
        $request->setParameter('sf_format','json');
    }
}
