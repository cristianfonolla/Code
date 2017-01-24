/**
 @constructor
 @abstract
 */
var Animal = function() {
    if (this.constructor === Animal) {
        throw new Error("Can't instantiate abstract class!");
    }
    // Animal initialization...
};

/**
 @abstract
 */
Animal.prototype.say = function() {
    throw new Error("Abstract method!");
}

/**
 * Eat some food
 */
Animal.prototype.eat = function() {
    console.log("Animal is eating.");
}








// Dog looks just like it.
var Dog = function() {
    Animal.apply(this, arguments);
};
Dog.prototype = Object.create(Animal.prototype);
Dog.prototype.constructor = Dog;

Dog.prototype.say = function() {
    console.log('bark');

exports.Animal = Animal;
exports.Dog = Dog;