<?php
defined('MOODLE_INTERNAL') || die();

function xmldb_completiongrade_install() {
    global $DB;

    $record = new stdClass();
    $record->name = 'Completion Grade';
    $record->course = 1;
    $DB->insert_record('completiongrade', $record);
}
