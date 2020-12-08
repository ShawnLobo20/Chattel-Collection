angular.module('myapp',[])
.controller('myctrl',function($scope)
{
    $scope.listProducts=[
        {id:'p01',name:'Samsung Refrigerator, Evoke Inox',price:40000.165,quantity:2},
        {id:'p02',name:'King Size Bed, Godrej',price:35800.778,quantity:3},
        {id:'p03',name:'Oakwook Dual Chairs, Usha Lexus',price:10059.87,quantity:16},
        {id:'p04',name:'Squadro Study Table, Godrej',price:16089.59,quantity:3}
    ];
    $scope.save=function()
    {
        var index=getindex($scope.id);
        $scope.listProducts[index].name=$scope.name;
        $scope.listProducts[index].price=$scope.price;
        $scope.listProducts[index].quantity=$scope.quantity;
    }
    $scope.add=function()
    {
        $scope.listProducts.push({
            id:$scope.id,name:$scope.name,price:$scope.price,quantity:$scope.quantity
        });
    }
    function getindex(id)
    {
        for(var i=0;i<$scope.listProducts.length;i++)
        if($scope.listProducts[i].id==id)
        return i;
        return -1;
    }
    $scope.edit=function(id)
    {
        var index=this.$index;
        var product=$scope.listProducts[index];
        $scope.id=product.id;
        $scope.name=product.name;
        $scope.price=product.price;
        $scope.quantity=product.quantity;
    }
    $scope.delete=function()
    {
        var result=confirm('Are you sure?');
        if(result==true)
        {
            var index=this.$index;
            $scope.listProducts.splice(index,1);
        }
    };
});