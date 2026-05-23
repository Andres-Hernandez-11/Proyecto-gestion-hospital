# 🏥 MEDICARE_PRO

Sistema web de gestión hospitalaria desarrollado con **PHP, MySQL, HTML, CSS y JavaScript**, siguiendo el patrón de arquitectura **MVC (Model - View - Controller)**.

**MEDICARE_PRO** permite administrar de manera eficiente pacientes, doctores y citas médicas dentro de un entorno hospitalario, implementando autenticación segura, manejo de sesiones y buenas prácticas de seguridad web.

Este proyecto fue desarrollado como parte de mi **portafolio profesional**, con el objetivo de demostrar habilidades en:

- Desarrollo Backend con PHP
- Bases de datos relacionales (MySQL)
- Arquitectura MVC
- Seguridad web
- CRUDs avanzados
- Desarrollo de software empresarial

---

## 🚀 Características Principales

✅ Arquitectura **MVC (Model - View - Controller)**  
✅ Sistema de autenticación con sesiones PHP  
✅ Login seguro con contraseñas cifradas (`password_hash`)  
✅ Protección contra **SQL Injection** mediante **PDO + Prepared Statements**  
✅ Protección contra ataques **XSS** (`htmlspecialchars`)  
✅ Dashboard dinámico con métricas hospitalarias  
✅ CRUD completo de pacientes  
✅ CRUD completo de doctores  
✅ CRUD completo de citas médicas  
✅ Relaciones entre entidades usando **Foreign Keys**  
✅ Diseño moderno y responsivo  
✅ Validaciones Backend  
✅ Middleware de autenticación

---

## 📸 Capturas del Sistema

### 🔐 Login
> Reemplaza esta imagen con tu captura

```md
![Login](public/assets/img/login.png)
```

### 📊 Dashboard
```md
![Dashboard](public/assets/img/dashboard.png)
```

### 👨‍⚕️ Gestión de Pacientes
```md
![Pacientes](public/assets/img/pacientes.png)
```

### 🩺 Gestión de Doctores
```md
![Doctores](public/assets/img/doctores.png)
```

### 📅 Gestión de Citas Médicas
```md
![Citas](public/assets/img/citas.png)
```

---

## 🏗️ Arquitectura del Proyecto

El proyecto sigue una arquitectura **MVC**, permitiendo una clara separación de responsabilidades y mejor mantenimiento del código.

```plaintext
MEDICARE_PRO/
│
├── app/
│   ├── config/
│   │   ├── config.php
│   │   └── session.php
│   │
│   ├── controllers/
│   │   ├── AuthController.php
│   │   ├── DashboardController.php
│   │   ├── PacienteController.php
│   │   ├── DoctorController.php
│   │   └── CitaController.php
│   │
│   ├── middleware/
│   │   └── AuthMiddleware.php
│   │
│   ├── models/
│   │   ├── Conexion.php
│   │   ├── Usuario.php
│   │   ├── Dashboard.php
│   │   ├── Paciente.php
│   │   ├── Doctor.php
│   │   └── Cita.php
│   │
│   ├── routes/
│   │   └── web.php
│   │
│   ├── views/
│   │   ├── auth/
│   │   ├── dashboard/
│   │   ├── pacientes/
│   │   ├── doctores/
│   │   ├── citas/
│   │   └── layouts/
│   │
│   └── helpers/
│       └── helper.php
│
├── public/
│   ├── assets/
│   │   ├── css/
│   │   ├── js/
│   │   └── img/
│   │
│   └── index.php
│
├── database/
│   └── hospital_mvc.sql
│
└── README.md
```

---

## 🛠️ Tecnologías Utilizadas

### Backend
- PHP 8+
- MySQL
- PDO (Prepared Statements)

### Frontend
- HTML5
- CSS3
- JavaScript

### Arquitectura
- MVC (Model - View - Controller)

### Seguridad
- SQL Injection Prevention
- XSS Prevention
- Password Hashing
- Session Authentication
- Middleware Protection

---

## 🗄️ Base de Datos

El sistema cuenta con una base de datos relacional en **MySQL**, implementando integridad referencial mediante **Foreign Keys**.

### Entidades Principales

### 👤 Usuarios
Gestión de autenticación del sistema.

### 🔐 Roles
Control de acceso del administrador.

### 🏥 Pacientes
Almacena información médica y personal de pacientes.

### 👨‍⚕️ Doctores
Gestión de profesionales médicos.

### 🩺 Especialidades
Clasificación médica de doctores.

### 📅 Citas
Relación entre pacientes y doctores con fechas, horarios y estados.

---

# ⚙️ Instalación del Proyecto

## 1️⃣ Clonar el repositorio

