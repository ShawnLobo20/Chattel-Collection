  
angular.module("MyApp",[])
.controller("MyCtrl",function($scope)
{
    var employees=[
        {name:'King Size Bed',brand:'Godrej Interio', dob:new Date("July 21,2020"),type:"Furniture",price:35800.778},
        {name:'Double Oakwook Chairs',brand:'Usha Lexus Furniture', dob:new Date("July 20,2020"),type:"Furniture",price:10059.87},
        {name:'Samsung 192 Litres Single Door Refigerator, Elegent Inox',brand:'Samsung', dob:new Date("November 19,2019"),type:"Appliance",price:40000.165},
        {name:'Squadro Study Table',brand:'Godrej Interio', dob:new Date("August 21,2019"),type:"Furniture",price:16089.59},
        {name:'Philips 25 Litres oven toaster grill',brand:'Philips', dob:new Date("December 5,2020"),type:"Appliance",price:5361.763}
    ];
    console.log(employees);
    $scope.employees=employees;
    $scope.rowlimit=5;
});