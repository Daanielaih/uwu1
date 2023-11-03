<?php 

require_once 'header.html';
require_once 'navbar.html';

?>


<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">
    <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">
    Abrir Eventos
    </a>
    </div>


    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
    ...
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>


</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 90%;">
    <div class="modal-content modal-eventos">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eventos</h5>
        <button type="button" class="btn btn-primary" id="agregarEventoBtn">Agregar Evento</button>
      </div>
      <div class="modal-body">
        <table id="miTabla" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Fecha de Creación</th>
              <th>Estado del Evento</th>
              <th>Ver Detalles</th>
              <th>Votar </th>
            </tr>
          </thead>
          <tbody>
            <!-- Datos de ejemplo -->
            <tr>
        <td>1</td>
        <td>Evento 1</td>
        <td>2023-09-11</td>
        <td>Activo</td>
        <td><a href="detalles_evento.php?eventoId=1" class="btn btn-primary">Ver Detalles</a></td>
        <td><a href="votar.php?eventoId=1" class="btn btn-success">Votar</a></td>
        </tr>
        <tr>
        <td>2</td>
        <td>Evento 2</td>
        <td>2023-09-12</td>
        <td>Inactivo</td>
        <td><a href="detalles_evento.php?eventoId=2" class="btn btn-primary">Ver Detalles</a></td>
        <td><a href="votar.php?eventoId=1" class="btn btn-success">Votar</a></td>
    </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="agregarEventoModal" tabindex="-1" aria-labelledby="agregarEventoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarEventoModalLabel">Agregar Evento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
  <form id="agregarEventoForm">
    <div class="mb-3">
      <label for="eventoId" class="form-label">ID</label>
      <input type="text" class="form-control" id="eventoId" name="eventoId">
    </div>
    <div class="mb-3">
      <label for="eventoNombre" class="form-label">Nombre del Evento</label>
      <input type="text" class="form-control" id="eventoNombre" name="eventoNombre">
    </div>
    <div class="mb-3">
      <label for="eventoFecha" class="form-label">Fecha de Creación</label>
      <input type="date" class="form-control" id="eventoFecha" name="eventoFecha">
    </div>
    <input type="hidden" id="eventoEstado" name="eventoEstado" value="">
    <div class="mb-3">
      <label class="form-label">Participantes</label>
      <input type="text" class="form-control mb-2" id="participante1" name="participante1" placeholder="Participante 1">
      <input type="text" class="form-control mb-2" id="participante2" name="participante2" placeholder="Participante 2">
      <input type="text" class="form-control mb-2" id="participante3" name="participante3" placeholder="Participante 3">
    </div>
    <div class="mb-3">
      <label for="eventoTag" class="form-label">Tag del Evento</label>
      <select class="form-select" id="eventoTag" name="eventoTag">
        <option value="Eliminación">Eliminación</option>
        <option value="Nominación">Nominación</option>
        <option value="Ganador del Evento">Ganador del Evento</option>
      </select>
    </div>
  </form>
</div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="guardarEventoBtn">Guardar</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal para votar -->
<div class="modal fade" id="votarModal" tabindex="-1" aria-labelledby="votarModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="votarModalLabel">Votar en el Evento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>



<script>
  $(document).ready(function () {
  $('#agregarEventoBtn').click(function () {
    $('#agregarEventoModal').modal('show');
  });

  $('#guardarEventoBtn').click(function () {
    const eventoId = $('#eventoId').val();
    const eventoNombre = $('#eventoNombre').val();
    const eventoFecha = $('#eventoFecha').val();
    const eventoEstado = 'Activo'; 
    const participante1 = $('#participante1').val();
    const participante2 = $('#participante2').val();
    const participante3 = $('#participante3').val();
    const eventoTag = $('#eventoTag').val();


    const newRow = [
      eventoId,
      eventoNombre,
      eventoFecha,
      eventoEstado, 
      '<button class="btn btn-primary ver-detalles" data-bs-toggle="modal" data-bs-target="#verDetallesModal">Ver Detalles</button>',
      '<button class="btn btn-success votar" data-bs-toggle="modal" data-bs-target="#votarModal">Votar</button>',
      participante1,
      participante2,
      participante3,
      eventoTag,
    ];

    const tabla = $('#miTabla').DataTable();
    tabla.row.add(newRow).draw();

    $('#agregarEventoModal').modal('hide');
  });

  // Evento cuando se dibuja la tabla
  var tabla = $('#miTabla').DataTable();
  tabla.on('draw.dt', function () {
    tabla.rows().every(function () {
      var data = this.data();
      var estado = data[3]; 

      if (estado === 'Inactivo') {
        $(this.node()).addClass('fila-inactiva');
        $(this.node()).find('.ver-detalles').data('Inactivo', true);
        $(this.node()).find('.votar').data('Inactivo', true);
      } else {
        $(this.node()).removeClass('fila-inactiva');
        $(this.node()).find('.ver-detalles').data('Inactivo', false);
        $(this.node()).find('.votar').data('Inactivo', false);
      }
    });
  });

  $('#miTabla').on('click', '.ver-detalles, .votar', function () {
    var Inactivo = $(this).data('Inactivo');
    if (Inactivo) {
      return false;
    }
  });

  const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    loop: true,

    pagination: {
      el: '.swiper-pagination',
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
});

</script>
