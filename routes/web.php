<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'LoginController@index');
Route::get('/contact','LoginController@contact');
Route::get('/logout','LoginController@logout');
Route::post('/customlogin','LoginController@login');
Route::get('/loginWithGoogle','LoginController@loginWithGoogle');
Route::get('/loginWithFacebook','LoginController@loginWithFacebook');
Route::get('/sociallogin','LoginController@sociallogin');
Route::get('/googlesociallogin','LoginController@googlesociallogin');


Auth::routes();

Route::group(['prefix'=>'preview'],function(){
    Route::get('/','PreviewController@index');
    Route::get('/enterprise/{eid}','PreviewController@enterprise');
    Route::get('/documents/{id}/{eid}','PreviewController@planSubDocs');
    Route::get('/viewDoc/{sid}/{dtid}','PreviewController@viewDoc');
});

Route::group(['prefix' => 'print'],function(){
    Route::post('/','PrintController@index');
});


Route::group(['prefix' => 'home', 'middleware' => 'auth'], function(){
    Route::get('/', 'HomeController@index');
    Route::get('/enterprisesecond','HomeController@enterprisesecond');
    Route::get('/secondstep','HomeController@secondstep');
    Route::post('/submitEnterprise','HomeController@submitEnterprise');
    Route::get('/MyEnterprises','HomeController@MyEnterprises');
    Route::get('/senterprise/{id}','HomeController@SingelEnterprise');
    Route::get('/addEnterpriseUser/{id}','HomeController@addEnterpriseUser');
    Route::get('/adduser/{id}','HomeController@addUserForm');
    Route::get('/users','HomeController@allUsers');
    Route::get('/editUserForm/{id}','HomeController@editUserForm');
    Route::get('/addenterprise', 'HomeController@createEnterprise');
    Route::get('/ideasBySkill/{id}', 'HomeController@fetchIdeasBySkillId');
    Route::post('/submitEnterPriseUserForm','HomeController@submitEnterPriseUserForm');
    Route::post('/submitEditForm','HomeController@submitEditForm');
    Route::get('/deleteUser/{id}','HomeController@deleteUser');
    Route::get('/enterpriseContacts/{id}','HomeController@enterpriseContacts');
    Route::get('/addContactForm/{id}','HomeController@addContactForm');
    Route::post('/submitEnterPriseContactForm','HomeController@submitEnterPriseContactForm');
    Route::get('/editContact/{id}','HomeController@editContactForm');
    Route::post('/submitEditContactForm','HomeController@submitEditContactForm');
    Route::get('/deleteContact/{id}','HomeController@deleteContact');
    Route::get('/contacts','HomeController@menuContacts');
    Route::get('/documents','HomeController@documents');
    Route::get('/enterpriseDocs/{id}','HomeController@enterpriseDocs');
    Route::get('/doctype/{id}/{eid}','HomeController@documentsByType');
    Route::get('/createdoc/{sdid}/{dtid}/{eid}','HomeController@createdoc');
    Route::post('/processDocument','HomeController@processDocument');
    Route::get('/viewDoc/{id}','HomeController@viewDocument');
    Route::get('/editDocument/{id}','HomeController@editDocument');
    Route::post('/processDocumentEditForm','HomeController@processDocumentEditForm');
    Route::get('/deleteDocument/{id}','HomeController@deleteDocument');
    Route::get('/dEnterprise/{id}','HomeController@dEnterprise');
    Route::get('/msg/{id}','HomeController@msg');
    Route::get('/singlemsg/{msg_id}/{sender_eid}/{r_eid}','HomeController@singleMsg');
    Route::get('/composemsg/{sender_e_id}/{reciever_e_id}','HomeController@composeMsg');
    Route::post('/addEnterpriseDoc','HomeController@addEnterpriseDoc');
    Route::post('/addSubDocPlan','HomeController@addSubDocPlan');
    Route::get('/unfollow/{id}','HomeController@unfollow');
    Route::get('/followMatched/{follower_e_id}/{followed_e_id}/{follower_user_id}/{followed_user_id}','HomeController@followMatched');
    Route::get('/chatwithEnterprise/{follower_id}/{followed_id}','HomeController@chatWithEnterprise');
    Route::get('/deleteMsg/{id}','HomeController@deleteMsg');
    Route::post('/sendmsg','HomeController@sendMsg');
    Route::post('/sendmsgg','HomeController@sendMsgg');
    Route::get('/enterpriseSentMsgs/{follower_id}/{followed_id}','HomeController@chatWithEnterpriseSent');
    Route::get('/editProfile','HomeController@editProfile');
    Route::post('/submitProfile','HomeController@submitProfile');
    Route::post('/submitProfileImage','HomeController@submitProfileImage');
    Route::post('/submitProfileAccount','HomeController@updateAccount');
    Route::get('/profile','HomeController@UserProfile');
    Route::post('/invite', 'HomeController@invite');
    Route::get('/deleteCreatedPlan/{id}','HomeController@deleteCreatedPlan');
    Route::get('/upgrade','HomeController@upgrade');
    Route::get('/upgrade/startup','HomeController@startUp');
    Route::post('/pay','HomeController@redirectToGateway');
    Route::post('/free','HomeController@downToFree');
    Route::get('/calendar','HomeController@calendar');
    Route::post('/addevent','HomeController@addevent');
    Route::get('/learningresource','HomeController@learningresource');
    Route::get('/viewResource/{id}','HomeController@viewResource');
    
});
Route::post('/pay', 'HomeController@redirectToGateway')->name('pay');
Route::post('/enterprisepay', 'HomeController@redirectToGateway')->name('enterprisepay');
Route::get('/payment/made', 'HomeController@handleGatewayCallback');
Route::get('/fblogin','HomeController@redirectToProvider');


