<?php

/*Crea una clase "Libro" que tenga las propiedades "título", "autor" y "año de publicación". A
continuación, crea un método dentro de la clase llamado "mostrar detalles" que muestre toda la
información del libro. Luego, crear un método que permita comparar 2 libros y determinar cuál tienen
más páginas. Finalmente crea una instancia/objeto de esa clase y prueba ambos métodos. */

class Libro {
    private $titulo;
    private $autor;
    private $añoDepublicacion;

    public function __construct($titulo,$autor,$añoDepublicacion){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->añoDepublicacion = $añoDepublicacion;
    }

    public function mostrarDetalles(){
        echo "Título: ".$this->titulo."<br>";
        echo "Autor: ".$this->autor."<br>";
        echo "Año de publicación: ".$this->añoDepublicacion."<br>";
        
    }

}