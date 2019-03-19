# Changelog
All notable changes to this project will be documented in this file.

## [Unreleased]

## [1.0.2] - 2019-03-19
### Added
- Added an interface

### Changed
- Enabled strict types
- Moved constants from the class to the interface
- Changed references to constants to use the interface constants
- Changed occurrences of new self to new static
- Changed return type declarations to return the interface instead of self
- Formatted code and tests 

## [1.0.1] - 2019-03-18
### Changed
- Changed the visibility of the constructor and `$seconds` property.

### Removed
- Removed an unnecessary `return $this` in the constructor of the `Duration` class.

## [1.0.0] - 2019-03-18
- Initial Release
