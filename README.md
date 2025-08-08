1702200200143 
CREATE TABLE paseo_canino (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre_dueno VARCHAR(100),
  nombre_mascota VARCHAR(100),
  tipo_mascota VARCHAR(50),
  frecuencia_servicio VARCHAR(50),
  direccion VARCHAR(150),
  telefono VARCHAR(20),
  comentario TEXT
);
Descripción:
Almacena solicitudes de clientes interesados en servicios de paseo o cuidado canino, incluyendo datos del dueño, mascota y frecuencia deseada.


