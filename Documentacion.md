# Agenda Escolar

![Logo agenda](https://user-images.githubusercontent.com/77245013/148461952-68bf2a81-cabd-4bfa-bf18-04dd9b15e1b1.png)


# ÍNDICE
1. Documento Descripcion del proyecto   
    1.1 Ámbito y entorno    
    1.2 Análisis de la realidad    
    1.3 Solución y justificación de la solución    
    1.4 Destinatarios    
     
2. Objetivo del proyecto   
     
3. Objetivo del proyecto en lengua extranjera    
    
4. Requisitos     
    4.1 Requisitos de aplicación   
    4.2 Requisitos de la interfaz   
&nbsp;&nbsp;&nbsp;&nbsp; 4.2.1 Pantalla Inicio    
&nbsp;&nbsp;&nbsp;&nbsp; 4.2.2 Pantalla Secretaria    
&nbsp;&nbsp;&nbsp;&nbsp; 4.2.3 Pantalla Formación Profesional    
&nbsp;&nbsp;&nbsp;&nbsp; 4.2.4 Pantalla Usuarios    
&nbsp;&nbsp;&nbsp;&nbsp; 4.2.5 Pantalla Agenda        
    4.3 Requisitos funcionales (RF)   
    4.4 Requisitos no funcionales (RNF)    
    4.5 Lista de tareas    
    
5. Planificación del proyecto       
    5.1 Metodologia de trabajo    
    5.2 Diagrama de Gantt    
    5.3 Presupuesto    
    5.4 Precio técnico y de venta    
    5.5 Análisis de Riesgo    
    
6. Análisis y diseño de la base de datos   
    6.1 Esquema Entidad-Relación    
    6.2 Casos de Uso    
    6.3 Esquema Relacional    
    6.4 Script de la base de datos   
    6.5 Diagrama de Clases   

7. Implementación y pruebas    
    7.1 Pruebas Funcionales    
    7.2 Manual de Instalación    
    7.3 Manual de Usuario    
    7.4 Resultados obtenidos y conclusiones    
    7.5 Agradecimientos    
    
8. Anexos    
    8.1 Presupuesto    
    8.2 Contrato    
    8.3 Documento de pruebas funcionales        
    8.4 Manual de usuario   
             
---------------------------------------------------------------------------------------------------   
    
# 1. Documento Descripcion del proyecto
## 1.1 Ámbito y entorno
Este proyecto está orientado a la creación de un web para un centro educativo, en el cual habra una agenda virtual para alumnos, profesores y padres en la cual podre crear actividades o eventos fuera y dentro del horario escolar.

## 1.2 Análisis de la realidad
Actualmente, en la mayoría de las webs de centros educativos no disponen de un apartado para actividades extraescolares, ya sea para alumnos, profesorado o padres.

El objetivo es desarrollar una aplicación web para la gestión de eventos del profesorado, padres del AMPA y del alumnado en un centro educativo. Son muchas las actividades y eventos que se realizan en un centro educativo (cenas empresa, charlas, jornadas, lotería, evaluaciones, cursos piee...) por ello se requiere una aplicación que permita su gestión centralizada.

## 1.3 Solución y justificación de la solución 
La aplicación permitirá dar de alta, baja, modificación de eventos dirigidos a 3 roles diferentes: alumnos, profesores y padres en un calendario. Permitirá añadir noticias sobre eventos. Permitirá inscribirse en el evento lo que conlleva el recibir avisos y notificaciones relacionados con ese evento. Como es obvio permitirá también el darse de baja del evento.

## 1.4 Destinatarios
Los usuarios destinatarios del proyecto serán todos los alumnos, profesores y padres del AMPA del centro educativo. Cada usuario tendrá su correspondiente nombre de usuario, contraseña y rol. El usuario deberá autenticarse para poder acceder a la aplicación.

Los roles se definen a continuación:
  - Rol de secretaría que será el encargado de dar de alta o eliminar a cualquiera de los 3 roles.
  - Rol de alumno, el cual podrá acceder y crear una serie de actividades definidas por categorías. Este rol está limitado a una serie de actividades. 
  - Rol de profesor, podrá acceder y crear una serie de actividades definidas por categorías específicas para este rol.
  - Rol de padre AMPA, este rol es exclusivo para padres inscritos en el AMPA. También podrá crear una serie de actividades por categorías ya definidas.

# 2. Objetivo del proyecto
El objetivo del proyecto es desarrollar una aplicación web que gestione las actividades y eventos de un centro educativo mediante un calendario. El usuario estará informado de las ultimas noticias referiras al centro.

La aplicación está orientada a ser una extensión o agregación de una página web ya creada y estructurada.

El acceso a la agenda sera solamente para alumnos matriculados en el centro, profesores del centro y padres inscritos en el AMPA. 

Las actividades para realizar en el proyecto serán:

  1. Análisis de las necesidades y requerimientos del proyecto.
  2. Seguimiento del tiempo empleado para realizar cada actividad mediante un diagrama de Gantt.
  3. Diseño y creación de la base de datos.
  4. Diseño y desarrollo de la aplicación web.
  5. Pruebas y despliegue de la aplicación.

# 3. Objetivo del proyecto en ingles
en ingles


# 4. Requisitos  
## 4.1 Requisitos de aplicación  
Se trabajará con el entorno de PhpStorm, el framework de Laravel y el lenguaje de marcas HTML con Bootstrap. 

## 4.2 Requisitos de la interfaz   
El cliente interactuara con la aplicación a través de las opciones del menu.  

### 4.2.1 Pantalla Inicio   
Se mostrará información y descripción del centro.

### 4.2.2 Pantalla Secretaria   
Se mostrará un formulario de contacto y ubicación del centro.

### 4.2.3 Pantalla Formación Profesional  
Se mostrará una lista con todos los grados que imparte el centro.

### 4.2.4 Pantalla Usuarios  
Se mostrará una lista con todos los usuarios registrados en el centro. Esta opción es solo para el administrador.

### 4.2.5 Pantalla Agenda  
Se mostrará un calendario donde el usuario deberá elegir la fecha en la que crear el evento. Esta opción solo se mostrará para los usuarios logeados.

## 4.3 Requisitos funcionales (RF)

| RF1: Identificación del usuario administrador | Prioridad |
| :------------ | :------------- |
| **RF1.1** El administrador podrá crear, editar y borrar usuarios                                  | Importante |
| **RF1.2** El administrador podrá crear, editar y borrar eventos del calendario                    | Importante |
| **RF1.3** El administrador podrá crear, editar y borrar cursos                                    | Esencial |

RF2: Identificación del usuario registrado | Prioridad
:------------ | :-------------
**RF2.1** El usuario podrá crear eventos en la agenda                                                 | Esencial
**RF2.2** El usuario podrá unirse a uno o varios eventos                                              | Opcional

RF3: Requisitos agenda | Prioridad
:------------ | :-------------
**RF3.1** El usuario podrá indicar el titulo, descripción y fecha en la que se realizará el evento     | Esencial

RF4: Requisitos usuario NO registrado | Prioridad
:------------ | :-------------
**RF4.1** El usuario sola podra ver las paginas de Inicio, Secretaria, Cursos y Login                               | Importante
**RF4.2** El usuario que NO sea alumno matriculado, profesor del centro o padre del AMPA no podra logearse          | Importnte
**RF4.3** El usuario que NO sea alumno matriculado, profesor del centro o padre del AMPA no podra ver la agenda     | Importnte

## 4.4 Requisitos no funcionales (RF)

RNF1: Accesibilidad | Prioridad
:------------ | :-------------
**RNF1.1** El sistema debe resultar fácil de utilizar y de fácil navegación para cualquier tipo de usuario, independientemente de sus habilidades, características o conocimientos personales | Esencial

RNF2: Idioma | Prioridad
:------------ | :-------------
**RNF2.1** La aplicación utilizará el idioma español | Esencial

RNF3: Usabilidad en distintos navegadores | Prioridad
:------------ | :-------------
**RNF3.1** Deberá ser compatible con las últimas versiones de los distintos navegadores | Esencial

RNF4: Interfaz adaptable | Prioridad
:------------ | :-------------
**RNF4.1** El diseño de la interfaz de usuario debe adaptarse a cualquier medida de pantalla | Esencial

RNF5: Almacenamiento | Prioridad
:------------ | :-------------
**RNF5.1** Todos los datos de la aplicación serán almacenados en una base de datos relacional | Importante

RNF6: Acceso óptimo | Prioridad
:------------ | :-------------
**RNF6.1** El sistema debe acceder de forma rápida a toda la información que quiera consultar el usuario | Importante

RNF7: Codificación UTF-8 | Prioridad
:------------ | :-------------
**RNF7.1** la aplicación estará codificada en UTF-8 para poder representar cualquier carácter UNICODE | Esencial


## 4.5 Lista de tareas    
     
Código |  Descrición |  Duración en horas      
:----- | :-------- | :---------    
**T1** |  Especificación de los casos de uso | **26**    
**T1.1** | Funcionalidad del administrador para gestionar la web | 5    
**T1.2** | Caso de uso del administrador para gestionar usuarios | 8       
**T1.3** | Caso de uso del administrador para gestionar cursos | 5     
**T1.4** | Caso de uso del administrador para gestionar eventos | 8     
**T2** | Análisis y diseño de la base de datos| **6**      
**T2.1** | Esquema Entidad-Relación | 1    
**T2.2** | Casos de Uso | 1    
**T2.3** | Esquema Relacional | 1    
**T2.4** | Script de la base de datos | 1    
**T2.5** | Diagrama de Clases | 1     
**T2.6** | inserción de datos  | 1     
**T3** | Diseño interfaz gráfica | **16**
**T3.1** | Crear interfaz gráfica pantalla Inicio | 2    
**T3.2** | Crear interfaz gráfica pantalla Secretaria | 2       
**T3.3** | Crear interfaz gráfica pantalla Cursos | 3    
**T3.4** | Crear interfaz gráfica pantalla Usuarios | 3    
**T3.5** | Crear interfaz gráfica pantalla Agenda | 5    
**T3.6** | Crear interfaz gráfica pantalla Registro | 2    
**T4** | Implementación de la aplicación | **28**    
**T4.1** | Desarrollo método para crear, editar, listar y borrar usuarios | 8    
**T4.2** | Desarrollo método para crear, editar, listar y borrar cursos | 8    
**T4.3** | Desarrollo método para crear, editar, listar y borrar eventos | 8    
**T4.4** | Desarrollo método para recibir correos desde el formulario de contactos | 4        
**T5** | Realización de pruebas | **5**       
**T5.1** | Realizar pruebas individuales por rol de usuarios | 3    
**T5.2** | Realizar pruebas completas de la aplicacion desplegada | 2    
**Total de horas** |  | **81** 
     
# 5. Planificación del proyecto    
## 5.1 Metodologia de trabajo   
La metodologia elegida para este proyecto es la metodología tradicional.Se ha hecho énfasis en la planificación total de todo el trabajo a realizar y una vez que está todo detallado, comienza el ciclo de desarrollo del proyecto.     
   
## 5.2 Diagrama de Gantt   
<p align="center">
    <img width="800" src="https://user-images.githubusercontent.com/77245013/148611843-b8f7dbeb-a52c-4819-8404-4f0b1f7ddbfd.PNG" alt="Diagrama de Gantt">
</p>   

## 5.3 Planificación temporal de tareas   

Dado el tiempo después de la jornada de FCT se estima una hora diaria de lunes a jueves, dos horas los viernes y de tres horas sábado y domingo.   

Dias | Horas
:----- | :--------    
Lunes - Viernes |  6   
Sábado - Domingo |  6   
Semanal | 12   

## 5.4 Presupuesto    

Costes fijos mensuales | Precio € 
:----- | :--------    
Salario |  384€ (8€/hora)   
Cuota de autónomos | 50€  
Fibra y móvil | 36€
Luz | 50€
Material de oficina | 20€
Total costes fijos/mes | 535€  

Total de los costes en la finalización de los 3 meses: 1.605€

Costes virtuales | Precio € 
:----- | :--------    
Dominio + Hosting |  65,45€   

Total de los costes en la finalización de los 3 meses: 130.90€

Coste Total |   Precio € 
:----- | :--------    
Costes Fijos |  1.605€   
Costes Variables |  130.90€  
Precio total sin IVA |  1.735,90€   
Precio total con IVA | 2.100,44€   

## 5.5 Precio técnico y de venta   

Precio técnico |   Precio € 
:----- | :--------    
Calculo |  Coste total/unidad  
Resultado | 1.735,90/1 = 1.735,90€   
Precio técnico total sin IVA | 1.735,90€   
Precio total con IVA | 2.100,44€   

Precio Venta |   Precio € 
:----- | :--------    
Calculo |  Precio técnico X (1+margen))  
Resultado | 1.735,90/1 = 1.735,90€   
Precio venta total sin IVA | ??  
Precio total con IVA | ??

