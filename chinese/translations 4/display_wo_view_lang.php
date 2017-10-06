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
$lang['display_wo_view_0001'] = "保存";
//warning in case the current work order has been set to complete
//we should now warn the user that it needs an extra step to complete the process (close the WO)
$lang['display_wo_view_0002'] = "此訂單設置為";
$lang['display_wo_view_0003'] = "完成";
$lang['display_wo_view_0004'] = "如果工作已經驗證並被接收，您可能希望其狀態更改為";
$lang['display_wo_view_0005'] = "關閉";
$lang['display_wo_view_0006'] = "點擊這裡";
$lang['display_wo_view_0007'] = "了解更多";
//after the changes are made to the Wo, what would the user like to do next?
$lang['display_wo_view_0008'] = "接下來您想要做什麼?";
$lang['display_wo_view_0009'] = "返回當前工單";
$lang['display_wo_view_0010'] = "返回維護計劃編輯頁面";
$lang['display_wo_view_0011'] = "轉到WO搜索控制台";
$lang['display_wo_view_0012'] = "轉到您的信息中心";
//top of the WO details page:
$lang['display_wo_view_0013'] = "WO詳細資料";
//we did not find the work order specified:
$lang['display_wo_view_0014'] = "沒有此訂單號碼";
//Maybe user has no permissions to access the WO
$lang['display_wo_view_0015'] = "您無權訪問該WO";
$lang['display_wo_view_0016'] = "這些信息是由您的組織請求中的逗號CMMS管理員手動禁用的，或者是系統用戶在信息仍然處於工作請求階段時被禁用的";
$lang['display_wo_view_0017'] = "工單";
$lang['display_wo_view_0018'] = "工作請求";
$lang['display_wo_view_0019'] = "MPlan #";
$lang['display_wo_view_0020'] = "目標FL";
$lang['display_wo_view_0021'] = "工廠";
$lang['display_wo_view_0022'] = "未註明";
$lang['display_wo_view_0023'] = "FL詳細資料";
$lang['display_wo_view_0024'] = "更改FL";
//bottom left of the WO diplay page:
$lang['display_wo_view_0025'] = "標籤";
$lang['display_wo_view_0026'] = "友善列印";
$lang['display_wo_view_0027'] = "查看WO日誌";
//options that shows when WO are at WR stage and allows for users to disable them
$lang['display_wo_view_0028'] = "禁用此工作請求";
$lang['display_wo_view_0029'] = "創建";
$lang['display_wo_view_0030'] = "創建日期";
$lang['display_wo_view_0031'] = "用戶列表";
$lang['display_wo_view_0032'] = "分配到";
$lang['display_wo_view_0033'] = "無權分配給其他用戶";
$lang['display_wo_view_0034'] = "完成";
$lang['display_wo_view_0035'] = "完成日期";
$lang['display_wo_view_0036'] = "關閉";
$lang['display_wo_view_0037'] = "關閉日期";
$lang['display_wo_view_0038'] = "部門";
$lang['display_wo_view_0039'] = "類型";
$lang['display_wo_view_0040'] = "優先";
$lang['display_wo_view_0041'] = "狀態";
$lang['display_wo_view_0042'] = "狀態只能被分配給Mplan源訂單";
$lang['display_wo_view_0043'] = "分配";
//if this is a maintenance plan source work orders, users can change the summary
$lang['display_wo_view_0044'] = "編輯摘要";
//if not, just show the non-editable summary
$lang['display_wo_view_0045'] = "摘要";
//Mode labels - color labels that show at the middle of the WO and tell users what viewing mode they are in
$lang['display_wo_view_0046'] = "編輯模式";
$lang['display_wo_view_0047'] = "MPlan源";
$lang['display_wo_view_0048'] = "逾期";
$lang['display_wo_view_0049'] = "截止日期是";
$lang['display_wo_view_0050'] = "截止日期未設置";
$lang['display_wo_view_0051'] = "只讀模式";
//change links on the bottom right of work order. the ones that open diferent sections on the work order
$lang['display_wo_view_0052'] = "描述";
$lang['display_wo_view_0053'] = "報告";
$lang['display_wo_view_0054'] = "設備";
$lang['display_wo_view_0055'] = "任務";
$lang['display_wo_view_0056'] = "工具";
$lang['display_wo_view_0057'] = "成本";
$lang['display_wo_view_0058'] = "截止日期";
$lang['display_wo_view_0059'] = "文件";
//end of the section links
//if maintenance plan source, we can edit the description:
$lang['display_wo_view_0060'] = "編輯描述";
//inside the reports section
$lang['display_wo_view_0061'] = "未添加報告";
//if maintenance plan source WO we allow deletion of files added to the reports
$lang['display_wo_view_0062'] = "刪除";
$lang['display_wo_view_0063'] = "添加報告";
$lang['display_wo_view_0064'] = "剩下2000字符";
//on the equipment list - these are the table headers:
$lang['display_wo_view_0065'] = "編號";
$lang['display_wo_view_0066'] = "數量";
$lang['display_wo_view_0067'] = "商標";
$lang['display_wo_view_0068'] = "模型";
$lang['display_wo_view_0069'] = "狀態";
$lang['display_wo_view_0070'] = "讚同";
//if this is a mplan source WO, the equipment on the list is for reference only:
$lang['display_wo_view_0071'] = "僅表示維護計劃建議，無貨物出入記錄";
$lang['display_wo_view_0072'] = "**提示**CMMS中的設備和零件的移動需要由管理員批准，如果您弄錯了並且不想在上表中使用設備，您可以在設備屬性頁面取消移動";
$lang['display_wo_view_0073'] = "沒有添加設備";
$lang['display_wo_view_0074'] = "添加設備";
$lang['display_wo_view_0075'] = "您必須保存工單以使這裡所做的更改變成永久性的";
//steps to add equipment usage to a work order:
$lang['display_wo_view_0076'] = "1:零件編號，商標，描述或模型";
$lang['display_wo_view_0077'] = "結果";
$lang['display_wo_view_0078'] = "狀態";
$lang['display_wo_view_0079'] = "存儲數量";
$lang['display_wo_view_0080'] = "在每個結果上使用鼠標光標來動態顯示當前的狀態和數量";
$lang['display_wo_view_0081'] = "2:此工單將會將選定的部件狀態更改為";
$lang['display_wo_view_0082'] = "維護計劃源WOs不需要此步驟";
$lang['display_wo_view_0083'] = "安裝";
$lang['display_wo_view_0084'] = "維修中";
$lang['display_wo_view_0085'] = "校準";
$lang['display_wo_view_0086'] = "儲存中";
$lang['display_wo_view_0087'] = "棄置";
$lang['display_wo_view_0088'] = "3:此工單將影響以下項目的數量";
$lang['display_wo_view_0089'] = "添加到使用列表";
$lang['display_wo_view_0090'] = "4:零件使用列表";
$lang['display_wo_view_0091'] = "移動";
$lang['display_wo_view_0092'] = "信息";
$lang['display_wo_view_0093'] = "**提示**當更換非消耗性字段組件時，將移動的字段組件安裝到一行（設置為修復，恢復存儲或處理），並將要安裝的組件添加到另一行，然後系統可以正確跟蹤零件的使用情況）";
//mplan means maintenance plan. # means "number"
$lang['display_wo_view_0094'] = "**提示**以下字段中列出的部分將鏈接到Mplan#";
$lang['display_wo_view_0095'] = "並顯示為生成的訂單的推薦備件";
//on the tasks section now
$lang['display_wo_view_0096'] = "總任務數";
$lang['display_wo_view_0097'] = "總工作時間";
$lang['display_wo_view_0098'] = "小時";
//header on the task list table
$lang['display_wo_view_0099'] = "行動";
$lang['display_wo_view_0100'] = "任務類型";
$lang['display_wo_view_0101'] = "持續時間";
$lang['display_wo_view_0102'] = "用戶";
$lang['display_wo_view_0103'] = "沒有添加任務";
$lang['display_wo_view_0104'] = "添加或編輯任務";
$lang['display_wo_view_0105'] = "您必須保存工單，以使這裡所做的更改變成永久性";
$lang['display_wo_view_0106'] = "導入任務列表";
$lang['display_wo_view_0107'] = "輸入名稱>3個字符";
$lang['display_wo_view_0108'] = "添加";
//The thing to be done on a task list:
$lang['display_wo_view_0109'] = "行動";
$lang['display_wo_view_0110'] = "任務類型";
$lang['display_wo_view_0111'] = "工人/小時";
$lang['display_wo_view_0112'] = "用戶";
//instructs users to enter time in hours
$lang['display_wo_view_0113'] = "時間(小時)";
$lang['display_wo_view_0114'] = "點擊添加行到表";
$lang['display_wo_view_0115'] = "總工作時間（小時））";
//this next one is a bit cryptic, I know. It's (T)otal (J)ob (D)uration needs to be kept short because we don't have much room to display it
$lang['display_wo_view_0116'] = "總工作時間";
$lang['display_wo_view_0117'] = "用戶";
$lang['display_wo_view_0118'] = "比率";
//this next one ends weirdly but because the sentence will continue after the please... on 0120
$lang['display_wo_view_0119'] = "沒有定義任務類型，請";
$lang['display_wo_view_0120'] = "添加至少一個任務類型";
$lang['display_wo_view_0121'] = "繼續";
//tools section
//there are the table header labels
$lang['display_wo_view_0122'] = "編號";
$lang['display_wo_view_0123'] = "商標";
$lang['display_wo_view_0124'] = "模型";
$lang['display_wo_view_0125'] = "系列#";
$lang['display_wo_view_0126'] = "數量";
$lang['display_wo_view_0127'] = "沒有添加工具";
$lang['display_wo_view_0128'] = "添加或編輯工具";
//I know, repeat, repeat, repeat
$lang['display_wo_view_0129'] = "您必須保存工單，以使這裡所做的更改變成永久性";
$lang['display_wo_view_0130'] = "導入工具（輸入商標或型號）";
$lang['display_wo_view_0131'] = "添加";
$lang['display_wo_view_0132'] = "勞動成本";
$lang['display_wo_view_0133'] = "總勞動成本";
$lang['display_wo_view_0134'] = "並非所有的任務都已分配，或小時費用缺失";
$lang['display_wo_view_0135'] = "沒有任務信息";
//the following refers to payment rates to the technicians
$lang['display_wo_view_0136'] = "沒有定義費用";
$lang['display_wo_view_0137'] = "無權查看";
$lang['display_wo_view_0138'] = "設備成本";
$lang['display_wo_view_0139'] = "耗材";
$lang['display_wo_view_0140'] = "非耗材";
$lang['display_wo_view_0141'] = "沒有設備移動";
$lang['display_wo_view_0142'] = "無權查看";
//this sentence continues to show the deadline date
$lang['display_wo_view_0143'] = "工作將在末期完成";
$lang['display_wo_view_0144'] = "無權更改截止日期";
$lang['display_wo_view_0145'] = "在維護計劃源工單上無法設定截止日期";
$lang['display_wo_view_0146'] = "截止日期未設定";
$lang['display_wo_view_0147'] = "允許文件類型:  gif | jpg | png | txt | doc | docx | pdf | xls | xlsx | wav (最多2MB)";
//the http:// part is to show users they need to enter that part of teh URI
$lang['display_wo_view_0148'] = "完整鏈接到外部文件 (http://...)";
$lang['display_wo_view_0149'] = "需要有效的URL";
$lang['display_wo_view_0150'] = "此選項可以節省您的服務器空間，並覆蓋任何上傳的文件";
//the two buttons at the bottom
$lang['display_wo_view_0151'] = "保存";
$lang['display_wo_view_0152'] = "取消";
//the windows that open for log:
$lang['display_wo_view_0153'] = "訂單日誌";
//table headers for the WO logs:
$lang['display_wo_view_0154'] = "用戶";
$lang['display_wo_view_0155'] = "日期/時間";
$lang['display_wo_view_0156'] = "描述";
//prienter friendly view:
//there will be a repeat of a lot of items but we must write them again for flexibility in the future.
$lang['display_wo_view_0157'] = "WO詳細信息";
$lang['display_wo_view_0158'] = "沒有此訂單號碼";
$lang['display_wo_view_0159'] = "WO #";
$lang['display_wo_view_0160'] = "mplan #的來源";
$lang['display_wo_view_0161'] = "摘要";
$lang['display_wo_view_0162'] = "描述";
$lang['display_wo_view_0163'] = "分配給";
$lang['display_wo_view_0164'] = "部門";
$lang['display_wo_view_0165'] = "類型";
$lang['display_wo_view_0166'] = "優先";
$lang['display_wo_view_0167'] = "狀態";
$lang['display_wo_view_0168'] = "工廠";
$lang['display_wo_view_0169'] = "工作報告";
$lang['display_wo_view_0170'] = "報告";
$lang['display_wo_view_0171'] = "日期";
$lang['display_wo_view_0172'] = "任務列表";
$lang['display_wo_view_0173'] = "總任務數";
$lang['display_wo_view_0174'] = "預計工作時間";
$lang['display_wo_view_0175'] = "小時";
$lang['display_wo_view_0176'] = "任務類型";
$lang['display_wo_view_0177'] = "持續時間";
$lang['display_wo_view_0178'] = "用戶";
$lang['display_wo_view_0179'] = "設備";
$lang['display_wo_view_0180'] = "編號";
//means quantity and it's only to keep it small to fit the table
$lang['display_wo_view_0181'] = "數量";
$lang['display_wo_view_0182'] = "商標";
$lang['display_wo_view_0183'] = "模型";
$lang['display_wo_view_0184'] = "日期";
$lang['display_wo_view_0185'] = "用戶";
$lang['display_wo_view_0186'] = "狀態";
$lang['display_wo_view_0187'] = "讚同";
$lang['display_wo_view_0188'] = "刪除";
//really start with non-capital letter:
$lang['display_wo_view_0189'] = "以上是維護計劃建議";
$lang['display_wo_view_0190'] = "工具";
$lang['display_wo_view_0191'] = "標號";
$lang['display_wo_view_0192'] = "商標";
$lang['display_wo_view_0193'] = "模型";
$lang['display_wo_view_0194'] = "系列#";
$lang['display_wo_view_0195'] = "數量";
$lang['display_wo_view_0196'] = "創建";
$lang['display_wo_view_0197'] = "完成";
$lang['display_wo_view_0198'] = "關閉";
$lang['display_wo_view_0199'] = "無";
?>
