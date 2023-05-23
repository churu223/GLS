/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package models;

import jakarta.persistence.*;

/**
 *
 * @author christopher
 */
@Entity
public class Paciente {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name="ID_paciente")
   private int ID_paciente;
   private String Rut_Paciente;
   private String Nombre_paciente;
   private int edad;
    private String Correoelectronico;
    private String Direccion;
    private String Aseguradora;

    public Paciente() {
    }

    public Paciente(String Rut_Paciente, String Nombre_paciente, int edad, String Correoelectronico, String Direccion, String Aseguradora) {
        this.Rut_Paciente = Rut_Paciente;
        this.Nombre_paciente = Nombre_paciente;
        this.edad = edad;
        this.Correoelectronico = Correoelectronico;
        this.Direccion = Direccion;
        this.Aseguradora = Aseguradora;
    }

    /**
     * @return the ID_paciente
     */
    public int getID_paciente() {
        return ID_paciente;
    }

    /**
     * @param ID_paciente the ID_paciente to set
     */
    public void setID_paciente(int ID_paciente) {
        this.ID_paciente = ID_paciente;
    }

    /**
     * @return the Rut_Paciente
     */
    public String getRut_Paciente() {
        return Rut_Paciente;
    }

    /**
     * @param Rut_Paciente the Rut_Paciente to set
     */
    public void setRut_Paciente(String Rut_Paciente) {
        this.Rut_Paciente = Rut_Paciente;
    }

    /**
     * @return the Nombre_paciente
     */
    public String getNombre_paciente() {
        return Nombre_paciente;
    }

    /**
     * @param Nombre_paciente the Nombre_paciente to set
     */
    public void setNombre_paciente(String Nombre_paciente) {
        this.Nombre_paciente = Nombre_paciente;
    }

    /**
     * @return the edad
     */
    public int getEdad() {
        return edad;
    }

    /**
     * @param edad the edad to set
     */
    public void setEdad(int edad) {
        this.edad = edad;
    }

    /**
     * @return the Correoelectronico
     */
    public String getCorreoelectronico() {
        return Correoelectronico;
    }

    /**
     * @param Correoelectronico the Correoelectronico to set
     */
    public void setCorreoelectronico(String Correoelectronico) {
        this.Correoelectronico = Correoelectronico;
    }

    /**
     * @return the Direccion
     */
    public String getDireccion() {
        return Direccion;
    }

    /**
     * @param Direccion the Direccion to set
     */
    public void setDireccion(String Direccion) {
        this.Direccion = Direccion;
    }

    /**
     * @return the Aseguradora
     */
    public String getAseguradora() {
        return Aseguradora;
    }

    /**
     * @param Aseguradora the Aseguradora to set
     */
    public void setAseguradora(String Aseguradora) {
        this.Aseguradora = Aseguradora;
    }

    @Override
    public String toString() {
        return "Paciente{" + "ID_paciente=" + ID_paciente + ", Rut_Paciente=" + Rut_Paciente + ", Nombre_paciente=" + Nombre_paciente + ", edad=" + edad + ", Correoelectronico=" + Correoelectronico + ", Direccion=" + Direccion + ", Aseguradora=" + Aseguradora + '}';
    }
     
}
