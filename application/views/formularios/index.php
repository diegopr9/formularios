

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">

            <h2>
              <?php echo "FORMATO DE INSPECCIÓN VISUAL GENERAL"; ?>
            </h2>
            <h2>
              <?php echo "ESTÁNDARES NORMATIVAS & INSPECCIÓN ENII S.A. "; ?>
            </h2>
            <ul class="header-dropdown m-r--5">

              <div class="logo ia-front-logo">
              <br/>
              <?php
                $logo = getSetting('logo');
                if ($logo != '') {
                ?>
                  <img src="<?php echo iaBase() . 'assets/images/' . $logo; ?>" id="logo">
                <?php } else { ?>
                  <h2>
                    <strong> <?php echo getSetting('website'); ?> </strong>
                  </h2>
                <?php } ?>
                
              </div>


            </ul>
          </div>

        </div>

        <form>
          <h4>PARA USO EXCLUSIVO DE ENII</h4>



          <div class="col-xs-4">
            <label for="ex1">Empresa</label>
            <input class="form-control" id="ex1" type="text" placeholder="Nombre de la empresa" required autofocus>
          </div>
          <div class="col-xs-4">
            <label for="ex2">Representante de la empresa</label>
            <input class="form-control" id="ex2" type="text" placeholder="Nombre del representante legal de la empresa" required autofocus>
          </div>
          <div class="col-xs-4">
            <label for="ex3">Lugar de inspección</label>
            <input class="form-control" id="ex3" type="text" placeholder="Lugar de la inspección" required autofocus>
          </div>

          <div class="col-xs-4">
            <label for="ex3">Nombre del inspector</label>
            <input class="form-control" id="ex3" type="text" placeholder="Nombre del Inspector" required autofocus>
          </div>

          <div class="col-xs-4">
            <label for="ex3">Fecha de inspección</label>
            <input class="form-control" id="ex3" type="text" placeholder="Fecha de inspección" required autofocus>
          </div>

         

          <div class="col-xs-4">
            <label for="ex3">Hora Inicio</label>
            <input class="form-control" id="ex3" type="text" placeholder="Hora de inicio de inspección" required autofocus>
          </div>

          <div class="col-xs-4">
            <label for="ex3">Hora Fin</label>
            <input class="form-control" id="ex3" type="text" placeholder="Hora de fin de inspección" required autofocus>
          </div>

         

          <div class="col-xs-12">
              <button class="btn btn-lg btn-primary btn-block" type="submit">Guardar</button>
          </div>

      </form>
      </div>

    </div>
  </div>
  </div>