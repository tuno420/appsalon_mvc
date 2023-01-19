<?php

namespace Controllers;

use MVC\Router;

class CitaController {
    public static function index(Router $router) {
        
        initSes(); // A función esta rara que fixen para evitar duplicado de sesión
        
        isAuth(); // Comprobar que esté autenticado
        
        $router->render('cita/index', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
}