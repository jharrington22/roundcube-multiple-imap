# roundcube-multiple-imap

Allows roundcube to select the IMAP server based on a users login name.

Mostly a hack but does the job.

## Instructions 
- Modify your config to have `$rcmail_config['default_host'] = '%';` in main.inc.php
- Add domains you wish to go to hosta.com to array `$domains_new_server` in multi_imap_select.php all other domains will go to hostb.com
- Add hosts to rcube_utils.php (Line 632, 638 and 641 - or search hosta.com & hostb.com)
- Replace rcube_utils.php and rcmail.php in your install (see this git tree layout for location)
- Add multi_imap_select.php into your install (see this git tree layout for location)
- Done! Should work straight away don't need to restart nginx/apache etc.
