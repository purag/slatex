# slatex
PHP code for rendering LaTeX in Slack using a slash command.

## Setup
### Server
Download `slatex.php` and set it to execute when requested (using htaccess).

### Slack
Go to `<your-team>.slack.com/apps/manage/custom-integrations` and add a new slash command. I recommend `/math`.

Point it to `<your-site>.com/slatex.php` and use `POST`.

Recommended setup: Call the bot `sLaTeX` and use the `heavy_multiplication_x` emoji for the icon.
