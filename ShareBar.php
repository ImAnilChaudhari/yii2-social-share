<?php

namespace imanilchaudhari\socialshare;

/**
 * This is just an example.
 */
class ShareBar extends \yii\base\Widget
{
    /**
	 * @var string box alignment - horizontal, vertical
	 */
	public $style='horizontal';
	
	
	/**
	 * @var string twitter username - imanilchaudhari
	 */
	public $data_via='';


	/**
	 * @var array available social media share buttons 
	 * like - facebook, googleplus, linkedin, twitter
	 */
	
	public $networks = ['facebook','googleplus','linkedin','twitter'];


	/**
	 * The extension initialisation
	 *
	 * @return nothing
	 */
     
    public function init(){
		parent::init();
	}
     
     
    public function run()
    {
        $rendered = '';
		foreach($this->networks as $params):
			$rendered .= $this->render($params);
        endforeach;
        
		return $this->render('sharebar', array('rendered'=>$rendered));
    }
}
