CREATE DATABASE IF NOT EXISTS hospital_mvc
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE hospital_mvc;

-- =====================================
-- TABLA ROLES
-- =====================================

CREATE TABLE roles (
    id_rol INT AUTO_INCREMENT PRIMARY KEY,
    nombre_rol VARCHAR(50) NOT NULL UNIQUE
);

INSERT INTO roles (nombre_rol)
VALUES
('Administrador'),
('Doctor'),
('Recepcionista');

-- =====================================
-- TABLA USUARIOS
-- =====================================

CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    id_rol INT NOT NULL,
    estado ENUM('Activo', 'Inactivo') DEFAULT 'Activo',
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_usuario_rol
    FOREIGN KEY (id_rol)
    REFERENCES roles(id_rol)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);

-- =====================================
-- TABLA ESPECIALIDADES
-- =====================================

CREATE TABLE especialidades (
    id_especialidad INT AUTO_INCREMENT PRIMARY KEY,
    nombre_especialidad VARCHAR(100) NOT NULL UNIQUE
);

INSERT INTO especialidades (nombre_especialidad)
VALUES
('Cardiología'),
('Pediatría'),
('Neurología'),
('Dermatología'),
('Odontología'),
('Medicina General'),
('Ginecología'),
('Oftalmología');

-- =====================================
-- TABLA DOCTORES
-- =====================================

CREATE TABLE doctores (
    id_doctor INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    correo VARCHAR(100) UNIQUE,
    licencia_medica VARCHAR(100) NOT NULL UNIQUE,
    horario VARCHAR(100),
    id_especialidad INT NOT NULL,
    estado ENUM('Activo', 'Inactivo') DEFAULT 'Activo',

    CONSTRAINT fk_doctor_especialidad
    FOREIGN KEY (id_especialidad)
    REFERENCES especialidades(id_especialidad)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);

-- =====================================
-- TABLA PACIENTES
-- =====================================

CREATE TABLE pacientes (
    id_paciente INT AUTO_INCREMENT PRIMARY KEY,
    tipo_documento ENUM('CC', 'TI', 'CE', 'Pasaporte') NOT NULL,
    documento VARCHAR(20) NOT NULL UNIQUE,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    genero ENUM('Masculino', 'Femenino', 'Otro') NOT NULL,
    telefono VARCHAR(20),
    correo VARCHAR(100),
    direccion TEXT,
    eps VARCHAR(100),
    grupo_sanguineo VARCHAR(10),
    alergias TEXT,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =====================================
-- TABLA CITAS
-- =====================================

CREATE TABLE citas (
    id_cita INT AUTO_INCREMENT PRIMARY KEY,
    id_paciente INT NOT NULL,
    id_doctor INT NOT NULL,
    fecha_cita DATE NOT NULL,
    hora_cita TIME NOT NULL,
    motivo TEXT,
    consultorio VARCHAR(50),
    estado ENUM(
        'Pendiente',
        'Confirmada',
        'Cancelada',
        'Finalizada'
    ) DEFAULT 'Pendiente',

    CONSTRAINT fk_cita_paciente
    FOREIGN KEY (id_paciente)
    REFERENCES pacientes(id_paciente)
    ON UPDATE CASCADE
    ON DELETE RESTRICT,

    CONSTRAINT fk_cita_doctor
    FOREIGN KEY (id_doctor)
    REFERENCES doctores(id_doctor)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);

-- =====================================
-- TABLA HISTORIAS CLINICAS
-- =====================================

CREATE TABLE historias_clinicas (
    id_historia INT AUTO_INCREMENT PRIMARY KEY,
    id_paciente INT NOT NULL,
    id_doctor INT NOT NULL,
    id_cita INT NOT NULL UNIQUE,

    sintomas TEXT NOT NULL,
    diagnostico TEXT NOT NULL,
    tratamiento TEXT,
    observaciones TEXT,

    fecha_historia TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_historia_paciente
    FOREIGN KEY (id_paciente)
    REFERENCES pacientes(id_paciente)
    ON UPDATE CASCADE
    ON DELETE RESTRICT,

    CONSTRAINT fk_historia_doctor
    FOREIGN KEY (id_doctor)
    REFERENCES doctores(id_doctor)
    ON UPDATE CASCADE
    ON DELETE RESTRICT,

    CONSTRAINT fk_historia_cita
    FOREIGN KEY (id_cita)
    REFERENCES citas(id_cita)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);

-- =====================================
-- TABLA MEDICAMENTOS
-- =====================================

CREATE TABLE medicamentos (
    id_medicamento INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL UNIQUE,
    descripcion TEXT
);

INSERT INTO medicamentos (nombre, descripcion)
VALUES
('Acetaminofén', 'Analgésico y antipirético'),
('Ibuprofeno', 'Antiinflamatorio no esteroideo'),
('Amoxicilina', 'Antibiótico'),
('Loratadina', 'Antihistamínico'),
('Omeprazol', 'Protector gástrico');

-- =====================================
-- TABLA RECETAS
-- =====================================

CREATE TABLE recetas (
    id_receta INT AUTO_INCREMENT PRIMARY KEY,
    id_historia INT NOT NULL,
    id_medicamento INT NOT NULL,

    dosis VARCHAR(100) NOT NULL,
    frecuencia VARCHAR(100) NOT NULL,
    duracion VARCHAR(100) NOT NULL,

    CONSTRAINT fk_receta_historia
    FOREIGN KEY (id_historia)
    REFERENCES historias_clinicas(id_historia)
    ON UPDATE CASCADE
    ON DELETE CASCADE,

    CONSTRAINT fk_receta_medicamento
    FOREIGN KEY (id_medicamento)
    REFERENCES medicamentos(id_medicamento)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);

-- =====================================
-- TABLA LOGS DEL SISTEMA
-- =====================================

CREATE TABLE logs_sistema (
    id_log INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(100) NOT NULL,
    accion TEXT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =====================================
-- ÍNDICES PARA OPTIMIZACIÓN
-- =====================================

CREATE INDEX idx_usuario_correo
ON usuarios(correo);

CREATE INDEX idx_paciente_documento
ON pacientes(documento);

CREATE INDEX idx_cita_fecha
ON citas(fecha_cita);

CREATE INDEX idx_doctor_especialidad
ON doctores(id_especialidad);

CREATE INDEX idx_historia_paciente
ON historias_clinicas(id_paciente);