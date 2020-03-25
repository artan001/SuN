<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * custom constant file 
 * Create by powerbeer
 * 
 */ 

define('UPLOAD_PATH',"userdata" .DIRECTORY_SEPARATOR);

define('FILE_ATTACH_PATH',"file_attach" .DIRECTORY_SEPARATOR);

//define('AUTH_CLASS_PUBLIC' ,json_encode(array("user","login","verifycode")));



//define('SMS_SERVICE_HOST', 'http://bkkpcc.nhso.go.th/PCCWebService/jaxrs/SMSService/send'); // sms host for production

//define('APP_NAME_TITLE', 'e-BKKRegister'); // login
//define('APP_TITLE', 'e-BKKRegister'); // login
//
//
//
//Page
//define('LOGIN_PAGE', 'login'); // login
//message
//define('STATUS_SUCCESS', 'success'); // success
//define('STATUS_ERROR', 'error'); //   errors
//
//Log
define('LOG_WITH_SYSTEM', 1); //   errors
define('LOG_WITH_USER', 2); //   errors
define('TABLE_LOG','PCC_AUTHEN_LOG'); //Table Log
//template
define('TEMPLATE_LOGIN', 'template/template-login'); //  
define('TEMPLATE_MANE', 'template/template_mane'); //  
define('TEMPLATE_BLANK', 'template/template-blank'); //  
define('TEMPLATE_MAP', 'template/template-map'); //  
define('SITE_MENU_USER_PAGE', 'site-menu-user');
define('SITE_MENU_PROFILE_PAGE', 'site-menu-profile');

////ui definde
//define('ALERT_SUCCESS', 'alert-success');
//define('ALERT_DANGER', 'alert-danger');
//define('ALERT_WARNING', 'alert-warning');
//
////message
//define('MESSAGE_CREATE_COMPLETE', 'บันทึกข้อมูลเรียบร้อย');
//define('MESSAGE_UPDATE_COMPLETE', 'บันทึกข้อมูลเรียบร้อย');
//define('MESSAGE_REGISTER_ERROR', 'ลงทะเบียนใหม่เรียบร้อย');
//define('MESSAGE_UPDATE_ERROR', 'ปรับปรุงข้อมูลเรียบร้อย');
//define('MESSAGE_DELETE_COMPLETE', 'ลบข้อมูลเรียบร้อย');
//define('MESSAGE_DELETE_ERROR', 'ไม่สามารถยกเลิกข้อมูลได้');
//define('MESSAGE_SEARCH_NOTFOUND', 'ไม่พบข้อมูลที่กำลังค้นหา');
//
////*command   */
//define('CMD_CREATE', 'CREATE');
//define('CMD_UPDATE', 'UPDATE');
//define('CMD_DELETE', 'DELETE');
//
// 
//define('AGE_GROUP_ARR', json_encode(array("1"=>"สตรีและเด็กปฐมวัย 0-5 ปี","2"=>"เด็กวัยเรียน 5-14 ปี","3"=>"วัยรุ่น/นักศึกษา 15-21 ปี","4"=>"วัยทำงาน 15-59 ปี","5"=>"กลุ่มผู้สูงอายุ 60 ปีขึ้นไปและผู้พิการ") ));
//
//define('DISTRICT_JSON',json_encode(array(
//            "1041"=>"เขตหลักสี่",
//            "1036"=>"เขตดอนเมือง",
//            "1035"=>"เขตจอมทอง",
//            "1020"=>"เขตบางกอกน้อย",
//            "1038"=>"เขตลาดพร้าว",
//            "all"=>"ทั้งหมด")) 
//         );
//
//define('CHRONIC_TYPE',json_encode(array(
//            "1"=>"เบาหวาน",
//            "2"=>"ความดัน")) 
//         );
//
//define('DISTRICT_CODE_JSON',json_encode(array(
//            "1041",
//            "1036",
//            "1035",
//            "1020",
//            "1038"))
//         );
//
//
//define('QOF_TITLE',json_encode(array(
//            "1"=>"ร้อยละของหญิงตั้งครรภ์ได้รับการฝากครรภ์ครบ 5 ครั้งตามเกณฑ์ (ทุกสิทธิ)",
//            "2"=>"ร้อยละของประชากรไทย อายุ 15 ปีขึ้นไป ได้รับการคัดกรองความเสี่ยงในกลุ่มภาวะโรคเมตาบอลิก(Metabolic Disease)",
//            "3"=>"การตรวจคัดกรองมะเร็งปากมดลูกในสตรี อายุ 30-60 ปี รายใหม่",
//            "4"=>"การลดลงของอัตราการนอนโรงพยาบาลของผู้ป่วย DM ด้วยภาวะที่ควรควบคุมได้ด้วยบริการผู้ป่วยนอก (สิทธิ UC)"))
//         );
//
//define('DISTRICT_ALL', 'all');
//
//define('LIMIT_IMPORT_DM_HT', 16000);
//
//define("PER_PAGE",20);
//
//define("DANGER","danger");
//define("SUCCESS","success");
//define("ERROR","error");
//define("INFO","info");
//define("PRIMARY","primary");
//
//
//define("MESSAGE_VERIFY","ใช้รหัส <OTP [[OTPCODE]]> ยืนยันตัวตน Refcode : [[REFCODE]]");
//
//
//define('USER_STATUS_DESC', json_encode(array("0"=>"ถูกยกเลิกการใช้งาน","1"=>"รอตรวจสอบ","2"=>"ใช้งานได้") ));
//define('USER_TYPE_DESC', json_encode(array("1"=>"Admin","2"=>"Manager","3"=>"User หน่วยบริการ") ));
//define('SERVICE_STATUS', json_encode(array("1"=>"รอตรวจสอบ","2"=>"อนุมัติเรียบร้อย","3"=>"ไม่อนุมัติ") ));
//
//define("LIMIT_SMS_QUOTA", 3);


?>