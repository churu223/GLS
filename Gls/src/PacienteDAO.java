import java.util.ArrayList;
import java.util.List;
public class PacienteDAO {
    private List<Paciente> pacientes;

    public PacienteDAO() {
        this.pacientes = new ArrayList<>();
    }

    public void agregarPaciente(Paciente paciente) {
        pacientes.add(paciente);
    }

    public void eliminarPaciente(int id) {
        pacientes.removeIf(p -> p.getId() == id);
    }

    public Paciente buscarPaciente(int id) {
        for (Paciente paciente : pacientes) {
            if (paciente.getId() == id) {
                return paciente;
            }
        }
        return null; // Si no se encuentra el paciente
    }

    public void actualizarPaciente(Paciente pacienteActualizado) {
        for (int i = 0; i < pacientes.size(); i++) {
            if (pacientes.get(i).getId() == pacienteActualizado.getId()) {
                pacientes.set(i, pacienteActualizado);
                break;
            }
        }
    }

    public List<Paciente> obtenerTodosPacientes() {
        return pacientes;
    }
}   

