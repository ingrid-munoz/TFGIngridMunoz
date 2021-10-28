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
El objetivo del proyecto es desarrollar una aplicación web que gestione todas las actividades extraescolares.

La estructura web será diferente según el rol que tenga asignado el usuario que pueda acceder a ese apartado:
  - El grupo de usuarios pertenecientes al rol de secretaría podrá crear, modificar y eliminar a los alumnos, profesores y padres.
  - El grupo de usuarios pertenecientes al rol de alumno podrá crear, modificar y eliminar el evento que haya creado en el calendario. 
  - El grupo de usuarios pertenecientes al rol de profesores podrá crear, modificar y eliminar el evento que haya creado en el calendario. 
  - El grupo de usuarios pertenecientes al rol de padre del AMPA podrá crear, modificar y eliminar el evento que haya creado en el calendario.

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

RF1: Identificación del usuario administrador | Prioridad
------------ | -------------
RF1.1 El administrador puede crear, modificar y borrar usuarios | Esencial
RF1.2 El administrador puede borrar eventos del calendario | Esencial


RF2: Identificación del usuario alumno | Prioridad
------------ | -------------
RF2.1 El usuario alumno podrá crear, modificar y borrar sus propios eventos de la agenda. Este rol solo podrá crear 2 eventos por semana | Esencial
RF2.2 Si el usuario alumno introduce su nombre de usuario o contraseña de forma incorrecta, el sistema lanzará un mensaje de error | Esencial
RF2.3 Si el usuario alumno introduce un evento inapropiado se le dará un aviso para que lo modifique en un plazo de 8 horas. Si pasado ese plazo no se ha modificado se borrará automáticamente | Esencial
RF2.4 El usuario alumno podrá unirse a uno o varios eventos | Esencial

RF3: Identificación del usuario profesor | Prioridad
------------ | -------------
RF3.1 El usuario profesor podrá crear, modificar y borrar sus propios eventos de la agenda | Esencial
RF3.2 Si el usuario profesor introduce su nombre de usuario o contraseña de forma incorrecta, el sistema lanzará un mensaje de error | Esencial
RF3.3 El usuario profesor podrá informar o borrar si un evento del usuario alumno es inapropiado | Esencial
RF.3.4 El usuario profesor podrá unirse a uno o varios eventos | Esencial

RF4: Identificación del usuario padre AMPA | Prioridad
------------ | -------------
RF4.1 El usuario padre podrá crear, modificar y borrar sus propios eventos de la agenda | Esencial
RF4.2 El usuario padre podrá unirse a uno o varios eventos | Esencial

RF5: Requisitos agenda | Prioridad
------------ | -------------
RF4.1 El usuario podrá indicar la fecha en la que se realizará el evento | Esencial
RF4.2 El usuario podrá unirse a uno o varios eventos | Esencial






