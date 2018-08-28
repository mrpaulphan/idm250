/* RUN DIALOG BACKEND JS - specify run box aliases and the functions they execute */
/*      this file gets loaded dynamically whenever the run dialog is opened      */

// we should eventually replace the hardcoded aliases here with a database-type system
// loaded dynamically
function aliasRun(rawCommand) {
	var themeUri = $('[data-theme-uri]').attr('data-theme-uri');
	var command = rawCommand.toLowerCase(); // for case insensitivity
	if(command == "debug") {
		var debugJsLink = $("<script src='"+themeUri+"system/debug/debug.js'>");
		$("head").append(debugJsLink);
		winDebug();
	} else if (command == "winver") {
		winverStart();
	} else {

		// put file not found error dialog js here
		makeWindow(themeUri + 'system/icons/find24.png', 'Find', themeUri + 'pages/search_results_page.html', true);
	}
}