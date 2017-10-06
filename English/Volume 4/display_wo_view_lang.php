<?php
	//**************************************************
	//FILENAME: display_wo_view_lang
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

  //Success message after a user saves a Work order
	$lang['display_wo_view_0000'] = "WO #";
	$lang['display_wo_view_0001'] = "Saved";
  //warning in case the current work order has been set to complete
  //we should now warn the user that it needs an extra step to complete the process (close the WO)
	$lang['display_wo_view_0002'] = "This order is set as";
	$lang['display_wo_view_0003'] = "COMPLETE";
	$lang['display_wo_view_0004'] = "If the work has been validated and accepted, you may want to change its status to";
	$lang['display_wo_view_0005'] = "CLOSED";
	$lang['display_wo_view_0006'] = "Click here";
	$lang['display_wo_view_0007'] = "to know more";
  //after the changes are made to the Wo, what would the user like to do next?
	$lang['display_wo_view_0008'] = "What would you like to do next?";
	$lang['display_wo_view_0009'] = "Back to Current Work Order";
	$lang['display_wo_view_0010'] = "Back to maintenance plan edit page";
	$lang['display_wo_view_0011'] = "Go to the WO search console";
	$lang['display_wo_view_0012'] = "Go to your dashboard";
  //top of the WO details page:
	$lang['display_wo_view_0013'] = "WO Details";
  //we did not find the work order specified:
	$lang['display_wo_view_0014'] = "No such order number";
  //Maybe user has no permissions to access the WO
	$lang['display_wo_view_0015'] = "You cannot access this WO";
	$lang['display_wo_view_0016'] = "This information was either manually disabled by a comma CMMS admin on your organization request or disabled by a system user when the information was still on work request stage.";
	$lang['display_wo_view_0017'] = "Work Order";
	$lang['display_wo_view_0018'] = "Work Request";
	$lang['display_wo_view_0019'] = "MPlan #";
	$lang['display_wo_view_0020'] = "Target FL";
	$lang['display_wo_view_0021'] = "Plant";
	$lang['display_wo_view_0022'] = "Not specified";
	$lang['display_wo_view_0023'] = "FL Details";
	$lang['display_wo_view_0024'] = "Change FL";
  //bottom left of the WO diplay page:
	$lang['display_wo_view_0025'] = "Tags";
	$lang['display_wo_view_0026'] = "Printer-friendly version";
	$lang['display_wo_view_0027'] = "View WO log";
  //options that shows when WO are at WR stage and allows for users to disable them
	$lang['display_wo_view_0028'] = "Disable this work request";
	$lang['display_wo_view_0029'] = "Created by";
	$lang['display_wo_view_0030'] = "Creation date";
  $lang['display_wo_view_0031'] = "User list";
  $lang['display_wo_view_0032'] = "Assigned to";
  $lang['display_wo_view_0033'] = "No permissions to assign to other users";
  $lang['display_wo_view_0034'] = "Completed by";
  $lang['display_wo_view_0035'] = "Completion date";
  $lang['display_wo_view_0036'] = "Closed by";
  $lang['display_wo_view_0037'] = "Closed Date";
  $lang['display_wo_view_0038'] = "Department";
  $lang['display_wo_view_0039'] = "Type";
  $lang['display_wo_view_0040'] = "Priority";
  $lang['display_wo_view_0041'] = "Status";
  $lang['display_wo_view_0042'] = "Status can only be ASSIGNED for mplan source orders";
  $lang['display_wo_view_0043'] = "ASSIGNED";
  //if this is a maintenance plan source work orders, users can change the summary
  $lang['display_wo_view_0044'] = "Edit summary";
  //if not, just show the non-editable summary
  $lang['display_wo_view_0045'] = "Summary";
  //Mode labels - color labels that show at the middle of the WO and tell users what viewing mode they are in
  $lang['display_wo_view_0046'] = "Edit mode";
  $lang['display_wo_view_0047'] = "MPlan source";
  $lang['display_wo_view_0048'] = "Overdue since";
  $lang['display_wo_view_0049'] = "Deadline is";
  $lang['display_wo_view_0050'] = "Deadline not set";
  $lang['display_wo_view_0051'] = "Read-only mode";
  //change links on the bottom right of work order. the ones that open diferent sections on the work order
  $lang['display_wo_view_0052'] = "Description";
  $lang['display_wo_view_0053'] = "Reports";
  $lang['display_wo_view_0054'] = "Equipment";
  $lang['display_wo_view_0055'] = "Tasks";
  $lang['display_wo_view_0056'] = "Tools";
  $lang['display_wo_view_0057'] = "Costs";
  $lang['display_wo_view_0058'] = "Deadline";
  $lang['display_wo_view_0059'] = "Files";
  //end of the section links
  //if maintenance plan source, we can edit the description:
  $lang['display_wo_view_0060'] = "Edit Description";
  //inside the reports section
  $lang['display_wo_view_0061'] = "No reports added";
  //if maintenance plan source WO we allow deletion of files added to the reports
  $lang['display_wo_view_0062'] = "Delete";
  $lang['display_wo_view_0063'] = "Add Report";
  $lang['display_wo_view_0064'] = "2000 chars left";
  //on the equipment list - these are the table headers:
  $lang['display_wo_view_0065'] = "ID";
  $lang['display_wo_view_0066'] = "Qty";
  $lang['display_wo_view_0067'] = "Brand";
  $lang['display_wo_view_0068'] = "Model";
  $lang['display_wo_view_0069'] = "Status";
  $lang['display_wo_view_0070'] = "Approval";
  //if this is a mplan source WO, the equipment on the list is for reference only:
  $lang['display_wo_view_0071'] = "Denotes a maintenance plan recommendation only. No stock movement is recorded.";
  $lang['display_wo_view_0072'] = "**Tip** Equipment and parts movement in comma CMMS need to be approved by a supervisor. If you made a mistake and do not wish to use an equipment on the table above, you can cancel the movement on the equipment properties page.";
  $lang['display_wo_view_0073'] = "No equipment added";
  $lang['display_wo_view_0074'] = "Add Equipment";
  $lang['display_wo_view_0075'] = "You must save the work order for any change made here to become permanent";
  //steps to add equipment usage to a work order:
  $lang['display_wo_view_0076'] = "1: Part ID, brand, description or model";
  $lang['display_wo_view_0077'] = "Results";
  $lang['display_wo_view_0078'] = "Status";
  $lang['display_wo_view_0079'] = "Stored Qty";
  $lang['display_wo_view_0080'] = "Use your mouse cursor over each result to dynamically show current status and quantity";
  $lang['display_wo_view_0081'] = "2: This work order will change the selected part status to";
  $lang['display_wo_view_0082'] = "This step is not required on maintenance plan source WOs";
  $lang['display_wo_view_0083'] = "Installed";
  $lang['display_wo_view_0084'] = "Under Repair";
  $lang['display_wo_view_0085'] = "Calibration";
  $lang['display_wo_view_0086'] = "In Storage";
  $lang['display_wo_view_0087'] = "Disposed";
  $lang['display_wo_view_0088'] = "3: This work order will affect the following quantity of items";
  $lang['display_wo_view_0089'] = "Add to usage list";
  $lang['display_wo_view_0090'] = "4: Parts usage list";
  $lang['display_wo_view_0091'] = "Remove";
  $lang['display_wo_view_0092'] = "Info";
  $lang['display_wo_view_0093'] = "**Tip** When non-consumable field components are replaced, add removed field component on one line (set to repair, back in storage or dispose) and add the component to be installed on another line. The system can then properly track parts usage.";
  //mplan means maintenance plan. # means "number"
  $lang['display_wo_view_0094'] = "**Tip** The parts listed on the following field will be linked to mplan#";
  $lang['display_wo_view_0095'] = "and appear as recommended spares of the generated orders";
  //on the tasks section now
  $lang['display_wo_view_0096'] = "Total number of tasks";
  $lang['display_wo_view_0097'] = "Total job duration";
  $lang['display_wo_view_0098'] = "hours";
  //header on the task list table
  $lang['display_wo_view_0099'] = "Action";
  $lang['display_wo_view_0100'] = "Task Type";
  $lang['display_wo_view_0101'] = "Duration";
  $lang['display_wo_view_0102'] = "User";
  $lang['display_wo_view_0103'] = "No tasks added";
  $lang['display_wo_view_0104'] = "Add or Edit Tasks";
  $lang['display_wo_view_0105'] = "You must save the work order for any change made here to become permanent";
  $lang['display_wo_view_0106'] = "Import Task List";
  $lang['display_wo_view_0107'] = "input name >3 chars";
  $lang['display_wo_view_0108'] = "Add";
  //The thing to be done on a task list:
  $lang['display_wo_view_0109'] = "Action";
  $lang['display_wo_view_0110'] = "Task Type";
  $lang['display_wo_view_0111'] = "Man/ Hour";
  $lang['display_wo_view_0112'] = "User";
  //instructs users to enter time in hours
  $lang['display_wo_view_0113'] = "Time (hours)";
  $lang['display_wo_view_0114'] = "Click to add line to table";
  $lang['display_wo_view_0115'] = "Total job duration in hours";
  //this next one is a bit cryptic, I know. It's (T)otal (J)ob (D)uration needs to be kept short because we don't have much room to display it
  $lang['display_wo_view_0116'] = "TJD";
  $lang['display_wo_view_0117'] = "User";
  $lang['display_wo_view_0118'] = "Rate";
  //this next one ends weirdly but because the sentence will continue after the please... on 0120
  $lang['display_wo_view_0119'] = "No task types defined. Please";
  $lang['display_wo_view_0120'] = "add at least one task type";
  $lang['display_wo_view_0121'] = "to proceed";
  //tools section
  //there are the table header labels
  $lang['display_wo_view_0122'] = "ID";
  $lang['display_wo_view_0123'] = "Brand";
  $lang['display_wo_view_0124'] = "Model";
  $lang['display_wo_view_0125'] = "Serial #";
  $lang['display_wo_view_0126'] = "Qty";
  $lang['display_wo_view_0127'] = "No tools added";
  $lang['display_wo_view_0128'] = "Add or Edit Tools";
  //I know, repeat, repeat, repeat
  $lang['display_wo_view_0129'] = "You must save the work order for any change made here to become permanent";
  $lang['display_wo_view_0130'] = "Import Tool (Enter Brand or Model)";
  $lang['display_wo_view_0131'] = "Add";
  $lang['display_wo_view_0132'] = "Labor costs";
  $lang['display_wo_view_0133'] = "Total labour cost";
  $lang['display_wo_view_0134'] = "Not all tasks are assigned yet or hourly rates are missing";
  $lang['display_wo_view_0135'] = "No tasks information";
  //the following refers to payment rates to the technicians
  $lang['display_wo_view_0136'] = "No rates are defined";
  $lang['display_wo_view_0137'] = "No permissions to view";
  $lang['display_wo_view_0138'] = "Equipment Costs";
  $lang['display_wo_view_0139'] = "Consumables";
  $lang['display_wo_view_0140'] = "Non-consumables";
  $lang['display_wo_view_0141'] = "No equipment movement";
  $lang['display_wo_view_0142'] = "No permissions to view";
  //this sentence continues to show the deadline date
  $lang['display_wo_view_0143'] = "Work is to be completed by the end of";
  $lang['display_wo_view_0144'] = "No permissions to change deadline";
  $lang['display_wo_view_0145'] = "The deadline cannot be set on maintenance plan source work orders";
  $lang['display_wo_view_0146'] = "Deadline not set";
  $lang['display_wo_view_0147'] = "Allowed file types:  gif | jpg | png | txt | doc | docx | pdf | xls | xlsx | wav (max 2MB)";
  //the http:// part is to show users they need to enter that part of teh URI
  $lang['display_wo_view_0148'] = "Full link to external file (http://...)";
  $lang['display_wo_view_0149'] = "Valid URL required";
  $lang['display_wo_view_0150'] = "This option saves you server space and will override any uploaded file";
  //the two buttons at the bottom
  $lang['display_wo_view_0151'] = "Save";
  $lang['display_wo_view_0152'] = "Cancel";
  //the windows that open for log:
  $lang['display_wo_view_0153'] = "Order Logs";
  //table headers for the WO logs:
  $lang['display_wo_view_0154'] = "User";
  $lang['display_wo_view_0155'] = "Date/ Time";
  $lang['display_wo_view_0156'] = "Description";
  //prienter friendly view:
  //there will be a repeat of a lot of items but we must write them again for flexibility in the future.
  $lang['display_wo_view_0157'] = "WO Details";
  $lang['display_wo_view_0158'] = "No such order number";
  $lang['display_wo_view_0159'] = "WO #";
  $lang['display_wo_view_0160'] = "source of mplan #";
  $lang['display_wo_view_0161'] = "Summary";
  $lang['display_wo_view_0162'] = "Description";
  $lang['display_wo_view_0163'] = "Assigned to";
  $lang['display_wo_view_0164'] = "Department";
  $lang['display_wo_view_0165'] = "Type";
  $lang['display_wo_view_0166'] = "Priority";
  $lang['display_wo_view_0167'] = "Status";
  $lang['display_wo_view_0168'] = "PLANT";
  $lang['display_wo_view_0169'] = "Work Reports";
  $lang['display_wo_view_0170'] = "Report by";
  $lang['display_wo_view_0171'] = "Date";
  $lang['display_wo_view_0172'] = "Task List";
  $lang['display_wo_view_0173'] = "Total number of tasks";
  $lang['display_wo_view_0174'] = "Estimated job duration";
  $lang['display_wo_view_0175'] = "hours";
  $lang['display_wo_view_0176'] = "Task Type";
  $lang['display_wo_view_0177'] = "Duration";
  $lang['display_wo_view_0178'] = "User";
  $lang['display_wo_view_0179'] = "Equipment";
  $lang['display_wo_view_0180'] = "ID";
  //means quantity and it's only to keep it small to fit the table
  $lang['display_wo_view_0181'] = "Qty";
  $lang['display_wo_view_0182'] = "Brand";
  $lang['display_wo_view_0183'] = "Model";
  $lang['display_wo_view_0184'] = "Date";
  $lang['display_wo_view_0185'] = "User";
  $lang['display_wo_view_0186'] = "Status";
  $lang['display_wo_view_0187'] = "Approval";
  $lang['display_wo_view_0188'] = "Delete";
  //really start with non-capital letter:
  $lang['display_wo_view_0189'] = "above means a maintenance plan recommendation";
  $lang['display_wo_view_0190'] = "Tools";
  $lang['display_wo_view_0191'] = "ID";
  $lang['display_wo_view_0192'] = "Brand";
  $lang['display_wo_view_0193'] = "Model";
  $lang['display_wo_view_0194'] = "Serial#";
  $lang['display_wo_view_0195'] = "Qty";
  $lang['display_wo_view_0196'] = "Created by";
  $lang['display_wo_view_0197'] = "Completed by";
  $lang['display_wo_view_0198'] = "Closed by";
  $lang['display_wo_view_0199'] = "None";
?>
