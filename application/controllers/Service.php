<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {
    
    public $response;

    public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->model(array('Service_model'));
                $this->load->helper(array('url'));
                $this->response = array(
                                        "service"=>"messenger",
                                        "type" => "response",
                                        "token" => "0",
                                        "option" => "",
                                        "result" => ""
                                    );
        }
        
        public function logout() {
            header('Accept: application/json');
            header('Content-Type: application/json');
            if(empty($_REQUEST)){
                print_r("solicitud sin contenido");
            }else{
//                print_r("solicitud con contenido");
//                print_r($_REQUEST["data"]);
                $data = json_decode($_REQUEST["data"]);
                $this->response["option"] = "logout";
                $this->response["token"] = "0";
                $this->response["result"] = "success";
                $this->Service_model->insertTokenService(array(
                        "nameService" => "logout",
                        "time" => date("y-m-d h:m:s"),
                        "token" => $data->token
                    ));
                print_r(json_encode($this->response));
            }
        }
        public function login() {
            header('Accept: application/json');
            header('Content-Type: application/json');
            if(empty($_REQUEST)){
                print_r("solicitud sin contenido");
            }else{
//                print_r("solicitud con contenido");
//                print_r($_REQUEST["data"]);
                $data = json_decode($_REQUEST["data"]);
                $this->response["option"] = "login";
                if($data->messenger->username == "admin" && $data->messenger->password == "admin"){
                    $this->response["result"] = "success";
                    $this->response["token"] = "helloworld";
                    $this->Service_model->insertTokenService(array(
                        "nameService" => "login",
                        "time" => date("y-m-d h:m:s"),
                        "token" => $this->response["token"]
                    ));
                }else{
                    $this->response["result"] = "failure";
                }
                print_r(json_encode($this->response));
            }
        }
        
        public function index() {
            $this->load->view("index");
        }

	public function greeting()
	{
            header('Accept: application/json, text/javascript, */*; q=0.01');
//            header('Content-Type: application/json');
            if(empty($_REQUEST)){
                print_r("solicitud sin contenido");
            }else{
//                print_r("solicitud con contenido");
                print_r($_REQUEST);
            }

//	    print_r(json_encode(array(array("id" => 349, "content" => "xxxxx"),array("id" => 6565656565, "content" => "primer id"), array("id" => 2, "content" => "segundo ejemplo........"))));
//        print_r(json_encode(array(array("id" => 349, "content" => "xxxxx"), array("id" => 6565656565, "content" => "primer id"), array("id" => 2, "content" => "segundo ejemplo........"))));
//        print_r(json_encode(array("id" => 1, "content" => "Hello World")));
//            print_r($_REQUEST);
	}
        
        public function getAllPurchaseOrder()
        {
                     header('Accept: application/json');
            header('Content-Type: application/json');
            if(empty($_REQUEST)){
                print_r("solicitud sin contenido");
            }else{
//                print_r("solicitud con contenido");
//                print_r($_REQUEST["data"]);
                $data = json_decode($_REQUEST["data"]);
                $this->response["option"] = "login";
                $this->response["result"] = "success";
                $this->Service_model->insertTokenService(array(
                        "nameService" => "getAllPurchaseOrder",
                        "time" => date("y-m-d h:m:s"),
                        "token" => $data->token
                    ));
                $this->response["polist"] = (object)array(
                    "arraysize" => 3,
                    "array" => array(
                        (object)array(
                            "poid" => 123456,
                            "statusid" => 6,
                            "color" => "#FF84DCB6",
                            "status" => "Asignado",
                            "deliverydate"=> "2016-09-29 18:10:00",
                            "deliveryaddress" => "Tamaulipas 13, Condesa, 34567, Cuauhtémoc, D.F.",
                            "mapurl" => "https://maps.google.com.mx?latitude=19.383&longitude=-99.188374" 
                        ),
                        (object)array(
                            "poid" => 123457,
                            "statusid" => 2,
                            "color" => "#FF849DDC",
                            "status" => "Pedido Cancelado",
                            "deliverydate"=> "2016-09-30 23:10:00",
                            "deliveryaddress" => "Estado de Mexico, ixtapaluca",
                            "mapurl" => "https://maps.google.com.mx?latitude=19.3455&longitude=-99.185564" 
                        ),
                        (object)array(
                            "poid" => 123457,
                            "statusid" => 3,
                            "color" => "#FFC484DC",
                            "status" => "Artículo Cancelado",
                            "deliverydate"=> "2016-09-30 23:10:00",
                            "deliveryaddress" => "Estado de Mexico, ixtapaluca",
                            "mapurl" => "https://maps.google.com.mx?latitude=19.3455&longitude=-99.185564" 
                        ),
                        (object)array(
                            "poid" => 123457,
                            "statusid" => 4,
                            "color" => "#FFDC84D7",
                            "status" => "Pago confirmado",
                            "deliverydate"=> "2016-09-30 23:10:00",
                            "deliveryaddress" => "Estado de Mexico, ixtapaluca",
                            "mapurl" => "https://maps.google.com.mx?latitude=19.3455&longitude=-99.185564" 
                        ),
                        (object)array(
                            "poid" => 123457,
                            "statusid" => 5,
                            "color" => "#FF635358",
                            "status" => "Pago rechazado",
                            "deliverydate"=> "2016-09-30 23:10:00",
                            "deliveryaddress" => "Estado de Mexico, ixtapaluca",
                            "mapurl" => "https://maps.google.com.mx?latitude=19.3455&longitude=-99.185564" 
                        ),
                        (object)array(
                            "poid" => 123457,
                            "statusid" => 6,
                            "color" => "#FFDCA684",
                            "status" => "Asignado",
                            "deliverydate"=> "2016-09-30 23:10:00",
                            "deliveryaddress" => "Estado de Mexico, ixtapaluca",
                            "mapurl" => "https://maps.google.com.mx?latitude=19.3455&longitude=-99.185564" 
                        ),
                        (object)array(
                            "poid" => 123457,
                            "statusid" => 7,
                            "color" => "#FFD4DC84",
                            "status" => "Empaquetando pedido",
                            "deliverydate"=> "2016-09-30 23:10:00",
                            "deliveryaddress" => "Estado de Mexico, ixtapaluca",
                            "mapurl" => "https://maps.google.com.mx?latitude=19.3455&longitude=-99.185564" 
                        ),
                        (object)array(
                            "poid" => 123457,
                            "statusid" => 8,
                            "color" => "#FFB7B2CC",
                            "status" => "En camino",
                            "deliverydate"=> "2016-09-30 23:10:00",
                            "deliveryaddress" => "Estado de Mexico, ixtapaluca",
                            "mapurl" => "https://maps.google.com.mx?latitude=19.3455&longitude=-99.185564" 
                        ),
                        (object)array(
                            "poid" => 123457,
                            "statusid" => 9,
                            "color" => "#FF388737",
                            "status" => "Entregado",
                            "deliverydate"=> "2016-09-30 23:10:00",
                            "deliveryaddress" => "Estado de Mexico, ixtapaluca",
                            "mapurl" => "https://maps.google.com.mx?latitude=19.3455&longitude=-99.185564" 
                        ),
                        (object)array(
                            "poid" => 123457,
                            "statusid" => 1,
                            "color" => "#FF902443",
                            "status" => "Nuevo",
                            "deliverydate"=> "2016-09-30 23:10:00",
                            "deliveryaddress" => "Es
                            tado de Mexico, ixtapaluca",
                            "mapurl" => "https://maps.google.com.mx?latitude=19.3455&longitude=-99.185564" 
                        ),
                        (object)array(
                            "poid" => 123457,
                            "statusid" => 10,
                            "color" => "#FFDC8484",
                            "status" => "Terminal de proveedor entregada",
                            "deliverydate"=> "2016-09-30 23:10:00",
                            "deliveryaddress" => "Estado de Mexico, ixtapaluca",
                            "mapurl" => "https://maps.google.com.mx?latitude=19.3455&longitude=-99.185564" 
                        )
                    )
                    );
                
                
                print_r(json_encode($this->response));
            }
        }
        
        public function getAllPurchaseOrderDetail()
        {
            header('Accept: application/json');
            header('Content-Type: application/json');
            if(empty($_REQUEST)){
                print_r("solicitud sin contenido");
            }else{
//                print_r("solicitud con contenido");
//                print_r($_REQUEST["data"]);
                $data = json_decode($_REQUEST["data"]);
                $this->response["option"] = "podetail";
                $this->response["result"] = "success";
                $this->Service_model->insertTokenService(array(
                        "nameService" => "getAllPurchaseOrderDetail",
                        "time" => date("y-m-d h:m:s"),
                        "token" => $data->token
                    ));
                $this->response["podetail"] = (object)array(
                    "arraysize" => 3,
                    "array" => array(
                        (object)array(
                            "poid"  => "123456",
                            "sku" => "0065667607003",
                            "quantity"=> "5",
                            "shortdescription"=> "Cerveza clara de barril 650 ml" 
                        ),
                        (object)array(
                            "poid"  => "123489",
                            "sku" => "0065667602367",
                            "quantity"=> "7",
                            "shortdescription"=> "Vino tinto" 
                        )
                    )
                    );
                
                
                print_r(json_encode($this->response));
            }
        }
        
        public function catalogPurchaseOrder()
        {
            header('Accept: application/json');
            header('Content-Type: application/json');
            if(empty($_REQUEST)){
                print_r("solicitud sin contenido");
            }else{
//                print_r("solicitud con contenido");
//                print_r($_REQUEST["data"]);
                $data = json_decode($_REQUEST["data"]);
                $this->response["option"] = "postatuscatalog";
                $this->response["result"] = "success";
                $this->Service_model->insertTokenService(array(
                        "nameService" => "catalogPurchaseOrder",
                        "time" => date("y-m-d h:m:s"),
                        "token" => $data->token
                    ));
                $this->response["postatuscatalog"] = (object)array(
                    "arraysize" => 3,
                    "array" => array(
                        array( "statusid"=> "1", "status"=> "Nuevo", "description"=> "Pedido recién creado" ),
			array( "statusid"=> "2", "status"=> "Pedido Cancelado", "description"=> "El cliente canceló el pedido antes de que fuera asignado a un repartidor" ),
			array( "statusid"=> "3", "status"=> "Artículo Cancelado", "description"=> "El cliente canceló algún artículo antes de que fuera asignado a un repartidor" ),
			array( "statusid"=> "4", "status"=> "Pago confirmado", "description"=> "Pago confirmado / El usuario no canceló después de 5 minutos de creado el pedido" ),
			array( "statusid"=> "5", "status"=> "Pago rechazado", "description"=> "El banco rechazó el cargo a la tarjeta" ),
			array( "statusid"=> "6", "status"=> "Asignado", "description"=> "El repartidor está listo para pagar los artículos" ),
			array( "statusid"=> "7", "status"=> "Empaquetando pedido", "description"=> "El repartidor está listo para pagar los artículos" ),
			array( "statusid"=> "8", "status"=> "En camino", "description"=> "El repartidor está en camino a la dirección de entrega" ),
			array( "statusid"=> "9", "status"=> "Entregado", "description"=> "El repartidor dejó la mercancía en la dirección del cliente" ),
			array( "statusid"=> "10", "status"=> "Terminal de proveedor entregada", "description"=> "El repartidor devolvió la terminal al proveedor" ),
			array( "statusid"=> "11", "status"=> "Devolución parcial", "description"=> "Se realizará una devolución parcial al cliente" ),
			array( "statusid"=> "12", "status"=> "Devolucion total", "description"=> "Se realizará una devolución total al cliente" )
                    )
                    );
                
                
                print_r(json_encode($this->response));
            }
            
            
        }
        
        public function changeStatusPurchase()
        {
            header('Accept: application/json');
            header('Content-Type: application/json');
            if(empty($_REQUEST)){
                print_r("solicitud sin contenido");
            }else{
//                print_r("solicitud con contenido");
//                print_r($_REQUEST["data"]);
                $data = json_decode($_REQUEST["data"]);
                $this->response["option"] = "updatepostatus";
                $this->response["result"] = "success";                
                $this->Service_model->insertTokenService(array(
                        "nameService" => "changeStatusPurchase",
                        "time" => date("y-m-d h:m:s"),
                        "token" => $data->token
                    ));
                
                print_r(json_encode($this->response));
            }
            
        }
        
        public function changeStatusButtonPanic()
        {
            header('Accept: application/json');
            header('Content-Type: application/json');
            if(empty($_REQUEST)){
                print_r("solicitud sin contenido");
            }else{
//                print_r("solicitud con contenido");
//                print_r($_REQUEST["data"]);
                $data = json_decode($_REQUEST["data"]);
                $this->response["option"] = "pbstatus";
                $this->response["result"] = "success";                
                $this->Service_model->insertTokenService(array(
                        "nameService" => "changeStatusButtonPanic",
                        "time" => date("y-m-d h:m:s"),
                        "token" => $data->token
                    ));
                $this->response["pb"] = (object)array("status"=>"off");  
                
                print_r(json_encode($this->response));
            }
            
        }
        public function locationReport()
        {
            header('Accept: application/json');
            header('Content-Type: application/json');
            if(empty($_REQUEST)){
                print_r("solicitud sin contenido");
            }else{
//                print_r("solicitud con contenido");
//                print_r($_REQUEST["data"]);
                $data = json_decode($_REQUEST["data"]);
                $this->response["option"] = "locationreport";
                $this->response["result"] = "success";                
                $this->Service_model->insertTokenService(array(
                        "nameService" => "locationReport",
                        "time" => date("y-m-d h:m:s"),
                        "token" => $data->token
                    ));

                    $this->Service_model->insertLocation(array(
                        "longitud" => $data->location->longitude,
                        "latitud" => $data->location->latitude
                    ));

                
                
                print_r(json_encode($this->response));
            }
            
        }

        public function saveLocation(){
            header('Accept: application/json');
            header('Content-Type: application/json');
            if(empty($_REQUEST)){
                print_r("solicitud sin contenido");
            }else{
//                print_r("solicitud con contenido");
//                print_r($_REQUEST["data"]);
                $data = json_decode($_REQUEST["data"]);
                $rs = $this->Service_model->insertLocation(array(
                        "longitud" => $data->longitud,
                        "latitud" => $data->latitud
                    ));

                if($rs){
                    print_r(json_encode(true));    
                }else{
                    print_r(json_encode(false));
                }
                
                
            }
        }
        
        public function test() {
            header('Accept: application/json, text/javascript, */*; q=0.01');
            header('Content-Type: application/json');
            print_r($_REQUEST);
            
        }
        
}
