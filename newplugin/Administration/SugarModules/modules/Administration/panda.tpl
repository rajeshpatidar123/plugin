

<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
        <form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=panda&do=save">

    <span class='error'>{$error.main}</span>

    <table width="100%" cellpadding="0" cellspacing="1" border="0" class="actionsContainer">
        <tr>
            <td>
                {$BUTTONS}
            </td>
        </tr>
    </table>

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr><th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_AUTHENTICATION_SETTINGS}</h4></th></tr>
        <tr>
            <td  scope="row" width="10%" style="text-align: center;">{$MOD.LBL_PANDA_APP_NAME}: </td>
            <td width="25%" >
                <input type='text' size='50' name='panda_app_name' value='{$config.panda_app_name}' >
            </td>
        
            <td  scope="row" width="10%" style="text-align: center;">{$MOD.LBL_PANDA_CLIENT_ID}: </td>
            <td width="25%">
                <input type='text'  size='50' name='panda_client_id' value='{$config.panda_client_id}' >
            </td>
        </tr>
        <tr>
            <td  scope="row" width="10%" style="text-align: center;">{$MOD.LBL_PANDA_APP_SECRETE}: </td>
            <td  width="25%">
                <input type='text' size='50' name='panda_app_secrete' value='{$config.panda_app_secrete}' >
            </td>
        
   
            <td  scope="row" width="10%" style="text-align: center;">{$MOD.LBL_PANDA_REDIRECT_URL}: </td>
            <td width="25%" >
                <input type='text' size='50' name='panda_redirect_url' value='{$config.panda_redirect_url}' >
            </td>
        </tr>
   
    
        <tr>
            <td  scope="row" width="10%"style="text-align: center;" >{$MOD.LBL_DocumentId}: </td>
            <td  width="25%">
                <input type='text' size='50' name='DocumentId' value='{$config.DocumentId}' >
            </td>
            <td  scope="row" width="10%"style="text-align: center;" >{$MOD.LBL_QouteDocumentId}: </td>
            <td  width="25%">
                <input type='text' size='50' name='QouteDocumentId' value='{$config.QouteDocumentId}' >
            </td>
        </tr>
        <tr>
            <td  scope="row" width="10%"style="text-align: center;" >{$MOD.LBL_user_first_name}: </td>
            <td  width="25%">
                <input type='text' size='50' required="required" name='user_first_name' value='{$config.user_first_name}' >
            </td>
            <td  scope="row" width="10%"style="text-align: center;" >{$MOD.LBL_user_last_name}: </td>
            <td  width="25%">
                <input type='text' size='50' required="required" name='user_last_name' value='{$config.user_last_name}' >
            </td>
        </tr>
        <tr>
            <td  scope="row" width="10%"style="text-align: center;" >{$MOD.LBL_user_email}: </td>
            <td  width="25%">
                <input type='email' size='50' required="required" name='user_email' value='{$config.user_email}' >
            </td>
            <td  scope="row" width="10%"style="text-align: center;" >{$MOD.LBL_sendbox_key}: </td>
            <td  width="25%">
                <input type='text' required="required" size='50' name='sendbox_key' value='{$config.sendbox_key}' >
            </td>
        </tr>
    </table>
   

    <div style="padding-top: 2px;">
        {$BUTTONS}
    </div>
    {$JAVASCRIPT}
</form> 
    </div>  
</div>
