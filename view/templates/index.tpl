<div  class="columna-6">
    <div class="card">
        <div class="card-encabezado">
            <h4 class="titulo">Indicadores de Rendimiento Clave</h4>
            <p class="categoria">Introducir indicadores de medición</p>
        </div>
        <div class="card-contenido tabla-responsive">
            <form name="indi" novalidate>
                <div class="columna-4">
                    <div class="form-grupo form-texto-animado">
                        <input type="text" class="input-text" required name="satisClient" ng-model="formData.satisClient" ng-pattern="/^[0-9.]*$/">
                        <label for="nombre">% satisfacción cliente interno</label>
                        <span ng-show="!indi.$pristine && indi.satisClient.$error.required" class="error letra">campo requerido</span>
                        <span ng-show="!indi.$pristine && indi.satisClient.$error.pattern" class="error letra">solo números</span>
                    </div>
                </div>
                <div class="columna-4">
                    <div class="form-grupo form-texto-animado">
                        <input type="text" class="input-text" required name="timeEntre" ng-model="formData.timeEntre" ng-pattern="/^[0-9.]*$/">
                        <label for="cuanta" >% tiempos de entrega</label>
                        <span ng-show="!indi.$pristine && indi.timeEntre.$error.required" class="error letra">Campo requerido</span>
                        <span ng-show="!indi.$pristine && indi.timeEntre.$error.pattern" class="error letra">solo números</span>
                    </div>
                </div>
                <div class="columna-4">
                    <div class="form-grupo form-texto-animado">
                        <input type="text" class="input-text" required name="satisWork" ng-model="formData.satisWork" ng-pattern="/^[0-9.]*$/">
                        <label for="correoIns" >% indice de satisfacción laboral</label>
                        <span ng-show="!indi.$pristine && indi.satisWork.$error.required" class="error letra">Campo requerido</span>
                        <span ng-show="!indi.$pristine && indi.satisWork.$error.pattern" class="error letra">solo números</span>
                    </div>
                </div>
                <button type="submit" class="btn form odoo pull-right" ng-click="submitForm(formData)" ng-disabled="!indi.$valid">
                    <i class="fa fa-area-chart"></i>
                    Graficar
                </button>
            </form>
        </div>
    </div>
</div>


<div  class="columna-6">
    <div class="card">
        <div class="card-encabezado">
            <h4 class="titulo">Historial indicadores de Rendimiento Clave</h4>
            <p class="categoria">Indicadores de medición</p>
        </div>
        <div class="card-contenido tabla-responsive">
            <table class="tabla" ng-show="solicitudes.length">
                <thead style="text-align:center">
                    <th>Fecha de registro</th>
                    <th></th>
                    <th>Tipo</th>
                </thead>
                <tbody>
                    <tr ng-click="cuentaVa(s.cuenta,s.fechEnvio,s.estado,s.id)" ng-repeat="s in solicitudes">
                        <td>{{ s.cuenta }}</td>
                        <td class="tdNombre">{{ s.nombre }}</td>
                        <td ng-if="s.estado==1">Práctica</td>
                        <td ng-if="s.estado==4">Egresado</td>
                        <td ng-if="s.estado==10">40 Horas</td>
                        <td><i class="fa fa-eye fa-2x"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="card" ng-show="showGrap">
    <div class="card-encabezado">
        <h4 class="titulo">KPI</h4>
    </div>
    <div class="columna-12">
        <div class="card-contenido">
            <div class="columna-12">
                <canvas id="grafico" class="grafico" width="100%" height="40%"></canvas>
            </div>
        </div>
    </div>
</div>




<style>
  .error {
    color: red;
  }

  .warning {
    color: #ffcc00;
  }

  .letra {
    font-size: 13px;
  }
</style>