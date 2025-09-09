<?php
namespace mod_zoomwindow\event;

defined('MOODLE_INTERNAL') || die();

class course_module_viewed extends \core\event\course_module_viewed {

    protected function init() {
        $this->data['objectid'] = $this->context->instanceid;
        $this->data['objecttable'] = 'zoomwindow';
        $this->data['crud'] = 'r';
        $this->data['edulevel'] = self::LEVEL_PARTICIPATING;
    }

    public static function create_from_event(\core\event\base $event) {
        return self::create(array(
            'context' => $event->context
        ));
    }
}