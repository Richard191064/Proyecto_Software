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
 * Strings for component 'auth_email', language 'es_mx', version '4.4'.
 *
 * @package     auth_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = 'La confirmación por correo electrónico es el método de autenticación predeterminado. Cuando el usuario se inscribe, escogiendo su propio usuario y contraseña, se envía un email de confirmación a su dirección de correo electrónico. Este email contiene un enlace seguro a una página donde el usuario puede confirmar su cuenta. Los futuros ingresos comprueban el usuario y contraseña contra los valores guardados en la base de datos de Moodle.';
$string['auth_emailnoemail'] = '¡Trató de mandarle un Email pero falló!';
$string['auth_emailrecaptcha'] = 'Agrega un elemento de formato de confirmación visual o auditiva a la página de acceso para los usuarios auto-registrados vía Email (captcha). Esta opción protege su sitio contra los creadores de spam y contribuye a una buena causa. Vea https://www.google.com/recaptcha para más detalles.';
$string['auth_emailrecaptcha_key'] = 'Habilitar elemento reCAPTCHA';
$string['auth_emailsettings'] = 'Configuraciones';
$string['pluginname'] = 'Auto-registro basado en Email';
$string['privacy:metadata'] = 'El plugin de Autenticación por autoregistro basado en Email no almacena ningún dato personal.';
