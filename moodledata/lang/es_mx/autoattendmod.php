<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'autoattendmod', language 'es_mx', version '4.4'.
 *
 * @package     autoattendmod
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoattendmod:addinstance'] = 'Añadir un nuevo módulo de auto asistencia';
$string['autoattendmod:receivemail'] = 'Recibir notificación Email';
$string['autoattendmod:view'] = 'Ver módulo';
$string['autoattendmod:viewreports'] = 'Ver reportes';
$string['autoattendmod_options'] = 'Opciones del módulo de Auto Asistencia';
$string['backup_block'] = 'Cuando este curso es respaldado, los datos de asistencia son respaldados que fueron gestionados por el bloque de Autoattendance';
$string['backup_block_help'] = 'En esta versión el bloque Autoattendance gestiona los datos de asistencia. Aunque usted elimine los datos de Autoattendmod, los datos del curso permanecen en la base de datos.';
$string['backup_block_title'] = 'Respaldo de Datos de Asistencia';
$string['description'] = 'Descripción';
$string['disp_info'] = 'Mostrar información de la clase más próxima o vigente en el bloque.';
$string['disp_info_help'] = 'Mostrar la clave (caso de semi-automática) y número de asistentes para la clase más próxima o clase vigente en el bloque';
$string['disp_info_title'] = 'Información de asistencia en el bloque';
$string['disp_localhostname'] = 'Mostrar hostname en lugar de dirección IP local';
$string['disp_localhostname_help'] = 'Si la dirección IP es local, mostrar el nombre del host en lugar de la dirección IP';
$string['disp_localhostname_title'] = 'Mostrar Nombre del Host Local';
$string['email_allrep'] = 'Mandar todos los reportes a profesores por Email';
$string['email_allrep_help'] = 'Si está habilitado Email y usted activa esto, los reportes de asistencia son enviados por Email. Y si usted lo desactiva, solamente es enviado un reporte de asistencia';
$string['email_allrep_title'] = 'Mandar todos los Reportes';
$string['email_enable'] = 'Habilitar notificación por Email de datos de asistencia a Profesores';
$string['email_enable_help'] = 'Si Usted activa esto, cuando termine una sesión, los datos de asistencia se envían a profesores usando Email. Sin embargo, Usted debe añadir "Teacher" (profesor) a la capacidad autoattendmod:receivemail .';
$string['email_enable_title'] = 'Resultado de Notificación a Profesores';
$string['email_key'] = 'Habilitar notificación Email de clave de asistencia para Profesores';
$string['email_key_help'] = 'Si usted activa esto, cuando una sesión es iniciada, la palabra clave asistencia es enviada a los profesores empleando E-mail. Sin embargo, usted necesita añadir "Profesor" a la capacidad autoattendmod:receivemail.';
$string['email_key_title'] = 'Clave de Notificación para Profesores';
$string['email_user'] = 'Habilitar notificación Email de asistencia para Estudiantes';
$string['email_user_help'] = 'Si usted activa esto, cuando cambia la asistencia de estudiante, una notificación es es enviada al estudiante empleando E-mail. Sin embargo, usted necesita añadir "Estudiante" a la capacidad autoattendmod:receivemail.';
$string['email_user_title'] = 'Notificación a Estudiantes';
$string['excelver_disp'] = 'Usar el formato antiguo de Excel (Excel 2007) al descargar.';
$string['excelver_disp_help'] = 'Si no puede descargar el Reporte de Excel, por favor revise esto.';
$string['excelver_title'] = 'Usar Excel antiguo 2007';
$string['feedback_disp'] = 'Mostrar enlace a Retroalimentación';
$string['feedback_disp_help'] = 'Si Usted desactiva esto, no se mostrarán los enlaces a Retroalimentación';
$string['feedback_title'] = 'Enlace a Retroalimentación';
$string['firstinstallblock'] = 'Por favor primeramente instale el Bloque de Auto Asistencia';
$string['firstinstanceblock'] = 'Por favor primeramente cree una instancia de Bloque de Auto Asistencia en este curso.';
$string['misconfigured'] = 'El curso está mal configurado';
$string['modidincorrect'] = 'La ID del Módulo del Curso era incorrecta';
$string['modincorrect'] = 'El módulo del curso es incorrecto <br />Es posible que el Bloque de Auto Asistencia no esté instalado';
$string['modulename'] = 'Auto asistencia';
$string['modulename_help'] = 'Usted puede añadir un módulo de AutoAsistencia por curso, Si Usted remueve este módulo, no se afecta la asistencia <br /> Usted puede usar este módulo solamente en conjunto con el bloque de AutoAsistencia. Por favor, añada el bloque de AutoAsistencia antes de añadir este módulo.<br /> Este modulo trata de Asistencia semi-automática e incluye calificaciones por asistencia en las calificaciones del curso principal.';
$string['modulenameplural'] = 'Autoasistencias';
$string['modulenamesimple'] = 'Autoasistencia';
$string['name'] = 'Nombre';
$string['onlyonemodule'] = 'Solamente puede crearse una instancia del Módulo de Auto Asistencia por cada curso.';
$string['permit_homeroom'] = 'Permitir acceso desde el Módulo Homeroom';
$string['permit_homeroom_help'] = 'Si Usted desactiva esto, el módulo Homeroom no accede al módulo/bloque de Auto Asistencia';
$string['permit_homeroom_title'] = 'Para Módulo Homeroom';
$string['pluginadministration'] = 'Administración del Módulo de Auto Asistencia';
$string['pluginname'] = 'Módulo de Auto Asistencia';
$string['pre_disptime'] = 'Mostrar la información de la clase más próxima';
$string['pre_disptime_help'] = 'Si es que el bloque muestra información de la clase más reciente o actual; especificar cuantos minutos antes de iniciar la clase.';
$string['pre_disptime_title'] = 'Tiempo de gracia antes de iniciar la clase (m)';
$string['session_num'] = 'El número de sesiones';
$string['summertime_disp'] = 'Puede configurarse Horario de Verano en sesiones.';
$string['summertime_disp_help'] = 'Usted puede configurar Horario de Verano en algunas sesiones.';
$string['summertime_title'] = 'Usar Horario de Verano';
$string['use_item'] = 'use {$a}';
$string['username_manage'] = 'Gestión del Nombre_de_usuario';
$string['username_manage_help'] = 'Usted puede elegir mostrar el patrón del nombre en este módulo.';
