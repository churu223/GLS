public class Paciente {
  
        private int id;
        private String rut;
        private String nombre;
        private String direccion;
        private String telefono;
        private int edad;
        private String correo;
        private String aseguradora;
    
        // Constructor
        public Paciente(int id, String rut, String nombre, String direccion, String telefono, int edad, String correo, String aseguradora) {
            this.id = id;
            this.rut = rut;
            this.nombre = nombre;
            this.direccion = direccion;
            this.telefono = telefono;
            this.edad = edad;
            this.correo = correo;
            this.aseguradora = aseguradora;
        }
    
        // Getters y Setters
        public int getId() {
            return id;
        }
    
        public void setId(int id) {
            this.id = id;
        }
    
        public String getRut() {
            return rut;
        }
    
        public void setRut(String rut) {
            this.rut = rut;
        }
    
        public String getNombre() {
            return nombre;
        }
    
        public void setNombre(String nombre) {
            this.nombre = nombre;
        }
    
        public String getDireccion() {
            return direccion;
        }
    
        public void setDireccion(String direccion) {
            this.direccion = direccion;
        }
    
        public String getTelefono() {
            return telefono;
        }
    
        public void setTelefono(String telefono) {
            this.telefono = telefono;
        }
    
        public int getEdad() {
            return edad;
        }
    
        public void setEdad(int edad) {
            this.edad = edad;
        }
    
        public String getCorreo() {
            return correo;
        }
    
        public void setCorreo(String correo) {
            this.correo = correo;
        }
    
        public String getAseguradora() {
            return aseguradora;
        }
    
        public void setAseguradora(String aseguradora) {
            this.aseguradora = aseguradora;
        }
    }  
