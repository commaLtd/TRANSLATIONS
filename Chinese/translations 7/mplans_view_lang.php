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
$lang['mplans_view_0000'] = "維護計劃";
$lang['mplans_view_0001'] = "保存";
$lang['mplans_view_0002'] = "接下來您想做些什麼?";
$lang['mplans_view_0003'] = "查看維護計劃";
$lang['mplans_view_0004'] = "編輯維護計劃";
$lang['mplans_view_0005'] = "返回維護計劃列表";
$lang['mplans_view_0006'] = "返回您的信息中心";
//now the creation of a maintenance plan section:
$lang['mplans_view_0007'] = "創建保養計劃";
$lang['mplans_view_0008'] = "編輯保養計劃";
$lang['mplans_view_0009'] = "返回搜索控制台";
$lang['mplans_view_0010'] = "返回查看";
$lang['mplans_view_0011'] = "編輯";
$lang['mplans_view_0012'] = "日誌";
//Search console
$lang['mplans_view_0013'] = "保養計劃";
$lang['mplans_view_0014'] = "要將推薦的工具和/或設備和/或任務列表添加到一個維護計劃中，您需要先創建它，然後在編輯模式下返回到它來更改源WO";
$lang['mplans_view_0015'] = "將推薦的工具和/或設備和/或任務列表添加到維護計劃中，編輯源WO並在那裡添加該信息";
//tells users what is the source work order for the current maintenance plan:
$lang['mplans_view_0016'] = "源是WO";
$lang['mplans_view_0017'] = "視圖";
$lang['mplans_view_0018'] = "摘要";
$lang['mplans_view_0019'] = "輸入常規信息";
$lang['mplans_view_0020'] = "輸入描述";
//maximum of 100 characters
$lang['mplans_view_0021'] = "最多100個字符";
$lang['mplans_view_0022'] = "要求";
//part of a question: generate in active or paused mode
$lang['mplans_view_0023'] = "生成";
$lang['mplans_view_0024'] = "活躍或";
$lang['mplans_view_0025'] = "暫停模式";
$lang['mplans_view_0026'] = "刪除源工單";
//refers to the way maintenance plans are triggered
$lang['mplans_view_0027'] = "選擇觸發方式";
$lang['mplans_view_0028'] = "基於時間";
$lang['mplans_view_0029'] = "基於計數器";
$lang['mplans_view_0030'] = "基於時間和計數器（以先到者為準）";
$lang['mplans_view_0031'] = "時間觸發選項";
$lang['mplans_view_0032'] = "開始日期";
//Part of a sentence
$lang['mplans_view_0033'] = "生成";
$lang['mplans_view_0034'] = "一旦";
$lang['mplans_view_0035'] = "開始日期";
$lang['mplans_view_0036'] = "每週";
$lang['mplans_view_0037'] = "每";

