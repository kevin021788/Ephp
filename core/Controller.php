<?php
namespace Core;

class Controller{
	/**
	 * 当前客户端
	 * @var type 
	 */
	public $fd = null;
	/**
	 * 使用TCP WEBSOCKET协议
	 * 收到的客户端数据
	 * @var type 
	 */
	public $client_data = null;
	/**
     * http response
     * @var \swoole_http_request
     */
    protected $request = null;
    /**
     * http response
     * @var \swoole_http_response
     */
    protected $response = null;
	
	/**
	 * 设置数据
	 * @param type $fd fd 客服的标识符
	 * @param type $client_data 客户端数据
	 * @param type $request http请求
	 * @param type $response http 响应
	 */
	public function before($fd,$client_data,$request,$response) {
		$this->fd = $fd;
		$this->client_data = $client_data;
		$this->request = $request;
		$this->response = $response;
	}
	
	/**
	 * 释放对象数据
	 */
	public function after(){
		$this->fd = null;
        $this->client_data = null;
        $this->request = null;
        $this->response = null;
    }
}