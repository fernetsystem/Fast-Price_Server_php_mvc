
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.3.2/js/conekta.js"></script>
  <script type="text/javascript">

  // Conekta Public Key
  Conekta.setPublishableKey('key_D644HY4sgXBs6qySyYqWZXg');
 
  // ...
  </script>

<div class="container">
  <h1>Fast Price<small> Formato de pago</small></h1>
  <p class="label label-danger">El pago es anual del servicio por $12,287.00</p>
  <br/><br/>
  <div class="panel panel-info">
  <div class="panel-heading">Su servicio esta vencido o se encuentra en espera.</div>
  <div class="panel-body">
    <form action="ck/process_payment.php" method="POST" id="card-form">
      <span class="card-errors"></span>
      <div class="form-row">
        <label>
          <span>Nombre del propietario de la tarjeta:</span>
          <input type="text" size="20" placeholder="Ingrese su nombre" data-conekta="card[name]"/>
        </label>
      </div>
      <div class="form-row">
        <label>
          <span>Número de tarjeta de crédito:</span>
          <input type="text" size="20" placeholder="454544487672422432" data-conekta="card[number]"/>
        </label>
      </div>
      <div class="form-row">
        <label>
          <span>CVC:</span>
          <input type="text" size="4" placeholder="044" data-conekta="card[cvc]"/>
        </label>
      </div>
      <div class="form-row">
        <label>
          <span>Fecha de expiración (Mes/Año):</span>
          <input type="text" size="2" placeholder="01" data-conekta="card[exp_month]"/>
        </label>
        <span>/</span>
        <input type="text" size="4" placeholder="2020" data-conekta="card[exp_year]"/>
      </div>
      <button type="submit" class="btn btn-primary">Realizar pago se servicio</button>
    </form>
  </div>
</div>
<script>
    jQuery(function($) {
  $("#card-form").submit(function(event) {
    var $form;
    $form = $(this);

    
/* Previene hacer submit más de una vez */

    $form.find("button").prop("disabled", true);
    Conekta.token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);

    
/* Previene que la información de la forma sea enviada al servidor */

    return false;}
  });
});
  var conektaSuccessResponseHandler = function(token) {
  var = $("#card-form");

  /* Inserta el token_id en la forma para que se envíe al servidor */
  $form.append($("<input type='hidden' name='conektaTokenId'>").val(token.id));
 
  /* and submit */
  $form.get(0).submit();
};
var conektaErrorResponseHandler = function(response) {
  var $form = $("#card-form");
  
  /* Muestra los errores en la forma */
  $form.find(".card-errors").text(response.message);
  $form.find("button").prop("disabled", false);
};
</script>
