<?php

namespace Lpcode_Amazing_Addons;

class Curve_Outside_Card_Widget extends \Elementor\Widget_Base{
    
    public function get_name()
    {
        return 'Curve_Outside_Card';
    }

    public function get_title()
    {
        return esc_html__('Curve Card', 'lpcode-amazing-addons');
    }

    public function get_icon()
    {
        return 'eicon-image-box';
    }

    public function get_categories()
    {
        return ['lpcode-category'];
    }

    public function get_keywords()
    {
        return ['card', 'curve', 'outside'];
    }

    // controls
    protected function register_controls() {

		$this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Content', 'lpcode-amazing-addons'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'curve-outside-image',
            [
                'label' => esc_html__('Background', 'lpcode-amazing-addons'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

		$this->add_control(
            'curve-outside-title',
            [
                'label' => esc_html__('Titulo', 'lpcode-amazing-addons'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__('Titulo principal', 'lpcode-amazing-addons'),
            ]
        );
		$this->add_control(
            'curve-outside-sub-title',
            [
                'label' => esc_html__('Subtitulo', 'lpcode-amazing-addons'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__('Titulo principal', 'lpcode-amazing-addons'),
            ]
        );

        $this->add_control(
			'curve-outside-text',
			[
				'label' => esc_html__( 'Texto', 'lpcode-amazing-addons' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'lpcode-amazing-addons' ),
				'placeholder' => esc_html__( 'Type your description here', 'lpcode-amazing-addons' ),
			]
		);

		$this->end_controls_section();

	}

    protected function render()
    { 
        $settings = $this->get_settings_for_display();
        ?>

            <div class="curve-outside-container">
                <div class="card">
                    <div class="imgBx" style="--img:url('<?php echo $settings['curve-outside-image']['url']; ?>')"></div>
                    <div class="content">
                        <h3>
                        <?php echo $settings['curve-outside-title']; ?><br>
                            <span><?php echo $settings['curve-outside-sub-title']; ?></span>
                        </h3>
                        <p>
                            <?php echo $settings['curve-outside-text']; ?>
                        </p>
                    </div>
                </div>
            </div>
    
        <?php 
    }
}