# 1. Documento Descripcion del proyecto
## 1.1 Contexto del proyecto

### 1.1.1 Ámbito y entorno
Este proyecto está orientado a la creación de un web para un centro educativo, en el cual habra una agenda virtual para alumnos, profesores y padres en la cual podre crear actividades o eventos fuera y dentro del horario escolar.

### 1.1.2 Análisis de la realidad
Actualmente, en la mayoría de las webs de centros educativos no disponen de un apartado para actividades extraescolares, ya sea para alumnos, profesorado o padres.

El objetivo es desarrollar una aplicación web para la gestión de eventos del profesorado, padres del AMPA y del alumnado en un centro educativo. Son muchas las actividades y eventos que se realizan en un centro educativo (cenas empresa, charlas, jornadas, lotería, evaluaciones, cursos piee...) por ello se requiere una aplicación que permita su gestión centralizada.

### 1.1.3 Solución y justificación de la solución 
La aplicación permitirá dar de alta, baja, modificación de eventos dirigidos a 3 roles diferentes: alumnos, profesores y padres en un calendario. Permitirá añadir noticias sobre eventos. Permitirá inscribirse en el evento lo que conlleva el recibir avisos y notificaciones relacionados con ese evento. Como es obvio permitirá también el darse de baja del evento.

### 1.1.4 Destinatarios
Los usuarios destinatarios del proyecto serán todos los alumnos, profesores y padres del AMPA del centro educativo. Cada usuario tendrá su correspondiente nombre de usuario, contraseña y rol. El usuario deberá autenticarse para poder acceder a la aplicación.

Los roles se definen a continuación:
  - Rol de secretaría que será el encargado de dar de alta o eliminar a cualquiera de los 3 roles.
  - Rol de alumno, el cual podrá acceder y crear una serie de actividades definidas por categorías. Este rol está limitado a una serie de actividades. 
  - Rol de profesor, podrá acceder y crear una serie de actividades definidas por categorías específicas para este rol.
  - Rol de padre AMPA, este rol es exclusivo para padres inscritos en el AMPA. También podrá crear una serie de actividades por categorías ya definidas.

## 1.2 Objetivo del proyecto
El objetivo del proyecto es desarrollar una aplicación web que gestione las actividades y eventos de un centro educativo mediante un calendario. El usuario estará informado de las ultimas noticias referiras al centro.

La aplicación está orientada a ser una extensión o agregación de una página web ya creada y estructurada.

El acceso a la agenda sera solamente para alumnos matriculados en el centro, profesores del centro y padres inscritos en el AMPA. 

Las actividades para realizar en el proyecto serán:

  1. Análisis de las necesidades y requerimientos del proyecto.
  2. Seguimiento del tiempo empleado para realizar cada actividad mediante un diagrama de Gantt.
  3. Diseño y creación de la base de datos.
  4. Diseño y desarrollo de la aplicación web.
  5. Pruebas y despliegue de la aplicación.

## 1.3 Objetivo del proyecto en ingles
en ingles


# 2. Documento de acuerdo del proyecto
## 2.1 Requisitos funcionales y no funcionales
### 2.1.1 Requisitos funcionales (RF)

| RF1: Identificación del usuario administrador | Prioridad |
| :------------ | :------------- |
| **RF1.1** El administrador podrá crear, editar y borrar usuarios                                  | Importante |
| **RF1.2** El administrador podrá crear, editar y borrar actividades del calendario                | Importante |
| **RF1.3** El administrador podrá crear, editar y borrar contenido de la página web                  | Esencial |
| **RF1.4** El administrador borrar eventos inapropiados                                            | Importante |

RF2: Identificación del usuario registrado alumno | Prioridad
:------------ | :-------------
**RF2.1** El usuario alumno podrá crear, modificar y borrar sus propias actividades de la agenda      | Importante
**RF2.2** El usuario alumno podrá unirse a uno o varios eventos                                       | Esencial

RF3: Identificación del usuario registrado profesor | Prioridad
:------------ | :-------------
**RF3.1** El usuario profesor podrá crear, modificar y borrar sus propios eventos de la agenda        | Importante
**RF3.2** El usuario profesor podrá unirse a uno o varios eventos                                     | Esencial

RF4: Identificación del usuario registrado padre AMPA | Prioridad
:------------ | :-------------
**RF4.1** El usuario padre podrá crear, modificar y borrar sus propios eventos de la agenda           | Importante
**RF4.2** El usuario padre podrá unirse a uno o varios eventos                                        | Esencial

RF5: Requisitos agenda | Prioridad
:------------ | :-------------
**RF5.1** El usuario podrá indicar la fecha en la que se realizará el evento                          | Esencial
**RF5.2** El usuario podrá unirse a uno o varios eventos                                              | Opcional

RF6: Requisitos usuario NO registrado | Prioridad
:------------ | :-------------
**RF6.1** El usuario sola podra ver la informacion general del centro                                 | Esencial
**RF6.2** El usuario que NO sea alumno matriculado, profesor del centro o padre del AMPA no podra logearse | Importnte
**RF6.3** El usuario que NO sea alumno matriculado, profesor del centro o padre del AMPA no podra ver la agenda | Importnte

### 2.1.2 Requisitos no funcionales (RF)

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


## 2.2 Lista de tareas
  1. Análisis y diseño de diagrama de caso de uso.
  2. Análisis y diseño de la base de datos con diagrama E/R.
  3. Análisis y diseño de la base de datos con modelo relacional.
  4. Normalización de la base de datos.
  5. Prototipo de la aplicación.
  6. Aplicaciones que se usuaran para crear la aplicación.
  7. Desarrollar la aplicación.
  8. Insertar datos.
  9. Realizar pruebas individuales por rol de usuarios.
  10. Realizar pruebas completas de la aplicacion desplegada. 
  
# 3. Análisis y diseño de la interfaz de usuario
## 3.1 Esquema Entidad-Relación



