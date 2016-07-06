<?php

class Parser
{
    private $url;
    private $container;
    private $html;

    private static $path = 'images';

    public function __construct($url, $container)
    {
        $this->url = $url;
        $this->container = $container;
    }

    private function getHTML()
    {
        echo "Получаю контент...\n";
        $this->html = html5qp($this->url);
    }

    public function parse()
    {
        $this->getHTML();
        $this->getImage();
    }

    private function getImage()
    {
        echo "Ищу изображение...\n";
        $path = $this->mkDir();

        $container = qp($this->html, $this->container)->first();
        if ($container->tag() != 'img') {
            $image = qp($container, 'img')->get(0);
        } else {
            $image = $container->get(0);
        }
        
        if ($image) {
            $url = $image->getAttribute('src');
            $url = preg_replace("/^\.\//", '/', $url);
            $path_ = $path . basename($url);
            if (!file_exists($path_)) {
                echo "Загружаю изображение...\n";
                copy($this->url . $url, $path_);
            }
        }
    }
    
    private function mkDir()
    {
        $path = PATH_ROOT . self::$path . "/";
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }

        return $path;
    }
}
