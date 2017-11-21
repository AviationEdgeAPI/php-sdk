<?php

    class aviationEdge
    {
        private $key = "your_api_key";

        private $site_url = "https://aviation-edge.com/api/public";

        public function api($api, $params = array()) {
            
            $url = $this->site_url . "/" . $api. "?" . http_build_query(array_merge(array("key" => $this->key), $params));
            
            $data = file_get_contents($url);
           
            return $data;
            
        }
        
        public function __construct($key = "") {
            
            if(!empty($key)) $this->key = $key;
        
        }
    }
    
?>
