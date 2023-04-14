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


require('../../config.php');
$courseid = required_param('id', PARAM_INT);
$itemid = optional_param('item', null, PARAM_INT);

require_login();
$context = context_course::instance($courseid);

$PAGE->set_url('/local/gradeselectortest/selectortest.php');
$PAGE->set_context($context);
$PAGE->set_title('Selector test');
$PAGE->set_heading('Selector test');


echo $OUTPUT->header();
echo $OUTPUT->heading('Selector test', 2);

$renderer = $PAGE->get_renderer('local_gradeselectortest');

$PAGE->requires->js_call_amd('local_gradeselectortest/selector', 'init');
echo $renderer->render_from_template('local_gradeselectortest/itemselector', ['courseid' => $courseid]);

if ($itemid) {
    echo 'Item ' . $itemid . ' was selected';
}

echo $OUTPUT->footer();
