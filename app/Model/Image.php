<?php
App::uses('AppModel', 'Model');
/**
 * Image Model
 *
 */
class Image extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $name = 'Image';
	public $displayField = 'title';
	
	public $actsAs = array(
        'Upload.Upload' => array(
            'image' => array(
                'fields' => array(
                    'dir' => 'image_url'
                )
            )
        )
    );
}
