<?php
/////////////////PUNTO 1///////////////////////////
class Persona {
    private $nombre;
    private $edad;

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setEdad($edad){
        $this->edad=$edad;
    }
    public function getEdad(){
        return $this->edad;
    }
}
 $persona=new Persona;
 $persona->setNombre('marta');
 echo $persona->getNombre();

 $persona->setEdad(25);
 echo $persona->getEdad();

 ////////////////////////////////Punto2////////////////////

 class Calculadora{

    private $nume1;
    private $nume2;
    public function sumar($num1,$num2){
        $this->nume1=$num1;
        $this->nume2=$num2;
        echo $this->nume1 + $this->nume2;

    }
    public function restar($num1,$num2){
        $this->nume1=$num1;
        $this->nume2=$num2;
        echo $this->nume1 - $this->nume2;

    }
    public function multiplicar($num1,$num2){
        $this->nume1=$num1;
        $this->nume2=$num2;
        echo $this->nume1 * $this->nume2;

    }
    public function dividir($num1,$num2){
        $this->nume1=$num1;
        $this->nume2=$num2;
        echo $this->nume1 / $this->nume2;

    }
 }

 $calculadora=new Calculadora;
 $calculadora->sumar(25,24);
 $calculadora->restar(25,24);
 $calculadora->multiplicar(3,2);
 $calculadora->dividir(25,5);

/////////////////////////////////PUNTO 3///////////////////
 interface Animal {
    public function comer();
    public function dormir();
    
 }

 class Perro implements Animal{
    public function comer(){
        echo "el perro esta comiendo\n";
    }
    public function dormir(){
        echo "el perro esta durmiendo\n";
    }
    public function ladrar(){
        echo "el perro esta ladrando\n";
    }
 }

 $perro=new Perro;
 $perro->comer();
 $perro->dormir();
 $perro->ladrar();




?>
