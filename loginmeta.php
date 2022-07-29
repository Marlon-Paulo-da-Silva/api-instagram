<?php
include('app/defines.php');

$facebook_id = FACEBOOK_APP_ID2;

// echo $facebook_id;
// die();
?>

<!DOCTYPE html>
<html>
<head>
<title>Facebook Login JavaScript Example</title>
<meta charset="UTF-8">
</head>
<body>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v14.0&appId=<?php echo $facebook_id ?>&autoLogAppEvents=1" nonce="7Wt7DRcm"></script>
<script>

  function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('statusChangeCallback');
    console.log(response);                   // The current login status of the person.
    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
      console.log('Esse e o Token quando checa se está conectado: ',response.authResponse.accessToken);
      testAPI();  

    } else {                                 // Not logged into your webpage or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this webpage.';
    }
  }


  function checkLoginState() {               // Called when a person is finished with the Login Button.
    FB.getLoginStatus(function(response) {   // See the onlogin handler
      statusChangeCallback(response);
    });
  }


  // window.fbAsyncInit = function() {
  //   FB.init({
  //     appId      : 'FACEBOOK_APP_ID2',
  //     cookie     : true,                     // Enable cookies to allow the server to access the session.
  //     xfbml      : true,                     // Parse social plugins on this webpage.
  //     version    : 'v14.0'           // Use this Graph API version for this call.
  //   });

   


  //   FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
  //     statusChangeCallback(response);        // Returns the login status.
  //   });
  // };
 
  function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Fez o login com sucesso: ' + response.name);
      
      document.getElementById('status').innerHTML =
        'Agradeço por ter logado, ' + response.name + '!';

      document.getElementById('status').innerHTML =
        // 'Agradeço por ter logado, ' + response.name + '!<br /><br />Seu Acess Token é:<br /><input value="' + response + '" />';
        'Agradeço por ter logado, ' + response.name + '!<br /><br />';
    });
  }

</script>


<!-- The JS SDK Login Button -->
<!-- 
<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button> -->

<div class="fb-login-button" scope="public_profile,pages_read_engagement,email,instagram_basic,pages_show_list,ads_management,business_management,instagram_content_publish" onlogin="checkLoginState();" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false"></div>

<div id="status">
</div>

<!-- Load the JS SDK asynchronously -->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
</body>
</html>