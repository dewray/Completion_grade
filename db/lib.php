<?php
defined('MOODLE_INTERNAL') || die();

function completiongrade_add_instance($completiongrade) {
    global $DB;

    $completiongrade->timecreated = time();
    return $DB->insert_record('completiongrade', $completiongrade);
}

function completiongrade_update_instance($completiongrade) {
    global $DB;

    $completiongrade->timemodified = time();
    $completiongrade->id = $completiongrade->instance;
    return $DB->update_record('completiongrade', $completiongrade);
}

function completiongrade_delete_instance($id) {
    global $DB;

    if (!$completiongrade
