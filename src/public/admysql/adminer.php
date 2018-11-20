<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, https://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.3.0
*/error_reporting(6135);$Rc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Rc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$ii=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($ii)$$X=$ii;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃþÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ýÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress(" ‚ \$I´ào9#AÐèp9Ž…âói„ðc2…Æ#y¼ès:Œ'ÄhÆo6‹ÌÆóqÐZa;™Nrƒ(¼h.‹†óÌç*–K¦) ¸Úi“O„B	°Ø;Ž'¹9²:˜ÇªÕ@Âc5™ÎFó©¸ÉX\rÆF!˜Àw+–Ž‡#(¼b.\rDc)ÈÈa7E„‘¦š,\$M‡c)ÐÒcÁð1iÎúi3â§#= un>˜j†ú±Ê±\\­ŽgC)â\\d2ÉäXé`èÝ,2ŽÏ¢ã„Ï2¦ŽÆ“™§XdÑékS(ÔÌ5î·›î„tl¤ù5q†E»®·`Ük\røÃ—oMYŒÆA®¯[¯ØÂ;CpêÊØO3r1+ë\nÆÿ«„¼Ž»²á8Ž0Ê2,á¸®;Òõ¯¯r°ùAksX×­ƒdý-«þ¾ÀJòÀ±,‹4´]ŽÛÙ>\rCíDÏÓøÛ7 \\5£˜ÐPáCª«¸Ô+£èÐk‚\\âC(t†«£40³ŒòÜÞŒƒ\"3‡App2¡\0c8*D\0£ˆrQ/ŽÀ@™» @‡4*Þ …©ˆÒ3¡² äŠ©ò“ß*5P\$_ÆAÒµ­­ÐÐK4D¹/L6Î¿¡€AUA„ú¡ˆq>‡sDÔ7M“tá9Nˆâü¾Ïðé=†5}\0004ÐAI4íJ»-Q#-F¶ôz›@ÑŠÏM-Kc@4u\n[hÚqÍ«HP÷G/­¡,Ç2¿³œãU4¥:#Ø2c½:\rüwTó3u|_Wæx×um_zNµûL·WÓ½‡'Ø³õA3 P™DaN#;ßc4sŒÏí%c£?æ†I“ZZçw·°Y€xªúÏäöFev6]ŽøöEšæú(å`ÏClùiy†›™iùKZŒ3L×6†UÞI:g£FƒÆ@F†¡˜Â1ú„ìïîR:`ònÂhÂ_¼?£Ê–¯»Å\\l›0k´`.ÿŸr<žÕK[;vÊóPú3\r,PÈËƒÜÔ9Ž`Â<‡JDZö1Ì€ÙÁÑoî/ÅVõÏ8×CmßTM³yÝÕu^¥«å´\rBº#èà=á~WOØ†ïrøkZ¨(Î=öz›Úo!Ò4ß~=ëA{Þ‚-Dßø\r[êLcÄ™ii×çî\$í†Ö¥ÖÐ:\$&LÞ‡'ßb=5,¨‡—\0iQìpP:@Ø”“€rí±L-°hAª`&è8@gÜ¼ú»b:3óî™’âel»‚ôI`ou|Ü½ÐÜ¨taÐ<‡\0ÊH)Ô¯€¾»ÆS]«æY‘ôÃè€q°Á„:†ÇJG²Jl!¼;¼†XË7Fè¤Ep]ƒˆu\r0äF*#eŒê½–GHÙâ	F\"Ëí\\4íƒ\$dŒÑñWÇè­ C»«\rçÈ=½•b‚Õ¡C(¤þ¯•aé*ÅÓGRêÁÒú\rå€éÃŠKâ”])l4¥Ðt\rÁ«<HáÌàÑÜ8,ÆÜ5KÉvKaStòÖpÝ(f,½*¡Ô6†à÷&Ž4œRxÒJ\0wO‘™s\r´³ØÃ(4AÜ62ð\rÕÚsOÍy»òX¸:³½´L8ÈHƒ„˜FÜ;Ð4ÏÃ\$þ ¤~ËóXeMë†P–PÐº½¨j¢ñG.ƒv_Kí'0ç±9\$æ4‡pƒ f'AÒ¤ 'þæg,ç¥ÔÀÜ­þW:×7a´™#~P9È*“ÁÚTr›};¦4|9R…Q	ñÔší…Ü¦×ˆïg³N,9ê¼cvãÅ\"¥jMg9è²~×ä	–T|7MIc[Nb)	©Ò3šsÞh.\ré¦	×r´ƒ%M[U<î9·:t¦ˆ.­Ä5¯•÷4’i`Bt\n]Ù‹)eƒ-ž³KÞ\rÀÿc|„ Ö›³QñÅ1n%œËT¼\rÓ»Å”1ŸÀöà¢ƒåhä4éWPÚíÀp€êá·Ãv_Íe¯_—*(ÜÓ¥\"2ý~/hÖƒµüÛˆ!¼.XÞä¼2ËîÞÝ«Àü…Ý»÷†.,;Ë+]w†FV\"/·Z¾Äì7e|ÇË÷OÔi\r–\$Ý‡0âê 1¢¾lƒ…Ý8êrÌ€aºÀbZtŒ|°Âi}Y‡€v“W.\$V˜bÅ¬ÃƒÎ \$çö¡ÜYiÖdŽÊŽ÷^mwMÚM\r<1‡PäLà‚N:Fôß‡9¯¦Éµtá	§VªÑÈ2^SµÆ=¼LÐ3,co-CW*ñéÍk+\0Ä1§0dŽ‘æ\rró	PàËFè• „ÜÖ÷qVå‘Ò½yòÚµÊ	nÉ½>Kv~47¶q	ž»ÙžFèÔJë“äÙµÑ³yèƒ¨ñS=\\lkÐÖjï;úNd·b0b[FpáÔEØNª'Æ±ògU+†¨°Ú¶ÃÄÇ`_Àó¦rNË<ì‡‘˜ÁCkmiÍ=¯†;99[&½ŽžöSRÜí[15³¶÷†œ‹'!ÀäŠ´e—é¥ÃÂ@G¼÷&Åû¯?åý¦ÔöªÄiO*%PG Š@s€„/¼œó¶xKÙè‘ƒ½í¾\$Uõ\rúsˆaÂ™Äø©Õå‚õÙ­šÚ›[ÚsšÂ[¯Ìóe^o-'MÊã52¯¬€ƒ¡š`üØÑ›ÒnšÍ`“Ëv´h	ûâ’îð²â¹	Ç-‡ÐF°ˆdaÊjSn1F¡ÞyŸüw¥M­GÓ´‡S¬©ýe¾`ZêÅçu2‘ûÚêüûõxïžŽ¬UJÇéÄ¯a [‚H&Îmmg³¯ñÆŠÊé9~×X6ëº¿RWšÃ“\"¼à7=ŽæŽA³ôí¦Ö:¬\nnAl8@µ\$¬ÖlW2EZ!ˆ5œoxešŸ¿·©géÏR“H¬½å-ƒív³lgYðÀÉZd\\ŽUáÁŒÑZ†NôÍÓº÷ÏN†^À`Ì_\\;†Üš/·~i½×²Ïö–OôìÀúÎy‹s@ÊsŠ^ûL¼òè¶(é’|Èrí#r÷b6\0ðKã¤! Ø>õñŽ„Ôí'\0@	…NS é \\¦`åT«\nŒaDÈxäÕˆ~ƒwM(Ðh‚’¯^hŒüäP/%æ¨Žtèjb~MŽ‚¬®†¬‡.¾ì.Æì°|î„ÏÎzñfLÅ`VF¬Èßƒ¦É°²G0¶Å0»\n`@© ’I({0Ö).AMNŽW\\Pm¿\r+ÄX`vÒCt\nˆMOØ)°20*~Ã`8g~Þ@p¨ ÷âe„ëÐþÿ`t\$PŒGâ²(0ŽÓ0	îHé\r@Ê#û‡bÝIòÝ°PÎ¼ì\$ìNÈ¸ñ<¼pÝŒ1…0‰'æç®ÏÑ]©†Ã\nñÑ ûÄ&0ÐF0®o`Îâpþ™gT™¤ŠëÐ¾õ­4×1¥Ð±§|7n8¢ä(¡J`\n\nìê\n:¨@úM@ík~>äJ?/(6¯,Á¬†DæP€BDÃˆ\n€ãt‡b4I”2¬çú®,Ôá p\0B ¢!#\0o%!DQ!‘ÎHä’\rO&R:ÁÑ˜R8Irq\$´#&ÒhFÒv~ì†ò»%¤NHr(C‚ÆªÔª	e)D„›DV@.ÿ#.](@Z¸ÄxqàÄÀh3#w( à\r\0àèâ\ròu&`[-rÛ#²Öãq.\$—,òÒ¢=.Â^ òù'¢G-’¹'\$ó/ò?.#òô’øRÄ++ŒŠ\$öÎR¾@ÄÆÂHÒ‹2m­*/3&ÿ\$â!ðÃòË-Òðó!+ŽÁ(2Š\r¢}#ó_1°5’Ô ß)<ùS¼ë|ÌÄ}\"IÎ g,@hÏŒüg¹8	8Ó|ƒy\0lÒª	Ð@hÀSœ6³A8O#!'%ãû*äZ‘çK;Â»8’FnSŽ@w‰PuÎþO	F\rløá&¬-Ê|¨!Ðº‡Êo`v|'d|ƒú|è¨7%†ªÐ%ëz›B*\rÀÒˆl“‰¾ÈÌ¢`Þ)XG^méÒk¼ã2¯´e¶©l/¸Ùsæð&VÑ\rÔ\$DÔI u9ŒM<Àt%s':sÔª\n\\@l<-Ô\$hDSÁ%Ò™ðàG3»\$ieH+¥´ŠR®\"`FÍÀ`¥ÈþŠé·AìÐ„h“ÐR¨8Å²GHt¯HòGK”¼øoŠ%É	Œ®\"1§‹G@@ËÆ´iÆjd ]EÀjdÔê'ZÃ”ôUTùOÆbff»PbòdÔxÀ€Ò1“¥Ló¨¥(EÀbnƒêÌµI.<ˆ4ËOÎDVbøGÄ’Ï­ÌRUK3æ’`Ìt‰õEíüå,ST¨=êZ¥êc*’?²(å‚™HÒÇÖªCsŽéGUwYC­J2¤Ìõ›:ªYDs²nÒ)r¬,ÄY+ û\$(\\5Ò!7’M%M%u7\"l6Ã²1<À¶0*ˆ D6ö5€D YIõî5ó_bÆÿ:pšyüŒïÿâÜûÔ2 ô8¶…D¶ÄÚ×ç`Uðˆõö1Cµþƒ…cµô–du°;ŠH°¾ˆ6`­Ð–SVEIOÐb.ûãMb‡CÔXKÀ]cVcdö	cÖjˆ6XÞÄyeêLªŠB•.æ!øZ\r0Â‚\"b&jˆòìø%¬)ær¿®7?Å¯>Y>IŸ>‰W>Õ‰<UI£\nT. DŠ—3@E9LR©jÂV„Öµ`–¸u–¼%¶À(–Ç?lR¨6ÐTVÕ \"ŸmÕê‰T•–êHb‘oŒë/\\î\$soª–µ—¬SZŽ¼àþå×k(`¶\rÜUôÍç_@ºH€èww·7×„7‰x×xîw|@Lå7—v÷Q·k¶¿l\"il“ùlÅÑm-ŸmvÏ=éM·;>w?n”—\\Cktc/oQ—uvüÍ€auñ×Vóv@Ãxîæ—’Á÷…zÖ³{{W!{—&QËsO.\$Ç×9nï}uÁ<7D\r×I~Nm~€Í~×ð^ôQ·ùÀÍz7€š€á€k‘q8\n\\w³q×·rJ{—¿×ÄÚÙswÏ> ÝsÓë‚ô˜›Wáo)¿ox<¾6EpWö{—ûyàÍ€¤˜U…–¯zøa€øe8i{×+‡xs7-|ÇQ})nWA}²«}ø5~8~`uu˜•„-9x„ØQ]ÂŠØ\\¿xbW—#lXj\\xŒxs|…Ñ‚x}Xƒt8‰¸uXãoËâ˜èžøíGxžýØ¤Øô˜ùký‹Y†y	‹ÊŒ‚X{mùn8-’Ùƒxßƒ¹*©d'“/[“lâÜb™~ìg\$5™G‹]ùw»r™W|¹[ŒyˆçˆWÜ?¸‹t¹)Ž@i~ø™„‡¹X;yƒŠP„µ/k€ÊÉ¹…ù“”Ù—Y\n%Ù•—1‚9¥•÷Ó–YU‹nøÝ›vü-`Å—˜FG7d×Jê±œ·‘zW•a79‚Î@?c®õìO†àbÅivó-mu4Öï4”H‡&›\rw¡€Ó¡×¡y6@·¸*	 úMšãý\\’°ùµ~+¯DþÌhÐÍúˆÎU¡z“º_¢c”VG…¹Iqp‹yžYU?¹¡žøu|¹§‘Ù«–•ŒHº©g\rp55‘œš•„÷’õ@Ã¹KªyO‹™S™Ú±|:µ‘VÛŸXÏ–yýnÙ³ƒˆ—+â\r—ÚÑ~zÕ„Ù>ºò#-®¥qºçª¸»®×ÀZù£Œ»Ÿš¿¯ø3–ÚÇ„¿¡¸`]­—¥zšŸŠùÜ¹••›†Ø¿«%ÕŒ[9¯™c‚¹û¦ø×›%›X‘°šË´´sœ7U±yÍwñ·©×‡ª‘¶á¶XØo‘ó•ØË‡Ù©;}Ÿû–ûŽ@j»v'¸Ü6šG;¡µûc®›gºÛk¯oŸs»ya»·Ù»û¸;o™,\n²g:sS#¢\r²|\r²ø\$ü2BQ'Ãa/’ë+“V‘ Ç/“WÁÜ5-è™òø˜¼>¼B`¿Ã<,GWÀ’;/;-)žü^ëvšÈ@†e\nb•·SšFS',Ü=1R‹È’Ý.|+ÈRó/r¹0ó\r“\r/ÜŸ0¼(²{ÈÒo1‚=Å(ß¼.ü=0*\0rÊ™Ëà[5ræÄÉÆ|Ù¼žüÞô2óLÅœÁ-3—¼•7 ßÎ\\ÛÂÜÂ üù5\\=Î{7|¼Ñ5hð‹ÅA§¥¹È[\$}Íðò@'Òø?`éÓ)(½9ÏÝ6!Ý=Ð²;Ô<«-ÝB'½?Õ]IÍ€ÙY‹M[ƒÞæE;ÒÃ|é‹Ô}:²=AÔœ°I}C×Ý]Ó½SÔýIØ‘Ó½aÁ¢}×U{\$rÁ,IÅÇ´µÖÜƒ-Ý//€ð\r¼¡Òü\rÉ¢Û½0ÝÇÜ]zâ]ÑÓÝxâ!äyÇt.|ð%ý7]ÛØý…ÕâšG€n_ Æ>]ëèßàÅà2É+œD\r`Ê<JþÒ¹Ø [á~ÔÝ„ ýýàÍD€Ç¿¬ý-2qãÓÈ}ñä`¿ä¾Uß^OäŒB^MÍ^SÏ³5žgÐsÏ àþYÏ¾)5~{çý\rÏ\\¥Ï³eèœ[åwè ¿é,ç>é¾—-#ôk/å^ƒÃÞ¯ë<ûÌ] ÀŒ^ÉÛ2;5¼ûíÝ6²¹ê¡íœ­æ3q-sC3L+‹Á Ù*#¹ÚrÇÏ—äRv)’¸ÿ\"©C®ÿ=ëä³a-Ò{\$2kî3o(5çÞ£ñ²;íß#-Þ»ò“%öÞu—³	R4žïæÞ£ëSuó~«åSëý4_IŒ}pÿYßbó2\rÿo-ÿW÷^_Ê?yøiø|g1 eð,Õ¼<¿ ÏÏÃ(¼Á|%«ÁUÑ+œ“éÜ1Æ|9å_·#¼Eü\$—Ä\\PYœTÆ=-gÆ<gÆ½ãÇ<w^<o¤ëø²ùâœ‘ÄU1½6ôwÇ\$}åÏ7+ð“lê'8¦5ËÌsýÞtæ72¹õNs{›ù'@µ•®v|ž¦õ'?@eÆn{yS¢²ûG•:4Žv³ý]\$ø'm:åÕŽíucÉBñGU„úÎ¤yt]Zì·@:ÅWÐ-qùÌßjív»)÷uûº`vìh\0A	Növ`aÓ\$ìòb¥|©a{û¤°ïWm¥qÛ®ß\róô]ŠîG(:r	.ê‚k»Öîó\")­þNôsD\rÞjìX;­Öx;ÇR¸ðD‘¼áõx³Ãžâgˆ¼™â…³Æž\nñÇ„¥ãìëƒ3ë^”ç˜&=:ïÁyrjà	­¼Áòp „ë‡ž†ú÷§B„ð§ASì©	‡Í@MÆp±…sŒß;\n;¾¶ï-xÓØ^ÆöWz½©õ°Â[ÜÜöäÖ‰6É…{¡@j™‡»;Õï)’{Ü ¹	™¿)Ò„~jQÜøe‰>\$ÉNh|dß üO¿òÉ9{jláØ”X[Ã¡ôèÛh?“>žP¨}jZß{	è~BaÏo²‡»]Ê„•ÇK¾õÓ‘\n}‹þ_8†ÀNî~D6‚®Þf´¢>\$à\n.Ð'\$ü²FF0ð\0¦¶¢É­RÞHêg“*”È¦tI&ÖÀ„ƒû60C:	›~hóßžÐ");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIìÒf‰›\$±At^ sG²Étf6eŒ§yŒÊ()LäSÁÀP'…ÂáÌR'Ífq]\"˜s>	)â‘`œH2ŠEq9ˆÊ?ˆ*)‰”t'°ŽÏ§Ø\n	\ræs<ŒPi2INÆ*(=2ÌgXá¸è.3™N„Y4èB<’L—üîi©Ì¥2Ý´z=š0HøžÐ'·êŒšÃuÆtt:œÂ¡Èêe¹]`pX9ŒÞo5šgòóIœÜ,2O4ãÞÑ…MÆS¸(ˆa…Š#¾Äàç’ïø|¹G‚bèôüxœ^Z[Çä™G¼ÎuTvª(Òm@Vò¸(†¼ÈbN<ŠÈ`æâXä1É+Œä9J8Â2\r£K¶9ðhå	 Áè`…‹ÆëI8ä›±S±ãt÷2ƒ+,£ÆIºã £pæ9m@Ð:ƒ€æáxï)…ÐüC…Ãxä3…ñ4P7áü-4Çr\"p3Fhà…-5ƒ”U4Í‰¸\\6°ƒ<D\$®l—9ÍR4t7ƒdD3µpÞÎ“kÌ:)\\;° ÐÔð\r@Žt…\$4O£<þ†!pdÇÔÚQJ\rÌHî}:&Œ¨ˆÂÈ„Á5YWJ­˜‹±Â`ÓN£èbKNSÉÀÉa§Ž•ƒ´d>2WñÅ…bDj:9[21c„»È€:Xé@ËqË#“›4íL™'J”©+DHeÒ3¬.«O ÇKË°“ˆ…pV…át2Œwp;Æ“…íÿ\r?èOzDq.ª°Ð-†\"ìZñ®cèX3!/>PúFìsØÉ²±Ã0Í(òóˆ°Ê£€àŒ‚T63sVQo¸€SÎ‘ b²ß…^r\$É@C© r2)©Œ£ “VÀ)+nÜ·zÃÁúålÚè{³K#…À9‹{†Û¯lÀºìmÐQ¨ëh»*É—PÄ:¡c˜]´7ãàø=¡LŸŒi;”2û¿§­ÜÒ<\\Jí¤Øb¥n”…ƒ¥nÁ_iÓ´îJ\n†¢¨âòŽõC:ª„‘`N4¶Ì–È'Aw:4}ÊÛ£ÁW\080‘ÇL3õÊJ;èiú)\\„=/NŠu=ZV6&ceaè±ÂpÞÖ.[ëvŠtPZÞèX`Ö”õŒ+zú'¦ê9½.\$\$…Ó@\n\ré]_ïÙ®¢Âh¨kk¬Ms>`Ì–ƒj¹%\\9Ð¶ÆÔ('°jAˆ>BCd\"K\$	CAÆ ä„¤.Â².`‰â.EÑæ´–ÌÃyy\0‹D2Ï8t	Ð6†Ã8¬FL«´×ÞíâŒB*¬ð,Ò|\nx\\@ °@¸Ø3r ¬­ðÎWKQb,%…¯´DBfØÈ³D|ÍŒËE0/2>£Y!Ä†'õ™`æf™mHº<BãB0\r*\0Gxò‰nêY4‚¶¾Œ,žL²©º–öÅ%SÆ,ýv‡0ê‘–XòQÄ1†HId`‡!.ÔVÊ›H/ÅúÃ—ÀHãù0ÆUÁ¸0Â™©Ž`îLI©8ÖÃkŠ”2Œ4JYNÅ&8xä¥JØk:AKã¡nWØ!¦¿Iï;'ô³\":2ðê‹4Í~óJ„8ô£á’‘¨âG‡™\"MÊ=\rZ'ŽnÇi9F§œ“™rÆ’RÊt‚3\0Ÿ”Ò²Â2µy‚B^òèb'´ÒzÈÉ²(­#”d9Itµ&WØjNa¨ÚC(¥ j”Ä–?h‰ÂØj†¡™©Ö„Z\$0«¡Ò¯´J	A_\n†!TOó4Œ<{aôú?˜æo ú‚-¹–ÃÏ?Hlÿ\"2ƒy™=Úë¨ž R©ðœÑ„àš°–ÍŠëP&åG›ÀÁ4ƒË%()¤\r5Mª‚‰ÓLTí\0ÀºxBIç=ltvÄ2Jhvû´~/:èpý×:8\"Ð´5¡«‰0î#Ž*ì7ªøúÜ\nàq×>è¡G\$°â…):	ƒ»\"ù#ë¦KfI‡!vö+?{¡Íÿ¾Qg¥{ÏR÷Q øCäªŽ}Õ#¸éiIbgà„ÔXàÄÃÂù}ÅË`‹}3—%@îÁ{_kø}0ä±þÈ—Öp !°aï—<7«e•‰ÖF‡?¦¸¡î½XüDù­Ñ, ØÊCk‰ƒíU™ØL>£1‹§ÜÜ‡¥ã‡Œp0Ž#Ä\$²ÅâV)pYs5A˜:°ÊUÈ(9…5×™,F+&Ÿ*{âŒ-£Íìç:÷Ší :7¦þ:Ê™yPãè—´ŠÀXÏ+¤Ž’\nÞI;üþ\\s„÷Pà÷1‘‘ìÈr©¦NJËAT'-£”òk?ƒÙY@“¡Ïö±fÇÍbñŽ’”RîJÏiömÖB~ò©”K\rK«œtª4à÷;OŠKc”9%Hì5àÍd¢3ÙÀe8j¿P÷±[sð™9,ƒÄ˜—bzK‰µÁòW&e¢d8­ú§)ÄùÐuP°¿¾œ>‘#	P&„ÃP	ƒpbaÀ¨Í¨yñ£æß\$3}ïÐ{»áÝhyÊ(ÖdWø±ŠÅÙËÐ_±:°'AØ‚‡PæÃI\"Ù!ïŽ[`ûn8å»i/@ÈäðP	ÐfœÐŽå†©ˆV	À£ž•sÑCß8¡˜°Ny‰hÜñtEnAj.-åÄ6£ÀqwJÜ?œÃ¹”AÌhu	è™Ôsé¤AíáO7“·j›æ\n	]¿0›^Œ	ƒ\nYÁš\$„Î–_\rþ\$…u*÷Þ¡ÒEx/d¼pdRÝdÂõ:¤IÀoDÁ›®‡sQÉ™fàÜI¤öžâ8Ñ,óêKÑÏIsM@aq\n/™†ÌM˜R¹ ¢®Cþ-aÇa£¾™/·Hº!å4F…óIÿÉÅpÅ”MÏ«Šþ_Ø‡HÀ9{‚.´\$WÄûò#{ÌúÒ®Šü·:‰Súƒ£(À'lÕMY»:lÊž¤mD\$°\0¦¬×\0©ê´èº'¢~à¶ Z@º€¶ŒàVâº€L\"ãjnæ¾5€ðNlŠŽÌþþKšfj&›Mí•OøÓdbÓ°NÓð´O\$i)ÞNÐ(¿Ð!P)Ð0+Ð6HpN¦¢ØF‚àîÐ–ž¬?L\nžìÁ-h0˜Í,.e­¤\"Ž‡6m#õ	é’ýo&ò°ÒÞë¶gåZÅ@Pþk­&Ìº_ì¼%\\\\'ÀíÌ\0]\$(€5ƒN fqÎ|Ñp¨ `…â<ðîRîÎú úìÍ¸þ˜ìI\0Ñ¥þãL¦|Ç\$Žý(Þê¸Å¬TkQ6k°B@0HõŒ˜Pƒ\rÀšˆ#Îušš+ï€Ü²pTþÐZÑ±/ü\r y´Pp%\0^8ÆÒ\r¤Àµ‘˜4¬Ý\0‡¡1²¦ðQn*+B8qÂà ŽÏF§\0Ð´ÌÜ±Šâ¢\næþ«.®âŽûH’±%Ââ3ñÀ&PžF–Ñ„ÝX¢Ïð¨`O ±£Ë9R­B´’\r ì10Îì½‡O ¬X«Ì^+¯öïæÌiÐÈArD¬4ëÙ`Ê-š.i`4ò'Å,\$²VÅ,_c~;Bn<’1\$,]%Èlù‰D=âå\$Ñ).1b%gœ»z‰Ðü}ËÊG2¯1]8uPòïìD]	/z îä¼g‘+'„7D\0]ú²¾aäŽpV’ÒL€ó0÷+`Xpä˜ ÊîdË-hû+h(ÀÔäÀÐ\n„¿²fª“§s2,µ2‡@z Â.I``‡*óÌ1l?±“RËñ±W.ï.c%\$‹¢¿s+4òÑëã6Ã\$Cr‡F)0‚ô\rÓ1-ˆ`„ÓŒ ÈjÆL\r­8–²©l—0È©*.L‡KpÃ\r¤·\r£/rûLÄa8â2KÅ1nêb‚ÿ4“LíÒêË,¶Ë¬¾ïó©\nij–érói#Ç©8»1èbxÓ2à¾\$Nú\re‰ ¨\r\"8ˆ'‘³’³ª\r´-ƒPàÀYñ0°£Yb”S\0¹°ø\\jK+q6V hê1óU€z`pïò¬R±E“CÓî”X»Åöõ%”F	5ñF4f-¶tPåID6\0NFä®Nå4’_Þ0ó©\riL@Ên´¸Pé^‚¬Âîëê¾%'ËLÔ¨êG”€ïôàò\\‘Fèâ€ÊâÄ&ã4ÂÐI*5ÉO†‰OÀ·Pã)8¾)­*L;ð½4EÌ]´\$óðÌ\0L3ËE ïEk„ÑÃÎIt%eÆ\nbô(ÎëSMª}²Þ7sÇ‹Û¯)gi¤ØFà†&êº-XH° ¼ìðBÃM5~jrPjÌ¾-|Ö¤´9 ¨–p¨¢5Š¸;oŽ–5²õ¶–‰c\ndÒÕuÊ	 ÂÔ\rLÕhú'\nå''ò< O\0ðœe,. ú–\"t\r¯k^Ã{_Ã_gTµý`\0Ñ	Mk?ˆ2®\r:Db%È]UÍ[²1óùcuµ[¡[9]Õà´/ EV>k@éa\r_\"Žb6]ö E–DöQ^)È™•@Ps€ITr vT\0ØVR™W@ ëiR”2/¢b…,Xr€¬	jç^µï0•õ«ÿk’’üCÇlˆ“fl'8E–É©‘oµW¶¨ûI¤þmpë£¶ý/&ï´+´òýéX¯çk.þð\\ÿ4Ó0d“r\"“°kb\nH\$Ð¢†±KCâåo§OoíõG%\r¦äûÏl²–ùëÒö Õ]àP7\"*hPP€\rc¡_€X[`æêöî â7å:`‹˜Uà°ß¨–I¢ƒwêdã¶;·Š	—Ž“x t†À‚8d\0ž@Ôjw˜v¶ —»{÷Â bŽ	¨pü æñcyíö\n€ , u<	âÕ\"uyE:í÷Z`<LF£ë¨ü2ÑðcwþS¸d†%uw€÷u•ß€#pqNNßÀN’\n·#@ E‚#\"@|d%kwc\"* xò„àw‚˜\0uX.¦Âl&Xe‚ÎM†ÃB'“ @6ChÂ»`S¥‚wÿ‡G Êé¢ÓˆC[V×ø1àß\rÆþb\"Ð\n\0ž\n`©JÀŽ¸º+—a1¦\"lW}z–]zjdO„>!‚ŽˆG\0[\\å¢ïF|…®¾ À^\0ZJ`î¨b·`#ãŒ5€É`W÷“E;„â(à°¹!`È¯`\"»~Eß’gƒŠhVGrý‚_ï±uåj¢Q‘*d'2g/Ø-\n€h¤ ^Àda)×•E:HØhäËãvEvˆs—Bàí­‡9wƒ\0ÜßMøßÐãŒùW”NLù…•Ž Ë3Àè-ø=#@%øD!ÊXL*ô…êV…¹‰¸;…Ò1„ãÇ˜Ø‡ƒMžk‰™X‹ØŠÀñÒâ&ù™Ùr<å[%Uøeq˜WW‰#\$ÛèŒlIVàA†W_GÆVú„šF\"&fÐ(çošdV1ƒšó*wr0±F\"Œ¯¤‰H˜‰ÑvçTq hw*†“†@Œƒˆƒs….¯0g8ú1_€zfö»äA)À¢—+<¯Òu\"­F_lO#Œ®Õân{‚XYwv,ÕÇ–½ HàÓÇ“cÌ{n7á<8ÌYfB°¬Á\0øFe–\ràù:érŠ¸\$gy¬šÌÀ6=pÍ;4ó›9\0öb%a2BÉ Ê\n ¤	(€\rº@GFžª@ÙÃû%²€ß²Å 1ÓâÐ“qbÂs+£Zg´%@t%–à š3±€Ô\räD(àLÒ÷v.šð€\\\rR ^ã€é°	×A2Â\rÖ¾;yvïˆÀ€~ÀUâÂ*¢Ð@õø<š‰Ëq¢Wa¢·S¢úW¡„=yŽEš<Vº@<ù±1·³3€Ð\$»äì\$üPÅD€¾w2UÏØ;Ï]ù¡Ç%!\n¯ó²ÃD)‘¦ó„‚I/h~Çàè‚<Â+ø€î0€ÜåsÓ34‡-´ŠèåGÓØ4ïÂòŒÅT\nÏóu3ëü<TôckþÊÅWÃÎW»âGU—±Çfme÷\\¤D!*vÅx3ƒiû2ªw2§Œ1ª|Œ\$&Ô‰+€†bG\$v!rò*-ù4­quÈ\rÑyLã0üÊtXÆ…Æ·²çÚßI“b dúµSÓï<öaòÎËç¹G´~G¬Ïà„m äg¢x-T’¶ÏÉY’á™–¼ª!(wHÃ\nãš4aäg)`žñƒ%Ó@rüY%’Ž¬(qÜX¿˜à!cÕ\$Dy±]mjöbpR4RõÜRÄïuÜX†äpó/6 h€eâªÕ+ùnëš@ cHÐÉ¹ð ¹Ÿ{Å”æÅÚ.\\bmVþpPé·`bQrãP€ê\0`\$WÖWÑRq2x%bY—1ÜÛû€¬²º³±>ùÍÌ1æÌìu&b\nVÌo°Nïj\n€ÞâÄEÄ†ØC3âåG\0²ýþ epž–£Â<~B^ A¾%/9°;åv\\¥[â›Hþlž^U»ÔûÇÓžh¿š¢.\\YÉ}+	üYtÞÅýqÆ‰6¢\nsüã\0‘¾äü¦c:–3¹*}ÉÜñŒÚØ7z\$ë·d\\Âç\"«· W³£Y³û+²ûIèã³e½¢Ú\0çùSï9©½ºDt[rû×šºCÖ©bÍ~é¦³DÕw/½l—¿ÉL`Õ~ ØU‡øV_àÞ\0\rÞwó)¶bžÆ¦8–ï”¿Gò Ü%¼º¾WÞUáöA¾v(ùHFg¨ X©cº¢n9ö2—ô—Õn12lÀ˜\rä?\"tï\0XPÉsùÿ”Ymf±‚‚F?mñÒx5™}Hì_´ìXcûy”áÎºCåÕ.Ä\$¯`¶köd5.rx>Ç¢7þæîsÛn3¼“Ó<¼´g„ˆð§åO(\\@èžWò:PáÏƒ{ó­_Fà†”hgLÓ >°<¦6é~'²K„0Õ?@ãìEAå_Ü Ô8H.LG<øÄíd  Y¬oú¡ÒÜü«€­ÚkF<Òýp‘¾(Ûj\$9ò¬ª˜Ä?¥ÙV P?)ÍòØ¤DŠuŠ°Lb¨­àžj¹Áâç}	ð\0„Kp³ì7ÆÒZsÔ€àõDì)ë\rù:°™JQÖ“}¥”\$¨€bÁ³AØu)»Ü‡\"XÅÁžMÞ%pQPÑQÂÍ\$@³¦ž\\’\0ÚVõ7ªÁ¨TMøX×É*ôò #)G\\ ÐK—«ÂMë0–=¯JÜ&½`¿\"x‹_ÒËb™B`–C?/ˆ´ÅªÚBUuë«83ûNR¤Îñ_Ž]Nî‰TèÜ¿D„ª…òwI¥\n‘2«„€D:Yî‚	ôì­q1°Ð`B‚à—F!]W5‰,:˜1Ã(­0ÇtQôFÙ	ˆŠpÕ7’'!\"@€Õ8Õ0Ü`œ7ˆ\rhC’\nXÓ¡¥\rA–CÖ	m	Q€Ìß&l&€|cåL‚d¢\"#·\"ø’¨ÂPK‚‚ôß56HÊ„bÊ—&åÄ+Î#f¨V¹/Søˆh(Td±uÀ€ô‹<=ˆxdª8Š:ám!ð6ü8€,JP~RP–DüZÂÃu€±‘O¡`Å0X¦šŠA¢ˆwØ£0eh^Câ’\$Ä ¢ãÈ8A‚¡PçÅ(ê#+K×N4¡%\n•BÇÄ>âÜ2‡%ìüë{0ùÆ‹¾ò0ÏŸ¢/¦Ñzˆð Ï	P¢‘“Êš @Égæ¥Dªzöž¤D§ÔŠþYà¥“4œ¥¯,%l3WâÍUþ²¢ÃúLr[º°øÔ…9H¥ÌgT`@7È\r‚¹N£ï– èÛ€û¨ëO+òD>I‘¶(bñL“}\$úÇ…”êIXBÒž (4!îhñ!Eåœª£\"wÓ\"0qËJ\0ßUØPF\0o_\0cà£çÐ„¡\ng‹\0T}\0ÔÓ#/tÀ‡úXJ•BKçK/‚@\0yÚ PIévA1ÿiœ°ÂàÅpàm˜@Ø„yŒç9À˜ 3¤ÃHYº2!œ†„ÎéÐ`/‘<rI‘¸y ¥¾BÂs@uê• ½¶:b\"Ž¬}“%#Èê…É¾¡ª…~[ö:p¸2/.!9CÝüøB_NcqœH8¸ñÜ¤QrcyIÂš–ù\0¶©“\n7ØnBi)`?Mõ’âLÓ%XM¦NHŒ4Bã¸R\"Og‚[H0}Cã4ìƒ ,,\\f¸õÂ5òŠ ò‚d”\$_'|„Ä®‰ê&P¦\0—ÜN¨jáK\n¨ <¢?‰*%øYœÄ±`·@\"2¢“!ÆPötP¢˜.iiT|ê@2Š	‚çRÐG d¥K'&(T˜#ËWÃät\"c\rS,aœ‘@[3hG\$\$­á°+„¶RØRÌ¶åºY	6Às‘lt´–¦ÚÒ’ËI*ñv&ºz” ç4,\\²Š†‰¬YY{Gš^J>Ì¹%‰.f¬KxÀŠß:X½O.§}L[G&–äÂeÐIaK–b’ç”Ã%ÄOÉB8lÒˆ>´»å(M äC€A;oK+%—yÄ€’­%”|\"×#hGD¶\$õ 	™fB—òMdC\\ª±äàÖ±áªå¡…™L¤T(q…¬º‘\0.PäÌ\n„¯¤’ºçåZŠUjg[#P@²Ç”rãþ¢Â8m…ÑyüMQ6ò\$œsŠÑûÆDÖ¸`!8:4€¸Ñ„Œ,a£p'ªFE2€8Mµm¬” ÆD2@.…UŠ ]!ûÆÑ5IÇ€_ó\n¨Ú'(¹iu˜ÄP‘î‡€K²‹p9™…¸@LHÀŠÀ)‹àX„ÐÀPÅWòvó‰\rDë']!´Ø0ŠöB#äR:Dé.\n¹XÄè€Ø8á´H\rs^0Ë¿+9¡€ÙSb0\nBë7ùÀàa“ty<¬Ö¼Øà|&#¬gÚ@5qDáäÖÈ‚\0/‡ Aàâ¿§ú\"&¼†1¯ífF‘|gí5Õ\\ˆÂrórIJ±'2Pª£Jséž‰læÂäi\nåRŸyCa9àÀíß”™ð„àÉÛNp§\"ˆ'H7™ÓÍˆ¾3MTØRd“BŒR€àpƒ|zË:1PýhÁ)(h[BôPÆˆ“Òž¤^Ñ\0äÈ\$:6óKBŽ(©Ò˜\$ŠÈ\rx[ÀBGHŒ„ 6cn8›Ô\\Ò \nYi\rdˆ\nUß„\$©;È§”.Ë‡ì* _\n€§ äŠ=Qø”y\nÀÅ< 9OãÆxF}\rðˆ¾ÂF%¸§M4\"æ›à0\0f(×d3ñ¨ÑÜŠaù\0À„p0`Hëê¤‰DÕºdûäÒ3Yö¦ICöx£+?YiÖ ÐŸ½?„1™ félCFPà[BœåÞÅS@!Ln#su\"ì…Z\0÷:’rô¶|tÙ],7)1¤ -Ù4¦ï&Yî€`£Ÿøé Zµ¸7på¥¦°²ÃÊ›@ÓÓ½ª -®hóNð-ÓÖ›µiJ0Òˆ§3Xjõ9*Ü.T7I«ˆ`Ã@ö£‹î{`nìãÀeQ‘ý°@´Ì)`øBÍ\" Îhé©0¤ª+Z•«>KÑï*YSjDôR©œ£Iš0Ý\n´jš<Ônæð/°(Û4ú7ÑÄ‰Ãh©hGj7;š£’ä!”p­ª™Qº¦ÏœB±X¨)ŒKP òš˜u8‰Œj¸Rª+qøŒ”‰Á®*ÏMši…öìM+TNsàø@wCbFV#hùîœà(@µÀ¸êÂ€þ£\rlLÑÞ‚9Ç€Âr3×ðÈê>ñiŽ\r:ô–¬¤æê>ÕëVeî¢¤aùp¹¡êUø½íº)üÞG°2Ÿ¥trTw Ò5p£Íf¶#­umœ3üÍf›Ò`½8KI& F’m”³‚vÝ\0À 9täP1’~×¹\$õA\0ÞS5'ŠîEyz5qW‚™«\$-_K‹®EyÀîòÊô»Ò½q!‰@™kºÉTÎlÈÊ“Úe'\\ÄÊ\\cg»øˆžiüŠ_5÷™àç\0zŠìÉV»iÏBã[Œƒ]ªåÊÀ·¨8\n+ñ]:êÓ°•Ø“\"'n±ÈW}¡µQ¢.IÛXn|ËB°Åƒ]ô†klæáü9aêSuØÊ…v°¡­ì-ay<VItÇÎ™]]…K	“I¶²GÝ²‘\rBµ	ÄÌ­ë…S#öÕVs¥‰h'õ®báT¢‰Å3¹b]Ym\\¬™S(šÉá7¥Œ&ºæ{,9¬ºÒÇzå`Z&'¬o”h\"‘m“Å4½Ù8”AA}›ë‡WâÅˆÀûST¦-_Z‚e\rµ0¯«@UsÝ®F\0-y•“žê'ÌºB°ÙvàeC‚Ý€wZ‹KZmpðeÑè	|p0‡äYáÛe¡ÆÔ´ëE,èöµ{µŠqÃ  7hšÖªSËph®™T¼©MK¦Ž\0R©Eak.*Þâ\"²ø¬ÂüÓùÛLÒALœ¦&;hÙ¤à:³5´\nm!CÛUög·JœËYnâËÛÀ”Vì·-¶‰êƒF9þ´	Ù‘Øè¹ŠVYÈ”Lt³ªéi\\ºµž³tº€ên\"'j_€Ú˜NN `Ô._¢Õ©©Gö¯óTÃ\n¦‘]©dÚ‰afŒ“\nembÎ¡aIŸnÀ19U']ÁšÑ3æ¹ç:€ËXÚÌìùÜ”˜#áŒkÈd®yŸBÐW2eºXnš.K£Y2¤ñT²),†cµáèmc£‹Öû¨¡P€1q`ce¢e.{˜p* [>`ì{bùÊ]L ‚ÛSe›b|)”Y:nçcà…S9k7]5±èšçY‹]ÅU CÅÁsBC|€åîgÐ‹…t98Ä‰®ÍÕˆ“tù6]l×·.¨má©–	‡8k·˜UæÍyÐ^|¤ö¡y@Þ*×ÇóÞŒ1\$·	‹‡*'€•]f7H¼…Ëå1y0ƒ}j!å½¡cV+Î¬5·¹}ÞÊd°8U=×Þ±ê¯›zÛ˜ßF¡’—@¾o3øÖ_fŒaµ¾å)î~`¹­!iG]EÝ&BlÎ¢Î¦#¿}õÈ\0È‘6÷3\rûTn¦kÐ]\$;¾Qjn:ÚØ›ÞÜÊZ·ÐÜZbû®Z&á@gÀ3B\$·gë\n–Êd5MÕ/Ku{Ô#]µssqfÑuÜ¤ºëˆòQ3ÿØ—–ÝTµv­c©\\‘MÉuÕÙk#eB«QäODóÁ¸%ÀY<_Æ6¥¾b ²!ÉT.]>\0u=~˜®ˆp«±G×V®6×@'U¯<¢kZŠK6¹\r@ˆ”’-;ÍB.õtÆ\0UƒMa´±–“ÂU—n\0búm9#	TÝ?ZåÈÀêeÚˆ\rÓ‘\nôí°¤6€G”@+ž\rAÝ²FÆëa†ÓÈA>0ËŠ¦|7EÛQå\nî\0WŠ,7.—ÌÃá£°þ(Ì%bî×ÎÃ ´ŽºM¹U|-¡h†S™+9n·ØAQ3 ¾àjßD|ÿ6Í®gJrXnßX€åN)­|Máp°ÞRˆc&\rMö¯èÚC¨yÖÁz¸k\"d©—ÉûŽÄC›ü÷‚¥äPGå.?yüi¸ä1ÇJCl^Àë\"Þ9­ØÉÆYñ¼ÃÎâ ãý~¸q1€8†ˆÃ#Š’0é Âð)	Ì_äë¹Bœ¤¤°lï½¬8eþC,‘Ì„A]½ÆNC‰’kâðÆõk¯²iŽ(pÀ=ÀéÚ•Ã	‘Ðƒ\0¶A\\Çmüï=“ì’Ê™há¿ÚÓ€Ž¼¬ºÊâ1iM[¾	´Õ«_Êáq•Ÿ%!rèOµ}M¹úG½5%Èq.i^GÍfàýYi/dªólLRÛ0z2ê²Ì·˜Á²\r£Ò\\Ù÷ígF	µ¢n¶¸æ®	tfi_´eÍ¢RD§@õËóKiÜX‘†p]Š;6êð¢¼o\"A%¬9•7F.…éË£ZuEk˜sáæ\$ýy‹ÌcòÑÜÛf[-‡ïššás8ÊáPû4\0Çô³5aýfØ«@no¤ZRÚ¡HŒ.uób5ÌÙ¢È³“KiDFëÝ™-Nfpˆ?ìH×!¼ê¡ˆÍyúÎÞjs¼„\\ð e	.à‰]’‚†läŸpwÍÎ^†‰—À;ßù¥\"­,h”~­IÈ«‘9,a:jF7¹GægúÌô38?J£bÐHÑ+løW\0¨cÖ¹ãôWŸ”h SEsà %ËWc:X;ô-DžF(Ö­64ËTs3ä¡)ŽBj[f¢ºn¢Àº¨ð›Ó: ©AÐÐ@ð½\$¶Õ¶ê¥Z&s½W­ÿKºÌUØ—O2¼ïhZ‚úÑvšÏ»™‘©ÃÅtªÄÒŽt¦CVê…wJôÍ©‘ˆFí^,ôèpãá?ÒµL \$8€EÀ…s¨|ÙDã4(›¦˜q)'ÍNWuG.†`7[æB/™’Á]¿œ'§€ˆ£z1­Æ‰QŸEÆ’s:™£ÕžP<ºËX5ÎÍLßô\0}g“X\nÆÕz¨Â¸=Yç>¾yóÑ¬Í³ñ«É–9e›¹{áôýiüÕk<ZY,K•¹AÆ¹¡b„½Ë™êôZá‚\0èÃ\roNª}ªÁ¦åªhIa!|†ý”JX¦Õüƒ¤Ò!ŒXç­)¹«çBãœ«³µþN«À˜àTXàdJ‹¥¹£ì+bÍØ±\nLRÊ=£“H{šz•JHŠE‹`¢è}¾ÊG\$§äÞ’ý–H°§Päï*¡´ñ\"Ç 0*@€A @@ð#,	='Ì¥ˆÀXš5Ìˆbx–XyÓ‡×7§Á%èøö¶¡¶¼]\r‰J!J©´Áò€íh‰xÀ\"c§QÐðÆ\\Ý®¶ØñÐÇgyÛ‹ÄŽ	2mL;UñíEÄRQK€À’àWÃ•\\Ñ¥º\$f\\RXƒH§Œ€¶' /ó©c¹]Ë¼x°Üàe€‘²í3V•êYšF0‹‡òè	–l™Ò\$âNu°ú\$É¹‡¢í†|àbÆ\$äyJ`>SþË3œÈÍ¬É)©[ÂÐs–C…¿y-×Þa=CKŠÎ2ÅäK!F•½êÖèþ÷…e¾\rÜ¡Hã#è·Ðg–Yuœªb®éTBÓC# =:Ë©\0‘¤ƒo4ÅuñÎ@]N°€´`ÙâÖVî8OU2xX?qµ÷ô×^ Ní·¸©Îg ÝÉ‹“»áÃÈN8BlMýTU)Dày\ru¥ºÐ;c¦ÉQ5uÔg¸AÂð¯&\\yx6.Šð„¼/]§Á8šðŸ„ 2áPEÁ>¤7uÀ)¯ÂÅ’)3Çïó‰|M81ˆw`\"z eŒÃþ›ÿ¼R»8„›×à ¸ÝÀyîð+]9È\0IžJa1Wj±>úl­·Ýúîu=,Uy8'¿4örtÜ-_x¿WS‡Màõd²¤ÅPáÿuuòá‡¸­kaP=gƒààÐHB\$«ò\\âà\\¹5Ä“Ã™Èðà+á‹¹[Êþ+î‡ÂW G‡SÈB9p¯‹àtã„¦”dÕrÃrœ!ånâ^\rË–*”íŠ¼­Üï·¸E¨‹ˆ:v-/3·1íÇ9Ãr	®vBÍ½þg`ä¬9oç^\\JÂ1	Xè\\û¡ÛÎèÆ#â(sÏm¬‘ÜØ†÷ÌíÆL5\\SR¸EšODóPlN£à\nÑP·€¯‡Ó\\hBd#ÅP\"9ÝˆFØSôK”9\"0fú,Ó9Ètg£}èözÉª&Ï6Mî-£F¾ö)uIÉIŒÒXÊ_Fp­Áp‚H‡\\’#Úw¹N£š¥¡ìäjb\"mˆl?\"\0½DIIáP	à¡P–Ý€V0\0ÍDR»Ýþ€ž†è¢ep	!Î³ÔF“­Â×!9ôÇA€À\"™Ä*BObb%¬bg'+‹KÙ£12½‰Š½¾Sª¿×ZãÂVÂ-m1ñë2¨Býü®tï!=?¿Ð\\oõ\0—îÀý2 ;’\\Ä—\$ñê]Ó+4Ù´8oõ“Ìwa'AŒú†ˆú&õoŠ·Â8\nñ]HÿçÑä§ù[ZO	i8š¾Àc w•Ûð\nûf²*€´j=yùÍò¸yco\n„IyRL\"•Ý«\0È]ŸîðŸ²Oe»7³üÊ/r`9Iì‚³ngˆîyh¹Ý!	†°ýäÛŽ?¯ßÃËÓÜNWw²øÆ‘ÉÙ‡«G_\\u#ØmaÐÝ‚ZOYÂ>'>Æõ°uÁ)0#ˆÓSAÅÆ.zp·eB>[ývi£*vOXüØ;þ¾¹Hfñ0®ÎåR÷„");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("v0œF£©ÌÐ==˜ÎFS	ÐÊ_6MÆ³˜èèr:™E‡CI´Êo:C„”Xc‚\ræØ„J(:=ŸE†¦a28¡xð¸?Ä'ƒi°SANN‘ùðxs…NBáÌVl0›ŒçS	œËUl(D|Ò„çÊP¦À>šE†ã©¶yHchäÂ-3Eb“å ¸b½ßpEÁpÿ9.Š˜Ì~\nŽ?Kb±iw|È`Ç÷d.¼x8EN¦ã!”Í2™‡3©ˆá\r‡ÑYŽÌèy6GFmYŽ8o7\n\r³0¤÷\0DbcÓ!¾Q7Ð¨d8‹Áì~‘¬N)ùEÐ³`ôNsßð`ÆS)ÐOé—·ç/º<xÆ9Žo»ÔåµÁì3n«®2»!r¼:;ã+Â9ˆCÈ¨®‰Ã\n<ñ`Èó¯bè\\š?`†4\r#`È<¯BeãB#¤N Üã\r.D`¬«jê4ÿŽŽpéar°øã¢º÷>ò8Ó\$Éc ¾1Écœ ¡c êÝê{n7ÀÃ¡ƒAðNÊRLi\r1À¾ø!£(æjÂ´®+Âê62ÀXÊ8+Êâàä.\rÍÎôƒÎ!x¼åƒhù'ãâˆ6Sð\0RïÔôñOÒ\n¼…1(W0…ãœÇ7qœë:NÃE:68n+ŽäÕ´5_(®s \rã”ê‰/m6PÔ@ÃEQàÄ9\n¨V-‹Áó\"¦.:åJÏ8weÎq½|Ø‡³XÐ]µÝY XÁeåzWâü Ž7âûZ1íhQfÙãu£jÑ4Z{p\\AUËJ<õ†káÁ@¼ÉÃà@„}&„ˆL7U°wuYhÔ2¸È@ûu  Pà7ËA†hèÌò°Þ3Ã›êçXEÍ…Zˆ]­lá@MplvÂ)æ ÁÁHW‘‘Ôy>Y-øYŸè/«›ªÁî hC [*‹ûFã­#~†!Ð`ô\r#0PïCË—f ·¶¡îÃ\\î›¶‡É^Ã%B<\\½fˆÞ±ÅáÐÝã&/¦O‚ðL\\jF¨jZ£1«\\:Æ´>N¹¯XaFÃAÀ³²ðÃØÍf…h{\"s\n×64‡ÜøÒ…¼?Ä8Ü^p\"ë°ñÈ¸\\Úe(¸PƒNµìq[g¸Árÿ&Â}PhÊà¡ÀWÙí*Þír_sËP‡hà¼àÐ\nÛËÃomõ¿¥Ãê—Ó#§¡.Á\0@épdW ²\$Òº°QÛ½Tl0† ¾ÃHdHë)š‡ÛÙÀ)PÓÜØHgàýUþ„ªBèe\r†t:‡Õ\0)\"Åtô,´œ’ÛÇ[(DøO\nR8!†Æ¬ÖšðÜlAüV…¨4 hà£Sq<žà@}ÃëÊgK±]®àè]â=90°'€åâøwA<‚ƒÐÑaÁ~€òWšæƒD|A´††2ÓXÙU2àéyÅŠŠ=¡p)«\0P	˜s€µn…3îr„f\0¢F…·ºvÒÌG®ÁI@é%¤”Ÿ+Àö_I`¶ÌôÅ\r.ƒ N²ºËKI…[”Ê–SJò©¾aUf›Szûƒ«M§ô„%¬·\"Q|9€¨Bc§aÁq\0©8Ÿ#Ò<a„³:z1Ufª·>îZ¹l‰‰¹ÓÀe5#U@iUGÂ‚™©n¨%Ò°s¦„Ë;gxL´pPš?BçŒÊQ\\—b„ÿé¾’Q„=7:¸¯Ý¡Qº\r:ƒtì¥:y(Å ×\nÛd)¹ÐÒ\nÁX; ‹ìŽêCaA¬\ráÝñŸP¨GHù!¡ ¢@È9\n\nAl~H úªV\nsªÉÕ«Æ¯ÕbBr£ªö„’­²ßû3ƒ\ržP¿%¢Ñ„\r}b/‰Î‘\$“5§PëCä\"wÌB_çŽÉUÕgAtë¤ô…å¤…é^QÄåUÉÄÖj™Áí Bvhì¡„4‡)¹ã+ª)<–j^<Lóà4U* õBg ëÐæè*nÊ–è-ÿÜõÓ	9O\$´‰Ø·zyM™3„\\9Üè˜.oŠ¶šÌë¸E(iåàžœÄÓ7	tßšé-&¢\nj!\rÀyœyàD1gðÒö]«ÜyRÔ7\"ðæ§·ƒˆ~ÀíàÜ)TZ0E9MåYZtXe!Ýf†@ç{È¬yl	8‡;¦ƒR{„ë8‡Ä®ÁeØ+ULñ'‚F²1ýøæ8PE5-	Ð_!Ô7…ó [2‰JËÁ;‡HR²éÇ¹€8pç—²Ý‡@™£0,Õ®psK0\r¿4”¢\$sJ¾Ã4ÉDZ©ÕI¢™'\$cL”R–MpY&ü½Íiçz3GÍzÒšJ%ÁÌPÜ-„[É/xç³T¾{p¶§z‹CÖvµ¥Ó:ƒV'\\–’KJa¨ÃMƒ&º°£Ó¾\"à²eo^Q+h^âÐiTð1ªORäl«,5[Ý˜\$¹·)¬ôNô\n«ž[Ðb÷ƒà|;‘éîp»74ÍÜ”Â¢¨ÐIŠCË\\ÞX°ç\n%øhØIäç4Ïg‹P:< ôõk¦1Q™+\\ÚÈ^å’ ™VèøCàòôWàÃ`83B-9F@ànÃT>»ÞÀÇ‰-–¿öÊ&âÜ`9q¦…Çßä‘“PÜy6Üå\r.yñ&£ñ´ÎaÌ‰ÍÃE8Ÿ0 êÀõkAÁ×VÛT7ñpïÆxØ)Þ¡~¤M½ûÎß!áEt§ÐùP\\èÄÏ—m~c½Bð\\\nímŠv{µÎù9`G[·¾~xsLî\\±Iõ®ïâXwy\nà¨çu¯áÁ™S£c»¬€1?A¼*‡ùÍ{œã½ÿ´óÍ¿á|9Þ¾/–òþ¯Eúï4æÊ/¿Wÿ[È³>–á]ÄržÊý¯v¹~B£ PB`T¡H>0¤BÒ)ð >¸N!4\"‡À¦xW-ÅX)„0BhA0à½J2P@>ÈAA)„SÎôn¼ìnìO˜Q¢¬ÇÎÊb®rõŽÔÒ¦âöàøïhèí@È‹’î®(–ð\nì†FìÂ˜ñÏ–øÆ™…(ìÎ³¤ÛP\0÷NÂõo}¯‚l«<ønÞø®ˆâîlëoq\0/Q\0of*Ê‘NÑ½P\r/îpA°Y\0p\\ãï~³ÐbÐLh °!Îã	ÐPöîd÷.¿ïy\no\0áÌËÐ¶öPptùP¡ovÐ‚knŽ¸\0z+æ›l6÷°©¬Êø0’äð¹P½oF€NìÏFô¯OpýàN`ÜÐÖ\rogðá0}PÍ\n¬–@°”ö15\r±9\$M\r \\©\nggìÀÂ Ø\$Q	\r‘“Dd‰ÆÊ8\$¶ªkþDâjÖ¢Ô†ö&€ÓÀÊ ¶àbÑ¬˜ê°¿‰›	ñ=\n0ÊÕÀúºÀPØ ~Ø¬6eö½¬2%Íx\"pß@XŠ±~«æ’?¬Ñ†Zelf\0ÒZ), ,^Ê`ß\0è8&´ì¨Ù©‘Ñr€© ©ÃkFJÂÂP>VÆœÔp¨²8%2>ÂBmÎóØ@ä’G(²ä¨s\$Ž dÕÌœv†\"Èp°wÇÆ6§æ}(VÌKË ‚K¬L Â¾¤éÄWñöqú\r‘þÃÌ¤Ê€QòL%’PÔdJ¨¦HÀNxK:\n ¤	 †%fn‹ã³%ÒŒ¿DÌMü À[#¢T\r©ÀrÂ.¦LLè&W/>h6@êE ÈãLP‚vÆC’ß6O:Yh^mn6£n¼j>7`z`Ní\\Ùj\rgô\rÈi2I\$\"@¾[`Â¢hMý3q3d’þ\0ÖµÈúys\$`ÖDÀæ\$\0äQOf1ƒ&‚\"~0€¸`ø£\"@ZG¼)	Y:S¨ê†D.S%Íˆ’ Ð3¾à d¹ÀmÓU5‹æ¬ó<£SÒSZ3â%r “ÎãÆ{óe3Cu6³o73î—³ÀdÀL\"àc7ÄLN ÜY Ê÷k‘>²Ž‚Ç.æpäì2øQôÐ÷“¼åÓ3ÀVØ°WBðDtCq#C@½I”P÷DT_D´:ÔQ<”UF²=’1ô@\$‚‰6Â<cÆrÅf%Ô¬,|“27#w7ÌTq´6sþl-1cPÕmðqªÊ\n@ÊàŠ5\0P!`\\\r@Þ\"CÆ-\0RRˆtFH8µ|NíÆ-€Ædòg€‡Ò\rÀ¾)FÆ*h—`ö €CK4Ã1‹ÊkMKCRf@w4BßJÁ2\"äŒ´Ó\r1Q4É2,\"ô¤'¼êx§Œy—R‚%RÄ“SÓ5K”¦IFz	#XP‡>¨âf­É-WX\ršÜê¤pU´ÕDÔt&7@¶ÂÑô?’©ÀÑ ªµ£}O1½2†‡2Õ#UK*¤)ôê¸‹Œ0o<> ]HŽš„Æ¿rè›LGNª›ê˜W%–™M^’Õ9X:ÕÉ¥N”òÕêÔséE¥­@xy’(HêÆ™Md×5<52B– ð–k!>\r^J`‹IžS N¡¥4'Æš*œ*`ø>€—`|¢0,™DJ£Fxbèµí4lTØ•û[¨§[é•\\‡¦¨Ô –\\{­Ò6\\Þ–’ öß(#mJÔ£,ý`©I³ûJ‚Õ­ÊÜèlß ûj…jÖŸ?Ö£kG»k¬T9ÀÛ]3ohuJ©ê¢®ÑW•\rkÕÏ)\0Ý3Õ€@xè¹,³-Ê	5B”¡¶˜=ÂÔà£#–gf¢¡&Üß·Z`ä#ÄoíæXf È\r ìJhô˜“À´5rqnzõ§­sÁ,6’oÓtD´y‡äÂb´àhþ—Ctn˜9n‘ í`§X&¨\r'tpLž7²Î—¤&—¨¼l¬Z-Í¬w£{r—¤@iUzM¿{rx×—mÒSBÀ\r@Â H*BD.7¹(Â‘3XCV Ç<WÔÑƒÝ|d‡q*@”þ@ÞÀÊ+xø÷Ì¼`á€Ï^™Ì˜ß¬__•ND­X\0Q_D]}tõYÅúp¦f€wÔÚ\"â3øz¦nÂ«MYñùZR\0÷¬Q¤?¸{†M3†•£*×1 ,¨\"Øg*U¡*²¯ˆÌ«zÒŒW5NV2O-|€¾ÉÓñ,×]‚B×dí\rŠñ/OâtÎøÃï‚Ì0‹xÆ†ðŽ½Ð®OCë8Þ-0Ò\r”ÿ0à·õ„@]¤XÌŠÐÎð\\\0¾0NÈï£Ñƒ4ëi¨;ƒØAtê¼8X—x¤\r†…Š“‘ìÁ‡øÝŠ×Ê7¬<ö@SlÈ'LÒø9WŽ ÊÎ¸òÏ¬ÖËì¢ÍÄ±•ùRçÌðÌ\r¾Ï ÂÏò|ÜXÐÖa÷ø7y€Ù\rwe¸Œù„Y!ƒ˜Eƒù’´šÂcRIdBOkË28[‡mÌJŒ+L ÈÅÙ¸OXpføÓ9ÑDÏ›·¦ßªw“@Ë“—Y—…¢Õ÷\\yäAcÙ£ƒXgš™%šôó’Â1“ï“j	œX†9CcÝ‡àR¡¹‡”QFÇpdÒ= C˜÷ýš\n\r¥Õ‘ÔóšdjŽÙ«’xE¡Â2FX§¢x_¢ØÅ£Ú5£™—}q¨Åí¿¤M%¦ZM™:\nÏzWšX7¥åí¦:ÐZi¢npY;Žù>Ê˜í£ÙÉ†:6Ú;£ZÎX0ƒ“Ì¢#ùýcàMyU…i2,q¹FËšÈb­J @ÓgGè|4ógÈÒmzWõäÊ	¬)™Èr|àX`Sc‚Õ§ÀË™„óc—¥‡û!²B²—±”»/}{4JÂ\0ÒÃn»Kuz @ÌmÚÑ®€ß­yÍžÒyÖ\"º)u¹ÊÂÙã¶Yç˜s·c¶yë‘¶š‡··y¼—Ž¹7Á|·±|—Å{Ï˜*)°Ê4Y`Ïµ[v¹‡¤­‡û^NX•†¸‰†ò‡W”©û·‚7†;¾_‚‹*x™ˆ¹Ú\rùß¼ß‰xm+¾mû¨Ú™	´»¹‹\$\n¾l˜);™²„|Ù ßÚ™¡:œNÚ :„‚Š_È8N³¸Uœ5;¨p+U–L‡ò\\‡9í¦Ùñ“›¡»ýO:I’šû zQºœ¡ƒ¡TëšÜ)ªXG¡æ»ÅJ{w8“¾ûÅ‰¸UÆù\$ôàÃøü›PxTY¾pjh·¾J×Ã€›˜JÙ{‹Âð@îÇ‚³ øðZ‡ÌÙs•¹hË˜ç–XÌ\0Û–lÓ–ÌàÌÈÎ¸Îçìó‚Y}˜Ÿ®ü^Ð@u2ÀSÚ#U‰ˆ;Ãˆ|¼¼•¥¼™P\\ŸÊ#ùÊ|ª<®Ý\\³À›žJÛ‚,öœÀ•\\ÅÌšEÌú…‚]WÍlÁÎ,£ÍìÉ–<åÎŒÛ>YnÎ),Î™rÎüûÔ¼å—âº]Èý	ª\$õÐç½Íq„DJí=•Ù÷•XI-ðÅ€äÅÌa‡llÃµ]\\“w(iÜCÄ×ƒtƒ‘<i-u[uVŽDÖ“¸QÂ¸€xb€kæLI­.kú›@ÞÀ„ÜN‹“[ñ¼l<o=-]1`è”¼ªdš ÜMÌ7‡@Û%C=]ú›êÀ/|-àÜˆ¾ÉÞáqÃã•âíùâ*¾C¾òO~ÊQâòså`·ç(âòãDÉßÉ²¿à[ãþæ>Éká¾R™uéÞ\\+>)3íûPÊßP§Óí6ÓËM%º¡¾pÔŒœÅAÐ3qmu2ÖfzƒÛ¯ì4s‹	´í`ÛŽ‘ì°-kÊS%6\"IT5½‹~Òì\"™íÂUt_	TuvàÖ½ä¶Yw¤†­0I7¤’L‡\$ú¿1Mí?íe@3Ûq{,çÀÏó\"&Vi·àžÔIŸ?¾µmõˆ™¯UWR¾´\"uiT‹‘uƒq­Ÿj\"•GÃËõßò(™ï-½‚Byîê5øcÝõ?Œàwñ®°ëTúî’`ei¾½Jtb‰gðU‹3ËëÉå@öá~ê+¾Íï\0MïGè7`ùïÍ\0¢_Ô-ùñ?\rîVÿµ?øFOÔ6á`\no†ÏšInª¼*pà™öeÙí\"T{[Ð“p^÷ä\nlh@l0[/ö„poóJKÖX“ñ€ü<ª=€9{Ç¾6ç–<eßAxãÀùÇ‚¼Éá4x[ÍžLò“~>!åOQxš{ZVFÔŽ`½éÈ~Ižß–“øL)Q[ëTûôM›àþT²*BC¤~	æâ‚ä\nƒò¡gÃˆÅ…p9zKÉ–ówzO9di^›'‰+¹ßïDz4ägHAº¯Lyô¡\nr€<IêjKQó¸Snô==\r.Âo7Â½Êé%a;‰kÏãmX¿›Zi%P¨iÏ\r­€¾ýµ/©…L`pR0¤Ž&õ—I (Øá\\.£*m„*Ž(ÚÖŽõ—\$ä†ÆÀ÷\nw×ŠÐ¥…8a“\n&´Â‘žÍUmª MÖ¨P+\"Ly„ó?¡M\n€2’	L\nbS ¥NäùÇr¶!w¥jw`¼Â\$îôƒráè…Êaáv±^Ãq­F‰Ü6•Ó¨i*™Ÿæ„ì_xõØ\n‰fðIê:B&ù6@É“KED¡úú·QD(V`.1\0Q\$íøF­¹H®’Tþ€zÐ†‹Ì\rªjkzM€ÐÀ®Y™À(61€”x‘+®%dj¸Æo\nÂ¦¬\rg°ï\"ÉŒ´ˆ—?Œ1- 3hÏXÖÁ)åyjÃ5r¢N±#Q¾¼Š¸w{_þ¡øG)ÂÎÙ1i‹Ì íç¤<Z‹ºpX³¡Ö\$â?¥=%.´€Ò®&¾­%\\±8w­!¤µa4œ<JB[ÐÄº¦u4‡%êŠ×47‹Ä%gÑä&¸€Z(@	€E¢{@’Ð#¥–2Šh@Œ#ñŸø™ÑŸ¥£@\$8\n\0UŒìjãA(×ž2ÀO€Š8Ú€ž5‘¸Œ¨@†ð&'´\n€DŽ\$i#ŽÀ#Ÿt\n PŽTs#]P*	àDÌuc› PÀO|pc—øËP	ÞŽ¼i#Ô}ˆæ:<ñí\0\0¥ÀˆÅ¥lo#}ÏFÜR‰Tp@„À'	`Q¬ycTp(ÆŠ@€eh\0‹˜Õ8\nrx› cþ<`NŽˆã:)DY\n*Dý‘2{dZ)A‹Ú4±²¤€cZLð2ÈÊ<ñò\\Œ\$r#ˆþÆö7ñÁŽ¥°!û€´ü€Nª{O¼@\$<	Ñ¢ðVƒZÒÆž52.Aù#D0 \0´ÀI¸û\"P'H	²_)¼x@Š€*úàAOh£hI)I²L1¦’ìƒäµ%áJI‚B‘þ’g¤i\"p÷§K2}’ä–Å(CËÉÍ=²t”xCøÐ&FÄ	r“ÒoÙÉ@@'”ñ€%	 ÛHÞT±áˆ	ãÔ˜:=¾)\0.ñ°]Îâ5 .ðæõ(pÈÀL!à8­\0ˆ¹	éR\0L‹YaÔbkÔ°ˆ6Ä)Y·éˆî •Ô®£	h³zZ¦õ±’IgÎVO3oœ­Lgà3ËY2ãÛ‰ÜDoPË`3Ì¸ec-‰r7í‡2Ô—Dº‚Þç‘B¼‰Z•¼¼%å/I{MÃ\0pÐÀÌ.`äÊÝo*•Ô¯%T€ý\0 &–iR\n™+Éo€ì©–\rÀ^2q”Ë©\0\\¨I@‚	KÀ#peC*!>€/á%|È…Ì’ÁÞŽüô\$è)çÀ§1P30(\r¢+\nZÆzž„))\0*®\0kà€ÙÅ2¼–Ï…(–E86å¶s—tºf&”™Š¡´“+;”Ø76&ãK–_Ž(›9fÓ,@-ÃÉ4l\$Û‚e7\0ù±:l“LÝæM7.\0ˆ³|›ðo–JÛ©ÀÎZ³u•ÌºŠ'Èy{ÅH,#\0vU@9!¼¥	Ñ'†¨&„òGôøß@_-Ù¿³ºt;Üê¡:©µ€²u¡<—ˆL†iÙÎš_ê€Ø£@U6°Îù#ä_€L'~ùæ/Öm`\\Të']=Iäât°Çž¸Âà)ÔÏqùsÉ9Âa<RPÂº|tžút&5°äs©lî@¾	ÞKÆwS®èlÍ:9úN®wSø|·göÉØOùAÐŸ<ë‰BÈ€\0/àz@´	ÍÏÁ•Òå†=?=iÞO‘ŽkÓŸ=\0E@iâÐ\$B× hO\0Á>DÖP´ó‹UäçÑ†j¥HìÂ9F¬BcCi‰é­BwMŽ§tÓx€PÀÙM‚?p“®=—äì8ÜÔý‘Ïlg~¨˜tÁa©€%]b\$àØ\rˆr„èÄa,6ÅtŒàW)Ž\0U¨›F˜	|æì“¢ˆvh¦Qú*¥Oƒl.C\$À\\ ÐÖRRÌ<lcù™&Cj3Ñý%ôZM¨öÀz9GpY’â¹£\0i\$Dµ‡d‡ñzt[')[)Q¤ØêÞkÁpi0·#cÃ¾‹ôNE¨ô(ºC2L	Æ@9hÑEJ5Ò,šh{&Jzö0n€vª©>[€j“£Û[œ]ƒK•ýRîJë>.;ù¨íF=RÚŒŽ<råÓM¡=—Ô’¤ÜhØ^Y\\RmnËÐð Nn*g‘¦ôÒÅB¬·5^QÒ‰@O¢°x¨¡HIÊT ´â9½)(‘œ&µ‡}A)PÊ\\/êô…_Õ!ÌH þÚ‘¥¤ù\0éBá­\$z4ÓTYu‚J’v\0êƒ”¨…%@æ32\0Sôm€--Gi@¸úQÅ%Ñj©YÝ+FuzlSž—”ÜW3ØÅ·OrŠU\$EÔè;¹M©¢\\€Ô±Äu/£õjeQªš¦§,#J¡ªXPÔ<UH•TVVé#Uê™ÔUbˆOU´DZ‘â¢µ£Í8êÕUJuS «À‘g)XDZK‚•¢Bî\n¼@2Š©ìx@d&ü ½eÜ«Ià@ÊFwì¬8“©\$Ù'IºV‚V†U\$²ETÎ_ð*ˆd¸/áFCÓYdp§vGƒ‰3‰ ‹Ñš‹L^(ù`áj”÷2S¸ºcÛW¨ÜJQYiÖHB”£ckœRè\nþ²U\$jê\n„ZAi€î»¢U*wKDRxW‰LÂò­ˆ€+fÚŒ@ã¨A4¢àGz…R\n²5‚b¬\\_²Ÿ ­ô‡¡á0¼C@¤\$X\0+Å]¤ÑÂè\"?‡n¦€+QIj\n»x\r€ôB`S¸âM‚ÈÑûŠ\r o°@‚À6XÀ\"{±\0µãb ¯)–ÁM¨cMðW ä¶D_áÎ±Ðv@{cÐ:¤®%[%‰C²þ1¼Ù;AÆˆÌTn› \0º a²pážóe~ÙU5 s©V†Ýe|M9‡€9 hË@æ¦\0êÙ~É@.³	l€›¦É\$?³idÀ{fB†ÙF0VZn@”ìºSt‰NÍ\0oP™ÃchGóX^V}Û´°’ÓZ,«EÄ€kÂ\rhËGDYd\\zÓm\$UfÚD¿ö˜Á­ë É€²Ó‚ª\rªë¦•^CRÑV£*ÕÇ¢7õX‰&ÓöÁm7eëYÚ\\«V¡4Í®è¾\0>ìZfSÙÆfWJÈ	ÆÕV“\$EíukKP[\r¤\n±¹ÇÇ_q}Lø««£êÁžÑ}òeM£ ÜmÐu4’V°Ý‡RZÜˆ\r‡®Á	k\r]a“)`ÇX„Bv0±2æÛ‘^;tŒà†À=\"àkƒaYBŸ8J´_«Ðk)f;ÒF†–Á±U„ÆÅ`¢GWN¢Ãw,\rq’)\n(	Ðá´e¼ëîR53\\NŽW·…Â®EàØš¾¼õåS5ÎÊBþ;ŸÀ‹W4¡J	%]5ÞÃAõ°àpmï	ËÜ‚ßÙ\$•È.-KØ!sCçEtî+Dº;›ã7 ¶ýƒêONË²ªäcjO¹PKFO\0Ýž(Ð€|œ…‘°k *YD5”äŽå;s@6´@ØQU—\"Õóó\rbØ?XJÅvç·n¯AH®äoPS\$TËpbj1+Á‹¢f3&™@Ê€Qw8@¡‡ÐÈç;\\ƒã¬ˆ‡¸Ä‰NëÙÞxb#Y½¥¯`:‹ÒËkB¨8NúoëS³(#UÝ©ý(ƒ³Y;É:×eÄ¹…ô­±kËn¿Žå e¹Xí´ZîßMi&é¿\rõÇ^»ëÛã€d\"ÔW«\r~[aV' (#Y\0Ü}`ƒW¶.u|4V§*WÞ²l:¾Ý÷mnõ\\Üà™\re¬/£ikmÚÖš”ÆUEü0#j[pæD¾®/õ^ñh„f½WøÀ¸ïÏ‚L\r_®Çá¬¹-ŒTX [*¸¢q•n\n2Ù*Ç–J±ý’¬…û\"YüvQÀT£ô2IÃß·=ÂD÷ƒGñØ‡õ¬KXK\"ð½ð£÷E)\nYmÆ4!}K®_íÂ D@á„wmá(\$@¦ƒÆ\$AŠ”jÊ+Æø\\‹4Z½Ä°vÒd¹SmÅXÚ!ho!F0l†UËzÝ8Xn#\\Íˆ_…\"Ë˜`¶âHBÅÕ]Ú3‹ü«¡\"z0)7‰‚\\”ÞÇâÔwñ.…fyÞ»«(£ôí²‡¸ pÀ0´¸\0XªS6+	*\\Q’à\r\"ÿ¹<bñ°áñ\$tŒDqŒ\"‹ü	?ð¬ñiŒ«o¬¥],ñ!È{€g|ãg¶\$(ø¤<v„…xáÅð¡Ž˜£%GèHõ™ÄœÆEŽ\r ÒX«Æf=„Xà)†ÜQKŒXqîÁ:N_¢ÿ5².Ö(ñÃkµœàgBZ768C‘cr­¸¹¸²,<Ã#y!Èþ\rÑ§’ešWtEÓZb\0Q‰%˜bÿTèÇ­ÿûrp…·\"Ä(û±A%†`xba}P™0vL1&>0þdôD c<6P™3°…‡f¨À„åVD~íÈÊ µÂ9b\\IÜ,~ïÈ\rxs\0Þ‡ÀˆaK£8CEšÈª+×Tl#‡Ž‘×¸äï«¡°V\0òå‘|>çŸ\$h®G8XIÐè@\nTð…æ¡™æ\$Ç9Œ,íBt/£†šu@sž8ÓB…7€ªsy˜¨€Õ™¹ãìþ‡‚,è]çßDy‹5–nže€àÆòÎ¼þŒ9)žjÌ^€á\n78Y¾<çU<iêÒwùÇÎH\\Âë˜êC…×4ŽcA]ïXŒê8)\0lpSŽÂCgCM`QÆâ¦)Š¯lè(ø.'¤¶=a­Ix·sÃ; …Ü™ß¨TB¦{ÞÊx¢àp¼ÐpáU¡¦lô¡§T Ë2“´>eÏ™¤fu99 Íåô\"^ìÖ75ù’uižô'@h]L9¨›^†æ×¡Üñ:»D9áÌŠ0ódbüì¹—6™Í¶n› ™³»7¹¤Îs\0_œ •ç2z¹Î°¾çÙ72N¨Q“º”ê/ 3¼èA:žƒtHÅó=´‹Dú=ÍÍ³y?£Ái8SÈ¢ˆ]´×¤¹ögCIîh~P£t§Fé^uÂàÐ5¬4· Éäè;Fãu\"þ˜ô+›yâ•?úÏâüóþ\0èÖˆ:ÌÊ˜u\r<<ËÐw:*:jÓå: -Ðƒ8IØˆ\\u%›J*wS©¬Ô¾cõ3;yúê‹KÚ6ÕHƒ‚¨œÎêKámu£æúiLùÄÓTôô¦Ý%ÓN:NÎ‘àµyª\rbfšuYª =õu«E3æÿ4Ú­WN…³>mëInôô–x&Ð„ð'šÕ\0sˆoŒ×k_RzÙ^È{u}©ŒÛé—7zBÓF·óƒ®-di¿YYÏÖeñµœ 9kCHšÒnµ'ŠÀÂ€ü¤×–ª5è´Í{ê»_:?Ó6¿5‰®\r€g/`ZLÓ–t§Ñ± -€è´Ðqªµé£÷|\"ºG\rm‰d<z{)¼B-\nÁIN\\ñ\0¼AÀsx\0žÐ›ÜÅTm}Å÷²í:h™c°NÒ8ö­`ìøà/°À°O\0\$0K=€ÀF\$y\n\0‘´ -ÚPvCx‰ZèKIžÙO6…c­›”g;;±FÅ›µ½ í¶4@J_ˆ@§Ÿá\0©€Å€¢€^yP­@OÍ0âv‰9ÑJn ‡Y.âC]¸Á”öp…ö’Áîs‹ô~â·A¸íÒXæBx·l¶-Ôîoq­ÜþTw`hmÓvÄ±gÆîw\r»½×nût[±Ý0EÀó¼3ƒxÛ«\nžï7¼ <ôùn0öèÞºxÑmiDÜÀ	÷Å´\0ðÿ|»ç²ŽúöŽò)-·}ÛHÄé#·æüCÐGu0Ó®þ6®}¬íÿk€RÚöØ6Ä\\ôí—z{ÈÝîãwE¹\0007îHû”xq¶ˆ„„;åÜÖñ÷;½m×ð?r\"Ñàžåx,þ'Ëƒ{û?w©¹íëð;qü#ÜŸ	±´Q<ðsu\\áŽèxgÁpSrÀ/58u»®ï'†\\à—¸NàºÉ \\Gàöë8•Ãî&q†ÛD‡*ø©Âþoc‹<5à¯\ræ.‰Îš»iûq×¦­¶é¿ÒÙ¼\ràgÅlïÀ^\0˜äAÀ-	T‡@Ö6]ü§û\\\nîàëÂÀ(CÑ¢oŠsÑq§AÆÙ{™|˜Éú9æŽs¸h\rSšiöÚô6ÿ%à\"g1„òAõÛz„EžÜ÷ŠØ9òå|	¶+Ê ŠB—2yäQøÎCÆM\$%sL9©¶'Æ 6ôdäm\0†H”	™!˜?(\0œ >sX\$œÙxÀeÍ^n„ü PIù€¢ *\0ÆüæçG6J¾Q‚/”éƒhV[žžl\n(E®¦ÀÌsqÊór	%\0ðÈ•Œtfàwå€ª)æqdáY8Hþ)ð¬†…<à¸ä{a)•àEØ@³@ùÄSÌ‡ œèØzW¸P!‰g¥á\0âux;Èœ¦	œÑ@8 Þ)ó¦ |éÀÄ„J®.† üÒºâ®¼<N•NJ]>€ùs{‡ó¤Œ\n¼Ø[CÕ¾“\\¬›â¸¢ºÆ~`<Ñøg©\0zÎ–‰2t–ós\ro\\æÂŽº¥§\n©mãL×n¿uå-IlÎ\0vyüÚ>	LÆw1è”Ä;ÕneÒl¨É5`ÂœëŸ‹2Ï@:L˜î†¨dç\0\$°§Ã–U°>]l\\)\$C\nQªŸÌø¦óLž€BÅ†í}‡{1×¾	;t#?á {L%1OÒ/¸€vSMeð‰¥®C×›\nË¯L<¾#Óà•@b?tºM 2t¹*ù^(ý‡,ƒ;ôÌ7˜Ø™Ï[yøþ?²¼‹¸x ±‡ÐÉ+¨3½A­˜uˆcßÑ‡g}ý3ðÇD-\$ƒt»²ìø³\\æÌg\nû±\$”\nñ*‚:(ÙQøXdžï~ÇŒ02x%ÝÞè¦ÂØÎG=ð-Á…:;C½p…ÞoÀS}ITQOô|#€pñrZ\0™Úòø“µ„du7H/6Ž…ÍM0Æ=G@*#'Ë‘ý†GG€ü«¾œ©MÔØ’Áò:\$4¦à²Ä¾G0ÅÁ<·Ü™÷¯&A(Å¢b›Í¶G\"yçòÅ@Ç…\\+ç¸ˆ>X †@“âÙùð¶Äºð˜ÍÈÿâîÊ	þcËð3Ò <ùà+ d(Â€Äú?Ò!+Â¼WêQñOzkÒA¬Ý£‚3éQ\nØ!e'9=Þç—ŒYÞKÓ©©³KÏ\"ÖÔ¦þEÆvq¦/o^ü	®ï8DEþG€û;8Åò\"èo7–Pød´EÝ‰ñ\rÜ¼8¯{EDž°´}	(.â”Üš¢Šë±Ä\004ú\\‡=Å2·ê?H¿v·Õ~(exå=~#€>SØl„÷ÍAy• ŽSÙ|§³ïœŽ”ÉÞ²2ÅÿââF†¿ ëÆèA}Ñî¯l,’C l÷¿„¾5b}ÙãàløÉÂñ¿ƒt÷Ý§ºUfWß6¥AgW½„%:”g·%b*öß¥Ä¿ëÌ¦y8.ËâfI-ónÃeÜ ¾z§’}fQï¦};Ý%×Ô}eõ0‡x¸BRõ¥:>«è›`ˆ”ÐeØ†[z}{êªÓŸ×>¡öÏ·}gË_pú¿­	UöÏiU¯×ZÊ¶VØÒû°D”Ž<;Cb;ýÅ•áüEÁ|•õO-~3ŸŠñwä¬K÷ŸÃã“é\0tgÎ!žÓÈ~cäsV}¡Â²púþ+õMû¯ä?WùNc\rÇö­ú¨mL,Ól{äe(¼Ørÿ`Ýaè!È'¥ÿ„¿Ý}(•Y1UŽ?to‚Fˆùù!ýÕˆÂh|ŽÿT\$Büoö¿®åpäXhXäýè¿Ä\\~ê°€iÇ€Õ,³dôÃ‹ÒþµòXJ†:pmÐ°AµÿŸmÿò!(Îhƒ²ÃÙ@:\0²u0\"à6,ªu0Kï€69p>®»¨Ð\"È\0(>Øey1€ˆ¤xYÁ£…£\0xBnÄ€ææ#Ã€<Š?\0#/ÂÀ²œa£;u Û‚½\0\$@2À`O 2@`ù;@Y >€7@³ÚÉè¸@B*¨«\0Ú3ã¿åÑ¿NX+´®Æ?6ìHçà:,«›±Žõ?¯Ä\n *¤ÈÁñ#ËÔ˜!¢=Øf[¬;«¢Ã¡½Âñ|L]£˜¸ÀâðÛq®ÿ»÷[”á‚–N\rª%k «P0§'<6º(DAO€Œã”B­¼nèñt/Z£rë»!1^Ï¡ÔÁû€ØäI/u…±C !k½ÖšK×`Œåû\nÀ€º\\•+Ìá<£ÕIïÏOÁ^gD ‡#Åc®áü\0Ë¹µ°Z”	£ÃpX‚8Ð*p3>ø \nNÔA„, ;†¨ïcØ¡œbìØ\"ïŠ>%P!IKTë¹JÄ·Hú[ÙÁÄ†õ«&€äóÀpR<û»çfº\\¹Û‹ «ÎùKÛèÀÌôÀä(V¼Ø;\0Ú‚y•ìµ„êÞãß!³Ú)0°x½ò(ðPz@jÂío†„„Ì\".Ë @=98!¤Aö`\ra€b‹äÏ69è\0E¯’·\nkä%ñBHøä!P“€Ù `Žé°ì\n›§¯¬‚ß€š–*d&oƒ‚T3ä‘Áö%Säh”\0ñûäëB) 6B`RÅ!‡î€èé€ÖÂ623ép¬\0çÛ 6B6Ä9|@àº.Ëp@>(Vú@•\0Âí¸*a/ºÜ²T#&¬(û±[‚+¨¬0h†„ìÛ,¡O\0È¨Ï‡†»r\rc³À9\0îÂCêÏ™ÀÌ›¯b\0Èš9e/¦.š°ó¥C9ÀàühC.„1ÈöD ¡C:p„ª¸ç8\"O†¦”Y0=€†„üØ•Oõ±áÌ5Ð]Œèù\$/Ã2ùC/Î§™\rªÅ¹ð¬7’Cf¬.`9;+ ­Àº&ÇƒÙ\n“ AªéæLê¸\0002òõKùoK?pþ\nCÐ½¿ˆò1¿t(û«Ý=ýÐ6ðÒ¿Ôc£à ÝÂšýÒaÄÃá\0l¯ÝVôHj¯€˜ÛÏnVƒà¡ÞkÎƒ\næš¢>ÔíÌp½£Y<;l¾€ÒT:1–bÞ‰ÌèÄ–O\0Ñ}n€\\\n@Bn‘>˜\$#¥Á	¸‹\nˆ!‹Í„&A8BU&kg)˜P\rdE@úÄX ÐO¦;ÔË§«z–bðHBp¼>™ÀLàB*›™ÑDˆ q>˜ætD`6\0³,Iq\$DP£ÔJ !ÄX±DEÑÄb£™ÑŠ=ÜK¥ÇÄr«™ËD´ý\\CÁ¸Ä›|êçDRý\\Jàˆ†…8n1/Dk¬LOÕÄÌþ\$(‚¯\nÀý\\H¯:ãa‘'D¡JQ7Å´E±9ÄùI;=k\\FïƒÅÜFºDåûÛ™ŽSn¦E<Œb°E8%P¼ENñÌL©j†© E\0006;Ä¼0VÄ6À%HU»\nàZ/»X«Ä •\0 Y*…á³»|VàÌ¼ìúñ1dJ¹sO[&š2Z1	»*Š \n‚=²ŠÙu1mAñ#¯hºíÀòÔí)¶Q™_säH¶Àþ*]Ž/ø¤OŽ“Û àŸú=Ü_>b=!C„2Œë3Œðp½k’c^¸Ú°¢L\0¶\0ž€È†8×*xìÎ6\"@”À E›ÊoÜ‘f;»áf˜¼.\"þ;6ÃÊŽY˜X3¤Å˜†Â«‚Ðn;èë¸‘­èÁ¦’»q3,€óªX8^»Ä ×ƒ‚ô\\.Žûº\0¢C±(Ý ‚O+¦%P#Î \n?ÓÜ	A=ÆeÃ‘AO\\]Î‚ÂÛ¥ÄÛ=Ô!c) Jõ¨ºÑ>ÅÖ”B#Dí4do½áHAª\0€:ÔnÂÆŸx`  Ôë—¡‘5PÐø „4Ô \0>\0F%X•‰!;\\f‘4”2 É'°Ö;dMsècY@ú³¬Ìã—ÈÎ3¾@8w\$äÄ? \n`ÃªBN@ £€>œu@(ø˜\né4€‰P)\0#¤?Ø	oÌ(\n`)¤¢p[À¦#ì\nCQ×\$ ’”u@ À:\0'\0Š¹8ÈäGn<°4†5´fÑ[í3hŸ‹cÊ(HÒ,êé8±ÄÇ¢}!Ž¯ÓlrM7Ç( ÄrÍ\\¶Ô|J\r´šFIéâ€v˜ùÈ÷º¬¸ÿ®n¼?\0 (° û`'¯:Õ4pañèŽà=ÇÑTq‘öÇ!ºxÑÍŒ¼‹^ žFÖ¬€aT9Bƒ\rz‚X)ýÖ×Ð‘ò€^¡z|¬àÇTƒ±ÇGÜ<¼s2µªbu*€_!LÍ’€Û!\\p’†† è'’H*D!-H ÚK–áñ'ž,ëVêG¸—ûeÑÎHœ#»jcp6î²Ê@<‚°\r­Ú\0Æx\r²5¼Ú¹MÁ6Zãdp®7¶©#<25¸ìtŽ9\0Ù#£i#|#ˆ\rÈ«(…§\$:?ú¦\$`@Àœ*ä‘h×Ë>@\0ÆhWé	1\$JÍrJ‘+\$ù1ÒG¤\$ükÁEBþS4”Dt\0[Ä”ÒQ¢\$ÓþrXÉ\\0˜à¯5%l“òIÉc	à2W—S%ürZ1[%I£É\rd–'€ŠªÿbB’GIDQ—òHÉ¥\$èR¸¸ø°\0l¯õ%ˆ Â­’îè. ÝÉÀ3˜òe†ŽÔœòqIa%œ2tÉRÔ] øIÛ'L+R{É'džtI\$	¯ù›ì4³òX†J+KxÉD¡<¬	&˜PàîÊÝ,¡Rl\0Na`Ga<É÷%³Ó²ÉÀ_ˆPèÄ±%Œ\0005É÷(BF\"ƒë'íÂÆIc9è¨ËBþDAá<Éb\"Å\"\nÓ)Ý²Q	êB‘€ß&;’‡Ê,ïD ŒžŠÞØ%C&\0käùJšû|²¤*Tª-îJ1Òª8X\nÈ2a\nÒ	ZBò=Æ¥ë€Ø+H6²³Éù(°Pœ\0ækÒ`–ÿ\$H¹JØ­Ò´€N;¢ 8\0Z¬+—Cü©Òx%t‰­Ê³*›|§sÉÇ\\© äKéLœÁiÊ¡*`Y²¯#DTt©òÇË:ß,´ÍKD“UDÆ\$¨ãœ¦²µËO,t³’ÔJª\\|*\0À1Ï,¸±’Ø\n>Þä³È×xB1Ëp·R©KFá`ä!¹.,·òÃ¬,®°\$K†#Ô«r®Ë(Ôº\"°K¦åœ©ò®ËŸ*	(Ñ\$¾!ðYÀ1¸ø¤Yè¯1É}%»òº/.’RòK×(´²RøËÔï¼–28‚+I3\$ª€[.x!ªEÊü%ðD\"_K[.Ü³!_Ê¸¢D·¬,‘.ðt²ËK—.ìÁòÊHóÊI\n2\r„¿\"‚½(@ÍÓÌ6\"ü–.e†\0#Ð‡ ®É%ÄÊZ~\nÐnoœLJ°|ÅÓÂc',¯Ó…‡1KíyÌY1¤Çs¥(À&yÌf#üÆ³-%i-’Ê£--|Â’ÌL£<¶®€ÉÓ0œ³Rë8Y,”ËL´²R«§0”±³(‹0lÀ@ËüÁêÌ*ád½²ì¤Ã2è(³Ì¥*¨g³6ÌÌÁ¡QÌõ2ÌÍèÑ\0Ä,Ïó/M£q¯HA‹3\$³7Lîá`\"MøÌ\"Œ´Î€6Lí3;|¨•‚¡Ð+\"°Êç4¬Òó>7Ë,\0\$ÁK	4,Î³/¤Q,k’¡–bón@¯JÈ0˜ORÁƒê:øB\0ÀL!)Ð)Ï4aOH#E.\\Õ²–M`lÖH…5ªI\0:Mq4¤×sGLÎè€saÍX\"“UÌR&¬W’µÀq.\$ÖÓg@ƒ6@#óeK„à‹Œ³iMDádØ#‚K¼“â@ÍÉ5œÙsO¦•+Ãç³7PSÍ’«Ò\0Æ¼=87óTM-5T–P2Ìa6ä¿ËÿMøDÁ±‘Ê÷+ì¦ñBÊt\\óM\r2™DÐHîdÔ‚Æ|ï#ÔŒÍšÈú2ô’7I>ŽCL¤@SF²ôü±3\0ç#P:4IK»ÅI#ô°J—7¿C/M-4Ñe?NŠaÓ3„°	J?ƒ]Jj¥ŒsD’°’r‡-é\"ÃÉLLé²ýÎŸ9ôÅC”Î¦#Ð­,Ÿ	)/ÌéÓžÉ:”(Ë\nÔ!Ìí“±NÜäæì\0Û'øYÒMÊ·;Ìç2ÒNÍ;ŒèrêK„à.‚N¹3äés°8Y;„ÒsÂ¹g<<Ø2°Ï,Ôð\0€Î#<ò2gO\$¤çÒ§Ï3-”ñóÎN©<ôòfÝ,K<\\ß³Æ‚ ã˜­ ¬,Jkï„\n¤òÓÎ“+œõRNLë=DéS¯Ï7)¤ð“àOy=”÷ÓKOG>SÎÏw=dâ×K#¢?“ãO¡>ø\$ÄÍ<¤ó0O©\$ŒúÓ¤O>úpãNñ#St³¾J”ôSœO5?+Ìb´ÏÐ´ýS¿OÚœç,s˜èÇ‡\rOjSÌûÓóI#;Ìý èO×+|Î³åºbÊ1!;É¡@þ4Oé@4þÓÌOÝ=\$ÌÙO%0L÷ó®²ç-ÙNI8×9Š€†‚\nLìŒ­»NM:\\å2@N—9lÒlÏ¿(˜ ³úÊ=Æ“œ°ªøÐ!;ÄŠ´OÙ<Å3÷·PãR‡£MÎBcd‰à÷ÊV2L¨À¢¹4pknP++—€£ >\n@Ã¬²Lqé\0¤\0,Q‚‰\\\n`[À\"€¬*D€ÂÐ¶>À¤¤”ÌzBTÐä0Ô:\0Š\ne \$€ŽrM4=¡l\n²N)Ð÷Cpú480ðú\0#¤ÒJ=@&ÐÈ3\0*€C6 \"€ˆéØú`#Ê>	 (Q\nŒØê”8Ñ1Ct3ECˆ\n`(Çz?b7î¸\0¨È[À¤QN>›© '\0¬x	céŽ¨ð\nÉ2ÕCpü@&\0²Ð´8Ñ\0ø\nä´¤úO\0/€„ŠA\0#Ðì@cèPÑD ÿTR\n>´ôdÑBúDTLÐÆÌå©ãÐÏDt5PØ j”p³GAoQoG8,-rÑÖðÔK#)9¥E5´TQÑGÐ4Ao\0 >ètMÑD8yRG@'PõC°	ô<PõCå\"”K\0’`ü´~\0ªe)8PìœvI(QµGb6)\0±H\r48Ñ@‚M)9\0³FØtQÒ!H•”{R… ôURpµÔO\0¥I…t8¤ÒðúèÍG]D4FÑD#ÊQ+D½'ôMÈ•À>RgIÕ´ŠQïJ¨””UÒ)EmàúTZ­Eµ'ãê#cEÝ´£ÒqFzaª¸>õ)T‹Q3HÅ#TLÒqIjMô½º…&CøRh@\nT›ÑÙK\0000´6\0ˆ¢IèÏ€“FE@'Ñ™Fp´hS5F\"ÎnÑ®M%aoS E)  €“Bí\"”eÑ›D…3´hÓAF­4tl€™J´ˆ\$ÏCŒwHÞ¡I<xá\$¥J5äÑÿ`*À\$º¤`û1á…¼ŒÝ\rtÛƒ\n?8ý48ÑûI%'ç€ªjCAªS¨½‰<#QDõ'6\0DÈ”´éÑ¥-àÌS	\0%=ñà\0ùEè\"RÓ½O]:Ô‘ÓoGe!iÓ‚”È\ntxSÕN­\"”ÞÇyNx4€QÙPû *ÓÒE;ôüÓ±L}75Ô#P,wtß…¼?íA4áÑØ²N@\$Ô*¥\rôsˆÀÿB¤B?0ýÃø\0‚èÕ5Qª“3ao#¢z:`>TKPØút5©QÝ”CRQJ{£±×\0–Ž4ÔÜ«pýáoSßR]\$‘ÕÇ‘Dð[ÃøÔJ' 'ÇVø	u\$Ñ\rRÚA@)Ó·Rò3cêÒ-µò?Ü#öÞ?ˆ0”žSžæíF•4­Q½G59Q`•GÕ3QÃS\$xÙRSõaoTEÂBÈÍ´°ý¤´€„?+hÃíÓSHUõQ]MÕ	KØ\n4Ð×CmS”‘\0N;ªÕP‚­Oí! \"RTûÕ9€S­FÈé¿U5-UÕTH(ÍÔ‡TV”¢\0J5U•N‚­T8ú•ZRð»«@,Rœ‹¤à&T@ˆèÇ‘ „u”K£6> ýà&¾ˆÿ®tQsPe\$”…UO;ªÀ%\0ŸV`	`\$Ô¢@1ÛÐ¾?ÍƒîÑ\$\nµJÔ.9¹WmÃüÕïWpu'ÕÙWä?N¢ÑR¥^ƒþP¹UsËCð£ST¥RÕ6ËTÍNGOSµ'5%V?%PÕnÈJuPcë¤ÏR­`Ô\\V<ŒåCtæP× dxT?ÓXõ<UŠRu e.•‡¤.’wà*Rœv )Q7NýˆÚÐ“ËUž­M&Õ„ÍOX[ÔÙ¹»Tõõ Ö\n°ýÑÖÇ_Q2Lõ£Òò9ôæG–êµh@£Ž‘%QÈÚ\$ÓZujõ¨TÏXeMuLT[Xkµ=V+Rýmµ³‚­V=jÔöTOT­m56Ö×Q}l•»SÍKýk£é»ZnµXÕ§[íd+Ö¨“ˆ\n•W\n\n°ûÔ6U\\ETõqÕ¹\\xt…€“F\n3tOW)KUEµUU¯PÝq•ÇVºdÕŠÑP\rsõÔ\0ƒC]t•×?IÕv5Æ×fKMWãé×>ºN@'#b=o£óPýF(üÉ8¹ÑY-uõ‡¤ñV-UÔ¹›]òCI8ÕÃ\\¨\nµrWŸ™ (TR?-Páª\$ Z3uäº›Bå`>\0®E]Tˆ#LêÐ	ƒþ£L¥)²×ž’…:@#íGõ)4ŠRÀý;ÕãVmD%8 )Ç•^ÅQõë#Žh	´HÀŽ@	ƒý¤Nõy4š#c €û´’XRí€'Ô7`\\é¨\nEÀ¦Q±`Åmõ]WùNd€«V'Z\r…5¯GXEjuTE9\0ÕTŒÑ-UB‚­O¥PÕíQæ¢65¤£É_x•z#¶?-ˆ6TE-4æ\0œ8\n  ÖX	¶#×ÍD€	oRALm\r5eG‘N	ÕVÄú64p\$—a9N¦ÇSaU?AªU \nà\"ÐØéò<µ¤£9cŽufQ_ý_¶0Ñ‰\0;ªCòTINÅ2 ,S”£ËV=Ø»d=Aà+Ø±JeˆéÓ½QÅö5€V”Íµï\0“EíŽ–>Y1H…‘@«¯DõYRYH…~O†©cÝGTKº„>¤\"£Ñ¾‘\r/UÍØÜ&Ôx’Ð?\n€/×¶>­—twÑ Œøü´¶\0¥eå˜qÔ\$ãE›”Û\$ ?%™´-Ù‰Pe™ŽgY}_-šÖg×¹E™1àY—e@0¶	Ô{FÕ\rÀ!ÒPMKõvÑ7Q-•£èQŽ?(ÿ•Ûg•\r‘á\$¡Y=Qèñ®èê<µh\0…\0=#öÕÛf-Z´®Ö£a…^Õ¤>ªAÖ³_-;Tîª’”HW±Zý@(ÔX'hšDˆØ€«f*JUH!IåLÀ'Çƒfh	4·[ÍR–<´?À /ÐKE¥v˜Ø>µ¤ÈßÚ)i¨ö¤™TX6˜Ò×iÚBÀ!Ó™gÝ\0 ÒG …Q6 Ñ4>Üx\0!Ú¡Bå§ÖC’Ô>ÝªÕQÚ™jÊ8îÕ‘Tàûv(¼~>ÀýÕöHCe¨ÖœÑ7jŠ3§¤ß`PÃèH23–²Ðòxû U›kÀ\n€:OiUŸUAÙô-xn“Õäé=?CéRMSÀûñÖQƒbx•ô\0Ž@õÍR§\0=¦`)ZzKPû¶¡Ù]lÍ³vŸËm³ÔM×‡D\r4—QsS­41QsQÄ‚nYëhµdö	ÂA`››	€gEÈ\n–½X'kõ‚u-SéO˜´ú¹²…wöã€ ‚S6Û™DÊNNlÓÑWÝ™ %¹¹l‚A\0+Û*KM²îÖClÔx &\0¿Qò4Ö¡UmlÕ!µoã“§`\$€ˆ\"3vÚ|¥3¶›Û;iÕ•ÖùÑŸm+§hí£L“%‘6%ÓMu3”ÏQ¥F¥4I&T£HÈÕªº§\\‹ªÔÊØFC¨TQW±LªJCèQezBÃê[`ê¾—#ime!hßÓ•^ÅsCøÓê%!”‡Yö+ƒòÓ‹JêNtMÜkXJ>ÍÓa e®ƒðÙÏ e|2Ö/q©SWr%£\$µX(Œá-«Wp'uE•7€ƒrEÖV¾%³vœ[ø?êCVÚVe’5ñÍIMDOÒQq2Lv©RÐç23`,Rp³ªt´T>Õ-Þ\0¥^…Ô´\\8õZ—s`ôÛ\0†ú<tK\\±jõh4W\0¾˜þ4’\\ûÏöð×Š“’JÈZ3MU²v^ÕÍVeeöªYp>•rR½RÔxõu[“UõXû×¹D½KTRA^}„uçÖS•uX¥^äxVÈTAVu>U\0¥h<yT\\]|Í¹5óØçv5ŸvG#Õ_53€>Ybà#ì[5bªD•hQ>íF”Û¯:NK<æ4È%È\0óR?IÂÌèø!Ž€æü :K ‚<].°õ]ä¥—P³² .Êƒª\r¨8!oFjwPc·}¿ú.ÐT‚;è`nâËÉ{âPi²^ó¤»ð\$>+\0O%Þ'„À€Áž\\Ãµ3ŒÁÿ6WŽ€åyÒ‰€ÜËÒîÞLÈH³7#`@„bKŠ7—Ýßy \r·–¤ª=å0²ÞwyhB\0º¿V¤ßîÛoTÈgs¼Wî•\0Ú¬H*R‘:z…é.¦^žE­ê7¦:Uz+Ò˜±¨0²ÃYuf=˜UbX€*\rà\"\0„éØ4åÇDåŠ·€†˜\nÕ]_EŸæ\$?EL´­Ò»k¥Ã´yÓ&(	´®Z{{m€@&†©sJ­Ö“KpwÒ!|e¢ÖÙÿN}÷ÅÝ)|­ˆ ß/Z‚9íÓº-ò—ÇV‡|„uƒóß4çEó—Çß1’NAo_REõwÆÓ}=4=\$åIÅ>XGT9ƒà7ÅI4Û=Ãá.‹@¨\rË±_Ž¢¡Àß’%úaÀ¿Ü\n€\r#<Mw°JËñ’¯”µï0ï%ü(—;7¤ZÁ+FHìØÎÙ¬‚Lc÷;À#ûÚj%\0¾MTÓI,‚ ðcÀ¨“ÃµFœ÷âüoD€¿•ñoŒzÇ;=£ÁhE¨YÁO	(1MþWwR÷È8Ø~íüÃ¼V§¥Io¿(‹²±rÀÐæd¯	\0ä\r»Ä\"?à#bá®ƒ“‚\"â,ÎAEÖÈ]qw!Ôwû—Rþñ˜Eî\r]ÿêN l 1À–ÿpe08¹ú;¢Žz¹èîŸ)…HçÐ:AP¹âçã¼äá€fæÀ5²Àè%SŸî€ºLÎãÛPºæÃ Žm‚jñ[¡Ž…¿@gA§ù:èh\$Â˜Ó¢wu:-wžÒŒFlÿq2ï—ÄgMâSW°¶hP¶ó¢Œw‰a\r.ü°èË¾aÁ'ù‹·ÖF9k„Ó¥Ðë:ÒõÞAŸ¬GÆŸÍpþF 3^2óˆ@]]ðšP`N\r	Tæ%€Õ€ÒOá	à5ÛÂáE·…«¥Ø	ƒbó¦×‰\"Vù<QÐÂ:ú†ïƒá¢Dj®ÔNé1&x‚Ø(þ€èÊk³Û†kÄ19„š2­âA°áÏ…¨Ç¡òa&25a\rx”	JÞ.ZX{Þ+dX7Š^Ð\$a~ü²¸U’xƒáDñ¸Ê¸r	U…Ð&áý‡ÎnNƒè^X‹\0ÊXgøW€ùˆöøUÁžíýŒ-ÀÙ…‹+ËÿC©.øTaª]À1úß¯÷Ù4LEñØÑNó’Ø¬!ï®¼@0Û˜É+œ7‰Ë®ãâhY6(÷w\0È«ß&°n7þØ§µ‡)Ze“•§	\08¸Éé‹½žb‚%Ø—7.\0 /ä›\0ˆ`‚’©4ÌNñ>74›³b/ÌÏ€¼À\nÂö\\5„ÅA†÷ûàZ*Þ&Ã¡0,-a¡	7ëúïOç…Ë*®«ã¡xŽÞÁºE«é“×¾‚\r€JÌ·;€\"øJÀìß…\0ï6c,þ@J`/¿®LL¤±qÎ|Søg™~²\nPCƒwÃ£ƒãG¸>ƒ>\0êL;Ä8ÝˆR¸În‹ÎÿpÁPâ^ôûº¯7‰x–àó‰Òß¸oábÈ3R0a”BŽ„ÅÇ˜rãºÙ©ŒFt›#`Ï€øcÄ`v Ú=9Ê'÷‘ï‡ÍÐß¯y#¥Á3€î[—®ç°qyŽ>À5„‹{[j·ŸäêÛa)”ÑV@Ž¸&@ÒÁ®Ü³¡m¿È\nÀ59ˆþ	'Ñ¨¶8\0EûªaÁAAÉ5êY_~^Añ˜ä&	¦!‘˜ºí`JOX)’¨höáÀ\rB I‘«yY(È,adà<€Û„«„!ªBÄXÎ\0ÜÙ´kï=MéycÞ\09…œñ\n?B.^Ct	`ßÀD:d	c8:érºw£»ã¥üÉödÄýÎL÷u+ï“<Qx„¦ÄO¨†ó¨73þdÜ¥YÑ‘rê}™dòØ@‡0lþ`V÷®:ÓxP\r·®JÑz\$Ü·¯aqylÙ9Gˆñ‹ùI^b\n(6K]Ý“>SN„o–S¹N&•ynSà<å:%¤;•6TyIåQ•.S³dåšV>ð²å#•¦?J]•Ä,¹Le+•æSÒ‘aq•®X9Pe•%ybea–UUe–NW9WåW–W9C^½ c·ªÅãz¸#™m@ùz†M™n^²Íé®…^¥•.\\¡ªFF ™Eñ2Úî”Ír€Q€\\Ñ„Ÿl…,ƒ†Ç\0\n9A…V‡±rNa``¢Ñt@‡Ì{ñÝù‚?‹„Ã‚=8IŽ5‰Ðü0y‚˜pÇToX¼ÆØübŒæ*m˜Ñ‹æ6dB\r‘æb¦=\0Â:ø°á.e9æX¾bÌw™_™ªwð@ã±\0kq°wÞÑ˜|By vpÒC¿s™¬À–Sú%9‡Mšl2À‡½šðw~!Âs&kY˜0\$/çfk€EþøtgCÂÙ¡ˆM› ôâ?û›ç 4O^Ôè!¡&€åˆŽg°úæà/þf1=«›V aE:#Ìy¡N`»)`Šë›Npò’ã\\.\"B»Aåœ¤£—úqx“V“ ™¬:aÁ8y¹f¯™®sóŒæœóŽy›7¯˜¾gyÊgS›&gYÔ5;€@ÅäÕc¬3æt™Ôçn]t¬˜o/7™­og¨Åà8`3ž\08ˆ“m\0€\"\0®æ°‰[®X¯ç?¾q™F¾Söv™¬B¡\nðZçÆÎ!AÊùšŒŒÖþo¹ƒ„šÃöÏC¬Ä-yñ:ÒNãŸO^xz¹‡·ë~¢Ž.Ñ19¢¶šký„D¸8!C˜Nônf¯ëâÀËhg\r\r(iâpeé²ß…<+#ø -€ZdJ…jÞh6îgAªXFƒî‚h4dLÿà‡hNè¹Z¹9¡nxÓC«ËP‘YhE˜~sá£`‘>F…kÃ\n·¡^ƒ¥}D)Zk§ þ,ì`ÜÞ§zÁ1Kc†dluf>û	-ÏŽ¾ºÉöqŸç#aâ“å›˜háPè`¾ÝþPÂha P`€8]Æ\nÖ‚`ÜæÜ3†a¡ýŸ`8Ú'»‹˜|0ùÈc‹ƒ1\08ç¢\0\"Z˜X†…dÇhV/hY¢UhM üØ—g9N‹açYŽÞs`7g?¤¨!ùØÐ6sùØÎnÞ“.‚?ÜÇVÒ¢…ÿ¥NdÃJ…¥fŠ„¢ƒ¡†sá¦pÔ¤\"KÊ.‘æDÏ{¡^…1´JB#þ…c¥ãiŸV…x©`<S÷dÃ·¦f˜šã¼¤ã9¤49/‘hy øn?€á¡\\<šF»c®€’:Fpoò4°ùÞŒ^+ÄÄÆ¼	T&:jhŒ­fdîþiÜ¸+2nÌÎìÞ®Š˜õ§v› ©hž(þ]“j\0å¤&Zm™ôNØ€ JýE\0ZˆS‚@ÑóíèæÖ%Ãƒæ¯>ÞÓ¿]í¤Özá9zôÒz²ªó¸::æ)0ÁPžüàÖ…c|hVääÄ`Íh?ÜÅÚd‹þþrÈ•2}ü,O=	ØŽ…yÎ»Æ0£ú•ë¤I`Ô	=ªX7:§¦äû÷ð_Éª°ÕzçG®ª8	ºðädºƒNœ¹jÑ ø¡\$ÛBo©)‘2¾é¬mn˜yŸK ü[Zé{¡úÊû«Y‘0Ãƒu”\r/n\0ï¦NOáâi¡œF±¨ãRèNœö:\rŽ…q‘ê’ì>©€É«0@˜©¿–N¬*tèK¬Ãá¢ëBñ[¢òn·©Tâë¼Np·hz	åJ¾êtdNÄDY>›ÚÈ”¡ªF„ ë8þøÎ·ºã8vÖ¸xk‹¥öµº¯9ë‹´]z¾è>ôÖ©0Ñ“‚Êd#àèW,3æ:‰/7Œ†FR¡fó{®Z=¤‘ùOÃ|hºÊcÂÀÖœ3þx†é‹îñ¯F„÷^¾Áˆr]t¯Hi.èuþ@ØÂA°\0h@Ø¹°ŸŽ•Òß§¨smNÃã‰y•çV¬F2†5ç?~ÞÂÙÔ†Ñ°fsú`ì[üRiÿŒ¨c”+Œ1°fµ@‡éƒ\n ÑúÁL^36Xãt9û=:õ‚(äè ;èŸ¨ÁSýF¶@`;ìx,>y4_ñ&†”ä¼Ì×ŸŒÿeÑƒƒ,çêCFL0\r‡Æâû°£úKêQ3æùl9øÛìÏš×Âöï@~»ÿŸóà2«‰Ô¥¡+gÁVøN^\"+ b_Fd¬H„ø‹ìëwÐ~î\rb¿‹è\"0@Ás³ñ18¾ìÞ²¦pÏH#:K—ƒ¢¬X³~è¦Î š‚›˜Åø…º›ŽÓy¾^\$d!5wt²»­!':µx©âÀîÕÕmT + î½O¥À5~Íû´>»P@ÃµV£PA¡Ž×¹ÝßÓ²&\";XhŠ~tË¼!)5aD€Ö3˜8'I×¶^ˆØ®â·¶>ÄØší°ý»l;Â“Aó×àèöÆÛŸäº~§;jÜ[>šmÓ¶ÆPÛuf˜.ÞA)„=·#Ùæmß¶fzáI¶ÄÇSmÉ¶cÓA+…®ÞDù`/¶ÄddÕê<Tìø˜¸n¸>€/ðû¾Ù›må9¾WÏäiŒ÷ª›,ÈI\0¼÷ñê™-Fä`äi6ä;”ë‡`„±{î[€©SªÂÁ±¹6ŽRj¥¦Û•Cå“ô›Ú#m©=9gWˆÅ:ghÔ&ÄÈ†€ù¯VË”I¡ºxÅ[ƒh¸I¡IÂöž½ZNm›®’û®îš±tW€[´+æ@k¤¹*Ú/§ ÷ÄAEw€L_8m{).Ïó¥-v\r:L½¹£†à·‰`-@íY§m£¹Þð{ƒhíŸ¼jÚLh|:þžYîÀ#@^Ëº<éÂî¾ò›ŸKs¤ÆÑ8¯è›F“Ëèõ@XD šj7¤½x¾ï:LNóïÐ9OÚOlŠZNsDàˆÿ¹†“F¾d¥ç;Ñì‹ÁÃZPî§@^À Šg47Æ“Û`8 6ù#.Eˆ£Ôß ÖÂi¤ÀS£.7ë†È¸Äãe¹[–zL4s™0`‹~ºw› –f›“>ä[áïÈöØ;ßã†ý[{Y#üºÏw¿þ[ˆI«ºÎ‘¨oÖ	fùYÕoÒü4Ž;üçÇ›ë•üoË6ŽÐTŒø”ž@©B¹~ê;U‰ î.åùþh¾r¾3…N·£×»ïî†î6³P‚ÉžÇ„µV0Ëok1ÁEþSŒ˜O¾œóÈ•ð`7øl®Ò…ñIOÙ«‰€7¹Øït€þ÷‡QcŸ9µ ëf-¯\0-¡\0ê®ÿšà/¸.‡Ùø^RÊf’û‚î½µÂÈ<-nÆ,95JÂcM«ÔÂèÂþv</h¸ïÿ\rZK\0ïœp\"FÐˆRó¦à¢Fð«¯þ‰Ü;ð®|nv<\rpƒºŸ@äEdí	ÅbóÃûðÛàhcžX+ÎÐ²ý¡Œjû³Ãê7™˜¬Gy/€…“ŒÛ‡hì÷¶XÀ°.nXtÏõ¸.sû^ðÄD]r­í~î´†1LC·@+@Ødƒ¥\"i!Oj¥»tH\"/¾Y¶Ž“œ_æ¬¸t\n³~ñƒŸ¾qÚ>ìÝ¦Ï[û!º¶áû»ÿ½oNî§Æ¦Í\0q¨V˜5˜,Æá O â„æ \\^¾b+b*ñ¼	{Óçc§à7roN!ÃÖqÜwÉ¹Ç‘OÜ;,P¶’à:b#3+\rèS\$ØÊÎû´píoK ëÁ§~Òœ…»Ñšx’š!_Èq-™§¹ûÆW`àm–‘xÂò9©Ø&™¨íý¤[e“ò>dI*€œáÇÉ8¥¯ŽNHz«Ö·—³—3Âµ—Ð(ôÐ¨-\n‚S/ZkË1(k5í!‚„*C!§(Hn§TD‡ ž©Šz-d‰Ð†ç(A¸³¬åíBõÖkµ@¹5— \0.²&!þcY­LÆ\"\0g÷)r,¡·Ë\"Š5çÊO*²'òˆÒ„|¤rÏËO) òŸ‡*-‘ò¾—ü€)×H‘Ë.2§ï\"‹–í—ràcàht¶ªÚ¸m€:`Å#[€M¡„š0@1·Hß#µdÚ˜óAC<mÿ\n¹Ì2s”s*³hŠ1¾\0¨Æ‘É\n1TÌ/6Ø=žÙK'6F~Š>x	ßÜÜJÖGG7,ó}/ü|à‹ù8¬Ñ²ÿ„óG9ÜÉ„?9³p:	-o:3ÃLÅÏ:³É‰•;¤”Sbjxa|îÍY+6Ö|ìƒvlÀœóOx˜¯<\\äãèw?=S]b/;’‹M‰³˜#Üøå\rÏŽ3œø†„ÏKt<øµxà×@R\\ƒM)·=¼çd¤7>3H·kÐLÜt:\$}	08ÙÌ/4\rþ¶­ÍgÉ+	Í3güËsTÿ5“5€^Àxi0–b\r|û¶ÊŸb€|Ù£pÇP \0”ê“ØÀì¤9, #ù¤9³hI	ºf¡ûÊ£6`Á¹½».\$µzöKW%ÈÂJ?¢c¨RMK>Ñ8AELÁÍn:a¥:ŒãÊP•Ì^_ =*Ûa´2GŸ—B¯&ƒNrÆ2ö_LëØnu!TÔ¯DÝVƒôÝiqd©9V]`\r€n©¤çPMáotõjxú÷ Ö)`\rv	PÛ`­µ#tëÓïNöØ-Ô•ƒ5šÖ°’•Òö	ØYcå‚µ™XùPåŒž£ÕDxTæÜãalxôãV·txö\0X¿ÔªÃç£µVõH\0Ø¤Žˆ #×ËÕÍkõXÁQÕF5|ÔU OW-ñSTê·W4~Úµ^ÇW6Æu‰X=94¬@	ÕÍ‰Ö(]oÖKÈÜÃiWW=Põ¹Z¥o}qÔyITvxu‹UÏ]]jXKT\rH\\ÝQEÇ^@,È×5XuG‘guÂ–Õ™hP	}GZGhm˜µgWhwönu¢`(Z[—WU_ÙGh‡b€ÚGØ¯S—RÐÛ[wX5ÝZ/Ø…aµÖÝÖW_ýˆuU%PƒéUcQÀûõ·TŸ[w[6(Ú\rØ‡[ÃìÚU[w\\]œRGf/bˆ\\§[pÿ½tU[ueý¢SsDcË]£T…Tg•?ØJ-¢uíÚm‡@Õ‰ÙMb•º\$-pÕ4•E£j=R™ÕUÇb=^u}ÛUµ¨V\rVSt]v<êVÈÛ‹hýeöØ\n·dýWÕiÖ•V•'ÕiÙ[}<ÈÖýX½²uÅU \n]öï]Ê]Åöƒhÿ]=ÅÖ_UíB½¦w%]ÅX^ö§Ü_jõcQ„êÕ•É7Ñb>ÒMõeº­k¥½•iPÛm•[Õ\0¤êµ_öêÛûY=vòôùsÈ•'ÖGr]f=Ku#h_Q’Ø; €ÿ¨Í£ÿxÖ>[ƒJ÷q5QÙ±KõJî«#§eýD¶S¶å×vÔÕÏf´ñV±Ndx4¤vU\\‡p}›TMj4vtÃvÓC—|½ïV¡ßAýƒ³‡a•ýùq—‡~Ú/á÷©Ÿ±?Å¿zÄ{Tucå›Ao\0´’•\"üé§Œ4XÜ3ÛŒMD–WYX“MÖ;ØåcðO×…`M¨ôÓH%eœ7c:­uò†	~Bê ;ƒO0›ÃUø·×YEÍ•¶@6×UÛWßœçyÔÁm»Ï‚´:ý=±ƒÍ˜2:•ƒ3 ylÃG,0-†]Žhènš~ø *Ó¢<áÊñ°>˜r”è«¢øA<†>_úì>i‚Þ\n)¹í‚“Ÿ.~†ù¢Žá;3œ…üSÍ_¼DÖÃBªfù|äW\nì.•`w‚\0#¸#>u~ÅûC	ê¦[®ç3;o šF¾fÏà!äHx¦Ê¿G!+@ööÆX¿ AäèÌT;BŠ¾â†»Bæ¤EiÏ¦Þ@ÅÙš†µ ‹†Ù~\0ƒ„ÎJ Ïƒà‹Ç·C#ƒ…õÜÊË	‡oœIð)ya•þJ»j2­ûø…<éˆ:}Ž âFo÷q“‡jx„¼ÄØN‚âöŒL¯@DêxÇ¡5‚9…v‡TR	ÃC9Ä©ç7˜_™éA®†P¡¥_›X|çÀ6#>^qñßÖÆO÷µÎO\no¢T&ÐdàÚ¤à„Rî.LâUgé—ëø¡w€•PV#ôè9*„áêÄT\$Ìº{“f]È‹’ÿ‘™p³gD¹.€<k¥Úca‚„ôäzkµ†3žšð16pYºvî_é¼3×–á|®Ä=Ì¤8àú›Cè…Fv„S““ƒ<3¾iêŽÏô¾‰þ«è«êy|^ªbzW«LNc]uú¯Ž&8ÙÈc‘‰|d9‹zÖèþ9N~oÄ±Õä®ƒ:è¦=N~6çæ=dç	<Öü£>M-A~ 3ºì‡âº]ìFü.Ã{“ðQPÔÃ-@Nl{Å?žQîQAï³A;€ñì_²{R:]6<ÒcÇo´Øô^-ŒB¾Œù9Ï°9FjŽc–šŽAÌÆæèa³N0s5{w¥_·³Ð@©¹~ä™ˆgÀï¸¹õ{†`ìûþã{—•\0XÖ:/ä¼Ž!&él¼íPµù/)µ¡ËPÝ)ÍÞì‚ØÔï23Ðnr¯¾‹îÔÁ¯3ížÜãmÞÉÅDí–1|«¾ø\rÄo½¢nì›ï¹•þöû‚¿{'ûú>ôþû|ïž£|Hü\rï—’þöÂ eÃS¸E=´Ååá=Òs¾vscKð³ÿ¾KËO¿Â¥Ò|:Ôï8Æ|7ñÃÓüN:gÄa&©ñ ¿F}5ßÅÞÌù/…ôeÚ~CJ\"ï¼`/á|Lbóî_ÇÇŸ!­06 ×|{…ó*¤ªßåÐB#fì¬—_\"µ;…ö12Âkëò¾åòIü­ðN÷c\r²ù„íG<77GÌ±œøü3›4ß4·;{ƒþÜâ\\†žâ‘ÑgÇ¯üA?¸v»Ây.eøYþüïñéCCfçµï’âµ|ø[ý?DÂô_Ñ»;I›Îù/ßÏÒ¹Ôà7ÒþÜ}2ÔîÐ%ý8ÔïÓù²cb§Ç¿Ræž÷Òòr\0Û½Žê~KìÅÆ³ðß?ìû3ç[I¡¢¨¼q°µ;¾¿Ì?\\áÎqSoÍûö“Yß}	 Ñi¼7ÂL…Äî5>K™Ñöž¿Üz—1Ÿ’üý¯3Û:á|{öðŸlz±ÂÇ?nfé÷/ÜÿjHúÚßvom÷wÛ\\\"|{öÿÞ|1ç¤tiãåæ¼^½1eïÓ|ä]8ò±*F¸Ý…=/FkþÃ¡/âáøGáÀºïÛ®Dåñ~Ñ°%…A‹‡âŸŽ³ù€[­äåøßáà¬…£\$Ç›û­m¡ù8%_„þ-ù—\0z`Êó¤ßþS\$»ìEIù¼eŽê~Qø²i ú~{@[§_~gø¨%Žx„­´Oã_˜þ™ùáÿ§rk<§™¹zE³¹¿01g¿`1¹¾‹Ò®»Á+Gë›7qï‹›Ì8¸;ç³ÇŸÚèÄ´rzMû=ÏîéÅ×(O~{¡þièÞoòé×ïÿ¢€Ëú95NG T@¢Ïæóåy?Bù\\	saïÇ1‡”\"Gì¸™:hÇwÏéág¿sî/“x5gá\\›°ànÛ…8>·îÚŸfˆîÛ„”\r_®„‰ÁŽt8Ù|ñ¶ÿ¥ùø\"Mf¿ß­†€8 =\0ôpÔãÜð¹ßá\\ý	oøE»žgOÃèá…Ç«¾¦ß¦îÞ{©Èfåí\"+øÀîn‡…”éë.ÅÏu”µ€<öN“Ö—»Á²»«ûÛÒl\$tðv¿gsÂ‰Ÿ{´ãŸþzçüTÿ'—†üIè\"…üÃ„dÒ óÂŸ†x±^z\$‡m¼Ë¤û§í‚·ÚAŸ™ô!þLD÷<bg|ƒ‰y,ÆºìÒŸ%C¢Âî\0ì@ôé¦‘cÛ) ûvô/Ã.7InD±+;Pœ 7crF¾ËÏ\$.ˆ¯`À6€€3±ìióF¶€Ù¸¹>D6ÉÉ3ìSóëÓQ^&|–Ûø¸'»ÏD‚þ6ªb’˜Zò7º˜à2¦Ý>% Ç¸ 0„&Ô=ñàqÝvaíö‘«08zˆ\$x	bCþo&þ=¶’ãì»jDïMéÒÃ1=jb0á‘d†û¬¿[K¸»jó\0<b1ötMŸQ°¶—\$ÐèãOÆpBßÞv0@0ß¸èºqHUŽG\0|pPU±áF+ìñ#õ€>ý‹p‰pN¯´+h¥¥[kÔo@nŽ5À!’0\"&qÍÐÔ³•þÙeû‰ˆ¶—ŒêI+‹bàt£(còÅ¾ á`Ýõ€Aîsï¡SIŒ8qlml\rÖv,çØAÛN!pðÚw—((˜¶²AqBú¯sÆÀ€¤dõ¼™~ ÌÄ#VvsçB`|?©jôÎ¥½æ2?E—@ûTÞ‰ç¹Øh ÏÄR©>Ç~øÕ½ð‹8—¢-ß[Ê¿g>eòª]H¯Ä\r³Ÿn>zíœúd6Š§Ä›¾¸Éc^Ò9L˜\"uœv³ÙÈÇ3ç­ÔÙ\$ºwèóQ€\r' ,YøÆ=à -*èl¦û?àxžl²_½Hº˜¨ŸQŽ´—jVÙeý+QHŽ §¥¨rO±±ÀÇ§m%àQ/ò‚šÐ„(! ‹¸Ë@d”ä1èÐT0X =¦=oažÚ-ˆ,Ð[h¶ù½¾ òz\$‡dÁy|ŸÌô³xt;p_€Ž.?ð~ ‹5\0+Á×ã>Ý­úpêa6À“L8Àt;H«0ÀPeAŒ;ÏMðü5ÆâÁ6ÕpÐÝL\nðÎjY³„~^yê\rP/àhvàÖ3-i/Õ@üÖû°m[¦|M	ÿ\n6çK¡‹Ð#1hFTÜ)ß˜(DìmË\n=%½u#\$N™émÞÂ ˜:ÀÙX\$>ÛO´ÝøËÞ\0Mæ\"¸Cq4ÍÙ§ë‡£/O\\K\"ãd(ÝBx=ˆÔ[ä‚Np°ßI†“dVélÛRyŸÒ}ÒÓÉôˆW÷â|š€¿~¬ýB3¡Ø1LÂúÂ	˜Ý®bñ×äOÕ›µ³Â:]9Åƒh#»†ŽRÔ?P„69‘†ØŒñ³\0g„8B.\$¦†{`Ñ–hŒõ™û?öhçmG]n‚Q8õ¬	¨FÐiZ	7qìÏu¢yãxF¯ñF±+·ö 0qëÀÖJšvð¢+J2p”ŸþŸÛr‡Ö\nì%'’œ?Ín°håèÉÂFê0˜F=B'~ ×ŽÃã\nÌä5„2|e1“<ä\rÐ›À5Âqn‡	Ò‹f@>­™ƒe1h‚\$”‰sX3Û\r²@‡µÜzº+é¶©éÆ9¡ '2ñGüèÊä…åÍa¹FÜÐ¡ˆ(ÓT)\rJ\$7GÎkËÚD9£Ñý)\0€\0œ\\)f“£+œ«(Y\0P¤-b’§`ŽWM’rÄPŒc˜7Ro(Ir¹t(7\n`Ôü) þ‰\r’#è5ÆåIËø/70 OÁ¤S…X‘=Ì:EˆVð«*š·(‘IÌêr¤0®\\Æ¹¡t7hqµ§5æÛ“‚Iæèe#Ü-ñŽp¸“—­J¼”tÐO ‚{¤¢…Ý%&ü/h^\":w¥…Ü#¡&º…\"HÐ¾Ã\$¸IuÁ£€Ž„¾pÀ„ÏÃhàù*y¾X_âƒ¯C8Y¹.ü1T³PÄ¡xÁj†4˜)A·³Ó‘¹ŽsE€\$qÀ …ÀWSµÃPbbVcàd.…¡‘¼¡rnœÛ´.¡•Ð¸œ‡¤Ç†A¾˜/3’®!’—†V_ÃZH·Mg-Ô+Â’…\\ëÉRS¯µË…ì’qZÊGØrÕQNØa«*ÐvúëYÜ’¤¥W®æ[»ëVèî•Nb¬Çu‹HÉ)(y\\”1ÝÒ@ÕïJÌä«ÙY~êµ`²‡z ]ë©v £çBÖ%PVGvêA`»¾%'ª°Õß) SëZR˜•™Ši”Å)5S¦áD49Jb”;)3‡,¦9M46E–Pß”˜Ã›‡&¢ª˜Èt\nÜÔa*\$unAÕ¢£¥½êŽ–åºôT¢³Ä?âÕ%©Dž2‡×XÎtt‘Ú…Ÿê’ÖTÀ·Yh‰Õe£Æ‹­&v’³‘\"ÍpûK1–d,ÚZQUfšÍõ¥n±Ý°­q\\þ¡\\6\"DJà–§ªŒZ¤´UP\nÆT‚Yh)’U’¹¾Zæç`ÊæÃò­qUÔµü>¢Ø5°¤iÍ£­ˆT¢ëIlrÜ•}kiÖ}‘ŸÈ´U_*Ÿ´Êï”•)\$@FÅmr­ÀúJ»VÞ+ºVhï-cJé³ªËpÈÍ­Ë[¤ì0?¸Õ‰‹N¬\\xþ!9Ô Ñ\n—‘œ:„¸EYÒ‹…¶\n.§V…`?ŠâÂ3êM€>,[@´ir>5ÇÊ|D‡Øˆ‚¬MYB”Gxë“Ö\néÌ°qhÚµXsÐê—Q«×:¦º¹hùÌÕ×*5ì©ò]¤@ˆb“=ËËÅG\"ãsøxZü†G@”Å¿¶Mš›<óªW#¶è^ÂD=ABxgÄG6'M˜Ö‹âCt˜[úûä,«ð<'äˆ@ã¢ò¥úLŽ˜\"µónæÞÝ_%üÑ[º8…f:É%¼ð¤K8Ÿ‹=&­â™Ðõç¬‰03`~PŽ\n¢.àÁD^±í^õ„“œ´OàA\0ˆ¿õ{F\\d V­\\ŽÃ=vc´õä	SìF^(Á_¹?tÚËâ,*æ•ïÍÛ´\\gbÞ²‰Í¢JD¼Dãqö÷ë­×™Ø´¶ØPuxfÊ, ¡=°×œPd´håŠ i\$å€dzÖè4}èU~(ý1¨Abg1 @¼júíþ[dðZã†™²0œJJ×î3v¶öLò›¬@Iq&%ŠÌ&±3LJ¾‡Ln„€u%Ò×®€Õ‘ûƒÏõéF7h.˜«/ñLnú¾'{ÿ°Gp•O¥ÁâL0|Åî¼Røð“Û/¹mn|á©k]\0%«ñâtº€Ëí…˜DNN›ñ\"ØnìÒ*4T2Ðbâ‡3÷t|™Œ eg½gJ¡žOŒÈ¡,A(N‡©‘Š¶vF@ë§\"gñ^oÅb;S’*\0â†_nLß95…sTÑyP0fxGé‰æŽ4œ)D|.]MŽBŸHt\0¶9²8®íFa`‰ÍH“\nÙ ¬X8+B|¡k<\0»\n¤ž)«8f€’bÅBèHÌ9Ì âÊHƒÙƒ?,–¬| 4P¸Á‚¶1’\nPs˜\0@%#E¤¸€ \r\0Å¯\0ç¨À0ä?\0Å©,à\0Ôh¶Ñj€\08\0l\0Ö.[±lbäÅ´\0p\0Þ.f@qn¢è€0\0i>.\\ðu¢ì€7‹uB-D[pnbãEÙ,à\0ÈÌ]Ð ¢ÞE¾‹r\0Ú/l[pà\rÀ\0000‹k†-P@\rÎEî\0g.ÌZÈÀ~\"çÅÿ\0q&/©g¼À\râëÅÉ\0kÚ.D`H¼‘x\"ÞÅò\0n\0äœ`xÀ‘m\0Åý‹å”a¨Â K2EèŒ#Ž-\\ZØÄQl\"Ú\0006‹„\nPÿ`q„\"øÅª‹c‘4 Ñ|âéÆ'ŒcÎ1^˜ÂQlcÅÏŒ¾1D^xÂ‘o€YŒ… Ì[˜Äñ£ÅÙ\0s21\\^ @\rbìF‹ö\0Â2D[¾±Œâä€7‹z-À\0±”âñE¹`¿/üdXÍÑ˜bñFM‹&.ü_xÄqw¢ÕÆ5‹çÈ¡! qˆ@EôŒbê4\$]xÉq‡âøFŒ%Ú4\\Z¨É±xâõFŒ÷Ò.ô]˜É c'Æ1‹ç ™„`HÇq™¢ìÅû‹Y–.,gè¶€ã6F6Œ¶/½‚ÀÆ­‹½z5bˆÇ`\r£GF(JMf.Le±§@1\0005IÂ5´eª£(Æ‘‹b2|[à \r#5ÅêŒ1V0|k˜Å‘ªâê€49U‚üg(¿ñš\"ñÆmš5äe`€\r£4Eô‹­F.”[¸»1Œ¢ÿÅêåâ0diÈË1k\"ãFoŒ	~7ÜgØÛñ¾#oF™Œ½þ/4[¨à1´ãÆI\0i7\0XÎ‘n#LF¥\0iª0tf×±l#Æ³Œaê4ü[HÝQŒ£FWŽ'Î.\\m¨Î±¬£‰ÅÏ§ú30(ÏQo¢ïF\rŒ	N1tp˜ç1¨£PEÝ‹§’.ØHÒ1lc^F~‡Þ4¼_XÙÑqc*Ç7Œ/:/ÜqxÀ1·£rFµ\0en/H¶‘®OùFŽ/¶.ìaxßqr£ÆV‹ò4ô_ÀÖ#F`K‘:]Èãñ¨ã«ÆíYZ-ðØqÕcjFzŽÓ;0(åQ€Æ§\$Â.´f¨Þq™£XEÚŽgŠ2¼lh¹±Çc°ÇZ‹»n3ôl(í‘Ë¢àÆÝk&<ÄkÓþQoØ/ÆÑ‹Å^7¬j(Á‘œ£G#‹y\":sa±â#ŠÅø‹¥ú2L_hà1”£¡Æf-2¼zhµQðcáFfKœn¸ññ£ZÆHŽ»\$Œn¸Á\0IcáEÆŽ×ö64}ˆú1ÂcG\0sò-Üv8Ó‘˜#nÆ¤ŽoR:är×ñbã\0001ŒõÂ7|lHÆQ¬£‰FŽ…2ärxëQöã¹Æ@‹—š8||¸íd½#÷Çˆ‹¯Ö1)fHÁGãÝÆMŒ‹7\$c¸ì±¿ã3GÕ‹õz.l}øøE™\"ëÇƒŽPKÒ1Ìaˆ»ññcoF”Ï b=TaØñqä£ÃÆ„,á>?„f92£QFWŽ‡>?4bˆ¸1”dÇ'‹u Ò3Ü|˜Êñsc‡ÆÎ§6Bmèí\0¤EÆj=ÙfHðrÇ>«þ5dlIQ|ã…ÆÆÉ^9”c˜ÔqtãýH;5äcèÇQŒãÇÕé!.?œ`húqçã	HYÏn.|ûñ³¢òG—´aˆÙÑÍcXGóáÚ?¼tè¾àd\rÅöŽIz>LdØïÒ\$HÇWŒ­¢9ðXùqÍd0È-‹·J@,†ˆÙqôãÔÆ(¹.:Ôx8Ä±Á£=ÇJŒýÖ/¬gˆíqó€1G¤Ù\"^.dsx»r£HFó‚?‹‰Ñï£XGz‹W.0|v`ˆŒ]Eð‹½^0\$ZÈúQ¾#sGlŒÿÎ3Ä[ór\$?G±\"Z0\$dÐ‘‘bïHtÁ~@eyÑ’bõÈª‘\"61œxÙ²cH‹‹Î=,c˜·ñÕä)È\\‘}\"ÆG_¨Ö­cäÅæŒ;V/<nØØrãÛEö\rÎFtpøà1w£;ÆCY\"¶3TŒ8¾±õbïF8ñÖADk¨Ùr&ãäÅåE®>¬|Ñ‡#[GZNH¬k¨ê2%äMF´Ž[Ö8„oˆ¸Ñ“c\0É;‹mþ-œ’øËÑšä„F‘yJAôl¹RMdÈÉ\"Þ8\$n8â1ÐäÈîYŽ0|ˆá2\$Gœ–<,™ñ¾#aGPŒÁ \nFtŒR^’£(ÈŒ 6JÔa(áñ»bÙIaU#®3hXìq}\$˜Å©ã!N;\\â?2%\$¹Ç›‹UnG´˜Ã2&ã~Æ¶‹eþLlhÌ8\$SGjŒ­bB\$w¨Õâ¤®É\\Œ÷>Lôm(Âò@âÜÇ›Ç†8ôg¹1ò!cSF‚’#\$òHüghçÒ\"cE´“ò:DsHÜÑº£ÿÇ‡Ó~HÔ›Äqt¤ÔÉ~’60(ÃÑòbÙÅú‰º7ÄdIq™£vÆœ~-ÌkXÿ’)¢ÕÈ‹ƒ\"²N4’YòI¤ÏÅúŽO¢Ex	xd	Èç“„É‚ü\\xá±˜€’G%é z6rØíq~ãpIÎk&\n=I=±´¤%EæK\"ÒGÜ‚	²#]F’'&.l_¹&ñnc\\Œé—î/[¤@’…ãÆíÙ'nMŽ8ô°ã˜Fì’Ü’G\$”Þq÷äMÈ°Ý‚<œ[˜ÓQâc2ÈšŽ%‚<\\Y1Ãã“ÅÆ’&:|q™òCcÂÉ-%é'ž2äƒx×ñ¼âôH|‘Ç#ö0ì€)b¤lHXŽ×ªJtš¨Ír‰äeÆxŽ%#Â3\$ØèR5£ÈSŽ­!ò.´¥(ËåÀ’GÓ”Eþ:ôl¼r	\$qÆŽÿ&B1üa	råI©ŽC„†ÈË±žãNJa“‡ÚBD[è¸²XäŒJC‘MÆC†ÈÕ‘©c[Æ‹á.>4€	#Ñ¯£5I“ã(Î6¬z©Q1x£èÇ;s(‚3l‘I]¤ÊÈ*±(*T<xXå±Œ£÷:aP’ü,¬4õ½êHã¨–P¸¤áušÄ°ü¡óÖBÏQ.ðEI¸U‚ë\$¥e*FT­@>™%Í+åf’\n•ž±Qnø-å÷²µU#«ÌUº£Hj¸—]Ò¶À:þx1+™Ûk¬'UKçVmC£•Ð¡}s)ÍØp‹V,‡VÂºT¤7ˆv.«QZÊåu{+Ð\nD¯§e¿\n¬px.°|À\0)Œ}I<0\0„IÌZÆå\$k	!µ¨ñYh²Í”°€RÂ‡d¯Q¾¼S°%.Á%‘­9•Ä©bW\"Öÿª¥\0)€Yv*VÒÜWXŠZe–Ë/:õ,ÅO¬¯Õ¡áô”xÃ†Q!,õ`B‰	_. %©Å–tm•\n“²JK¥VÀ­y}¾ÙMµñ,€	å–¦Àl+qap0®ÖÔ’;]R ¼ü#(‡ö*^¯º~–Èï >ºµ-T¡Ñª‰#8¤@°éY \n!ô;Gvž®æÂPjŠ%»)9‡E-îV:™òºUÝJë–ö¹¹ jÛD‘ˆàK‡wF•ÝÌð0 R%È­ôU’Fü?[«¥Aï–DTwP¸£ú€Q€Â¬ú—<«É”aÇ1>@Na(2†¨¢ycã±ÕhºÝ•ÊÌ\0P¢:]yWƒòíÔâ¬3[¾<¤@‰àÕ%»gB»Œîp…½Ê;ÔHKsWÞ³…àÄ±Yr`fí‹']Ø¼¬\nbUˆ‰%Ý©ÊS2£ÁGdBpjŠºebËäRÓøó»YZké”µ\0U\0„ª4Jçƒù•Ú¬–UÌ	dÒÉ•ðŠ'TˆH]ÖŠÐGœJUØ/ vÝ.ÍZÛB%ûì’×	/\n±í¡Ô&RkÁÁW…\\ ¦Q rùÕ^²ÊâÌW\$²Yp~IfæÌ—ä¦R;eK?ÔÊ´%B¦QQòø±-+€Â«,Q¯Áfòˆdê‰¥rL6–Ò©îW±Iƒs&©¨\\˜¹ÞaÂÒ)‰*/ˆCˆu1-ùÕšªE~‚ÞVs,D*26¼&ÌPu\\¤aC¼•;Êd¦1¬3ÎFÐÚ0wƒÿË9øD2²g„·&Èl|^ H¨¯.c¼9p0ªýÝç;ãuÞ\rQHòœ00¬.ŒôÀ¸†–\"dÃég€a]é»U\\æµY{œÈ•{kb–«Ý\nºø¢»Åé€ÂÄ_™2¯¡Fð…ÙKí&N¬¬‡éa[´Å‘ªg&J!ùG”º-\\b“·b®Ý‰Ì‹‡HíTŒÂÃ…2ûPÃŠvôi ynjÛƒþL!#9,Þa\$Ì7bÃæ&*&[,£:fS´åkÒ´VÿÌ»™e3IZú<yqª7ÝŠºw—˜³’e¼ÇàúÎ½‰<*Ò\0 ¯ §P	ê0WÌ¾UßrgrÃe¥ŠÏVŠº£Hf¬¸i›“4¹+ZÐ¦6_”³‰ž+RV¥ÌñS%,ŠgÛµUÄ‰%ô‘å™ó0&hLÇé¡n¨ÔàÌ`™Â¬QNº’Yv!þTjÌñš32QRt9	¢3FÄ’ouF¯-ÝtÑåÓD&‹¨qˆ°¢\ni\n’éž*5HØÌñ˜‡4\ni¥U8+­ÔÓ;S™â¾•}¸·o3E•·M@Xj¬Bf»µUU‹¦¤Ì~RA-6iÊÊ þƒ•*|Ô¬QMÑYxsTWÈ£ÀTpºýX¢“B9<f^Í\\#¥2ÙÙÔÊh\nÞæxÊßT°µ*g¬ÖÕ¼ó=%¡ì™ï4>j#³ÕG³Uæ¶«Œ™ ¨=ÚÌi„`\nå”»=\0²¢[’ø©«ŠiÝ¢K›4újâöi«Š±æxÌWUÿ.ÕgÑp[È~•\r«{u6¤’ÑeV“-^ÊÔ–èí’eÉ)™—sPf²Í§wÖŽÌ?„Ì'}Jó&bË6Õ4âmr¼É™Š]]:’Q™¡6ÍZÄÍI}rÜ²LÙZ7[2‰©›êýUZLãQDstDÎy¶ê©ÃîÌìQ}-mÛ\$ÏÙ¹<¡îMt™ì¹¡aÌÒÇn3<À«Lÿ™É5W#·DKRƒèÍÛšïor©õ’ú¦ðÍ¢vÉ4MQâ¡×ƒ\n­&Í&V±4rW”Ý‡}sI8M1S8	^dàI¤á÷¦”ÎUE1Jps­Y¦S„VKœÝšk8Ri¼Ì™»hê,SQf:nÜÔeó³PæAM¹Vn¾²_dÔ‰Ä+‹UU×›·5>n#¾¸wÓU& MWV’¤µ]üÝµcÓWåpª§X‡8èŽDãy“Yç!)Lvw7mÙôä‰®`U¦¸K?œ)5¹Q4äÙ»ó>%õÍöw×+~kääõxr°§\$M~‡Ó2Fr|Ø)™a&\"ª´–[6\"YtÝµ4ðØÝ¨KmvÉ8~r+¯™ºó‰¡Ö)yœ)6YkÂ¯Å±“væÎì›<¾‚má	XŽ»¦ÔÍõXk6µÕÌÛ	˜*1–AÎ„–k0Šs®IÑ*ÏTLú0¬>ìÛÉº“o¥æÎT°·¦V”Þ\"°&o-™Á:’g\$Ý3:&uMÖ‡Fë%idéåDÓ?fï*šï9Vq,ë	»³yUQÍ\0—Ù:I×ZŽÕóB'Kª&›ð¢ÂoÔë%\$JI&;jW¥8v,ì¹£S”—¨ˆuÝ8)]\$àÅó3µ•,N\$x0êåO|ì *ÓM'oÎÁœ39’[›«™Ã“OBM¢ª|Ü¾ÉÛÓ¸•ÌÎñšƒ8ªväÌéÅŠCçzN0é8Îcôå‰Ç«ç§M[ß5tê–‰àj#•(€_;qÜð©¬3ç|¬™Bë†!œïIÉ3Åf Mo\0«5Æxâ«UO“Ç¦zÎ¶›Á6®uÌìàS¨ç•M{ž;žv®éÑó1æéÎèè¦×”Øéàód§ƒÍ”žC9áWÂ§uVS½'>»ŒT]6}ÞJ@KðýZžGÞÙ•„kOV#ª\$ž¤H\$Z›ÓÕ€(\0_V&¨?h	3Ø'‡ÏGƒ6ÅF2Ÿ×pj,ç°K.Sè±‘|öiíËqgµJÑÒIÆvøCšê‰\0+\0GYn‰Ljèd\0Õ1\0M>ð‚dÀu†jCWSO\0†amU7ê<XE­îQâ°¾|º¢¤JDgÁÏ…Ÿ.©r|(÷WrÏCè-Q–”¤’W\\÷S0Èä\0_#6±<T³Õ¼S×Ôo¯¡S¹>ª{dûUYÊw\0)€_™º‚YèäzJ©'ÜO¬\$Hë.l´¹ùc%¥Í&XÈ8ü‰SígäÏ‹Y)?ZUòçµ 39\0/¨ž\0œ¹õA¾%ìk2ë© T=ÂÌ%›K5&ÌÃÔ^Ê«u{¶É–\nì”½-,[¶±–_ˆ}	ýÖÖ–OÅŸër~,àyn“GóO±ŸùMo|ÿõDi€#P\nŸi@>’øÉþ²Ü×µOû–è\nzñ•/@–sKg|³þm¬Þ’7ôÀ,Î  =3‘gý)¹Äv@,©ô‡vµâY­ª”•±P&–·@ŽC¯dvs9ÈÔý–Èêñ¶BCJgTâÌX–é@0>šÖ…\"y”QP  c1‚eÊÏg^Ð9•ÉAEgú;\$x4%‹¼1YŽI¦}r˜%24×iÍ;SÉA\\õå;j£å¼Ðd[¶§úqmº\rÁÿVòO¹ ½A¥s¹¾J¥¥ÃÍ™Të@Zƒü¼¹Ú \n(?ÐTê¶2„¾š!¨E*²Ÿý.•_MúŠ÷áÑ¬ú[×;®ƒ=@úòÛÉ8K§Xå2QM<à©—aônÐ’œ<®„”»ÐŠúVŒ‡Ø\0š£BZ\"µµÐ3óhN…¡U\rá`Lß©þjí¥×‘œX¾´zV,»{t/UÆ¢H¡‡BÙU”ãšËßÐ_R²ù`rÎuAô3ÝÁ€MŸz³þ€ÊÈ 0«ìÖ‡Ò¡¦´™eìùjt8(l«ê–â²ötÃIyT9çç‡ÖXC°?ê‰©{jK§·Ð’SßCÙÖµ5~ªr–žÍ±œçCð•:È…xt<–pÏ½\0¦©ñÕ~I˜4?À)ÐÇ—”N_RIŠVÄµKãnª±B‡‚Ê´§·Ðˆ:°Î}z½éÚ\n5@’Q\"UÉBInÌç0ú\"ZfÅ\0(ãB\rið5E§Óè”¨k\\ú¥ÖÑeÚ”€*£Ÿ10=”z@ÝÇÍË¢„¯ÑeŸ©yë\r	!ÀY|¤|â™J)´8g¸Ñ¡ËEHúË×gÔUæQS¡%D€\r5Â\n¥§„Í`˜<:!õuÑè¦(lCõ0¡CòË…¼Th¨UÉ?êw\"úµË”—Ò)\n2¾‘Nlùºªr–0*9È¾,?Lç26dÔå+èXŸ9B€x\0\nà»¸_FN‚ˆ5BA„ƒ¨‘¨ˆ¾MBš¥[ªàÕøOá£J:‚2ãY•³\rHß­„P×0áZù&5Š‹¨Ö+˜›\rÊuÄ˜‚Êü?î˜¦ºbšÝª\"t(àÊ½‡¢£N{ôÃU(”Kh­Ñ¢·@<?j¹îó(;NP¡\$ê‘ûéþ\n&ýQ×\\™GmP‚¼5;Âƒ€An8YiNCÒ,I”éÏež>mUÚ›¥ÑK¯•CÑ£®sžc1 ÉlÊtÕÆO½¢¨°e´€fÌ­WúUCÂé}Ë’gƒOžS¦«€²¦%[´WRG…=Æ}5Ñtteî\\INòŸY’k1)Ñ\rQæ³jýÅBÜÝ{)‡žíH•-\"zDŠtÔú¨ £µ9Î{ÄÇyšŠM”f-„]2¨>d¢Š(ts%]Ñ\$ñHŒ?%\"•†n¼ÖÍ#ÒT§@¼Çwjt§8RœáBIHñrBÓ\$¦ÓÓw2!\n#4„(®¾›2Y†ã\nãÝn€Ø‚ŸEÆd½&4šÂ/€d£ËGœ[XV%´ž‡½ÿŠSØ*í÷o¿Qƒ?\0r€k`s°Ø¯0¯Þ‘%âÊ+á¬€Ð±’Í4âfyG¨‚ƒ\0\nÀÆŸŽXq3`“`f€Îž¥D9çàä‚¶iDÅ–PTddôI³àÍá#’?¹¨x(Ä‘ŒÀ÷YTt¢€à£èÇ‚\0aÒÚPàæëd°\rî¥’”P-­,ÈºÔ³’lÁ^ð­-@=ôµ©i\0006¥µª–¼|z[ô·¾\08¥ÇK*–ˆWÀ4¹éhØ¥˜’—aöÅô±œÚ¥«K¢—u,b¡4){Òí¥çK6—å-º_¿éiÓ¥ÀBœ	--š`Ô·)cRÞ¦L˜DhZ^ …éˆÒæ¦Kú˜.ºbô¼©„Rð¦7LR<úbt²éÒû¥íL\n˜Å2k4ÇéeÆ3Œ›LŽ–2êdÃJ©~ÓŽL¾™e-fôÌégÓ6¦Lž˜=3p”Ì)wS7¦M–å3zaÔÒ)ˆS7\0oM1}3zbÔÓ)ŒS7¦5MR™õ1êkÅ#lÒõ¦iL¢˜ämšg”Íi®S?¦¿L6Í4:g4»£lÓG¦ÏKr6Í4ºmôÄ#lÓO¦Ö¾6Í5:ntÆ#lÓW¦÷M†2h\nj\0ãÓ\"¦ïN@u88¾´Î)­ÒË§MŽ›1JqtÊéÆÒÑ§Mªœ­.êqtÛ©žÓ’”N*—8zqtÞ©ÎÓŽ©N‚šÕ7úsÔá©Ì†/‹ëêE9JuTé£èÓ¨§9M’¥7*t´´bÖÓŒ§gNð	-9\n`ôïiÙS»¥ÝNöœÅ;ú]Ò.é¯SÆ_\"îž-ÉtñiÜRÑ‘wO&žpùtíéÈÒË‘wNêž­<ºt4ëií%§IO†ž}:zpñvéÔÓÙ§ÙO6ŸE>ZvúäISƒ§ÙObŸ>Ê{”ÁéöSà§»OZ2m7j|”û)óÓÿ§Å’Ÿ´k*pTý\$åT	‹ÙP:ž¥@j}1ÕêSû§¥² u@*yUêÓ¥OÂ ù\nTôiˆHR¨#Px	-?Š„2ªT%§?NB•Aª{2ªÒÜ¥Mú¡8pe™)ÖT¨EN&¡…?Zˆ4íj!Ô-¦1PòŸõBˆµ•ãIÔL¨Q<DÊ´áÂ¾S¾§³QV¡%1ŠŠµ	ér%¦O’¢­Djc•j\$Ô]§ÇM}.]<[UbûTkKP¦£rhÚa5RÜÔ/¦OQ²¡’jºŽR2ê:%Ä§ÕQÞ£}>ÚUj¦Ö¨åOÎ¤Hz‚5j\"T‰©	Or¤e?ê‘•@ÔŒ¨R2¡ÅH:Õi€Ôi¨§R:¤Ý9\n“Õ\"ê7Ô©;R–¤…JZ’U)jJTž©/R–›ð0\r1~£±JŒ©=RÆ¥œbÉÑ¯j4Æ3¨ú—RHuKó–q}ªQTo‹§S\rÜˆŠ™\0ãTË‘S:-ÕM\n•õ‰zTÎŽSZ¡F™u5ªRTrŽµSZ¥MMê•u7ªVÔo‹¯SZ¤ÍIZñƒêgEÀ©ÛSv£¬[:µ8jxÔã©ãS–£”eÊµ:j4Åõ©²§ýLZŽQŒªÔ*©ûSÒ£ôbêŸõ>*:ÅÅ©ÿSò£|ZÚ™Ñ*‰Õ¨ëz¨Pj¢5B*`Eôª'T2£ô[¢uD*9EÛ©®©=QjÑnj“ÕªKTr¦\\j¤õH*`EãªOT’£©fJ™Ñ‡jÕ*©b©ÝRê§5L*dÇßªwTÒ¦e§uNâ|©–’¦ÊXÙESê6Ô§M’ªTØÍUU*{UZªì	%M4· I*¦%ÔB?P.¥Vjµ&ªµU>9f„~§…TÚ‘µ*©GzªžMf«½Uø¶ñjª»ÕeªßRr«MWúª5UêÕVªÇÊª}Jj°5X#-Õ‰ª»Uš/ÝXš¬USbôUO©}VªlxZ²Õ[ª°TÇ«1Uš>MYj¨‘mêhÕŸªßf¬µWê¬5êÓU««UŽ¦ÝZØ¶ñm*§Ôß«eF­ªZ¶µ^£èÕ“ªÍzª}NÊ¶ñ±ªàÕœ‹o\"j®\rUš¬ÑšêàÕªß,op0>\0‚äåI·©ÕU^®€,ŠºM\0€3UÕŒž—.;ÕAª»uu#÷E¼«ÁSê®Z¨¶õ?ªÛÕ\0«ÛWšÍW¬Ñ¯*§ÅÇ«ëW:«cº¾µoª·ÈªŸTJ­½QJÀ5|*ŒV«•U¾35_ú¿…ªÿÕüªÁ^ª|lºÂ5|ª·Çk¬#Væ©•[x¹õSêU·ªyXz¯…T\nÃÕê°Fµ¬9X.1%`è¶ñ§*eÒÆ¬[Ê±}a@7qà«œª·VÊ<`¸ðU^£ÁV*WªNUVŠ®‰£dåU¯K‰WV±l~êÉ5dåU£“•Xê¢]cŠ¯•”« U€¬†–æ/eddº‘{*ãEì¬dr¬UezÈõckEÁ¬[VF³-cê²¡4\nÃBFJ¶|ì¨Êƒ•{O›µ<…h©\$µŒ½!ô\0Kœ÷<†wœòÜ5 kNpè)]z¢ùä+zÃé®eS.¢iF:ÚÑj<Ä´‡Ð­«ñV:ªéÞŽ÷^\nO![`¤ny\n¨ 	k­çzMK ãZ•vÂ¾™ßóW§‰:›T;þr\rkRä‚•D8Qß<ir+¹!µ®'dÏ!–Z©^‰l5s3ÈTQñžo<é×¬â	ä3Ï\\Ï>•Œëòu<A*ˆ§€Î^\$¡9€>|ñùÉÊDW\rK@XÏ[z¶Û±Ç`Ò¯æ®LÙšM3Æn1…N³@çXÍ\\i;Œ”ÔÐ5˜‹—g»#\\ŽG\0“LÍjµŸk?Íšvñ4®kÌÍ*Ðu¿–>©.­\r5r´B¢	¦`e‡¬¹š¹Z2´©)•¦+IW®!Z:¸izu¦¦®Vœ‡F­º´ý*à•¨«RM\\®H±LŽÑÉ§õºë“Nû£i\\ŽµLÖ§b§‰¬šÉZÆk4ÅI‰áÿk[PêšÖ¹Jk“´)©®¢À(W,®	9œ’”æ™±jnfxÖÅv™]6yÓµ*ÙUÁ'8,B®U6F¶êÙÒÛ¦[Ku­¥3âduma-JƒææÖãœç76…¢Ã9¼s<'\nVïY/[Æ»mo:ÏuÜCëÖø˜õ9ÒW¨:ÏÓÐç\nV®ñ\\ýpiÝÊ­+„ÖŠ®ðJf¸mwuV•ÅëKWœê£»ÅxÊâU¤+Ç×®ñ\\znÝrzSˆU#W%®ñZšwäáE?µÑÄL9˜~®fo„áIµ®â+V´Qa\\ö»S¶J(®ºg\$M‡®“DµÜ¥l:ïÓ”§Îjžtîjº|	«vè\n;džxîzs³ÃYPÚWÎÄ5—<ï€DÅYê¥èK¥¯¡_Jcý…ZröÕnÑ ž±_Úã•k^+m,3\\aBerÄ¹Jj+ÖÐFwƒ;Þ)\$9Œ®Û]N’\$\0¦°P‚ÂÙµªÇÝYL_œK1òfµ%É–Ç;Ï÷ñaâmK°¹\"‡\0Ö“¤ö%ä 6úï.ë?Üw\nÀ¹Ï‡­K l”ûxÞ)ùæ€Ya§¤Ø‘´#_>M(3Ôì—–šm¨ºP9h3Ó»¥¨°b0~Á¨À“ˆ[âX4N Ü¹á„HaÉ¨†YkÆAžv„t£6^:Qì_‚l\"Â9°€NöRÔ	¹A\nQ¶Â¸kìLl+½®°ŽöÀ–Ô@#Ìt¬ ½¸K¾õ“¿vÐB”Ì;^…¦	œ!gl9ØHD2ƒ.À{^æŽÍ; `¡4‚4íz\rŒ–G\r\0[\0ÄŒé¹\$é\\ŠD\"ÄžÓÃœ qŒ›…7 ™´½ƒ{âRN „(Šuq¯Q¦¶%ˆ¡ÿ±HxmêÉt0_&EahÐÒôEøÏÝØ7gn8¡åúX¿v\r×þ%Mf^Óäh°0¨1ìÉ±‡=ÇðRI\ryÚqØ±†æëÍ¡\r/&XÔ±Lüc\n\$@ÚìJ‚0Dˆá}Ž)­/Üd—.‚/—Ÿ6,t’é–!Ä@!š„°±\0VäÃ.ÅægFW°Ø^Â—e€‘5i­Ð ´\"²ÚÇDR»¡ Z/´\"Ã¡ì–,ïÓÁ˜6=!dD1}‘6/ÖFÄTc;`x+#ì“±ƒ“¬Ž7ƒ²0ß*ÈäJÛ!l·Q¼*hDÔ	PbçòBöšYÙ0\0ÞÉ\nÉ›!\r¬„KVÑ1è5G¤VP˜µ4«°ø=;w+%ŒlžYIÈÛFÅ” æ–T„1²âïe 9¥•g˜íÁ¬1m²„âi:»ç\0‘¢èS3¿N²¾¼Í38Ôv¬±ÙaN x¡]ƒËEl²>¸±<éLÈT\rÁEbh½H²Î.ŒþÛ. +6‹ÇaÖÓAá€Ÿ àJ—þY‚³\"ÌlÅ5Ìºb\0o³\")”X‹f¡SdžR³(òfu™ôµÿ¼²>{\"ÇAìqÎæ8§AÞÂ½£{8œÞÍp8k2‡LúY”ˆË©âµ›ˆ64¬VÄ‘TX\\Å› ‹ï¬àÌY±å1fÇ ÖqÌ:ìuØÂ|ýØ\\}‡‹ì,O0{ddsÍ‚Cÿ	B5¤à#H1zl\0%o“„,0Hide‘'†?6x½Ö±®à¾5žQ¬öyÚ|¢p¶\rŸ+=†p×²X\rž`!°q,÷>³§gÎÐ\$Û@¬Ô³ËÉpÙ¸\\¡6Õþ£\${¾^&Ï›{<ÌyØòZ6jÇ¾Çeš¬ö†³¤jo¶\$MXá«(v‰lŒ•@Mh°˜d¶EíX“¬„‹DÀVì§y|jHæÐu¢`TpZ­/FeÎÒ-†{E–sNÚØüªdíp€\$°uPddÄ£5“þo2ÚL ªØ¿\nc«ÌË8¡^fXŠ\nó:Z{£žo<ìt1´Íi,:õE6šC*Å+–=iÀÝ¦û(Ô¬V½_rÛEæ!—šlDìvZƒ´¦ý†Å¦pÊ¶N<=K´Î“r	Ü#@;°\0ŽÂ4ŠvÔÐ7YkA¸ì°º±œ¬`(KÖ¨#Ìƒ2ª\rQŒH!/v7l/…°Ác±íb!ÐXìÆxÂÍ(¥¤4—6®@¢€cLjðJ±!Ð7£€£fzXî“å¬	v°6ÚÈµŠ¯=pTqX-`5µ€zjÖ\0À¡µ¶°ÿcåk%òióý¶²MúÚÀ€x:tLc1,—Å…v4†­)°áN”/9B‘„ð¹é€ŠÎ\rš9¨NŒ8IG©Ê@ Û{¡·:ö¨´/M¢›xJ¢áº'EÉ(€(¶#rHE '¤2`qˆÑS|èaªØØ`R€ÏÜ9¶@â¼°ƒÃÅ^Ú€s¶BFˆ«Wkd&ö’Ý¥MOn\0œ¸!ï0#6ËzÛ/)Y´åÃ¦ë]–¾Ÿƒæq^x‰´ü–OÌúÞK/ˆ\nƒ[G ab:™9;3dôMS¹?‹9ž¨üå£R×û\r‚Ù?\"s1g~x×");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôža8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wþ\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹ž”ªÓ²Þ»\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($u){$ce=substr($u,-1);return
str_replace($ce.$ce,$ce,substr($u,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($Yf,$Rc=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($Yf)){foreach($X
as$Qd=>$W){unset($Yf[$y][$Qd]);if(is_array($W)){$Yf[$y][stripslashes($Qd)]=$W;$Yf[]=&$Yf[$y][stripslashes($Qd)];}else$Yf[$y][stripslashes($Qd)]=($Rc?$W:stripslashes($W));}}}}function
bracket_escape($u,$Oa=false){static$Rh=array(':'=>':1',']'=>':2','['=>':3','"'=>':4');return
strtr($u,($Oa?array_flip($Rh):$Rh));}function
charset($g){return(version_compare($g->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
h($Q){return
str_replace("\0","&#0;",htmlspecialchars($Q,ENT_QUOTES,'utf-8'));}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($C,$Y,$fb,$Yd="",$df="",$kb="",$Zd=""){$J="<input type='checkbox' name='$C' value='".h($Y)."'".($fb?" checked":"").($Zd?" aria-labelledby='$Zd'":"").($df?' onclick="'.h($df).'"':'').">";return($Yd!=""||$kb?"<label".($kb?" class='$kb'":"").">$J".h($Yd)."</label>":$J);}function
optionlist($jf,$Jg=null,$qi=false){$J="";foreach($jf
as$Qd=>$W){$kf=array($Qd=>$W);if(is_array($W)){$J.='<optgroup label="'.h($Qd).'">';$kf=$W;}foreach($kf
as$y=>$X)$J.='<option'.($qi||is_string($y)?' value="'.h($y).'"':'').(($qi||is_string($y)?(string)$y:$X)===$Jg?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$jf,$Y="",$cf=true,$Zd=""){if($cf)return"<select name='".h($C)."'".(is_string($cf)?' onchange="'.h($cf).'"':"").($Zd?" aria-labelledby='$Zd'":"").">".optionlist($jf,$Y)."</select>";$J="";foreach($jf
as$y=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$J;}function
select_input($Ka,$jf,$Y="",$Kf=""){return($jf?"<select$Ka><option value=''>$Kf".optionlist($jf,$Y,true)."</select>":"<input$Ka size='10' value='".h($Y)."' placeholder='$Kf'>");}function
confirm(){return" onclick=\"return confirm('".lang(0)."');\"";}function
print_fieldset($t,$he,$Bi=false,$df=""){echo"<fieldset><legend><a href='#fieldset-$t' onclick=\"".h($df)."return !toggle('fieldset-$t');\">$he</a></legend><div id='fieldset-$t'".($Bi?"":" class='hidden'").">\n";}function
bold($Wa,$kb=""){return($Wa?" class='active $kb'":($kb?" class='$kb'":""));}function
odd($J=' class="odd"'){static$s=0;if(!$J)$s=-1;return($s++%2?$J:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($y,$X=null){static$Sc=true;if($Sc)echo"{";if($y!=""){echo($Sc?"":",")."\n\t\"".addcslashes($y,"\r\n\t\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'null');$Sc=false;}else{echo"\n}\n";$Sc=true;}}function
ini_bool($Cd){$X=ini_get($Cd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
set_password($xi,$N,$V,$G){$_SESSION["pwds"][$xi][$N][$V]=($_COOKIE["adminer_key"]&&is_string($G)?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$J=get_session("pwds");if(is_array($J))$J=($_COOKIE["adminer_key"]?decrypt_string($J[0],$_COOKIE["adminer_key"]):false);return$J;}function
q($Q){global$g;return$g->quote($Q);}function
get_vals($H,$d=0){global$g;$J=array();$I=$g->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$d];}return$J;}function
get_key_vals($H,$h=null,$Gh=0){global$g;if(!is_object($h))$h=$g;$J=array();$h->timeout=$Gh;$I=$h->query($H);$h->timeout=0;if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$h=null,$n="<p class='error'>"){global$g;$_b=(is_object($h)?$h:$g);$J=array();$I=$_b->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($h)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$J;}function
unique_array($K,$w){foreach($w
as$v){if(preg_match("~PRIMARY|UNIQUE~",$v["type"])){$J=array();foreach($v["columns"]as$y){if(!isset($K[$y]))continue
2;$J[$y]=$K[$y];}return$J;}}}function
escape_key($y){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$y,$B))return$B[1].idf_escape(idf_unescape($B[2])).$B[3];return
idf_escape($y);}function
where($Z,$p=array()){global$g,$x;$J=array();foreach((array)$Z["where"]as$y=>$X){$y=bracket_escape($y,1);$d=escape_key($y);$J[]=$d.($x=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X)?" LIKE ".q(addcslashes($X,"%_\\")):($x=="mssql"?" LIKE ".q(preg_replace('~[_%[]~','[\0]',$X)):" = ".unconvert_field($p[$y],q($X))));if($x=="sql"&&preg_match('~char|text~',$p[$y]["type"])&&preg_match("~[^ -@]~",$X))$J[]="$d = ".q($X)." COLLATE ".charset($g)."_bin";}foreach((array)$Z["null"]as$y)$J[]=escape_key($y)." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$p=array()){parse_str($X,$db);remove_slashes(array(&$db));return
where($db,$p);}function
where_link($s,$d,$Y,$ff="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($d)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$ff:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($e,$p,$M=array()){$J="";foreach($e
as$y=>$X){if($M&&!in_array(idf_escape($y),$M))continue;$Ha=convert_field($p[$y]);if($Ha)$J.=", $Ha AS ".idf_escape($y);}return$J;}function
cookie($C,$Y,$ke=2592000){global$ba;return
header("Set-Cookie: $C=".urlencode($Y).($ke?"; expires=".gmdate("D, d M Y H:i:s",time()+$ke)." GMT":"")."; path=".preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]).($ba?"; secure":"")."; HttpOnly; SameSite=lax");}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($xi,$N,$V,$m=null){global$ec;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ec))."|username|".($m!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($xi!="server"||$N!=""?urlencode($xi)."=".urlencode($N)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($A,$ze=null){if($ze!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($A!==null?$A:$_SERVER["REQUEST_URI"]))][]=$ze;}if($A!==null){if($A=="")$A=".";header("Location: $A");exit;}}function
query_redirect($H,$A,$ze,$ig=true,$Cc=true,$Kc=false,$Fh=""){global$g,$n,$b;if($Cc){$gh=microtime(true);$Kc=!$g->query($H);$Fh=format_time($gh);}$dh="";if($H)$dh=$b->messageQuery($H,$Fh);if($Kc){$n=error().$dh;return
false;}if($ig)redirect($A,$ze.$dh);return
true;}function
queries($H){global$g;static$cg=array();static$gh;if(!$gh)$gh=microtime(true);if($H===null)return
array(implode("\n",$cg),format_time($gh));$cg[]=(preg_match('~;$~',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H).";";return$g->query($H);}function
apply_queries($H,$T,$zc='table'){foreach($T
as$R){if(!queries("$H ".$zc($R)))return
false;}return
true;}function
queries_redirect($A,$ze,$ig){list($cg,$Fh)=queries(null);return
query_redirect($cg,$A,$ze,$ig,false,!$ig,$Fh);}function
format_time($gh){return
lang(1,max(0,microtime(true)-$gh));}function
remove_from_uri($yf=""){return
substr(preg_replace("~(?<=[?&])($yf".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Jb){return" ".($E==$Jb?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($y,$Qb=false){$Pc=$_FILES[$y];if(!$Pc)return
null;foreach($Pc
as$y=>$X)$Pc[$y]=(array)$X;$J='';foreach($Pc["error"]as$y=>$n){if($n)return$n;$C=$Pc["name"][$y];$Nh=$Pc["tmp_name"][$y];$Bb=file_get_contents($Qb&&preg_match('~\\.gz$~',$C)?"compress.zlib://$Nh":$Nh);if($Qb){$gh=substr($Bb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$gh,$og))$Bb=iconv("utf-16","utf-8",$Bb);elseif($gh=="\xEF\xBB\xBF")$Bb=substr($Bb,3);$J.=$Bb."\n\n";}else$J.=$Bb;}return$J;}function
upload_error($n){$we=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?lang(2).($we?" ".lang(3,$we):""):lang(4));}function
repeat_pattern($If,$ie){return
str_repeat("$If{0,65535}",$ie/65535)."$If{0,".($ie%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Q,$ie=80,$mh=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{10FFFF}]",$ie).")($)?)u",$Q,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$ie).")($)?)",$Q,$B);return
h($B[1]).$mh.(isset($B[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",lang(5)),preg_split('~~u',lang(6),-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($Yf,$wd=array()){while(list($y,$X)=each($Yf)){if(!in_array($y,$wd)){if(is_array($X)){foreach($X
as$Qd=>$W)$Yf[$y."[$Qd]"]=$W;}else
echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Lc=false){$J=table_status($R,$Lc);return($J?$J:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$J=array();foreach($b->foreignKeys($R)as$q){foreach($q["source"]as$X)$J[$X][]=$q;}return$J;}function
enum_input($U,$Ka,$o,$Y,$tc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$re);$J=($tc!==null?"<label><input type='$U'$Ka value='$tc'".((is_array($Y)?in_array($tc,$Y):$Y===0)?" checked":"")."><i>".lang(7)."</i></label>":"");foreach($re[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$fb=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$J.=" <label><input type='$U'$Ka value='".($s+1)."'".($fb?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$J;}function
input($o,$Y,$r){global$g,$di,$b,$x;$C=h(bracket_escape($o["field"]));echo"<td class='function'>";if(is_array($Y)&&!$r){$Ea=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Ea[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Ea);$r="json";}$rg=($x=="mssql"&&$o["auto_increment"]);if($rg&&!$_POST["save"])$r=null;$fd=(isset($_GET["select"])||$rg?array("orig"=>lang(8)):array())+$b->editFunctions($o);$Ka=" name='fields[$C]'";if($o["type"]=="enum")echo
nbsp($fd[""])."<td>".$b->editInput($_GET["edit"],$o,$Ka,$Y);else{$Sc=0;foreach($fd
as$y=>$X){if($y===""||!$X)break;$Sc++;}$cf=($Sc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($o["field"])))."]']; if ($Sc > f.selectedIndex) f.selectedIndex = $Sc;\" onkeyup='keyupChange.call(this);'":"");$Ka.=$cf;$nd=(in_array($r,$fd)||isset($fd[$r]));echo(count($fd)>1?"<select name='function[$C]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($fd,$r===null||$nd?$r:"")."</select>":nbsp(reset($fd))).'<td>';$Ed=$b->editInput($_GET["edit"],$o,$Ka,$Y);if($Ed!="")echo$Ed;elseif(preg_match('~bool~',$o["type"]))echo"<input type='hidden'$Ka value='0'>"."<input type='checkbox'".(in_array(strtolower($Y),array('1','t','true','y','yes','on'))?" checked='checked'":"")."$Ka value='1'>";elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$re);foreach($re[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$fb=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$s]' value='".(1<<$s)."'".($fb?' checked':'')."$cf>".h($b->editVal($X,$o)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$cf>";elseif(($Dh=preg_match('~text|lob~',$o["type"]))||preg_match("~\n~",$Y)){if($Dh&&$x!="sqlite")$Ka.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$Ka.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$Ka>".h($Y).'</textarea>';}elseif($r=="json"||preg_match('~^jsonb?$~',$o["type"]))echo"<textarea$Ka cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$ye=(!preg_match('~int~',$o["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$o["length"],$B)?((preg_match("~binary~",$o["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$o["unsigned"]?1:0)):($di[$o["type"]]?$di[$o["type"]]+($o["unsigned"]?0:1):0));if($x=='sql'&&$g->server_info>=5.6&&preg_match('~time~',$o["type"]))$ye+=7;echo"<input".((!$nd||$r==="")&&preg_match('~(?<!o)int~',$o["type"])&&!preg_match('~\[\]~',$o["full_type"])?" type='number'":"")." value='".h($Y)."'".($ye?" data-maxlength='$ye'":"").(preg_match('~char|binary~',$o["type"])&&$ye>20?" size='40'":"")."$Ka>";}}}function
process_input($o){global$b;$u=bracket_escape($o["field"]);$r=$_POST["function"][$u];$Y=$_POST["fields"][$u];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($r=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($r=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if($r=="json"){$r="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads")){$Pc=get_file("fields-$u");if(!is_string($Pc))return
false;return
q($Pc);}return$b->processInput($o,$Y,$r);}function
fields_from_edit(){global$dc;$J=array();foreach((array)$_POST["field_keys"]as$y=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$y];$_POST["fields"][$X]=$_POST["field_vals"][$y];}}foreach((array)$_POST["fields"]as$y=>$X){$C=bracket_escape($y,1);$J[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($y==$dc->primary),);}return$J;}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$bd=false;foreach(table_status('',true)as$R=>$S){$C=$b->tableName($S);if(isset($S["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$I=$g->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$I||$I->fetch_row()){if(!$bd){echo"<ul>\n";$bd=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($bd?"</ul>":"<p class='message'>".lang(9))."\n";}function
dump_headers($ud,$Ie=false){global$b;$J=$b->dumpHeaders($ud,$Ie);$wf=$_POST["output"];if($wf!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($ud).".$J".($wf!="file"&&!preg_match('~[^0-9a-z]~',$wf)?".$wf":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($r,$d){return($r?($r=="unixepoch"?"DATETIME($d, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$d)"):$d);}function
get_temp_dir(){$J=ini_get("upload_tmp_dir");if(!$J){if(function_exists('sys_get_temp_dir'))$J=sys_get_temp_dir();else{$Qc=@tempnam("","");if(!$Qc)return
false;$J=dirname($Qc);unlink($Qc);}}return$J;}function
password_file($i){$Qc=get_temp_dir()."/adminer.key";$J=@file_get_contents($Qc);if($J||!$i)return$J;$dd=@fopen($Qc,"w");if($dd){chmod($Qc,0660);$J=rand_string();fwrite($dd,$J);fclose($dd);}return$J;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$o,$Eh){global$b,$ba;if(is_array($X)){$J="";foreach($X
as$Qd=>$W)$J.="<tr>".($X!=array_values($X)?"<th>".h($Qd):"")."<td>".select_value($W,$_,$o,$Eh);return"<table cellspacing='0'>$J</table>";}if(!$_)$_=$b->selectLink($X,$o);if($_===null){if(is_mail($X))$_="mailto:$X";if($ag=is_url($X))$_=(($ag=="http"&&$ba)||preg_match('~WebKit|Firefox~i',$_SERVER["HTTP_USER_AGENT"])?$X:"https://www.adminer.org/redirect/?url=".urlencode($X));}$J=$b->editVal($X,$o);if($J!==null){if($J==="")$J="&nbsp;";elseif(!is_utf8($J))$J="\0";elseif($Eh!=""&&is_shortable($o))$J=shorten_utf8($J,max(0,+$Eh));else$J=h($J);}return$b->selectVal($J,$_,$o,$X);}function
is_mail($qc){$Ia='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$cc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$If="$Ia+(\\.$Ia+)*@($cc?\\.)+$cc";return
is_string($qc)&&preg_match("(^$If(,\\s*$If)*\$)i",$qc);}function
is_url($Q){$cc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($cc?\\.)+$cc(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$B)?strtolower($B[1]):"");}function
is_shortable($o){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string|bytea|json~',$o["type"]);}function
count_rows($R,$Z,$Kd,$id){global$x;$H=" FROM ".table($R).($Z?" WHERE ".implode(" AND ",$Z):"");return($Kd&&($x=="sql"||count($id)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$id).")$H":"SELECT COUNT(*)".($Kd?" FROM (SELECT 1$H$jd) x":$H));}function
slow_query($H){global$b,$Oh;$m=$b->database();$Gh=$b->queryTimeout();if(support("kill")&&is_object($h=connect())&&($m==""||$h->select_db($m))){$Wd=$h->result(connection_id());echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$Oh,'&kill=',$Wd,'\');
}, ',1000*$Gh,');
</script>
';}else$h=null;ob_flush();flush();$J=@get_key_vals($H,$h,$Gh);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
get_token(){$fg=rand(1,1e6);return($fg^$_SESSION["token"]).":$fg";}function
verify_token(){list($Oh,$fg)=explode(":",$_POST["token"]);return($fg^$_SESSION["token"])==$Oh;}function
lzw_decompress($Sa){$Xb=256;$Ta=8;$mb=array();$tg=0;$ug=0;for($s=0;$s<strlen($Sa);$s++){$tg=($tg<<8)+ord($Sa[$s]);$ug+=8;if($ug>=$Ta){$ug-=$Ta;$mb[]=$tg>>$ug;$tg&=(1<<$ug)-1;$Xb++;if($Xb>>$Ta)$Ta++;}}$Wb=range("\0","\xFF");$J="";foreach($mb
as$s=>$lb){$pc=$Wb[$lb];if(!isset($pc))$pc=$Hi.$Hi[0];$J.=$pc;if($s)$Wb[]=$Hi.$pc[0];$Hi=$pc;}return$J;}function
on_help($vb,$Ug=0){return" onmouseover='helpMouseover(this, event, ".h($vb).", $Ug);' onmouseout='helpMouseout(this, event);'";}function
edit_form($a,$p,$K,$li){global$b,$x,$Oh,$n;$rh=$b->tableName(table_status1($a,true));page_header(($li?lang(10):lang(11)),$n,array("select"=>array($a,$rh)),$rh);if($K===false)echo"<p class='error'>".lang(12)."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".lang(13)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$C=>$o){echo"<tr><th>".$b->fieldName($o);$Rb=$_GET["set"][bracket_escape($C)];if($Rb===null){$Rb=$o["default"];if($o["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Rb,$og))$Rb=$og[1];}$Y=($K!==null?($K[$C]!=""&&$x=="sql"&&preg_match("~enum|set~",$o["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$li&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$Rb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$r=($_POST["save"]?(string)$_POST["function"][$C]:($li&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$o["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$r="now";}input($o,$Y,$r);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($p){echo"<input type='submit' value='".lang(14)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($li?lang(15)."' onclick='return !ajaxForm(this.form, \"".lang(16).'...", this)':lang(17))."' title='Ctrl+Shift+Enter'>\n";}echo($li?"<input type='submit' name='delete' value='".lang(18)."'".confirm().">\n":($_POST||!$p?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Oh,'">
</form>
';}global$b,$g,$ec,$mc,$wc,$n,$fd,$kd,$ba,$Dd,$x,$ca,$be,$bf,$Jf,$jh,$od,$Oh,$Th,$di,$ki,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$F=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;call_user_func_array('session_set_cookie_params',$F);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Rc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$be=array('en'=>'English','ar'=>'Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©','bg'=>'Ð‘ÑŠÐ»Ð³Ð°Ñ€ÑÐºÐ¸','bn'=>'à¦¬à¦¾à¦‚à¦²à¦¾','bs'=>'Bosanski','ca'=>'CatalÃ ','cs'=>'ÄŒeÅ¡tina','da'=>'Dansk','de'=>'Deutsch','el'=>'Î•Î»Î»Î·Î½Î¹ÎºÎ¬','es'=>'EspaÃ±ol','et'=>'Eesti','fa'=>'ÙØ§Ø±Ø³ÛŒ','fi'=>'Suomi','fr'=>'FranÃ§ais','gl'=>'Galego','hu'=>'Magyar','id'=>'Bahasa Indonesia','it'=>'Italiano','ja'=>'æ—¥æœ¬èªž','ko'=>'í•œêµ­ì–´','lt'=>'LietuviÅ³','nl'=>'Nederlands','no'=>'Norsk','pl'=>'Polski','pt'=>'PortuguÃªs','pt-br'=>'PortuguÃªs (Brazil)','ro'=>'Limba RomÃ¢nÄƒ','ru'=>'Ð ÑƒÑÑÐºÐ¸Ð¹ ÑÐ·Ñ‹Ðº','sk'=>'SlovenÄina','sl'=>'Slovenski','sr'=>'Ð¡Ñ€Ð¿ÑÐºÐ¸','ta'=>'à®¤â€Œà®®à®¿à®´à¯','th'=>'à¸ à¸²à¸©à¸²à¹„à¸—à¸¢','tr'=>'TÃ¼rkÃ§e','uk'=>'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ°','vi'=>'Tiáº¿ng Viá»‡t','zh'=>'ç®€ä½“ä¸­æ–‡','zh-tw'=>'ç¹é«”ä¸­æ–‡',);function
get_lang(){global$ca;return$ca;}function
lang($u,$Se=null){if(is_string($u)){$Mf=array_search($u,get_translations("en"));if($Mf!==false)$u=$Mf;}global$ca,$Th;$Sh=($Th[$u]?$Th[$u]:$u);if(is_array($Sh)){$Mf=($Se==1?0:($ca=='cs'||$ca=='sk'?($Se&&$Se<5?1:2):($ca=='fr'?(!$Se?0:1):($ca=='pl'?($Se%10>1&&$Se%10<5&&$Se/10%10!=1?1:2):($ca=='sl'?($Se%100==1?0:($Se%100==2?1:($Se%100==3||$Se%100==4?2:3))):($ca=='lt'?($Se%10==1&&$Se%100!=11?0:($Se%10>1&&$Se/10%10!=1?1:2)):($ca=='bs'||$ca=='ru'||$ca=='sr'||$ca=='uk'?($Se%10==1&&$Se%100!=11?0:($Se%10>1&&$Se%10<5&&$Se/10%10!=1?1:2)):1)))))));$Sh=$Sh[$Mf];}$Ea=func_get_args();array_shift($Ea);$ad=str_replace("%d","%s",$Sh);if($ad!=$Sh)$Ea[0]=format_number($Se);return
vsprintf($ad,$Ea);}function
switch_lang(){global$ca,$be;echo"<form action='' method='post'>\n<div id='lang'>",lang(19).": ".html_select("lang",$be,$ca,"this.form.submit();")," <input type='submit' value='".lang(20)."' class='hidden'>\n","<input type='hidden' name='token' value='".get_token()."'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&verify_token()){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$ca="en";if(isset($be[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ca=$_COOKIE["adminer_lang"];}elseif(isset($be[$_SESSION["lang"]]))$ca=$_SESSION["lang"];else{$ua=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$re,PREG_SET_ORDER);foreach($re
as$B)$ua[$B[1]]=(isset($B[3])?$B[3]:1);arsort($ua);foreach($ua
as$y=>$bg){if(isset($be[$y])){$ca=$y;break;}$y=preg_replace('~-.*~','',$y);if(!isset($ua[$y])&&isset($be[$y])){$ca=$y;break;}}}$Th=$_SESSION["translations"];if($_SESSION["translations_version"]!=3635290651){$Th=array();$_SESSION["translations_version"]=3635290651;}function
get_translations($ae){switch($ae){case"en":$f="A9D“yÔ@s:ÀGà¡(¸ffƒ‚Š¦ã	ˆÙ:ÄS°Þa2\"1¦..L'ƒI´êm‘#Çs,†KƒšOP#IÌ@%9¥i4Èo2ÏÆó €Ë,9%ÀPÀb2£a¸àr\n2›NCÈ(Þr4™Í1C`(:Ebç9AÈi:‰&ã™”åy·ˆFó½ÐY‚ˆ\r´\n– 8ZÔS=\$Aœ†¤`Ñ=ËÜŒ²‚ž0Ê\nÒãdFé	ŒÞn:ZÎ°)­ãQŒµ™öú£°Ak¾ßÄê}äˆe‹çADÍéœêaÊÄ¯ ¢„\\Ã}ö5ð#|@èhÚ3·ÃN¾}@¡ÑiÕ¦«ÁËžN›t¼Å~9‚ˆ™ÈöBØ­8¦:-pÎüˆKXÂ9,¢pÊ:ë8Öã(ß\0À‹(˜ž½ P¬4¯îzÚ)*ŠÂÔ/Ìhäé/È¤ê:ãœ\"9Ó8Šºí8˜7­Cs¨¿\r­èÊØôz‰Ð€ŒÁèD4ƒ à9‡Ax^;Ër@6­kð\\³Œá|‡1<RæòÁxDÐŽL¨é'è³z5„Að’±\"ð`ã|Ÿ§ÐÀÐ7¿èÐêì\nbŒ6Î´Ž@Ê1©¬ÚâÔPcº´‚Óˆ#c:9˜Ê;Tí>Ð¢Í<K/8JŒCË:ÕábÎ¿\"Þ6%ñð¨ù4õÐÛ=/\"êÌ/cb?C(Ì0Ž´õB0×HB0ê7RCò Œã:3³“DQŒc@Þ#»À€µ:ò2)#†»ÀÎZZÛ\nŽ,‹!ŒîýKnµöÍ¢6U	Àæ1·­E5Öü³>qðæÓT´òüRQÃ§Scx[Á Bþ ÷JÂ0ÆËˆÅå9X(2L£é;Ž\"Êÿ’äìîÓã¹{¦)åY\"ú‹ÛôVÄ Ð[¸3Ãdº”Gc:\n¼Šƒz5 ÃÊ6¾S7°æ9ŒÖŒ‹8c/\$W\"ÖßÉúC.\rÖ;FëºýÙ±¡Í´mR6Û·ìN€Ã¹îu®ñ½0ËØíj\r)†)ŠB3.7r\\\nw».ð\$‹:aÅ-zÄy­ û*“Â\r”nÏ4=c„@šíÈèË˜pÛ¯P7%	TMPŒf©ý²2sòK&IÒ„¥*JÒÀï-›Ä½0LSK‹3MTÙ7NÝ:NÓÂÃ!Ž“äý@	Íþ#:ß©¯˜å°}”ÎkÝhpgÅ4—lm¢©y…¸=óÈÁKyÄuÑ\"\0—‘5@\$Öxßù|\0  ’D@I“\$Æˆ”9'(k^[ì\r+PÃ¢XK‰ƒy\r§ÝPAE¨LàÑ%9ŸõìMI«Ÿ:®ììµ•è/D@‚bîHJYM/¦øïšMœÆ˜²—UßHl@ˆºOž)•%\rõ[˜6Â˜TcˆÝÏ…\"j¦LñFFðMPDæO!@b¼’œàä¹`w +tÆ’† Ä\ré™#Ä€‘GPÎèy7 FL‘„`©ñ¿,KÉüHÈAÑJ^[%œ2––êçQ(\n5ÄÊH#àž\0U\n …@Š¥ø &YŒÉUÚ½8a……5{EÈé€0 žXÖò¥‘`â’Þjˆäæ5E;£èüg9§…ÍX´TrJÛ.G\$øÅš£ïÃ!ƒ€Q%4Å\"Ú2Áh2\n}6hÜECˆyÃ5R~PœPà*?ÐÒÃ\r‹‘Hªƒ§àwÌuá¢\rÁØ>ø @9hðÊ’¯I©”~Œe%u+©yHUñ¢£é`¡pàÞ¨*3¨Ô\"P\"ôœœôf,­àŸÂÐå	Ù!TJ‘ª0\rO^àú2	\nk\nyô\nd9/j¾‚ÓsSóˆ›KIl%Å_-„üWFÞZLª+\n	!\$F¬ùæBÇ¨åä#:c9GÚ]?!Æ›ó>Yc&wm	C—åJ Aa FüL³R8e2\0À:C‘ƒ¬ö”Ù ÂHAx ¶æÂ+BB`Ì(\n\n6Õ±VÆÞ‰O	m¹ZÜDÕ*TI7¿\\ZÉqêX ¹W2ß˜B|n‚ †ˆ¶ˆý.3z%\nÖÓ7ÓvnP.·ÖÒÓ™kß¯‹;ºõ!\r¥Â›pÉD'rM£\\@°!¼ö¨»±xPåyÁE@(+†PÅ„˜Ü¢Pqm’BŠjÈp‚mÔ¿[%(a1l¸¶Ä³Ÿ‡9egY—bðLKhI3¤ÀÅ“éþÝW¡É ˜è°˜£¯ãYRYÈ¬{’©À/Õ.9š,ƒ-\0 GÎÖS•ò1Sô/ŒŸØ…Ë¹Zm–—VjÏZ%6¨Æ`_ËÃ´V9ÜØÔó5³Å@šh¼+-Lì^ë–Ÿ¤4-LÇôAO\nüùÍx[¨(\"èï‚’Ý6k YŸ,ä·A,Å	Ì €Í¸ªY†¤q<þjú¬r>cO,Ò4”•®u+Ôð-¤3-W°u¦T5ûcÆ½_¨ C‡öAc¥ÝšÝXa2w\rÚÞ)kÀ®‹Ì!JÈÁ-e¶!þÛ¹·zçîÅìi®òãkì ß@÷…vòÜ2¶-Ï˜¶†ùÞ[î¼oÝë²h%k!+ØÕŸúàƒä^—„P¦è¸*AæÄ{.'Äù¶èÕ\n8¤5mÒ±â>.\\So—jöï›ä™´äc¯ÅC”Òž‡\núß…–°r’šËˆ»%1hNN>\"¯Põ¨RÛÿgëÎ’¨÷­Þùp”UÞ—°5žj%i”U¶wex¯XÔÝN×ö\rëÓ{+ìàýj¹1°ËØ›6ÂŒ³ðŠk:ýÕ™b£—hdJL±Ú†Çsv-í¾	FäÚ¾,líwA<W„Ô~„@ºÌIÛGÞ\\ÈÑþ¼:ãBm+r wQçW°dStq–êY4«¡´ÜÇ¨ì5ìøfÿò¾ÜÙûN™ãü¶»–â…w/‡ïkv”ò~7±øŠ¾°;_rø*ŸØ|VQõkÕ€c{ÿ©|à©^ìgøÏð}¿)Û<ºûH¯Ð‘ÊŠÂ¡-4öQö\"ÅA÷=·öüZ<”ÿÌùŒÒúBP	®<jò,àé6XÇ84åjõ^Þ Ö\$Â.ÜP\"0gÑCLÌ0*ÛHÆc¶·fæ#\"â- —ÂR:åN**4£\0Ù°\\Š6V¥ZÇÛíÂ¾PlÇiù­¼-”d\r€Vf¬`ÖäÂFÎ¢0kå\r ÌlBð=\"pä#în‰‚\n€Œ p)Å¹\n\$½kºêð\0%«]ËéüØ0Ðƒ(\"l¬3–©NN¬ ›\n0¦õbÏÂÀ.âòÿÂ\n\$|çèžï\ngF4œ%	¬:0b**f\$sfî–Ž4e…ÜWb \"SÊÞ¢ì\r¨ÖS¸Ö¬«N,Í	à1¬×P€Ù\rîµ^.qFÑ‚û®©1mm‚Þä\0¨‘jµ#|«j0wjÚ¥Žgª„glÞ8B\0˜›¥ÔÒ ñQ© Œ #NÜ‹‚Ð«Ž%éœ¸'eJ-€óÀ†<”õ‡ŠD\nôó#øPž‚n?*‰ ÊöO­FTõN‚\"š-K*2ïä·`Ê¤‚\$Íê‹b¤¾r! Ù\r‘pr À";break;case"ar":$f="ÙC¶P‚Â²†l*„\r”,&\nÙA¶í„ø(J.™„0Se\\¶\r…ŒbÙ@¶0´,\nQ,l)ÅÀ¦Âµ°¬†Aòéj_1CÐM…«e€¢S™\ng@ŸOgë¨ô’XÙDMë)˜°0Œ†cA¨Øn8Çe*y#au4¡ ´Ir*;rSÁUµdJ	}‰ÎÑ*zªU@¦ŠX;ai1l(nóÕòýÃ[Óy™dÞu'c(€ÜoF“±¤Øe3™Nb¦ êp2NšS¡ Ó³:LZúz¶PØ\\bæ¼uÄ.•[¶Q`u	!Š)èÍ&ã<Òq)æÖ ˜ÈF>Ø¡Ps7Xì5g5¸K®K¦Â¦àØ÷á—0Ê‡Æ¢¶§\nS ü›r\$ ¯jÄ(î¢v†°Ì¶!Jbž¸¡‰q««0\n¸ŽÊÚV¨?\$W¡‰¡FÃÂE{ü‡-‰:>W9ÏJ|Á¨eRhY¨+dxB&…[Í*¯³lƒêŽ (B&÷¾ÆÉè4R+\r#è:Œ#cüÆ—D_-‘A\nûÇLH÷!Ñ<Rˆ'¬lþ\$êÉbŽ¨kbB‰•(\$’§hD(š0ÏzpëºkŒW+RC1.š'F0t“!+LáàÂÐŽC(Ì„C@è:˜t…ã½T# ÚíŒ£\\7ŽC8^2Õ¸ðÝÃ˜Ò7×!h0Ö£(éPîÂ7\ra|\$£ƒ^6× xŒ!ò–ÙÚèÞ26°æÒŠbˆ˜4·jzBX›´m\$*´!0÷eÜê0É9ª•[«Q%×vÐ‘e#w°l€•1¥ª¬›ºÈ’-pI\n?z?ij³D‘\n²\\à¯Ú|ëX)e‹/ÈJ]<Ê¨ð\"SÃê6\0í.Ž£+ï/tIÅ\nÊã‚§	j?b©±Vµ#ÏI«¢4vg²E	!›“Ùã…¾9¡¬^RâcÎÙ˜Ùa¸m(æ1ÙsBA§7(˜µ!Åjhã<¬!yd÷9:“úA!;öÀMp)°[ñì[ó2)„\rÈïoÌ!k\\YÂQ\\5åAºŒd!xë7žåªìØ’‡`ù°òHï:þÄR³Ã!ÁÏ·…¬^ÂËò;Î#KRó<ÐX(Þ3Ãe`Â¿\nÖê@Óªn\nƒ{P6ÙcÈ@:×£¨Æ1¶C˜Í™„`Þ3»c˜XÚ_Â3Œ.ØAý·^ƒ©»Ì”òNCE aL)bUù%(‡PV‚äæCWbAK°÷—Þ™Q\rF)É:8DVöJ1…'*=ë8Å\nê~1¥ô¶AW\$BØ‡!,  ¥°#\n¸†s«´—2ŠÓÙzzª&Â‰˜M!ÌÝ‡#SÃ˜wV‹€2‡€à–C(d‚ÊiN)å@¨•\"¦U\n¨;ªÅ\\¬’´VÊá]+Å|°zÂ8+c‚%’ZÍYëEi­U®¶VØ [¡¡o®CY¥]¥X¾\0ÜµWQu\"T”Ÿ¶˜D<.Pt„¡sø„L€¯åT’¡”:VØã¦!ÈµyšÐ º?f†»Ø U¥qZcgÔ§º'€»âz••pD‚0åM…I3el¤ÃCB¶ÉÈQÔpr¨êb†QJ9ò9iMJÁiXVjŠ\$òv ­²fHÐy3à€2•ÀiÙªã\rË€Þ›ð@§C‹9Š€€3 ÞA\0Aò^+Õpî\\fÐß0àýÃ,Ò!¬‰FÂ(vxS\n„,ˆ¸eØïL1œÉM5/Òö”ÙD „Ù¢Ëš9/%©9ô±?5—PŸ	‰—²\$”4Ô\nêlÙƒÁ@\$;<Û€n|kH7ªÐ@¦Ãià»PC\\iMj›ÁP(UyöþÖŠ´f²N‚Ðr6¬M\"²=§\nQ[ÊÑpÉE/–TGÅ@\n	á8P T¶\nÂ@Š-ŠM­E1™adÓSÂ!Òý;F¼îj;>©'([Rïkê\$.Ä)8	Å	p‰D´ÚóñQR%>	IÝ {PPf3ˆ›6rfÁIˆÕÓQ6¾Ö´\$X»î\nóBî9|¸{P*ñxÝÚ¹[xž­ô2w÷	Ý\$J†é[).ªS–éÎé	²Š>ÁH2­ ÒÜ¢¿\rÉ|„ôŸJ` R%†D'IH‚<wµ£`AS+)L¹)H=u2\\býGÄç	<gbÒÈsT_‡y	° ÃHzgAƒ‡Î‚˜e5áŒÝ†FöH‰Cšx‚Þe°ùœPa´RŠ¡¥.â˜ÂÍƒHeäÑ‹lHÐTuš‰Ñ¯öãr™Ê¶iØ;\$1‘@qJFÒZhHKII™&µàœW¦\\uÓˆBKÑ²ZRwiÈ&q•\$ÑÖ¯Üx„Ùjgvn9ÖŠÄ^QHùô¯…í3Û·7Záigò›ŸÇHí¡è·F7&{C	\0‚€«’lÞi¦\róäÛ‡\nÕf’M(ÍW;Q”T ?MÑ3¿Ð@Á¯½ÈYÒöš‹Ú!%'¼XA÷«®ËÁ~zùÏÍÅŠö#³Iì Í&^YRe\$¡'BO‹–É¨¤|XB­‘k	UÙ¨;g°Í¢‚v¢I!Ðš‚àL®ÊÞ[92\$-wÌ32Ù•p-Ø—:¯f´;‘Ì;É>Ì\\\\•At5Nn!ü1åPBQ¢»Ó!ˆLüd—à3¹JfNfÀ[2S¼ÞEJ5)¡½×LÎ£½&Íl\n²ñÊ\0ÈA-¯­]µE(ne`„fæ{zÊØZ\"¨íÐ.Z›L4’nè•·:ár?m‡²á=Dô*ïípLXödØXC¸0¸ý7õPXLåíÚbõwœ¡ÉlÇ†ÄÎ4›/¤¾”Î½™n™¤¶–Ál‘k™CM0Êçmºmâ<ò.©ÙCÕèjõ<­ÄÓÿ–{m¬còçØYÛ+0eP(³Ì(¢ü7 ºÿw¹Ž\nðÝ›Çt®D;Ðd…2¸E\n†Hú}®Ž~ß—+¢…;·„ê?ì:µp»·}qv×î:÷þG¬¹DþÍc¿²äü+ýÝñƒv“ùüÐ³0íŸÖk©tþ)Ô+mÇæÚ¥ÞÛéÄâÛ‚äÀÄÂkt®äÖ8ìÕNžÍ§|ü/êõÄ2òˆk\0êó/þmp<Ím!þ)ë`!¯ºN,º•¤ËãçÂ>/¡PˆîNeEö0lßCŽfÀDGæ*°qH„10zäâ\0Hi6?jÖæž.f2ø°hÌ\$jøÇ§+4ƒ&ú\"ä=,/p—	&4˜K|äÐODWLÞQO„Ø‡0jÌeÌ¬îp‹,˜aNþŽÐõÅê]®Í.ä-¡lýãË\0‚É¢žûG+lœà¸Â&p5.þ.N†è±»£ÑÑ=¬ACÃ”_¢&é'fµˆtläàafø91­¬('iÏøø/ÖìP+0.ü]í1!\rí3Ð©Iè1Im/§Z2Q_pJ0-º»‘—¯*2+fönÆ˜dÌq{pQ”qØ¸ïXüL®QD~¶ñÛb	ñîHÑQqãèWð†cñÝ¤0cÂUñŠöBUÏ!Æ‘ðÎ°ñˆüeÞÏDË ñ\"QR8CïZ:rB–0I2JKäpq1DÄ(ý„âDÎU#1ë&\$Û&pGR?&Í9'TúÂªc‘Ž:á®mÊÞ&Kãæ½L˜@ñr.FÉËÕO\no‚1†H´Î˜/'úšKú@­„ççh¤DrR²ÎàŠH¨V\"68\$¶#€¦I-£t®,›näkCÿˆH)\"—à†€ä\r€V¢+î\r`@X\n®fÆp7‡¾[àÒÇÄ]fÊ¾‘Rìf Ä’J¤\n ¨ÀZ\0@W\0Ç2C¸îÍt½âüÚ²lÂ:bã\$nœºŠñGr	³%2Œ˜n†X^‘é/ò×b{Ã ÏÀ@RFXCÕkj‡K–äæòøÛÂè%) EèNœãì	Šªž£¸â¾‘Eh4£r8\$@¯æ úF¢ã%üëëxrGLJðQ(D*`ðÂ>Óá+äh:ŠR0NöýQÓ?Tñ\0¨8C^6cE.s:¡àÞòUìUô>«]qÁ³eúiP¥@Ï³O\"h³ðè0æ¼gÁT)ôQp Ê‰L?éHšÞñ¥üéó^@¬ Æ ê\r¦\n&ÏD ô†“Ks;ˆ9C¤águ>Kg?2”(Ë¬¼°úï”„ì¶KX¦Ò¿Ä_ì6·0ÒOR‚i†žçˆv?‘:EÀ	\0t	 š@¦\n`";break;case"bg":$f="ÐP´\r›EÑ@4°!Awh Z(&‚Ô~\n‹†faÌÐNÅ`Ñ‚þDˆ…4ÐÕü\"Ð]4\r;Ae2”­a°µ€¢„œ.aÂèúrpº’@×“ˆ|.W.X4òå«FPµ”Ìâ“Ø\$ªhRàsÉÜÊ}@¨Ð—pÙÐ”æB¢4”sE²Î¢7fŠ&EŠ, Ói•X\nFC1 Ôl7còØMEo)_G×ÒèÎ_<‡GÓ­}†Íœ,kë†ŠqPX”}F³+9¤¬7i†£Zè´šiíQ¡³_a·–—ZŠË*¨n^¹ÉÕS¦Ü9¾ÿ£YŸVÚ¨~³]ÐX\\Ró‰6±õÔ}±jâ}	¬lê4v±ø=ˆHî·ƒâ’ÀDê²¹%’>L*H›8ß@¤ª¤——P|.Õ3dŠ¯m XúÂé3’‡²ð!rÔ'HS†˜¹1k6A>éÂ¦”6Ëÿ5	êÜ¸®kJ¾®&êªj½\"Kºüª°Ùß.-Òä:Dfã5Mb(¬<¨ùOÈhù(™G°Zi2=é^ËÁ¨¬ÄÂ9-bk¨®1l™#äšÀä©j©Î4ˆúùÉ-j\nÃHä:£ÙAA1c‰A/ˆK»ÃÆ>•BOÃÇKm\r52!1<ðh1²Ìã§\\èhF‰\n¯äœO°“K8\0Px0„@ä2ŒÁèD4ƒ à9‡Ax^;ÚpÂ2\r£HÜ2ŽApÞ9áxÊ7[ÃÀéoŽcHßpA\0è0Ûƒ(écãØ0ÃXD	#hà6£m¾:xÂpAƒ@Þ2]Cx@:Žc(@)Š\"`Óq®4Û’˜²Ð£€²«ÒSW”4ë¤Oè;*“étøá¬Ö®¡ïÎY—7m.b²G´ûËC\r¼Y-Šú±>ÅÄ1†SëJ&„ºcU§+hù5+Éãr—Ö¦†¯>GQê’Ú)°:“0ŸIò+W3ª5äÜ€5J„§/q¤¬–VŽ›/,ºuíGÕ[“‚¹0h[ø——¡Â)zM¼0ùEJ¤ŠÇÐ0H“J¤qíŸ€Ã­¯¹Çpfä–\"ú•#í‹ó¡îeÀ¤r¦„Æ¬Erjnðùo¦¥IñÞ»ÑË½çÉ<ñèŠ	ˆl`â%/Ó&¯c¿ºÐCÝ›Ô¹Îe˜êp¾CV¥<m5œ™…Wž\"Už2j»§Ëä\\6@ñ•‘`9êQûGþÓ_ReU‡yW²ÓnwPÑKDÄ ‰‘ô,î´iOé¿×Øó\r;Îmçœ¾“¬CY®PíÒÀ4¬òôA°:&¶ð [!¦l ô„/KŠ*n¬ã¾GnSÓÅ4ÇhÏ²rHÞ9&*¤¡Ã·ÄmNª«0QZ\"2¼|Ï+‡H ý¼fŒqØ+L,H¸ƒ•°\\_zž{¬ÕµÄ²½KÌPAMöÅhÀCQ\r‹jÒ/˜þÕù&Œ¤’:HÒCcX½\$dP\\ÂÀ*¬sDùöpwKëÖ.¢8šâÆ‰)¼x‰øïŸffeÁ\"‡DýN—â“Ñ*ìÔ¢n/¢\n“/„à7RØÛ	\$R*Æ`¸˜€¥Ñ[˜é­I|ä‚ DR\n3•8ÆŒÌÂp.)êBy¤S8‡Óq#ø@V\$Ã\\+2™_¬†±V:ÉYk5g­¦µVºÙ[kuo®Æ—*çë¥u®ÕÞ—Šó^«ÜhD%>UOÂ,`,\r‚‡9³+d^„ð,ŸöA*`z ‘*q&™¶u<Ùb´8ðQÇ§v9Ÿ¡q‡†\nSTwaB«/FÜ©Ñ’¯L	Ã9èÔËL´ræ‰{‡\$\$\rë£\"ñÍ›­SA;¼”X€H\n1ÉÕ<ŽÍ  ¸—™¦hús%RZxD„§`ÊSÎP¢ŽLet)}¥Ä£²’ö!þ!¢Åœ–ø©¥a\\E²ÂºšÊiFDólÁ¶êã,ŽŠ?l†ö'1öó+Q)P6¦¬ðª©\\uŽãÈ:Jx[‚\0‚µ²Ø¤RÆ_•J¾ÏL¹öo.œóT4eåÐª	ã•Ë)#¡N›12%X\$w)“QQ9í¯•ãTýÊã1ºÔ©3ÊÛSoHõ}ƒ;’a%É¾uç¢ ÔòajÎí„+ÉÞV\"ÓõlÐÂd&©hïÄÒês˜›,åÐµ“CmB0T¬rÿ•ØœR È€tÆVî£8VÔ¹Pc'äš‹\0GÞ¹³G)µŽDi],}/h1Æ@9¼„Þý4Ð€®=rrg;ùB	öÎ“n®Sý[ÆiêÈbÆ©Äô©?°­1‚p`©~<ŒÒ6ù˜ŒýÒa¨ÅgL¿Ží>c4	Qˆ<Îsà9\$5Ô¨É“fúSë†¼ª–;/óìŠ§×+;œq•Ê³È9ó7ùká2«¼o¹’¿¸ÇŽþxc¹é‘Âµ¤\\xºxØ\0Íšéžû q^i.L»÷iésíMÁH2¯°ÒÃt\\Á¸ŒQã•9þTw\0‹kXk~©ÇÔ–Ò<4±Xr2†¼¥‹ÈC¶n#ùDì´;bòÚµ2ÅnAS»b¢óî+îÉ‘žHªx„™ÏvÓ‹XÃn/szdVyÊK×eXý \rà=HíZ	6ÌÌô¸ìÐÙ9cS÷sÙvå&#cÎªò{¢¾ûã·TÎêPÈÐÅ€]ñWÌÖÕÞÊïË-R‚Á‰H¦-ÚLÏQŒ©Ê›,êt—óVÆàõƒòf7?˜<‡bX\nœ¸lPl¹¡Ó‰q¦¥6DŒ„éCy_&‚oÏ}[KAç—‘Tåz,a.\0 ‚ Aa ê¶He£Ë±‰àÞèuÁm®0É8íñ(c’\n,“5vò“Q\0¼4´j~Zƒ8Ïi&OMæ•¨¹¨œ•”Gâ¼œÓ¶¬ìƒü¯†Ü—ÓÍJ—‡çIçŸòJy*\$XÌW=`ôÒÆJœ#œªÞ½Û!x«Â¢O7ëÎ²9~:ùz…ñ½q_ù\$ò7ø¯›¹.gµ?\"\$ûÝôe_Ê#âl—–*®Ï=£´¿¸»Ä\\ÔiË@Ð-_²›þè?1´HXý*¢×ÂÞÈ>™¶/öÄ*Õå,R¤tÁoö£®%¯¸¹m2þRæÞé3‚ ªŒèÇ†Rƒïn4ËJUp8\$ãzÐ>¦p;Oø3Ãüã¬Í(ddÒæP@P0å§:@BjÄá BÈèÕh»é–¼¤\"ìD´.0„€FÂó0Œ*è¬Û¤ÚsP˜Ýž FÐ‰tÐÉ¸~-B+#j.-ÌgÇ –\"¹\n02SÌàÑPÑŽgç£\nP²gà‰* =.Üî õÔIx‚pãO¨‚0&8¨EDð)+N¼(lïä3NÅè”DÊf¨…>yD\n6&:ãKâcâ²èñ:äˆVÈq¬‘K…Nd± nêX6¤4øn&Ø+º±ºUl`Ço`Ñ„¤dã1fTæ¾+ì€,ÀP¦o^Nìž\0SÇÏÈó-&±pêØ®Ÿ\rÃÐ.1 ¶¤ÐIñ¬Ã4³§ÙEPÏ(j/ì>ƒ±‰1ÍpÐ¨.·ˆùÇÊÕqà™®éðéñ­\r°ÄÈ		Ðý°Â£‹Œ…’\r±ªåÆÀªòÄnªHbºÜÏ \\¼Ë÷\rHPÃòê‚döOÏüMu oPU28–<9+øfLa\$JfeRJ‘ï&ýOnð§2+­ûÍR+ŠóW\\¼ÑqÍ(n\\:\r2#1õ\"¬Ï(±çp¥!1!qöÜ%M­\0øÎ<®J¨LÍL!ÊxÃJ|7Ñé'®Âh¬î6‡hƒJdFdÒÚ¨\nHü¯µM¤>†dÇÆ²¼Œ\0xí,ì(ûJ–;rê6O»;(LHµNbÜ°ãí\"çîäL~,dMì¬ç,²€ó	¬f¢Î2¥%ðï\"‚˜#/5gg5±Ù)1¯%Ž6’û¸Òñ	ŽºÊðEä/7†ºÒ±2µjAÓn¹òÑi€qÓ–’‹@‰Ò‘*ñ\0H8ë€ÿ|I2“S¸Õ.,gcO<S¼ns•+­æçsÔ¥G€hBf&¬êv¼:ar72‘Hbëé6O1È(%s<Òlu²q ó]\rõ rARÓA“-(ò§5ñw)¦]ArIAÑÙ7æE!”9'ä¼/àq+î?¥ê.N~qqC´+Có©=ÏÞ8¡	EG(9FÓŠètdêtèíŒ0dB+n cTvdÚ¹O¥äÿóžÑ#)†2¥ˆÎö©cG(BT¥+sÅ=ÔIJã6xì¹I¥\$x”ËKÔ1AíU;qEÓ@âëKÎ¾JûGs=­/FëIeYMóK¨7¬+;\"D–Ôª¢žSmL8u\"ÍUDèwè‹G´ûGè´k‡,æ•M´§Bg'•@æÕ\rtß6Sò.çÃ+9Õ!8r½\nÓ?RÏó	Bº£kSn¿WuRçåcBFêóänt”ìB°ìŒV•Y)ULTÈç•šÚésZñU¯aZµ™:®H­2´:4EõpK4ß£CÔ†<°â\neM¾@µâ\"’øDÜúÒjÔÓ;#ŒtHôï#\$5ü¹«Ð´bŽBøxò‚.&®ÿŠÑo™¦ÔFÏ`GŽ{àš æ\\`ä#¥ÖQ‚<\neæÆ%círb™LÀi5µ'ÏI(`±Ieé%\n÷Tô´\$÷ †† Øbú:bbÌfˆÖ#P„z·lô¤­IJÐKd€ÁˆB§¥?/Œ*I\0@\n ¨ÀZ	Dutv†8(@ö–c/È&ÃI(p/ªösYa1n+Œ1m¬6}¼Îhô™H©§¸pµ92¸£ÑW3Bõ2î°â—Mi(Rv°ÔX?ï¿ÄPBˆÄ: Er4VšÒ2%EôPÓˆTÐøìJ¼„ˆ3LÓ sElNÍ.pCãvå±,H¤ÎÐ.¶2o8“lHÎ—pÌÝ1kgrÉ-‡Ô°w„Ý\r,p¸€37	ÌÂT+¯yn!yÑmzÆŠð0ûÐËy”XŒw³Óq:/yùW±xÈ¾µhÖ¸+‰}‡y¤á²…g.SÅÉ]i1ðT \"T(\\Ýp†3ôat‡ÚE„òkïh¹¥ —å?l‹¤g-aH•9RÀEÇŽTÊï]fæÊ\"[:×ßl²4lªàfxLx)?T.d•Þ&îdÝ÷‘25)ÅrwÓ‹.ÇZÃDž3Ò¤Ós%t­ózmç„0/´•u”™OIPˆV\$\"f\"EJLìrTDh’‰ÃXÂ>8\0";break;case"bn":$f="àS)\nt]\0_ˆ 	XD)L¨„@Ð4l5€ÁBQpÌÌ 9‚ \n¸ú\0‡€,¡ÈhªSEÀ0èb™a%‡. ÑH¶\0¬‡.bÓÅ2n‡‡DÒe*’D¦M¨ŠÉ,OJÃ°„v§˜©”Ñ…\$:IK“Êg5U4¡Lœ	Nd!u>Ï&¶ËÔöå„Òa\\­@'Jx¬ÉS¤Ñí4ÐP²D§±©êêzê¦.SÉõE<ùOS«éékbÊOÌafêhb\0§Bïðør¦ª)—öªå²QŒÁWð²ëE‹{K§ÔPP~Í9\\§ël*‹_W	ãÞ7ôâÉ¼ê 4NÆQ¸Þ 8'cI°Êg2œÄO9Ôàd0<‡CA§ä:#Üº¸%3–©5Š!n€nJµmk”Åü©,qŸÁî«@á­‹œ(n+LÝ9ˆx£¡ÎkŠIB›Ä4Ã< ŒÀ šâ5mÊnÂ6\0êÀîjÀ€9èzžÐ ª,X‘¶í2À§§Î,(_)ìã7*¬è¶n¢\rÁ%3l¥ÃM”ˆ¨ \r²öã¢m¢ä‡KÑKp€LKÂúÙC	‹€S.ëIL•G3ÔW9ÊS·2bÙ!¯«|–Æð;I7ÅÒäŠë#´Û=ÀÐõMó“TŒRí/Ô\rÒž®­ÓY'ERj!*§¹ôâØƒÅ5eO¯;w4Ë‚°Ò9ƒ¨Â6Fö;ÂÎKq]ÏÊ\$³?)ô…%PQ“ý`¼ZéjØ¨Öå<×lÍå\nžP­—\\9FŠ|NKÐÅEPÂ”ª­Õ#!×½òƒÀ9£0z\r è8aÐ^Žø¨\\0Œƒlh2ŽApÞ9áxÊ7dCÃô7cHß’O˜Ã£¦/ÀCÜ5„Að’6ŽpÛ‘Žà^0‡Ë‹åŸ¿ƒxÈù¾£›È)Š\"`Òý@–ûN16†Â·+Â.ÚP§ß1A8ÔcIËÁSMî\"ñ)Eô/±)ö¬9`ÑMÜÎ.è’Ör*½°T–<Ô–Ÿ@£z^öíN HKÉTœ¤Õ´9s2PõþóW•R{{7 SÝ9}ïqtWA3{¯EO_´°ª½d\"a#ê6\0ígŽ£/­*kf¿}JŽ,:ÌÛ÷;>tÔbðOÇôMƒ`/jM¬2ë¯kô—ÄqÅ5úâÖ–Å¾¼+»ÝUïóâˆÕ¯ÅP@'nDâmÐ’{\0Èˆ…›ÄÁD4OÍí,w\\á3¿\rŒ¹@æÙ²1j µ7þ¯—\0€4fÍ©æü„ `¦BxS/Š¼Qn.p¢7(v]biXïqì …ŽŠ#©z\$Õ¼ÞMaÚ\$0Âž!„ŽØI‚ï^%°ÎC\"×ÈÃÜ5ÜŒ%•Ž•¡‘·J`‚ÂÖÓ‰OM¿FhµŒ71|‡(™âziˆ°¶)œXª“!ÌH°˜¥,xÐæQ*úxÈÓ¾ËÏ oÁ˜61¶ªÀ…1,ÊE5\0 ¨Ï8mfÁäVPCc>!Ì3;ð@xgFÌ0å)g(ÐKÇ.Ðn§è0RÕJÛª‰¢œ0¦‚2–|æ´·šY£y%nMÃÒðÙÑxàPrbMIÈô¡«§0¯D¡AòÜQ”q±N\n1:¿n¸nî‡5-Ê\n¸Q“ÀCËR&šìÝ%â™²ÍVî@ÒŒÖ)Á40‡3ôEaÝ´°Ê‚Ë¡\nÁØKa¬=ˆ±6*Ø»clu²FÉY;)e`½– `Ì4\rŒÙœ3¦xÏšBh`3ÐÒšdÀ!¬ò53ÐÇ%nh\rTÁ–ç ©ÂümF6;1Lë¨zl íî%ód Î“he¨·¥a=[Cu\$é‘ó@ …`ï­c–TÏ\nk©·)U| S7‘é]hµNzô^TžJ-ö7åÓ\$:ðPs\$®¥@XQ…›\rð¢;MŽ¬‡¡\"™Ý,r²TÔ\n‰S%ÔÛh¸ßè{å â˜©®@-%¸vý1ˆP›ÍÉYNëÍÛ™rCbƒ‡¢@(\$‘ðòw\0d\r-,ó<œšYü?À„‹E\0fA¼6‚\0ƒLªÕ?ŒŒ9`Ó™ý>AÂ\\†Vª¦Ò‰@op¸^\0 Â˜T!Ð¹ë•[!|J9P¥\n,sRl.‹0/©ÉÔÅ\0R‹:Çl«²¯W’1!Ì^v¦º¦ûkˆdmàƒºR³ÐÞÆA¤3‚ /‰í<‡±ƒ`©`Y³K\r,ñ¼­|¯¡ c‡Ž—hC“t\"P	X°ÍB\$t.Ch“Gx(Á>Sí&#4æ5=ÚÊä‹plœU€±íx;\$§ÀY²) K«Í\"˜â=2ù\nMy’mÀ©H¯XŸal+¦Ô‹\n)ßà¦\"÷\nyé‰í¦]B9Î¨çØYfæÂ±øÛœõ…þ´^ÐS¹â”›\n2ÐÎŠ½œSË\\9½uŽ<†y'åã‚eKÄ-ñÔÄÔ‡˜´e¿«¦n\"b°á*'&¥EéŠg?–¥ºÃ'ý ÊÏCLŒ¨76ÕÀaJ‰Ô.@é£KTï_ì\r¯–%FX·N¥_é“Kä:ÔÙ\"ŽFÏ“öX:µy”ŠÙWt\rJŽÈÛ‹gA™v-IÏþ9g=xç‘ˆiO!ß@á0Þ0S§¸1Ÿ ÈõRŽÂäe»2j¹”U´º€‰% ÆQJ.V2¤o4†Pï¿–8‰Ž%º9’•Põ¡Ý„˜DnÀ‘¹z|nÁC‚\0¤E8Ž0KÛ@¤nà7m\\yyfcpÞÇ|úKk9¾H°q^ªåÓ)4‘¤üC€ïËRÖ^ ~ `*°…”ùË®LÂQÍíícé´ôþJzCôD`¥v=zõ1žš¥5úîË¬µÌ&[Å¿Ç8m¼À.Ëc!P*†îcTùIÊï1öV‘µZãët!pÜxSk6ÔiÛr €‚Æsè¿rÎcŽCæáíþºªôñãµ¸æÚ'mv œö+“t{/[oHÄìÍ‚¸ÁH(:âÌøþxíîqòÙ\"Žÿƒªý0\0~q0ÝÐðîéÒïO\$Aü×ð:®'­Æ\"\$Ï#)ÌŽƒ‡bƒÏäØèB:¢ÎDð6Š¯êï/MP?\0âöýlŒƒpûæ‰ÎÒÝÐt¡pzJiÐn)Ôÿ†ü0E\nHÇ¤cG‚¾`î\$'šsFúÍbô,.BP…_§åZk'WK~ÄT­&ì­oÂÙgÜ¬\"z÷¬HQ‰¨)ë>6ãrý©eÄP¢òûâäïÈ!Æ¾X¢ØFUgMc°Ü-‰\nF®ZÐ¤S¤z)éüJ#&´ÂØŽÃTÛŽIë°m\"Ümbñ‘·®4õÐ\$o\n¬bõÐ †åÆð®º…N,q¨‚¢Ppî…\rQ6­P=\0ÐòPq‚qd×±Š ÀÍƒnœèˆ‰P&¸©âUÅƒFö}(ìJ/líKpòxq·‘»¾åŽ¸ÎqŽè0¤3N‰®ÙE®Ñ‚o±xþÑ|n°ì 1‰åÑè÷ÐQõ ðCPt%Ãþ[°«oJŠEƒoiØ‹mþ×%Ž«ð–ŸØâDôŸ2D]âX- PøÙÒJáê\\mcíÜëâ†Ôš0~³§‘ÛñšÿR\"žnÎÔhwCV…‚j„©´j÷è@RxìôÚíæÛ-k°ˆû‘ð¡r‘òÇR¼ÖrÀ×r*8ñÊÅÌüŠ+ °)Qâ÷\r-­ ‰r°2 ÒðüRÖ÷.:I’†D#³.Ò“’ò})~±˜ØÂØqóÊò¨tqT÷ïÿ.’Ï32ÒPs ‹,48Re(²‘0.4ó35-DÒOR¹Rhm§1’Ðü0-\$. A*Ð¦sË\\ÐŠ‚É0S;pCVX0Jo³]1±¼ ¢âs17ïÝ8Rx3‹P59‚°Ó©6%,å)7€~±‘ä«!ó6SÐ±GÌðTï0# “E9S«>L¿=O5!ˆ7Q÷)cŒêèTcrE-\$j\$/*“ØûŠæ-¬å+ôsAT!Ï.Pìû„ÄŠª\r/m¸…kB,ï8pB…;.Í'èòM!ÓÓ\rEÀödÞ*+\\ŒÝÉ88‡Ò°…?4:YÀ7*ÚOB<óÿ†\0ttDÄâšQæo’D¬È€Õ.W6e~ñïÒ,Ðû¦Ý10H‰S§7rëß,S*èrÍ?“ÌžH½MtÛô	\"óNi73òd®ö+#â¿ÍI,§C3ñ3bÜöR2œò?LÇµ4u6UP%SO”?rï9u-®PP§£ïƒ#ÅT53N³×OÏ)hrh8¬>XA~ÏgéÈ-ÅwVbñV³ÈLEo_í+KÄtMä)¨öõRHm)5Øµ;?¥YÓn}ï(“S“Ë4©å[0mí/ôï>4˜yÌÏ[SÙT“Xðµj5b¢Xè\\Xõ†\\U[•M!ÔÿFÂðyõÈÛ´úòup{Uç+Õí&õË`e6¥‚Ð\$Þz(`-ÇJÑkJ…#VÔÙZSß3‰SËFtä¢¬©µU“C!Ö=6ÀèÖ.v'écP5u»eGcõ¬žK’pöH¸cRK?Uøò–sdkfý8O0ÑCu,s-Mó^ÙoJ5SC¯@–mN6¨PÖ˜ï4°Ðè„ð¶&%¶­U¶ñnEAã­csÝu)]k—mv{_VLô/0n¬Ï¶Y@6iNWm}nuTve_u\\Ž/pÖ`U7h0²ôqQ„FU5P“„›põ£m³/mö@žOwsro_3qU'pQŸtNÞ}÷Ž÷#o*PiÚû'ò&Sk“ lˆ¹·.ŽÒ3ÌÊüòi6ŒSƒ(3¿\"”qe©\\÷CÓ}8ÇèÜb¡y4TÝ×–õ‚yÔ§[ÔÑ)hÙ\rÍ&*+d+âÂMa:ôVò'yµEqj(¢Æ8\$\0Y¢B\nj†<wì? ê\$)zp9GS×¨{P£<wT €`è@Øküß ÖVÈ'„xƒö”&”\r Ì”†¦. ŒÉIç‚JªÇ€ª\n€Œ pFx>F¢ë€7‹ó·yBÑ5AWp5«N7¥‡&ý¸+ó‰‡§úÒgWSˆwðÔªŽ¢ÐëfÚ²éCìF„(Zà›ƒøC.Øõ{q}5ˆÔ\$ò@~{kòfˆMp‚ôÉ?(”ÎL%tÆo²L0ýUÓd3o{ÆÌÝý|áLŸÂÜà	Œ~¼Dk‘ù\"˜><ƒð@É8Ëž0¤,y´%n·\"fú(Ã‹9ãµz«”x ‰H«/-;kUuyYä.8‘3o³Šrµ—³(V›M±•sø ¨@#Ü>CÃ˜T¿€Þ\röcNf¤™o!aMFD;¥‚mòƒšëXÔ‡À Äð¢ÜÂˆI²70´IoÆÓ+\nÑ\$¿U”ÍµyA+^\\M\r&yä9‚žu&®ây†‰åÃN\nÀÂ`ê ÚèÃ‰\\s\$sGÇ€t“\"™A”®í]{¹Ÿ5&©å”Âñ•\n÷bÈBòÙ0ïxÔ”‚ÓZ]KEÅqmàòÚ\\Õ\r9&údM9ue“mgeÊ?)„K}ÓÀ{DEWB¬`@	\0t	 š@¦\n`";break;case"bs":$f="D0ˆ\r†‘Ìèe‚šLçS‘¸Ò?	EÃ34S6MÆ¨AÂt7ÁÍpˆtp@u9œ¦Ãx¸N0šŽÆV\"d7žŽÆódpÝ™ÀØˆÓLüAH¡a)Ì….€RL¦¸	ºp7Áæ£L¸X\nFC1 Ôl7AG‘„ôn7‚ç(UÂlŒ§¡ÐÂb•˜eÄ“Ñ´Ó>4‚Š¦Ó)Òy½ˆFYÁÛ\n,›Î¢A†f ¸-†“±¤Øe3™NwÓ|œáH„\r]øÅ§—Ì43®XÕÝ£w³ÏA!“D‰–6eàiMÆ~ó}Å“á£˜è!Î2Mý!ŠèÅPâIW³I¬K¹í˜’lðÒmþ0cL@ð#A\0Þ24Ë*š¨#é\n¦ <M²+‰sàºhr†5 š°Ò¯#’¶*#«ð‚Ë¢8ÆB¢¦ƒ/+²¸‰¬™Š_ PŽ2ì`éG\"cäè\nÃHä:«º/!¨¸Ê9&c“ÞýÃDkôâÅ‚br¢ª‹ÊÜ€«\n@Ã.Š-­£RŒÑLôr #C&3¡Ð:ƒ€æáxï?…ÃÈÃ*Ã\\¹Œá{E8Ü9#xÜ„KèÂ95#¤ê/¶èÐÖÂHÚ84ì`Ü:xÂAM\\|4@mbN9¡˜£! ìô¿Éè\$Â¤`TÊöŒ1»»Ž£\\9 Pƒ¡’3ˆ¬í8ÉgZ¤ÓK0eš'\rì²\n¿ÒèKIˆèÜáÒ5/×eÑu\\1Ëõo\r©üZ4ŽL¿JBê­Úô/Íøˆ2ŒÃê6-o<•Û\0ºB0ê7\rcè7CXëRM®}„ÉÇãÏŒM3Z3Œˆå„¹¹‰Šä8PIˆêšº:Ú‡qÈˆ:ØÊ2DäYØëŠc[&‡gé3õQ´ìsc^4è½nüÇ¨Ò<¹‰Þ0”ÀÌMž_Z6ÝÒ=3uúý.ìûKˆô£mš#.l5·ºnÀQŠPn¨Ö«ÀhüÇ¡')Þ²*§cÐÂq©xÂ¶96âWfís·Ç;ÿ\r8µzb“2ÍÒè@Þ3È¬—	ùŒÝíhÚ)=:ŒcT9ŒØz7Œê(æ/£—s•*+Š7AP%	Œ¡@æ¥ÂpÊËFï!Šb®pA2«.û(þð‹‚vÛÈê—\n©HÊô(ÐÚË%ÂµŠ(H\n´R	´ÿ„†ÈËÈM‡\$ÿ+D\$û‰h\n	¨ƒ‡#Dƒ˜w.h2‡€à‘Œ£æNq9§TîžSÚ}OáÝ@¨2Š“Ô:˜QJN¨å ¤”¢–S5M©Ö8¨¤n§9T*¥XSA¯V\$‚\$¦8ÄIPrvåYS’ãê[Oò=xŒìCŸÕ|€Ã‘èd@]STÇÉqz/„á1%ÐœÇÈóÐV)†0£‚8H\nÍ¸s@Çãáddiì½µŠ/q\$ð2’äÊà[£Ð\$ÎÜ5©nrîDAª>¢xb#ÁX'¦R~\réâ]D!¸ò*LÑG\r(¸1h!²6†H2‡êj˜ˆfDGà Âå\n_CAÎŒ–@étjÙÁ©‘ÆL žÒxS\nˆJ6¾h®GÈìŠepÿ6äÆqH&dÖU±\$Tek¸3¢Xò’#°eIXÉs§™h‘’Å\n\nØ&?LB\r)ÁR=µä°V9Å˜33%`EÙL™©ˆ×¶bB™mÄlÒ¦dÂp \n¡@\"¨A\0(4d\r©  æLÑºn#a„€ª` E	›Óšv{Qìš6”º¢9 ôiâø*ÕZ¬3‚Ú‹j\$h‚ø»T`àÇ™Dp²pïG¼ÌÎÒ½@ €3³JàÇË¥s'.)#ö£”¥n	/ÍÇU#Inp‘¶\0™·Byª›¯qîˆºæÖÝÛÊÒ“–^Ã9Â/Ãœç-½ßZNXøn'³úòP‚eT¥ Ÿ5\$DMZQªé´*Ô\$Cy53aB=GÂ‚J`sdí,ÒÆcòC}½)µŸ¿zÈEéU,2Ì˜*5†@èN€CG¡ÁêY2þÏË‰å<ç¥¿8oÉ5»&^	ÁPÒ]ï4¡”;³5ªekXG!&\\\"öÌ¶lÓÏ<2UŠ¶ Í1¿n+i›V¢=[)	¤t–£!Â<PÌN8¿ÐLJ13Wn<”›F2ÞHý°`p½<Cv\$I‰‰\nõÃ†’¡íYÁP*†¾W¦ª„3@HH+#£ò£¤l(PI›dgõf®Ð^Š2a‘yKÂ=™sõ1P}ˆ’bQÈãø5®…É»s¡!Ÿ‚àsfzÍì9RuE	ÎÎùˆÊXÜöÚ0¡?ÏÚ\0þè,[œE	¡Îš#E=Ì½sÔ‡nEÂ4™¦×ˆ\$eÓg¢¡Â\\»rÞm!Li­\$sö°Íš;Z?}3œõ¾‰ÒY—XÝ¥õö¶Î»\n¹\rbR†b(ˆ;Ü¢1K§	RK¡<«\\Ï\r	&;Û`£ ÒDeÍÕJ-s û}hXe[©'£œvÓŽq)9‘\0 ´Ã:¾.”ò¨†|®°VTm•°0Ü\néÁÎ€H>GÅ6‡Jˆå“®2fêÚÕË± 0z²‡Iqë‘ÈxÙ>Ý‘ÄÄÎ\$‰—»«whnFF¹–ÏN‡”œîsÍ3Ódæ/d·UƒlJÎ“lÌ2ÖÙ\\nÝá’xŸ>˜ÇçIXêäq¬ª+Ö'Sê¦'`µ!”t7=!Ä¸*/Ì‹×±<DÅJÆ]ª/^KÑ–sr~l†9Å‰ï‘÷¿ÀÊ}Îrõä¡\nÂ÷ÞkÐ¶—ñžÆs³jyQ.s×¾øò/É|ßæGÍ^îkÏ<Ç>‘Äç³2uÎ3ÒÌ>dÿEæmCŸ\$ 	Ç~¼£od]½®cÑÚ‹H•ßtâ}‡¾Æ~ÓOf•ÄI¾\"ÒÔ”Ÿá¢{I|·7\rÆçŸŸ®Pü·jûŸWïROÁËßùÎWMˆ«†<Oj÷îd\"à&“6ËO™Å+Aœ¾¯ÀÂyÞMBþEò /ê¡/ò(®ÌúB Œè.fŒçP ¥Ž¢>‹ëŽä)–Â+\$\noºÃb†Áð8 .Ž#'@òãÆ¬.«.æY¬v¿äó¯Ä¿Å¬û/>õp`è/FýG\$°H¿jeaˆÇ	8ó¯´*mc‰ORûp‚Æð–!!Œ&Á\"qP‰ªTßP“,v(cLcÞM\".AßîšXÄ\$Œƒ<Ó€èß ¤ùoNóË\"2ðâöpæíPíPtý.K\n¥¶x&8­›¦DG|îÅ˜Åè¤Á1iJI†õëH2‚ÅÂ‹	2CÂ^t0l²'³ÂL~1Ï±:/˜'Â|%Ñ“‚qÂaÈþqÎÚ>ä‚\\CÐú×°Ò†ž¢=:_Œ:–cƒé	ì>¯Ã	§`Ä¯Ï\nPw	ÑZ@Q¤±\$Á,IB\nÉÞEŠÕlBãh!À×PÄ2=±ŸPx?D1vØB\\	\r|úBãêÊ­I< jÌõ„@]«F´­C€Ü`mr@’\n5My!0LË!­àÍÒ \$  «4E’dcB\\ãe£~‚bIåÆµÍ¬##>9¹EÚ@îüú&\"R^å¤upuìË&úr‚ †GàØhÌRìD'\rŽÒµ'æc*‰\"Pb#\0yêd\n€Œ pœd( ÎÕí-f¨	ûlÐÑ®Ð•'ºØlð2@ÍÒÈñ)\n‰(¶Ü­Wƒ&?JY£\r¢|:bž#õSòÅC6ÕPP9Ã6\\.¤ŽÆünp-gÓ2Ú1L@\\Ž3‰3Cð\r@Þ=:pàwÃZ2fØbbæníäãž²SX4îÐðÒü×ÍÀ‘¬[²n;\"á-su6sz±ï?8+¼í\0Þæ0ÀôñS7ƒ°Z…¬ÇFP`êÈ³¢F\$ç,#'nú„FhfŠsK¬SÂíé*i‚XD4/¶ÜLçü`êDÊÍ9gB¬\$'âªðÈ}\0ì#†0Çp|Å‡(-ó¨n¦>?“´é ê!eÜ-ÆÚðí/4êÃ7ë®óšD\0¤@Ê0À\0«\röÆ>E‚¬";break;case"ca":$f="E9j˜€æe3NCðP”\\33AD“iÀÞs9šLFÃ(€Âd5MÇC	È@e6Æ“¡àÊr‰†´Òdš`gƒI¶hp—›L§9¡’Q*–K¤Ì5LŒ œÈS,¦W-—ˆ\rÆù<òe4ž&\"ÀPÀb2£a¸àr\n1e€£yÈÒg4›Œ&ÀQ:¸h4ˆ\rC„à ’M†¡’Xa‰› ç+âûÀàÄ\\>RñÊLK&ó®ÂvŽÖÄ±ØÓ3ÐñÃ©ÂptŽ0Y\$lË1\"Pò ƒ„ådøé\$ŒSÓÞLà®\$ÓyÉò¨ü†ðËÎ)ínÔ+OoŸŠ§M|°õ)àN°S†,ê,}†ÏtÒD¢£¨â\n2\rÃ\$4ì’ 9ªŠ²’¬I¤4«ë\nb*\r#ƒæ)ã`NùŽ©(ÒË£(9ºƒ\nHã0K« !£îú†KÌD	(ðÈã+Ð2Ž‹³ &?ŠüP+\r#é¯Š¾ôŠi{\\2.±\$9Žq\nìpL‚0 ãpòÈS:§§\n4P\$ÃHÆ4¦ŒZ¡£&fçÎƒLìÕ¨#ÜïŽ€Pxš\r Ì„C@è:˜t…ã½\$#é´þ˜.£8^ïÓp+¾ŒÁ!xDÄ\$­ˆéDèÜü5„Aò(úŒªFã}¦²\0Ð7Œ›òƒ„˜¢&%üðŽs|¢Æ1@š‹Ëá<¡È#¨Ç%ŽL…žÇ%l-¤š5È\rµ^\r6ìâš1,[.Ò¥\0†×£òÜ!-ãyÆrèØ:«ÐCQD»Y\$’ÜØ1²˜\"<ý=Ø1ºƒ(Ì0±C @;/c¨ËcŒ¶LÉ”ÉBÎÏ3|í.%ì(š2b;\réHØ6\rø€ž9(×ôÔ1»ùí&ejm¡Á+Ä—^¨ÉKqä¸öWæõ#|ƒ0£pŒŒ¥ƒa®‘675\\väÝs„ÍLöhmÜ»=¤¨yc²ðÜ“Ž{³Ò€oÐ¿´ísFÜ(5­z\n\"hªê’B(ð‹I[ÀË½]¥ÕµX4ÕÈï¸ÓÒÏB’f6H SFÒ¤¨èÞ3Ïäþà(c?Úì€¨7«‰ôÄü²V¶€ŒÌU¤7¯“ñ (ðÎ0¯.6÷{&«Ëô2…˜Sã[¾b˜¤#zC²þpAÝŽKÒ<“ÍrJ“ªË¨ÚÅD] çÛ\rÓúxžÝ°r2Žä˜“4æFÐ³4Åt8\$”TòË«î:Éµ7’PZŸÞŒmé€Ü`à˜˜w.ªõ@Ó(úAƒ0JD(¥£”‚’êP2)b^”Ê›\rÊu*v¨Ø*¦U\n¨7*Å\\EHãVŠÙ\\#t¯ñ>{Ç‹\0äï”1F¥»7ÃØBLV'B ‚¡ä6SÈ<A(1.b»`I—0FdÂFä:l\$p`€(€ Aƒ{”EK4‚¢\nPâ\"É´ßE¨Nwà¨l ¥åó\nÑ˜'3Pš’ÇèVCb&¤ìž¶Ã6Hª„¨hTIˆI\"!äÒH•zVØ²aW¦é\n(Ýˆ	*G j^JÉº{áœ,	x}	±€¦É4›  Â˜T ÉÙ½“â0M:~•AH2†F4XV”Ô…p¼°…ÜHÛAŽ€g±ŒJgøJÈJÙeP*X:©jÖOÉõ\rä}÷†\"î×ÂaH#Œ]8\0Œ#ú~W¤õÊ1i<¦mNaÈÔ¸}ˆ(fEÉý;b+4Q´ûka8P T´¬@Š-2JÈtÂ3Uø¿‹õi¦¬’8œe	‘‹O<œ5°àÈÑ@AÄ í“¸wŽrÏuˆp½¨µA^–<&°ž™Thá[jj|¯œ›Á©2`ÛÚY¬tW95+IC&)Ed22i]å4Õ`Mæ¸G;^QBDt®Ö3”èEÀPVDA„ß\"‚\0Iä>­œö ›\"KÓ¬üQÊâT&çTü	”Ñö?•¸íØí˜3g  °9(ÃµEç¢¼–SB£šFgÄ=1¶†ÃZó”çž*Êy\\¢‚rUôšŠ‰zp?—^šàÊì‹_îhÈ1Š0xYË‘s?B\nÑoBE/1Ñ[}ìlì–©›ÐÌÙö%TŒÈ®XÂTUFþœ¢DG°>	J¡73pÂ0Å:|Šéùw…7[@UôÃvdýL‹,j	(¸!ØLˆ½1\n!„€@Ý‹±²u²‚\\›Z+9J¤.¯ÁÁ¿Ä²êƒÔàxKçh*õW®“(0(ÖÅP‘.gèÓØleB€?S*:bk~Œ(tÀ%.¼WXî\\'Ï/»–	˜òžOtÄ6æ„U‡¤ÔHŸ•”	œX)1z™,g¶I3œžy„‘æ½•ÝDxËYÈÙi,ÀÁ\n¦›rºL0ïTI\"Ex<«”¢d	Ã&©\rÓîSjÛAˆl(˜G.•FövÒ‘7J¡’b¢Û*¶ÁÁ@€;†PÄäuAÅ`92U°„›ÚA\rí¨“`ò_0öªÏ4Ð­“¢›{‰>BÁ`(\$:Q†,’Í®u˜\"œÀÂUÙ³P5¼šW(¯'–œI‹'>MFR’ËÙýbÜwæ®fŽÁ/¶\\1‚OÝøA®utNK¦·p\\ÎÙ³Kƒã•ïNäUÈ¯!1¨2›Þ@ŸC¢U²Lãá¦ÙTî^!6P}%&æ>ANDkA@’°þNÐ	?è¼ù•ó2êŠ7äÝÏÌX”^ñ[|oRC1œßÓk×Úý&€¡œæ”C )Dœ?~ñž_ëE\\M\\Í5—åÕ	NååÂÃ÷*õÛÛyá}ñ3ØŽèNz›ƒ°{¿ñ}üOxtt-ßÃø/Âü“ò¹÷ru§äÉôŽÄ]„Vß/±)zÏ8Ïæo8ÜsNkô…ØÛ¸0åêC«Ì¨Ÿûÿå|0˜\n‘-’õæüJr™ŒSün;Ý|Eø˜iWmØi  .¥Ýï˜Ô@…i¦oq ¬Ô2|n'Aì`'ãåSîÅ®¿žI‚½+Ó—QbïÄCù N\nÔ®®BbI(´úoœ¼gð°%¨¿`~\$FªJ¨¿çÜúê~><õåÌôåÂ\$€íÐ8±o*äÐB\\Irë°03O‚ò ÊÅâð4³‹OFú%§Ëòó°j]ì[\r½^VL0À£\nmHÚ©¬Ú2f0\$É–·‚8`¯¯NöãØøïnBNP¬FÐnòïl÷¬ÏÇx­fŽ&à½¢Ž±¦€1ÆKŒ\\}ÐÌ¥P~oCV˜pÚ¬£œ`62Žb}¤U\np@pb#ºaQïž0pß ËÁyù:ôññ‚°Ç„åñ#\$á€}Ñ=H+Jæ“ÂŽýCçîOn¶ÒnQ``1EÑXê=\n†æàì#âë|ó|ÂJ<öpÀCÑ‹\n=e½MxÁQnx ž‘˜_åbQ§#OhÌK'ó/’K´\r1\\ó`.Âb	À\r˜\nOp@ŽøË3çºcn.EBäç©\r‚˜A€ê\"<Úæ-°ð±í\0ì¬’„²\râH/€‚Úè6+âL\\D–ê5³çQ**HàM+ .\nêR>z…Ú`ˆØÃdÁà†H Øi˜MÇÞÁæ0æŽmH,gbØŠ~é‚B:z ª\n€Œ p~l1ÎÌòª(qñøÏ/Z42I\0Ržr²*GJDébqÈjâ¯¦>~nZv\\ ò¶âP·î„œ£=Cö?«NÂ£Ã1ÍhŠÏz\\ÂL)€bÒo.†1f|\$£([\"d r˜:`™1LÎkÃn2b„’LœÈë1P·@á®6EÒñ²J×CêÂáNóÓ@¸I14gl³P7“TðêãÓR1Nþ¸+*4Ò5(G¾#Ø&Ë¸BóTE:_&ZYŠÔ{ïõ4+×óìÂXíXG?1³ inXë®®ëâ\0ƒãfàÒ!F7'Äf²L¶_Š7ãúd¢ô?€è=ë>.ÅÍ-Nx2\0003Š¾ÓK²j‚GP[+ð¯÷?Rë4ä¸Ýó\\O!ÀÒF`EÄ¶1¨Ï¦J‚ôP 	\0t	 š@¦\n`";break;case"cs":$f="O8Œ'c!Ô~\n‹†faÌN2œ\ræC2i6á¦Q¸Âh90Ô'Hi¼êb7œ…À¢i„ði6È†æ´A;Í†Y¢„@v2›\r&³yÎHs“JGQª8%9¥e:L¦:e2ËèÇZt¬@\nFC1 Ôl7APèÉ4TÚØªùÍ¾j\nb¯dWeH€èa1M†³Ì¬«šN€¢´eŠ¾Å^/Jà‚-{ÂJâpßlPÌDÜÒle2bçcèu:F¯ø×\rŽÈbÊ»ŒP€Ã77šàLDn¯[?j1F¤U5›/r(ß?y\$ßºâ¡±Š¡»”Í¦Ö´JòMxÃÉŠ‹(¨³So\0ë4šŽ‘Êu¾˜=\n Ü1µc(Ö*\nšª99*Ó^®¹ïÃXýƒ˜Öa¯£ ò8 QˆF&£˜Ø0B#Z:¾­ûˆ0¡Æ)02Ž ô1Œ P„4§£“L\ni©ŠRB8Ê7±€ä4Æ¢˜Ê=#Ãl:+\r#“^0‘àò£Clx2ŽJ\0å²š‚	,D7Ä­k\0¶Æ¢‚,4‘B9·£œj*K²¤0›ÍóŠDï§‹»âìå@4Ð@)Š\"cŽú@2ŒÁèD4ƒ à9‡Ax^;ÔpÂ2\r±Ä¸%#8^1Žaz²ýÓ Þ7áü0ŽC<aKãF7\ra|˜	ÜŠ7AïØxŒ!ðA\"¶(,9¥b´69¸è¢þC{ÜòN£¢–5µêX(\rãÐÚÒ\rÍê%8µ=Óu´­ëfÁ\rcªÕºˆ“p5Ä(ÈCôàX&\r\ra\ný.qâ2:Ž(Æ\nØ%È‰àé?“ P‚Ø#BL9¶;+eèÆ4])¨A˜-ã}·kSo0Œ:Ø¦D3å;™Ú×…´\rc\$\r#´¶‹TlŒì­Ž\r6QÕ+\"C~ý¦\" yóâ¹åè˜A:PË|C´`™>)®\0=Y°Ê;2åkÁ\rïÃáyÝíµ5”#Ót]\\*—Ë1%¬:'34r1ç T¼näÔ1M€R\0´:´v\$¨”¤£ÇU•<§‹µÛ{jpý\$óo;Zï0Ùq<ê3<3ÊÜ2¥bxÉ?NlŒÝº•ª¿gÃ~`à_#šæP”4þPÐ%hX^ëö¿#RcVÿ·øMJ76\r°é¦¾²|6û>Ú\$÷^ûá\"ïADWÎúC«Æ}¡ì‡gà‚ó6û·×ôöÒ„80&\0·Dà¡ß!¦€ï¨ŽûßCñ‚(àØ¢\"ˆÃ¡4¯°5“À@Â˜RÀ¸<àÊwÉÛëÄ¤6˜&A	àsÍyðò“sä\"q#AØàs(¾JšfVA¸Ÿ¡°ä çP°\r÷Ö¢qó§Õ÷D•ÏÉFfhŒÑW¶2#‹¤0x¤Y›(Rª]L©µ:§Õ\n£~jTªµZ«Éä[VªÝ\\«°D¯UúÁÎ¡b²–<WRÌYË@‰”Â ùÌ\0y&ðÀŒ¤°(IÜYqn4¯@Ü\\|	fN€^’BpN”©%eä½ËƒäŽú>/”‡ÄÐÈQM{UOf>b§´\0Dƒ#ª8ÐÉ—‚\0 € ˜ó\$V‘hš\n\n€)…ËÖËˆÇÈ¨¡8Á™1tE€B!±º cäq!±ã%æp™³)~Ná‘À øXxžf#„5T¼—Ë\rP)XBb\$cÕ@Å\\‰\"\$¨_@ *‘S'Î_Ð9¯„ÅÒ,àß&Yû%oáê†—®PÔ\n<)…G<_èzÇP­Ã•rPú(‰fdMìšô¬Ã0iáÔáˆÕjYBäi²ª‹…b‚…á›r\$¤œ«ÒæcÑ#Ä€‘PÀÚç¡6ÁRp›õˆJMŠªo Ž'dº—\r°\na¤=3#¢Mhk%&¬ž‡bDŽÞ(q¦”Ò.tÞCO(ì'&È¨™Ø£>´®î*pV‚æk‚¥¯Âtí™[Nxï[g¦Xsg„˜’W2R¾žšf¸fÀî¦#–ù‹\"ÌÐGR|îSa+DÆÍ60I÷*ˆ4.˜ÂžË£QÜCŠ=ŽÉË^‡uz’RL¶¥=á^¹Ï”¶.ð¿´à¥ÃHc5¡¥Y˜Ä¸ŠzœZsô9ÍéÁ8—LäœÊ\$¨\\>øá°j%-7D kÒ²wZËZ2î±„ÀÅ¢dxDŽ!5/æ,'ß*~Þuâ]·I3]YpÝì~%†µ.šN¦Û-8\rydÌPm\0\ndÍ(<[—½I\"8Êˆt-Cä¬Sù[’Ùé&ûvsli6±â´â1„ŽÕÐr·9˜ã®*µœsq¬:PÌ‰·sËZ \nÑºßŠðj*äª7á™ž6TjC!2š:í¹'bå]  >é‡\"´JÍM*\nP „0UèÙ&8gÞ40JÂh=§fæ—ðô¾˜H/+ì&+4 ÖÃL³uŠáç`kÐÖÄiãw1@M§‘Göd_/žÜOË6é ƒè-©4AW©²¨¦ÌÙÖµÙ™€ëµ.ûè–Ë²²0;E|’vÝÙ'“eÅù¹66ç»Ägu.ÅØF˜NïI¥Îa™3+Û¶¡@ïYzB»‚'ïmŸ¹b»öa<I»Ê­Ã½¥VøÚ1c`qÃÈ÷øþÍßœ‹sS³åe…N.k&÷^ bGé«2)±sîpH±*‰çe)ï¼µAÉào%ajÂ¥Ä¼¾Š§<ÁdxpÊJ9õ°Ý?ÀèPZÜE—õwYö^{lêÝ[î*†\\Úõ•¸L¤£”{'tëæèÄczß\"ò_æÿj›ðçhl¾B]}›ü6”ÊHè>(8|À\n‡'æàžd,ž¾<\$û7÷…q^5Ùç±O¡[_Ó’¿>×¼ÓÀ½“,«L­ò‚žÆò3YÖXË™†iªlÕ\r\0 ¤ºC!¤(T02iç¤^ªµx\"*? ÐHªŒÙå2³*¶¬ªõ†–ò±à2ÑYêMŠ†0@\n4´`\0¤‡ÚdÓwßšô„	Ód-*½â8ð©ú\rEŽ_‹FÿÇ>»°öM0ó«µ/ó\0OÆö§4s8õB4ÿoL4®•§\"ßh¦Òçfé\"¦È0@ß«9Ž– bt<ÅF‚\n O4<¢rNB<Ý\r¬ÝcJÛ.¶\rä>P`«T7ðh¡°Å@ÜÝ­´q\$š‚^ÑePYÀÃÛ	N\0ÝÍ¶¶±K±Ã¤ÍßgÀŒt]a,Õc‰Ð'\ro„ÍpÞÚ¨ºöbxél¼\ràÔ_‚ú7êò#.`!¯ØF‰rfd&&ü!£ö\rJ[Eø†d4Î#Æ1\"T±\$Àà9±—fZ\$†”«(²ïÐ\rÌ¨7ÐÎnì’ºäÕãNAÃŒåK ¬Âz°÷@ÌgÂËvµÚÉ¢vaÉ÷L§gµ°ÍQ“ƒQÐ`ÜZ°D½¥ß£žÒ)`šõ\rJÿ£\r‚2ŽP%	L„Ò\r%ÏEð‡Ì‚H±ÈšÖÓ{‘Ö1`´,b3£Öc‡–bà–\"¡|Ò/€^Kš@LnfCÊm\$&ÐÐƒ\nqÛÏ[\"P¥q‘\"ð£25l&È@µ@@Ñ†z9ÒFqËé\nEôrqð\$’Ll£%Çf]Ð%ê4#ß\"ücD”\rb€@p\"±Àÿ’/'òƒÐïhÈR'’•°&ò®N¤\r)2g)’­( 9ÏÍ²‹qªc7R™%å*£\\cRh½±&ÍÌîK’Á\r#JõÌÞÎ0á	Rí.\$Ò@öŽ—\$ŒìÎ¹òj5Òï0¤>E‘·dÀi­;.qÃ\rSLIùÐã2³#/ÒÏ,qú\r	âÉ\"ã#°„^Pj21úBç<ÉôŸ€ë!†Î7&å¨3Z•S^Vlo	Š(¾¨)5¢57#G6'²Û3zLÐ¾	b2£Ìa&Ø†¤´:t£\"%§ŒA‚ŒDâ\nhè°¬f\$mãV(CD]y ÚÛ³n|´i«É<ðœ¶~Ÿp3=³Ë“àÞ¾eÄ\r€V:\"†jÇÖê…ýâˆ|åÈK„öeäh}rÔAN¤ˆ±&Éx\$ˆ¨Báf™î‚f@ª\n€Œ p%sZýR°‹Ž=ÔÝ*þJTO	zÞ3m>”HuôOp›?A^b&\"¢.ßˆÐxrv¬ _RRËBþÖ@b‚ïÃ	b8übüCLfŠªãÂL?ô3Í¤Þ”œ11h¿ŠjÊ*K«HçãB:„ìæêè\$kxœ‹ÐFØÉK,¤D5lõãßnB‹ÂÚ-íØõÌRü\rÒŒk”~„5PsOÇÐ(€à&®^²ïËPµ\"ÏÉQ†áRààëãÆò4_SCÑL—¤ž&Œ[1^Š…î¨!Beàa4÷‚F÷Â‚(q¼hêÌÅ‘¼ý ðb ¬'IqNê/03€.ò(Ã\" <ÈñfdB<\r€òòCÌD\\O+\"'GLCØ4ÜÇkQ+ˆ¹¢šGö»w\\k„{#`[•!RU£)ò„ë.1‡<¡\$V!Ç–";break;case"da":$f="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"©ÀØo0™#cI°\\\n&˜MpciÔÚ :IM’¤ŽJs:0×#‘”ØsŒB„S™\nNF’™MÂ,¬Ó8…P£FY8€0Œ†cA¨Øn8‚Ž†óh(Þr4™Í&ã	°I7éS	Š|l…IÊFS%¦o7l51Ór¥œ°‹È(‰6˜n7ˆôé13š/”)‰°@a:0˜ì\n•º]—ƒtœŽe²ëåæó8€Íg:`ð¢	íöåh¸‚¶FÛþÈA´ŒàwZv \n)Þ0Å3Ëh\n!Ž¦~Çkjv¥-3Še,Ã’k\$SøV¢‰G¤Òä˜)ÎOÙíÂŽ‡“…üœ—8ƒ“Ð\rî;j˜ŒŽ€èž®#+°µ°œ2Žƒ´\"5¸C*É\n-\0P˜§¦°¬4ŽC ê¶ºÊ ²ŠhSÁ?\rúØ;\rÈ˜Þ‘,ðHˆÐ.£\n9\\(!LŠ.74(úÕ‡ƒ@4'£0z\r¸à9‡Ax^;ËrB6­kÊÎ3…êTÊ<&£r7ÁxDºKé)‹ãf7\ra|\$¨ó`¥à^0‡Êæ8ƒ Ñ¦(ê ˜£¦©8¬Â\r¨ÉQœ;C\\Md3HŒÃHÊ;U-NÔ§ÀPœ<´-‚.†Œ\0ÅZ HK\\×i¨ç#è´*?p–²8’@ÂžÀBê±„€ÆžÙ¬0ˆ2ŒÃê64#²Ú:ÁÔ¹MLB2+Q\r3bþ)Œ#m›nŽƒrÖî\niÓ¸4Ë8æ²3Iû¦Ü/öèØ‘>ðÓ00Â¢šœ\rÎ‘BC\$2<N\rÕƒÖ`Z9Œl“¡I…£]™‹õi\n»F­•[S-6:G±ý]˜£šÈB{«\n ¹ØÃæƒ|úè@P ´U+ÂÔ¿Ïƒ†	©^¥ç¹ûC¢Ö9žk\nzM<\\²7 –z07ŒÃ62ªH\r¨ëŠƒ|#(äÔ:Œcê9ŒÖøA%-c˜X˜[ÈÂ3Œ+[’¡×3\0ÝiŒ¡@æ¤â¨Î<àëKB!ŠbŒ¬hJ–„\r}ìå)UËn9Y©8˜ä<áÀÕ,`è“Å£œ×#©ˆçˆ—³CÔvnûÂñ´22Ä\$éJ 9d±¼49\$U¯…Œ'^0\\I²|£)Ê£¤¯,Ërì¿0ŽAtÇ2Í£,Ð¥wótá9N“³%<Ïsêð¶HR‚P‡•D!G¬m‹:†Ð\0ÎN™“@?®ÀÉ(xß×iKdu«št[]²g,DR´:IËˆ#‘Tž´\nK›µ\$Mè‘\"pNŒ¹›@\$\0ZÜái>(@RðI%â™ž\"äæ\\Û.N\r ˜ŽG‘S«7ïD•Â\\gÖqžÄùz†hÚÑ{:7­Ô/§lòÃ9ä=å¼ˆ‡–Ð@ƒJ¹\rÁ¾:Ò`\ny¼¡År@Ìu‰xAŽHÎ¢–ÈúQR88¶àJI\\;	áL*\$y|i\rq­Ý‚ö@Ûñ\r¬I„ò\"×Ša«(Qº“²z{\nXiPÏT7@ÎC‘ ƒ%(“˜ð@Ì‘#Ä‚—2qTL§¥Û”œ‚ P@Äe>µ21+d:Nˆh¾b.•°q!ÍœÊ\0¥þ‰HR÷g¡8P T³Ì@Š,úX‰±#ÆdjzñB‡¶ƒ!éX¹KiÜ	†’P@sE1ÏÁ±ZEuÓGa|]!¨ö€§4ç\rôžh­b£ÆŒP\rABNÁ”ðAã¤M]ÚS\nj—4v²e©S_iGY¿3ÄsÂ²ÏšÔÍ6h‰–{#Á¥“ØCT<iƒ ê*”!ô@1ŒFâœŽJ¹_á¶®VgT˜L8•›–§<‚¡u.ë¼4‡¤Ë prŠvˆ­£¬)4Q7Ðy¡EÄC5~W*¥U©ÕT«+Éª0ˆ•—öniR/á,’±@š0Å)n³ë’†bt´ç/“ªv,rÐÍý¬\r–¸\\[ZMûJH°U\$82Ö†Ü\\t–s\"a‚’Ó}ŒTÑÂâþŽÙ¥?hˆïùòC	\0‚BOêgÍ,{ƒÐq‚BŽCQž—N¼ú‡ \\b¸\0¼«+óxbÈJ¾W&(SÄËj¹nvñ‚\0žÜ=þÀ†0_aJªC‘	w`'1Ì\rÂ8\0,-†0Ô(A¥-“/&PP n'mÂÿLŒ<0f!	`»L|\nñÎÇdN0¦oxwXe ÏÒ>HWMÉÓ2\$TkPÐ'	G˜\$ð®Cã!SN‹V`—\r±%AA¼8F÷]|rž˜äTÛg*ˆ9®dè²Êrý%\n¡´‹½¢MÐ¡'ÐzPfTiÎ‹¥*ÀÔ„IìÍ{)e\n£!Jq¦+Ô²Ódê™m@jf2Ú~¹êfCl|,è)‹¬øX„Ké¡”4Õb–xÏ&:û]l-{Cž¯§B™ì*¤\\,äC¦:’&3Šs´yû?´\rc\0Q\\K‰\"*Ê†Ý†¿¨ÕÑx¦ºOh–‰¹ÒzÏ6Ù\\æQÝ_Ki]0Õ[¶œîj^\\åžÕÔÇA¡4\r9¢)Ëa6‡ƒÙª÷w\n2<4Ñp-Ý‡PMÑ&/\0¡c\$Kˆïþ#xbÆ“èãÁÓa2@y&ÝÁÙN•õªx>üËFÂt[Nqµ=9æœòÙó~ÃšÖ¬´Œ2ºƒ‘*íK&X¤\\€Áó<#39^' í Êáá«A„[fr}\$ÎQ¡u*Rœ9È–®AF5¡yÌïb3Ì=v¼º,ë/£¶5ËTÌ	ísµ¶¾c†þ¦¹l¿Ô»¹ª¾)§aÍ9ò¡ßŠpþt¬¨í”U\"êÖMÑæ5g¤Ú¾š\$y:sê¤¸ß~d“Ú´ŸéoË>¨£Ü#ú°Ž€lZlU©Òøm–þ8‚‘]SEž¹Gê¼ ½]/¥ÅzÕã}+ñ\nsíœ\nx×Ì½WPÞßˆ‰÷Yauþ?Öh7è˜8½ª>¼t\niàM_sÔqò~¸óÏhÿ\0ÖÿMôà/²ü†pË\n~‹´°MJæY/Nú&?­Ñ\0MXöÏîýâ`Y*æ¶ës¯>\nD*-ÐõÍ1äöp6ñ0·ëp/ð=K‚\nˆòºV¿\$c\rÙ\0p{°T;£ó°4ÝÆ,c4º¬AÀŽ\r ìÂ¦˜)&ž@PL1h’\r†Œ.Kôþ+Î<êŒZm>Ç°¼wÌ`ÐÃ\0`–X«ô,fh-Àƒ\r„0Ç¤D\"\n©åø.³ãA+üVÂ0æ.MíÄËPÅ\rÜd\r€V\rcÄ\rl*µìšc>4/&4ÃZÊ-RêÈBì¢2ž ¨Àpt€ÊäðFåî\$ì\$Ä¨ah:Òy®D(B¤›©ààl—,(ì…3-B5ñ\"ö&mˆ@CzÏðˆ6±’7àZc1 uñ.ûa\r»‚úwŠÆÈò9í ®(†³qÀ€¦dS†#z¹JžBZÕÚ(\"¦mÖ<æLž\nrÓ)dM¦Ý*hË\n@Õ‘ð2‘÷F€dÀàÙÑï1ÞÊ°- 2¦MÔhØ&#\"¨ñeªöáÃ¾²å†_)Ö¨1BðÉÚ	­d@MÌÜ&AÍ°%rPbŽh—F¼úB]âr\0ìƒc¸gÒ(-¢ž»ÂØ£‘Â\nŠH¹\0Ê’¥ Pã££j:ï&..f¼ßê>V„m åÞÿï÷\nÑº#ÆD\n\$-HÎ‰\$\"àÔ";break;case"de":$f="S4›Œ‚”@s4˜ÍSü%ÌÐpQ ß\n6L†Sp€ìoŽ‘'C)¤@f2š\r†s)Î0a–…À¢i„ði6˜M‚ddêb’\$RCIœäÃ[0ÓðcIÌè œÈS:–y7§a”ót\$Ðt™ˆCˆÈf4†ãÈ(Øe†‰ç*,t\n%ÉMÐb¡„Äe6[æ@¢”Âr¿šd†àQfa¯&7‹Ôªn9°Ô‡CÑ–g/ÑÁ¯* )aRA`€êm+G;æ=DYÐë:¦ÖŽQÌùÂK\n†c\n|j÷']ä²C‚ÿ‡ÄâÁ\\¾</‡ÛærQÓ¯@Ýš…S´—¬†J97%?,äaäa#‡\\ç”ÎÂ1J*Ž£nªªÅ.2:¨ºÏÛ8âP:®¦ŽŽž—\r	fÂÏã:9#c2/KÞ-)SÞ¡µîz-:`T`æÍ0èíH49BpÊÎ:CÖã(Þ6Çë Ê	£Þ+\r#“|»²ãÃ ƒËÔ6»h`ì¸Ãòâ(#˜æ;ò”\"‘£’´k&\rã:L“4Ñ) ï¼ÆƒBáŒÁèD¯Žƒ€æáxïE…ÈÐÚ€¡tÒ3…èå*<1hB@„A\0èÃ¥ƒ¥/ŒHÌjÂHÚ8-òCâã|¨a:C(è7µÍ¢(É©\"©6#£ë3³QS”:C«z:º²»:¢ÉêÐî3H’/«ûol–ÓÇŒ£ª¡XƒšF=!è„<¤€HKw^	kÀ\$–ä¼Hõu?/àÞ‰1«‡Bµ&ÑÈ*zP§-ì›.ZiŠ<B3ÊÞ)Þ Œê0Ê3¤xêöå®Co+CŠ¹D8¿=V¢ýdCsr7?â ËL\r–ÊX8æ104òü· ã®íØh—~Êã ß™çI.%6\r3[7\rwÄå9	ÎÅìˆ^Ì†=M»*Êã\\02§ SRÕÉuPá4Â¨cÞ\"Ü¤á=öë¦m‰&Ý¯M»‹·²Œ V*÷–c¶­ è\n7ŒÃ0ÙH&bÅ\$\rˆÛ-7C²µÄC0Þ•ƒ}|&N(Z+m™JÌnƒß—oÈë@–„\n ‰¨øƒ\rÈ¸Ðž )ÈØ=B=Õ Èg]ØvH7i9\rÝ¿räwòƒàø|'ÌyUæy°ëz(W¨7zÉ˜†ÂFP7šcÈÏ‹•(¯¥\0cdA‚2i\r¡ÔŒ¢ˆO¡ü7a‰˜è]€‡ú=öDWŒùŠgaœ9†EŒ¹Ëñ,'Ä 7Ö\\ïàÁ{ƒI]Ò:e†­I©ê@µ:¦vøòJt†K;À@ŸSøeP*\r¨e¢”bŽRÉI%(FÔº™dÊq¥Eä~¨Õ+qU\réV‘ÆúpÃr°VDÌ@õhýú¹¦µ¼ƒŒ‰Ë')æå[‚`Â©ñq&F’s\"uB€H\n\0´)’Õ4f²ÇV¦ñ\nº¢¶AËÑ3/*@PätŒQ?Æ€”âtçÊÙ””ˆçBœdLã÷’2NSJƒ©*Èè(* ¦\$ò>Ú‘ ^@¢Xü„A•‚ç] +0aÌ’nõ Á>(h‡¤RNå FšgU\n-x_Ã’.Žü™;ØÈ`h)™…r8ûàq³œ“XûÌòºjØ¹!‘G—³ªK\r¢Ú)æˆ¿ÃVšJŠÑJ4†‚«é+*I˜P	áL*Ö&B„„(Á¼¥;ÃSÃÓîŽ”ƒrŽRJX \ròÑ/ÅêoF36&’'„ò¥£SšÅhM“hYH\rÌýjWF•øL¤ÍpGð@‚ P4/HŒºd\\lR¹#æÂJ‡*zòU[|}ÄÌ#0pÈ†¼LÆ~œ\\‚p \n¡@\"¨lB¡0\"ØuîågøaIöÉ@ç™º·m‰1¡\$°ž¬Ú\"¤ÜžÓ&¤5:¢¶QýS´O‰ófMÁ,è…C:ÃkíÄÒu¡Y£u²,076v±ÃºÉ0Wã8—{ÂƒÂ3©™Ïž¦aÃKK>ª|ß6ìUa	¯îâx²eh£º)òìËÓ§*™â´hŒñºM2žN”=òh©Nê¾êúFm	ŒpÎ.›Š4ƒY:\rpRÿ0æK.H¤%KæØ#’}\\ƒø+Å<3ÛxMat8tÉàîÂV²Ü6Å¼0Setñi\r7M³­°«<^	þFN¬1ØØÍv¯F½“°Ñi­¦p¥Ñ—©“	aÕÈìë\$™¶¹¦@aÇP\$Ôß)‰`b+·zÍ€èÝƒyüR2S5¬Æm.!ú~È~6Û—a‚ Aa °lÍÙÃ½‡Pàà‰ d®„¤·ÎÄ¹Â›QtAš‚¤·æËó2ë¨Î/\"¦ÌÒh‹J±°|R2!¡)Ý4ºWZ\rYŽr&€'¥n>©=º°:jí>ºu	ÖO	Î¡	FGZ˜m-Y‹å™”gô–¤×y×Âwõª	f»JOaùéµ­õ1Ú„¬á•ís¶u^Ûh‹m\"½€fög&u·ÕÂq¢/óz®O„®‚ˆi!‰-!Ká“6[ñqŸÐs„ j¸T\\a&Õ´ÆRM:‘RÑ\rÆŠÈÀœ´*þŒ†\re›Z2œšCÍœÍÌÆ¾uÌEïÞªgXÛäAUŒHCMó[ÎÊçšÀÎ ÎlFßÞè2W´ÎŽ÷m‰Éé˜¬ƒtð@K:	[&}7ªóüêâœ©3µ	\"¡^¸xé½¬ñH0–_ØiaáÑˆÝ…p\r25éÓ»˜¦L{û–’÷\0€ªŠ¾qv3yapô\"g‹™ø-\n‹ìåð@@\ne6RÉÛFÃÕ®R·N5,uc_EkOC·~—¯\\ãê½'ŸëÞ1q\\0§†z´2çF¬Ïû[<{¶÷Üß«†^³º˜”É'¼)f”*^Î^Û¨^kÍ}¿ˆæœ[Z@ósWÐêßOmk×—öÆÁ ÅÿYìS][¥w#Ú¿AÔOÃþ·ù¯è0¢øhñÌ‚þ,†¯Oë\0.õÎÂ@¢\\ÃªÎGV`àà‚:\r¯þ­DŽêâÞFÐ„”5§‚dÌ–¥Î¬Ð(0-ö &+-ø<¢ŽÅ\0xªb+cHbp5Ö+ÞBöÿªòÈ¬v0>[ÌXÇÌ€ò« 4,ÉCJ\0ÊZïrøÏëLQ0ê,ÿ.ZÐÂëç¸p°ZðoíÊìÇïCƒ\rðãoŽ¸lÚ(°î÷ìíPì)¬j\\p÷\r¥–îãà#`	@Ë‹PIhÁÍ´„‰óÐü.ºøæ>\"füŸn‘\0p½	Hô\r*èclcº ÞÄŽ@øãcDk±N‹¥îA/&\n†V ¤2 Æ\rfHî|»É*ÏÂ8ûp¶h.V÷„»†uQRõã>±©Ïgk1·Ñ¦\\Ñ«ÐGïv+î·ðüø1×h_QÌ \\ïïq<[‘ê:°ñ­ÔÉâŠÊ1­î·qÅ š:±rFeêÍÂšÎDÅZÿòL\$\"Ð	#é\"¤Ê!`É1C©Ä=à®\r\$\nY¨h] A¦Vª Wm,\r=&1v¯oŠäòn”GbfGæ•ª ²LÎš.8;H‚Ë‰\\»£¶#\$¾ ë¸Xò`'4Âvýˆ‰ e˜\r€V	g?¦(E£\n;e @ðâZ*‡0BPPV ª\n€Œ p4ªvBÐH0m^æƒ9íîßm·'-@ÞD•Šâpp¼ÁÀîœîÊ€n¨\$í¢^2p m¾Àþecæ)Râ¤ÞŠ„¬Ì¼l#r6Ï3Çî£§‘-€ç)R-Ä~Eò	‚4I`š%.~êÊ=äŠ]@Ú:ŒÂÌlU	Ëzçâ:†BàO\0PYƒÊiÂH.¶êŠÔm‚xd ë‚:éâ:\r`Þ-:s;s'’,)àP‡„¥8«Ÿ<Žn#³¾B¥Ó´¬ð×Gt)‚;;NÐ9¨†¶ÈIc.(Ì)lb#`ñ@ÊpIoà8GzoÂ¼¸ƒ30Ë®`êïk?>Œ\rÂtKKüº##%ãSä”Ž™9cI9¥š\rÓ ¯6`£v\\C,X‹Œ§¨:«V¼”rµf§<‹qšDã¦U†žu4%ŒÂ#ƒI!€/b";break;case"el":$f="ÎJ³•ìô=ÎZˆ &rÍœ¿g¡Yè{=;	EÃ30€æ\ng%!åè‚F¯’3–,åÌ™i”¬`Ìôd’L½•I¥s…«9e'…A×ó¨›='‡‹¤\nH|™xÎVÃeH56Ï@TÐ‘:ºhÎ§Ïg;B¥=\\EPTD\r‘d‡.g2©MF2AÙV2iì¢q+–‰Nd*S:™d™[h÷Ú²ÒG%ˆÖÊÊ..YJ¥#!˜Ðj6Ž2Ö>h\n¬QQ34dÎ%Y_Èìý\\RkÉ_®šU¬[\n•ÉOWÕx¤:ñXÈ +˜\\­g´©+¶[JæÞyžó\"ŠÝô‚Eb“w1uXK;rÒÊàh›ÔÞs3ŠD6%ü±œ®…ï`þY”J¶F((zlÜ¦&sÒÂ’/¡œ´•Ð2®‰/%ºA¶[ï7°œ[¤ÏJXë¦	ÃÄ‘®KÚº‘¸mëŠ•!iBdA\$šž*¬M\n@Pd0ÈÂ0œ7‘ä7®‰lHæ¡®‚W/Jj°¥(\nï>Îr¸™Ï¼bgfyª/.JŒ®?éœPEˆ¢WK¤rC«…º¹)ï”¹/ª£ö§Jª\"½\0*®b×§¥ÒªÊ;\nšÖÁ0¬:Ø·1Š\"¬²ŒTIF™äl–Ìh¤ÊªÂFtŠ.KLê\$ºË@Jyn”ÅÒ\$m/Jé4¤J¼˜%o<Ó¤(e­¨|¶Þ½‹àä\$Ú=*ñ€¬4ŽC ê0‰GLÚzžäØ1,ú©îb\nƒ¿œš¬oiœÙÓÖílèWÔ3[uArLï¼ÕjÌ^ºíµL¥,s{3Šúq:Hfu¶Fàª¼z!\0Ð9£0z\r è8aÐ^Žù(\\0ŒƒhÒ7£\\7ŽC8^2Ù˜ð:fƒ˜Ò7æ¡@:9ˆÊ:cbøÄ6#pÖÂHÚ8\rƒ(Ûšà^0‡Ájc Ð7Œ™øÞ£˜Ê\nbˆ˜4ç\rû\$¹k1|ò%Ér_éR@P+ª~úî2eû¼]*^úúAIDå¡JóâŸ@\\\n-Ã><D+Å!pä¿Á×:³DÉêçÍF|²é»Ä<ç\0ORuyÂ?‡*°nãP”–ãçu[s‚k¸®MDÈ¿ëÕ@¶!•47Ìï{ìO¸\$hrž¨§Ò†:Hß.@R]›#¨LŒV”7·T²\\y×2õ	À¥³ïPyŒ’vª¢j–º8k–'ùs1L…ÒR9¤€ÖªEŒ3„â4¤AA›ÃìôÒ‰9EÔ®ã²Þ“;Ü?Q9‚ò¥N£Œ{dàV+óØÀˆ\$~i´6¢A	WirzP`™!T€ƒÞa†pçÍË¿Ö¾I\n˜r°ñ9ˆDAJ:\r[ïÑÉ¬¼} ã=ñ!Ä·ÂïtJ.q\0JVøãßÙeD°Mõ%cØ÷¡IÃŒÇE*D÷‚øŠ’±q¨ÌÝÁd¾—é=nå•ê0_[Ï{‡ÕïÀè‰\0’:¤- ®r_ùÿ\"Èˆ†æNëÃ>dJÇ˜rp\nÉ;Cor'Áh å½+'1b)žnq ªQAwË%‹yb7SêiXbˆnƒ:5‘Xuä{[{’¨Öàö¥	)UîÜ²Êe¢N‰Lª+FDËcRåe™“–§Ú[•I;%Ð‰—®\rL yf,\$™&e7˜AÅa…K*‰‰\0“ù)%¡)… Ùû!‰u=¼wLM\nâß\$ÓÄÉ ‡AV,–\$pÜ™'µV“eY®-È¸Â‰tAF[±Õ.eFj\"™zü’»K‰z“Ë™Æ@èõŸ\$€DL³ìŠI1dKr@ÂMPÏbõ¢	}1F,ÆÓcÌ‘2FLÊS,eÌÁ™3FlÎs:g€½Ÿ4„ÑFi\r)¦B”hŠÓ±õ.J|ýµf°€Pä|BÇÕ»µ æI‹‰s/èú’T\n½Œ*”—švÎ\n&2@Ý#cq\n•q>Ñ=ê0×4kå“µ+…Èá¹ª16O5£KÄÂ›3k+É4 \$kÉŸ•­‹¡OV(±? B­‘ÉÊb¾®fº„’6ÕDÛð € ·SÀRâFWÄ¬´ÂòÃ»n ©d•·¬‰‰%mó½â>ø,L(¥2GpŠw2Ÿ\n‰qZ	JM²)3áb\"¢ä*RÊýcœzYðž<&ƒo-4E‹á×I’ÐA6(‚…†ãGd~5–lS‰GD­á4Ä”²¶[Kä•4³ÙgÈãù{ReQ-Ä”ëàÞÜ‹Ü˜ñæv^p@xS\n‘â§“W	{86Œ«»åWdÏ¹DÂ¿(*Ñö4¸ä¶±”úâŒ\$\$ùßõŸG¬t'ŽADXœCgQ2P!Ð•¸˜ƒ*[áhL¿PD‚\0Œ.2HÖ\rúIÕ	`´Ã†¸«F¯ÕÅãÐÆþb&œ½‘v4.JøV\0 ÆÃcHŒì7[\"a•&)Š¨N£qœ³–v¯FB_Wk#¬†u&X\"eQäd(v+ÿ×‹­(žÝ5)\"jì_ÙJPÓ¦²Ò–kE¨å=¼úTŽâê‹òÉ ÓK^pW,pJgd×ZC›å«(ßØ`m6ÖaÝæëx¹©cQ‘ªD2…lD£ëÈ³ïü9ŸqÂ¼ÅÃ\n'ì—n«‰Ò[T²«Ðð½mÒ­îçG¸tmŒX\nœ‚MÈu¾5à:ZÌdçjáFMF®AÛ•]Ãn1Â ç	 ÊÔHc:­žšþY+ws ê¿h2¡Q9Q¶œòIÜû¢`˜(`Û•Î·C¨¢Ýž¯sˆŠ¡°õFªÕ™Ê£µÕoÍÛƒ:ù!]¿~‹Í‹^ûwŽcHgž§Jî™-î?JiT~øÈ57‰ÛÎþyÍþ\rXôål@§¦&¯ÂQm+”\"±úÄfÖÏA3Ä“ *øÑBhGžŠ¸¸˜|¨wÂë›žHF¢ŠAìäÀš…rÇëËúÜï(³ùou\r÷A1ùO+æ»Ã*3´œìKÄÔpD=,û‹mÚéÉÈ€DÝzŒôPûó­ÙxÈâŒq.kÃ.*\0 ¨\n€‚`\0â¦Z\r Ê¯æ‚làÜ\ràè#Àê\0àfpƒ\n[d²Ïœ‘ÂÈEEhøÖuà^2l+l;C&uÐP¹¢¸æíaâŠKðDÅ\n<Ž:[¤0\$Î IÖ›C´+‚zçIF7†µ¤Ž\"‰ò™å8BòB¹bzn+¼ËÐŒÐ{ëÖ-¬ÝŽ0ÎPŽžb¦²\n˜JƒÀRkjRÃ²’\0(HXËn¡IìâQ¢­i\nÂ¶pq\nu\nðz™Í`t0fÓï˜''_ä*ÿ°Á4Ó‹hüIt÷0èïI'0fõŠDG 8ìP1)\\%\r²Á•ÄŒ†«.U‚³BäUâÒ/¬HÎBÌ¾Ï–DÑH›¦¢ËzåÞoÌv¤}\rB(i”ÒdÆÓ)I€î Ä‚q&™kîÓÉºÀoŽ¤ìÇ#Zçd´@2Å8¼iÄ¼È0sð¢±n'P}Ë\nædŒïD¢Þ¢©g¸ŠÈ0+öÊ…ìç,ÁçÕEÔ¶C„å¤X/%b+äº„åR’FðgNâbèâ£(âä0¤² I'K\"k.‰ððBÐ¾²4þ*Kî™C²!cð(âÒ¼\"@èæí¯8Pk·#Ž-¢áòfódX7¶ˆoFNä/%ò3&2zs’jn¨Üä„VA²Œ7ƒ\nÚFðÚˆèÝåÀUÂÜ”G²÷)ïÊô”ë|ˆš)…\\ú’†ô¯n›H~âž‹L@\\¨]ÒÌŠ±öm`a`â´)Arƒ-/*t'e0SGvºÅ„ÿÇh]	HºBÊÜÂÔ(Ù¯ÈØ.NÈƒ\"„­	O	\$jJ\$UhV]¢ŸÒ34c)¯òIrE5-„âM°rÒ‰0“@~å\$Š’á3’q\"òu\$“tD.sZÿá6£'s†ñRìÊSö¤*®sc*Q¨æÑ¬LÊLpãý*é ôr¸d1JC‚G5Œuñ9	Q;g+;«+;ðû“Ä7“Ép„¹­ÕÐÉÐ>Ó±I¦ò,Œfø£ó}\"Ó?50› ôò;@Ê|Ôb((w-#í7ô÷ô%¯ˆ‚ô)“ñ•8.CíŸh<¡Â²õÌ²ÑLHOObñ)b;‚³\rl°Dd¤@pÜ°ÌzŠ11¥ôr²-=ñÄÏôxëo>~^ø8BçnÃ”oB‹,Ñ”šRÔ~°Ô!D‚Î.¶kÎÓ|-´	BdˆÔEúï5)R~\$Ï`5¯dûÇ¸ÃèØLç//¡J§l—rÞfüÈ,s:3l®R‹EUßç pg&ô#­3	Qðß8åË)Ã£:³˜þõ75îMRï0}åÕ	¨,³(T^ô+“70b°á5Y6¯ICu=8Ub,õTþRlòßEVs(K4ôÊóU1_Uh˜]BE5Ó’äÕyYoäú±PúB(´§¾Aµµ	ÅnpPêðÃU —è45Q®»kDƒƒóPsÞ*³ã•'Q•-]ïØ²umCS©9uu=ÎI^ôÉX9E5‰C5-t*‰•„EÒË`Ïlß³|^²9çZ.e%gÃbä^äUCZ+w&ö\$8ö «Ö\\ð„¡ì‚2€wNæØKÊ”\"Bd\$«7ôR¶aO)FÏ©¹ZU4Š£C–t›âš–}f•GQo_uéX³‡¶ .–g®If²cÖ…c–fV’¤v³Šq~ðS=R•?&BgHÏ³h5‚ä¶‰Sö¡:H‹-vÖq§T¶ä²+vØÝšÏ„Å%UÖsnB­pD4¢Uó‡C¢ÉqBp–TVãWVçQ\"jl&E55›kVÞŠP¢ù7?-ðåjýçDþ*—)ÞL…º’uåpÖÑWRev%â¸saÓ§qõ+w/øÂÈ;DÖ?XW.0ªåˆ0urý5ÿ*ì€ÁâdN¿]„ÌìIÅ@íú~åYB>³øl.YÖ&¤˜³Á¢we}|ÖHZ7”h#jG™?¤BÈ#Ð2w¼¢1 w^	 ÂfpB<h¬#à¦i\0ìløèfÊï“ñ±ž—Éu²Nð6™ëe8)|WÛ81\"Q¨2.PªO`†àØ`Æ\rŽ‚\riæO„K,rßVXk_D2™_L¸Î×0*ÑvÐ\rçGDH=ÄLDtxPÊ’ÌT5Y\0@\n ¨ÀZ”‘%p”ÑÒX-Ò^™Óû	8K‹‚ó%²DI5Ì41‹²%×òÄÝ\r¼{¬²sl ö—5Y³9ÌÂL¤Ž]Iµ ÷àE¨0ÿâûôj“‰srpî²\$Rä·âDËDÍ‡·ÌÂ!,½‡‹Óe´\$lx_¤Åd2æd\\\$þüÏTµs•J!MNÊ¯)€\$Ð9!¬5L¯ê…R!(Dü\"¯Ã;)/’’Ž©ËGqü¢½N3Ee8+2h¹%”ço¾•=0ÒcE™¥'ÉnÎEgÑ›Qš#íNY¿p¶Ï0«Y›yÍšy¾'ð¦P1ûwöãœ„ÑžhCÄ+ÕK´%gÜ?]/èoú„ôª€Ia*îÜÛDä(ò¸ÛS\$û%ùLÅþÍÛ¢·hóË–T:/—lâ 0æÌË0\\GŒP`Vë¸M\"¦ï7_5yEž=aès{LøHEB§®ü-Òñƒ­-–\$–l€U—÷­òF¯üÃ'†qÏ1óW3H»©9¬K:˜Ô±?œ82ý\r‹j©§jå™O‡\$é«÷'¦:S“•CÂÓ©’@¤Þ(²¨5ì%€";break;case"es":$f="E9jÌÊg:œãðP”\\33AADãx€Ês\rç3IˆØeM±£‘ÐÂr‹s Òv7‹DYT˜Úaa¬b¦ØâE2H%’é„Z0%9¦P\nÊ[/Š›¢¦YôË2†Ìh5\rÇQ¸Òn3°×U Q¼äi3ÙÌ&ÈNªt2›„hñ„ç2&›Ì†“1¤Ç'Lç(>\")»ÞDËŒMçQ ÂvT£6ó±¦>g‹Þâ§SÃx½Ë£ÈüÈŽu“ëŽ@­¾æN <ˆfóqÒÏ¸”prcqÞ\n)çìæ}ç#u› Ò]üri¼Þ&fÉËvIÁ›æà¢©ÏP·Ùÿ‰Ö :›Œ\"\n€Ø¿2Ã´4¸J¥¾ê à?j Ò«&B Ò#\n\n³9ÈÂH”¿›‘\"kPÚ2²àPŒ2¥¯Û‚4-Ã!Œ*ôO4@)9MàÊõ£ äa•±p™¤Ã˜+\r)+pº0#£âþŒKò@þµÒtŒ)Ä+œÝ½°ûž!¸‘ô¤œÅÂ¤þJmz6	ƒzâ7:­òPá¸£”ÆXÅÁãö41ƒ0z\r è8aÐ^ŽôH]«<H-Ã8^¼ÒcÄŽ8xD½¤í@é?‹ëèÜ5„Að’‘£ñŠã|)F:Eƒ#U¤˜£!¯	”‘.cHôßÎÒçL,ß¢ñðê1ŽˆL\\À°l+”4¨\r¦Á0Œ3~ÚEÂpê2¨±Ã+9á-l1+Àubñ#L`ê6Æp’5ÇŽ*O	#pÆÆURrV:ÉÉáBã8`Pˆ2¾c¨Ø:²çqÙ(ÜÄÝˆÏÈÇ\rÈ»Å±°Íøæ°ÃI†YÎsš Ñpž9FLB‚9ŒkËðŒ³cÊñM«@ÓhÖÏêñK9âÇås†:6&£\n=˜0ó„À›¹¨­t&Cn5;7pRaŒÚ¶òQ3>ò¤Õ#Z–í®£7Ö!±–`ç¸Œ¯Z¼&óEã3íR°(42HÕ:H“7b(ñÅ± ËoêOø(í3O½îQs)\"D¸›vÍ3‰:@7ŒÃ3É¦BI° ¨¾U–B ÞŒ#s‚üÃÚZ.9ŒØ“ý7,ã˜X½ŽNÂ3Œ+;³XVÔhÝ„¡@æÂ#xÖÉb˜¤#;#²ò9Áp@+\\cf,•¢ÃsJßˆÛùµÍ	PÌ·\r¸•þ˜º–š|‹‘äXf¸á@@0ÅI>IÄÉ,ÇþaÃ\"ÏF!…ã¡³æLK8-éD‚™ÀÆÍ~zk‘þÒü^	@p/ÁÌ;–ålU‚I9O™=ÔúŸÔ\nƒPªD‡u’R*L7)U.ÈÒœJyP*%H©•Cy<*±W+0¬Õª·&ïl±@à‰Áá&L<1%šoÌðb4Í	‘ƒþF2˜d&`Ç™ã‚U\"9Ä\"gLüŸ³ûÐ	yŽF¤(€ AC{5Ä`€RQˆ0aÌf¦L’ëû8\0¼ŠÁó>”Ê¾dT³œ0äc€a)aáœ˜8Î¹8Æ¹è“ÒE‰‡\$oÊ/‡%,ÈÛæ>¢ŸÂ½ÙäV&A\$ˆ‡“68 *LPƒÓbƒÌ˜eoù Ú@QÄ¡Z(>FÉ´›¨Ô  Â˜T~d™4r8ŒH©‹w%ó#ˆ\"Œ:&Äà+1Ø) –TgÖS¡…!	Ù¦2É”ff{U?Áø£Ùƒ8 kp\0±PÒ~Â0TóìË²Kféêv!ÈÐ'[\rLxD‡é#3ÿES€A	“€!…@«P‚HZ!HÄÔ0„ÂR©eÔ6†#ß©ò÷FdRªÕsú	9Vd)6BâÑ\0PO}¤ceA¦¤®S‘Õ·\\Úa\rG<šSônÛD žoÊR–ê*‘¢RB®iùSÈô£l±È¢¶WðA`[òUMnHßÙ‡šÒÚoÁÀ…3™F‘‚²ÿr¬ˆ€eŽ(âÞ8Ñè+\"HEŠ@:ŠÏ±1>!SbÏò\rRÒ	Ù—ª¿!¢µe5âµëtR\0R8Æ1œ9ßOî+µr¥øè,&zÕÃƒÔ¤}h#šûdkws¯…ñ¬xJkÑ%'€G*“Pî‘Ò\".\n—l0i›#n7åžÿ²&f\\ËY¥œç¶Õ¬b+yNtâ@‡\$f|*NÉm‘a˜J\$žŸ47SòA/c	Åg§Eò\"àŒþSƒ´§(òžÖMÅMaµ¢öêJ\$Éoi!P*†x-æ¥ÓM ß5\rc‹†dÎSÌbTCR(aâ!æ&‹—€/++ÁÏ™`Þ»Õ¶e]Ó.±)é–2Õ®‚Bl®rJÃ2(µÄÄ¦µ›nYyl×<|Èáó19æT¡’dcÍJ#´—8h74Ž™j/G\r¬>R­¦ªcçí»å}¡Ü¦°ô\$f‡cŠ˜'ŽÇSgÛe>z:°™êwÏ¥ù“\ráÝÄÒí.ØŽ{Š-Äš 7í‘bÃœi<‡“9F2.NÚZ-Æ\$§B€ÌÍî%Ü2†+’uñ¿;t¨82N³4Ù~Ûä[*›µ”ÆäAÿ¡;Ð…]@#+-ì6Ôê7rÖù‚Mk™Ð;\\´÷ÌÊÉn`þ#¢B±x¨“=¡¶JkôãÅ÷Š6X!b/ß\$`nL×hóÕU¬°\\\rw'í»Rün¡£9Hö0q×X	+)8†ü’nîƒeY\\æ\rû 0Ë³ÍËs\"¿Æ&-–°§Á˜_[Í 2†r¿²ø?`¡ø´&ˆ\nj§0±.fÁ‘‹Èyok°VhŒÂ¥Wyr³/Ó•÷›=c\"¿[ÝÅÎ7”ÃÏÖžð­÷¾ø«Õá¹.ÓÁ3}]lÿ—È¶éÐ¹Ó5g}®Ÿ.}Í¾cJê\ršxÁ—Ï‚`¢ü)N°·‡î !úû‡ì|öžÚ£„Ý{ˆL@g±\\Ý‚ÑÁfçÑÊ^ŽÛõVH=¯´&Þ?Î\$8€¤“ð^ºî}¨ú…|;¯VA%_/9çHª}D…çQœäÑL‚DûÄÚ5@€Ü¦é>Â¥òãä¨ÁbØÁÆÌdjàNoÎìKð´F¼äÎòWìÞñ&¿/~åhÇêL[BfÇ&íë ñP@'o‚øÇm)ð0N7ðTÇL|rbQ\$œ¿¢Ì­„L,ä^‚c%M8£„z7æ°@DHÆ@Þ•¬jÇNAgøp’Æ…p\"òPžÆc\np˜ñ¨KâPc­bi¬ÁèS—ë8˜†<»0Ò4p£#ÁN¶oÆ,çè}\"L­þŠO	® ±±mbÕ/µƒ÷\n¯uÐ\$%\rMGc»ñHÐçN|B/¯=Þ8Å÷\r±@9ì0’ÞKpüñ'ù¬EðqVÃ1N>0¹Œ%YcvÃÃ,6Ûd\$o%÷ÃžÈ\$	0Z=…€ÈOs	1q­þ/ÀÐº&.FN•°ŽqLh7eà´¢”dÐXÏCìf´ñÆ/+Ü3jèq¼…âôIÂL.†Íì„äH ¢LZ\$®Â…µ>%(¥	>Ñ¬ø^&`§å ¬÷„|\r€Vƒã‘–±Æ*.câÄB,á\0ä~\"dÇVCìbðyÀª\n€Œ p}£†0bÐ&MÎÉHØÐZÕÏà#D‘OZÒ4#m&ÜÈ²§à?nfÁÀòº+.HÑ^ZãØ8ÃÈg\$8/,LoÌhÙ²4n¨XvOZ\nMä\\-F&'êÊF#§,ç¢ê)æsÂ.Ðí\"?ï„6k¶#<úÝ\"ïê/Ë\$âƒJDˆÀëRî€¨b²+´/®ÝÉäb?/Œ£\$‘#ŒQ ôÊnR‚[\$ŠFƒìmîè}¥91†2IÃvh*Î¦Šð\nÊìÓXoÏÂê‚gÊØ?Â:1’‘&KQ)@ê^êÒ.ëv?R¶7kÀ!D¢7k`ÝãvàªNÞÀÞ¯\nLFþíŽèc*j_“7q\\q*dftEÀŠ/R,kÒ;+þŸ\rþ	\0t	 š@¦\n`";break;case"et":$f="K0œÄóa”È 5šMÆC)°~\n‹†faÌF0šM†‘\ry9›&!¤Û\n2ˆIIÙ†µ“cf±p(ša5œæ3#t¤ÍœÎ§S‘Ö%9¦±ˆÔpË‚šN‡S\$ÔX\nFC1 Ôl7AGHñ Ò\n7œ&xTŒØ\n*LPÚ|ž ¨Ôê³jÂ\n)šNfS™Òÿ9àÍf\\U}:¤“RÉ¼ê 4NÒ“q¾Uj;FŒ¦| €éž:œ/ÇIIÒÍÃ ³RœË7…Ãí°˜a¨Ã½a©˜±¶†t“áp¨QŸ–lÛï7×ŒüÕÁ9äóÐQ.SÃwL°Þìëá(LŽ¦èG›ye:^#&X_v ¤RèÓ©‹~2§,X2­Cj€(L3|²ˆðÄ4Œ€Pœ:£Ô  Îê†88#(ìÞ·ãZ‘-á\0000°€!-£ä\nÉxä5„Bz:ëHÖB8Ê7¯èµ/âd\nÃHä©¦@P‚…È/ò“\rã{OŠp#7Á8Âß\rÉ2ÎôŽRªß'Œ’ŠF‹	ƒzØŠ°L%8-ã¶ƒÈ(jøÐ9£0z\r è8aÐ^Žôh\\’;p \\´Œá{éK\r`Ü\rãp^4ÑsH:PbûdÆ\ra|\$£‚ Ã xŒ!óðH-pÞƒ´áŒ”ŠbŒŒÖ&¢²FÞ1“Jë	8*“~Â¨£Z¦¢,âjúß²I Êø…°’\"Šñå¬ª7íŠŽZ­¤¡­@TŒ9Ä2PÔ2¢;ü©!-ìŒŽ‹8¬ñ»+‚<ìX0ÑtœóÈ;6>*ˆúCÀP‰@Œ#® 2C`ëz;Ì’.õÚTå;HÊ•\"	ã¢t2CE¶•%ŒÓÝ¬[2žã£ (\r2Rþ*EêT4cZ´ƒ¶–#cCeBÙ%#˜ÆÆ0Z(;h7Y­ä-Œ°kR-x:\rÛ~Ÿ©£rÿq¯Á“5JkåÈŠÈwU§vÍ¬õÓu¨’t 2ÊIÒ+£ha’«]Õ‰Xä’B*sÉr›í|£jo&çÂMlóÀEúVEˆEì«/%#xÌ3#iêk6ÍéqH67Ë„ªâ±ƒÍ}MŽ£ÆÂc64¼MÈPæ4Ã—|0ŒèËØ…?ÂóŒ¡@æ¶ƒ|6Œ*˜@!ŠbæSØ•Å,3IŽ-#o6Ý6+ƒÜ&^M\"Ž–£rzaJ1´x¥*žÅ:Üë*¡õ<‚ØûÊôN\$2“RnaP!* !Í¹0@CÀpIDúf‚PŠD(¥£”(JLì©e=ÒœSÊ€Ã•¶©U8nU*­Vªóè¬•¢¶)m†…viŒóàD@€©¤ø	ê±€F&2r)š\$„\rW›ö<‹Ñ5¥@§—£äO d;æ- CÍ)ŠÑ‘ÃN¶ß	T@\$ßO±…F¥!î9SüËJ€d¦9Ï—²n€_<%¯ÜßÆäù ¦4È8Ä”z¤ü€ ’EÉ–”ƒ™Ö#M1¯\n\08±ù“+ò)¦K“èl\ræ\\ÇwÒi	¨P	áL*×>kâ… g°†’dÄWd%=,xö;fe*Ÿ{ŸBp—®…ÙeZ·%A 8Ó¶ƒ¡”–M\\ö™•Íúà`„À@›À€#I²b¢­fñPøÌ€Ec¬3F½ájrp(Å¤§†sØˆƒÊ<,‚‘™.bÞÂp \n¡@\"¨Ye1&ZnŒ—L\$Ÿ¢àÂžR¨i¤4¢,±‰™T]ÇTà\nC²ÊÙHgKÑè¶kVjÙ2\$Ux‚¹WL‹ñp=i¦@·'áIªhn„èƒÀrº¦ù;éz4£dGû…]Îì¡+èB‚eeÐOT4\0’–©Ç²uÑ,v–ƒ*®\r-]~©Ò @’Û&\rÀé[¼Ã‚d	’6¥Xä-!H0	Ä”Ì¢Ø^­‰\n¬~U0*Y ™o.7ô½@b:PÆk‰Þ€„)½âbøƒ›ˆ|YðÇjÿqÈ9¡¡Þ¿>†\\ I1¨·~Bˆa9Ya62lÔ,P­Ú´®õ±G¬ %ëõŸœ‚ŠZQ\$3š@ä/ñ*ÀÂ“#P¨‚HGá)#Æ¸/	Ó±\rtmÛ†ªÖEßŠÇgö(ÁÇ%¨„B™J=„P¬BpT\nhò¹!—5aOm¨w4Ø*†½ŽÆ•Ö	lEMK’ºE®†ê´@Œ!(´¬¿¯ @Áõ—h@¿µÊ¬s_ãþ7eæÒ_‰¥%©ÌqÊØ—°—Ñ¥Ë*‡ôšåä9™ò´ŽF-†µšhe!TËæ/åZ´|k¾„>:RjP>‡YÕL“ŸÊÈ±L#upÂ\"BJÊõ%2‹R’=NJ&Ù<dŠ¾¥™AŽV¢£Ý³[“»¦ãl-áB0—¥±`ù:'§\$ò2°FoÅÚH¨ ›æ=V™øu3&âþ\"ÚBPÕÓ¨úÀ—æ¨\0É­»žïr¿ò§ºêò±.»h:òPtÁp½\rKz×^ôI{¸kž·,ªê{4y8ÅQmè­õpu	cs)]ðî¨êX\n°éNÖ¥bÓ_šBbpÎØìnô2™ë.‹©†¢¤²¥h‘W(åü®¥&,IÉ\\|®½dêlI^#½˜Ü•Uöõ_ƒ%@@”B&’Q‘àNæØõÂóýý¤øùê‰¯«i(ô…`ÍŽà5Æ·õÍû×¸¤r/}m)·…¢ÞÈçB/Û±þîèè»zìëµæ§\ròÝ{ï|N×pïÞJ'ƒ><,†WÜï¥t¾+JØ·½R½TÑ¸tÍ¹¾¾H\"Õ«ö´w‘ÎÏß:Í}F>\0ÑêAÁRÐ]\\â—Þ^ý_¤À>›„tãÚxpL81ð¢à¡LÚQ‚1d#³àøÌ7é/¥5Ø¼„O0|†VˆcRùŠ2Vs‹„Ã–r¾£'fƒC™#w>ù†Kç¯ Z®Ýõ˜\n–sP Z¥Íºªeàc¾¼©<[¥¾\\/ö®õM\\%0\\\0S®úó¯q\$j[Ð)¯€/l~s…³08\\#\0ÆDÒsNßíÄÖ°P8É˜çÐV>.äïð_Ozö>‚Å®\"°o'es€çìjÆìrÇ†<Û„¨À< ’z%Ü%ðžÜfª£y¡xÆk¾£òKÅÀåÏRáËòjîZ`1ÐgÏÌY\r0Ç\r°vÛªdŽT€«\"nàá0Ä,ðB GŒˆPò³Ñ3ðÑMôz-Îé´NbH7ðÛîÇã\n/`•0ño†î“¤ŠwqD`DûPÉ®,û áÑ3ãÈD°c=L\nŒ_¤ipÊ/lÍ&ugöO2~n†áËv Lÿw.Ñðíl)Q„YP„59L*.Ã,6Ã¤œDÌcpR\"ÄºAQ%ÏQLì=Ä¾7ðeF7ÏÃ§ƒª¯ ÀâÌÀP	f@ÈÃÐü]‡mÊÌ|\0Ø­0Î±c¯˜à) mª¤ùpâ‹Œ_P+\r²\"ß –â€Ü`ÎžÎ¦~Ø¦Þ #YcpÝã\0\$C6o	\"Àšó’\$! ä^d Î§í\n¬äÐ9ý€†H`Ø`Ö&eÐDb)jâ.h¨=€ª\n€Œ pƒàÜev9¢jr\"Ò\$¦ŒËÏ>\"jââ8c¤Ä'¨>?ÍÚÍri+ Ì(è™d2ñ‚þF2|Ie(-˜',‚«n(BB!Bv`ÊfM#ãœýè°^„Ú\$†½2\$ð¤‰f¼Ë|Ž\n¢W†4q.s\"ÎÔs¢7|4ÂÊ^q\"6Ê\\qðqÑ+-Hö‰ ŒíVS[6n½ò¸b@34%\"æ˜àÞú\$ëÁ,íöc¦[+ eŽT!Ýªæ@I\\ˆ§ˆçÂ´GYI°éÊœçNŒ#“ÄieŒ?Év(jˆ\nD ªüsØe“\$Æ\0,äž&O²eà–S¤† ‚6å¥’hsNž\n§6Ê)ð€YG‚Ñâÿ?³l]±6/Ì0l•+cÇƒ|1fDIïâ7ÊZDBÞ	\0@š	 t\n`¦";break;case"fa":$f="ÙB¶ðÂ™²†6Pí…›aTÛF6í„ø(J.™„0SeØSÄ›aQ\n’ª\$6ÔMa+XÄ!(A²„„¡¢Ètí^.§2•[\"S¶•-…\\ŽJ§ƒÒ)Cfh§›!(iª2o	D6›\n¾sRXÄ¨\0Sm`Û˜¬›k6ÚÑ¶µm­›kvÚá¶¹6Ò	¼C!ZáQ˜dJÉŠ°X¬‘+<NCiWÇQ»Mb\"´ÀÄí*Ì5o#™dìv\\¬Â%ZAôüö#—°g+­…¥>m±c‘ùƒ[—ŸPõvræsö\r¦ZUÍÄs³½LÂv4›ŒýK©\"ÑÊ[˜–±GXU°+)6\r‡ž*«’>n?a ¥&IYd„—ÈcC1È[fâÁê„U6©	Pœ¶H*|¡jÚ®¬¡\$+TÉ¬ÉZU9P“&—!”×%E‹ðö2Íz˜'esÎª 0“´–ˆr«41\"Èˆ=Ò	P¥?Ä:¢‰–oñÄèR@\nÃHä:£ØÒÊ’\nÒ¤lœd¨ª,\\¥²ïªbÅÉ„#®é½i4ÌŽÁ,òZÂN‘«úC³S*Ë@–1\"K Óx0„@ä2ŒÁèD4ƒ à9‡Ax^;ÓpÂ2\r¯Ê9Ãxä3…ã(ÝT¥T9#}V ÃSŒ£¥\$/ŒC`Â7\ra|\$£€Ø2µPèã}Hè4\rã%j7„¨æ2„˜¢&\r5tR¨ÂŒ-C¥sú:C6NâJ†¤,(Ë°/‚­G®ã4Ý3ÍâJÆ¿®À”IÛõ58%z|‹ZÏ­úU!.•aó#ôá¾è;&ÀHK\nôˆ•¬:¸ú_­ëE÷£®Æ©!²_]ÊâÒ[dPœ*“08ºV•c¢Æ€ãŒlNÉêXÅìiNŽ +L)ÅìÂuªl|¦Å Š>ö¢%SàQ„û½n¾®•ëÑ4˜„e;5þá&íó3[¶ûŠ*z‹²:.ÓüìÂŒóºÓíÓ¿ß—ryxÆ÷£w¥2œ[ky¤s'ÊeÜ=ª3øç°ˆ\nÛª{E6¬ÛÓû²\$:Î¬L:wÈD¸­<+¼âP©]\\•ä˜f±½ÍœKrûxÙ\$¥¬ÿ³È<Cï²\"Ÿ°={UBHÐsSM,y%<RC½é¡a¯é›]ÞÍ´I+ôB%mî5|‘ŽH3{*êÎ÷NßO„Ï›GÈÖ†ÃçbJ>ÇÜá\nrB~„…û.Çðr@PC\naH#-pÖªŸù=>ºÒ aao\n:ÑrL›\\aÈ…ï@ÖºI^é7pµ5D‚‰ÐA»BHÛ•ÃôBß9ÿ e^°äÊtÑYÅD¦ÅÀ=DÊ@_!ˆ28“ˆvŸÍ¢'…\n	2JgA‹Qª=H©5*¥ÔÊ›Sª}P†åF©U:©Ua•Vªõb¬Õª·êå]«Õ~°Aó/'n~ b ³rkŠNíy¼—œ„A!Q(x80ËáÛ£aÄ¾2ÏÈqê_¨œÔ“CØT	Â{3öP%0eD\"FèÅ£ 6ØRÎ³”ÆšF0ßðP	B ¤DÅ%#ç‹ä 0S\r	«—Yè?TžŠS¬\$7)\nÇ¶èg\nn9P ¤”²šIº4]\$Ì¬ ×üA„Y‡máÅøQf“Ò²X!àÀI#Aä7‡P@JÖ\rÁ¼:µTµ–˜i`G‡êCÁÈ7†Ð@U¢JÔ4B\0ÆzÛ¥”h\0Ã çY’a	ùÝ¦ÕáÑ‹yD°™ju&Pl’s«ù¡²É3+-B¿æÊYi\$è1÷”öFnÙ2†FÅ¼ù¤Î•NCåxœ-à™Q§1^a¡SN›ß\0F\n“2'4‚&É\rDI3¤y¤CT)aeÅ…Ô/‚»‰>JÆzêâÎH&}€('„à@B€D!P\"ÙË<(L¶‘ª&•ÞÇZœ¹MR6¦”nŒ?ÊE¡È‰¥‰og©ä\$ˆü°%.îhA7‚~®IÄ\$ñAÍõêrÏ•´‚v¤Fe:Q‰[sNê(=©¥O¢ö\$• º¸z}ž;ˆ)éÂÝ×@¿]¥ó»o¹Ã¨~I™Å`¥z®4Än.Ž’W2bØõ°`ƒ*Æ\r!Œ0‡HþÕh®%˜UFuŠ«0šE\$„Ut8ö\rbvN‚åXÂ‡Jw‘ÎTä(iñ©^F1¸'\$ˆùYþ(ðšéÜön…æš€|§Ä@¹g&L!@—dŒ­ÁbºUQë\\]k´ÏãÆÜr½\\EéE\"Xgs	ÌvM¦xÑŒvMÌÇo.ÐIpì‹Ó²©¶ËÛx!¾vHÇ\n&ùd~t\\©\n%êÆLûz‘ú+&ù±Aëû oC²\"7å”œYyhÂ Aa QåFi\0 Vër‰ÑPæC€pTÊ¸2£iÐ{ñI…„SXyldò»±iœ®» ¶ÚÚé{aFÃÙÁ\n`ƒµ\$ŒÁÊJwf&çüJöuQ›*'šç©öV½Mû6íñ¸Z[Y8PðUZúï¥!Z{%ç\"\$Ö¼Á¾Ir8š[X§É^q*\$à|–!;ÆcöˆžHá–+wæ|óX°}·­7XS³euÁ€D\nÇPck®4£˜G.âví†ö¾ÎÕ`!)9d¬˜ª6L½—¿›°sÕpŸ!i§äêinêÏHè‡[¹„µnr½çö^éÙÏ™ušØ\\|óê6É·åöuË:LèŠäÃÇ2ÌnØf‡ÔÁ¤¤žpùÆ]µ;UÂm™^çIí†ó6öWÞåsH¯Íh8ÜóM{fþ[,3õææ\"–,Ø²\0¢Ü“pSkH,¿nz¤ä¾¡»ºåÚ~	òû'Mªg9sÔôW“Ò›í7Ö½ã¾®ðì8œÑÓ\$ë¿œw«Åorãa+³ö¿ß¹™êgL¥ ’ŸGW¤qq8fD¯\rbî‰ï_Föà®ˆ•Îÿz€Ld¹_Mxé/¯þÎÄûïuòäaÉb@¾ó÷\n›þ‰qøùÓäÃßÞÿ,”¯„?¾nIlBT2Ã¨ªO–D¤ª˜ïaÄÂtnvÇ\$†ïG¢ñ/þÏcŠÏ§ll\$¬?¬šÀä;K€j¢Ê’ð¶,¬ Î¨ðéi§þALÐ¿†ŠÐq\0‡î¬ ÒÐóÎ8é‹	ppødÐˆÌÄüõÃƒ/A	«§¦]-5	ç#\n‡x`°DóHŠc.htTI\nDÞ?a°	RàÃ‹ÊˆúÞéð†½ë„üp¥­î\0g#\n/l©‡(Íð^qBäæ\$b¶KïÄKc×\nëò“ÑL®òæ¬d¯È¤¾VC0#ãh½ñ?	Ñ\"ùEï¯n–òqQ?µ¬Z=pé\0±bñ‘‘V€±kÐx]‘:ÏÏFžBŠÍ\nÏïöê®™±ƒr+qsKÐî³1•Dx>Ð\n£øM:«H#b®;ü–Hxz‘ÄF1™\nÞºnfïDÞrg@¸GFjbV=ŽB?át©çTjhúlIæÄbâ<óëß©Ü3‚‚ÅJìn„âû+®çR\0007ã^	 Â¤%F#elK‚8\ne|Å¸¤,*[M~¶o¸\$/ÚÚ\rŒy&é\"r’W®-†MM*‰.Èª`Æ€ä\r€V¥ì&\rdÖš)h¸2bâðÐb„6\n ¨ÀZ	T7ˆ0ÚK2±mÌûòZýR°±®¶ïÈ#Ëà\\«äêâ¿(ÉXzn`ù@·ÂT kÊÁQŸ-©L1B)QŽäÊ‚²’lõÇœªFZŒ\$„*ê’†'¦9Q?\r.l6¤ÞnQ…júOk1³\"¯î6ˆ»æÐ€‰Br¢NbÎ^gfêF²n~²Dèñ\n¸9P>Òp\"¸ë¡2Ð÷¯,Ì|8Ä˜ÄSi5sI5ÃSv½ó[6äºc~wsU8L{4ÊŸ§›.&–8&†5d6cÐë§nì\r¸·À82ò°á\"ñðó§.·³(ÚlØ¶’ðrQnâ8é|lm\r&®ßãŠèSêÅÏÍ”^bQ§X\\‚=2Ü@aR¿OF»hO¬þ¹ô\n–¸þÓu@Q=ìëŽ«l´j¤{/æ€ºÃÊ;@";break;case"fi":$f="O6N†³x€ìa9L#ðP”\\33`¢¡¤Êd7œÎ†ó€ÊiƒÍ&Hé°Ã\$:GNaØÊl4›eðp(¦u:œ&è”²`t:DH´b4o‚Aùà”æBšÅbñ˜Üv?Kš…€¡€Äd3\rFÃqÀät<š\rL5 *Xk:œ§+dìÊnd“©°êj0ÍI§ZA¬Âa\r';e²ó K­jI©Nw}“G¤ø\r,Òk2h«©ØÓ@Æ©(vÃ¥²†a¾p1IõÜÝˆ*mMÛqzaÇM¸C^ÂmÅÊv†Èî‡¼ny›hîúaŒRkŽz–\n(H£X‚\\Z`\n%Û:Ûo¥Ië×ò™Ø‚œ-“M[c©¬æä¶j’Œ©iã82¡C˜æÙ½Ï[ØÉ§‹@ò84àPœ:¦C“æð4¯Pæß„>Ä	«›Š4¾Ct6!'mJt7.àP­ €PŽ2éè1`ê‰|6+\r#’‚–BRØ9?hÒ^6±Â‚X—&ÄÔ‚b4¦É`Ã¶è¢,°Ãs”òÉ€È:BBXÙ'ƒ€ò9-p×\"°\rë.ì@xŽÊ3¡Ð ˜t…ã½\$îD`9Ãxä3…ë½2<H#sþ¦á_K T(¾1\$ÃpÖÂHÚ8 )”Ìã|ûCñÐÐ7ŒŠ\n:»a\0¦(±R\nj+%=‚”1sÔöë@çLDŽË`Ö<ÊÊÛk%-{bÄ\n¶÷1Çèmz”ŽÃ¨Ýc\rÚÄ\nh@ÂÐ\"ƒÌ'\n=Íd¢€P‚ÑG,:€»'Ž¼< €„Ã|edŽŽØ#OcZ‰\rˆ#8ÏAø0Ó\rÍÃ(Ã3óºXå	ÓO  +sš2 èÔ¸)?MÀÊÿ(“‹Nœ\"b¢EYBƒ&L%©*ø¿a+d(5½S4¹a‰j	âW“³·S\rÀŽ¨ˆ0ÌÚÞ¾8È<zÂmóq1ì{.ÒÄ	ìûC£`\"£	©FH¶ùiM‚ü³î,Ï·H:‹\r‘Þ€ŽŠXÌ3J£(Z¢\$ÐT<MJúŒ±#HÓ²j™pŒ£‚Ø¦\rÎLöÑ\\/û°¶U\\äôäN‰ÒÐ-fÐ¤#ìêq£<}%áÒ²íê¸/Êd,WFžtÛ*=Õg\\7vïdÔö³OnÅ=ÔæöwÊO‚2„Ëâ©µí\$œg»Ccç6r ä4©žS\nA³RR†Q8.0¶?Å ) }¡Õ£2îMB¬iÝñ\$]Ð+­#AÔ4“P“Ó1 á¹þ&g^K¶MpN\n.µRúA@µ¹–ÈUŒÙ.æ¤“¾‚àR\nA¨UJ‹Qª=H—e(¥”Âšªp»©ðÜ¨UgT ‰Sª•VšAZêÑ[+€ZŽ•á ;hE ƒÎÏø NIÐ;-£ÿ	¡A()Ý•…ØiñÌ-„Ô½ò~ÍÚÀ9A4Ó¾†Ê\n\0@\$ðaäƒÜ?ÒhàRfŠÃìj½ ¥ƒL‚¤[}oôæGw#Ì9%ù“P–]Ø< ‡¤ü ‘çZVé‹[©,×’~Ì\n	i|ƒ® GÁ5	FqÈHè¡ë5b‘nÇ¥ô™†¶2AòtxÝðs/§îqÎSþ»I«Òt“Èœ’\0 Â˜T«2eŠBèe\$Û~6Æ¹f6DÛCœÕ#³\\Ž”ç~ƒ0iää‘5&Â€ÈÌHFD‰È’e˜D‰Â‚'QËËÂŽO0T\n\0èžgºˆ\n\n¼{Ó	—ÂVKIy1%ä¥c‘cºp	¨L‚ÆDÄ‚xNT(@‚+ªA\"„À‹VêÒ4‚c¥Ä¤wQÒ/”ð3õ€ÀŽÜƒ®.…Ùš£¶N\\A–H´LéÒDëÐr¯‰x‰ž\0˜›†ˆ\r —’´á[!·r%2=)ZPV;X-…26FXÛ,ãq9AA\r´N¼“~…À7›Pb“©&Œà22ñE‰prSàé\\I¹;'ÏÑü?ÄÎŠ‘6-Ý±A{’Ýg ÷h[-áN–IÝÞÙ¹SÍ£÷_¨Õ–Á¶L²	ù¢<Xò6éPheŽ0G\0¹º3¯I!}k[KpÇ,áH¶ÖíÙpa\$74iFÀ[9;¿ÇlÉ˜˜Ñ—èhÁ\r~ºDCL\\ÒýIDEáé³RðjÞ‘Î‹òð˜y¦©*¢r(çÈ™ƒ>lH)<¢v…MÉ+Pè`à\0 ˆpY•h8¶`Z®C	\0€8£òtûÑ\n‚­gÎ”\0à¥’d¨²Í´'2^œÎÂê\0¼e£\"Wz½Ëæ8%å`Øa®\r/¤7à¬Ô}³i4ÄíèfS·™óL#Ínÿ7g¬à´s“¢\rÒ05y€ÍôòRÆ 5£nM^:ÛÎù¡íg§¡¤s2u5ZVL™Sî­ú¤„w/ÐZcT²„˜¾!ú~•*Ó±‚HHìpqßþ¯¨\$ÈéÈWßeæŠ2F¿]\rxfgdîjÍ‘O¹©RAÊ.#{9]ˆ”êR*e\\m>iÛl¿8€ì`¬Ði¥›ï¥âûUR‰æè„	6œnL¡1Ø¨â˜vÚÊ]ˆ(/³'œ” ŠŠèà†—F0|éÀ‘ýaB“‡h;ôP¬§IÏ8¨¸#e!N¢H×Ž›\n_Ÿ\$âäò¶:cæFÉÓaÈ,91Ôù šõ9†)þo«Z[`\\Õ\rßÌLŸ ~œŽ_Øði×ÖNjkÚ	„(PV\0)BÝ©Y×­Æl·LàVˆŽÙI4!¡3Ý|&ÄÙîÊÂL%˜ìv+·º^—ÇEæãV_„w–µ#»}šmháwr‰ÃÂY¢žVÃ:×ìÅ]€uÍ™öLçü¿\0N-ðþ8¸yäÃ&oxþ_‹\$L ‡ÚÑõì¼zcºxð‘;\\6SÙ~Uë°©@ÝÃ”Ïœå‘ÁO¿ªG\n6+e¦ÀÜ—Rw¹ñâ|R>Ï¯É¿,Žà.žˆ(k¾>Jïxº\"RJ[#¾=‡­}}Ê‹éýŠVÍ­ã-WèL\\Dæ‹Ý“_kðˆhðÎTÿËèÓdâì.ñ\0‰ÊÕnâåG\0¾Kï\0£hÆH<î®öìLb,fùÎ”äNñ06î®PîFÎ%0(ÆŒr5ðN!F‚~\"`˜ØŽfI&Æ&ÂêÌçÐ~Íâ%‡pO4ÐC7\0ïXîP~Åîêö®Å¯zþÅ®\0Ìc&6µPžJ\"êRà0\n%Tccm¬#0°Ÿ£ÀKÄô#N¢_€¦gb\\SÈòõn6îPÖ\rpÚ´îO£+\rˆº?ã]\0000=î\"Põ\rÀÒ1Ð;péd¸\nÒ\$.â¢£¯\0>nû±ËA§B\r,:õP…0Ã„DÃÏfzŸ1DÂïwq	âa‘FöPSñ:/\0‚Dp'P*=šÇ£]ï6—ÑzK(‰	!‰X¹ÌHð.MÀæ€ÉÏK€šN¡l7lÈ<ÀØ1Ç+L( .OlÒå{ÇÞ?âKQÆ—È )†¶Ò\$DDã 11ÔDˆr.b\$üêÞ\nbL%Ñò8\nÞi(„Œþ³„~ÝH.2ô,üxò£¶†à†G`ØcnQ#`šÎˆð§º^ëL„­fÕD\"YïÚºê¦\nˆÞ0‚Œ¤OFÐ)/1%ãL5Ês..±f\"gâb„Hþí¼Pçú`#†0¦¶Jã](­ú#ð'dO)+V0ë†#ØZ\n(2¬äMŒæ&F1\"NÖì(Öì6® @¡¦Ni).ƒN.Ö§¾‡)\n-Ô6É ä§š¯°°Rêâë&¦­ˆdf.ÂÿÐîCr~é\nØ‚ˆtÓ/„@[0\"[¦d²Ë,F–„ƒÆZ ÞåíÆÌpgÎ°\"nŒéó@h&±Í¢\$Ð|Ð#¯F\"n€á1bD`CnÌàç6crÚ«iÒßçÚ°*ø#hîù l¦È&ÇD°LÉ/ógpê?æã\r2î- D\$FL\">";break;case"fr":$f="ÃE§1iØÞu9ˆfS‘ÐÂi7\n¢‘\0ü%ÌÂ˜(’m8Îg3IˆØeæ™¾IÄcIŒÐi†DÃ‚i6L¦Ä°Ã22@æsY¼2:JeS™\ntL”M&Óƒ‚  ˆPs±†LeCˆÈf4†ãÈ(ìi¤‚¥Æ“<BŽ\n LgSt¢gMæCLÒ7Øj“–?ƒ7Y3™ÔÙ:NŠÐxI¸Na;OB†'„™,f“¤&Bu®›L§K¡†  õØ^ó\rf“Îˆ¦ì­ôç½9¹g!uz¢c7›Ž‘¬Ã'Œíöz\\Ã/;{ºíxúkG'•®œ,shy»¤f3a}á¸ÎîB«¶6\r#›+£ª€“µc¬¦`NÂ%\nJž< LˆÒì¡*¢®¬©Šâ¼¢¹ë@*#‚•((Â7\0Pœ7£*Žˆ‘zPÝ„DÊBÐ0˜es\nŽˆKðÓB“82Œ#¨#²q£&±'	Ü\n#¢´–:«ø¦<¹æPÝBšÔÆ0Z9ÇQ‹¨©-c]B]\nÂ®ÈÜÉ l;LjkÃo³:PŽÚµD;-b¡°®ÐÊ‰èÐÊŒÁèD47ƒ€æáxïS…ÃÈ6¢	Ê\\3…ã(ÝXÃ’Hì…á|0ŽC;wOé0Â7\ra|Ž	;Ð:xÂ\n @ÝQŒZ|7„BP)Š\"ci/Â™©C\$ý@#·\nµ+£bzçŽLÁ 1Lc®Â\0í\0^´4\"ž°é<d²£`@ÉŒ–‹Œ\0Þ1 C á¸~\"ŽˆcxÙ?RñDU Æ–Z 	#pÆÍ•6XA(Ž‘¥8À²ÎÊèÈÉ¿0tÓ„¸…Âº\"3³ŸCŒ\0Ï”ôƒì)g·blÇ´ÉbB—áÆsŽJà›•98ßÎM½V IÛ²ÿæƒ êŸµ«¢>Â˜ÇaªV¼”]ÕÚÏ&Œ¹†U A¸&/C¨í¬º5“›-¾\0Uû{¦)èÅ=î·0Ý?•4&Cšm…2P˜0ˆç?”ô;ÑÐn»Ï'r·?2ŽŠÊï„•ò;d%È¢\"Ÿ}ÑPÃ½`]|ø”öTUÐP2OˆLû¢Ñ¡?\0¥\r	s^¾0©ÐˆÉ»¾ÛDëxáºü¬*‹`úïº:Ýb¼‘Œ#ËUƒ¸v”IJÃC¬5Væî€HT,o­:¾×Îü#ó~¯Ý8?£VoÁþpÉAµ†H´`!ÜK„è*ðÖ¬\0C\naH#ÒÊ\nIÕA( ¿³*ˆ3ú]¥d—Ó<È×k2¤%‚\0BšH·3-´8\$µ\0ý“bdì²Å¿ŠìƒF¥(¡õ¦Ó¡(5¤Œ”Ø™…IÕS(õN)å@¤TÊ¡U@U\\¯UŠ³m¨f%+•v¯Uø\"X+¹b,eÂYJ² Aéf¬÷\"´Ò»ÝN«H0“C2I”76Q‰I¬9hLR5gèíš˜vBP1#Q!Ìå+T4¤K	cpÇ!K™uò…‘|•`€(€ G¨pxK ‚¨E\r1_1Ì†âJrTŒ‘J¹ž3H:€‹Ïù™U¦Q	`u\r¯±!’žsÉI“ŒfJ4‚g(™Xuë,˜!äÒWÑ¤ƒ&œÔš¸ÆW¡Ào&L…·e[óÛ*AÁ‚ªÕhr~Åï5&þÎ+5ªùñ<ÒxS\n„ú‚Ž°Ð±ÕIÂ¥µ!VÞIü5*FÆ0æÖ”gœŠmæ¶’¦l`ûy|¤Ðÿ‡&”ÝeèP4SèÛÏÕ²²Czªt†e£’\"–VÉƒƒf €#I~²\np(I©;Ò`Rhb&\$¡\$Øuˆ!)^£äÌ“	kº20°ž\0U\n …@Š«ø &[Àç˜'§a¾k J[Y­¨Áµ3ÖÌŽê1	áÂk.“„ÝáÙ¬>iˆ\0§Æ*VIú&˜×’„†Î­}±?kè§V°@ëÏ¹ù?iåÊ'W,æ\nQ…åá‚òŠ}róì•¯AìÂk6qÙ“ ¦Ïƒ@‘ï)ØÝ7fñËÆ%’ãQä´‰iªañ\$„\0¦dÖe¡\nf4Å’¡æµö)Ê%º­ t´HIw'¨J=«l	RpDÑŠäÒ‚B‚v0%ª\$Ù+Q’)[:,•ßW´îXXT¿(œ‡ÃT‚QÌlgb¥éÍk\n˜)M3ùÃóÝD.(÷0ÑÙ¾xiÈs±K…dŠ›Û%)!áÇ¸±ZÈIÊi¤á´ƒ3Ô»›2Öß-—^è%tXaž»©{_^Õ“O7˜ƒæWJ×3ƒ&GÈÅoB„T”¤ŠË„5,´-\0‹ÒnuU¤taˆì™Œ*ËG¸!º7Œ¶PzpFFÂ…@‚ÂF;­d¥+ÂPÿŠÙxA”2 äeMÄ22>„?G¶Ã\0/ás\nÄØn½Híò„¸Úùr€ef¤1Ì\0ÆÓ0s~ÌP˜¾Pr¶s0!¦lTv6FHs;-žìí *6” Úºø¥m…ìWA:–ÙÒƒ|p6;]µëjkVÿ±·úÜQ—fnm£7ë}ÖÉqîˆj7)ÙüépðÛß”û¯a»Â_¥×[Z	„¬–ÚŽy	0™FrR¶ípe­6ÔŽ&´~‚2!ž¦ÅµÖÚÞ¸e\\Wp®J®Stæ¯ßü¨Ì·3b	Èf°:&(íjg±DŠË{W£ò:Ù{ÃWÙJƒ¢þï1ü„0®´On¸©˜h–2®	ûl‰ÃÀTî.Ò¡»±;ïÓ·©(ü{ñŒ «°	hÊüF?êm¿Yü‡qïûjæùreß;ó'2~UÙñç”¾ØÓwÙ™ç:¶×ÈtAA^¼lL,×³ö¦ÒUÙ{\$Í}³èfDŸ9™§æ÷€©•ˆ¡RV²Û²¯YVÐn1×¥òÖþâÝ+B}ØÇ—oÊ“Ï¸ì/mæÔ¾G¹CvCù\\—ÝyŸ«ð~ÂÊ?‡çyw‡ÿmÜð`+Lul‚ü.äÕOÈ\"v­‡N(o2ïªôARð0sÐ	Ðù)„`®Ö'©d;g-òâèžÝM„Úí²ù\"Ð/Í%[îý­’s-¦Ø-¬!/þó–üÌÐîLÔ®ÁP›ÐHòm¡\0+&‘®¬ÙhÊÿÐVÿ0	lÖÍ°e/ñ\0\"”²†8º\"8Ë¤vŒ*gNNkãRÃ\rþ›ÆÔ’T7B|ù§ì(˜6€@-–kí.ËFÚ˜7‡ÍÄ-‰¬=ƒ`þo¾3Fp=ìâ˜…ÌåÎ´|äJ®\0‡	Pƒ	¤€Êd.ì˜Ê®ÔÓŒÈªbQÃ\nûe÷	ï5pXñ¥ôÈÐŠ¸Oó°®îP\$ò­*x¬Ì%JðC&ÑáPÒ.ÞþÐî°íS‘|ïp Ýð(ðqŒë1óQgLÄÒñvÒœöQj½,Ì~1šak^(nºìÅ&¢\$‚HnÆc#\"æÂºf\nP!DhY.âûpaq€üq„ó£4ÑQéð£	òE‘÷e\$MiÆ†À2o#äaã¾7/1@&r}\$½KåæÕïšn£*e¬ø]ã&ÃFMÒîlz»‘ð’H!qbþïGÒX;²K%ñPò²\$AS%²\"ÒÑn#’G&Œ½\0@é#°3+¸‹ÒŠER_#n)r{ÇK*P&º\$ìôf’Ò“*ìñ+Lä+°3&ñ†B§É,L÷,í)Ñ8Êìï-,ã-cí/,2ææà¨ÅDM­ädX@5+ì°sEÍ7&Ñúîó0­c2Ü	õ\0 .êêöF˜ ÈN×!bFŠ¯ìWƒ6pìØ2¾‚º³NéSTùBuc²1í¨€Z!Ìd3dx`š5ÌÊ9ä^¾ ¦]ÃR#‹ø#­¨ï&U,³5“œ‘S_\rO,Ï–bÄ\r€V¯`ÒÃCV3²0§­b6åÚ'±P'0!.RJiÐÐp	¼Î#3Š\0° ¨ÀZ\rù\rÙ%êÊ!©µ5S:«­\$ôào–w‰TóêŒjgåþyÃiª}˜]ËJSÒ:\$Ý0Švop3 EC¥u<Ï&\n3Z®hWÆ¶!‰œÍ±ÊW…|ad…FÏp\r‡²ý/¾FP3£>Eê\0;nÖ)F)S`óBÄ;&ü»³×B”þÆ¸·MãJ4“Jq }PY´¿&:Ðg14 ¹Ô¥L\"¢TFþÇÔ;eXÉ—”G‘J#¦˜iàåO\rd¶¢K,ªõ`˜lëBfÅÊ½Õ´\n|&/žË`Š™‹d=³\"2d´Ý„º¹‹´‚XB\r8\rÂŽL„É%îI©ÔÔÎÌ,`ÜÃC¢·%Ü·ki'æX›ËØûÅÐµÉÕUcc(šÇò‚Î%	\\ˆü¶ÛT>GÈ@ ÀÜ";break;case"gl":$f="E9jÌÊg:œãðP”\\33AADãy¸@ÃTˆó™¤Äl2ˆ\r&ØÙÈèa9\râ1¤Æh2šaBàQ<A'6˜XkY¶x‘ÊÌ’l¾c\nNFÓIÐÒd•Æ1\0”æBšM¨³	”¬Ýh,Ð@\nFC1 Ôl7AF#‚º\n7œ4uÖ&e7B\rÆƒÞb7˜f„S%6P\n\$› ×£•ÿÃ]EŽFS™ÔÙ'¨M\"‘c¦r5z;däjQ…0˜Î‡[©¤õ(°Àp°% Â\n#Ê˜þ	Ë‡)ƒA`çY•‡'7T8#DßÀÚq·NJ•ÍƒB;ºPQ\nòrÇ“;°ùTç(^e†·ÈëÉ:àð¼3„ðÒ²CI†Y²J¨æ¬¥‰r¸¤*Ä4¬‰ ¨4£oê†–Ê{Z‰[îì.¸œÌ\rªR8ƒ\nN°„Bòßˆc\n†ßˆNêQBÊ¡BÀÊ7Ä£ äa•­ûÔÝ`P¬™6kð§4©È)©MJ Ê½Ñ®!¢²ÂŽ¯£cË/¤*£†:DòàÜ2¶O‚”œÍc”h¬ØÐ:áã\n43c0z\r è8aÐ^ŽôH])“Xä/#8^ÀRoû\0Ž¢¡xD›¥8Ê:Oâú>êa|\$¤‰J7à^0‡Ð0A ÅÃ\"o9\"˜¢õ4©¤¨cB¾¥3<N ¨ã¶€ŽC«d„·âhÞÆ¨­ÃRÝV•¨—7\rã|‰ïªÃU0B[CËJ„·EÔÎRàØ:«è	£wŒrÆî»\"1³u\\Ð#¬ÐŸ*të%.¯’J©Œ£4îë×óe„Š±â3óa@l ŒìØÏDâî1±èª¨ƒA©«ŒÀ1êç9:7(Ê	’\"˜ò	ˆª€ÙÖÊ‚n±\\Â\rƒ@€R”Mi\\ëTÓêvÃ±7Ôá¡WB`0ŒL ‘»L­´4Ú©H…2b\nœUì{+r8Ž£,¤!³v^á¹7èîœí+£“3mrH Ô5P|OT\$©;*\"Kº¶î¨ßïÓ,ËÀéCžöß Ö/{3ì«G¡¿³¬Ö c P¡60ŽC9¤\rÑFðŽäëÇrµª§Mã¡bEV_ŠB¯ÜL«[Q¸0Þˆ˜ÓÚ÷ðÑ\$=ßQwÝ½X0øAˆ•ø×mfîùRH¨7~0†)ŠB7~; cd4(Ýø¼·½p¥}ÏTÉXf/!´Ï/ÒhêÉxo>ä„Âb:ÇS¡`#ü7“Dbt\n`‡*½‚4|ƒ1ô>FÅ96Ò÷ÐC¦KÉ€ºšsº°ƒ„-ea:‡Wèž‘j}OêA¨U¢Cº‹Š4¥)\0ä¤”£DRë\rM)ÈŽ§Õ\n£\rÊ•SµUr°%JÌŒ&†„Uqè>iÉ”’–uY±4'ö;¨ž1œqHµ®£\r`@ù\0A×bYù0¨þÄ¤ÇOèP	@‚†÷\0(*À¤Ü›Â¦„Ù;#Ä‚²†–aBE¯ÒÂàÔ*=°6ICºüò*¥ˆJSÌ)^Dˆš.\n€²[K(\$ˆm7”Ô4Áñ%0„ú’–\nÀ‰	VWÏ°RlI„…7E%…; ÍbØAˆgu9®X b›aÀŸ£dPÿÂ€O\naQˆ—hÐ™	ÕfOÑAƒnJ³ÿƒS=›A³fÍiÇíê‘RZBC@ˆ­3LgCÍ?(\$£Ð@Ö[Lù4„œ“²Vþ(F\n’0îL2LÃfùT%fM+•âa±¦‰AÈ¾¤ðÃ;ÝeDÒ™³ú\n¨l\rˆ©a‚–>M‚C\nT „À’‚R’!<'\0ª A\n§l‚xR\nUf­ÕÐˆB`E¬u8Š\"VÕWšõ7õÕýP@Ò	\ngø¦‡TxÃ…cÏÙ‘Ðs”xžÙ\\)Ì”¢éd©ÌÎ.…ìë„Wä£L{goî]é»ôê¨A'1v|î2w˜!ýr¯Qµ=9¦ç–¸´Oéc\$—!n›C€zlá(PÃNÓsDáYµÂ@’HxG!”8?&PSˆªJ)Qù¥dnÏCð4>D¸ U\$TŒ*Ëé8§ˆ\"²nõëGAš£T4{P*¯6E(ÓT€ßRªa©ÁQÉ¾jHN‰âñ.¡Ž™V*ÑÝMž\$hÙÅ¹¦âß%{ñ~i*â«4TwÍ©·8xql`CzÕF:\$¹x6Õ¸JR&+¹,¸½³wš@Né×Å×ÚÆ##šKÏ¡!§kØ\"Iƒ^•×†=±Æ49ÃÐ•î##S7Æ‹\"Í®#Ð\rµ£–®…9UˆÜ;~JRÊýcáP*U¹z4Ä¢jB\nCƒ‰Gf.Ôã\néŒéŸ7ïˆ‚Ø­´*çA5/Cè´¿{4\n+,I±ƒ# ÂïŸ-©l‰&Ó†€JjÒ(8<iCA¥Þ>Ž?¡‡NêyhèÌ i½óé\ršóý©‰A4|Z\0Ïi-Kƒ5<µ	Þ’F¯4…×úVHZ{S±^‹Ùn*â3³q¦´{ˆ/1Ì­”uýK‰=Šm;t®½@æaüvÔäÓÓ#”©©•È+o6šh†‰Hw¡‰K]q2÷¡w¯Ç ”¼fQr›IJ°K!e„XsêI		A—¦ÙË·iG=n­;;k\nü‹a•rf2iŽàQÉ|•4C\"dÒ'\"åmÉÜM&•È9L0ØœÅY%·\rNKSç’uò.„o£Ív„Ëyª¬”Ðenb¨Æ©ùŠ_e›ª%uŒ’KÖ‰1.Ëƒ¥^7]OQ/+À ™ò•kˆ¯*?¸ÄÆÜ”\$…ïtÅ‹ê¼—Ù\"‡Cs?°Á–º/¾o„ùAU´ÛÒhŽŠú%ç0oÆ\\\"9Ñ<™…ò¶“ËóæÈK¼Ï‹¸>rZa%äßoc™6ü/ÏyG­3ŽnBreB¶òd,Òœ_tÂ¶ÛsbiýCî¹¼÷ÈÛàê¯‰§’ý«ñ‡ S›ËO=‚Óóý}\\„¥¾Ç¬ñ_{ë—ØÔéoúô§­¤¼ãTXÌ½ûÂŽXÉÀfg&N#nø¡ÇüJ\n4\"ÎôNG¼KêðýPLÈäÇ\$XËJO«ø”ž–f þoþÇ¦ì‚ü£~é‹ŒþrÁ@Ú£#ÉL~ý*ôóÂŠô%®µOôîŒZç§!‹Šè…¬¸°^Ç/dÌN[OA§püBB||‚°€¨gëåân¢R°˜2.Ä:íæv(.7à‚iÄ€º¥>7à¨°vñ0Š¸èJæŽLcîÜ!OZ¦	k\rpÚê°Þäï´mÆ5GRÇcq\r‹‘‡q	§\"™f6v°æ(pÞ^îðm*êF >£>ãï§\"Áƒ\0”0ˆƒq.n0\$û.~{‘,Ò‘2yðí']?ñSÉBºpõ¯õ6õnïNûeºïYåòôÐxåI.É¬Ž/1soZÉŒœd31…Q‹0ø%,‹Œž¦ÌÎ«l \n†åð™Ä‹iJ/Pö1…¤CepKBh	¾&\0ÈËÏ~F+£*GCê¾ÇÅË’€ ÞÖB†)ÃBÑ±ü3ƒZ€K^bó †ð|GŒMNLG›\0šKêŠ ¢N6d’\nj–úÃu#ÍäÌ`mXø¨*Ñ²M\ríVÕ§j‚Ä„\r€Vk¬‘¦»qaÍlGcC¤Ü‚fî’£pN±BhGL«À¨ÀZ\røbF‘ãÑ­°vÍÀÒÍ^*\"2B©6\$':bËr™Îv[ñ¦ºj–XF='Í¨=Ît~L¤¼ì„î©½egì^’¢C'p2\n	Ú^Ã03â‚ÁHŽÖ“l	z”kzJŒ×¦H½ð¸\\Î0(îà¶\rÉhZKÄµî‚?³0‚É@AC3ˆ3Ì\núE2³;,£–‹)Â˜ÊsFî3K53Yd’dÆf7z,#HÀ«\$éëð+KjDæ{8Æ€Pfâ\0† ô(I0\ré4#ænÞj—7bê(ã5ì&6ã*\$Â6Çb.‘òºƒ^2³&&C3K(%FŒO79\$“>Oq4#J‘Uæ>Ô£¢¯bVJ\"6wîêd€+àÜ";break;case"hu":$f="B4žŽ†ó˜€Äe7Œ£ðP”\\33\r¬5	ÌÞd8NF0Q8Êm¦C|€Ìe6kiL Ò 0ˆÑCT¤\\\n ÄŒ'ƒLMBl4Áfj¬MRr2X)\no9¡ÍD©±†©:OF“\\Ü@\nFC1 Ôl7AL5å æ\nL”“LtÒn1ÁeJ°Ã7)ž£F³)Î\n!aOL5ÑÊíx‚›L¦sT¢ÃV\r–*DAq2QÇ™¹dÞu'c-LÞ 8'cI³'…ëÎ§!†³!4Pd&é–nM„J•6þA»•«ÁpØ<W>do6N›è¡ÌÂ\n)êîæpW7­Ñc\r[è6+Ž*JÎUn\\tó(;‰1º(6?Oàôÿ'ïZ`AJ–‚cJ²92¬3ž:)é’h6¢²­« PŒ”5Oëþa–izTVŽªÞÀ¢ƒh\"\"‰@ô\r##:ð1e³Xò #d·‰f=7ÀPŽ2¤ªKdï‰Š¶\nÃHä‘0\0‚ÞŽƒ(­ÅläÖ1ÐøÙÀr%%4HœKÑC.1	B®8: PŠ6¾Œ ô=”Z‰ˆÐ¤ÁèD4ƒ à9‡Ax^;ÒpÂÐ®èÐ\\7ŽC8^„ScÂ²7cHÞ7á‡L©40¾¾Œ#pÖÂHÚ86Ì“œã}¢JHÐ‹·!TÖŠbŒš¬¦â Ã)Ê©+À:C¨Ö•1®øœ«°JR&Y¤ƒ›0½»ÀSâ¾/È”InÛîë¾a“CRB««0\0J2 É èÞwª‰{ß3pÔ:B{6\rã…ÄÌE.c&ÊŒãËúˆ#ª6·ÊäT©¥mcè·ˆƒ(Ì0Ž©H@;J£¨Ê	m›ÿ\\ðëWcLH5§8Î¤ñ+”.6óë7Uü\0)Ób¤\rËž·¯)XÖÂ\rÑ¸×L*ÅGL›R‚0Ï)ŠXãJN\\6CÛŠcZðXÍ…—V¯ S\$3´pvääÍôÝ.\\Öâ	t¢®ø¦«â›íÐÌÝO˜ÃJE~Åð;Ì³-¸Yö(\n\r“húãHê6ù¥d8SÞª·ˆ£ÇI)à÷'xqÃ!pÒ{×)ñ`T;ep“º%,sLÔYmhÞ3Ê›å/¤èúŠƒ{_Š4v@:Œc\n9ŒÙ27óµ\0XŽCÊ`3Œ+¸Aõ_#jï‰¡@æ¦æ/ªíâ„¦‚10J¿¸f\0K-°2/CÔ‰ˆaO|ù†H…\\g ¼ã¢qÙxk*Ø¤¡Êˆ¢S|fTÛäôŸ9éAªsøƒÛpsaÝL/@Êê’‘r\nÔ¨E¢RŒQÊ@;©%(Bƒ’—S*mRCõ>¨U¥TáT‚%V_•r°tjÔä«…t¯‘šXGÖRˆÈrz‡%\n†ØCÈAI¡¬…°@üžÚ¢\rÈ(„EÀÈUÎÉZ5p”!ˆZƒIÆ1åæ â4„Hu	ÅÞJ7ÌœŠ9›†uwŠ@ú‰@\$	*ƒäÁÖ12>ý_»¼/èËâ`–u'dôÿœ#\$Œêj”Á¼¥J§×k01^†s>`Œ tH,›„’\"M8 ˆÔ×©lÒNÂ)Å“2”ƒ‘%	]÷E€ÿ–Ó¤‚‡\0ÃIŒCZ? Â˜T—æø¿Õ¼-šyÉkÒ	Pµ´UÊAÊ’0Ö14è¢¼ çü«8‚+ mRøÝ°E&L0išË&#jkM¡1ÁRW*ÕèO]YJAÄÊx’	l—Ô°\n	%Î.KàÖÈ[Œž æ°ç€©àPVóˆ9mLÇ¡l|Î\\`,\r‚•0ÊkÃo(Ðà…V€×ÓÅ™²†2RSÔ¤qîAI¸”ÄIÏ \n	ŒzP'bRE±Øp½û?‰vv¥íoe§¦×ngà`oL’Ê»dÞpÛ½“.E+ÙæøãC+¯Ç`<Â3|èRÿ f,Y³A† [\$™€()Uh[PtD4‚¦¶‰&ÙL|r°(\\’Þb^q¬¹ÈyÕšªXmS))Õq—Ò(Í™dá’¢’²x°c+!’Ã@ÄZåËù²µ´8¸lƒÃJU¼KÐÚPîGVÃb»¥ú¥4˜ð)s®¾”Â~gaDUÏƒ]ýK6õ:¨Z÷_\\ˆT6LØ.,G“[OdS.lÍóSvl žÇ–„#’1söñ‰{`e±¢.I\"\n°³ÅUòCÚ@¨C	\0‚v©\"A^,åmî Ä#ôZ506Á®Œ4£¢AÃq\r^€¼¯¯’,—ÂôÍùÅ´)‹ó)Z=\n„Âçù.™½©+ý’><Ü¦IG.åeD‚à`ó!GÌÇ-´A¬ý/´ŽÐaÓB”¼å¢(Æ‹)(SGç%ž´¦|g¹ü«èU¡†Óø§PœíFMäÙdz·M/óTJ²Tþ‚@›æí,n3yidÜ+kÍ¿ì=¨sÄ;–ðŒ…É‘(«Öå²r¡¶,Û:ÆÙ‘ªÒBmtáGi0#:€¸eGN¤b’¢†\nbÜHíàì¿˜L-Û—sV’\0 †w¨)©Ì|‰1#¹ˆO‘Ê!L\0øÕö6ZÄ´:0GI/G}·IÂï+¡wÕòV\rb£\\’«Ã¥¿Ên'\"^'µ5Û9ÈKÚ¬³»›“žr¹VÚÝd0cŸNuj!@¶Ñ®·áR~]1Á¿<ùž&>£Ñ)L«˜Fh]Âf*R´``Jw™[ZÓÚë¦J­¬žÆœ®¼NáwÁQîj»ÂlÎÚ	8¢vwØü£QS€:x²V\\”sÍÔSãµŽNÏ­ÜÃ×0óOÎ¡—a	É_Kôn×Î7Î‚A:€q|îÍsw*\\/Hõ0cÛ¸_^ý‰å2a Ì¥eósø‚´;iÝ­4V¶Ñ 'ãÜ/“ðþ/ÎÖ}oQ}?ªú¾WÙÖ:{:ýeô Æ©°sûK7º¿Sü©á²J{ÿƒüpçô ¾ë¥tC®L\$:\r(iFtˆø*\n€`Ü …ÞET1„Æ Ö|bc\0RC'B}oÛNø6Ð.§Æ=Æ\0èÆI˜)OX\rÐ*CB´’Z0†È›ª˜þL:àÐ\nçã¾Ù®þvMú¬p¬ªöÅŒš\\\"réÅ²Á€&ÎC	ÈJò¯jòæ00žÿŽ–Zð´„«PµKHOŽÈOÜç°ÈÈ+å\n‚ôpË\rp¸ƒ€#ðÖ÷ë;ðçÐÂvG	b´½š(¸<®ô!â\$ã*ij¸š£:B¶ä%¢úÐÏ\"ü/\n/ý©}\"nÈBî0¡ë…C\0001B¤ÅÃÆ`í¯L+bvpð\r‘IÐ÷ «ˆ9Dü9b^£ì<0vCÙ\nÏÞ0ƒ1ZZPÿ±Œž1þÐ¤h‘œ=íãÙ§>0\$ìË3¦±“îo†íýÆ/KH|ŠdÅ&åLN#PÙ\nN}lSŒMñé±ÓÆµ0ør*–Fðò¾NB°ÈÉI2ÈÄD'òý!LŽHRé.–?`æ3kØûìÒ ÜÉ>æ—î45nÈgeòËXµÂ”6ÊHåâþÎ’\\;2`„Òf3+9&Ò^b’b²vÝ'˜É0®\"VãN—ÅæÎò†<¨o‰Ü7ÄT<ü‘r¦\$BÞ_.VC\rjÑI+…àä’¾Öìé+¯¸ýne \r€VŸ+€ÅF¦H\r†LX'@œ`Ì|Äªná©Ü=°D\0ª\n€Œ p3âð\"ãÆØ¯¶¨J?òzùçÖVs\"'ó'1ó,ë“0ÝB<\$D\$‚@´\"~e…Z%âbçäb<³/kxNABî ÞŽ<0ò8L¢~¤3h:£Ð8&I²0\"´‘|ë±Ð;¢(qân;z@\$;¼k\rå&<s¦¥ç@)	Ä7ÅÖÒ”ìÂ4+ä[NßÎŠuÍ²\rƒ8Šû'ÔÀnF#6‘/B’Sà(üF\"|\"ÎQ=îŒj¨ý‘Ê8ƒlÃÃV5¢†\n¸GÜ0@È %É>-)\n‚²fü-ÐT”«½?ŒÍ š™Œì	ª0lOÁF¶ãG\$mˆhËØñ0J\0Â`êÇ`ž¿G @\0ŠV²OGh[²N	CV[ì‹=TW=¦\0¶ã4%L=ö+HK†Œ-aIsèÂÂ*±FwQ„ kl‚²\r²N9Ð\$‰TF£:ÍÖk\0à@Ú\r ";break;case"id":$f="A7\"É„Öi7ÁBQpÌÌ 9‚Š†˜¬A8N‚i”Üg:ÇÌæ@€Äe9Ì'1p(„e9˜NRiD¨ç0Çâæ“Iê*70#d@%9¥²ùL¬@tŠA¨P)l´`1ÆƒQ°Üp9Íç3||+6bUµt0ÉÍ’Òœ†¡f)šNf“…×©ÀÌS+Ô´²o:ˆ\r±”@n7ˆ#IØÒl2™æü‰Ôá:cŽ†‹Õ>ã˜ºM±“p*ó«œÅö4Sq¨ëŽ›7hAŸ]ŒÞëµZÍ•÷{¾ìdùC^ßta'¬D…\$•ôò4ç£2éˆ\$îïÃE’ÌN˜“)¬ç¡7^èòÉtÖœs:À¤¶éi*<ÒŽðÎñº\0Î•\"IÌó¸¡\0îƒ=mpèÊ,ÂÂBS»Â8Ê7£°šÔ\"#2à9B°Ò9=o;„÷Œ£k\\”1±@¡@úµ:î;d¸BjV:r†‹@#Úœ£ÀPxÊ3¡Ð:ƒ€æáxï/…ÊÚ„%pÞ9áz=5‚ö²…áM4£¤ª/ŒM ÖÂKVÌ7# xŒ!óæŽN£@Þ23ªÇ\nbˆ˜4´)h Ë)+@èRlZ6÷ŽR#×\n¬J¸5l»½R¨Ë‚ä£tD“&CªFT£ %ãdA¿èy@¦@P’7\rr•ˆù	ã¤@/@P‰)Œ#¨ØŽÏ8ê2TºÒ4B2B3¯`P‚3ÊIÊ!Ã ÒŽ'(¨ÖŠµè¿7#­BÖºë‚\"('#T§½¨Š&€¼¶ê]õpÊ6Â>•êP„.	-\"&Cˆè/m…éSV‘õ6UH×ºê\"\\–×fLVÒäâƒ(Ë3¹?=`÷h1F]˜aÃf;›¦ù8§šC…1pZñCÄ¦LpÞ3ËHÜ2¥¢^—Å ÞÈÉmÕøŽ£Æ˜c5­ˆã:9…Šxä<¨Ioá-1Í¸ÊaJ[³ej†)ŠB2ž¶\"	 \\	q[UG6ƒ8@3Lãm­©iC½âXÙ².‰…ÞÅ×;Â!U(ƒð‹(»²[!F	š29Žc¼ÏF£Æ¥)œ¼žÅJR¤­,KRä½0LS å3MPÝ6MÃLá9DìÔìOÔù PõBPÊEÑÑtl—•ðÜ“´ýIh‰\"\\mŽ||ŒZ¡&è@4†bZOsÝrf\0·44`|WxP	@œ¥Üá: À²¤1î3e@ÀÐ]ÉF3\nåMPÚz¡)ÏÍÂè*ç—q='äåË äxO i\rnÔ¤Ð’CÃÉˆ'j0È)ò<£\r¥JAÅmž÷>‘\0 !‘Â‚žð jùŸEô\0LÓú#D(ð¦ r(®¬š®æÒ\n]êl¡’I<v'iH5•Xƒpf\r\$‚Ÿ(Šš¼b6&y_2„I¤X cn|Ë˜ã,@Â0T‚„åF4ÎFÔ¤W‹,ø9#VÂHCïfå˜±UÊÂp \n¡@\"¨@T¸\"„À‹/ÀPN),KU2¦a‡è„”-Ö‚¦\nZ-ARe²F|hOAÏ™!†!%ôHNùÔ:Í1–÷)	Š\\ì‡-Ó™rvbçR–jl•œF²\\ËÈÙƒdÓù\"bdd¢ÃÿE&¸°ô\$FŽ¨\n\nA”8Æ´*)%9-¨pÈ€‹PJ\n„ŒíÈ€e0mø4fHÊi­W’ÚmÐÖ”^CÒÜh€êff¡“¦ˆ´öYˆ´ðHÆ„ÊrzTa–¡Ýª“h‚UzÇ£ç¹”2FÁMt.9fþ;*µMUY!Í\rÒÄ¡²ÌÓcVÓp6²D\\U³:^%É‡ðkN“¨\\.„Q#nB5¨‘ 4wìŽâæ\nP „0\"£3mdÇ†õ>gš-B%¡ó³‰2æjÛ2ŠÜðAk”XV©wÏFnË‚V–Ê8 8¨a9ƒä\n¾¡F2ÚÏY]Ì	=CËXsX¹4SÕˆ\\»J².r¹¦µI¦27¹\n¤ˆ£²lÅˆúã\$f, Þbœ»’YP(¨ÊR™[5Ja6¾ÈÕRª]v‰Ëµ½ÄD\$>¨„lCV<V”:óžiª³µ\$e… ÒƒÈ.\r)…ì4âê¬í)tGAX«;lê'¹Ó:°Y_\\O=—t€V¡§\"'Ý‹î©zÇG\$78ºmt®¦)Ÿ5a‡änNÃª¦ÇÅË#b…ÜÇˆÑ-š¾›\0¢;[¦Jª¶¡…æ\0‹1Òˆp«ÚkfË”Ì‘2*Ÿ-,bÁrn0\r9%Ë,\0ÜijÕ`¦qdÆGÁLãfhö~—ãŽgÆ+%ÓÊ5èrvHñ™dä‚Ï¡±Á;ÊÓKhSé²:îÎ—£LÍ2»´IôÔº~éêÓ¦Ë£5ÑÚ‹%MbDªhR°åplb‚›µ¸(êàÂz™o©€u¸!.XK*Üçµ:™ÅGÓfV½ˆvŽ£•ûZ¶íA“µ}\0l*öUÖ(¼@5e(0ê¨„ÆZH8 \rKvÃw*’Ü¾{\r®Wu¥jMÈîïˆK¾¯žä	¶v»²•@µkd³7Ós&ÕWI%h(Ó9WF¤m5žsÖ¼{\\rSª±ÊÛùËXOö‘2øùÞ¶+“m8Í6Îµæq‡hòÖR-ŠåÄo ¤Ðšµ§%?&\$)§PÒtØ²,;`ó3|ÏzNº.ü×!õ¦ÿÎs¯^½¼¯óæHÜˆúåçæL±ÕõÐÜúã\\¶:„vØ0Šöw&û!˜2Òw–šR =“!h¯y-ðþVî\rµÆÑ(N½Âø,ìiv'òäßžî/!¼–pÞ}é‹WŽ¹¢«€i®\\‡ÇúŸWçrŸ®þ©[wOg\\€PWB\nÛšÔnHŽç§>žýüÁp~\"ñ>zÀÆ\0È\n¬1w>¶®nËYÛÿ&À×ÌZF_­ÒÎ.\r+âüï*a.¬ˆ…2ŠcU\"6éõ_]H.-hL6¸ÆõB,,©.['V4FÐQh\no…(% Œ“¢8:¯p‚\n ¨ÀZ€­p#âZ·Kbó‡#VLëFà)öi\$ƒ\0Ì*\$aænCðÄÌ;cÈv£&¯bbîÒHŒÄ\$HÎâŠàŒî%£¤(¦ÒJ˜ ÃHE\0˜\râ†80¢’ÀÚLãiÆÆ¸\rü°N(È­¢,BÈbkæ Ú&¤a;¬~Ú\"bkÌ—BÚL‡ÎB\ràà*–\r¹ÍÐÂb5¥Ø¾¨ø´í÷@šuÏ|šât±ƒ `j`lò«‘^ M¶J®H\\›0ô<âü \nœ8î¢ˆBbê#àn,bÊ@ì¼abHv§è M<b)È÷Ña\rcZ\njœ±o\$Á¤4„iF\0¸„£©ƒàB# ";break;case"it":$f="S4˜Î§#xü%ÌÂ˜(†a9@L&Ó)¸èo¦Á˜Òl2ˆ\rÆóp‚\"u9˜Í1qp(˜aŒšb†ã™¦I!6˜NsYÌf7ÈXj\0”æB–’c‘éŠH 2ÍNgC,¶Z0Œ†cA¨Øn8‚ŽÇS|\\oˆ™Í&ã€NŒ&(Ü‚ZM7™\r1ã„Išb2“M¾¢s:Û\$Æ“9†ZY7Dƒ	ÚC#\"'j	ž¢ ‹ˆ§!†© 4NzØS¶¯ÛfÊ  1É–³®Ï+k3ëö3	\r¬ç‚ÕJ´R[iÒ\n\"›&V»ñ3½NwîÔÃ0)µ¤Òln4ÑNtš]¡RÓÚ˜j	iPÒpôÆ£ÞÜfÚ6ã«Êª-ãª(ˆB#LâCfç8@ÊN¤)° Ž2è¤ êµP ¬4ŽC£z65ñÊœµì,9;0&('C˜î´L1'P˜ƒ\"­Úú=<ð˜˜7­I(àÁ'#tƒ	‡‰€Ð9£0z\r è8aÐ^Žó\\0ŒƒjÖÁË@Î¢³`ðò¦© ^5ƒ“<:JâøÄ6#pÖÂHÚ8\$	˜èã|õðÐ¼´ÂPŠb‹¬ª%±¶#Ðôð4Ì-5Ó´úç@Q0ä¿/Òø˜3ŠX¼¯h“Xº<Kðœ²ÈÂ7È#z2òª!-‰c*ˆh†7‰\"Ø>Ã……g´5…´+XÇ*[PLª0Ž£`è6C`ë	Šuüˆ’/Â3w½\0P‚3Œò£zBb¾¬ëÜ8Ý`Pž9/Všô”¢¨Ò-#:p ˜ÄŒð•<˜Y«0ƒ~W“Å[©©Lú‡C³èÈŒR¢`0³L+¶ÚÖuulÒ®QãŽUµªú†p”X!Ê‰‚SŸ6yìWPf±è(3lëAZÑ*ü\"ŽzŠä‡h5ºê¿f‹ž”)èÑcŽ^‹õÍ2’ ã0ÌéIÉn¨•Zƒz1&.[1Œl8Ír„Œ’9…\0å¼Œ,jÖqvUÞ*@æ¾£xÖŠ„¦)ÊrKt98\\C[8˜OŒ^z4¼Œs²Â.J†ÝÄÐ[p§ï{êv7¥·jw\"ç“\$0ð·\$‰Iªb‘Wæp*ƒ“3ÆøB <? ÉÑÊ,œ©+KÔ¹/LÉ3IÃ”Ó;MƒtÝ8<óœë;Ï3Üû?Ð4 ÑU£”¡'.]Æ.t–’jA%¡0œw~IÈeW¦`Ã˜\"B\\Èù+4ÅTè2*œOCž3)Pã‘c\nŒ9ß'ÇˆžH>yÏHP	@†6­Á\0((À¤˜µX Š	-h•‡\$E9>¤8ƒpDÏÃ£\nŽ™RÑÐ2Amg¨¤°òdIŠÄ\$kž¬@èjMZT`‡Ž@Ú\neLïJ3¹€Æ´N9¨5OLÏD°ßOÊ¡]¤˜\0žÂ££\nN„¥Gé\\Š-º’ô•Ði6ÅéÛ†â<Èa_‘p6˜žIMÑL€€˜D\0ÎI@)®œ`©\r3ŒPe¡s’¸Ú‡Hb.M8Ô›óÞôRp\n7*åŽðœ¨P*V\r3Â E	j–ô:HfZÒWS}éª´<sØ˜nb¡•‹°`à½*÷-LPôœÓžÖ²²†¦¾|»æ¤XmW†4˜òHÜúœtHêƒBÓ¤ú½]Ç¤5æoè«6BgDŠ›˜FÝÑ5AXˆHH€tyr,ÈaB#vI)‚„„£¥-!qæ&à‚CBŒ½’&/¦„Ü‘JmOç‘6KMgÌÄŠµ™u]Šu~¡Ðài eQ¦´ÛD‰)çØ6DTàzˆ’2‡zb^ª‚¸O…ü7¦èÎU{Œ®¤Â…4Ô“Ø4@v’iaW‚\$½—Àiž„v+˜ÂJåÃÊÔ-&yT›„Á‚%Å¬5™”˜Ÿl‹1˜Ó, ŒZ	Í+2&îd„S-	¨a…£‰/`¨C	\0‚5‘?ã5‰²ò\"7 äA\$rNW6ñu¸u†x ¹å¤0¬•ˆZP”¤\nQžSo[ÈO	nÇ]JôôL:À%ª]°ëwZÝÌ0W†ñ”[®c•ç‚Äî\r’ØPNÌK·[,˜ŒSÞe\$ƒŽ:ð`|ìMÉ%w&Þ]käáðpu%sÜVù…‘ÇÁ6m3.rÖu%/«jY/ÜTDÖ-‡°`éR§œ‚ˆáÇH¼pÊ±Ò/ÆTþöàœ[Jcü5*+³€ÞTÕYZ`3,—r+é\"&å¥®S’al3;DÉiaQÌXFêý¥nOì‹I+Za,:°‹”jõŽ‰[Î\n•FåæŠ \\®|u!µZ*ý\\oŠß·ªoF´®@V„ËHN’-#â\"U-d¬Â£DJ§h¥žFxÝÏ\rHCÔµ?J–†Ÿ^ÎV„fU4ŸSîF]vª«D7 Pº§SSà§SÐÊ-C³Nr »Å’<ÿÑÚ=7\remó¬™Öj5í„âPó©œ«GÚz/pmÅ¡isÎs+V™ÍÆìAw’û˜Ûõ	Þ€;¹oVD÷ö1s¯{Þ•0Çlhg±á•¼çí¾ë­:T±À‚Èn}g£8ˆeâ|WEhÈíõâNÊIÙ'›r4TÎ¥ð‚jøÁhV´U>4ÜÛœ¢4e~:\$8\\¹]Lá×§‚ò‚Ù(ùü?¯~èŒnÉoã|3D\\°ß`¤Ê½!ÄN ë-:OBZjiØíë»&ÝÙ=¡“;¡íš±jö»ðìâó»¦mâÛg9wš‰µ+.ègpI`µT-yf0‚Ó&v\rÂ§‰z/£TBD\\Úèïä]ÛFoËXN<óSƒj:ìÂLÿN©þž·ÐÉ(|7¨^u>Ù™ªA=‚UD”:”–‹c_NíYý×.ß‚©»Å¿˜vj]é½ÁùžÇé.¿„µ9¡úÓf„Òž\$ŒŠ†ÞîúÙkã÷žO÷Þ¨&Ÿ·ø/Ìÿ/Ú?˜ÿýûlÍßñÓ_Ïô ÖB`¨²h¨óŒå\0#²ŽöÐÌõ\0G¤ý¢îú+0²©+4`êJÌ¯X@ªüyÐ6ä¯œ¨p<ü@'D\$G/<ñÈ¦ \$¤üqÏl¤-paì˜Ì‹×‚¤#Ò-g¢ ‰2ˆMyeˆqb..BÜ0‚ªÌÀz¨VDL! ¦OŽq\nBP/â80eÊÆÉ:>Š\$§Wå´½b”1kGÌ#\nôàPÈH-jc Â= †9ÀØhî +:1–]ÚŠíE'Z.¢=Ê*e‹) \n€Œ p*\0Ü7&âZ¼£&d†íõÎ	)x¿ª²‡€»Æ0ÐB`¡%Tjêð²\$0OM#¸;g#†à³±e1d‘ÈÖ*b0](®%¤hI\"ý¢d: ÞLƒ€%Ñ’X‘ÆºP€0B1‹H,Î>fª¤ÊC1\nH,bË²ÐH\$‚1ÂŸ±Ä\$1´…‘¹êTÃƒñmd1ÌTèq\0ˆ8Ïdö3ã(çèsþ7dÌ­G¶ê£Æh<!Åÿñ·¢Ü/\r&%Æ(ØFXIÒf.¯Mt¶'\r\"èBëðÒ€Â D`É3 ¥>^ÂØ:IÚYâ,  ‘mRUc_®Ÿžv'žÏè¡©ù'büYñæø­%` ƒÐUåì4Vü£4uªNÏ0L	\0t	 š@¦\n`";break;case"ja":$f="åW'Ý\nc—ƒ/ É˜2-Þ¼O‚„¢á™˜@çS¤N4UÆ‚PÇÔ‘Å\\}%QGqÈB\r[^G0e<	ƒ&ãé0S™8€r©&±Øü…#AÉPKY}t œÈQº\$‚›Iƒ+ÜªÔÃ•8¨ƒB0¤é<†Ìh5\rÇSRº9P¨:¢aKI ÐT\n\n>ŠœYgn4\nê·T:Shiê1zR‚ xL&ˆ±Îg`¢É¼ê 4NÆQ¸Þ 8'cI°Êg2œÄMyÔàd05‡CA§tt0˜¶ÂàS‘~­¦9¼þ†¦s­“=”Ð(§ª4›Œý>…rt/×®TR‚ò‰E:S*LÒ¡\0èU'¹«Õû(T#d	ƒHûE ÅqÌE”')xZœÅJA—©1Èþ Å®ƒè1@ƒ#Ð 9ªˆò¬£°D	séIUº*òÀƒ±\$Ê¨S/äl˜ ÑÎ_')<E§¤©`­’éé.RœÄËsÄ<r‘J8H*ìAU*‰¹•dB8WÇ*Ô†EÂ>U#‰ÂŽR‰8#åÊ8DB°Ò9ƒ¨Â6*„<r_£ˆa˜EÉÎTÇIBý#êe+ÆñÉlr’j¨HÎ³þA‘4\rBÇ%Ê¨—E‚®Y§¥pîäÔ£•EUu`x0µÊ3¡Ð:ƒ€æáxïe…ÃÈ6¼#(ä\rãÎŒ£u°<8Cpæ4öÐDÝŒ6°Ê:X\"û”0ÃXD	#hàÛ\r¶Èèã}„«ˆ7ŒÛz9µ‚˜¢&\r.˜ŽPT™_§¥9tr8I£…,rI(\$IÌM–‹í>À«	]Žãù	ÒP§96WA0¹8s‚%€Êê¼ñ*I3”ÐYÍ¨æ0X¡Fs’²à‰_Œ#¨Ø:´þ:Œº)\\ÄSôt’ÅÍ#h¬1<Å!8s–…š]—g1GÍ­'¢>DnVÊJ…¶ÐB'²Œ§*Á'I*[ÄÉJæ@P§\r—#”ÖcØï`èþ†OhI–ŠKAàç<®–Qt5;XáIdGP—îdöQÖÓ¤`˜dóÒõ½¸Ž'Š§¥ARùfÕZ8NÓóÂ>°S%ãù9ç’)D–ešx¤DP-K×#ýº9­êúËõ§ŽM#L\\­`Þ3Ãe£…¥Èýn”QÆˆ*\ríxÚ»È «x:†0ÆnC˜fiÀ€6ðÎxC˜,7aÊ\0†ÎO ƒ •€­\0ÜN(`¤æAp#G0­CBU0¦‚2wL®dÆŽQÝ„\09Ä…pçò  ÍñZ¿bPGßÓÊBì•÷ Ê@dÄøO¼D¨ „1±T¼bË…¡Ö‡Èr ˆBßhag9ÔÃºÕ`!”<öC .\ní^«õ‚°Ö*ÇY+,;¬Õž´VšÕZëem­Õ¾¸Azã9™t%Ôbî^Éz/eð¾—âþ\r/ÐÂÍc	6Iÿ†åìÂâ\\MQ>(’b|\"ObvVö¡Ñ‡ã4C'¨1!\$:¡ƒ ÆxÐBÌO€H\n% Ô„P˜½!â ¨òfŠˆüLKðÈA™Æ Ë&0ýYÌãG	¡D* É±úÅÕp«ê?H\"<WÌ„+	ñ@(Dq!¦æIU_VâHtc@˜=æ0A@I‡(¢!	Y–){c=A\$‹—ÖK5ÍA‚æq0 WÁÅªF°@ƒo\r € Èy]N\"ÙŽ°CvqMÐp‚Á”æ\0žÂ££aÊj I¸!‚G#Z)Tžâ‘)¢]Qa/‘¾!‚	Îˆµø:@­G´bÕˆÉ/+¼ÀŒï¨Ó¹ Ý\0—˜oYÏ° ÒÁ	”ÜÚšÃh¯0T\n²—A¥äµZ„ª§è0@äjÖ™y‚Xtˆ7˜íË¨…í»ŽQtÜxNT(@‚(\n¶ €\"P˜mÁyJªaMQ ¨UÄh®\rÂ×\nä+Žë»=‡º£š.!ò…K]yã\nç£Û#ïuÓ'UETÕ#upø]¨ÄY¬ŽôºrL:_+ZŒT~_Ä\$yëÞ½HX^³6jU	j¨‰Š&qL)ílœEaÌ!R R«Ì4¹ è¸qlå‡&¨ Ðˆxš*&0@‚	¢&¬Å›ùªwíŠJ‰Tž„xAŠÉeÌÈçµV°Pk\\Üá~zdïôÕB:ª…0ÊmƒÂ‡¼øŸ2ê!hŠ—I±ç»e>~£Ll\r)ÿ'G†¢C(w*Œ`A±¥ôÃÔ.­¥	\\ö(³ê	vl„·'NšêˆQ5¢h;Ei-3ácwIÞÃ\$¶GñöwÒÙ“L“M¥°ƒSŽÄŽ%æ†˜´º¹#â¼¼ˆqt{Ùyº\0^d‚°ÜÄBM!Cj|xÔ«Gn¥ëà{nC	\0‚š-,ànŸi­\rô°ß1%ƒÎ,§O3¶ÅI0fà€‚\rÆfÓFÚNŒ9Ž7{ã1°pn÷S ÷…/;¸‚²>‚—s*‚eSbf~ãÕo/u¨Ú@·ì=¾ˆ #\0SZ\rBœ‡tIA\n)Wz±sà•>¨y')•“rDÁÉ›œßƒŸ0K’hBÓB’w	aIˆ.7ç\ná”1V&çÏ1Fåx×”ô£½ú\nhÜý“Q@-Y¢™ŠÖÕÃáç¬À@‹ò*8¤/”X¤ÁZÈG0¶”G´VåÑØ2HÊ2¶ZËèÅí>{æø´VXË¶ð’e)AUq-ãˆ»÷ˆ–ÆXÌxN)žO½™t‘øíõ’Yšß{Âú–V6&{X@ß!’³É\$¹] &t:0G£”@B9¨ÝÁ~HjY‘È¢¦ÔÿÂø’Ó]{ÿ’Gþ_ÆhW+ÞFÑ­3ªu‘‡Òy¯ zªgg“mÁ8HÍ7‹Ê™#Ã_°ûêí|Ýîû¾·öÞEK ”Èå\$ß{º²¢&þ‹æýÌ¾ÏRÀÄ°þo\\¼P¼¬ÊûFRõ‹äÌ§Äw/ó\$|ÌÔ‡RÔ2v°*súûp2¡\"ÊÕÂÂ*Šw\rrÕMïâŠPÞJ*`-íA«F´«NcoõÑð|ÒMØôbÅ°ˆÒ06áÍ‹0’ñí\nþáy#íœê dç\0\"´2ä†æèX Å8‹\"ñ¬È™£D,ê¿\0ÑŽç¡VûáxD#:àèscF\"¾ŒDØ0Ò0Øàê\"™êD»Œ0lôÑÆx\$Í@Îf3W0†bñ/ïó°¢óáÎŒí	ÏTf°?q;ÐËå/	ð°Ÿ¶?qZk¦\$.¡jAÈC(Á^ÁÊcô Vf¡ÊÃg@:0XSð^ö§­ç³¢9ªéã×3\0ç°sf¼HÍ'h¸‰åÄÈVdñÐeFº¡FcdsÑë¦hÁaú­LèœG!c+×1_o/ f °`½p=o‹!²\r±5\"e!Ïj-!’7 ÐžØ%GeŸ\$€NP/!*\"ô¡RJG‹ ŸRU£ÔºqS&?\$ÐQ&rRHr?%å-&D}'á\$m6ÓñRÕ\r9IdÞÒáÓ±)&ãÛ)¤é*®©½*ržìrFI¡k‚x*ízNòI'rVËÂ9'Du\"ÑÓ.\r‡ñZ	Ô\rñqÀW'‚xa3!\\vLÒþxá,î* I-è%ˆ¸Árno!Ïñ‚/Ò\$L‡ênið®*¶AÓ.õ3Q„HÒe¤³£O¤H\ni05sd8 êD“\"u/Ï#è`è@ØjˆÃ ÖÂ°†¤\r†¨” Ú`\0ÒÈa#˜Ë_³vj\0Ä•*þ\n ¨ÀZ\0@[ Ç:ƒÄ9é'Œgns!PõïBõ\$¿°¿Aªê²ÂÏ5Ó©:ÑÈ9Ãîö2lu'œT2#&ßÊØ*„\nÄ¢z'ó21À˜°JP<N3C…úZ£X8/!\níjÌÁ9ç¨\$ÓŠ€l<±Rö3?0aÊpôk>îFà\"8Ž©8O]FÑ ôR™`¨9#l7CS7¾¨@Þ>Zž4\\E-·ÅÓ|lÏ¯BDæÛñÂÄÅYoÊÏìûM\"ì¬ª°3B¡Dò Æ ê\r´.ðH!»¤¨ÔV{-rB†%gš:fNH\0\n€åFC‚j¤¨cNZ{GIÉtUáOGG.µ3GlürÔƒK²4#ò8¼Çk ¯lÎ¥>c*JK¡,„¨îÒÈTþB0@";break;case"ko":$f="ìE©©dHÚ•L@Ž¥’ØŠZºÑh‡Rå?	EÃ30Ø´D¨Äc±:¼“!#Ét+­Bœu¤Ódª‚<ˆLJÐÐøŒN\$¤H¤’iBvrìZÌˆ2Xê\\,S™\n…%“É–‘å\nÑØžVAá*zc±*ŠžD‘ú°0Œ†cA¨Øn8È¡´R`ìM¤iëóµXZ:×	JÔêÓ>€Ð]¨åÃ±N‘¿ —µô,Š	v%çqU°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€é²:œ†¦¼èh4ïN†æ‚ìP +ê[ÿG§bu,æÝ”#±õ¦“qŸ«ÒO){¡þM%K¤#Ëd£©`€Ì«z	Ëú[*KŒÉXvEJôLd£ ÄÉ*é„\n`¾©J<A@p*Ä€?DY8v\"¦9ªê#@N±%ypÄCµ²0T«ï“¡Á‡i0J¯äAW¯ðóìBGYXÊ“ÄƒC\0«L´ˆuˆÊ“daÚ§ ÑØ	,RÌxu•EJ\\NB°Ò9ƒ¨Â6H¤i`­¤\$&†É¤TEAä\\Èv‰e\"Äg«GYM'—\$!Öûe‘lßN3š!å\$Š—E»*NÒ1u°@@„áx—&ue;OÒ!àÂÕŽC(Ì„C@è:˜t…ã½„# Úò£\\7ŽC8^2ÖxðâÃ˜Ò7Ú!|0Ù£(é\\îhÂ7\ra|\$£ƒr6Ú xŒ!ôF]Ž8Þ27Î\0æ×Šbˆ˜4¸ª	×7N”·R…	a\"–e¤\$ö–d^¤L=\nÅâ‘eŠ ålÀT½¥9˜”’3|Qle))¯ä¼</åé(u•\$ÁÛ–F§YL…1:û?%l0Ž£`èÓXê2¯ä!@vs\"T‰ÂþË ð2édLŠU	‰@ê’§Y@Ve¯Ñþ?k6)#IV\\“'*…?& (¼#h£e¶æµã˜Çq¼7óÚU%¥s–ÉŽ³ÓI`´´ëxŽ&¿ÎÇiRe9ŒòôÏ5ÎsÏ›êûàð-–Ò±*þh„WdªŒŠA18l‡vÌ3Å™FIö¸^I–”­K«Ó·0s|êC>iúˆ£M;R[xÞ3Ãe‘S”òÌî“d*\ríÛq!\0ëjŽ£ÆÞc6Š\rƒxÎy˜,7ÁÉø†ÎO   •|,pÜN((`¤ç˜DÀ.ÇX&a)… ŒA„3O\"ÀÒB˜‰w°Q’‡Pú!|„-ó	WÐú“á•¤åÎ²1F#!)îCÇµò«7ÈS´(!40‡3ŠœMaÝf/€Ê‚g¡’«%h­•ÂºWŠù`, î±2ÈYK1g-¤µ²Øëhå­Õ¾—l\\k•s®•Ö»Wzñ^kÔ4/uò½k5ì\0Ù¬—Þ—iÏé’¥†ELG†(‘ ä „¡ 4H¼Ó\0j= €@RÐòQ‚å	€b.,„x³ÊDbWÐ@ªƒj\"CE`Ù¢Q‚(õ:ò<RGYK&Š(™t)Eá\$d^4\\i@Dc®lÒú¡HCÒp\$‘ÐòöÃ i_Å£¯°Ü¾9É\nÔ8´¸œ0r\rá´Ó\$\"ÇZ\0€1¿ÕöoŽA½2” Â˜T=¬J')`”X¬+i\\^šS#FÞB•)¥<¨ÎI²;!ÝE¨X¡4¼Óà¤FèX¾ M:dÜ2{F©Á†çäºƒzÅ{€€1ÎèL à×›uf‚¤¨\\kà4®•˜Ñäe `}‡#\\²‹ø™¬[ÇFÙ3h	á8P T *¹‚\0ˆB`E¯N0\"… •aD¬V&:ÝŠÓM§BÃèÐøƒ%þ2üÛkQ‚Ó\nªÚ8òS“Ërfr“!G\\’˜NÔ¹Ÿ¡@'&ô¾µÏÈÚ«dç'+ÔjvMDš…o-…¾y®Q‘2FL;D¢Š%ðåL¸tÄ(S#•:MXvY¦ e]A¥Á‡E®ˆÉ½Q§tP¢©\0¥4¨²zU•E71\0:Dvdµ’ô\"v¥˜¨®\rŠ»óxCHzi‡ Ó˜e7!Œâ†Cò~íÁ˜dÍÑ=<¢dO\r)¯Å¶C(waŽñ…»æ.%,È‰\$Ê…P01cunÓ¡Ä•ç54'Øcbƒ²µVÊÜôn\r—uÞµÓúi‹RœèÉîšÌ*%H+Jí¢Ë@uÁ\0»\"ŒTÑ“,0²JJFäZ†%ÔIxW9ÛW¨BHõdâƒz÷M€ož§8Uø¶sÅú«§ó%ÚNBý\0/œƒBÿ¢gE´ ‚[™ÀŒ'oTñË1½<OuÏo:tšÍir_\rŽlÂæQ=Pi´€ìÓÿMj±©ínªÓy¬v@ƒº\$\$eb—‰‹“éC\$ä¬–’òbBÏº,ÃPd„‰y¿­åú}½f…%'Ò=¯€PW¡ŠX§âU²Ê%ûÞdNÉmÑ£E*n¬m*`\$L±øßñ‘a\"‡Ðói’ø^ÛµöÂ\$É±“2¦\\½1äÂ…”\r¶·[oì*ÇÐ±öÆâ-§ñËtPJ¡4âÈÓz¡s6'„.Àœ&I‹XcÆæZ§âýI¹Ù¦ÅÜÙ•¨zÉ\ræ|÷¢XS¡ÙiŒéP1p}„‘WÌÉ¾õ¡×)\$ëc²ôë–Å‡YÆxÙLÛLs©¹6Ÿ4Ý¬Fãtì—¬ (² —û\rÔ3kÊN–ÿMs“÷ÐQµ>åèÎÿLº0°>¢øÊíîOkóuÊí³—£¼N“åüU±¹}»R‹ßk°ë¤-wÃ[NsÜÎõt¿%^óÝÒô¸îQZ°\nEÌ™˜¯rÕ!—}yS_–öÿMïxöD­u´ƒdŠ_mò·úYêÜ	³ó¾ÖEúžçÎ\\ß=å»”¿0.U¨±{J]Ý\$¯â”ÆtÏ	9´Ô¥9%ìÄI¤\0,Éº¤Äæk¬®#Áv±¡>%â°ªÖî¥2Èì´å*–+ÂÀ â¼°\0®xûoÆsn˜1,ùË²ÇN?*Åvboo©@õŽtú—JZü§†§OÐ÷Æâ¤ó§ŠáŽ6éNxümïÍŒ4ÐQFL‰!<3ØBZ‡äŠç8QÊÒ;¡\"i,qÃ¨o†Ììæx†MÌË\rŸâ·\nz¦¨'	“’:'@cbõ®	p¢põGŒl\"rÌ\$ôH+p¤¶k‚û\njûD<±óoio´mdø&8ô±6CíÍ+îï„d@¤j#Ë(™1®q°š—åLä§drGoþå°Thµ¤iñ[\$ò°öÈqqq1tOPÓl˜ÊJjÓQ\$o,q>÷‘fµÑ°)ñµ1}	.„Ê1³/J\$QÍƒ	qÛ\0Í,×1‚FÏZm‘’ÎPñ#å\0‰ Ð‹o…\r¤GZÿCÚ­£BmuÌ8æ¨Çm(º¥C+	²>Ä¶â=\nÐÌdilóïÒ·af¬0#ñŒŽÑ#l9#Ð°‰ˆœY*È9dÒD€¦C]&cˆ¤H‹häB\0ä±º( †€ä\r€V¡«È\r`@[\n–i Øii\r¥î\r Ì~&\0( Œª…é'†ŽI¨Àª\n€Œ p rª<®Pùc>å§bf#\$nhÀÎŠ–'ª¸Zj¢Ž”rìÄ«*ä¶†\$dˆâC,3:ËD±1N(2d+ÂÉ)t:ØŠ’ž#Ê@™3eèYƒ^8c–áÆÄB!d	¹§€BÒŒ~kÊ±®æ°M/\$@Â%èsjÔ’LCO5Žo‘îöà¨9ƒr7£Y'2À¡`ÞÌXì‹“„>¡fûð€ó\nTkkºkÃBêDŸÏúïlÑ.ìDSÈe¤†ÆoDÊ Æ ê\r¢þ)# ËRèH¡mÆ¤“Å@ajÊçÖS`8†˜'éÈý³ÄôNÚ¿Å\ngnü14 r³~Ë‘Kå4DË(jã¤²ÏJØ€t#á";break;case"lt":$f="T4šÎFHü%ÌÂ˜(œe8NÇ“Y¼@ÄWšÌ¦Ã¡¤@f‚\râàQ4Âk9šM¦aÔçÅŒ‡“!¦^-	Nd)!Ba—›Œ¦S9êlt:›ÍF €0Œ†cA¨Øn8‚©Ui0‚ç#IœÒn–P!ÌD¼@l2›Ž‘³Kg\$)L†=&:\nb+ uÃÍül·F0j´²o:ˆ\r#(€Ý8YÆ›œË/:EŽ§ÝÌ@t4M´æÂHI®Ì'S9¾ÿ°Pì¶›hñ¤å§b&NqÑÊõ|‰J˜ˆPQO’n3‚·­¯}Wâð±ãY¤éË,—#H(—,1XIÛ3&òì7÷tÙ»,AuPˆËdtÜº–iÈæž§ézˆ£8jJ–’\nÃäÐ´#RìÓ(‹Ê)h\"¼°<¢ Â:/»~6 Ê*©D@†ˆƒ°Ê5±Î›<+8×!¢8Ê7±ŠÈ¥¹®[‚B³|¤%ŽjŽ2¥nhÊ9EË\"Áí²”µ\nq á¥ðÞšÅŠLz7BoHô¶B„¤4C« ¿Š\nB;%ÏÔ×6º	RÔD#CŒ3¡Ð:ƒ€æáxïE…ÃÈ6¬òx\\±ŒázãK˜Ü”ãp^5c“<:P\"ûZ0ÃXD	#k÷&.# xŒ!ôG­D¾Ó´C›*)Š\"c¼2¤‚èñn É1.1 ¥/»heŽ:Ù&)V9<Êö¾·\0ì‚C%²ãÛŽ\"à¹#nÞ:©i{0«‹PJ2K¼ 7ê‚è%óz^Ã¢ìæ©`àºDðªÔ%Ç•Œµ#«B	#pÆãLc \"©\0êŽ[É`ê2V5¿ˆÓpÖ1Íƒz Œî5û–HHÊ®\"«û69Ž£) #Jüò¥rêØ5%H°éoŽPÈaR[Ã¸h³8³Jc*9¥hnR6\r[ZÊŽcPæØ!\0ë.Æí›dCãJö9;`Sðê=ÖÒù¡„^2@35Ô%ëN=²cÀ)Ú™ë‰ÄqN`‰fpÜÎK¥ü„›5\r,Û;–¡µhà±êB*QÑÁòÇ£×:æþ Vý1Ì£.æŒ|L›äï*9Ÿ1ìŒÊã0Ì6R6(è”Ï:þ*\rè²V7;U6:Œc>9ŒØúÞ7¬ÔØXÓî³¾ãrszRv\$2…˜R’!ëšl³ß©x†)ŠB5xF‹B	T3äÙ†#åŒ6²æúå\rSseœ²H–±/Cï17súe_q%'\r&2âHÌû õä¤ôK×´s¤9JÃ>åpË0ÔHÉ*rIçè 0îX× eÀß¨jŸ’P*\rB¨u¢ÃºQêD9)5D¥”ôJSJqO*@¨‘Š¥Tê¥Uº\"àÆUšµVêä4+¶&JÈÑ÷‡é'½5c	áJ@\$Eò×M;=#Á‰kB0óQ[ô1„ýŸÐÒCyk-¨„¡ãèeáÙùˆ•!0 ú?‚\\ÿ \0@\n	Óó!ÈÅÂ¿‚<f_»Íi0=¿‡”‘Mñ„Ejà“’’VKIypnIt°Ô&‚X1tBgu“hjœI©5‡&˜òLƒ}nFXÛÂâ½\rAª8ÁÅ‘œ2>‘à 1l¡óP\\A\0c\$JøÓš’^DLñ\$\n½›HlÂ˜T—ŽÐ»‚ÑEò6‡NÌ¸Í0ÒŠHÃæG¦\"Mš\$iˆ¨nÅ•k6iŸqÃCòûMÐðgÊ¨mGì7¨çÌ½K-m4Œ¸-âÀ0T•0ûªçI§|ñWÉAI\"¸XÑ™8¤\0©_/d¡Ð´.ÂÎªÑ¸Xõ|¹0F>ÁálD[ój­'®g…jQÈÍ® ØÖq.DÒC¤G8¸¥aÜ;Ç‚´Ò7#…}>EqØR4Gò]Iä7&•à(Iag0ÒÑûCE«‚ä‘É·÷jåçú¨D¶jYbRïh]p.Ùu8ÀÖãˆõ ´ë©5÷´æzB²ì.Í ‹Ï(Bƒ%Ä°—“ö[1S¤—¥˜AÒ·`æþSÊ™+`Cu'I¥;ÁÓ‚KÐÊ»7cUÖy}X®…¨&+ÒæPzd\rÞ“‹€c.a’Ë/‘|¬µ³Ä1Ü¤Â™K™d³7éz@î‘W{!·ÕtJ³¤ƒ#THér›Ü@Õ	p\n¢€–JÖJÃ?\\ò7)-(j…á±\$\rdžÄYRzÆ¶\0âV3<¶}®NdzÏ÷S…\n.pÍz!òÕo^Ðd¤¬¸À\nâ&wR%¥Lrøæº³ˆÓJ<*@‚Â@ ™ÏÑ¨A9Yàpu’¹\n^ÛSlD„¸¥2EôÊrú]ëÄ9¯ó°ÃNŽÑf0Y€ « ›r!#|™¢	®IÜ,ÃÑGfá 0¥Åóm%ÚhWéÃ\nS!¶ (ä{Qé\0]©ôÆ«;»Ok4QÑµ²æ6Mí9)PkÕ:àr½6Vª6ZìŠiÒ™£¶ŽÌÚoj˜XM¶5ÎÍÚ¯k Íº_ÚÞ8¡¼;µâbvYlyÔŸÄ&F7ˆ—ÞePÉ€káåKJ2`oTp­ÏÄæ©…’L…mÎG‰œquèÖiÒ<gëÏøhdRÆˆ&:MU–p·ÃcuÄñâ“Éyø¬eËåÞa5ý*—ü¿R“¢™¹®uå²\"`kŠI:÷ç‡ô™WÏí»©éÚUÚš×|ÈkL / †—’Wilµ0°Ë1 ó*ÚGa9ˆ`ß5£@OlAÌÿ¤NåÝ\$År­•×¯¾ÁØ°þ!%Hˆó’:kñ9(iL(†…6Z\rP(jäØÙn®ë®b¶N[¢ÐÐy¥¤r–ìKÇÄ¡\\ýôvÍËõƒüÕ¡¶ž—ÂôÈOƒI_E³O;‡tˆYçQ÷¡OÜIMeJ·6än¹`½R]Y¯5†ÂÑ/`jo™––¿ÏÜÿEzi?	ñü8	úÿ;qîW×£öƒü<Üc™ÕU7áèÜÒ_þÓÇûÖOñýÖ§ÿr^Ç‰†ø/^—ìVÅ¤fjÉìkl5I ò@‘Eê‘¢<bb\"#¬ê#§F|b:Æ\n¢G¥¤¬â6\$`‘\"É!V8Šº=¢–‘ÎðCdæ#~´	}Ž.(¢Žhn\0/ÜÿïàÅàæÀîˆuËî²Ï<ªþÆð],’A Ò\\/ôðÎk	œµ/æ’,1	¬4õÇR—ël·CÀ0,¾5Oä÷kŠçl¼\"ÈÿbIPÔs.€—îV[­¸Þ,“§XÜb0¼…™‚ÂN(b,#Î!°ÜÜ‰˜N¦î6c«ÉàË/É«2õ/Æû/¨ùÈ·Ï›êCÌÔ. eFh<&Å’–ñ%°ílÍåS1TøQM± ñR™0ñb\"ñ¤RøÐªÁèPC0´øq{¯{hWÍãð½L|ñu0¬ wnk<')C˜Çì\rq~—ñÀÈ+S\nÈ,‘Ã…ñ<|Œ€ÉËŒŒIðö	„J-Q\nF„¨Í%Ú”.g\nÑúJÈ~¶'©ñ<A„Íùp¬Å`ÒÀä/Ì¯ñf,'~ÑJ«eâZ‚þ_C3^ì¥Ž6oòÔÒAãdÉ†\$ r<†\$+~BgÝ\$²<ÁìüS¬h_Ngi2	Ò[\$Âþ\$ÈH7êT)D„\\ZD>Å\$ãÎûÏ¬ü\rhû­H^2a)î˜%ï¤Ò‚HeŽ\r€VŸK \r`@SªnåFW…pKò\"z£¼'£82 Ú¯Eê2§Ð\n ¨ÀZ\0@. Ç-Ã \$’ºßð°í¯0¢=0ë ÖòºÞâ31è¢0zdxD'xFÅÌê\0	²ÜÀògàò+Œ„8Å¶Æ€œ,bØ/e 8¬f[£ŒëáBì!2‡ ê=¨5Å¶9(ì¢ÆKè,M\"\\KDiknÅÆž¦©´: ™9RÚ8ÆúÊÀgmø8Àôcêö¾“8sê ìjÂ¸+aB?ÃB—îœìOL±óÊêl;=Ü\"¨˜M¤­<Ó·\nÌ.KZ\nƒX.^2r–B†}@ÞKbU	¨œióêDP¿	ÃÊfÆp[«t@0„ê¦HJŽ¶FbBo&t/f¬®äim;ëª¢óÊæË†<¤`ê Ú@Ÿ@…!:ãÜ\"ÐyhNâ K5Ì¬&Æê\n†×<tzM\$Ÿ=S±#ä>Ô\"ó‡b±Ë<¦>,i,¹ÀÂ¤dL¯,œ0£\"«nvCXAÀ";break;case"nl":$f="W2™N‚¨€ÑŒ¦³)È~\n‹†faÌO7Mæs)°Òj5ˆFS™ÐÂn2†X!ÀØo0™¦áp(ša<M§Sl¨ÞeŽ2³tŠI&”Ìç#y¼é+Nb)Ì…5!Qäò“q¦;å9¬Ô`1ÆƒQ°Üp9 &pQ¼äi3šMÐ`(¢É¤fË”ÐY;ÃM`¢¤þÃ@™ß°¹ªÈ\n,›à¦ƒ	ÚXn7ˆs±¦å©4'S’‡,:*R£	Šå5'œt)<_u¼¢ÌÄã”ÈåFÄœ¡†àQO;zºnwf8°A®0œÆñ—æ¡§xÿ\"Tê_oæ#‘ÔÓ‹õû}âOÃ7›<!”ð¢jðæ*ƒš°­%\n2Jê c’2@Ì“Ø÷!ƒ’”2¦C2ô4˜eZþƒÈà’2I3ÈˆŠxþ°/+…¤¬:ô00p@Ž,	š,' NKà2ãj»Œ P˜¤¬ˆ­Žƒ¨Â¾Å,Â9¤ƒÌ’2®jâBO”*9»c²+Œ#Ð:êkŠJ-¬§\"‰#r^3¼:<5\"Ž ÜŽHC`ÈŽàÑÁèE3ŽÐt…ã½&#jô†…Ë°Î¦tÃÿ\r+^6ƒ’8:PÂûl“a|\$©t°™Žà^0‡Ð(A!6#zRÕ ’ @)Š2:Vš¯ñÈÜ©Ê‹Æ•ÁÎc±\"££ÛeŽ£¨äIc(îOC„§*YÍª;n\$öðçpBr¼:ÛcJW,„©HÄ<¥`Mâ‘^‘ –üÈ,dE\"ˆr„7\$ÎÈ ŽµàÜžHK¼÷6£0Â:ˆí'Ž²(—B0ê7Yxã2\"Ò~å®®\$žæ®Öc\" ŒÉ|F”0ã,FåEãZJ0£:Wƒä1&<Â6²X9Œmí€&{Z9L³:ë™²:s¦ÞÍ£ßr\r×5Ð)ÌÒÃ¸ò\rCÒðÈì8ÚîmyF³­éPÂ\nC,Ì¢U`á–¡¬ˆŠ<oc–]p°zæÚÈµÒ”¨æì;X5ã˜­®Ì ®ÊX7ŒÙ&šŠ·tç:ÙõºN< –8ê1Œi æ3b™â6½nµ¥Ò#<h¢¯J¢SIaiXP9…-ÄöŽŒ‹À@!ŠbŒŸ9ap@ñBÒm¬ƒ!2ì£Ènš8+£-ÙÎsÈÛÁ¤àÎ2s–Ü©s«ÊŠ¦âfK @¿û,÷·îÝŠ‹–sìºn’N;^M'þ¸j†r ÊC(…£pwR‘Þ)E,¦rš@\nvªL¨ˆ¥Tá¹TªµZ\\˜±VjÔª«rÑ>tD0¨6nÚËÛ&¡MÕ %nOÊ#äL¡Ð4™ä>BHù†/çÿA´‹Ê)Ax¤p\0 ,N*d¸žö´vA\0(*¯‹¼4üÙÝqyxk“rrNÉêzDÇ\râ\"FƒxtyÏB´\nMBI&hë†’¸Sˆ©3WfÈ© àâÆYØf)„ô ÁE&qÍ‰Âd½_f·ˆá5\n<)…@ZâNá³*,¦Ç§žb‹“¹?ÀïÂ!Ž¹C;Žb:(úÎ¹,…¡Œ±! ÎµŠ^&®P4’Šk	y1[„‰ã4°@†‹‘Ã\r'p#H°VÊŠ­e°ÖkÉ9Ž!5ÅØ2—‚ŠC°\n˜†d–\".\0U\n …@‹=Á\0D¡0\"Ïà¾ÉxmL)d(”Ä@ˆmHÄÍŸ\$Ss V?'ìØâ~Bxm—ä\\6¾e°xÏ+}9„b)F‰PÖ’¡5mï®^¶CŒúdº¦\rŽ·gN\\Q,ONæ˜êMÚH‹`ìÍ³Ú	2M\"ÍÔ—–“'´-8ˆ2 HZ®\"¬W‹*ra`‚IÓãÄ[± ZNv—Y‰9ŒzQƒ¸‘9Ì\na¤…\0¦«XJE‡‹(•§÷¡M©Te¥³¸¶\"jMÖdÛ#Ä(”šU´¶\nðw®æ\r¼–0ðdS‰2³ån­ó\"ŠaÌ„ü¾Öv»iŽdëžw†WhIê!Œ.éÐ†‘`©nÈáÇ¨a…”ƒü/F-Î‡Cµí“k(`*£÷R²\$¦y‚dÚ—P£Ú¸l¢~…@‚Â@ ‘ä69`@hs5ŽÂÎ£4@ÝÍëAäˆ^/é”#ëØ”™S\"XÍû ‹¸°óŠu—¹•|BâG ‚k¤=ÁÓ¡ü!Hüv£W†àìKàA’8M825îp°Ù*%—<Ë¯{ôé/“¨\$…„6`¼8w°sèÀ—«¥b*éêF<ÇØu5ÜÜhs:’A¡¼;‘b²‚ÐLÐ&Èæer‘—	lÑÌÏ\rš„Íq!5\nÇÝ*N‚ˆ\0bÍ§eúÝ—§Éç4Õg5T×¾à(\"ÂEÆõ¬	,FD¿ÅÔ0LÊ–p*K  ¢x¶¶ŒU ]ôÖ”œY¦ÓÑ\\Ñé¼®øZjŒß§¡ÂœK§¬ÚãÔ,Ù)êMY¬«CbÂ¤×[†Ê%Ež|+gR}‰—.¡Ùˆ•`½¬×·²\\îc”7hÑ‹ÞuÇ´y®j-k 6â!Dt~ÐPÏIX)];b &å}«´í8¦d°ƒ¢~w•:kzÎé½I¼öî´\$°íÆÍà©¿n\\~êFÒØŸ#dlÏð\\ìdn­×»9/ açu€´\rÁ:›ø\0ž2†8Þeã¸?àh¢Cy¤¶S¶Ú	á§8B¾ÖÎÚÛw‡¨ùß4ç¼3˜•‹RQa×µ¯r°8D\n+(¤: Øä¨%Kþ\$ ÜužÑ!L½Z,êžžÜÁ|0…Nþ›	ÇìDà‘Ó^‡ÉgZ‹ŒÃs9ÝÍ­²lµ†ŽÖò·bhBA;§}%YžÐ,ÂÚç'È­½ùÑ|«†Í2í«\0@rl­(ç:ÃÎ°O?õŸô¤ÐtMw¡.á´«¿{4Êœ©~å§7ƒ™®ÆÙÇlü1RšN…Ô¨ü¡p)ÉîÂ6õ;å]o™PµÏ\rL} µÆ½Æ>_Ñû¿Ú[¹µ¯àúß‹Û™ê“N×[Üpòõ²gè¼§ôc?Û×rD´þ§Râ\">âjpÿBg\0.\$lêô°\0%‹r\nŽ¸ùÎt_ÄFÿ­lët¹ë€{P\$Ö~/‚ñï©+x¸O²óMof]V¼Kpóc'DŠõkÀ=ð<ÿ&>+Ã~úy|O0/ã8bOà¤¾í‚1¢&hr³¥¤!fP^ãFúÂ¦5úÂÐ¬ùoÊ|‚JiÍþš\n¬ %®^çr5F\n/¯xÏÃ\"å˜Z\$T\"À¦(GìAj¤À%ÜKHàl‡`Ú*o¦àjüZ@Ø`Ö#ÂBiÃú8MŒ;#øñBd!Ld9\r2ï£MÀêgbFIò\n€Œ pE‰ˆx¤ö&¬\"#ïN€‚8Ä‰ÄpPÌÈQR2ÂŠô…¡_âWb0#B‚#âBðŒz*’§Ë	¥t\r Ì¿†ê(J0\"ÂFGÐn\$#ø#ÈH\0E#T\$±)ãŠ6Y#.¡¨Ôncx„’HÌ¶ù ˜Ëh~FÉPLx.H¦2‚Hb†\n©mz0±VÌ‚.mV¯ýÎ¢!¢\\A‘ƒa ƒ„lÎ¼ífœ+Ð'±ïM_ fŒ*c8~ÂFÅ`àˆ…\$²y!Ã‚ê+2\"ÆM	çp(ª^MíOm‚M¦x¢†~´#ý&äögòl\nÃ*nŒB<\$ÊZ¤²¢âtIâ¥Æ;`ØJÒ˜`&)‚äÍà·¢V/ ˜2Ã!Ò*dÂ¸BÇMôqg¡!\"†\"Åö¼Y¯þÿjq’bŠ,XÂTEÀ	\0t	 š@¦\n`";break;case"no":$f="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"a„ætŒÎ˜Òl‰¦\\Úu6ˆ’xéÒA%“ÇØkƒ‘ÈÊl9Æ!B)Ì…)#IÌ¦á–ZiÂ¨q£,¤@\nFC1 Ôl7AGCy´o9Læ“q„Ø\n\$›Œô¹‘„Å?6B¥%#)’Õ\nÌ³hÌZárºŒ&KÐ(‰6˜nW˜úmj4`éqƒ–e>¹ä¶\rKM7'Ð*\\^ëw6^MÒ’a„Ï>mvò>Œät á4Â	õúç¸ÝOŽ[¶¬ß½à0´È½Gy›`N-1¬B9{Åmi²Õ¼&½@€Âvœl±”ÝçH¥S\$Ñc/ß¾õ¡C ò80r`6° Â²zd4ŒŒèÐ8îúØa”ÍÀœÁŽƒ²ïã*ÊÁ­-Ê 9b°ÒßŽ«s<ª+39CÎ[Àñ!Khì7B‚<ÎŽPŒ:.ÈðÊÜ¹íêÙ\nS\"‹ÎØç­€Px0„B|3¡Ð›˜t…ã¼Ì1cjØ½-8^¥ÍãÂ@7 ÃxÜ„K¨ä¹Ž’è¾1#£pÖÂHÚ8/0D¢ã|û@è4\rã\"d7„ª‚\nbˆ˜4¤	KÈ67£\$0QSD½c êåˆ­KV;\r#(îV-R1\"6xœ<¸ŒZKCÊ@„¶%Œþ¢c|¦þB¤#‰k-\"9@P‚:¬‹`ÖŸZìpÊ3#¨ØéËpë#Ôc8#\"©hÕ;0˜Â6ÑW è7-—p¦»Ã@ì´3£k2 Œ\nÑSU¥±Œ\r¾É!6Šœ¶C>\"\$2C#Ì¹]÷0Ø×¯hæ1²L\r<v¶:7M0à‹Hëw\\VHÅM^HÙÅt‚cPÊÈBzFË:Cžƒ¡ÕŠ éZˆ(-5¢òµ°0á…°*[­·ú.dˆéò8§¥è•PN˜Ê¦c`Z4'cËp,è ÂçÃ6>ªÉ;{nZ#}1'Ø¨æ:Œcú9Œ×29*Nc?`6Ã\nØÂ¨”¶n¡@æ¥\"¨Î<‹òäb˜¤#nƒz¦´æ éèÂÁ£#>„ÙB¨é)ð×èA6#ÊÁ¥&05ºVàØŽ—s¸\rÏ0ÎôyR,Ýc‰JV¨ŽAhá­²‡ë{HA+Ë2Ü»/Ž“Æ™S:iMaÈ&ÔÞÃ*r)iÕ;§•°Ÿò€bŠ­(’–ŠbŽ=ªIJ‘€Ìi\n)¾4¦á³Vc’I>½¦0t'dØŒÓ†Á«iG„2)gÊ)IIq.e1n+CæPL<C=ÇÀÆXd.!¤M\n (ØŠ„	ùA5À ¢‚’š@[«Â)eÍï8GTësâ{©%~`ÝáY^o•”ò^LL’D6\$”Ÿ¯³ÞSz5‡eõà=²–÷C\0>Ñˆ‡–ú@€ \rÁ½¤»µ&T e+¬ô`äg‚daÅ\rI—@Æ”ÔÜ—4O¼¹”ƒHGÍ#hQLhŒ—zÓ€ /„ eÌ`nsEà¡È¢tO	ñô)üû2ÄìIƒ:¯ŽIØ9—â|õJ}&8‚³\$Gñ7\$DºK§B`-\$ÌZ%€Œ‚\rIJ®Bré'’Ä½F¥,¤.s\0002€) \"…úÑBp \n¡@\"¨h@ &Z³VzPèõ¿¯s4‘Ò<	“våÝHÜ2dgT.ðØúi#¥ÔÀ‹¡ŒÐ©Åun´µ%N’1)iÕ-€ÐßÏIæ0Ìì	¶»ió<‰\rí¶FÑQ;T\ríB¦\"zJZKµ\niW0_@ieÍ;ÓE £˜:R´E8«â9(®>;Æ\\«ØGxsŽO¼¹Àž´*iˆrÂ˜iI!–PàéM&a!OÓ(ÏO{Qi© Ò[¬‘}yjÕ[¢¥l´lsf.&0–µÖram¤½\"dˆ„ÓL[ÕÉÈ´¥º’Yü_h¸yå¼*—TÍÃ7·	–¤*“cŠPJE-Š—Ç¹ÐZï-E„…%¹\0ÕÃpa8æÓÔŽ]\n!„€A&í1ý=Æ®I´êHÚàd)”“‘“|_)<(%½d‚\0^UðiŠ‹!Ka#\0Ës#[š žÜÖ1oÓ+@äB_H	Ãï\ráÐA‡ñ1eâlQLALe«á—ÌSO‹Iã„Á³{L8O0ðKØPdL5‘±v%!,5BdLšŽ”Ÿõ˜¤¥2FGHýË³03@J¥*&³l#¢\nB‘¨\n\ná”1O¢:°-{Ê˜ø¡)ÆòíPfÀ…½U–ÿ´\n	œ´+U¢NÉ¢h’ì¿2‘Â–3)…¦!Ç¡YôÔ_¦!Á öbáœAgI%’›¯K¦œ©ºWÌM6@X–ÕÖÄÙj)ÆÒ5¦¼¤,6JK ‘\rKˆÔ¿|oÊ„s(hyìòfö‘ËÚÛFjl3ÈU©Ë¶l\\ú”=s§÷-@HŒ'h¶ÆL`)A:Ô4ŒS*9P\n¤ë9·½¢ÒY©pR˜GÏÁ£ýB§ûß_68i¿ø_ÜÌæm¶·|ð5–žâ­±ß\"‡¯øÑ)âÒãkŽ)”ðÍg¼éCQdŒV>Ä¨¯€›Í™µ‰åÁÓ˜aby¦ŸÍ­Ü›—ÎH.þŸ½ä0¯xšºÍ—€tâÒ9Êvñ¹Ï%#oæu(pØÓÔr\n½ÐEQAkMÍBŽ¾iáÂ(E0¶[œHiû#ve½ŠauæÐ}X,™ÐG*ý\\^ÈSJ{ìp\r|tÛ•ÓÉU¿W…áŸ\\+‰{Þî]–³Œrn¤¨¼ç%é<…TúUzÕí’TÁZZð‹zºFõ>¾ôÏ6ý¢Që:§›‚P¯Sbõ{àÖ6þÂB˜l[Œ\$\$gÈ¥œ©±Èó%M—uÒrùºkÖþÔýžYÔu×*ço¬ûß+—ŽØ­¾ýòIò‚ÒGª ’þ˜çð¿¡Û«e÷øÖsUíÖmBœn\$ /düÃ\rp÷o†Óðo¶öï|¶âƒHÿÉ°Z%¦ÔPÖ:ãïxÓïÙ\000000L¹«¬*O·é·Kž4\rEE¢¹Ã€÷nº°cã¥„*\n„ ÑF ‹\$ŽFâ\0Î”?ëà5?	’Ôpr%&8c2¼®VHàŽ–Ã¶›\"”k–¹¢œ=†ê¨*Á¯ô«ˆ–©–z™\r'&(cß\rR	ežXe.F í†}dP‰ÄSC®=ã8¬‘ÄNd¬m\rÑÆŽfÄí>d&\r€V\rcÌ!î=­˜–Èà„pœžÇˆË¢èðîâ5il\n ¨Àpn‹†PE*_¢SMD\r)è7íLÉŽ}±nE	¶Ãèyí\0T…v×‚–üïüÌ\r²CŠÒ° “#ŒÎíàƒÃH8mÎ5‚,5Ñ:Ÿƒ‹\n«Ã˜}‘Â:D—ÅNF#|»êÈ0k`Ö\\ß*’ßˆ–e±qñ*ßcpGÐØ1à¨Ñö©C¤e àÜ1ñ 0=	mj6-ÊßR¦\"f2#Ì—²±î¼õ¬¶0)mòr9`š’‚Ð1ÅOc·2PÍ¥jíM@1Ž'pú¥ÜhÒ&µt\"Ú¥ët\nf„!ü}å³‘ìa Œ¥ðPÀ£\$åŠ®g²Ž}› åë\0h0„€æQR\n†-hhAä\"\"àÒ";break;case"pl":$f="C=D£)Ìèeb¦Ä)ÜÒe7ÁBQpÌÌ 9‚Šæs‘„Ý…›\r&³¨€Äyb âù”Úob¯\$Gs(¸M0šÎg“i„Øn0ˆ!ÆSa®`›b!ä29)ÒV%9¦Å	®Y 4Á¥°I°€0Œ†cA¨Øn8‚ŽX1”b2ž„£i¦<\n!GjÇC\rÀÙ6\"™'C©¨D7™8kÌä@r2ÑŽFFÌï6ÆÕŽ§éÞZÅB’³.Æj4ˆ æ­UöˆiŒ'\nÍÊév7v;=¨ƒSF7&ã®A¥<éØ‰ÞÒvwCù»ÝN¬ A¹g\rÈ(ªs:èD®\\×<˜¡ç#Ð( r7œÏ\\±…xy¤Àô¦ã)žV¹>Óä2½ˆA\n‚¦ª o³|­!êà*#‚û0j3<‘Œ Pœ:°#’=?Œ8Â¾7Á\0Æ=(È¨È Ãzh¼\r*\0åŠhz’ã(ßŽƒ’ì	ŠË„\nÃHäÂ'ÀP¤ÄÅ`Ä0  P§&ƒ“¼˜Ã1’>ó‰jR7¯¢‚Å7#ÐÝƒxÎãcK–æŒ+«–¾5ƒš\n5Naâ‚420z\r è8aÐ^Žôh\\0Œ‹«ø9Ãxä3…è…2< ãtâ7ÁxDÖÒã(éA‹ãØ\ra|\$£€Ø—\" xŒ!ô9„\0ÐÄµIZØ2„˜£\" ê˜Þ5Œ)‹D-Âœ‚:l\":Ö¯Í€´ºÀÈ\\9¡–¨ò;ÎvÚÐ[\n\$æ'FH Éˆ˜È“1c Þr˜Ôá^÷ÍêÊŽàP–7‘	Â¸ZŒ/` Žªp@\$Ã!¸(Ö§!/ËF6¥ÚŽ]š^B0ê7\rm:Ü £èÃ—JÃÕ¨ÅC8È=!ê0Ø¡¼â,Â0Éíg>£É\"®££”Ž¯ö:¥ éÓ Ü£Çbºx0Œê\n”¿òŽvf¶è#ê\nùl¹¬£bXÂ`7Žƒ»+‡EŽsÛs[²›æLÙóL×À]œÔ—Dîöó½®\\PÑÆiÂŸžŽ—¢Â¹3XªÎ0Ú »>²àé\rKø\0Xd²X\"§]nœ*ñå›Ùt“Ÿ3£Üì­Ëñ¬àôþ÷\$+®\r’Æ‚ èH@7ŒÃ2Dþ&ÚôÛ7°Í“Dû%ihë4s»;*1¼dèŒ!b0Î|n6Kµ¥«šƒ|W±®\"å…ÀO´2{Š¸Ê÷Ýêj|BÍò>fØ]ŸRàO´Ö>ô¼Hb	^jIˆ‡—òþßëÞ|	ö@GÊ›Ÿ;m0t1>åAÖ\$~P:`œCÝ‰Œ;\"œÈ€ aL)`\\±a!Æ†¡Ì”†ò”°mª­ÛÀçDõCÌ#Ä­’²OÈy6JáÌ5jØb ‚}/Éë§äá\"q-z¬­µ0@bœ”°ÊJâüq0ý?Fõ Ô*‡Q*-F™u ¤\"•Rà½Y)µ:§Õ\n£/Š•S‚%RªÙb®6A¥X«60Ñº¹(Q9†áˆ!Uê¦1'Ð¨>¢ú…È3¡NE(‚Âƒ,II5=õ°”ôAžxbŒ-F[§³RÁ\0P	@Ì£ÐÃ@­´Qv¤ás™óE<5Ñ2‚õ%äÄ™—fß%%2º5ˆœO¡rpRÎ@ PTKþ—îdÑ¡2w%Ô/°Ä4Ã2TM*ÄŠM´© PÖ|\\'W¤ä´iM*	+GÐ8RþÑ9dè¹ §–LM|ú†¡Ü˜F)róYH*€ ‚¤QªŒh°6†²>k’Ëkt5áÆ¦\\É<ü°l4Cõ¶VÏ”ÁO‚eŽ‚•S(u|ê‘	šH\\Öàn¢à€à`Ò›Èìè\rUŽ“xÏI\"²\$f¥º«Ò`/)rär#©|žƒ’Y!a½á@‚¤á°«ÍIÇeHxm&Á-‚ÎÙ‚Ës­ŽË¹—2€ÝPWlä8)IX\rÁº´O	\nÚbJ[\\gi'%C¡Y#7VÖ®6&U0r­<A5¸!ÀPOÐÄym?Žáº=õðšÛÚsºdê”#DeIIÞ<ŠYâ|\\CMpD\n¦„©{ h.gÄ¾™alS¼ºkÇªn¹£éSszvÓÉ*_ûâ‘3b¢Õ8\nÄ´Ká„#!JÑ”OzCq[ñu] ‚ ü¬/sÐ¨&È@Û](ØxŒ„øf&Ê1=ÊZÍÀxSgÝPT5ÊÌò‹qîJª\r(¬Ý¢Ff•n;÷UC;Aa¡rNP›-´N±\"É\r±±-õÂpŽîËÆG0!Üt_ëˆÀÝ8ƒBsY:7C\\À±gA“ C(†Ån+šbë%•.A¼1NƒÑoU\\í0æ'@C]‘ÐY¢=3Ï…³Éq¡\$¸ÓÞìÃüDÔ†fVËH!è1SM!„E¡¢îrtð=f0ð¨C	\0€8‡\\°AA\rXmÌž\0àì)˜oï7ÖäGîôåyú.õ,é2;\\<í¬dði³Ùä‚œ¡ˆYX¯¨Ûº:%µvÙ“‚ûˆ¾?Ê¨7<UÝ\$·vV0S×žß0[Ío]Èw4ÙßQ_~ZÜÖà–Ú^d3E8Fø¡˜Î+2-íÆJ~›;ƒPþûàü'€?.\núÏ(ã»¨¡r\nÈ÷¢Í‘Csf˜\\Éðäd‘×ã\\‰!#–s£•V>ù®Ë¢/PØ‘„±NrÃõÿ« S½p“R?›]\"á›\$‚@Ié¬™²Ò†KN§X™˜Íf,ã…É7q0@(\$\$e,Úò+d(ìÀ˜8„|ƒÉ\rgK\n/ç.õ<};Ád¼leôÒoÉj‡R|rÛ½&Þ7káü‘ä8»à&Ùœ¢O}c•°ò•R=¡<wë¼ÔEáÄ|z¿oãýAb4°ö{Ô=m›v;6\r¦\"š<lÆ’YG¶|_™¢P ÆÎHj„ÿ?ë¤¿²[­å·´¿xÓ›\0®Æþ‘°ÍY³ài:k¿²O«B¦ø7gÀÂ˜(m—À¢ƒ\\f¦/Ž·¤Ê‚*°õí&øO&Œâø…ÏsKàpÏÚ÷MÚ÷‚€½Ð¾0\"ö&òRÌ‘°w!\0Ð\$þ<rÇ&s2òKðª-Ç)/‡Šh‹G€s0Dò0&Ã,\n®ÀWàÚ=ÌÔOpò…¤~Ã\nwŽZàNc êZðo êì\"êß\rú!ð)	o0‚ÎO	Ð ÷/cÐª(®áð´âc,²m²êkTöc…\rP¦Ðm\r¯Q0f`PÖÐ‰Ñ6ø£r&ÌèÎÌð¶ãªÔˆ|ëpÿ)|‰Cäž‚N?\"lÀæ¸Ì8BÖ}FJ!ÂZ\rÄ‚Z?,àF	lâë0M¢h5†|`Â@RÄ¨W¢Ø>iPHÑBªíÎP\$\"\nÔê‹)pØöÌÑÑÌ,ÜÖ\roô»LÆ\\Ko\n/w	§lË0pÌ@ä\\È³‘¨>°ÿ¯jvŒ‰±¤\\dækÍVxgãå…+òŠÒÐ2?ðH¿@ó1×…ïâÏ…ÎºÑîa±Ô:QÄrk¤åV”æªaBZcÐ8ŒiLšX…˜<Õ -XlH¨@¢E\$²†ÓíC	ð†ø0ßOk\$ƒK\$Ñ»=%…°cjÍÀ@ÔÆX9C™'9\rDNr\nÀrrÔòxÀ2\r'òJEÊêÒw£Ta\$®\rbhb¬9Ïe%H´22ª4òO\0ñ¼ø‘Á+r©R¯]’nÏ£BORË*Ò„v§o-ÒºªfaÐXþRñòÃQÅ»‘(“kÍEróÏ-1 Ñ#m\rÒa1 ó13\"õk¯-'\r1í!(go3¢|Ò\0E­U IÜKcîÖd6*Òý+/*&ÀªtÇP\$pS2se6i#¬ôCvŽ\0æWæØ-Òe\$Ã¼†1:Hl–]63³’C«¶ÒND^eÈ¦«	©¤mŽ[:§N\r3°Ko:’´Ò0ã6*£\n^K¼<¹²\r228˜:Bp- ä¦DN-„¬U`ìì#?Lßî#	‡õ	Th/@Íá\r.k‚\r€V\rbª§â„ý¦•ÂN iè9œ:’²c²\nã=`N\"L?”-‚ø!Ì“ ª\n€Œ p&ÔÚón+hhC”j2pìö\nkGcGS†4z2ƒ-gåG/¢ÅÔâ¥ˆ€Æ#Î°`Ä#¦=ämã_0CÄÂÕ49=3f>ãXÒÂJ9ÊØ431\$>ƒ ú&¦‹Jf`ï5ÌðLÊ%¢5OM¶@Ê5Œ\0†«ù4/ñC¤õ…g\"°Œì&0(—U…0À K\n%©!RLwR ÊBŒ6ˆCSBýS”%1ß‰TÜ¾`à8FŒôB÷ÕFE\",¾\\kTñ&lYŽÔXŽ† 5€T¸Ñ\$Ö\n`Öù´DIÉ .¦ž¤ÖIãoY±F'KB`‰²[€ÔqBÜHª4(.´\$Fðk¹U\\óæl0À‚(µ= ¦†(fOŽ†+’ƒµ!>ÜÇœ4oè?„¤½õ^ã>f6•Ù+’Ì-ÄÃ\$N¯~	ç8\r¤TE„â-ÂZ";break;case"pt":$f="T2›DŒÊr:OFø(J.™„0Q9†£7ˆj‘ÀÞs9°Õ§c)°@e7&‚2f4˜ÍSIÈÞ.&Ó	¸Ñ6°Ô'ƒI¶2d—ÌfsXÌl@%9§jTÒl 7Eã&Z!Î8†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘ZÔž»	&))„ç8&›Ì†™ŽX\n\$›Žpy­ò1~4× \"‘–ï^Î&ó¨€Ða’V#'¬¨Ùž2œÄHÉÔàd0ÂvfŒÎÏ¯œÎ²ÍÁÈÂâK\$ðSy¸éxáË`†\\[\rOZõƒ?£ÅåÞ2wYné6M”[Æ<“‹7ÏESž<¡tµƒ®L@:§pÙ+ˆK\$a–­ŠžÃJ¢d«##R„Ì3IÀ¨4£ÍÈ2¦pÒ¤6C‚JÚ¹ïZ¤8È±t6 èø\"7.›Lº P†0ÃiX!/\nê¹\nN ÊãŒ¯ˆÊóÇBc2Á\"‚²j:8kÛÚ%°Ø@!0Ã,-7²ƒ¥QB+#KoüJ4Äë¤¾ŸF²Ãý+K±pŠçLxš€®“C”‚2s` ƒC:3¡Ð:ƒ€æáxïG…ÑÀÚ¼ árè3…éE2<@Ãšâ7á|9ò=\n/ŒCbz5„Að’6Ž\r|XçxÂAaX:'ã#fÚ¿Â˜£%+òû^1ÓîTâŠ1*ôê–¶/8ë(N SÅ±®RT¯F¶»˜¹VˆåiŽ¶¨œ7ŽÈÌ‚Ï¶ˆu|1(HÝ÷‹c\rã`ê¼§0Âä!ÈÎt|¸²pÆÎÖm @ ÚoŠ„çŒk‰#¨Ø:uõ!Ši(Ëd9¬x}ºÐEî º®¼Š\n	°Çr±ãŒ£™ á\0Ø7±ËØž9CkË\ràíŠçHrU&„§)ÚzŸÀHÊN.BJŒA¸²LÁU2ÐæÇ\r×Âx7)„&LÈîüìÅ[ìr[7K’äq[ÖÍ 9æ†ºÜ;Àê€Æ¢.ýÀL»„ËeYhÒ×#k¼]W£ÈC\"‹ãoiZ[¬0 PÅ,ðûš)Áo1«;vEØ»ŒÑ´©d´7ŒÃ3Ö7°²IçÈ›bê‚ Þ '£ËþÉ£Ø¶l7®ìXÙŽ^Â3Œ+ÀAë^•Ó „…˜S\rãZPb˜¤#zéJ„õ©pA9¥NR^º\r¸²X¸µKvÚËéúBC“¸Gˆ æñ]Ù7®ð­¹Rk\0Þ{‘?'íh'Fâþ`PM0Ð\0Ž˜`æË¢¾+ÀšGÜ \r2ƒPªD¨µ£Ãº‘ŽáJ©u2¨)(SÇ5Pª5J:©UjµÈ+\"Pª·W*í^«õt_×cŠ\0“ØŽN	²2où•¥²H@–Š{9å¹c.œ9@íP'€Ð€\"/Êu“  6ÅÐÁG PTI'+ÈLÅ‡2<‡‰ l'¾#¶ÐÂÔÈÉxÏ­†pNÎ’©X ”2‹RÑŽV|Ž»pÒsÑ~ Æ->ãîKOÒé:H#¥¢¡\"Èy4ˆ	š¦0ŸUò¼7¦ušãòMˆ(†Žl™†â\nÍÏôÂD/Mþ\0žÂ¢F)lž)ææ:ulÔ\$ÈHY.7Í}¦K¶*þÈ¼3±ŽPÀÜLJu’,ÑK¶¸ÕˆoGÄ1fÄ°ÏÈi5ìd•‚\0Œ#É=WÅËE)Ž|]Ðr\$Èœ3NI\"Î'ª–‘F\"QÏ9 ('„à@B€D!P\"ÒÊ\\(L´Ñ1¢É´sÒü\\ôù+X0Å»=êv ž++L ˜¬’Zk³(…k.†j	d“õvÁÔêøi	<Q´vèƒ¢}2LP¾É-[âÛ¡•\$”ö”NêÇªÉ^¸7\$¼æNS†®)y%-ÄÊkÄ	I¯Ü¡C2zVáHIX®\nT×B±ˆ,+“rd˜©CGMNC¢ûãÉPI)ê6\ní-²)@½'§0¾dy×w¦Â‘@¦š\0VMŽ1àÆBC%›­¤Ì:Zç%jÖ7&RÞ‡£©C(wI:ÝÓNŒ\"ªCF¶b½Ûªà%¤Š÷<zX]U(mEëD¼+âÛª™‹dæ„´¸©VF¡Rü*PäE*¦9I 3àçíâ±ÎfÅà5™+MÂ\r~†ä¹2Û\"bØJr\$‡9#ß	jÓ¡Ié1S0¨BHÐº §]/£ÐprÐ˜ô‡\"®^g´bèÕì‚òÂö]:K\rëÍ_e@EÄÉeù­8 Sò©žÊD3\$væ€NYÉF.2øú^~PÌY_2fiZEcr\09}°Ö\nÎW2ë—'eˆå¬ØÞ	6€ÍÐædlÌþóF„9¹¬Ã0ã¢CÆ€fÉˆèã¤N™Ñg£Js8Ã¹rðåÒ–z5[’Ÿi[W!4lMË‹€dà\"“Æ˜SRÕå_&>~¸eH/Pé©`UJc‰¬+@àæQð>F¿Ä|óœ­¯<96\"!%Õ’êÄmrf-Œ¢öºó|€WgxtÛÎôÎfÐ¨>“Ç±ÐµÄUDœõï:ïz.÷[€ÜpÓç\r§­ÈßpðQ’¥ã/EÑÄ…\0007š.¨Ä\"ª²®š¹Ïª+Þ¡ñNRd‡fætŠ^Ëê‚Š71ÙÝ‘äË}0C¤ëì‚>ÒÃx)âuâ¬¾	_ußL¯RÎ†äÔlU†”Œ•ñ.³6¥O9‘ÜIÒ7ô¼mÙì®®f{«Ùˆ'bß0+“Ë¡­fš7Ç0ºŒëI¾iÒl[6h¬½Þóœßr0æ_\0ƒ0)©Áº’gþÚk¿‘Àô‹Ê`®ØüÍó{wÎÀòÄk¼Y¨[’ëðøÛ‰^¿±xÍž6š®‰F6kùç¡¿\$_É©ÿ ]÷’x,@ôâùõŽþuc–Fr³\nPd”,‰¿ï°?À£ˆÛÑH/Iåp_ž¨oÙuj»ÎŒ~°}\r~^LÙÜ¸ewýÇOË×ïä’ø‡]ó8Â†-ÃÒÅfí\nü@‹\0€ß\0ôîºƒ0mÇß\0Älÿ\nˆâä2\"Dd(¤l€gæ„ÀOb2€¥bÌÃŒÄÉV(°,éîB'P:TÅ>îp\\eÐ`Å0íËþ9FF++„ÛoÐªðlÅ-g4?&IðŒ9K!,R_®|JÆ4?¬tîhÚä¾fA†F¡°ê&;P¸úÐrâPÂ°·®ãî£bZ2pÅ\rP—\ràË/¬\"Žz+oêíÐó°/v#Ðç\"äÁ‚ìÁÐXí(Ì*f¯àçqÁ¦jí«³\rÀAŒ,ýNMñ\$8Â\0”oÿ ªLäÒZö»1FÆqKp'RDÆæ%±(@0ÀÐ³`Þ9åøË)Vº‡!Œ{0š#f”ÐÒ%}b@”ŽAO fæ|]ÃTWã/nFNÈ6f¥¸JŒUCScûIN3oÎÏ{1Æ2NþtJ:<àØ`Æ=fhc\"AM®C:P¦ªêÂ\$íØ Zfâ¦¡D´~©Œ0‡Ò¥à¨ÀZŒb#òï¬Æ¢X}¬¨ñGP6R,rLîŒÂš#„2SÉwKbáÔn òºETåb)ãëGf\rqYü ‚ô€YÂ„y¤jatbâŠ.@˜ R\";²’ b#p0@æ›ðH5åÛ%M*ZFÓ`@èÅÇ+¢{ê¦6R´6@ÌF‚(ÄÂ0Î5ãdû£|f\"„ŒˆõG8URÑ-QþÄ½à4Ì­\0Ê|`ÞžRk¼Ž¸£–[d˜Âæü3%”®Bó,ÏÄY‘rMJ˜é§”'Í°#AZæë0¬¬#\$”Ã:ºR6ãF^@\nY1+|ªbóŒ´\"ênË¥'q=,,\0001*Ê<ÊÎëç8K¨`\0á%°Ï\r0îªeJl†f¬ä7¯ìl ÎF€";break;case"pt-br":$f="V7˜Øj¡ÐÊmÌ§(1èÂ?	EÃ30€æ\n'0Ôfñ\rR 8Îg6´ìe6¦ã±¤ÂrG%ç©¤ìoŠ†i„ÜhŽXjÁ¤Û2LŽSI´pá6šN†šLv>%9§\$\\Ön 7F£†Z)Î\r9†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘‹ªË„&)A„ç9\"™*RðQ\$Üs…šNXHÞÓfƒˆF[ý˜å\"œ–MçQ Ã'°S¯²ÓfÊs‚Ç§!†\r4gà¸½¬ä§‚»føæÎLªo7TÍÇY|«%Š7RA\\yi¸ÏÛäuL¢bû0Õ4à¢\$ ËŠÍ’rFùè(ªsÊ/‚6¿ö:³\0êž„\rëp² Ì¹†Z¶á°­«ªh@5(ló@œŠƒJBÜƒ(ÌÀ*‰@”7C˜ê¡¯«Ò2]\r¨ZDö7Ãœ C!Œ0ëLP¼BËB8Êú=ëìl&3ìR.+3C£¨ÁŠrj\nhZZ¤³o¼NPÅ.ÚV×GŒsÇÀ±Ì^\"º1«6&\rëøÝŽIèÜ• ÀPy\r\rÌ„C@è:˜t…ã½G*Œî9ËàÎ¥t ñŽkÈÜ„Nä3½ô\0¾1\r‰ðÖÂHÚ86±k¢ã}7hè Ì\0ŠbŒ˜³ÌM¨ÇM:­ê’‹‰©Ôñ4Ã¬¥BØƒMÁZ’#v¦…ÙUœ:ÚpÞ¯ÈM+Ô½µÈÄ< ÀMÒ]h2.!ã`ëÃ)o\$:1úôËm\\:#‚\rœú(j˜Æ½=¯èëiÚÌê2Ø#-†è2‚5îa”ð[oh²Xæ<‹Š\r8Çp2‰£š!a\0Ø€°@Pž9GL¤;€¶èS£ŠIŠŒòÎÊ\nñ Ôºô äVÎ46%,UHñŽc}}ÎÊ­z&L[Î?c)iZŽ¨…3hsMml)ƒo–>¢•µ{dl\"î8œ	4lpÑcEù*l4ˆòÿÕI\nÊ£ÇøFû{†ÆT PÅ²osR/ºnZãÝ‹°,Ý¦ÍµMb^ñã0Ì60+Œ0³IÐÞ §ÃÌËŽ£‘ŒØ~]8¼¡b\n9vCÏÖNl\\ÑÖpÊaL07iX@!ŠbŒò%ŠP¤…ÁØ–º¨àÌ¾\r¸z^¼¶+¶Õ<	+{x412É7®3ol,|S5Œ=÷ñ0eá‰‚Ô—<O°&˜å¨Hpsåñ\\–@àf’ÝOfµ?(¡2ˆQAÝFEBÔŠŸRŠmµ2tâžTÑQ*ELª*­O\nÁY+@@­•Âº'¯DòDè“ÁÆ7eðß£#0HÙC6ÜøÓà›Ü3„p4!XZeÔÑLh\r c¦\"ˆP	@‹D·AX\$¨³!S\$Én&Ä œŸ\$ðPûRi\$pÀg´U	9\n'PèÈ„ÐPŠ!FŒ§©*´DSÓ©RD(<?96÷OÑ0?¤Ü˜Õ¤}\"¡äÕ R¨lb1˜;'\0á6XYá§!:’`­Þceè[œ àðŸ`P	áL*&“ÐÉê™M@€3£S²êBÔ‡†ÐHä­”Ï¬FX0TË³eaa¹ÀDk åH\nt\$\$Ÿ %XÑÌå^ø5søàà*FÂ|®J3‹ˆ²äúdµ\n¹®\$èÓå@þÈ»i†ú0„ðœ¨P*VeGÂ E	’‘„šNzöGk‰¶P KÆ¢VÇ­ â€Ìƒƒ\"A„^^—8uC§(¥,’O)Võ©Ì´ÅºÀð^’G©é•½&w,ö\$0¡{r%h‚ò™êòÇ?¼4ÎYŽðß«¨äÂ³¶Vø¼Üuur­&i&H3÷EáYó”2NgÀSt1Gi!*ÊG€\n\nÄ-ü+@uò5Â¥#(¿ecTl+\0)8W8ÂÊ=—´a) ÒCŒÚôT²³EÒ¨zb‹ÑU¼ªäAƒ\"Ñ­î!º¥zÁ!âÔ\rZ„¹Ô[¥rKC(w²F|±[W †;5¶¸L	-ÛvìÈ¾ª\0Ú{\"¡€hëm72\nŒ±	€C¢GŽÅMj.´¥åTÊ¢*æïËõûA@¨äðËŒ\0k}¢´Þ€ Œù\rõX\rçHÇX’NtQxDrÎ4—¼¿–ˆT\n!„€@Ëê\rtrÂ6‡lHr4åN´L´Ñ²ïå¥wš5Ìi×r¹ÇÉ4Ó¯3¡æydbË9þ;ìzi2!2Ç½5à½¦80Ù.Å¿×Žh²¦DA‡)Ø³Q‰ú9íT§û<2á/'+¿0ùžÜINJdùtçã,¨úò¶tÈùØÇ`ãžs†{†á…çã ,N‰É‰¼£#DÃ¹p±0ê“2¼¿ä³‡ž	£OÔ8mÎ\$XË¥nÃ4HáæKeñh¡¾Uu’!&Ü2†%i¤s‰0+…0›à<ÜÚˆCRe ñ³Ö²h©0Ùs“g\"ð“F³/¬.ÒP—uç+LfSg0®z×[PéµÌÄä'îL~ø«dåµ·7*î5Ë”JÆç{™êÂwu÷Ñ(Ò¦¸„A¿Ìnú0M‡‚ð{l©wÓ%ÕÆšUçc@QG`†nÂ2óFn&8dLcjëþá¹)S¨LŠÓ\no«­§/Œ|'›‹³xkãF¤#…­ÅŽ†ÖÌ#¢·œ/ºdŒF§Á¼Òä[YkÕiDOŽ¶†‡Ãz‹fê{ÄÑÀ„Zÿ5gY®üE%u‡)ÔÇTÜ<2²n×0Ý‘—jêÏzöëŠ;Wî¯{»÷ãÏQ¬Z¾DðÊ,&`3~q7¹;!n\\g™2£Ü>\ne½âòþCÌFãÈfcY|°¾´X2¿¾Õë'ô7ÒŠïJxUìì‚ù÷Å—ë½7yì¾§F/Uï¡SA|/ÏJ´kÕŸ‹-*¨´9”rÐ]òŠfWæ«Ã¶jm<z{ýNÐþ49ÄsÍndüBÉZÃšKfýE!DM¬ö÷ÝpŽ ÞïL©¡¼ÉH¾¿Ëà¦/~¬¤ ²®äöN\0£\nîOPÕ3¯tâjÈmÌ:ZË¨[.ÜÂæôîè‹P2O\ràê°'\rÆ°5\"ì°HY/ú±âaÐ@Ãƒ«02¢Â¦.ÁÂŒFçøZ+N>…XÊ‚`©#nKF¾›/008®S	+\0îØÕ(ñÉB¶öIDcf:[+¼Zª’ \$†(Ðcƒªw\"Ãbõ†°#\$`bô_.„.Î<l£FãoôàÄ²&‚\rÏÕ	og\0ËAU‚]\n°þŸ±Dñ° çÏS\nQFÐÕ1mÇýÎè1‹Pº:¢¦_Q+bôÝ«òÀ&[;‘P¿QVïðFÝŽ	DÞ.õ! ÎÀJŠ¿ñxÀ@¨ åõ†Ül>LÑ‹M‘’E/bá‘\\¤L_Ñ?€1ÀÐH0“ƒ ~b2¥W#6]ð¾ví–ßE¨QÌªÈ+Fënv ¢ ñ~Fæ^s¢\"W/Ä`ƒ0n^2ˆ4\r¤1D¤·J6\ný ñöˆ£BîLË¥Þ*H\\­qæó§,' †=@Øi„\r&X\"ÀÞCF›Ðä?iŽöÂ1@ZeârÊ\0‡ä\0ˆÃ{\n@\n€Œ p%Pøÿƒ\0ìæñ­ÞßJÓ\$ÉíÞí\"ø'ƒÈÔ/<'\"23¢<\$DS\"N%#0XPFOìFÐX\0òH#åb/%c(\n¢¦¹§HÁ\0Ü\rc¬2p†ÍÈ'Ïün\$ïÞ\n†NK°E¦(ÂôNs'ëHŸæiœFÎ>Ð‚ªµƒà‚7»)Qæ[ÐøÑb·2NÐ®u)Š´‘>ßãj7j1‰‚\rè.Æ\"áË¯2’˜àQØ@Ä08„4 ÊzSP*b¢¹Óg5£J†G„\0jB`ìc3SZÿn6¶©À®Ì6§¢~èO®»‹\0Âc‚8I€ì4rÅ)+\$&N@fe7K^kãÞŽ832ë,RR2‹ò^óˆÿjžÕ¤d=/`ìL6ªkc5Ã1.ýJˆT²FÎF‰'qìFÇ…)`";break;case"ro":$f="S:›Ž†VBlÒ 9šLçS¡ˆƒÁBQpÌÍŽ¢	´@p:\$\"¸Üc‡œŒf˜ÒÈLšL§#©²>e„LÎÓ1p(/˜Ìæ¢i„ðiL†ÓIÌ@-	NdùéÆe9%´	‘È@n™hõ˜|ôX\nFC1 Ôl7AFsy°o9B&ã\rÙ†Ž7FÔ°É82`uøÙÎZ:LFSa–zE2`xHx(’n9ÌÌ¹Äg’IŽf;ÌÌÓ=,›ãfƒî¾oÞNÆœ©ž° :n§N,èh¦ð2YYéNû;Ò¹ÆÎê ˜AÌføìë×2ær'-Kk{3ùºš>²±1¢`÷½“¢ÈL@Î[àQ2ÁBz2§Ë¨Þ„ ¨:Ã/a6¡îÂò2¡Ä´J©'©û²¡&Ëš::ì8Ô0§¢ Ò/!àÒÂ¸+ËMc\"1Ic²à)	ìü\r)¤[¥cÂ1¿P\$T80KÜ&\nH!6òˆã(Þ6Œ££ZþÄp ­\"¤Kë¥0®’t™ÆìBpÆQ¢ð\nšê0BÃ1TÏËÌè˜7Œðšp8&j(Ü2 Lèx–\r Ì„C@è:˜t…ã½<)Je9ËÀÎÑ•@ñ!.à^9OÜ»JãØ0ÃXD	#hàÊËˆxŒ!ò¢§KŽ8Þ28B\nb‹ü¹¬ Ë&=Œèƒ%Dr²šIˆdð&ÙcJ\\”=Ï àòTcÆòÜŒÍÎë²,˜ØšKû@Ö+©ÀÜÙ3¡-˜7Û \"B\r\\3²~-ÝÐ˜Ò:á¯\"a&¥ƒ\nC-±Lèˆ2ŒØðØ­Ëèë\nvµ°èˆÈÇ0ÎòP¯&‡¤42î¼ ,;¤¼]àSÕ¼\\#9¿Ê`èþ #:Ñ¸ºj:æª´€À™ˆØ›^°«W\\:V@8åcó£+‘¡n}²ÒÞ70Ót0SÜ]> `VëyÛÛpÊ¢ã;ž„pQÃ¥Ä¥ŒÚƒÅî,(7MàË©fµèá¢3¢(ñÍŽZx†û=®UìqÓä]?qcG<4,®^öY<tØ£t63ÃböË3È\"c\nƒ{qE0s@:Œj¸æ9ŒÊÙB>cµ#”,áB2…˜Ržˆb˜¤#Y£]H08Ò17pA*ËÊC4œËÂŠªÁ?g„f\0c4ï4¬\"”‚PÍ		 (hŽ!g>‘LSÖJ„pìuÎÚ‹I…þ™“¿Ã©=	¡„¬“2?	˜w/0±Šx_’\nE’)E,¦ÒœSÁÝP·~©2¨\rÊ©V•\\¬¾ŠÑ[+…t¯òÀ]Ë\rb¬rˆ—CBËY§Åõ>Â´¢’Š]ËVç,õÃ(bkà9r\\¡ËÄfZ†™BXP!Ž¦,ó™#xuã0c æá¨ÂDd'¸'Æ›Pª/Nù9æâFÃ‚vVñìœ3wþ·IéGÐ›RŽG‘y%_fµ#”×7Ÿ‚%ä¬‘Äbh”#\rEâeŽOBI&É•˜¿ÊÑ¡\rË0ãœ“ÈÚ\nÁZÐL|¨Î®0!é¬ùšS¤É¾„E`0†¢†xS\n’pÜµBŠyT/-9+rŠAÉ	Qn¬ÅÉrˆJI|¾“))dÊHw	qIH\$2¹^“I;CaÌØLBV`NÓ)P5øu Ù‰r7d°#@ G&[ìWÍ/Ù¨NC‘;TŒ5×y\n”X\n;jÝÅža,\r«•s³ê‚{ÏÑ¾gLŒ°ÃíAèÒ‹f²‰kBz—e#Xj¹©%ÄÌÈ3\\@&\$:†s¯*—C~(\râU€êëQ0­„˜Kºà~*JON•Èš3^ÙK¾…•<˜JªäSñ#rÐ­1²fhJªo&½ÏÄèÜ3©²®I0’XºØ!X2‰Ì+1hüeN“EJªý»˜¨Œ€PV±ì]E’Â¤¢´Žò4’À )9R@/ô½¥ã\0C\r¸¸Eý_A0æ‹sbtðƒSçˆd–²g]¬M_=ôÔìˆdUà™ŸÀ¦âN¹{;g‘&XHF~­ì”< €Ý†Pî•*ë«´3à©v±Ÿ0áà†3VþÝïLË,XéÈÚio8o\rú¢`ƒK5˜õf=Î™[ºpÈ–º·\rÄÀÅö}†+*ô/!ž¥\0Paæâ¸ÄˆÔÖ6’uãbQ¦•´^LŽË:ÏèÅ'H&UÃ&=äè’vhB{¬¤î3,ûl»¤:òMâTtB T!\$6vÒLŠsº™¸8:ÂOB;&Œ6Vzé4QY€¼g£S*×ëY’©¤Öj[KÉ,K]ž‡G¬Â4\"ü4E\n’¹@tA3ÑAãFTtªÒH¶¡¯+[ãÑŽ T`‡§ N4\\ÓÄõ„g7§LP.ÐY›MÜ•¬ti8·F:Q@ç´ê‚~Åj	‡zà¾’Kx%È~R/“\0º	U?+{RÑ•é¢N.)3ÕØ<ž²2oL)‘>+ˆ‚+(Ð›6F²Û­2Ö~¬p “rx˜gE´·.&+Ûó9»ã<VKÅ½a¤0‡W:xœ1Áiëéœ\"4”y mŒ©Œ9nM¬¸ªßwRÍ•©T¿ÌÕ„âŽ_‹Sò¥Æy+ì4ÎE¢œ\0Pù\$µ±Üw›/npKyŽ¥nÚ[ž™NÆe~Üª0:Ôæ¨½z2÷f¨Ç	ÚZ5SËÝ¾&væP6úËk´fµ3¦ÂòXh{f©Ö«¥æ1€°Yy–V/ éTý’2Àm]š°ê¢uÁB÷«L0ãTT½…²–\">tt&Lß°•íÕ9.a-O!‡©¼¤A“ß)fìO9+]'šø¯+è|qZèUP:×_åìoãœzóºâ‹ì 	öõ¾××ú-)©´µ„* Êƒê`v¸[¦æÐä”•£õ€Ò~ûÕêrÊ~?Ø{dsÂ¸¾†Ð¦ºÅ|«¥ž\0C¦¤²›†ã¯ï¬rãßª†þÅVLÿqîúÛÖÿKzÃÏò÷Hÿ¦Qid+Ä¼&°‚¯ô}ïÞ*ïŠ¡> î¨ÉO§­(ÔÃ¬ÄÂ²Ë*RC\\\rÁŠc®GâïBÄÜêvÄÐ [«Š°üÖîÃãJ¿åììã¶Âl­,PÃJ¡Ã:µeØbªžÿo€ô°Œ¿pjàöOä°š¿…Þc¯‘\0phËEÒ¿0Ž¿¦tÊejbèîbçmLª]ÐÌ–¯Î×-ŽÊÈ\$Bl÷Â”g…\nˆDÒ£ÁL¬p§°üK®>*â@ià¦Á†@ä;&ž'å®gÃ¦:¤J8mæŒÆâgG(ù¥Ä÷âòO:ÈÑ8IOq\rï[l‘¯}QCèÜfD\\pø=ËA\$”p£H%±` Ì²pÑjûàäb\$V(cÈ\$Pp/&jAVí¨  ÂAwÐ¥{Q˜Q‘÷K	Å¯¡7ñ£	N†ô±\\=Ñ¼qÀ!ñ¡K1ÖqÚEQ‡¯‘\rÉ„€JAo€^„WÒ€Þf©ä!J•\r¯b?M ìXÝ‘Èõ„RÅrÎ÷QüèlU!Ø³r~²GDTWÐãpþ\n¤b’Œ½!N6ç€%ã%r,î°—R_%,ºF²Y\0bz	HuËÅ€3  Q'î3ÂÜFî@²æ#ôTKŽa~¢°î‰k)ä¤1r¤ûË a§¦¶§h_Eš2\"l`@\n’Œÿ&ü„ƒô!\r<­ã¤Vãl³ÂD®›\rÏø:í ÔIX2ÒªüÏø'öúBò|„¼\r€V›†î\rmÎ7àE]Âh§ŽîÄ:ŒàÚ­â´2nd\0ª\n€Œ pBÂN\\ª¸Ö…˜ITY‡Út-r×sT\$Ïœ>jW5ÍPw\"=âFv%®20@ƒÇL2Œ(^FÖJ«¨C@<#4gÎ­2>ÄÃ%Ï¯–·IÊcêC‚,¤”üñØbzN¦¤/€&¤bp…)CÐ?¬LYŠ†ãŠO\$Ù=_tZÎç.qœŽsö2³úãS2ÓÇ@jªcÐ²ÂKzo´@°ÎöN;A#–7ãh6Ã&}l%=\$f†ÎÀpGåÕåºFÀ†cÏ–­® µ%E#»ANo´`F4d²¢öÆ²:I2kmô}äØ_OÆFËJ€Nš@ž<]¯Œ/‹ä:& H&ø§hµd&3 ‡?în‚BÎÃ/¯–qÄJo„	´º4¦…Ã£NÁ\0Ë±6fâ:ãä€»¢l€CÈ @	\0@š	 t\n`¦";break;case"ru":$f="ÐI4QbŠ\r ²h-Z(KA{‚„¢á™˜@s4°˜\$hÐX4móEÑFyAg‚ÊÚ†Š\nQBKW2)RöA@Âapz\0]NKWRi›Ay-]Ê!Ð&‚æ	­èp¤CE#©¢êµyl²Ÿ\n@N'R)ø´@%9¨í*I.’Z¤3¹Â{“AZ(š˜ÂTq\0(`1ÆƒQ°Üp9Œ¯ðXi\$fi'BÝãðûæ2’•,l±Æ„~C>Ò4P·üT!ÕHæˆkš‚®hRðóHbúˆ°šÊ4ø½i6FFc{Y”…3¦-j´rÉ¼ê 4NÆQ¸Þ 8'cI°Êg2œÄO9Ôàd0<‡CA§ä:#Ü¹”)#d¡µîÃ ŒÀ©),zn™¥LÓŠÖ®ém&êÜ0¸NÄ.„A%Â\noÒ7ðd\r«‹’”ÂŒC8¡”h…*ôš¨ªhéZ¨]9kcFhÉ0¦:î2¢FHÈ1s ©SŒÑ¯*in‚²hÙÉ‰9!©ôL«.™Hµ—hé¡\rË,	Á°²dÄ¦«šë3H¡(¤J’XãD’ÂØí4ÆNì()|Œ’‰€¿F³Úí†‰¦Ð¹t™ÒŠ#Œšë\nÇ1Pqsåšã,îJšSæ„\në³î\rH+\r#è:Œ#eKÎk¼‘]H(BÑ')Ôô+ÐË½Ã»JrOÒÐ¼¦Œ«êÊ¬\r‰\nÓ®ò»†Œ“Îb[k¥	•J!E,àPx0¼Ê3¡Ð:ƒ€æáxï……ÃÈ6Åc(ä\rãÎŒ£v0<?Cpæ4øÐDùŒ8°Ê:`\"ü0ÃXD	#hà÷\r¸Èèã|·¾Y«ø7Œ›ê9¼‚˜¢&\r/Òæ€ÉRd‡n8ÕÄä:\nl˜¸L\0‚Ú4ÓF³wG\\#šÂd³ÆZ­.h7.Á\r®#Vµ-yº´îè„ºà& NúÔð\r¿¿5KÜD#\$Ô2»§Ú’3?Õ¦‡Z)ÓM.¡ÍhÉ Ä0üÆ¨ìU(RƒQ¸ÒÍÎIŒ#µ5Dâ%þ0Ž£`èÖ(ê2É;†X‰\"hÊiqÏ%ÐñgKxµÂ3¨R\n3zÐ¤vÿZ%U«8ZÅÉ.¶á¨tE-!Ê3”–±D‘‘Œ“jjžçÔ­ÒÀ¿QJ\\oRÑ—u‘îÝ¨ØÉäa–\"†ŽJ‰aÖ|\$˜Œ’SRÚØ‹I¥1!Ô“[KkkèéÂ’\nJŽ° FÉ®¹—^Ø±¡SÐ¾#¼Ì*s\"ÁÃ\"ž¦JFPP„°ÂA ô	>s•T¼è2SÒ‰0DdVœ žûÝ&F¹›bZÜMÛt‡0&ØE—:º6D6½2¨’ÊÂMvÁÈÓ¾ÉO oÁ˜61–UR¤\n¼ó†ÖXA\0ucÁÔ1†3âÃ3µ°7†tVÁaóR\0000†pÂŠÁ˜pl@7Sô\n˜).gM?“8ŽTRSUEX!…0¤¢³QM ¸•.ÓØ›)Ï0åï-J‘á^,…f;36ÞŠá`ËNY\"bAÒö3ëà‚ GÂpbì¦OGbLS0¸%SL›ñu\$J™Cq	{D#Ž½Jb^“IwB±QÂhagè9‰ôÃ»h!”<‚C\$´_kõ°ÁX;	aaÝ†°ö\"ÄØ«c,mŽ±öBÙ\0dÌ 2 ØËs0fLÑ›3†tÏ>\r\r¡SÂÏ#I=J?ælÉAœ1u),“HjaU(ŠŒ¨ˆá¢éK£HSÀ¦s‰Ê©Ò7èÃ¯;ŠZC¹åÌ´Ê4j²‚íá%öô–å)CCh™ôÂ¸ÀAp”UhíKƒœ¡R¤îuH™N·…	*”9Ç•+H¦Íôrñ(.jT’™ÄLòæ{‹{%*pC;2a,'Ç\"¨;Têb¨O&TC™W¡é³­í˜\\ËA (Ê\"Ùt‹Ål3ÂŽH°y;À€2–‚y»D\rÍþà@¿ƒ‹»Ÿ`€3 ÞA\0A¢Ôú~ŸÆ2Œh‡ÌþŸ á%C-@7U¡_=‡¯`/aÆ*ÅÝ%ˆ¨È€O\naP®H¾l­³P½—®ÞÂb¦#/bk¬WÖûßëc8íJrYÖ¦§ÛÃXuì-Vª„•Z‚Nl»Zy…4ãÓj¹ÚD5Ð[èÛpà n,Ì7°à@¿ià£Ë¨{O!ì_*oräË2b®Þ][®EØ‘ãbk ŸL›M‡^­OTˆz¹”åìq¢J7(„ŽÄa>ç0] !‘³¼xšuWDª‘º®'Ó•íšÚ«YÚ/×U††AÄ¦Ú7ðU_Ö~T§ÊŠ•0D‹ÏH*rÕÂ‚ˆ³‰„a[…¢2iX8Q€·#6àà`E`·”c…ðtêÅÔ¹‹šá‡Z¹rÂ4ÈGŠƒšsßFš•àþ\\ÑH–EM~Yv<Øk1^AI°êÎ+Ä¨+[IiÍ)	Í#hA«¸’ˆöÎ÷efa¦F@—AhœH¸ª`I¯ÀH\n\0¶³Ö•7·òñpI3À’¦{ÔŽîßC@O7ùÝ£•¾;Yt^eúÞÙ3SÎN+áFæ\"Ñ@iNð!Ýpá'àS§¸1Ÿ É¨×&¦:-Ö¾¡‘*­Ò†:tXOƒòÄƒJÅãT!ÜÊÞzœC5Õ‡¸]8­ëx°Ò“â?ŠŒƒ-{2Å])bq'êI<ÎDFÎ²Å1\r[ýOAt‡eü¹êÄ#*ÞÇa|ê`Ñ©ÂÉ¹Âðò÷WRí6+bšòûÁÒVUÅ©åÊÝÚ·Z-ŽH€kcDªVÊ*7ËØnMHÈ¥‚Ï»É¡XñN×CNðFq“‡…žntA®ú	>r¥u“Øˆ«Xu«¬ZŸ!P*†ÑçÇ¯ãÊîIö.„5ÛU›ûRžmå±YWxàÁypv½QÕ•\nÊ&î,¢2%ÉoÕÞ\rçL5²ºWÅìè­½•¯—çõØ.#Cô@­¢(]âŠ­¼!ÏäƒHNuìZþèoEzôÿÒp\0ýýðÂ¨,N™pý'¢QŠ¤:‹P†âÀˆº[Eè*‹„dâïü«V,PZÊ¢#¨žÊÂHÿPdÚ\n¸\\d÷Ç	Ø˜ã¯}Æý¯Ô(%¬óÐŽNâƒ	.Ý§{æÀFbnºÀî#\$\$\"^kb%ˆ8\"r/bx~eìÓÚüâ[âb%¥\r„àZÂþ~‰¼(oÛ\0000fGê@ã‚é„ß\rÄâ.úž´Ipþ!Úmúup¬LH«Q]Ž àí,lIÄ@Ï 5EFèâêJB¤u´Á/¢ÎŽ¸ð¥nânËIÉ¡ áEÈÅi®^hObNÒ0ËÃ%\"bÔ±ƒ¬olÓØ´bçíš\$áÏX-…1Þè¨Næ®(7,\\gÏåºOÎ’nQÄ*‚ûOéñ¾oî•bÅ­œØ¬ûÌê&LîÏÈ­” @UŽb´©¸™„ä)ñTU\$JîB27ÅÄéì(©D£\"#W\"‚¢êB6ÏŒæN¤cté…¸Ã\"BÐH\"Zœ!§ìÅ¤½ê¢â…\0ÂVê‚é‡.-ŒJWÂü0~KF,÷ŒúDÎŽÖH¸ØMl©ê'ñŽ×1à\\o\$®ñ¯©CËkè\\~mb5e1*£e)‘ÉìR§,,ú\\ÒÉ+æmŒ\$	¬†Òœ×CòäöhxS@ÕnfÒ‘ô(Ç0Ý.’ñ¢Ä%‘|\\ÙB©1QòóÍ¢ôZÄA`’0d'rÝ©.Oö338ðáK2DA1	°AòÚK²Þkð;3E)³I13L´s\$@ÓU2Ó[Qˆ›ÂÇ*óe3Òã	l¨(DÎíì°©ªŸ-±Ê*\n¦—²ÁE}::R_.«:îÛ9¢šî³;²®áÑð5âç'%\$,Gb>¨©×%Ò¶Uäh®	œ.Åó²	%ÒÄ©Ð^¤<+I ÂÃˆ0JœuÓŠµÞr#Y>bØNrõŽ­?r(~ÉÑ*´\"PªØs(’{ò¨qóê˜ÂNNç\\Ñ/p:Å9†Ï<Ó¹#µ@Ëà|ÐîDñ/Ãš‹\r¤é†ÕnÌV÷\0M?AÇ ‰Áè-îèlÅ¿6)—;óh™BæÌô–è†ÌÏ8/2Ÿ.ò¹J®…Kñ(Ô¡=L9E˜8ÓÖö´ÃI´²ÑTÓBÃ†5”¶¬ÒíMôÐõgÎU‡UN³Jh„¨\r©1ý8ÊÍ\n¦Ï´ÑGïé\ruOtæèïWMfÝQõ	(ÌöËT¼Rg-HâÇ%¤6èbÄèìR+C\0MÔLîª›¤^óduIS|loG’ËNòñT­VoC2ÓbSg2½VSSV„WôÍ/bçQ“\r\raôâ–y² ì•›M“'XÐÑ/GÆCµž Ç‡ZG×N5(BoÕ7ïFn\$.óu¢Z®ÅWNr\nAV‡ð‚Í”\$ZîÄ*H„µáDãK´ß05Õ,âþ÷ç^NUBnÇF[5ô«„g_ÂaNlÕî|uò°6 :ýOõ…KZ¦«aÃbÖ±v4ð–8u´j‚od•ê«tWc)•_•ý&E:t¼uõQ#_`£4¨¬P—9û^[v.Žìð‹:V\0*/àOÖš/Ñ;Õ‚*v¦î¥nîöŸ=2Ì„6‹Hj¯’mÏÂ²ö¬ðOÞë\nŠU!N€öë[jq</³ë_F“9cÖ´!ÔªZ„©oö1p6¡Q×pÏ3EÊ¯+¨…X¥Wµk\$–!\n‹V1†lCo\rðý°þÞoÕÊ¨3m1´£t°/+—S7µŠ›òou²›uõT&X™Wg5.05SÛ'DdDu¶åb8ŠËu1”·7y©òŸf\$\"ä\0Xb0\njN<w¬? ë—G3¶É·	Ïó43v³Ð5Ñ—÷q'W	97Ë5ã²;``è@Øs¶)¥FMR&RâA’,*t/X˜ñJ7ÖlŽÌ€¦7¾vàÄ§,d\n ¨ÀZ\0@c ÆhVöŠ‰¡WA/ìh/Ê–NjÿfÕ„Ç½…wÏ¶«¯»aDOFØj˜nïÆ£vu'QŠ™…\nNèŠêÔ8°bWñänR	¸DÀóFT<ÚIÃ t–³˜}EeaYŽ\$mÄÂt0€¬Ê5’¨Ô¹¥	!ƒ^!ñ3> AaGV\$TaG£3f6!áâ`˜Æ«ŠE½Êbb£È?\0zdóÍïF„¦sh–éŠEKqFëÂiAƒI2‹97}%¦ÚÈLO×qãGŽ.^ËPÙ¸S&91Š9I6)Åj-t(à¨@#Ü>CÃ{˜.»àÞ\rÌb6¡9ZâÓí7µ{MÔÇ‡ W¡tžfß•Å,Œ') ®wÁ\0®)HÀ]™½œhëìÚ…™s‹ÞK‡R³i¾t8øT@\nÀÂ`ê Ûœƒ5NgÞ&W'nå`sëFµ:·“X—¡d†ë€íD†]¸–²È0Ód<{Q4©G¨èpÐy\$ïŽnÒJ­h¿í4ÒyS¢„‡'9edäb™\0Cgp6j²Öo%-\nç£#ãO¤k@uE4Œ‘hQáNA )!9¨„\n ";break;case"sk":$f="N0›ÏFPü%ÌÂ˜(¦Ã]ç(a„@n2œ\ræC	ÈÒl7ÅÌ&ƒ‘…Š¥‰¦Á¤ÚÃP›\rÑhÑØÞl2›¦±•ˆ¾5›ÎrxdB\$r:ˆ\rFQ\0”æB”Ãâ18¹”Ë-9´¹H€0Œ†cA¨Øn8‚Ž)èÉDÍ&sLêb\nb¯M&}0èa1gæ³Ì¤«k02pQZ@Å_bÔ·‹Õò0 _0’’É¾’hÄÓ\rÒY§83™Nb¤„êpŽ/ÆƒN®þbœa±ùaWw’M\ræ¹+o;I”³ÁCv˜ÍìMÔÎ\nßò±ÛDb#Ì&Æ*…†­¦0•ì<šñ§“—P9P¼æÙçÐÊ96JPÊ·©#Ð@ Ã4Œ£Zš9ª*2¨«¶ªÒ¸ì2;’Ù'ã˜Öa•-`ò8 QˆF<ã˜Ø0B\"`­?ˆ³Œ0¡¢Ê“½ƒÊKª`9.œÆã(Þ6Œ££2ô I˜ÛŠÃL\0:¼hpò¬Äjÿ§£(3ÐÉ[\r§Åð\$5IZ0¶ëlXü\r#@Ø˜n\0ç\nƒ““9Ä-,å:'0`\"É Ê3¡Ð:ƒ€æáxïI…ËàÚº¿ár&3…éÍ:<6Ctê7ÁxDÖ#­HéD‹íÀÂ7\ra|\$£‚q\$\rÃ xŒ!ôI Ðµpæ¦\nbˆ˜4¶IH­Å.P@2Eñ`´7¾¯c€òÉC¨Ö:\"\nCÓ\\8ÐÐŸ¯—¢6ì€:Bs£MØ×£ @1 ƒ |ßwèóßWàÔÖŽÈpèbC€Ê1B¤F	r:sp2ð‚:µ¡\0“ŽC-p:E´8Â:ƒ¢xñŽ±Ýž8Z,`Œ:Ö ŒùÎè¯oÎ_/ŽP5ŒhÞŸ§¯•¯%Aƒ#\$J´8.]/’˜c!{µŠ¾#^mfc`ÙT7\n`æ1Õèu”-o=î=.#¢l1™C´Þ2oUÖå¶,ÛxLÕÈ¢mcD³xYû²åÄ:\\ZÈ•/]§6pEõ‰û‰B;#v{Z#P\0\".IÆîîÚÁÞÅ7r|W+Ö[;±™L¼Î©(ê˜7ŒÃ0ÙL%\"xÉ?”3«*\réÖ7!h9Ž£t9Žc6P\$¥D5ƒ—ª0Œã\nê}x.7cƒ(P9…)HœŒÅc¢t^Ø£ZrS\nA”v‰ŠÌ)˜‰†ÖPÁ\0z4g%ä¼´æóT	L-a”1TäHC³p.Fh:•T¨Ãqý-g”ñ†ÈŸ ¹YmDÐü‡3÷`˜a%\$®@à˜w\"kè«‡¤€à*„\nD(¥£”‚’RŠYL%4”âžkÄæ*eQJ¬UÊÁY:EnÅÕÚ½Wëa¯¦:zßóìeL89=6/	žàiTÁ«‚tˆ`ru\"Áˆ<”BjMÉÊ %%ä½—Ó0@)çd.‰„ä€–›R5ñü³,S1Ž”ä*ñ†/N”RDVÉ3ÎAN~«Åü&É9¤¥fÅ0ˆÄ.‰¼|A§äãH—øzÉi/&/RLXær\$Cû•+ÔóÀP´têÜƒPÖ”âRHXy3ËL4¯£FÊ–8nÆÐÕ²âËJÈ ÇäþÈûÏù¬\rü1’>«p}””ŸƒÎñÏ)<L¨}…\0žÂ¢ÓZ³Y\\XD…	8\$à‰A±6¢Yœå%bæN(¡ªr2¾†ž¬ÞO\06ÈRkÉ|8+ì¹‚’'‘)†(‹`¨ê}ŠÔ‰²¥™<§¡KŠd0êÔ—\rdüˆLRÔDÎAv92Pðœ¨P*ZËYÂ E	¶¯Úrca­²»9ªñÉ*Á\$¨µ­Xš8¾‰|ÃÀx!æ=àÕ3B Q!±–T¢ˆ	ºð€ëdÆ?pæçvI¸”„G0ìÜÓÕ\"O²²[¡‘GÎÒ8^àÏ›Žoù6¹¥àµàa?…¬7½³‘fãò aF\$#el[`tA¸ÆŸú²EŠp:Wèé\0‘RÌ«²RNK”ëœaŒÆ8%ñ^àž ›OLåÐ\nÆ ‚¡€]Æ‡ôŽÂGÅ-“€Ælƒ%e–Ü˜:+K-_Ò !ŽPõÃ´ØËÛÇÀëèÅPî—Ã{?]8À˜4XÇÚ(xD­û²ëŒq˜d?!ªª Â~º±­ï±Ç,1Õpõ+êØ¾«¢5ˆ‘àÎj_6BZM3'Ÿô¾ã²¹vÔ273)ÊÉ¯A¢ûsPáD¡TŽOë´‹V­Áu²0ä¤Ç‡×C`\nP „0'~ 5G‘pß:\r{ª‰T4C»&Kþ ëè•æ\0fm\0k`†bF˜M7¦\n	 Âµ¹Ì(:°Û<!tºt:¾KgUÅò`Í\$à\\u¥ƒzž`ê¨G—JM³\r:ÀœÈ”C¬ËjN0ºà¶jCÙ© ö½„Zƒ`“rBá¶,Ò\r5}kK’ND‹2²9¸ìç6HêUè0”Ì\rR|U\$¦ŒÐio»¶¹ÝRszhsá½ö¶éÞ;kniÙ¸Ožê1Z§ŸîCH\$Ým©	..#n…¹’ðØ©ßÂ/%Ê\\\"&Äâ?’•¯T“Ñÿ^H£«òf¼šñcò’<C°YYNÜTô£Bþb¤1¦º6¤Å³VJ i_ú\"P…F³Ik<ã!VžaÉ/@9aØò¤’ƒŠ´ƒ&çt<ž²]¨.Ök}‰ß2´xð4¥í½¯rœ¾û<7r\$P’œY€ûa¶É+\n÷Îý€±wxí»bÝwÖ#â,7Šì—ÃWÖ£]y@D¤@ß¡àß—åDm«%26ÎtJˆE¡.Qg—”Óƒ(lD¡:»Â7ìbð	‹C¢\\`Uí‘7Ø~3cwäFû'QWåué‡9`,*÷>ZçÚëŠ@ü–\\Â–çÊýg3ö-œ4dDç¹[oÜ×?¾S¹ýëaø;ÏÄîaO~¯n<iQþ¿eÜþÏÌv¤²ýOäÿà´1.Æ>ãòGE¨BJû\"äiL-\\˜0ÞmºÙ+”ÖãðÍ¯Â‚0Ebíki\0míj¹M—p\\00#®Ö.ÙRÜ\0ì%*¬««t8ÏûOû‡÷L¬•á0+Ðx¤Ð€ÕïúnéŒäÌt\ràÔ^dB\"Év'ð¸¯&tX\0êE€ZKø&d>ƒb^gø„F|‚f_P¾ÐàRðÄ¯k”Øi•é³å.¯ÊŒn*êv#fæü¤BZŠ2\"É/`@B‚²”¢O	Ì\n’ÉlzL¥æ&Ðð€¿KZB³fÅT`°)‰Ní1W/îð°‹EÑÞÿÁzYÀò¸EÊÅ1n;Ú(B‰ñgþÍƒÇƒ—ðñÑ”ŸÑŠï0ª\"o*ëª(Š¯b†2gXqã—q¤o Âê¤Ø8f(T„b\0–\$Á|ZBÅ	2A	Š'P  c¤”¦IŒÓìÂp†ÿ,Ï±ýÑ\\ñÑù¯Õ©\\ñÌh8¼f Ò¸çõ¥Åë†žFhlR&ÎQÀ8\\%àö‡>\$¦”äD¶\rbzA1%Ò\0ÿ*\nd%æÆÿ‘{\nÏç&âs'1 îÒñ„í'Ò`q’w\$%%Ò#æ\$e&qiæ\"øð©))]lQ(…Øbr4uÆ&O\"æÊ¢ûku+RÄÊ¢(ÕðšÉ²ÆŸ2¯NM\"§Ë-ä½+åØÉÌ DÁF‘…ƒîÎ¤4Ï},²\nìP¤ÄL‚	‘]+DÁ1Lí1“.2y*\n4Ë’#ÞšVç¤>ý#ÝÇ­ŠTËf\0¹‡¶àh[ÅI¬55r.m–ÝÃ]5	Œ•3hÍ\0æá\0–\$r1†\0G@Ø(\$´\n³Pièx6B(+\$ÙâEbz¯3¢!³VíC\"A¯\$#VÀòtv\rtI@Ø`ÖxàÖtDåé¨£Œ('È[â&ÃC¤GD+‚PÌj…Éâƒ¯­\0¨ÀZ&A\"6:ÍÚ˜\"\\uQ\nà­¼ÖÀß\n—AÊÇ6pPÛónà4©±7”2IÎïç`\"¢ª”B:#è@wGx2`›A ÌJ	V¢FD£^ë1H”p)#d`âBô¯z„S\$¢ñÙôo3ö\nr^ê¾ED`	€Þ/ƒ­J4¦_MÀÐ§S%I±IÍ2ñìZò0>w'<-ÒD”Èï(6{àcLcñM†óÆ`•±N/\0û1M#\0'V4ªƒ§þ\ràà»E.Ätô0gÎ„QVJ\0óe¥Ê4ó!4c¥*²X\nÊŠ0uu;¯Æ'±)8RãT5«ªÓ¤ ,Š¤´sµî.h@‚&oeV£\ndIM¬9#s´p1†^·ÑG4Ü²ç\0\$%0¥‹V¶+7Y+<2f+NëøhRm)’`Mè.»€­:È&¾Df! 	\0t	 š@¦\n`";break;case"sl":$f="S:D‘–ib#L&ãHü%ÌÂ˜(6›à¦Ñ¸Âl7±WÆ“¡¤@d0\rðY”]0šŽÆXI¨Â ™›\r&³yÌé'”ÊÌ²Ñª%9¥äJ²nnÌSé‰†^ #!˜Ðj6Ž ¨!„ôn7‚£F“9¦<l‹IŽ†”Ù/*ÁL†QZ¨v¾¤Çc”øÒc—–MçQ Ã3Ž›àg#N\0Øe3™Nb	P€êp”@s†ƒNnæbËËÊfƒ”.ù«ÖÃèé†Pl5MBÖz67Q ¢ž>Ügâk5Û3tâÿr¡ÏD“Ñ‹(ÅPß	FSÔìU8F®—ÂÊzi6‹3ÞiŠI2Ôósy’Oõ”ÏÂ\nE.š¡¾Ššæ›/bè†;Zä4ŽáŠP ,°Â)ƒ êŽ6ˆHÂŠ°Nè!-Ãä†Bj\n‘D‚8Ê7£(è9!1 ¦î#Ãjø+\r#”,¸*á 9|†\rnü1A\nxÙÅ TT9¤úÍ	¼£JlÀ\"ƒ(*5£R<ÉÊÌ|&&í`Ê3¡Ð:ƒ€æáxï9…Í´l¨Ar43…ïŒú< #pæ4ãp^3‘2:M\"ûP…a|\$£ƒ/Ã xŒ!óøÍÅ£ Ðú³Œê9 B˜¢&=é{¨º²ˆð:% P 7c\nD“C;Z2KH¦‚´ÂLðŒì¸ÈâX–5ºÊ\"pÞýØƒ%B‡¾Ãb:!-³mŒ6í¾5\$·Am\\–›ˆ•\rƒ€Ê1Ëp`%ÅŠæ98ƒ\n22²ó\$ð¦hHÊ;!j4)3Œ#¨ØŸàƒ`ë-Uã+(Ã¨Ü5Œr´´-ƒë]Â.›°„¯ƒZŒ9'‰Óˆ\$²êÈÛ&#~U‘²ç\n\rãew/¥Š¦à`Ø¨Ø6Yìº(1¡nýrÞÕBbÔ2 àPæåFVkâ“[CÕ…«6ZŠ´Š©ö	XëÈË“b¦úÌ´ò¸Ã´*ŽÃ|<ên0öÂ:lk’è»-:Ì&Õí\0PÒêâKæ|1LdD¨ŒÃ2t¨%âxÉ+¤ÕD¶7²Cj<³Ôê1íÃ˜æ3aA@¶ÐOT_Î/›hÚ[Áî: !@æ¥èºs+¾5*Zæˆb˜¤#Ánì7x@3#CnÃá‹µ£¢_*Êé½Ow;óU~¦ê5d–\rŠ·ŒóPhËÔð­²Ñ,Ì¢—‰°Ú9 pØæ;£O°Êizx©ÆTÐš“bnN	É:'bÜÄ“ÐrO‰ùÿ¨¡T:‰‚H¹F¨ö.¤”¢–X«ÙM©Õ>ì‘r£>ÆuÍBH@Ø“š*\neëŸTo	º¨|DdÖ®rHI‘`oìÈFŸ¬‡È)½ŠÌýb¤ïU!ájè4†ƒîhOÔ8xÁ (\0PRI\$É}¸›€ÞîXvJå@É¶Ò\\L	‘4¯ˆì!ÒH¼e(Ä2+p@ŸÄUˆøÆwÎyßR²`\$)rpæ«ˆ˜y1dœ4ŸbÐOÕ@n…fÍPâÃÉóË<Äp ­hþ½dT3JþLË× ¤ä¯ø˜´âÐP	áL*<PµƒQØ[d\n:°8ï-¢Ä¸#ëiÇ)†mNz‹Gô8@ÒiŸ\$Ø6’ØkËŽäÀpŒ\"é>Ç öø^¥YDÍ<¥³tIƒY¸¬TrÁRÑVAÌü†€K\"±:Æ•‚Ð…(@‰ó9\r é¢×òkU	­gè‘‘äJHR=\$¬à”²<”(d8&a*°ÂÍ”C_•´SMËƒ’'ÆÄÀÆ“pcÒû~%á³Q\$ŒxrŽ@é¸JY›bDMb¨Dh¾Œ˜ot+©a‘³âòC²µ \0\"NšA%P¥õ‰Òl§ÁÔ'X‰.%Å‚oR\"Ü])\nØÊ%xþsIàt®5ì'‡2f®ÀPZ=ÆÅƒFöeÑèzKA\rh–‘™—de…ª’‡Ôj¨ä46‡èJ\\,Ë²GØÀPî­¢Ê/–9h!0“&Ž‰¯k„˜·/ÀÖå›¡A;†¥™W‘ D?í¹ònHMÇ¤Ý\"Ë•IH¡ºa±\"+hbB×³¦-ÉêB AXQsfáæ’›aDC‚\ng2_%oãwo'¬ñ\$‚v„ÂT\n!„€A'Ü)š›¤ÈÉƒ?;iK¹!Â—“u¨Ü3XñØ‚ò°ìL!†i›’V3‰.&¸£[3JVÓð|Ol2½Ó%‹Ã#å=AÍ®G·ÂQíf)0åX«|qŒen3Ç˜ÔP¾üqŽ®ÍÈnT¹ŸÌƒˆƒH.È¸`=a¬‘ 4ÆÆÏ.Òœ¡2‘ñ¨ÙXœd&Ý–²6eXç0ì—˜òxaÇxõ«ÅgÅˆ3s¹\$ÁÕ¥ËŠñ‘ã9ßÎù4Éd’Or|¹°ðä|ˆØ^æŒ\"™VVé\r\$IŽ•ÎG»-iŒ˜ûè#ðÓÄ)£j¹—‰p	ÔÙG\rVGÌ–®Èê»9ÆkÏ0wCšá]”TKHN#î¶€lb„Ê)Q*f!°\"ÐKÍí;Æ©ÿ¡Cþ®M­Ù2áÓié´„‘e{³Õ.›íú¢\\ÒÁR6¸Rû+…tHÈ¢ú2D{z1»è´Ñ\r°d†RöOÈùp¦‹YmÉBÃ™–T¥PðãÃA\"]><O†B‘Ãƒ±¯ä¾Úl%Kˆü—I¾,Ñé[ÞKv?“ªvðˆ±ò®¢Æœ»P…ZÒ¨v²FˆÂR’ÑÁ¹­Kð++aÒºa\$&tT n–]º’Z\nÅë£Ò;oo”Ñ¹ð†rDs;]‹¸1ÅêpÎÃ)&t;%*ðøªG)Ñ¡¥>,AOD…`œÊ¢w|ÃTƒ—9îÜŸ—©à×ï5+½ó/!Í|G´¾G—vHŽ­çÉ¥ð%Ö‚ÃsDâä©w¼÷šRþÊø›\"z\\†s_© ~°¡úþa”ôÙ7Ðc-{i±ê#¿»\rþ·ßxìÕØ³f%0úÇãzsò}_Ë÷¹GßçÞðñ7\$7ZÚ}Ÿ%Rj_â¹ß”Fðï|cßêü—Cöä®oâxÝMn(ŽÞÖ27ºíeÞvCÄI„\\·ƒVI’}ÄŠ	ä*¢K\0ˆz·£¢Ü/þKÈªÓj\$c(¬6‚¤*‚mhxf+ÎLæ\$>\$b™‹ðþKžŸa¸kŠgŽh¸î`ºË—…Ú]ë`Y*RýÎÈ†°|>Îðý+E”áÎlloâÑOî™†¾cê(oÎïOò¹Ké\n:ö–çë}	O2ÿ*»ãï\$Š¿J§°¦H«<`BX^eŽB¥æÖ¨ê^ý€Ö1€ÞjƒÈ¤O´Ú‹\nÀÜ†«áJ!+Þ÷‘\0ðïï	°ÆYÇHbæ2\rF¶¹	™°ÎñM&0JÍÞ¿o²õ¢ú5­\$6BJ\n¬\rbf\rÆ‘\n¯(ï‘SfÝgCãp¶û¯,Y¦º(qeðÒUq‚Ò\nŽÏ1_eâi	Ä·c8^PÐV1NºEv»‚váÃê§jŠº»d‰¹GQÎÑk¤ÍÄ;Ñªr«µ+ºCp¤·ÄŒ¿±Æ|QºEñ¾@±ùqvùÑ˜<0–çò³Âx/cb-%opŒ¢ørN„X¯HP¤4÷€«'Bø²8!D¾*(<ÇBö²F9mRÔ2P3L²%èÒ2Ioe\$4Zb^ô¥\nŸëŒ\npòÂƒv[Ðá&‚bD§ìbO‚BÂ*\ngÊ2©)m Ï¾>ÅªT,µïàˆÏƒ\$î(EÌ‰+Nbr­s*ÂôT2c,L¦ÏÒ?*ä]'K†EàØoBÚÈëŠD‹@ê7ê\0%àŒœgdæÅÎ Ch\n ¨ÀZ\0A#ê8âðn.U*¬ÚÄM/2*Ê„öc&&à¤Ÿ%³4Ííe2Ï½&ï¤1,#4X®z¦ôZ´	³Àò¬®M`æ¾Rö¥+òHç•7f€ê©šï\"¯-Ó‚3‰É/5R\0\rË6Ã‚B`˜\rãl8æi:Ãì‡‚4\$&mÆˆéKÒ½ÎXÍsrK©„©“Êúš¥îbóÖÕ\"x€+Àä‹Ío&©sà.ƒ.3c2êŠ\0à\$¤lµsí6˜VP†/€’dh‹Có8EžäÀÑªÖ\nÎ°'‰BŠCò]T0'T4Ëp·ä¨–å¨};lZ\nÀÂ`êBà	ô='À\"ßF¦\\¦‰é¢Ê0ˆ\rsÐ2Ž¦ˆZ6Cöc êˆeÎª´=Ò7>’rmïøH´’¼8C@æ¡–& ";break;case"sr":$f="ÐJ4‚í ¸4P-Ak	@ÁÚ6Š\r¢€h/`ãðP”\\33`¦‚†h¦¡ÐE¤¢¾†Cš©\\fÑLJâ°¦‚þe_¤‰ÙDåeh¦àRÆ‚ù ·hQæ	™”jQŸÍÐñ*µ1a1˜CV³9Ôæ%9¨P	u6ccšUãPùíº/œAèBÀPÀb2£a¸às\$_ÅàTù²úI0Œ.\"uÌZîH‘™-á0ÕƒAcYXZç5åV\$Q´4«YŒiq—ÌÂc9m:¡MçQ Âv2ˆ\rÆñÀäi;M†S9”æ :q§!„éÁ:\r<ó¡„ÅËµÉ«èx­b¾˜’xš>Dšq„M«÷|];Ù´RT‰RÔ)·ãHÜ3½)CØ÷‚öµmjˆ\$í¢¥?ÆƒFÏ1EÁ¢D4æ„8±ª‘t’%L‚nú5æ8¦¤ì‘x‚&‘45-èJÌh%¬éz‚)Å¢«!I‹:Û¬ˆÐµ *úð±H¨\"ŽÖh\"|˜>‰‚r\\-q,2ž5ÏZÈû¡¬”¦¬E\$‹+\$’JòÅðz¢Å,mZHQ&EÔ‚A6”€Œ#LtU8²’i’RÚrX\$ŠTf·B°Ò9ƒ¨Â6@´|˜^@­b1'¢ñ\"ÜÈËŠÒÈ_>\rRFÅ‘\nl¸¶ê «ÌqÌ…\"¤„ýúÐfDÅ<ï”¥]Ètx0·£Ê3¡Ð:ƒ€æáxïk…ÃÈ6ÀC(ä\rãÎŒ£uÈ<:ãpæ4÷0Dè7Ê:Y¢û¾0ÃXD	#hàå·(èã|-ìã# én¦(‰ƒK®Ñ1Œë?OMÕªÚšBµÓ#\"Ð0|î‹¼³µ‹«Q@%¯ŒÆYÂ1Æ^ÙÇ38Ï'ùq ¢6Ê\\ï^V.ž<è`£ Œþ’Îiz>œœ,5D§(”æ‰ú½T±—²Bh	Ú^§²Ú0¯‘Ð\"Ycê6\0íKŽ£*IãJC\"’*5;ÉºÍ³³³ÚÄªŠûû\\Î^ÖÉÑ™ã\$  ™¢[ÔjCöó±ë«;[	Ü)BX	´5Âò¤£ËAOZ™;>œ© ™š<,5EÀ³¶q.íiJkÕIòÖ!«›6Åãp‹ÿŠFcKg<ªÂ¬F@Rxñ¼­ºq›¦YŽšÅ–è¬¥VÙÝ`hy†MµYñIÎ´°×ƒÃi‘yŸÒ–ÒatcÉ(Å¾²SŠRyÏ±ìööc P·(f,Ä¹3ìòÛéclù§1—ÎKk‰W¯õ8«Ó\$¬Ùã5íÐ9“v‰Á\rá˜3ÅºZÄò8/+F@Þqjø €:® êÃÎa™¹‚\0ØÃ:`°è(†C8a@@‚-´Å¸ƒ©×Ì–²ˆXÒ\"‚J<!…0¤žŠ=Ä‘fjÌQ©u)Éõì‘ý©k}¤DŸÄ8W_D;<Å­Ï¿’O\rawm³†\\	8°Š¥R(´Èd„1¯`¡ÐÂÎ¸r8²œ9‡uÂÃƒ(x\nL2†Hæ±ÖJËY«=h­5ªµÃºÙ[kuo®Æ¹W:é]k´®óº¼— \"^Á±|/¥ø¿˜`Œ„ökaA„5œ,qVôA\rÌµ¢´M¢‡E„P‹(âbÌ¤K-CŽ(‚+4!\$\\1-faÈA!•(’M	#¤xŽ%´1J	ê!¡\n€H\nê«râè	t6¬Å˜±{‰”iBdÔÚÁXñË\\u„­°ª£bjôÝÄ’UFtƒæš™Ï{9`h•FÀMè¼z¨¤\n9¢ª^D‘{Ý¥m<•¤pIy…á4°ã†ÝXˆnaÇdí‚”[Ì¨˜9ðÚÃr¨ì®P@â{:hç‡°iŠ€Ièµ/Ñ€žÂ¥„\$Î¦ÎåQÊzo	\r+B	š© Óá Æº¨]“îO©Þ8‘‘£Ì”ô±îé<¦rý“¬÷+œ9”#toøˆ‹ü7­¨`ià‰„ÊÖrŽ	ÉY*QµðÃƒJþ\\-ÖsÖÊÜH–ñÀ[ç¥ÉRdÜ„É;+q¡ŠShIQ’{Î<'„à@B€D!P\"‚\0Q'•›Tæ©ËEq*\0¤^Ð@(L·Òû_‡.Dž\"m)lˆ¸âûä\"BÊÒµ’çÕ–|å}É¨…€š]y”r°äÄ»¢ò…`=Eã³˜ÖŠDûÒoÉºD3DLç'”*¤^–¼sPY0òŒèžü,Ygôz£¯ª¦+žJl½hD,Aª’¡„Õ&&ÂÕŒB†6–ì´\0|¢\rÀ?Bnýß²|ÙIôÀUzI‰ò3€«Œ@¬uÈ6˜ª^¥VI[+!@()UþmÈt]¸Žœûfb‘;SvQR`&ß5£u)¤Ü_7\\„W‡Üˆ—BâStÙh\$‚zÿ'aw µ”À::A—œÃHzoA·ÂÞ‚˜e9aŒë†H—ÒÚE0’Ò\n%¤%ç>R”ë-àÒ¥öµnÁ¤2‡us<ã»[×ÄÊ“’4æéÊ}¬áñMàí4:*MŒSq2ø’)Æ.ˆ]Ú*Œ*-âÖi~Ž•¾ú\n-&†I[tçc÷sÿ°jÍ½“Ìó¢ÆƒóDÖM<\r@ÙŒ¦0Ý~F¥}ÏAÓ[ºÄ52G(ê•Åó\n!„€AZ6ñÎ†(áúÀtÃ…Ó–¥¬I¹öÐ²éåãì¬Ž°à^:©²|-G­PÞ¸ûš•5=N›òw!\nD‡)¹y7Ï¢«c0ì²‹¢ª€LìšŸ³—Yc{e¡íÍƒ¸0çÝ#òçt-Çî£šóØÉ¸‚î}öB¿”ûàYCð¾®êCoÜò—uñ†6›÷N7znÊ0Ÿ¶Èíw™:ÏRò>L‹vŽÿåÈ”	ó=ß¯Ò[+–ß7”í>Üúß5S=éu÷ò>Jü/oÚþ/‚5 ìÿŒiØªÜnµ´;’2K&^\"-¯^Lb¼ÆªŠuªBž¾cBPJñ`-éðå¼v¨ZiüÎ°—¶IÂd)þ1OðW¬r)Ç|4ÃâÎ¯ÈwØ.%jVè.ÁËÂ'2éÂÈd\$2dŒÖ=ç¶ý2?.žB§JJ¥ˆ!fKÅ4C¤.5gTBž»†v(ê>ÔïŠÌ˜zƒpÑjÔÉ*ø¤?­·†ˆ Oý*ZÎ°z×¨R“/@õtÏPx-pœy­Ù\n#cM	§˜4A\"Æ¶ªæe\\Ã…o\rA¡\n»ÏX3¥8‡G&Íf¾<ÌÆIËD.ÉîåìlE¨?ÍàÈÄ,këƒMPöJû¯R.xÕŒæõ¸¨ä°kdÄU1Þ'*D¢Nb–¾ê\$=§`>L0'\$ä0Ä%hâ1ðƒ\nNo±TÃQZæ¨ù‚j‚¢dEÃLì0‹±XË1s%‘ƒh<Î‹kƒù¢ÖÚ‡§M Ì+½±¨’‡‡çR*Ñ¦Ñt.‘ 5‰ü*‚Ç[ºï†Z\"ÄÂ>O8îPpfo÷å¤‰ï›+d*ÑêÞ€Ë¯C/ïö¨qûŽÍ ç FðÒì/A`ôdú<.\r'p¼\",ñ¬C°GR8Q'&§Ò>¼RG¢3\$ñ¾»î\$1Œg¤ï¬ßdùâÅÂ¨µÇˆÉ\"èÓÎ0Îc>÷ãã¯ÒydÄ H¨w-üXKöÉ\"¯(†Ö|r‘Pþßnò’¥ÄMæw\rRªs¯1j\$#\n(žñ‰l½'²¢.ra%2e\$Ö\$úCR~vP¿\rÛpÿN`A2¦µ¦}fhÆ¤}Êü2_Ó|2G\npC'2s&±{êP3±xX«93Ã0G(îÃÏ2qg1âØý\"På²[&ÀIW4ÐA0ÄÍêLGÝsfå®g3îjÔ†hå‚Šåä¼y\nDŽ0@¤ˆâbI'F¢f:úPúD>&'\$ŽOLU5K3· 2í’]Låcn&Òc­æ|&L‡w\\t°=îÏ‚ÜÏète‡äÍÐÉä=§*w?îG7N¿ü|#ñ0äXðBÚ§Ëdk¬2„ó½sT¡bžòhÿA2n¥11“Îîà^ÚÈÃ3<ÛCâ5ÔVN‘3D‘¯CRqB³5s9EÅB¯ô5‹PuGòL¸án&á´3\n“T‡4Žâ³_DÓcHÂ%IÐq6ôCG„Ý¦@ÌÛD0âT¶<bIFq,c8sh= KQ±FuI3*K':ÏTÝIó2ÄbæôëJ±½%\"Ö¯‡+¤ý<2\"W¬b*žE,Y±Öë4*	\"ö‡,Åò^ë•ÏïþH.¢=²R‘ÁRÑyA­RU:Fò6Å\nJ³s–e/dòæŒÈõJIL•¼\$CºR¢F\ni¨8l:Àê\$nâv¢±ÈÝ3N¿XPl'O õŽ¨ìÉY0(°±ïXÎìú‚„`è@ØlÂ‡R´bîŸ²½D«Lb„ËaU~n ÄœÀÜ½à¨ÀZ\0@\\ Æa¤â„î-éRKþ÷–>ø#Û`rëò*<ÖÖÑ~¥†žlæ²/Šƒ%\0ª2Æg¬Ø	µøÀòáb[\\„;§Tjì)-‹fÊòõuÐl2³µÅ>Èžòç#ŽÓxNÅ•§^áÖ~¿‚ò&-ª{SøUÈ63TWÒúB. Ìõ8mNêÝPžxö«?HJÂ’4ÏajM×Y–UHøLÇ\nÖ§kÕ4í“(ÌRåkÔìÕš)Ãgê1‘n¶Ík²y óCªe#§a-¦@Ah1pPàW¤V5Ú¢¦25UPd³Óip Ss-ì¶,*@¦²3è@÷ËG*àì%\" Æ ê\r®oj ÷\"wMGn*ËÓ'îÕ4\"ÇqÙoT\\ã­³¶OV2)Qqè<©èÎ6YsGÖ¦F¾hdR5#Kml”øµäÂPí~fÇÙ\\ÇFüvgl\"H.`";break;case"ta":$f="àW* øiÀ¯FÁ\\Hd_†«•Ðô+ÁBQpÌÌ 9‚¢Ðt\\U„«¤êô@‚W¡à(<É\\±”@1	| @(:œ\r†ó	S.WA•èhtå]†R&Êùœñ\\µÌéÓI`ºD®JÉ\$Ôé:º®TÏ X’³`«*ªÉúrj1k€,êÕ…z@%9«Ò5|–Udƒß jä¦¸ˆ¯CˆÈf4†ãÍ~ùL›âg²Éù”Úp:E5ûe&­Ö@.•î¬£ƒËqu­¢»ƒW[•è¬\"¿+@ñm´î\0µ«,-ô­Ò»[Ü×‹&ó¨€Ða;Dãx€àr4&Ã)œÊs<´!„éâ:\r?¡„Äö8\nRl‰¬Êüž¬Î[zR.ì<›ªË\nú¤8N\"ÀÑ0íêä†AN¬*ÚÃ…q`½Ã	\no\0Ò7ð2k,îSD)Y¤,«:Ò„)\rkfä¸.b¬á:®C• ÁlJ¾ä”ÂNr\$ƒÂÅ¢¯‘)2¬ª0©\n¶Ëq\$&‚ í¹±*A\$€:S®·ºPz±Çik\0Ò¸Ü9#xÜ£ ÊU-¬P¼	J8“\r,suY©ËÔBæ¸Ú\"¨\"+I\\Š•Ô²#6Æî|\"Ü¢Êµ(„+är\0Ü7¨¼CUÄðRl·,ÊA\\«'\rí{E­H_*Ñ4èØ©ðP)ŽDXÕÒ\$B\0Tº2º&4\ršR¾BÕ\$žÏ.k{¡Îk=8ÞFá@Ž2ãhËfµN=ÂÞ®}Îß%\0P¬4ŽC ê0‘t\\)Äý“YcÈæû¶‚®«Š±2§,5Í–2ŽOå‡SHr­OTÙe\n£ž1‡VHŽ\rrC\nRR¥BÍ„Áå54BÆæhŽE)Õ–¼1+%’\\à«I‘‘À•R¤I’i)ôSG‡ƒ¼9£0z\r è8aÐ^Žû(\\¢±^0\rãÎŒ£vá<î3äü„OˆÃ·]úØ¾ÿŒ#pÖÂKNö]Ãpèã|¿¾sò7Œ‹ç“˜¢&\r/»\"9®›·0¥‡oMór•3_5LCmDŠa¨RË«ŠÔ‚SÉýr\"¾XìÃW©JwK¹,Px©Ô”¼Ý‡¢ÛD5†¡.:ºO_yðÌ\\\\Ðm6È®;èÊá/+h¶I@õGGÑzCi¡)jû›Tn›r¸£ÿHäá¾gº#ÞÚÀSëMƒ¢pˆÖCu\rÐf\0C)_8DÙÔ<êÊj¬ÁÔ70èŸSÜhjÌ§AàPC8gkœûB†ßÒRUÂ¹‰«(SS¢%u§£»%‚ïÖ:Äé‰1H„þËƒH‡å ˆ@GTŠR|o)a\$ÒóQsùj.’A ØÞùâaÀ¢‡6RÒelê\$ñÄda@q)Ð;çøºÌ_y	\$Ò<·¶ñžé­vjEÝÄô€¯^¼\\{F…îÓbÏ¡ˆŠÂG¿'°R\"ÜPNm*'Ii]ù¯HJÍÈ§å“tœ{mAûD2í–Š¨Ÿø>[ãÄŒ‹,È¹P^b6˜(^I´†@Éû†\r´:0è%\$DÎy	|W#æ\nõ‹Ö„'VP¤	FïfbR³Ñ‘q%dRxR¸–L'¼häëAVÌŒÞÁäÉ“8\n‚aÈ³ºÞÏoÁ˜66£€gæBöXjü@ÞyCk ‚0êÃïaš	†ÑXs‡Ä9Q°Ã\rX ¦/Á´†àê}Á@s%x!…0¤ŠA³0Ê\"?…ƒÁ½&-\$\\Ž\nr™òìtœ+Ô9jhõi¡‡ÌÔ™à¡é–C¼åd1OX4AP–ô¹2«tS*‘Ü§+ôYp·cëÜª˜¸È‹àˆ‘\\œòßªNWUYW°Xž©bëN“ÕF\0 šX[<Ö`9‡vÚåC(xð2†JžÕZ»Ykmu¯¶ÆÙC»g”Õµ¶ÖÞÜ[šznÍÉ¼ŸÖøó€pNi8†ââÜkNîH49G,(Èk<Ntó1Š2®=wŒUé£» h'Z#e‰¸©ªub\\K!sA¥ð›U—æðkžN‰4‚‹CnØ®Mu„(—RLs¥A@\$‘x+C©1I½§Îð**´'æÿz”vV:!ÁÖ\rpL=Q0±_™Þoäº;Qs=C±KÐ†—™)Žur;wDùÞ”·‘ÁBË	s/\"%Ðî÷Œ[3j¬^BÖôºù¿ ìT§^óø¤×„Î‚‹òw%êòºØ÷ R\$ûÐ°S³\rÌÌFïìy^	\$|<À@K•<Q“ç*~OØ kÆ0°@ƒ’íÙ¶ ä|CCqŒ¡¹Œð|…/§ciZrë<R©‹P¨…\0žÂ¢B3tTùNè¬¼vèbHNQ—ž†'±9~?¾Š¥<¤Êt  1§àÌC8uPÕ?fûI	He¿ÒMæä¼Ñ&ÉAÚÍÑ°7QÂ„Q«V[ÌÆý~{ ¨ijÁ*`gåCI§š”Ê\nh\rÉ˜Ëk¾DÆ²ÉL¹gü»ÄŠÖf3‡Žªê¬	á8P T +‚\0ˆB`EáOál¡SPyÔˆê#åe«<äHÑ%	‚€ ÞÃ’dïÆ€qýø“*º”¬;ÎöØåí©&Ä³] ¦ Îªä‰C^;àWÉ†í3Qá§“!’ªí¥³ìÉÓÓD¦‹µ^¢N˜5ÓeLdçìêÁõ«D´Þ˜ÖD1Ïö\rjcuñ\"8‹¬a«±{»Æ/¶*vÎ¾Í9Äïlí!×M½:†uYZ!Î½Q*Zªª}frOÉÍúêQæš«ºä!Ž9°¿éNz—¥·Ù?\nÍïqFštÐ´Éh¤ óOÖaö¾¼)R„cd'OÄlø%©¶Yñð:Ëçç@‡PÎÀ×ÝºÂ‡ ¼‘\n÷dER|£\0qÐÁÍžÈäŸûÝ\0{ÃC(J†ð›pù¿&òôçYõBíÞ…0Ê=ˆL´§ðë‰JJIè×)Ú ’ÌéÎÐT\r8°/ 1Â0\0’\rÈ,¡§*\n`ÆÑ*2§k,>Æ0ÜJþç*=@ÊèTK®r4.fz\\ƒnŽ£Zñð,î4Œ%Ìì´\"Ž’ðl®2“ÍwàÉË©š¢ƒFBªžMø1‹ÌèŽ´ÙŒºëKØÞ¥~)\rðÊ©È8”¬ÎñNŽAPœ«Š	ÖéjxC…ëÜGð¸Éê­P¾èEHöÎN&ŠÓ`*K¬|Þc@æEÌ±‹Þ+á,j˜uvÉÆÆÚ£)ª+äÚBÈå¼çn¬õd.±@ö)‘\rÎÜ¥Ðû6¯j˜gdÚò®Hòê˜ó\$”á ¨ †	\0@ÏF=à@¡Æ\rìè()¦_«J¬dèð\"Þî	NâåbRð„”~	|#g×Î1r}ñªâìË0Úß».Þ¨î<ìOŒeOÂ•nDÉ±ÐþL ¥gàÖ±º’OH®®óçôÆKÀÃäu„©îïA\rQÔünözqÞ/ñ¶ìñ±±¿	'˜Ë¤2ïQ!Kº\"´LÐ&ª {ñÔ)w©àÇj‹(é\"	yK ÂÌ+±©qNÄ—î[Å#î|”ê¿\"çbËù,òhÎ‹%+! P'ß'rK!}!E;#HÃ#’q ²@ê\0s†Ò‚âB0…“L’éP´¾¢‚(b‹òÄügë%k é/Ù,êÂ'òÒÛ\0RŸ~ÌÊ‹'±ÚÆD0VŽBÃ¡#iø[r]æ}+O4m§úŸ®\\ÇXÇÏ¯-²+Ž9ëÊ€+ÎèÆ¦üiâšíšô<i‰(óH,æžî°¿òþ«RêKÇr1l4qä•P”{¯Ä~bZ\0†=†öaÃZN²œHˆB¾BÏ4P/--ÍlóXÉO3òs6²¥(±:³7;®ù;	†©³¬ÆÒ*¼ŽsÁ:“<sU;,a‹ýÅ/±Ù2öSxÉîÂœ(¸îòø’ý?“¾©£€þ20ÍÑ6qêWÓ¹ ´=é»AÝÇ¬”Äœô\nÆóö~t+ASÿÔ0å’­2mø‡a=3:ß…&R«æŠe%‚~àÌ‚(&ÙlXù	4ÇïS5éˆF2©´‰ðÉ6Mø‰Ë.;&ôXé-Ôm.€çç%OSŽÞÙt\"xÔ'C÷K2‹H­ó‹Í8°Œ´ @\n€ò\r”â“mé8³æ(c‘ËJmO Ç0snënðÉŒa*43?ÕM,\0”ævDÔTcÎœÈP­BU\"ÓÛLõDõ)åBì³à|Œ>”“CuSl í¯QÏòP¡\"PµBrQcAcGÎ–I(:´	;u3)’QBÐJÇ‚Ÿ1]TŒTÓy@ôE?µn’éŒÇÒõWµe©—YÕ‡D‡ iñ,ýuž~j®»Ô˜Æ“cCôË\\.z­£zgp#ôÖ­0—TT/8“Pt®IÓ\\s×]‹ 5µÏXQST10%*câ!^Ù^P¼ßR‘Zð–«p`~RI8sT22ïÏ®	*Þôó;0	TóÙLÕVóu°M1ý^d§851`õ…@-6VMÐº:”9>4=`ÖO]U8¿áe\nc‹;.*”Sb.71G¡4Õb)£ ñGÄCb´p€bßgÓåV¤ñÄHÀÊk&0n*Br®«ütPâ-è\r\$2ò2kcñ0XÔÆyö†ÃÈ»héÍi6tËv«\nó ÄÍ]e–ûN÷“WS±ÆÈN.^¬ì QlàƒN ²\n\0Š¿Ë÷\\\\iVß<V\romvïeV­dP†ŸUï[n/ClMhŽ½^—	NËßað…!é#çO?)ØÂ^xréRWh{–·QV‚8G‰ÕcOufSÉhRAW—f6,ÉËT·Ÿgõ·Q—…edò–wYV{\0°ô¨¯fŸæ^š\0P£ÂqKýWö[Vi[……A]}0½}f-}ËLV`‘UKZ1;}@7¢\r·Þš·ÆâÏ1(õiy§~ñ< ôeÄÈ¢CI}¸€'d7Î˜3F	Æ'÷ý~”X\"™©Õ\\2î—fg„rB†¿bø[uÀ|FŠ%_)NÌq73Žóè§8jû]Ex1/a,•ˆµ\r‰—¡B• /£‰õÕEƒRôÉX7£7í‹Q3Š%ƒ{5—{xe‹\0„hJøM«x©²JR•'xÕ°ìª¸8Þ„ØµG‚c|Éþuƒ{0‰øÑ|¸\\…L±è³w­iðs‘P¿~VMw¥ª’ô•iXhçY…™“·éDÖkqpë“Xù„8¿Š¶¹‚´ñuf¡–OŽ˜ýTóZ¸ôÌ7±C¸[\n„¤âét'ãSN—ãµ•tG{Ù×y–ÙXW™?US™[4	\"È3‹š¸A,ð±M¹w˜vy˜£‹pá\r7UwVIY¡ŠùCÖê‡2ežxÙ×¹~·½\rùïvö[jO›åD7»€Ä‘§égv)v¹íAöííóœùXfIˆ8Œ„˜E)ŠæGj¯ŒFC2·Š™ú~‘Ú1PˆMa1W¥V_–JÍžmlTHS\$Â»±¥T™¯{ZY“ÚÀ³\r•¾8x¡`@¿ŒVøõ(Ž‰¹£©ë\$ƒP½‘O(Vlö÷LîÓ[n5õŠÔSµtŒ-bQ’Š“¬Ö™‚È9¢ã–²§cÂ¯N'óŽOÔê4d,ð¨íRGá”B¹®ÖÁ£ñ›|,±+2Ðæ÷BB\n`Ø<Ô?¥ü\$2…è°ºoVf^f¡c2­úŸ·ðÂYö™sh[SHð\"§…š\r€VÑ€\r`@Ø¦­(0¹àÚr€ÒÊ6s¢¼ÃÖ<@Ú÷h(K¦Ú ª\n€Œ pÉ¸ÄX+ÚÅ•Ãª™WdJ7€¦,šI©>ï7¥ï§Um‹YÔ·®V1i—Fú«¼Óé½û½J\0)ÛÛ¡m¶ôKDw_‘d=w©ûqÀW˜‚Œt¬ì.h ›¸Û‘<9ù7°tYO{³xäõä:Gº&Ö3Áô«>BÞNº#f*WÄd3òœ\\Uœv|ä¸¨v³`7€²²™kE\$çåoD	°Ed[ÈÂŠºÚ<Cê?¸~²P›ð!Áä1Â'À²÷Àð¿¼•{ ù·“ì±™@åD(ÕqÌT5@qJu{Ýh4ï„çÆ†+¶îb¢¹o×\"§ã‹wíÎtË•}™×çÀYYD€¨?ÃØ>¾< AºM\rãPÝ/í¼µÐpgK’Sp¤§ˆZ~PÛµAiÊ’:½C=	i{IlGåZ _\\VY@ŠE†Ô†ñJâñ•Šu\"_4ÞãcˆŒU€ˆ>ÍÆk3—ÙqI…ô Æ ê\r¼5D\ru•9Œ'àŸÒ¦Òþæi±—)  @N%@Êk¦9F)C|Ôh²ÁbËÔ…ËÐ\0©Ì¨KF¶u±k½w#­1’®‰›Û%¯Í®±²~U´Y9§ºö¼ôˆyowY€Ž¸—orMu·ëÐ‚¿ÞÂßÍä£„Øòm1Â„N	\0@š	 t\n`¦";break;case"th":$f="à\\! ˆMÀ¹@À0tD\0†Â \nX:&\0§€*à\n8Þ\0­	EÃ30‚/\0ZB (^\0µAàK…2\0ª•À&«‰bâ8¸KGàn‚ŒÄà	I”?J\\£)«Šbå.˜®)ˆ\\ò—S§®\"•¼s\0CÙWJ¤¶_6\\+eV¸6r¸JÃ©5kÒá´]ë³8õÄ@%9«9ªæ4·®fv2° #!˜Ðj6Ž5˜Æ:ïi\\ (µzÊ³y¾W eÂj‡\0MLrS«‚{q\0¼×§Ú|\\Iq	¾në[­Rã|¸”é¦›©ž7;ZÁá4	=j„¸´Þ.óùê°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€èù£€È0Žxè4\r/èè0ŒOËÚ¶í‘p—²\0@«-±p¢BP¤,ã»JQpXD1’™«jCb¹2ÂÎ±;èó¤…—\$3€¸\$›Ú4Ã<3«°ô/¬m£Jæ¹î‹®®å†á'ê6¯¹DÚ²Š6ªÉ@»•)[t‡¯ÌÀÁ+.Ú~¶ Êñs0/íŠpé#\r“Rµ'éL[IÎ“Ê•EhD)1q7±óŒhæ§ Þ\rlŸ\n(‹ÂE¤£9ÁîÂÀ¨*P“³>—t\\›8Ò*/¨ÔTI9—Ü&€‹35 khð§¤Ë_ÈñÒH\"U¹³Œ°×Fò™q8Åã·.§Îe|€Õö’&“l UPÛIú¶ž¦sLìJ«/\$ý'§¥+\r#è:Œ#eÛa·òÊæ‘jYfIŠŠ²¿Û±ÅaY93dÅ\\!WÙqJC”Mc=b6¥¬ïT	Ü^RÛQShžÑ+;¤ŸÄ…ýF«ùapYÞ+›‘.ù*á”_°Óƒ,EŠªg+ƒÖ9£0z\r è8aÐ^Žúˆ\\0Œƒlx2ŽApÞ9áxÊ7kÃÄ\n7cHß°OðÃ®£¦Ž/Á£Ü5„Að’6ŽÈÛ¯Žà^0‡Ô¸A½ÀãxÈÿ@›Þ)Š\"`Ó¸®l°ÂÅŽÞh¸Ñ˜ûtíÑ*dÆ\\«iš~ðÑ(ãbòÛUL±O±õhíõL\r–”\"ýLEÖ]ó—a<.\râÓØM‰O‰'µ·ßÖ˜›xÇ\$<:§\r%Ø2\0™Å’Ä8Æ„f¹ÎÄ¢³J'~-þ¤¼K]µ\$®	Ü±˜-¶SmÐeµ›þ’w8% \"h£ê  Ëä:†U´äÎú)ÈDðœ…:Â‰WKq8¡¢~œE	Y FÄ®©E«Ë¢&;dhé-—Æ¢ŽÊ¡vO­–¡Ãr£	éÈgéðÚ'‚²cßaÛCyéÒzNÕ=N%mp9…”³ÈÙYsÌÁVÔìW^<IÏü66¤{Ã˜cnPh€>ÅK@ q1Û(²¨ÖRA ~*Çb.Ä*wF­&1pµN]rè±8ÊêËƒ®D±¼C‚²(m%eÒ¦#Ë!ƒˆ‘@()ÉÐ—	ß<1á\\É–:¬‹Œv€L;G¤„¢c3‘ÒŠ÷+(Ž§vNùn'·’øaY“…Î=¹˜ý%d”‹„ð\"#!ˆ\0€Qè=M¬÷†ðÌƒcWAè±Ê‘î™—ã*7!P7Ÿ)ƒÈ ­:†0Æ˜fà€6ðÎ˜,?ÁÊp†ÎQà Ÿ •Ãµ`ÜP((`¥ÈÃÕ·¤Óä|)ø0¦‚1&9GX€%\$^vÍ„5Œ%–V±Ê4‹Xù}—IB“¶èº’šp&k)°ˆÙÌ''ð¥QAdÄž\nF+Nt6`Ü ¥ÃíEˆº*TÄ)Ô/MåV9vHÃ{8›T‰å­òÞˆÚŠR*Ü¬ÐÂÐ(r>u|9‡v¶áÃ(xÔ2†@\\Ch­¤´¶šÓÚˆwjmU«µ–¶×Zûalm•³‚öÒ‚ÛcnMÀ67&èÝ›ÃzoùÀ8'3ˆpa„5ž÷|ÚÄßoˆ>ŒÐ˜Ý(Ê«RF\n1SÖÎqN©½_ªî¨té(àÉŒ}5^Ú;4ä¢âv'q0…\0\0(1\0¥A!Hâ¢aùã¢¥õ[;):rŠ©W+2öbt¨²O´±óCxº\\Ô1jEî²Û‰‹\nvKUN¢Âº[±Â6	‚eXvâ}I[•-5\$‰L’â5&Rå`\$’PòzA\0d\r.øÀœ:A ¢X\0fA¼6‚\0ƒ_sX?Ò\"Ÿ†9Úâ±^Ø2 û¹c­Î.ôÔJ©d‹aI[+¤öÔ¾Bìi¯ü£*™àK¡à–¢XE!BQžÈEÝŸ%CiŽŒs‚ Ñz”˜øtŸ-[vPlÖž|!©ú­P4 ÄC<bq¸„üóîÐ‚0T¹\rÉÃ†–ðÖà\rŸÄX’C5ƒÜÖbäp]å’¬²b\"å‹„&«ýòÁzZ…È\n	á8P Tº‹R@Š.ª{l&’Pgª„^Á{JÔŽ°£š.ŽU9§:mwVSŽÁˆ.Õd¡Å{\\¢|øF.èåTRR‡eM+i6G¤áxª	Â¬~¨’Áá,kM%ˆ_ØÞ7”Žï˜ûÃV/ØAòí	o%Gw¹ÛÝÔåSÀ}{1XÔy“Ô2oäÞñ¦òúPËWs¶5	«I\r^7vi'8Ê¥y¤¥'Q\n\nA•¼†˜´)ñ!?¸¸	u˜…Ã\\evÞñâ·²Õ ¸× ÄKâÅYl)É¤›ôRŽù/T21˜¨£ƒ§™v c/—N:€¦CÔx8P\rOÈc@¡‘+›€!ä½Þ·OÑŽ&x*êk¥|ö\nÛ\0ƒHeë3<5“×KDJB, ®“OãŒ‚änòëÅ<æú†™ág†»lP^,2.µ>;¸ë	•cèÊÔškª\r¥‘*âñ%¹E'csNÞÅ×[O*yçžÜÈDIØðÁµ;ÉÎï%ÜQ†ûKŸæ¢4¯[ˆ¼£d5»Éú/ÇEqm)C‚[8Á÷~oæo9`é¶üvV*†ëËW@V©\n!„€A‡»ÙüÎ­øü,@ àÑ\nÚAâfÌ„¦•ª&.~Š>[)ø\0^3D¤¤ðÁpä‰²'eŒahë\0¢ÔŒ>àJŽPC°0çœ;Žêe©R{‚æã`ª¥éKÎPlÊvLÀ1ãe00¦[nr\"b±j³\0Ð@<0}°VBHžê§MG„U¸e04DOÖdjÈÄ`îb²~p.éç”Ž¬º(ün>QP¼ú¢¶RŽ¢9PÊÒŽU'»	‹¨aãAåÆöâ\0`&;íŒ@® Äq@äÑìø?%.+\$(}† BPòSd`”å(TBØsÏÂ„ZÅX'jsXšŠd#ï1‡ÚÇ£f ž'¥ˆ•ÑB.\"³fRèå’HN&i\0ŽPþD£¿ÄPöŒÔŽÊ‚‡…¨‘/î¨ÐŸå¸…ÈèLçdÚÇŒºQ§B²;PQ¡	…oRÚŽ§	Ñ¨DFtØnEg®¸âÐB*ÃÐÜiiqÊ¿aÅ–Aæ¤Ym¬ÓOµ	2¼Žå\rüsHzcXN«v<H8+1R`¥:B„ì‚ø+g<R!R&”r,û-’ˆ²\"–2:ŒÒ>Ü¬ØKÏvéô¨èÝ/*L%<à‘òÖhœ½Î4sÄ9 (àÒ-nYMr*+’ Í’QŽ€àRÖqø—N\$“íþKŒ7ñðêèêò\"çm|ßˆôîï›*¤‘®! ©y,\ræêJ),ODÒC¤òOM&MàáO–’Ó-‰€î.è¢ñÅ&Ò¬’‰,‘Q¶”8`¯Ò5Àà²ó0RöHkO+2^Žr±&RÙ¯ZDËTVäÈúoœ.q¸9ªfâðêýås‚_Ê\$;p+1ª°‰hO'\$%Í\"õ­(&o`8ÏdŽÒ¦B*«3hS³lT0£³?&/Fw'_8ÑÛ1Þ&s~õó„“ÌÍ5“\n–3/ÃŠ„cYÓŽE¢X¨Ê`´ï>Êä½ïŠ;ä°~äøS­òvE5&“`ËRÑ*(NsÓ.N(t!L˜àñúîãÃ=òxòÏXPy äD.RÊˆÏ‰\$l×=\rq=r[<s¼OÐªäó8\n ö-2Ò/sãšú¯Òôýqv*e~„ïTÁ¨DG¯=oNÄã8³';²á9SÑÎ·Ôa:’û7¤ãGpQ/‘à‘ÑË12oE½\no\nû¥’üÐ Ðá0”{HÒþ„ï¼½°Î'ô øô¥1é-òaFs–TÔŽU”®„1/KtyHrË2´½F”Â”­I°è¶üô‰CÇÈûôëNñZIE¼mÊQ#¢6ŽyK„B”œF¥µ†U’È<#P„ÄŠÐQ#ÂPÎT=.`Å3(ê}ô¨+\0¥S†¯SòùMòÜô“%NRÙTªTô×,“¯MÔ?%ÔÁU§x¦\rÎÔæ2[2s94Ä£è\réÎ€êh”ðâxœu~lõ›0ãæÄu“Yh\r¥øU…\\B“Í!%Çê0µ,Ž¨\\’€Êÿ|=ô×õG]ÔœõPIõhxñ](]uæDÕoXUYX•]]êy^5ÙH3_´¿_éò’«^ó^Ug0ÕíJ‘”UHO[µÛ*•ß[SÂ9¶1`Ê±^£…Fó™ãD£”+qabâ[ZmÇeu¸öÖdËý3+¬b ¨> Îø5÷Sy]örøUG•U+Utôó°Vƒgv‡d«6Gi5ƒa3‘aoN–ø6]dv±gV´„ð|YÍN”²üINàp~ý–jýÓ4áUm9V`)m6i4vÚºö7M“¯n…gfÈíoq&à«àÐbO´ªíËëíKò'¥Ù4EXKm³OJ^e.;¬ÑñDGÅ7·:ø6fy¥[èAå&Q•eDj¼¬T¬°¸\nk=ÉAeïc5Ù\$¡Ms\\‰¬•“z;e,`è@Øl\\åÀÖÊqP×­kdñÓ rV'‚°Ìúpwl€ Ä³Ê~\n ¨ÀZ\0@kàÆpÄxð‚yÃ5vœ.p’©Ö¥#¤Éô&Û)‡?‹Å‡>&k²@›}ÀÌ-#(äZQ'Ø9ä8+©JzW°DåÂKöØøt(‘Ñ‚Âµz~ÖŠ­+–‹2#.PSë´|„hdnÚcI 	€Þj—ß†¸nŸ¦¶=äAf\$ƒ8áÅYÔ-\"O–ILŠ›Zô …wxv£~­Ìý\$óo7CtpgÍÇ+ÏÉ.Óé7¸½Š³wTW/à¨Aƒò?£ÙwWÆkà@\rààæ¬ì*ÝŠt;‰i³Gí˜[h8|“¾L»Œ§Q@R;Ò	.r\r>rÙîˆîˆn5@Î+’…’C…’™@3à%ò6Ö•\r3¤á…Og~gj\nÀÂ`ê Ú÷•\0E¶W„ìB‰JŒÅ\\'¡=Eñk†R„Žêã»Rc¾Ýðù„c;f:nB}²(aâ²O8°Û‡rCŽ#.™,g—¬‚Y£O24ö‡Ù‹†_a×Ø?„Ëe(+±-IïÆy+l·×^„â;gÙ\"–@	\0t	 š@¦\n`";break;case"tr":$f="E6šMÂ	Îi=ÁBQpÌÌ 9‚ˆ†ó™äÂ 3°ÖÆã!”äi6`'“yÈ\\\nb,P!Ú= 2ÀÌ‘H°€Äo<N‡XƒbnŸ§Â)Ì…'‰ÅbæÓ)ØÇ:GX‰ùœ@\nFC1 Ôl7ASv*|%4š F`(¨a1\râ	!®Ã^¦2Q×|%˜O3ã¥ÐßvMóÃA†\\ 7\\Îó´ÀÎe9ˆ—3©ÀÈa:sFƒNdépÉð'˜éÐ«ÖËtFKÅèÝ!¦vtÓ	´@e×ñÐ#>¿±ÇœÍæã‘„×ßßÌ ¢œ‚%Ö%M†Ã	º™:ž»§I÷r…?ÏÀÌF˜ù¸Ò 5ö»”	ý\"iñh`tÊtëTù;©ðÆ¡Ž‹Àä£î£òŒ#’Ý#Cd<CkºëLºPX9ã`Ò*˜#Œ£z˜:A\"cJÐÁ\0P¬ö'kc©¤N ê7ª{_\0>b\nhÞîEÉx@·ŒP~#½ƒJÊI‹ÞÆ¼…Œ0Aâ.4C(Ì„C@è:˜t…ã¼Ô#\"7#ÁrJ3…éŒê<?H3–„LÔËŽ“\0¾¸»£XD	#hàÜ&# xŒ!òˆÌÄã@Þ23LàæÑ\nbŒTÐ¤â´M˜e;0Ž	óX£ÐæÐÁÂ:49/rð6¯\nˆÊ©ÉÄøèöAëŠpž*J¢Ë_ÁÂÌ¤øAe‹\\ÓHò:6‚lÁ5Â\\†å­Ð3’Ž£h'³pµ~5„å*ÁÂ\$¼0»L(ì¶®˜¦2Ô PŒåh2HÛÁ­}n2Ñ‘š4•+Ö9.ˆò:ê(+d°0¼O˜9§Ï¥“Š(on6ª˜ê¾-Äß4öüæÂÎ¥<øDÉÖF0ß#[ŽàH¨üý\$¾¥u^XöŠO\$VncWÚ‰ëcŽ°uEe2P@²è¸Ä~”¥mº=\rÔ²0‚5´÷j|²ÁªÇ²Ø+–›jr]ª.P¡è¸½ñS\r‘E¾žA­Þ3Ðôà“˜d:|5ìë0¨7®p°Ü<„¸çŒlÀæ3;Aä3 C˜XÍ\\ Â3Œ)bYkMéÐÊaJOl#’=@†)ŠB0R\rN–:…Áö9\r©ãB5¹¸bHíŒ)8„0í>J‹Ô¼_ºU(ÈŸ\$÷&£p¢30÷¦c`È:ôcbð:É‹42ùj1&¬¾åRúBhÂ«Èð ü9‡rJ¦(x°2†GŠ–\\KÉ1&DÌšPwM‰¸'æCrwO!¥=§ÖÊ „\rÊD(¥”rRE‚,¦Ù9Æˆ4˜PàGœ’|\$ì9>B;\0á¿‡<¤4,	óßJÄœ*ž(`PË©3,§@P:1u_ ‚GH((®ý„Šv{ÏáO0«ª¢6öG¹ð\r!µ†¸K™0 oÈ31C¸‘k5­H‚Ê÷Ÿ\0 	½ø8h±Hôf=Ò!u”2IÂI\$‹4©ƒ\"aTÙ4f”%Ðâ½Ux ÁÉ.˜8œ`t\rÈ1—%7*ÌÌ2î C˜rl^Éx]@'…0¨lˆùtr<žö([©&¦}IÈ‚,óˆÔ¸2äM‡PòÑ»oA§9ý Â9'ŸáŠ'Œî¹UÓlˆ&Á¤3‚:%‘0%¡¤‹„`©Žê˜aÀ’˜X{,¥¡¾SaÉ¹”‡¶wC\nbA§˜3`å#Å‰ÜXå–„ðœ¨P*Wr j^yg¼Õ˜@@»šI#èyÛPR¸é8D¡0\"ÒÚ_LC53ÕgOâ@Aéí?[EÈ¦Ò|'Z'K²\")\0¨ªÇÃ¨k:‘Ý8\$‘¹é\",æÆ3¦kiU†ž\"ÐTÐ#Ôõ\\ê–×h)ãÁš½ªŸEBKì)æ(dÃ@ÓaÛ£<±míœØFêÏšsqCe”Ü9ähA¢Õ9\reí¯„GÆ¸‚eQa¦z+õ¹\ršVàéIº8i#ôŒ†”÷“¿:Žjèt}ü‘göúŸ/FÒ\nD¯©\"XIÊŽRô‚&º±’ÆhC\"3¯ÑÝÛX&°…‰;þV¥0eC(wDjÍZ«vÚÐÁE¡„_¤\n5a¸ç\0ª`GC5¡i ‰Q|	F˜eº:aPàšÌ[°ªèÂG(|µÊ™óJ )Ä¸¼FƒJ¥k|9øøÀByÜzíH—£· J™WÍE@¨BH¼—™‰8h¥93´1uÀÒNÓ˜u›‰Q,-`^UÖ³6UkQk&Ó€³2ÙÔÊ+]êª©©Kc]’@XÛe1—Œ.Z¦Ç“€NPS£2	úäõÁhÃ´+fÌÝW2þr©¹ÒAg|H!óH±Ð‡œîOEÐÙ‰….¤k¬öONe:Af©árŽxË¦ÇOgÍCŸž¶gúGIæÉ‰­.‚VH¨€˜YhÈ‰I&¤d‘ÕÚ}ÕnÅ%ä%DÆBš7G9IÃ@îCJG=Ë•îÖˆ‘÷UzYè=rƒ‚A \"øé¨È²£s0GuX¥Y± &ŽÊ”€¤ü(@CÑ|\nŠÞú‹Â¢mm!ÆËdB§‘ËÂ©±¹Ì¼íÃê`t†˜K‡{¦\\ìdgáügàA£¹&:ˆ‡iõñãP\\ê²?\r¡¼Íµ\$\"ÕYóhòe¯Ö„pÀ&8¶}Âò>0„FºE¬ý![ÕÊ¯Nÿ<]·õ¯0ÌN¹?¿u#Û!xkÖÜicÆÝ‰ðëOÂ\rájvZÉ*ÎCÇl«;ILô]™ÕÖGY²±«r§Æúž'q°¥¼\$×ÕÃÛÃLíú;Äî¶áŽâ/€\$þ7’õ­ëÆº1X´Þî@ÂTô¤RÐùÃ0g8—£lx	óx»Ïz\rQÆŠ0º2.èà‰ƒ¨Ëeá–7­{Œ!å{Ï—ÁºHOÈŒî»÷‘å¼+.ƒ.ðC0ª‡šo3éfºñpA²'“çGô÷Ò9gšnXî¸ŽÒ7ûª°Çêðíßç¯×Ž%B'i-ñ>7¹`8ð²’äÁEzÁŠ¦9jÜ¾alVŽ&é¯\n§mVPàª\$á°¾è†Þiï åÐVÐ,ù%ÆÆOväGÃPïPB0P.n05¦pRr@zk8K ;Ê`a„*BâÞBÌ^i0ˆ¤,ÜVó¯áðŠ7ÐNøP“p2òEô_‚*„„pø€)Â4.îWlXö…eý\0A7PœˆˆìgCh#bð\$\n¿0Fî¶=ï“°å	ol¿©«\nÎ¦%pÎÇŽæå\r/”ð1ü[±	(\\ñ\näl3ÐQ,-ñ“n=°@CzBìb0Ll>d±p\$ãy%YQXÆñ]P Ý';£æ«°’1-§N©bØŠDZÅz³£”`	ÞÐªBŠMTÍãcâD­q•lì\0à\"Äˆ3eó¥ ÌQª('úå`\"N'b\"\nc¸91Î¢\"Ë%šöoNö¯RÕm-šõ¤=Žw\rP¹\0#Ø)…ÐÅ!N%Ž=£DdP\r€VJ¢þY Ü\$àŒ G’– Ä‡‚\n ¨ÀZ~â….88ö1ñ „Œ9ÆÊÖÅ«îárLgRP®MPåÆTT’\nQ‹²BÀòCd<,¬êAÃh/.êÿì NêÅBdá¼)Œ@ìD'Æ´gÃãGø8@ò¦.[°ƒ¤=ÂH]ª2\"é\nà\".úé“,ù\rê\$xeòãï¨,Œüo±¯.Gì®Šö=“/Ó²‘1œ¾ï©òhº‡ì~IÌ1¢B#+ŽFåï¨1í‰¥nE²ü›®rtæ®â«îÈdKó# ô¬H@Þ.Öâœ£€¬\"ž\\\"ú s34E\0X#@õ3#¦]ÄàŽ7±ø£]5FÐo¤ ¯Fl°näg¢//J®-êê[SHë3Cœ2¨øCîÖ‹¤)b8KU`ä";break;case"uk":$f="ÐI4‚É ¿h-`­ì&ÑKÁBQpÌÌ 9‚š	Ørñ ¾h-š¸-}[´¹Zõ¢‚•H`Rø¢„˜®dbèÒrbºh d±éZí¢Œ†Gà‹Hü¢ƒ Í\rõMs6@Se+ÈƒE6œJçTd€Jsh\$g\$æG†­fÉj> ”žCˆÈf4†ãÌj¾¯SdRêBû\rh¡åSEÕ6\rVG!TI´ÂV±‘ÌÐÔ{Z‚L•¬éòÊ”i%QÏB×ØÜvUXh£ÚÊZ<,›Î¢A„ìeâÈÒv4›¦s)Ì@tåNC	Ót4zÇC	‹¥kK´4\\L+U0\\F½>¿kCß5ˆAø™2@ƒ\$M›à¬4é‹TA¥ŠJ\\GB›Œ4Ã;äõ!/«î¿(+`˜²ê’P¤¿ê{\\’µ\r'¬²TÏSX6„‹VZ(è\"I(L©` Œ¹ Ê±\nËf@¦‘\\¦‹’š¦.)Dæ‰™«(S³kZÚ±-êê„—.ëYD’¡~ÈHMƒVƒF: ‚£E:f¡FèÑ(É³ËšlÉGÓL•·‘A¡;–Szu CD´RöJ©‘`hr@=„¼®Á†BƒÎs;â+\r#è:Œ#b5MÈrJ¨Û­)ŠS3NéjfBÔðª²ƒQˆÑ54Ni|ÖÉèÑ>É«)ŒF#D]VD¨kgZhI…„˜—;ršFêöH‹¡ƒˆ9£0z\r è8aÐ^Ž÷¨\\0Œƒl 2ŽApÞ9áxÊ7`CÃ¼7cHß‚N¸Ã€£¥Ö/¼ÃÜ5„Að’6ŽÛŽà^0‡ÒÀA¼xÈë»#›)Š\"`Òï-h\n¦XÅðóv˜¥ÔQ¡a¤Ñ ”Û¯Ä‰K\rZK*I	«õGÅšFÜ·z„ß©ÛÍ‹@’6mÆÚ¿é*¯¡¦3*‚‰åp¢Ä—!.ÚÐmìöã¹§5ó|YWJjH!±Ò51ªeþûI¡És=KçÄ„4˜q+fÉI»FpßXò—‡Á‚%Ò0Ž£`èÕ(ê2Äy¾sk-_h´k¡.qÍU«F‹sk±F”gDhF¹ÙkZÈ5ô66Œ:l¡!x‡ìqkAJ&R·9;EP\n’X3¨r£ÄT0ÝÙ‡<Î@æ1âÐnc¥{QP­óxÄÄï,­ˆrkMH™ 6ÜÐÊyKzk>”—úóÆˆ…#¯”P“B`+F‚0M§©¨6fÕctm	™f«5„ÿ™\$=ŽÌheVaÔ»L5Ž°J£òëK÷ƒÄÂ¿Ä<·£`vE±Â&‰•”ƒÐJ(ód‹ŠË’Nˆ9\0£‚pØyÈ\rá˜3ÅöÍ[1­\n¼å†Ö,A\0uaÔ1†3ªÃ3¡°7†t ÑàtQ 0†pÂ„€nLS¼\n˜)-fhÝ¨bê³–  aL)gÂÐ\\H. „q@Ô¦Q‹¢–…^ÂÊ4DI	@„¬[ÆÌA‘+G±†O“V†óÕé0„àµ©µÀ¦¤6jFD’£r¢#â.xHÔÐ£„ÎŽÉ³ËPÒ6PÌÁe.Lº*%´ÔŒOhagx9ÉÄÃºÿea”<BC\$š\\«t®µÚ»×Šó^¡Ý{¯•ö¿Wû`lƒ°–ØiäbH1@ØÅ˜ÃcŒy2&HÉ™@heL±“†Ör™Ì_‘˜72	z…WÑçé2ÏH#ÁgGù´AsB•ˆ„‹6Ï€þ@„¦lÔiŒ#Føþ”””-Á\0P	@ÓÔ£OÏªWœ£ÉPRŠsúWÉ\nm•¯„aQó%ÊŸäÔ‚Aq§D(ýÅž±Èx–‰ÅÁ³úSËZw1	Ý5dÀ·!D†Å©Ø*àC_Âjå Þ¦©FÎëÛÊSLBÒÅŒ›Å”š-(ÎfLdrJ¦I)rö-)ÙD–	àI\"áäá\0ÈYYÊtl¸72³Àxè.žq‚\0ÌƒxmRYÊx qÑ—sÂuƒ„}§¡éÉ×!,ÈS`SÒD¦‹´ÅåI	áL*<XJ³ìÑé{¹ßM[H.ðÑ¼ÏÕ‹D›ÜÍí¬±Vå)VàU@|EHÙ2dÎà	¹%@ìåÝ	sk_€n,t7¯€@¹ƒià˜Ë|tNAÐ\\Á*/md_îŽÛû‚FáÇ_¨M²³×5L9F«é¹EC{0†ÉY…H)Ý³ñ i„Á=\$úÁµòA \"aA&Æ„5#™8Ì¬´Ù?fLÉÊj«Š/UjU½ÆÊ÷¬B,)Ø773·\$M¥KÇÈÊ2”:âžÕ²h|«>Kô_à1’ÝÔçdLmVV&#,ÈKZÊ•’ÚóÁbjÛ³*rÅÄÓœäÎ\"‹:ˆÓsN­+ä€éD²èë(µô+W7ÂèýÇaŸ[Ü\r¥äAS­Ç”ÚÂec¡¥øF‘Œ*%ÐG¥€uªEJ©•9Í`'´‚Ê¢Xu3Ei¤‰j†\rÐºÚåŸ9MãdmÙûoy\0…ä=†¦SõˆNÅ†ôêÁÔ0ÊtƒÞš7R?ÜºBŸÉ‰±B&*±a8êü\r*—OHC(wÑ­X£¡hàÉ‹_4YÒ˜BŸ‚½Mn¡ˆ	Ëì¿VH-î-rßÈÐ¦¿as\\êjÑ)Æ²z¸ÝÃ+ŽŒ‹ƒ…\r[>?êõ¡ûHÁJÙÞ&£|Nœ¬0°“7\")–mSzLC+7bÉJž™ôQ¼úºå‹¯ÈR4iªH£Gd÷	omÕäš@dŸ#ËX¬ …@¨BHï\\.ºHo¶gh8b¹àZô‰U4(éÌí±\$//R\rKòbš.›¹¸õÆT\\{ZÎÍêp¥úÀ]EÞú š8øº%9½hfÜ{DŸÖ4Ÿ\\ÐAp	÷m§ßDõb>z3ã¡ö£Q¾Ík\n^}/x§¿úïL“ýª³ÈÿÈûåÇð²¿nþÛÝkâÞšÙˆ\$ï¬)¯°ÞâxfÐ÷¯Ó\0'\0ý†ûoŠD£\0Æˆý\r\0*oÖVOÚ*þ}&ÛoNooÕ\0PýÍå‰\\ø5¦d_GF¸\0î#/¦È&xˆ‡âÂZ‚FBphð#bîî”„¸”\n˜#@ƒ{Aj=	pÏ…pÍ®Ýlâb!Fp(PœVÎÚüã÷B¥Ücä5dÊÐ¾H‹­©l0åV*bŒßŒŒ“	XçN²èk\rbšôBHö‚44fŽÐM¨E‰ˆ›.ŒÈä\n50èÑ%¿(->A	d‰íHùk©ƒãC\0¶æ‘)†Ô\"Ï\"P°ÿì#äÄå-lQD«}p å\rô4HBÔYo”{ñSfÂ71Z§þ‡ª‚%JtÓl¾ˆU¬ziËJëä'c\$Ûñ}\0é‚#ÄBMÏçf°„ü+I¨Ñè0ñºJ¾l»Ãn©ÑÊ|£Ó6çˆZ).p|ntì±[O’ü	½'\n.qäÀdˆƒ¯l¢=ƒF”`P²ÎT1ÎÌèœÓHÖ­[ïöY%\\Õ.²©•*XÐ¤Þ½dU\r3#r)#²,Cq„sp;#Pç%(’ÓÒ?1qQPØ®*”Ò-Bcò^‰h9%q‚W‘;(C6›‡ƒ\$Ðþr].ž\$¤tF1l±\$}*0,º­zîè\\ï,þŠ\$yO¨Hr{&ïéo¤FQ U’®DÉž{ò¶2º‘®öšÅË	,±ó,ñQ-2«k´hP©\rC.nôEòÃòÆÚp‹&«í/ržÆ‚ÆÏŒPÂéèˆ22{ò2/¦épg®œjìw/R(ãÓ4o2Ìs3!(ˆ-(Ñb‡dTÌd3\r„|ØjäâÎ²)¢®.¢VôS~>®k(ªÇb±c,?\$7 ˆ‡7sp\$³uæu0Žibêl¯®N×¡,¬‘ÒÝ3n2Æ˜Ê¾”JÄ²ÈŸ:d¼.Èf K©5S*ëó/4Ž¢„s\$§Ãˆ†S.f€ŽÊªŠÎóšÌD+ îFjîM4Ñ96flÐ.J7s6D“;(ô\"äÇ6\r`ƒŽðrZÖF«A†³)¨ˆ”*Ôt/6nú+¡AÑs#4LïÔQ1ÏÛ(´=6tÑÂIt\\Ø´:ð°ð®åÄë¤øH¤~WQ8ˆev\$)¦¬1Æ=®J˜0ži\$§Mªír€T«+ƒO+ò•Ð3‚‹3Á>×Ó\rLk)rm2MtÅ+Æ›L²×FócG4eGf¸?uÈlwFÇOÎk.3Ltï T÷HD1P-Pt6”C:´ÙQE.ƒ§ ê¬•0:,ø.*À¬NºNŽÒELl|‹N]BÔÓNsÈ×RÑD¼¿tlÌ	r‚hëŠiV‚éUTa'ƒPÍdìUeWêâ±ÔW5SŠ÷Y5QV©DåûVò}UógSaC•5 ìpÕ(Ö3zp®¤«Ž¨+ÔRÑÒ€LN¦VÕ‡/’‚UâQ•½%µÁ)ÕÄëB§]aYµ*kµî+Äâ2aw”NS4žñ\$y„ù]²1'4\\Ï5–#[Í3ÖM6/bkO5q_Sf¤*Js´DON²é\n®%*lˆGXüðŽ§´þÒÕ)'K'4ùbÌm³­+¢‚ú+7dP\n¥/KoëQð.¯Ëh¶tC´wÅ”›Öi–„\\#~o¦ÿ=Ç˜ZÐ\r“ö\$§–xªÃRåÀIÂœeø#ÈTb2\nj8öà; ëVsN3Oivö‰oso¶­.ñ>ýhÖ7g×\rë0'€†@ØsZ×u–´òà›¯S¹SÃÔûÎhÖBul’rÌ@döòt`Ä¤\$\n ¨ÀZ\0@``ÆeD ð\nþÏ!MyVòGZc\$° ö×vü’V7Â<‡M—†üOfÿ×}y€‡7…FIÂd»H.÷íPOðkÑVˆ–ÙvÀÌ\$&E´7BSƒêD¤=çýB/c×–5eª•W<§¦Alð»·A@H+¤?Ô¸—¤Šq‚’pSÈˆ\rî@˜Â«^B8‚N_ã;ƒÈú”cêÖ‹Hqhtß(‚åswU\0001\$6ló[qTßd3„ÒBª*Q3ØE3Ÿ/EÞPue4e†·Ã„±l•õ\\¦êãxGQZLÂ@?sˆûî”A&{ˆØlv\$ô‰ô4õÇü•{ÈI;ÏKÂè\"OÌþ½¥¨Ôë¾Ü-l„Á zØÒ¼3¯ 05Ðì¨ËV²»Œ—žØ ¬ Æ ê\r¬å‰‚†Mø=kåqÏ±™‹p>®\"M'YB0Õ”ÑCtÐ˜d—è?Ñü½ƒ ¥mfÓ’;‘ñ‡“Å‡4]~KZLke,gÃM’¢P]8ÆÌOv#Fz";break;case"vi":$f="Bp®”&á†³‚š *ó(J.™„0Q,ÐÃZŒâ¤)vƒŽ@Tf™\nípj£pº*ÃV˜ÍÃC`á]¦ÌrY<•#\$b\$L2–€@%9¥ÅIÄô×ŒÆÎ“„œ§4Ë…€¡€Äd3\rFÃqÀät9N1 QŠE3Ú¡±hÄj[—J;±ºŠo—ç\nÓ(©Ubµ´da¬®ÆIÂ¾Ri¦Då\0\0A)÷XÞ8@q:žg!ÏC½_#yÃÌ¸™6:‚¶ëÑÚ‹Ì.—òŠšíK;×.ð€¢™„ìi¶n÷»øì¬ÛÀ€ðÁEƒ{\rB\n'î¹»Ší_ÌÁˆ2œka§‚!W¹&Asv6Î'HáÈÞÆ»ÉÛä÷ ÉvO„IvL®Ã˜Â:‡J8æ¥©©B‚a”kºjÊ*Ì#ìÓŠX„\n\npEÉš44…K\nÁd‹ÀñÈ@3Äè!ªpK P›k¼<ÈH\n3°Ã|•’/Ð\"1J'\0\0P¬4ŽC ê0€P¦¦‹RÙ!”1²dœì2V‚#I²pN¾¦ï&	¨	Zþ)è	RÜˆf1B‰§CÖË\r‘Ü˜„ˆA¯¯™Z8B<@Ë(4}#=%3÷2—s¤n4Ê Px¡Ê3¡Ð:ƒ€æáxï[…ÃÈ6º(ä\rãÎŒ£uˆ<–(æ4¿áxDŽ6Ê:U¢øÄ6J£XD	#hà6£mŠ:xÂBR-¦4\rã\"87„¨æ2„˜¢&\r6J\\,\\/S*Ë³3‚h	KFt†Æ @§Ž´‰†V\rÏC”Ø-òcë!×pÄ<Ù!@æÇoÐèÝIÊÄv‹—I¢`™0ÔÒ¤œD‘4¶•\\6?ƒ´À:Œ®ÝÃÀ(JpT§cvdÃ'ªìt ©‰ºã[‚_±KÑJþ`¥ÙS(erÁEzP<;4¤p‘:ì¡tøR±6’>hW,Ó P\$ƒµ4¼­ó‹+fÐd˜(Ž¦RþŽé@‚-Ð_\0½½»46)²µì&CÆ†670Ð0ÆÙ±*’b˜‰Î0ý\$¡¦¤ƒšep°ªbxvCGi’—X;û…'}OVq\rQvÖ?­JN<’Q>—Sû·w¹?lPÞ\rŠØ1ÐT\$<ØLÜ÷=ß<Ågƒ,ìÕ£z\rã0ÍDÃ*—v;Ù;@ÆæjDÃ	\$…’öR_\r;‰Ph¥¼9thØŽž—0V š«¸ù0£øŒ¨a%É\rµbp Î¹h(n¤)h\0`„FÈ¥N””I fhü‹¡VIrH„tîŠøøg%Á@4”ÞQ×9å4¡t2|Åøt†(aÒ‰dfÞt6+='ÃæŸÛW;'ñº’Ð@©àŠªUŠ¹X+%h­•ÂºWÕ_¬†±V:É\rË-f¬ðè´C:ÓZ«]l­³zH0¡&Q@6®UÎëÈú£_ítHÉ„P	qîmçÄù’7&žÈ˜er–˜³H†”iB “ô[\r Íñ×‹¡n€H\nÑ«™¢<%Ïé8C\$Éx‚—zì-ð½ûµsùÔšé`²Ì:EóªbAp 	‡dä.Åümdåº\$¨@ŒOìç¥Øâ“ô Pæd±\"â¤âãðÉ‹Ì:‡„‚’\\Hy}§¨4®àÜÏâó\rË¸Ž†æ‚C)¨•Gð3ã®UÚ½DÑbPØ×œÄ¢áÀ0È’\\ú‰3\$„úBXÂ€O\naRèlNcpH‹’h½µV^LÈìç'Dð”M)|Næê4¬c14¬\n\"k™¦‚„’Šgçt°‚²d«ÊcŠOIQ,=IØ»`©0ÍñF†‚êl×à÷ÉPÔÅED‰\$¦ŒE<Œ¦®Ö2‘PÁ‹\$“nl×4÷bH;Éºµ5Óöèƒ	×9(ÉFŸªÖß2>d!5‹±ÅXÙ‰;	J#ÃS	È%i*Ì\$–2»^GÈ x´E¬†J”Nå“xA2jW÷‚ê®\$VpìEÙ‹(Hõ§\r¦;{§ršU&aÍ,Z±lê²YM^Ô“BTˆ½…\nA•o†ÆC¢Ìb±2'V§´„‰HœSa†U²¯•ùdih¿ž«~G~7Eë fçX’FwÉ›\"^LjA5&ää†µ1ZŠYY8´çn\"œÇfJió(”9‚Mï‚¾TŠ\$=UÜsÃ(w1lDÙ‘v)X¢LG„àDËCŒÃ\r{FytghŠ¨\nˆXa‹»RÕ_Äö ‡€ðçrúø‰á®5¼¹àÍ¤ùÌ¦ ‘e! ‰Ò³nI`()>ÛâýH¢0D˜“1Z`øi“ãº¯`òO\$êÀPA\nP „0‘q”ª¼ÍÑ&C€pX+\$2Jñ‹’ý‰%Ý±Sñˆ Ø à€‡Qs d’däTÄÕœûsˆÔ-äÏ\r(Rì‰ŽÕ:¼],Ð<B²L\nÇ­ ‹\$»TmK‹µ93¹I¬AB.ãÉ™*/ÝškVnƒJ¼?‡ø;‘GmY­6b¹\r¯4™¼H ñ¶Q¦åÜÙ¶)Cm/­ŒÌ“OØž‘“NJM¥3‚»úÕÂQM¹nÔÄ¦NYv)ö/O£ôƒ½2.¶Ôôý ¤O\$ÎH­Ä–M†”2®ÖÞY{ÍÉÉ\n‚\$%Œ%8:sx†blÎÈË~9›ÍIt¹×âGŸºçL‡ºQ¹EsŠ: ’ŒóS¾ÌdW†Œp‰I¸™'™¸ÓâÐ‰å¥O“Ø‚&6	XÀº%³¶Š\"	S¤’YëR“·AÌ·fAB/ä¼Œq÷çTÃ}YïCm—2VL'8÷ ³ù8Ò‹’oa¥’w´wr:/héÍôüZ®>C%_BzŸHM:w™t÷]Õú«OŸ.(öÞ±ÜbxEëÈï±vOßàˆ’²Ûœ\$ÿ\\î`‡Á‹¿a™Šbìò+£{~mö)÷Ú†þ\$HõSkÉqû9oñõ?Ëâú»·”4\0ò‰w\\s2ŸBøb}o‚îNæ H –ILØ	~ò/ª	üªo,løÿ|Eö®&IŠÿªj8¢ª«d<ýOÂý†Tê0fZúavtçD:Ïòdâ,ÇˆÀªÏÈüÏ÷ðZbF(ô+˜ûÏÒG°l ÝOxB‹¬bzõîj{Ìö`ovtpLöc“	'2÷n±	\n,ª(pŸ\n¬úÐgpf´Ôì€ãøØN7 –Ì£ªad’nJ\"È\rXh ‡”-'Ëù¯Ÿ	o…âIE{\nK­ê~ðúöm¾1PJ“f¬aN\$¬œzåá0¸ÔÌ@ð%ìðrìâö\0ì5d¦¨k7Ž¹ï\nc ‚g¼/lå\"‡\$l³q\r	¤ëK7¨­\"Õ\n|ÏˆwM	Êüå°´‡gÀQ\nû±……\0‹rIQZÉ1œ²1¡ë­fÐ CIKâ±°IGDNbHGJÏP¾b­eäâÃeD>Ï®ÖQ\\Ð±ÜÐñâçW\nqÛŠÖNèFHŒ²pH¢ÁøjZ`ÂP5Œ5ƒ©Bw!CVb­R¾#²¼(ÛN˜C#Öã(”9€Â®éöR‚âáw#„„ æY*G%+à^C˜[\0ì^’XKÂ(Õ)d>\røúQCÀœ>aJ €†-\0ÙÃ~kH¤À¤pðNÐfÂAÄ(á°\$Œ\$ïÊ|/Næ4¤zOÂ\n ¨ÀZl±ÂPªÖÖJü.‚¢T@|òÎÐ%\nçˆKîî) ÑC\0üJ\"É2˜öhTr•#h%ÈT{kvù! J£fIE(_ˆRèß'pk–&Íg¨ÂpDûŽÐ%RAA.úî¢é+ïà€@q@àÓË\0{N¥#-ûN†édˆñI”êäb\$ƒq4Ìƒ(‚ŒzªÄÜ†ªjæÚ¯Šf-\rF’\"w6v{­¸îÂ7ŽÆ<à–¨âi!Ó&`3²ÿŠ’Ãj–´¯\$ÈòI–AKxbÉ:Ø„˜Ïë¤mÁrjBÕ7ƒxNê*ÊŽCèN… äEì’´¡^0 ˜Á‰m\rƒÚG§ŒRJnb\n{ªõ;§Æš\$¶ÔÂ#ÓVŸ‘CÑv³©|šîNK ¬ÀªÆTQÌ·&ŠÍ@4b¢";break;case"zh":$f="ä^¨ês•\\šr¤îõâ|%ÌÂ:\$\nr.®„ö2Šr/d²È»[8Ð S™8€r©!T¡\\¸s¦’I4¢b§r¬ñ•Ð€Js!Kd²u´eåV¦©ÅDªX,#!˜Ðj6Ž §:¥t\nr£“îU:.Z²PË‘.…\rVWd^%äŒµ’r¡T²Ô¼*°s#UÕ`QdÞu'c(€ÜoF“±¤Øe3™Nb¦`êp2N™S¡ Ó£:LYñta~¨&6ÛŠ‹•r¶s®Ôükžó{¾”òf“qŸw¹ß-œ×ü\n–2‹Œ #*«B!@éL©N…zµÐ¨@F«÷:QQãW­àÏs¡~™r.“ndJ¥ÊX’¨ËŠ;.ÚM(ìbx¦¥¹dè*ŒcÚTÄAns–%ÙÊO-Ç3¨ì!J—ç1.[\$¹h´¤¹ÎVÈÉdŒDcìMœ¤Al²¤‹‚N-9@€§)6_¥éDî’ë£Þ+\r#è:Œ#bÈY—n\n—)äQBr“/|'\n–èI´ä1ÎP)kÄ ¥Ñ&²0ÑzJ·g1@œó¬“<ƒ\"9£0z\r è8aÐ^Žôˆ\\0Œƒk˜2ŽApÞ9áxÊ7SÃÃV7cHßPM ÃN£¥/¶cÜ5„Að’6ŽøÛOŽà^0‡Ê3G]µ£xÈÒ4Ã›*)Š\"`ÒÕ¶§I\0DœÄYS1RZLÇ9H]8\$™ÌO±\\s…ÉÐSÒ1}s]Rê¥)v][‚cÄA–G11\rC‰ifT\$9ñåQÊE)DOa\$x\"P£ê6\0í*Ž£(iZ–´‚^Û7v’BZH‡9i%¤åÙÌB(eés—¥rZG0Ö,ð)úÆFr4Vž%ÅaÍn[ÅÓÀHG1ÞT \0•SfÊŽcdY‚aÊH£ÅÛÄþg)xôœ»sx]7ËrÎ[¡rsùy‹G1Åï¾oØ¶í8ÜE1tÓiÌNzœÐ^:¼™ÊC¬ü\rì]IÓu³Ä%»îÝ¡Úv©Rcƒ“Ç„[*7ŒÃ0ÙK¶§6t’H¨7³md<„­H:ŒcD9ŒØØ@6\rã;˜9… åà#8ÂæÀKcÒÃpêÕ…˜SÚ°°ñb˜¤#	9Hs‘\$b­„‘©%êG’6’jºœ¤i*‚»¹B­PE	óÞ:¦\rÀ‹#ì!Ñ!FÇÅú?dúŸùw	¡„9š°äf`àsêmc†Pðˆe€¸(¡T:‰Qj5G©î¤Ôª—S*mN©õB¨Õ*§ê¤ØªÅ\\•€lVJÑ[+…t¯òÀX@b…Œ²\" a\rfUg™•0ïƒr¼6° 9Ä9Eø…\"„]ŽD*ÈH¯Bh(¸#øo.\"qj	A^ž“á:@\$\0AÏúEñÈ÷ÁQÈ`‰AO”Jˆ‡.+SŒØBÀò\\L	‘&¤ÜœˆD@9…pµ[T«DÊÄØx XF0\$‘0òë iXæ]Ž¬ Ü±Íi¯\n8²:0r\rá´s`ù­Sà€1¼Å”i\rq£T2›RbÃ…!ÃA@'…0©!ÓyŠ*Î\\G”\"áÐ©z‰	écÇH…glõ³¶‘HcqlP,Ó¼Å(ëA\0b\r!œ6YgŒ©PA*Hed±ÃJ¸Slv.Ì™–Pr2Šd´\nA,îðæ	|W‹Âp \n¡@\"¨i}1&Zn‹¼¨©˜´ñ¶* é¢ý¼\nfF´ã].:çdºÃ¦`(Š‹º´\"êédâìð6¹(\";xf2£“¾xkJr1Œ‘ÓWææœétÜsŠÀ\\èåâaŠ–At„m\nA•\\†–Ä Q4oÂ´	ÁXä€¼´õ¡9\$B\0XIÒ&4-f™ÝïØ–Ò±ËKOó\na¤=2 ‡2ÃƒßdP Ï†3Vío<C¤N‰çl%\\#£1n”«m!S\r!”;ž5Ø»­Šbfm¹<7ÎºY¢»„´]	È&×8 íè–‹t4\"…1¤âQŸ.±M`„Š`=õáÎ\n{îþ/Ñhbèƒ	¡Ò\$ÅðæÆ½¶×1k\\£E‚B¾×öŒ~NÁ(sËêþZan©°T!\$	Š¦.™£uÆX7ËÓN(Ü*v¢|RžKÄæÀ™_`€‚wUIn4ÆÇðSÕR\rU…x•‚Olda%ÒH±¢LFÇHö\"gëîÂ¯\"US“yqÈB¾ñ èÃÑ(‰È¢…ù|»›\0RÎRÌve{R‚ÉA\$\"€¥Ò›VóÞ[î69æá;Xj\\aé}0€ ®CŠK×ë<kF}„…UÒ©©	A2‰…°å\"ps\nÖh.Ä+O[«žA^ZríèÌsˆÔxKÁz/†„;öƒ«ueª#žôVÌÌ&Å£öØ{»ÀÚ®uvX®A;7`êÊ“¶0²»ËÇlmD\"œ.²iþ	Ïw0“ÌŒ]‰‚l)(€‡uvˆÅÀ†PÙnG;ÕÌˆùQ7Žó»nð]±yIeá»Œ|¤ÉRª`ºÒD´nb*,FÕ¸UÛl¿Iú™¸æÞ¿œ…€ îÞëÕjÛ;¸:&ÿÊ÷›¹<¿or~f#äÐ°hO	áVð#òØèçHO%¬z«–òŽSÊ¼‹kåJ6Ï'é÷Ó˜n¦bóuå`#”IÍ‰zD?[1­\r[W6 ¸!=x8~‡ ‘S~•v%ÈühQ°¹ Qp*¸W:\$dJp³Ý)kOcˆ@»0\nMJ/?`s¼œ´KàÀxÎÚ÷}u]tÌ.ë]¾¦nD»«g1^þ#ùžX)0ÁLê>mxûQÕ\\ß¶%%ß“û£»¸}ón&´²µÄ'RØ¯pº«†¨\$sq7†ê¶ôÝà+p¥~çþÏÎ³…¹Ç¥s{Ÿ4#Ô„;(0íêá_øÿK)¿Ÿ¶¿1áDØžíûëV^~`/p^ïþîï¸^0ïÎö…Ó\0ïß\0F„óª¸O÷\0-î`/8ÿp®-®¿Ëð¿P\n]+í\$ÃJÀN÷ó«þ¿-þpACÞÔREo‚ÿ£ÂÃÐF0xüEïâX	8\rTç¯´hÌ­ -têÊÇc¶¯ŠüÐAv­\rL¤¢žGBÐ¡b&ÁB(Ë€80°Ih6ƒ¥0¤bJkR\nh”2Ô5@êµ,˜;m¢°L ê¬¤Êƒ`è@Øiª±ÀÖN¡>\r†B‹\0ÚXÀÒÇ€YãjÊ Šæc Ä‹ˆ\n ¨ÀZ\0@SàÇš6¬˜ÈÍ€ç(0OÎ#B8ªèZÃÈÆ¥æ	±!PºaÐ!(n\"â-^8Ít/£æBqˆ9Á,qã­±jà*æ!j¸„–“âÝ`˜\rå(9ƒjåR6\"Z!\0.EÂ\\d€ÙÍl,­Äñ¯2zŠºÛ¢XIÊÚ¶÷nJÛïBÜbî\nƒd3ãF2Pái¦\ràà²,¶¨V».¸FÏ<]îäIÄÆ`¼'-Ý-Öpî ©¢ÈàÁ+\$n\$ÃcRFm4ý`¬ Æ ê\r¢0‚¤,Þ…Æ¼ÁÌqÒÆ…Ì&\$ÎÖ¡ÇªºG%ê­BÁ®Ò“ÊÇF«	ÉÚîãÆçRHîDôì\"ÄT@	\0t	 š@¦\n`";break;case"zh-tw":$f="ä^¨ê%Ó•\\šr¥ÑÎõâ|%ÌÎu:HçB(\\Ë4«‘pŠr –neRQÌ¡D8Ð S•\nt*.tÒI&”G‘N”ÊAÊ¤S¹V÷:	t%9Sy:\"<r«STâ ,#!˜Ðj6Ž1uL\0¼–£“îU:.–²I9“ˆ—BÍæK&]\nDªXç[ªÅ}-,°r¨“ÖûÎöŒ¿‹&ó¨€Ða;Dãx€àr4&Ã)œÊs3§SÂtÍ\rAÐÂbÒ¥¨E•E1»ÞÔ£Êg:åxç]#0, (§˜4›Œü\r÷ñˆÅG‘qäZ†–¢SÅ )ÐªOLP\0¨ýÎ”«:}µï»áÚr¢òå´yZî¤se¢\\BœÅABs–¤ @¤2*bPr–î\n¦ª²/kÞÁ)ÒP“Ç)<·Ä©p¨’êY.R®DùÌLGI,I¥¥i.Oc’t’\0F¢å±dtì)Ê\\—È*ð’ëÚ¬+\r#è:Œ#cÌ»/ÉÊ]g9f]Á…‹Ø^K’ LªÇ)pYÊr•ä2´.«ºó-•h¹2]¥Å*–X!rBœóÜúƒ,9£0z\r è8aÐ^ŽôÈ\\0Œƒk¢2ŽApÞ9áxÊ7TÃÃ`7cHßTMHÃR£¥/·Ü5„Að’6Ž\r ÛSŽà^0‡Ð{Qa¶CxÈÔµc›4)Š\"`ÒØ7GI\\@„<ë,Pù^s”…ÔHËkØ_•Ç1(\\¤…ÐSÒu×vÝöúó{:ìI<t”!6W!öxÄ<¶@æÉ—A-É‰vtåÌC•G)JÛQ”hÂ:ƒ @;J£¨ËpÛvêZC—±)qp“d1ÊH\nY N(KqÈ]—g1GÇç9{‚Äq%-‘÷	2¨ÅPQŽœÅÁ7†'‰ò\nƒ-T\$©o-”Én6€€P’\r•“pÍctçZ§)\"^çï)ÌD’q’Ür·õïw7Ôµ.pwÌ±}¯—=Ó¿—w3çÃIÜuÕÃO1<[qêYX§©iWÐç/FråÒ[ÈœüŸ½/’¼íÃÏ<§ZÝUµnd8’ŽL“(VlÐÞ3Ãe>ÝP³çS®\rìèÛ]!\0ëV£ÆÓŽc6H\rƒxÎèŽacR9z£Î0º!ÚÙôðÜ:á8_˜ŒÄ¤Bib˜¤–€kTåøù±Ò!Äi×P¢ñø9D°®B\" Ÿ¡>ó]@º2!Mî*àÜ ²[B9Á`<	0ð`BŠS\"Cs6ÈÏCæÕÏkÁÁ(†PÈ‰Qj5G©&¥Tº™êmN©õB¨Õ*§U*­Vªð^¬M²´VÀ‰\\Åt¯òÀXKc,…”`hYËB4û™0pTL7,CuœUƒã”_¡á@\"@¢c”JÁsàdHÁ@¨ ´c‰gâí%.á^9„x´a@\$„*AH0BÁR`‰‘àJ¿¢j9„0‘¶U³Ì-ðÄ¸˜'öŠ0®¬Ê”I^'?(%ž5ü9DP BØ\$†`@^d\r+<Î2e¤–y²6€FU\0fA¼6‚\0ƒc¬46Jœ7Â´I³5ÁõStxS\n€Ì\nF2PóUe\nY:ñÌ\"ª™óF3¿²b+H1™’ØÉ™VåÍcáS ÒÁÔ	“¤Ñ™£D¢‚0T\np>å€¨Ù2×3®v­ äfU	-‚Xrá:Dhµ)b€P”\$€Âp \n¡@\"¨@UP\"„À‹UÒc7H”Gˆ6eX‡92\\-‰²2ÁpÀ)†;xíÃ¼x	Ñg°\\ºôEÅ8»<„^VJáæá‘±\r\nŸ“Æ&E!‘wkvÅº·\$\"ìªm£œH'!P\"ÚaùI®Ät\náÌˆ¸‹˜B–à¤VinAÒðæ9ÄHˆ.B°†	¢Ø\0„rrOH¹C#e\"ÊOVFBŠ.­éH\\0 ë˜1¡Ç5L©ÎÉ,¯`¦CÓ+s°8?FW\r c6ðØóË\"_ÍuîUÜ8ø^kÕ\0iJ·‚2pÒC¹KKÉz/glU‡8´C”^\$±È»&	Áx4öTaÌ.„`h\$L¸‘s\\¦}C¨µ¤žaN. XåMYÖÙŒOŠqXæP\n	F¹Ï0¼Dï>ì‹ÌÓkM M4r£¶.ÅµÜ/8°ù¡£à:è\nªÁP „0'5ù4ïF°ß7`p§øÝa>)G@©P,÷‰ñÒèÏ9å~\0€‚\ncÉhŸæ?3fŒÔÂ\\&~>²±z,GHŸò@¹·fð.Å%dt™èÇ™BÀ°ˆ#—J\nƒÖz@yŸ4Š--§D`\nZÊy“N°îð8)Ä|‹=bSIÖµ„#œ[	9 ÄœCzX_WDÈ™±VHL\0@ŽMŽ'8¨BB\"åiÌ÷§¶›/Y¾K£Ë°G0­D´A¡áB¸×.ÜÎ\$ÆÓˆ‚Do…,\\!ë EÌ	ƒt‚T‘|EL\"`#Âc¬!ÂlZzáÁ ”¶áFpö4Éf»×¼\"È`{|àzÁëà\\ñ÷f“¡#pœšîÀñ #kJbÁ‚UåÂ(…@% ü³a¼Xz#<<øõóÑËÏëEjçd·‘aß„¹œˆÁ\\Í¢…h¥3albèSJ’[ËùŽJv‡ŽY\$…aJýnõŠÅékës³O¹tç\nëûŸg7§ˆò`w,\"û åîc\nŽÿÝ9SŠäîÝÜø\$\$qðO9Ð¡^ª4d1üCèÙ;å'õ£Tkâ;·£Ä~›Àø?UéjJÂØbÑQ\$r°Ø¨KGê>GáK…¼‘àˆœH¢jáº«„ÅSÃ{Ÿvõ¤}`è¹ Ô0iÃ#ÂS™¡»åÜ¾”7ß3Kb/aR¸†Àø{§0~ºguä‹Åy¯Rùà}¤þ˜û÷¯²ïöþÂúâO\0%ìôÜÈ¬ŽÏPägðÿÏìC.íŒ’ÿì[ÂË@]G¢Á^i¯˜ Á¡â|Áp,þ.ÊòŒ‡§*!!Aõ«/ÐqÎHubDÌ<„l‚É‹@fQCæ`|*Pp%¡6D\"Dù.®±¯ò´#õL[/…ß}¬†´P`ÿ0¨ñÎ2íë/\r0Â]ðÓÐãúÅá2ÇÄÑÇÐñ\0pÖ7¯bŒQí“\rð÷pûÑÆ¬EäbFdupÏ#êCl °ôÉÄ9\$²ñ5ã\"	b\r|\"ë>i‚–ËtsçVKÎmD\0 g¶ P4àR ‰AÜ-ÆH[ÁF¢.z%ÁbÔ@@B.±zÜ@†dT\0@†C^­`\nh¼31ª6Ä¦ÖàÔN,Í\n?#ó­2 †€ä\r€VžËd\r`@UêHe\0ØeHØ\r¥œ\r Ìz¥®7@Œ¥¨ÑLC4} ª\n€Œ pNqö:Ctì‡N…­ÓÉV#B8²gzÍ\$†ð±£qú\\!.ÐÝÍð9ƒC–ßDxÆçpÄoä©lÙ‚–™Ëƒ¹&À˜\rå8:#§'ªGLº5Ãl)aµbæqÁ<m.Þ¡Î,®<ïAÐ¡¯R¦%ŒãM}!Ñoâ×&(E¼ð®Ê2 ¨6ãH5/’ž€ÞhSËÂ‡îÄåo\0Çbù‹Ævg¢ZÁ®jìN´­¯°cŠØëŽÅ*-¶Â,Ï„\nÀÂ`ê Û&á\0 ftÁ,èg4Ã%âÏ¥ï'!RÞ…,£Í*ÊõÃø Á³3T°#Í+ÒÁÆ’PŠùÌ£1FDh	\0@š	 t\n`¦";break;}$Th=array();foreach(explode("\n",lzw_decompress($f))as$X)$Th[]=(strpos($X,"\t")?explode("\t",$X):$X);return$Th;}if(!$Th){$Th=get_translations($ca);$_SESSION["translations"]=$Th;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$Mf=array_search("SQL",$b->operators);if($Mf!==false)unset($b->operators[$Mf]);}function
dsn($jc,$V,$G){try{parent::__construct($jc,$V,$G);}catch(Exception$Ac){auth_error(h($Ac->getMessage()));}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=@$this->getAttribute(4);}function
query($H,$ei=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$o];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$ec=array();class
Min_SQL{var$_conn;function
__construct($g){$this->_conn=$g;}function
select($R,$M,$Z,$id,$lf=array(),$z=1,$E=0,$Uf=false){global$b,$x;$Kd=(count($id)<count($M));$H=$b->selectQueryBuild($M,$Z,$id,$lf,$z,$E);if(!$H)$H="SELECT".limit(($_GET["page"]!="last"&&+$z&&$id&&$Kd&&$x=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($R),($Z?"\nWHERE ".implode(" AND ",$Z):"").($id&&$Kd?"\nGROUP BY ".implode(", ",$id):"").($lf?"\nORDER BY ".implode(", ",$lf):""),($z!=""?+$z:null),($E?$z*$E:0),"\n");$gh=microtime(true);$J=$this->_conn->query($H);if($Uf)echo$b->selectQuery($H,format_time($gh));return$J;}function
delete($R,$dg,$z=0){$H="FROM ".table($R);return
queries("DELETE".($z?limit1($H,$dg):" $H$dg"));}function
update($R,$O,$dg,$z=0,$Lg="\n"){$vi=array();foreach($O
as$y=>$X)$vi[]="$y = $X";$H=table($R)." SET$Lg".implode(",$Lg",$vi);return
queries("UPDATE".($z?limit1($H,$dg):" $H$dg"));}function
insert($R,$O){return
queries("INSERT INTO ".table($R).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES"));}function
insertUpdate($R,$L,$Sf){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$ec["sqlite"]="SQLite 3";$ec["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Pf=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($Qc){$this->_link=new
SQLite3($Qc);$yi=$this->_link->version();$this->server_info=$yi["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->_link->escapeString($Q)."'":"x'".reset(unpack('H*',$Q))."'");}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$d=$this->_offset++;$U=$this->_result->columnType($d);return(object)array("name"=>$this->_result->columnName($d),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
__construct($Qc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Qc);}function
query($H,$ei=false){$Ee=($ei?"unbufferedQuery":"query");$I=@$this->_link->$Ee($H,SQLITE_BOTH,$n);$this->error="";if(!$I){$this->error=$n;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($Q){return"'".sqlite_escape_string($Q)."'";}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$y=>$X)$J[($y[0]=='"'?idf_unescape($y):$y)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$If='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($If\\.)?$If\$~",$C,$B)){$R=($B[3]!=""?$B[3]:idf_unescape($B[2]));$C=($B[5]!=""?$B[5]:idf_unescape($B[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$R,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
__construct($Qc){$this->dsn(DRIVER.":$Qc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");}function
select_db($Qc){if(is_readable($Qc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Qc)?$Qc:dirname($_SERVER["SCRIPT_FILENAME"])."/$Qc")." AS a")){parent::__construct($Qc);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Sf){$vi=array();foreach($L
as$O)$vi[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys(reset($L))).") VALUES\n".implode(",\n",$vi));}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$z,$D=0,$Lg=" "){return" $H$Z".($z!==null?$Lg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($m,$qb){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($l){return
array();}function
table_status($C=""){global$g;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){$K["Oid"]=1;$K["Auto_increment"]="";$K["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($C!=""?$J[$C]:$J);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){global$g;$J=array();$Sf="";foreach(get_rows("PRAGMA table_info(".table($R).")")as$K){$C=$K["name"];$U=strtolower($K["type"]);$Rb=$K["dflt_value"];$J[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Rb,$B)?str_replace("''","'",$B[1]):($Rb=="NULL"?null:$Rb)),"null"=>!$K["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);if($K["pk"]){if($Sf!="")$J[$Sf]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$J[$C]["auto_increment"]=true;$Sf=$C;}}$dh=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$dh,$re,PREG_SET_ORDER);foreach($re
as$B){$C=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($J[$C])$J[$C]["collation"]=trim($B[3],"'");}return$J;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$dh=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$dh,$B)){$J[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$re,PREG_SET_ORDER);foreach($re
as$B){$J[""]["columns"][]=idf_unescape($B[2]).$B[4];$J[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$J){foreach(fields($R)as$C=>$o){if($o["primary"])$J[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$eh=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($R),$h);foreach(get_rows("PRAGMA index_list(".table($R).")",$h)as$K){$C=$K["name"];$v=array("type"=>($K["unique"]?"UNIQUE":"INDEX"));$v["lengths"]=array();$v["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$h)as$Bg){$v["columns"][]=$Bg["name"];$v["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($R),'~').' \((.*)\)$~i',$eh[$C],$og)){preg_match_all('/("[^"]*+")+( DESC)?/',$og[2],$re);foreach($re[2]as$y=>$X){if($X)$v["descs"][$y]='1';}}if(!$J[""]||$v["type"]!="UNIQUE"||$v["columns"]!=$J[""]["columns"]||$v["descs"]!=$J[""]["descs"]||!preg_match("~^sqlite_~",$C))$J[$C]=$v;}return$J;}function
foreign_keys($R){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$K){$q=&$J[$K["id"]];if(!$q)$q=$K;$q["source"][]=$K["from"];$q["target"][]=$K["to"];}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
check_sqlite_name($C){global$g;$Jc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Jc)\$~",$C)){$g->error=lang(21,str_replace("|",", ",$Jc));return
false;}return
true;}function
create_database($m,$pb){global$g;if(file_exists($m)){$g->error=lang(22);return
false;}if(!check_sqlite_name($m))return
false;try{$_=new
Min_SQLite($m);}catch(Exception$Ac){$g->error=$Ac->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$g;$g->__construct(":memory:");foreach($l
as$m){if(!@unlink($m)){$g->error=lang(22);return
false;}}return
true;}function
rename_database($C,$pb){global$g;if(!check_sqlite_name($C))return
false;$g->__construct(":memory:");$g->error=lang(22);return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$C,$p,$Xc,$xb,$uc,$pb,$Ma,$Df){$pi=($R==""||$Xc);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$pi=true;break;}}$c=array();$uf=array();foreach($p
as$o){if($o[1]){$c[]=($pi?$o[1]:"ADD ".implode($o[1]));if($o[0]!="")$uf[$o[0]]=$o[1][0];}}if(!$pi){foreach($c
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$C&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($R,$C,$c,$uf,$Xc))return
false;if($Ma)queries("UPDATE sqlite_sequence SET seq = $Ma WHERE name = ".q($C));return
true;}function
recreate_table($R,$C,$p,$uf,$Xc,$w=array()){if($R!=""){if(!$p){foreach(fields($R)as$y=>$o){$p[]=process_field($o,$o);$uf[$y]=idf_escape($y);}}$Tf=false;foreach($p
as$o){if($o[6])$Tf=true;}$hc=array();foreach($w
as$y=>$X){if($X[2]=="DROP"){$hc[$X[1]]=true;unset($w[$y]);}}foreach(indexes($R)as$Ud=>$v){$e=array();foreach($v["columns"]as$y=>$d){if(!$uf[$d])continue
2;$e[]=$uf[$d].($v["descs"][$y]?" DESC":"");}if(!$hc[$Ud]){if($v["type"]!="PRIMARY"||!$Tf)$w[]=array($v["type"],$Ud,$e);}}foreach($w
as$y=>$X){if($X[0]=="PRIMARY"){unset($w[$y]);$Xc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($R)as$Ud=>$q){foreach($q["source"]as$y=>$d){if(!$uf[$d])continue
2;$q["source"][$y]=idf_unescape($uf[$d]);}if(!isset($Xc[" $Ud"]))$Xc[]=" ".format_foreign_key($q);}queries("BEGIN");}foreach($p
as$y=>$o)$p[$y]="  ".implode($o);$p=array_merge($p,array_filter($Xc));if(!queries("CREATE TABLE ".table($R!=""?"adminer_$C":$C)." (\n".implode(",\n",$p)."\n)"))return
false;if($R!=""){if($uf&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$uf).") SELECT ".implode(", ",array_map('idf_escape',array_keys($uf)))." FROM ".table($R)))return
false;$Zh=array();foreach(triggers($R)as$Xh=>$Hh){$Wh=trigger($Xh);$Zh[]="CREATE TRIGGER ".idf_escape($Xh)." ".implode(" ",$Hh)." ON ".table($C)."\n$Wh[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$w))return
false;foreach($Zh
as$Wh){if(!queries($Wh))return
false;}queries("COMMIT");}return
true;}function
index_sql($R,$U,$C,$e){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($R."_"))." ON ".table($R)." $e";}function
alter_indexes($R,$c){foreach($c
as$Sf){if($Sf[0]=="PRIMARY")return
recreate_table($R,$R,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($R,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($T){return
apply_queries("DELETE FROM",$T);}function
drop_views($_i){return
apply_queries("DROP VIEW",$_i);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$_i,$zh){return
false;}function
trigger($C){global$g;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$u='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$Yh=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$u\\s*(".implode("|",$Yh["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($u))?\\s+ON\\s*$u\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$g->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$B);$Ue=$B[3];return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]).($Ue?" OF":""),"Of"=>($Ue[0]=='`'||$Ue[0]=='"'?idf_unescape($Ue):$Ue),"Trigger"=>$C,"Statement"=>$B[4],);}function
triggers($R){$J=array();$Yh=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$Yh["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$K["sql"],$B);$J[$K["name"]]=array($B[1],$B[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$H){return$g->query("EXPLAIN QUERY PLAN $H");}function
found_rows($S,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Fg){return
true;}function
create_sql($R,$Ma){global$g;$J=$g->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($R));foreach(indexes($R)as$C=>$v){if($C=='')continue;$J.=";\n\n".index_sql($R,$v['type'],$C,"(".implode(", ",array_map('idf_escape',$v['columns'])).")");}return$J;}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($k){}function
trigger_sql($R,$kh){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$g;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$J[$y]=$g->result("PRAGMA $y");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$if){list($y,$X)=explode("=",$if,2);$J[$y]=$X;}return$J;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Mc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Mc);}$x="sqlite";$di=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$jh=array_keys($di);$ki=array();$gf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$fd=array("hex","length","lower","round","unixepoch","upper");$kd=array("avg","count","count distinct","group_concat","max","min","sum");$mc=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$ec["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Pf=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($xc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){global$b;$m=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$yi=pg_version($this->_link);$this->server_info=$yi["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
select_db($k){global$b;if($k==$b->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($k,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$ei=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($I)){$this->affected_rows=pg_affected_rows($I);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
pg_fetch_result($I->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=pg_num_rows($I);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$d=$this->_offset++;$J=new
stdClass;if(function_exists('pg_field_table'))$J->orgtable=pg_field_table($this->_result,$d);$J->name=pg_field_name($this->_result,$d);$J->orgname=$J->name;$J->type=pg_field_type($this->_result,$d);$J->charsetnr=($J->type=="bytea"?63:0);return$J;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($N,$V,$G){global$b;$m=$b->database();$Q="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$Q dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($k){global$b;return($b->database()==$k);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Sf){global$g;foreach($L
as$O){$li=array();$Z=array();foreach($O
as$y=>$X){$li[]="$y = $X";if(isset($Sf[idf_unescape($y)]))$Z[]="$y = $X";}if(!(($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$li)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")")))return
false;}return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){if($g->server_info>=9)$g->query("SET application_name = 'Adminer'");return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database WHERE has_database_privilege(datname, 'CONNECT') ORDER BY datname");}function
limit($H,$Z,$z,$D=0,$Lg=" "){return" $H$Z".($z!==null?$Lg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$qb){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){$H="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support('materializedview'))$H.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$H.="
ORDER BY 1";return
get_key_vals($H);}function
count_tables($l){return
array();}function
table_status($C=""){$J=array();foreach(get_rows("SELECT c.relname AS \"Name\", CASE c.relkind WHEN 'r' THEN 'table' WHEN 'm' THEN 'materialized view' ELSE 'view' END AS \"Engine\", pg_relation_size(c.oid) AS \"Data_length\", pg_indexes_size(c.oid) AS \"Index_length\", obj_description(c.oid, 'pg_class') AS \"Comment\", c.relhasoids::int AS \"Oid\", c.reltuples as \"Rows\", n.nspname
FROM pg_class c
JOIN pg_namespace n ON(n.nspname = current_schema() AND n.oid = c.relnamespace)
WHERE relkind IN ('r', 'm', 'v')
".($C!=""?"AND relname = ".q($C):"ORDER BY relname"))as$K)$J[$K["Name"]]=$K;return($C!=""?$J[$C]:$J);}function
is_view($S){return
in_array($S["Engine"],array("view","materialized view"));}function
fk_support($S){return
true;}function
fields($R){$J=array();$Ca=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($R)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$K){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$K["full_type"],$B);list(,$U,$ie,$K["length"],$wa,$Fa)=$B;$K["length"].=$Fa;$eb=$U.$wa;if(isset($Ca[$eb])){$K["type"]=$Ca[$eb];$K["full_type"]=$K["type"].$ie.$Fa;}else{$K["type"]=$U;$K["full_type"]=$K["type"].$ie.$wa.$Fa;}$K["null"]=!$K["attnotnull"];$K["auto_increment"]=preg_match('~^nextval\\(~i',$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$K["default"],$B))$K["default"]=($B[1][0]=="'"?idf_unescape($B[1]):$B[1]).$B[2];$J[$K["field"]]=$K;}return$J;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$sh=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$e=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $sh AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption , (indpred IS NOT NULL)::int as indispartial FROM pg_index i, pg_class ci WHERE i.indrelid = $sh AND ci.oid = i.indexrelid",$h)as$K){$pg=$K["relname"];$J[$pg]["type"]=($K["indispartial"]?"INDEX":($K["indisprimary"]?"PRIMARY":($K["indisunique"]?"UNIQUE":"INDEX")));$J[$pg]["columns"]=array();foreach(explode(" ",$K["indkey"])as$_d)$J[$pg]["columns"][]=$e[$_d];$J[$pg]["descs"]=array();foreach(explode(" ",$K["indoption"])as$Ad)$J[$pg]["descs"][]=($Ad&1?'1':null);$J[$pg]["lengths"]=array();}return$J;}function
foreign_keys($R){global$bf;$J=array();foreach(get_rows("SELECT conname, condeferrable::int AS deferrable, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($R)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$B)){$K['source']=array_map('trim',explode(',',$B[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$B[2],$qe)){$K['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$qe[2]));$K['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$qe[4]));}$K['target']=array_map('trim',explode(',',$B[3]));$K['on_delete']=(preg_match("~ON DELETE ($bf)~",$B[4],$qe)?$qe[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($bf)~",$B[4],$qe)?$qe[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
view($C){global$g;return
array("select"=>trim($g->result("SELECT pg_get_viewdef(".q($C).")")));}function
collations(){return
array();}function
information_schema($m){return($m=="information_schema");}function
error(){global$g;$J=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$B))$J=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\\1<b>\\2</b>',$B[2]).$B[4];return
nl_br($J);}function
create_database($m,$pb){return
queries("CREATE DATABASE ".idf_escape($m).($pb?" ENCODING ".idf_escape($pb):""));}function
drop_databases($l){global$g;$g->close();return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($C,$pb){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($R,$C,$p,$Xc,$xb,$uc,$pb,$Ma,$Df){$c=array();$cg=array();foreach($p
as$o){$d=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $d";else{$ui=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$c[]=($R!=""?"ADD ":"  ").implode($X);else{if($d!=$X[0])$cg[]="ALTER TABLE ".table($R)." RENAME $d TO $X[0]";$c[]="ALTER $d TYPE$X[1]";if(!$X[6]){$c[]="ALTER $d ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $d ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$ui!="")$cg[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($ui!=""?substr($ui,9):"''");}}$c=array_merge($c,$Xc);if($R=="")array_unshift($cg,"CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($cg,"ALTER TABLE ".table($R)."\n".implode(",\n",$c));if($R!=""&&$R!=$C)$cg[]="ALTER TABLE ".table($R)." RENAME TO ".table($C);if($R!=""||$xb!="")$cg[]="COMMENT ON TABLE ".table($C)." IS ".q($xb);if($Ma!=""){}foreach($cg
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($R,$c){$i=array();$fc=array();$cg=array();foreach($c
as$X){if($X[0]!="INDEX")$i[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$fc[]=idf_escape($X[1]);else$cg[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." (".implode(", ",$X[2]).")";}if($i)array_unshift($cg,"ALTER TABLE ".table($R).implode(",",$i));if($fc)array_unshift($cg,"DROP INDEX ".implode(", ",$fc));foreach($cg
as$H){if(!queries($H))return
false;}return
true;}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($_i){return
drop_tables($_i);}function
drop_tables($T){foreach($T
as$R){$P=table_status($R);if(!queries("DROP ".strtoupper($P["Engine"])." ".table($R)))return
false;}return
true;}function
move_tables($T,$_i,$zh){foreach(array_merge($T,$_i)as$R){$P=table_status($R);if(!queries("ALTER ".strtoupper($P["Engine"])." ".table($R)." SET SCHEMA ".idf_escape($zh)))return
false;}return
true;}function
trigger($C,$R=null){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");if($R===null)$R=$_GET['trigger'];$L=get_rows('SELECT t.trigger_name AS "Trigger", t.action_timing AS "Timing", (SELECT STRING_AGG(event_manipulation, \' OR \') FROM information_schema.triggers WHERE event_object_table = t.event_object_table AND trigger_name = t.trigger_name ) AS "Events", t.event_manipulation AS "Event", \'FOR EACH \' || t.action_orientation AS "Type", t.action_statement AS "Statement" FROM information_schema.triggers t WHERE t.event_object_table = '.q($R).' AND t.trigger_name = '.q($C));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($R))as$K)$J[$K["trigger_name"]]=array($K["action_timing"],$K["event_manipulation"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
last_id(){return
0;}function
explain($g,$H){return$g->query("EXPLAIN $H");}function
found_rows($S,$Z){global$g;if(preg_match("~ rows=([0-9]+)~",$g->result("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$og))return$og[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($Eg){global$g,$di,$jh;$J=$g->query("SET search_path TO ".idf_escape($Eg));foreach(types()as$U){if(!isset($di[$U])){$di[$U]=0;$jh[lang(23)][]=$U;}}return$J;}function
create_sql($R,$Ma){global$g;$J='';$vg=array();$Ng=array();$P=table_status($R);$p=fields($R);$w=indexes($R);ksort($w);$Vc=foreign_keys($R);ksort($Vc);$Zh=triggers($R);if(!$P||empty($p))return
false;$J="CREATE TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." (\n    ";foreach($p
as$Oc=>$o){$Af=idf_escape($o['field']).' '.$o['full_type'].(is_null($o['default'])?"":" DEFAULT $o[default]").($o['attnotnull']?"":" NOT NULL");$vg[]=$Af;if(preg_match('~nextval\(\'([^\']+)\'\)~',$o['default'],$re)){$Mg=$re[1];$ch=reset(get_rows("SELECT * FROM $Mg"));$Ng[]="CREATE SEQUENCE $Mg INCREMENT $ch[increment_by] MINVALUE $ch[min_value] MAXVALUE $ch[max_value] START ".($Ma?$ch['last_value']:1)." CACHE $ch[cache_value];";}}if(!empty($Ng))$J=implode("\n\n",$Ng)."\n\n$J";foreach($w
as$yd=>$v){switch($v['type']){case'UNIQUE':$vg[]="CONSTRAINT ".idf_escape($yd)." UNIQUE (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;case'PRIMARY':$vg[]="CONSTRAINT ".idf_escape($yd)." PRIMARY KEY (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;}}foreach($Vc
as$Uc=>$Tc)$vg[]="CONSTRAINT ".idf_escape($Uc)." $Tc[definition] ".($Tc['deferrable']?'DEFERRABLE':'NOT DEFERRABLE');$J.=implode(",\n    ",$vg)."\n) WITH (oids = ".($P['Oid']?'true':'false').");";foreach($w
as$yd=>$v){if($v['type']=='INDEX')$J.="\n\nCREATE INDEX ".idf_escape($yd)." ON ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." USING btree (".implode(', ',array_map('idf_escape',$v['columns'])).");";}if($P['Comment'])$J.="\n\nCOMMENT ON TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." IS ".q($P['Comment']).";";foreach($p
as$Oc=>$o){if($o['comment'])$J.="\n\nCOMMENT ON COLUMN ".idf_escape($P['nspname']).".".idf_escape($P['Name']).".".idf_escape($Oc)." IS ".q($o['comment']).";";}foreach($Zh
as$Vh=>$Uh){$Wh=trigger($Vh,$P['Name']);$J.="\n\nCREATE TRIGGER ".idf_escape($Wh['Trigger'])." $Wh[Timing] $Wh[Events] ON ".idf_escape($P["nspname"]).".".idf_escape($P['Name'])." $Wh[Type] $Wh[Statement];";}return
rtrim($J,';');}function
trigger_sql($R,$kh){$J="";return
false;}function
use_sql($k){return"\connect ".idf_escape($k);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$g;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($g->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Mc){global$g;return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.($g->server_info>=9.3?'materializedview|':'').'scheme|processlist|sequence|trigger|type|variables|drop_col|kill|dump)$~',$Mc);}function
kill_process($X){return
queries("SELECT pg_terminate_backend(".number($X).")");}function
connection_id(){return"SELECT pg_backend_pid()";}function
max_connections(){global$g;return$g->result("SHOW max_connections");}$x="pgsql";$di=array();$jh=array();foreach(array(lang(24)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(25)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(26)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(27)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(28)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(29)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$di+=$X;$jh[$y]=array_keys($X);}$ki=array();$gf=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$fd=array("char_length","lower","round","to_hex","to_timestamp","upper");$kd=array("avg","count","count distinct","max","min","sum");$mc=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$ec["oracle"]="Oracle";if(isset($_GET["oracle"])){$Pf=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($xc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){$this->_link=@oci_new_connect($V,$G,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
true;}function
query($H,$ei=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$J=@oci_execute($I);restore_error_handler();if($J){if(oci_num_fields($I))return
new
Min_Result($I);$this->affected_rows=oci_num_rows($I);}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=1){$I=$this->query($H);if(!is_object($I)||!oci_fetch($I->_result))return
false;return
oci_result($I->_result,$o);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
__construct($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$y=>$X){if(is_a($X,'OCI-Lob'))$K[$y]=$X->load();}return$K;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$d=$this->_offset++;$J=new
stdClass;$J->name=oci_field_name($this->_result,$d);$J->orgname=$J->name;$J->type=oci_field_type($this->_result,$d);$J->charsetnr=(preg_match("~raw|blob|bfile~",$J->type)?63:0);return$J;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($N,$V,$G){$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$G);return
true;}function
select_db($k){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($H,$Z,$z,$D=0,$Lg=" "){return($D?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($z+$D).") WHERE rnum > $D":($z!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($z+$D):" $H$Z"));}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$qb){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($l){return
array();}function
table_status($C=""){$J=array();$Gg=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $Gg":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $Gg":"")."
ORDER BY 1")as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$ie="$K[DATA_PRECISION],$K[DATA_SCALE]";if($ie==",")$ie=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($ie?"($ie)":""),"type"=>strtolower($U),"length"=>$ie,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$K){$yd=$K["INDEX_NAME"];$J[$yd]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$yd]["columns"][]=$K["COLUMN_NAME"];$J[$yd]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);$J[$yd]["descs"][]=($K["DESCEND"]?'1':null);}return$J;}function
view($C){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($L);}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
explain($g,$H){$g->query("EXPLAIN PLAN FOR $H");return$g->query("SELECT * FROM plan_table");}function
found_rows($S,$Z){}function
alter_table($R,$C,$p,$Xc,$xb,$uc,$pb,$Ma,$Df){$c=$fc=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$c[]=($R!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$fc[]=idf_escape($o[0]);}if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($R)."\n".implode("\n",$c)))&&(!$fc||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$fc).")"))&&($R==$C||queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)));}function
foreign_keys($R){$J=array();$H="SELECT c_list.CONSTRAINT_NAME as NAME,
c_src.COLUMN_NAME as SRC_COLUMN,
c_dest.OWNER as DEST_DB,
c_dest.TABLE_NAME as DEST_TABLE,
c_dest.COLUMN_NAME as DEST_COLUMN,
c_list.DELETE_RULE as ON_DELETE
FROM ALL_CONSTRAINTS c_list, ALL_CONS_COLUMNS c_src, ALL_CONS_COLUMNS c_dest
WHERE c_list.CONSTRAINT_NAME = c_src.CONSTRAINT_NAME
AND c_list.R_CONSTRAINT_NAME = c_dest.CONSTRAINT_NAME
AND c_list.CONSTRAINT_TYPE = 'R'
AND c_src.TABLE_NAME = ".q($R);foreach(get_rows($H)as$K)$J[$K['NAME']]=array("db"=>$K['DEST_DB'],"table"=>$K['DEST_TABLE'],"source"=>array($K['SRC_COLUMN']),"target"=>array($K['DEST_COLUMN']),"on_delete"=>$K['ON_DELETE'],"on_update"=>null,);return$J;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($_i){return
apply_queries("DROP VIEW",$_i);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($Fg){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($Fg));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$L=get_rows('SELECT * FROM v$instance');return
reset($L);}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Mc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Mc);}$x="oracle";$di=array();$jh=array();foreach(array(lang(24)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(25)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(26)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(27)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$di+=$X;$jh[$y]=array_keys($X);}$ki=array();$gf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$fd=array("length","lower","round","upper");$kd=array("avg","count","count distinct","max","min","sum");$mc=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$ec["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Pf=array("SQLSRV","MSSQL","PDO_DBLIB");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$G){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$Bd=sqlsrv_server_info($this->_link);$this->server_info=$Bd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($H,$ei=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
false;}return$this->store_result($I);}function
multi_query($H){$this->_result=sqlsrv_query($this->_link,$H);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($I=null){if(!$I)$I=$this->_result;if(!$I)return
false;if(sqlsrv_field_metadata($I))return
new
Min_Result($I);$this->affected_rows=sqlsrv_rows_affected($I);return
true;}function
next_result(){return$this->_result?sqlsrv_next_result($this->_result):null;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$y=>$X){if(is_a($X,'DateTime'))$K[$y]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$o["Name"];$J->orgname=$o["Name"];$J->type=($o["Type"]==1?254:0);return$J;}function
seek($D){for($s=0;$s<$D;$s++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$G){$this->_link=@mssql_connect($N,$V,$G);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
mssql_select_db($k);}function
query($H,$ei=false){$I=@mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result->_result);}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=mssql_num_rows($I);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$J=mssql_fetch_field($this->_result);$J->orgtable=$J->table;$J->orgname=$J->name;return$J;}function
seek($D){mssql_data_seek($this->_result,$D);}function
__destruct(){mssql_free_result($this->_result);}}}elseif(extension_loaded("pdo_dblib")){class
Min_DB
extends
Min_PDO{var$extension="PDO_DBLIB";function
connect($N,$V,$G){$this->dsn("dblib:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);return
true;}function
select_db($k){return$this->query("USE ".idf_escape($k));}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Sf){foreach($L
as$O){$li=array();$Z=array();foreach($O
as$y=>$X){$li[]="$y = $X";if(isset($Sf[idf_unescape($y)]))$Z[]="$y = $X";}if(!queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$li)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($u){return"[".str_replace("]","]]",$u)."]";}function
table($u){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT name FROM sys.databases WHERE name NOT IN ('master', 'tempdb', 'model', 'msdb')");}function
limit($H,$Z,$z,$D=0,$Lg=" "){return($z!==null?" TOP (".($z+$D).")":"")." $H$Z";}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$qb){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($m));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($l){global$g;$J=array();foreach($l
as$m){$g->select_db($m);$J[$m]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
table_status($C=""){$J=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]=="VIEW";}function
fk_support($S){return
true;}function
fields($R){$J=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$K){$U=$K["type"];$ie=(preg_match("~char|binary~",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($ie?"($ie)":""),"type"=>$U,"length"=>$ie,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$h)as$K){$C=$K["name"];$J[$C]["type"]=($K["is_primary_key"]?"PRIMARY":($K["is_unique"]?"UNIQUE":"INDEX"));$J[$C]["lengths"]=array();$J[$C]["columns"][$K["key_ordinal"]]=$K["column_name"];$J[$C]["descs"][$K["key_ordinal"]]=($K["is_descending_key"]?'1':null);}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$J=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$pb)$J[preg_replace('~_.*~','',$pb)][]=$pb;return$J;}function
information_schema($m){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
create_database($m,$pb){return
queries("CREATE DATABASE ".idf_escape($m).(preg_match('~^[a-z0-9_]+$~i',$pb)?" COLLATE $pb":""));}function
drop_databases($l){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$l)));}function
rename_database($C,$pb){if(preg_match('~^[a-z0-9_]+$~i',$pb))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $pb");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$C,$p,$Xc,$xb,$uc,$pb,$Ma,$Df){$c=array();foreach($p
as$o){$d=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $d";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($R==""?substr($Xc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($d!=$X[0])queries("EXEC sp_rename ".q(table($R).".$d").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$c["ADD"])."\n)");if($R!=$C)queries("EXEC sp_rename ".q(table($R)).", ".q($C));if($Xc)$c[""]=$Xc;foreach($c
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$c){$v=array();$fc=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$fc[]=idf_escape($X[1]);else$v[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$v||queries("DROP INDEX ".implode(", ",$v)))&&(!$fc||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$fc)));}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$H){$g->query("SET SHOWPLAN_ALL ON");$J=$g->query($H);$g->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($S,$Z){}function
foreign_keys($R){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$K){$q=&$J[$K["FK_NAME"]];$q["table"]=$K["PKTABLE_NAME"];$q["source"][]=$K["FKCOLUMN_NAME"];$q["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($_i){return
queries("DROP VIEW ".implode(", ",array_map('table',$_i)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$_i,$zh){return
apply_queries("ALTER SCHEMA ".idf_escape($zh)." TRANSFER",array_merge($T,$_i));}function
trigger($C){if($C=="")return
array();$L=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$J=reset($L);if($J)$J["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$J["text"]);return$J;}function
triggers($R){$J=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$K)$J[$K["name"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($Eg){return
true;}function
use_sql($k){return"USE ".idf_escape($k);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Mc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Mc);}$x="mssql";$di=array();$jh=array();foreach(array(lang(24)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(25)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(26)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(27)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$di+=$X;$jh[$y]=array_keys($X);}$ki=array();$gf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$fd=array("len","lower","round","upper");$kd=array("avg","count","count distinct","max","min","sum");$mc=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$ec['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$Pf=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=ibase_connect($N,$V,$G);if($this->_link){$ni=explode(':',$N);$this->service_link=ibase_service_attach($ni[0],$V,$G);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return($k=="domain");}function
query($H,$ei=false){$I=ibase_query($H,$this->_link);if(!$I){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
false;}$this->error="";if($I===true){$this->affected_rows=ibase_affected_rows($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return
ibase_fetch_assoc($this->_result);}function
fetch_row(){return
ibase_fetch_row($this->_result);}function
fetch_field(){$o=ibase_field_info($this->_result,$this->_offset++);return(object)array('name'=>$o['name'],'orgname'=>$o['name'],'type'=>$o['type'],'charsetnr'=>$o['length'],);}function
__destruct(){ibase_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases($Wc){return
array("domain");}function
limit($H,$Z,$z,$D=0,$Lg=" "){$J='';$J.=($z!==null?$Lg."FIRST $z".($D?" SKIP $D":""):"");$J.=" $H$Z";return$J;}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$qb){}function
engines(){return
array();}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
tables_list(){global$g;$H='SELECT RDB$RELATION_NAME FROM rdb$relations WHERE rdb$system_flag = 0';$I=ibase_query($g->_link,$H);$J=array();while($K=ibase_fetch_assoc($I))$J[$K['RDB$RELATION_NAME']]='table';ksort($J);return$J;}function
count_tables($l){return
array();}function
table_status($C="",$Lc=false){global$g;$J=array();$Lb=tables_list();foreach($Lb
as$v=>$X){$v=trim($v);$J[$v]=array('Name'=>$v,'Engine'=>'standard',);if($C==$v)return$J[$v];}return$J;}function
is_view($S){return
false;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"]);}function
fields($R){global$g;$J=array();$H='SELECT r.RDB$FIELD_NAME AS field_name,
r.RDB$DESCRIPTION AS field_description,
r.RDB$DEFAULT_VALUE AS field_default_value,
r.RDB$NULL_FLAG AS field_not_null_constraint,
f.RDB$FIELD_LENGTH AS field_length,
f.RDB$FIELD_PRECISION AS field_precision,
f.RDB$FIELD_SCALE AS field_scale,
CASE f.RDB$FIELD_TYPE
WHEN 261 THEN \'BLOB\'
WHEN 14 THEN \'CHAR\'
WHEN 40 THEN \'CSTRING\'
WHEN 11 THEN \'D_FLOAT\'
WHEN 27 THEN \'DOUBLE\'
WHEN 10 THEN \'FLOAT\'
WHEN 16 THEN \'INT64\'
WHEN 8 THEN \'INTEGER\'
WHEN 9 THEN \'QUAD\'
WHEN 7 THEN \'SMALLINT\'
WHEN 12 THEN \'DATE\'
WHEN 13 THEN \'TIME\'
WHEN 35 THEN \'TIMESTAMP\'
WHEN 37 THEN \'VARCHAR\'
ELSE \'UNKNOWN\'
END AS field_type,
f.RDB$FIELD_SUB_TYPE AS field_subtype,
coll.RDB$COLLATION_NAME AS field_collation,
cset.RDB$CHARACTER_SET_NAME AS field_charset
FROM RDB$RELATION_FIELDS r
LEFT JOIN RDB$FIELDS f ON r.RDB$FIELD_SOURCE = f.RDB$FIELD_NAME
LEFT JOIN RDB$COLLATIONS coll ON f.RDB$COLLATION_ID = coll.RDB$COLLATION_ID
LEFT JOIN RDB$CHARACTER_SETS cset ON f.RDB$CHARACTER_SET_ID = cset.RDB$CHARACTER_SET_ID
WHERE r.RDB$RELATION_NAME = '.q($R).'
ORDER BY r.RDB$FIELD_POSITION';$I=ibase_query($g->_link,$H);while($K=ibase_fetch_assoc($I))$J[trim($K['FIELD_NAME'])]=array("field"=>trim($K["FIELD_NAME"]),"full_type"=>trim($K["FIELD_TYPE"]),"type"=>trim($K["FIELD_SUB_TYPE"]),"default"=>trim($K['FIELD_DEFAULT_VALUE']),"null"=>(trim($K["FIELD_NOT_NULL_CONSTRAINT"])=="YES"),"auto_increment"=>'0',"collation"=>trim($K["FIELD_COLLATION"]),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"comment"=>trim($K["FIELD_DESCRIPTION"]),);return$J;}function
indexes($R,$h=null){$J=array();return$J;}function
foreign_keys($R){return
array();}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Eg){return
true;}function
support($Mc){return
preg_match("~^(columns|sql|status|table)$~",$Mc);}$x="firebird";$gf=array("=");$fd=array();$kd=array();$mc=array();}$ec["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$Pf=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($k){return($k=="domain");}function
query($H,$ei=false){$F=array('SelectExpression'=>$H,'ConsistentRead'=>'true');if($this->next)$F['NextToken']=$this->next;$I=sdb_request_all('Select','Item',$F,$this->timeout);if($I===false)return$I;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$H)){$nh=0;foreach($I
as$Od)$nh+=$Od->Attribute->Value;$I=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$nh,))));}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
__construct($I){foreach($I
as$Od){$K=array();if($Od->Name!='')$K['itemName()']=(string)$Od->Name;foreach($Od->Attribute
as$Ja){$C=$this->_processValue($Ja->Name);$Y=$this->_processValue($Ja->Value);if(isset($K[$C])){$K[$C]=(array)$K[$C];$K[$C][]=$Y;}else$K[$C]=$Y;}$this->_rows[]=$K;foreach($K
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($pc){return(is_object($pc)&&$pc['encoding']=='base64'?base64_decode($pc):(string)$pc);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$y=>$X)$J[$y]=$K[$y];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Vd=array_keys($this->_rows[0]);return(object)array('name'=>$Vd[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$Sf="itemName()";function
_chunkRequest($vd,$va,$F,$Ec=array()){global$g;foreach(array_chunk($vd,25)as$ib){$zf=$F;foreach($ib
as$s=>$t){$zf["Item.$s.ItemName"]=$t;foreach($Ec
as$y=>$X)$zf["Item.$s.$y"]=$X;}if(!sdb_request($va,$zf))return
false;}$g->affected_rows=count($vd);return
true;}function
_extractIds($R,$dg,$z){$J=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$dg,$re))$J=array_map('idf_unescape',$re[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($R).$dg.($z?" LIMIT 1":"")))as$Od)$J[]=$Od->Name;}return$J;}function
select($R,$M,$Z,$id,$lf=array(),$z=1,$E=0,$Uf=false){global$g;$g->next=$_GET["next"];$J=parent::select($R,$M,$Z,$id,$lf,$z,$E,$Uf);$g->next=0;return$J;}function
delete($R,$dg,$z=0){return$this->_chunkRequest($this->_extractIds($R,$dg,$z),'BatchDeleteAttributes',array('DomainName'=>$R));}function
update($R,$O,$dg,$z=0,$Lg="\n"){$Sb=array();$Fd=array();$s=0;$vd=$this->_extractIds($R,$dg,$z);$t=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$y=>$X){$y=idf_unescape($y);if($X=="NULL"||($t!=""&&array($t)!=$vd))$Sb["Attribute.".count($Sb).".Name"]=$y;if($X!="NULL"){foreach((array)$X
as$Qd=>$W){$Fd["Attribute.$s.Name"]=$y;$Fd["Attribute.$s.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Qd)$Fd["Attribute.$s.Replace"]="true";$s++;}}}$F=array('DomainName'=>$R);return(!$Fd||$this->_chunkRequest(($t!=""?array($t):$vd),'BatchPutAttributes',$F,$Fd))&&(!$Sb||$this->_chunkRequest($vd,'BatchDeleteAttributes',$F,$Sb));}function
insert($R,$O){$F=array("DomainName"=>$R);$s=0;foreach($O
as$C=>$Y){if($Y!="NULL"){$C=idf_unescape($C);if($C=="itemName()")$F["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$F["Attribute.$s.Name"]=$C;$F["Attribute.$s.Value"]=(is_array($Y)?$X:idf_unescape($Y));$s++;}}}}return
sdb_request('PutAttributes',$F);}function
insertUpdate($R,$L,$Sf){foreach($L
as$O){if(!$this->update($R,$O,"WHERE `itemName()` = ".q($O["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($Mc){return
preg_match('~sql~',$Mc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($m,$qb){}function
tables_list(){global$g;$J=array();foreach(sdb_request_all('ListDomains','DomainName')as$R)$J[(string)$R]='table';if($g->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$J;}function
table_status($C="",$Lc=false){$J=array();foreach(($C!=""?array($C=>true):tables_list())as$R=>$U){$K=array("Name"=>$R,"Auto_increment"=>"");if(!$Lc){$De=sdb_request('DomainMetadata',array('DomainName'=>$R));if($De){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$y=>$X)$K[$y]=(string)$De->$X;}}if($C!="")return$K;$J[$R]=$K;}return$J;}function
explain($g,$H){}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($R){return
fields_from_edit();}function
foreign_keys($R){return
array();}function
table($u){return
idf_escape($u);}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
limit($H,$Z,$z,$D=0,$Lg=" "){return" $H$Z".($z!==null?$Lg."LIMIT $z":"");}function
unconvert_field($o,$J){return$J;}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$C,$p,$Xc,$xb,$uc,$pb,$Ma,$Df){return($R==""&&sdb_request('CreateDomain',array('DomainName'=>$C)));}function
drop_tables($T){foreach($T
as$R){if(!sdb_request('DeleteDomain',array('DomainName'=>$R)))return
false;}return
true;}function
count_tables($l){foreach($l
as$m)return
array($m=>count(tables_list()));}function
found_rows($S,$Z){return($Z?null:$S["Rows"]);}function
last_id(){}function
hmac($Ba,$Lb,$y,$hg=false){$Va=64;if(strlen($y)>$Va)$y=pack("H*",$Ba($y));$y=str_pad($y,$Va,"\0");$Rd=$y^str_repeat("\x36",$Va);$Sd=$y^str_repeat("\x5C",$Va);$J=$Ba($Sd.pack("H*",$Ba($Rd.$Lb)));if($hg)$J=pack("H*",$J);return$J;}function
sdb_request($va,$F=array()){global$b,$g;list($sd,$F['AWSAccessKeyId'],$Hg)=$b->credentials();$F['Action']=$va;$F['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$F['Version']='2009-04-15';$F['SignatureVersion']=2;$F['SignatureMethod']='HmacSHA1';ksort($F);$H='';foreach($F
as$y=>$X)$H.='&'.rawurlencode($y).'='.rawurlencode($X);$H=str_replace('%7E','~',substr($H,1));$H.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$sd)."\n/\n$H",$Hg,true)));@ini_set('track_errors',1);$Pc=@file_get_contents((preg_match('~^https?://~',$sd)?$sd:"http://$sd"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$H,'ignore_errors'=>1,))));if(!$Pc){$g->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$Ii=simplexml_load_string($Pc);if(!$Ii){$n=libxml_get_last_error();$g->error=$n->message;return
false;}if($Ii->Errors){$n=$Ii->Errors->Error;$g->error="$n->Message ($n->Code)";return
false;}$g->error='';$yh=$va."Result";return($Ii->$yh?$Ii->$yh:true);}function
sdb_request_all($va,$yh,$F=array(),$Gh=0){$J=array();$gh=($Gh?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$F['SelectExpression'],$B)?$B[1]:0);do{$Ii=sdb_request($va,$F);if(!$Ii)break;foreach($Ii->$yh
as$pc)$J[]=$pc;if($z&&count($J)>=$z){$_GET["next"]=$Ii->NextToken;break;}if($Gh&&microtime(true)-$gh>$Gh)return
false;$F['NextToken']=$Ii->NextToken;if($z)$F['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($J),$F['SelectExpression']);}while($Ii->NextToken);return$J;}$x="simpledb";$gf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$fd=array();$kd=array("count");$mc=array(array("json"));}$ec["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$Pf=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($N,$V,$G){global$b;$m=$b->database();$jf=array();if($V!=""){$jf["username"]=$V;$jf["password"]=$G;}if($m!="")$jf["db"]=$m;try{$this->_link=@new
MongoClient("mongodb://$N",$jf);return
true;}catch(Exception$Ac){$this->error=$Ac->getMessage();return
false;}}function
query($H){return
false;}function
select_db($k){try{$this->_db=$this->_link->selectDB($k);return
true;}catch(Exception$Ac){$this->error=$Ac->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($I){foreach($I
as$Od){$K=array();foreach($Od
as$y=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$y]=63;$K[$y]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$K;foreach($K
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$y=>$X)$J[$y]=$K[$y];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Vd=array_keys($this->_rows[0]);$C=$Vd[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}}class
Min_Driver
extends
Min_SQL{public$Sf="_id";function
select($R,$M,$Z,$id,$lf=array(),$z=1,$E=0,$Uf=false){$M=($M==array("*")?array():array_fill_keys($M,true));$Zg=array();foreach($lf
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Gb);$Zg[$X]=($Gb?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($R)->find(array(),$M)->sort($Zg)->limit(+$z)->skip($E*$z));}function
insert($R,$O){try{$J=$this->_conn->_db->selectCollection($R)->insert($O);$this->_conn->errno=$J['code'];$this->_conn->error=$J['err'];$this->_conn->last_id=$O['_id'];return!$J['err'];}catch(Exception$Ac){$this->_conn->error=$Ac->getMessage();return
false;}}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
error(){global$g;return
h($g->error);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases($Wc){global$g;$J=array();$Pb=$g->_link->listDBs();foreach($Pb['databases']as$m)$J[]=$m['name'];return$J;}function
collations(){return
array();}function
db_collation($m,$qb){}function
count_tables($l){global$g;$J=array();foreach($l
as$m)$J[$m]=count($g->_link->selectDB($m)->getCollectionNames(true));return$J;}function
tables_list(){global$g;return
array_fill_keys($g->_db->getCollectionNames(true),'table');}function
table_status($C="",$Lc=false){$J=array();foreach(tables_list()as$R=>$U){$J[$R]=array("Name"=>$R);if($C==$R)return$J[$R];}return$J;}function
information_schema(){}function
is_view($S){}function
drop_databases($l){global$g;foreach($l
as$m){$sg=$g->_link->selectDB($m)->drop();if(!$sg['ok'])return
false;}return
true;}function
indexes($R,$h=null){global$g;$J=array();foreach($g->_db->selectCollection($R)->getIndexInfo()as$v){$Vb=array();foreach($v["key"]as$d=>$U)$Vb[]=($U==-1?'1':null);$J[$v["name"]]=array("type"=>($v["name"]=="_id_"?"PRIMARY":($v["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($v["key"]),"lengths"=>array(),"descs"=>$Vb,);}return$J;}function
fields($R){return
fields_from_edit();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
foreign_keys($R){return
array();}function
fk_support($S){}function
engines(){return
array();}function
found_rows($S,$Z){global$g;return$g->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($R,$C,$p,$Xc,$xb,$uc,$pb,$Ma,$Df){global$g;if($R==""){$g->_db->createCollection($C);return
true;}}function
drop_tables($T){global$g;foreach($T
as$R){$sg=$g->_db->selectCollection($R)->drop();if(!$sg['ok'])return
false;}return
true;}function
truncate_tables($T){global$g;foreach($T
as$R){$sg=$g->_db->selectCollection($R)->remove();if(!$sg['ok'])return
false;}return
true;}function
alter_indexes($R,$c){global$g;foreach($c
as$X){list($U,$C,$O)=$X;if($O=="DROP")$J=$g->_db->command(array("deleteIndexes"=>$R,"index"=>$C));else{$e=array();foreach($O
as$d){$d=preg_replace('~ DESC$~','',$d,1,$Gb);$e[$d]=($Gb?-1:1);}$J=$g->_db->selectCollection($R)->ensureIndex($e,array("unique"=>($U=="UNIQUE"),"name"=>$C,));}if($J['errmsg']){$g->error=$J['errmsg'];return
false;}}return
true;}function
last_id(){global$g;return$g->last_id;}function
table($u){return$u;}function
idf_escape($u){return$u;}function
support($Mc){return
preg_match("~database|indexes~",$Mc);}$x="mongo";$gf=array("=");$fd=array();$kd=array();$mc=array(array("json"));}$ec["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$Pf=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($Gf,$Bb=array(),$Ee='GET'){@ini_set('track_errors',1);$Pc=@file_get_contents($this->_url.'/'.ltrim($Gf,'/'),false,stream_context_create(array('http'=>array('method'=>$Ee,'content'=>json_encode($Bb),'ignore_errors'=>1,))));if(!$Pc){$this->error=$php_errormsg;return$Pc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Pc;return
false;}$J=json_decode($Pc,true);if($J===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$Ab=get_defined_constants(true);foreach($Ab['json']as$C=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$C)){$this->error=$C;break;}}}}return$J;}function
query($Gf,$Bb=array(),$Ee='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($Gf,'/'),$Bb,$Ee);}function
connect($N,$V,$G){preg_match('~^(https?://)?(.*)~',$N,$B);$this->_url=($B[1]?$B[1]:"http://")."$V:$G@$B[2]/";$J=$this->query('');if($J)$this->server_info=$J['version']['number'];return(bool)$J;}function
select_db($k){$this->_db=$k;return
true;}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows;function
__construct($L){$this->num_rows=count($this->_rows);$this->_rows=$L;reset($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);next($this->_rows);return$J;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($R,$M,$Z,$id,$lf=array(),$z=1,$E=0,$Uf=false){global$b;$Lb=array();$H="$R/_search";if($M!=array("*"))$Lb["fields"]=$M;if($lf){$Zg=array();foreach($lf
as$nb){$nb=preg_replace('~ DESC$~','',$nb,1,$Gb);$Zg[]=($Gb?array($nb=>"desc"):$nb);}$Lb["sort"]=$Zg;}if($z){$Lb["size"]=+$z;if($E)$Lb["from"]=($E*$z);}foreach($Z
as$X){list($nb,$ef,$X)=explode(" ",$X,3);if($nb=="_id")$Lb["query"]["ids"]["values"][]=$X;elseif($nb.$X!=""){$Bh=array("term"=>array(($nb!=""?$nb:"_all")=>$X));if($ef=="=")$Lb["query"]["filtered"]["filter"]["and"][]=$Bh;else$Lb["query"]["filtered"]["query"]["bool"]["must"][]=$Bh;}}if($Lb["query"]&&!$Lb["query"]["filtered"]["query"]&&!$Lb["query"]["ids"])$Lb["query"]["filtered"]["query"]=array("match_all"=>array());$gh=microtime(true);$Gg=$this->_conn->query($H,$Lb);if($Uf)echo$b->selectQuery("$H: ".print_r($Lb,true),format_time($gh));if(!$Gg)return
false;$J=array();foreach($Gg['hits']['hits']as$rd){$K=array();if($M==array("*"))$K["_id"]=$rd["_id"];$p=$rd['_source'];if($M!=array("*")){$p=array();foreach($M
as$y)$p[$y]=$rd['fields'][$y];}foreach($p
as$y=>$X){if($Lb["fields"])$X=$X[0];$K[$y]=(is_array($X)?json_encode($X):$X);}$J[]=$K;}return
new
Min_Result($J);}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
support($Mc){return
preg_match("~database|table|columns~",$Mc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){global$g;$J=$g->rootQuery('_aliases');if($J){$J=array_keys($J);sort($J,SORT_STRING);}return$J;}function
collations(){return
array();}function
db_collation($m,$qb){}function
engines(){return
array();}function
count_tables($l){global$g;$J=$g->query('_mapping');if($J)$J=array_map('count',$J);return$J;}function
tables_list(){global$g;$J=$g->query('_mapping');if($J)$J=array_fill_keys(array_keys($J[$g->_db]["mappings"]),'table');return$J;}function
table_status($C="",$Lc=false){global$g;$Gg=$g->query("_search?search_type=count",array("facets"=>array("count_by_type"=>array("terms"=>array("field"=>"_type",)))),"POST");$J=array();if($Gg){foreach($Gg["facets"]["count_by_type"]["terms"]as$R){$J[$R["term"]]=array("Name"=>$R["term"],"Engine"=>"table","Rows"=>$R["count"],);if($C!=""&&$C==$R["term"])return$J[$C];}}return$J;}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($R){global$g;$I=$g->query("$R/_mapping");$J=array();if($I){$oe=$I[$R]['properties'];if(!$oe)$oe=$I[$g->_db]['mappings'][$R]['properties'];if($oe){foreach($oe
as$C=>$o){$J[$C]=array("field"=>$C,"full_type"=>$o["type"],"type"=>$o["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($o["properties"]){unset($J[$C]["privileges"]["insert"]);unset($J[$C]["privileges"]["update"]);}}}}return$J;}function
foreign_keys($R){return
array();}function
table($u){return$u;}function
idf_escape($u){return$u;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
fk_support($S){}function
found_rows($S,$Z){return
null;}function
create_database($m){global$g;return$g->rootQuery(urlencode($m),array(),'PUT');}function
drop_databases($l){global$g;return$g->rootQuery(urlencode(implode(',',$l)),array(),'DELETE');}function
drop_tables($T){global$g;$J=true;foreach($T
as$R)$J=$J&&$g->query(urlencode($R),array(),'DELETE');return$J;}$x="elastic";$gf=array("=","query");$fd=array();$kd=array();$mc=array(array("json"));}$ec=array("server"=>"MySQL")+$ec;if(!defined("DRIVER")){$Pf=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($N="",$V="",$G="",$k=null,$Lf=null,$Yg=null){mysqli_report(MYSQLI_REPORT_OFF);list($sd,$Lf)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$sd:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$G!=""?$G:ini_get("mysqli.default_pw")),$k,(is_numeric($Lf)?$Lf:ini_get("mysqli.default_port")),(!is_numeric($Lf)?$Lf:$Yg));return$J;}function
set_charset($cb){if(parent::set_charset($cb))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $cb");}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$o];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($cb){if(function_exists('mysql_set_charset')){if(mysql_set_charset($cb,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $cb");}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($k){return
mysql_select_db($k,$this->_link);}function
query($H,$ei=false){$I=@($ei?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$o);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$G){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);return
true;}function
set_charset($cb){$this->query("SET NAMES $cb");}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($H,$ei=false){$this->setAttribute(1000,!$ei);return
parent::query($H,$ei);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$O){return($O?parent::insert($R,$O):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$L,$Sf){$e=array_keys(reset($L));$Qf="INSERT INTO ".table($R)." (".implode(", ",$e).") VALUES\n";$vi=array();foreach($e
as$y)$vi[$y]="$y = VALUES($y)";$mh="\nON DUPLICATE KEY UPDATE ".implode(", ",$vi);$vi=array();$ie=0;foreach($L
as$O){$Y="(".implode(", ",$O).")";if($vi&&(strlen($Qf)+$ie+strlen($Y)+strlen($mh)>1e6)){if(!queries($Qf.implode(",\n",$vi).$mh))return
false;$vi=array();$ie=0;}$vi[]=$Y;$ie+=strlen($Y)+2;}return
queries($Qf.implode(",\n",$vi).$mh);}}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
table($u){return
idf_escape($u);}function
connect(){global$b,$di,$jh;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){$g->set_charset(charset($g));$g->query("SET sql_quote_show_create = 1, autocommit = 1");if(version_compare($g->server_info,'5.7.8')>=0){$jh[lang(26)][]="json";$di["json"]=4294967295;}return$g;}$J=$g->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($Cg=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$Cg;return$J;}function
get_databases($Wc){global$g;$J=get_session("dbs");if($J===null){$H=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Wc?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$z,$D=0,$Lg=" "){return" $H$Z".($z!==null?$Lg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$qb){global$g;$J=null;$i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$i,$B))$J=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$i,$B))$J=$qb[$B[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(preg_match("~YES|DEFAULT~",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals($g->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
tables_generated_columns($rh){global$g;return
get_key_vals($g->server_info>=5?"SELECT `COLUMN_NAME`, `GENERATION_EXPRESSION`, `COLUMN_TYPE` FROM information_schema.`COLUMNS` WHERE `TABLE_SCHEMA` = (select database()) AND `EXTRA` = 'VIRTUAL GENERATED' AND `TABLE_NAME` =".$rh:"SHOW TABLES");}function
tables_generated_columns2($rh){global$g;return
get_key_vals($g->server_info>=5?"SELECT `COLUMN_NAME`, `COLUMN_TYPE` FROM information_schema.`COLUMNS` WHERE `TABLE_SCHEMA` = (select database()) AND `EXTRA` = 'VIRTUAL GENERATED' AND `TABLE_NAME` =".$rh:"SHOW TABLES");}function
count_tables($l){$J=array();foreach($l
as$m)$J[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$J;}function
table_status($C="",$Lc=false){global$g;$J=array();foreach(get_rows($Lc&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, ENGINE AS Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){global$g;return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"])||(preg_match('~NDB~i',$S["Engine"])&&version_compare($g->server_info,'5.6')>=0);}function
fields($R){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$B);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($K["Default"]!=""||preg_match("~char|set~",$B[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"is_virtual"=>(strpos(strtolower($K["Extra"]),"virtual")!==false),"on_update"=>(preg_match('~^on update (.+)~i',$K["Extra"],$B)?$B[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(preg_split('~, *~',$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$h)as$K){$C=$K["Key_name"];$J[$C]["type"]=($C=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?($K["Index_type"]=="SPATIAL"?"SPATIAL":"INDEX"):"UNIQUE")));$J[$C]["columns"][]=$K["Column_name"];$J[$C]["lengths"][]=($K["Index_type"]=="SPATIAL"?null:$K["Sub_part"]);$J[$C]["descs"][]=null;}return$J;}function
foreign_keys($R){global$g,$bf;static$If='`(?:[^`]|``)+`';$J=array();$Hb=$g->result("SHOW CREATE TABLE ".table($R),1);if($Hb){preg_match_all("~CONSTRAINT ($If) FOREIGN KEY ?\\(((?:$If,? ?)+)\\) REFERENCES ($If)(?:\\.($If))? \\(((?:$If,? ?)+)\\)(?: ON DELETE ($bf))?(?: ON UPDATE ($bf))?~",$Hb,$re,PREG_SET_ORDER);foreach($re
as$B){preg_match_all("~$If~",$B[2],$ah);preg_match_all("~$If~",$B[5],$zh);$J[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$ah[0]),"target"=>array_map('idf_unescape',$zh[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$y=>$X)asort($J[$y]);return$J;}function
information_schema($m){global$g;return($g->server_info>=5&&$m=="information_schema")||($g->server_info>=5.5&&$m=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
create_database($m,$pb){return
queries("CREATE DATABASE ".idf_escape($m).($pb?" COLLATE ".q($pb):""));}function
drop_databases($l){$J=apply_queries("DROP DATABASE",$l,'idf_escape');restart_session();set_session("dbs",null);return$J;}function
rename_database($C,$pb){$J=false;if(create_database($C,$pb)){$qg=array();foreach(tables_list()as$R=>$U)$qg[]=table($R)." TO ".idf_escape($C).".".table($R);$J=(!$qg||queries("RENAME TABLE ".implode(", ",$qg)));if($J)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$J;}function
auto_increment(){$Na=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$v){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$v["columns"],true)){$Na="";break;}if($v["type"]=="PRIMARY")$Na=" UNIQUE";}}return" AUTO_INCREMENT$Na";}function
alter_table($R,$C,$p,$Xc,$xb,$uc,$pb,$Ma,$Df,$He,$tb){$c=array();foreach($p
as$o)$c[]=($o[1]?($R!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($R!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$Xc);$P=($xb!==null?" COMMENT=".q($xb):"").($uc?" ENGINE=".q($uc):"").($pb?" COLLATE ".q($pb):"").($Ma!=""?" AUTO_INCREMENT=$Ma":"");if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)$P$Df");if($R!=$C)$c[]="RENAME TO ".table($C);if($P)$c[]=ltrim($P);_debug_log("after2");_debug_log($c);foreach($tb
as$Li){foreach($c
as$Td=>$ab){$rb=substr($ab,7,strpos($ab,"` ")-6);$rb=substr($rb,1,strlen($rb)-2);if($Li===$rb)unset($c[$Td]);}}_debug_log("after3v");_debug_log($c);if($He){foreach($He
as$y=>$Li){$fh=substr($Li,7,strpos($Li,"` ")-6);foreach($c
as$Td=>$ab){$Ga=substr($ab,strpos($ab,"NULL")+4,strlen($ab));$rb=substr($ab,strpos($ab,"CHANGE")+7,strpos($ab,"` ")-6);if($fh===$rb){unset($c[$Td]);$c[$Td]=$Li.$Ga;unset($He[$y]);}}}foreach($He
as$y=>$Li)$c[]=$Li;}return($c||$Df?queries("ALTER TABLE ".table($R)."\n".implode(",\n",$c).$Df):true);}function
alter_indexes($R,$c){foreach($c
as$y=>$X)$c[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($R).implode(",",$c));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($_i){return
queries("DROP VIEW ".implode(", ",array_map('table',$_i)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$_i,$zh){$qg=array();foreach(array_merge($T,$_i)as$R)$qg[]=table($R)." TO ".idf_escape($zh).".".table($R);return
queries("RENAME TABLE ".implode(", ",$qg));}function
copy_tables($T,$_i,$zh){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$C=($zh==DB?table("copy_$R"):idf_escape($zh).".".table($R));if(!queries("\nDROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($R))||!queries("INSERT INTO $C SELECT * FROM ".table($R)))return
false;}foreach($_i
as$R){$C=($zh==DB?table("copy_$R"):idf_escape($zh).".".table($R));$zi=view($R);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $zi[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$g,$wc,$Dd,$di;$Ca=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$bi="((".implode("|",array_merge(array_keys($di),$Ca)).")\\b(?:\\s*\\(((?:[^'\")]|$wc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$If="\\s*(".($U=="FUNCTION"?"":$Dd).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$bi";$i=$g->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$If\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$bi\\s+":"")."(.*)~is",$i,$B);$p=array();preg_match_all("~$If\\s*,?~is",$B[1],$re,PREG_SET_ORDER);foreach($re
as$yf){$C=str_replace("``","`",$yf[2]).$yf[3];$p[]=array("field"=>$C,"type"=>strtolower($yf[5]),"length"=>preg_replace_callback("~$wc~s",'normalize_enum',$yf[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$yf[8] $yf[7]"))),"null"=>1,"full_type"=>$yf[4],"inout"=>strtoupper($yf[1]),"collation"=>strtolower($yf[9]),);}if($U!="FUNCTION")return
array("fields"=>$p,"definition"=>$B[11]);return
array("fields"=>$p,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$H){return$g->query("EXPLAIN ".($g->server_info>=5.1?"PARTITIONS ":"").$H);}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Eg){return
true;}function
create_sql($R,$Ma){global$g;$J=$g->result("SHOW CREATE TABLE ".table($R),1);if(!$Ma)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($k){return"USE ".idf_escape($k);}function
trigger_sql($R,$kh){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$K)$J.="\n".($kh=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
replication_status($U){return
get_rows("SHOW $U STATUS");}function
convert_field($o){if(preg_match("~binary~",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))return"AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$J){if(preg_match("~binary~",$o["type"]))$J="UNHEX($J)";if($o["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))$J="GeomFromText($J)";return$J;}function
support($Mc){global$g;return!preg_match("~scheme|sequence|type|view_trigger|materializedview".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|routine|trigger|view":""):"")."~",$Mc);}function
kill_process($X){return
queries("KILL ".number($X));}function
connection_id(){return"SELECT CONNECTION_ID()";}function
max_connections(){global$g;return$g->result("SELECT @@max_connections");}$x="sql";$di=array();$jh=array();foreach(array(lang(24)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(25)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(26)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(30)=>array("enum"=>65535,"set"=>64),lang(27)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(29)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),lang(31)=>array("GENERATED ALWAYS"=>0),)as$y=>$X){$di+=$X;$jh[$y]=array_keys($X);}$ki=array("unsigned","zerofill","unsigned zerofill");$gf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$fd=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$kd=array("avg","count","count distinct","group_concat","max","min","sum");$mc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.3.0";class
Adminer{var$operators;function
name(){return"<a href='https://www.adminer.org/' target='_blank' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($i=false){return
password_file($i);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){return
DB;}function
databases($Wc=true){return
get_databases($Wc);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$ec;echo'<table cellspacing="0">
<tr><th>',lang(32),'<td>',html_select("auth[driver]",$ec,DRIVER),'<tr><th>',lang(33),'<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>',lang(34),'<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(35),'<td><input type="password" name="auth[password]">
<tr><th>',lang(36),'<td><input name="auth[db]" value="',h($_GET["db"]),'" autocapitalize="off">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".lang(37)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(38))."\n";}function
login($me,$G){global$x;if($x=="sqlite")return
lang(39,'<code>login()</code>');return
true;}function
tableName($qh){return
h($qh["Name"]);}function
fieldName($o,$lf=0){if($o["is_virtual"])return'<span title="'.h($o["full_type"]).'">'.h($o["field"]).'</span>';else
return'<span title="'.h($o["full_type"]).'">'.h($o["field"]).'</span>';}function
selectLinks($qh,$O=""){echo'<p class="links">';$le=array("select"=>lang(40));if(support("table")||support("indexes"))$le["table"]=lang(41);if(support("table")){if(is_view($qh))$le["view"]=lang(42);else$le["create"]=lang(43);}if($O!==null)$le["edit"]=lang(44);foreach($le
as$y=>$X)echo" <a href='".h(ME)."$y=".urlencode($qh["Name"]).($y=="edit"?$O:"")."'".bold(isset($_GET[$y])).">$X</a>";echo"\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$ph){return
array();}function
backwardKeysPrint($Pa,$K){}function
selectQuery($H,$Fh){global$x;return"<p><code class='jush-$x'>".h(str_replace("\n"," ",$H))."</code> <span class='time'>($Fh)</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($H)."'>".lang(10)."</a>":"")."</p>";}function
sqlCommandQuery($H){return
shorten_utf8(trim($H),1000);}function
rowDescription($R){return"";}function
rowDescriptions($L,$Yc){return$L;}function
selectLink($X,$o){}function
selectVal($X,$_,$o,$tf){$J=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$o["type"])&&!preg_match("~var~",$o["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$o["type"])&&!is_utf8($X))$J="<i>".lang(45,strlen($tf))."</i>";if(preg_match('~json~',$o["type"]))$J="<code class='jush-js'>$J</code>";return($_?"<a href='".h($_)."'".(is_url($_)?" rel='noreferrer'":"").">$J</a>":$J);}function
editVal($X,$o){if($o["type"]=="json")$X=htmlspecialchars(str_replace('\\/','/',json_encode(json_decode($X),JSON_PRETTY_PRINT)));return$X;}function
tableStructurePrint($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(46)."<td>".lang(47).(support("comment")?"<td>".lang(48):"")."</thead>\n";foreach($p
as$o){echo"<tr".odd()."><th>".h($o["field"]),"<td><span title='".h($o["collation"])."'>".h($o["full_type"])."</span>",($o["null"]?" <i>NULL</i>":""),($o["auto_increment"]?" <i>".lang(49)."</i>":""),(isset($o["default"])?" <span title='".lang(50)."'>[<b>".h($o["default"])."</b>]</span>":""),(support("comment")?"<td>".nbsp($o["comment"]):""),"\n";}echo"</table>\n";}function
tableIndexesPrint($w){echo"<table cellspacing='0'>\n";foreach($w
as$C=>$v){ksort($v["columns"]);$Uf=array();foreach($v["columns"]as$y=>$X)$Uf[]="<i>".h($X)."</i>".($v["lengths"][$y]?"(".$v["lengths"][$y].")":"").($v["descs"][$y]?" DESC":"");echo"<tr title='".h($C)."'><th>$v[type]<td>".implode(", ",$Uf)."\n";}echo"</table>\n";}function
selectColumnsPrint($M,$e){global$fd,$kd;print_fieldset("select",lang(51),$M);$s=0;$M[""]=array();foreach($M
as$y=>$X){$X=$_GET["columns"][$y];$d=select_input(" name='columns[$s][col]' onchange='".($y!==""?"selectFieldChange(this.form)":"selectAddRow(this)").";'",$e,$X["col"]);echo"<div>".($fd||$kd?"<select name='columns[$s][fun]' onchange='helpClose();".($y!==""?"":" this.nextSibling.nextSibling.onchange();")."'".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).">".optionlist(array(-1=>"")+array_filter(array(lang(52)=>$fd,lang(53)=>$kd)),$X["fun"])."</select>"."($d)":$d)."</div>\n";$s++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$e,$w){print_fieldset("search",lang(54),$Z);foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$v["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$s]' value='".h($_GET["fulltext"][$s])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$s]",1,isset($_GET["boolean"][$s]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$bb="this.nextSibling.onchange();";for($s=0;$s<=count($_GET["where"]);$s++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$s][col]' onchange='$bb'",$e,$X["col"],"(".lang(55).")"),html_select("where[$s][op]",$this->operators,$X["op"],$bb),"<input type='search' name='where[$s][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($lf,$e,$w){print_fieldset("sort",lang(56),$lf);$s=0;foreach((array)$_GET["order"]as$y=>$X){if($X!=""){echo"<div>".select_input(" name='order[$s]' onchange='selectFieldChange(this.form);'",$e,$X),checkbox("desc[$s]",1,isset($_GET["desc"][$y]),lang(57))."</div>\n";$s++;}}echo"<div>".select_input(" name='order[$s]' onchange='selectAddRow(this);'",$e),checkbox("desc[$s]",1,false,lang(57))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(58)."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($z)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($Eh){if($Eh!==null){echo"<fieldset><legend>".lang(59)."</legend><div>","<input type='number' name='text_length' class='size' value='".h($Eh)."'>","</div></fieldset>\n";}}function
selectActionPrint($w){echo"<fieldset><legend>".lang(60)."</legend><div>","<input type='submit' value='".lang(51)."'>"," <span id='noindex' title='".lang(61)."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$e=array();foreach($w
as$v){$Kb=reset($v["columns"]);if($v["type"]!="FULLTEXT"&&$Kb)$e[$Kb]=1;}$e[""]=1;foreach($e
as$y=>$X)json_row($y);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($rc,$e){}function
selectColumnsProcess($e,$w){global$fd,$kd;$M=array();$id=array();foreach((array)$_GET["columns"]as$y=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$fd)||in_array($X["fun"],$kd)))){$M[$y]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$kd))$id[]=$M[$y];}}return
array($M,$id);}function
selectSearchProcess($p,$w){global$g,$x;$J=array();foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"&&$_GET["fulltext"][$s]!="")$J[]="MATCH (".implode(", ",array_map('idf_escape',$v["columns"])).") AGAINST (".q($_GET["fulltext"][$s]).(isset($_GET["boolean"][$s])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$zb=" $X[op]";if(preg_match('~IN$~',$X["op"])){$xd=process_length($X["val"]);$zb.=" ".($xd!=""?$xd:"(NULL)");}elseif($X["op"]=="SQL")$zb=" $X[val]";elseif($X["op"]=="LIKE %%")$zb=" LIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif($X["op"]=="ILIKE %%")$zb=" ILIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$zb.=" ".$this->processInput($p[$X["col"]],$X["val"]);if($X["col"]!="")$J[]=idf_escape($X["col"]).$zb;else{$sb=array();foreach($p
as$C=>$o){$Md=preg_match('~char|text|enum|set~',$o["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$o["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$Md)){$C=idf_escape($C);$sb[]=($x=="sql"&&$Md&&!preg_match("~^utf8_~",$o["collation"])?"CONVERT($C USING ".charset($g).")":$C);}}$J[]=($sb?"(".implode("$zb OR ",$sb)."$zb)":"0");}}}return$J;}function
selectOrderProcess($p,$w){$J=array();foreach((array)$_GET["order"]as$y=>$X){if($X!="")$J[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$y])?" DESC":"");}return$J;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Yc){return
false;}function
selectQueryBuild($M,$Z,$id,$lf,$z,$E){return"";}function
messageQuery($H,$Fh){global$x;restart_session();$pd=&get_session("queries");$t="sql-".count($pd[$_GET["db"]]);if(strlen($H)>1e6)$H=preg_replace('~[\x80-\xFF]+$~','',substr($H,0,1e6))."\n...";$pd[$_GET["db"]][]=array($H,time(),$Fh);return" <span class='time'>".@date("H:i:s")."</span> <a href='#$t' onclick=\"return !toggle('$t');\">".lang(62)."</a>"."<div id='$t' class='hidden'><pre><code class='jush-$x'>".shorten_utf8($H,1000).'</code></pre>'.($Fh?" <span class='time'>($Fh)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($pd[$_GET["db"]])-1)).'">'.lang(10).'</a>':'').'</div>';}function
editFunctions($o){global$mc;$J=($o["null"]?"NULL/":"");foreach($mc
as$y=>$fd){if(!$y||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($fd
as$If=>$X){if(!$If||preg_match("~$If~",$o["type"]))$J.="/$X";}if($y&&!preg_match('~set|blob|bytea|raw|file~',$o["type"]))$J.="/SQL";}}if($o["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$J=lang(49);return
explode("/",$J);}function
editInput($R,$o,$Ka,$Y){if($o["is_virtual"])return"<label $Ka>".h($Y).'</label>';else{if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ka value='-1' checked><i>".lang(8)."</i></label> ":"").($o["null"]?"<label><input type='radio'$Ka value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ka,$o,$Y,0);}}function
processInput($o,$Y,$r=""){if($r=="SQL")return$Y;$C=$o["field"];$J=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$r))$J="$r()";elseif(preg_match('~^current_(date|timestamp)$~',$r))$J=$r;elseif(preg_match('~^([+-]|\\|\\|)$~',$r))$J=idf_escape($C)." $r $J";elseif(preg_match('~^[+-] interval$~',$r))$J=idf_escape($C)." $r ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$J);elseif(preg_match('~^(addtime|subtime|concat)$~',$r))$J="$r(".idf_escape($C).", $J)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$r))$J="$r($J)";return
unconvert_field($o,$J);}function
dumpOutput(){$J=array('text'=>lang(63),'file'=>lang(64));if(function_exists('gzencode'))$J['gz']='gzip';return$J;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($m){}function
dumpTable($R,$kh,$Nd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($kh)dump_csv(array_keys(fields($R)));}else{if($Nd==2){$p=array();foreach(fields($R)as$C=>$o)$p[]=idf_escape($C)." $o[full_type]";$i="CREATE TABLE ".table($R)." (".implode(", ",$p).")";}else$i=create_sql($R,$_POST["auto_increment"]);set_utf8mb4($i);if($kh&&$i){if($kh=="DROP+CREATE"||$Nd==1)echo"DROP ".($Nd==2?"VIEW":"TABLE")." IF EXISTS ".table($R).";\n";if($Nd==1)$i=remove_definer($i);echo"$i;\n\n";}}}function
dumpData($R,$kh,$H){global$g,$x;$te=($x=="sqlite"?0:1048576);if($kh){if($_POST["format"]=="sql"){if($kh=="TRUNCATE+INSERT")echo
truncate_sql($R).";\n";$p=fields($R);}$I=$g->query($H,1);if($I){$Fd="";$Ya="";$Vd=array();$mh="";$Nc=($R!=''?'fetch_assoc':'fetch_row');while($K=$I->$Nc()){if(!$Vd){$vi=array();foreach($K
as$X){$o=$I->fetch_field();if($p[$o->name]['is_virtual']){$Ci[]=idf_escape($o->name);continue;}$Vd[]=$o->name;$y=idf_escape($o->name);$vi[]="$y = VALUES($y)";}$mh=($kh=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$vi):"").";\n";}if($_POST["format"]!="sql"){if($kh=="table"){dump_csv($Vd);$kh="INSERT";}dump_csv($K);}else{if(!$Fd)$Fd="INSERT INTO ".table($R)." (".implode(", ",array_map('idf_escape',$Vd)).") VALUES";foreach($K
as$y=>$X){if(in_array("`".$y."`",(array)$Ci)){unset($K[$y]);continue;}$o=$p[$y];$K[$y]=($X!==null?unconvert_field($o,preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&$X!=''?$X:q($X)):"NULL");}$Cg=($te?"\n":" ")."(".implode(",\t",$K).")";if(!$Ya)$Ya=$Fd.$Cg;elseif(strlen($Ya)+4+strlen($Cg)+strlen($mh)<$te)$Ya.=",$Cg";else{echo$Ya.$mh;$Ya=$Fd.$Cg;}}}if($Ya)echo$Ya.$mh;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($ud){return
friendly_url($ud!=""?$ud:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($ud,$Ie=false){$wf=$_POST["output"];$Hc=(preg_match('~sql~',$_POST["format"])?"sql":($Ie?"tar":"csv"));header("Content-Type: ".($wf=="gz"?"application/x-gzip":($Hc=="tar"?"application/x-tar":($Hc=="sql"||$wf!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($wf=="gz")ob_start('ob_gzencode',1e6);return$Hc;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.lang(65)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(66):lang(67))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(68)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(69)."</a>\n":"");return
true;}function
navigation($Ge){global$ia,$x,$ec,$g;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="https://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Ge=="auth"){$Sc=true;foreach((array)$_SESSION["pwds"]as$xi=>$Qg){foreach($Qg
as$N=>$si){foreach($si
as$V=>$G){if($G!==null){if($Sc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Sc=false;}$Pb=$_SESSION["db"][$xi][$N][$V];foreach(($Pb?array_keys($Pb):array(""))as$m)echo"<a href='".h(auth_url($xi,$N,$V,$m))."'>($ec[$xi]) ".h($V.($N!=""?"@$N":"").($m!=""?" - $m":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$Ge&&DB!=""){$g->select_db(DB);$T=table_status('',true);}echo'<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=jush.js&amp;version=4.3.0",'"></script>
';if(support("sql")){echo'<script type="text/javascript">
';if($T){$le=array();foreach($T
as$R=>$U)$le[]=preg_quote($R,'/');echo"var jushLinks = { $x: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$le).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$x;\n";}echo'bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($Ge);if(DB==""||!$Ge){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".lang(62)."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".lang(70)."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(71)."</a>\n";}if($_GET["ns"]!==""&&!$Ge&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(72)."</a>\n";if(!$T)echo"<p class='message'>".lang(9)."\n";else$this->tablesPrint($T);}}}function
databasesPrint($Ge){global$b,$g;$l=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Nb=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo"<span title='".lang(73)."'>DB</span>: ".($l?"<select name='db'$Nb>".optionlist(array(""=>"")+$l,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".lang(20)."'".($l?" class='hidden'":"").">\n";if($Ge!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".lang(74).": <select name='ns'$Nb>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($T){echo"<ul id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($T
as$R=>$P){echo'<li><a href="'.h(ME).'select='.urlencode($R).'"'.bold($_GET["select"]==$R||$_GET["edit"]==$R,"select").">".lang(75)."</a> ";$C=$this->tableName($P);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($R).'"'.bold(in_array($R,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($P)?"view":"structure"))." title='".lang(41)."'>$C</a>":"<span>$C</span>")."\n";}echo"</ul>\n";}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$gf;function
page_header($Ih,$n="",$Xa=array(),$Jh=""){global$ca,$ia,$b,$ec,$x;page_headers();if(is_ajax()&&$n){page_messages($n);exit;}$Kh=$Ih.($Jh!=""?": $Jh":"");$Lh=strip_tags($Kh.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="',$ca,'" dir="',lang(76),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>',$Lh,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.3.0",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.3.0",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.3.0",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.3.0",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(76),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ia');\"");?>>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape(lang(77)),'\';
</script>

<div id="help" class="jush-',$x,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Xa!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$ec[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):lang(33));if($Xa===false)echo"$N\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Xa)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Xa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Xa
as$y=>$X){$Ub=(is_array($X)?$X[1]:h($X));if($Ub!="")echo"<a href='".h(ME."$y=").urlencode(is_array($X)?$X[0]:$X)."'>$Ub</a> &raquo; ";}}echo"$Ih\n";}}echo"<h2>$Kh</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($n);$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($n){$mi=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Ce=$_SESSION["messages"][$mi];if($Ce){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Ce)."</div>\n";unset($_SESSION["messages"][$mi]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($Ge=""){global$b,$Oh;echo'</div>

';switch_lang();if($Ge!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(78),'" id="logout">
<input type="hidden" name="token" value="',$Oh,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($Ge);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($Ke){while($Ke>=2147483648)$Ke-=4294967296;while($Ke<=-2147483649)$Ke+=4294967296;return(int)$Ke;}function
long2str($W,$Ei){$Cg='';foreach($W
as$X)$Cg.=pack('V',$X);if($Ei)return
substr($Cg,0,end($W));return$Cg;}function
str2long($Cg,$Ei){$W=array_values(unpack('V*',str_pad($Cg,4*ceil(strlen($Cg)/4),"\0")));if($Ei)$W[]=strlen($Cg);return$W;}function
xxtea_mx($Ki,$Ji,$nh,$Qd){return
int32((($Ki>>5&0x7FFFFFF)^$Ji<<2)+(($Ji>>3&0x1FFFFFFF)^$Ki<<4))^int32(($nh^$Ji)+($Qd^$Ki));}function
encrypt_string($ih,$y){if($ih=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($ih,true);$Ke=count($W)-1;$Ki=$W[$Ke];$Ji=$W[0];$bg=floor(6+52/($Ke+1));$nh=0;while($bg-->0){$nh=int32($nh+0x9E3779B9);$lc=$nh>>2&3;for($xf=0;$xf<$Ke;$xf++){$Ji=$W[$xf+1];$Je=xxtea_mx($Ki,$Ji,$nh,$y[$xf&3^$lc]);$Ki=int32($W[$xf]+$Je);$W[$xf]=$Ki;}$Ji=$W[0];$Je=xxtea_mx($Ki,$Ji,$nh,$y[$xf&3^$lc]);$Ki=int32($W[$Ke]+$Je);$W[$Ke]=$Ki;}return
long2str($W,false);}function
decrypt_string($ih,$y){if($ih=="")return"";if(!$y)return
false;$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($ih,false);$Ke=count($W)-1;$Ki=$W[$Ke];$Ji=$W[0];$bg=floor(6+52/($Ke+1));$nh=int32($bg*0x9E3779B9);while($nh){$lc=$nh>>2&3;for($xf=$Ke;$xf>0;$xf--){$Ki=$W[$xf-1];$Je=xxtea_mx($Ki,$Ji,$nh,$y[$xf&3^$lc]);$Ji=int32($W[$xf]-$Je);$W[$xf]=$Ji;}$Ki=$W[$Ke];$Je=xxtea_mx($Ki,$Ji,$nh,$y[$xf&3^$lc]);$Ji=int32($W[0]-$Je);$W[0]=$Ji;$nh=int32($nh-0x9E3779B9);}return
long2str($W,true);}$g='';$od=$_SESSION["token"];if(!$od)$_SESSION["token"]=rand(1,1e6);$Oh=get_token();$Jf=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$Jf[$y]=$X;}}function
add_invalid_login(){global$b;$Qc=get_temp_dir()."/adminer.invalid";$dd=@fopen($Qc,"r+");if(!$dd){$dd=@fopen($Qc,"w");if(!$dd)return;}flock($dd,LOCK_EX);$Id=unserialize(stream_get_contents($dd));$Fh=time();if($Id){foreach($Id
as$Jd=>$X){if($X[0]<$Fh)unset($Id[$Jd]);}}$Hd=&$Id[$b->bruteForceKey()];if(!$Hd)$Hd=array($Fh+30*60,0);$Hd[1]++;$Og=serialize($Id);rewind($dd);fwrite($dd,$Og);ftruncate($dd,strlen($Og));flock($dd,LOCK_UN);fclose($dd);}$La=$_POST["auth"];if($La){$Id=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$Hd=$Id[$b->bruteForceKey()];$Qe=($Hd[1]>30?$Hd[0]-time():0);if($Qe>0)auth_error(lang(79,ceil($Qe/60)));session_regenerate_id();$xi=$La["driver"];$N=$La["server"];$V=$La["username"];$G=(string)$La["password"];$m=$La["db"];set_password($xi,$N,$V,$G);$_SESSION["db"][$xi][$N][$V][$m]=true;if($La["permanent"]){$y=base64_encode($xi)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($m);$Vf=$b->permanentLogin(true);$Jf[$y]="$y:".base64_encode($Vf?encrypt_string($G,$Vf):"");cookie("adminer_permanent",implode(" ",$Jf));}if(count($_POST)==1||DRIVER!=$xi||SERVER!=$N||$_GET["username"]!==$V||DB!=$m)redirect(auth_url($xi,$N,$V,$m));}elseif($_POST["logout"]){if($od&&!verify_token()){page_header(lang(78),lang(80));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(81));}}elseif($Jf&&!$_SESSION["pwds"]){session_regenerate_id();$Vf=$b->permanentLogin();foreach($Jf
as$y=>$X){list(,$jb)=explode(":",$X);list($xi,$N,$V,$m)=array_map('base64_decode',explode("-",$y));set_password($xi,$N,$V,decrypt_string(base64_decode($jb),$Vf));$_SESSION["db"][$xi][$N][$V][$m]=true;}}function
unset_permanent(){global$Jf;foreach($Jf
as$y=>$X){list($xi,$N,$V,$m)=array_map('base64_decode',explode("-",$y));if($xi==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$m==DB)unset($Jf[$y]);}cookie("adminer_permanent",implode(" ",$Jf));}function
auth_error($n){global$b,$od;$Rg=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$Rg]||$_GET[$Rg])&&!$od)$n=lang(82);else{add_invalid_login();$G=get_password();if($G!==null){if($G===false)$n.='<br>'.lang(83,'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$Rg]&&$_GET[$Rg]&&ini_bool("session.use_only_cookies"))$n=lang(84);$F=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$F["lifetime"]);page_header(lang(37),$n,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(85),lang(86,implode(", ",$Pf)),false);page_footer("auth");exit;}$g=connect();}$dc=new
Min_Driver($g);if(!is_object($g)||($me=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($g)?h($g):(is_string($me)?$me:lang(87))));if($La&&$_POST["token"])$_POST["token"]=$Oh;$n='';if($_POST){if(!verify_token()){$Cd="max_input_vars";$xe=ini_get($Cd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$y){$X=ini_get($y);if($X&&(!$xe||$X<$xe)){$Cd=$y;$xe=$X;}}}$n=(!$_POST["token"]&&$xe?lang(88,"'$Cd'"):lang(80).' '.lang(89));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=lang(90,"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.lang(91);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($I,$h=null,$of=array(),$z=0){global$x;$le=array();$w=array();$e=array();$Ua=array();$di=array();$J=array();odd('');for($s=0;(!$z||$s<$z)&&($K=$I->fetch_row());$s++){if(!$s){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Pd=0;$Pd<count($K);$Pd++){$o=$I->fetch_field();$C=$o->name;$nf=$o->orgtable;$mf=$o->orgname;$J[$o->table]=$nf;if($of&&$x=="sql")$le[$Pd]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($nf!=""){if(!isset($w[$nf])){$w[$nf]=array();foreach(indexes($nf,$h)as$v){if($v["type"]=="PRIMARY"){$w[$nf]=array_flip($v["columns"]);break;}}$e[$nf]=$w[$nf];}if(isset($e[$nf][$mf])){unset($e[$nf][$mf]);$w[$nf][$mf]=$Pd;$le[$Pd]=$nf;}}if($o->charsetnr==63)$Ua[$Pd]=true;$di[$Pd]=$o->type;echo"<th".($nf!=""||$o->name!=$mf?" title='".h(($nf!=""?"$nf.":"").$mf)."'":"").">".h($C).($of?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($K
as$y=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ua[$y]&&!is_utf8($X))$X="<i>".lang(45,strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($di[$y]==254)$X="<code>$X</code>";}if(isset($le[$y])&&!$e[$le[$y]]){if($of&&$x=="sql"){$R=$K[array_search("table=",$le)];$_=$le[$y].urlencode($of[$R]!=""?$of[$R]:$R);}else{$_="edit=".urlencode($le[$y]);foreach($w[$le[$y]]as$nb=>$Pd)$_.="&where".urlencode("[".bracket_escape($nb)."]")."=".urlencode($K[$Pd]);}$X="<a href='".h(ME.$_)."'>$X</a>";}echo"<td>$X";}}echo($s?"</table>":"<p class='message'>".lang(12))."\n";return$J;}function
referencable_primary($Kg){$J=array();foreach(table_status('',true)as$rh=>$R){if($rh!=$Kg&&fk_support($R)){foreach(fields($rh)as$o){if($o["primary"]){if($J[$rh]){unset($J[$rh]);break;}$J[$rh]=$o;}}}}return$J;}function
textarea($C,$Y,$L=10,$sb=80){global$x;echo"<textarea name='$C' rows='$L' cols='$sb' class='sqlarea jush-$x' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
textarea2($C,$Y,$L=10,$sb=80){global$x;echo"<textarea name='$C' rows='$L' cols='$sb' class='sqlarea jush-$x' >";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
_debug_log(){$Dh=func_get_args();if(is_array($Dh)||is_object($Dh))$Dh=var_export($Dh,1);$Yb=rtrim(defined('LOGS_DIR')?LOGS_DIR:__DIR__,'/').'/';!file_exists($Yb)&&mkdir($Yb,0755,true);$Lb=[date('Y-m-d H:i:s').' | ',$Dh];return
file_put_contents($Yb.'debug.log',implode($Lb).PHP_EOL,FILE_APPEND);}function
edit_type($y,$o,$qb,$Zc=array(),$Ai){global$jh,$di,$ki,$bf,$x;$U=$o["type"];echo'<td><select name="',h($y),'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);"',on_help("getTarget(event).value",1),' aria-labelledby="label-type">';if($U&&!isset($di[$U])&&!isset($Zc[$U]))array_unshift($jh,$U);if($Zc)$jh[lang(92)]=$Zc;echo
optionlist($jh,$U),'</select>
<td><input name="',h($y),'[length]" value="',h($o["length"]),'" size="3" onfocus="editingLengthFocus(this);"',(!$o["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' onchange="editingLengthChange(this);" onkeyup="this.onchange();" aria-labelledby="label-length"><td class="options">';if($o["is_virtual"]){echo"<textarea name='".h($y)."[virtual1]' rows='2' cols='40' class='sqlarea jush-$x' >".$Ai."</textarea>","<select name='".h($y)."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.lang(93).')'.optionlist($qb,$o["collation"]).'</select>',($ki?"<select name='".h($y)."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($ki,$o["unsigned"]).'</select>':''),(isset($o['on_update'])?"<select name='".h($y)."[on_update]'".(preg_match('~timestamp|datetime|time|date|year~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".lang(94).")","CURRENT_TIMESTAMP","Generated column"),$o["on_update"]).'</select>':''),($Zc?"<select name='".h($y)."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".lang(95).")".optionlist(explode("|",$bf),$o["on_delete"])."</select> ":" ");}else{echo"<select name='".h($y)."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.lang(93).')'.optionlist($qb,$o["collation"]).'</select>',($ki?"<select name='".h($y)."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($ki,$o["unsigned"]).'</select>':''),(isset($o['on_update'])?"<select name='".h($y)."[on_update]'".(preg_match('~timestamp|datetime|time|date|year~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".lang(94).")","CURRENT_TIMESTAMP","Generated column"),$o["on_update"]).'</select>':''),($Zc?"<select name='".h($y)."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".lang(95).")".optionlist(explode("|",$bf),$o["on_delete"])."</select> ":" ");}}function
process_length($ie){global$wc;return(preg_match("~^\\s*\\(?\\s*$wc(?:\\s*,\\s*$wc)*+\\s*\\)?\\s*\$~",$ie)&&preg_match_all("~$wc~",$ie,$re)?"(".implode(",",$re[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$ie)));}function
process_type($o,$ob="COLLATE"){global$ki;return" $o[type]".process_length($o["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&in_array($o["unsigned"],$ki)?" $o[unsigned]":"").(preg_match('~char|text|enum|set~',$o["type"])&&$o["collation"]?" $ob ".q($o["collation"]):"");}function
process_field($o,$ai){global$x;$Rb=$o["default"];return
array(idf_escape(trim($o["field"])),process_type($ai),($o["null"]?" NULL":" NOT NULL"),(isset($Rb)?" DEFAULT ".((preg_match('~time~',$o["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Rb))||($x=="sqlite"&&preg_match('~^CURRENT_(TIME|TIMESTAMP|DATE)$~i',$Rb))||($o["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Rb))||($x=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Rb))?$Rb:q($Rb)):""),(preg_match('~timestamp|datetime~',$o["type"])&&$o["on_update"]?" ON UPDATE $o[on_update]":""),(support("comment")&&$o["comment"]!=""?" COMMENT ".q($o["comment"]):""),($o["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$y=>$X){if(preg_match("~$y|$X~",$U))return" class='$y'";}}function
edit_fields($p,$qb,$U="TABLE",$Zc=array(),$yb=false,$Sg){global$g,$Dd;$p=array_values($p);echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th id="label-name">',($U=="TABLE"?lang(96):lang(97)),'<td id="label-type">',lang(47),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td id="label-length">',lang(98),'<td>',lang(99);if($U=="TABLE"){echo'<td id="label-null">NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym id="label-ai" title="',lang(49),'">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td id="label-default">',lang(50),(support("comment")?"<td id='label-comment'".($yb?"":" class='hidden'").">".lang(48):"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.0' alt='+' title='".lang(100)."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($p
as$s=>$o){$s++;$pf=$o[($_POST?"orig":"field")];$Zb=(isset($_POST["add"][$s-1])||(isset($o["field"])&&!$_POST["drop_col"][$s]))&&(support("drop_col")||$pf=="");echo'<tr',($Zb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$s][inout]",explode("|",$Dd),$o["inout"]):""),'<th>';if($Zb){echo'<input name="fields[',$s,'][field]" value="',h($o["field"]),'" onchange="editingNameChange(this);',($o["field"]!=""||count($p)>1?'':' editingAddRow(this);" onkeyup="if (this.value) editingAddRow(this);'),'" maxlength="64" autocapitalize="off" aria-labelledby="label-name">';}echo'<input type="hidden" name="fields[',$s,'][orig]" value="',h($pf),'">
';$bg=$Sg[$o["field"]];edit_type("fields[$s]",$o,$qb,$Zc,$bg);if($U=="TABLE"){echo'<td>',checkbox("fields[$s][null]",1,$o["null"],"","","block","label-null"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$s,'"';if($o["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }" aria-labelledby="label-ai"></label><td><?php
echo
checkbox("fields[$s][has_default]",1,$o["has_default"],"","","","label-default"),'<input name="fields[',$s,'][default]" value="',h($o["default"]),'" onkeyup="keyupChange.call(this);" onchange="this.previousSibling.checked = true;" aria-labelledby="label-default">
',(support("comment")?"<td".($yb?"":" class='hidden'")."><input name='fields[$s][comment]' value='".h($o["comment"])."' maxlength='".($g->server_info>=5.5?1024:255)."' aria-labelledby='label-comment'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.0' alt='+' title='".lang(100)."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=4.3.0' alt='^' title='".lang(101)."' onclick='return !editingMoveRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='down[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=4.3.0' alt='v' title='".lang(102)."' onclick='return !editingMoveRow(this, 0);'>&nbsp;":""),($pf==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.3.0' alt='x' title='".lang(103)."' onclick=\"return !editingRemoveRow(this, 'fields\$1[field]');\">":""),"\n";}}function
process_fields(&$p){$D=0;if($_POST["up"]){$ce=0;foreach($p
as$y=>$o){if(key($_POST["up"])==$y){unset($p[$y]);array_splice($p,$ce,0,array($o));break;}if(isset($o["field"]))$ce=$D;$D++;}}elseif($_POST["down"]){$bd=false;foreach($p
as$y=>$o){if(isset($o["field"])&&$bd){unset($p[key($_POST["down"])]);array_splice($p,$D,0,array($bd));break;}if(key($_POST["down"])==$y)$bd=$o;$D++;}}elseif($_POST["add"]){$p=array_values($p);array_splice($p,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($B){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($B[0][0].$B[0][0],$B[0][0],substr($B[0],1,-1))),'\\'))."'";}function
grant($gd,$Xf,$e,$af){if(!$Xf)return
true;if($Xf==array("ALL PRIVILEGES","GRANT OPTION"))return($gd=="GRANT"?queries("$gd ALL PRIVILEGES$af WITH GRANT OPTION"):queries("$gd ALL PRIVILEGES$af")&&queries("$gd GRANT OPTION$af"));return
queries("$gd ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$e, ",$Xf).$e).$af);}function
drop_create($fc,$i,$gc,$Ch,$ic,$A,$Be,$_e,$Ae,$Xe,$Ne){if($_POST["drop"])query_redirect($fc,$A,$Be);elseif($Xe=="")query_redirect($i,$A,$Ae);elseif($Xe!=$Ne){$Ib=queries($i);queries_redirect($A,$_e,$Ib&&queries($fc));if($Ib)queries($gc);}else
queries_redirect($A,$_e,queries($Ch)&&queries($ic)&&queries($fc)&&queries($i));}function
create_trigger($af,$K){global$x;$Hh=" $K[Timing] $K[Event]".($K["Event"]=="UPDATE OF"?" ".idf_escape($K["Of"]):"");return"CREATE TRIGGER ".idf_escape($K["Trigger"]).($x=="mssql"?$af.$Hh:$Hh.$af).rtrim(" $K[Type]\n$K[Statement]",";").";";}function
create_routine($zg,$K){global$Dd;$O=array();$p=(array)$K["fields"];ksort($p);foreach($p
as$o){if($o["field"]!="")$O[]=(preg_match("~^($Dd)\$~",$o["inout"])?"$o[inout] ":"").idf_escape($o["field"]).process_type($o,"CHARACTER SET");}return"CREATE $zg ".idf_escape(trim($K["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($K["returns"],"CHARACTER SET"):"").($K["language"]?" LANGUAGE $K[language]":"").rtrim("\n$K[definition]",";").";";}function
remove_definer($H){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$H);}function
format_foreign_key($q){global$bf;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$q["source"])).") REFERENCES ".table($q["table"])." (".implode(", ",array_map('idf_escape',$q["target"])).")".(preg_match("~^($bf)\$~",$q["on_delete"])?" ON DELETE $q[on_delete]":"").(preg_match("~^($bf)\$~",$q["on_update"])?" ON UPDATE $q[on_update]":"");}function
tar_file($Qc,$Mh){$J=pack("a100a8a8a8a12a12",$Qc,644,0,0,decoct($Mh->size),decoct(time()));$hb=8*32;for($s=0;$s<strlen($J);$s++)$hb+=ord($J[$s]);$J.=sprintf("%06o",$hb)."\0 ";echo$J,str_repeat("\0",512-strlen($J));$Mh->send();echo
str_repeat("\0",511-($Mh->size+511)%512);}function
ini_bytes($Cd){$X=ini_get($Cd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($Hf){global$x,$g;$oi=array('sql'=>"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/",'sqlite'=>"http://www.sqlite.org/",'pgsql'=>"http://www.postgresql.org/docs/".substr($g->server_info,0,3)."/static/",'mssql'=>"http://msdn.microsoft.com/library/",'oracle'=>"http://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($Hf[$x]?"<a href='$oi[$x]$Hf[$x]' target='_blank' rel='noreferrer'><sup>?</sup></a>":"");}function
ob_gzencode($Q){return
gzencode($Q);}function
db_size($m){global$g;if(!$g->select_db($m))return"?";$J=0;foreach(table_status()as$S)$J+=$S["Data_length"]+$S["Index_length"];return
format_number($J);}function
set_utf8mb4($i){global$g;static$O=false;if(!$O&&preg_match('~\butf8mb4~i',$i)){$O=true;echo"SET NAMES ".charset($g).";\n\n";}}function
connect_error(){global$b,$g,$Oh,$n,$ec;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header(lang(36).": ".h(DB),lang(104),true);}else{if($_POST["db"]&&!$n)queries_redirect(substr(ME,0,-1),lang(105),drop_databases($_POST["db"]));page_header(lang(106),$n,false);echo"<p class='links'>\n";foreach(array('database'=>lang(107),'privileges'=>lang(69),'processlist'=>lang(108),'variables'=>lang(109),'status'=>lang(110),'replication'=>lang(111),)as$y=>$X){if(support($y))echo"<a href='".h(ME)."$y='>$X</a>\n";}echo"<p>".lang(112,$ec[DRIVER],"<b>".h($g->server_info)."</b>","<b>$g->extension</b>")."\n","<p>".lang(113,"<b>".h(logged_user())."</b>")."\n";$l=$b->databases();if($l){$Fg=support("scheme");$qb=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".lang(36)." - <a href='".h(ME)."refresh=1'>".lang(114)."</a>"."<td>".lang(115)."<td>".lang(116)."<td>".lang(117)." - <a href='".h(ME)."dbsize=1' onclick=\"return !ajaxSetHtml('".h(js_escape(ME))."script=connect');\">".lang(118)."</a>"."</thead>\n";$l=($_GET["dbsize"]?count_tables($l):array_flip($l));foreach($l
as$m=>$T){$yg=h(ME)."db=".urlencode($m);$t=h("Db-".$m);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$m,in_array($m,(array)$_POST["db"]),"","","",$t):""),"<th><a href='$yg' id='$m'>".h($m)."</a>";$pb=nbsp(db_collation($m,$qb));echo"<td>".(support("database")?"<a href='$yg".($Fg?"&amp;ns=":"")."&amp;database=' title='".lang(65)."'>$pb</a>":$pb),"<td align='right'><a href='$yg&amp;schema=' id='tables-".h($m)."' title='".lang(68)."'>".($_GET["dbsize"]?$T:"?")."</a>","<td align='right' id='size-".h($m)."'>".($_GET["dbsize"]?db_size($m):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".lang(119)." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^db/));\">\n"."<input type='submit' name='drop' value='".lang(120)."'".confirm().">\n"."</div></fieldset>\n":""),"<script type='text/javascript'>tableCheck();</script>\n","<input type='hidden' name='token' value='$Oh'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["replication"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header(lang(74).": ".h($_GET["ns"]),lang(121),true);page_footer("ns");exit;}}$bf="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
__construct(){$this->handler=tmpfile();}function
write($Cb){$this->size+=strlen($Cb);fwrite($this->handler,$Cb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$wc="'(?:''|[^'\\\\]|\\\\.)*'";$Dd="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$M=array(idf_escape($_GET["field"]));$I=$dc->select($a,$M,array(where($_GET,$p)),$M);$K=($I?$I->fetch_row():array());echo$K[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$p=fields($a);if(!$p)$n=error();$S=table_status1($a,true);page_header(($p&&is_view($S)?$S['Engine']=='materialized view'?lang(122):lang(123):lang(124)).": ".h($a),$n);$b->selectLinks($S);$xb=$S["Comment"];if($xb!="")echo"<p>".lang(48).": ".h($xb)."\n";if($p)$b->tableStructurePrint($p);if(!is_view($S)){if(support("indexes")){echo"<h3 id='indexes'>".lang(125)."</h3>\n";$w=indexes($a);if($w)$b->tableIndexesPrint($w);echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.lang(126)."</a>\n";}if(fk_support($S)){echo"<h3 id='foreign-keys'>".lang(92)."</h3>\n";$Zc=foreign_keys($a);if($Zc){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(127)."<td>".lang(128)."<td>".lang(95)."<td>".lang(94)."<td>&nbsp;</thead>\n";foreach($Zc
as$C=>$q){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$q["source"]))."</i>","<td><a href='".h($q["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($q["db"]),ME):($q["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($q["ns"]),ME):ME))."table=".urlencode($q["table"])."'>".($q["db"]!=""?"<b>".h($q["db"])."</b>.":"").($q["ns"]!=""?"<b>".h($q["ns"])."</b>.":"").h($q["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$q["target"]))."</i>)","<td>".nbsp($q["on_delete"])."\n","<td>".nbsp($q["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.lang(129).'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.lang(130)."</a>\n";}}if(support(is_view($S)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".lang(131)."</h3>\n";$Zh=triggers($a);if($Zh){echo"<table cellspacing='0'>\n";foreach($Zh
as$y=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($y)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($y))."'>".lang(129)."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.lang(132)."</a>\n";}}elseif(isset($_GET["schema"])){page_header(lang(68),"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$th=array();$uh=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$re,PREG_SET_ORDER);foreach($re
as$s=>$B){$th[$B[1]]=array($B[2],$B[3]);$uh[]="\n\t'".js_escape($B[1])."': [ $B[2], $B[3] ]";}$Ph=0;$Ra=-1;$Eg=array();$mg=array();$ge=array();foreach(table_status('',true)as$R=>$S){if(is_view($S))continue;$Mf=0;$Eg[$R]["fields"]=array();foreach(fields($R)as$C=>$o){$Mf+=1.25;$o["pos"]=$Mf;$Eg[$R]["fields"][$C]=$o;}$Eg[$R]["pos"]=($th[$R]?$th[$R]:array($Ph,0));foreach($b->foreignKeys($R)as$X){if(!$X["db"]){$ee=$Ra;if($th[$R][1]||$th[$X["table"]][1])$ee=min(floatval($th[$R][1]),floatval($th[$X["table"]][1]))-1;else$Ra-=.1;while($ge[(string)$ee])$ee-=.0001;$Eg[$R]["references"][$X["table"]][(string)$ee]=array($X["source"],$X["target"]);$mg[$X["table"]][$R][(string)$ee]=$X["target"];$ge[(string)$ee]=true;}}$Ph=max($Ph,$Eg[$R]["pos"][0]+2.5+$Mf);}echo'<div id="schema" style="height: ',$Ph,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$uh)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$Ph,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($Eg
as$C=>$R){echo"<div class='table' style='top: ".$R["pos"][0]."em; left: ".$R["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>";foreach($R["fields"]as$o){$X='<span'.type_class($o["type"]).' title="'.h($o["full_type"].($o["null"]?" NULL":'')).'">'.h($o["field"]).'</span>';echo"<br>".($o["primary"]?"<i>$X</i>":$X);}foreach((array)$R["references"]as$_h=>$ng){foreach($ng
as$ee=>$jg){$fe=$ee-$th[$C][1];$s=0;foreach($jg[0]as$ah)echo"\n<div class='references' title='".h($_h)."' id='refs$ee-".($s++)."' style='left: $fe"."em; top: ".$R["fields"][$ah]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$fe)."em;'></div></div>";}}foreach((array)$mg[$C]as$_h=>$ng){foreach($ng
as$ee=>$e){$fe=$ee-$th[$C][1];$s=0;foreach($e
as$zh)echo"\n<div class='references' title='".h($_h)."' id='refd$ee-".($s++)."' style='left: $fe"."em; top: ".$R["fields"][$zh]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=4.3.0'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$fe)."em;'></div></div>";}}echo"\n</div>\n";}foreach($Eg
as$C=>$R){foreach((array)$R["references"]as$_h=>$ng){foreach($ng
as$ee=>$jg){$Fe=$Ph;$ve=-10;foreach($jg[0]as$y=>$ah){$Nf=$R["pos"][0]+$R["fields"][$ah]["pos"];$Of=$Eg[$_h]["pos"][0]+$Eg[$_h]["fields"][$jg[1][$y]]["pos"];$Fe=min($Fe,$Nf,$Of);$ve=max($ve,$Nf,$Of);}echo"<div class='references' id='refl$ee' style='left: $ee"."em; top: $Fe"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($ve-$Fe)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">',lang(133),'</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$n){$Fb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$y)$Fb.="&$y=".urlencode($_POST[$y]);cookie("adminer_export",substr($Fb,1));$T=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$Hc=dump_headers((count($T)==1?key($T):DB),(DB==""||count($T)>1));$Ld=preg_match('~sql~',$_POST["format"]);if($Ld){echo"-- Adminer $ia ".$ec[DRIVER]." dump\n\n";if($x=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$g->query("SET time_zone = '+00:00';");}}$kh=$_POST["db_style"];$l=array(DB);if(DB==""){$l=$_POST["databases"];if(is_string($l))$l=explode("\n",rtrim(str_replace("\r","",$l),"\n"));}foreach((array)$l
as$m){$b->dumpDatabase($m);if($g->select_db($m)){if($Ld&&preg_match('~CREATE~',$kh)&&($i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1))){set_utf8mb4($i);if($kh=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($m).";\n";echo"$i;\n";}if($Ld){if($kh)echo
use_sql($m).";\n\n";$vf="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$zg){foreach(get_rows("SHOW $zg STATUS WHERE Db = ".q($m),null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE $zg ".idf_escape($K["Name"]),2));set_utf8mb4($i);$vf.=($kh!='DROP+CREATE'?"DROP $zg IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($K["Name"]),3));set_utf8mb4($i);$vf.=($kh!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}if($vf)echo"DELIMITER ;;\n\n$vf"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$_i=array();foreach(table_status('',true)as$C=>$S){$R=(DB==""||in_array($C,(array)$_POST["tables"]));$Lb=(DB==""||in_array($C,(array)$_POST["data"]));if($R||$Lb){if($Hc=="tar"){$Mh=new
TmpFile;ob_start(array($Mh,'write'),1e5);}$b->dumpTable($C,($R?$_POST["table_style"]:""),(is_view($S)?2:0));if(is_view($S))$_i[]=$C;elseif($Lb){$p=fields($C);$b->dumpData($C,$_POST["data_style"],"SELECT *".convert_fields($p,$p)." FROM ".table($C));}if($Ld&&$_POST["triggers"]&&$R&&($Zh=trigger_sql($C,$_POST["table_style"])))echo"\nDELIMITER ;;\n$Zh\nDELIMITER ;\n";if($Hc=="tar"){ob_end_flush();tar_file((DB!=""?"":"$m/")."$C.csv",$Mh);}elseif($Ld)echo"\n";}}foreach($_i
as$zi)$b->dumpTable($zi,$_POST["table_style"],1);if($Hc=="tar")echo
pack("x512");}}}if($Ld)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header(lang(71),$n,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Ob=array('','USE','DROP+CREATE','CREATE');$vh=array('','DROP+CREATE','CREATE');$Mb=array('','TRUNCATE+INSERT','INSERT');if($x=="sql")$Mb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$K);if(!$K)$K=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($K["events"])){$K["routines"]=$K["events"]=($_GET["dump"]=="");$K["triggers"]=$K["table_style"];}echo"<tr><th>".lang(134)."<td>".html_select("output",$b->dumpOutput(),$K["output"],0)."\n";echo"<tr><th>".lang(135)."<td>".html_select("format",$b->dumpFormat(),$K["format"],0)."\n";echo($x=="sqlite"?"":"<tr><th>".lang(36)."<td>".html_select('db_style',$Ob,$K["db_style"]).(support("routine")?checkbox("routines",1,$K["routines"],lang(136)):"").(support("event")?checkbox("events",1,$K["events"],lang(137)):"")),"<tr><th>".lang(116)."<td>".html_select('table_style',$vh,$K["table_style"]).checkbox("auto_increment",1,$K["auto_increment"],lang(49)).(support("trigger")?checkbox("triggers",1,$K["triggers"],lang(131)):""),"<tr><th>".lang(138)."<td>".html_select('data_style',$Mb,$K["data_style"]),'</table>
<p><input type="submit" value="',lang(71),'">
<input type="hidden" name="token" value="',$Oh,'">

<table cellspacing="0">
';$Rf=array();if(DB!=""){$fb=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$fb onclick='formCheck(this, /^tables\\[/);'>".lang(116)."</label>","<th style='text-align: right;'><label class='block'>".lang(138)."<input type='checkbox' id='check-data'$fb onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$_i="";$wh=tables_list();foreach($wh
as$C=>$U){$Qf=preg_replace('~_.*~','',$C);$fb=($a==""||$a==(substr($a,-1)=="%"?"$Qf%":$C));$Uf="<tr><td>".checkbox("tables[]",$C,$fb,$C,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$_i.="$Uf\n";else
echo"$Uf<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$fb,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$Rf[$Qf]++;}echo$_i;if($wh)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".lang(36)."</label></thead>\n";$l=$b->databases();if($l){foreach($l
as$m){if(!information_schema($m)){$Qf=preg_replace('~_.*~','',$m);echo"<tr><td>".checkbox("databases[]",$m,$a==""||$a=="$Qf%",$m,"formUncheck('check-databases');","block")."\n";$Rf[$Qf]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Sc=true;foreach($Rf
as$y=>$X){if($y!=""&&$X>1){echo($Sc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$y%")."'>".h($y)."</a>";$Sc=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(69));echo'<p class="links"><a href="'.h(ME).'user=">'.lang(139)."</a>";$I=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$gd=$I;if(!$I)$I=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($gd?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".lang(34)."<th>".lang(33)."<th>&nbsp;</thead>\n";while($K=$I->fetch_assoc())echo'<tr'.odd().'><td>'.h($K["User"])."<td>".h($K["Host"]).'<td><a href="'.h(ME.'user='.urlencode($K["User"]).'&host='.urlencode($K["Host"])).'">'.lang(10)."</a>\n";if(!$gd||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".lang(10)."'>\n";echo"</table>\n","</form>\n";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$qd=&get_session("queries");$pd=&$qd[DB];if(!$n&&$_POST["clear"]){$pd=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?lang(70):lang(62)),$n);if(!$n&&$_POST){$dd=false;if(!isset($_GET["import"]))$H=$_POST["query"];elseif($_POST["webfile"]){$dd=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$H=($dd?fread($dd,1e6):false);}else$H=get_file("sql_file",true);if(is_string($H)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($H)+memory_get_usage()+8e6));if($H!=""&&strlen($H)<1e6){$bg=$H.(preg_match("~;[ \t\r\n]*\$~",$H)?"":";");if(!$pd||reset(end($pd))!=$bg){restart_session();$pd[]=array($bg,time());set_session("queries",$qd);stop_session();}}$bh="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$Tb=";";$D=0;$tc=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$wb=0;$yc=array();$_f='[\'"'.($x=="sql"?'`#':($x=="sqlite"?'`[':($x=="mssql"?'[':''))).']|/\\*|-- |$'.($x=="pgsql"?'|\\$[^$]*\\$':'');$Qh=microtime(true);parse_str($_COOKIE["adminer_export"],$xa);$kc=$b->dumpFormat();unset($kc["sql"]);while($H!=""){if(!$D&&preg_match("~^$bh*+DELIMITER\\s+(\\S+)~i",$H,$B)){$Tb=$B[1];$H=substr($H,strlen($B[0]));}else{preg_match('('.preg_quote($Tb)."\\s*|$_f)",$H,$B,PREG_OFFSET_CAPTURE,$D);list($bd,$Mf)=$B[0];if(!$bd&&$dd&&!feof($dd))$H.=fread($dd,1e5);else{if(!$bd&&rtrim($H)=="")break;$D=$Mf+strlen($bd);if($bd&&rtrim($bd)!=$Tb){while(preg_match('('.($bd=='/*'?'\\*/':($bd=='['?']':(preg_match('~^-- |^#~',$bd)?"\n":preg_quote($bd)."|\\\\."))).'|$)s',$H,$B,PREG_OFFSET_CAPTURE,$D)){$Cg=$B[0][0];if(!$Cg&&$dd&&!feof($dd))$H.=fread($dd,1e5);else{$D=$B[0][1]+strlen($Cg);if($Cg[0]!="\\")break;}}}else{$tc=false;$bg=substr($H,0,$Mf);$wb++;$Uf="<pre id='sql-$wb'><code class='jush-$x'>".$b->sqlCommandQuery($bg)."</code></pre>\n";if($x=="sqlite"&&preg_match("~^$bh*+ATTACH\\b~i",$bg,$B)){echo$Uf,"<p class='error'>".lang(140)."\n";$yc[]=" <a href='#sql-$wb'>$wb</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$Uf;ob_flush();flush();}$gh=microtime(true);if($g->multi_query($bg)&&is_object($h)&&preg_match("~^$bh*+USE\\b~i",$bg))$h->query($bg);do{$I=$g->store_result();$Fh=" <span class='time'>(".format_time($gh).")</span>".(strlen($bg)<1000?" <a href='".h(ME)."sql=".urlencode(trim($bg))."'>".lang(10)."</a>":"");if($g->error){echo($_POST["only_errors"]?$Uf:""),"<p class='error'>".lang(141).($g->errno?" ($g->errno)":"").": ".error()."\n";$yc[]=" <a href='#sql-$wb'>$wb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($I)){$z=$_POST["limit"];$of=select($I,$h,array(),$z);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$Re=$I->num_rows;echo"<p>".($Re?($z&&$Re>$z?lang(142,$z):"").lang(143,$Re):""),$Fh;$t="export-$wb";$Gc=", <a href='#$t' onclick=\"return !toggle('$t');\">".lang(71)."</a><span id='$t' class='hidden'>: ".html_select("output",$b->dumpOutput(),$xa["output"])." ".html_select("format",$kc,$xa["format"])."<input type='hidden' name='query' value='".h($bg)."'>"." <input type='submit' name='export' value='".lang(71)."'><input type='hidden' name='token' value='$Oh'></span>\n";if($h&&preg_match("~^($bh|\\()*+SELECT\\b~i",$bg)&&($Fc=explain($h,$bg))){$t="explain-$wb";echo", <a href='#$t' onclick=\"return !toggle('$t');\">EXPLAIN</a>$Gc","<div id='$t' class='hidden'>\n";select($Fc,$h,$of);echo"</div>\n";}else
echo$Gc;echo"</form>\n";}}else{if(preg_match("~^$bh*+(CREATE|DROP|ALTER)$bh++(DATABASE|SCHEMA)\\b~i",$bg)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(144,$g->affected_rows)."$Fh\n";}$gh=microtime(true);}while($g->next_result());}$H=substr($H,$D);$D=0;}}}}if($tc)echo"<p class='message'>".lang(145)."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(146,$wb-count($yc))," <span class='time'>(".format_time($Qh).")</span>\n";}elseif($yc&&$wb>1)echo"<p class='error'>".lang(141).": ".implode("",$yc)."\n";}else
echo"<p class='error'>".upload_error($H)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$Cc="<input type='submit' value='".lang(147)."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$bg=$_GET["sql"];if($_POST)$bg=$_POST["query"];elseif($_GET["history"]=="all")$bg=$pd;elseif($_GET["history"]!="")$bg=$pd[$_GET["history"]][0];echo"<p>";textarea("query",$bg,20);echo($_POST?"":"<script type='text/javascript'>focus(document.getElementsByTagName('textarea')[0]);</script>\n"),"<p>$Cc\n",lang(148).": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".lang(149)."</legend><div>",(ini_bool("file_uploads")?"SQL (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$Cc":lang(150)),"</div></fieldset>\n","<fieldset><legend>".lang(151)."</legend><div>",lang(152,"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(153).'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),lang(154))."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),lang(155))."\n","<input type='hidden' name='token' value='$Oh'>\n";if(!isset($_GET["import"])&&$pd){print_fieldset("history",lang(156),$_GET["history"]!="");for($X=end($pd);$X;$X=prev($pd)){$y=key($pd);list($bg,$Fh,$oc)=$X;echo'<a href="'.h(ME."sql=&history=$y").'">'.lang(10)."</a>"." <span class='time' title='".@date('Y-m-d',$Fh)."'>".@date("H:i:s",$Fh)."</span>"." <code class='jush-$x'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$bg)))),80,"</code>").($oc?" <span class='time'>($oc)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(157)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(158)."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$li=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$C=>$o){if($o["is_virtual"]){unset($p[$C]);continue;}if(!isset($o["privileges"][$li?"update":"insert"])||$b->fieldName($o)=="")unset($p[$C]);}if($_POST&&!$n&&!isset($_GET["select"])){$A=$_POST["referer"];if($_POST["insert"])$A=($li?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$A))$A=ME."select=".urlencode($a);$w=indexes($a);$gi=unique_array($_GET["where"],$w);$eg="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($A,lang(159),$dc->delete($a,$eg,!$gi));else{$O=array();foreach($p
as$C=>$o){$X=process_input($o);if($X!==false&&$X!==null)$O[idf_escape($C)]=$X;}if($li){if(!$O)redirect($A);queries_redirect($A,lang(160),$dc->update($a,$O,$eg,!$gi));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$I=$dc->insert($a,$O);$de=($I?last_id():0);queries_redirect($A,lang(161,($de?" $de":"")),$I);}}}$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($p
as$C=>$o){if($o["is_virtual"]){unset($p[$C]);continue;}if(isset($o["privileges"]["select"])){$Ha=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$Ha="''";if($x=="sql"&&preg_match("~enum|set~",$o["type"]))$Ha="1*".idf_escape($C);$M[]=($Ha?"$Ha AS ":"").idf_escape($C);}}$K=array();if(!support("table"))$M=array("*");if($M){$I=$dc->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1));$K=$I->fetch_assoc();if(!$K)$K=false;if(isset($_GET["select"])&&(!$K||$I->fetch_assoc()))$K=null;}}if(!support("table")&&!$p){if(!$Z){$I=$dc->select($a,array("*"),$Z,array("*"));$K=($I?$I->fetch_assoc():false);if(!$K)$K=array($dc->primary=>"");}if($K){foreach($K
as$y=>$X){if(!$Z)$K[$y]=null;$p[$y]=array("field"=>$y,"null"=>($y!=$dc->primary),"auto_increment"=>($y==$dc->primary));}}}edit_form($a,$p,$K,$li);}elseif(isset($_GET["create"])){$a=$_GET["create"];$Bf=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$y)$Bf[$y]=$y;$lg=referencable_primary($a);$Zc=array();foreach($lg
as$rh=>$o)$Zc[str_replace("`","``",$rh)."`".str_replace("`","``",$o["field"])]=$rh;$rf=array();$S=array();if($a!=""){$rf=fields($a);$S=table_status($a);if(!$S)$n=lang(9);}$K=$_POST;_debug_log($_POST);$K["fields"]=(array)$K["fields"];if($K["auto_increment_col"])$K["fields"][$K["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($K["fields"])&&!$n){if($_POST["drop"])queries_redirect(substr(ME,0,-1),lang(162),drop_tables(array($a)));else{$p=array();$Da=array();$pi=false;$Xc=array();$qf=reset($rf);$Aa=" FIRST";$He=array();$tb=array();$ub=array();$Sg=tables_generated_columns("'".$K["name"]."'");$Tg=tables_generated_columns2("'".$K["name"]."'");foreach($K["fields"]as$y=>$o){if($o["orig"]==""){if(($o["collection"]=="Generated column")||($o["unsigned"]=="Generated column")||($o["on_update"]=="Generated column")){if($o["length"])$He[]="ADD `".$o["field"]."` ".$o["type"]."(".$o["length"].") as ('Enter an expression for the virtual column')";else$He[]="ADD `".$o["field"]."` ".$o["type"]." as ('Enter an expression for the virtual column')";}}$q=$Zc[$o["type"]];$ai=($q!==null?$lg[$q]:$o);if($o["field"]!=""){if(!$o["has_default"])$o["default"]=null;if($y==$K["auto_increment_col"])$o["auto_increment"]=true;$Zf=process_field($o,$ai);$Da[]=array($o["orig"],$Zf,$Aa);if($Zf!=process_field($qf,$qf)){$p[]=array($o["orig"],$Zf,$Aa);if($o["orig"]!=""||$Aa)$pi=true;}if($q!==null)$Xc[idf_escape($o["field"])]=($a!=""&&$x!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Zc[$o["type"]],'source'=>array($o["field"]),'target'=>array($ai["field"]),'on_delete'=>$o["on_delete"],));$Aa=" AFTER ".idf_escape($o["field"]);}elseif($o["orig"]!=""){$pi=true;$p[]=array($o["orig"]);}if($o["orig"]!=""){$qf=next($rf);if(!$qf)$Aa="";}if($o["virtual1"]){$ci="";$tb[]=$o["orig"];if($o["length"])$ci=$o["type"]."(".$o["length"].")";else$ci=$o["type"];if($o["orig"]=="")$He[]="ADD `".$o["field"]."` ".$ci." as (".$o["virtual1"].")";if(($Sg[$o["field"]]!=$o["virtual1"])||($o["field"]!=$o["orig"])||($Tg[$o["field"]]!=$ci)||($Aa)){$ub[]=$o["orig"];$He[]="CHANGE "."`".$o["orig"]."` "."`".$o["field"]."` ".$ci." as (".$o["virtual1"].")";}}}$Df="";if($Bf[$K["partition_by"]]){$Ef=array();if($K["partition_by"]=='RANGE'||$K["partition_by"]=='LIST'){foreach(array_filter($K["partition_names"])as$y=>$X){$Y=$K["partition_values"][$y];$Ef[]="\n  PARTITION ".idf_escape($X)." VALUES ".($K["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$Df.="\nPARTITION BY $K[partition_by]($K[partition])".($Ef?" (".implode(",",$Ef)."\n)":($K["partitions"]?" PARTITIONS ".(+$K["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$S["Create_options"]))$Df.="\nREMOVE PARTITIONING";_debug_log("modifyt");_debug_log($He);$ze=lang(163);if($a==""){cookie("adminer_engine",$K["Engine"]);$ze=lang(164);}$C=trim($K["name"]);foreach($tb
as$y=>$Ci){foreach($ub
as$Di){if($Ci==$Di)unset($tb[$y]);}}queries_redirect(ME.(support("table")?"table=":"select=").urlencode($C),$ze,alter_table($a,$C,($x=="sqlite"&&($pi||$Xc)?$Da:$p),$Xc,($K["Comment"]!=$S["Comment"]?$K["Comment"]:null),($K["Engine"]&&$K["Engine"]!=$S["Engine"]?$K["Engine"]:""),($K["Collation"]&&$K["Collation"]!=$S["Collation"]?$K["Collation"]:""),($K["Auto_increment"]!=""?number($K["Auto_increment"]):""),$Df,$He,$tb));}}page_header(($a!=""?lang(43):lang(72)),$n,array("table"=>$a),h($a));if(!$_POST){$K=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($di["int"])?"int":(isset($di["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$K=$S;$K["name"]=$a;$K["fields"]=array();if(!$_GET["auto_increment"])$K["Auto_increment"]="";foreach($rf
as$o){$o["has_default"]=isset($o["default"]);$K["fields"][]=$o;}if(support("partitioning")){$ed="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$I=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $ed ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($K["partition_by"],$K["partitions"],$K["partition"])=$I->fetch_row();$Ef=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $ed AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$Ef[""]="";$K["partition_names"]=array_keys($Ef);$K["partition_values"]=array_values($Ef);}}}$qb=collations();$vc=engines();$qb[]="Generated column";$ki[]="Generated column";foreach($vc
as$uc){if(!strcasecmp($uc,$K["Engine"])){$K["Engine"]=$uc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo
lang(165),': <input name="name" maxlength="64" value="',h($K["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($vc?"<select name='Engine' onchange='helpClose();'".on_help("getTarget(event).value",1).">".optionlist(array(""=>"(".lang(166).")")+$vc,$K["Engine"])."</select>":""),' ',($qb&&!preg_match("~sqlite|mssql~",$x)?html_select("Collation",array(""=>"(".lang(93).")")+$qb,$K["Collation"]):""),' <input type="submit" value="',lang(14),'">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$yb=($_POST?$_POST["comments"]:$K["Comment"]!="");if(!$_POST&&!$yb){foreach($K["fields"]as$o){if($o["comment"]!=""){$yb=true;break;}}}$Sg=tables_generated_columns("'".$K["name"]."'");edit_fields($K["fields"],$qb,"TABLE",$Zc,$yb,$Sg);echo'</table>
<p>
',lang(49),': <input type="number" name="Auto_increment" size="6" value="',h($K["Auto_increment"]),'">
',checkbox("defaults",1,true,lang(167),"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($yb?" checked":"").">".lang(48)."</label>".' <input name="Comment" id="Comment" value="'.h($K["Comment"]).'" maxlength="'.($g->server_info>=5.5?2048:60).'"'.($yb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="',lang(14),'">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="',lang(120),'"',confirm(),'>';}if(support("partitioning")){$Cf=preg_match('~RANGE|LIST~',$K["partition_by"]);print_fieldset("partition",lang(168),$K["partition_by"]);echo'<p>
',"<select name='partition_by' onchange='partitionByChange(this);'".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).">".optionlist(array(""=>"")+$Bf,$K["partition_by"])."</select>",'(<input name="partition" value="',h($K["partition"]),'">)
',lang(169),': <input type="number" name="partitions" class="size',($Cf||!$K["partition_by"]?" hidden":""),'" value="',h($K["partitions"]),'">
<table cellspacing="0" id="partition-table"',($Cf?"":" class='hidden'"),'>
<thead><tr><th>',lang(170),'<th>',lang(171),'</thead>
';foreach($K["partition_names"]as$y=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($y==count($K["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($K["partition_values"][$y]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$Oh,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$zd=array("PRIMARY","UNIQUE","INDEX");$S=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.6?'|InnoDB':'').'~i',$S["Engine"]))$zd[]="FULLTEXT";if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.7?'|InnoDB':'').'~i',$S["Engine"]))$zd[]="SPATIAL";$w=indexes($a);$Sf=array();if($x=="mongo"){$Sf=$w["_id_"];unset($zd[0]);unset($w["_id_"]);}$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($K["indexes"]as$v){$C=$v["name"];if(in_array($v["type"],$zd)){$e=array();$je=array();$Vb=array();$O=array();ksort($v["columns"]);foreach($v["columns"]as$y=>$d){if($d!=""){$ie=$v["lengths"][$y];$Ub=$v["descs"][$y];$O[]=idf_escape($d).($ie?"(".(+$ie).")":"").($Ub?" DESC":"");$e[]=$d;$je[]=($ie?$ie:null);$Vb[]=$Ub;}}if($e){$Dc=$w[$C];if($Dc){ksort($Dc["columns"]);ksort($Dc["lengths"]);ksort($Dc["descs"]);if($v["type"]==$Dc["type"]&&array_values($Dc["columns"])===$e&&(!$Dc["lengths"]||array_values($Dc["lengths"])===$je)&&array_values($Dc["descs"])===$Vb){unset($w[$C]);continue;}}$c[]=array($v["type"],$C,$O);}}}foreach($w
as$C=>$Dc)$c[]=array($Dc["type"],$C,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),lang(172),alter_indexes($a,$c));}page_header(lang(125),$n,array("table"=>$a),h($a));$p=array_keys(fields($a));if($_POST["add"]){foreach($K["indexes"]as$y=>$v){if($v["columns"][count($v["columns"])]!="")$K["indexes"][$y]["columns"][]="";}$v=end($K["indexes"]);if($v["type"]||array_filter($v["columns"],'strlen'))$K["indexes"][]=array("columns"=>array(1=>""));}if(!$K){foreach($w
as$y=>$v){$w[$y]["name"]=$y;$w[$y]["columns"][]="";}$w[]=array("columns"=>array(1=>""));$K["indexes"]=$w;}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th id="label-type">',lang(173),'<th><input type="submit" class="wayoff">',lang(174),'<th id="label-name">',lang(175);?>
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME)) . "?file=plus.gif&amp;version=4.3.0' alt='+' title='<?php echo
lang(100),'\'></noscript>&nbsp;
</thead>
';if($Sf){echo"<tr><td>PRIMARY<td>";foreach($Sf["columns"]as$y=>$d){echo
select_input(" disabled",$p,$d),"<label><input disabled type='checkbox'>".lang(57)."</label> ";}echo"<td><td>\n";}$Pd=1;foreach($K["indexes"]as$v){if(!$_POST["drop_col"]||$Pd!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Pd][type]",array(-1=>"")+$zd,$v["type"],($Pd==count($K["indexes"])?"indexesAddRow(this);":1),"label-type"),"<td>";ksort($v["columns"]);$s=1;foreach($v["columns"]as$y=>$d){echo"<span>".select_input(" name='indexes[$Pd][columns][$s]' onchange=\"".($s==count($v["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".h(js_escape($x=="sql"?"":$_GET["indexes"]."_"))."');\" title='".lang(46)."'",($p?array_combine($p,$p):$p),$d),($x=="sql"||$x=="mssql"?"<input type='number' name='indexes[$Pd][lengths][$s]' class='size' value='".h($v["lengths"][$y])."' title='".lang(98)."'>":""),($x!="sql"?checkbox("indexes[$Pd][descs][$s]",1,$v["descs"][$y],lang(57)):"")," </span>";$s++;}echo"<td><input name='indexes[$Pd][name]' value='".h($v["name"])."' autocapitalize='off' aria-labelledby='label-name'>\n","<td><input type='image' class='icon' name='drop_col[$Pd]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.3.0' alt='x' title='".lang(103)."' onclick=\"return !editingRemoveRow(this, 'indexes\$1[type]');\">\n";}$Pd++;}echo'</table>
<p>
<input type="submit" value="',lang(14),'">
<input type="hidden" name="token" value="',$Oh,'">
</form>
';}elseif(isset($_GET["database"])){$K=$_POST;if($_POST&&!$n&&!isset($_POST["add_x"])){$C=trim($K["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(176),drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($C),lang(177),rename_database($C,$K["collation"]));}else{$l=explode("\n",str_replace("\r","",$C));$lh=true;$ce="";foreach($l
as$m){if(count($l)==1||$m!=""){if(!create_database($m,$K["collation"]))$lh=false;$ce=$m;}}restart_session();set_session("dbs",null);queries_redirect(ME."db=".urlencode($ce),lang(178),$lh);}}else{if(!$K["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$K["collation"])?" COLLATE $K[collation]":""),substr(ME,0,-1),lang(179));}}page_header(DB!=""?lang(65):lang(107),$n,array(),h(DB));$qb=collations();$C=DB;if($_POST)$C=$K["name"];elseif(DB!="")$K["collation"]=db_collation(DB,$qb);elseif($x=="sql"){foreach(get_vals("SHOW GRANTS")as$gd){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$gd,$B)&&$B[1]){$C=stripcslashes(idf_unescape("`$B[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" id="name" value="'.h($C).'" maxlength="64" autocapitalize="off">')."\n".($qb?html_select("collation",array(""=>"(".lang(93).")")+$qb,$K["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(120)."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.0' alt='+' title='".lang(100)."'>\n";echo'<input type="hidden" name="token" value="',$Oh,'">
</form>
';}elseif(isset($_GET["scheme"])){$K=$_POST;if($_POST&&!$n){$_=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$_,lang(180));else{$C=trim($K["name"]);$_.=urlencode($C);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($C),$_,lang(181));elseif($_GET["ns"]!=$C)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$_,lang(182));else
redirect($_);}}page_header($_GET["ns"]!=""?lang(66):lang(67),$n);if(!$K)$K["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($K["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".lang(120)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$Oh,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header(lang(183).": ".h($da),$n);$zg=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$xd=array();$vf=array();foreach($zg["fields"]as$s=>$o){if(substr($o["inout"],-3)=="OUT")$vf[$s]="@".idf_escape($o["field"])." AS ".idf_escape($o["field"]);if(!$o["inout"]||substr($o["inout"],0,2)=="IN")$xd[]=$s;}if(!$n&&$_POST){$Za=array();foreach($zg["fields"]as$y=>$o){if(in_array($y,$xd)){$X=process_input($o);if($X===false)$X="''";if(isset($vf[$y]))$g->query("SET @".idf_escape($o["field"])." = $X");}$Za[]=(isset($vf[$y])?"@".idf_escape($o["field"]):$X);}$H=(isset($_GET["callf"])?"SELECT":"CALL")." ".table($da)."(".implode(", ",$Za).")";echo"<p><code class='jush-$x'>".h($H)."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".lang(10)."</a>\n";if(!$g->multi_query($H))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$I=$g->store_result();if(is_object($I))select($I,$h);else
echo"<p class='message'>".lang(184,$g->affected_rows)."\n";}while($g->next_result());if($vf)select($g->query("SELECT ".implode(", ",$vf)));}}echo'
<form action="" method="post">
';if($xd){echo"<table cellspacing='0'>\n";foreach($xd
as$y){$o=$zg["fields"][$y];$C=$o["field"];echo"<tr><th>".$b->fieldName($o);$Y=$_POST["fields"][$C];if($Y!=""){if($o["type"]=="enum")$Y=+$Y;if($o["type"]=="set")$Y=array_sum($Y);}input($o,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="',lang(183),'">
<input type="hidden" name="token" value="',$Oh,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$ze=($_POST["drop"]?lang(185):($C!=""?lang(186):lang(187)));$A=ME."table=".urlencode($a);if(!$_POST["drop"]){$K["source"]=array_filter($K["source"],'strlen');ksort($K["source"]);$zh=array();foreach($K["source"]as$y=>$X)$zh[$y]=$K["target"][$y];$K["target"]=$zh;}if($x=="sqlite")queries_redirect($A,$ze,recreate_table($a,$a,array(),array(),array(" $C"=>($_POST["drop"]?"":" ".format_foreign_key($K)))));else{$c="ALTER TABLE ".table($a);$fc="\nDROP ".($x=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C);if($_POST["drop"])query_redirect($c.$fc,$A,$ze);else{query_redirect($c.($C!=""?"$fc,":"")."\nADD".format_foreign_key($K),$A,$ze);$n=lang(188)."<br>$n";}}}page_header(lang(189),$n,array("table"=>$a),h($a));if($_POST){ksort($K["source"]);if($_POST["add"])$K["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$K["target"]=array();}elseif($C!=""){$Zc=foreign_keys($a);$K=$Zc[$C];$K["source"][]="";}else{$K["table"]=$a;$K["source"]=array("");}$ah=array_keys(fields($a));$zh=($a===$K["table"]?$ah:array_keys(fields($K["table"])));$kg=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($K["db"]==""&&$K["ns"]==""){echo
lang(190),':
',html_select("table",$kg,$K["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(191),'"></noscript>
<table cellspacing="0">
<thead><tr><th id="label-source">',lang(127),'<th id="label-target">',lang(128),'</thead>
';$Pd=0;foreach($K["source"]as$y=>$X){echo"<tr>","<td>".html_select("source[".(+$y)."]",array(-1=>"")+$ah,$X,($Pd==count($K["source"])-1?"foreignAddRow(this);":1),"label-source"),"<td>".html_select("target[".(+$y)."]",$zh,$K["target"][$y],1,"label-target");$Pd++;}echo'</table>
<p>
',lang(95),': ',html_select("on_delete",array(-1=>"")+explode("|",$bf),$K["on_delete"]),' ',lang(94),': ',html_select("on_update",array(-1=>"")+explode("|",$bf),$K["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="',lang(14),'">
<noscript><p><input type="submit" name="add" value="',lang(192),'"></noscript>
';}if($C!=""){echo'<input type="submit" name="drop" value="',lang(120),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Oh,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$K=$_POST;$sf="VIEW";if($x=="pgsql"&&$a!=""){$P=table_status($a);$sf=strtoupper($P["Engine"]);}if($_POST&&!$n){$C=trim($K["name"]);$Ha=" AS\n$K[select]";$A=ME."table=".urlencode($C);$ze=lang(193);$U=($_POST["materialized"]?"MATERIALIZED VIEW":"VIEW");if(!$_POST["drop"]&&$a==$C&&$x!="sqlite"&&$U=="VIEW"&&$sf=="VIEW")query_redirect(($x=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Ha,$A,$ze);else{$Ah=$C."_adminer_".uniqid();drop_create("DROP $sf ".table($a),"CREATE $U ".table($C).$Ha,"DROP $U ".table($C),"CREATE $U ".table($Ah).$Ha,"DROP $U ".table($Ah),($_POST["drop"]?substr(ME,0,-1):$A),lang(194),$ze,lang(195),$a,$C);}}if(!$_POST&&$a!=""){$K=view($a);$K["name"]=$a;$K["materialized"]=($sf!="VIEW");if(!$n)$n=error();}page_header(($a!=""?lang(42):lang(196)),$n,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>',lang(175),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',(support("materializedview")?" ".checkbox("materialized",1,$K["materialized"],lang(122)):""),'<p>';textarea("select",$K["select"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="',lang(120),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Oh,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Gd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$hh=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$K=$_POST;if($_POST&&!$n){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(197));elseif(in_array($K["INTERVAL_FIELD"],$Gd)&&isset($hh[$K["STATUS"]])){$Dg="\nON SCHEDULE ".($K["INTERVAL_VALUE"]?"EVERY ".q($K["INTERVAL_VALUE"])." $K[INTERVAL_FIELD]".($K["STARTS"]?" STARTS ".q($K["STARTS"]):"").($K["ENDS"]?" ENDS ".q($K["ENDS"]):""):"AT ".q($K["STARTS"]))." ON COMPLETION".($K["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(198):lang(199)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$Dg.($aa!=$K["EVENT_NAME"]?"\nRENAME TO ".idf_escape($K["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($K["EVENT_NAME"]).$Dg)."\n".$hh[$K["STATUS"]]." COMMENT ".q($K["EVENT_COMMENT"]).rtrim(" DO\n$K[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?lang(200).": ".h($aa):lang(201)),$n);if(!$K&&$aa!=""){$L=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$K=reset($L);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(175),'<td><input name="EVENT_NAME" value="',h($K["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">',lang(202),'<td><input name="STARTS" value="',h("$K[EXECUTE_AT]$K[STARTS]"),'">
<tr><th title="datetime">',lang(203),'<td><input name="ENDS" value="',h($K["ENDS"]),'">
<tr><th>',lang(204),'<td><input type="number" name="INTERVAL_VALUE" value="',h($K["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$Gd,$K["INTERVAL_FIELD"]),'<tr><th>',lang(110),'<td>',html_select("STATUS",$hh,$K["STATUS"]),'<tr><th>',lang(48),'<td><input name="EVENT_COMMENT" value="',h($K["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$K["ON_COMPLETION"]=="PRESERVE",lang(205)),'</table>
<p>';textarea("EVENT_DEFINITION",$K["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($aa!=""){echo'<input type="submit" name="drop" value="',lang(120),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Oh,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$zg=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$K=$_POST;$K["fields"]=(array)$K["fields"];if($_POST&&!process_fields($K["fields"])&&!$n){$Ah="$K[name]_adminer_".uniqid();drop_create("DROP $zg ".idf_escape($da),create_routine($zg,$K),"DROP $zg ".idf_escape($K["name"]),create_routine($zg,array("name"=>$Ah)+$K),"DROP $zg ".idf_escape($Ah),substr(ME,0,-1),lang(206),lang(207),lang(208),$da,$K["name"]);}page_header(($da!=""?(isset($_GET["function"])?lang(209):lang(210)).": ".h($da):(isset($_GET["function"])?lang(211):lang(212))),$n);if(!$_POST&&$da!=""){$K=routine($da,$zg);$K["name"]=$da;}$qb=get_vals("SHOW CHARACTER SET");sort($qb);$_g=routine_languages();echo'
<form action="" method="post" id="form">
<p>',lang(175),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',($_g?lang(19).": ".html_select("language",$_g,$K["language"]):""),'<input type="submit" value="',lang(14),'">
<table cellspacing="0" class="nowrap">
';edit_fields($K["fields"],$qb,$zg);if(isset($_GET["function"])){echo"<tr><td>".lang(213);edit_type("returns",$K["returns"],$qb);}echo'</table>
<p>';textarea("definition",$K["definition"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($da!=""){echo'<input type="submit" name="drop" value="',lang(120),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Oh,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);$C=trim($K["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$_,lang(214));elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($C),$_,lang(215));elseif($fa!=$C)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($C),$_,lang(216));else
redirect($_);}page_header($fa!=""?lang(217).": ".h($fa):lang(218),$n);if(!$K)$K["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($K["name"]),'" autocapitalize="off">
<input type="submit" value="',lang(14),'">
';if($fa!="")echo"<input type='submit' name='drop' value='".lang(120)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$Oh,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$_,lang(219));else
query_redirect("CREATE TYPE ".idf_escape(trim($K["name"]))." $K[as]",$_,lang(220));}page_header($ga!=""?lang(221).": ".h($ga):lang(222),$n);if(!$K)$K["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".lang(120)."'".confirm().">\n";else{echo"<input name='name' value='".h($K['name'])."' autocapitalize='off'>\n";textarea("as",$K["as"]);echo"<p><input type='submit' value='".lang(14)."'>\n";}echo'<input type="hidden" name="token" value="',$Oh,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C=$_GET["name"];$Yh=trigger_options();$K=(array)trigger($C)+array("Trigger"=>$a."_bi");if($_POST){if(!$n&&in_array($_POST["Timing"],$Yh["Timing"])&&in_array($_POST["Event"],$Yh["Event"])&&in_array($_POST["Type"],$Yh["Type"])){$af=" ON ".table($a);$fc="DROP TRIGGER ".idf_escape($C).($x=="pgsql"?$af:"");$A=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($fc,$A,lang(223));else{if($C!="")queries($fc);queries_redirect($A,($C!=""?lang(224):lang(225)),queries(create_trigger($af,$_POST)));if($C!="")queries(create_trigger($af,$K+array("Type"=>reset($Yh["Type"]))));}}$K=$_POST;}page_header(($C!=""?lang(226).": ".h($C):lang(227)),$n,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(228),'<td>',html_select("Timing",$Yh["Timing"],$K["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>',lang(229),'<td>',html_select("Event",$Yh["Event"],$K["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$Yh["Event"])?" <input name='Of' value='".h($K["Of"])."' class='hidden'>":""),'<tr><th>',lang(47),'<td>',html_select("Type",$Yh["Type"],$K["Type"]),'</table>
<p>',lang(175),': <input name="Trigger" value="',h($K["Trigger"]);?>" maxlength="64" autocapitalize="off">
<script type="text/javascript">document.getElementById('form')['Timing'].onchange();</script>
<p><?php textarea("Statement",$K["Statement"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($C!=""){echo'<input type="submit" name="drop" value="',lang(120),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Oh,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$Xf=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$K){foreach(explode(",",($K["Privilege"]=="Grant option"?"":$K["Context"]))as$Db)$Xf[$Db][$K["Privilege"]]=$K["Comment"];}$Xf["Server Admin"]+=$Xf["File access on server"];$Xf["Databases"]["Create routine"]=$Xf["Procedures"]["Create routine"];unset($Xf["Procedures"]["Create routine"]);$Xf["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$Xf["Columns"][$X]=$Xf["Tables"][$X];unset($Xf["Server Admin"]["Usage"]);foreach($Xf["Tables"]as$y=>$X)unset($Xf["Databases"][$y]);$Me=array();if($_POST){foreach($_POST["objects"]as$y=>$X)$Me[$X]=(array)$Me[$X]+(array)$_POST["grants"][$y];}$hd=array();$Ye="";if(isset($_GET["host"])&&($I=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($K=$I->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$K[0],$B)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$B[1],$re,PREG_SET_ORDER)){foreach($re
as$X){if($X[1]!="USAGE")$hd["$B[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$K[0]))$hd["$B[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$K[0],$B))$Ye=$B[1];}}if($_POST&&!$n){$Ze=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $Ze",ME."privileges=",lang(230));else{$Oe=q($_POST["user"])."@".q($_POST["host"]);$Ff=$_POST["pass"];if($Ff!=''&&!$_POST["hashed"]){$Ff=$g->result("SELECT PASSWORD(".q($Ff).")");$n=!$Ff;}$Ib=false;if(!$n){if($Ze!=$Oe){$Ib=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Oe IDENTIFIED BY PASSWORD ".q($Ff));$n=!$Ib;}elseif($Ff!=$Ye)queries("SET PASSWORD FOR $Oe = ".q($Ff));}if(!$n){$wg=array();foreach($Me
as$Te=>$gd){if(isset($_GET["grant"]))$gd=array_filter($gd);$gd=array_keys($gd);if(isset($_GET["grant"]))$wg=array_diff(array_keys(array_filter($Me[$Te],'strlen')),$gd);elseif($Ze==$Oe){$We=array_keys((array)$hd[$Te]);$wg=array_diff($We,$gd);$gd=array_diff($gd,$We);unset($hd[$Te]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Te,$B)&&(!grant("REVOKE",$wg,$B[2]," ON $B[1] FROM $Oe")||!grant("GRANT",$gd,$B[2]," ON $B[1] TO $Oe"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($Ze!=$Oe)queries("DROP USER $Ze");elseif(!isset($_GET["grant"])){foreach($hd
as$Te=>$wg){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Te,$B))grant("REVOKE",array_keys($wg),$B[2]," ON $B[1] FROM $Oe");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(231):lang(232)),!$n);if($Ib)$g->query("DROP USER $Oe");}}page_header((isset($_GET["host"])?lang(34).": ".h("$ha@$_GET[host]"):lang(139)),$n,array("privileges"=>array('',lang(69))));if($_POST){$K=$_POST;$hd=$Me;}else{$K=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$K["pass"]=$Ye;if($Ye!="")$K["hashed"]=true;$hd[(DB==""||$hd?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(33),'<td><input name="host" maxlength="60" value="',h($K["host"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input name="user" maxlength="16" value="',h($K["user"]),'" autocapitalize="off">
<tr><th>',lang(35),'<td><input name="pass" id="pass" value="',h($K["pass"]),'">
';if(!$K["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$K["hashed"],lang(233),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".lang(69).doc_link(array('sql'=>"grant.html#priv_level"));$s=0;foreach($hd
as$Te=>$gd){echo'<th>'.($Te!="*.*"?"<input name='objects[$s]' value='".h($Te)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$s]' value='*.*' size='10'>*.*");$s++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(33),"Databases"=>lang(36),"Tables"=>lang(124),"Columns"=>lang(46),"Procedures"=>lang(234),)as$Db=>$Ub){foreach((array)$Xf[$Db]as$Wf=>$xb){echo"<tr".odd()."><td".($Ub?">$Ub<td":" colspan='2'").' lang="en" title="'.h($xb).'">'.h($Wf);$s=0;foreach($hd
as$Te=>$gd){$C="'grants[$s][".h(strtoupper($Wf))."]'";$Y=$gd[strtoupper($Wf)];if($Db=="Server Admin"&&$Te!=(isset($hd["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".lang(235)."<option value='0'".($Y=="0"?" selected":"").">".lang(236)."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$C value='1'".($Y?" checked":"").($Wf=="All privileges"?" id='grants-$s-all'":($Wf=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$s-all');\""))."></label>";$s++;}}}echo"</table>\n",'<p>
<input type="submit" value="',lang(14),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(120),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Oh,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$n){$Xd=0;foreach((array)$_POST["kill"]as$X){if(kill_process($X))$Xd++;}queries_redirect(ME."processlist=",lang(237,$Xd),$Xd||!$_POST["kill"]);}page_header(lang(108),$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$s=-1;foreach(process_list()as$s=>$K){if(!$s){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($K
as$y=>$X)echo"<th>$y".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($y),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$K[$x=="sql"?"Id":"pid"],0):"");foreach($K
as$y=>$X)echo"<td>".(($x=="sql"&&$y=="Info"&&preg_match("~Query|Killed~",$K["Command"])&&$X!="")||($x=="pgsql"&&$y=="current_query"&&$X!="<IDLE>")||($x=="oracle"&&$y=="sql_text"&&$X!="")?"<code class='jush-$x'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($K["db"]!=""?"db=".urlencode($K["db"])."&":"")."sql=".urlencode($X)).'">'.lang(238).'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($s+1)."/".lang(239,max_connections()),"<p><input type='submit' value='".lang(240)."'>\n";}echo'<input type="hidden" name="token" value="',$Oh,'">
</form>
';}elseif(isset($_GET["replication"])){page_header(lang(111));echo"<h3>".lang(241).doc_link(array("sql"=>"show-master-status.html"))."</h3>\n";$pe=replication_status("MASTER");if(!$pe)echo"<p class='message'>".lang(12)."\n";else{echo"<table cellspacing='0'>\n";foreach($pe[0]as$y=>$X){echo"<tr>","<th>".h($y),"<td>".nbsp($X);}echo"</table>\n";}$Xg=replication_status("SLAVE");if($Xg){echo"<h3>".lang(242).doc_link(array("sql"=>"show-slave-status.html"))."</h3>\n";foreach($Xg[0]as$Wg){echo"<table cellspacing='0'>\n";foreach($Wg
as$y=>$X){echo"<tr>","<th>".h($y),"<td>".nbsp($X);}echo"</table>\n";}}}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$w=indexes($a);$p=fields($a);$Zc=column_foreign_keys($a);$Ve="";if($S["Oid"]){$Ve=($x=="sqlite"?"rowid":"oid");$w[]=array("type"=>"PRIMARY","columns"=>array($Ve));}parse_str($_COOKIE["adminer_import"],$ya);$xg=array();$e=array();$Eh=null;foreach($p
as$y=>$o){$C=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$C!=""){$e[$y]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($o))$Eh=$b->selectLengthProcess();}$xg+=$o["privileges"];}list($M,$id)=$b->selectColumnsProcess($e,$w);$Kd=count($id)<count($M);$Z=$b->selectSearchProcess($p,$w);$lf=$b->selectOrderProcess($p,$w);$z=$b->selectLimitProcess();$ed=($M?implode(", ",$M):"*".($Ve?", $Ve":"")).convert_fields($e,$p,$M)."\nFROM ".table($a);$jd=($id&&$Kd?"\nGROUP BY ".implode(", ",$id):"").($lf?"\nORDER BY ".implode(", ",$lf):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$hi=>$K){$Ha=convert_field($p[key($K)]);$M=array($Ha?$Ha:idf_escape(key($K)));$Z[]=where_check($hi,$p);$J=$dc->select($a,$M,$Z,$M);if($J)echo
reset($J->fetch_row());}exit;}if($_POST&&!$n){$Gi=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$gb=array();foreach($_POST["check"]as$db)$gb[]=where_check($db,$p);$Gi[]="((".implode(") OR (",$gb)."))";}$Gi=($Gi?"\nWHERE ".implode(" AND ",$Gi):"");$Sf=$ji=null;foreach($w
as$v){if($v["type"]=="PRIMARY"){$Sf=array_flip($v["columns"]);$ji=($M?$Sf:array());break;}}foreach((array)$ji
as$y=>$X){if(in_array(idf_escape($y),$M))unset($ji[$y]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$ji===array())$H="SELECT $ed$Gi$jd";else{$fi=array();foreach($_POST["check"]as$X)$fi[]="(SELECT".limit($ed,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$jd,1).")";$H=implode(" UNION ALL ",$fi);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($Z,$Zc)){if($_POST["save"]||$_POST["delete"]){$I=true;$za=0;$O=array();if(!$_POST["delete"]){foreach($e
as$C=>$X){$X=process_input($p[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}if($_POST["delete"]||$O){if($_POST["clone"])$H="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($ji===array()&&is_array($_POST["check"]))||$Kd){$I=($_POST["delete"]?$dc->delete($a,$Gi):($_POST["clone"]?queries("INSERT $H$Gi"):$dc->update($a,$O,$Gi)));$za=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$Fi="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$I=($_POST["delete"]?$dc->delete($a,$Fi,1):($_POST["clone"]?queries("INSERT".limit1($H,$Fi)):$dc->update($a,$O,$Fi)));if(!$I)break;$za+=$g->affected_rows;}}}$ze=lang(243,$za);if($_POST["clone"]&&$I&&$za==1){$de=last_id();if($de)$ze=lang(161," $de");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$ze,$I);if(!$_POST["delete"]){edit_form($a,$p,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$n=lang(244);else{$I=true;$za=0;foreach($_POST["val"]as$hi=>$K){$O=array();foreach($K
as$y=>$X){$y=bracket_escape($y,1);$O[idf_escape($y)]=(preg_match('~char|text~',$p[$y]["type"])||$X!=""?$b->processInput($p[$y],$X):"NULL");}$I=$dc->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($hi,$p),!($Kd||$ji===array())," ");if(!$I)break;$za+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(243,$za),$I);}}elseif(!is_string($Pc=get_file("csv_file",true)))$n=upload_error($Pc);elseif(!preg_match('~~u',$Pc))$n=lang(245);else{cookie("adminer_import","output=".urlencode($ya["output"])."&format=".urlencode($_POST["separator"]));$I=true;$sb=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Pc,$re);$za=count($re[0]);$dc->begin();$Lg=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$L=array();foreach($re[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Lg]*)$Lg~",$X.$Lg,$se);if(!$y&&!array_diff($se[1],$sb)){$sb=$se[1];$za--;}else{$O=array();foreach($se[1]as$s=>$nb)$O[idf_escape($sb[$s])]=($nb==""&&$p[$sb[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$nb))));$L[]=$O;}}$I=(!$L||$dc->insertUpdate($a,$L,$Sf));if($I)$I=$dc->commit();queries_redirect(remove_from_uri("page"),lang(246,$za),$I);$dc->rollback();}}}$rh=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(51).": $rh",$n);$O=null;if(isset($xg["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if(count($Zc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($S,$O);if(!$e&&support("table"))echo"<p class='error'>".lang(247).($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$e);$b->selectSearchPrint($Z,$e,$w);$b->selectOrderPrint($lf,$e,$w);$b->selectLimitPrint($z);$b->selectLengthPrint($Eh);$b->selectActionPrint($w);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$cd=$g->result(count_rows($a,$Z,$Kd,$id));$E=floor(max(0,$cd-1)/$z);}$Ig=$M;if(!$Ig){$Ig[]="*";if($Ve)$Ig[]=$Ve;}$Eb=convert_fields($e,$p,$M);if($Eb)$Ig[]=substr($Eb,2);$I=$dc->select($a,$Ig,$Z,$id,$lf,$z,$E,true);if(!$I)echo"<p class='error'>".error()."\n";else{if($x=="mssql"&&$E)$I->seek($z*$E);$sc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$x=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last"&&+$z&&$id&&$Kd&&$x=="sql")$cd=$g->result(" SELECT FOUND_ROWS()");if(!$L)echo"<p class='message'>".lang(12)."\n";else{$Qa=$b->backwardKeys($a,$rh);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$id&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);' class='jsonly'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(248)."</a>");$Le=array();$fd=array();reset($M);$gg=1;foreach($L[0]as$y=>$X){if($y!=$Ve){$X=$_GET["columns"][key($M)];$o=$p[$M?($X?$X["col"]:current($M)):$y];$C=($o?$b->fieldName($o,$gg):($X["fun"]?"*":$y));if($C!=""){$gg++;$Le[$y]=$C;$d=idf_escape($y);$td=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$Ub="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($td.($lf[0]==$d||$lf[0]==$y||(!$lf&&$Kd&&$id[0]==$d)?$Ub:'')).'">';echo
apply_sql_function($X["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($td.$Ub)."' title='".lang(57)."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($y)).'\'); return false;" title="'.lang(54).'" class="text jsonly"> =</a>';echo"</span>";}$fd[$y]=$X["fun"];next($M);}}$je=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$y=>$X)$je[$y]=max($je[$y],min(40,strlen(utf8_decode($X))));}}echo($Qa?"<th>".lang(249):"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Zc)as$Ke=>$K){$gi=unique_array($L[$Ke],$w);if(!$gi){$gi=array();foreach($L[$Ke]as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$gi[$y]=$X;}}$hi="";foreach($gi
as$y=>$X){if(($x=="sql"||$x=="pgsql")&&strlen($X)>64){$y=(strpos($y,'(')?$y:idf_escape($y));$y="MD5(".($x=='sql'&&preg_match("~^utf8_~",$p[$y]["collation"])?$y:"CONVERT($y USING ".charset($g).")").")";$X=md5($X);}$hi.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));}echo"<tr".odd().">".(!$id&&$M?"":"<td>".checkbox("check[]",substr($hi,1),in_array(substr($hi,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Kd||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$hi)."'>".lang(250)."</a>"));foreach($K
as$y=>$X){if(isset($Le[$y])){$o=$p[$y];if($X!=""&&(!isset($sc[$y])||$sc[$y]!=""))$sc[$y]=(is_mail($X)?$Le[$y]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($y).$hi;if(!$_&&$X!==null){foreach((array)$Zc[$y]as$q){if(count($Zc[$y])==1||end($q["source"])==$y){$_="";foreach($q["source"]as$s=>$ah)$_.=where_link($s,$q["target"][$s],$L[$Ke][$ah]);$_=($q["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($q["db"]),ME):ME).'select='.urlencode($q["table"]).$_;if($q["ns"])$_=preg_replace('~([?&]ns=)[^&]+~','\\1'.urlencode($q["ns"]),$_);if(count($q["source"])==1)break;}}}if($y=="COUNT(*)"){$_=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$gi))$_.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($gi
as$Qd=>$W)$_.=where_link($s++,$Qd,$W);}$X=select_value($X,$_,$o,$Eh);$t=h("val[$hi][".bracket_escape($y)."]");$Y=$_POST["val"][$hi][bracket_escape($y)];$nc=!is_array($K[$y])&&is_utf8($X)&&$L[$Ke][$y]==$K[$y]&&!$fd[$y];$Dh=preg_match('~text|lob~',$o["type"]);if(($_GET["modify"]&&$nc)||$Y!==null){$ld=h($Y!==null?$Y:$K[$y]);echo"<td>".($Dh?"<textarea name='$t' cols='30' rows='".(substr_count($K[$y],"\n")+1)."'>$ld</textarea>":"<input name='$t' value='$ld' size='$je[$y]'>");}else{$ne=strpos($X,"<i>...</i>");echo"<td id='$t' onclick=\"selectClick(this, event, ".($ne?2:($Dh?1:0)).($nc?"":", '".h(lang(251))."'").");\">$X";}}}if($Qa)echo"<td>";$b->backwardKeysPrint($Qa,$L[$Ke]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($L||$E)&&!is_ajax()){$Bc=true;if($_GET["page"]!="last"){if(!+$z)$cd=count($L);elseif($x!="sql"||!$Kd){$cd=($Kd?false:found_rows($S,$Z));if($cd<max(1e4,2*($E+1)*$z))$cd=reset(slow_query(count_rows($a,$Z,$Kd,$id)));else$Bc=false;}}if(+$z&&($cd===false||$cd>$z||$E)){echo"<p class='pages'>";$ue=($cd===false?$E+(count($L)>=$z?2:1):floor(($cd-1)/$z));if($x!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(252)."', '".($E+1)."'), event); return false;\">".lang(252)."</a>:",pagination(0,$E).($E>5?" ...":"");for($s=max(1,$E-4);$s<min($ue,$E+5);$s++)echo
pagination($s,$E);if($ue>0){echo($E+5<$ue?" ...":""),($Bc&&$cd!==false?pagination($ue,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$ue'>".lang(253)."</a>");}echo(($cd===false?count($L)+1:$cd-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.lang(254).'...\');" class="loadmore">'.lang(255).'</a>':'');}else{echo
lang(252).":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($ue>$E?pagination($E+1,$E).($ue>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($cd!==false?"(".($Bc?"":"~ ").lang(143,$cd).") ":"");$ac=($Bc?"":"~ ").$cd;echo
checkbox("all",1,0,lang(256),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$ac' : checked); selectCount('selected2', this.checked || !checked ? '$ac' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>',lang(248),'</legend><div>
<input type="submit" value="',lang(14),'"',($_GET["modify"]?'':' title="'.lang(244).'"'),'>
</div></fieldset>
<fieldset><legend>',lang(119),' <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="',lang(10),'">
<input type="submit" name="clone" value="',lang(238),'">
<input type="submit" name="delete" value="',lang(18),'"',confirm(),'>
</div></fieldset>
';}$ad=$b->dumpFormat();foreach((array)$_GET["columns"]as$d){if($d["fun"]){unset($ad['sql']);break;}}if($ad){print_fieldset("export",lang(71)." <span id='selected2'></span>");$wf=$b->dumpOutput();echo($wf?html_select("output",$wf,$ya["output"])." ":""),html_select("format",$ad,$ya["format"])," <input type='submit' name='export' value='".lang(71)."'>\n","</div></fieldset>\n";}echo(!$id&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",lang(70),!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ya["format"],1);echo" <input type='submit' name='import' value='".lang(70)."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($sc,'strlen'),$e);echo"<p><input type='hidden' name='token' value='$Oh'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$P=isset($_GET["status"]);page_header($P?lang(110):lang(109));$wi=($P?show_status():show_variables());if(!$wi)echo"<p class='message'>".lang(12)."\n";else{echo"<table cellspacing='0'>\n";foreach($wi
as$y=>$X){echo"<tr>","<th><code class='jush-".$x.($P?"status":"set")."'>".h($y)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$oh=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$S){json_row("Comment-$C",nbsp($S["Comment"]));if(!is_view($S)){foreach(array("Engine","Collation")as$y)json_row("$y-$C",nbsp($S[$y]));foreach($oh+array("Auto_increment"=>0,"Rows"=>0)as$y=>$X){if($S[$y]!=""){$X=format_number($S[$y]);json_row("$y-$C",($y=="Rows"&&$X&&$S["Engine"]==($dh=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($oh[$y]))$oh[$y]+=($S["Engine"]!="InnoDB"||$y!="Data_free"?$S[$y]:0);}elseif(array_key_exists($y,$S))json_row("$y-$C");}}}foreach($oh
as$y=>$X)json_row("sum-$y",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".number($_POST["kill"]));else{foreach(count_tables($b->databases())as$m=>$X){json_row("tables-$m",$X);json_row("size-$m",db_size($m));}json_row("");}exit;}else{$xh=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($xh&&!$n&&!$_POST["search"]){$I=true;$ze="";if($x=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$I=truncate_tables($_POST["tables"]);$ze=lang(257);}elseif($_POST["move"]){$I=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ze=lang(258);}elseif($_POST["copy"]){$I=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ze=lang(259);}elseif($_POST["drop"]){if($_POST["views"])$I=drop_views($_POST["views"]);if($I&&$_POST["tables"])$I=drop_tables($_POST["tables"]);$ze=lang(260);}elseif($x!="sql"){$I=($x=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$ze=lang(261);}elseif(!$_POST["tables"])$ze=lang(9);elseif($I=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($K=$I->fetch_assoc())$ze.="<b>".h($K["Table"])."</b>: ".h($K["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$ze,$I);}page_header(($_GET["ns"]==""?lang(36).": ".h(DB):lang(74).": ".h($_GET["ns"])),$n,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".lang(262)."</h3>\n";$wh=tables_list();if(!$wh)echo"<p class='message'>".lang(9)."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".lang(263)." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".lang(54)."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}$bc=doc_link(array('sql'=>'show-table-status.html'));echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);" class="jsonly">','<th>'.lang(124),'<td>'.lang(264).doc_link(array('sql'=>'storage-engines.html')),'<td>'.lang(115).doc_link(array('sql'=>'charset-mysql.html')),'<td>'.lang(265).$bc,'<td>'.lang(266).$bc,'<td>'.lang(267).$bc,'<td>'.lang(49).doc_link(array('sql'=>'example-auto-increment.html')),'<td>'.lang(268).$bc,(support("comment")?'<td>'.lang(48).$bc:''),"</thead>\n";$T=0;foreach($wh
as$C=>$U){$zi=($U!==null&&!preg_match('~table~i',$U));$t=h("Table-".$C);echo'<tr'.odd().'><td>'.checkbox(($zi?"views[]":"tables[]"),$C,in_array($C,$xh,true),"","formUncheck('check-all');","",$t),'<th>'.(support("table")||support("indexes")?"<a href='".h(ME)."table=".urlencode($C)."' title='".lang(41)."' id='$t'>".h($C).'</a>':h($C));if($zi){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.lang(42).'">'.(preg_match('~materialized~i',$U)?lang(122):lang(123)).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.lang(40).'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",lang(43)),"Index_length"=>array("indexes",lang(126)),"Data_free"=>array("edit",lang(44)),"Auto_increment"=>array("auto_increment=1&create",lang(43)),"Rows"=>array("select",lang(40)),)as$y=>$_){$t=" id='$y-".h($C)."'";echo($_?"<td align='right'>".(support("table")||$y=="Rows"||(support("indexes")&&$y!="Data_length")?"<a href='".h(ME."$_[0]=").urlencode($C)."'$t title='$_[1]'>?</a>":"<span$t>?</span>"):"<td id='$y-".h($C)."'>&nbsp;");}$T++;}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(239,count($wh)),"<td>".nbsp($x=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$y)echo"<td align='right' id='sum-$y'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$ti="<input type='submit' value='".lang(269)."'".on_help("'VACUUM'")."> ";$hf="<input type='submit' name='optimize' value='".lang(270)."'".on_help($x=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'")."> ";echo"<fieldset><legend>".lang(119)." <span id='selected'></span></legend><div>".($x=="sqlite"?$ti:($x=="pgsql"?$ti.$hf:($x=="sql"?"<input type='submit' value='".lang(271)."'".on_help("'ANALYZE TABLE'")."> ".$hf."<input type='submit' name='check' value='".lang(272)."'".on_help("'CHECK TABLE'")."> "."<input type='submit' name='repair' value='".lang(273)."'".on_help("'REPAIR TABLE'")."> ":"")))."<input type='submit' name='truncate' value='".lang(274)."'".confirm().on_help($x=="sqlite"?"'DELETE'":"'TRUNCATE".($x=="pgsql"?"'":" TABLE'"))."> "."<input type='submit' name='drop' value='".lang(120)."'".confirm().on_help("'DROP TABLE'").">\n";$l=(support("scheme")?$b->schemas():$b->databases());if(count($l)!=1&&$x!="sqlite"){$m=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(275).": ",($l?html_select("target",$l,$m):'<input name="target" value="'.h($m).'" autocapitalize="off">')," <input type='submit' name='move' value='".lang(276)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(277)."'>":""),"\n";}echo"<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $T);":"")."\">\n";echo"<input type='hidden' name='token' value='$Oh'>\n","</div></fieldset>\n";}echo"</form>\n","<script type='text/javascript'>tableCheck();</script>\n";}echo'<p class="links"><a href="'.h(ME).'create=">'.lang(72)."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.lang(196)."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".lang(136)."</h3>\n";$Ag=routines();if($Ag){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(175).'<td>'.lang(47).'<td>'.lang(213)."<td>&nbsp;</thead>\n";odd('');foreach($Ag
as$K){echo'<tr'.odd().'>','<th><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($K["ROUTINE_NAME"]).'">'.h($K["ROUTINE_NAME"]).'</a>','<td>'.h($K["ROUTINE_TYPE"]),'<td>'.h($K["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($K["ROUTINE_NAME"]).'">'.lang(129)."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(212).'</a>':'').'<a href="'.h(ME).'function=">'.lang(211)."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".lang(278)."</h3>\n";$Ng=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($Ng){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(175)."</thead>\n";odd('');foreach($Ng
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".lang(218)."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".lang(23)."</h3>\n";$ri=types();if($ri){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(175)."</thead>\n";odd('');foreach($ri
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".lang(222)."</a>\n";}if(support("event")){echo"<h3 id='events'>".lang(137)."</h3>\n";$L=get_rows("SHOW EVENTS");if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(175)."<td>".lang(279)."<td>".lang(202)."<td>".lang(203)."<td></thead>\n";foreach($L
as$K){echo"<tr>","<th>".h($K["Name"]),"<td>".($K["Execute at"]?lang(280)."<td>".$K["Execute at"]:lang(204)." ".$K["Interval value"]." ".$K["Interval field"]."<td>$K[Starts]"),"<td>$K[Ends]",'<td><a href="'.h(ME).'event='.urlencode($K["Name"]).'">'.lang(129).'</a>';}echo"</table>\n";$_c=$g->result("SELECT @@event_scheduler");if($_c&&$_c!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($_c)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.lang(201)."</a>\n";}if($wh)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();