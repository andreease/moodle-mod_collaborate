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
 * Prints a particular instance of collaborate
 *
 * @package    mod_collaborate
 * @copyright  202 Richard Jones richardnz@outlook.com
 * @copyright  2022 G J Barnard - {@link http://moodle.org/user/profile.php?id=442195}.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @see https://github.com/moodlehq/moodle-mod_simplemod
 * @see https://github.com/justinhunt/moodle-mod_simplemod
 * @see https://github.com/richardjonesnz/moodle-mod_simplemod
 * @see https://github.com/gjb2048/moodle-mod_simplemod
 */

namespace mod_collaborate\event;

class page_viewed extends \core\event\base
{
    protected function init()
    {
        $this->data['crud'] = 'r';
        $this->data['edulevel'] = self::LEVEL_PARTICIPATING;
        $this->data['objecttable'] = 'page';
    }

    public static function get_name()
    {
        return get_string('pageviewed', 'mod_collaborate');
    }

    /**
     * Returns non-localised event description with id's for admin use only.
     *
     * @return string
     */
    public function get_description()
    {
        return "The user with id '$this->userid' has " .
            "viewed a page with the id '$this->objectid' " .
            "in the Collaborate activity with course " .
            "module id '$this->contextinstanceid'.";
    }
}
