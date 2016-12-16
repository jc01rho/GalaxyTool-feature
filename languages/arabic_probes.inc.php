<?php 

@include_once "english_probes.inc.php";

$moon_name = "قمر";
$report_when = "في";

$top_array = array(
"موارد على الكوكب الأصلي" => R_RESOURCES,
"أساطيل" => F_FLEET,
"الدفاع" => D_DEFENCE,
"بنايات" => B_BUILDINGS,
"الأبحاث" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/***************************  Resources  *****************************/
/*********************************************************************/
"معدن" => R_METAL,
"بلور" => R_CRYSTAL,
"ديوتريوم" => R_DEUTERIUM,
"الطاقة" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"الناقل الصغير" => F_SMALLCARGOSHIP,
"الناقل الكبير" => F_LARGECARGOSHIP,
"مقاتلة خفيفة" => F_LIGHFIGHTER,
"مقاتلة ثقيلة" => F_HEAVYFIGHTER,
"الطراد" => F_CRUISER,
"مركبة حربية" => F_BATTLESHIP,
"مركبة الاستيطان" => F_COLONYSHIP,
"مركبة التدوير" => F_RECYCLER,
"مسبار التجسس" => F_ESPIONAGEPROBE,
"قاذفة القنابل" => F_BOMBER,
"المدمر" => F_DESTROYER,
"نجمة الموت" => F_DEATHSTAR,
"المطارد" => F_BATTLECRUISER,
"أقمار الطاقة الشمسية" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"قاذف الصواريخ" => D_MISSILELAUNCHER,
"مدفعية ليزر خفيفة" => D_SMALLLASER,
"مدفعية ليزر ثقيلة" => D_HEAVYLASER,
"مدفعية الأيونات" => D_IONCANNON,
"قاذف غاوس" => D_GAUSSCANNON,
"قاذف البلازما" => D_PLASMACANNON,
"الدرع الصغير" => D_SMALLSHIELDDOME,
"الدرع الكبير" => D_LARGESHILDDOME,
"صواريخ مضادة" => D_ANTIBALLISTICMISSILE,
"الصواريخ العابرة للكواكب" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"منجم المعدن" => B_METALMINE,
"منجم البلور" => B_CRYSTALMINE,
"مصنع الديوتريوم" => B_DEUTERIUMSYNTHESIZER,
"محطة الطاقة الشمسية" => B_SOLARPLANT,
"محطة الانصهار الطاقي" => B_FUSIONPLANT,
"مصنع الروبوتات" => B_ROBOTFACTORY,
"مصنع النانيت" => B_NANITEFACTORY,
"المصنع الفضائي" => B_SHIPYARD,
"عنبر المعدن" => B_METALSTORAGE,
"عنبر البلور" => B_CRYSTALSTORAGE,
"خزان الديوتيريوم" => B_DEUTERIUMTANK,
"مختبر الأبحاث" => B_RESAERCHLAB,
"المحول الأرضي" => B_TERRAFORMER,
"مستودع التمويل" => B_ALLIANCEDEPOT,
"مخزن الصواريخ" => B_ROCKETSILO,
"القاعدة القمرية" => B_LUNARBASE,
"أنامل الاستشعار" => B_SENSORPHALANX,
"بوابة القفز الفضائي" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"تكنولوجيا التجسس" => RS_ESPIONAGE,
"تكنولوجيا الحاسوب" => RS_COMPUTER,
"تكنولوجيا الأسلحة" => RS_WEAPON,
"تكنولوجيا الدروع" => RS_SHIELDING,
"تكنولوجيا تصفيح المركبات الفضائية" => RS_ARMOUR,
"تكنولوجيا الطاقة" => RS_ENERGY,
"تكنولوجيا الأبعاد المُتعددة" => RS_HYPERSPACE,
"محرك الاحتراق" => RS_COMBUSTIONENGINE,
"المفاعل النبضي" => RS_IMPULSEENGINE,
"محرك دفع متعدد الأبعاد" => RS_HYPERSPACEENGINE,
"تكنولوجيا الليزر" => RS_LASER,
"تكنولوجيا الأيونات" => RS_ION,
"تكنولوجيا البلازما" => RS_PLASMA,
"شبكة أبحاث المجرات" => RS_IRNETWORK,
"الفيزياء الفلكية" => RS_EXPEDITION,
"تكنولوجيا الجرافيتون" => RS_GRAVITON
);

?>