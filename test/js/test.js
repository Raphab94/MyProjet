// PSEUDO-CODE : 

// LES DIFFÉRENTES ÉTAPES DU PROGRAMME : 
// L'étape 1 : 
// L'utilisateur clique sur l'image
// L'étape 2 :
// Ca change d'image par la suivante
// Les images doivent rester dans l'ordre
// Ainsi de suite... (Jusqu'à ce qu'on arrive à l'image 5)
// L'étape 3 (PROBLÈME) : 
// Lorsqu'on arrive à l'image 5, il faut revenir à la 1ère image


// console.log() !!!!!

// 1. Récupérer les elements 
// container
// img


let container = document.querySelector('.container');
let image = container.querySelector('img');

let counter = 1;
// 2. Manipuler les elements
// L'étape 1 : 
//.addEventListener(1, 2)
container.addEventListener('click', function() {
    // L'étape 2 :
    if (counter == 20) {
        counter = 1;
    } else {
        counter++;
        //counter = counter + 1;
    }
    // Modifier la source
    //image.src = `./images/image_${i}.jpg`;
    image.src = 'assets/image' + counter + '.jpeg';
});

let container1 = document.querySelector('.container1');
let image1 = container1.querySelector('img');
let counter1 = 1;

container1.addEventListener('click', function() {
    if (counter1 == 20) {
        counter1 = 1;
    } else {
        counter1++;
    }
    image1.src = 'assets/image' + counter1 + '.jpeg';
});

let container2 = document.querySelector('.container2');
let image2 = container2.querySelector('img');

let counter2 = 1;

container2.addEventListener('click', function() {
    if (counter2 == 20) {
        counter2 = 1;
    } else {
        counter2++;
    }
    image2.src = 'assets/image' + counter2 + '.jpeg';
});

let container3 = document.querySelector('.container3');
let image3 = container3.querySelector('img');

let counter3 = 1;

container3.addEventListener('click', function() {
    if (counter2 == 20) {
        counter2 = 1;
    } else {
        counter3++;
    }
    image3.src = 'assets/image' + counter3 + '.jpeg';
});

let container4 = document.querySelector('.container4');
let image4 = container4.querySelector('img');

let counter4 = 1;

container4.addEventListener('click', function() {
    if (counter4 == 20) {
        counter4 = 1;
    } else {
        counter4++;
    }
    image4.src = 'assets/image' + counter4 + '.jpeg';
});
let container5 = document.querySelector('.container5');
let image5 = container5.querySelector('img');

let counter5 = 1;

container5.addEventListener('click', function() {
    if (counter5 == 20) {
        counter5 = 1;
    } else {
        counter5++;
    }
    image5.src = 'assets/image' + counter5 + '.jpeg';
});

let container6 = document.querySelector('.container6');
let image6 = container6.querySelector('img');

let counter6 = 1;

container6.addEventListener('click', function() {
    if (counter6 == 20) {
        counter6 = 1;
    } else {
        counter6++;
    }
    image6.src = 'assets/image' + counter6 + '.jpeg';
});

let container7 = document.querySelector('.container7');
let image7 = container7.querySelector('img');

let counter7 = 1;

container7.addEventListener('click', function() {
    if (counter7 == 20) {
        counter7 = 1;
    } else {
        counter7++;
    }
    image7.src = 'assets/image' + counter7 + '.jpeg';
});

