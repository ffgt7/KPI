app.controller('index', function($scope, $rootScope, $http) {
	$rootScope.titulo = "Variables iniciales";
    $scope.showGrap=false;
    $scope.formData = {};

    var listVaria;

    cargarData();
    function cargarData(){
        $http({
            method: "POST",
            url: "services/selectData.php",
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8'
            }
        }).then(
            function success(response) {
                $scope.dataResult = response.data;
            },
            function error(response) {
                alert('Se produjo un error');
            }
        );
    }


    $http({
        method: "POST",
        url: "services/selectVaria.php",
        //data:$.param(formData),
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8'
        }
    }).then(
        function success(response) {
            $scope.variables= response.data;
            $rootScope.listVaria= response.data;
        },
        function error(response) {
            alert('Se produjo un error al cargar las variables');
        }
    );

    $scope.submitForm = function (formDat){
        mostrar=formDat['resp2'];
        $http({
            method: "POST",
            url: "services/insertVaria.php",
            data:$.param(formDat),
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8'
            }
        }).then(
            function success(response) {
                alert('Datos guardados correctamente');
                cargarData();
            },
            function error(response) {
                alert('Se produjo un error al cargar las variables');
            }
        );
    }

    var tap=0;
    $scope.madeGraph=function (var1,var2,var3,ideal,meta) {
        $scope.showGrap=true;

        if(tap==0){
            tap=1;
        }

        var densityCanvas = document.getElementById("grafico");


        var satisData = {
            label: 'Linea base',
            data: [var1,var2,var3],
            backgroundColor: 'gray',
            borderWidth: 0,
            yAxisID: "y-axis-satis"
        };

        var resulData = {
            label: 'Resultado ideal',
            data: [ideal,ideal,ideal],
            backgroundColor: 'blue',
            borderWidth: 0,
            yAxisID: "y-axis-resul"
        };

        var metaData = {
            label: 'Meta',
            data: [meta,meta,meta],
            backgroundColor: 'green',
            borderWidth: 0,
            yAxisID: "y-axis-meta"
        };

        var planetData = {
            labels: ["Satisfacción cliente interno", "Tiempos de entrega", "Indice de satisfacción laboral"],
            datasets: [satisData, resulData,metaData]
        };

        var chartOptions = {
            scales: {
                xAxes: [{
                    barPercentage: 1,
                    categoryPercentage: 0.6
                }],
                yAxes: [{
                    id: "y-axis-meta"
                }, {
                    id: "y-axis-resul"
                }, {
                    id: "y-axis-satis"
                }]
            }
        };


        if(tap!=1){
            chart.destroy();
        }
        chart = new Chart(densityCanvas, {
            type: 'bar',
            data: planetData,
            options: chartOptions
        });
        tap+=1;
    }


});

////graph

/*
*/