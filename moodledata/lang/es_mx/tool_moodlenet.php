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
 * Strings for component 'tool_moodlenet', language 'es_mx', version '4.4'.
 *
 * @package     tool_moodlenet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingaresource'] = 'Añadiendo contenido desde MoodleNet';
$string['aria:enterprofile'] = 'Ingrese su ID de su perfil de MoodleNet';
$string['aria:footermessage'] = 'Mirar contenido en MoodleNet';
$string['autoenablenotification'] = '<p>En Moodle 4.0 en adelante, la integración a  <a href="https://moodle.net/">MoodleNet</a> está habilitada de forma predeterminada en Características avanzadas. Los usuarios con la capacidad para crear y gestionar actividades pueden mirar MoodleNet vía el selector de actividades y pueden importar recursos de  MoodleNet a sus cursos.</p><p>Si se deseara, puede especificarse una instancia alternativa de MoodleNet en <a href="{$a->settingslink}">Configuraciones de entrada de MoodleNet</a>.</p>';
$string['autoenablenotification_subject'] = 'Configuración predeterminada de MoodleNet cambiada.';
$string['browsecontentmoodlenet'] = 'O mirar contenido en MoodleNet';
$string['clearsearch'] = 'Borrar búsqueda';
$string['connectandbrowse'] = 'Conectar y mirar:';
$string['defaultmoodlenet'] = 'URL de MoodleNet';
$string['defaultmoodlenet_desc'] = 'La URL de la instancia de MoodleNet disponible mediante el selector de actividad.';
$string['defaultmoodlenetname'] = 'Nombre de instancia de MoodleNet';
$string['defaultmoodlenetname_desc'] = 'El nombre la instancia de MoodleNet disponible mediante el selector de actividad.';
$string['defaultmoodlenetnamevalue'] = 'Central MoodleNet';
$string['enablemoodlenet'] = 'Habilitar integración MoodleNet (entrada)';
$string['enablemoodlenet_desc'] = 'Si se habilita, un usuario con la capacidad para crear y gestionar actividades puede mirar/buscar MoodleNet desde el selector de actividad y puede importar recursos de MoodleNet al interior de los cursos. También le permite a los usuarios con la capacidad de restaurar respaldos el seleccionar un archivo de respaldo desde MoodleNet y restaurarlo en Moodle.';
$string['errorduringdownload'] = 'Ocurrió un error al descargar el archivo: {$a}';
$string['footermessage'] = 'O mirar/buscar contenido en';
$string['forminfo'] = 'Su ID de perfil de MoodleNet será guardado automáticamente en su perfil en este sitio.';
$string['importconfirm'] = 'Usted está a punto de importar el contenido "{$a->resourcename} ({$a->resourcetype})" dentro del curso "{$a->coursename}". ¿Está seguro de querer continuar?';
$string['importconfirmnocourse'] = 'Usted está a punto de importar el contenido "{$a->resourcename} ({$a->resourcetype})" dentro de su sitio. ¿Está seguro de querer continuar?';
$string['importformatselectguidingtext'] = '¿En cual formato le gustaría que el contenido "{$a->name} ({$a->type})" sea añadido a su curso?';
$string['importformatselectheader'] = 'Elegir el formato de visualización del contenido';
$string['inputhelp'] = 'O, si Usted ya tiene una cuenta de MoodleNet, copie la ID de su perfil de MoodleNet y péquelo aquí:';
$string['instancedescription'] = 'MoodleNet es una plataforma abierta de medios sociales para educadores, con un enfoque en la conservación y clasificación  creativa de colecciones de recursos abiertos.';
$string['instanceplaceholder'] = 'a1b2c3d4e5f6-ejemplo@moodle.net';
$string['invalidmoodlenetprofile'] = '$userprofile no está formateado correctamente';
$string['missinginvalidpostdata'] = 'La información de recurso de MoodleNet está, o faltante, o en un formato incorrecto. Si esto sucede repetidamente,por favor póngase en contacto con el administrador del sitio.';
$string['mnetprofile'] = 'Perfil MoodleNet';
$string['mnetprofiledesc'] = '<p>Introduzca aquí los detalles de su perfil MoodleNet para ser redirigido a su perfil cuando visite MoodleNet.</p>';
$string['moodlenetnotenabled'] = 'La integración con MoodleNet debe ser habilitada en la Administración del Sitio / MoodleNet antes de que las importaciones de recurso puedan ser procesadas.';
$string['moodlenetsettings'] = 'Configuraciones de MoodleNet de entrada';
$string['notification'] = 'Usted está a punto de importar el contenido "{$a->name} ({$a->type})" dentro de su sitio. Seleccione el curso adentro del cual deberían ser añadidos, o <a href="{$a->cancellink}">cancele</a>.';
$string['pluginname'] = 'MoodleNet (RedMoodle)';
$string['privacy:metadata'] = 'La herramienta MoodleNet solamente facilita la comunicación con MoodleNet. No almacena ningún dato.';
$string['profilevalidationerror'] = 'Hubo un problema al intentar validar su ID de perfil MoodleNet';
$string['profilevalidationfail'] = 'Por favor ingrese una ID de perfil MoodleNet válido';
$string['profilevalidationpass'] = '¡Buena Suerte!';
$string['removedmnetprofilenotification'] = 'Debido a algunos cambios recientes en la plataforma MoodleNet, los usuarios que previamente habían guardado su ID del perfil MoodleNet en el sitio necesitarán ingresar una ID de perfil de MoodleNet en el nuevo formato para poder autenticarse en la plataforma MoodleNet.';
$string['removedmnetprofilenotification_subject'] = 'Cambio de formato de ID de perfil de MoodleNet';
$string['saveandgo'] = 'Guardar e ir';
$string['searchcourses'] = 'Buscar cursos';
$string['selectpagetitle'] = 'Seleccionar página';
$string['uploadlimitexceeded'] = 'El tamaño de archivo {$a->filesize} excede el límite de subida de {$a->uploadlimit} bytes.';
