<?php

class gen_theme {
    function add_work($arr){
        $data['images'] = $arr['attachment_url'];
        $data['name'] = $arr['name_rab'];
        $data['link'] = $arr['link_rab'];
        global $wpdb;
        $wpdb->insert('work', $data );
    }

    function get_work(){
        global $wpdb;
        $res = $wpdb->get_results("SELECT * FROM work");
        return $res;
    }

    function delete_work($id){
        global $wpdb;
        $wpdb->delete( 'work', array( 'id_work' => $id ) );
    }
} 