app.controller('index', function($scope, $rootScope, $http) {
	$rootScope.titulo = "Variables iniciales";
    $scope.showGrap=false;

	var tap=0;
    $scope.submitForm = function (formData){

    }
});

////graph

/*$scope.showGrap=true;
    	//datos=formData['satisClient'];

		if(tap==0){
			tap=1;
		}

        var densityCanvas = document.getElementById("grafico");


        var satisData = {
            label: 'Linea base',
            data: [formData['satisClient'], formData['timeEntre'], formData['satisWork']],
            backgroundColor: 'gray',
            borderWidth: 0,
            yAxisID: "y-axis-satis"
        };

        var resulData = {
            label: 'Resultado ideal',
            data: [70,70,70],
            backgroundColor: 'blue',
            borderWidth: 0,
            yAxisID: "y-axis-resul"
        };

        var metaData = {
            label: 'Meta',
            data: [80,80,80],
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
*/