Mover el proyecto a la carpeta de tu servidor local.

Si utilizas **XAMPP** en Windows:

```bash
cd C:\xampp\htdocs\
git clone https://github.com/Andres-Hernandez-11/Proyecto-gestion-hospital.git MEDICARE_PRO
```

Debe quedar estructurado así:

```plaintext
C:\xampp\htdocs\MEDICARE_PRO
```

---

## 2️⃣ Instalar y activar XAMPP

Descarga e instala XAMPP:

https://www.apachefriends.org/

Asegúrate de iniciar los módulos:

- Apache
- MySQL

Desde el panel de control de XAMPP.

---

## 3️⃣ Crear e importar la Base de Datos

Abre tu navegador e ingresa a:

```plaintext
http://localhost/phpmyadmin
```

1. Crear una nueva base de datos llamada:

```plaintext
hospital_mvc
```

2. Selecciona la base de datos.

3. Ve a la pestaña **Importar**.

4. Selecciona el archivo:

```plaintext
database/hospital_mvc.sql
```

Esto creará automáticamente:

- Tablas
- Relaciones
- Llaves foráneas
- Datos iniciales

---

## 4️⃣ Configurar conexión

Abre el archivo:

```plaintext
app/config/config.php
```

Y verifica las credenciales:

```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'hospital_mvc');
define('DB_USER', 'root');
define('DB_PASS', '');

define('BASE_URL', 'http://localhost/MEDICARE_PRO/');
```

---

## 5️⃣ Ejecutar el proyecto

Ingresa desde tu navegador a:

```plaintext
http://localhost/MEDICARE_PRO
```

---

## 🔑 Credenciales de prueba

| Rol | Correo | Contraseña |
|------|---------|-------------|
| Administrador | admin@medicare.com | admin123 |

> **Nota:** Las credenciales pueden variar según los ajustes previos de la base de datos importada.

---

# 📌 Funcionalidades Implementadas

## 🔐 Autenticación
- Inicio y cierre de sesión
- Validación de credenciales
- Contraseñas cifradas
- Sesiones protegidas

## 📊 Dashboard
Indicadores en tiempo real con:

- Total de pacientes
- Total de doctores
- Citas totales
- Citas pendientes
- Últimas citas registradas

## 👨‍⚕️ Gestión de Pacientes
CRUD completo:

- Crear
- Leer
- Actualizar
- Eliminar

Incluye validación de documentos duplicados.

## 🩺 Gestión de Doctores
- Registro de personal médico
- Asociación con especialidades
- Gestión de horarios

## 📅 Gestión de Citas Médicas
Flujo completo de:

- Asignación de paciente
- Asignación de doctor
- Fecha de cita
- Hora
- Estado
- Motivo médico
- Consultorio

---

# 🔒 Seguridad Implementada

El sistema implementa diversas medidas de seguridad para mitigar vulnerabilidades comunes de **OWASP**.

### 🛡️ Protección contra SQL Injection
Uso estricto de:

- `prepare()`
- `bindParam()`
- `execute()`

Mediante **PDO Prepared Statements**.

### 🛡️ Protección contra XSS (Cross-Site Scripting)

Sanitización y escape de datos dinámicos mediante:

```php
htmlspecialchars()
```

### 🔑 Contraseñas Seguras

Hashing de contraseñas mediante:

```php
password_hash()
```

Validación robusta con:

```php
password_verify()
```

### 🔐 Manejo Seguro de Sesiones

Implementación de:

```php
session_regenerate_id(true)
```

Tras el inicio de sesión para mitigar riesgos de **Session Hijacking**.

---

# 🚧 Mejoras Futuras

- [ ] Historial clínico digital
- [ ] Historial de consultas por paciente
- [ ] Gestión de medicamentos y recetas
- [ ] Generación de reportes clínicos PDF
- [ ] Calendario médico interactivo (FullCalendar)
- [ ] Sistema de facturación hospitalaria
- [ ] Caja y pagos
- [ ] Recordatorios automáticos de citas vía correo
- [ ] API REST para aplicación móvil

---

# 👨‍💻 Autor

## Andres Felipe Hernandez
**Software Developer**

### Especialidades
`PHP` `MySQL` `MVC` `Power Platform` `Automatización de Procesos`

### GitHub
https://github.com/Andres-Hernandez-11

---

# 📄 Licencia

Este proyecto fue desarrollado exclusivamente con fines:

- Educativos
- Académicos
- Portafolio profesional

No se permite su comercialización sin autorización del autor.

---

## ⭐ Si te gusta este proyecto

No olvides dejar una **estrella en el repositorio** para apoyar el proyecto.

```bash
⭐ Star this repository
```
