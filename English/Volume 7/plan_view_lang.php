<?php
	//**************************************************
	//FILENAME: plan_view_lang
  //DESCRIPTION:
	//Language: English
	//Translation by: Rui Alves comma CMMS 2017
	//**************************************************

	//IMPORTANT NOTES FOR TRANSLATORS:
	//0. For each line, do not change anything before the "=" sign.
	//1. Replace text inside "" (double quotes).
	//2. If you need to add double quotes on the text, do this: \" for each double quote you would like to enter.
	//3. if there's a link in the middle of the text, the sentence is split in:
	//	part 1: text before the link
	//	part 2: text of the link
	//	part 3: text after the link
	//4. Never leave trailing spaces
	//5. Keep sentences in one line only, even if very long.
	//6. If a line starts with // that means it is a comment line. Leave it as it is.
	//7. Try to keep the number of chars on your translation at about the same lenght as the English version

  //the job plans views
  //what shows up on the search results table:
	$lang['plan_view_0000'] = "Total Number of Job Plans";
  //table headers for the search results table
	$lang['plan_view_0001'] = "Name";
	$lang['plan_view_0002'] = "Description";
	$lang['plan_view_0003'] = "Plant";
	$lang['plan_view_0004'] = "Dpt";
	$lang['plan_view_0005'] = "Date Added";
	$lang['plan_view_0006'] = "Status";
	$lang['plan_view_0007'] = "Edit";
	$lang['plan_view_0008'] = "No Results";
  //this is the remainer of the search console, namely the parameters sections on the left of the page:
	$lang['plan_view_0009'] = "Job Plans";
  //labels for buttons at the top
	$lang['plan_view_0010'] = "Show";
	$lang['plan_view_0011'] = "Reset";
	$lang['plan_view_0012'] = "Search Console";
	$lang['plan_view_0013'] = "Search string";
	$lang['plan_view_0014'] = "Maximum results per page";
	$lang['plan_view_0015'] = "Search fields";
	$lang['plan_view_0016'] = "Job plan name";
	$lang['plan_view_0017'] = "Job plan description";
  //as in "list only"... currently active
	$lang['plan_view_0018'] = "List only";
	$lang['plan_view_0019'] = "Currently active";
  //this next one if appended with a "+" sign to show +Job plan on a button for users to add a new job plan
	$lang['plan_view_0020'] = "Job plan";
  //we are now on the display view of an existing job plan
  //the link at the top of a display job plan on the left
	$lang['plan_view_0021'] = "Printer-friendly version";
  //the link on the top right that toggles between viwing the general information and not viewing the general information
	$lang['plan_view_0022'] = "show/ hide general info";
  //section identifier:
	$lang['plan_view_0023'] = "General Information";
	$lang['plan_view_0024'] = "Added by";
	$lang['plan_view_0025'] = "Date added";
	$lang['plan_view_0026'] = "Start date";
	$lang['plan_view_0027'] = "End date";
	$lang['plan_view_0028'] = "Plant";
	$lang['plan_view_0029'] = "Department";
	$lang['plan_view_0030'] = "Status";
  $lang['plan_view_0031'] = "Complete";
  $lang['plan_view_0032'] = "Active";
  $lang['plan_view_0033'] = "show/ hide chart";
  $lang['plan_view_0034'] = "show/ hide contents table";
  //table header for the table at the bottom
  $lang['plan_view_0035'] = "WOID";
  $lang['plan_view_0036'] = "Note";
  //M is month, D is day and Y is year it's to shoe users how to input data
  //start date
  $lang['plan_view_0037'] = "Start (M/D/Y)";
  //start time
  $lang['plan_view_0038'] = "Start (H:M)";
  //end date
  $lang['plan_view_0039'] = "End (M/D/Y)";
  //end time
  $lang['plan_view_0040'] = "End (H:M)";
  //as in Human resources
  $lang['plan_view_0041'] = "Resources";
  $lang['plan_view_0042'] = "show/ hide report";
  $lang['plan_view_0043'] = "Job Plan Reports";
  $lang['plan_view_0044'] = "No Report Added";
  $lang['plan_view_0045'] = "Edit";
  $lang['plan_view_0046'] = "Back to Console";
  $lang['plan_view_0047'] = "No Permissions to View";
  //now we're on the screen to add a new job plan
  $lang['plan_view_0048'] = "Add New Job Plan";
  $lang['plan_view_0049'] = "Assignment Options";
  $lang['plan_view_0050'] = "Choose plant";
  $lang['plan_view_0051'] = "select";
  $lang['plan_view_0052'] = "Choose department";
  $lang['plan_view_0053'] = "select above";
  $lang['plan_view_0054'] = "Defaults if none selected above";
  $lang['plan_view_0055'] = "Department";
  $lang['plan_view_0056'] = "Job Plan Name";
  $lang['plan_view_0057'] = "Short Description";
  $lang['plan_view_0058'] = "Start Date";
  $lang['plan_view_0059'] = "End Date";
  $lang['plan_view_0060'] = "Both start and end dates will default to start and end of next month if left blank. These dates are used as the default dates on the job plan content manager.";
  $lang['plan_view_0061'] = "Add";
  $lang['plan_view_0062'] = "Cancel";
  $lang['plan_view_0063'] = "No permissions to add";
  //we arrive on the edit pages:
  $lang['plan_view_0064'] = "Edit";
  $lang['plan_view_0065'] = "Content Manager";
  //the color selector
  $lang['plan_view_0066'] = "Change";
  $lang['plan_view_0067'] = "Blue";
  $lang['plan_view_0068'] = "Green";
  $lang['plan_view_0069'] = "Red";
  $lang['plan_view_0070'] = "Yellow";
  $lang['plan_view_0071'] = "Purple";
  //M month D day Y year
  $lang['plan_view_0072'] = "Job Plan Start Time (M/D/Y)";
  $lang['plan_view_0073'] = "Job Plan End Time (M/D/Y)";
  $lang['plan_view_0074'] = "Color";
  //work order Identifier
  $lang['plan_view_0075'] = "WOID";
  $lang['plan_view_0076'] = "Note";
  $lang['plan_view_0077'] = "Start";
  $lang['plan_view_0078'] = "(M/D/Y H:M)";
  $lang['plan_view_0079'] = "End";
  //part 1 of a sentence with a link on the middle
  $lang['plan_view_0080'] = "Add work order ID or a note. You can also import WO lists directly from the";
  $lang['plan_view_0081'] = "WO search console";
  //end of the sentence
  $lang['plan_view_0082'] = "General Settings";
  $lang['plan_view_0083'] = "Edit General Information";
  $lang['plan_view_0084'] = "Job Plan Name (20 char max)";
  $lang['plan_view_0085'] = "Short Description (100 char max)";
  $lang['plan_view_0086'] = "Edit Assignment Options";
  $lang['plan_view_0087'] = "Change plant";
  $lang['plan_view_0088'] = "Change department";
  $lang['plan_view_0089'] = "select above";
  $lang['plan_view_0090'] = "Current Settings";
  $lang['plan_view_0091'] = "Edit Dates";
  $lang['plan_view_0092'] = "Do you really want to change the Job Plan dates?";
  $lang['plan_view_0093'] = "Start Date (M/D/Y)";
  $lang['plan_view_0094'] = "End Date (M/D/Y)";
  //button label
  $lang['plan_view_0095'] = "Save";
  //shown to user when the saving is in progress
  $lang['plan_view_0096'] = "Saving";
  $lang['plan_view_0097'] = "If the end date is set earlier then the start date they will be swapped. Job Plan contents currently scheduled outside the new date range will default to the new start or end date.";
  $lang['plan_view_0098'] = "Job Report";
  //the following shows up as an error when the job report is.... too long
  $lang['plan_view_0099'] = "Too long";
  //shows dynamically as the user types and tells the user how many characters he/ she still can write: "X chars left"
  $lang['plan_view_0100'] = "chars left";
  $lang['plan_view_0101'] = "Save Report";
  $lang['plan_view_0102'] = "Job Plan Status";
  $lang['plan_view_0103'] = "Do you really want to change the job plan status?";
  $lang['plan_view_0104'] = "Set Job Plan as Complete?";
  $lang['plan_view_0105'] = "No";
  $lang['plan_view_0106'] = "Yes";
  $lang['plan_view_0107'] = "Save";
  $lang['plan_view_0108'] = "After you set the job plan as complete, the plan will no longer be editable, it will only be viewable.";
  $lang['plan_view_0109'] = "Deleting a job plan cannot be undone.";
  $lang['plan_view_0110'] = "Do you really want to delete this job plan? This cannot be undone.";
  $lang['plan_view_0111'] = "Delete Job Plan";
  $lang['plan_view_0112'] = "This job plan is set as complete and cannot be modified.";
  $lang['plan_view_0113'] = "What would you like to do next?";
  $lang['plan_view_0114'] = "View Job Plan";
  $lang['plan_view_0115'] = "may not be viewable to you depending on current settings";
  $lang['plan_view_0116'] = "Go to the Job Plan search console";
  $lang['plan_view_0117'] = "Go to your dashboard";
  $lang['plan_view_0118'] = "No such Job Plan";
  $lang['plan_view_0119'] = "Changes saved";
?>
