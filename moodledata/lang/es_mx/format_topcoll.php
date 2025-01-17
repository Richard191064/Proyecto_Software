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
 * Strings for component 'format_topcoll', language 'es_mx', version '4.4'.
 *
 * @package     format_topcoll
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['arrow'] = 'Flecha';
$string['bulb'] = 'Bulbo';
$string['cachedef_activitymodulecountcache'] = 'Cachéa el número de estudiantes que pueden acceder a un módulo dado en un curso.';
$string['cachedef_activitystudentrolescache'] = 'Cachéa los roles de estudiantes.';
$string['cachedef_activitystudentscache'] = 'Cachéa las IDs de estudiantes en un curso dado.';
$string['cachedef_activityusercreatedcache'] = 'Cachéa  las IDs de los nuevos usuarios en un curso dado.';
$string['cannotgetactivitycacheslock'] = 'No se puede obtener el bloqueo de cacheo de actividad para curso con id {$a}.';
$string['center'] = 'Centro';
$string['cloud'] = 'Nube';
$string['colourrule'] = 'Por favor escriba un color RGB válido, seis dígitos hexadecimales,  o \'-\' para el predeterminado.';
$string['columndynamic'] = 'Dinámico';
$string['columnhorizontal'] = 'Horizontal';
$string['columnvertical'] = 'Vertical';
$string['configurationheadingsub'] = 'Configuración';
$string['configurationheadingsubdesc'] = 'Ajustes de configuraciones a nivel del sitio';
$string['courseadditionalmoddatamaxstudents'] = 'Configurar el número máximo de estudiantes en un curso a los que se les aplicará "Mostrar información adicional"!';
$string['courseadditionalmoddatamaxstudentsdesc'] = 'La información adicional puede tardar un tiempo para calcularse, especialmente en cursos grandes, por lo que aquí puede usted configurar el número máximo de estudiantes que puede tener un curso para que la funcionalidad se muestre en ese curso. ¡Arriba de este valor, la \'Información adicional\' NO será calculada ni mostrada a pesar de las configuraciones del curso! Un valor de \'0\' significa \'ilimitado\'. Nota: Purga las cachés cuando es cambiado.';
$string['courseadditionalmoddatastudentsinfo'] = 'Estado de información adicional:';
$string['courseadditionalmoddatastudentsinfolimitednoshow'] = 'Información adicional NO será mostrada para as actividades habilitadas para {$a->students} estudiantes porque el número excede el máximo \'{$a->maxstudents}\' configurado por el administrador en la configuración  \'courseadditionalmoddatamaxstudents\' del formato de curso de Topicos Colapsados.';
$string['courseadditionalmoddatastudentsinfolimitedshow'] = 'Información adicional será mostrada para as actividades habilitadas para {$a->students} estudiantes porque el número no excede el máximo \'{$a->maxstudents}\' configurado por el administrador en la configuración  \'courseadditionalmoddatamaxstudents\' del formato de curso de Topicos Colapsados.';
$string['courseadditionalmoddatastudentsinfounlimited'] = 'Información adicional que se mostrará para las actividades habilitadas para $a} estudiantes.';
$string['coursesectionactivityfurtherinformation'] = 'Más información de página del curso';
$string['coursesectionactivityfurtherinformation_desc'] = 'Configuraciones de más información de Página del curso a nivel del sitio';
$string['coursesectionactivityfurtherinformationassign'] = 'Mostrar información de Tarea';
$string['coursesectionactivityfurtherinformationassigndesc'] = 'Permitir que la información de Tarea a ser seleccionada sea mostrada en un curso. Para profesores / admins, mostrar número de envíos.';
$string['coursesectionactivityfurtherinformationchoice'] = 'Mostrar información de elección';
$string['coursesectionactivityfurtherinformationchoicedesc'] = 'Permitir que la  información de elección a ser mostrada sea mostrada en un curso. Para profesores / admins, mostrar número de envíos.';
$string['coursesectionactivityfurtherinformationdata'] = 'Mostrar información de base de datos';
$string['coursesectionactivityfurtherinformationdatadesc'] = 'Permitir que la información de datos a ser seleccionados sea mostrada en un curso. Para profesores / admins, mostrar número de envíos.';
$string['coursesectionactivityfurtherinformationfeedback'] = 'Mostrar información de retroalimentación';
$string['coursesectionactivityfurtherinformationfeedbackdesc'] = 'Permitir que la información de retroalimentación a ser seleccionada sea mostrada en un curso. Para profesores / admins, mostrar número de envíos.';
$string['coursesectionactivityfurtherinformationforum'] = 'Mostrar información del foro';
$string['coursesectionactivityfurtherinformationforumdesc'] = 'Permitir que la información del foro a ser seleccionado sea mostrada en un curso. Para profesores / admins, mostrar número de contribuciones cuando está activada la valoración de todo el foro.';
$string['coursesectionactivityfurtherinformationlesson'] = 'Mostrar información de lección';
$string['coursesectionactivityfurtherinformationlessondesc'] = 'Permitir que la información de la lección a ser seleccionada sea mostrada en un curso. Para profesores / admins, mostrar número de envíos.';
$string['coursesectionactivityfurtherinformationquiz'] = 'Mostrar información de examen';
$string['coursesectionactivityfurtherinformationquizdesc'] = 'Permitir que la información de examen a ser seleccionado sea mostrada en un curso. Para profesores / admins, mostrar número de envíos.';
$string['ctreset'] = 'Opciones de reinicio de Tópicos Colapsados';
$string['ctreset_help'] = 'Reiniciar a las configuraciones por defecto de Tópicos Colapsados.';
$string['currentsection'] = 'Esta sección';
$string['default'] = 'Predeterminado - {$a}';
$string['defaultdisplayblocks'] = 'Bloques a mostrar';
$string['defaultdisplayblocks_desc'] = 'Elegir los bloques a mostrar en el curso cuando es creado por primera vez y este formato es seleccionado. Use la tecla \'Ctrl\' en combinación con el ratón para seleccionar más de uno o ninguno. Nota: Esta configuración solamente aplicará en la creación actual del curso y en ningún otro momento; por ejemplo, al cambiar a Tópicos colapsados desde otro formato.';
$string['defaultdisplayblocksloc'] = 'Ubicación del bloque a mostrar';
$string['defaultdisplayblocksloc_desc'] = 'Elegir la ubicación para los bloques elegidos arriba para mostrarse, pre(vio) o post(erior) respecto al lado.';
$string['defaultdisplayinstructions'] = 'Mostrarle instrucciones a usuarios';
$string['defaultdisplayinstructions_desc'] = 'Mostrarle instrucciones a usuarios, informándoles de cómo usar los altenadores. Puede ser \'si\' o \'no\'.';
$string['defaultflexiblemodules'] = 'Módulos flexibles';
$string['defaultflexiblemodules_desc'] = '¿Usar módulos flexibles?';
$string['defaultheadingsub'] = 'Valores por defecto';
$string['defaultheadingsubdesc'] = 'Configuraciones por defecto que pueden ser anuladas al nivel del curso';
$string['defaultlayoutcolumnorientation'] = 'Orientación de la columna';
$string['defaultlayoutcolumnorientation_desc'] = 'Orientación predeterminada  de la columna: Dinámica - Secciones numeradas por \'fila\' ajustadas al tamaño de la ventana. Configuración de \'Columna\' actualmente n.<br>Horizontal - Las secciones van de izquierda a derecha.<br>Vertical - Las secciones van de arriba hacia el fondo.';
$string['defaultlayoutcolumns'] = 'Número de columnas';
$string['defaultlayoutcolumns_desc'] = 'Número de columnas entre una y cuatro.';
$string['defaultlayoutelement'] = 'Diseño';
$string['defaultlayoutelement_desc'] = 'La configuración del diseño puede ser una de:<br />\'\'Por defecto\', que muestra todo.<br />Sin \'Tópico x\' / \'Semana x\' / \'Día x\'.<br />Sin número de sección.<br />Sin \'Tópico x\' / \'Semana x\' / \'Día x\' y sin número de seccción.<br />Sin palabra \'Alternar\'.<br />Sin palabra \'Alternar\' y sin \'Tópico x\' / \'Semana x\' / \'Día x\'.<br />Sin palabra \'Alternar\' y sin \'Tópico x\' / \'Semana x\' / \'Día x\'  y sin número de sección.';
$string['defaultlayoutelement_descpositive'] = 'La configuración del diseño puede ser una de:<br />Alternar palabra, \'Tópico x\' / \'Semana x\' / \'Día x\' y número de sección.<br />Alternar palabra y \'Tópico x\' / \'Semana x\' / \'Día x\'.<br />Alternar palabra y número de sección.<br />\'Tópico x\' / \'Semana x\' / \'Día x\' y número de sección.<br />Alternar palabra.<br />\'Tópico x\' / \'Semana x\' / \'Día x\'.<br />Número de sección.<br />Sin adiciones.';
$string['defaultlayoutstructure'] = 'Configuración de la estructura';
$string['defaultlayoutstructure_desc'] = 'La configuración de la estructura puede ser una de:<br />Tópico<br />Semana<br />La Semana Más Reciente primero<br />Tópico actual Primero<br />Día';
$string['defaultonesection'] = 'Una sección';
$string['defaultonesection_desc'] = 'Decidir si solamente una sección debería de estar abierta en cualquier momento. Nota: Se ignora al editar para permitir que se muevan las actividades y recursos en las secciones.';
$string['defaultonesectioniconfont'] = 'Font de ícono de una sección';
$string['defaultonesectioniconfont_desc'] = 'Especifique la clase de font de ícono a usar para el ícono de enlace a sección uno. Por ejemplo, vea las clases de ícono FontAwesome. Si está vacío, entonces se usará el ícono predterminado \'one_section\' en la carpeta \'pix\' del formato.';
$string['defaultshowadditionalmoddata'] = 'Predeterminado del curso \'Mostrar información adicional\'';
$string['defaultshowadditionalmoddatadesc'] = 'Si una actividad está configurada a nivel del sitio (debajo) para mostrar información adicional, entonces esta configuración decide el estado predeterminado de la instancia específica de curso de éste.';
$string['defaultshowsectionsummary'] = 'Mostrar el resumen de la sección al colapsarse';
$string['defaultshowsectionsummary_desc'] = 'Especifica si el resumen de la sección se mostrará siempre, sin importar el estado del alternados.';
$string['defaulttgbgcolour'] = 'Color del fondo de alternar';
$string['defaulttgbgcolour_desc'] = 'Color del fondo de alternar en RGB hexadecimal.';
$string['defaulttgbghvrcolour'] = 'Alternar Color del fondo al pasar el ratón encima';
$string['defaulttgbghvrcolour_desc'] = 'Color del fondo de alternar al pasar el ratón encima en RGB hexadecimal.';
$string['defaulttgbghvropacity'] = 'Alternar opacidad del fondo al pasar el ratón encima';
$string['defaulttgbghvropacity_desc'] = 'Alternar opacidad del fondo al pasar el ratón encima entre 0 y 1 en incrementos de 0.1.';
$string['defaulttgbgopacity'] = 'Alternar opacidad del fondo';
$string['defaulttgbgopacity_desc'] = 'Alternar opacidad del fondo entre 0 y 1 en incrementos de 0.1.';
$string['defaulttgfgcolour'] = 'Color del frente de alternar';
$string['defaulttgfgcolour_desc'] = 'Color del frente de alternar en RGB hexadecimal.';
$string['defaulttgfghvrcolour'] = 'Alternador de color por defecto con ratón encima para el primer plano';
$string['defaulttgfghvrcolour_desc'] = 'Alternador de color por defecto con ratón encima para el primer plano en RGB hexadecimal.';
$string['defaulttgfghvropacity'] = 'Alternar opacidad del primer plano al pasar el ratón encima';
$string['defaulttgfghvropacity_desc'] = 'Alternar opacidad del primer plano al pasar el ratón encima entre 0 y 1 en incrementos de 0.1.';
$string['defaulttgfgopacity'] = 'Alternar opacidad del primer plano';
$string['defaulttgfgopacity_desc'] = 'Alternar opacidad del texto del primer plano entre 0 y 1 en incrementos de 0.1.';
$string['defaulttogglealignment'] = 'Alineación del texto de alternar';
$string['defaulttogglealignment_desc'] = '\'Izquierda\', \'Centro\' o \'Derecha\'.';
$string['defaulttoggleallenabled'] = 'Alternar todo habilitado';
$string['defaulttoggleallenabled_desc'] = 'Configura si la funcionalidad de alternar todo debería ser habilitada.';
$string['defaulttoggleallhover'] = 'Alternar todos los íconos al pasar el ratón encima';
$string['defaulttoggleallhover_desc'] = '\'No\' o \'Sí.';
$string['defaulttoggleborderradiusbl'] = 'Alternar radio del borde izquierdo del fondo';
$string['defaulttoggleborderradiusbl_desc'] = 'Radio izquierdo inferior del alternador';
$string['defaulttoggleborderradiusbr'] = 'Alternar radio del borde derecho inferior';
$string['defaulttoggleborderradiusbr_desc'] = 'Radiodel borde derecho inferior del alternador';
$string['defaulttoggleborderradiustl'] = 'Alternar radio del borde izquierdo superior';
$string['defaulttoggleborderradiustl_desc'] = 'Radio del borde superior izquierdo del alternador.';
$string['defaulttoggleborderradiustr'] = 'Alternar radio del borde derecho superior';
$string['defaulttoggleborderradiustr_desc'] = 'Radio del borde superior derecho del alternador.';
$string['defaulttoggleiconfontclosed'] = 'Font de ícono de Alternar cerrado';
$string['defaulttoggleiconfontclosed_desc'] = 'Cuando \'defaulttoggleiconset\' está configurado a  \'Font de ícono\', Esto dice cuales clases CSS predeterminadas usar para el ícono de cerrado; por ejemplo, las clases de ícono FontAwesome.';
$string['defaulttoggleiconfontopen'] = 'Font de ícono de Alternar abierto';
$string['defaulttoggleiconfontopen_desc'] = 'Cuando \'defaulttoggleiconset\' está configurado a  \'Font de ícono\', Esto dice cuales clases CSS predeterminadas usar para el ícono de abierto; por ejemplo, las clases de ícono FontAwesome.';
$string['defaulttoggleiconposition'] = 'Posición del ícono';
$string['defaulttoggleiconposition_desc'] = 'Controla si el ícono debería de estar a la izquierda o a la derecha del texto alternante.';
$string['defaulttoggleiconset'] = 'Conjunto de íconos de alternar';
$string['defaulttoggleiconset_desc'] = '<table><tbody><tr><td>Flecha</td><td>{$a->arrow}</td></tr><tr><td>Bulbo</td><td>{$a->bulb}</td></tr><tr><td>Nube</td><td>{$a->cloud}</td></tr><tr><td>Ojo</td><td>{$a->eye}</td></tr><tr><td>Carpeta</td><td>{$a->folder}</td></tr><tr><td>Señal de Tierra</td><td>{$a->groundsignal}</td></tr><tr><td>Diodo Emisor de Luz (LED)</td><td>{$a->led}</td></tr><tr><td>Punto</td><td>{$a->point}</td></tr><tr><td>Potencia</td><td>{$a->power}</td></tr><tr><td>Radio</td><td>{$a->radio}</td></tr><tr><td>Carita sonriente</td><td>{$a->smiley}</td></tr><tr><td>Cuadrado</td><td>{$a->square}</td></tr><tr><td>Sol / Luna</td><td>{$a->sunmoon}</td></tr><tr><td>Switch</td><td>{$a->switch}</td></tr><tr><td>Font de ícono</td><td>{$a->tif}</td></tr></tbody></table>';
$string['defaulttoggleiconsize'] = 'Alternar tamaño de ícono';
$string['defaulttoggleiconsize_desc'] = 'Tamaño de ícono: Pequeño= 16pixeles, Mediano = 24pixeles y Grande = 32pixeles, o font de ícono: Pequeño = 0.8em, Mediano = 1.2em y Grande = 1.8em.';
$string['defaulttogglepersistence'] = 'Persistencia de alternar';
$string['defaulttogglepersistence_desc'] = '\'No\' o \'Sí\'. Usted puede desear desactivarla para una mejora del rendimiento de AJAX, pero no se recordará la selección de alternancia del usuario al refrescar o revisitar páginas.<br />Nota: Si usted desactiva la persistencia, remueva cualquier fila que contenga \'topcoll_toggle-x\' en el campo  \'name\' (nombre) de la tabla de \'user_preferences\' (preferencias del usuario) en la base de datos. Donde la \'x\' en \'topcoll_toggle_x\' será la ID de un curso.';
$string['defaultuserpreference'] = 'Estado inicial de alternador';
$string['defaultuserpreference_desc'] = 'Dice qué hacer con los alternadores cuando el usuario accesa el curso por vez primera, el estado de secciones adicionales cuando son añadidas o desactivar la persistencia del alternador.';
$string['defaultviewsinglesectionenabled'] = 'Ver sección única habilitado';
$string['defaultviewsinglesectionenabled_desc'] = 'Configura si la funcionalidad de ver sección única debería ser habilitada.';
$string['deletesection'] = 'Eliminar sección';
$string['displayinstructions'] = 'Mostrar instrucciones';
$string['displayinstructions_help'] = 'Controla si se mostrarán o no las instrucciones al usuario';
$string['donotshowdate'] = 'No mostrar la fecha';
$string['donotshowdate_help'] = 'No mostrar la fecha al usar una estructura basada en semanas y se hja des-seleccionado \'Usar nombre de sección por defecto\'.';
$string['editsection'] = 'Editar sección';
$string['editsectionname'] = 'Editar nombre de sección';
$string['em0_0'] = '0.0em';
$string['em0_1'] = '0.1em';
$string['em0_2'] = '0.2em';
$string['em0_3'] = '0.3em';
$string['em0_4'] = '0.4em';
$string['em0_5'] = '0.5em';
$string['em0_6'] = '0.6em';
$string['em0_7'] = '0.7em';
$string['em0_8'] = '0.8em';
$string['em0_9'] = '0.9em';
$string['em1_0'] = '1.0em';
$string['em1_1'] = '1.1em';
$string['em1_2'] = '1.2em';
$string['em1_3'] = '1.3em';
$string['em1_4'] = '1.4em';
$string['em1_5'] = '1.5em';
$string['em1_6'] = '1.6em';
$string['em1_7'] = '1.7em';
$string['em1_8'] = '1.8em';
$string['em1_9'] = '1.9em';
$string['em2_0'] = '2.0em';
$string['em2_1'] = '2.1em';
$string['em2_2'] = '2.2em';
$string['em2_3'] = '2.3em';
$string['em2_4'] = '2.4em';
$string['em2_5'] = '2.5em';
$string['em2_6'] = '2.6em';
$string['em2_7'] = '2.7em';
$string['em2_8'] = '2.8em';
$string['em2_9'] = '2.9em';
$string['em3_0'] = '3.0em';
$string['em3_1'] = '3.1em';
$string['em3_2'] = '3.2em';
$string['em3_3'] = '3.3em';
$string['em3_4'] = '3.4em';
$string['em3_5'] = '3.5em';
$string['em3_6'] = '3.6em';
$string['em3_7'] = '3.7em';
$string['em3_8'] = '3.8em';
$string['em3_9'] = '3.9em';
$string['em4_0'] = '4.0em';
$string['enableadditionalmoddata'] = 'Habilitar información adicional';
$string['enableadditionalmoddatadesc'] = 'Este es un interruptor a \'Nivel del sitio\' para activar o desactivar la información de la actividad. Necesita estar \'activado\' para que las configuraciones relacionadas que operan a nivel del curso tengan efecto. Debido a que esta funcionalidad puede ser costosa computacionalmente, entonces se sugiere fuertemente que usted realice pruebas completas antes de usarla en un sistema en producción. Nota: Purga las cachés cuando es cambiada.';
$string['eye'] = 'Ojo';
$string['feedbackavailable'] = 'Retroalimentación disponible';
$string['folder'] = 'Carpeta';
$string['formatresponsive'] = 'Formato responsivo';
$string['formatresponsive_desc'] = 'Actívelo si Usted está usando un tema no-responsivo y el formato se ajustará al tamaño de la pantalla/el dispositivo. Desactívelo si Usted está usando un tema responsivo. Está incorporado el soporte para Inicio (Bootstrap 2.3.3; para otras estructuras y versiones, anule los métodos  \'get_row_class()\' and \'get_column_class()\' en renderer.php.';
$string['formatsettings'] = 'Reiniciar Configuraciones del formato';
$string['formatsettingsinformation'] = '<br />Para reiniciar las configuraciones del formato del curso, elija el ícono a la derecha.';
$string['four'] = 'Cuatro';
$string['groundsignal'] = 'Señal de tierra';
$string['hidefromothers'] = 'Ocultar';
$string['information'] = 'Información';
$string['informationchanges'] = 'Cambios';
$string['informationsettings'] = 'Configuraciones de Información';
$string['informationsettingsdesc'] = 'Información del formato de curso de Tópicos Colapsados';
$string['instructions'] = 'Instrucciones: Haciendo click sobre el nombre de la sección se mostrará / ocultará la sección.';
$string['large'] = 'Grande';
$string['layoutstructuredays'] = 'días';
$string['layoutstructuretopics'] = 'tópicos';
$string['layoutstructureweeks'] = 'semanas';
$string['led'] = 'Diodo emisor de luz (LED)';
$string['left'] = 'Izquierda';
$string['love'] = 'amor';
$string['maincoursepage'] = 'Página principal del curso';
$string['markedthissection'] = 'Esta sección está resaltada como la sección actual';
$string['markthissection'] = 'Resaltar esta sección como la sección actual';
$string['medium'] = 'Mediano/a';
$string['newsection'] = 'Nueva sección';
$string['newsectionname'] = 'Nuevo nombre para sección {$a}';
$string['numbersections'] = 'Número de secciones';
$string['off'] = 'Desactivada';
$string['on'] = 'Activada';
$string['one'] = 'Uno';
$string['onesection'] = 'Una sección';
$string['onesection_help'] = 'Decidir si solamente una sección debería de estar aberta en un momento dado. Nota: Se ignora al editar para permitir que se muevan activifdade y recursos alrededor de las secciones.';
$string['page-course-view-topcoll'] = 'Cualquier página principal de curso en el formato de tópicos colapsados';
$string['page-course-view-topcoll-x'] = 'Cualquier página de curso en el formato de tópicos colapsados';
$string['plugin_description'] = 'El curso está dividido en secciones alternables.';
$string['pluginname'] = 'Tópicos Colapsados';
$string['point'] = 'Punto';
$string['power'] = 'Potencia';
$string['privacy:metadata:preference:toggle'] = 'El estado de los alternadores en un curso.';
$string['privacy:request:preference:toggle'] = 'El curso con id "{$a->name}" tiene el valor "{$a->value}" que representa "{$a->decoded}" para el estdo de los alternadores.';
$string['radio'] = 'Radio';
$string['readme_desc'] = 'Por favor, haga clic sobre  \'{$a->url}\' para mayor información acerca de Tópicos Colapsados.';
$string['readme_title'] = 'Léame de Tópicos Colapsados';
$string['resetactivitymeta'] = 'Información adicional del módulo';
$string['resetactivitymeta_help'] = 'Reinicia toda la información adicional del módulo para que siga el valor predeterminado del sitio.';
$string['resetallactivitymeta'] = 'Toda la información adicional del módulo';
$string['resetallactivitymeta_help'] = 'Reiniciar toda la información adicional del módulo para que siga el valor predeterminado del sitio.';
$string['resetallcolour'] = 'Colores';
$string['resetallcolour_help'] = 'Reiniciar los colores y opacidades, de forma que sean iguales al valor predeterminado del sitio.';
$string['resetalldisplayinstructions'] = 'Mostrar instrucciones';
$string['resetalldisplayinstructions_help'] = 'Reinicia el mostrar instrucciones, de forma que sean iguales al valor predeterminado del sitio.';
$string['resetallgrp'] = 'Reiniciar todo:';
$string['resetalllayout'] = 'Diseñoss';
$string['resetalllayout_help'] = 'einiciar los elementos del diseño, la estructura, columnas, alternar todo, ver sección única, posición de ícono, una sección  y el resumen de sección mostrado a los valores predeterminados para todos los cursos, de forma que serán iguales a los de un curso que por primera vez está en formato de \'Tópicos Colapsados\'.';
$string['resetalltogglealignment'] = 'Alternar alineaciones';
$string['resetalltogglealignment_help'] = 'Reiniciar alternación de alineación, de forma que sean iguales al valor predeterminado del sitio.';
$string['resetalltoggleiconset'] = 'Alternar sonjuntos de íconos';
$string['resetalltoggleiconset_help'] = 'Reinicia el conjunto de íconos de alternancia y alterna todos los cambios al pasar el ratón encima, de forma que sean iguales al valor predeterminado del sitio.';
$string['resetcolour'] = 'Color';
$string['resetcolour_help'] = 'Reiniciar los colores y opacidades, de forma que sean iguales al valor predeterminado del sitio.';
$string['resetdisplayinstructions'] = 'Mostrar instrucciones';
$string['resetdisplayinstructions_help'] = 'Reiniciar el mostrar instrucciones, de forma que sean iguales al valor predeterminado del sitio.';
$string['resetgrp'] = 'Reiniciar:';
$string['resetlayout'] = 'Diseño';
$string['resetlayout_help'] = 'Reiniciar los elementos del diseño, la estructura, columnas, alternar todo, ver sección única, posición de ícono, una sección  y el resumen de sección mostrado, de forma que sean iguales al valor predeterminado del sitio.';
$string['resettogglealignment'] = 'Alternar alineación';
$string['resettogglealignment_help'] = 'Reiniciar el interruptor de alineación, de forma que sean iguales al valor predeterminado del sitio.';
$string['resettoggleiconset'] = 'Alternar el conjunto de íconos';
$string['resettoggleiconset_help'] = 'Reinicia el conjunto de íconos de alternancia y alterna todos los cambios al pasar el ratón encima, de forma que sean iguales al valor predeterminado del sitio.';
$string['right'] = 'Derecha';
$string['sctcloseall'] = 'Cerrar todos los {$a}';
$string['sctopenall'] = 'Abrir todos los {$a}';
$string['section0name'] = 'General';
$string['sectionname'] = 'Sección';
$string['setcolour'] = 'Color';
$string['setcolour_help'] = 'Contiene las configuraciones que tienen que ver con los colores del formato dentro del curso.';
$string['setflexiblemodules'] = 'Módulos flexibles';
$string['setflexiblemodules_help'] = '¿Usar módulos flexibles?';
$string['setlayout'] = 'Configurar diseño';
$string['setlayout_all'] = 'Alternar palabra, \'Tópico x\' / \'Semana x\' / \'Día x\' y número de sección.';
$string['setlayout_default'] = 'Por defecto';
$string['setlayout_help'] = 'Contiene las configuraciones que tienen que ver con el disño del formato dentro del curso.';
$string['setlayout_no_additions'] = 'Sin adiciones';
$string['setlayout_no_section_no'] = 'Sin número de sección';
$string['setlayout_no_toggle_section_x'] = 'Sin cambiador sección x';
$string['setlayout_no_toggle_section_x_section_no'] = 'Sin cambiador sección x y número de sección';
$string['setlayout_no_toggle_word'] = 'Sin cambiador de palabra';
$string['setlayout_no_toggle_word_toggle_section_x'] = 'Sin cambiador de palabra  y cambiador sección x';
$string['setlayout_no_toggle_word_toggle_section_x_section_no'] = 'Sin cambiador de palabra  , cambiador sección x y número de sección';
$string['setlayout_section_number'] = 'Número de sección';
$string['setlayout_toggle_section_x'] = '\'Tópico x\' / \'Semana x\' / \'Día x\'';
$string['setlayout_toggle_section_x_section_number'] = '\'Tópico x\' / \'Semana x\' / \'Día x\' y número de sección';
$string['setlayout_toggle_word'] = 'Alternar palabra';
$string['setlayout_toggle_word_section_number'] = 'Alternar palabra y número de sección.';
$string['setlayout_toggle_word_section_x'] = 'Alternar palabra y \'Tópico x\' / \'Semana x\' / \'Día x\'';
$string['setlayoutcolumnorientation'] = 'Orientación de columna';
$string['setlayoutcolumnorientation_help'] = 'Dynámico - Numerar secciones por \'fila\' ajustar al tamaño de ventana, \'Columnas\' configuración que actualmente no es usada.<br>Horizontal - Secciones van de izquierda a derecha.<br>Vertical - Secciones van de arriba a abajo.';
$string['setlayoutcolumns'] = 'Columnas';
$string['setlayoutcolumns_help'] = 'Cuantas columnas emplear.';
$string['setlayoutelements'] = 'Elementos';
$string['setlayoutelements_help'] = 'Cuanta información sobre los cambiadores (alternadores)  / secciones desea Usted mostrar.';
$string['setlayoutstructure'] = 'Estructura';
$string['setlayoutstructure_help'] = 'La estructura del diseño del curso. Usted puede elegir entre:<br /> \'Tópicos\' - donde cada sección se presenta como un tópico en el orden del número de la sección.<br />\'Semanas\' - donde cada sección se presenta como una semana en orden ascendente de semanas desde la fecha de inicio del curso.<br />\'Semana actual primero\' - que es igual a \'Semanas\', pero la semana actual se muestra hasta arriba y las semanas anteriores en orden descendente se muestran debajo, excepto en el modo de edición en donde la estructura es igual a la de \'Semanas\'<br />\'Tópico actual primero\' - que es igual al de \'Topicos\' excepto que el tema actual se muestra hasta arriba si ha sido configurado.<br />\'Día\' - donde cada sección se presenta como un día en orden ascendente desde la fecha de inicio del curso.';
$string['setlayoutstructurecurrenttopicfirst'] = 'Tópico/Tema actual primero';
$string['setlayoutstructureday'] = 'Día';
$string['setlayoutstructurelatweekfirst'] = 'La Semana Actual primero';
$string['setlayoutstructuretopic'] = 'Tópico/Tema';
$string['setlayoutstructureweek'] = 'Semana';
$string['setshowsectionsummary'] = 'Mostrar el resumen de la sección al colapsarse';
$string['setshowsectionsummary_help'] = 'Especifica si siempre se mostrará el resumen de la sección sin importar el estado del alternador.';
$string['settings'] = 'Configuraciones';
$string['settingssettings'] = 'Ajustes de configuraciones';
$string['settingssettingsdesc'] = 'Configuraciones del formato de curso de Tópicos Colapsados';
$string['settogglealignment'] = 'Alternar la alineación del texto';
$string['settogglealignment_help'] = 'Configura la alineación del texto en el interruptor.';
$string['settoggleallenabled'] = 'Alternar todo habilitado';
$string['settoggleallenabled_help'] = 'Funcionalidad para Alternar todo habilitada';
$string['settoggleallhover'] = 'Alternar el aspecto al  pasar el ratón encima de todos los íconos';
$string['settoggleallhover_help'] = 'Configura si es que el alternar todos los íconos cambiará el aspecto al  pasar el ratón encima de ellos.';
$string['settogglebackgroundcolour'] = 'Alternar fondo';
$string['settogglebackgroundcolour_help'] = 'Configurar el color del fondo de la alternancia.';
$string['settogglebackgroundhovercolour'] = 'Alternar fondo flotante';
$string['settogglebackgroundhovercolour_help'] = 'Configurar el color del fondo de la alternancia cuando el ratón pasa (flota) encima de este';
$string['settogglebackgroundhoveropacity'] = 'Alternar opacidad del fondo al pasar el ratón encima';
$string['settogglebackgroundhoveropacity_help'] = 'Configurar entre 0 y 1 (en incrementos de 0.1) la opacidad del fondo al pasar el ratón encima en el alternador .';
$string['settogglebackgroundopacity'] = 'Alternar opacidad del fondo';
$string['settogglebackgroundopacity_help'] = 'Configurar entre 0 y 1 (en incrementos de 0.1) la opacidad del fondo en el alternador .';
$string['settoggleforegroundcolour'] = 'Alternar primer plano';
$string['settoggleforegroundcolour_help'] = 'Configura el color del texto en la alternancia';
$string['settoggleforegroundhovercolour'] = 'Alternador de color con ratón encima para el primer plano';
$string['settoggleforegroundhovercolour_help'] = 'Configura los colores para el texto en el alternador cuando el ratón le pasa encima.';
$string['settoggleforegroundhoveropacity'] = 'Alternar opacidad del primer plano al pasar el ratón encima';
$string['settoggleforegroundhoveropacity_help'] = 'Configurar entre 0 y 1 (en incrementos de 0.1) la opacidad del texto al pasar el ratón encima en el alternador .';
$string['settoggleforegroundopacity'] = 'Alternar opacidad del primer plano';
$string['settoggleforegroundopacity_help'] = 'Configurar la opacidad del texto en el alternador entre 0 y 1 en incrementos de 0.1.';
$string['settoggleiconfontclosed'] = 'Font del ícono de cerrar alternar';
$string['settoggleiconfontclosed_help'] = 'Cuando \'toggleiconset\'está configurado a  \'Font de ícono\', Esto dice cuales clases CSS predeterminadas usar para el ícono de cerrado; por ejemplo, las clases de ícono FontAwesome. Si se configura a \'-\' entonces se usa el predeterminado.';
$string['settoggleiconfontopen'] = 'Font del ícono de abrir alternar';
$string['settoggleiconfontopen_help'] = 'Cuando \'toggleiconset\'está configurado a  \'Font de ícono\', Esto dice cuales clases CSS predeterminadas usar para el ícono de abierto; por ejemplo, las clases de ícono FontAwesome. Si se configura a \'-\' entonces se usa el predeterminado.';
$string['settoggleiconposition'] = 'Posición de ícono';
$string['settoggleiconposition_help'] = 'Controla que el ícono esté a la izquierda o a la derecha del texto alternador';
$string['settoggleiconset'] = 'Conjunto de íconos';
$string['settoggleiconset_help'] = 'Configura conjunto de íconos de la alternancia';
$string['setviewsinglesectionenabled'] = 'Ver sección única habilitada';
$string['setviewsinglesectionenabled_help'] = 'Funcionalidad para Ver sección única habilitada';
$string['showadditionalmoddata'] = 'Mostrar información adicional para: {$a} en el curso';
$string['showadditionalmoddata_help'] = 'Le permite a todos los usuarios ver la fecha límite de la actividad y le permite a los usuarios con permisos para calificar el  ver el número de envíos en la página del curso para actividades.';
$string['showfromothers'] = 'Mostrar';
$string['sidepost'] = 'Post';
$string['sidepre'] = 'Pre';
$string['small'] = 'Pequeño/a';
$string['smiley'] = 'Smiley (carita feliz)';
$string['square'] = 'Cuadrado';
$string['sunmoon'] = 'Sol / Luna';
$string['switch'] = 'Switch';
$string['three'] = 'Tres';
$string['tif'] = 'Font del ícono';
$string['toggleclose'] = 'Cerrar';
$string['toggleopen'] = 'Abrir';
$string['topcoll:changeactivitymeta'] = 'Cambiar o reiniciar la meta actividad';
$string['topcoll:changecolour'] = 'Cambiar o reiniciar el color';
$string['topcoll:changelayout'] = 'Cambiar o reiniciar el diseño';
$string['topcoll:changetogglealignment'] = 'Cambiar o reiniciar la alineación de la alternancia';
$string['topcoll:changetoggleiconset'] = 'Cambiar o reiniciar el conjunto de íconos de la alternancia';
$string['topcollall'] = 'secciones.';
$string['topcollclosed'] = 'Cerrar todo';
$string['topcollopened'] = 'Abrir todo';
$string['topcollsidewidthlang'] = 'es_mx-28px';
$string['topcolltoggle'] = 'Alternar';
$string['two'] = 'Dos';
$string['versionalpha'] = 'Versión alfa - Casi seguramente contiene errores. ¡Esta es una versión en desarrollo \'solamente\' para desarrolladores! ¡No se le ocurra pensar en instalarla en un servidor en producción!';
$string['versionbeta'] = 'Versión Beta - Probablemente contenga errores. Lista solamente para probarse por administradores en un servidor de prueba.';
$string['versioninfo'] = 'Liberación {$a->release}, versión {$a->version} en Moodle {$a->moodle}. Hecho con {$a->love} en Gran Bretaña.';
$string['versionrc'] = 'Versión candidato para liberación - Podría contener errores. Compruébelo en un servidor de prueba antes de instalarlo en su servidor de producción.';
$string['versionstable'] = 'Versión estable - Podría contener errores. Compruébelo en un servidor de prueba antes de instalarlo en su servidor de producción.';
$string['viewonly'] = 'Ver solamente \'{$a->sectionname}\'';
$string['xanswered'] = '{$a->completed} contestada(s)';
$string['xattempted'] = '{$a->completed} intentada(s)';
$string['xcontributed'] = '{$a->completed} contribuída(s)';
$string['xofyanswered'] = '{$a->completed} de {$a->participants} contestadas';
$string['xofyattempted'] = '{$a->completed} de {$a->participants} intentadas';
$string['xofycontributed'] = '{$a->completed} de {$a->participants} contribuídas';
$string['xofyposted'] = '{$a->completed} de {$a->participants} publicada(s)';
$string['xofysubmitted'] = '{$a->completed} de {$a->participants} enviadas';
$string['xposted'] = '{$a->completed} publicada(s)';
$string['xsubmitted'] = '{$a->completed} enviada(s)';
$string['xungraded'] = '{$a} sin calificar';
