var MeApp = angular.module('Jr', []);

MeApp.controller('ctrlr', function($scope, $http) {

    
 $scope.loadData = function(){
    $http.get('test.php')
       .then(function(result){
          $scope.y = result.data;                
        });
 };
      
   
      

    
$scope.insertData = function(){
    var config = {
        method : 'POST',
        url: 'insert.php',
        data: {
            'f' : $scope.fname,
            'm' : $scope.mname,
            'l' : $scope.lname,
            'g' : $scope.gender,
            'd' : $scope.dob,
            'a' : $scope.addr,
          
    }
    };
    var request = $http(config);
    
};
    $scope.checkData = function(){
    var config = {
        method : 'POST',
        url: 'check.php',
        data: {
            
            'uf' : $scope.ufname,
            'ul' : $scope.ulname
    }
    };
    var request = $http(config);
        console.log(config.data);
    $http.get('check.php')
       .then(function(result){
            $scope.bb = result.data;             
        });    
    
}
    
    
});