Route::group(['prefix' => 'admin', 'middleware' => 'AdminAuth'],function(){
Route::get('/','Admin@index');
Route::get('/skills','Admin@skills');
Route::get("/updateSkillTitle/{skill_id}/{value}",'Admin@updateSkillTitle');
Route::get("/updateSkilldesc/{skill_id}/{value}",'Admin@updateSkilldesc');
Route::get("/editSkill/{id}",'Admin@editSkill');
Route::get("/addskill",'Admin@addskill');
Route::get("/bidea",'Admin@preferredBusinessIdea');
Route::get("/addidea",'Admin@addIdea');
Route::post("/addskillForm",'Admin@addskillForm');
Route::post("/editskillform",'Admin@editskillform');
Route::post('/addideaForm','Admin@addIdeaForm');
Route::get('/editPidea/{id}','Admin@editIdea');
Route::get('deleteIdea/{id}','Admin@deleteIdea');
Route::post('/editideaForm','Admin@editideaForm');
Route::get('/users','Admin@users');
Route::get('/deleteUser/{id}','Admin@deleteUser');
Route::get('/enterprises','Admin@enterprises');
Route::get('/deleteEnterprise/{id}','Admin@deleteEnterprise');
Route::get('/learningresources','Admin@learningresources');
Route::get('/deleteResource/{id}','Admin@deleteResource');
Route::get('/addresource','Admin@addresource');
Route::post('/submitResource','Admin@submitResource');
Route::post('/readmore','Admin@readmore');
Route::get('/documents','Admin@documents');
Route::get('adddoc','Admin@adddoc');
Route::post('/submitDoc','Admin@submitDoc');
Route::get('/addsubdoc/{id}','Admin@addsubdoc');
Route::post('/submitSubDoc','Admin@submitSubDoc');
Route::get('/viewSubDocs/{id}','Admin@viewSubDocs');
Route::get('/settings','Admin@settings');
Route::post('/updateEmailUsername','Admin@updateEmailUsername');
Route::post('/updateAccount','Admin@updateAccount');
Route::get('/viewEnterprise/{id}','Admin@viewEnterprise');
Route::get('/deleteEnterpriseUser/{id}','Admin@deleteEnterpriseUser');
Route::get('/enterprisedocs/{id}','Admin@enterprisedocs');
Route::get('/enterpriseviewdocs/{id}','Admin@enterpriseviewdocs');
Route::get('/deleteSubDocDoc/{id}','Admin@deleteSubDocDoc');
Route::get('/deleteSubDoc/{id}','Admin@deleteSubDoc');
Route::get('/deleteDocType/{id}','Admin@deleteDocType');

});
