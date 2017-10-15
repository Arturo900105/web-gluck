<div class="container-fluid text-center d-none d-md-block">
    <div class="container">
        <div id="original-nav" class="row align-items-center pt-2 pb-0 mb-0">
            <div class="col-md-5 bg-green-gluck logo-gluck">
                <a href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url('assets/img/Iconos-01.svg'); ?>" alt="Gluck">
                </a>
            </div>
            <div class="row col-md-7 ml-1">
                <a href="<?php echo base_url('nosotros'); ?>"
                   class="col-md-4 pt-2 pb-2 m-button ancla <?php echo isset($nosotros) ? 'b-activo' : '' ?>">
                    <strong class="font-assassin h4 m-0 font-weight-bold">Nosotros</strong>
                    <div class="x-small">Conócenos un poco</div>
                </a>
                <a href="<?php echo base_url('contacto'); ?>"
                   class="col-md-4 pt-2 pb-2 m-button ancla <?php echo isset($contacto) ? 'b-activo' : '' ?>">
                    <strong class="font-assassin h4 m-0 font-weight-bold">Contacto</strong>
                    <div class="x-small">Pregunta por nosotros</div>
                </a>
                <a href="<?php echo base_url('eventos'); ?>"
                   class="col-md-4 pt-2 pb-2 m-button ancla <?php echo isset($eventos) ? 'b-activo' : '' ?>">
                    <strong class="font-assassin h4 m-0 font-weight-bold">Eventos</strong>
                    <div class="x-small">Organizamos tus eventos</div>
                </a>
                <a href="<?php echo base_url('banquetes'); ?>"
                   class="col-md-4 pt-2 pb-2 m-button ancla <?php echo isset($banquetes) ? 'b-activo' : '' ?>">
                    <strong class="font-assassin h4 m-0 font-weight-bold">Banquetes</strong>
                    <div class="x-small">Todo para tus banquetes</div>
                </a>
                <a href="<?php echo base_url('congresos'); ?>"
                   class="col-md-4 pt-2 pb-2 m-button ancla <?php echo isset($congresos) ? 'b-activo' : '' ?>">
                    <strong class="font-assassin h4 m-0 font-weight-bold">Congresos</strong>
                    <div class="x-small">Organizamos congresos</div>
                </a>
                <a href="<?php echo base_url('sociales'); ?>"
                   class="col-md-4 pt-2 pb-2 m-button ancla <?php echo isset($sociales) ? 'b-activo' : '' ?>">
                    <strong class="font-assassin h4 m-0 font-weight-bold">Sociales</strong>
                    <div class="x-small">Eventos sociales</div>
                </a>
            </div>
        </div>
    </div>
</div>