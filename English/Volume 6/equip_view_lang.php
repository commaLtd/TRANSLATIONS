<?php
	//**************************************************
	//FILENAME: equip_view_lang
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

  //this refers to text on all views of the equipment and tools module
  //we start by the print view where users click the link on the top of the results TABLE
  //and it shows the list of equipment with the QR code and properties
	$lang['equip_view_0000'] = "Equipment and Tools - Print View";
	$lang['equip_view_0001'] = "Print the table below directly from your browser";
  //listing 234 results
	$lang['equip_view_0002'] = "Listing";
	$lang['equip_view_0003'] = "results";
	$lang['equip_view_0004'] = "No permissions to view costs";
  //results table headers:
	$lang['equip_view_0005'] = "ID";
	$lang['equip_view_0006'] = "Brand";
	$lang['equip_view_0007'] = "Model";
	$lang['equip_view_0008'] = "Qty";
  //as in consupmtion unit: liters, boxes, pieces, etc
	$lang['equip_view_0009'] = "Unit";
  //e.g. consumable
	$lang['equip_view_0010'] = "Type";
	$lang['equip_view_0011'] = "Status";
	$lang['equip_view_0012'] = "Cost";
	$lang['equip_view_0013'] = "Total Cost";
  //standing for storage = ST1
	$lang['equip_view_0014'] = "ST1";
	$lang['equip_view_0015'] = "ST2";
	$lang['equip_view_0016'] = "ST3";
	$lang['equip_view_0017'] = "Consumable";
	$lang['equip_view_0018'] = "Container";
	$lang['equip_view_0019'] = "Content";
  $lang['equip_view_0020'] = "Installed";
	$lang['equip_view_0021'] = "In storage";
	$lang['equip_view_0022'] = "Under repair";
	$lang['equip_view_0023'] = "Calibration";
	$lang['equip_view_0024'] = "Inactive";
	$lang['equip_view_0025'] = "Google currency conversion error";
	$lang['equip_view_0026'] = "Error";
	$lang['equip_view_0027'] = "General Error";
	$lang['equip_view_0028'] = "No results";
	$lang['equip_view_0029'] = "Too many results (max = 500)";
	$lang['equip_view_0030'] = "Please close this window and try again";
  //search console for equipment and tools:
  $lang['equip_view_0031'] = "Equipment and Tools";
  //Blue buttons at the top
  $lang['equip_view_0032'] = "Show";
  $lang['equip_view_0033'] = "Reset";
  //Where we are
  $lang['equip_view_0034'] = "Search Console";
  //search parameter labels:
  $lang['equip_view_0035'] = "Search String";
  $lang['equip_view_0036'] = "Search Fields";
  $lang['equip_view_0037'] = "Brand";
  $lang['equip_view_0038'] = "Model";
  $lang['equip_view_0039'] = "Serial";
  $lang['equip_view_0040'] = "Description";
  $lang['equip_view_0041'] = "ID";
  $lang['equip_view_0042'] = "Results per page";
  //this list type if to ask users if they want to list equipment or tools:
  $lang['equip_view_0043'] = "List Type";
  $lang['equip_view_0044'] = "Equipment";
  $lang['equip_view_0045'] = "Tools";
  //the link that allows users to open the window that shows the current search parameters
  $lang['equip_view_0046'] = "Current Parameters";
  //we're on the functional locations tab bow
  $lang['equip_view_0047'] = "Functional Locations";
  $lang['equip_view_0048'] = "Show as target FL";
  $lang['equip_view_0049'] = "Show as Installation FL";
  //now on the supplier tab
  $lang['equip_view_0050'] = "Supplier";
  $lang['equip_view_0051'] = "List only items by the following supplier";
  //first tab for inventory selections:
  $lang['equip_view_0052'] = "Inventory I";
  //Users want to search only for...
  $lang['equip_view_0053'] = "List only";
  $lang['equip_view_0054'] = "Consumables";
  $lang['equip_view_0055'] = "Non-consumables";
  $lang['equip_view_0056'] = "Items with approvals pending";
  $lang['equip_view_0057'] = "Items below reordering level";
  $lang['equip_view_0058'] = "Items that are not available in stock";
  //Users want to search only for...
  $lang['equip_view_0059'] = "Equipment Containers";
  $lang['equip_view_0060'] = "Show all";
  $lang['equip_view_0061'] = "Containers only";
  $lang['equip_view_0062'] = "Containers & contents";
  $lang['equip_view_0063'] = "All container contents";
  $lang['equip_view_0064'] = "Items not on containers";
  $lang['equip_view_0065'] = "Specific container contents";
  $lang['equip_view_0066'] = "Enter container IDs separated by commas";
  //second tab for inventory selections:
  $lang['equip_view_0067'] = "Inventory II";
  $lang['equip_view_0068'] = "List equipment that";
  $lang['equip_view_0069'] = "show all";
  $lang['equip_view_0070'] = "show all except inactive";
  $lang['equip_view_0071'] = "is installed";
  $lang['equip_view_0072'] = "is in storage";
  $lang['equip_view_0073'] = "is under repair";
  $lang['equip_view_0074'] = "is in calibration";
  $lang['equip_view_0075'] = "is inactive";
  $lang['equip_view_0076'] = "Storage Location";
  //ok, now we are on the table side.
  //the 3 buttons at the top, just before the results table:
  $lang['equip_view_0077'] = "Upload";
  $lang['equip_view_0078'] = "Equipment";
  $lang['equip_view_0079'] = "Tool";
  //now we go to the filter add and edit section
  $lang['equip_view_0080'] = "Hide this window";
  $lang['equip_view_0081'] = "Create new";
  $lang['equip_view_0082'] = "Enter new filter name";
  $lang['equip_view_0083'] = "Set as default on";
  $lang['equip_view_0084'] = "FL details";
  $lang['equip_view_0085'] = "Search console";
  //this is the label on the button
  $lang['equip_view_0086'] = "Save";
  $lang['equip_view_0087'] = "Edit existing";
  $lang['equip_view_0088'] = "Choose";
  $lang['equip_view_0089'] = "Delete";
  $lang['equip_view_0090'] = "Enter new name on the save new text field on the left";
  $lang['equip_view_0091'] = "Edit name";
  $lang['equip_view_0092'] = "Current defaults";
  $lang['equip_view_0093'] = "none";
  //label on the button on the edit side
  $lang['equip_view_0094'] = "Edit";
  //now the text on the windows that open to show search parameters. First the search filter parameters:
  $lang['equip_view_0095'] = "Search Filter Parameters";
  $lang['equip_view_0096'] = "Search String";
  $lang['equip_view_0097'] = "Results per Page";
  $lang['equip_view_0098'] = "Search Brand";
  $lang['equip_view_0099'] = "Search Model";
  $lang['equip_view_0100'] = "Search Serial";
  $lang['equip_view_0101'] = "Search Description";
  $lang['equip_view_0102'] = "Search ID";
  $lang['equip_view_0103'] = "Supplier";
  $lang['equip_view_0104'] = "Show Not Available";
  $lang['equip_view_0105'] = "Show Consumables Only";
  $lang['equip_view_0106'] = "Show Non-Consumables Only";
  $lang['equip_view_0107'] = "Show Pending Approval Only";
  $lang['equip_view_0108'] = "Show Below Minimum Only";
  $lang['equip_view_0109'] = "Storage 1";
  $lang['equip_view_0110'] = "Storage 2";
  $lang['equip_view_0111'] = "Storage 3";
  $lang['equip_view_0112'] = "Containers";
  $lang['equip_view_0113'] = "Specific Container List";
  $lang['equip_view_0114'] = "List Type";
  $lang['equip_view_0115'] = "Item status";
  $lang['equip_view_0116'] = "FL Search";
  $lang['equip_view_0117'] = "Plant";
  //Now the window that shows the same information as before BUT for the current chosen parameters
  //the text is the same as before, so no need to repeat
  $lang['equip_view_0118'] = "Search Parameters";
  //as in FL level
  $lang['equip_view_0119'] = "Level";
  //The add new FL screen:
  $lang['equip_view_0120'] = "Add New";
  $lang['equip_view_0121'] = "Equipment";
  $lang['equip_view_0122'] = "Tool";
  $lang['equip_view_0123'] = "The usergroup you belong to cannot add new equipment";
  $lang['equip_view_0124'] = "The usergroup you belong to cannot add new tools";
  $lang['equip_view_0125'] = "Target FL";
  $lang['equip_view_0126'] = "Created by";
  $lang['equip_view_0127'] = "Creation date";
  $lang['equip_view_0128'] = "Current status";
  $lang['equip_view_0129'] = "in storage";
  $lang['equip_view_0130'] = "in service";
  $lang['equip_view_0131'] = "in repair";
  $lang['equip_view_0132'] = "in calibration";
  $lang['equip_view_0133'] = "inactive";
  $lang['equip_view_0134'] = "Since";
  $lang['equip_view_0135'] = "Type";
  $lang['equip_view_0136'] = "Consumable";
  $lang['equip_view_0137'] = "You place non-consumable equipment onto containers so you can assess overall quantities and consumption";
  $lang['equip_view_0138'] = "Container";
  //section1 on add equipment form:
  $lang['equip_view_0139'] = "Properties";
  $lang['equip_view_0140'] = "Brand";
  $lang['equip_view_0141'] = "Required";
  $lang['equip_view_0142'] = "Serial number";
  $lang['equip_view_0143'] = "Model";
  //our favorite that we keep repeating:
  $lang['equip_view_0144'] = "Assignment Options";
  //don't forget this means plant as in "production unit" not as flower
  $lang['equip_view_0145'] = "Choose Plant";
  $lang['equip_view_0146'] = "select";
  $lang['equip_view_0147'] = "Choose Department";
  $lang['equip_view_0148'] = "select above";
  $lang['equip_view_0149'] = "Defaults if none selected above";
  $lang['equip_view_0150'] = "Plant";
  $lang['equip_view_0151'] = "Department";
  //users can add some free text to the equipment they are adding to the system:
  $lang['equip_view_0152'] = "Specs/ Description/ Free Text";
  //we are now going into the financial tab
  $lang['equip_view_0153'] = "Financial";
  $lang['equip_view_0154'] = "Unit Price";
  $lang['equip_view_0155'] = "Enter a number";
  $lang['equip_view_0156'] = "Currency";
  $lang['equip_view_0157'] = "Supplier";
  $lang['equip_view_0158'] = "Purchase Date";
  //this is the label on the refresh data button:
  $lang['equip_view_0159'] = "Refresh";
  $lang['equip_view_0160'] = "Click the refresh button when you add a new supplier to ensure it shows up on the list";
  $lang['equip_view_0161'] = "Inventory";
	//needs to be short, we don't have a lot of space to show written text.
  $lang['equip_view_0162'] = "Current Qty";
  $lang['equip_view_0163'] = "Enter a number";
  $lang['equip_view_0164'] = "Min Qty";
  $lang['equip_view_0165'] = "Set this field to -1 to switch off minimum stock control for this part";
  $lang['equip_view_0166'] = "Min Control Off";
  $lang['equip_view_0167'] = "Order Qty";
  $lang['equip_view_0168'] = "Qty Units";
  $lang['equip_view_0169'] = "Store Location 1";
  $lang['equip_view_0170'] = "Store Location 2";
  $lang['equip_view_0171'] = "Store Location 3";
	//the upload image tab
  $lang['equip_view_0172'] = "Image";
  $lang['equip_view_0173'] = "Upload a File";
  $lang['equip_view_0174'] = "Link a File";
  $lang['equip_view_0175'] = "Allowed file types";
  $lang['equip_view_0176'] = "gif | jpg | png (Max 2MB)";
	//From this "or" that. Keep it as short as possible
  $lang['equip_view_0177'] = "OR";
  $lang['equip_view_0178'] = "Full link to external file (http://...)";
	//URL universal resouce locator, means the web destination a piece of text links to
  $lang['equip_view_0179'] = "Valid URL required";
  $lang['equip_view_0180'] = "This option saves you server space and will override any uploaded file";
	//buttons at the bottom
	$lang['equip_view_0181'] = "Save";
	$lang['equip_view_0182'] = "Cancel";
	//Handle some of the errors of adding a piece of equipment:
	$lang['equip_view_0183'] = "Incorrect request or no permissions to add";
	//this is a sentence with a link on the middle on the work "here":
	$lang['equip_view_0184'] = "To confirm if you have enough permissions to add you can select your usergroup";
	$lang['equip_view_0185'] = "here";
	$lang['equip_view_0186'] = "and then choose the Equip and Tools tab (requires access rights to module configuration)";
	//end of the sentence
	//NOW we are going to the view of displaying the information about a piece of equipment or tool
	//Should we open a display page for an equipment or for a tool?
	$lang['equip_view_0187'] = "Equipment";
	$lang['equip_view_0188'] = "Tool";
	//Is this equipment inside a container? If yes, show it to the user:
	$lang['equip_view_0189'] = "on container";
	//A type of equipment. This is the same as when we did the add equipment, but must be done again for the sake of flexibility of the
	//future: we may want to change the display page, but not the add page
	$lang['equip_view_0190'] = "Consumable";
	$lang['equip_view_0191'] = "In Service";
	$lang['equip_view_0192'] = "In Storage";
	$lang['equip_view_0193'] = "Under Repair";
	$lang['equip_view_0194'] = "In Calibration";
	$lang['equip_view_0195'] = "Is Inactive";
	$lang['equip_view_0196'] = "Container";
	//this is the text that shows up at the top of the page after a user clicks the "clone" button and we give information that the
	//system is working on it...
	$lang['equip_view_0197'] = "Cloning";
	//This shows on the display page and tells users that the current equipment has usage approval missing
	$lang['equip_view_0198'] = "Approvals Pending";
	//This is the label at the top of the equipment display page that takes the user to the edit page of the current item
	$lang['equip_view_0199'] = "Edit";
	//also at the top of the display page we ask the user if he/ she wants to copy the current item to another new item
	$lang['equip_view_0200'] = "Clone as";
	//what shows up on the clone buttons:
	$lang['equip_view_0201'] = "Equip";
	$lang['equip_view_0202'] = "Tool";
	$lang['equip_view_0203'] = "Container";
	//The sidebar on the display equipment or tool page
	$lang['equip_view_0204'] = "Target FL";
	//the most repeated word
	$lang['equip_view_0205'] = "Plant";
	$lang['equip_view_0206'] = "Installation FL";
	//Link to open the log of what has happened to this tool or piece of equipment
	$lang['equip_view_0207'] = "View Log";
	//This next one is the log of the positions of this equipment. Basically, where has it been installed throughout its life:
	$lang['equip_view_0208'] = "Movement Log";
	//Now we are on the main part of the display equipment screen and we are on the first tab:
	$lang['equip_view_0209'] = "Properties";
	$lang['equip_view_0210'] = "Brand";
	$lang['equip_view_0211'] = "Serial Number";
	$lang['equip_view_0212'] = "Ownership";
	$lang['equip_view_0213'] = "Model";
	$lang['equip_view_0214'] = "Specs/ Description/ Free Text";
	//In case there are no specs/ description...
	$lang['equip_view_0215'] = "None";
	//Now we are on the financial tab:
	$lang['equip_view_0216'] = "Financial";
	$lang['equip_view_0217'] = "Purchase Date";
	$lang['equip_view_0218'] = "Unit Price";
	$lang['equip_view_0219'] = "Currency";
	$lang['equip_view_0220'] = "Supplier";
	$lang['equip_view_0221'] = "Consumable Costs Log";
	$lang['equip_view_0222'] = "No permissions to view consumable equipment costs log";
	//The inventory tab; refers to stock room or spare parts
	$lang['equip_view_0223'] = "Inventory";
	$lang['equip_view_0224'] = "Current Qty";
	$lang['equip_view_0225'] = "Min Qty";
	$lang['equip_view_0226'] = "Means that minimum quantity is not checked";
	$lang['equip_view_0227'] = "Order Qty";
	$lang['equip_view_0228'] = "Qty Units";
	//This next one will have a number appended to the end of it: Storage Location 1, Storage... Do not worry about the number.
	$lang['equip_view_0229'] = "Storage Location";
	//The documentation tab. I use docs to save space, but do not worry too much
	$lang['equip_view_0230'] = "Docs";
	$lang['equip_view_0231'] = "No Linked Files. To add files, go to edit, docs and drag and drop files on the page.";
	//If this is a container item, we need to show the contents:
	$lang['equip_view_0232'] = "Container Contents";
	//As in "general" information
	$lang['equip_view_0233'] = "General";
	$lang['equip_view_0234'] = "Storage";
	$lang['equip_view_0235'] = "Service";
	$lang['equip_view_0236'] = "Repair";
	$lang['equip_view_0237'] = "Calibration";
	$lang['equip_view_0238'] = "Inactive";
	$lang['equip_view_0239'] = "Details";
	//details table headers:
	$lang['equip_view_0240'] = "ID";
	$lang['equip_view_0241'] = "Brand";
	$lang['equip_view_0242'] = "Model";
	//as in serial number, but keep it short, we don;t have much space
	$lang['equip_view_0243'] = "Serial#";
	$lang['equip_view_0244'] = "Status";
	$lang['equip_view_0245'] = "Container is empty ";
	$lang['equip_view_0246'] = "Added by";
	$lang['equip_view_0247'] = "Creation Date";
	$lang['equip_view_0248'] = "Consumable Costs Log";
	$lang['equip_view_0249'] = "In the table below, unit cost refers to the cost that was entered. The average cost is the average between the previous cost and the cost that was entered. The average cost between dates is used on all cost calculations";
	$lang['equip_view_0250'] = "Unit Cost";
	$lang['equip_view_0251'] = "Date (UTC)";
	$lang['equip_view_0252'] = "Average Unit Cost";
	//refers to "current" price
	$lang['equip_view_0253'] = "Current";
	$lang['equip_view_0254'] = "No costs information available";
	//can also be last 20 results shown
	$lang['equip_view_0255'] = "Last 20 entries shown";
	$lang['equip_view_0256'] = "Export full log";
	$lang['equip_view_0257'] = "Installed";
	$lang['equip_view_0258'] = "Repair";
	$lang['equip_view_0259'] = "Storage";
	$lang['equip_view_0260'] = "Disposed";
	$lang['equip_view_0261'] = "Calibration";
	$lang['equip_view_0262'] = "No FL defined";
	$lang['equip_view_0263'] = "Containers, tools and consumables do not have movement logs";
	$lang['equip_view_0264'] = "Date";
	$lang['equip_view_0265'] = "WO";
	$lang['equip_view_0266'] = "User";
	$lang['equip_view_0267'] = "Changes";
	$lang['equip_view_0268'] = "No entries found";
	$lang['equip_view_0269'] = "No such equipment/ tool id";
?>
