# CS2024-1Grupo01
[![logo-de-ambiente.png](https://i.postimg.cc/tJB8HcgM/logo-de-ambiente.png)](https://postimg.cc/CnfcGmkG)
# TECNOLOGÍAS USADAS

- **PHP**
- **HTML**
- **CSS**
- **JQUERY**
- **JAVASCRIPT**
- **MYSQL** (base de datos)
- **FIREBASE** (Para notificaciones a operarios)
- **JAVA** (APP ANDROID)

# HERRAMIENTAS A USAR

- **VISUAL STUDIO CODE**
- **POSTMAN**
- **XAMPP**
- **ANDROID STUDIO**
- **MYSQL WORKBENCH**

# DESCRIPCIÓN DEL PROBLEMA

[![limpieza.png](https://i.postimg.cc/Hxs2Ck7T/limpieza.png)](https://postimg.cc/gwQRVdD7)

LA EMPRESA **SERVIASEOS DEL PERÚ** ES LA ENCARGADA DE REALIZAR EL PROCESO DE RECOLECCIÓN Y LIMPIEZA DE ZONAS DE LA CIUDAD DE AREQUIPA DONDE ACTUALMENTE SE LLEVA ESE PROCESO DE FORMA MANUAL. CADA OPERARIO PASA DIARIAMENTE A LAS OFICINAS DE LA EMPRESA DONDE REALIZA UN PROCESO DE REGISTRO Y SE LE ASIGNA SU LABOR Y ZONA DIARIA LA CUAL DEBE CUMPLIR, PASANDO AL FINAL DE LA JORNADA A LA EMPRESA A DETALLAR SU LABOR REALIZADA Y FINALIZAR SU LABOR DIARIA. ESTE PROCESO A VECES PUEDE SER TEDIOSO YA QUE EL OPRARIO DE ASEO DEBE CONTAR CON DISPONIBILIDAD DE PLANILLAS COMO AL IGUAL DEBE DESPLAZARSE A LAS INSTALACIONES DE LA EMPRESA A ENTREGAR EL MATERIAL DE ASEO ASIGNADO. LA EMPRESA CADA X TIEMPO SACA REPORTES EN BASE A LA INFORMACIÓN SUMINISTRADA POR LOS OPERARIOS EN LOS REGISTRO Y ESTOS REPORTES SON PASADOS A UN EXCEL PARA ENTREGA A GERENCIA.

# ALTERNATIVA SOLUCIÓN

DESARROLLAR UNA PLATAFORMA WEB / ANDROID DIRIGIDA AL PERSONAL ADMINISTRATIVO COMO A LOS OPERARIOS DE ASEO CON EL OBJETIVO DE MEJORAR PROCESOS FUNCIONALES Y MISIONALES DE LA ENTIDAD, AL PERMITIR LA ASIGNACIÓN DE TAREAS EN CAMPO, VERIFICACIÓN DE TAREAS Y PROCESOS REALIZADOS DURANTE LA JORNADA POR MEDIO DE EVIDENCIA ESCRITA Y GRÁFICA SUBIDA A LA PLATAFORMA TANTO EN EL INICIO COMO AL FINAL DE JORNADA, CON LA OPCIÓN DE PODER CARGAR MATERIAL EN FORMATO PDF EL CUAL SERVIRÁ DE CAPACITACIÓN PARA EL OPERARIO DE ASEO EN SU FUNCIÓN DIARIA (Gran parte de este personal no tienen un manejo con la tecnología así que se hará una interfaz simple, acompañado de capacitaciones sobre el uso de la herramienta).

# OBJETIVO GENERAL

DESARROLLAR UN SISTEMA PARA LA GESTIÓN DE PROCESOS Y TAREAS DE RECOLECCIÓN DE RESIDUOS Y LIMPIEZA DE ZONAS EN LA EMPRESA SERVIASEOS DEL PERÚ, EL CUAL PERMITIRÁ MEJORAR LA GESTIÓN DE PROCESOS REALIZADOS ACTUALMENTE CON EL PERSONAL DESTINADO PARA DICHA LABOR.









# Diagrama de Casos de Uso

[![caso-de-uso.png](https://i.postimg.cc/Hk7h3kS6/caso-de-uso.png)](https://postimg.cc/xXn51nVm)


# Arquitectura del Sistema

## Cliente – Servidor
[![arqquitectura.webp](https://i.postimg.cc/9Qsgjzrr/arqquitectura.webp)](https://postimg.cc/cvMBRx7S)
Detalles sobre la arquitectura cliente-servidor del sistema.

# Patrón de Desarrollo

## Modelo – Vista – Controlador
[![MVC3.png](https://i.postimg.cc/nMbvWGt2/MVC3.png)](https://postimg.cc/7J9GG7hJ)

Nota: no se usara framework sino que se hará un desarrollo basado en arquitectura modelo viista controlador


Descripción del patrón MVC y cómo se aplica en tu proyecto.
## REQUISITOS FUNCIONALES

| Requisito Funcional                                    | Actor / Rol                       | Descripción Detallada                                                                                                                                                   |
|---------------------------------------------------------|-----------------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Autenticación segura de usuarios                        | Administrador, Operadores         | El sistema debe implementar autenticación con encriptación de contraseñas y soportar verificación en dos pasos.                                                         |
| Registro y gestión de zonas                             | Administrador                     | Permitir al administrador registrar, modificar, y eliminar zonas de acción, con validación de datos para evitar errores de entrada.                                     |
| Asignación de zonas de labor diaria                     | Administrador                     | Facilitar la asignación de zonas a operarios diariamente con una interfaz que permita seleccionar múltiples zonas y operarios simultáneamente.                          |
| Monitoreo de actividades de aseo                        | Administrador                     | Permitir al administrador visualizar en tiempo real las actividades realizadas por los operarios, incluyendo inicio y fin de tareas, con opciones de filtrado por fecha y zona. |
| Gestión integral de usuarios                            | Administrador                     | Administrar usuarios incluyendo la creación, edición, y desactivación de cuentas de operadores y otros administradores, con controles de acceso según el rol.            |
| Generación y exportación de reportes                    | Administrador                     | Generar reportes de labor en formatos PDF y Excel, permitiendo personalización por periodos específicos y tipos de actividades.                                        |
| Registro gráfico de zonas antes y después de la limpieza| Administrador, Operadores         | Capturar y almacenar imágenes de las zonas antes y después de las tareas, accesibles vía el sistema para verificación y reportes.                                       |
| Alta de nuevas zonas de acción                          | Administrador                     | Permitir la creación de nuevas zonas de acción mediante una interfaz gráfica que incluya mapas interactivos para seleccionar precisamente las áreas.                    |
| Gestión de alertas y estados de zonas                   | Administrador, Operadores         | Notificaciones en tiempo real sobre cambios de estado o alertas en zonas asignadas, visible en la interfaz de ambos roles.                                              |
| Control de estados de labor (Activa, Finalizada, Cancelada) | Administrador                  | Proporcionar herramientas para cambiar y visualizar el estado de las tareas, con registro automático de cambios para auditoría.                                        |
| Asignación flexible de personal a zonas                 | Administrador                     | Implementar una funcionalidad que permita asignar varias personas a una zona con diferentes tareas, incluyendo la gestión de horarios y roles específicos.              |
| Revisión y aprobación de reportes por parte del administrador | Administrador                 | Incorporar un módulo de revisión donde el administrador puede aprobar o solicitar correcciones en los reportes antes de su finalización y distribución.                 |


## REQUISITOS NO FUNCIONALES

| Requerimiento No Funcional                                                                                      | Tipo           |
|-----------------------------------------------------------------------------------------------------------------|----------------|
| El aplicativo debe tener una interfaz de usuario simple que permita una fácil comprensión por el personal de aseo| Usabilidad     |
| El sistema administrativo debe tener una interfaz de usuario responsivo y se vea bien en los navegadores        | Usabilidad     |
| El sistema debe tener una opción de ayuda                                                                       | Usabilidad     |
| El sistema debe tener opciones de retroalimentación al usuario después de cada acción que realice con mensaje, imágenes, opciones de espera o cargando entre muchas más opciones | Usabilidad |
| El sistema debe tener en cada pantalla colores no tan fuertes y logos de la empresa                             | Usabilidad     |
| El sistema debe permitir que ningún recurso pueda ser accedido por usuarios no autorizados                       | Usabilidad     |
| El sistema debe permitir guardar el reporte si no se tiene internet en campo                                    | Confiabilidad  |
| El sistema debe manejar mapas para el administrador para ver las respectivas zonas de acción                     | Rendimiento    |
| El sistema debe permitir generar múltiples reportes                                                             | Usabilidad     |
| El sistema debe permitir la recuperación de acceso                                                              | Rendimiento    |



## Modelo Entidad Relación
Para realizar mi modelo entidad relación se tiene que tomar en consideracion todos los requisitos funcionales a continución detallare todas la relaciones para la creacion de mi modelo entidad relación.

1. **Autenticación segura de usuarios:** Esto implicaría que las tablas ADMINISTRADOR y OPERARIO deberían almacenar las contraseñas de forma encriptada y podrían requerir campos adicionales para la autenticación de dos factores.
2. **Registro y gestión de zonas:** La tabla ZONA es directamente responsable de este requisito, permitiendo la creación, actualización y eliminación de zonas.
3. **Asignación de zonas de labor diaria:** La relación entre LABOR y ZONA indica dónde y cuándo se llevan a cabo las tareas, cumpliendo con este requisito.
4. **Monitoreo de actividades de aseo:** El sistema necesitará utilizar las tablas LABOR, LABOR_has_ESTADO, y OPERARIO para rastrear y visualizar las actividades de limpieza.
5. **Gestión integral de usuarios:** Esto se relaciona con las tablas ADMINISTRADOR y OPERARIO, que contienen los datos de los usuarios que el sistema debe ser capaz de gestionar.
6. **Generación y exportación de reportes:** Se requiere la integración de datos de múltiples tablas, como LABOR, LABOR_has_ESTADO, y ZONA, para producir reportes detallados.
7. **Registro gráfico de zonas antes y después de la limpieza:** La tabla LABOR_has_ESTADO contiene un campo FOTO, que probablemente se utiliza para almacenar imágenes relacionadas con las labores.
8. **Alta de nuevas zonas de acción:** Nuevamente, la tabla ZONA sería clave aquí, especialmente si se agregan características geográficas interactivas.
9. **Gestión de alertas y estados de zonas:** La tabla LABOR_has_ESTADO y ESTADO jugarían un papel central en la gestión y notificación de cambios de estado.
10. **Control de estados de labor (Activa, Finalizada, Cancelada):** La tabla ESTADO y la relación LABOR_has_ESTADO permiten el control y visualización del estado actual de las tareas.
11. **Asignación flexible de personal a zonas:** Esto implicaría una funcionalidad que maneje las relaciones entre OPERARIO, LABOR y ZONA, permitiendo múltiples asignaciones y horarios.
12. **Revisión y aprobación de reportes por parte del administrador:** Aunque no hay una tabla específica en el diagrama para la revisión de reportes, los datos necesarios para generar los reportes provendrán de las tablas LABOR, LABOR_has_ESTADO, y ZONA.
El diagrama de entidad-relación servirá como base para el diseño de la base de datos que respaldará estas funciones. La lógica de negocio y la interfaz de usuario del sistema, que no se muestran en el diagrama, serán las que interactúen con esta estructura de datos para implementar los requisitos funcionales de manera efectiva.






[![Untitled.png](https://i.postimg.cc/c1TjK0fs/Untitled.png)](https://postimg.cc/Rq6GyrP8)

La imagen muestra un diagrama de base de datos con varias entidades y sus relaciones. Es un modelo de base de datos para un sistema que podría estar relacionado con la gestión de trabajos o tareas (labores) en diferentes zonas, manejado por administradores y operadores. Aquí hay un resumen de cada entidad y su función basada en los nombres y relaciones:

1. **ADMINISTRADOR:** Esta tabla almacena información sobre los administradores, como nombre, apellido, correo, usuario y clave. Probablemente son los encargados de gestionar las labores y operaciones dentro del sistema.
2. **LABOR:** Representa las tareas o trabajos asignados. Contiene información como fecha, título, descripción y relaciones con las tablas ADMINISTRADOR y ZONA.
3. **ZONA:** Define las áreas o regiones donde se realizan las labores. Incluye un identificador y un nombre para la zona.
4. **LABOR_has_ESTADO:** Es una tabla de relación entre LABOR y ESTADO que probablemente se usa para rastrear el estado de cada tarea. Incluye datos como latitud y longitud (ubicación de la tarea), una foto, fecha y una descripción adicional.
5. **OPERARIO:** Esta tabla guarda información sobre los operarios o trabajadores, incluyendo identificación, nombre, apellido, foto, correo, teléfono y clave.
6. **ESTADO:** Enumera los posibles estados de una tarea: No Realizada, Abierta, En Proceso, Cerrada, Cancelada, Finalizada.
 Las líneas discontinuas y continuas entre las entidades representan las relaciones de clave foránea entre las tablas, lo que sugiere cómo se conectan los datos en el sistema. Por ejemplo, un ADMINISTRADOR puede estar asignado a varias LABORES, y cada LABOR tiene un ESTADO que se actualiza en la tabla LABOR_has_ESTADO.

Este diagrama es una herramienta útil para el desarrollo de bases de datos, ya que proporciona una visualización de cómo se estructuran y relacionan los datos, algo esencial para la construcción de aplicaciones como la que estás desarrollando para la gestión de colección de residuos y procesos de limpieza.


# MOCKUPS PAGINA WEB (ADMINISTRADOR)
**1.-PANTALLA DE INICIO DE SESIÓN:**
[![IMAGEN1.png](https://i.postimg.cc/2855XSgr/IMAGEN1.png)](https://postimg.cc/c6VZv0sb)

Esta imagen muestra la página de inicio de sesión donde los usuarios pueden ingresar su nombre de usuario y contraseña. También incluye opciones para recordar al usuario y recuperar una contraseña olvidada.

**2.-DASHBOARD PRINCIPAL:**
[![IMAGEN2.png](https://i.postimg.cc/mgv2DNkg/IMAGEN2.png)](https://postimg.cc/mPSGp97v)

Esta pantalla es un panel de control que muestra información clave como la cantidad de asignaciones, zonas, operadores disponibles, y tareas pendientes. También muestra un gráfico de ejecución de tareas y un mapa con ubicaciones de asignaciones, lo que sugiere una funcionalidad para rastrear la ubicación de las tareas en tiempo real.

**3.-MODAL DE CERRAR SESIÓN:**
[![IMAGEN3.png](https://i.postimg.cc/KvZSDztj/IMAGEN3.png)](https://postimg.cc/fkgrwM2Q)

Esta es una ventana emergente de confirmación para cerrar sesión. Le pregunta al usuario si realmente desea salir de la sesión actual.

**4.-GESTIÓN DE OPERADORES:**
[![IMAGEN4.png](https://i.postimg.cc/8z52x0KV/IMAGEN4.png)](https://postimg.cc/bs7Vt3f6)
Esta pantalla lista a los operadores activos de la empresa con detalles como ID, nombre, apellido, y opciones para editar o eliminar operadores. También tiene un botón para agregar nuevos operadores.

**5.-FORMULARIO PARA AGREGAR OPERADOR:**
[![IMAGEN5-AGREGAR-OPERARIO.png](https://i.postimg.cc/pTN3hX22/IMAGEN5-AGREGAR-OPERARIO.png)](https://postimg.cc/94pLs2RS)

Esta pantalla es un formulario para ingresar nuevos operadores. Solicita información como identificación, nombre, apellido, correo electrónico, teléfono, estado del operador, nombre de usuario y contraseña.

**6.-FORMULARIO PARA EDITAR OPERARIO:**
[![IMAGEN6-EDITAR-OPERARIO.png](https://i.postimg.cc/WzCxn8QD/IMAGEN6-EDITAR-OPERARIO.png)](https://postimg.cc/SYLZQ6Qq)

Similar al formulario para agregar un nuevo operador, esta interfaz permite editar los detalles existentes de un operador. Incluye campos para identificación, nombre, apellido, correo electrónico, teléfono, estado y detalles de usuario.

**7.-LISTADO DE ZONAS:**
[![IMAGEN7.png](https://i.postimg.cc/Mpkhfs7N/IMAGEN7.png)](https://postimg.cc/6y0HDf1f)

Muestra un listado de zonas designadas para la limpieza. Aunque en la imagen no hay zonas listadas, se proporciona un botón para agregar nuevas zonas.

**8.-FORMULARIO PARA AGREGAR ZONA:**

[![IMAGEN8-AGREGAR-ZONA.png](https://i.postimg.cc/k5sZZq0P/IMAGEN8-AGREGAR-ZONA.png)](https://postimg.cc/DWWB4kfx)

Permite la creación de una nueva zona especificando el nombre y las coordenadas de latitud y longitud. Este formulario es vital para organizar las operaciones por áreas geográficas específicas.

**9.-FORMULARIO PARA EDITAR ZONA:**

[![IMAGEN9-EDITAR-ZONA.png](https://i.postimg.cc/0jMBbmb9/IMAGEN9-EDITAR-ZONA.png)](https://postimg.cc/n9xkWX4W)

Esta interfaz permite editar la información de una zona existente. Los campos son similares al formulario de agregar zona, incluyendo nombre, latitud, longitud y estado.

**10.-VISTA DE ASIGNACIONES:**

[![IMAGEN10.png](https://i.postimg.cc/nVNHTGKY/IMAGEN10.png)](https://postimg.cc/YjfKCgsh)

Proporciona un resumen de las tareas asignadas, mostrando detalles como fecha, título, descripción, estado de la tarea y el operario asignado. Ofrece también opciones para editar la asignación.

**11.-FORMULARIO PARA AGREGAR ASIGNACIÓN:**

[![IMAGEN-11-AGREGAR-ASIGNACION.png](https://i.postimg.cc/4xQsfCDB/IMAGEN-11-AGREGAR-ASIGNACION.png)](https://postimg.cc/gxjfs7kZ)

Permite la creación de nuevas tareas asignando detalles como fecha, título, descripción, operario, zona y estado.

**12.-FORMULARIO PARA EDITAR ASIGNACIÓN:**
[![IMAGEN12-EDITAR-ASIGNACION.png](https://i.postimg.cc/fLph2MdT/IMAGEN12-EDITAR-ASIGNACION.png)](https://postimg.cc/Q9QPVGSR)

 Permite modificar los detalles de una tarea ya asignada, incluyendo fecha, título, descripción, operario, zona y estado. También ofrece la capacidad de actualizar esos datos.

**13.-REPORTE DE ACTIVIDAD CON EVIDENCIA:**
[![IMAGEN13-REPORTE-DE-ACTIVIDAD.png](https://i.postimg.cc/cC3GPP77/IMAGEN13-REPORTE-DE-ACTIVIDAD.png)](https://postimg.cc/H8TNyZhj)

 En esta interfaz, además de la edición de una asignación, se permite añadir evidencia fotográfica y observaciones de las tareas realizadas por el operario, lo que es crucial para la verificación y el seguimiento de las tareas completadas.

**14.-HOSTORIAL DE TAREAS:**

[![IMAGEN14.png](https://i.postimg.cc/jjj0RDQS/IMAGEN14.png)](https://postimg.cc/DSRYgyM9)

Muestra un registro histórico de todas las asignaciones y actividades completadas o en proceso dentro de la empresa, con filtros por fecha, título, descripción, y operario.

**15.-GRAFICOS DE REPORTES:**

[![IMAGEN15.png](https://i.postimg.cc/V6Sxb2hy/IMAGEN15.png)](https://postimg.cc/ZBS7GsZj)

**Porcentaje de Cumplimiento:** Muestra un gráfico de líneas que representa el porcentaje de cumplimiento de las tareas o servicios a lo largo del tiempo, lo cual es útil para monitorear la eficacia y la consistencia de los servicios proporcionados.

**Procesos:** Un gráfico circular que desglosa el estado actual de todas las tareas (abiertas, no realizadas, en proceso, canceladas y finalizadas). Este tipo de visualización ayuda a entender rápidamente la distribución del trabajo y los posibles cuellos de botella o áreas de mejora.


**16.-GESTIÓN DE ADMINISTRADORES:**

[![IMAGEN16.png](https://i.postimg.cc/C5TQn5DD/IMAGEN16.png)](https://postimg.cc/R6dRjMgV)

**Lista de Administradores:** Muestra una tabla con la lista de administradores, incluyendo su ID, nombre, apellido, correo electrónico, nombre de usuario, estado actual, y acciones disponibles como editar o eliminar. Esto facilita la gestión de acceso y control sobre quién puede modificar aspectos críticos de la aplicación.

**17.-FORMULARIO DE ADMINITSRADORES (AGREGAR)**

[![IMAGEN17-AGREGAR-ADMINISTRADOR.png](https://i.postimg.cc/cJv9DwBw/IMAGEN17-AGREGAR-ADMINISTRADOR.png)](https://postimg.cc/WDPwzDK1)

Agregar Nuevo Administrador: Un formulario para ingresar los datos de un nuevo administrador, incluyendo nombre, apellido, correo electrónico, nombre de usuario, contraseña y estado. Esto permite una fácil incorporación de nuevos administradores al sistema.

**18.-EDITAR ADMINISTRADOR**

[![IMAGEN18-EDITAR-ADMINISTRADOR.png](https://i.postimg.cc/CK9v95ct/IMAGEN18-EDITAR-ADMINISTRADOR.png)](https://postimg.cc/3yCCv85C)

Similar al formulario de agregar, pero para actualizar los datos de un administrador existente. Este nivel de control es esencial para mantener la seguridad y la actualización de la información de los usuarios con roles administrativos.

**19.-CONFIGURACIÓN DEL PERFIL:**

[![IMAGEN19.png](https://i.postimg.cc/C5hK0h1C/IMAGEN19.png)](https://postimg.cc/Q9zDkrcV)

**Configuración del Perfil:** Una interfaz que permite a los usuarios cambiar su propia información de usuario o eliminar su cuenta. Esto es parte de las prácticas estándar de gestión de cuentas, ofreciendo a los usuarios control sobre su propia información y la opción de retirarse del sistema si así lo desean.


**20.-FUNCIONALIDAD ESTADO:**

[![Captura-de-pantalla-2024-05-31-080618.png](https://i.postimg.cc/fL0M5kZQ/Captura-de-pantalla-2024-05-31-080618.png)](https://postimg.cc/ftD4RzJ8)

**Funcionalidad de estado:** Esta interfaz permitira actualizar elimniar acctualizar y crear los estados del operario. 

# MOCKUPS DE APP MOVIL (OPERADOR)

**1.-LOGOTIPO Y DISEÑO DE PAGINA DE INICIO**


[![Sin-t-tulo.png](https://i.postimg.cc/C1Lk4bMJ/Sin-t-tulo.png)](https://postimg.cc/GBV4L8ys)  

[![IMAGEN2.png](https://i.postimg.cc/R0qtKTL5/IMAGEN2.png)](https://postimg.cc/3y5WHmqn)

 Muestran el logotipo de LIMPERU SAC y el diseño de la página de inicio, tanto en versión de diseño como en su posible representación final. Esto incluye áreas de "ImageView", probablemente destinadas a mostrar gráficos o imágenes representativas.


**2.-INTERFACES DE USUARIO PARA EL INICIO DE SESIÓN:**

[![IMAGEN3.png](https://i.postimg.cc/FzXJtX5N/IMAGEN3.png)](https://postimg.cc/cgTJYjLb)

Dos variantes de diseño para la página de inicio de sesión, una más detallada y otra más esquemática, que proporcionan campos para ingresar el usuario y la contraseña, con un botón para iniciar sesión.

**3.-REGISTROS DE ACTIVIDADES DIARIAS:**

[![IMAGEN4.png](https://i.postimg.cc/fRqtz9nH/IMAGEN4.png)](https://postimg.cc/BjDQNtvD)

 Mockups que muestran el registro de actividades por fechas específicas, describiendo cada actividad realizada o en proceso, lo que permite un seguimiento detallado del progreso y cumplimiento de las tareas asignadas.

 **4.-FORMULARIO PARA REPORTES DE OPERARIO:**
 
[![IMAGEN5-ACTIVIDAD-NO-REALIZADA.png](https://i.postimg.cc/prvyGQzd/IMAGEN5-ACTIVIDAD-NO-REALIZADA.png)](https://postimg.cc/vgPQDVPR)

 Se muestra el diseño de formularios para que los operarios ingresen detalles de las actividades realizadas, incluyendo títulos, descripciones, reportes, y evidencias fotográficas, lo que es esencial para la validación y documentación de las tareas completadas.

 **5.-OBSERVACIONES DE ACTIVIDADES:**

[![IMAGEN6-OBSERVACION-ACTIVIDAD-DADA-POR-ADMINISTRADOR.png](https://i.postimg.cc/3JnW1vRK/IMAGEN6-OBSERVACION-ACTIVIDAD-DADA-POR-ADMINISTRADOR.png)](https://postimg.cc/qz6kMgyY)

Pantallas que permiten ingresar observaciones adicionales para actividades que no se realizaron completamente, solicitando específicamente evidencias adicionales, lo que sugiere un enfoque en la calidad y exhaustividad del trabajo realizado.




