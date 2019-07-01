<?php
    $query_args;

    // Query post type 'expositores'
    $query_args = array(
        'post_type'         => 'Proyecto',
        'post_status'       => 'publish',
        'order' => 'ASC'

    );
    $projects = array();
    $query = new WP_Query($query_args);
    if ($query->have_posts()) {

        // Start looping over the query results.
        while ($query->have_posts()) {
            $query->the_post();
            $terms = wp_get_object_terms($post->ID, 'tipos');
            $termText ="";
            $termId =array();
            foreach ($terms as $key => $value) {
                if($key != count($terms)-1){
                    $termText.=$value->name." / ";
                }else{
                    $termText.=$value->name;
                }
                array_push($termId, $value->term_id);
            }
            $title =get_the_title();
            array_push($projects, ["title"=>$title,"terms_id"=>$termId,"terms"=>$termText,"link"=>get_permalink(),"description"=>get_field("planteamiento"),"image"=>get_field("thumbnail")["url"]]);

            // Contents of the queried post results go here.
        }
    }
    $categories = get_terms([
        'taxonomy'   => 'tipos',
        'hide_empty' => false,
    ]);

    wp_reset_postdata();
