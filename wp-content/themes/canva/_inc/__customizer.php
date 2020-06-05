<?php 
    function customizer( $wp_customize ) {

            $wp_customize->add_panel( 'customization', array(

                'priority'       => 2,

                'title'          => __('Customização')

            ));    

            $wp_customize->add_section( 'contato' , array(

                'title'       => __( 'Contato' ),

                'panel' => 'customization',

                'priority'    => 10

            ));           

            // $wp_customize->add_setting('coordenadas');

            // $wp_customize->add_control('coordenadas',  array(

            //     'label' => 'Coordenadas (Maps)',

            //     'section' => 'contato',

            //     'type' => 'textarea',

            //     'settings' => 'coordenadas'

            // ));    

            $wp_customize->add_setting('telefone');

            $wp_customize->add_control('telefone',  array(

                'label' => 'Telefone',

                'section' => 'contato',

                'type' => 'text',

                'settings' => 'telefone'

            ));                  

            $wp_customize->add_setting('email');

            $wp_customize->add_control('email',  array(

                'label' => 'E-mail',

                'section' => 'contato',

                'type' => 'text',

                'settings' => 'email'

            ));              

            // $wp_customize->add_setting('endereco');

            // $wp_customize->add_control('endereco',  array(

            //     'label' => 'Endereço',

            //     'section' => 'contato',

            //     'type' => 'textarea',

            //     'settings' => 'endereco'

            // ));                               

            $wp_customize->add_section( 'header' , array(

                'title'       => __( 'Header' ),

                'panel' => 'customization',

                'priority'    => 1

            ));  


            $wp_customize->add_section( 'admin' , array(

                'title'       => __( 'Admin' ),

                'panel' => 'customization',

                'priority'    => 1

            ));              

            // $wp_customize->add_section( 'footer' , array(

            //     'title'       => __( 'Footer' ),

            //     'panel' => 'customization',

            //     'priority'    => 1

            // ));                       

            // $wp_customize->add_setting( 'logo_footer' );

            // $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_footer', array(

            // 'label'    => __( 'Logo' ),

            // 'section'  => 'footer',

            // 'settings' => 'logo_footer'

            // )));              

            $wp_customize->add_setting( 'logo' );

            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(

            'label'    => __( 'Logo' ),

            'section'  => 'header',

            'settings' => 'logo'

            )));    

            $wp_customize->add_setting( 'darklogo' );

            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'darklogo', array(

            'label'    => __( 'Logo (Dark)' ),

            'section'  => 'header',

            'settings' => 'darklogo'

            )));     

            $wp_customize->add_setting( 'adminlogo' );

            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'adminlogo', array(

            'label'    => __( 'Logo' ),

            'section'  => 'admin',

            'settings' => 'adminlogo'

            )));                            

            $wp_customize->add_setting( 'icons' );

            $wp_customize->add_control( 
                new WP_Customize_Color_Control( 
                $wp_customize, 
                'icons', 
                array(
                    'label'      => 'Icons',
                    'section'    => 'admin',
                    'settings'   => 'icons',
                ) ) 
            );                

            $wp_customize->add_setting( 'colors' );

            $wp_customize->add_control( 
                new WP_Customize_Color_Control( 
                $wp_customize, 
                'colors', 
                array(
                    'label'      => 'Colors',
                    'section'    => 'admin',
                    'settings'   => 'colors',
                ) ) 
            ); 

            $wp_customize->add_setting( 'login_bg' );

            $wp_customize->add_control( 
                new WP_Customize_Color_Control( 
                $wp_customize, 
                'login_bg', 
                array(
                    'label'      => 'Login Background',
                    'section'    => 'admin',
                    'settings'   => 'login_bg',
                ) ) 
            );                        

            // $wp_customize->add_setting('button_label');

            // $wp_customize->add_control('button_label',  array(

            //     'label' => 'Label',

            //     'section' => 'header',

            //     'type' => 'text',

            //     'settings' => 'button_label'

            // ));  

            // $wp_customize->add_setting('button_url');

            // $wp_customize->add_control('button_url',  array(

            //     'label' => 'URL',

            //     'section' => 'header',

            //     'type' => 'url',

            //     'settings' => 'button_url'

            // ));                    

            // $wp_customize->add_setting('horario');

            // $wp_customize->add_control('horario',  array(

            //     'label' => 'Horário de Atendimento',

            //     'section' => 'footer',

            //     'type' => 'textarea',

            //     'settings' => 'horario'

            // ));                          

            $social_networks = array(
                array(
                    'title' => 'Facebook',
                    'slug' => 'facebook'
                ),
                array(
                    'title' => 'Twitter',
                    'slug' => 'twitter'
                ), 
                array(
                    'title' => 'Pinterest',
                    'slug' => 'pinterest'
                ),  
                array(
                    'title' => 'Vimeo',
                    'slug' => 'vimeo'
                ),  
                array(
                    'title' => 'Github',
                    'slug' => 'github'
                ),  
                array(
                    'title' => 'Linkedin',
                    'slug' => 'linkedin'
                ), 
                array(
                    'title' => 'Youtube',
                    'slug' => 'youtube'
                ),                                                                                            
            );

            if(!empty($social_networks)){
                $wp_customize->add_section( 'social_networks' , array(
                    'title'       => __( 'Social Networks' ),
                    'panel' => 'customization',
                    'priority'    => 0
                ));  
                foreach ($social_networks as $key => $value) {
                    $wp_customize->add_setting($value['slug']);

                    $wp_customize->add_control($value['slug'],  array(

                        'label' => $value['title'],

                        'section' => 'social_networks',

                        'type' => 'text',

                        'settings' => $value['slug']

                    ));    
                }
            }
    }

 