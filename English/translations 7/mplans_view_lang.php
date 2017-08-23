<?php
	//**************************************************
	//FILENAME: mplans_view_lang
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
  //All views related to maintenance plans
  //starting by confirmation of an edit:
	$lang['mplans_view_0000'] = "Maintenance Plan";
	$lang['mplans_view_0001'] = "Saved";
	$lang['mplans_view_0002'] = "What would you like to do next?";
	$lang['mplans_view_0003'] = "View maintenance plan";
	$lang['mplans_view_0004'] = "Edit maintenance plan";
	$lang['mplans_view_0005'] = "Back to maintenance plan list";
	$lang['mplans_view_0006'] = "Go to your dashboard";
  //now the creation of a maintenance plan section:
	$lang['mplans_view_0007'] = "Create Maintenance Plan";
	$lang['mplans_view_0008'] = "Edit Maintenance Plan";
	$lang['mplans_view_0009'] = "Back to search console";
	$lang['mplans_view_0010'] = "Back to view";
	$lang['mplans_view_0011'] = "Edit";
	$lang['mplans_view_0012'] = "Log";
  //Search console
	$lang['mplans_view_0013'] = "Maintenance Plans";
	$lang['mplans_view_0014'] = "To add recommended tools and/ or equipment and/ or task lists to a maintenance plan you need to first create it and then return to it in edit mode to change the source WO.";
	$lang['mplans_view_0015'] = "To add recommended tools and/ or equipment and/ or task lists to a maintenance plan, edit the source WO and add that information there.";
  //tells users what is the source work order for the current maintenance plan:
  $lang['mplans_view_0016'] = "Source is WO";
	$lang['mplans_view_0017'] = "View";
	$lang['mplans_view_0018'] = "Summary";
	$lang['mplans_view_0019'] = "Enter General Information";
	$lang['mplans_view_0020'] = "Enter Description";
  //maximum of 100 characters
	$lang['mplans_view_0021'] = "max 100 char";
	$lang['mplans_view_0022'] = "Required";
  //part of a question: generate in active or paused mode
	$lang['mplans_view_0023'] = "Generate in";
	$lang['mplans_view_0024'] = "active or";
	$lang['mplans_view_0025'] = "paused mode";
	$lang['mplans_view_0026'] = "Delete source work order";
  //refers to the way maintenance plans are triggered
	$lang['mplans_view_0027'] = "Select Trigger Method";
	$lang['mplans_view_0028'] = "Time based";
	$lang['mplans_view_0029'] = "Counter based";
	$lang['mplans_view_0030'] = "Time and counter based (whichever comes first)";
  $lang['mplans_view_0031'] = "Time Trigger Options";
  $lang['mplans_view_0032'] = "Start Date";
  //Part of a sentence
  $lang['mplans_view_0033'] = "Generate";
  $lang['mplans_view_0034'] = "once";
  $lang['mplans_view_0035'] = "on start date";
  $lang['mplans_view_0036'] = "weekly";
  $lang['mplans_view_0037'] = "every";

  $lang['mplans_view_0038'] = "Monday";
  $lang['mplans_view_0039'] = "Tuesday";
  $lang['mplans_view_0040'] = "Wednesday";
  $lang['mplans_view_0041'] = "Thursday";
  $lang['mplans_view_0042'] = "Friday";
  $lang['mplans_view_0043'] = "Saturday";
  $lang['mplans_view_0044'] = "Sunday";
  //Another sentence
  $lang['mplans_view_0045'] = "Generate on";
  $lang['mplans_view_0046'] = "7-day, weekly";
  $lang['mplans_view_0047'] = "cycles";
  $lang['mplans_view_0048'] = "Enter week cycle (default = 1)";
  $lang['mplans_view_0049'] = "You must enter a positive integer";
  //Generate monthly on day 4 of every X months
  $lang['mplans_view_0050'] = "monthly";
  $lang['mplans_view_0051'] = "on day";
  $lang['mplans_view_0052'] = "of every";
  $lang['mplans_view_0053'] = "month(s)";
  //generate yearly every X years
  $lang['mplans_view_0054'] = "yearly";
  $lang['mplans_view_0055'] = "every";
  $lang['mplans_view_0056'] = "year(s)";
  $lang['mplans_view_0057'] = "End Date";
  $lang['mplans_view_0058'] = "Leave blank for no end date";
  $lang['mplans_view_0059'] = "Counter Trigger Options";
  $lang['mplans_view_0060'] = "current counter value is";
  //Another sentence
  $lang['mplans_view_0061'] = "Issue every";
  //Field validation instructions
  $lang['mplans_view_0062'] = "Integers only (no 0)";
  $lang['mplans_view_0063'] = "counter units, starting from";
  $lang['mplans_view_0064'] = "Integer only";
  $lang['mplans_view_0065'] = "Counter base is the counter value of the funtional location assigned to the source work order";
  //Button at the bottom
  $lang['mplans_view_0066'] = "Create Maintenance Plan";
  //Shows while we are saving information
  $lang['mplans_view_0067'] = "Saving";
  $lang['mplans_view_0068'] = "WO does not exist";
  $lang['mplans_view_0069'] = "No results!";
  //the table on the search console for mainantenance plans
  $lang['mplans_view_0070'] = "Total";
  $lang['mplans_view_0071'] = "Export";
  //table headers:
  $lang['mplans_view_0072'] = "Status";
  $lang['mplans_view_0073'] = "Description";
  //frequency means how ofter the maintenance plans are triggered, e.g. yearly, monthly, etc
  $lang['mplans_view_0074'] = "Frequency";
  //The header that shows the "last" work order that was generated from this maintenance plan
  $lang['mplans_view_0075'] = "Last";
  //For now, keep the T and C regarless of the translation. The system will call it T and C by itself
  $lang['mplans_view_0076'] = "T = Time based, C = Counter based";
  //the next date for when the maintenance plan will trigger a WO
  $lang['mplans_view_0077'] = "Next";
  $lang['mplans_view_0078'] = "Time based";
  $lang['mplans_view_0079'] = "Counter based";
  //Tells the user the maintenance has "ended". It doesn't mean complete. It means ended or finished.
  $lang['mplans_view_0080'] = "Ended";
  //Active is like "running". it is the opposite of paused.
  $lang['mplans_view_0081'] = "Active";
  $lang['mplans_view_0082'] = "Paused";
  $lang['mplans_view_0083'] = "Every";
  $lang['mplans_view_0084'] = "counter cycles";
  $lang['mplans_view_0085'] = "Never ran since last edit";
  //means that the next work order will come out "on counter" value:
  $lang['mplans_view_0086'] = "On counter";
  //Bottom of the table to "check all items"
  $lang['mplans_view_0087'] = "Check All";
  //after we check them all, there are 3 options. With seledted... do something
  $lang['mplans_view_0088'] = "With selected";
  $lang['mplans_view_0089'] = "Set to paused";
  $lang['mplans_view_0090'] = "Set to running";
  //this user has no access to the batch change
  $lang['mplans_view_0091'] = "Info: no batch change permissions";
  //buttons at the top of the search console on the left side
  //all search consoles have these buttons
  $lang['mplans_view_0092'] = "Show";
  $lang['mplans_view_0093'] = "Reset";
  //this is the first tab label: the one that contains general search paramters:
  $lang['mplans_view_0094'] = "General";
  //when we enter a search string, what fields do we want to match to search for results?
  $lang['mplans_view_0095'] = "Search Fields";
  $lang['mplans_view_0096'] = "ID";
  $lang['mplans_view_0097'] = "Description";
  $lang['mplans_view_0098'] = "Results per page";
  //the next tab:
  $lang['mplans_view_0099'] = "Status and Frequency";
  //what status are we looking for?
  $lang['mplans_view_0100'] = "Show Status";
  //following are the options for the status
  $lang['mplans_view_0101'] = "Active";
  $lang['mplans_view_0102'] = "Paused";
  $lang['mplans_view_0103'] = "Ended";
  //what frequency are we looking for?
  $lang['mplans_view_0104'] = "Show Frequency";
  $lang['mplans_view_0105'] = "Time Based";
  $lang['mplans_view_0106'] = "Counter Based";
  $lang['mplans_view_0107'] = "Combined";
  //Now the "department" tab label:
  $lang['mplans_view_0108'] = "Department";
  //and the option inside:
  $lang['mplans_view_0109'] = "Filter by Department";
  //now the "forecast" tab
  $lang['mplans_view_0110'] = "Forecast";
  //and the options inside:
  $lang['mplans_view_0111'] = "None";
  $lang['mplans_view_0112'] = "Next 7 days (week)";
  $lang['mplans_view_0113'] = "Next 15 days";
  $lang['mplans_view_0114'] = "Next 31 days (month)";
  $lang['mplans_view_0115'] = "Next 3 x 31 days (3-month)";
  $lang['mplans_view_0116'] = "Next 6 x 31 days (6-month)";
  //moving on to the section that takes care of the edit of maintenance plans:
  //source is WO #3888
  $lang['mplans_view_0117'] = "Source is WO";
  $lang['mplans_view_0118'] = "View";
  $lang['mplans_view_0119'] = "General Information";
  $lang['mplans_view_0120'] = "Change Description";
  $lang['mplans_view_0121'] = "max 100 char";
  $lang['mplans_view_0122'] = "Change Status";
  $lang['mplans_view_0123'] = "Active mode";
  $lang['mplans_view_0124'] = "Paused mode";
  $lang['mplans_view_0125'] = "Created by";
  $lang['mplans_view_0126'] = "Creation date";
  $lang['mplans_view_0127'] = "Last Edit by";
  $lang['mplans_view_0128'] = "No information";
  $lang['mplans_view_0129'] = "Last Edit Date";
  $lang['mplans_view_0130'] = "Select Trigger Method";
  $lang['mplans_view_0131'] = "No end date";
  $lang['mplans_view_0132'] = "Delete maintenance plan";
  $lang['mplans_view_0133'] = "You have permissions to edit but no permissions to delete this maintenance plan";
  $lang['mplans_view_0134'] = "Save Changes";
  $lang['mplans_view_0135'] = "Cancel";
  $lang['mplans_view_0136'] = "Saving";
  $lang['mplans_view_0137'] = "Error: No such WO number.";
  //display maintenance plan information:
  $lang['mplans_view_0138'] = "Schedule";
  //we will build a string now. Starts <start date> and repeats weekly on...
  $lang['mplans_view_0139'] = "Starts";
  $lang['mplans_view_0140'] = "weekly on";
  $lang['mplans_view_0141'] = "and repeats";
  $lang['mplans_view_0142'] = "once";
  $lang['mplans_view_0143'] = "monthly";
  $lang['mplans_view_0144'] = "on day";
  $lang['mplans_view_0145'] = "of every";
  $lang['mplans_view_0146'] = "year(s) from start date";
  $lang['mplans_view_0147'] = "until";
  //for counter based maintenance plans, issued every xxxx counter cycles starting from
  $lang['mplans_view_0148'] = "Is issued every";
  $lang['mplans_view_0149'] = "counter cycles starting from";
  $lang['mplans_view_0150'] = "Current associated FL counter value is";
  //maintenance plan log window:
  $lang['mplans_view_0151'] = "Last 30 Orders Created";
  //table headers (GMT is greewich meridian time)
  $lang['mplans_view_0152'] = "Date (GMT)";
  //changes
  $lang['mplans_view_0153'] = "Changes";
  $lang['mplans_view_0154'] = "No log information";
  $lang['mplans_view_0155'] = "This maintenance plan doesn't exist. Was it deleted?";

?>
