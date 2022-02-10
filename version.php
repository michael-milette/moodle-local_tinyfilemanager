<?php
// This file is part of the Tiny File Manager plugin for Moodle - http://moodle.org/
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
// along with Tiny File Manager.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version information for Tiny File Manager.
 *
 * @package    local_tinyfilemanager
 * @copyright  2019-2022 TNG Consulting Inc. - www.tngconsulting.ca
 * @author     Michael Milette
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_tinyfilemanager';   // To check on upgrade, that module sits in correct place.
$plugin->version   = 2022021001;        // The current module version (Date: YYYYMMDDXX).
$plugin->requires  = 2015111600;        // Requires Moodle version 3.0.
$plugin->release   = '2.4.7';
$plugin->maturity  = MATURITY_BETA;
$plugin->cron      = 0;
