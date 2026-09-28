<?php 
    /* pega o valor da classe */
    /* a classe retorna tudo que tem no banco */
    $usuariosOnline = Painel::listarUsuariosOnline();
?>
<div class="box-content w100">
    <h2><i class="fa-solid fa-house"></i> Painel de controle - maiquel</h2>

    <!-- box de metricas -->
    <div class="box-metricas">
        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Usuários online</h2>
                <p><?php echo count($usuariosOnline);?></p>
            </div>
        </div>

        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Total de visitas</h2>
                <p>100</p>
            </div>
        </div>

        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Visitas hoje</h2>
                <p>3</p>
            </div>
        </div>

        <div class="clear"></div>
    </div>
</div>

<div class="box-content w100">
    <!-- sistema de usuarios online -->
    <h2><i class="fa-solid fa-globe"></i> Usuaríos Online</h2>

    <div class="table-responsive">
        <div class="row">
            <div class="col">
                <span>IP</span>
            </div>
            <div class="col">
                <span>Última Ação</span>
            </div>
            <div class="clear"></div>
        </div>
        <!-- percorre todo o array -->
        <?php foreach($usuariosOnline as $key => $value){?>
        <div class="row">
            <div class="col">
                <!-- pega o valor do ip e printa na tela -->
                <span><?php echo $value['ip']; ?></span>
            </div>
            <div class="col">
                <!-- pega o valor da ultima acao e printa na tela -->
                <span><?php echo date('d/m/Y H:m:s',strtotime($value['ultima_acao'])) ?></span>
            </div>
            <div class="clear"></div>
        </div>
        <?php } ?>
    </div>
</div>