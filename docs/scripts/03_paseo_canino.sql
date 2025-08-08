CREATE TABLE paseo_canino (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre_dueno VARCHAR(100),
  nombre_mascota VARCHAR(100),
  tipo_mascota VARCHAR(50),
  frecuencia_servicio VARCHAR(50),
  direccion VARCHAR(150),
  telefono VARCHAR(20),
  comentario TEXT
) COMMENT 'tabla de paseo canino';
  