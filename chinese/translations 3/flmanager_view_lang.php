<?php
	//**************************************************
	//FILENAME: flmanager_view_view_lang
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
  //create FL one by one, confirmation page:
	$lang['flmanager_view_0000'] = "FL successfully generated";
	$lang['flmanager_view_0001'] = "What would you like to do next?";
	$lang['flmanager_view_0002'] = "Create a FL under the new path";
	$lang['flmanager_view_0003'] = "Create another FL under the previous path";
	$lang['flmanager_view_0004'] = "Go to the new FL details page";
	$lang['flmanager_view_0005'] = "Go to the FL browser";
	$lang['flmanager_view_0006'] = "Go to your dashboard";
	$lang['flmanager_view_0007'] = "Add functional location";
  //when there is a fault adding a new functional location
	$lang['flmanager_view_0008'] = "Path options not set correctly. Please specify a correct FL path";
	$lang['flmanager_view_0009'] = "here";
	$lang['flmanager_view_0010'] = "Adding under FL path";
	$lang['flmanager_view_0011'] = "Add one";
	$lang['flmanager_view_0012'] = "Only FL Code and FL Description are required fields. If you are not an advanced user, do not worry too much about all the other information - you can always add/ revise it later.";
  //these next lines aer on the add new functional location form
  $lang['flmanager_view_0013'] = "Code and description";
	$lang['flmanager_view_0014'] = "FL code";
	$lang['flmanager_view_0015'] = "max 10 char - e.g. COOLS";
  //Tells users what type of information to enter:
	$lang['flmanager_view_0016'] = "Required. Alpha Numeric.";
	$lang['flmanager_view_0017'] = "FL description";
	$lang['flmanager_view_0018'] = "max 40 char - e.g. Cooling System";
	$lang['flmanager_view_0019'] = "Required. No Empty String.";
	$lang['flmanager_view_0020'] = "Legacy code";
	$lang['flmanager_view_0021'] = "max 40 char";
	$lang['flmanager_view_0022'] = "Input a legacy code if your equipment is pre-coded and you would like your users to still find functional locations using your old codes.";
	$lang['flmanager_view_0023'] = "Additional settings";
	$lang['flmanager_view_0024'] = "Enter starting counter value";
	$lang['flmanager_view_0025'] = "Enter integer or float with exactly 2 decimal points. No 0.";
	$lang['flmanager_view_0026'] = "Select counter units";
	$lang['flmanager_view_0027'] = "None";
	$lang['flmanager_view_0028'] = "Org does not have any defined counter units";
	$lang['flmanager_view_0029'] = "Enter picture link (include http://)";
	$lang['flmanager_view_0030'] = "Valid URL required.";
  $lang['flmanager_view_0031'] = "Select responsible user";
  $lang['flmanager_view_0032'] = "None";
  $lang['flmanager_view_0033'] = "No users or no permissions to list";
  $lang['flmanager_view_0034'] = "Enter FL geo location";
  $lang['flmanager_view_0035'] = "None";
  $lang['flmanager_view_0036'] = "No geo locations defined";
  $lang['flmanager_view_0037'] = "Assignment options";
  //next are the assignemnt options. What shows up depends on user permissions.
  $lang['flmanager_view_0038'] = "Choose plant";
  $lang['flmanager_view_0039'] = "select";
  $lang['flmanager_view_0040'] = "Choose department";
  $lang['flmanager_view_0041'] = "select above";
  $lang['flmanager_view_0042'] = "Defaults if none selected above";
  $lang['flmanager_view_0043'] = "Plant";
  //yes, we need to repeat this one in case we want to change this is the future:
  $lang['flmanager_view_0044'] = "Choose department";
  $lang['flmanager_view_0045'] = "Plant";
  $lang['flmanager_view_0046'] = "Department";
  //label of the button at the bottom:
  $lang['flmanager_view_0047'] = "Save";
  //message that shows after we press the button
  $lang['flmanager_view_0048'] = "Saving";
  $lang['flmanager_view_0049'] = "Batch upload wizard";
  $lang['flmanager_view_0050'] = "If you have a large number of FLs to upload, you can save time by doing a batch upload. Follow the steps below to upload a file with a list of FLs to be inserted under the current FL.";
  //these steps correspond to the options on the tabs of the wizard
  $lang['flmanager_view_0051'] = "Step 1";
  //no need for question mark on the next sentence
  $lang['flmanager_view_0052'] = "How many FLs will you approximately add";
  $lang['flmanager_view_0053'] = "The more accurate you are the better, but do not worry too much: you can always add more lines to the template after it's generated.";
  $lang['flmanager_view_0054'] = "Enter approximate number of FLs to upload";
  $lang['flmanager_view_0055'] = "Min = 1, Max = 1000, Default = 10";
  $lang['flmanager_view_0056'] = "Enter an Integer (not 0)";
  $lang['flmanager_view_0057'] = "Proceed to step 2 above when you are done";
  $lang['flmanager_view_0058'] = "Step 2";
  $lang['flmanager_view_0059'] = "What will be the plant and department combination for the items to be added?";
  $lang['flmanager_view_0060'] = "Access to these options depends on your current permissions and you may have limited or no options available.";
  //sorry we keep repeating the next few lines. Repeating will make it more flexible to change in the future
  $lang['flmanager_view_0061'] = "Choose plant";
  $lang['flmanager_view_0062'] = "select";
  $lang['flmanager_view_0063'] = "Choose department";
  $lang['flmanager_view_0064'] = "select above";
  $lang['flmanager_view_0065'] = "Defaults if none selected above";
  $lang['flmanager_view_0066'] = "Plant";
  $lang['flmanager_view_0067'] = "Choose department";
  $lang['flmanager_view_0068'] = "Plant";
  $lang['flmanager_view_0069'] = "Department";
  $lang['flmanager_view_0070'] = "Proceed to step 3 above when you are done";
  $lang['flmanager_view_0071'] = "Step 3";
  $lang['flmanager_view_0072'] = "Copy and save the following information";
  $lang['flmanager_view_0073'] = "You need to ensure that you use the exact format of the data on the tables, otherwise your upload will fail. If you have a single 0 on the lists below, that means you have no options defined on your organization.";
  $lang['flmanager_view_0074'] = "Allowed user list";
  $lang['flmanager_view_0075'] = "Allowed geo locations list";
  $lang['flmanager_view_0076'] = "Allowed counter units list";
  $lang['flmanager_view_0077'] = "While generating the contents of the file you will download on the next step, ensure you input the information exactly as it appears on the lists above.";
  $lang['flmanager_view_0078'] = "Step 4";
  $lang['flmanager_view_0079'] = "Download File Template";
  $lang['flmanager_view_0080'] = "Click the link below to download the file template. Fill in the template file and upload it on Step 5.";
  $lang['flmanager_view_0081'] = "Download template";
  $lang['flmanager_view_0082'] = "For security reasons, you must keep the filename exactly as it is and the upload on step 5 must be done through the current comma CMMS account. This template is good for one month after which time the system will not allow the upload and you will need to follow the steps again.";
  $lang['flmanager_view_0083'] = "Step 5";
  $lang['flmanager_view_0084'] = "Upload file template";
  $lang['flmanager_view_0085'] = "Upload";
  $lang['flmanager_view_0086'] = "";
  $lang['flmanager_view_0087'] = "";
  $lang['flmanager_view_0088'] = "";
  $lang['flmanager_view_0089'] = "";
  $lang['flmanager_view_0090'] = "";
  $lang['flmanager_view_0091'] = "";
  $lang['flmanager_view_0092'] = "";
  $lang['flmanager_view_0093'] = "";
  $lang['flmanager_view_0094'] = "";
  $lang['flmanager_view_0095'] = "";
  $lang['flmanager_view_0096'] = "";
  $lang['flmanager_view_0097'] = "";
  $lang['flmanager_view_0098'] = "";
  $lang['flmanager_view_0099'] = "";
  $lang['flmanager_view_0100'] = "";
?>
