<?php

namespace Lpcode_Amazing_Addons;

class Curve_Outside_Card_Controls extends \Elementor\Base_Control{
    
    public function get_type() {}

	protected function get_default_settings() {
        return [
			'label_block' => true,
			'separator' => 'after',
			'new_settings_value' => '',
			'new_multiple_values' => [],
		];
    }

	public function get_default_value() {}

	public function content_template() {}

	public function enqueue() {}
}