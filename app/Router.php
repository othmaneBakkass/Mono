<?php

namespace App;

class Router
{

    private  array  $handlers;
    private  string $METHOD_POST = "POST";
    private  string $METHOD_GET = "GET";
    private $notFoundHandler;


    public function get(string $path, $handler): void
    {
        $this->addHandler($this->METHOD_GET, $path, $handler);
    }

    public function post(string $path, $handler): void
    {
        $this->addHandler($this->METHOD_POST, $path, $handler);
    }

    private function addHandler(string $method, string $path, $handler): void
    {
        $this->handlers["$method.$path"] = [
            'path' => $path,
            'method' => $method,
            'handler' => $handler
        ];
    }

    public function addNotFoundHandler($handler): void
    {
        $this->notFoundHandler = $handler;
    }

    public function run()
    {
        $requestUri = parse_url($_SERVER['REQUEST_URI']);
        $trimPath = $requestUri['path'];
        $requestPath = str_replace('/Mono', '', $trimPath);

        $requestMethod = $_SERVER['REQUEST_METHOD'];

        $callback = null;

        foreach ($this->handlers as $handler) {
            if ($handler['path'] === $requestPath && $requestMethod === $handler['method']) {
                $callback = $handler['handler'];
            }
        }
        if (!$callback) {
            if (!empty($this->notFoundHandler)) {
                $callback = $this->notFoundHandler;
            }
        }
        call_user_func_array($callback, [array_merge($_GET, $_POST)]);
    }
}
