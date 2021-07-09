<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;



class WordpressController extends Controller
{
    private $url = 'http://localhost/ilogica/wordpress/wp-json/wp/v2/';
    public function index(){
        $menu = $this->getMenu();
        $settings = $this->getSettings();
        $pages = $this->getPages();
        $post = $this->getPage('inicio');
        return view('index', compact('menu', 'settings', 'pages', 'post'));
    }

    public function loadPage($slug, $idPage){
        $menu = $this->getMenu();
        $settings = $this->getSettings();
        $post = $this->getPage($slug);
        $pages = $this->getPages();
        return view('page', compact('menu', 'settings', 'post', 'pages'));
    }

    

    protected function getMenu(){
        $cliente = new Client();
        $response = $cliente->get($this->url . 'menu');
        $menu = json_decode($response->getBody());
        return json_decode($response->getBody());
    }

    protected function getSettings(){
        $cliente = new Client([
            'auth' => [
                getenv('APPLICATION_PASSWORD_USERNAME'),
                getenv('APPLICATION_PASSWORD'),

            ]
        ]);

        $response = $cliente->get($this->url . 'settings');
        return json_decode($response->getBody());
    }

    protected function getPosts(){
        $cliente = new Client([
            'auth' => [
                getenv('APPLICATION_PASSWORD_USERNAME'),
                getenv('APPLICATION_PASSWORD'),

            ]
        ]);

        $response = $cliente->get($this->url . 'posts');
        return json_decode($response->getBody());
    }

    protected function getPages(){
        $cliente = new Client([
            'auth' => [
                getenv('APPLICATION_PASSWORD_USERNAME'),
                getenv('APPLICATION_PASSWORD'),

            ]
        ]);

        $response = $cliente->get($this->url . 'pages');
        return json_decode($response->getBody());
    }

    protected function getPage($slug){
        $cliente = new Client([
            'auth' => [
                getenv('APPLICATION_PASSWORD_USERNAME'),
                getenv('APPLICATION_PASSWORD'),

            ]
        ]);

        $response = $cliente->get($this->url . 'pages?_embed&slug='.$slug);
        return json_decode($response->getBody());
    }

    protected function getPost($slug){
        $cliente = new Client([
            'auth' => [
                getenv('APPLICATION_PASSWORD_USERNAME'),
                getenv('APPLICATION_PASSWORD'),

            ]
        ]);

        $response = $cliente->get($this->url . 'posts?_embed&slug='.$slug);
        return json_decode($response->getBody());
    }
}
