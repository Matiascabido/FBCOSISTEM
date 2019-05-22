<div class="side-bar">
    <ul>
        <li class="menu-head">
            FBCO
        <a href="#" class="push_menu"><span class="glyphicon glyphicon-align-justify pull-right"></span></a>
        </li>
        <div class="menu">
            <!-- BANDEJA DE ENTRADA -->
            <?php
            if($enlace_actual == $index){
              ?>
             <li>
                <a href= <?php echo $index ?> class="active">Bandeja de Entrada
                <span class="glyphicon glyphicon-computer-all-in-one pull-right">
                    <i class="material-icons md-18">computer</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $programas ?>>Programas
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">dvr</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $plandecuotas ?>>Plan de Cuotas
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">assignment</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $impresionmasiva ?>>Impresion Masiva
                <span class="glyphicon  glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">print</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $cobranza ?>>Cobranza
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">attach_money </i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $procuracion ?>>Procuracion
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">account_balance</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $reportes ?>>Reportes
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">play_for_work</i>
                </span></a>
            </li>
          <?php  } else 
            ?>
            <!-- PROGRAMAS -->
                <?php
                
            if($enlace_actual == $programas){
              ?>
             <li>
                <a href=<?php echo $index ?> >Bandeja de Entrada
                <span class="glyphicon glyphicon-computer-all-in-one pull-right">
                    <i class="material-icons md-18">computer</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $programas ?> class="active">Programas
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">dvr</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $plandecuotas ?>>Plan de Cuotas
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">assignment</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $impresionmasiva ?>>Impresion Masiva
                <span class="glyphicon  glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">print</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $cobranza ?>>Cobranza
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">attach_money </i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $procuracion ?>>Procuracion
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">account_balance</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $reportes ?>>Reportes
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">play_for_work</i>
                </span></a>
            </li>
          <?php  }else
            ?>
            <!-- PLAN DE CUOTAS -->
              <?php 
              
              if($enlace_actual == $plandecuotas){
              ?>
             <li>
                <a href=<?php echo $index ?> >Bandeja de Entrada
                <span class="glyphicon glyphicon-computer-all-in-one pull-right">
                    <i class="material-icons md-18">computer</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $programas ?>>Programas
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">dvr</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $plandecuotas ?> class="active">Plan de Cuotas
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">assignment</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $impresionmasiva ?>>Impresion Masiva
                <span class="glyphicon  glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">print</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $cobranza ?>>Cobranza
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">attach_money </i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $procuracion ?>>Procuracion
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">account_balance</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $reportes ?>>Reportes
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">play_for_work</i>
                </span></a>
            </li>
          <?php  }
            ?>
            <!-- IMPRESION MASIVA -->
            <?php 
           
                if($enlace_actual == $impresionmasiva){
              ?>
             <li>
                <a href=<?php echo $index ?> >Bandeja de Entrada
                <span class="glyphicon glyphicon-computer-all-in-one pull-right">
                    <i class="material-icons md-18">computer</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $programas ?> >Programas
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">dvr</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $plandecuotas ?>>Plan de Cuotas
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">assignment</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $impresionmasiva ?> class="active">Impresion Masiva
                <span class="glyphicon  glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">print</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $cobranza ?>>Cobranza
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">attach_money </i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $procuracion ?>>Procuracion
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">account_balance</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $reportes ?>>Reportes
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">play_for_work</i>
                </span></a>
            </li>
          <?php  }
            ?>
            <!-- COBRANZA -->
           <?php 
         
            if($enlace_actual == $cobranza){
              ?>
             <li>
                <a href=<?php echo $index ?> >Bandeja de Entrada
                <span class="glyphicon glyphicon-computer-all-in-one pull-right">
                    <i class="material-icons md-18">computer</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $programas ?> >Programas
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">dvr</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $plandecuotas ?>>Plan de Cuotas
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">assignment</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $impresionmasiva ?>>Impresion Masiva
                <span class="glyphicon  glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">print</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $cobranza ?> class="active">Cobranza
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">attach_money </i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $procuracion ?>>Procuracion
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">account_balance</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $reportes ?>>Reportes
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">play_for_work</i>
                </span></a>
            </li>
          <?php  }
            ?>
            <!-- PROCURACION -->
            <?php 
         
            if($enlace_actual == $procuracion){
              ?>
             <li>
                <a href=<?php echo $index ?> >Bandeja de Entrada
                <span class="glyphicon glyphicon-computer-all-in-one pull-right">
                    <i class="material-icons md-18">computer</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $programas ?> >Programas
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">dvr</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $plandecuotas ?>>Plan de Cuotas
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">assignment</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $impresionmasiva ?>>Impresion Masiva
                <span class="glyphicon  glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">print</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $cobranza ?>>Cobranza
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">attach_money </i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $procuracion ?> class="active">Procuracion
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">account_balance</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $reportes ?>>Reportes
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">play_for_work</i>
                </span></a>
            </li>
          <?php  }
            ?>
            <!-- REPORTES -->
            <?php
            
             if($enlace_actual == $reportes){
              ?>
             <li>
                <a href=<?php echo $index ?> >Bandeja de Entrada
                <span class="glyphicon glyphicon-computer-all-in-one pull-right">
                    <i class="material-icons md-18">computer</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $programas ?> >Programas
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">dvr</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $plandecuotas ?>>Plan de Cuotas
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">assignment</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $impresionmasiva ?>>Impresion Masiva
                <span class="glyphicon  glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">print</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $cobranza ?>>Cobranza
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">attach_money </i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $procuracion ?>>Procuracion
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">account_balance</i>
                </span></a>
            </li>
            <li>
                <a href=<?php echo $reportes ?> class="active">Reportes
                <span class="glyphicon glyphicon-hcomputer-all-in-one pull-right">
                    <i class="material-icons md-18">play_for_work</i>
                </span></a>
            </li>
          <?php }
            ?>
        </div>
    </ul>
</div>