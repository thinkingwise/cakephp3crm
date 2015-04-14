/**
 * Created by darren on 5/04/2015.
 */
//alert("hello");

    /*
var app = angular.module('myApp', []);
app.controller('formCtrl', function($scope) {
    $scope.total_products = 0;
    $scope.total_shipping = 0;
    $scope.total_discount = 0;
});
*/


$(document).ready(function(){
    $('add-product').css('background-color', 'green');

    $('.add-product').click(function(){
        $('.add-row').css('display', 'block');
    });
});