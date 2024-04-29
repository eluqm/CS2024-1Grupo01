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
[![ultimo-medoel-diagrama.png](https://i.postimg.cc/fbcVfG5X/ultimo-medoel-diagrama.png)](https://postimg.cc/qt7BkZPM)


# MOCKUPS (ADMINISTRADOR)
## INICIO DE SESIÓN
[![INICIO-DE-SESION-ADMINISTRADOR.png](https://i.postimg.cc/N0VzbXzW/INICIO-DE-SESION-ADMINISTRADOR.png)](https://postimg.cc/2qQGS1mw)

Formulario de inicio de sesión para administradores y operarios.
Botón de "Olvidé mi contraseña" para la recuperación de acceso.

##  PAGINA PRINCIPAL
[![INTERFAZ-PRINCIPAL.png](https://i.postimg.cc/V6qWMbQ9/INTERFAZ-PRINCIPAL.png)](https://postimg.cc/jwjfY2jC)

Vista con opciones para gestionar operarios, zonas de acción, asignación, planificación, reporte y configuración.

## Las zonas establecidas (Administrador)

[![IMG-20240415-WA0009.jpg](https://i.postimg.cc/GtWkpdkp/IMG-20240415-WA0009.jpg)](https://postimg.cc/fSv324q4)

Las zonas estarán establecidas por medio de polígonos en un mapa 

## Panel de Operarios para el administrador

[![IMG-20240415-WA0007.jpg](https://i.postimg.cc/3wtb9fMZ/IMG-20240415-WA0007.jpg)](https://postimg.cc/qtCLvLvt)
## Gestión de Zonas

[![IMG-20240415-WA0008.jpg](https://i.postimg.cc/tT7vcdpG/IMG-20240415-WA0008.jpg)](https://postimg.cc/bDcRDtZm)

Formulario para registrar nuevas zonas de acción.
Lista de zonas existentes con opciones para editar o eliminar.
Interfaz para asignar zonas de labor diaria a los operarios.
Posibilidad de asignar múltiples personas a una misma zona con distintas tareas
# MOCKUPS (OPERARIO)
## INICIO DE SESIÓN
[![INICIO-DE-SESION-ADMINISTRADOR.png](https://i.postimg.cc/N0VzbXzW/INICIO-DE-SESION-ADMINISTRADOR.png)](https://postimg.cc/2qQGS1mw)

## Reportes Operarios(operarios)

[![IMG-20240415-WA0006.jpg](https://i.postimg.cc/3xBLJfwH/IMG-20240415-WA0006.jpg)](https://postimg.cc/hXX82rxC
falksñdjfadslñkfjasdlñfkasjdflñakdsjf