$lang['mplans_view_0038'] = "週一";
$lang['mplans_view_0039'] = "週二";
$lang['mplans_view_0040'] = "週三";
$lang['mplans_view_0041'] = "週四";
$lang['mplans_view_0042'] = "週五";
$lang['mplans_view_0043'] = "週六";
$lang['mplans_view_0044'] = "週日";
//Another sentence
$lang['mplans_view_0045'] = "生成在";
$lang['mplans_view_0046'] = "7天，每週";
$lang['mplans_view_0047'] = "週期";
$lang['mplans_view_0048'] = "輸入週週期（默認=1）";
$lang['mplans_view_0049'] = "您必須輸入正整數";
//Generate monthly on day 4 of every X months
$lang['mplans_view_0050'] = "每月";
$lang['mplans_view_0051'] = "在一天";
$lang['mplans_view_0052'] = "每一個";
$lang['mplans_view_0053'] = "月";
//generate yearly every X years
$lang['mplans_view_0054'] = "每年";
$lang['mplans_view_0055'] = "每";
$lang['mplans_view_0056'] = "年";
$lang['mplans_view_0057'] = "結束日期";
$lang['mplans_view_0058'] = "留空，沒有結束日期";
$lang['mplans_view_0059'] = "計數器觸發選項";
$lang['mplans_view_0060'] = "當前計數器值為";
//Another sentence
$lang['mplans_view_0061'] = "每個問題";
//Field validation instructions
$lang['mplans_view_0062'] = "僅整數（不能為0）";
$lang['mplans_view_0063'] = "計數器單位，從";
$lang['mplans_view_0064'] = "僅整數";
$lang['mplans_view_0065'] = "計數器基數是分配給源工單的功能位置的計數器值";
//Button at the bottom
$lang['mplans_view_0066'] = "創建維護計劃";
//Shows while we are saving information
$lang['mplans_view_0067'] = "保存";
$lang['mplans_view_0068'] = "WO不存在";
$lang['mplans_view_0069'] = "無結果!";
//the table on the search console for mainantenance plans
$lang['mplans_view_0070'] = "總數";
$lang['mplans_view_0071'] = "出口";
//table headers:
$lang['mplans_view_0072'] = "狀態";
$lang['mplans_view_0073'] = "描述";
//frequency means how ofter the maintenance plans are triggered, e.g. yearly, monthly, etc
$lang['mplans_view_0074'] = "頻率";
//The header that shows the "last" work order that was generated from this maintenance plan
$lang['mplans_view_0075'] = "最後";
//For now, keep the T and C regarless of the translation. The system will call it T and C by itself
$lang['mplans_view_0076'] = "T=基於時間, C=基於計數器";
//the next date for when the maintenance plan will trigger a WO
$lang['mplans_view_0077'] = "下一個";
$lang['mplans_view_0078'] = "基於時間";
$lang['mplans_view_0079'] = "基於計數器";
//Tells the user the maintenance has "ended". It doesn't mean complete. It means ended or finished.
$lang['mplans_view_0080'] = "截至";
//Active is like "running". it is the opposite of paused.
$lang['mplans_view_0081'] = "活躍的";
$lang['mplans_view_0082'] = "已暫停";
$lang['mplans_view_0083'] = "每";
$lang['mplans_view_0084'] = "計數器週期";
$lang['mplans_view_0085'] = "自上次編輯後從未運行過";
//means that the next work order will come out "on counter" value:
$lang['mplans_view_0086'] = "在計數器上";
//Bottom of the table to "check all items"
$lang['mplans_view_0087'] = "檢查所有";
//after we check them all, there are 3 options. With seledted... do something
$lang['mplans_view_0088'] = "隨選";
$lang['mplans_view_0089'] = "設置為已暫停";
$lang['mplans_view_0090'] = "設置為運行中";
//this user has no access to the batch change
$lang['mplans_view_0091'] = "信息：無批次更改權限";
//buttons at the top of the search console on the left side
//all search consoles have these buttons
$lang['mplans_view_0092'] = "顯示";
$lang['mplans_view_0093'] = "重設";
//this is the first tab label: the one that contains general search paramters:
$lang['mplans_view_0094'] = "常規";
//when we enter a search string, what fields do we want to match to search for results?
$lang['mplans_view_0095'] = "搜索字段";
$lang['mplans_view_0096'] = "編號";
$lang['mplans_view_0097'] = "描述";
$lang['mplans_view_0098'] = "每頁結果";
//the next tab:
$lang['mplans_view_0099'] = "狀態和頻率";
//what status are we looking for?
$lang['mplans_view_0100'] = "顯示狀態";
//following are the options for the status
$lang['mplans_view_0101'] = "活躍的";
$lang['mplans_view_0102'] = "已暫停";
$lang['mplans_view_0103'] = "截至";
//what frequency are we looking for?
$lang['mplans_view_0104'] = "顯示頻率";
$lang['mplans_view_0105'] = "基於時間";
$lang['mplans_view_0106'] = "基於計數器";
$lang['mplans_view_0107'] = "綜合";
//Now the "department" tab label:
$lang['mplans_view_0108'] = "部門";
//and the option inside:
$lang['mplans_view_0109'] = "按部門過濾";
//now the "forecast" tab
$lang['mplans_view_0110'] = "預測";
//and the options inside:
$lang['mplans_view_0111'] = "無";
$lang['mplans_view_0112'] = "接下來的7天（週）";
$lang['mplans_view_0113'] = "接下來的15天";
$lang['mplans_view_0114'] = "接下來的31天(月)";
$lang['mplans_view_0115'] = "接下來的3x31天(3個月)";
$lang['mplans_view_0116'] = "接下來的6x31天(6個月)";
//moving on to the section that takes care of the edit of maintenance plans:
//source is WO #3888
$lang['mplans_view_0117'] = "源是WO";
$lang['mplans_view_0118'] = "查看";
$lang['mplans_view_0119'] = "常規信息";
$lang['mplans_view_0120'] = "更改說明";
$lang['mplans_view_0121'] = "最多100個字符";
$lang['mplans_view_0122'] = "更改狀態";
$lang['mplans_view_0123'] = "活躍模式";
$lang['mplans_view_0124'] = "暫停模式";
$lang['mplans_view_0125'] = "創建";
$lang['mplans_view_0126'] = "創建日期";
$lang['mplans_view_0127'] = "最後編輯";
$lang['mplans_view_0128'] = "無信息";
$lang['mplans_view_0129'] = "最後編輯日期";
$lang['mplans_view_0130'] = "選擇觸發方式";
$lang['mplans_view_0131'] = "沒有最後日期";
$lang['mplans_view_0132'] = "刪除維護計劃";
$lang['mplans_view_0133'] = "您有權限編輯，但沒權限刪除此維護計劃";
$lang['mplans_view_0134'] = "保存更改";
$lang['mplans_view_0135'] = "取消";
$lang['mplans_view_0136'] = "保存中";
$lang['mplans_view_0137'] = "錯誤：無此WO號碼";
//display maintenance plan information:
$lang['mplans_view_0138'] = "時間表";
//we will build a string now. Starts <start date> and repeats weekly on...
$lang['mplans_view_0139'] = "開始";
$lang['mplans_view_0140'] = "每週";
$lang['mplans_view_0141'] = "並重複";
$lang['mplans_view_0142'] = "一旦";
$lang['mplans_view_0143'] = "每月";
$lang['mplans_view_0144'] = "每天";
$lang['mplans_view_0145'] = "每";
$lang['mplans_view_0146'] = "每年從開始日期開始";
$lang['mplans_view_0147'] = "直到";
//for counter based maintenance plans, issued every xxxx counter cycles starting from
$lang['mplans_view_0148'] = "每發出";
$lang['mplans_view_0149'] = "計數器週期從";
$lang['mplans_view_0150'] = "當前關聯的FL計數器值為";
//maintenance plan log window:
$lang['mplans_view_0151'] = "最後30個工單創建";
//table headers (GMT is greewich meridian time)
$lang['mplans_view_0152'] = "日期(GMT)";
//changes
$lang['mplans_view_0153'] = "更改";
$lang['mplans_view_0154'] = "沒有日誌信息";
$lang['mplans_view_0155'] = "該維護計劃不存在，它被刪除了嗎?";
?>
