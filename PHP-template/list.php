<!-- Conteudo -->
<section class="content">
  <div class="container">

    <!-- Título da pagina -->
    <h2 class="title my-4 text-center">Lista de Profissionais</h2>

    <!-- Card de conteudo -->
    <div class="card mb-4">
      <div class="card-body col-12  ">

        <span id="content"></span>

      </div>
    </div>

  </div>
</section>


<script>
  var amount_result_per_page = 10; //quantidade de registro por página
  var page = 1; //página inicial
  var state = '<?= $_POST['states'] ?>';
  var city = '<?= $_POST['cities'] ?>';
  var formation = '<?= $_POST['formations'] ?>';

  $(document).ready(function() {
    list_users(page, amount_result_per_page); //Chamar a função para listar os registros
  });

  function list_users(page, amount_result_per_page) {
    var data = {
      page: page,
      amount_result_per_page: amount_result_per_page,
      state: state,
      city: city,
      formation: formation
    }

    $.post('listusers.php', data, function(htmlreturn) {
      $("#content").html(htmlreturn);
    });
  }
</script>