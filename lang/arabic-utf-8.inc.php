<?php
/* $Id$ */

/**
 * Original translation to Arabic by Fisal <fisal77 at hotmail.com>
 * Update by Tarik kallida <kallida at caramail.com>
 * Final Update on November 25, 2003 by Ossama Khayat <okhayat at yahoo.com>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'rtl'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'Tahoma, verdana, arial, helvetica, sans-serif';
$right_font_family = '"Windows UI", Tahoma, verdana, arial, helvetica, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
//$byteUnits = array('ÈÇٌÊ', 'نٌهيÈÇٌÊ', 'ځٌضÇÈÇٌÊ', 'ÛٌÛÇÈÇٌÊ');
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('ÇهژطÏ', 'ÇهشËوٌو', 'ÇهËهÇËÇز', 'ÇهژعÈگÇز', 'ÇهÎځٌـ', 'ÇهضځگÉ', 'ÇهـÈÊ');
$month = array('ٌوÇٌع', 'لÈعÇٌع', 'ځÇعـ', 'ژÈعٌه', 'ځÇٌي', 'ٌيوٌي', 'ٌيهٌي', 'ژÛـكـ', 'ـÈÊځÈع', 'ژنÊيÈع', 'ويلځÈع', 'ÏٌـځÈع');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y ÇهـÇگÉ %H:%M';

$timespanfmt = '%s ٌيځؤ %s ـÇگÉؤ %s ÏمٌمÉ ي%s ËÇوٌÉ';

$strAPrimaryKey = 'همÏ ژّقٌل ÇهځلÊÇط ÇهژـÇـٌ لٌ %s';
$strAbortedClients = 'ژهÛٌ';
$strAbsolutePathToDocSqlDir = 'ÇهعضÇز نÊÇÈÉ ÇهځـÇع Çهځكهم گهً ÎÇÏځ ÇهÔÈنÉ شهً Ïهٌه docSQL';
$strAccessDenied = 'Ûٌع ځـځيط';
$strAccessDeniedExplanation = 'طÇيه phpMyAdmin ÇهÇÊفÇه ÈÎÇÏځ MySQLؤ يعلق ÇهÎÇÏځ ÇهÇÊفÇه. گهٌن ژو ÊÊطمم ځو ÇهځـÊقٌلؤ ژي Çـځ ÇهځـÊÎÏځ ينهځÉ Çهځعيع لٌ ځهل ÇهشگÏÇÏ config.inc.php يÊÊژنÏ ژوىÇ ځكÇÈمÉ ههځگهيځÇÊ ÇهځگكÇÉ شهٌن ځو مÈه Çهځـسيه گو ÎÇÏځ MySQL.';
$strAction = 'ÇهگځهٌÉ';
$strAddAutoIncrement = 'ژقل مٌځÉ AUTO_INCREMENT';
$strAddConstraints = 'ژقل مٌيÏÇٍ';
$strAddDeleteColumn = 'شقÇلى/طㄓل گځيÏ طمه';
$strAddDeleteRow = 'شقÇلى/طㄓل فل ـضه';
$strAddDropDatabase = 'ژقل ژي Çطㄓل مÇگÏÉ ÈٌÇوÇÊ';
$strAddIntoComments = 'ژقل شهً ÇهځهÇطÙÇÊ';
$strAddNewField = 'شقÇلÉ طمه ضÏٌÏ';
$strAddPriv = 'شقÇلÉ شځÊٌÇغ ضÏٌÏ';
$strAddPrivMessage = 'همÏ ژقلÊ شځÊٌÇغ ضÏٌÏ.';
$strAddPrivilegesOnDb = 'شقÇلÉ ÇهفهÇطٌÇÊ گهً مÇگÏÉ ÇهÈٌÇوÇÊ ÇهÊÇهٌÉ';
$strAddPrivilegesOnTbl = 'شقÇلÉ ÇهفهÇطٌÇÊ گهً ÇهضÏيه ÇهÊÇهٌ';
$strAddSearchConditions = 'ژقل Ôعيك ÇهÈطË (ضـځ ځو Çهلمعى "where" clause):';
$strAddToIndex = 'شقÇلى نلىعـ &nbsp;%s&nbsp;فل(Üيل)';
$strAddUser = 'ژقل ځـÊÎÏځ ضÏٌÏ';
$strAddUserMessage = 'همÏ ژقلÊ ځـÊÎÏځ ضÏٌÏ.';
$strAddedColumnComment = 'Êځ شقÇلÉ ÇهÊگهٌم ههگځيÏ';
$strAddedColumnRelation = 'Êځ شقÇلÉ ÇهگهÇمÉ ههگځيÏ';
$strAdministration = 'شÏÇعÉ';
$strAffectedRows = 'فليل ځسËعى:';
$strAfter = 'ÈگÏ %s';
$strAfterInsertBack = 'Çهعضيگ شهً ÇهفلطÉ ÇهـÇÈمÉ';
$strAfterInsertNewInsert = 'شÏÎÇه Êـضٌه ضÏٌÏ';
$strAll = 'Çهنه';
$strAllTableSameWidth = 'ژÙىع نه ÇهضÏيÇه Èولـ Çهگعقر';
$strAlterOrderBy = 'ÊگÏٌه ÊعÊٌÈ ÇهضÏيه ÈÜ';
$strAnIndex = 'همÏ ژّقٌل Çهلىعـ لٌ %s';
$strAnalyzeTable = 'Êطهٌه ÇهضÏيه';
$strAnd = 'ي';
$strAny = 'ژٌ';
$strAnyColumn = 'ژٌ گځيÏ';
$strAnyDatabase = 'ژٌ مÇگÏÉ ÈٌÇوÇÊ';
$strAnyHost = 'ژٌ ځغيÏ';
$strAnyTable = 'ژٌ ضÏيه';
$strAnyUser = 'ژٌ ځـÊÎÏځ';
$strArabic = 'ÇهگعÈٌÉ';
$strArmenian = 'ÇهژعځوٌÉ';
$strAscending = 'ÊفÇگÏٌÇٍ';
$strAtBeginningOfTable = 'لٌ ÈÏÇٌÉ ÇهضÏيه';
$strAtEndOfTable = 'لٌ وىÇٌÉ ÇهضÏيه';
$strAttr = 'ÇهÎيÇف';
$strAutodetect = 'ÇهÊلطف ÇهÊهمÇصٌ';
$strAutomaticLayout = 'ځÙىع ÊهمÇصٌ';

$strBack = 'عضيگ';
$strBaltic = 'ÇهÈهكٌم';
$strBeginCut = 'ÈÏز Çهمف�';
$strBeginRaw = 'ÈÏز ÈٌÇوÇÊ ژفهٌ�É';
$strBinary = 'ËوÇصٌ';
$strBinaryDoNotEdit = 'ËوÇصٌ - هÇÊطععى';
$strBookmarkAllUsers = 'Çـځط هنه ÇهځـÊÎÏځٌو Çهيفيه شهً ىㄓى ÇهگهÇځÉ ÇهځعضگٌÉ';
$strBookmarkDeleted = 'همÏ طّㄓلÊ ÇهگهÇځى Çهځعضگٌى.';
$strBookmarkLabel = 'گهÇځى';
$strBookmarkOptions = 'ÎٌÇعÇÊ ÇهگهÇځÇÊ';
$strBookmarkQuery = 'گهÇځى ځعضگٌى SQL-شـÊگهÇځ';
$strBookmarkThis = 'شضگه گهÇځى ځعضگٌى SQL-شـÊگهÇځ';
$strBookmarkView = 'گعق لمك';
$strBrowse = 'شـÊگعÇق';
$strBrowseForeignValues = 'ÇـÊگعق Çهمٌځ ÇهÛعٌÈÉ';
$strBulgarian = 'ÇهÈهÛÇعٌÉ';
$strBzError = 'هځ ٌـÊكگ phpMyAdmin قÛك نځ� ÇهÈٌÇوÇÊ ÈـÈÈ گكه لٌ ÇځÊÏÇÏ Bz2 لٌ شفÏÇع PHP. ٌّلق�ه ژو ÊÛٌ�ع مٌځÉ Êيضٌى <code>$cfg[\'BZipDump\']</code> لٌ ځهل شگÏÇÏÇÊ phpMyAdmin شهً <code>FALSE</code>. شو نوÊ ÊعٌÏ ÇـÊÎÏÇځ ځغÇٌÇ قÛك Bz2ؤ گهٌن ÈÇهÊطÏٌË شهً شفÏÇع ضÏٌÏ ځو PHP. هځغٌÏ ځو ÇهÊلÇفٌهؤ ژوÙع لٌ Êمعٌع Îهه PHP %s.';
$strBzip = '"bzipped"';

$strCSVOptions = 'ÎٌÇعÇÊ Çهمٌځ ÇهځلفيهÉ ÈليÇفه )CSV(';
$strCannotLogin = 'هÇ ٌځنو ÇهÏÎيه شهً ÎÇÏځ MySQL';
$strCantLoad = 'هÇ ٌځنو معÇزÉ ÇهÇځÊÏÇÏ %sؤ<br />عضÇز ÊژنÏ ځو شگÏÇÏÇÊ PHP.';
$strCantLoadRecodeIconv = 'هځ ٌځنو Êطځٌه iconv ژي شگÇÏÉ ÊÔلٌع ÇهشځÊÏÇÏ ÇهځكهيÈ هÊطيٌه ÔٌلعÉ Çهژطعلؤ ÇهعضÇز شگÏÇÏ PHP هٌـځط ÈÇـÊÎÏÇځ ىㄓى ÇهشځÊÏÇÏÇÊ ژي گكه گځه ÇهÊطيٌه لٌ phpMyAdmin.';
$strCantRenameIdxToPrimary = 'هÇٌځنو ÊÛٌٌع شـځ Çهلىعـ شهً ÇهژـÇـٌ!';
$strCantUseRecodeIconv = 'هÇ ٌځنو ÇـÊÎÏÇځ iconv يهÇ libiconv يهÇ گځهٌÉ recode_string لٌ طٌو ٌطÏÏ ÇهÇځÊÏÇÏ ژوى ځطځ�ه. Êژن�Ï ځو شگÏÇÏÇÊ PHP.';
$strCardinality = 'Cardinality';
$strCarriage = 'شعضÇگ Çهطځيهى: \\r';
$strCaseInsensitive = 'Ûٌع طـÇـ هطÇهÉ Çهژطعل';
$strCaseSensitive = 'طـÇـ هطÇهÉ Çهژطعل';
$strCentralEuropean = 'ژيعيÈÇ Çهيـكً';
$strChange = 'ÊÛٌٌع';
$strChangeCopyMode = 'ژقل Çـځ ځـÊÎÏځ ضÏٌÏ Èولـ ÇهفهÇطٌÇÊ ي...';
$strChangeCopyModeCopy = ' ... ژÈم ÇهمÏٌځ.';
$strChangeCopyModeDeleteAndReload = ' ... شطㄓل ÇهمÏٌځٌو ځو ضÏÇيه ÇهځـÊÎÏځٌو يژگÏ معÇزÉ ÇهفهÇطٌÇÊ ÈگÏ ㄓهن.';
$strChangeCopyModeJustDelete = ' ... شطㄓل ÇهمÏٌځ ځو ضÏÇيه ÇهځـÊÎÏځٌو.';
$strChangeCopyModeRevoke = ' ... ÇـÊگÏ نه ÇهفهÇطٌÇÊ ÇهلگÇهÉ ځو ÇهمÏٌځٌو يÇطㄓىځ ÈگÏ ㄓهن.';
$strChangeCopyUser = 'Ûٌ�ع ځگهيځÇÊ ÇهÏÎيه / شوـÎ Çـځ ځـÊÎÏځ';
$strChangeDisplay = 'ÇÎÊع Çهطمه هشÙىÇعى';
$strChangePassword = 'ÊÛٌٌع نهځÉ Çهـع';
$strCharset = 'ځضځيگÉ ÇهځطÇعل';
$strCharsetOfFile = 'ÔٌلعÉ ژطعل Çهځهل:';
$strCharsets = 'ځضځيگÇÊ ÇهځطÇعل';
$strCharsetsAndCollations = 'ځضځيگÇÊ ÇهځطÇعل يCollations';
$strCheckAll = 'شÎÊع Çهنه';
$strCheckDbPriv = 'لطف شځÊٌÇغ مÇگÏÉ ÇهÈٌÇوÇÊ';
$strCheckOverhead = 'Êطمم ځو overheaded';
$strCheckPrivs = 'Êطمم ځو ÇهفهÇطٌÇÊ';
$strCheckPrivsLong = 'Êطمم ځو ÇهفهÇطٌÇÊ همÇگÏÉ ÈٌÇوÇÊ &quot;%s&quot;.';
$strCheckTable = 'ÇهÊطمم ځو ÇهضÏيه';
$strChoosePage = 'عضÇزٍ ÇÎÊع فلطÉ هÊگÏٌهىÇ';
$strColComFeat = 'شÙىÇع ÊگهٌمÇÊ ÇهگځيÏ';
$strCollation = 'Collation';
$strColumn = 'گځيÏ';
$strColumnNames = 'شـځ ÇهگځيÏ';
$strColumnPrivileges = 'فهÇطٌÇÊ ÎÇفÉ ÈÇهطمه';
$strCommand = 'ژځ�ع';
$strComments = 'ÊگهٌمÇÊ';
$strCompleteInserts = 'ÇهشÏÎÇه همÏ شنÊځه';
$strCompression = 'ÇهقÛك';
$strConfigFileError = 'هځ ٌـÊكگ phpMyAdmin ژو ٌمعژ ځهل شگÏÇÏÇÊن!<br />مÏ ٌنيو ىㄓÇ ÈـÈÈ ژو PHP يضÏ Îكژ لٌ ÇهشگعÇÈ لٌى ژي ژوى هÇ ٌـÊكٌگ ژو ٌضÏ Çهځهل.<br />عضÇزٍ Çمعژ Çهځهل ÈÔنه ځÈÇÔع ÈÇـÊÎÏÇځ ÇهيفهÉ ژÏوÇى يÇمعژ عـÇهÉ ÇهÎكژ ÇهوÇÊضÉ. لٌ ځگÙځ ÇهطÇهÇÊ مÏ Êنيو گهÇځÉ ÇهÊوفٌف ژي گهÇځÉ ÇهلÇفهÉ ÇهځوميكÉ وÇمفÉ لٌ ځنÇو ځÇ.<br />شو طفهÊ گهً فلطÉ لÇعÛÉؤ لنه� Ôٌز گهً ځÇ ٌعÇځ.';
$strConfigureTableCoord = 'عضÇز شگÏÇÏ Çهځيمگ ههضÏيه %s';
$strConfirm = 'ىه ÊعٌÏ طمÇٍ ژو Êلگه ㄓهنر';
$strConnections = 'ÇÊفÇهÇÊ';
$strConstraintsForDumped = 'مٌيÏ ÇهضÏÇيه ÇهځطليÙÉ';
$strConstraintsForTable = 'ÇهمٌيÏ ههضÏيه';
$strCookiesRequired = 'ٌضÈ Êلگٌه Ïگځ Çهنينٌغ لٌ ىㄓى ÇهځعطهÉ.';
$strCopyTable = 'وـÎ ÇهضÏيه شهً';
$strCopyTableOK = 'ÇهضÏيه %s همÏ Êځ وـÎى شهً %s.';
$strCopyTableSameNames = 'هÇ ٌځنو وـÎ ÇهضÏيه شهً ولـى!';
$strCouldNotKill = 'هځ ٌـÊكگ phpMyAdmin شٌمÇل Çهگځهٌ�É %s. ٌÈÏي ژوىÇ ژيملÊ ځـÈمÇٍ.';
$strCreate = 'Êنيٌو';
$strCreateIndex = 'Êفځٌځ لىعـى گهً&nbsp;%s&nbsp;گځيÏ';
$strCreateIndexTopic = 'Êفځٌځ لىعـى ضÏٌÏى';
$strCreateNewDatabase = 'Êنيٌو مÇگÏÉ ÈٌÇوÇÊ ضÏٌÏÉ';
$strCreateNewTable = 'Êنيٌو ضÏيه ضÏٌÏ لٌ مÇگÏÉ ÇهÈٌÇوÇÊ %s';
$strCreatePage = 'ژوÔص فلطÉ ضÏٌÏÉ';
$strCreatePdfFeat = 'شوÔÇز ځهلÇÊ PDF';
$strCreationDates = 'ÊيÇعٌÎ ÇهشوÔÇز/ÇهÊطÏٌË/ÇهÊطم�م';
$strCriteria = 'ÇهځگÇٌٌع';
$strCroatian = 'ÇهنعيÇÊٌÉ';
$strCyrillic = 'ÇهـٌعٌهٌÉ';
$strCzech = 'ÇهÊÔٌنٌÉ';

$strDBComment = 'ځهÇطÙÉ مÇگÏÉ ÇهÈٌÇوÇÊ: ';
$strDBGContext = 'ÇهـٌÇم';
$strDBGContextID = 'عمځ ÇهـٌÇم';
$strDBGHits = 'ÇـÊÎÏÇځÇÊ';
$strDBGLine = 'ـكع';
$strDBGMaxTimeMs = 'ژمفً يمÊؤ ځË';
$strDBGMinTimeMs = 'ژمه يمÊؤ ځË';
$strDBGModule = 'يْط�ÏÉ';
$strDBGTimePerHitMs = 'يمÊ/ÇـÊÎÏÇځؤ ځË';
$strDBGTotalTimeMs = 'ÇهيمÊ Çهنهٌؤ ځË';
$strDanish = 'ÇهÏوځعنٌÉ';
$strData = 'ÈٌÇوÇÊ';
$strDataDict = 'مÇځيـ ÇهÈٌÇوÇÊ';
$strDataOnly = 'ÈٌÇوÇÊ لمك';
$strDatabase = 'مÇگÏÉ ÇهÈٌÇوÇÊ';
$strDatabaseExportOptions = 'ÎٌÇعÇÊ ÊفÏٌع مÇگÏÉ ÈٌÇوÇÊ';
$strDatabaseHasBeenDropped = 'مÇگÏÉ ÈٌÇوÇÊ %s ځطㄓيلى.';
$strDatabaseNoTable = 'هÇ ÊطÊيٌ مÇگÏÉ ÇهÈٌÇوÇÊ ىㄓى گهً ضÏÇيه!';
$strDatabaseWildcard = 'مÇگÏÉ ÈٌÇوÇÊ:';
$strDatabases = 'مÇگÏÉ ÈٌÇوÇÊ';
$strDatabasesDropped = 'Êځ طㄓل ميÇگÏ ÇهÈٌÇوÇÊ %s ÈوضÇط.';
$strDatabasesStats = 'شطفÇصٌÇÊ ميÇگÏ ÇهÈٌÇوÇÊ';
$strDatabasesStatsDisable = 'ژيمل ÇهشطفÇصٌÇÊ';
$strDatabasesStatsEnable = 'ځن�و ÇهشطفÇصٌÇÊ';
$strDatabasesStatsHeavyTraffic = 'ځهÇطÙÉ: Êځنٌو شطفÇصٌÇÊ ميÇگÏ ÇهÈٌÇوÇÊ ىوÇ مÏ ٌـÈÈ ÊÏلم ÈٌÇوÇÊ Ëمٌه Èٌو ÎÇÏځ ÇهيÈ يÎÇÏځ MySQL.';
$strDbPrivileges = 'فهÇطٌÇÊ ÎÇفÉ ÈمÇگÏÉ ÇهÈٌÇوÇÊ';
$strDbSpecific = 'ÎÇف ÈمÇگÏÉ ÈٌÇوÇÊ';
$strDefault = 'شلÊعÇقٌ';
$strDefaultValueHelp = 'ههمٌځ ÇهÇلÊعÇقٌÉؤ ÇهعضÇز ژÏÎه مٌځÉ ځلعÏÉؤ Ïيو گهÇځÇÊ ىعيÈ ژي Êوفٌفؤ ÈÇـÊÎÏÇځ ÇهÊوـٌم: a';
$strDelOld = 'ÊطÊيٌ ÇهفلطÉ ÇهطÇهٌÉ ځعÇضگ هضÏÇيه هځ ÊگÏ ځيضيÏÉ. ىه ÊيÏ طㄓل ىㄓى ÇهځعÇضگر';
$strDelayedInserts = 'ÇـÊÎÏځ ÇهشقÇلÇÊ ÇهځÊژÎعÉ';
$strDelete = 'طㄓل';
$strDeleteAndFlush = 'Çطㄓل ÇهځـÊÎÏځٌو يمځ ÈشگÇÏÉ معÇزÉ ÇهفهÇطٌÇÊ ÈگÏ ㄓهن.';
$strDeleteAndFlushDescr = 'ىㄓى ىٌ ژوÙل كعٌمÉؤ هنو شگÇÏÉ معÇزÉ ÇهفهÇطٌÇÊ مÏ ٌÊكه�È Èگق ÇهيمÊ.';
$strDeleteFailed = 'Çهطㄓل ÎÇكص!';
$strDeleteUserMessage = 'همÏ طㄓلÊ ÇهځـÊÎÏځ %s.';
$strDeleted = 'همÏ Êځ طㄓل Çهفل';
$strDeletedRows = 'Çهفليل Çهځطㄓيلى:';
$strDeleting = 'مٌ�Ï طㄓ�ل %s';
$strDescending = 'ÊوÇغهٌÇٍ';
$strDescription = 'Çهيفل';
$strDictionary = 'مÇځيـ';
$strDisabled = 'ځگك�ه';
$strDisplay = 'گعق';
$strDisplayFeat = 'شÙىÇع ÇهځغÇٌÇ';
$strDisplayOrder = 'ÊعÊٌÈ Çهگعق:';
$strDisplayPDF = 'شÙىÇع ÈوÇز ځهل PDF';
$strDoAQuery = 'Êضگه "شـÊگهÇځ ÈيÇـكÉ ÇهځËÇه" (wildcard: "%")';
$strDoYouReally = 'ىه ÊعٌÏ طمÇٍ Êولٌㄓ';
$strDocu = 'ځـÊوÏÇÊ يËÇصمٌى';
$strDrop = 'طㄓل';
$strDropDB = 'طㄓل مÇگÏÉ ÈٌÇوÇÊ %s';
$strDropSelectedDatabases = 'شطㄓل ميÇگÏ ÇهÈٌÇوÇÊ ÇهځطÏÏÉ';
$strDropTable = 'طㄓل ضÏيه';
$strDropUsersDb = 'شطㄓل ميÇگÏ ÇهÈٌÇوÇÊ ÇهÊٌ هىÇ ولـ شـځÇز ÇهځـÊÎÏځٌو.';
$strDumpComments = 'قځ�و ځهÇطÙÇÊ ÇهگځيÏ نځهÇطÙÇÊ SQL قځو Çهـكع';
$strDumpSaved = 'Êځ طلÙ ÇهÜDump شهً Çهځهل %s.';
$strDumpXRows = 'شطÏل %s ـكع ÈÏزٍ ځو Çهـكع %s.';
$strDumpingData = 'شعضÇگ ژي شـÊٌعÇÏ ÈٌÇوÇÊ ÇهضÏيه';
$strDynamic = 'ÏٌوÇځٌنٌ';

$strEdit = 'Êطعٌع';
$strEditPDFPages = 'گÏ�ه فلطÇÊ PDF';
$strEditPrivileges = 'Êطعٌع ÇهشځÊٌÇغÇÊ';
$strEffective = 'لگÇه';
$strEmpty = 'شلعÇÛ ځطÊيً';
$strEmptyResultSet = 'MySQL مÇځ ÈشعضÇگ وÊٌضÉ شگÏÇÏ لÇعÛى (ځËهÇٍ. فل فلعٌ).';
$strEnabled = 'ځځن�و';
$strEnd = 'وىÇٌى';
$strEndCut = 'ÇوÊىÇز Çهمف�';
$strEndRaw = 'ÇوÊىÇز ÇهÈٌÇوÇÊ ÇهژفهٌÉ';
$strEnglish = 'ÇهشوضهٌغٌÉ';
$strEnglishPrivileges = ' ځهÇطÙى: شـځ ÇهشځÊٌÇغ هÜMySQL ٌÙىع يٌّمعژ ÈÇههÛى Çهشوضهٌغٌى لمك ';
$strError = 'Îكژ';
$strEstonian = 'ÇهشـÊيوٌÉ';
$strExcelEdition = 'شفÏÇعÉ شنـه';
$strExcelOptions = 'ÎٌÇعÇÊ شنـه';
$strExecuteBookmarked = 'ول�ㄓ ÇـÊگهÇځ ځطليÙ ÈگهÇځÉ ځعضگٌÉ';
$strExplain = 'شÔعط SQL';
$strExport = 'ÊفÏٌع';
$strExportToXML = 'ÊفÏٌع ÈÊوـٌم XML';
$strExtendedInserts = 'شÏÎÇه ځّÏÏ';
$strExtra = 'شقÇلٌ';

$strFailedAttempts = 'ځطÇيهÇÊ ژÎلمÊ';
$strField = 'Çهطمه';
$strFieldHasBeenDropped = 'طمه ځطㄓيل %s';
$strFields = ' گÏÏ Çهطميه';
$strFieldsEmpty = ' ÊگÏÇÏ Çهطمه لÇعÛ! ';
$strFieldsEnclosedBy = 'طمه ځقځو ÈÜ';
$strFieldsEscapedBy = 'طمه ځّÊضÇىه ÈÜ';
$strFieldsTerminatedBy = 'طمه ځلفيه ÈÜ';
$strFileAlreadyExists = 'Çهځل %s ځيضيÏ ÇفهÇٍ گهً ÇهÎÇÏځ. Ûٌع ÇهÇـځ ژي طÏÏ ÎٌÇع ÇهÊـضٌه گهً Çهځهل ÇهځيضيÏ.';
$strFileCouldNotBeRead = 'هځ ٌځنو معÇزÉ Çهځهل';
$strFileNameTemplate = 'مÇهÈ شـځ Çهځهل';
$strFileNameTemplateHelp = 'ÇـÊÎÏځ __DB__ هشـځ مÇگÏÉ ÇهÈٌÇوÇÊؤ __TABLE__ هشـځ ÇهضÏيه ي %sany strftime%s هÎٌÇعÇÊ ÊطÏٌÏ ÇهيمÊؤ يـيل ٌÊځ شقÇلÉ ÇهÇځÊÏÇÏ. ـيل ٌÊځ ÇهÇطÊلÇÙ Èژٌ وف ÂÎع.';
$strFileNameTemplateRemember = 'Êㄓنع ÇهمÇهÈ';
$strFixed = 'ځËÈÊ';
$strFlushPrivilegesNote = 'ځهÇطÙÉ: ٌمعژ phpMyAdmin فهÇطٌÇÊ ÇهځـÊÎÏځٌو ځو ضÏÇيه ÇهفهÇطٌÇÊ ځو ÎÇÏځ MySQL ځÈÇÔعÉٍ. ځطÊيٌÇÊ ىㄓى ÇهضÏÇيه مÏ ÊÎÊهل گو ÇهفهÇطٌÇÊ ÇهÊٌ ٌـÊÎÏځىÇ ÇهÎÇÏځ شㄓÇ ځÇ Êځ� ÇهÊگÏٌه گهٌىÇ ٌÏيٌ�Çٍ. لٌ ىㄓى ÇهطÇهÉؤ گهٌن %s ÈشگÇÏÉ معÇزÉ ÇهفهÇطٌÇÊ %s مÈه ژو Êنځه.';
$strFlushTable = 'شگÇÏÉ Êطځٌه ÇهضÏيه ("FLUSH")';
$strFormEmpty = 'ٌيضÏ مٌځى ځلميÏى ÈÇهوځيㄓض !';
$strFormat = 'فٌÛى';
$strFullText = 'وفيف نÇځهى';
$strFunction = 'ÏÇهÉ';

$strGenBy = 'ژوÔص ÈيÇـكÉ';
$strGenTime = 'ژوÔص لٌ';
$strGeneralRelationFeat = 'ÇهځغÇٌÇ ÇهگÇځ�É ههعÇÈك';
$strGerman = 'ÇهژهځÇوٌÉ';
$strGlobal = 'گÇځ�';
$strGlobalPrivileges = 'فهÇطٌ�ÇÊ گÇځ�É';
$strGlobalValue = 'مٌځÉ گÇځ�É';
$strGo = '&nbsp;ÊولٌÜÜㄓ&nbsp;';
$strGrantOption = 'ځِو�ط�';
$strGrants = 'Grants';
$strGreek = 'ÇهٌيوÇوٌÉ';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'همÏ گّÏْه.';
$strHasBeenCreated = 'همÏ Êنيو.';
$strHaveToShow = 'گهٌن ÇÎÊٌÇع گځيÏ يÇطÏ گهً Çهژمه ههگعق';
$strHebrew = 'ÇهگÈعٌÉ';
$strHome = 'ÇهفلطÉ ÇهعصٌـٌÉ';
$strHomepageOfficial = 'ÇهفلطÉ ÇهعصٌـٌÉ ÇهعـځٌÉ هÜ phpMyAdmin';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin فلطÉ ÇهÊوغٌه';
$strHost = 'ÇهځغيÏ';
$strHostEmpty = 'شـځ ÇهځـÊقٌل لÇعÛ!';
$strHungarian = 'ÇهىوÛÇعٌÉ';

$strId = 'عمځ';
$strIdxFulltext = 'Çهوف نÇځهÇٍ';
$strIfYouWish = 'شㄓÇ نوÊ ÊعÛÈ لٌ ژو Êطځه Èگق ژگځÏÉ ÇهضÏيه لمك, طÏÏ ÈÇهلÇفهى ÇهÊٌ Êلفه مÇصځÉ Çهطمه.';
$strIgnore = 'ÊضÇىه';
$strIgnoringFile = 'ÊضÇىه Çهځهل %s';
$strImportDocSQL = 'ÇـÊٌعÇÏ ځهلÇÊ docSQL';
$strImportFiles = 'ÇـÊيعÏ ÇهځهلÇÊ';
$strImportFinished = 'شوÊىً ÇهشـÊٌعÇÏ';
$strInUse = 'مٌÏ ÇهشـÊگځÇه';
$strIndex = 'لىعـÊ';
$strIndexHasBeenDropped = 'لىعـى ځطㄓيلى %s';
$strIndexName = 'شـځ Çهلىعـ&nbsp;:';
$strIndexType = 'ويگ Çهلىعـ&nbsp;:';
$strIndexes = 'لىÇعـ';
$strInnodbStat = 'يقگ InnoDB';
$strInsecureMySQL = 'ٌطÊيٌ ځهل ÇهشگÏÇÏÊ ÇهÎÇف Èن ÊگٌٌوÇÊ )ÇهځـÊÎÏځ root Ïيو نهځÉ ځعيع( يÇهㄓٌ ٌÔٌع شهً طـÇÈ ÇهځـÊÎÏځ Çهعصٌـٌ هÜMySQL. ÎÇÏځ MySQL Çهㄓٌ ٌگځه Èىㄓى ÇهشگÏÇÏÊ ÇهÇلÊعÇقٌÉ ځگعق هÎكع ÇهÇمÊطÇځؤ يگهٌن ژو Êميځ ÈشفهÇط ËÛعÉ ÇهژځÇو ىㄓى لٌ ژمعÈ يمÊ ځځنو.';
$strInsert = 'شÏÎÇه';
$strInsertAsNewRow = 'شÏÎÇه نÊـضٌه ضÏٌÏ';
$strInsertNewRow = 'شقÇلÉ Êـضٌه ضÏٌÏ';
$strInsertTextfiles = 'شÏÎÇه ځهل وفٌ لٌ ÇهضÏيه';
$strInsertedRowId = 'عمځ ځگع�ل Çهـ�كع ÇهځقÇل:';
$strInsertedRows = 'فليل ځÏÎهى:';
$strInstructions = 'ÇهژيÇځع';
$strInternalNotNecessary = '* ÇهگهÇمÉ ÇهÏÇÎهٌÉ Ûٌع قعيعٌÉ گوÏځÇ Êنيو ځيضيÏÉ ځـÈمÇٍ لٌ InnoDB.';
$strInternalRelations = 'ÇهگهÇمÇÊ ÇهÏÇÎهٌÉ';
$strInvalidName = '"%s" نهځى ځطضيغى, هÇٌځنون شـÊÎÏÇځىÇ نشـځ مÇگÏÉ ÈٌÇوÇÊ/ضÏيه/طمه.';

$strJapanese = 'ÇهٌÇÈÇوٌÉ';
$strJumpToDB = 'شㄓىÈ شهً مÇگÏÉ ÈٌÇوÇÊ &quot;%s&quot;.';
$strJustDelete = 'لمك مځ Èطㄓل ÇهځـÊÎÏځٌو ځو ضÏيه ÇهفهÇطٌÇÊ.';
$strJustDeleteDescr = 'ـيل ٌÈمً ÇهځـÊÎÏځيو &quot;Çهځطㄓيليو&quot; مÇÏعيو گهً Çهيفيه ههÎÇÏځ نÇهگÇÏÉ طÊً ٌÊځ شگÇÏÉ معÇزÉ ÇهفهÇطٌÇÊ.';

$strKeepPass = 'هÇÊÛٌع نهځÉ Çهـع';
$strKeyname = 'شـځ ÇهځلÊÇط';
$strKill = 'شÈكÇه';
$strKorean = 'ÇهنيعٌÉ';

$strLaTeX = 'هÇÊْن�ـ�';
$strLaTeXOptions = 'ÎٌÇعÇÊ هÇÊنـ';
$strLandscape = 'گعق ÇهفلطÉ';
$strLatexCaption = 'گويÇو ÇهضÏيه';
$strLatexContent = 'ځطÊيٌٌÇÊ ÇهضÏيه __TABLE__';
$strLatexContinued = '(ÊÇÈگ)';
$strLatexContinuedCaption = 'گويÇو ضÏيه ÊÇÈگ';
$strLatexIncludeCaption = 'ژقل گويÇوÇٍ ههضÏيه';
$strLatexLabel = 'Label key';
$strLatexStructure = 'ÈوٌÉ ÇهضÏيه __TABLE__';
$strLength = 'Çهكيه';
$strLengthSet = 'Çهكيه/Çهمٌځى*';
$strLimitNumRows = 'عمځ ÇهـضهÇÊ هنه فلطى';
$strLineFeed = 'Îكيك ځگعلى: \\n';
$strLines = 'Îكيك';
$strLinesTerminatedBy = 'Îكيك ځلفيهى ÈÜ';
$strLinkNotFound = 'هځ ٌځنو شٌضÇÏ ÇهيفهÉ';
$strLinksTo = 'ځعÊÈك ÈÜ';
$strLithuanian = 'ÇههٌÊيÇوٌÉ';
$strLoadExplanation = 'ژلقه كعٌمÉ ځطÏÏÉ ÈÔنه ÇلÊعÇقٌؤ شهÇ ژوى ٌځنون ÊÛٌٌعىÇ شو هځ Êوضط.';
$strLoadMethod = 'كعٌم LOAD';
$strLocalhost = 'ځطهٌ';
$strLocationTextfile = 'ځنÇو ځهل وفٌ';
$strLogPassword = 'نهځÉ Çهـع:';
$strLogServer = 'ÎÇÏځ Çهـضه�';
$strLogUsername = 'شـځ ÇهځّـÊÎÏځ:';
$strLogin = 'ÏÎيه';
$strLoginInformation = 'ÈٌÇوÇÊ ÇهÏÎيه';
$strLogout = 'Êـضٌه Îعيض';

$strMIME_MIMEtype = 'ويگ MIME';
$strMIME_available_mime = 'ژويÇگ MIME ÇهځÊيلعÉ';
$strMIME_available_transform = 'ÇهÊطيٌهÇÊ ÇهځÊيلعÉ';
$strMIME_description = 'Çهيفل';
$strMIME_file = 'شـځ Çهځهل';
$strMIME_nodescription = 'هٌـ ىوÇن يفل ځÊيلع هىㄓÇ ÇهÊطيٌه.<br />عضÇز Çـژه ÇهوÇÔعؤ ځÇ ٌلگهى %s.';
$strMIME_transformation = 'Êطيٌه ÇهځÊفلط';
$strMIME_transformation_note = 'هگعق مÇصځÉ ÈÎٌÇعÇÊ ÇهÊطيٌه ÇهځÊيلعÉ يژويÇگ ÊطيٌهÇÊ MIME ÇهÎÇفÉ ÈىÇؤ شقÛك گهً %sÎٌÇعÇÊ ÇهÊطيٌه%s';
$strMIME_transformation_options = 'ÎٌÇعÇÊ ÇهÊطيٌه';
$strMIME_transformation_options_note = 'عضÇزٍ ژÏÎه Çهمٌځ هÎٌÇعÇÊ ÇهÊطيٌه ÈÇـÊÎÏÇځ ىㄓÇ ÇهÊوـٌم: \'a\',\'b\',\'c\'...<br />شㄓÇ ÇطÊضÊ ژو Êقگ Ôع�كÉ ځÇصهÉ ("\") ژي گهÇځÉ Êوفٌف ("\'") Èٌو ىㄓى Çهمٌځؤ ÇـÈمىÇ ÈÔع�كÉ ځÇصهÉ )گهً ـÈٌه ÇهځËÇه \'\\\\xyz\' ژي \'a\\\'b\'(.';
$strMIME_without = 'ژويÇگ MIME ÇهÊٌ ÊÙىع Èطعيل ځÇصهÉ هٌـ هىÇ يÙٌلÉ Êطيٌه ځولفهÉ';
$strMissingBracket = 'ىوÇن ميـ وÇمف';
$strModifications = 'ÊځÊ ÇهÊگÏٌهÇÊ';
$strModify = 'ÊگÏٌه';
$strModifyIndexTopic = 'ÊگÏٌه Çهلىعـى';
$strMoreStatusVars = 'ځÊÛٌ�عÇÊ طÇهÉ شقÇلٌÉ';
$strMoveTable = 'ومه ضÏيه شهً (مÇگÏÉ ÈٌÇوÇÊ<b>.</b>ضÏيه):';
$strMoveTableOK = '%s ضÏيه Êځ ومهى شهً %s.';
$strMoveTableSameNames = 'هÇٌځنو ومه ÇهضÏيه شهً ولـى!';
$strMultilingual = 'ځÊگÏÏ ÇههÛÇÊ';
$strMustSelectFile = 'ٌضÈ ژو ÊطÏÏ Çهځهل Çهㄓٌ ÊعٌÏ ژو Êقٌلى.';
$strMySQLCharset = 'ÔٌلعÉ ژطعل MySQL';
$strMySQLReloaded = 'Êځ شگÇÏÉ Êطځٌه MySQL ÈوضÇط.';
$strMySQLSaid = 'MySQL مÇه: ';
$strMySQLServerProcess = 'MySQL %pma_s1%  گهً ÇهځغيÏ %pma_s2% -  ÇهځـÊÎÏځ : %pma_s3%';
$strMySQLShowProcess = 'گعق ÇهگځهٌÇÊ';
$strMySQLShowStatus = 'گعق طÇهÉ ÇهځغيÏ MySQL';
$strMySQLShowVars ='گعق ځÊÛٌعÇÊ ÇهځغيÏ MySQL';

$strName = 'Çهشـځ';
$strNext = 'ÇهÊÇهٌ';
$strNo = 'هÇ';
$strNoDatabases = 'هÇٌيضÏ ميÇگÏ ÈٌÇوÇÊ';
$strNoDatabasesSelected = 'هÇ ميÇگÏ ÈٌÇوÇÊ ځطÏÏÉ';
$strNoDescription = 'ÈÏيو يفل';
$strNoDropDatabases = 'ځگكه "طㄓل مÇگÏÉ ÈٌÇوÇÊ"Çهژځع ';
$strNoExplain = 'ÊÎك�ٌ Ôعط SQL';
$strNoFrames = 'phpMyAdmin ژنËع ÊلىځÇٍ ځگ ځـÊگعق <b>ÇهشكÇعÇÊ</b>.';
$strNoIndex = 'لىعـ Ûٌع ځگعل!';
$strNoIndexPartsDefined = 'شضغÇز Çهلىعـى Ûٌع ځگعلى!';
$strNoModification = 'هÇ ÊÛٌٌعÇÊ';
$strNoOptions = 'ىㄓÇ ÇهÊوـٌم هٌـ هى ژٌ ÎٌÇعÇÊ';
$strNoPassword = 'هÇ نهځÉ ـع';
$strNoPermission = 'ÎÇÏځ ÇهيÈ هٌـ هÏٌى فهÇطٌÉ هطلÙ Çهځهل %s.';
$strNoPhp = 'ÈÏيو ÔٌلعÉ PHP';
$strNoPrivileges = 'شځÊٌÇغ Ûٌع ځيضيÏ';
$strNoQuery = 'هٌـÊ شـÊگهÇځ SQL!';
$strNoRights = 'هٌـ هÏٌن Çهطميم ÇهنÇلٌى Èژو Êنيو ىوÇ ÇهÂو!';
$strNoSpace = 'هÇ ٌيضÏ ځـÇطÉ نÇلٌÉ هطلÙ Çهځهل %s.';
$strNoTablesFound = 'هÇٌيضÏ ضÏÇيه ځÊيلعى لٌ مÇگÏÉ ÇهÈٌÇوÇÊ ىㄓى!.';
$strNoUsersFound = 'ÇهځـÊÎÏځ(Üٌو) هځ ٌÊځ شٌضÇÏىځ.';
$strNoUsersSelected = 'هځ ٌÊځ ÊطÏٌÏ ځـÊÎÏځ.';
$strNoValidateSQL = 'ÊÎك�ٌ ÇهÊژن�Ï ځو SQL';
$strNone = 'هÇÔص';
$strNotNumber = 'ىㄓÇ هٌـ عمځ!';
$strNotOK = 'هٌـ فÇهطÇٍ';
$strNotSet = 'ÇهضÏيه <b>%s</b> Ûٌع ځيضيÏ ژي ځطÏÏ لٌ %s';
$strNotValidNumber = ' ىㄓÇ هٌـ گÏÏ فل فطٌط!';
$strNull = 'ÎÇهٌ';
$strNumSearchResultsInTable = '%s ځكÇÈمÉ لٌ ÇهضÏيه <i>%s</i>';
$strNumSearchResultsTotal = '<b>Çهځضځيگ:</b> <i>%s</i>ځكÇÈمÉ';
$strNumTables = 'ضÏÇيه';

$strOK = 'ځيÇلم';
$strOftenQuotation = 'ÛÇهÈÇٍ گهÇځÇÊ ÇهشمÊÈÇـ. شÎÊٌÇعٌ ٌگوٌ Èژو Çهطميه  char ي varchar Êعلم ÈÜ " ".';
$strOperations = 'گځهٌ�ÇÊ';
$strOptimizeTable = 'قÛك ÇهضÏيه';
$strOptionalControls = 'شÎÊٌÇعٌ. ÇهÊطنځ لٌ نٌلٌÉ نÊÇÈÉ ژي معÇزÉ Çهژطعل ژي Çهضځه ÇهÎÇفى.';
$strOptionally = 'شÎÊٌÇعٌ';
$strOptions = 'ÎٌÇعÇÊ';
$strOr = 'ژي';
$strOverhead = 'Çهليمٌ';
$strOverwriteExisting = 'Îغو گهً ÇهځهلÇÊ ÇهځيضيÏÉ ژفهÇٍ';

$strPHP40203 = 'ژوÊ ÊـÊÎÏځ ÇهشفÏÇع 4.2.3 ځو PHP يÇهㄓٌ ٌطÊيٌ گهً Îه�ه Îكٌع لٌ ÇهÊگÇځه ځگ Çهوفيف ËوÇصٌÉ ÇهÈÇٌÊ (mbstring). ژوÙع لٌ Êمعٌع Îهه PHP عمځ 19404. هÇ ٌوفط ÈÇـÊÎÏÇځ ىㄓى ÇهوـÎÉ ځو PHP ځگ phpMyAdmin.';
$strPHPVersion = ' PHP شفÏÇعÉ';
$strPageNumber = 'فلطÉ عمځ:';
$strPaperSize = 'طضځ Çهيعم';
$strPartialText = 'وفيف ضغصٌى';
$strPassword = 'نهځÉ Çهـع';
$strPasswordChanged = 'Êځ ÊÛٌٌع نهځÉ Çهځعيع هÜ %s ÈوضÇط.';
$strPasswordEmpty = 'نهځÉ Çهـع لÇعÛÉ !';
$strPasswordNotSame = 'نهځÊÇ Çهـع Ûٌع ځÊÔÇÈىÊÇو !';
$strPdfDbSchema = 'ÈوÇز مÇگÏÉ ÇهÈٌÇوÇÊ "%s" - ÇهفلطÉ %s';
$strPdfInvalidPageNum = 'عمځ فلطÉ PDF Ûٌع ځگع�ل!';
$strPdfInvalidTblName = 'ÇهضÏيه "%s" Ûٌع ځيضيÏ!';
$strPdfNoTables = 'هÇ ٌيضÏ ضÏÇيه';
$strPerHour = 'هنه ـÇگÉ';
$strPerMinute = 'هنه ÏمٌمÉ';
$strPerSecond = 'هنه ËÇوٌÉ';
$strPhoneBook = 'ÏلÊع ÇهىÇÊل';
$strPhp = 'ژوÔص ÔٌلعÉ PHP';
$strPmaDocumentation = 'ځـÊوÏÇÊ يËÇصمٌى هÜ phpMyAdmin (ÈÇهشوضهٌغٌÉ)';
$strPmaUriError = 'ÇهځÊÛٌع <span dir="ltr"><tt>$cfg[\'PmaAbsoluteUri\']</tt></span> ٌضÈ ÊگÏٌهى لٌ ځهل Çهنيلٌن !';
$strPortrait = 'كيه ÇهفلطÉ';
$strPos1 = 'ÈÏÇٌÉ';
$strPrevious = 'ـÇÈم';
$strPrimary = 'ژـÇـٌ';
$strPrimaryKey = 'ځلÊÇط ژـÇـٌ';
$strPrimaryKeyHasBeenDropped = 'همÏ Êځ طㄓل ÇهځلÊÇط ÇهژـÇـٌ';
$strPrimaryKeyName = 'شـځ ÇهځلÊÇط ÇهژـÇـٌ ٌضÈ ژو ٌنيو ژـÇـٌ... PRIMARY!';
$strPrimaryKeyWarning = '("ÇهژـÇـٌ" <b>ٌضÈ</b> ٌضÈ ژو ٌنيو Çهژـځ <b>يژٌقÇٍ لمك</b> ÇهځلÊÇط ÇهژـÇـٌ!)';
$strPrint = 'شكÈگ';
$strPrintView = 'گعق وـÎÉ ههكÈÇگÉ';
$strPrintViewFull = 'گعق ÇهكÈÇگÉ (ځگ Çهوفيف ÇهنÇځهÉ).';
$strPrivDescAllPrivileges = 'ٌÊقځ�و نه ÇهفهÇطٌ�ÇÊ گÏÇ GRANT.';
$strPrivDescAlter = 'ٌـځط ÈÊگÏٌه ÈوÇز ÇهضÏÇيه ÇهځيضيÏÉ ځـÈمÇٍ.';
$strPrivDescCreateDb = 'ٌـځط ÈشوÔÇز ميÇگÏ ÈٌÇوÇÊ يضÏÇيه ضÏٌÏÉ.';
$strPrivDescCreateTbl = 'ٌـځط ÈشوÔÇز ضÏÇيه ضÏٌÏÉ.';
$strPrivDescCreateTmpTable = 'ٌـځط ÈشوÔÇز ضÏÇيه ځسم�ÊÉ.';
$strPrivDescDelete = 'ٌـځط Èطㄓل ÇهÈٌÇوÇÊ.';
$strPrivDescDropDb = 'ٌـځط Èطㄓل ميÇگÏ ÇهÈٌÇوÇÊ.';
$strPrivDescDropTbl = 'ٌـځط Èطㄓل ÇهضÏÇيه.';
$strPrivDescExecute = 'ٌـځط ÈÊÔÛٌه ÇهشضعÇزÇÊ ÇهځÎغ�وÉ )stored procedures(ؤ هٌـ هى ژٌ ÊژËٌع لٌ ىㄓى ÇهوـÎÉ ځو ÎÇÏځ MySQL.';
$strPrivDescFile = 'ٌـځط ÈÇـÊٌعÇÏ يÊفÏٌع ÇهÈٌÇوÇÊ ځو يشهً Çهځهل�ÇÊ.';
$strPrivDescGrant = 'ٌـځط ÈشقÇلÉ ÇهځـÊÎÏځٌو يÇهفهÇطٌÇÊ Ïيو شگÇÏÉ معÇزÉ ضÏÇيه ÇهفهÇطٌÇÊ.';
$strPrivDescIndex = 'ٌـځط ÈشوÔÇز يطㄓل ÇهلىÇعـ.';
$strPrivDescInsert = 'ٌـځط ÈشقÇلÉ يÇـÊÈÏÇه ÇهÈٌÇوÇÊ.';
$strPrivDescLockTables = 'ٌـځط Èمله ÇهضÏÇيه ههگځهٌ�É ÇهطÇهٌ�É.';
$strPrivDescMaxConnections = 'ٌطÏ� ځو گÏÏ ÇهÇÊفÇهÇÊ ÇهضÏٌÏÉ ÇهÊٌ ٌځنو ههځـÊÎÏځ لÊطىÇ Èنه ـÇگÉ.';
$strPrivDescMaxQuestions = 'ٌطÏ� گÏÏ ÇهÇـÊگهÇځÇÊ ÇهÊٌ ٌـÊكٌگ ÇهځـÊÎÏځ شعـÇهىÇ شهً ÇهÎÇÏځ Èنه ـÇگÉ.';
$strPrivDescMaxUpdates = 'ٌطÏ� گÏÏ ÇهژيÇځع ÇهÊٌ ٌولㄓىÇ ÇهځـÊÎÏځ Èنه ـÇگÉؤ يÇهÊٌ ÊÛٌع ژٌ ضÏيه ژي مÇگÏÉ ÈٌÇوÇÊ.';
$strPrivDescProcess3 = 'ٌـځط ÈشٌمÇل گځهٌ�ÇÊ ÇهځـÊÎÏځٌو ÇهژÎعٌو.';
$strPrivDescProcess4 = 'ٌـځط Èگعق ÇهÇـÊگهÇځ ÈÇهنÇځه لٌ ـعÏ ÇهگځهٌÇÊ.';
$strPrivDescReferences = 'هٌـ هى ژٌ ÊژËٌع لٌ وـÎÉ MySQL ÇهطÇهٌ�É.';
$strPrivDescReload = 'ٌـځط ÈشگÇÏÉ Êطځٌه شگÏÇÏÇÊ ÇهÎÇÏځ يÊلعٌÛ نÇÔ ÇهÎÇÏځ.';
$strPrivDescReplClient = 'ٌگكٌ Çهطم ههځـÊÎÏځ ÈÇهـسÇه گو ځنÇو يضيÏ slaves/masters.';
$strPrivDescReplSlave = 'ځكهيÈ هÊيÇÈگ هÇـÊوـÇÎ.';
$strPrivDescSelect = 'ٌـځط ÈمعÇزÉ ÇهÈٌÇوÇÊ.';
$strPrivDescShowDb = 'ٌـځط ÈÇهيفيه همÇصځÉ ژـځÇز ضځٌگ ميÇگÏ ÇهÈٌÇوÇÊ.';
$strPrivDescShutdown = 'ٌـځط ÈشٌمÇل گځه ÇهÎÇÏځ.';
$strPrivDescSuper = 'ٌـځط ÈÇهÇÊفÇهؤ طÊً هي يفه طÏ� گÏÏ ÇهÇÊفÇهÇÊ ههژمفً.ؤ ځكهيÈ ههځىÇځ ÇهشÏÇعٌÉ نقÈك ÇهشگÏÇÏÇÊ ÇهگÇځ�É other users.';
$strPrivDescUpdate = 'ٌـځط ÈÊگÏٌه ÇهÈٌÇوÇÊ.';
$strPrivDescUsage = 'هÇ فهÇطٌÇÊ.';
$strPrivileges = 'ÇهشځÊٌÇغÇÊ';
$strPrivilegesReloaded = 'Êځ شگÇÏÉ معÇزÉ ÇهفهÇطٌÇÊ ÈوضÇط.';
$strProcesslist = 'ـعÏ Çهگځهٌ�ÇÊ';
$strProperties = 'ÎفÇصف';
$strPutColNames = 'قگ ژـځÇز Çهطميه لٌ Çهـكع Çهژيه';

$strQBE = 'شـÊگهÇځ ÈيÇـكÉ ځËÇه';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryFrame = 'وÇلㄓÉ ÇهÇـÊگهÇځ';
$strQueryFrameDebug = 'ځگهيځÇÊ شغÇهÉ ÇهژÎكÇز';
$strQueryFrameDebugBox = 'ÇهځÊÛٌعÇÊ Çهلگ�ÇهÉ هوځيㄓض ÇهÇـÊگهÇځ:\nمÇگÏÉ ÈٌÇوÇÊ: %s\nضÏيه: %s\nÎÇÏځ: %s\n\nÇهځÊÛٌعÇÊ ÇهطÇهٌÉ هوځيㄓض ÇهÇـÊگهÇځ:\nمÇگÏÉ ÈٌÇوÇÊ: %s\nضÏيه: %s\nÎÇÏځ: %s\n\nځيمگ ÇهلÇÊط: %s\nځيمگ ځضځيگÉ ÇهشكÇعÇÊ: %s.';
$strQueryOnDb = 'لٌ مÇگÏÉ ÇهÈٌÇوÇÊ SQL-شـÊگهÇځ <b>%s</b>:';
$strQuerySQLHistory = 'وفيف SQL ـÇÈمÉ';
$strQueryStatistics = '<b>شطفÇصٌÇÊ ÇهÇـÊگهÇځ</b>: %s ÇـÊگهÇځ ژعـه شهً ÇهÎÇÏځ ځوㄓ ÊÔÛٌهى.';
$strQueryTime = 'ÇـÊÛعل ÇهÇـÊگهÇځ %01.4f ËÇوٌÉ';
$strQueryType = 'ويگ ÇهÇـÊگهÇځ';
$strQueryWindowLock = 'هÇ ÊÎغو گهً ىㄓÇ ÇهÇـÊگهÇځ ځو ÎÇعض ÇهوÇلㄓÉ';

$strReType = 'ژگÏ نÊÇÈى';
$strReceived = 'ÇـÊّهْځ';
$strRecords = 'ÇهÊـضٌهÇÊ';
$strReferentialIntegrity = 'ÊطÏٌÏ ÇهÊنÇځه Çهځعضگٌ:';
$strRelationNotWorking = 'Êځ� Êگكٌه ÇهځغÇٌÇ ÇهشقÇلٌÉ ههگځه ÈÇهضÏÇيه ÇهځÊعÇÈكÉ. هځگعلÉ ÇهـÈÈ شقÛك %sىوÇ%s.';
$strRelationView = 'گعق ÇهعيÇÈك';
$strRelationalSchema = 'ÈوÇز ÇهشعÊÈÇكÇÊ';
$strRelations = 'ÇهعيÇÈك';
$strReloadFailed = ' شگÇÏÉ Êطځٌه ÎÇكصىMySQL.';
$strReloadMySQL = 'شگÇÏÉ Êطځٌه MySQL';
$strReloadingThePrivileges = 'مٌÏ شگÇÏÉ معÇزÉ ÇهفهÇطٌÇÊ.';
$strRememberReload = 'Êㄓنٌع هشگÇÏÉ Êطځٌه ÇهÎÇÏځ.';
$strRemoveSelectedUsers = 'شطㄓل ÇهځـÊÎÏځٌو ÇهځطÏÏٌو';
$strRenameTable = 'ÊÛٌٌع شـځ ضÏيه شهً';
$strRenameTableOK = 'Êځ ÊÛٌٌع شـځىځ شهً %s  ضÏيه%s';
$strRepairTable = 'شفهÇط ÇهضÏيه';
$strReplace = 'شـÊÈÏÇه';
$strReplaceNULLBy = 'ÇـÊÈÏه NULL ÈÜ';
$strReplaceTable = 'شـÊÈÏÇه ÈٌÇوÇÊ ÇهضÏيه ÈÇهځهل';
$strReset = 'شهÛÇز';
$strResourceLimits = 'طÏيÏ ÇهځفÇÏع';
$strRevoke = 'شÈكÇه';
$strRevokeAndDelete = 'ÇـÊعضگ نه ÇهفهÇطٌÇÊ ÇهلگÇهÉ ځو ÇهځـÊÎÏځٌو Ëځ Çطㄓلىځ ÈگÏ ㄓهن.';
$strRevokeAndDeleteDescr = 'ـيل ÊÈمً ÇهفهÇطٌÉ USAGE هÏً ÇهځـÊÎÏځٌو طÊً ٌÊځ شگÇÏÉ معÇزÉ ÇهفهÇطٌÇÊ.';
$strRevokeGrant = 'شÈكÇه Grant';
$strRevokeGrantMessage = 'همÏ ژÈكهÊ شځÊٌÇغ Grant هÜ %s';
$strRevokeMessage = 'همÏ ژÈكهÊ ÇهژځÊٌÇغÇÊ هÜ %s';
$strRevokePriv = 'شÈكÇه شځÊٌÇغÇÊ';
$strRowLength = 'كيه Çهفل';
$strRowSize = ' ځمÇـ Çهفل ';
$strRows = 'فليل';
$strRowsFrom = 'فليل ÊÈÏژ ځو';
$strRowsModeFlippedHorizontal = ')گوÇيٌو ځهÊل�É( ژلمٌÇٍ';
$strRowsModeHorizontal = 'ژلمٌ';
$strRowsModeOptions = ' %s ي شگÇÏÉ Çهعسيـ ÈگÏ %s طمه';
$strRowsModeVertical = 'گځيÏٌ';
$strRowsStatistic = 'شطفÇصٌÇÊ';
$strRunQuery = 'شعـÇه ÇهشـÊگهÇځ';
$strRunSQLQuery = 'Êولٌㄓ شـÊگهÇځ/شـÊگهÇځÇÊ SQL گهً مÇگÏÉ ÈٌÇوÇÊ %s';
$strRunning = ' گهً ÇهځغيÏ %s';
$strRussian = 'ÇهعيـٌÉ';

$strSQL = 'SQL';
$strSQLExportType = 'ويگ ÇهÊفÏٌع';
$strSQLOptions = 'ÎٌÇعÇÊ SQL';
$strSQLParserBugMessage = 'ىوÇن ÇطÊځÇه ژون گËعÊ گهً Îهه لٌ ځÏمم� SQL. عضÇزٍ ÇÎÊÈع ÇـÊگهÇځن ÈÏم�Éؤ يÊژن�Ï ځو ژو گهÇځÇÊ ÇهÊوفٌف فطٌطÉ يځÊكÇÈمÉ. Èگق ژـÈÇÈ ÇهشÎلÇم ÇهژÎعً مÏ Êنيو ژون ÊطÇيه Êطځٌه ځهل ٌطÊيٌ گهً ÈٌÇوÇÊ Ûٌع وف�ٌÉ ÎÇعض ځوكمÉ ÇهÊوفٌف. ٌځنون ژٌقÇٍ ÊضعÈÉ ÇـÊگهÇځن ÈيÇـكÉ ـكع ژيÇځع MySQL. مÏ ÊـÇگÏن عـÇهÉ Îكژ ÎÇÏځ MySQL ژÏوÇىؤ شو نÇوÊ ىوÇن يÇطÏÉؤ گهً ÊÔÎٌف ÇهځÔنهÉ. شو Èمٌ ىوÇن ځÔÇنه ژي شو ژÎلم ÇهځÏم�م لٌ طٌو وضط ÇـÊÎÏÇځ ـكع ÇهژيÇځعؤ عضÇزٍ مه�ف طضځ ÇـÊگهÇځن هÇـÊگهÇځ يÇطÏ ٌـÈÈ ÇهځÔنهÉؤ يمځ ÈشعـÇه Êمعٌع Îهه ځگ ضغز ÇهÈٌÇوÇÊ لٌ ځوكمÉ Çهمف� ژÏوÇى:';
$strSQLParserUserError = 'ٌÈÏي ژو ىوÇن Îكژ لٌ ÇـÊگهÇځ SQL. ـيل ÊـÇگÏن عـÇهÉ ÇهÎكژ ځو ÎÇÏځ MySQL ژÏوÇى لٌ ÊÔÎٌف ÇهځÔنهÉؤ شو نÇو ىوÇن يÇطÏÉؤ.';
$strSQLQuery = 'شـÊگهÇځ-SQL';
$strSQLResult = 'وÇÊض ÇـÊگهÇځ SQL';
$strSQPBugInvalidIdentifer = 'ځگع�ل Ûٌع فÇهط';
$strSQPBugUnclosedQuote = 'گهÇځÉ Êوفٌف Ûٌع ځÛهمÉ';
$strSQPBugUnknownPunctuation = 'وف Êومٌك Ûٌع ځگعيل';
$strSave = 'طلÜÜÙ';
$strSaveOnServer = 'شطلÙ گهً ÇهÎÇÏځ لٌ ÇهÏهٌه %s';
$strScaleFactorSmall = 'وـÈÉ Çهطضځ ÇهځطÏÏÉ فÛٌعÉ ضÏÇ هځهÇصځÉ ÇهځÎكك لٌ فلطÉ يÇطÏÉ.';
$strSearch = 'شÈطË';
$strSearchFormTitle = 'شÈطË لٌ مÇگÏÉ ÇهÈٌÇوÇÊ';
$strSearchInTables = 'ÏÇÎه ÇهضÏيه)ÇهضÏÇيه(:';
$strSearchNeedle = 'ÇهنهځÇÊ ژي Çهمٌځ ÇهځكهيÈ ÇهÈطË گوىÇ (wildcard: "%"):';
$strSearchOption1 = 'گهً Çهژمه ژطÏ ÇهنهځÇÊ';
$strSearchOption2 = 'نه ÇهنهځÇÊ';
$strSearchOption3 = 'ÇهضځهÉ ÈÇهقÈك';
$strSearchOption4 = 'نفٌÛÉ ځكÇÈمÉ';
$strSearchResultsFor = 'شÈطË لٌ ÇهوÊÇصض گو "<i>%s</i>" %s:';
$strSearchType = 'شÈطË:';
$strSecretRequired = 'ٌطÊÇض ځهل ÇهشگÏÇÏ ÇهÂو شهً نهځÉ Çهځعيع Çهـعٌ�É.';
$strSelect = 'شÎÊٌÇع';
$strSelectADb = 'شÎÊع مÇگÏÉ ÈٌÇوÇÊ ځو ÇهمÇصځÉ';
$strSelectAll = 'ÊطÏٌÏ Çهنه';
$strSelectFields = 'شÎÊٌÇع طميه (گهً Çهژمه يÇطÏ):';
$strSelectNumRows = 'لٌ ÇهشـÊگهÇځ';
$strSelectTables = 'شÎÊع ÇهضÏÇيه';
$strSend = 'طلÙ نځهل';
$strSent = 'ژّعـْه';
$strServer = 'ÎÇÏځ';
$strServerChoice = 'شÎÊٌÇع ÇهÎÇÏځ';
$strServerStatus = 'ÈٌÇوÇÊ ÇهÊÔÛٌه';
$strServerStatusUptime = 'ځقً گهً گځه ÎÇÏځ MySQL ځÏÉ %s. ÈÏژ Çهگځه لٌ %s.';
$strServerTabProcesslist = 'ځگÇهِضÇÊ';
$strServerTabVariables = 'ځÊÛٌ�عÇÊ';
$strServerTrafficNotes = '<b>ـٌ�ع ÇهÎÇÏځ</b>: ÊÙىع ىㄓى ÇهضÏÇيه شطفÇصٌÇÊ ـٌ�ع ÈٌÇوÇÊ ÇهÔÈنÉ هىㄓÇ ÇهÎÇÏځ ځوㄓ ÊÔÛٌهى.';
$strServerVars = 'ځÊÛٌ�عÇÊ يژگÏÇÏÇÊ ÇهÎÇÏځ';
$strServerVersion = 'شفÏÇعÉ ÇهځغيÏ';
$strSessionValue = 'مٌځÉ ÇهضهـÉ';
$strSetEnumVal = 'شㄓÇ نÇو ويگ Çهطمه ىي "enum" ژي "set", ÇهعضÇز شÏÎÇه Çهمٌځ ÈشـÊÎÏÇځ ىㄓÇ ÇهÊوـٌم: \'a\',\'b\',\'c\'...<br />شㄓÇ نوÊ ÊطÊÇض Èژو Êقگ گهÇځÉ ÇهÔعكى ÇهځÇصهى ههٌـÇع ("\") ژي گهÇځÉ ÇهشمÊÈÇـ ÇهلعÏٌى ("\'") لٌځÇ Èٌو Êهن Çهمٌځ, شضگهىÇ نÔعكى ځÇصهى ههٌـÇع (ځËهÇٍ \'\\\\xyz\' ژي \'a\\\'b\').';
$strShow = 'گعق';
$strShowAll = 'ÔÇىÏ Çهنه';
$strShowColor = 'ژÙىع Çههيو';
$strShowCols = 'ÔÇىÏ ÇهژگځÏى';
$strShowDatadictAs = 'Êوـٌم مÇځيو ÇهÈٌÇوÇÊ';
$strShowFullQueries = 'شگعق ÇهÇـÊگهÇځÇÊ نÇځهÉ';
$strShowGrid = 'ژÙىع ÊÎكٌك ÇهضÏيه';
$strShowPHPInfo = 'گعق ÇهځگهيځÇÊ ÇهځÊگهمÉ È  PHP';
$strShowTableDimension = 'شÙىÇع ژÈگÇÏ ÇهضÏÇيه';
$strShowTables = 'ÔÇىÏ ÇهضÏيه';
$strShowThisQuery = ' گعق ىㄓÇ ÇهشـÊگهÇځ ىوÇ ځعÉ ژÎعً ';
$strShowingRecords = 'ځÔÇىÏÉ ÇهـضهÇÊ ';
$strSimplifiedChinese = 'ÇهفٌوٌÉ ÇهځÈـكÉ';
$strSingly = '(لعÏٌ)';
$strSize = 'Çهطضځ';
$strSort = 'Êفوٌل';
$strSortByKey = 'عÊ�È طـÈ ÇهځلÊÇط';
$strSpaceUsage = 'ÇهځـÇطÉ ÇهځـÊÛهÉ';
$strSplitWordsWithSpace = 'ÇهنهځÇÊ ځلفيهÉ Èطعل ځـÇلÉ (" ").';
$strStatCheckTime = 'ÇهÊطمم ÇهژÎٌع';
$strStatCreateTime = 'ÇهشوÔÇز';
$strStatUpdateTime = 'ÇهÊطÏٌË ÇهژÎٌع';
$strStatement = 'ژيÇځع';
$strStatus = 'يق�گ';
$strStrucCSV = 'ÈٌÇوÇÊ CSV';
$strStrucData = 'ÇهÈوٌÉ يÇهÈٌÇوÇÊ';
$strStrucDrop = ' شقÇلÉ \'طㄓل ضÏيه شㄓÇ نÇو ځيضيÏÇ\' لٌ ÇهÈÏÇٌÉ';
$strStrucExcelCSV = 'ÈٌÇوÇÊ CSV هÈعوÇځض ځٌنعيـيلÊ شنـه';
$strStrucOnly = 'ÇهÈوٌÉ لمك';
$strStructPropose = 'ÇمÊعط ÈوÇز ÇهضÏيه';
$strStructure = 'ÈوÇز';
$strSubmit = 'شعـÇه';
$strSuccess = 'ÇهÎÇف Èن Êځ Êولٌㄓى ÈوضÇط SQL-شـÊگهÇځ';
$strSum = 'Çهځضځيگ';
$strSwedish = 'ÇهـيٌÏٌÉ';
$strSwitchToTable = 'ÈÏ�ه شهً ÇهضÏيه ÇهځوـيÎ';

$strTable = 'ÇهضÏيه ';
$strTableComments = 'ÊگهٌمÇÊ گهً ÇهضÏيه';
$strTableEmpty = 'شـځ ÇهضÏيه لÇعÛ!';
$strTableHasBeenDropped = 'ضÏيه %s طّㄓلÊ';
$strTableHasBeenEmptied = 'ضÏيه %s ژّلعÛÊ ځطÊيٌÇÊىÇ';
$strTableHasBeenFlushed = 'همÏ Êځ شگÇÏÉ Êطځٌه ÇهضÏيه %s  ÈوضÇط';
$strTableMaintenance = 'فٌÇوÉ ÇهضÏيه';
$strTableOfContents = 'ضÏيه ÇهځطÊيٌÇÊ';
$strTableOptions = 'ÎٌÇعÇÊ ÇهضÏيه';
$strTableStructure = 'ÈوٌÉ ÇهضÏيه';
$strTableType = 'ويگ ÇهضÏيه';
$strTables = '%s  ضÏيه (ضÏÇيه)';
$strTblPrivileges = 'فهÇطٌÇÊ ÎÇفÉ ÈÇهضÏيه';
$strTextAreaLength = ' ÈـÈÈ كيهى,<br /> لځو ÇهځطÊځه ژو ىㄓÇ Çهطمه Ûٌع مÇÈه ههÊطعٌع ';
$strThai = 'ÇهÊÇٌهوÏٌÉ';
$strTheContent = 'همÏ Êځ شÏÎÇه ځطÊيٌÇÊ ځهلن.';
$strTheContents = 'همÏ Êځ شـÊÈÏÇه ځطÊيٌÇÊ ÇهضÏيه ÇهځطÏÏ ههفليل ÈÇهځلÊÇط Çهځځٌغ ژي ÇهژـÇـٌ ÇهځځÇËه هىځÇ ÈځطÊيٌÇÊ Çهځهل.';
$strTheTerminator = 'لÇفه Çهطميه.';
$strThisHost = 'ىㄓÇ Çهځقٌل';
$strThisNotDirectory = 'هځ ٌنو ىㄓÇ ÏهٌهÇٍ';
$strThreadSuccessfullyKilled = 'Êځ شٌمÇل Çهگځهٌ�É %s ÈوضÇط.';
$strTime = 'يمÊ';
$strToggleScratchboard = 'toggle scratchboard';
$strTotal = 'Çهځضځيگ';
$strTotalUC = 'ځضځيگ نه�ٌ';
$strTraditionalChinese = 'ÇهفٌوٌÉ ÇهÊمهٌÏٌÉ';
$strTraffic = 'ÈٌÇوÇÊ ـٌع';
$strTransformation_image_jpeg__inline = 'ٌÙىع فيعÉ ځفÛعÉ ههقÛك گهٌىÇؤ ÇهÎٌÇعÇÊ:  Çهگعقؤ ÇهÇعÊلÇگ ÈÇهÈنـه )يٌÈمٌ ÇهÊوÇـÈ Çهژفهٌ ههطضځ(.';
$strTransformation_image_jpeg__link = 'ٌÙىع عÇÈكÇٍ هىㄓى ÇهفيعÉ (direct blob download, i.e.).';
$strTransformation_image_png__inline = 'شگعق فيع/jpeg: Èولـ Çهـكع';
$strTransformation_text_plain__dateformat = 'ٌÊكه�È TIME, TIMESTAMP ژي DATETIME يÇهÊوـٌم ÈÇـÊÎÏÇځ Êوـٌم ÇهÊÇعٌÎ Çهځطهٌ ÇهÎÇف Èن. ÇهÎٌÇع Çهژيه ىي ÇهÊگÏٌه )ÈÇهـÇگÇÊ) يÇهㄓٌ ـيل ٌقÇل شهً timestamp )فلع ÈÔنه ÇلÊعÇقٌ(. ÇهÎٌÇع ÇهËÇوٌ ىي Êوـٌم ÊÇعٌÎ ځÎÊهل ÈوÇزٍ گهً ÇهځÊÛٌعÇÊ ÇهځÊيلعÉ هÜPHP strftime().';
$strTransformation_text_plain__external = 'هٌونـ لمك: ٌÔÛ�ه ÊكÈٌمÇٍ ÎÇعضٌÇٍ ي ٌميځ ÈÊÛㄓٌÉ ÈٌÇوÇÊ Çهطمه گÈع ÇهځÏÎه ÇهÇلÊعÇقٌ. ٌـÊعضگ ځÎعضÇÊ ÇهÊكÈٌم ÇهÇلÊعÇقٌÉ. ÇهمٌځÉ ÇهÇلÊعÇقٌÉ ىٌ Tidyؤ نٌ ÊكÈگ ÔٌلعÉ وف HTML ÈÔنه ضځٌه. هژـÈÇÈ ژځوٌÉؤ گهٌن ژو Êميځ ÈÊگÏٌه Çهځهل libraries/transformations/text_plain__external.inc.php يشقÇلÉ ÇهژÏيÇÊ ÇهÊٌ ÊعٌÏ ژو Êـځط هىÇ ÈÇهگځه. ÇهÎٌÇع Çهژيه گوÏ ㄓهن ىي عمځ ÇهÈعوÇځض Çهㄓٌ ÊعٌÏ ژو ÊـÊÎÏځى يÇهÎٌÇع ÇهËÇوٌ ىي ÇهځÊÛٌعÇÊ ههÈعوÇځض. ـيل ٌميځ ÇهÎٌÇع ÇهËÇهËؤ شو طÏÏ ÈمٌځÉ 1ؤ ÈÊطيٌه ÇهځÎعضÇÊ ÈÇـÊÎÏÇځ htmlspecialchars() )ÇهمٌځÉ ÇهÇلÊعÇقٌÉ 1(. ځÊÛٌع عÇÈگؤ شو طÏÏ ÈمٌځÉ 1 ـيل ٌقٌل ÇهفلÉ NOWRAP شهً ÇهÎهٌÉ ÇهطÇيٌÉ طÊً ٌفÈط ÇهځÎعض Èژنځهى ÈÏو شگÇÏÉ Êوـٌم )ÇهمٌځÉ ÇهÇلÊعÇقٌÉ 1(.';
$strTransformation_text_plain__formatted = 'ٌّÈمٌ ÇهÊوـٌم Çهژفهٌ ههطمه. هÇ ٌÊځ گځه ژٌ Escaping.';
$strTransformation_text_plain__imagelink = 'ÊÙىع فيعÉ يعÇÈكؤ ٌÊطيٌ Çهطمه گهً شـځ Çهځهلؤ ÇهÎٌÇع Çهژيه ىي ـÇÈمÉ ځËه "http://domain.com/"ؤ يÇهÎٌÇع ÇهËÇوٌ ىي Çهگعق ÈÇهÈنـهؤ يÇهËÇهË ىي ÇهÇعÊلÇگ.';
$strTransformation_text_plain__link = 'ÊÙىع عÇÈكÇٍؤ Çهطمه ٌطÊيٌ شـځ Çهځهلؤ يÇهÎٌÇع Çهژيه ىي ـÇÈمÉ ځËه "http://domain.com/"ؤ يÇهÎٌÇع ÇهËÇوٌ ىي ÇهگويÇو ههعÇÈك.';
$strTransformation_text_plain__substr = 'ٌÙىع لمك ضغزٍ ځو Çهوف. ÇهÎٌÇع Çهژيه ٌطÏÏ ځنÇو ÈÏز Ùىيع Çهوف )فلع ÈÔنه ÇلÊعÇقٌ(. ÇهÎٌÇع ÇهËÇوٌ ىي ÊگÏٌه نځ� Çهوف ÇهځـÊعضگ. شو نÇو لÇعÛÇٍؤ ٌـÊعضگ نه Çهوف ÇهÈÇمٌ. ÇهÎٌÇع ÇهËÇهË ٌگعل ژٌ ځو Çهژطعل ـيل ÊقÇل شهً ÇهځÎعضÇÊ گوÏ ÇـÊعضÇگ ضغز ځو Çهوف )... ÈÔنه ÇلÊعÇقٌ(.';
$strTransformation_text_plain__unformatted = 'ٌÙىع وف ÔٌلعÉ HTML نيطÏÇÊ. هÇ ٌÙىع ژٌ Êوـٌم HTML.';
$strTruncateQueries = 'شطㄓل ÇهÇـÊگهÇځÇÊ ÇهځگعيقÉ';
$strTurkish = 'ÇهÊعنٌÉ';
$strType = 'Çهويگ';

$strUkrainian = 'ÇهژنعÇوٌÉ';
$strUncheckAll = 'شهÛÇز ÊطÏٌÏ Çهنه';
$strUnicode = 'ٌيوٌنيÏ';
$strUnique = 'ځځٌغ';
$strUnknown = 'Ûٌع ځگعيلÉ';
$strUnselectAll = 'شهÛÇز ÊطÏٌÏ Çهنه';
$strUpdComTab = 'عضÇز عÇضگ ÇهÊيËٌم هنٌلٌÉ ÊطÏٌË ضÏيه Column_comments.';
$strUpdatePrivMessage = 'همÏ ضÏÏÊ يطÏËÊ ÇهشځÊٌÇغÇÊ هÜ %s.';
$strUpdateProfile = 'ÊضÏٌÏ Çهگعق ÇهضÇوÈٌ:';
$strUpdateProfileMessage = 'همÏ Êځ ÊضÏٌÏ Çهگعق ÇهضÇوÈٌ.';
$strUpdateQuery = 'ÊضÏٌÏ شـÊگهÇځ';
$strUpgrade = 'گهٌن ÇهÊطÏٌË شهً %s %s ژي هÇطمÇ.';
$strUsage = 'ÇهځـÇطÉ';
$strUseBackquotes = 'طځÇٌÉ ژـځÇز ÇهضÏÇيه ي Çهطميه È "`" ';
$strUseHostTable = 'ÇـÊÎÏځ ÇهضÏيه Çهځقٌل';
$strUseTables = 'شـÊÎÏځ ÇهضÏيه';
$strUseTextField = 'ÇـÊÎÏځ طمه وف�';
$strUseThisValue = 'ÇـÊÎÏځ ىㄓى ÇهمٌځÉ';
$strUser = 'ÇهځـÊÎÏځ';
$strUserAlreadyExists = 'شـځ ÇهځـÊÎÏځ %s ځيضيÏ ځـÈمÇٍ!';
$strUserEmpty = 'شـځ ÇهځـÊÎÏځ لÇعÛ!';
$strUserName = 'شـځ ÇهځـÊÎÏځ';
$strUserNotFound = 'ÇهځـÊÎÏځ ÇهځطÏÏ Ûٌع ځيضيÏ لٌ ضÏيه ÇهفهÇطٌÇÊ.';
$strUserOverview = 'ځگهيځÇÊ ÇهځـÊÎÏځ';
$strUsers = 'ÇهځـÊÎÏځٌو';
$strUsersDeleted = 'Êځ طㄓل ÇهځـÊÎÏځٌو ÇهځطÏÏٌو ÈوضÇط.';
$strUsersHavingAccessToDb = 'ÇهځـÊÎÏځٌو ㄓيٌ فهÇطٌÉ Çهيفيه شهً &quot;%s&quot;';

$strValidateSQL = 'ÇهÊطمم ځو ÇـÊگهÇځ SQL';
$strValidatorError = 'هځ ٌځنو ÊÔÛٌه ځطمم SQL. ÇهعضÇز ÇهÊژنÏ ځځÇ شㄓÇ نوÊ ËÈ�Ê�Ê شقÇلÇÊ PHP نځÇ ىي ځÔعيط لٌ %sÇهÊيËٌم%s.';
$strValue = 'Çهمٌځى';
$strVar = 'ځÊÛٌ�ع';
$strViewDump = 'گعق ÈوٌÉ ÇهضÏيه ';
$strViewDumpDB = 'گعق ÈوٌÉ مÇگÏÉ ÇهÈٌÇوÇÊ';
$strViewDumpDatabases = 'شگعق ژي شطلÙ ÈوÇز ميÇگÏ ÇهÈٌÇوÇÊ.';

$strWebServerUploadDirectory = 'Ïهٌه Êطځٌه ÇهځهلÇÊ گهً ÎÇÏځ ÇهÔÈنÉ';
$strWebServerUploadDirectoryError = 'ÇهÏهٌه Çهㄓٌ طÏÏÊى هÊطځٌه گځهن هÇ ٌځنو Çهيفيه شهٌى.';
$strWelcome = 'ژىهÇٍ Èن لٌ %s';
$strWestEuropean = 'ژيعيÈÇ ÇهÛعÈٌÉ';
$strWildcard = 'طعل ÔÇځه';
$strWindowNotFound = 'هځ ٌځنو ÊطÏٌË وÇلㄓÉ ÇهځÊفلط ÇهځـÊىÏلÉ. ٌÈÏي ژون ژÛهمÊ ÇهعصٌـٌÉ ژي ژو ځـÊگعقن ٌځوگ ÇهÊطÏٌË گÈع ÇهويÇلㄓ ÈـÈÈ شگÏÇÏÇÊ ÇهژځÇو.';
$strWithChecked = ': گهً ÇهځطÏÏ';
$strWritingCommentNotPossible = 'نÊÇÈÉ ÇهÊگهٌم Ûٌع ځځنو';
$strWritingRelationNotPossible = 'نÊÇÈÉ ÇهگهÇمÉ Ûٌع ځځنوÉ';
$strWrongUser = 'Îكژ شـځ ÇهځـÊÎÏځ/نهځÉ Çهـع. ÇهÏÎيه ځځويگ.';

$strXML = 'XML';

$strYes = 'وگځ';

$strZeroRemovesTheLimit = 'ځهÇطÙÉ: ÊÛٌٌع ىㄓى ÇهÎٌÇعÇÊ ههعمځ 0 )فلع( ٌهÛٌ ÇهطÏ�.';
$strZip = '"zipped" "ځقÛيك"';

$strGeorgian = 'Georgian';  //to translate
$strCzechSlovak = 'Czech-Slovak';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
$strMaximumSize = 'Maximum size: %s%s';  //to translate
$strConnectionError = 'Cannot connect: invalid settings.';  //to translate
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strNeedPrimaryKey = 'You should define a primary key for this table.';  //to translate
$strIgnoreInserts = 'Use ignore inserts';  //to translate
$strAddIfNotExists = 'Add IF NOT EXISTS';  //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate
$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strAfterInsertSame = 'Go back to this page';  //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate
$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDBRename = 'Rename database to';  //to translate
$strOperator = 'Operator';  //to translate
$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
$strCalendar = 'Calendar';  //to translate
$strRefresh = 'Refresh';  //to translate
$strDefragment = 'Defragment table';  //to translate
$strNoRowsSelected = 'No rows selected';  //to translate
$strSQPBugSyntaxError = 'Syntax error';  //to translate
$strSpanish = 'Spanish';  //to translate
$strStrucNativeExcel = 'Native MS Excel data';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate
$strServerNotResponding = 'The server is not responding';  //to translate
$strTheme = 'Theme / Style';  //to translate
$strTakeIt = 'take it';  //to translate
?>
