<?php
/**
 * Internationalisation file for the BatchUserRights extension
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English */
$messages['en'] = array(
	'batchuserrights' => 'Batch user rights',
	'batchuserrights-desc' => 'Allows adding one or more users to a group or more groups in one action',
	'batchuserrights-names' => 'Usernames to add this group to (one per line):',
	'batchuserrights-intro' => 'This page will let you add a group to multiple users at once.
For security reasons, the list of addable groups is set in the extension configuration and cannot be changed from within the wiki.
Please ask a system administrator if you need to allow batch-adding of other groups.',
	'batchuserrights-single-progress-update' => 'Added {{PLURAL:$1|group|groups}} to <strong>$2</strong>.',
	'batchuserrights-add-groups' => 'Adding {{PLURAL:$1|one user|$1 users}} to the following {{PLURAL:$2|group|groups}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Could not load the user \"'''$1'''\".",
	'batchuserrights-no-groups' => 'You did not choose any groups.
This will not accomplish anything.
The rest of the page will be allowed to run just so that you can easily see if any of the usernames could not be loaded.',

	'right-batchuserrights' => 'Add one or more users to a group or multiple groups in one action',
	'action-batchuserrights' => 'add one or more users to a group or multiple groups in one action',
);

/** Message documentation (Message documentation)
 * @author SVG
 * @author Shirayuki
 * @author The Evil IP address
 */
$messages['qqq'] = array(
	'batchuserrights' => '{{doc-special|BatchUserRights|unlisted=1}}',
	'batchuserrights-desc' => '{{desc|name=Batch User Rights|url=http://www.mediawiki.org/wiki/Extension:BatchUserRights}}',
	'batchuserrights-names' => 'Names of users which should be added to the selected groups',
	'batchuserrights-intro' => 'How to use description on Special:BatchUserRights',
	'batchuserrights-single-progress-update' => 'Used as success message. Parameters:
* $1 - number of groups
* $2 - username',
	'batchuserrights-add-groups' => 'Used as success message. Parameters:
* $1 - number of users
* $2 - number of groups
* $3 - list of groups',
	'batchuserrights-userload-error' => 'Error message if a user could not loaded. Parameters:
* $1 - username',
	'batchuserrights-no-groups' => 'Error message which will be shown if no groups to add has been selected',
	'right-batchuserrights' => '{{doc-right|batchuserrights}}',
	'action-batchuserrights' => '{{doc-action|batchuserrights}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'batchuserrights-userload-error' => "Die gebruiker \"'''\$1'''\" kon nie gelaai word nie.",
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'batchuserrights' => "Permisos d'usuariu por llotes",
	'batchuserrights-desc' => 'Permite amestar unu o más usuarios a unu o más grupos con una sola aición',
	'batchuserrights-names' => "Nomes d'usuarios p'amestar a esti grupu (unu por llinia):",
	'batchuserrights-intro' => 'Esta páxina permitirá-y amestar un grupu a múltiples usuarios al mesmu tiempu.
Por motivos de seguridá, la llista de grupos que puen amestase definese na configuración de la estensión y nun pue cambiase dende dientro de la wiki.
Por favor, pidalo a un alministrador del sistema si necesita añadir otros grupos.',
	'batchuserrights-single-progress-update' => 'Amestó {{PLURAL:$1|un grupu|grupos}} a <strong>$2</strong>.',
	'batchuserrights-add-groups' => 'Amestando {{PLURAL:$1|un usuariu|$1 usuarios}} {{PLURAL:$2|al siguiente grupu|a los siguientes grupos}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Nun pudo cargase l'usuariu \"'''\$1'''\".",
	'batchuserrights-no-groups' => "Nun elixó dengún grupu.
D'esta manera nun asocederá nada.
El restu de la páxina va executase solo para que pueda ver fácilmente si dalgún nome d'usuariu nun pue cargase.",
	'right-batchuserrights' => 'Agregar unu o más usuarios a un grupu o múltiples grupos con una sola aición',
	'action-batchuserrights' => 'agregar unu o más usuarios a un grupu o múltiples grupos con una sola aición',
);

/** South Azerbaijani (تورکجه)
 * @author Mousa
 */
$messages['azb'] = array(
	'batchuserrights' => 'ییغین ایستیفاده‌چی حاقلاری',
	'batchuserrights-desc' => 'بیر حرکت‌ده بیر یا نئچه ایستیفاده‌چینی بیر قروپا آرتیرماق ایجازه‌سی وئریر',
	'batchuserrights-names' => 'بو قروپا آرتیرماق اوچون ایستیفاده‌چی آدلاری (هر خط‌ده بیر):',
	'batchuserrights-intro' => 'بو صحیفه سیزه ایجازه وئریر بیر قروپو نئچه ایستیفاده‌چی‌یه بیردن آرتیراسینیز.
امنیتی دلیل‌لره گؤره، آرتیریلا بیلن قروپلارین لیستی، اوزانتی‌نین تنظیملرینده گلیب‌دیر و ویکی‌دن دَییشدیرمک اولماز.
اگر آیری قروپلارین ییغین آرتیرماغینا ایجازه وئرمک ایستیرسینیز، بیر سیستم ایداره‌چیسیندن ایستگین.',
	'batchuserrights-single-progress-update' => '{{PLURAL:$1|بیر|$1}} قروپ <strong>$2</strong>-ه آرتیریلدی.',
	'batchuserrights-add-groups' => '{{PLURAL:$1|بیر|$1}} ایستیفاده‌چی بو {{PLURAL:$2|قروپا|قروپلارا}} آرتیریلدی:
<strong>$3</strong>.',
	'batchuserrights-userload-error' => "«'''$1'''» ایستیفاده‌چی یوکلننمه‌دی.",
	'batchuserrights-no-groups' => 'سیز هئچ بیر قروپ سئچمه‌دینیز.
بو بیر ایش گؤرمیه‌جکدیر.
صحیفه‌نین قالانی ایشلیه‌جک فقط بونا گؤره کی گؤره‌سیز بعضی ایستیفاده‌چیلر یوکلنه بیلیر یا یوخ.',
	'right-batchuserrights' => 'بیر حرکت‌ده بیر یا نئچه ایستیفاده‌چینی بیر یا چوخ قروپا آرتیرماق', # Fuzzy
);

/** Bashkir (башҡортса)
 * @author Sagan
 * @author Ләйсән
 */
$messages['ba'] = array(
	'batchuserrights' => 'Ҡатнашыуса хоҡуҡтарын идаралау',
	'batchuserrights-desc' => 'Ҡатнашыусыларҙы бер йәки бер нисә төркөмгә өҫтәргә мөмкилек бирә.',
	'batchuserrights-names' => 'Төркөмгә берләштереү өсөн иҫәп яҙмалары (һәр юлда берәр)',
);

/** Bikol Central (Bikol Central)
 * @author Geopoet
 */
$messages['bcl'] = array(
	'batchuserrights' => 'Mga katanosan kan grupo nin paragamit',
	'batchuserrights-desc' => 'Minatugot na magdudugang nin saro o dakol na mga paragamit sa sarong grupo o dakol na mga grupo sa laog nin sarong aksyon',
	'batchuserrights-names' => 'Mga pangaran nin paragamit tanganing idugang ining grupo sa (saro kada linya):',
	'batchuserrights-intro' => 'Ining pahina minatugot saimo na magdugang nin sarong grupo sa kadakulon na mga paragamit na sararoan.
Para sa rason nin seguridad, an lista kan maidudugang na mga grupo ibinugtak sa laog kan konpigurasyon nin ekstensyon asin dae maliliwat gikan sa laog kan wiki.
Tabi man maghapot sa sarong administrador nin sistema kun ika kaipuhan na magtutugot na magdudugang kan ibang mga grupo.',
	'batchuserrights-single-progress-update' => 'Nagdugang nin {{PLURAL:$1|grupo|mga grupo}} sa <strong>$2</strong>.',
	'batchuserrights-add-groups' => 'Nagdudugang nin {{PLURAL:$1|sarong paragamit|$1 mga paragamit}} sa minasunod na {{PLURAL:$2|grupo|mga grupo}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Dae maikakarga an paragamit na si \"'''\$1'''\".",
	'batchuserrights-no-groups' => 'Ika dae tabi nagpili nin arinman na mga grupo.
Ini dae nanggad makakapagtapos nin anuman na bagay.
An tada kan pahina pagtutugutan na magdalagan na tangani baya na saimong sayon na mahiling kun arin sa mga pangaran nin paragamit an dae maipagkakarga.',
	'right-batchuserrights' => 'Magdugang in saro o dakol na mga paragamit sa sarong grupo o dagmang na mga grupo sa laog nin sarong aksyon',
	'action-batchuserrights' => 'Magdugang in saro o dakol na mga paragamit sa sarong grupo o dagmang na mga grupo sa laog nin sarong aksyon',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'batchuserrights' => 'Пакетнае кіраваньне правамі ўдзельнікаў',
	'batchuserrights-desc' => 'Дазваляе дадаваць аднаго ці болей удзельнікаў у групу ці некалькі групаў за адно дзеяньне',
	'batchuserrights-names' => 'Імёны ўдзельнікаў, для даданьня ў групу (па аднаму на радок):',
	'batchuserrights-intro' => 'Гэтая старонка дазволіць Вам дадаваць у групу адразу некалькі ўдзельнікаў.
Па прычынах бясьпекі, сьпіс апрацоўваемых групаў ўстанаўліваецца ў наладах пашырэньня і ня можа быць зьменены ў {{GRAMMAR:месны|{{SITENAME}}}}.
Калі ласка, запытайце сыстэмнага адміністратара, калі Вам трэба ўключыць пакетнае даданьне для іншых групаў.',
	'batchuserrights-single-progress-update' => '{{PLURAL:$1|1=Група даданая|Групы даданыя}} для <strong>$2</strong>.', # Fuzzy
	'batchuserrights-add-groups' => 'Даданьне $1 {{PLURAL:$1|ўдзельніка|удзельнікаў|удзельнікаў}} ў {{PLURAL:$2|1=наступную групу|наступныя групы}}: <strong>$3</strong>.', # Fuzzy
	'batchuserrights-userload-error' => "Немагчыма загрузіць удзельніка «'''$1'''».",
	'batchuserrights-no-groups' => 'Вы не выбралі ніякай групы.
Нічога ня будзе выканана.
Астатняя частка старонкі будзе адкрытая для таго, каб Вы ўбачылі, якія імёны ўдзельнікаў ня могуць быць загружаныя.',
	'right-batchuserrights' => 'даданьне аднаго ці болей удзельнікаў у групу ці некалькі групаў за адно дзеяньне', # Fuzzy
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'batchuserrights-add-groups' => 'Добавяне на {{PLURAL:$1|един потребител|$1 потребителя}} в {{PLURAL:$2|следната група|следните групи}}: <strong>$3</strong>.',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'batchuserrights' => 'Gwirioù oberour dre strolladoù',
	'batchuserrights-desc' => "Aotren a ra ouzhpennañ unan pe meur a implijer d'ur strollad, pe meur a hini, en un taol hepken",
	'batchuserrights-names' => "Anvioù implijer da ouzhpennañ d'ar strollad-mañ (unan dre linenn) :",
	'batchuserrights-single-progress-update' => '{{PLURAL:$1|Strollad|Strolladoù}} ouzhpennet da <strong>$2</strong>.',
	'batchuserrights-add-groups' => "Ouzhpennañ {{PLURAL:$1|un implijer|$1 implijer}} d'ar {{PLURAL:$2|strollad|strolladoù}}-mañ : <strong>$3</strong>.",
	'batchuserrights-userload-error' => "Dibosupl eo kargañ an implijer \"'''\$1'''\".",
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'batchuserrights-desc' => 'Omogućava dodavanje jednog ili više korisnika u grupu putem jedne akcije', # Fuzzy
	'batchuserrights-userload-error' => "Nisam mogao učitati korisnika \"'''\$1'''\".",
);

/** Catalan (català)
 * @author Arnaugir
 */
$messages['ca'] = array(
	'batchuserrights-userload-error' => "No s'ha pogut carregar l'usuari \"'''\$1'''\".",
);

/** Czech (čeština)
 * @author Dontlietome7
 * @author Matěj Grabovský
 */
$messages['cs'] = array(
	'batchuserrights' => 'Dávkové přidělení uživatelských práv',
	'batchuserrights-desc' => 'Umožňuje najednou přidat jednoho nebo více uživatelů do skupiny',
	'batchuserrights-names' => 'Uživatelská jména k přidání do této skupiny (1 na řádek):',
	'batchuserrights-intro' => 'Tato stránka vám umožní přidat skupinu pro více uživatelů najednou.
Z bezpečnostních důvodů seznam přidatelných skupin je nastaven v konfiguraci rozšíření a nelze jej měnit v rámci wiki.
Požádejte správce systému, pokud potřebujete povolit dávkové přidáním dalších skupin.',
	'batchuserrights-single-progress-update' => 'Přidána {{PLURAL:$1|skupina|skupiy|skupin}} do <strong>$2</strong>.',
	'batchuserrights-add-groups' => 'Přidávání {{PLURAL:$1|jednoho uževatele|$1 uživatelů}} do následující{{PLURAL:$2| skupiny|ch skupin}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Nelze načíst uživatele \"'''\$1'''\".",
	'batchuserrights-no-groups' => 'Neurčili jste žádné skupiny.
Neprovede se žádná akce.
Zbývající část stránky bude možné spustit tak, že lze snadno zobrazit, pokud některého z uživatelů nelze načíst.',
);

/** German (Deutsch)
 * @author Kghbln
 * @author LWChris
 * @author Metalhead64
 * @author SVG
 * @author The Evil IP address
 */
$messages['de'] = array(
	'batchuserrights' => 'Sammelbenutzerrechtevergabe',
	'batchuserrights-desc' => 'Ermöglicht das gesammelte Hinzufügen eines oder mehrerer Benutzer zu einer oder mehreren Benutzergruppen',
	'batchuserrights-names' => 'Folgende Benutzer dieser Benutzergruppe hinzufügen (einer pro Zeile):',
	'batchuserrights-intro' => 'Auf dieser Seite kannst du mehrere Benutzer gleichzeitig einer Benutzergruppe hinzufügen.
Aus Sicherheitsgründen wurde die Liste der zuordenbaren Benutzergruppen in der Konfigurationsdatei der Programmerweiterung selbst festgelegt und kann daher nicht im Wiki verändert werden.
Sofern weitere Benutzergruppen hinzugefügt werden sollen, wende dich bitte an einen Systemadministrator.',
	'batchuserrights-single-progress-update' => '{{PLURAL:$1|Benutzergruppe wurde|Benutzergruppen wurden}} <strong>$2</strong> hinzugefügt.',
	'batchuserrights-add-groups' => '{{PLURAL:$1|Ein Benutzer wird|$1 Benutzer werden}} {{PLURAL:$2|der folgenden Benutzergruppe|den folgenden Benutzergruppen}} hinzugefügt: <strong>$3</strong>',
	'batchuserrights-userload-error' => "Der Benutzer „'''$1'''“ konnte nicht geladen werden.",
	'batchuserrights-no-groups' => 'Du hast keine Benutzergruppe ausgewählt.
Es wird daher keine Änderung durchgeführt.
Der Rest der Seite wird nur deshalb geladen, damit du einfach feststellen kannst, ob einer der Benutzernamen nicht geladen werden konnte.',
	'right-batchuserrights' => 'Mehrere Benutzer gesammelt einer oder mehreren Benutzergruppen hinzufügen',
	'action-batchuserrights' => 'mehrere Benutzer gesammelt einer oder mehreren Benutzergruppen hinzuzufügen',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'batchuserrights-intro' => 'Auf dieser Seite können Sie mehrere Benutzer gleichzeitig einer Benutzergruppe hinzufügen.
Aus Sicherheitsgründen wurde die Liste der zuordenbaren Benutzergruppen in der Konfigurationsdatei der Programmerweiterung selbst festgelegt und kann daher nicht im Wiki verändert werden.
Sofern weitere Benutzergruppen hinzugefügt werden sollen, wenden Sie sich bitte an einen Systemadministrator.',
	'batchuserrights-no-groups' => 'Sie haben keine Benutzergruppe ausgewählt.
Es wird daher keine Änderung durchgeführt.
Der Rest der Seite wird nur deshalb geladen, damit Sie einfach feststellen können, ob einer der Benutzernamen nicht geladen werden konnte.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'batchuserrights' => 'Pêser heqê karberan',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'batchuserrights' => 'Pšawa zběrańskich wužywarjow',
	'batchuserrights-desc' => 'Zmóžnja pśidawanje jadnogo wužywarja abo někotarych wužywarjow kupce abo někotarym kupkam skupinam naraz',
	'batchuserrights-names' => 'Wužywarske mjenja, kótarež maju se toś tej kupce pśidaś (jadne na smužku):',
	'batchuserrights-intro' => 'Z toś tym bokom móžoš někotarym wužywarjam naraz kupku pśidaś.
Z pśicynow wěstoty lisćina pśidawajobnych kupkow nastaja se w konfiguraciji rozšyrjenja a njedajo se we wikiju změniś.
Pšosym staj se ze systemowym administratorom do zwiska, jolic musyš dalšne kupki pśidaś.',
	'batchuserrights-single-progress-update' => '{{PLURAL:$1|Kupka j|Kupce stej|Kupki su|Kupki su}} se do <strong>$2</strong> {{PLURAL:$1|pśidała|pśidałej|pśidali|pśidali}}.',
	'batchuserrights-add-groups' => '{{PLURAL:$1|Jaden wužywaŕ|$1 wužywarja|$1 wužywarje|$1 wužiwarjow}} {{PLURAL:$1|pśidawa|pśidawataj|pśidawaju|pśidawa}} se {{PLURAL:$2|slědujucej kupce|slědujucyma kupkoma|slědujucym kupkam|slědujucym kupkam}} : <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Wužywaŕ \"'''\$1'''\" njedajo se zacytaś.",
	'batchuserrights-no-groups' => 'Njejsy žednu kupku wubrał.
Togodla se nic njewuwjeźo.
Zbytk boka se jano zacytujo, aby mógał lažko wiźeś, lěc jadne z wužywarskich mjenjow njedajo se zacytaś.',
	'right-batchuserrights' => 'Jadnogo wužywarja abo někotarych wužywarjow jadnej kupce abo někotarym kupkam naraz pśidaś',
	'action-batchuserrights' => 'Jadnogo wužywarja abo někotarych wužywarjow jadnej kupce abo někotarym kupkam naraz pśidaś',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'batchuserrights-userload-error' => "Ne eblis ŝargi uzanton \"'''\$1'''\".",
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Bola
 * @author Dferg
 * @author MarcoAurelio
 * @author Sanbec
 */
$messages['es'] = array(
	'batchuserrights' => 'Derechos de usuarios por lotes',
	'batchuserrights-desc' => 'Permite añadir uno o más usuarios a uno o más grupos en una sola acción',
	'batchuserrights-names' => 'Nombres de usuario para añadir a este grupo (uno por línea):',
	'batchuserrights-intro' => 'Esta página te permitirá añadir a un grupo múltiples usuarios a la vez.
Por razones de seguridad, la lista de grupos agregables se cambia en la configuración de la extensión y no puede ser cambiada desde dentro del wiki.
Por favor, pregunta a un administrador del sistema si necesitas añadir otros grupos.',
	'batchuserrights-single-progress-update' => 'Añadido {{PLURAL:$1|grupo|grupos}} a <strong>$2</strong>.',
	'batchuserrights-add-groups' => 'Añadiendo {{PLURAL:$1|un usuario|$1 usuarios}} {{PLURAL:$2|al siguiente grupo|a los siguientes grupos}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "No se pudo cargar el usuario \"'''\$1'''\".",
	'batchuserrights-no-groups' => 'No elegiste ningún grupo.
De esta forma no ocurrirá nada.
El resto de la página será ejecutada solo para que puedas ver fácilmente si algún nombre de usuario no se puede cargar.',
	'right-batchuserrights' => 'Agregar a uno o a más usuarios a un grupo o a múltiples grupos en una sola acción',
	'action-batchuserrights' => 'añadir a uno o a más usuarios a un grupo o a múltiples grupos en una sola acción',
);

/** Persian (فارسی)
 * @author Armin1392
 */
$messages['fa'] = array(
	'batchuserrights' => 'مجموعهٔ حقوق کاربر',
	'batchuserrights-desc' => 'اجازهٔ اضافه کردن یک کاربر یا بیشتر به یک گروه یا گروه‌های بیشتر در یک عمل',
	'batchuserrights-names' => 'نام‌های کاربری برای اضافه کردن این گروه به (یکی در هر خط)',
	'batchuserrights-intro' => 'این صفحه به شما اجازه ‌خواهد‌داد که یک‌دفعه یک گروه را به چند کاربر اضافه کنید.
به دلایل امنیتی، فهرست‌ گروه‌های قابل اضافه ‌کردن در پیکر‌بندی گستره تنظیم شده‌است و نمی‌تواند در داخل ویکی تغییر داده ‌شود.
اگر احتیاج به اجازهٔ پردازش یکجای ذیگر گروه‌ها دارید،لطفاً از سرپرست دستگاه سوأل کنید.',
	'batchuserrights-single-progress-update' => 'اضافه کردن {{PLURAL:$1|group|groups}} به <strong>$2</strong>.',
	'batchuserrights-add-groups' => 'اضافه کردن {{PLURAL:$1|one user|$1 users}} به {{PLURAL:$2|group|groups}}: <strong>$3</strong> زیر.',
	'batchuserrights-userload-error' => "کاربر \"'''\$1'''\" نمی‌تواند بارگذاری شود.",
	'batchuserrights-no-groups' => 'شما هیچ گروهی را انتخاب نکردید.
هیچ چیز انجام نخواهد‌شد.‌
صفحات دیگر فقط برای اجرا، آزاد خواهند بود بنابراین اگر هر نام کاربری نتوانست بار شود شما می‌توانید به ‌آسانی ببینید .',
	'right-batchuserrights' => 'اضافه کردن یک کاربر یا بیشتر برای یک گروه یا چند گروه در یک عمل',
	'action-batchuserrights' => 'اضافه کردن یک کاربر یا بیشتر برای یک گروه یا چند گروه در یک عمل',
);

/** Finnish (suomi)
 * @author VezonThunder
 */
$messages['fi'] = array(
	'batchuserrights-desc' => 'Mahdollistaa yhden tai useamman käyttäjän lisäämiseen yhteen tai useampaan ryhmään kerralla',
	'batchuserrights-names' => 'Käyttäjänimet, joille lisätään tämä ryhmä (yksi riviä kohti):',
	'batchuserrights-intro' => 'Tämä sivu antaa lisätä ryhmän useille käyttäjille kerralla.
Turvallisuussyistä lisättävien ryhmien luettelo on määritetty laajennuksen asetuksissa eikä sitä voi muuttaa wikistä.
Kysy järjestelmän ylläpitäjältä, jos sinun tarvitsee sallia muiden ryhmien joukkolisääminen.',
	'batchuserrights-add-groups' => 'Lisätään {{PLURAL:$1|yksi käyttäjä|$1 käyttäjää}} {{PLURAL:$2|seuraavaan ryhmään|seuraaviin ryhmiin}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Käyttäjää \"'''\$1'''\" ei voitu ladata.",
	'batchuserrights-no-groups' => 'Et valinnut ryhmiä.
Tämä ei muuta mitään.
Loput sivusta suoritetaan vain jotta voisit helposti nähdä, epäonnistuuko joidenkin käyttäjänimien lataaminen.',
	'right-batchuserrights' => 'Lisätä yksi tai useampia käyttäjiä yhteen tai useampaan ryhmään kerralla',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'batchuserrights-desc' => 'Loyvir tær at leggja ein ella fleiri brúkarar til ein bólk ella fleiri bólkar í einari handling',
	'batchuserrights-names' => 'Brúkaranøvn sum skulu leggjast til henda bólkin (eitt navn pr. rað):',
	'batchuserrights-userload-error' => "Tað bar ikki til at innlesa brúkara \"'''\$1'''\".",
	'batchuserrights-no-groups' => 'Tú valdi ongar bólkar.
Hetta fer ikki at føra til nakað.
Restin av síðuni fær loyvi til at koyra, bert fyri at tú lættliga kanst síggja, um summi av brúkaranøvnunum ikki kundu innlesast.',
	'right-batchuserrights' => 'Legg ein ella fleiri brúkarar til ein bólk ella fleiri bólkar í einari handling',
	'action-batchuserrights' => 'legg ein ella fleiri brúkarar til ein bólk ella fleiri bólkar í einari handling',
);

/** French (français)
 * @author Gomoko
 * @author Peter17
 * @author Seb35
 */
$messages['fr'] = array(
	'batchuserrights' => 'Droits d’utilisateurs par lots',
	'batchuserrights-desc' => 'Permet d’ajouter un ou plusieurs utilisateur(s) à un ou des groupe(s) en une seule action',
	'batchuserrights-names' => 'Noms d’utilisateurs à ajouter à ce groupe (un par ligne) :',
	'batchuserrights-intro' => 'Cette page permet d’ajouter un groupe à plusieurs utilisateurs en une fois.
Pour des raisons de sécurité, la liste des groupes utilisables est définie dans la configuration de l’extension et ne peut pas être changée depuis l’interface du wiki.
Si vous voulez autoriser l’ajout par lots pour d’autres groupes, veuillez demander leur ajout à un administrateur système.',
	'batchuserrights-single-progress-update' => '{{PLURAL:$1|groupe ajouté|groupes ajoutés}} à <strong>$2</strong>.',
	'batchuserrights-add-groups' => 'Ajout {{PLURAL:$1|d’un utilisateur|de $1 utilisateurs}} {{PLURAL:$2|au groupe suivant|aux groupes suivants}} : <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Impossible de charger l’utilisateur « '''$1''' ».",
	'batchuserrights-no-groups' => 'Vous n’avez choisi aucun groupe.
Aucune action ne sera effectuée.
Le reste de la page se chargera normalement ce qui vous permettra de voir si certains noms d’utilisateurs ne peuvent pas être chargés.',
	'right-batchuserrights' => 'Ajouter un ou plusieurs utilisateurs à un groupe ou plus en une action',
	'action-batchuserrights' => 'ajouter un ou plusieurs utilisateurs à un ou plusieurs groupes en une action',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'batchuserrights-userload-error' => "Empossiblo de chargiér l’utilisator « '''$1''' ».",
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'batchuserrights' => 'Dereitos de usuario en feixe',
	'batchuserrights-desc' => 'Permite engadir un ou máis usuarios a un ou máis grupos cunha soa acción',
	'batchuserrights-names' => 'Nomes de usuario a engadir a este grupo (un por liña):',
	'batchuserrights-intro' => 'Esta páxina permitirá engadir usuarios a un grupo ao mesmo tempo.
Por razóns de seguridade, a lista dos grupos que se poden engadir está definida na configuración da extensión e non se pode cambiar dentro do wiki.
Por favor, pregunte a un administrador do sistema se necesita engadir outros grupos.',
	'batchuserrights-single-progress-update' => 'Engadiu {{PLURAL:$1|un grupo|grupos}} a <strong>$2</strong>.',
	'batchuserrights-add-groups' => 'Engadiu {{PLURAL:$1|un usuario|$1 usuarios}} {{PLURAL:$2|ao seguinte grupo|aos seguintes grupos}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Non se puido cargar o usuario \"'''\$1'''\".",
	'batchuserrights-no-groups' => 'Non elixiu ningún grupo.
Deste modo, non ocorrerá nada.
Que apareza o resto da páxina só serve para que poida ollar facilmente se non se puido cargar algún dos nomes de usuario.',
	'right-batchuserrights' => 'Engadir un ou máis usuarios a un ou varios grupos cunha soa acción',
	'action-batchuserrights' => 'engadir un ou máis usuarios a un ou varios grupos cunha soa acción',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Ofekalef
 * @author חיים
 * @author ערן
 */
$messages['he'] = array(
	'batchuserrights' => 'שינוי הרשאות מרובה',
	'batchuserrights-desc' => 'שיוך משתמש אחד או יותר לקבוצה או לקבוצות בפעולה אחת',
	'batchuserrights-names' => 'שמות משתמש להוספה לקבוצה זו (אחד בשורה):',
	'batchuserrights-intro' => 'דף זה מאפשר לך להוסיף בבת אחת קבוצה למשתמשים רבים.
מטעמי אבטחה, רשימת הקבוצות שאותן ניתן להוסיף מוגדרת בהגדרות ההרחבה, ואין אפשרות לשנותה מהוויקי.
אם ברצונך לאפשר הוספה מרובה של קבוצות אחרות יש לפנות למנהלי המערכת.',
	'batchuserrights-single-progress-update' => 'נוספה {{PLURAL:$1|קבוצה|קבוצותה}} ל־<strong>$2</strong>.',
	'batchuserrights-add-groups' => 'הוספת {{PLURAL:$1| משתמש| $1 משתמשים}} ל{{PLURAL:$2|קבוצה הבאה|קבוצות הבאות}}: <strong> $3 </strong>.',
	'batchuserrights-userload-error' => "נכשלה טעינת המשתמש \"'''\$1'''\"",
	'batchuserrights-no-groups' => 'לא בחרת שום קבוצה.
זה לא ישיג שום דבר.
שאר הדף הזה יוכל לרוץ רק כדי להראות לך אילו שמות משתמש לא ניתן לבחור.',
	'right-batchuserrights' => 'הוספת משתמש או משתמשים לקבוצה אחת או יותר בפעולה אחת',
	'action-batchuserrights' => 'הוספת משתמש או משתמשים לקבוצה אחת או יותר בפעולה אחת',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'batchuserrights' => 'Prawa zběranskich wužiwarjow',
	'batchuserrights-desc' => 'Zmóžnja přidawanje jednoho wužiwarja abo wjacorych wužiwarjow skupinje abo wjacorym skupinam naraz',
	'batchuserrights-names' => 'Wužiwarske mjena, kotrež maja so tutej skupinje přidać (jedne na linku):',
	'batchuserrights-intro' => 'Z tutej stronu móžeš wjacorym wužiwarjam naraz skupinu přidać.
Z přičinow wěstoty lisćina přidawajomnych skupinow nastaja so w konfiguraciji rozšěrjenja a njeda so we wikiju změnić.
Prošu staj so ze systemowym administratorom do zwiska, jeli dyrbiš dalše skupiny přidać.',
	'batchuserrights-single-progress-update' => '{{PLURAL:$1|Skupina je|Skupinje stej|Skupiny su|Skupiny su}} so do <strong>$2</strong> {{PLURAL:$1|přidała|přidałoj|přidali|přidali}}.',
	'batchuserrights-add-groups' => '{{PLURAL:$1|Jedyn wužiwar|$1 wužiwarjej|$1 wužiwarjo|$1 wužiwarjow}} so {{PLURAL:$2|slědowacej skupinje|slědowacymaj skupinomaj|slědowacym skupinam|slědowacym skupinam}} {{PLURAL:$1|přidawa|přidawataj|přidawaja|přidawa}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Wužiwar \"'''\$1'''\" njeda so začitać.",
	'batchuserrights-no-groups' => 'Njejsy žanu skupinu wubrał.
Tohodla so ničo njewukonja.
Zbytk strony so jenož začituje, zo by móhł lochko widźeć, hač jedne z wužiwarskich mjenow njeda so začitać.',
	'right-batchuserrights' => 'Jednoho wužiwarja abo wjacorych wužiwarjow jednej skupinje abo wjacorym skupinam naraz přidać',
	'action-batchuserrights' => 'jednoho wužiwarja abo wjacorych wužiwarjow jednej skupinje abo wjacorym skupinam naraz přidać',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'batchuserrights' => 'Derectos de usator in lot',
	'batchuserrights-desc' => 'Permitte adder un o plure usatores a un gruppo o a plure gruppos in un sol action',
	'batchuserrights-names' => 'Nomines de usator al quales adder iste gruppo (un per linea):',
	'batchuserrights-intro' => 'Iste pagina te permitte adder un gruppo a plure usatores insimul.
Pro motivos de securitate, le lista de gruppos addibile es definite in le configuration del extension e non pote esser cambiate ab intra le wiki.
Per favor demanda lo a un administrator de systema si tu ha besonio de permitter le addition in lot de altere gruppos.',
	'batchuserrights-single-progress-update' => 'Addeva {{PLURAL:$1|gruppo|gruppos}} a <strong>$2</strong>.',
	'batchuserrights-add-groups' => 'Adde {{PLURAL:$1|un usator|$1 usator}} al sequente {{PLURAL:$2|gruppo|gruppos}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Non poteva cargar le usator \"'''\$1'''\".",
	'batchuserrights-no-groups' => 'Tu non seligeva alcun gruppo.
Isto va complir nihil.
Le resto del pagina essera executate solmente a fin que tu pote vider facilemente si alcun del nomines de usator non poteva esser cargate.',
	'right-batchuserrights' => 'Adder un o plure usatores a un gruppo o a plure gruppos in un sol action',
	'action-batchuserrights' => 'adder un o plure usatores a un gruppo o a plure gruppos in un sol action',
);

/** Indonesian (Bahasa Indonesia)
 * @author Farras
 */
$messages['id'] = array(
	'batchuserrights-userload-error' => "Tidak bisa memuat pengguna \"'''\$1'''\".",
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'batchuserrights' => 'Aggiunta massiva diritti utente',
	'batchuserrights-desc' => 'Consente di aggiungere uno o più utenti ad un gruppo o più gruppi con una singola azione',
	'batchuserrights-names' => 'Nomi utente a cui aggiungere questo gruppo (uno per riga):',
	'batchuserrights-intro' => "Questa pagina ti permetterà di aggiungere un gruppo a più utenti contemporaneamente.
Per motivi di sicurezza, l'elenco dei gruppi aggiungibili si trova nella configurazione dell'estensione e non può essere modificato dall'interno del wiki.
Chiedi ad un amministratore di sistema se occorre consentire l'aggiunta massiva per altri gruppi.",
	'batchuserrights-single-progress-update' => '{{PLURAL:$1|Aggiunto un gruppo|Aggiunti i gruppi}} a <strong>$2</strong>.',
	'batchuserrights-add-groups' => '{{PLURAL:$1|Aggiunto un utente|Aggiunti $1 utenti}} {{PLURAL:$2|al gruppo|ai gruppi}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Impossibile caricare l'utente \"'''\$1'''\".",
	'batchuserrights-no-groups' => 'Non hai scelto alcun gruppo.
Questo non realizzerà nulla.
Il resto della pagina sarà eseguito solo perché così puoi facilmente vedere se uno dei nomi utente non può essere caricato.',
	'right-batchuserrights' => 'Aggiunge uno o più utenti ad un gruppo o più gruppi con una singola azione',
	'action-batchuserrights' => 'aggiungere uno o più utenti ad un gruppo o più gruppi con una singola azione',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Shirayuki
 */
$messages['ja'] = array(
	'batchuserrights' => '利用者の権限を一括処理',
	'batchuserrights-desc' => '1 人以上の利用者を 1 つ以上のグループに一度に追加できるようにする',
	'batchuserrights-names' => 'このグループを追加する利用者名 (各行に 1 人):',
	'batchuserrights-intro' => 'このページでは、複数の利用者にグループを一度に追加できます。
セキュリティ上の理由から、追加できるグループの一覧は拡張機能の設定で指定してあり、ウィキ内では変更できません。
他のグループを一括追加する必要がある場合は、システム管理者にお問い合わせください。',
	'batchuserrights-single-progress-update' => '<strong>$2</strong> に{{PLURAL:$1|グループ}}を追加しました。',
	'batchuserrights-add-groups' => '{{PLURAL:$1|利用者|$1 人の利用者}}を以下の{{PLURAL:$2|グループ}}に追加しています: <strong>$3</strong>',
	'batchuserrights-userload-error' => "利用者「'''$1'''」を読み込めませんでした。",
	'batchuserrights-no-groups' => 'グループが1つも選択されていません。
これでは何も実際には行われません。
以下はただ、利用者名の中に読み込めないものがあるかどうか簡単に確認できるように実行可能となっています。',
	'right-batchuserrights' => '1 人以上の利用者を複数のグループに一度に追加',
	'action-batchuserrights' => '1 人以上の利用者を複数のグループに一度に追加',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'batchuserrights' => '일괄 사용자 권한',
	'batchuserrights-desc' => '작업 하나에서 하나 이상의 그룹에 하나 이상의 사용자를 추가할 수 있습니다',
	'batchuserrights-names' => '이 그룹에 추가할 사용자 이름 (줄마다 하나):',
	'batchuserrights-intro' => '이 문서는 한 번에 여러 사용자에게 그룹을 추가하도록 합니다.
보안상의 이유로 추가할 수 있는 그룹의 목록은 확장 기능 설정에서 위키 안에서 바꿀 수 없도록 설정합니다.
다른 그룹을 일괄 추가하는 것을 허용하려면 시스템 관리자한테 부탁하세요.',
	'batchuserrights-single-progress-update' => '<strong>$2</strong>에 {{PLURAL:$1|그룹}}에 추가했습니다.',
	'batchuserrights-add-groups' => '{{PLURAL:$1|사용자 한 명|사용자 $1명}}을 다음 {{PLURAL:$2|그룹}}에 추가했습니다: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "\"'''\$1'''\" 사용자를 불러올 수 없습니다.",
	'batchuserrights-no-groups' => '그룹을 선택하지 않았습니다.
아무 것도 수행하지 않습니다.
문서의 나머지 부분은 사용자 이름 중 하나를 불러올 수 없으면 쉽게 볼 수 있게 실행하도록 허용합니다.',
	'right-batchuserrights' => '작업 하나의 그룹이나 여러 그룹에 하나 이상의 사용자를 추가',
	'action-batchuserrights' => '작업 하나의 그룹이나 여러 그룹에 하나 이상의 사용자를 추가',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'batchuserrights' => 'Metmaacherrääschde em Pöngel',
	'batchuserrights-desc' => 'Määd_et müjjelesch, Pöngelle vun Metmaacher en einem Rötsch en Jroppe ze donn.',
	'batchuserrights-names' => 'Metmaacher för en di Jropp ze donn, eine en jeede Reiih:',
	'batchuserrights-intro' => 'Heh kanns De Pöngele vun Metmaachere en einem Rötsch en Jropp donn.
Zor Sescherheid es di Leß met Jroppe beschrängk.
Donn ene Wiki_Könes froore, wann De mieh Jroppe heh han wells.',
	'batchuserrights-single-progress-update' => '<strong>$2</strong> es en {{PLURAL:$1|ein Jrop|$12 Jroppe|kein Jropp}} jekumme.',
	'batchuserrights-add-groups' => '{{PLURAL:$1|Eine Metmaacher|$1 Metmaacher|Keine Metmaacher}} es opjenumme woode en {{PLURAL:$2|de Jropp|de Jroppe|kein Jroppe}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Mer kunnte dä Metmaacher „'''$1'''“ nit laade.",
	'batchuserrights-no-groups' => 'Do häs kein Jropp ußjesooht.
Dat heh weet nx bränge.
Et läuf ävver bes_aan et Ängk.
Esu kanns De flögg eruß fenge, ov_ene Name vun enem Metmaacher nit laade kunnte.',
	'right-batchuserrights' => 'Ene Pöngel Metmaacher en einem Rötsch en Jroppe donn',
	'action-batchuserrights' => 'donn eine udder ene Pöngel Metmaacher en einem Rötsch en Jroppe',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'batchuserrights' => 'Benotzerrechter automatiséieren',
	'batchuserrights-desc' => 'Erlaabt et een oder méi Benotzer an enger Aktioun an eng Grupp oder méi Gruppen derbäizesetzen',
	'batchuserrights-names' => 'Benotzernimm fir an dëse Grupp derbäizesetzen (e pro Linn):',
	'batchuserrights-intro' => "Op dëser Säit kënnt Dir méi Benotzer mateneen bei eng Benotzergrupp derbäisetzen.
Aus Sécherheitsgrën ass d'Lëscht vu Benotzergruppen déi derbäigesat kënne ginn am Konfigurationsfichier  vun der Erweiderung festgeluecht a kann net vun dëser Wiki aus geännert ginn.
Frot w.e.g. e System-Administrateur wann dës Funktioun fir aner Benotzergruppe gebraucht gëtt.",
	'batchuserrights-single-progress-update' => '{{PLURAL:$1|Grupp|Gruppe}} bei <strong>$2</strong> derbäigesat.',
	'batchuserrights-add-groups' => '{{PLURAL:$1|Ee Benotzer gëtt|$1 Benotzer gi}} bei dës {{PLURAL:$2|Benotzergrupp|Benotzergruppen}} derbäigesat: <strong>$3</strong>',
	'batchuserrights-userload-error' => "De Benotzer \"'''\$1'''\" konnt net geluede ginn.",
	'batchuserrights-no-groups' => 'Dir hutt keng Gruppen erausgesicht.
Et gëtt näischt geännert.
De Rescht vun der Säit gëtt nei opgebaut sou datt Dir einfach gesi kënnt ob ee vun de Benotzernimm net konnt geluede ginn.',
	'right-batchuserrights' => 'Een oder méi Benotzer an enger Aktioun an eng oder méi Gruppen derbäisetzen',
	'action-batchuserrights' => 'een oder méi Benotzer an enger Aktioun an eng oder méi Gruppen derbäisetzen',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'batchuserrights-single-progress-update' => 'Pridėta {{PLURAL:$1| grupė | grupės}} į <strong>$2</strong> .',
	'batchuserrights-userload-error' => "Nepavyko įkelti naudotojo \"''' \$1 '''\".",
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'batchuserrights' => 'Групни кориснички права',
	'batchuserrights-desc' => 'Овозможува додавање на еден или повеќе корисници во група/и наеднаш',
	'batchuserrights-names' => 'Кориснички имиња кон кои треба да се додаде оваа група (по едно во секој ред):',
	'batchuserrights-intro' => 'Оваа страница ви овозможува да додадете група кон повеќе корисници наеднаш.
Од безбедносни причини, списокот на групи што може да се додаваат е сместена во поставките на додатокот и не може да се промени од викито.
Прашајте го системскиот администратор дали треба да дозволите групно додавање на други групи.',
	'batchuserrights-single-progress-update' => 'Додадени {{PLURAL:$1|група|групи}} кон <strong>$2</strong>.',
	'batchuserrights-add-groups' => '{{PLURAL:$1|Се додава еден корисник|Се додаваат $1 корисници}} кон {{PLURAL:$2|следнава група|следниве групи}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Не можев да го вчитам корисникот „'''$1'''“.",
	'batchuserrights-no-groups' => 'Не одбравте ниедна група.
Со ова нема да постигнете ништо.
Остатокот од страницата ќе работи и понатаму за да можете лесно да видите дали некое корисничко име не можело да се вчита.',
	'right-batchuserrights' => 'Додавање на еден или повеќе корисници во група повеќе групи наеднаш',
	'action-batchuserrights' => 'додавање на еден или повеќе корисници во група или повеќе групи наеднаш',
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'batchuserrights-userload-error' => "सदस्य '''''$1''''' चे प्रभारण करु शकलो नाही",
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'batchuserrights' => 'Hak pengguna kelompok',
	'batchuserrights-desc' => 'Membolehkan penambahan satu atau lebih pengguna ke dalam satu atau lebih kumpulan secara serentak',
	'batchuserrights-names' => 'Nama-nama pengguna untuk disertakan ke dalam kumpulan ini (seorang sebaris):',
	'batchuserrights-intro' => 'Laman ini akan membolehkan anda menyertakan lebih daripada satu pengguna ke dalam satu kumpulan sekaligus.
Demi keselamatan, senarai kumpulan yang boleh ditambah itu ditetapkan dalam tatarajah sambungan dan tidak boleh diubah dari dalam wiki.
Sila tanya pentadbir sistem jika anda perlu membenarkan penambahan kumpulan lain secara berkelompok.',
	'batchuserrights-single-progress-update' => '{{PLURAL:$1|Kumpulan|Kumpulan-kumpulan}} ditambahkan ke dalam <strong>$2</strong>.',
	'batchuserrights-add-groups' => '{{PLURAL:$1|Seorang pengguna|$1 orang pengguna}} sedang ditambahkan ke dalam {{PLURAL:$2|kumpulan|kumpulan-kumpulan}} berikut: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Pengguna \"'''\$1'''\" tidak dapat dimuatkan.",
	'batchuserrights-no-groups' => 'Anda belum memilih mana-mana kumpulan.
Ini tidak akan mendatangkan sebarang hasil.
Yang selebihnya dalam laman ini akan dibenarkan berjalan supaya anda mudah melihat sama ada terdapat nama pengguna yang tidak dapat dimuatkan.',
	'right-batchuserrights' => 'Menambahkan seorang atau berbilang pengguna ke dalam satu atau lebih kumpulan sekaligus',
	'action-batchuserrights' => 'menambahkan seorang atau berbilang pengguna ke dalam satu atau lebih kumpulan sekaligus',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'batchuserrights' => 'Drittijiet tal-utent għal ħafna',
	'batchuserrights-desc' => "Tħalli ż-żieda ta' wieħed jew iktar utenti fi grupp wieħed jew iktar b'azzjoni waħda",
	'batchuserrights-names' => "Ismijiet tal-utenti xi żżid ma' dan il-grupp (wieħed f'kull linja):",
	'batchuserrights-intro' => "Din il-paġna tippermettilek li żżid grupp lil diversi utenti f'daqqa.
Għal raġunijiet ta' sigurtà, il-lista ta' gruppi li jistgħu jiġu miżjuda tinsab fil-konfigurazzjoni tal-estensjoni u ma tistax tinbidel fi ħdan il-wiki.
Jekk jogħġbok staqsi amministratur tas-sistema jekk għandek bżonn iż-żieda bil-lott ta' gruppi oħra.",
	'batchuserrights-single-progress-update' => "{{PLURAL:$1|Grupp miżjud|Gruppi miżjuda}} f'<strong>$2</strong>.",
	'batchuserrights-add-groups' => '{{PLURAL:$1|Utent wieħed miżjud|$1 utenti miżjuda}} fil-{{PLURAL:$2|grupp|gruppi}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "L-utent \"'''\$1'''\" ma setax jiġi miżjud.",
	'batchuserrights-no-groups' => "Int m'għażilt l-ebda grupp.
Dan mhu se jagħmel xejn.
Il-kumplament tal-paġna se tkompli tiġi esegwita sabiex tkun tista' tara jekk kwalunkwe wieħed mill-ismijiet tal-utent ma jistgħux jiġu mtella'.",
	'right-batchuserrights' => "Iżid wieħed jew iktar utenti fi grupp wieħed jew iktar b'azzjoni waħda", # Fuzzy
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Audun
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'batchuserrights' => 'Puljeoppdater brukerrettigheter',
	'batchuserrights-desc' => 'Tillater å legge én eller flere brukere til en eller flere grupper i én handling',
	'batchuserrights-names' => 'Brukernavn som skal legges til denne gruppen (ett per linje):',
	'batchuserrights-intro' => 'Denne siden lar deg legge flere brukere til en gruppe samtidig.
Av sikkerhetsmessige årsaker, er listen over mulige grupper satt i utvidelseskonfigurasjonen og kan ikke endres fra wikien.
Vennligst spør en systemadministrator hvis du har behov for å tillate puljetillegging av andre grupper.',
	'batchuserrights-single-progress-update' => 'Lagt {{PLURAL:$1|gruppe|grupper}} til <strong>$2</strong>.',
	'batchuserrights-add-groups' => 'Legger {{PLURAL:$1|én bruker|$1 brukere}} til {{PLURAL:$2|den|de}} følgende {{PLURAL:$2|gruppen|gruppene}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Kunne ikke laste brukeren «'''$1'''».",
	'batchuserrights-no-groups' => 'Du valgte ingen grupper.
Dette vil ikke oppnå noe.
Resten av siden vil få lov til å kjøre slik at du enkelt kan se om noen av brukernavnene ikke kunnes lastes.',
);

/** Dutch (Nederlands)
 * @author McDutchie
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'batchuserrights' => 'Gebruikersrechtenbeheer (en masse)',
	'batchuserrights-desc' => 'Maakt het toevoegen van één of meerdere gebruikers aan een groep of groepen in één handeling mogelijk',
	'batchuserrights-names' => 'Gebruikersnamen om deze groep aan toe te voegen (één per regel):',
	'batchuserrights-intro' => 'Via deze pagina kunt u meerdere gebruikers tegelijkertijd aan een groep toevoegen.
Om beveiligingsredenen wordt de lijst met beschikbare groepen ingesteld in de instellingen van de uitbreiding en deze groepen kunnen niet vanuit de wiki gewijzigd worden.
Vraag hulp van een systeembeheerder als u de beschikbare groepen wilt wijzigen.',
	'batchuserrights-single-progress-update' => 'De {{PLURAL:$1|groep is|groepen zijn}} toegevoegd aan <strong>$2</strong>.',
	'batchuserrights-add-groups' => 'Bezig met het toevoegen van {{PLURAL:$1|één gebruiker|$1 gebruikers}} aan de volgende {{PLURAL:$2|groep|groepen}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "De gebruiker \"'''\$1'''\" kon niet geladen worden.",
	'batchuserrights-no-groups' => 'U hebt geen groepen gekozen.
Nu wordt er niets uitgevoerd.
De rest van de pagina kan uitgevoerd worden zodat u eenvoudig kunt zien of een van de gebruikersnamen niet geladen kon worden.',
	'right-batchuserrights' => 'Een of meerdere gebruikers aan meerdere groepen toevoegen in één handeling',
	'action-batchuserrights' => 'een of meerdere gebruikers aan meerdere groepen toe te voegen in één handeling',
);

/** Nederlands (informeel)‎ (Nederlands (informeel)‎)
 * @author Siebrand
 */
$messages['nl-informal'] = array(
	'batchuserrights-intro' => 'Via deze pagina kan je meerdere gebruikers tegelijkertijd aan een groep toevoegen.
Om beveiligingsredenen wordt de lijst met beschikbare groepen ingesteld in de instellingen van de uitbreiding en deze groepen kunnen niet vanuit de wiki gewijzigd worden.
Vraag hulp van een systeembeheerder als je de beschikbare groepen wilt wijzigen.',
	'batchuserrights-no-groups' => 'Je hebt geen groepen gekozen.
Nu wordt er niets uitgevoerd.
De rest van de pagina kan uitgevoerd worden zodat je eenvoudig kunt zien of een van de gebruikersnamen niet geladen kon worden.',
);

/** Polish (polski)
 * @author BeginaFelicysym
 * @author WTM
 */
$messages['pl'] = array(
	'batchuserrights' => 'Wsadowe uprawnienia użytkowników',
	'batchuserrights-desc' => 'Umożliwia dodawanie jednego lub więcej użytkowników do grupy lub kilku grup w ramach jednej akcji',
	'batchuserrights-names' => 'Nazwy użytkowników do dodania do tej grupy (po jednej w wierszu):',
	'batchuserrights-intro' => 'Ta strona pozwoli Ci dodać grupę do wielu użytkowników naraz.
Ze względów bezpieczeństwa lista możliwych do dodania grup jest ustawiona w konfiguracji rozszerzenia i nie można jej zmieniać w wiki.
Poproś administratora systemu jeśli należy zezwolić na dodawanie wsadowe innych grup.',
	'batchuserrights-single-progress-update' => 'Dodano {{PLURAL:$1| grupę|grupy|grupy}} do <strong>$2</strong>.',
	'batchuserrights-add-groups' => 'Dodawanie {{PLURAL:$1|jednego użytkownika|$1 użytkowników}} do {{PLURAL:$2|następującej grupy|następujących grup}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Nie można wczytać użytkownika \"'''\$1'''\".",
	'batchuserrights-no-groups' => 'Nie wybrano żadnych grup.
Wykonanie nie spowoduje żadnych zmian.
Pozostałą część strony będzie można uruchomić tylko po to, by dało się zobaczyć, czy wszystkie nazwy uzytkownikow mogą być załadowane.',
	'right-batchuserrights' => 'Dodawanie użytkownika lub kilku użytkowników do grupy lub do wielu grup w ramach jednej akcji',
	'action-batchuserrights' => 'dodawanie użytkownika lub kilku użytkowników do grupy lub do wielu grup w ramach jednej akcji',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'batchuserrights' => "Drit ëd j'utent për partìe",
	'batchuserrights-desc' => "A përmët ëd gionté un o pi utent a na partìa o a pi partìe con n'assion sola",
	'batchuserrights-names' => "Stranòm d'utent da gionté a costa partìa (un për linia):",
	'batchuserrights-intro' => "Sta pàgina a-j përmëttrà ëd gionté na partìa a vàire utent ant un colp.
Për rason ëd sicurëssa, la lista ëd partìe giontàbij a l'é ampostà ant la configurassion ëd l'estension e a peul pa esse cangià d'andrinta a la wiki.
Për piasì, ch'a ciama a n'aministrator ëd sistema s'a l'ha dabzògn ëd gionté a mucc d'àutre partìe.",
	'batchuserrights-single-progress-update' => 'Giontà {{PLURAL:$1|partìa|partìe}} a <strong>$2</strong>.',
	'batchuserrights-add-groups' => "Gionté {{PLURAL:$1|n'utent|$1 utent}} a {{PLURAL:$2|la partìa|le partìe}}  sì-dapress: <strong>$3</strong>.",
	'batchuserrights-userload-error' => "As peul pa carié l'utent \"'''\$1'''\".",
	'batchuserrights-no-groups' => "A l'ha sernù gnun-e partìe.
A sarà fàit gnente.
Ël rest ëd la pàgina a podrà giré mach an manera ch'a vëdda facilment se quaidun djë stranòm d'utent a peulo pa esse carià.",
	'right-batchuserrights' => "Gionté un o pi utent a na partìa o a partìe mùltiple con n'assion sola",
	'action-batchuserrights' => "gionté un o pi utent a na partìa o a partìe mùltiple con n'assion sola",
);

/** Portuguese (português)
 * @author Alchimista
 * @author Cainamarques
 * @author Hamilton Abreu
 * @author Luckas
 * @author Waldir
 */
$messages['pt'] = array(
	'batchuserrights' => 'Direitos de utilizador em lote',
	'batchuserrights-desc' => 'Permite adicionar um ou mais utilizadores a um grupo de uma só vez',
	'batchuserrights-names' => 'Nomes de utilizador a adicionar a este grupo (um por linha):',
	'batchuserrights-intro' => 'Esta página permite atribuir um grupo a vários utilizadores ao mesmo tempo.
Por razões de segurança, a lista dos grupos assim atribuíveis é definida na configuração da extensão e não pode ser alterada dentro da wiki.
Se precisa de acrescentar mais grupos atribuíveis, peça a um administrador.',
	'batchuserrights-single-progress-update' => '{{PLURAL:$1|O grupo foi atribuído|Os grupos foram atribuídos}} a <strong>$2</strong>.',
	'batchuserrights-add-groups' => 'A adicionar {{PLURAL:$1|um utilizador|$1 utilizadores}} {{PLURAL:$2|ao seguinte grupo|aos seguintes grupos}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Não foi possível carregar o utilizador \"'''\$1'''\".",
	'batchuserrights-no-groups' => 'Não escolheu nenhum grupo.
Isto não terá qualquer efeito.
Será permitida a execução do resto da página apenas para que possa verificar se não foi possível carregar algum dos utilizadores.',
	'right-batchuserrights' => 'Adicionar um ou mais utilizadores a um grupo ou vários grupos em uma única ação',
	'action-batchuserrights' => 'adicionar um ou mais utilizadores a um grupo ou vários grupos em uma única ação',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Cainamarques
 * @author Giro720
 * @author 555
 */
$messages['pt-br'] = array(
	'batchuserrights' => 'Direitos de usuários em lote',
	'batchuserrights-desc' => 'Permite adicionar um ou mais usuários a um ou mais grupos de uma só vez',
	'batchuserrights-names' => 'Nomes de usuários a adicionar a este grupo (um por linha):',
	'batchuserrights-intro' => 'Esta página permite atribuir um grupo a vários usuários ao mesmo tempo.
Por razões de segurança, a lista dos grupos assim atribuíveis é definida na configuração da extensão e não pode ser alterada dentro da wiki.
Se você precisar acrescentar mais grupos atribuíveis, peça a um administrador.',
	'batchuserrights-single-progress-update' => '{{PLURAL:$1|O grupo foi atribuído|Os grupos foram atribuídos}} a <strong>$2</strong>.',
	'batchuserrights-add-groups' => 'A adicionar {{PLURAL:$1|um usuário|$1 usuários}} {{PLURAL:$2|ao seguinte grupo|aos seguintes grupos}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Não foi possível carregar o usuário \"'''\$1'''\".",
	'batchuserrights-no-groups' => 'Você não escolheu nenhum grupo.
Isto não terá qualquer efeito.
Será permitida a execução do resto da página apenas para que você possa verificar se não foi possível carregar algum dos usuários.',
	'right-batchuserrights' => 'Adicionar um ou mais usuários a um grupo ou múltiplos grupos em uma única ação',
	'action-batchuserrights' => 'adicionar um ou mais usuários a um grupo ou múltiplos grupos em uma única ação',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'batchuserrights' => "Batch pe le deritte de l'utinde",
	'batchuserrights-desc' => "Permette de aggiungere une o cchiù utinde a 'nu gruppe jndr'à 'na botta sole",
	'batchuserrights-names' => 'Nome utinde da aggiungere a stu gruppe (une pe linèe):',
	'batchuserrights-intro' => "Sta pàgene te lasse aggiungere 'nu gruppe a cchiù utinde jndr'à 'na botte.
Pe mutive de securezze, l'elenghe de le gruppe ca se ponne aggiungere gruppe jè 'mbostate jndr'à configurazione de l'estenzione e non ge ponne essere cangiate da 'a uicchi.
Pe piacere cirche a 'n'amministratore de sisteme ce tu è abbesògne de permettere l'agiunde automateche de otre gruppe.",
	'batchuserrights-single-progress-update' => "Aggiunde {{PLURAL:$1|gruppe}} jndr'à <strong>$2</strong>.",
	'batchuserrights-add-groups' => "Stoche aggiunge {{PLURAL:$1|'n'utende|$1 utinde}} a {{PLURAL:$2|'u seguende |le seguende}} gruppe: <strong>$3</strong>.",
	'batchuserrights-userload-error' => "Non ge pozze carecà l'utende \"'''\$1'''\".",
	'batchuserrights-no-groups' => "Non g'è scacchiate nisciune gruppe.
Quiste non ge porte a ninde.
'U reste d'a pàgene avène eseguite 'u stesse accussì tu puè facilmende 'ndrucà ce qualche nome utende non ge pò essere carecate.",
	'right-batchuserrights' => "Permette de aggiungere une o cchiù utinde a 'nu gruppe jndr'à 'na botta sole",
	'action-batchuserrights' => "aggiunge une o cchiù utinde a 'nu gruppe jndr'à 'na botta sole",
);

/** Russian (русский)
 * @author DCamer
 * @author Eleferen
 * @author Lockal
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'batchuserrights' => 'Пакетное управление правами участников',
	'batchuserrights-desc' => 'Позволяет добавлять нескольких участников в группу или несколько групп за одно действие',
	'batchuserrights-names' => 'Учётные записи, для включения в группу (по одному на строке):',
	'batchuserrights-intro' => 'Эта страница позволяет добавить группу в сразу несколько участников.
По соображениям безопасности, список обрабатываемых групп устанавливается в настройках расширения и не может быть изменён в вики.
Пожалуйста, обратитесь к системному администратору, если вы хотите включить пакетное добавление для других групп.',
	'batchuserrights-single-progress-update' => '{{PLURAL:$1|1=Добавлена группа|Добавлены группы}} для <strong>$2</strong>.',
	'batchuserrights-add-groups' => 'Добавление {{PLURAL:$1|$1 участника|$1 участников}} в {{PLURAL:$2|1=следующую группу|следующие группы}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Не удалось загрузить участника '''«$1»'''.",
	'batchuserrights-no-groups' => 'Вы не выбрали группы.
Ничего не будет выполнено.
Оставшаяся часть страницы будет обработана, чтобы показать какие учётные записи не могут быть загружены.',
	'right-batchuserrights' => 'Добавить одного нескольких участников в группу или несколько групп за одно действие',
	'action-batchuserrights' => 'добавьте одного или нескольких участников в группу или несколько групп за одно действие',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'batchuserrights' => 'කාණ්ඩ පරිශීලක හිමිකම්',
	'batchuserrights-names' => 'මෙම සමූහය වෙත එක් කල යුතු පරිශීලක නාම (පෙළකට එක බැගින්):',
	'batchuserrights-userload-error' => "\"'''\$1'''\" පරිශීලක පූරණය කල නොහැක.",
);

/** Slovak (slovenčina)
 * @author Sudo77(new)
 */
$messages['sk'] = array(
	'batchuserrights' => 'Dávkové pridelenie používateľských práv',
);

/** Swedish (svenska)
 * @author Hangsna
 * @author Jopparn
 * @author LittleGun
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'batchuserrights-desc' => 'Gör det möjligt att lägga till en eller flera användare till en grupp eller flera grupper i en och samma åtgärd',
	'batchuserrights-names' => 'Användarnamn som ska läggas till gruppen (en per rad):',
	'batchuserrights-intro' => 'På den här sidan kan du lägga till flera användare i en grupp samtidigt.
Av säkerhetsskäl är listan över möjliga grupper bestämd av tilläggskonfigurationen från wikin.
Fråga en system administratör om har behov av att lägga till flera användare samtidigt till en annan grupp.',
	'batchuserrights-single-progress-update' => 'Lade till {{PLURAL:$1|grupp|grupperna}} till <strong>$2</strong>.',
	'batchuserrights-add-groups' => 'Lägger till {{PLURAL:$1|en användare|$1 användare}} till följande {{PLURAL:$2|grupp|grupper}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Kunde inte läsa in användaren \"'''\$1'''\".",
	'batchuserrights-no-groups' => 'Du valde inte några grupper.
Detta kommer inte att göra någonting.
Resten av sidan kommer tillåtas köra så att du enkelt kan se om något av användarnamnen inte kunde laddas.',
	'right-batchuserrights' => 'Lägg till en eller flera användare till en grupp eller flera grupper i en åtgärd',
	'action-batchuserrights' => 'lägga till en eller fler användare i en grupp eller i multipla grupper samtidigt',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'batchuserrights' => 'Mga karapatan ng tagagamit ng langkay',
	'batchuserrights-desc' => 'Nagpapahintulot ng pagdaragdag ng isa o mas marami pang mga tagagamit sa isang pangkat o marami pang mga pangkat sa pamamagitan ng isang galaw',
	'batchuserrights-names' => 'Mga pangalan ng tagagamit na pagdaragdagan ng pangkat na ito (isa bawat guhit):',
	'batchuserrights-intro' => 'Ang pahinang ito ay kaagad na magpapahintulot sa iyo na magdagdag ng isang pangkat sa maramihang mga tagagamit.
Para sa mga kadahilanang pangkaligtasan, ang talaan ng maidaragdag na mga pangkat ay nakatakda sa kaayusan ng dugtong at hindi mababago sa loob ng wiki.
Mangyaring makipag-ugnayan sa isang tagapangasiwa ng sistema kung kailangan mong pahintulutan ang pagdaragdag ng langkay ng ibang mga pangkat.',
	'batchuserrights-single-progress-update' => 'Nagdagdag ng {{PLURAL:$1|pangkat|mga pangkat}} sa <strong>$2</strong>.',
	'batchuserrights-add-groups' => 'Nagdaragdag ng {{PLURAL:$1|isang tagagamit|$1 mga tagagamit}} sa sumusunod na {{PLURAL:$2|pangkat|mga pangkat}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Hindi maikarga ang tagagamit na \"'''\$1'''\".",
	'batchuserrights-no-groups' => 'Hindi ka pumili ng alin mang mga pangkat.
Hindi ito makagagawa ng anumang bagay.
Ang natitirang bahagi ng pahina ay papahintulutang tumakbo upang maginhawa mong makita kung ang alin man sa mga pangalan ng tagagamit ay hindi maikakarga.',
	'right-batchuserrights' => 'Nagdaragdag ng isa o marami pang mga tagagamit sa isang pangkat o marami pang mga pangkat sa pamamagitan ng isang galaw', # Fuzzy
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 * @author Base
 * @author Steve.rusyn
 * @author SteveR
 * @author Ата
 * @author Тест
 */
$messages['uk'] = array(
	'batchuserrights' => 'Пакетне управління правами користувачів',
	'batchuserrights-desc' => 'Дозволяє додавати одного або декількох користувачів в одну або декілька груп за одну дію',
	'batchuserrights-names' => 'Імена користувачів для включення до групи (по одному на рядок):',
	'batchuserrights-intro' => 'На цій сторінці Ви можете додати до групи декількох користувачів одразу.
З міркувань безпеки список доступних груп встановлений у налаштуваннях розширення і не може бути змінений у вікі.
Зверніться до системного адміністратора, якщо вам потрібно ввімкнути пакетне додавання для інших груп.',
	'batchuserrights-single-progress-update' => 'Додано {{PLURAL:$1|1=групу|групи}} для <strong>$2</strong>.',
	'batchuserrights-add-groups' => 'Додавання {{PLURAL:$1|1=користувача|$1 користувачів}} до {{PLURAL:$2|1=наступної групи|наступних груп}}: <strong>$3</strong>.',
	'batchuserrights-userload-error' => "Не вдалось завантажити користувача «'''$1'''».",
	'batchuserrights-no-groups' => 'Ви не вибрали ніяких груп.
Нічого не буде виконано.
Решту сторінки буде оброблено, щоб показати користувачів, яких не можна завантажити.',
	'right-batchuserrights' => 'Додавання одного чи кількох користувачів до однієї чи декількох груп за одну дію',
	'action-batchuserrights' => 'додавання одного або декількох користувачів в одну або декілька груп за одну дію',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hydra
 * @author Hzy980512
 * @author Linforest
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'batchuserrights' => '批处理的用户权限',
	'batchuserrights-desc' => '允许一次将一个或多个用户添加到一个组或多个组',
	'batchuserrights-names' => '添加至该组的用户（每行一个）：',
	'batchuserrights-intro' => '本页让您能一次将一个或多个用户添加到一个或多个用户组。
出于安全原因，可添加的组是在扩展配置中设定，且无法在本wiki内更改。
如果您要批量添加其他用户组，请询问系统管理员。',
	'batchuserrights-single-progress-update' => '已添加{{PLURAL:$1|用户组|用户组}}到<strong>$2</strong>。',
	'batchuserrights-add-groups' => '添加$1个用户到如下{{PLURAL:$2|用户组|用户组}}：<strong>$3</strong>。',
	'batchuserrights-userload-error' => "无法加载用户\"'''\$1'''\"。",
	'batchuserrights-no-groups' => '您没有选择任何用户组。
这将什么都不做。
页面的剩余部分将继续运行，以便让您能看到是否有任何用户名不能被加载。',
	'right-batchuserrights' => '一次将一个或多个用户添加到一个或多个用户组',
	'action-batchuserrights' => '一次将一个或多个用户添加到一个或多个用户组',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Justincheng12345
 * @author Shirayuki
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'batchuserrights' => '批處理的用戶權限',
	'batchuserrights-desc' => '允許一次將一個或多個用戶添加到一個組或多個組',
	'batchuserrights-names' => '添加至該組的用戶（每行一個）：',
	'batchuserrights-intro' => '本頁讓您能一次將數名用戶添加至一個用戶權限組。
出於安全原因，可供添加的用戶權限組由擴展中設置，而且無法於維基內作出更改。
如果您要批量添加其他用戶權限組，請詢問系統管理員。',
	'batchuserrights-single-progress-update' => '已添加{{PLURAL:$1|用戶組}}到<strong>$2 </strong>。',
	'batchuserrights-add-groups' => '添加$1名用戶至以下{{PLURAL:$2|用戶權限組}}：<strong>$3</strong>。',
	'batchuserrights-userload-error' => "無法加載用戶\"'''\$1'''\"。",
	'batchuserrights-no-groups' => '您沒有選擇任何用戶權限組。
這將會使甚麼也不會做。
頁面的剩餘部分將繼續運行，以便讓您看到是否有任何用戶名無法加载。',
	'right-batchuserrights' => '一次過將一個或多個用戶添加到一個或多個用戶權限組',
	'action-batchuserrights' => '一次過將一個或多個用戶添加到一個或多個用戶權限組',
);
