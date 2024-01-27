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
 * @copyright  2019-2024 Consulting Inc. - www.tngconsulting.ca
 * @author     Michael Milette
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Tiny File Manager';
$string['privacy:metadata'] = 'Le plugin Tiny File Manager ne stocke aucune donnée personnelle sur un utilisateur.';
$string['about'] = 'Le plugin Tiny File Manager permet aux administrateurs de gérer leurs fichiers Moodle via une interface Web.';
$string['rootpath'] = 'Chemin de racine';
$string['rootpath_desc'] = 'Chemin racine que l\'utilisateur peut parcourir.Si vous n\'incluez pas une barre oblique avant, le chemin est relatif à votre répertoire Moodle wwwroot.';
$string['showhidden'] = 'Afficher les fichiers masqués';
$string['showhidden_desc'] = 'Montrer les fichiers et les répertoires masqués.';
$string['showpermowner'] = 'Afficher les colonnes des droits';
$string['showpermowner_desc'] = 'Affiche les colonnes des permissions et des propriétaires dans la liste des fichiers / répertoires.';
$string['calcfoldersize'] = 'Calculer la taille des répertoire';
$string['calcfoldersize_desc'] = 'Affiche la taille des répertoire. Notez que ceci ralentira l\'affichage de fichiers.';
$string['units'] = '<abbr title="octet">o</abbr>,<abbr title="kilooctet">ko</abbr>,<abbr title="mégaoctet">Mo</abbr>,<abbr title="gigaoctet">Go</abbr>,<abbr title="téraoctet">To</abbr>,<abbr title="pétaoctet">Po</abbr>,<abbr title="exaoctet">Eo</abbr>,<abbr title="zettaoctet">Zo</abbr>,<abbr title="yottaoctet">Yo</abbr>';
