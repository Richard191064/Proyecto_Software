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
 * Strings for component 'qtype_pmatchjme', language 'es_mx', version '4.4'.
 *
 * @package     qtype_pmatchjme
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowanothertry'] = 'Permitir otro intento';
$string['answeringoptions'] = 'Opciones para el editor molecular';
$string['atomcount'] = 'Retroalimentación de canal Atom';
$string['autoez'] = 'Generación automática de emoticones (SMILES) con estereoquímica E.Z. ("autoez")';
$string['enablejavascript'] = '<p>Cargando el editor molecular ...</p><p> Si este mensaje no es remplazado por el editor molecular, entonces esto significa que Usted no tiene JavaScript funcionando en su navegador.</p>';
$string['firstcorrectanswermustbestraightmatch'] = 'La primera respuesta correcta debe ser una coincidencia directa de una cadena SMILES sin cartas comodines como coincidencia (SMILESEXPRESSION).';
$string['firstcorrectanswermustnotrequireatomcountfeedback'] = 'La primera respuesta correcta no puede requerir retroalimentación de conteo de canal atom.';
$string['nostereo'] = 'La eestereoquímica no se consideró al crear SMILES ("nostereo")';
$string['pluginname'] = 'Coincidencia de patrón con editor molecular';
$string['pluginname_help'] = 'En respuesta a una pregunta (que puede incluir una imagen) el alumno usa el editor molecular para describir una estructura molecular. Puede haber varias respuestas correctas posibles, cada una con una calificación diferente.';
$string['pluginnameadding'] = 'Añadiendo una pregunta de coincidencia de patrón con editor volecular';
$string['pluginnameediting'] = 'Editando una pregunta de coincidencia de patrón con editor molecular';
$string['pluginnamesummary'] = 'Permite dibujar una molécula usando el editor molecular. La respuesta se califica al compararla contra varias respuestas modelo, que se describen empleando la sintaxis de coincidencia de patrón de Open University.';
$string['privacy:metadata'] = 'El plugin del tipo de pregunta de Coincidencia de patrón con editor molecular le permite a los autores configurar opciones predeterminadas como preferencias del usuario.';
$string['privacy:preference:allowsubscript'] = 'Si es que subíndice es usado para escribir respuesta.';
$string['privacy:preference:allowsuperscript'] = 'Si es que superíndice es usado para escribir respuesta.';
$string['privacy:preference:defaultmark'] = 'El puntaje predeterminado configurado para una pregunta dada.';
$string['privacy:preference:penalty'] = 'La penalización por cada intento incorrecto cuando las preguntas son ejecutadas usando el comportamiento de \'Interactivo con intentos múltiples\' o \'Modo adaptativo\'.';
$string['smiles_aromatic_c'] = 'átomos de carbóno aromático';
$string['smiles_br'] = 'átomos de bromo';
$string['smiles_c'] = 'átomos de carbono alifático';
$string['smiles_cl'] = 'átomos de cloro';
$string['smiles_doublebond'] = 'dobles ligaduras';
$string['smiles_f'] = 'átomos de fluor';
$string['smiles_i'] = 'átomos de yodo';
$string['smiles_n'] = 'átomos de nitrógeno';
$string['smiles_o'] = 'átomos de oxígeno';
$string['smiles_s'] = 'átomos de azufre';
$string['smiles_triplebond'] = 'triples ligaduras';
$string['smilescorrectcount'] = 'Usted tiene la fórmula molecular correcta pero no la estructura correcta.';
$string['smilesequal'] = 'Usted tiene el número correcto de {$a}.';
$string['smilestoofew'] = 'Usted tiene muy pocos {$a}.';
$string['smilestoomany'] = 'Usted tiene demasiados {$a}.';
