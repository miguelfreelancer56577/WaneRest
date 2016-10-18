<?php

class Service_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function getAllPurchaseOrder()
        {
                $query = $this->db->get('purchaseorder');
                return $query->result();
        }
        
        public function getAllPurchaseOrderDetail()
        {
                $query = $this->db->get('purchaseorderdetail');
                return $query->result();
        }
        
        public function insertTokenService($params) {
            $query = $this->db->insert('token', $params);
            return $query;
        }

        public function insertLocation($params) {
            $query = $this->db->insert('location', $params);
            return $query;
        }

        
}