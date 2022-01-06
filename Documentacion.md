# Agenda Escolar

![Logo agenda](https://bmdistribucions.store/wp-content/uploads/2018/10/446784.png)


# ÍNDICE
1. Documento Descripcion del proyecto   
    1.1 Ámbito y entorno    
    1.2 Análisis de la realidad    
    1.3 Solución y justificación de la solución    
    1.4 Destinatarios    
     
2. Objetivo del proyecto   
     
3. Objetivo del proyecto en lengua extranjera    
    
4. Requisitos     
    4.1 Requisitos funcionales (RF)   
    4.2 Requisitos no funcionales (RNF)    
    4.3 Lista de tareas    
    
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
    

## 1. Documento Descripcion del proyecto
### 1.1 Ámbito y entorno
Este proyecto está orientado a la creación de un web para un centro educativo, en el cual habra una agenda virtual para alumnos, profesores y padres en la cual podre crear actividades o eventos fuera y dentro del horario escolar.

### 1.2 Análisis de la realidad
Actualmente, en la mayoría de las webs de centros educativos no disponen de un apartado para actividades extraescolares, ya sea para alumnos, profesorado o padres.

El objetivo es desarrollar una aplicación web para la gestión de eventos del profesorado, padres del AMPA y del alumnado en un centro educativo. Son muchas las actividades y eventos que se realizan en un centro educativo (cenas empresa, charlas, jornadas, lotería, evaluaciones, cursos piee...) por ello se requiere una aplicación que permita su gestión centralizada.

### 1.3 Solución y justificación de la solución 
La aplicación permitirá dar de alta, baja, modificación de eventos dirigidos a 3 roles diferentes: alumnos, profesores y padres en un calendario. Permitirá añadir noticias sobre eventos. Permitirá inscribirse en el evento lo que conlleva el recibir avisos y notificaciones relacionados con ese evento. Como es obvio permitirá también el darse de baja del evento.

### 1.4 Destinatarios
Los usuarios destinatarios del proyecto serán todos los alumnos, profesores y padres del AMPA del centro educativo. Cada usuario tendrá su correspondiente nombre de usuario, contraseña y rol. El usuario deberá autenticarse para poder acceder a la aplicación.

Los roles se definen a continuación:
  - Rol de secretaría que será el encargado de dar de alta o eliminar a cualquiera de los 3 roles.
  - Rol de alumno, el cual podrá acceder y crear una serie de actividades definidas por categorías. Este rol está limitado a una serie de actividades. 
  - Rol de profesor, podrá acceder y crear una serie de actividades definidas por categorías específicas para este rol.
  - Rol de padre AMPA, este rol es exclusivo para padres inscritos en el AMPA. También podrá crear una serie de actividades por categorías ya definidas.

## 2. Objetivo del proyecto
El objetivo del proyecto es desarrollar una aplicación web que gestione las actividades y eventos de un centro educativo mediante un calendario. El usuario estará informado de las ultimas noticias referiras al centro.

La aplicación está orientada a ser una extensión o agregación de una página web ya creada y estructurada.

El acceso a la agenda sera solamente para alumnos matriculados en el centro, profesores del centro y padres inscritos en el AMPA. 

Las actividades para realizar en el proyecto serán:

  1. Análisis de las necesidades y requerimientos del proyecto.
  2. Seguimiento del tiempo empleado para realizar cada actividad mediante un diagrama de Gantt.
  3. Diseño y creación de la base de datos.
  4. Diseño y desarrollo de la aplicación web.
  5. Pruebas y despliegue de la aplicación.

## 3. Objetivo del proyecto en ingles
en ingles


## 4. Requisitos funcionales y no funcionales
### 4.1 Requisitos funcionales (RF)

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

### 4.2 Requisitos no funcionales (RF)

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


### 4.3 Lista de tareas
  1. Análisis y diseño de diagrama de caso de uso.+
  2. Análisis y diseño de la base de datos con diagrama E/R. +
  3. Análisis y diseño de la base de datos con esquema relacional. +
  4. Análisis y diseño de la base de datos con modelo relacional (forma grafica en la base de datos). +
  5. Análisis y diseño de la base de datos con diagrama de clases (modelo php-laravel).
  6. Prototipo de la aplicación. +
  7. Aplicaciones que se usuaran para crear la aplicación.
  8. Desarrollar la aplicación.
  9. Insertar datos.
  10. Realizar pruebas individuales por rol de usuarios.
  11. Realizar pruebas completas de la aplicacion desplegada.    
     
## 5. Planificación del proyecto    
### 5.1 Metodologia de trabajo    
### 5.2 Diagrama de Gantt   
### 5.3 Presupuesto   
### 5.4 Precio técnico y de venta   
### 5.5 Análisis de riesgo   
    
## 6. Análisis y diseño de la base de datos    
### 6.1 Esquema Entidad-Relación   
### 6.2 Casos de Uso   
### 6.3 Esquema Relacional    
### 6.4 Script de la base de datos    
### 6.5 Diagrama de Clases    
     
## 7. Implementación y pruebas    
### 7.1 Pruebas Funcionales    
### 7.2 Manual de Instalación   
  
## 3. Análisis y diseño de la base de datos
## 3.1 Casos de Uso 

![diagrama_casos-uso](https://user-images.githubusercontent.com/77245013/141775270-a5825a3b-80ef-4815-afd2-3a6c948cda6f.PNG)

## 3.2 Diagrama Entidad-Relación 

![diagrama_er](https://user-images.githubusercontent.com/77245013/141770672-09078d71-6231-4606-93d5-61319780bbfe.PNG)

---TABLA CASO DE USOS----

## 3.3 Esquema Relacional

### Tablas que se usaran

_Usuario_(**id_usuario**, dnie, nombre, apellido1, apellido2, dirección, teléfono_contacto, email)  
&emsp; &ensp; CP:{id_usuario}    

_AMPA_(**id_usuario**, dnie, nombre, apellido1, apellido2, dirección, teléfono_contacto, email)  
&emsp; &ensp; CP:{id_usuario}  

_Alumno_(**id_usuario**, dnie, nombre, apellido1, apellido2, dirección, teléfono_contacto, email, id_curso)  
&emsp; &ensp; CP:{id_usuario}  
&emsp; &ensp; CAj:{id_curso} referencia a Curso  

_Curso_(**id_curso**, nombre_curso, tipo_grado)   
&emsp; &ensp; CP{id_curso}  

_Profesor_(**id_usuario**id_usuario, dnie, nombre, apellido1, apellido2, dirección, teléfono_contacto, email, id_departamento)  
&emsp; &ensp; CP:{id_usuario}  
&emsp; &ensp; CAj:{id_departamento} referencia a Departamento  

_Departamento_(**id_departamento**, nombre_departamento)  
&emsp; &ensp; CP:{id_departamento}  

_Agenda_(**id_agenda**, fecha, hora, id_actividad)    
&emsp; &ensp; CP:{id_agenda}  
&emsp; &ensp; CAj:{id_actividad} referencia a Actividad     

_Actividad_(**id_actividad**, tipo_de_usuario, titulo_actividad, descripcion)  
&emsp; &ensp; CP:{id_actividad}  

_Usuario_Agenda_(**id_usuario, id_agenda**)  
&emsp; &ensp; CP:{id_usuario, id_agenda}  
&emsp; &ensp; CAj:{id_usuario} referencia a Usuario    
&emsp; &ensp; CAj:{id_agenda} referencia a Agenda    

_Usuario_Actividad_(**id_usuario, id_actividad**)    
&emsp; &ensp; CP:{id_usuario, id_actividad}  
&emsp; &ensp; CAj:{id_usuario} referencia a Usuario  
&emsp; &ensp; CAj:{id_actividad} referencia a Actividad   

## 3.4 Modelo Relacional

![modelo_relacional](https://user-images.githubusercontent.com/77245013/142024321-4d6c7cb2-f863-4a74-811a-6816d3ef5f9e.PNG)

## 3.5 Diagrama de Clases

--ME FALTA--

# 4. Diseño de la interfaz de usuario
## Interfaz para usuario no registrado

### Inicio
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/142902081-8b8b2b5b-9958-4b1b-b329-a9727fab29d8.PNG" alt="Inicio">
</p>  
           
**Inicio** mostrara una lista con toda la información sobre todos los grados que imparte el centro. Tambien se mostraran los botones de redes sociales.

### Secretaria
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/142902223-3a37ed55-95b2-4846-a443-9bf3afad1a73.PNG" alt="Secretaria">
</p>   
          
**Secretaria** mostrara el horario de atención de secretaria, un formulario de contacto y la ubicación del centro.

### Alumnos
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/142902704-acbc3e89-5bf4-457b-aa3d-4fdb8d2117cd.PNG" alt="Inicio sesión alumno">
</p>   
           
**Alumnos** mostrara un inicio de sesión solo para alumnos.

### Profesores
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/142903052-b17e7fe1-be5f-4b4a-a900-42c5a308358f.PNG" alt="Inicio sesión profesor">
</p>   
           
**Profesores** mostrara un inicio de sesión solo para profesores.

### AMPA
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/142903121-5ec5d277-95c7-4834-8441-5fc260890a6f.PNG" alt="Inicio sesión ampa">
</p>   
            
**AMPA** mostrara un inicio de sesión solo para usuarios del AMPA.

## Interfaz para usuario registrado
### Inicio 2
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/143006308-9674c095-88f9-4b81-848f-e7d562364197.PNG" alt="Inicio usuario registrado">
</p>   
       
Una vez que el usuario a iniciado sesión, en el menú aparecera la opción **Agenda Escolar**. Además, se añade el botón de **Perfil** y **Salir**.

### Agenda Escolar
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/143021480-c0ac97c5-3a95-4dca-9c3f-920b557fcee5.png" alt="Agenda Escolar">
</p>  
        
En **Agenda Escolar**, el usuario puede crear, editar y eliminar una actividad.
     
**FALTA PONER EJEMPLO DE COMO SE CREAR, EDITAR Y ELIMINAR.**

### Perfil
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/143023973-475295e7-5434-4f8f-8840-84b438a07982.PNG" alt="Perfil usuario">
</p>  
      
En **Perfil** el usuario puede ver las actividades que ha creado y en las cuales se ha unido.

### Cambiar contraseña
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/143042147-59220247-7747-405d-869b-f639d4794108.PNG" alt="Cambiar contraseña">
</p>  
        
En **Cambiar contraseña** el usuario podra cambiar la contraseña, debiendo escribir su correo, contraseña actual y nueva contraseña.

## Interfaz para administrador
### Iniciar sesión
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/143210019-700cf65e-d342-401a-94d3-9bed27c4d189.PNG" alt="Inicio sesión administrador">
</p>
Para que el administrador acceda a inicio de sesión debe escribir en la url: https://agendaescolar.es/admin_cedu
Se le pedira el nombre del usuario administrador y la contraseña.

### Gestión alumno
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/143211372-420f4ac9-4db9-4dd6-8066-a825bc65d1aa.PNG" alt="Gestión alumno">
</p>  
       
En **Gestión alumno** el administrador podrá buscar un usuario introduciendo su nie o dni. La información se mostrará bloqueada hasta que el administrador marque mediante un radio button que opcion quiere hacer. **id_usuario SIEMPRE estará bloqueado y no se podra modificar.**  
        
Tambien, aparece el botón de **Crear Alumno** donde se mostraran todos los campos vacios, excepto **id_usuario** que se asigna automaticamente. El administrador introducira el nuevo usuario.  

<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/143216034-93297d2b-13b5-4c3c-bd80-3002cd28f971.PNG" alt="Crear alumno">
</p>   
       
### Gestión agenda escolar
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/143264218-9642b205-f752-4771-8bf3-85fbc039d6dc.PNG" alt="Gestión agenda">
</p>   
    
En **Gestión agenda escolar** el administrador gestionar todas las actividades de todos los usuarios del centro, ya sean alumnos, profesores o padres. Para ello, primero debera buscar por el dni del usuario. Mostrará: id usuario, nombre, apellido y email. Acontinuacion, se mostrara el listado que las actividades que ha ido creando y en las cuales esta unido.    
     
El administrador solo podrá borrar las actividades que incumplan las normas.   
       
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/143264714-00718a24-303b-48bf-9ed0-036eef40a6d3.PNG" alt="Borrar actividad">
</p>    
    
En **Crear actividad** el administrador podra crear actividades. Se mostrará el calendario donde debera indicar todos los datos para crear la actividad.  
      
<p align="center">
    <img width="600" src="https://user-images.githubusercontent.com/77245013/143265055-4a63834a-4bde-4cfc-8182-cb2dc1170300.PNG" alt="Crear actividad">
</p>    
     
# 5. Diseño de la arquitectura  
.
.
.
      
# 6. Manual de instalación
.
.
.
       

     

      




