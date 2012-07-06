# Language Detection

Uses the headers sent by every browser to guess the users current language.

- Version: 1.0
- Date: 06 July 2012
- Requirements: Symphony 2.3
- Author: Phill Gray


## Installation & Updating

Information about [installing and updating extensions](http://symphony-cms.com/learn/tasks/view/install-an-extension/) can be found in the Symphony documentation at <http://symphony-cms.com/learn/>.

## Usage

A parameter will be added the param pool called `$language` with the countries code.

To manually set a country, append `?set_language_code=ru` to the URL. The value `ru` will now be the set language.

To clear the language, append `?clear_language_code=yes` to the url. This will clear the session. Remove the url parameter to reset the language based on http headers.