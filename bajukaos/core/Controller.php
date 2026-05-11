<?php

class Controller {
    public function view($view, $data = []) {
        // Ini yang membuat data dari Controller bisa dikirim ke View
        extract($data);
        
        if (file_exists('views/' . $view . '.php')) {
            require_once 'views/' . $view . '.php';
        } else {
            die("File views/$view.php tidak ditemukan!");
        }
    }
}