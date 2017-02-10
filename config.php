<?php

	//// CONFIG
	//// Set these values to
	//// set up and customize Sprudel
	//// (there are mandatory and optional settings)


	//// MANDATORY
	//// You'll HAVE TO set the
	//// following values to use Sprudel	

	// database settings
	define('SPR_DB_NAME', 'your_db_name');		// database name
	define('SPR_DB_SERVER', 'your_db_server');		// database server ('localhost' in most cases)
	define('SPR_DB_USERNAME', 'your_db_user');			// username to access database
	define('SPR_DB_PASSWORD', 'your_db_password');	// password to access database


	//// OPTIONAL
	//// You can change these values if you want
	//// to customize Sprudel or change the language

	// lifespan of inactive polls
	define('SPR_DELETE_AFTER', '180');	//delete inactive polls after x days (daily cronjob for cleanup.php needed!)

	// general strings / labels
	define('SPR_HTML_PAGE_TITLE', 'Sprudel');			// title of html page
	define('SPR_INDEX_TITLE', 'Sprudel');				// title shown in page header area
	define('SPR_INDEX_SUBTITLE', 'scheduling polls');	// subtitle shown in page header area
	define('SPR_ENTRY_SAVE', 'Save');	// new entry save button text
	define('SPR_RESULTS', 'Result');					// poll results row text
	define('SPR_REMOVE_CONFIRM', 'Do you really want to remove');	// confirmation text when removing an entry (followed by name)
	define('SPR_COMMENT_HEADING', 'Comments');		// comments section heading
	define('SPR_COMMENT_NONE', 'No comments, yet.');	// no comments message
	define('SPR_COMMENT_NAME', 'Name');				// comment name field label
	define('SPR_COMMENT_TEXT', 'Comment');			// comment text field label
	define('SPR_COMMENT_SUBMIT', 'Send');				// comment submit button text
	define('SPR_NO_JS_MSG', 'Please enable JavaScript in your browser and reload this page.');
	define('SPR_404', 'Something went wrong...');		// poll not found page text
	
	// new poll form strings / labels
	define('SPR_NEW_FORM_TITLE', 'Title');			
	define('SPR_NEW_FORM_DESCRIPTION', 'Description');
	define('SPR_NEW_FORM_DATES', 'Dates / Options');
	define('SPR_NEW_FORM_TITLE_PLACEHOLDER', 'What about a title for your poll?');
	define('SPR_NEW_FORM_DETAILS_PLACEHOLDER', 'Your participants may also like a short description of what this poll is all about, right?');
	define('SPR_NEW_FORM_DATES_PLACEHOLDER', 'Type what you want or pick a date with the calendar button!');
	define('SPR_NEW_FORM_SUBMIT', 'Create');

	//datepicker
	define('SPR_DATEPICKER_MONDAY', 'Monday');		// datepicker translation for monday
	define('SPR_DATEPICKER_TUESDAY', 'Tuesday');		// datepicker translation for monday
	define('SPR_DATEPICKER_WEDNESDAY', 'Wednesday');		// datepicker translation for monday
	define('SPR_DATEPICKER_THURSDAY', 'Thursday');		// datepicker translation for monday
	define('SPR_DATEPICKER_FRIDAY', 'Friday');		// datepicker translation for monday
	define('SPR_DATEPICKER_SATURDAY', 'Saturday');		// datepicker translation for monday
	define('SPR_DATEPICKER_SUNDAY', 'Sunday');		// datepicker translation for monday
	define('SPR_DATEPICKER_LANG', 'en-US');			// datepicker language iso-code
	define('SPR_DATEPICKER_FORMAT', 'yyyy-mm-dd');	// datepicker date format (you can use and combine yyyy, yy, mm, m, dd, d)

	// poll view strings / labels
	define('SPR_POLL_NAME', 'Your name?');			// placeholder for name input field
	define('SPR_URL_COPY_ERROR', 'Error copying URL. Please copy it manually!');	// copy url error text
	define('SPR_ENTRY_SAVE', 'Save');	// new entry save button text

	//turn on/off footer text
	define('SPR_SHOW_FOOTER_LINK', '1');				// insert 0 if you want to remove the footer link, but it would be nice to leave it there


?>