<!-- <?php include('curl.php');?> -->



<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <title>Inicial</title>

</head>

<body>

<script>

  window.fbAsyncInit = function() {

    FB.init({

      appId            : '742408203636033',

      autoLogAppEvents : true,

      xfbml            : true,

      version          : 'v14.0'

    });



    FB.login(function(response) {

      if (response.authResponse) {

      console.log('Welcome!  Fetching your information.... ');

      FB.api('/me', function(response) {

        console.log('Good to see you, ' + response.name + '.');

      });

      } else {

      console.log('User cancelled  login or did not fully authorize.');

      }

    });

  };

</script>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

  

  <div class="layout">

    <img style="width: 150px;" src="https://logodownload.org/wp-content/uploads/2021/10/meta-logo.png" alt="meta" srcset="">

    <div class="conectarml">

        <?php if(isset($_SESSION['integracao']) == 'ativa'): ?>

          <div style="text-align: center;" class="integracao-realizada">

            <h3>Integra??o ativa</h3>

            <h4>Gostaria de realizar outra integração</h4>

            <button type="submit" class="btn btn-success"><a href="https://auth.mercadolivre.com.br/authorization?response_type=code&client_id=4228219194997851&redirect_uri=https://teste2.pesquisaadv.com.br/__projetos/MARLON/marlon-development/CURL-PHP/redirecionador.php&state=123">Sim</a></button>

            <button type="submit" class="btn btn-danger"><a href="https://teste2.pesquisaadv.com.br/__projetos/MARLON/marlon-development/CURL-PHP/">N?o</a></button>



          </div>

          

          <script>

            // window.onload = function () {

            //   setTimeout(function() {

            //     window.location.href = "http://localhost/CURL-PHP/cadastrocomsucesso.php";

            //   }, 5000);

            // }

          </script>

          <?php unset($_SESSION['integracao']); ?>

        <?php else: ?>

        <legend>Quero Integrar com o Facebook/Instagram ou Meta Verso mais</legend>

        <form>

                    

          <!-- <button type="submit" class="btn btn-primary"><a href="https://auth.mercadolivre.com.br/authorization?response_type=code&client_id=4228219194997851&redirect_uri=https://teste2.pesquisaadv.com.br/__projetos/MARLON/marlon-development/CURL-PHP/redirecionador.php&state=123">Integrar</a></button> -->

          

        </form>

      </div>

      <?php unset($_SESSION['integracao']); ?>

    <?php endif; ?>



    

  

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  



</body>

</html>



<style>

  * {

    padding:0;

    margin:0;

    vertical-align:baseline;

    list-style:none;

    text-decoration: none;

    color: inherit;

    border:0

    }

    a {

      text-decoration: none;

    color: inherit;

    }

  .layout{

  width: 100%;

  height: 100vh;

  left: 0;

  right: 0;

  display: grid;

  place-items: center;

  }

  .conectarml{

    background: #fff;

    width: 500px;

    height: 200px;

    margin-top: -250px;

    padding: 15px;

    border-radius: 5px;

    box-shadow: 0 0 10px 0 #00000070;

    text-align: center;

  }

</style>



