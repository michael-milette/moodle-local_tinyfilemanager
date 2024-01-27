<?php
// This file is part of Tiny File Manager plugin for Moodle - http://moodle.org/
//
// Tiny File Manager is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Tiny File Manager is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Tiny File Manager. If not, see <http://www.gnu.org/licenses/>.

/**
 * Privacy Subsystem implementation for local_tinyfilemanager.
 *
 * @package    local_tinyfilemanager
 * @copyright  2019-2024 Consulting Inc. - www.tngconsulting.ca
 * @author     Michael Milette
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_tinyfilemanager\privacy;

defined('MOODLE_INTERNAL') || die();

/**
 * Privacy Subsystem for local_tinyfilemanager implementing null_provider.
 *
 * @copyright  2018-2024 Consulting Inc. <www.tngconsulting.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider implements \core_privacy\local\metadata\null_provider {

    /**
     * Get the language string identifier with the component's language
     * file to explain why this plugin stores no data.
     *
     * @return  string
     */
    public static function get_reason() : string {
        return 'privacy:metadata';
    }
}