## 5.6 Análisis de riesgo   

Riesgo | Medida | Nivel de peligrosidad
:----- | :-------- | :----------
Rotura de equipo | Tener otro equipo de emergencia y guardar todo en un disco externo | Grave    
Perdida de información | Tener una copia de seguridad | Grave  
Fallo en los requisitos | Realizar una reunión con el cliente para acordar los requisitos | Grave   
Incompatibilidad de las librerías utilizadas | Utilizar las últimas versiones de las librerías | Moderado    
Circunstancias personales | Tratar de recuperar las horasen algún momento | Leve   

    
# 6. Análisis y diseño de la base de datos    
## 6.1 Esquema Entidad-Relación    
      
![diagrama_er](https://user-images.githubusercontent.com/77245013/148478960-abd12450-4d0e-4956-af54-383ac0b532fb.PNG)   
     
## 6.2 Casos de Uso   
     
![diagrama_caso-uso](https://user-images.githubusercontent.com/77245013/148480302-34b00f7d-a14e-4ba9-aa23-bc438f2b4ebb.PNG)    

![cu1](https://user-images.githubusercontent.com/77245013/148620004-ba063e96-79a9-4483-a3a3-09b37b8048b8.PNG)    

![cu2](https://user-images.githubusercontent.com/77245013/148620015-dd0dd3e5-298d-4795-9c94-d55ac5a2f175.PNG)   

![cu3](https://user-images.githubusercontent.com/77245013/148620022-e3d6c289-ad26-4beb-b86a-08b3310d6672.PNG)

![cu4](https://user-images.githubusercontent.com/77245013/148620024-f3c39d1a-d3e5-47a7-a449-4dc1c8ac467f.PNG)

       
## 6.3 Esquema Relacional    
        
![esquema_relacional](https://user-images.githubusercontent.com/77245013/148481786-6fa1d679-9049-4cf2-bf1b-d8866a167d65.PNG)    
                                           
## 6.4 Script de la base de datos   
        
```
CREATE TABLE `cursos` (
  `id` bigint UNSIGNED NOT NULL,
  `familia_profesional` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_curso` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_grado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `eventos` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_contacto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

```
         
## 6.5 Diagrama de Clases   

![diagrama_clase](https://user-images.githubusercontent.com/77245013/148624466-e1d76258-8c24-4a0f-860f-09c2bbffe251.PNG)
         
## 6.6 Diseño de interfaces   
### 6.6.1 Interfaz para usuario no registrado   

**Inicio** mostrara el logo e información del centro. Tambien se mostraran los botones de redes sociales.      
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/148484378-a3a4da3f-8329-4397-a1fa-0ed3d76409e1.PNG" alt="Inicio">
</p>      

**Secretaria** mostrara el horario de atención de secretaria, un formulario de contacto y la ubicación del centro.   
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/148484782-5d0bb6c9-50df-49e3-a4fd-68258f506ff9.PNG" alt="Secretaria">
</p>    
  
**Formación Profesional** mostrara una lista con toda la información sobre todos los grados que imparte el centro.   
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/148485431-2a6b691a-e09e-458b-9814-5f25f79e0cc7.PNG" alt="Formación Profesional">
</p>    
   
**Iniciar Sesión** mostrara un inicio de sesión solo para los usuarios del centro.  
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/148485460-bc05cc10-2a45-495e-873b-6b61c5be2aef.PNG" alt="Iniciar Sesión">
</p>    

### 6.6.2 Interfaz para usuario registrado Admin   

**Inicio** mostrara el logo e información del centro. Tambien se mostraran los botones de redes sociales.      
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/148596808-70c462ab-826d-4a7d-8cb8-d37135ad57e7.PNG" alt="Inicio de admin">
</p>    

**Formación Profesional** mostrara el logo e información del centro. Tambien se mostraran los botones de redes sociales.      
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/148596989-25cdaeb4-ced0-4618-bdde-f06efbb37c45.PNG" alt="Gestión cursos de admin">
</p>      

**Usuarios** mostrara el logo e información del centro. Tambien se mostraran los botones de redes sociales.      
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/148597116-7b8cfcff-f6b6-4320-8d1c-b7885a77a154.PNG" alt="Gestión usuarios de admin">
</p>    

**Agenda** mostrara el logo e información del centro. Tambien se mostraran los botones de redes sociales.      
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/148597273-30d47a04-6425-467f-944a-302148fba49b.PNG" alt="Gestión eventos de admin">
</p> 
   
### 6.6.3 Interfaz para usuario registrado    
**Inicio** mostrara el logo e información del centro. Tambien se mostraran los botones de redes sociales.      
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/148597863-b93a4b64-ceac-4442-8c2e-bcd433c61590.PNG" alt="Agenda usuario registrado">
</p> 
    
       
# 7. Implementación y pruebas    
## 7.1 Pruebas Funcionales    

RF1 | El administrador podrá crear, editar y borrar usuarios
:----- | :-------- 
**Precondición** | Estar logeado como Administrador   
**Datos de entrada** | Se crearán, editarán o borrarán los usuarios  
**Datos de salida** | a). El administrador pulsará sobre la opción que deseé. OK    
Datos de salida | b). Para crear deberá rellenar todos los datos del formulario. OK
Datos de salida | c). Para editar deberá elegir los campos a editar. OK
Datos de salida | d). Deberá pulsar el botón de Guardar Datos para que se produzcan los cambios. OK
Datos de salida | e). Para borrar deberá elegir el usuario y pulsar sobre el botón de Borrar. OK

RF2 | El administrador podrá crear, editar y borrar eventos del calendario
:----- | :-------- 
**Precondición** | Estar logeado como Administrador   
**Datos de entrada** | Se crearán, editarán o borrarán los eventos 
**Datos de salida** | a). El administrador pulsará sobre la opción que deseé. OK    
Datos de salida | b). Para crear deberá rellenar todos los datos del formulario. OK
Datos de salida | c). Para editar deberá elegir los campos a editar. OK
Datos de salida | d). Deberá pulsar el botón de Guardar para que se produzcan los cambios. OK
Datos de salida | e). Para borrar deberá elegir el evento y pulsar sobre el botón de Borrar. OK

RF3 | El administrador puede crear, editar y borrar cursos
:----- | :-------- 
**Precondición** | Estar logeado como Administrador   
**Datos de entrada** | Se crearán, editatán, o borrarán los cursos
**Datos de salida** | a). El administrador pulsará sobre la opción que deseé. OK    
Datos de salida | b). Para crear un curso deberá rellenar todos los datos del formulario. OK
Datos de salida | c). Para editar un curso deberá elegir los campos a editar. OK
Datos de salida | d). Deberá pulsar el botón de Guardar Dato para que se produzcan los cambios. OK
Datos de salida | e). Para borrar deberá elegir el curso y pulsar sobre el botón de Borrar. OK

RF4 | Identificación del usuario registrado
**Precondición** | Ser alumno, profesor o padre del centro  
**Datos de entrada** | El usuario debe estar logeado en la aplicación
**Datos de salida** | a). El usuario elige el día en el que crear el evento. OK    
Datos de salida | b). Aparecerá un formulario que deberá rellenar con titulo, descripción y fecha. OK
Datos de salida | c). Deberá pulsar el botón de Guardar para que se produzcan los cambios. OK
Datos de salida | e). El evento se mostrará en el calendario. OK

RF5 | Requisitos agenda
**Precondición** | Haber iniciado sesión   
**Datos de entrada** | El usuario debe estar logeado en la aplicación
**Datos de salida** | a). El usuario debe ir a la opción del menu Agenda. OK    



## 7.2 Manual de Instalación   
## 7.3 Manual de Usuario   
## 7.4 Resultados obtenidos y conclusiones 
## 7.5 Agradecimientos
## 7.6 Webgrafía   

# 8. Anexos    
## 8.1 Presupuesto    
## 8.2 Contrato    
## 8.3 Documento de pruebas funcionales        
## 8.4 Manual de usuario
  







       

     

      




