<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package qtype_mtf
 * @author Amr Hourani amr.hourani@id.ethz.ch
 * @copyright ETHz 2016 amr.hourani@id.ethz.ch
 */
$string['answernumbering'] = 'Antworten nummerieren?';
$string['answernumbering123'] = '1., 2., 3., ...';
$string['answernumberingabc'] = 'a., b., c., ...';
$string['answernumberingABCD'] = 'A., B., C., ...';
$string['answernumberingiii'] = 'i., ii., iii., ...';
$string['answernumberingIIII'] = 'I., II., III., ...';
$string['answernumberingnone'] = 'Keine Nummerierung';
$string['answersingleno'] = 'Mehrere Antworten erlauben';
$string['answersingleyes'] = 'Nur eine Antwort erlauben'; 
$string['configintro'] = 'Standardeinstellungen für MTF-Fragen.';
$string['configscoringmethod'] = 'Standard Bewertung für MTF-Fragen.';
$string['configshuffleoptions'] = 'Standardeinstellung für das Mischen der Wahlantworten.';
$string['enterfeedbackhere'] = 'Feedback hinzufügen.';
$string['entergeneralfeedbackhere'] = 'Allgemeines Feedback hinzufügen.';
$string['enteroptionhere'] = '';
$string['enterstemhere'] = 'Stamm in Form einer Frage oder einer Aussage eingeben.';
$string['false'] = 'Falsch';
$string['feedbackforoption'] = 'Feedback für Wahlantwort {$a}';
$string['generalfeedback'] = 'Allgemeines Feedback.';
$string['generalfeedback_help'] = 'Gesamtfeedback wird nach der Beantwortung der Fragen angezeigt, u.z. unabhängig von den gegebenen Antworten. Andere Feedbacks sind abhängig von der \'Richtigkeit\' der Antworten.<br />Gesamtfeedback kann eingesetzt werden, um Hinweise zu geben. Links könnten zu weiteren Informationen führen, falls die Frage nicht verstanden wurde.';
$string['maxpoints'] = 'Max. Punkte';
$string['mustsupplyresponses'] = 'Sie müssen für alle Texte einen Wert eingeben.';
$string['mustsupplyvalue'] = 'Sie müssen hier einen Wert eingeben.';
$string['optionno'] = 'Wahlantwort {$a}';
$string['pluginname'] = 'MTF(ETH)';
$string['pluginname_help'] = 'Teilnehmer/innen bewerten zur Beantwortung einer Fragestellung mehrere Wahlantworten aus einer Liste. Format: Mehrfachwahlaufgaben („Multiple-Choice“).';
$string['pluginname_link'] = 'question/type/mtf';
$string['pluginnameadding'] = 'MTF-Frage hinzufügen';
$string['pluginnameediting'] = 'MTF-Frage bearbeiten';
$string['pluginnamesummary'] = 'Erlaubt die Auswahl mehrerer Wahlantworten aus einer vordefinierten Liste.';
$string['responsedesc'] = 'Standardtext für die Wahrheitsauswahl {$a}.';
$string['responseno'] = 'Wahrheitsauswahl {$a}';
$string['responsetext'] = 'Text für Wahrheitsauswahl {$a}';
$string['responsetext1'] = 'Richtig';
$string['responsetext2'] = 'Falsch';
$string['responsetexts'] = 'Bewertungsoptionen';
$string['save'] = 'Speichern';
$string['scoringmtfonezero'] = 'MTF1/0';
$string['scoringmethod'] = 'Bewertung';
$string['scoringmethod_help'] = 'Es gibt zwei alternative Bewertungsmethoden. <br /><strong>Teilpunkte</strong> (empfohlen): Bei der Auswahl „Teilpunkte“ erhalten Kandidaten/innen Teilpunkte für jede richtige Bewertung.<br /><strong>MTF1/0</strong>: Bei der Auswahl „MTF1/0“ erhalten Kandidat/innen die volle Punktzahl, wenn alle Wahlantworten richtig bewertet wurden und null Punkte sonst.';
$string['scoringsubpoints'] = 'Teilpunkte';
$string['shuffleoptions'] = 'Wahlantworten mischen';
$string['shuffleoptions_help'] = 'Wenn aktiviert, ist die Reihenfolge der Wahlantworten bei jedem Versuch zufällig, sofern die Option „In Fragen zufällig mischen“ aktiviert ist.';
$string['stem'] = 'Stamm';
$string['tasktitle'] = 'Aufgabentitel';
$string['true'] = 'Richtig';
$string['optionsandfeedback'] = 'Text und Feedback';
$string['correctresponse'] = 'Richtige Antwort';
$string['incorrect'] = 'Falsch';
$string['answersingleno'] = 'Mehrere Antworten';
$string['numberofrows'] = 'Anzahl Wahlantworten';
$string['numberofrows_help'] = 'Wählen Sie die Anzahl Wahlantworten. Wenn Sie auf eine kleinere Anzahl Wahlantworten wechseln, werden überzählige Wahlantworten gelöscht, sobald die Frage gespeichert wird.';
$string['deleterawswarning'] = 'Wenn Sie auf eine kleinere Anzahl Wahlantworten wechseln, werden die letzten {$a} Wahlantwort(en) gelöscht. Möchten Sie fortfahren?';
$string['mustdeleteextrarows'] = 'Der Fragetyp MTF erlaubt maximal 5 Wahlantworten.  {$a} Wahlantwort(en) werden gelöscht. Falls Sie abbrechen ohne zu speichern, bleiben die überzähligen Wahlantworten erhalten.';