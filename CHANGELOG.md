# Change Log
All notable changes to this project will be documented in this file.

## [2.4.7] - 2022-02-21 (DEV)

Note that this is a development release.

### Added
- Danish translation.
- Dutch translation.
- Romanian language w/o diacritics.
- Tested for compatibility with Moodle 3.9 to 4.0 (ALPHA).
- Setting to choose online viewer for office documents.
- Setting to choose theme for source code viewer.
- Composer.json file.

### Updated
- Optimized getting directory tree size by using pathtodu, if available.
- Backed-up, archived and duplicated files now use Moodle's backupnameformat date/time format.
- Updated translations.
- Fixed '400 bad request' when saving files.
- Removed Help in Advanced editor toolbar.
- Changed "Folder is empty" message to be language-specific.
- The file config.json is now local.
- Disabled advanced editor. It has display issues with most Moodle themes.
- Source code viewer.
- Removed dead code.
- Removed search box when not in list of files.
- Updated appearance of error messages.
- Fixed display of status messages when saving or backing up a file.
- Upload now initially displays Dropzone and upload fields on separate tabs.
- Most JavaScript and CSS files are now included in the plugin for offline use.
- Copyright notice for 2022.

## [2.4.6] - 2021-12-15 (DEV)

### Added
- Icon and logo.
- Setting to hide owner and permissions column on non-Windows OS'.
- Setting to enable calculation of directory size.
- French translations

### Updated
- Fixed missing upload by URL form.
- Now uses ISO 8601 date and time format so that it can be properly sorted.
- Updated README.md
