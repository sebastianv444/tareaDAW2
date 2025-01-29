<?php

    class Usuario{
        private $id;
        private $nombre;
        private $apellidos;
        private $email;
        private $password;
        private $rol;
        private $imagen;

        //conexion a la base de datos
        private $db;

        public function __construct()
        {
            $this->db = Database::conectar();
        }

        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;
        }

        public function getNombre()
        {
                return $this->nombre;
        }
     
        public function setNombre($nombre)
        {
            //real scape string: sirve para evitar inyeccion de sql
            $this->nombre = $this->db->real_escape_string($nombre);
        }

        public function getApellidos()
        {
            return $this->apellidos;
        }


        public function setApellidos($apellidos)
        {
            //real scape string: sirve para evitar inyeccion de sql
            $this->apellidos = $this->db->real_escape_string($apellidos);

        }
 
        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($email)
        {
            //real scape string: sirve para evitar inyeccion de sql
            $this->email = $this->db->real_escape_string($email);
        }

        public function getPassword()
        {
            return password_hash($this->db->real_escape_string($this->password),
            PASSWORD_BCRYPT, ['cost'=>4]);
        }

        public function setPassword($password)
        {
            $this->password = $password;
        }

        public function getRol()
        {
            return $this->rol;
        }

        public function setRol($rol)
        {
            //real scape string: sirve para evitar inyeccion de sql
            $this->rol = $this->db->real_escape_string($rol);
        }

        public function getImagen()
        {
            return $this->imagen;
        }

        public function setImagen($imagen)
        {
            $this->imagen = $imagen;
        }

        // esta funcion guarda los usuarios registrados.
        public function salvar(){
            /* RECUERDA: cada que se hace una consulta o se accede a ficheros y archivos, 
            se hace un try catch */
            // hay que interpolar con llaves en las funciones para que funcione correctamente.
            $sql = "INSERT INTO usuarios VALUES(null,'{$this->getNombre()}','{$this->getApellidos()}',
            '{$this->getEmail()}','{$this->getPassword()}','user',null)";

            $salvar = $this->db->query($sql);

            $resultado = false;

            if($salvar){
                $resultado = true;
            }

            return $resultado;
        }

        public function login(){
            $resultado = false;
            //estas 2 siguientes variables es solo para hacer mas agil todo(no es necesario).
            $email = $this->email;
            $password = $this->password;

            //comprobamos
            $sql = "SELECT * FROM usuarios WHERE email = '$email';";
            //esto retorna un booleano;
            $login = $this->db->query($sql);

            if($login && $login->num_rows == 1){
                /* Devuelve un objeto con las propiedades de cadena que corresponden a la fila obtenida o 
                null si no hay más filas en el conjunto de resultados.  */
                $usuario = $login->fetch_object();

                //verificar la contraseña.
                // el segundo parametro $usuario->password, es el que creamos en el controler.
                //esto retorna un booleano
                $verificar = password_verify($password,$usuario->password);
            
                if($verificar){
                    $resultado = $usuario;
                }
            }
            return $resultado;
        }
    }