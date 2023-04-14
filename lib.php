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

function local_gradeselectortest_extend_navigation_course($navigation, $course, $context) {

    // Check if we're in a course context.
    if (!$context->contextlevel == CONTEXT_COURSE) {
        return;
    }

    $mynode = navigation_node::create('Selector test', new moodle_url('/local/gradeselectortest/selectortest.php',
        ['id' => $course->id]), navigation_node::TYPE_CUSTOM, 'selectortest', 'selectortest');
    $navigation->add_node($mynode);
}
