<?php
namespace RussellsLevitatingSocialShareButtons;

class Common{
    public $version = 0.1;
    public $slug = 'rlssb';
    
    /**
     * getVersion returns the current version
     * @return float $version
     * @since 0.1
     * @author Russell Fair
     */
    public function getVersion() {
        return $this->version;
    }
    
    /**
     * getSlug returns the current slug
     * @return string $slug
     * @since 0.1
     * @author Russell Fair
     */
    public function getSlug() {
        return $this->slug;
    }
    
    public function getSettings() {
        return get_option( $this->getSlug() );
    }
    
    /**
     * getActivePostTypes returns the currently active post types
     * @return mixed (array|bool) $post_types
     * @since 0.1
     * @author Russell Fair
     */
    public function getActivePostTypes() {
        $settings = $this->getSettings();
        return isset( $settings['post_types'] ) ? $settings['post_types'] : false ;
    }
    
    /**
     * getActiveNetworks returns the currently active networks
     * @return mixed (array|bool) $networks
     * @since 0.1
     * @author Russell Fair
     */
    public function getActivenetworks() {
        $settings = $this->getSettings();
        return isset( $settings['active_networks'] ) ? $settings['active_networks'] : false ;
    }
    
    /**
     * getCustomOrder returns the custom order
     * @return mixed (array|bool) $custom_order
     * @since 0.1
     * @author Russell Fair
     */
    public function getCustomOrder() {
        $settings = $this->getSettings();
        return isset( $settings['custom_order'] ) ? $settings['custom_order'] : false ;
    }
    
    /**
     * getDisplaySettings returns the relevant settings for displaying the buttons
     * @since 0.1
     * @author Russell Fair
     * @return mixed (bool|array) 
     */
    public function getDisplaySettings() {
        $settings = $this->getSettings();
        return isset( $settings['display_settings'] ) ? $settings['display_settings'] : array( 'size' => '16x16', 'default' => true ) ;
    }
    
    /**
     * getLocationSettings returns the relevant settings the location(s) of the buttons
     * @since 0.1
     * @author Russell Fair
     * @return (array) 
     */
    public function getLocationSettings() {
        $settings = $this->getSettings();
        return ( isset( $settings['active_locations'] ) ) ? $settings['active_locations'] : array( 'after_content' => array() ) ;
    }
     
    /**
     * getDefaultNetworks returns the builtin networks
     * @since 0.1
     * @author Russell Fair
     * @return mixed (bool|array) 
     */
    public function getDefaultNetworks() {
         return array(
            'twitter' => array(
                'name' => __('Twitter', $this->getSlug() ),
                'icon_base' => '/assets/icons/twitter',
            ),
            'facebook' => array(
                'name'      => __('Facebook',   $this->getSlug() ),
                'icon_base' => '/assets/icons/twitter.png',
            ),
            'googleplus' => array(
                'name'      => __('Google+',    $this->getSlug() ),
                'icon_base' => '/assets/icons/twitter.png',
            ),
            'pinterest' => array(
                'name'      => __('Pinterest',  $this->getSlug() ),
                'icon_base' => '/assets/icons/twitter.png',
            ),
            'linkedin' => array(
                'name'      => __('LinkedIn',   $this->getSlug() ),
                'icon_base' => '/assets/icons/twitter.png',
            ),
            'whatsapp' => array(
                'name'      => __('Whatsapp',   $this->getSlug() ),
                'icon_base' => '/assets/icons/twitter.png',
            )
        );  
    }
     
    /**
     * getDefaultLocations returns the default locations
     * @since 0.1
     * @author Russell Fair
     * @return mixed (bool|array) 
     */
    public function getDefaultLocations() {
         return array( 
            'after_title'   => array( 
                'name'      => __( 'After Title', $this->getSlug() ),
                'action'    => 'the_title' 
            ), 
            'featured_image'=> array( 
                'name'      => __( 'Featured Image', $this->getSlug() ),
                'action'    => 'featured_image' 
            ),  
            'after_content' => array( 
                'name'      => __( 'After Content', $this->getSlug() ),
                'action'    => 'the_content'
            ),
            'floating_left' => array( 
                'name'      => __( 'Floating Left', $this->getSlug() ),
                'action'    => 'get_footer'
            )
        );
    }
    
}