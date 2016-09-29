# slatex
PHP code for rendering LaTeX using a slash command.

## Setup
### Server
Download `slatex.php` and set it to execute when requested (using htaccess).

### Slack
Go to `<your-team>.slack.com/apps/manage/custom-integrations` and add a new slash command. I recommend `/math`.

Point it to `<your-server>/slatex.php` and use `POST`.

Recommended setup: Call the bot `sLaTeX` and use the `heavy_plus_sign` emoji for the icon.