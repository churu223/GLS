import java.util.List;
import java.util.Scanner;

public class App {
    public static void main(String[] args) throws Exception {

        PacienteDAO pacienteDAO = new PacienteDAO();

        Scanner scanner = new Scanner(System.in);

        int opcion;
        do {
            System.out.println("----- Menú de opciones -----");
            System.out.println("1. Agregar paciente");
            System.out.println("2. Eliminar paciente");
            System.out.println("3. Modificar paciente");
            System.out.println("4. Mostrar todos los pacientes");
            System.out.println("5. Salir");
            System.out.print("Ingrese una opción: ");
            opcion = scanner.nextInt();
            scanner.nextLine(); // Consumir el salto de línea pendiente

            switch (opcion) {
                case 1:
                    agregarPaciente(scanner, pacienteDAO);
                    break;
                case 2:
                    eliminarPaciente(scanner, pacienteDAO);
                    break;
                case 3:
                    modificarPaciente(scanner, pacienteDAO);
                    break;
                case 4:
                    mostrarPacientes(pacienteDAO);
                    break;
                case 5:
                    System.out.println("Saliendo del programa...");
                    break;
                default:
                    System.out.println("Opción inválida. Por favor, ingrese una opción válida.");
                    break;
            }
            System.out.println();
        } while (opcion != 5);

        scanner.close();
    }

    private static void agregarPaciente(Scanner scanner, PacienteDAO pacienteDAO) {
        System.out.println("Agregar un nuevo paciente:");
        System.out.print("ID: ");
        int id = scanner.nextInt();
        scanner.nextLine(); // Consumir el salto de línea pendiente
        System.out.print("RUT: ");
        String rut = scanner.nextLine();
        System.out.print("Nombre: ");
        String nombre = scanner.nextLine();
        System.out.print("Dirección: ");
        String direccion = scanner.nextLine();
        System.out.print("Teléfono: ");
        String telefono = scanner.nextLine();
        System.out.print("Edad: ");
        int edad = scanner.nextInt();
        scanner.nextLine(); // Consumir el salto de línea pendiente
        System.out.print("Correo electrónico: ");
        String correo = scanner.nextLine();
        System.out.print("Aseguradora: ");
        String aseguradora = scanner.nextLine();

        Paciente paciente = new Paciente(id, rut, nombre, direccion, telefono, edad, correo, aseguradora);
        pacienteDAO.agregarPaciente(paciente);

        System.out.println("Paciente agregado correctamente.");
    }

    private static void eliminarPaciente(Scanner scanner, PacienteDAO pacienteDAO) {
        System.out.print("Ingrese el ID del paciente a eliminar: ");
        int id = scanner.nextInt();
        scanner.nextLine(); // Consumir el salto de línea pendiente

        pacienteDAO.eliminarPaciente(id);

        System.out.println("Paciente eliminado correctamente.");
    }

    private static void modificarPaciente(Scanner scanner, PacienteDAO pacienteDAO) {
        System.out.print("Ingrese el ID del paciente a modificar: ");
        int id = scanner.nextInt();
        scanner.nextLine(); // Consumir el salto de línea pendiente

        Paciente pacienteExistente = pacienteDAO.buscarPaciente(id);
        if (pacienteExistente != null) {
            System.out.println("Modificar paciente:");
            System.out.print("RUT [" + pacienteExistente.getRut() + "]: ");
            String rut = scanner.nextLine();
            System.out.print("Nombre [" + pacienteExistente.getNombre() + "]: ");
            String nombre = scanner.nextLine();
            System.out.print("Dirección [" + pacienteExistente.getDireccion() + "]: ");
            String direccion = scanner.nextLine();
            System.out.print("Teléfono [" + pacienteExistente.getTelefono() + "]: ");
            String telefono = scanner.nextLine();
            System.out.print("Edad [" + pacienteExistente.getEdad() + "]: ");
            int edad = scanner.nextInt();
            scanner.nextLine(); // Consumir el salto de línea pendiente
            System.out.print("Correo electrónico [" + pacienteExistente.getCorreo() + "]: ");
            String correo = scanner.nextLine();
            System.out.print("Aseguradora [" + pacienteExistente.getAseguradora() + "]: ");
            String aseguradora = scanner.nextLine();

            Paciente pacienteActualizado = new Paciente(id, rut, nombre, direccion, telefono, edad, correo,
                    aseguradora);
            pacienteDAO.actualizarPaciente(pacienteActualizado);

            System.out.println("Paciente actualizado correctamente.");
        } else {
            System.out.println("No se encontró el paciente con el ID especificado.");
        }
    }

    private static void mostrarPacientes(PacienteDAO pacienteDAO) {
    List<Paciente> pacientes = pacienteDAO.obtenerTodosPacientes();
    if (pacientes.isEmpty()) {
        System.out.println("No hay pacientes registrados.");
    } else {
        System.out.println("Todos los pacientes:");
        for (Paciente paciente : pacientes) {
            System.out.println("ID: " + paciente.getId());
            System.out.println("RUT: " + paciente.getRut());
            System.out.println("Nombre: " + paciente.getNombre());
            System.out.println("Dirección: " + paciente.getDireccion());
            System.out.println("Teléfono: " + paciente.getTelefono());
            System.out.println("Edad: " + paciente.getEdad());
            System.out.println("Correo electrónico: " + paciente.getCorreo());
            System.out.println("Aseguradora: " + paciente.getAseguradora());
            System.out.println();
        }
    }
}

}
