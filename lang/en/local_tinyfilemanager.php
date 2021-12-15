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
 * This plugin for Moodle is used by administrators to manage their Moodle files through a web interface..
 *
 * @package    local_tinyfilemanager
 * @copyright  2019-2021 TNG Consulting Inc. - www.tngconsulting.ca
 * @author     Michael Milette
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Tiny File Manager';
$string['privacy:metadata'] = 'The Tiny File Manager plugin does not store any personal data about any user.';
$string['about'] = 'The Tiny File Manager plugin enables administrators to manage their Moodle files through a web interface.';
$string['rootpath'] = 'Root path';
$string['rootpath_desc'] = 'Root path that user can browse. If you do not include a leading forward slash, the path is relative to your Moodle wwwroot home directory.';
$string['showhidden'] = 'Show hidden';
$string['showhidden_desc'] = 'Show hidden files and folders.';
$string['showpermowner'] = 'Show Perms/Owner columns';
$string['showpermowner_desc'] = 'Show hidden permissions and owner columns in file/directory listing.';
