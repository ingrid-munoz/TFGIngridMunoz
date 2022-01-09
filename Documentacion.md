# Agenda Escolar

![proyecto_encabezado_2](https://user-images.githubusercontent.com/77245013/148672669-fe5cf4bc-c22c-467e-b327-752ac241a84e.png)

# ÍNDICE
1. [Documento Descripcion del proyecto](#id1)   
    1.1 [Ámbito y entorno](#id11)      
    1.2 [Análisis de la realidad](#id12)    
    1.3 [Solución y justificación de la solución](#id13)    
    1.4 [Destinatarios](#id14)    
     
2. [Objetivo del proyecto](#id2)    
     
3. [Objetivo del proyecto en lengua extranjera](#id3)     
    
4. [Requisitos](#id4)      
    4.1 [Requisitos de aplicación](#id41)   
    4.2 [Requisitos de la interfaz](#id42)   
&nbsp;&nbsp;&nbsp;&nbsp; 4.2.1 [Pantalla Inicio](#id421)     
&nbsp;&nbsp;&nbsp;&nbsp; 4.2.2 [Pantalla Secretaria](#id422)     
&nbsp;&nbsp;&nbsp;&nbsp; 4.2.3 [Pantalla Formación Profesional](#id423)     
&nbsp;&nbsp;&nbsp;&nbsp; 4.2.4 [Pantalla Usuarios](#id424)     
&nbsp;&nbsp;&nbsp;&nbsp; 4.2.5 [Pantalla Agenda](#id425)         
    4.3 [Requisitos funcionales (RF)](#id43) 
    4.4 [Requisitos no funcionales (RNF)](#id44)     
    4.5 [Lista de tareas](#id45)     
    
5. [Planificación del proyecto](#id5)        
    5.1 [Metodologia de trabajo](#id51)     
    5.2 [Diagrama de Gantt](#id52)    
    5.3 [Presupuesto](#id53)    
    5.4 [Precio técnico y de venta](#id54)    
    5.5 [Análisis de Riesgo](#id55)    
    
6. [Análisis y diseño de la base de datos](#id6)    
    6.1 [Esquema Entidad-Relación](#id61)   
    6.2 [Casos de Uso](#id62)    
    6.3 [Esquema Relacional](#id63)    
    6.4 [Script de la base de datos](#id64)   
    6.5 [Diagrama de Clases](#id65)   

7. [Implementación y pruebas](#id7)     
    7.1 [Pruebas Funcionales](#id71)    
    7.2 [Manual de Instalación](#id72)    
    7.3 [Manual de Usuario](#id73)    
    7.4 [Resultados obtenidos y conclusiones](#id74)    
    7.5 [Agradecimientos](#id75)    
    
8. [Anexos](#id8)     
    8.1 [Presupuesto](#id81)    
    8.2 [Contrato](#id82)    
    8.3 [Documento de pruebas funcionales](#id83)        
    8.4 [Manual de usuario](#id84)   
             
---------------------------------------------------------------------------------------------------   
<div id='id1' />    

# 1. Documento Descripcion del proyecto  

<div id='id11' />  

## 1.1 Ámbito y entorno
Este proyecto está orientado a la creación de un web para un centro educativo, en el cual habra una agenda virtual para alumnos, profesores y padres en la cual podre crear actividades o eventos fuera y dentro del horario escolar.

<div id='id12' /> 

## 1.2 Análisis de la realidad
Actualmente, en la mayoría de las webs de centros educativos no disponen de un apartado para actividades extraescolares, ya sea para alumnos, profesorado o padres.

El objetivo es desarrollar una aplicación web para la gestión de eventos del profesorado, padres del AMPA y del alumnado en un centro educativo. Son muchas las actividades y eventos que se realizan en un centro educativo (cenas empresa, charlas, jornadas, lotería, evaluaciones, cursos piee...) por ello se requiere una aplicación que permita su gestión centralizada.

<div id='id13' /> 

## 1.3 Solución y justificación de la solución 
La aplicación permitirá dar de alta, baja, modificación de eventos dirigidos a 3 roles diferentes: alumnos, profesores y padres en un calendario. Permitirá añadir noticias sobre eventos. Permitirá inscribirse en el evento lo que conlleva el recibir avisos y notificaciones relacionados con ese evento. Como es obvio permitirá también el darse de baja del evento.

<div id='id14' /> 

## 1.4 Destinatarios
Los usuarios destinatarios del proyecto serán todos los alumnos, profesores y padres del AMPA del centro educativo. Cada usuario tendrá su correspondiente nombre de usuario, contraseña y rol. El usuario deberá autenticarse para poder acceder a la aplicación.

Los roles se definen a continuación:
  - Rol de secretaría que será el encargado de dar de alta o eliminar a cualquiera de los 3 roles.
  - Rol de alumno, el cual podrá acceder y crear una serie de actividades definidas por categorías. Este rol está limitado a una serie de actividades. 
  - Rol de profesor, podrá acceder y crear una serie de actividades definidas por categorías específicas para este rol.
  - Rol de padre AMPA, este rol es exclusivo para padres inscritos en el AMPA. También podrá crear una serie de actividades por categorías ya definidas.

<div id='id2' /> 

# 2. Objetivo del proyecto
El objetivo del proyecto es desarrollar una aplicación web que gestione las actividades y eventos de un centro educativo mediante un calendario. El usuario estará informado de las ultimas noticias referiras al centro.

La aplicación está orientada a ser una extensión o agregación de una página web ya creada y estructurada.

El acceso a la agenda sera solamente para alumnos matriculados en el centro, profesores del centro y padres inscritos en el AMPA. 

<div id='id3' /> 

# 3. Objetivo del proyecto en ingles
The objective of the project is to develop a web application that manages the activities and events of an educational centre by means of a calendar. The user will be informed of the latest news concerning the centre.

The application is oriented to be an extension or aggregation of an already created and structured web page.

The access to the agenda will be only for students enrolled in the centre, teachers of the centre and parents registered in the AMPA. 

<div id='id4' /> 

# 4. Requisitos  

<div id='id41' /> 

## 4.1 Requisitos de aplicación  
Se trabajará con el entorno de PhpStorm, el framework de Laravel y el lenguaje de marcas HTML con Bootstrap. 

<div id='id42' /> 

## 4.2 Requisitos de la interfaz   
El cliente interactuara con la aplicación a través de las opciones del menu.  

<div id='id421' /> 

### 4.2.1 Pantalla Inicio   
Se mostrará información y descripción del centro.

<div id='id422' /> 

### 4.2.2 Pantalla Secretaria   
Se mostrará un formulario de contacto y ubicación del centro.

<div id='id423' /> 

### 4.2.3 Pantalla Formación Profesional  
Se mostrará una lista con todos los grados que imparte el centro.

<div id='id424' /> 

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
     
<div id='id5' /> 

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
Calculo |  Precio técnico X 1 +(margen 0.85))  
Resultado | 1.735,90 X (1 + 0.85) = 3.211.41€   
Precio venta total sin IVA | 3.211.41€  
Precio total con IVA | 3.885.80€

## 5.6 Análisis de riesgo   

Riesgo | Medida | Nivel de peligrosidad
:----- | :-------- | :----------
Rotura de equipo | Tener otro equipo de emergencia y guardar todo en un disco externo | Grave    
Perdida de información | Tener una copia de seguridad | Grave  
Fallo en los requisitos | Realizar una reunión con el cliente para acordar los requisitos | Grave   
Incompatibilidad de las librerías utilizadas | Utilizar las últimas versiones de las librerías | Moderado    
Circunstancias personales | Tratar de recuperar las horasen algún momento | Leve   

<div id='id6' /> 
    
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
    
<div id='id7' /> 

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
:----- | :-------- 
**Precondición** | Ser alumno, profesor o padre del centro  
**Datos de entrada** | El usuario debe estar logeado en la aplicación
**Datos de salida** | a). El usuario elige el día en el que crear el evento. OK    
Datos de salida | b). Aparecerá un formulario que deberá rellenar con titulo, descripción y fecha. OK
Datos de salida | c). Deberá pulsar el botón de Guardar para que se produzcan los cambios. OK
Datos de salida | e). El evento se mostrará en el calendario. OK

RF5 | Requisitos agenda
:----- | :-------- 
**Precondición** | Haber iniciado sesión   
**Datos de entrada** | El usuario debe estar logeado en la aplicación
**Datos de salida** | a). El usuario debe ir a la opción del menu Agenda. OK    

## 7.2 Manual de Instalación   
La aplicación se encuentra actualmente en desarrollo. Para el despliegue en local se ha utilizado Docker.    
El repositorio de este proyecto se encuentra en GitHub: https://github.com/ingrid-munoz/Proyecto   

**Pasos Instalación Local**   
Los requisitos son:     
    - Servidor web Apache2   
    - Base de datos MySQL    
    - PhpStorm 7.3    

1º. Instalamos Docker Desktop para Windows desde su web oficial https://www.docker.com/products/docker-desktop    
2º. Una vez instalado, abrimos una ventana de cmd y escribimos:    

Se trabajará sobre la utlima versión de Ubuntu.
```
> docker pull ubuntu:latest
> docker run --name nombreDelProyecto -it -p 8000:8000 -p 80:80 -v C:\CarpetaDondeSeGuardara:/var/www/html ubuntu:latest bash   
> apt-get update
> apt-get install apache2 php libapache2-mod-php vim net-tools
```
3º. Ahora creamos un nuevo proyecto con Laravel    
```
> cd rutaDelProyecto
> Laravel new NombreDelProyecto
> curl -sS https://getcomposer.org/installer
```
4º. Abrimos PhpStorm y seleccionamos el nuevo proyecto. Dentro iremos al archivo .env y añadimos:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=agenda
DB_USERNAME=root
DB_PASSWORD=root
```
5º. Creamos los controladores y migraciones
```
php artisan make:model Nombre -mcr
```
6º. Una vez que tengamos todo configurado podemos acceder al servidor local escribiendo:
```
php artisan serve --host 0.0.0.0 &
```
7º. Escribimos en el navegador: localhost:8000    

## 7.3 Manual de Usuario   

## Usuario no registrado
 
### Inicio  
Aquí se dara la bienvenida a la web del centro. Tambien se muestra las opciones de Inicio, Secretaria, Cursos e Iniciar sesión.    
![inico](https://user-images.githubusercontent.com/77245013/148698095-8f6af958-06b9-4f39-b3ae-075729116d03.jpeg)

### Secretaria
Aquí encontraremos el horario y telefono de contacto del centro. Ademaá, dispone de un formulario de contacto y un mapa con la ubicación.     
![secretaria](https://user-images.githubusercontent.com/77245013/148698174-8c173e95-34b0-4713-96d2-7463c77c0a6a.jpeg)

### Cursos  
Aquí encontraremos el listado de todos los cursos que imparte el centro.
![cursos](https://user-images.githubusercontent.com/77245013/148698178-d92699fe-a7c0-475b-b701-80b4ad731b12.jpeg)

### Iniciar sesión    
Aqui el usuario podra iniciar sesión.     
![iniciar_sesion](https://user-images.githubusercontent.com/77245013/148698183-4f9f6434-847c-4052-880c-1c3299e0664e.jpeg)

## Usuario registrado

### Agenda
El usuario podrá ver todo lo anterior, ademas se añade al menu la opción Agenda. Para crear un nuevo evento debera seleccionar el día y rellenar los datos del formulario.
![agenda-ur](https://user-images.githubusercontent.com/77245013/148698220-754213de-c313-4b3e-85af-566e032a610d.jpeg)

##  Usuario Administrador

### Cursos 
Aqui, se listan todos los cursos que imparte el centro. El administrador podrá crear, editar o borrar un curso.
![curso-admin](https://user-images.githubusercontent.com/77245013/148698445-8ee8e5d0-fa08-4809-ad5d-b11965b1cf5b.jpeg)

### Formulario para crear un nuevo curso
![curso-register-admin](https://user-images.githubusercontent.com/77245013/148698419-61fa6778-8b55-4e18-9ae0-55aaaaebb1e9.jpeg)

### Usuarios
Aqui, se listan todos los usuarios del centro. El administrador podrá crear, editar o borrar un usuario.
![user-admin](https://user-images.githubusercontent.com/77245013/148698538-72923e98-6ac7-4fe8-a036-83c0cf26b26d.jpeg)

### Formulario de registro de usuarios
![user-register-admin](https://user-images.githubusercontent.com/77245013/148698545-63fb83f0-acf5-4c85-bc79-00c84865f1bb.jpeg)

### Agenda
Aqui, el administrador podra crear, modificar y eliminar eventos.
![agenda-admin](https://user-images.githubusercontent.com/77245013/148698553-8ac76415-6df2-4df8-bc7a-c75ee158941b.jpeg)



## 7.4 Resultados obtenidos y conclusiones    
La realización del Trabajo Fin de Ciclo (TFC) contribuye a demostrar las habilidades adquiridas a lo largo de estos dos años de formación en el Ciclo Superior en Desarrollo de Aplicaciones Web.   

Este proyecto me ha servido para ver cómo se desarrolla una aplicación en el mundo laboral, y el buscar soluciones a problemas inesperados.   

Este proyecto se basaba en una aplicación para crear eventos o actividades de un centro educativo. Cuando comencé con el proyecto no sabia muy bien como guiarlo y que necesitaba. Fuí añadiendo muchas opciones y me dí cuenta que estaba añadiendo cosas que no necesitaba.   

Lo que mas me costó realizar fue la agenda y el CRUD de usuarios. Conseguí resolverlo y que me funcionará todo como queria. Me senti muy aliviada.   


## 7.5 Agradecimientos    
Estos 2 años han sido complicados debido a la Covid-19 tanto para profesores como para alumnos y por eso quiero agradecir a todos los profesores que tuve estos 2 años por el tiempo y esfuerzo dedicado en enseñarnos y prepararnos para el futuro.    

Ademas, quiero agradecer a Adrian por escucharme y animarme cuando mas lo necesitaba y a mi compañero y mejor amigo Armando Gregorio Bizarro por todo sus consejos durante el proyecto.   

De estos 2 años me llevo muchos recuerdos bonitos y graciosos que recordaré siempre.   


## 7.6 Webgrafía   
- Creacion agenda: https://www.youtube.com/watch?v=iyHt8Ew-l6U&ab_channel=Develoteca  
- Guia Markdown: https://www.youtube.com/watch?v=oxaH9CFpeEE&t=919s&ab_channel=FaztCode  
- Guia Bootstrap: https://www.w3schools.com/bootstrap4/
- Guia Laravel: https://laravel.com/docs/8.x  

<div id='id8' /> 

# 8. Anexos    
## 8.1 Presupuesto    
![presupuesto_pt1](https://user-images.githubusercontent.com/77245013/148697958-3f604824-7493-4dd4-87b4-c71bfbb358fd.PNG)
![presupuesto_pt2](https://user-images.githubusercontent.com/77245013/148697960-79dad5bb-8dd6-442a-9ab6-b9f31afe53b5.PNG)

[presupuesto.pdf](https://github.com/ingrid-munoz/Proyecto/files/7835771/presupuesto.pdf)


## 8.2 Contrato    

![contrato1](https://user-images.githubusercontent.com/77245013/148663269-ef7e7e08-4bc1-4380-952f-4b798a4ecb25.PNG)  
![contrato2](https://user-images.githubusercontent.com/77245013/148663274-5abe3fff-c3e0-489f-bef5-80533efbc565.PNG)
![c3](https://user-images.githubusercontent.com/77245013/148663279-12240570-d5e4-4fcf-9566-5938fcdf1842.PNG)
![c4](https://user-images.githubusercontent.com/77245013/148663282-f8ecc7f4-8a17-43db-bc3b-fe3dfa209d1c.PNG)
![c5](https://user-images.githubusercontent.com/77245013/148663283-d1c693df-17d5-47a9-80c0-4e22b4e85462.PNG)

## 8.3 Documento de pruebas funcionales    

## Usuario no registrado
 
### Inicio  
El usuario no registrado no podrá ver la opción de agenda en el menu.   
![inico](https://user-images.githubusercontent.com/77245013/148698095-8f6af958-06b9-4f39-b3ae-075729116d03.jpeg)

## Usuario registrado

### Agenda
El usuario registrado podrá crear un nuevo evento.
![agenda-ur](https://user-images.githubusercontent.com/77245013/148698220-754213de-c313-4b3e-85af-566e032a610d.jpeg)
Comprobamos en la base de datos que se ha creado:
![evento-usuario](https://user-images.githubusercontent.com/77245013/148699011-60a81093-4bd7-4351-9961-10b447c56c35.PNG)

##  Usuario Administrador

### Cursos 
Aqui, se listan todos los cursos que imparte el centro. El administrador podrá crear, editar o borrar un curso.
![curso-admin](https://user-images.githubusercontent.com/77245013/148698445-8ee8e5d0-fa08-4809-ad5d-b11965b1cf5b.jpeg)

Opción Editar curso:
![edit-curso-ad](https://user-images.githubusercontent.com/77245013/148699345-4e85b754-9110-40ed-8793-9e7b34a74a78.jpeg)

Opción Borrar curso:
![delete-curso-ad](https://user-images.githubusercontent.com/77245013/148699379-fb6c3b24-2fc2-47c2-8cd2-794c7248dfc8.PNG)

Formulario para crear un nuevo curso:
![curso-register-admin](https://user-images.githubusercontent.com/77245013/148698419-61fa6778-8b55-4e18-9ae0-55aaaaebb1e9.jpeg)

Comprobamos en la base de datos:
![curso-bd](https://user-images.githubusercontent.com/77245013/148699060-51ae4ab2-14ff-4690-9cb8-4db9ccaf129f.PNG)

### Usuarios
Aqui, se listan todos los usuarios del centro. El administrador podrá crear, editar o borrar un usuario.
![user-admin](https://user-images.githubusercontent.com/77245013/148698538-72923e98-6ac7-4fe8-a036-83c0cf26b26d.jpeg)

Opción Borrar usuario:
![delete-user-ad](https://user-images.githubusercontent.com/77245013/148699428-317848e6-abef-4c78-b700-87bef7c3962c.PNG)

Formulario de registro de usuarios:
![user-register-admin](https://user-images.githubusercontent.com/77245013/148698545-63fb83f0-acf5-4c85-bc79-00c84865f1bb.jpeg)

Comprobamos en la base de datos:
![user-bd](https://user-images.githubusercontent.com/77245013/148699126-4ca5ffcd-ec03-402d-aee3-b9dc9e8d150b.PNG)

### Agenda
Aqui, el administrador podra crear, modificar y eliminar eventos.
![agenda-admin](https://user-images.githubusercontent.com/77245013/148698553-8ac76415-6df2-4df8-bc7a-c75ee158941b.jpeg)

Comprobamos en la base de datos:
![evento-bd](https://user-images.githubusercontent.com/77245013/148699167-fb0fe094-d55c-4b99-b763-511d5471bd80.PNG)






       

     

      




