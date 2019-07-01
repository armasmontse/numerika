<?php

    $query_args;

    // Query post type 'expositores'
    $query_args = array(
        'post_type'         => 'Soluciones',
        'post_status'       => 'publish',
        'order' => 'ASC'

    );
    $solutions = array();
    $query = new WP_Query($query_args);
    if ($query->have_posts()) {

        // Start looping over the query results.
        while ($query->have_posts()) {
            $query->the_post();
            $title =get_the_title();
            $objectives=array();
             if(have_rows("objectives")){ while(have_rows("objectives")){the_row();
                  array_push($objectives, get_sub_field("objective__label"));
             }}
            array_push($solutions, ["title"=>$title,"description"=>get_field("description"),"objectives"=>$objectives]);

            // Contents of the queried post results go here.
        }
    }



    wp_reset_postdata();
